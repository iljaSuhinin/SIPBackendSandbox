<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_19f9ca12a52a26d01fcff633153c1888c9959354d6a0c339a9a83c8c8534f2e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id"), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        echo "EMPTY CONTENT";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  30 => 13,  28 => 12,  23 => 11,  184 => 72,  178 => 71,  174 => 69,  168 => 68,  158 => 62,  144 => 57,  140 => 55,  129 => 52,  126 => 51,  117 => 47,  115 => 46,  111 => 44,  107 => 42,  105 => 41,  99 => 39,  96 => 38,  87 => 33,  83 => 31,  80 => 30,  76 => 29,  67 => 25,  65 => 24,  62 => 23,  52 => 21,  46 => 20,  43 => 19,  39 => 18,  34 => 15,  162 => 64,  156 => 61,  150 => 59,  147 => 58,  143 => 44,  135 => 43,  132 => 42,  128 => 40,  122 => 50,  116 => 37,  113 => 36,  109 => 35,  106 => 34,  104 => 33,  100 => 31,  94 => 37,  88 => 28,  85 => 27,  81 => 26,  73 => 25,  70 => 26,  64 => 23,  61 => 22,  58 => 21,  55 => 22,  50 => 19,  48 => 18,  45 => 17,  42 => 16,  37 => 15,  31 => 14,);
    }
}
