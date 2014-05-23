<?php

/* SonataBlockBundle:Profiler:block.html.twig */
class __TwigTemplate_cf0c904c85604983f3acffbc4fafa4febcea923e2917649934e001bc09614dc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'table' => array($this, 'block_table'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : null), "panel" => (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "\">
                ";
        // line 7
        echo "<span style=\"width:0px; height: 28px; vertical-align: middle;\"></span>
                <span class=\"sf-toolbar-status\">";
        // line 8
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "blocks")), "html", null, true);
        echo "</span> blocks
            </a>
        </div>
        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Real Blocks</b>
                <span>";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "realBlocks")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Containers</b>
                <span>";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "containers")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total Blocks</b>
                <span>";
        // line 22
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "blocks")), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>
";
    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        // line 29
        echo "    <span class=\"label\">
        <span class=\"icon\"><img src=\"data:image/png;base64,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\" alt=\"\" /></span>
        <strong>Blocks</strong>
        <span class=\"count\">
            <span>";
        // line 33
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "blocks")), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 38
    public function block_panel($context, array $blocks = array())
    {
        // line 39
        echo "    <h2>Real Blocks</h2>
    ";
        // line 40
        $context["blocks"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "realBlocks");
        // line 41
        echo "    ";
        $this->displayBlock("table", $context, $blocks);
        echo "

    <h2>Containers Blocks</h2>
    ";
        // line 44
        $context["blocks"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "containers");
        // line 45
        echo "    ";
        $this->displayBlock("table", $context, $blocks);
        echo "

    ";
        // line 47
        $this->displayBlock("javascript", $context, $blocks);
        echo "
";
    }

    // line 50
    public function block_table($context, array $blocks = array())
    {
        // line 51
        echo "    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Memory (diff)</th>
            <th>Memory (peak)</th>
            <th>Duration</th>
        </tr>
        ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["block"]) {
            // line 61
            echo "            <tr>
                <th>";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "</th>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "name"), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "memory_end") - $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "memory_start")) / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "memory_peak") / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "duration"), 2), "html", null, true);
            echo " ms</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Profiler:block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 66,  151 => 63,  129 => 51,  287 => 128,  283 => 127,  256 => 112,  226 => 94,  213 => 84,  205 => 79,  197 => 74,  168 => 56,  156 => 50,  79 => 9,  40 => 18,  1320 => 662,  1317 => 661,  1311 => 664,  1309 => 661,  1304 => 659,  1300 => 657,  1297 => 656,  1291 => 648,  1287 => 646,  1280 => 642,  1276 => 641,  1270 => 638,  1266 => 637,  1262 => 636,  1258 => 634,  1256 => 633,  1235 => 615,  1227 => 610,  1217 => 603,  1205 => 594,  1156 => 550,  1153 => 549,  1151 => 548,  1115 => 515,  1108 => 510,  1106 => 505,  1097 => 499,  1093 => 498,  1088 => 496,  1084 => 495,  1081 => 494,  1078 => 493,  1071 => 651,  1069 => 493,  1065 => 492,  1061 => 490,  1059 => 489,  1056 => 488,  1042 => 472,  1036 => 468,  1021 => 455,  1019 => 454,  1002 => 440,  999 => 439,  995 => 437,  985 => 431,  983 => 430,  976 => 425,  974 => 420,  968 => 417,  965 => 416,  962 => 415,  955 => 483,  953 => 415,  949 => 414,  945 => 412,  943 => 411,  940 => 410,  933 => 405,  926 => 400,  924 => 399,  919 => 397,  914 => 395,  909 => 392,  906 => 391,  903 => 390,  900 => 389,  897 => 387,  894 => 386,  891 => 385,  889 => 384,  886 => 383,  883 => 382,  880 => 381,  878 => 380,  875 => 379,  872 => 378,  869 => 377,  867 => 376,  864 => 375,  861 => 374,  858 => 373,  856 => 372,  853 => 371,  850 => 370,  847 => 369,  844 => 368,  842 => 367,  840 => 366,  837 => 365,  830 => 357,  826 => 356,  822 => 355,  819 => 354,  816 => 353,  809 => 360,  807 => 353,  802 => 351,  798 => 349,  796 => 348,  793 => 347,  786 => 342,  780 => 338,  778 => 337,  773 => 334,  767 => 332,  759 => 327,  756 => 326,  754 => 325,  749 => 323,  745 => 322,  741 => 320,  739 => 319,  736 => 318,  729 => 313,  719 => 305,  717 => 304,  714 => 303,  703 => 294,  701 => 293,  696 => 290,  690 => 288,  684 => 287,  681 => 286,  676 => 285,  673 => 284,  665 => 279,  662 => 278,  660 => 277,  652 => 271,  647 => 268,  635 => 258,  633 => 257,  624 => 251,  620 => 250,  616 => 248,  614 => 247,  611 => 246,  601 => 238,  595 => 237,  589 => 236,  586 => 235,  581 => 234,  578 => 233,  572 => 231,  570 => 230,  561 => 224,  557 => 223,  554 => 222,  551 => 221,  548 => 220,  545 => 219,  542 => 218,  539 => 217,  536 => 216,  534 => 215,  528 => 211,  521 => 207,  514 => 203,  510 => 202,  504 => 199,  501 => 198,  486 => 190,  484 => 189,  481 => 188,  464 => 175,  446 => 162,  441 => 160,  432 => 154,  423 => 150,  414 => 144,  405 => 138,  393 => 134,  391 => 133,  367 => 115,  362 => 114,  360 => 113,  353 => 111,  349 => 110,  341 => 107,  338 => 106,  330 => 103,  324 => 99,  316 => 96,  299 => 94,  294 => 91,  292 => 90,  289 => 89,  282 => 84,  266 => 72,  263 => 116,  261 => 70,  258 => 68,  253 => 65,  250 => 64,  247 => 60,  244 => 59,  236 => 54,  181 => 18,  142 => 41,  140 => 60,  137 => 39,  132 => 667,  130 => 656,  127 => 655,  117 => 409,  107 => 346,  100 => 39,  87 => 27,  80 => 28,  77 => 131,  55 => 20,  523 => 208,  520 => 168,  511 => 164,  506 => 200,  503 => 162,  496 => 158,  494 => 157,  492 => 156,  490 => 192,  485 => 153,  483 => 152,  480 => 151,  465 => 142,  462 => 141,  449 => 138,  445 => 137,  434 => 135,  431 => 134,  428 => 152,  425 => 132,  419 => 130,  416 => 129,  413 => 128,  410 => 127,  407 => 126,  404 => 125,  401 => 137,  399 => 123,  388 => 132,  386 => 118,  382 => 124,  376 => 115,  374 => 114,  371 => 116,  365 => 109,  356 => 107,  352 => 106,  347 => 105,  345 => 109,  342 => 103,  333 => 104,  319 => 97,  312 => 93,  309 => 127,  304 => 90,  286 => 82,  284 => 81,  270 => 120,  264 => 72,  262 => 71,  259 => 70,  251 => 66,  235 => 56,  232 => 55,  229 => 54,  219 => 50,  216 => 49,  209 => 45,  189 => 36,  183 => 34,  178 => 32,  170 => 27,  164 => 25,  158 => 51,  155 => 64,  153 => 49,  121 => 4,  93 => 28,  86 => 113,  73 => 19,  68 => 79,  56 => 23,  37 => 4,  26 => 3,  103 => 40,  84 => 26,  61 => 15,  23 => 11,  493 => 171,  487 => 170,  482 => 167,  474 => 183,  470 => 144,  466 => 160,  457 => 158,  453 => 139,  450 => 156,  448 => 163,  443 => 153,  440 => 152,  436 => 151,  426 => 151,  422 => 131,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 136,  394 => 121,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 118,  368 => 115,  354 => 114,  350 => 112,  335 => 105,  327 => 102,  325 => 107,  322 => 98,  318 => 104,  311 => 100,  307 => 96,  298 => 98,  296 => 85,  291 => 83,  281 => 80,  277 => 124,  271 => 90,  265 => 89,  260 => 87,  254 => 86,  248 => 62,  242 => 104,  237 => 80,  221 => 51,  195 => 75,  191 => 71,  180 => 33,  172 => 29,  143 => 55,  135 => 51,  131 => 35,  114 => 45,  110 => 32,  64 => 18,  276 => 96,  272 => 75,  257 => 92,  249 => 108,  246 => 61,  243 => 60,  241 => 56,  238 => 55,  233 => 53,  230 => 95,  227 => 53,  224 => 77,  222 => 76,  220 => 75,  211 => 73,  207 => 72,  182 => 69,  162 => 61,  146 => 56,  138 => 53,  134 => 38,  122 => 487,  111 => 36,  105 => 41,  74 => 19,  70 => 25,  66 => 70,  62 => 3,  50 => 48,  41 => 6,  97 => 38,  92 => 197,  88 => 150,  82 => 22,  78 => 22,  71 => 22,  59 => 17,  53 => 22,  32 => 15,  90 => 188,  75 => 89,  58 => 14,  24 => 2,  29 => 14,  101 => 17,  96 => 15,  91 => 13,  81 => 103,  49 => 9,  30 => 13,  43 => 19,  47 => 19,  38 => 11,  34 => 3,  46 => 20,  44 => 18,  31 => 3,  204 => 35,  199 => 33,  186 => 35,  174 => 14,  169 => 26,  166 => 62,  161 => 52,  159 => 65,  154 => 63,  145 => 59,  141 => 54,  139 => 40,  126 => 50,  124 => 46,  120 => 47,  118 => 43,  108 => 2,  104 => 32,  94 => 14,  72 => 88,  69 => 19,  65 => 18,  52 => 15,  27 => 6,  35 => 16,  28 => 12,  25 => 1,  22 => 1,  212 => 39,  206 => 78,  202 => 34,  196 => 73,  192 => 71,  190 => 84,  185 => 70,  179 => 64,  176 => 70,  171 => 13,  167 => 67,  165 => 11,  157 => 58,  152 => 51,  150 => 20,  147 => 62,  144 => 61,  136 => 55,  133 => 10,  128 => 8,  125 => 488,  119 => 26,  115 => 25,  112 => 44,  109 => 33,  106 => 28,  102 => 31,  98 => 16,  95 => 198,  89 => 33,  85 => 11,  83 => 29,  76 => 90,  67 => 25,  63 => 23,  60 => 2,  57 => 14,  54 => 13,  51 => 42,  48 => 8,  45 => 7,  42 => 6,  39 => 17,  36 => 1,  33 => 9,);
    }
}
