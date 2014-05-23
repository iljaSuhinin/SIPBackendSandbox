<?php

/* SonataAdminBundle:Pager:base_links.html.twig */
class __TwigTemplate_5ca219627103434660d489f10b6bd6c7cf8ff7bc8635960d9d3eacb7720142af extends Twig_Template
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
        // line 11
        echo "
<tr>
    <td colspan=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements")), "html", null, true);
        echo "\">
        <div class=\"pagination pagination-centered\">
            <ul>
                ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page") > 2)) {
            // line 17
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => 1), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
                ";
        }
        // line 19
        echo "
                ";
        // line 20
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "previouspage"))) {
            // line 21
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "previouspage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&lsaquo;</a></li>
                ";
        }
        // line 23
        echo "
                ";
        // line 25
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "getLinks", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "                    ";
            if (((isset($context["page"]) ? $context["page"] : null) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page"))) {
                // line 27
                echo "                        <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : null)), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 29
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : null)), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                ";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nextpage"))) {
            // line 34
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nextpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
                ";
        }
        // line 36
        echo "
                ";
        // line 37
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage")) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nextpage")))) {
            // line 38
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&raquo;</a></li>
                ";
        }
        // line 40
        echo "            </ul>
        </div>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  704 => 213,  698 => 210,  695 => 209,  693 => 208,  687 => 205,  677 => 204,  672 => 202,  657 => 199,  654 => 198,  646 => 193,  643 => 192,  626 => 190,  609 => 189,  604 => 187,  599 => 186,  596 => 185,  593 => 184,  587 => 180,  583 => 178,  576 => 176,  559 => 174,  538 => 172,  533 => 171,  530 => 170,  527 => 169,  524 => 168,  519 => 166,  489 => 134,  471 => 128,  458 => 147,  447 => 142,  442 => 140,  437 => 138,  421 => 128,  412 => 127,  396 => 119,  361 => 106,  339 => 99,  332 => 95,  329 => 93,  314 => 89,  300 => 84,  239 => 63,  231 => 59,  203 => 55,  194 => 50,  149 => 34,  315 => 89,  295 => 87,  255 => 68,  218 => 54,  193 => 50,  187 => 47,  571 => 179,  560 => 177,  556 => 176,  543 => 171,  537 => 169,  535 => 168,  529 => 164,  516 => 165,  507 => 160,  498 => 156,  491 => 153,  477 => 130,  473 => 135,  463 => 132,  460 => 131,  456 => 146,  452 => 123,  444 => 141,  433 => 103,  429 => 102,  418 => 97,  398 => 120,  395 => 83,  389 => 95,  385 => 93,  383 => 83,  380 => 115,  377 => 114,  372 => 136,  336 => 117,  310 => 87,  303 => 113,  288 => 84,  285 => 79,  278 => 77,  275 => 76,  267 => 72,  223 => 56,  217 => 61,  208 => 59,  200 => 54,  175 => 52,  370 => 131,  364 => 107,  358 => 105,  355 => 121,  346 => 91,  343 => 95,  323 => 84,  313 => 81,  305 => 114,  290 => 72,  280 => 78,  274 => 66,  268 => 64,  252 => 67,  188 => 20,  177 => 53,  12 => 34,  160 => 41,  148 => 43,  123 => 50,  116 => 48,  113 => 25,  184 => 47,  99 => 44,  163 => 48,  151 => 44,  129 => 55,  287 => 128,  283 => 82,  256 => 112,  226 => 58,  213 => 84,  205 => 79,  197 => 74,  168 => 68,  156 => 35,  79 => 13,  40 => 54,  1320 => 662,  1317 => 661,  1311 => 664,  1309 => 661,  1304 => 659,  1300 => 657,  1297 => 656,  1291 => 648,  1287 => 646,  1280 => 642,  1276 => 641,  1270 => 638,  1266 => 637,  1262 => 636,  1258 => 634,  1256 => 633,  1235 => 615,  1227 => 610,  1217 => 603,  1205 => 594,  1156 => 550,  1153 => 549,  1151 => 548,  1115 => 515,  1108 => 510,  1106 => 505,  1097 => 499,  1093 => 498,  1088 => 496,  1084 => 495,  1081 => 494,  1078 => 493,  1071 => 651,  1069 => 493,  1065 => 492,  1061 => 490,  1059 => 489,  1056 => 488,  1042 => 472,  1036 => 468,  1021 => 455,  1019 => 454,  1002 => 440,  999 => 439,  995 => 437,  985 => 431,  983 => 430,  976 => 425,  974 => 420,  968 => 417,  965 => 416,  962 => 415,  955 => 483,  953 => 415,  949 => 414,  945 => 412,  943 => 411,  940 => 410,  933 => 405,  926 => 400,  924 => 399,  919 => 397,  914 => 395,  909 => 392,  906 => 391,  903 => 390,  900 => 389,  897 => 387,  894 => 386,  891 => 385,  889 => 384,  886 => 383,  883 => 382,  880 => 381,  878 => 380,  875 => 379,  872 => 378,  869 => 377,  867 => 376,  864 => 375,  861 => 374,  858 => 373,  856 => 372,  853 => 371,  850 => 370,  847 => 369,  844 => 368,  842 => 367,  840 => 366,  837 => 365,  830 => 357,  826 => 356,  822 => 355,  819 => 354,  816 => 353,  809 => 360,  807 => 353,  802 => 351,  798 => 349,  796 => 348,  793 => 347,  786 => 342,  780 => 338,  778 => 337,  773 => 334,  767 => 332,  759 => 327,  756 => 326,  754 => 325,  749 => 323,  745 => 322,  741 => 320,  739 => 319,  736 => 318,  729 => 313,  719 => 305,  717 => 304,  714 => 303,  703 => 294,  701 => 293,  696 => 290,  690 => 288,  684 => 287,  681 => 286,  676 => 285,  673 => 284,  665 => 279,  662 => 278,  660 => 200,  652 => 271,  647 => 268,  635 => 258,  633 => 257,  624 => 251,  620 => 250,  616 => 248,  614 => 247,  611 => 246,  601 => 238,  595 => 237,  589 => 236,  586 => 235,  581 => 177,  578 => 233,  572 => 231,  570 => 230,  561 => 224,  557 => 223,  554 => 222,  551 => 221,  548 => 173,  545 => 219,  542 => 173,  539 => 217,  536 => 216,  534 => 215,  528 => 211,  521 => 167,  514 => 203,  510 => 159,  504 => 199,  501 => 157,  486 => 190,  484 => 189,  481 => 188,  464 => 149,  446 => 162,  441 => 160,  432 => 154,  423 => 135,  414 => 144,  405 => 138,  393 => 134,  391 => 107,  367 => 115,  362 => 114,  360 => 125,  353 => 111,  349 => 92,  341 => 94,  338 => 93,  330 => 86,  324 => 91,  316 => 82,  299 => 111,  294 => 82,  292 => 81,  289 => 80,  282 => 84,  266 => 71,  263 => 62,  261 => 70,  258 => 68,  253 => 67,  250 => 66,  247 => 60,  244 => 31,  236 => 62,  181 => 45,  142 => 31,  140 => 27,  137 => 39,  132 => 24,  130 => 34,  127 => 23,  117 => 50,  107 => 23,  100 => 37,  87 => 16,  80 => 8,  77 => 19,  55 => 23,  523 => 208,  520 => 161,  511 => 164,  506 => 200,  503 => 158,  496 => 155,  494 => 157,  492 => 156,  490 => 192,  485 => 153,  483 => 132,  480 => 150,  465 => 142,  462 => 141,  449 => 122,  445 => 137,  434 => 135,  431 => 134,  428 => 152,  425 => 132,  419 => 130,  416 => 129,  413 => 96,  410 => 95,  407 => 124,  404 => 125,  401 => 121,  399 => 123,  388 => 132,  386 => 118,  382 => 124,  376 => 115,  374 => 113,  371 => 116,  365 => 109,  356 => 107,  352 => 103,  347 => 97,  345 => 101,  342 => 100,  333 => 87,  319 => 97,  312 => 93,  309 => 127,  304 => 90,  286 => 70,  284 => 81,  270 => 120,  264 => 72,  262 => 70,  259 => 70,  251 => 66,  235 => 56,  232 => 55,  229 => 67,  219 => 25,  216 => 49,  209 => 45,  189 => 54,  183 => 104,  178 => 43,  170 => 27,  164 => 38,  158 => 62,  155 => 38,  153 => 58,  121 => 28,  93 => 34,  86 => 37,  73 => 29,  68 => 5,  56 => 80,  37 => 53,  26 => 13,  103 => 43,  84 => 15,  61 => 22,  23 => 11,  493 => 154,  487 => 170,  482 => 167,  474 => 129,  470 => 134,  466 => 133,  457 => 158,  453 => 145,  450 => 156,  448 => 163,  443 => 153,  440 => 152,  436 => 151,  426 => 136,  422 => 98,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 136,  394 => 121,  392 => 118,  387 => 116,  381 => 121,  378 => 120,  375 => 119,  373 => 100,  368 => 115,  354 => 114,  350 => 102,  335 => 97,  327 => 92,  325 => 107,  322 => 90,  318 => 90,  311 => 100,  307 => 79,  298 => 88,  296 => 75,  291 => 85,  281 => 80,  277 => 77,  271 => 73,  265 => 63,  260 => 61,  254 => 86,  248 => 62,  242 => 104,  237 => 80,  221 => 51,  195 => 55,  191 => 21,  180 => 33,  172 => 51,  143 => 28,  135 => 57,  131 => 44,  114 => 40,  110 => 24,  64 => 27,  276 => 96,  272 => 75,  257 => 68,  249 => 69,  246 => 65,  243 => 60,  241 => 64,  238 => 55,  233 => 53,  230 => 60,  227 => 53,  224 => 77,  222 => 76,  220 => 75,  211 => 57,  207 => 72,  182 => 69,  162 => 49,  146 => 29,  138 => 53,  134 => 25,  122 => 31,  111 => 144,  105 => 17,  74 => 29,  70 => 184,  66 => 27,  62 => 164,  50 => 75,  41 => 7,  97 => 40,  92 => 42,  88 => 32,  82 => 31,  78 => 21,  71 => 6,  59 => 81,  53 => 78,  32 => 16,  90 => 17,  75 => 198,  58 => 25,  24 => 11,  29 => 14,  101 => 36,  96 => 138,  91 => 33,  81 => 36,  49 => 19,  30 => 3,  43 => 44,  47 => 21,  38 => 17,  34 => 17,  46 => 18,  44 => 20,  31 => 13,  204 => 57,  199 => 52,  186 => 35,  174 => 69,  169 => 50,  166 => 49,  161 => 37,  159 => 36,  154 => 45,  145 => 42,  141 => 54,  139 => 39,  126 => 30,  124 => 29,  120 => 47,  118 => 27,  108 => 45,  104 => 37,  94 => 40,  72 => 197,  69 => 32,  65 => 165,  52 => 112,  27 => 3,  35 => 5,  28 => 13,  25 => 2,  22 => 11,  212 => 24,  206 => 56,  202 => 53,  196 => 51,  192 => 71,  190 => 49,  185 => 70,  179 => 45,  176 => 42,  171 => 13,  167 => 54,  165 => 11,  157 => 46,  152 => 36,  150 => 46,  147 => 33,  144 => 57,  136 => 51,  133 => 35,  128 => 40,  125 => 488,  119 => 30,  115 => 26,  112 => 45,  109 => 35,  106 => 38,  102 => 45,  98 => 20,  95 => 19,  89 => 65,  85 => 10,  83 => 9,  76 => 7,  67 => 183,  63 => 26,  60 => 154,  57 => 153,  54 => 21,  51 => 67,  48 => 66,  45 => 20,  42 => 19,  39 => 18,  36 => 16,  33 => 15,);
    }
}
