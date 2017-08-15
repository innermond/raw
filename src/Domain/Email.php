<?php namespace App\Domain;

use App\Domain\Email\Spec as EmailSender;
use App\Domain\Email\SugestionMessage as EmailMessage;

class Email implements Spec {

  private $config;
  private $mail;
	private $message;

  public function __construct(\App\Config\General $config, EmailSender $mail, EmailMessage $message) {
		date_default_timezone_set('Etc/UTC');
    $this->config = $config;
    $this->mail = $mail;
    $this->message = $message;
  }

	private function send($message) {
		$mail = $this->mail;
		$mail->isSMTP();
		// 0 = off (for production use)
		// 2 = client and server messages
		$mail->SMTPDebug = $this->config->DEVELOPMENT ? 2 : 0;
    //$mail->Debugoutput = 'html';
    $cfg = (object) $this->config->Email;
		$mail->Host = $cfg->Host;
		$mail->Port = $cfg->Port;
		$mail->SMTPAuth = $cfg->SMTPAuth;
		$mail->Username = $cfg->Username;
		$mail->Password = $cfg->Password;
		$mail->setFrom($cfg->Username, $cfg->FromTitle);
		$mail->addReplyTo($message->reply, $message->name);
		$mail->addAddress($message->to, $message->name);
		$mail->Subject = $message->subject;
		$mail->msgHTML($message->html);
		$mail->AltBody = $message->alt;
		if (!$mail->send()) {
				return $mail->ErrorInfo;
		} else {
				return '';
		}

	}

	public function __invoke(array $input) : array {
		[$ok, $message] = $this->message->prepare($input);
		if ($ok) {
			$err = $this->send($message);
			$payload = [!$err, $err];
		} else {
      $payload = [$ok, $message, 422/*unprocesable entity*/];
		}
		return compact('payload');
	}
}
