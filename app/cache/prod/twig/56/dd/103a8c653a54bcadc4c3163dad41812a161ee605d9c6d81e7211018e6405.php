<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_56dd103a8c653a54bcadc4c3163dad41812a161ee605d9c6d81e7211018e6405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'formactions' => array($this, 'block_formactions'),
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

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_form($context, array $blocks = array())
    {
        // line 24
        echo "    <form class=\"form-horizontal\"
              action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "acl", 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "
              method=\"POST\"
              ";
        // line 27
        if ((!$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "html5_validate"), "method"))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 28
        echo "              >
        ";
        // line 29
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "errors")) > 0)) {
            // line 30
            echo "            <div class=\"sonata-ba-form-error\">
                ";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
            </div>
        ";
        }
        // line 34
        echo "
        <table class=\"table\">
            <thead>
                <tr>
                    <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 40
            echo "                    <th>";
            echo twig_escape_filter($this->env, (isset($context["permission"]) ? $context["permission"] : null), "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </tr>
            </thead>
            <tbody>
            ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            echo "                <tr>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
            echo "</td>
                    ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 49
                echo "                    <td>";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id") . (isset($context["permission"]) ? $context["permission"] : null)), array(), "array"), 'widget');
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </tbody>
        </table>

        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

        ";
        // line 58
        $this->displayBlock('formactions', $context, $blocks);
        // line 63
        echo "    </form>
";
    }

    // line 58
    public function block_formactions($context, array $blocks = array())
    {
        // line 59
        echo "            <div class=\"well well-small form-actions\">
                <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_acl", array(), "SonataAdminBundle"), "html", null, true);
        echo "\"/>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 58,  148 => 56,  123 => 48,  116 => 46,  113 => 36,  184 => 72,  99 => 39,  163 => 59,  151 => 63,  129 => 52,  287 => 128,  283 => 127,  256 => 112,  226 => 94,  213 => 84,  205 => 79,  197 => 74,  168 => 68,  156 => 48,  79 => 32,  40 => 18,  1320 => 662,  1317 => 661,  1311 => 664,  1309 => 661,  1304 => 659,  1300 => 657,  1297 => 656,  1291 => 648,  1287 => 646,  1280 => 642,  1276 => 641,  1270 => 638,  1266 => 637,  1262 => 636,  1258 => 634,  1256 => 633,  1235 => 615,  1227 => 610,  1217 => 603,  1205 => 594,  1156 => 550,  1153 => 549,  1151 => 548,  1115 => 515,  1108 => 510,  1106 => 505,  1097 => 499,  1093 => 498,  1088 => 496,  1084 => 495,  1081 => 494,  1078 => 493,  1071 => 651,  1069 => 493,  1065 => 492,  1061 => 490,  1059 => 489,  1056 => 488,  1042 => 472,  1036 => 468,  1021 => 455,  1019 => 454,  1002 => 440,  999 => 439,  995 => 437,  985 => 431,  983 => 430,  976 => 425,  974 => 420,  968 => 417,  965 => 416,  962 => 415,  955 => 483,  953 => 415,  949 => 414,  945 => 412,  943 => 411,  940 => 410,  933 => 405,  926 => 400,  924 => 399,  919 => 397,  914 => 395,  909 => 392,  906 => 391,  903 => 390,  900 => 389,  897 => 387,  894 => 386,  891 => 385,  889 => 384,  886 => 383,  883 => 382,  880 => 381,  878 => 380,  875 => 379,  872 => 378,  869 => 377,  867 => 376,  864 => 375,  861 => 374,  858 => 373,  856 => 372,  853 => 371,  850 => 370,  847 => 369,  844 => 368,  842 => 367,  840 => 366,  837 => 365,  830 => 357,  826 => 356,  822 => 355,  819 => 354,  816 => 353,  809 => 360,  807 => 353,  802 => 351,  798 => 349,  796 => 348,  793 => 347,  786 => 342,  780 => 338,  778 => 337,  773 => 334,  767 => 332,  759 => 327,  756 => 326,  754 => 325,  749 => 323,  745 => 322,  741 => 320,  739 => 319,  736 => 318,  729 => 313,  719 => 305,  717 => 304,  714 => 303,  703 => 294,  701 => 293,  696 => 290,  690 => 288,  684 => 287,  681 => 286,  676 => 285,  673 => 284,  665 => 279,  662 => 278,  660 => 277,  652 => 271,  647 => 268,  635 => 258,  633 => 257,  624 => 251,  620 => 250,  616 => 248,  614 => 247,  611 => 246,  601 => 238,  595 => 237,  589 => 236,  586 => 235,  581 => 234,  578 => 233,  572 => 231,  570 => 230,  561 => 224,  557 => 223,  554 => 222,  551 => 221,  548 => 220,  545 => 219,  542 => 218,  539 => 217,  536 => 216,  534 => 215,  528 => 211,  521 => 207,  514 => 203,  510 => 202,  504 => 199,  501 => 198,  486 => 190,  484 => 189,  481 => 188,  464 => 175,  446 => 162,  441 => 160,  432 => 154,  423 => 150,  414 => 144,  405 => 138,  393 => 134,  391 => 133,  367 => 115,  362 => 114,  360 => 113,  353 => 111,  349 => 110,  341 => 107,  338 => 106,  330 => 103,  324 => 99,  316 => 96,  299 => 94,  294 => 91,  292 => 90,  289 => 89,  282 => 84,  266 => 72,  263 => 116,  261 => 70,  258 => 68,  253 => 65,  250 => 64,  247 => 60,  244 => 59,  236 => 54,  181 => 18,  142 => 41,  140 => 55,  137 => 39,  132 => 42,  130 => 656,  127 => 49,  117 => 47,  107 => 42,  100 => 31,  87 => 33,  80 => 30,  77 => 131,  55 => 20,  523 => 208,  520 => 168,  511 => 164,  506 => 200,  503 => 162,  496 => 158,  494 => 157,  492 => 156,  490 => 192,  485 => 153,  483 => 152,  480 => 151,  465 => 142,  462 => 141,  449 => 138,  445 => 137,  434 => 135,  431 => 134,  428 => 152,  425 => 132,  419 => 130,  416 => 129,  413 => 128,  410 => 127,  407 => 126,  404 => 125,  401 => 137,  399 => 123,  388 => 132,  386 => 118,  382 => 124,  376 => 115,  374 => 114,  371 => 116,  365 => 109,  356 => 107,  352 => 106,  347 => 105,  345 => 109,  342 => 103,  333 => 104,  319 => 97,  312 => 93,  309 => 127,  304 => 90,  286 => 82,  284 => 81,  270 => 120,  264 => 72,  262 => 71,  259 => 70,  251 => 66,  235 => 56,  232 => 55,  229 => 54,  219 => 50,  216 => 49,  209 => 45,  189 => 36,  183 => 34,  178 => 71,  170 => 27,  164 => 25,  158 => 62,  155 => 63,  153 => 58,  121 => 4,  93 => 28,  86 => 113,  73 => 29,  68 => 79,  56 => 24,  37 => 16,  26 => 3,  103 => 40,  84 => 34,  61 => 22,  23 => 1,  493 => 171,  487 => 170,  482 => 167,  474 => 183,  470 => 144,  466 => 160,  457 => 158,  453 => 139,  450 => 156,  448 => 163,  443 => 153,  440 => 152,  436 => 151,  426 => 151,  422 => 131,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 136,  394 => 121,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 118,  368 => 115,  354 => 114,  350 => 112,  335 => 105,  327 => 102,  325 => 107,  322 => 98,  318 => 104,  311 => 100,  307 => 96,  298 => 98,  296 => 85,  291 => 83,  281 => 80,  277 => 124,  271 => 90,  265 => 89,  260 => 87,  254 => 86,  248 => 62,  242 => 104,  237 => 80,  221 => 51,  195 => 75,  191 => 71,  180 => 33,  172 => 29,  143 => 53,  135 => 43,  131 => 35,  114 => 45,  110 => 32,  64 => 23,  276 => 96,  272 => 75,  257 => 92,  249 => 108,  246 => 61,  243 => 60,  241 => 56,  238 => 55,  233 => 53,  230 => 95,  227 => 53,  224 => 77,  222 => 76,  220 => 75,  211 => 73,  207 => 72,  182 => 69,  162 => 49,  146 => 56,  138 => 53,  134 => 38,  122 => 39,  111 => 44,  105 => 41,  74 => 19,  70 => 28,  66 => 27,  62 => 23,  50 => 19,  41 => 18,  97 => 38,  92 => 197,  88 => 28,  82 => 22,  78 => 31,  71 => 30,  59 => 25,  53 => 23,  32 => 15,  90 => 38,  75 => 30,  58 => 21,  24 => 2,  29 => 14,  101 => 17,  96 => 38,  91 => 13,  81 => 26,  49 => 9,  30 => 14,  43 => 19,  47 => 17,  38 => 11,  34 => 15,  46 => 21,  44 => 18,  31 => 14,  204 => 35,  199 => 33,  186 => 35,  174 => 69,  169 => 26,  166 => 60,  161 => 52,  159 => 65,  154 => 63,  145 => 59,  141 => 54,  139 => 40,  126 => 51,  124 => 46,  120 => 47,  118 => 43,  108 => 2,  104 => 33,  94 => 39,  72 => 28,  69 => 19,  65 => 24,  52 => 21,  27 => 13,  35 => 16,  28 => 12,  25 => 12,  22 => 11,  212 => 39,  206 => 78,  202 => 34,  196 => 73,  192 => 71,  190 => 84,  185 => 70,  179 => 64,  176 => 70,  171 => 13,  167 => 67,  165 => 11,  157 => 58,  152 => 51,  150 => 46,  147 => 45,  144 => 57,  136 => 51,  133 => 10,  128 => 40,  125 => 488,  119 => 47,  115 => 46,  112 => 45,  109 => 35,  106 => 34,  102 => 31,  98 => 40,  95 => 198,  89 => 17,  85 => 27,  83 => 31,  76 => 29,  67 => 25,  63 => 23,  60 => 27,  57 => 26,  54 => 13,  51 => 42,  48 => 20,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 15,);
    }
}
