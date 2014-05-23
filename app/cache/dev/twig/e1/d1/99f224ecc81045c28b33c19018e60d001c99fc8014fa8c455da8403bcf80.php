<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e1d199f224ecc81045c28b33c19018e60d001c99fc8014fa8c455da8403bcf80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\"></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  47 => 10,  34 => 4,  31 => 3,  832 => 488,  829 => 487,  818 => 485,  814 => 484,  810 => 482,  797 => 481,  771 => 476,  768 => 475,  749 => 473,  732 => 472,  728 => 470,  724 => 469,  720 => 468,  716 => 467,  712 => 466,  708 => 465,  704 => 464,  701 => 463,  699 => 462,  682 => 461,  671 => 460,  656 => 455,  651 => 453,  647 => 452,  644 => 451,  642 => 450,  628 => 449,  591 => 414,  573 => 411,  556 => 410,  553 => 409,  551 => 408,  546 => 406,  541 => 404,  214 => 90,  208 => 87,  202 => 86,  199 => 85,  196 => 84,  191 => 83,  189 => 82,  162 => 71,  124 => 45,  113 => 41,  110 => 40,  88 => 27,  81 => 24,  373 => 126,  367 => 123,  363 => 121,  342 => 116,  325 => 110,  322 => 109,  319 => 108,  316 => 107,  313 => 106,  307 => 104,  298 => 101,  288 => 98,  275 => 96,  253 => 92,  245 => 85,  241 => 83,  234 => 81,  222 => 92,  212 => 77,  195 => 74,  146 => 48,  141 => 45,  135 => 52,  132 => 51,  129 => 40,  98 => 25,  71 => 15,  68 => 14,  65 => 13,  59 => 11,  54 => 13,  51 => 8,  37 => 5,  170 => 63,  163 => 60,  149 => 61,  143 => 54,  127 => 39,  120 => 47,  96 => 34,  92 => 33,  89 => 21,  52 => 14,  94 => 30,  91 => 32,  66 => 18,  392 => 160,  389 => 159,  381 => 157,  374 => 156,  370 => 155,  366 => 153,  361 => 120,  356 => 149,  348 => 147,  346 => 146,  343 => 145,  337 => 114,  334 => 113,  331 => 112,  329 => 138,  324 => 135,  312 => 129,  310 => 105,  305 => 125,  299 => 121,  296 => 120,  293 => 100,  291 => 118,  286 => 115,  284 => 97,  279 => 111,  277 => 110,  272 => 107,  268 => 94,  262 => 103,  258 => 101,  256 => 100,  238 => 89,  235 => 88,  230 => 86,  225 => 93,  213 => 77,  211 => 76,  192 => 66,  187 => 66,  178 => 58,  173 => 75,  169 => 54,  166 => 62,  158 => 47,  155 => 52,  147 => 42,  130 => 50,  112 => 27,  97 => 21,  85 => 19,  79 => 17,  64 => 18,  42 => 5,  39 => 5,  82 => 18,  75 => 13,  72 => 12,  57 => 22,  50 => 11,  45 => 6,  43 => 11,  40 => 10,  25 => 1,  167 => 73,  160 => 59,  148 => 46,  142 => 57,  134 => 51,  123 => 31,  118 => 43,  114 => 32,  111 => 31,  109 => 39,  104 => 33,  101 => 32,  95 => 24,  86 => 25,  83 => 27,  77 => 14,  69 => 11,  63 => 6,  58 => 6,  55 => 13,  53 => 14,  44 => 6,  35 => 4,  32 => 6,  465 => 202,  456 => 199,  452 => 198,  449 => 197,  444 => 196,  442 => 195,  434 => 189,  432 => 188,  425 => 184,  418 => 180,  411 => 176,  404 => 172,  397 => 168,  390 => 164,  383 => 158,  376 => 156,  364 => 152,  358 => 150,  354 => 119,  351 => 118,  345 => 137,  341 => 135,  338 => 134,  332 => 131,  328 => 111,  326 => 128,  323 => 127,  318 => 131,  315 => 130,  306 => 122,  303 => 121,  301 => 102,  292 => 113,  289 => 112,  281 => 106,  278 => 105,  273 => 95,  270 => 136,  265 => 93,  259 => 96,  251 => 97,  249 => 96,  244 => 93,  236 => 87,  232 => 87,  229 => 84,  223 => 81,  219 => 79,  216 => 78,  210 => 75,  206 => 73,  203 => 72,  200 => 76,  197 => 75,  194 => 67,  188 => 66,  184 => 80,  181 => 64,  179 => 77,  175 => 57,  171 => 74,  168 => 60,  165 => 57,  159 => 58,  156 => 56,  153 => 51,  150 => 43,  144 => 51,  137 => 39,  133 => 46,  126 => 41,  122 => 36,  119 => 35,  116 => 42,  108 => 30,  105 => 37,  102 => 34,  99 => 33,  93 => 20,  87 => 24,  84 => 25,  76 => 22,  73 => 21,  70 => 20,  67 => 19,  62 => 16,  56 => 5,  48 => 7,  46 => 9,  41 => 7,  38 => 6,  36 => 3,  33 => 3,);
    }
}
