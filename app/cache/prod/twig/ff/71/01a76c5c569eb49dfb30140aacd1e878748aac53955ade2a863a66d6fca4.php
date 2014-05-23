<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ff7101a76c5c569eb49dfb30140aacd1e878748aac53955ade2a863a66d6fca4 extends Twig_Template
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
        echo twig_jsonencode_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "toarray"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 92,  199 => 90,  186 => 82,  174 => 73,  169 => 71,  166 => 70,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 57,  139 => 56,  126 => 47,  124 => 46,  120 => 44,  118 => 43,  108 => 40,  104 => 39,  94 => 31,  72 => 25,  69 => 24,  65 => 23,  52 => 19,  27 => 3,  35 => 12,  28 => 3,  25 => 2,  22 => 1,  212 => 82,  206 => 78,  202 => 91,  196 => 73,  192 => 71,  190 => 84,  185 => 68,  179 => 64,  176 => 74,  171 => 72,  167 => 60,  165 => 59,  157 => 54,  152 => 51,  150 => 50,  147 => 49,  144 => 48,  136 => 55,  133 => 41,  128 => 38,  125 => 37,  119 => 36,  115 => 42,  112 => 34,  109 => 33,  106 => 32,  102 => 30,  98 => 28,  95 => 27,  89 => 28,  85 => 22,  83 => 21,  76 => 19,  67 => 15,  63 => 13,  60 => 12,  57 => 21,  54 => 20,  51 => 9,  48 => 8,  45 => 7,  42 => 16,  39 => 5,  36 => 4,  33 => 3,);
    }
}
