<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e9da91df9cb5b943f1fe779709536d97ad36ce23d862f28a04296c71101614cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  47 => 7,  38 => 5,  34 => 4,  46 => 8,  44 => 5,  31 => 3,  204 => 92,  199 => 90,  186 => 82,  174 => 73,  169 => 71,  166 => 70,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 57,  139 => 56,  126 => 47,  124 => 46,  120 => 44,  118 => 43,  108 => 40,  104 => 39,  94 => 31,  72 => 25,  69 => 24,  65 => 23,  52 => 19,  27 => 2,  35 => 4,  28 => 3,  25 => 2,  22 => 1,  212 => 82,  206 => 78,  202 => 91,  196 => 73,  192 => 71,  190 => 84,  185 => 68,  179 => 64,  176 => 74,  171 => 72,  167 => 60,  165 => 59,  157 => 54,  152 => 51,  150 => 50,  147 => 49,  144 => 48,  136 => 55,  133 => 41,  128 => 38,  125 => 37,  119 => 36,  115 => 42,  112 => 34,  109 => 33,  106 => 32,  102 => 30,  98 => 28,  95 => 27,  89 => 28,  85 => 22,  83 => 21,  76 => 19,  67 => 15,  63 => 13,  60 => 12,  57 => 11,  54 => 9,  51 => 9,  48 => 8,  45 => 6,  42 => 16,  39 => 5,  36 => 4,  33 => 3,);
    }
}
