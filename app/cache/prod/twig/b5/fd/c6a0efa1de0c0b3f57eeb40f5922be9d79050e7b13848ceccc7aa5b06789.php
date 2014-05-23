<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_b5fdc6a0efa1de0c0b3f57eeb40f5922be9d79050e7b13848ceccc7aa5b06789 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  101 => 40,  96 => 9,  91 => 6,  81 => 40,  49 => 7,  30 => 4,  43 => 8,  47 => 9,  38 => 4,  34 => 4,  46 => 8,  44 => 5,  31 => 3,  204 => 92,  199 => 90,  186 => 82,  174 => 73,  169 => 71,  166 => 70,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 57,  139 => 56,  126 => 47,  124 => 46,  120 => 44,  118 => 43,  108 => 40,  104 => 39,  94 => 31,  72 => 25,  69 => 24,  65 => 23,  52 => 19,  27 => 2,  35 => 6,  28 => 3,  25 => 2,  22 => 1,  212 => 82,  206 => 78,  202 => 91,  196 => 73,  192 => 71,  190 => 84,  185 => 68,  179 => 64,  176 => 74,  171 => 72,  167 => 60,  165 => 59,  157 => 54,  152 => 51,  150 => 50,  147 => 49,  144 => 48,  136 => 55,  133 => 41,  128 => 38,  125 => 37,  119 => 36,  115 => 42,  112 => 34,  109 => 33,  106 => 32,  102 => 30,  98 => 28,  95 => 27,  89 => 28,  85 => 22,  83 => 41,  76 => 19,  67 => 15,  63 => 13,  60 => 12,  57 => 11,  54 => 9,  51 => 9,  48 => 8,  45 => 6,  42 => 16,  39 => 7,  36 => 4,  33 => 3,);
    }
}
