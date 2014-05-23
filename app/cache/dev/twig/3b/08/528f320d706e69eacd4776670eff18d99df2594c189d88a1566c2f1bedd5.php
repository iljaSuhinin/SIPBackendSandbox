<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_3b08528f320d706e69eacd4776670eff18d99df2594c189d88a1566c2f1bedd5 extends Twig_Template
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
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 3
            echo "    <div id=\"sfMiniToolbar-";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" class=\"sf-minitoolbar\">
        <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" onclick=\"
            var elem = this.parentNode;
            if (elem.style.display == 'none') {
                document.getElementById('sfToolbarMainContent-";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'none';
                document.getElementById('sfToolbarClearer-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'none';
                elem.style.display = 'block';
            } else {
                document.getElementById('sfToolbarMainContent-";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
                document.getElementById('sfToolbarClearer-";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
                elem.style.display = 'none'
            }

            Sfjs.setPreference('toolbar/displayState', 'block');
        \">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\">
        </a>
    </div>
    <style>
        ";
            // line 22
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig")->display(array_merge($context, array("position" => (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "floatable" => true)));
            // line 23
            echo "    </style>
    <div id=\"sfToolbarClearer-";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 26
        echo "
<div id=\"sfToolbarMainContent-";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbarreset\">
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 29
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "profiler_url" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "token" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "token"), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "method"), "html", null, true);
            // line 35
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    ";
        // line 38
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 39
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
            document.getElementById('sfMiniToolbar-";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
            Sfjs.setPreference('toolbar/displayState', 'none');
        \"></a>
    ";
        }
        // line 47
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  22 => 1,  151 => 63,  140 => 60,  103 => 40,  100 => 39,  80 => 28,  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  406 => 135,  400 => 131,  394 => 129,  387 => 125,  378 => 120,  375 => 119,  368 => 115,  350 => 112,  335 => 110,  327 => 108,  311 => 100,  271 => 90,  260 => 87,  254 => 86,  248 => 83,  242 => 82,  237 => 80,  221 => 77,  180 => 65,  172 => 60,  131 => 49,  276 => 96,  257 => 92,  246 => 88,  243 => 86,  233 => 79,  227 => 78,  224 => 77,  220 => 75,  207 => 72,  182 => 69,  174 => 61,  138 => 53,  90 => 25,  74 => 17,  190 => 70,  185 => 70,  176 => 70,  157 => 58,  152 => 51,  136 => 42,  128 => 44,  125 => 43,  115 => 35,  106 => 32,  60 => 11,  49 => 12,  47 => 10,  34 => 3,  31 => 3,  832 => 488,  829 => 487,  818 => 485,  814 => 484,  810 => 482,  797 => 481,  771 => 476,  768 => 475,  749 => 473,  732 => 472,  728 => 470,  724 => 469,  720 => 468,  716 => 467,  712 => 466,  708 => 465,  704 => 464,  701 => 463,  699 => 462,  682 => 461,  671 => 460,  656 => 455,  651 => 453,  647 => 452,  644 => 451,  642 => 450,  628 => 449,  591 => 414,  573 => 411,  556 => 410,  553 => 409,  551 => 408,  546 => 406,  541 => 404,  214 => 90,  208 => 87,  202 => 71,  199 => 85,  196 => 73,  191 => 74,  189 => 82,  162 => 61,  124 => 45,  113 => 41,  110 => 36,  88 => 25,  81 => 21,  373 => 118,  367 => 123,  363 => 121,  342 => 116,  325 => 107,  322 => 106,  319 => 108,  316 => 107,  313 => 106,  307 => 99,  298 => 98,  288 => 98,  275 => 96,  253 => 92,  245 => 85,  241 => 85,  234 => 81,  222 => 76,  212 => 76,  195 => 75,  146 => 56,  141 => 54,  135 => 51,  132 => 51,  129 => 51,  98 => 39,  71 => 22,  68 => 14,  65 => 13,  59 => 11,  54 => 10,  51 => 8,  37 => 4,  170 => 63,  163 => 66,  149 => 61,  143 => 55,  127 => 39,  120 => 47,  96 => 38,  92 => 33,  89 => 33,  52 => 14,  94 => 27,  91 => 32,  66 => 15,  392 => 128,  389 => 159,  381 => 121,  374 => 156,  370 => 155,  366 => 153,  361 => 120,  356 => 149,  348 => 147,  346 => 146,  343 => 145,  337 => 114,  334 => 113,  331 => 112,  329 => 138,  324 => 135,  312 => 129,  310 => 105,  305 => 125,  299 => 121,  296 => 97,  293 => 100,  291 => 95,  286 => 115,  284 => 97,  279 => 111,  277 => 93,  272 => 94,  268 => 94,  262 => 103,  258 => 101,  256 => 100,  238 => 83,  235 => 88,  230 => 81,  225 => 93,  213 => 77,  211 => 73,  192 => 71,  187 => 66,  178 => 58,  173 => 75,  169 => 54,  166 => 62,  158 => 47,  155 => 64,  147 => 62,  130 => 50,  112 => 44,  97 => 38,  85 => 22,  79 => 28,  64 => 23,  42 => 6,  39 => 8,  82 => 18,  75 => 27,  72 => 26,  57 => 14,  50 => 9,  45 => 11,  43 => 11,  40 => 10,  25 => 2,  167 => 67,  160 => 59,  148 => 46,  142 => 57,  134 => 52,  123 => 31,  118 => 43,  114 => 45,  111 => 47,  109 => 33,  104 => 43,  101 => 31,  95 => 27,  86 => 35,  83 => 29,  77 => 14,  69 => 11,  63 => 13,  58 => 6,  55 => 13,  53 => 10,  44 => 6,  35 => 7,  32 => 3,  465 => 202,  456 => 199,  452 => 198,  449 => 197,  444 => 196,  442 => 195,  434 => 189,  432 => 188,  425 => 184,  418 => 180,  411 => 138,  404 => 172,  397 => 130,  390 => 164,  383 => 158,  376 => 156,  364 => 152,  358 => 150,  354 => 114,  351 => 118,  345 => 137,  341 => 135,  338 => 134,  332 => 131,  328 => 111,  326 => 128,  323 => 127,  318 => 104,  315 => 130,  306 => 122,  303 => 121,  301 => 102,  292 => 113,  289 => 112,  281 => 94,  278 => 105,  273 => 95,  270 => 136,  265 => 89,  259 => 96,  251 => 97,  249 => 90,  244 => 93,  236 => 87,  232 => 87,  229 => 84,  223 => 81,  219 => 79,  216 => 78,  210 => 75,  206 => 78,  203 => 72,  200 => 76,  197 => 75,  194 => 67,  188 => 66,  184 => 80,  181 => 64,  179 => 64,  175 => 57,  171 => 62,  168 => 60,  165 => 59,  159 => 65,  156 => 56,  153 => 51,  150 => 58,  144 => 61,  137 => 39,  133 => 41,  126 => 50,  122 => 42,  119 => 41,  116 => 42,  108 => 30,  105 => 41,  102 => 31,  99 => 33,  93 => 37,  87 => 24,  84 => 25,  76 => 19,  73 => 21,  70 => 15,  67 => 24,  62 => 22,  56 => 5,  48 => 8,  46 => 9,  41 => 6,  38 => 5,  36 => 4,  33 => 3,);
    }
}
