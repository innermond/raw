<?php

/* page.html */
class __TwigTemplate_9061f22736e1319d239685c7dcac3fccc3b52391f64535a49ec3de446c72f56b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/main.html", "page.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'slider' => array($this, 'block_slider'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/main.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        echo ($context["content"] ?? null);
        echo "
";
    }

    // line 5
    public function block_slider($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->loadTemplate("partials/slider.html", "page.html", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  39 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page.html", "/home/userescu/Projects/pf1/src/templates/page.html");
    }
}
