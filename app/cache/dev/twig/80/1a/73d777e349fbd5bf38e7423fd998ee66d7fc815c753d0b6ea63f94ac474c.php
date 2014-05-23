<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_801a73d777e349fbd5bf38e7423fd998ee66d7fc815c753d0b6ea63f94ac474c extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  41 => 13,  38 => 4,  29 => 5,  90 => 20,  58 => 13,  34 => 5,  28 => 3,  24 => 2,  97 => 22,  95 => 21,  92 => 20,  88 => 19,  82 => 18,  78 => 17,  75 => 16,  71 => 14,  67 => 12,  59 => 9,  53 => 8,  44 => 9,  27 => 4,  204 => 92,  202 => 91,  199 => 90,  190 => 84,  186 => 82,  176 => 74,  174 => 73,  171 => 72,  169 => 71,  166 => 70,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 57,  139 => 56,  136 => 55,  126 => 47,  124 => 46,  120 => 44,  118 => 43,  115 => 42,  108 => 40,  104 => 24,  94 => 31,  89 => 28,  72 => 25,  69 => 15,  65 => 23,  54 => 15,  52 => 19,  42 => 6,  22 => 1,  101 => 40,  96 => 9,  91 => 6,  83 => 19,  81 => 40,  49 => 7,  47 => 10,  39 => 7,  35 => 12,  30 => 4,  25 => 2,  60 => 16,  57 => 21,  46 => 8,  43 => 8,  36 => 10,  33 => 3,);
    }
}
