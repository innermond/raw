<?php

/* layouts/main.html */
class __TwigTemplate_ece1c2db5de8bf530afb8211cbc86702bb05c96df8ef4a77b50e62885bb20b6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'slider' => array($this, 'block_slider'),
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
      <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
      <link href=\"css/main.css\" rel=\"stylesheet\">
      <link href=\"css/font-awesome.min.css\" rel=\"stylesheet\">
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
      <header>
         <div class=\"header-bg\">
            <div class=\"container\">
               <nav class=\"navbar navbar-default\">
                  <div class=\"clearfix\">
                     <!-- Brand and toggle get grouped for better mobile display -->
                     <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"/\"><img src=\"images/logo.png\" alt=\"logo\"></a>
                        <h2>HOTLINE Pizza: 021 22 97 64</h2>
                     </div>
                     <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav navbar-right\">
                           <li><a href=\"/pizza\">Pizza</a></li>
                           <li class=\"active\"><a href=\"/paste-salate\">Paste &amp; Salate</a></li>
                           <li><a href=\"/oferte\">Oferte</a></li>
                           <li><a href=\"/comenzi\">Comenzi</a></li>
                        </ul>
                     </div>
                     <!-- /.navbar-collapse -->
                  </div>
                  <!-- /.container-fluid -->
               </nav>
            </div>
         </div>
         ";
        // line 54
        $this->displayBlock('slider', $context, $blocks);
        // line 55
        echo "      </header>
      <main>
         <div class=\"container\">
           <div class=\"row\">
           ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "           </div>
         </div><!--//container end//-->
      </main>
      <footer>
         <div class=\"container\">
            <div class=\"stamped-heading\">
               <h5>Contact</h5>
            </div>
            <div class=\"row\">
               <div class=\"col-sm-6\">
                  <h6>Adresa</h6>
                  <p>Str. Maior Alexandru Câmpeanu nr 37,
                     Bucuresti, Romania
                  </p>
                  <p>Tel: + 021 22 97 64
                     Email: office@pizzaf1.ro
                  </p>
                  <p><span class=\"link\"><a href=\"#\">Google Maps</a></span>
                     <span class=\"link\"><a href=\"#\">Download direction</a></span>
                  </p>
                  <p class=\"more-margin\">Suntem acasă de luni până vineri, între 10.00 şi 22.00.
                  </p>
                  <p class=\"social\">
                     <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                     <a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                     <a href=\"#\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a>
                     <a href=\"#\"><i class=\"fa fa-youtube-play\" aria-hidden=\"true\"></i></a>
                  </p>
               </div>
               <div class=\"col-sm-6\">
                  <h6>Trimite-ne o sugestie!</h6>
                  <form>
                     <fieldset class=\"row\">
                        <fieldset class=\"col-sm-6\">
                           <label>Nume</label>
                           <input type=\"text\" class=\"form-control\">
                        </fieldset>
                        <fieldset class=\"col-sm-6\">
                           <label>Email</label>
                           <input type=\"email\" class=\"form-control\">
                        </fieldset>
                        <fieldset class=\"col-sm-6\">
                           <label>Telefon</label>
                           <input type=\"text\" class=\"form-control\">
                        </fieldset>
                        <fieldset class=\"col-sm-12\">
                           <label>Mesaj</label>
                           <textarea class=\"form-control\"></textarea>
                        </fieldset>
                     </fieldset>
                     <fieldset class=\"button\">
                        <input type=\"submit\" class=\"btn btn-danger\" value=\"Trimite\">
                     </fieldset>
                  </form>
                  <div class=\"copy\">
                     <p><a href=\"/\">PizzaF1</a> &copy; 2017 - Toate drepturile rezervate</p>
                  </div>
               </div>
            </div>
            <div class=\"row\">
               <div class=\"col-sm-12 small-info\">
Pizza F1 livreaza in Bucuresti sectoarele 1 si 6 si in zona limitrofa acestora. Zona de livrare gratuita limitata. Detalii despre zonele de livrare si tarife pe www.pizzaf1.ro sau la telefon. Pentru comenzile cu valoare mai mica de 30 lei se aplica un tarif suplimentar de 5 lei la totalul comenzii. O comanda poate contine mai multe oferte dar discounturile nu sunt cumulative. Comanda minima pentru livrare: 1 pizza de 30cm / 40cm, 2 pizza de 25 cm sau 30 lei pentru oricare alte produse. Nu se livreaza comenzi ce contin doar bauturi si / sau desert si / sau sosuri. Firma isi rezerva dreptul de a modifica preturile. Preturi valabile incepand cu iulie 2017. Plata se poate efectua numerar. In functie de conditiile meteo si de trafic, firma isi rezerva dreptul de a limita sau suspenda temporar serviciul de livrare. Fotografiile sunt reale.
              </div>
            </div>
         </div>
         <div class=\"after-footer\">
            <div class=\"container\">
               <a href=\"/lista-alergeni\">Lista de alergeni </a>
               <a download href=\"/descarca-meniu\">Download Meniu PDF</a>
            </div>
         </div>
      </footer>
      <!-- jQuery first, then Bootstrap JS. -->
      <script src=\"js/jquery.min.js\"></script>
      <script src=\"js/bootstrap.min.js\"></script>
   </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 54
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts/main.html";
    }

    public function getDebugInfo()
    {
        return array (  181 => 59,  176 => 54,  171 => 8,  90 => 60,  88 => 59,  82 => 55,  80 => 54,  31 => 8,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/main.html", "/home/userescu/Projects/pf1/src/templates/layouts/main.html");
    }
}
