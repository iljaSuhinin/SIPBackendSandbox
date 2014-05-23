<?php

/* @WebProfiler/Profiler/toolbar.css.twig */
class __TwigTemplate_9c8334834d98aae1c1196bab1fe73133c667a9b36c16e459e0890b5df5f22011 extends Twig_Template
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
        echo ".sf-minitoolbar {
    display: none;

    position: fixed;
    bottom: 0;
    right: 0;

    padding: 5px 5px 0;

    background-color: #f7f7f7;
    background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
    background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
    background: linear-gradient(top, #e4e4e4, #ffffff);

    border-radius: 16px 0 0 0;

    z-index: 6000000;
}

.sf-toolbarreset {
    position: fixed;
    background-color: #f7f7f7;
    left: 0;
    right: 0;
    height: 38px;
    margin: 0;
    padding: 0 40px 0 0;
    z-index: 6000000;
    font: 11px Verdana, Arial, sans-serif;
    text-align: left;
    color: #2f2f2f;

    background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
    background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
    background: linear-gradient(top, #e4e4e4, #ffffff);

    bottom: 0;
    border-top: 1px solid #bbb;
}
.sf-toolbarreset abbr {
    border-bottom: 1px dotted #000000;
    cursor: help;
}
.sf-toolbarreset span,
.sf-toolbarreset div {
    font-size: 11px;
}
.sf-toolbarreset img {
    width: auto;
    display: inline;
}

.sf-toolbarreset .hide-button {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: 40px;
    height: 40px;
    cursor: pointer;
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAMAAAAMCGV4AAAAllBMVEXDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PExMTPz8/Q0NDR0dHT09Pb29vc3Nzf39/h4eHi4uLj4+P6+vr7+/v8/Pz9/f3///+Nh2QuAAAAIXRSTlMABgwPGBswMzk8QktRV4SKjZOWmaKlq7TAxszb3urt+fy1vNEpAAAAiklEQVQIHUXBBxKCQBREwRFzDqjoGh+C2YV//8u5Sll2S0E/dof1tKdKM6GyqCto7PjZRJIS/mbSELgXOSd/BzpKIH1ZefVWpDDTHsi8mZVnwImPi5ndCLbaAZk3M58Bay0h9VbeSvMpjDUAHj4jL55AW1rxN5fU2PLjIgVRzNdxVFOlGzvnJi0Fb1XNGBHA9uQOAAAAAElFTkSuQmCC');
    background-repeat: no-repeat;
    background-position: 13px 11px;
}

.sf-toolbar-block {
    white-space: nowrap;
    color: #2f2f2f;
    display: block;
    min-height: 28px;
    border-right: 1px solid #e4e4e4;
    padding: 0;
    float: left;
    cursor: default;
}

.sf-toolbar-block span {
    display: inline-block;
}

.sf-toolbar-block .sf-toolbar-info-piece {
    line-height: 19px;
    margin-bottom: 5px;
}

.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {
    padding: 0px 5px;
    border-radius: 5px;
    margin-bottom: 0px;
    vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-piece:last-child {
    margin-bottom: 0;
}

.sf-toolbar-block .sf-toolbar-info-piece a,
.sf-toolbar-block .sf-toolbar-info-piece abbr {
    color: #2f2f2f;
}

.sf-toolbar-block .sf-toolbar-info-piece b {
    display: inline-block;
    width: 110px;
    vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-with-next-pointer:after {
    content: ' :: ';
    color: #999;
}

.sf-toolbar-block .sf-toolbar-info-with-delimiter {
    border-right: 1px solid #999;
    padding-right: 5px;
    margin-right: 5px;
}

.sf-toolbar-block .sf-toolbar-info {
    display: none;
    position: absolute;
    background-color: #fff;
    border: 1px solid #bbb;
    padding: 9px 0;
    margin-left: -1px;

    bottom: 38px;
    border-bottom-width: 0;
    border-bottom: 1px solid #bbb;
    border-radius: 4px 4px 0 0;
}

.sf-toolbarreset > div:last-of-type .sf-toolbar-info {
    right: -1px;
}

.sf-toolbar-block .sf-toolbar-info:empty {
    visibility: hidden;
}

.sf-toolbar-block .sf-toolbar-status {
    display: inline-block;
    color: #fff;
    background-color: #666;
    padding: 3px 6px;
    border-radius: 3px;
    margin-bottom: 2px;
    vertical-align: middle;
    min-width: 6px;
    min-height: 13px;
}

.sf-toolbar-block .sf-toolbar-status abbr {
    color: #fff;
    border-bottom: 1px dotted black;
}

.sf-toolbar-block .sf-toolbar-status-green {
    background-color: #759e1a;
}

.sf-toolbar-block .sf-toolbar-status-red {
    background-color: #a33;
}

.sf-toolbar-block .sf-toolbar-status-yellow {
    background-color: #ffcc00;
    color: #000;
}

.sf-toolbar-block .sf-toolbar-status-black {
    background-color: #000;
}

.sf-toolbar-block .sf-toolbar-icon {
    display: block;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > span {
    display: block;
    text-decoration: none;
    margin: 0;
    padding: 5px 8px;
    min-width: 20px;
    text-align: center;
    vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > a:link
.sf-toolbar-block .sf-toolbar-icon > a:hover {
    color: black !important;
}

.sf-toolbar-block .sf-toolbar-icon img {
    border-width: 0;
    vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon img + span {
    margin-left: 5px;
    margin-top: 2px;
}

.sf-toolbar-block .sf-toolbar-icon .sf-toolbar-status {
    border-radius: 12px;
    border-bottom-left-radius: 0;
    margin-top: 0;
}

.sf-toolbar-block .sf-toolbar-info-method {
    border-bottom: 1px dashed #ccc;
    cursor: help;
}

.sf-toolbar-block .sf-toolbar-info-method[onclick=\"\"] {
    border-bottom: none;
    cursor: inherit;
}

.sf-toolbar-info-php {}
.sf-toolbar-info-php-ext {}

.sf-toolbar-info-php-ext .sf-toolbar-status {
    margin-left: 2px;
}

.sf-toolbar-info-php-ext .sf-toolbar-status:first-child {
    margin-left: 0;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail {
    display: inline-block;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional:empty,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail:empty {
    display: none;
}

.sf-toolbarreset:hover {
    box-shadow: rgba(0, 0, 0, 0.3) 0 0 50px;
}

.sf-toolbar-block:hover {
    box-shadow: rgba(0, 0, 0, 0.35) 0 0 5px;
    border-right: none;
    margin-right: 1px;
    position: relative;
}

.sf-toolbar-block:hover .sf-toolbar-icon {
    background-color: #fff;
    border-top: 1px dotted #DDD;
    position: relative;
    margin-top: -1px;
    z-index: 10002;
}

.sf-toolbar-block:hover .sf-toolbar-info {
    display: block;
    min-width: -webkit-calc(100% + 2px);
    min-width: calc(100% + 2px);
    z-index: 10001;
    box-sizing: border-box;
    padding: 9px;
    line-height: 19px;
}

/***** Override the setting when the toolbar is on the top *****/
";
        // line 275
        if (((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")) == "top")) {
            // line 276
            echo "    .sf-minitoolbar {
        top: 0;
        bottom: auto;
        right: 0;

        background-color: #f7f7f7;

        background-image: -moz-linear-gradient(225deg, #e4e4e4, #ffffff);
        background-image: -webkit-gradient(linear, 100% 0%, 0% 0%, from(#e4e4e4), to(#ffffff));
        background-image: -o-linear-gradient(135deg, #e4e4e4, #ffffff);
        background: linear-gradient(225deg, #e4e4e4, #ffffff);

        border-radius: 0 0 0 16px;
    }

    .sf-toolbarreset {
        background-image: -moz-linear-gradient(225deg, #e4e4e4, #ffffff);
        background-image: -webkit-gradient(linear, 100% 0%, 0% 0%, from(#e4e4e4), to(#ffffff));
        background-image: -o-linear-gradient(135deg, #e4e4e4, #ffffff);
        background: linear-gradient(225deg, #e4e4e4, #ffffff);

        top: 0;
        bottom: auto;
        border-bottom: 1px solid #bbb;
    }

    .sf-toolbar-block .sf-toolbar-info {
        top: 39px;
        bottom: auto;
        border-top-width: 0;
        border-radius: 0 0 4px 4px;
    }

    .sf-toolbar-block:hover .sf-toolbar-icon {
        border-top: none;
        border-bottom: 1px dotted #DDD;
        margin-top: 0;
        margin-bottom: -1px;
    }
";
        }
        // line 316
        echo "
";
        // line 317
        if ((!(isset($context["floatable"]) ? $context["floatable"] : $this->getContext($context, "floatable")))) {
            // line 318
            echo "    .sf-toolbarreset {
        position: static;
        background: #cbcbcb;

        background-image: -moz-linear-gradient(90deg, #cbcbcb, #e8e8e8); !important;
        background-image: -webkit-gradient(linear, 0% 0%, 100% 0%, from(#cbcbcb), to(#e8e8e8)); !important;
        background-image: -o-linear-gradient(180deg, #cbcbcb, #e8e8e8); !important;
        background: linear-gradient(90deg, #cbcbcb, #e8e8e8); !important;
    }
";
        }
        // line 328
        echo "
/***** Media query *****/
@media screen and (max-width: 779px) {
    .sf-toolbar-block .sf-toolbar-icon > * > :first-child ~ * {
        display: none;
    }

    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional,
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
        display: none !important;
    }
}

@media screen and (min-width: 880px) {
    .sf-toolbar-block .sf-toolbar-icon a[href\$=\"config\"] .sf-toolbar-info-piece-additional {
        display: inline-block;
    }
}

@media screen and (min-width: 980px) {
    .sf-toolbar-block .sf-toolbar-icon a[href\$=\"security\"] .sf-toolbar-info-piece-additional {
        display: inline-block;
    }
}

@media screen and (max-width: 1179px) {
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional {
        display: none;
    }
}

@media screen and (max-width: 1439px) {
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
        display: none;
    }
}
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 328,  347 => 318,  300 => 276,  27 => 3,  22 => 1,  151 => 63,  140 => 60,  103 => 40,  100 => 39,  80 => 28,  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  406 => 135,  400 => 131,  394 => 129,  387 => 125,  378 => 120,  375 => 119,  368 => 115,  350 => 112,  335 => 110,  327 => 108,  311 => 100,  271 => 90,  260 => 87,  254 => 86,  248 => 83,  242 => 82,  237 => 80,  221 => 77,  180 => 65,  172 => 60,  131 => 49,  276 => 96,  257 => 92,  246 => 88,  243 => 86,  233 => 79,  227 => 78,  224 => 77,  220 => 75,  207 => 72,  182 => 69,  174 => 61,  138 => 53,  90 => 25,  74 => 17,  190 => 70,  185 => 70,  176 => 70,  157 => 58,  152 => 51,  136 => 42,  128 => 44,  125 => 43,  115 => 35,  106 => 32,  60 => 11,  49 => 12,  47 => 10,  34 => 3,  31 => 3,  832 => 488,  829 => 487,  818 => 485,  814 => 484,  810 => 482,  797 => 481,  771 => 476,  768 => 475,  749 => 473,  732 => 472,  728 => 470,  724 => 469,  720 => 468,  716 => 467,  712 => 466,  708 => 465,  704 => 464,  701 => 463,  699 => 462,  682 => 461,  671 => 460,  656 => 455,  651 => 453,  647 => 452,  644 => 451,  642 => 450,  628 => 449,  591 => 414,  573 => 411,  556 => 410,  553 => 409,  551 => 408,  546 => 406,  541 => 404,  214 => 90,  208 => 87,  202 => 71,  199 => 85,  196 => 73,  191 => 74,  189 => 82,  162 => 61,  124 => 45,  113 => 41,  110 => 36,  88 => 25,  81 => 21,  373 => 118,  367 => 123,  363 => 121,  342 => 316,  325 => 107,  322 => 106,  319 => 108,  316 => 107,  313 => 106,  307 => 99,  298 => 275,  288 => 98,  275 => 96,  253 => 92,  245 => 85,  241 => 85,  234 => 81,  222 => 76,  212 => 76,  195 => 75,  146 => 56,  141 => 54,  135 => 51,  132 => 51,  129 => 51,  98 => 39,  71 => 22,  68 => 14,  65 => 13,  59 => 11,  54 => 10,  51 => 8,  37 => 4,  170 => 63,  163 => 66,  149 => 61,  143 => 55,  127 => 39,  120 => 47,  96 => 38,  92 => 33,  89 => 33,  52 => 14,  94 => 27,  91 => 32,  66 => 15,  392 => 128,  389 => 159,  381 => 121,  374 => 156,  370 => 155,  366 => 153,  361 => 120,  356 => 149,  348 => 147,  346 => 146,  343 => 145,  337 => 114,  334 => 113,  331 => 112,  329 => 138,  324 => 135,  312 => 129,  310 => 105,  305 => 125,  299 => 121,  296 => 97,  293 => 100,  291 => 95,  286 => 115,  284 => 97,  279 => 111,  277 => 93,  272 => 94,  268 => 94,  262 => 103,  258 => 101,  256 => 100,  238 => 83,  235 => 88,  230 => 81,  225 => 93,  213 => 77,  211 => 73,  192 => 71,  187 => 66,  178 => 58,  173 => 75,  169 => 54,  166 => 62,  158 => 47,  155 => 64,  147 => 62,  130 => 50,  112 => 44,  97 => 38,  85 => 22,  79 => 28,  64 => 23,  42 => 6,  39 => 8,  82 => 18,  75 => 27,  72 => 26,  57 => 14,  50 => 9,  45 => 11,  43 => 11,  40 => 10,  25 => 2,  167 => 67,  160 => 59,  148 => 46,  142 => 57,  134 => 52,  123 => 31,  118 => 43,  114 => 45,  111 => 47,  109 => 33,  104 => 43,  101 => 31,  95 => 27,  86 => 35,  83 => 29,  77 => 14,  69 => 11,  63 => 13,  58 => 6,  55 => 13,  53 => 10,  44 => 6,  35 => 7,  32 => 3,  465 => 202,  456 => 199,  452 => 198,  449 => 197,  444 => 196,  442 => 195,  434 => 189,  432 => 188,  425 => 184,  418 => 180,  411 => 138,  404 => 172,  397 => 130,  390 => 164,  383 => 158,  376 => 156,  364 => 152,  358 => 150,  354 => 114,  351 => 118,  345 => 317,  341 => 135,  338 => 134,  332 => 131,  328 => 111,  326 => 128,  323 => 127,  318 => 104,  315 => 130,  306 => 122,  303 => 121,  301 => 102,  292 => 113,  289 => 112,  281 => 94,  278 => 105,  273 => 95,  270 => 136,  265 => 89,  259 => 96,  251 => 97,  249 => 90,  244 => 93,  236 => 87,  232 => 87,  229 => 84,  223 => 81,  219 => 79,  216 => 78,  210 => 75,  206 => 78,  203 => 72,  200 => 76,  197 => 75,  194 => 67,  188 => 66,  184 => 80,  181 => 64,  179 => 64,  175 => 57,  171 => 62,  168 => 60,  165 => 59,  159 => 65,  156 => 56,  153 => 51,  150 => 58,  144 => 61,  137 => 39,  133 => 41,  126 => 50,  122 => 42,  119 => 41,  116 => 42,  108 => 30,  105 => 41,  102 => 31,  99 => 33,  93 => 37,  87 => 24,  84 => 25,  76 => 19,  73 => 21,  70 => 15,  67 => 24,  62 => 22,  56 => 5,  48 => 8,  46 => 9,  41 => 6,  38 => 5,  36 => 4,  33 => 3,);
    }
}
