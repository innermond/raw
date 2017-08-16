<?php namespace App\Domain\Email;

class SugestionMessage {

	private $validator;

	public function __construct(\App\Failter $validator) {
		$this->validator = $validator;
	}

	public function prepare(array $input) {
		$fields = ['name', 'phone', 'email', 'message'];
		$params = array_intersect_key($input, array_flip($fields));
		// validation
		$between = function($min, $max, $greedy=true) {
			return function($val) use ($min, $max, $greedy) {
				$len = is_numeric($val) ? $val : strlen($val);
        if($greedy)
          $out = ($min <= $len and $max >= $len) ? $val : false;
        else
          $out = ($min < $len and $max > $len) ? $val : false;
        return $out;
			};
		};
		$this->validator
			->on('name')
			->with($between(5, 100), 'length.between', [5, 100])
			->with('/^[a-z\s]+$/i', 'doar litere și spații sunt acceptabile')
			->with(\FILTER_SANITIZE_STRING)

      ->on('email')
      ->with(\FILTER_VALIDATE_EMAIL, 'adresa furnizată nu e corectă')
			->with(\FILTER_SANITIZE_EMAIL)

			->on('message')
			->with($between(10, 255), 'cantitate problematică de text')
			->with(['filter' => \FILTER_SANITIZE_STRING, 'flags' => \FILTER_FLAG_STRIP_BACKTICK | \FILTER_FLAG_ENCODE_AMP])
      ->with(function($el) {
        $p = preg_replace('/\n{2,}/', '</p><p>', trim($el));
        return "<p>$p</p>";
      })

			->on('phone')
			->with(function($el) {
				$onlynum = \preg_replace('/[^0-9]+/i', '', $el);
				$len = \strlen($onlynum);
				if ($len > 9 and $len < 15) return $onlynum;
			 	return false;
			});

		$filtered =	$this->validator->run($params);
		if ( ! $filtered) return [false, $this->validator->getError()];

		$selected['subject'] = 'Apel website pf1.ro';
		$selected['name'] = $filtered['name'];
		$selected['reply'] = $filtered['email'];
		$selected['to'] = $filtered['email'];
		$selected['html'] = $filtered['message'] . '</br>Telefon: ' . $filtered['phone'];
		$selected['alt'] = $filtered['message'] . "\n\r" .'Telefon: ' . $filtered['phone'];

		$selected = [true, new \ArrayObject($selected, \ArrayObject::ARRAY_AS_PROPS)];
		return $selected;
	}
}
