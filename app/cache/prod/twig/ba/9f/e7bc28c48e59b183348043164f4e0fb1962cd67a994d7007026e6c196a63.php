<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_ba9fe7bc28c48e59b183348043164f4e0fb1962cd67a994d7007026e6c196a63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"control-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : null), "var"), "errors")) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : null), "vars"), "id"), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"controls sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : null), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : null), "vars"), "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "help")) {
            // line 26
            echo "            <span class=\"help-inline\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : null), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : null), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : null), 'widget');
    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        echo $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "help");
    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : null), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  571 => 179,  560 => 177,  556 => 176,  543 => 171,  537 => 169,  535 => 168,  529 => 164,  516 => 160,  507 => 158,  498 => 155,  491 => 153,  477 => 149,  473 => 135,  463 => 132,  460 => 131,  456 => 124,  452 => 123,  444 => 105,  433 => 103,  429 => 102,  418 => 97,  398 => 84,  395 => 83,  389 => 95,  385 => 93,  383 => 83,  380 => 82,  377 => 81,  372 => 136,  336 => 117,  310 => 115,  303 => 113,  288 => 81,  285 => 80,  278 => 77,  275 => 76,  267 => 72,  223 => 65,  217 => 61,  208 => 59,  200 => 56,  175 => 52,  370 => 131,  364 => 127,  358 => 122,  355 => 121,  346 => 91,  343 => 90,  323 => 84,  313 => 81,  305 => 114,  290 => 72,  280 => 68,  274 => 66,  268 => 64,  252 => 70,  188 => 20,  177 => 53,  12 => 34,  160 => 47,  148 => 43,  123 => 48,  116 => 39,  113 => 36,  184 => 72,  99 => 139,  163 => 48,  151 => 44,  129 => 52,  287 => 128,  283 => 79,  256 => 112,  226 => 66,  213 => 84,  205 => 79,  197 => 74,  168 => 68,  156 => 48,  79 => 32,  40 => 18,  1320 => 662,  1317 => 661,  1311 => 664,  1309 => 661,  1304 => 659,  1300 => 657,  1297 => 656,  1291 => 648,  1287 => 646,  1280 => 642,  1276 => 641,  1270 => 638,  1266 => 637,  1262 => 636,  1258 => 634,  1256 => 633,  1235 => 615,  1227 => 610,  1217 => 603,  1205 => 594,  1156 => 550,  1153 => 549,  1151 => 548,  1115 => 515,  1108 => 510,  1106 => 505,  1097 => 499,  1093 => 498,  1088 => 496,  1084 => 495,  1081 => 494,  1078 => 493,  1071 => 651,  1069 => 493,  1065 => 492,  1061 => 490,  1059 => 489,  1056 => 488,  1042 => 472,  1036 => 468,  1021 => 455,  1019 => 454,  1002 => 440,  999 => 439,  995 => 437,  985 => 431,  983 => 430,  976 => 425,  974 => 420,  968 => 417,  965 => 416,  962 => 415,  955 => 483,  953 => 415,  949 => 414,  945 => 412,  943 => 411,  940 => 410,  933 => 405,  926 => 400,  924 => 399,  919 => 397,  914 => 395,  909 => 392,  906 => 391,  903 => 390,  900 => 389,  897 => 387,  894 => 386,  891 => 385,  889 => 384,  886 => 383,  883 => 382,  880 => 381,  878 => 380,  875 => 379,  872 => 378,  869 => 377,  867 => 376,  864 => 375,  861 => 374,  858 => 373,  856 => 372,  853 => 371,  850 => 370,  847 => 369,  844 => 368,  842 => 367,  840 => 366,  837 => 365,  830 => 357,  826 => 356,  822 => 355,  819 => 354,  816 => 353,  809 => 360,  807 => 353,  802 => 351,  798 => 349,  796 => 348,  793 => 347,  786 => 342,  780 => 338,  778 => 337,  773 => 334,  767 => 332,  759 => 327,  756 => 326,  754 => 325,  749 => 323,  745 => 322,  741 => 320,  739 => 319,  736 => 318,  729 => 313,  719 => 305,  717 => 304,  714 => 303,  703 => 294,  701 => 293,  696 => 290,  690 => 288,  684 => 287,  681 => 286,  676 => 285,  673 => 284,  665 => 279,  662 => 278,  660 => 277,  652 => 271,  647 => 268,  635 => 258,  633 => 257,  624 => 251,  620 => 250,  616 => 248,  614 => 247,  611 => 246,  601 => 238,  595 => 237,  589 => 236,  586 => 235,  581 => 234,  578 => 233,  572 => 231,  570 => 230,  561 => 224,  557 => 223,  554 => 222,  551 => 221,  548 => 173,  545 => 219,  542 => 218,  539 => 217,  536 => 216,  534 => 215,  528 => 211,  521 => 207,  514 => 203,  510 => 159,  504 => 199,  501 => 198,  486 => 190,  484 => 189,  481 => 188,  464 => 175,  446 => 162,  441 => 160,  432 => 154,  423 => 150,  414 => 144,  405 => 138,  393 => 134,  391 => 107,  367 => 115,  362 => 114,  360 => 125,  353 => 111,  349 => 92,  341 => 107,  338 => 106,  330 => 86,  324 => 99,  316 => 82,  299 => 111,  294 => 109,  292 => 90,  289 => 89,  282 => 84,  266 => 72,  263 => 62,  261 => 70,  258 => 68,  253 => 65,  250 => 64,  247 => 60,  244 => 31,  236 => 54,  181 => 18,  142 => 41,  140 => 47,  137 => 39,  132 => 42,  130 => 34,  127 => 43,  117 => 46,  107 => 42,  100 => 37,  87 => 33,  80 => 13,  77 => 19,  55 => 24,  523 => 208,  520 => 161,  511 => 164,  506 => 200,  503 => 157,  496 => 158,  494 => 157,  492 => 156,  490 => 192,  485 => 153,  483 => 151,  480 => 150,  465 => 142,  462 => 141,  449 => 122,  445 => 137,  434 => 135,  431 => 134,  428 => 152,  425 => 132,  419 => 130,  416 => 129,  413 => 96,  410 => 95,  407 => 126,  404 => 125,  401 => 137,  399 => 123,  388 => 132,  386 => 118,  382 => 124,  376 => 115,  374 => 114,  371 => 116,  365 => 109,  356 => 107,  352 => 106,  347 => 105,  345 => 109,  342 => 103,  333 => 87,  319 => 97,  312 => 93,  309 => 127,  304 => 90,  286 => 70,  284 => 81,  270 => 120,  264 => 72,  262 => 71,  259 => 70,  251 => 66,  235 => 56,  232 => 55,  229 => 67,  219 => 25,  216 => 49,  209 => 45,  189 => 54,  183 => 104,  178 => 71,  170 => 27,  164 => 25,  158 => 62,  155 => 63,  153 => 58,  121 => 4,  93 => 28,  86 => 15,  73 => 29,  68 => 25,  56 => 24,  37 => 13,  26 => 11,  103 => 42,  84 => 30,  61 => 22,  23 => 11,  493 => 171,  487 => 170,  482 => 167,  474 => 183,  470 => 134,  466 => 133,  457 => 158,  453 => 139,  450 => 156,  448 => 163,  443 => 153,  440 => 152,  436 => 151,  426 => 151,  422 => 98,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 136,  394 => 121,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 100,  368 => 115,  354 => 114,  350 => 118,  335 => 88,  327 => 116,  325 => 107,  322 => 98,  318 => 83,  311 => 100,  307 => 79,  298 => 98,  296 => 75,  291 => 108,  281 => 80,  277 => 124,  271 => 90,  265 => 63,  260 => 61,  254 => 86,  248 => 62,  242 => 104,  237 => 80,  221 => 51,  195 => 55,  191 => 21,  180 => 33,  172 => 51,  143 => 41,  135 => 44,  131 => 44,  114 => 30,  110 => 44,  64 => 23,  276 => 96,  272 => 75,  257 => 60,  249 => 69,  246 => 68,  243 => 60,  241 => 56,  238 => 55,  233 => 53,  230 => 95,  227 => 53,  224 => 77,  222 => 76,  220 => 75,  211 => 60,  207 => 72,  182 => 69,  162 => 49,  146 => 48,  138 => 53,  134 => 45,  122 => 31,  111 => 144,  105 => 142,  74 => 30,  70 => 30,  66 => 28,  62 => 26,  50 => 22,  41 => 14,  97 => 40,  92 => 17,  88 => 37,  82 => 33,  78 => 32,  71 => 26,  59 => 25,  53 => 23,  32 => 14,  90 => 38,  75 => 19,  58 => 25,  24 => 11,  29 => 12,  101 => 140,  96 => 138,  91 => 74,  81 => 29,  49 => 9,  30 => 14,  43 => 13,  47 => 20,  38 => 20,  34 => 15,  46 => 20,  44 => 19,  31 => 13,  204 => 57,  199 => 33,  186 => 35,  174 => 69,  169 => 50,  166 => 49,  161 => 52,  159 => 65,  154 => 45,  145 => 42,  141 => 54,  139 => 39,  126 => 33,  124 => 42,  120 => 47,  118 => 40,  108 => 26,  104 => 33,  94 => 75,  72 => 31,  69 => 28,  65 => 27,  52 => 23,  27 => 12,  35 => 3,  28 => 13,  25 => 12,  22 => 11,  212 => 24,  206 => 78,  202 => 34,  196 => 73,  192 => 71,  190 => 84,  185 => 70,  179 => 102,  176 => 70,  171 => 13,  167 => 54,  165 => 11,  157 => 46,  152 => 51,  150 => 46,  147 => 45,  144 => 57,  136 => 51,  133 => 35,  128 => 40,  125 => 488,  119 => 30,  115 => 46,  112 => 45,  109 => 35,  106 => 34,  102 => 23,  98 => 19,  95 => 39,  89 => 65,  85 => 36,  83 => 14,  76 => 27,  67 => 25,  63 => 19,  60 => 26,  57 => 26,  54 => 29,  51 => 15,  48 => 20,  45 => 19,  42 => 21,  39 => 20,  36 => 16,  33 => 15,);
    }
}
