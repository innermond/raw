<?php

/* /admin/login.html */
class __TwigTemplate_faa90b8d9cbf93a60c12ef88014c1d67cb7b1b1d4c3ffb3701ab5086ae9ec84a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/plain.html", "/admin/login.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/plain.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"col-xs-10 col-md-6 vertical-center\">
      <h1>Login</h1>
      <form>
        <div class=\"form-group\">
          <label for=\"username\">Username</label>
          <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Username\">
        </div>
        <div class=\"form-group\">
          <label for=\"password\">Password</label>
          <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Login</button>
      </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "/admin/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/admin/login.html", "/home/userescu/Projects/pf1/src/templates/admin/login.html");
    }
}
