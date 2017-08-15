<?php

/* oferte.html */
class __TwigTemplate_8e0f832359f3d0f535a80ed9df14b02a6c90da463d9424be7c4a49b7ee1c1985 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/main.html", "oferte.html", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo twig_include($this->env, $context, "partials/oferte.html");
        echo "
";
    }

    // line 6
    public function block_slider($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        $this->loadTemplate("partials/slider.html", "oferte.html", 7)->display($context);
    }

    public function getTemplateName()
    {
        return "oferte.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  38 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "oferte.html", "/home/userescu/Projects/pf1/src/templates/oferte.html");
    }
}
