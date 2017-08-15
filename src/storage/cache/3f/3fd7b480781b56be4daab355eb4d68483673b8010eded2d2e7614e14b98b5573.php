<?php

/* partials/products.html */
class __TwigTemplate_ddd0717199a5ad52bdbc06bc242e0cd38e2e6b89cbae1580050de99e148c3fca extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 2
            echo "<div class=\"col-sm-6 col-md-4\">
  <div class=\"product\">
    <img src=\"/images/";
            // line 4
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "img", array());
            echo "\" alt=\"product\">
     <div class=\"product-text\">
       <h4>";
            // line 6
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "name", array());
            echo "</h4>
        <div class=\"description\">
           <div class=\"description-inner\">
             <ul>
             ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "description", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 11
                echo "             <li>";
                echo twig_escape_filter($this->env, $context["line"]);
                echo "</li>
             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "             </ul>
           </div>
        </div>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "price", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 17
                echo "        <div class=\"price-variant clearfix\"><span>";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["line"], 0, array());
                echo "</span> <strong>";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["line"], 1, array());
                echo "</strong></div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "     </div>
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/products.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  72 => 19,  61 => 17,  57 => 16,  52 => 13,  43 => 11,  39 => 10,  32 => 6,  27 => 4,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/products.html", "/home/userescu/Projects/pf1/src/templates/partials/products.html");
    }
}
