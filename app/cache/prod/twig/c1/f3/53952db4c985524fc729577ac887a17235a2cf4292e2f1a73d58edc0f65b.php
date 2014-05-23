<?php

/* TwigBundle:Exception:traces_text.html.twig */
class __TwigTemplate_c1f353952db4c985524fc729577ac887a17235a2cf4292e2f1a73d58edc0f65b extends Twig_Template
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
        echo "<div class=\"block\">
    <h2>
        Stack Trace (Plain Text)&nbsp;
        ";
        // line 4
        ob_start();
        // line 5
        echo "        <a href=\"#\" onclick=\"toggle('traces-text'); switchIcons('icon-traces-text-open', 'icon-traces-text-close'); return false;\">
            <img class=\"toggle\" id=\"icon-traces-text-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none\" />
            <img class=\"toggle\" id=\"icon-traces-text-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline\" />
        </a>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 10
        echo "    </h2>

    <div id=\"traces-text\" class=\"trace\" style=\"display: none;\">
<pre>";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "toarray"));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 14
            echo "[";
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : null) + 1), "html", null, true);
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "class"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "message"), "html", null, true);
            echo "
";
            // line 15
            $this->env->loadTemplate("TwigBundle:Exception:traces.txt.twig")->display(array("exception" => (isset($context["e"]) ? $context["e"] : null)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</pre>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 13,  97 => 22,  92 => 20,  88 => 19,  82 => 18,  78 => 17,  71 => 14,  59 => 9,  53 => 8,  32 => 4,  90 => 20,  75 => 16,  58 => 13,  24 => 2,  29 => 5,  101 => 40,  96 => 9,  91 => 6,  81 => 40,  49 => 11,  30 => 4,  43 => 8,  47 => 10,  38 => 7,  34 => 5,  46 => 8,  44 => 7,  31 => 3,  204 => 92,  199 => 90,  186 => 82,  174 => 73,  169 => 71,  166 => 70,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 57,  139 => 56,  126 => 47,  124 => 46,  120 => 44,  118 => 43,  108 => 40,  104 => 24,  94 => 31,  72 => 25,  69 => 15,  65 => 23,  52 => 19,  27 => 4,  35 => 6,  28 => 3,  25 => 2,  22 => 1,  212 => 82,  206 => 78,  202 => 91,  196 => 73,  192 => 71,  190 => 84,  185 => 68,  179 => 64,  176 => 74,  171 => 72,  167 => 60,  165 => 59,  157 => 54,  152 => 51,  150 => 50,  147 => 49,  144 => 48,  136 => 55,  133 => 41,  128 => 38,  125 => 37,  119 => 36,  115 => 42,  112 => 34,  109 => 33,  106 => 32,  102 => 30,  98 => 28,  95 => 21,  89 => 28,  85 => 22,  83 => 19,  76 => 19,  67 => 12,  63 => 13,  60 => 16,  57 => 11,  54 => 15,  51 => 9,  48 => 8,  45 => 14,  42 => 8,  39 => 7,  36 => 10,  33 => 3,);
    }
}
