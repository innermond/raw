<?php

/* partials/oferte.html */
class __TwigTemplate_8ddffcfebe6203d68d0ec9a5acecefcdc471f2ea1ffb7325ef6b9fbcdfeb7eab extends Twig_Template
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
        echo "<div class=\"oferte\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oferte"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 3
            echo "<div class=\"col-xs-12 ccol-sm-12 col-md-6\">
    <img class=\"img-responsive\" src=\"/images/oferte/";
            // line 4
            echo $context["img"];
            echo "\" alt=\"oferta\">
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/oferte.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/oferte.html", "/home/userescu/Projects/pf1/src/templates/partials/oferte.html");
    }
}
