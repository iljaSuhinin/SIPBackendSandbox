<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_3fef34945454b2067e0d10cd047895ebb3902828a80db5322f03a2b7b80d779d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\">
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") == (-1))) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  34 => 4,  31 => 3,  832 => 488,  829 => 487,  818 => 485,  814 => 484,  810 => 482,  797 => 481,  771 => 476,  768 => 475,  749 => 473,  732 => 472,  728 => 470,  724 => 469,  720 => 468,  716 => 467,  712 => 466,  708 => 465,  704 => 464,  701 => 463,  699 => 462,  682 => 461,  671 => 460,  656 => 455,  651 => 453,  647 => 452,  644 => 451,  642 => 450,  628 => 449,  591 => 414,  573 => 411,  556 => 410,  553 => 409,  551 => 408,  546 => 406,  541 => 404,  214 => 90,  208 => 87,  202 => 86,  199 => 85,  196 => 84,  191 => 83,  189 => 82,  162 => 71,  124 => 45,  113 => 41,  110 => 40,  88 => 27,  81 => 24,  373 => 126,  367 => 123,  363 => 121,  342 => 116,  325 => 110,  322 => 109,  319 => 108,  316 => 107,  313 => 106,  307 => 104,  298 => 101,  288 => 98,  275 => 96,  253 => 92,  245 => 85,  241 => 83,  234 => 81,  222 => 92,  212 => 77,  195 => 74,  146 => 48,  141 => 45,  135 => 52,  132 => 51,  129 => 40,  98 => 25,  71 => 15,  68 => 14,  65 => 13,  59 => 11,  54 => 13,  51 => 8,  37 => 5,  170 => 63,  163 => 60,  149 => 61,  143 => 54,  127 => 39,  120 => 47,  96 => 34,  92 => 33,  89 => 21,  52 => 12,  94 => 30,  91 => 32,  66 => 18,  392 => 160,  389 => 159,  381 => 157,  374 => 156,  370 => 155,  366 => 153,  361 => 120,  356 => 149,  348 => 147,  346 => 146,  343 => 145,  337 => 114,  334 => 113,  331 => 112,  329 => 138,  324 => 135,  312 => 129,  310 => 105,  305 => 125,  299 => 121,  296 => 120,  293 => 100,  291 => 118,  286 => 115,  284 => 97,  279 => 111,  277 => 110,  272 => 107,  268 => 94,  262 => 103,  258 => 101,  256 => 100,  238 => 89,  235 => 88,  230 => 86,  225 => 93,  213 => 77,  211 => 76,  192 => 66,  187 => 66,  178 => 58,  173 => 75,  169 => 54,  166 => 62,  158 => 47,  155 => 52,  147 => 42,  130 => 50,  112 => 27,  97 => 21,  85 => 19,  79 => 17,  64 => 18,  42 => 5,  39 => 5,  82 => 18,  75 => 13,  72 => 12,  57 => 22,  50 => 11,  45 => 6,  43 => 11,  40 => 10,  25 => 1,  167 => 73,  160 => 59,  148 => 46,  142 => 57,  134 => 51,  123 => 31,  118 => 43,  114 => 32,  111 => 31,  109 => 39,  104 => 33,  101 => 32,  95 => 24,  86 => 25,  83 => 27,  77 => 14,  69 => 11,  63 => 6,  58 => 6,  55 => 13,  53 => 14,  44 => 6,  35 => 4,  32 => 6,  465 => 202,  456 => 199,  452 => 198,  449 => 197,  444 => 196,  442 => 195,  434 => 189,  432 => 188,  425 => 184,  418 => 180,  411 => 176,  404 => 172,  397 => 168,  390 => 164,  383 => 158,  376 => 156,  364 => 152,  358 => 150,  354 => 119,  351 => 118,  345 => 137,  341 => 135,  338 => 134,  332 => 131,  328 => 111,  326 => 128,  323 => 127,  318 => 131,  315 => 130,  306 => 122,  303 => 121,  301 => 102,  292 => 113,  289 => 112,  281 => 106,  278 => 105,  273 => 95,  270 => 136,  265 => 93,  259 => 96,  251 => 97,  249 => 96,  244 => 93,  236 => 87,  232 => 87,  229 => 84,  223 => 81,  219 => 79,  216 => 78,  210 => 75,  206 => 73,  203 => 72,  200 => 76,  197 => 75,  194 => 67,  188 => 66,  184 => 80,  181 => 64,  179 => 77,  175 => 57,  171 => 74,  168 => 60,  165 => 57,  159 => 58,  156 => 56,  153 => 51,  150 => 43,  144 => 51,  137 => 39,  133 => 46,  126 => 41,  122 => 36,  119 => 35,  116 => 42,  108 => 30,  105 => 37,  102 => 34,  99 => 33,  93 => 20,  87 => 24,  84 => 25,  76 => 22,  73 => 21,  70 => 20,  67 => 19,  62 => 16,  56 => 5,  48 => 7,  46 => 9,  41 => 7,  38 => 9,  36 => 3,  33 => 3,);
    }
}
