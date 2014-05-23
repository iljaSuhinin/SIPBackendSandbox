<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_df406a14b89fe5524015e9603b4e085bc55b44b60f7a08a9a6e505c0da46d9a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,  212 => 82,  206 => 78,  202 => 76,  196 => 73,  192 => 71,  190 => 70,  185 => 68,  179 => 64,  176 => 63,  171 => 62,  167 => 60,  165 => 59,  157 => 54,  152 => 51,  150 => 50,  147 => 49,  144 => 48,  136 => 42,  133 => 41,  128 => 38,  125 => 37,  119 => 36,  115 => 35,  112 => 34,  109 => 33,  106 => 32,  102 => 30,  98 => 28,  95 => 27,  89 => 24,  85 => 22,  83 => 21,  76 => 19,  67 => 15,  63 => 13,  60 => 12,  57 => 11,  54 => 10,  51 => 9,  48 => 8,  45 => 7,  42 => 6,  39 => 5,  36 => 4,  33 => 3,);
    }
}
