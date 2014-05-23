<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_6623b6a49b3e4267dd1ad6023d1927882a2d2dfedb54a5afdf3e683df6e948ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig");

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"icon-ok\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"icon-remove\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ((isset($context["name"]) ? $context["name"] : null)) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => (isset($context["name"]) ? $context["name"] : null)), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view_group"]) ? $context["view_group"] : null), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show"), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array"), (isset($context["object"]) ? $context["object"] : null));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  571 => 179,  560 => 177,  556 => 176,  543 => 171,  537 => 169,  535 => 168,  529 => 164,  516 => 160,  507 => 158,  498 => 155,  491 => 153,  477 => 149,  473 => 135,  463 => 132,  460 => 131,  456 => 124,  452 => 123,  444 => 105,  433 => 103,  429 => 102,  418 => 97,  398 => 84,  395 => 83,  389 => 95,  385 => 93,  383 => 83,  380 => 82,  377 => 81,  372 => 136,  336 => 117,  310 => 115,  303 => 113,  288 => 81,  285 => 80,  278 => 77,  275 => 76,  267 => 72,  223 => 65,  217 => 61,  208 => 59,  200 => 56,  175 => 52,  370 => 131,  364 => 127,  358 => 122,  355 => 121,  346 => 91,  343 => 90,  323 => 84,  313 => 81,  305 => 114,  290 => 72,  280 => 68,  274 => 66,  268 => 64,  252 => 70,  188 => 20,  177 => 53,  12 => 34,  160 => 47,  148 => 43,  123 => 50,  116 => 48,  113 => 36,  184 => 72,  99 => 44,  163 => 48,  151 => 44,  129 => 55,  287 => 128,  283 => 79,  256 => 112,  226 => 66,  213 => 84,  205 => 79,  197 => 74,  168 => 68,  156 => 48,  79 => 35,  40 => 17,  1320 => 662,  1317 => 661,  1311 => 664,  1309 => 661,  1304 => 659,  1300 => 657,  1297 => 656,  1291 => 648,  1287 => 646,  1280 => 642,  1276 => 641,  1270 => 638,  1266 => 637,  1262 => 636,  1258 => 634,  1256 => 633,  1235 => 615,  1227 => 610,  1217 => 603,  1205 => 594,  1156 => 550,  1153 => 549,  1151 => 548,  1115 => 515,  1108 => 510,  1106 => 505,  1097 => 499,  1093 => 498,  1088 => 496,  1084 => 495,  1081 => 494,  1078 => 493,  1071 => 651,  1069 => 493,  1065 => 492,  1061 => 490,  1059 => 489,  1056 => 488,  1042 => 472,  1036 => 468,  1021 => 455,  1019 => 454,  1002 => 440,  999 => 439,  995 => 437,  985 => 431,  983 => 430,  976 => 425,  974 => 420,  968 => 417,  965 => 416,  962 => 415,  955 => 483,  953 => 415,  949 => 414,  945 => 412,  943 => 411,  940 => 410,  933 => 405,  926 => 400,  924 => 399,  919 => 397,  914 => 395,  909 => 392,  906 => 391,  903 => 390,  900 => 389,  897 => 387,  894 => 386,  891 => 385,  889 => 384,  886 => 383,  883 => 382,  880 => 381,  878 => 380,  875 => 379,  872 => 378,  869 => 377,  867 => 376,  864 => 375,  861 => 374,  858 => 373,  856 => 372,  853 => 371,  850 => 370,  847 => 369,  844 => 368,  842 => 367,  840 => 366,  837 => 365,  830 => 357,  826 => 356,  822 => 355,  819 => 354,  816 => 353,  809 => 360,  807 => 353,  802 => 351,  798 => 349,  796 => 348,  793 => 347,  786 => 342,  780 => 338,  778 => 337,  773 => 334,  767 => 332,  759 => 327,  756 => 326,  754 => 325,  749 => 323,  745 => 322,  741 => 320,  739 => 319,  736 => 318,  729 => 313,  719 => 305,  717 => 304,  714 => 303,  703 => 294,  701 => 293,  696 => 290,  690 => 288,  684 => 287,  681 => 286,  676 => 285,  673 => 284,  665 => 279,  662 => 278,  660 => 277,  652 => 271,  647 => 268,  635 => 258,  633 => 257,  624 => 251,  620 => 250,  616 => 248,  614 => 247,  611 => 246,  601 => 238,  595 => 237,  589 => 236,  586 => 235,  581 => 234,  578 => 233,  572 => 231,  570 => 230,  561 => 224,  557 => 223,  554 => 222,  551 => 221,  548 => 173,  545 => 219,  542 => 218,  539 => 217,  536 => 216,  534 => 215,  528 => 211,  521 => 207,  514 => 203,  510 => 159,  504 => 199,  501 => 198,  486 => 190,  484 => 189,  481 => 188,  464 => 175,  446 => 162,  441 => 160,  432 => 154,  423 => 150,  414 => 144,  405 => 138,  393 => 134,  391 => 107,  367 => 115,  362 => 114,  360 => 125,  353 => 111,  349 => 92,  341 => 107,  338 => 106,  330 => 86,  324 => 99,  316 => 82,  299 => 111,  294 => 109,  292 => 90,  289 => 89,  282 => 84,  266 => 72,  263 => 62,  261 => 70,  258 => 68,  253 => 65,  250 => 64,  247 => 60,  244 => 31,  236 => 54,  181 => 18,  142 => 41,  140 => 47,  137 => 39,  132 => 56,  130 => 34,  127 => 43,  117 => 50,  107 => 42,  100 => 37,  87 => 36,  80 => 13,  77 => 19,  55 => 25,  523 => 208,  520 => 161,  511 => 164,  506 => 200,  503 => 157,  496 => 158,  494 => 157,  492 => 156,  490 => 192,  485 => 153,  483 => 151,  480 => 150,  465 => 142,  462 => 141,  449 => 122,  445 => 137,  434 => 135,  431 => 134,  428 => 152,  425 => 132,  419 => 130,  416 => 129,  413 => 96,  410 => 95,  407 => 126,  404 => 125,  401 => 137,  399 => 123,  388 => 132,  386 => 118,  382 => 124,  376 => 115,  374 => 114,  371 => 116,  365 => 109,  356 => 107,  352 => 106,  347 => 105,  345 => 109,  342 => 103,  333 => 87,  319 => 97,  312 => 93,  309 => 127,  304 => 90,  286 => 70,  284 => 81,  270 => 120,  264 => 72,  262 => 71,  259 => 70,  251 => 66,  235 => 56,  232 => 55,  229 => 67,  219 => 25,  216 => 49,  209 => 45,  189 => 54,  183 => 104,  178 => 71,  170 => 27,  164 => 25,  158 => 62,  155 => 63,  153 => 58,  121 => 4,  93 => 28,  86 => 37,  73 => 29,  68 => 25,  56 => 18,  37 => 18,  26 => 11,  103 => 43,  84 => 30,  61 => 22,  23 => 11,  493 => 171,  487 => 170,  482 => 167,  474 => 183,  470 => 134,  466 => 133,  457 => 158,  453 => 139,  450 => 156,  448 => 163,  443 => 153,  440 => 152,  436 => 151,  426 => 151,  422 => 98,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 136,  394 => 121,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 100,  368 => 115,  354 => 114,  350 => 118,  335 => 88,  327 => 116,  325 => 107,  322 => 98,  318 => 83,  311 => 100,  307 => 79,  298 => 98,  296 => 75,  291 => 108,  281 => 80,  277 => 124,  271 => 90,  265 => 63,  260 => 61,  254 => 86,  248 => 62,  242 => 104,  237 => 80,  221 => 51,  195 => 55,  191 => 21,  180 => 33,  172 => 51,  143 => 41,  135 => 57,  131 => 44,  114 => 30,  110 => 48,  64 => 27,  276 => 96,  272 => 75,  257 => 60,  249 => 69,  246 => 68,  243 => 60,  241 => 56,  238 => 55,  233 => 53,  230 => 95,  227 => 53,  224 => 77,  222 => 76,  220 => 75,  211 => 60,  207 => 72,  182 => 69,  162 => 49,  146 => 48,  138 => 53,  134 => 45,  122 => 31,  111 => 144,  105 => 142,  74 => 30,  70 => 33,  66 => 31,  62 => 29,  50 => 21,  41 => 18,  97 => 40,  92 => 42,  88 => 38,  82 => 34,  78 => 21,  71 => 31,  59 => 27,  53 => 22,  32 => 15,  90 => 38,  75 => 31,  58 => 25,  24 => 11,  29 => 14,  101 => 140,  96 => 138,  91 => 37,  81 => 36,  49 => 9,  30 => 14,  43 => 13,  47 => 20,  38 => 17,  34 => 16,  46 => 21,  44 => 19,  31 => 14,  204 => 57,  199 => 33,  186 => 35,  174 => 69,  169 => 50,  166 => 49,  161 => 52,  159 => 65,  154 => 45,  145 => 42,  141 => 54,  139 => 39,  126 => 33,  124 => 52,  120 => 47,  118 => 40,  108 => 45,  104 => 46,  94 => 40,  72 => 33,  69 => 32,  65 => 30,  52 => 23,  27 => 13,  35 => 14,  28 => 13,  25 => 12,  22 => 11,  212 => 24,  206 => 78,  202 => 34,  196 => 73,  192 => 71,  190 => 84,  185 => 70,  179 => 102,  176 => 70,  171 => 13,  167 => 54,  165 => 11,  157 => 46,  152 => 51,  150 => 46,  147 => 45,  144 => 57,  136 => 51,  133 => 35,  128 => 40,  125 => 488,  119 => 30,  115 => 46,  112 => 45,  109 => 35,  106 => 34,  102 => 45,  98 => 19,  95 => 43,  89 => 65,  85 => 38,  83 => 25,  76 => 34,  67 => 31,  63 => 16,  60 => 15,  57 => 26,  54 => 14,  51 => 15,  48 => 21,  45 => 20,  42 => 18,  39 => 18,  36 => 17,  33 => 15,);
    }
}
