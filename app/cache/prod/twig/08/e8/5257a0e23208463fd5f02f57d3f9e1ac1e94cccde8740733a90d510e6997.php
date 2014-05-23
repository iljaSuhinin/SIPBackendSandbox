<?php

/* SonataUserBundle:Admin/Security:login.html.twig */
class __TwigTemplate_08e85257a0e23208463fd5f02f57d3f9e1ac1e94cccde8740733a90d510e6997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"connection\">
        <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_check");
        echo "\" method=\"post\">

            ";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 8
            echo "                <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "SonataUserBundle"), "html", null, true);
            echo "</div>
            ";
        }
        // line 10
        echo "
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

            <div class=\"control-group\">
                <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                <div class=\"controls\">
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" class=\"big sonata-medium\"/>
                </div>
            </div>

            <div class=\"control-group\">
                <label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                <div class=\"controls\">
                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"big sonata-medium\" />
                </div>
            </div>

            <div class=\"control-group\">
                <label for=\"remember_me\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                </label>
            </div>

            <div class=\"form-actions\">
                <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 139,  384 => 149,  240 => 85,  215 => 74,  679 => 401,  642 => 380,  636 => 377,  632 => 376,  608 => 361,  598 => 354,  591 => 350,  584 => 346,  580 => 344,  553 => 326,  541 => 319,  517 => 306,  512 => 304,  495 => 295,  469 => 280,  459 => 273,  455 => 272,  438 => 258,  427 => 254,  369 => 210,  334 => 187,  301 => 173,  245 => 112,  730 => 241,  727 => 240,  722 => 235,  715 => 231,  709 => 228,  705 => 226,  700 => 224,  694 => 222,  692 => 221,  689 => 220,  683 => 218,  678 => 216,  670 => 213,  667 => 394,  661 => 210,  659 => 209,  656 => 208,  653 => 388,  649 => 162,  634 => 158,  629 => 157,  621 => 155,  613 => 153,  607 => 143,  603 => 142,  600 => 141,  594 => 140,  575 => 134,  568 => 132,  563 => 130,  558 => 128,  555 => 127,  531 => 122,  525 => 120,  513 => 144,  505 => 119,  451 => 68,  439 => 63,  435 => 62,  403 => 52,  363 => 140,  359 => 32,  351 => 29,  348 => 28,  328 => 237,  326 => 124,  308 => 200,  297 => 194,  228 => 79,  225 => 171,  198 => 166,  173 => 78,  704 => 213,  698 => 210,  695 => 209,  693 => 410,  687 => 205,  677 => 397,  672 => 214,  657 => 390,  654 => 198,  646 => 381,  643 => 161,  626 => 373,  609 => 189,  604 => 187,  599 => 186,  596 => 185,  593 => 184,  587 => 180,  583 => 136,  576 => 340,  559 => 174,  538 => 172,  533 => 171,  530 => 170,  527 => 169,  524 => 168,  519 => 119,  489 => 292,  471 => 128,  458 => 147,  447 => 142,  442 => 260,  437 => 138,  421 => 56,  412 => 127,  396 => 119,  361 => 106,  339 => 99,  332 => 95,  329 => 185,  314 => 89,  300 => 84,  239 => 108,  231 => 173,  203 => 72,  194 => 69,  149 => 52,  315 => 142,  295 => 134,  255 => 90,  218 => 54,  193 => 50,  187 => 47,  571 => 179,  560 => 330,  556 => 176,  543 => 171,  537 => 169,  535 => 168,  529 => 310,  516 => 165,  507 => 302,  498 => 116,  491 => 112,  477 => 285,  473 => 135,  463 => 132,  460 => 71,  456 => 146,  452 => 123,  444 => 65,  433 => 103,  429 => 102,  418 => 247,  398 => 120,  395 => 155,  389 => 46,  385 => 44,  383 => 83,  380 => 115,  377 => 114,  372 => 143,  336 => 128,  310 => 201,  303 => 138,  288 => 84,  285 => 79,  278 => 186,  275 => 158,  267 => 72,  223 => 56,  217 => 98,  208 => 59,  200 => 89,  175 => 115,  370 => 131,  364 => 208,  358 => 138,  355 => 121,  346 => 134,  343 => 132,  323 => 84,  313 => 202,  305 => 114,  290 => 108,  280 => 78,  274 => 100,  268 => 125,  252 => 181,  188 => 85,  177 => 53,  12 => 34,  160 => 41,  148 => 43,  123 => 56,  116 => 48,  113 => 51,  184 => 79,  99 => 44,  163 => 75,  151 => 63,  129 => 55,  287 => 128,  283 => 130,  256 => 148,  226 => 58,  213 => 84,  205 => 79,  197 => 86,  168 => 76,  156 => 71,  79 => 20,  40 => 7,  1320 => 662,  1317 => 661,  1311 => 664,  1309 => 661,  1304 => 659,  1300 => 657,  1297 => 656,  1291 => 648,  1287 => 646,  1280 => 642,  1276 => 641,  1270 => 638,  1266 => 637,  1262 => 636,  1258 => 634,  1256 => 633,  1235 => 615,  1227 => 610,  1217 => 603,  1205 => 594,  1156 => 550,  1153 => 549,  1151 => 548,  1115 => 515,  1108 => 510,  1106 => 505,  1097 => 499,  1093 => 498,  1088 => 496,  1084 => 495,  1081 => 494,  1078 => 493,  1071 => 651,  1069 => 493,  1065 => 492,  1061 => 490,  1059 => 489,  1056 => 488,  1042 => 472,  1036 => 468,  1021 => 455,  1019 => 454,  1002 => 440,  999 => 439,  995 => 437,  985 => 431,  983 => 430,  976 => 425,  974 => 420,  968 => 417,  965 => 416,  962 => 415,  955 => 483,  953 => 415,  949 => 414,  945 => 412,  943 => 411,  940 => 410,  933 => 405,  926 => 400,  924 => 399,  919 => 397,  914 => 395,  909 => 392,  906 => 391,  903 => 390,  900 => 389,  897 => 387,  894 => 386,  891 => 385,  889 => 384,  886 => 383,  883 => 382,  880 => 381,  878 => 380,  875 => 379,  872 => 378,  869 => 377,  867 => 376,  864 => 375,  861 => 374,  858 => 373,  856 => 372,  853 => 371,  850 => 370,  847 => 369,  844 => 368,  842 => 367,  840 => 366,  837 => 365,  830 => 357,  826 => 356,  822 => 355,  819 => 354,  816 => 353,  809 => 360,  807 => 353,  802 => 351,  798 => 349,  796 => 348,  793 => 347,  786 => 342,  780 => 338,  778 => 337,  773 => 334,  767 => 332,  759 => 327,  756 => 326,  754 => 325,  749 => 323,  745 => 322,  741 => 320,  739 => 319,  736 => 318,  729 => 313,  719 => 305,  717 => 304,  714 => 303,  703 => 225,  701 => 293,  696 => 290,  690 => 288,  684 => 404,  681 => 217,  676 => 285,  673 => 284,  665 => 279,  662 => 392,  660 => 200,  652 => 271,  647 => 268,  635 => 258,  633 => 257,  624 => 156,  620 => 250,  616 => 366,  614 => 247,  611 => 246,  601 => 238,  595 => 237,  589 => 137,  586 => 235,  581 => 177,  578 => 341,  572 => 133,  570 => 337,  561 => 224,  557 => 223,  554 => 222,  551 => 221,  548 => 126,  545 => 321,  542 => 173,  539 => 124,  536 => 123,  534 => 312,  528 => 121,  521 => 307,  514 => 203,  510 => 143,  504 => 199,  501 => 117,  486 => 190,  484 => 290,  481 => 188,  464 => 72,  446 => 261,  441 => 160,  432 => 255,  423 => 249,  414 => 144,  405 => 138,  393 => 47,  391 => 107,  367 => 141,  362 => 114,  360 => 139,  353 => 137,  349 => 135,  341 => 94,  338 => 188,  330 => 125,  324 => 183,  316 => 82,  299 => 111,  294 => 169,  292 => 192,  289 => 132,  282 => 84,  266 => 124,  263 => 123,  261 => 93,  258 => 183,  253 => 67,  250 => 88,  247 => 178,  244 => 31,  236 => 62,  181 => 45,  142 => 59,  140 => 48,  137 => 58,  132 => 56,  130 => 55,  127 => 23,  117 => 23,  107 => 49,  100 => 37,  87 => 38,  80 => 27,  77 => 33,  55 => 20,  523 => 208,  520 => 161,  511 => 164,  506 => 200,  503 => 158,  496 => 155,  494 => 157,  492 => 156,  490 => 192,  485 => 111,  483 => 132,  480 => 110,  465 => 142,  462 => 141,  449 => 67,  445 => 137,  434 => 135,  431 => 61,  428 => 152,  425 => 250,  419 => 130,  416 => 129,  413 => 96,  410 => 242,  407 => 54,  404 => 125,  401 => 121,  399 => 234,  388 => 151,  386 => 224,  382 => 124,  376 => 115,  374 => 37,  371 => 116,  365 => 109,  356 => 107,  352 => 103,  347 => 97,  345 => 101,  342 => 22,  333 => 240,  319 => 205,  312 => 93,  309 => 140,  304 => 90,  286 => 166,  284 => 105,  270 => 156,  264 => 72,  262 => 70,  259 => 120,  251 => 115,  235 => 83,  232 => 55,  229 => 67,  219 => 99,  216 => 126,  209 => 73,  189 => 81,  183 => 63,  178 => 62,  170 => 27,  164 => 70,  158 => 62,  155 => 92,  153 => 64,  121 => 28,  93 => 27,  86 => 37,  73 => 33,  68 => 29,  56 => 21,  37 => 16,  26 => 18,  103 => 22,  84 => 32,  61 => 23,  23 => 1,  493 => 154,  487 => 170,  482 => 167,  474 => 129,  470 => 73,  466 => 133,  457 => 70,  453 => 145,  450 => 156,  448 => 267,  443 => 153,  440 => 152,  436 => 151,  426 => 136,  422 => 98,  420 => 140,  415 => 55,  411 => 138,  406 => 135,  400 => 157,  397 => 156,  394 => 121,  392 => 118,  387 => 116,  381 => 121,  378 => 146,  375 => 119,  373 => 100,  368 => 115,  354 => 30,  350 => 102,  335 => 247,  327 => 92,  325 => 107,  322 => 123,  318 => 90,  311 => 100,  307 => 174,  298 => 88,  296 => 75,  291 => 85,  281 => 80,  277 => 128,  271 => 126,  265 => 63,  260 => 149,  254 => 86,  248 => 62,  242 => 104,  237 => 80,  221 => 51,  195 => 87,  191 => 21,  180 => 147,  172 => 73,  143 => 49,  135 => 59,  131 => 58,  114 => 40,  110 => 24,  64 => 27,  276 => 96,  272 => 184,  257 => 68,  249 => 69,  246 => 87,  243 => 60,  241 => 139,  238 => 84,  233 => 105,  230 => 134,  227 => 102,  224 => 77,  222 => 100,  220 => 75,  211 => 124,  207 => 170,  182 => 107,  162 => 69,  146 => 94,  138 => 81,  134 => 25,  122 => 31,  111 => 47,  105 => 17,  74 => 28,  70 => 32,  66 => 24,  62 => 28,  50 => 19,  41 => 17,  97 => 21,  92 => 37,  88 => 30,  82 => 31,  78 => 39,  71 => 22,  59 => 40,  53 => 17,  32 => 4,  90 => 17,  75 => 37,  58 => 21,  24 => 12,  29 => 3,  101 => 47,  96 => 36,  91 => 33,  81 => 40,  49 => 9,  30 => 16,  43 => 18,  47 => 19,  38 => 5,  34 => 15,  46 => 8,  44 => 17,  31 => 14,  204 => 169,  199 => 52,  186 => 64,  174 => 61,  169 => 100,  166 => 107,  161 => 74,  159 => 67,  154 => 45,  145 => 60,  141 => 61,  139 => 60,  126 => 57,  124 => 52,  120 => 50,  118 => 40,  108 => 46,  104 => 73,  94 => 40,  72 => 24,  69 => 25,  65 => 29,  52 => 20,  27 => 13,  35 => 5,  28 => 12,  25 => 12,  22 => 11,  212 => 95,  206 => 92,  202 => 168,  196 => 165,  192 => 68,  190 => 86,  185 => 84,  179 => 81,  176 => 42,  171 => 60,  167 => 71,  165 => 70,  157 => 66,  152 => 96,  150 => 68,  147 => 67,  144 => 66,  136 => 90,  133 => 56,  128 => 44,  125 => 488,  119 => 88,  115 => 52,  112 => 69,  109 => 35,  106 => 45,  102 => 30,  98 => 42,  95 => 45,  89 => 43,  85 => 32,  83 => 41,  76 => 19,  67 => 50,  63 => 17,  60 => 22,  57 => 14,  54 => 24,  51 => 11,  48 => 10,  45 => 18,  42 => 8,  39 => 17,  36 => 15,  33 => 15,);
    }
}
