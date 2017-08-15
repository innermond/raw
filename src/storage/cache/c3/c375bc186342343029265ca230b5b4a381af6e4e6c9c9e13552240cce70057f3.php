<?php

/* admin/plain.html */
class __TwigTemplate_5778893307c43bc184831759c8a8215771e186bc3a3377ac0d3cd2d6e34ec297 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
   <head>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
      <!-- Bootstrap -->
      <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
      <link href=\"/css/main.css\" rel=\"stylesheet\">
      <link href=\"/css/font-awesome.min.css\" rel=\"stylesheet\">
      <link href=\"https://fonts.googleapis.com/css?family=Satisfy\" rel=\"stylesheet\">
      <link href=\"https://fonts.googleapis.com/css?family=Maitree:400,500,600\" rel=\"stylesheet\">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
      <![endif]-->
   </head>
   <body>
      <main>
         <div class=\"container\">
           <div class=\"row\">
           ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "           </div>
         </div><!--//container end//-->
      </main>
      <!-- jQuery first, then Bootstrap JS. -->
      <script src=\"/js/jquery.min.js\"></script>
      <script src=\"/js/bootstrap.min.js\"></script>
   </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "admin/plain.html";
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  65 => 8,  53 => 27,  51 => 26,  30 => 8,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/plain.html", "/home/userescu/Projects/pf1/src/templates/admin/plain.html");
    }
}
