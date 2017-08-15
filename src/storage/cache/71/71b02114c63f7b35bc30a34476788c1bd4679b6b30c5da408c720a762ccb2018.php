<?php

/* partials/slider.html */
class __TwigTemplate_4d740ba21b8b73fd8b7bba341af71d31a9d2546b08ab9111bf4910d109f0cf6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"slider-bg\">
  <div class=\"inner-slider\">
     <div class=\"container\">
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
          <!-- Indicators -->
          <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
          </ol>
           <!-- Wrapper for slides -->
           <div class=\"carousel-inner\" role=\"listbox\">
              <div class=\"item active clearfix\">
                 <img src=\"images/slider-image.png\" class=\"main-img\" alt=\"image\">
                 <div class=\"carousel-caption\">
                    <h3>The taste<br> <span>comes in</span><br> <span>pole position</span></h3>
                 </div>
                 <div class=\"pizza clearfix\">
                    <img src=\"images/slider-image-1.png\" alt=\"image\">
                    <div class=\"text-slider\">
                       <p>Comandă 2 x Pizza Diavola şi<br>
                          primeşti un Pepsi la 1L GRATUIT
                       </p>
                    </div>
                 </div>
              </div>
              <div class=\"item clearfix\">
                 <img src=\"images/slider-image.png\" class=\"main-img\" alt=\"image\">
                 <div class=\"carousel-caption\">
                    <h3>The taste<br> <span>comes in</span><br> <span>pole position</span></h3>
                 </div>
                 <div class=\"pizza clearfix\">
                    <img src=\"images/slider-image-1.png\" alt=\"image\">
                    <div class=\"text-slider\">
                       <p>Comandă 2 x Pizza Diavola şi<br>
                          primeşti un Pepsi la 1L GRATUIT
                       </p>
                    </div>
                 </div>
              </div>
           </div>
            <!-- Controls -->
            <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
              <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
              <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Next</span>
            </a>
        </div>
     </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/slider.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/slider.html", "/home/userescu/Projects/pf1/src/templates/partials/slider.html");
    }
}
