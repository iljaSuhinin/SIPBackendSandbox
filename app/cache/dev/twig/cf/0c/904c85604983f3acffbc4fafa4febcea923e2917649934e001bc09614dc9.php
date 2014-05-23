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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">
                ";
        // line 7
        echo "<span style=\"width:0px; height: 28px; vertical-align: middle;\"></span>
                <span class=\"sf-toolbar-status\">";
        // line 8
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "blocks")), "html", null, true);
        echo "</span> blocks
            </a>
        </div>
        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Real Blocks</b>
                <span>";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "realBlocks")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Containers</b>
                <span>";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "containers")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total Blocks</b>
                <span>";
        // line 22
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "blocks")), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "blocks")), "html", null, true);
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
        $context["blocks"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "realBlocks");
        // line 41
        echo "    ";
        $this->displayBlock("table", $context, $blocks);
        echo "

    <h2>Containers Blocks</h2>
    ";
        // line 44
        $context["blocks"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "containers");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["id"] => $context["block"]) {
            // line 61
            echo "            <tr>
                <th>";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "</th>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name"), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type"), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "memory_end") - $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "memory_start")) / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "memory_peak") / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "duration"), 2), "html", null, true);
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
        return array (  151 => 63,  140 => 60,  103 => 40,  100 => 39,  80 => 28,  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  406 => 135,  400 => 131,  394 => 129,  387 => 125,  378 => 120,  375 => 119,  368 => 115,  350 => 112,  335 => 110,  327 => 108,  311 => 100,  271 => 90,  260 => 87,  254 => 86,  248 => 83,  242 => 82,  237 => 80,  221 => 77,  180 => 65,  172 => 60,  131 => 49,  276 => 96,  257 => 92,  246 => 88,  243 => 86,  233 => 79,  227 => 78,  224 => 77,  220 => 75,  207 => 72,  182 => 69,  174 => 61,  138 => 53,  90 => 25,  74 => 17,  190 => 70,  185 => 70,  176 => 70,  157 => 58,  152 => 51,  136 => 42,  128 => 44,  125 => 43,  115 => 35,  106 => 32,  60 => 11,  49 => 7,  47 => 10,  34 => 3,  31 => 3,  832 => 488,  829 => 487,  818 => 485,  814 => 484,  810 => 482,  797 => 481,  771 => 476,  768 => 475,  749 => 473,  732 => 472,  728 => 470,  724 => 469,  720 => 468,  716 => 467,  712 => 466,  708 => 465,  704 => 464,  701 => 463,  699 => 462,  682 => 461,  671 => 460,  656 => 455,  651 => 453,  647 => 452,  644 => 451,  642 => 450,  628 => 449,  591 => 414,  573 => 411,  556 => 410,  553 => 409,  551 => 408,  546 => 406,  541 => 404,  214 => 90,  208 => 87,  202 => 71,  199 => 85,  196 => 73,  191 => 74,  189 => 82,  162 => 61,  124 => 45,  113 => 41,  110 => 36,  88 => 25,  81 => 21,  373 => 118,  367 => 123,  363 => 121,  342 => 116,  325 => 107,  322 => 106,  319 => 108,  316 => 107,  313 => 106,  307 => 99,  298 => 98,  288 => 98,  275 => 96,  253 => 92,  245 => 85,  241 => 85,  234 => 81,  222 => 76,  212 => 76,  195 => 75,  146 => 56,  141 => 54,  135 => 51,  132 => 51,  129 => 51,  98 => 28,  71 => 22,  68 => 14,  65 => 13,  59 => 11,  54 => 10,  51 => 8,  37 => 4,  170 => 63,  163 => 66,  149 => 61,  143 => 55,  127 => 39,  120 => 47,  96 => 28,  92 => 33,  89 => 33,  52 => 14,  94 => 27,  91 => 32,  66 => 15,  392 => 128,  389 => 159,  381 => 121,  374 => 156,  370 => 155,  366 => 153,  361 => 120,  356 => 149,  348 => 147,  346 => 146,  343 => 145,  337 => 114,  334 => 113,  331 => 112,  329 => 138,  324 => 135,  312 => 129,  310 => 105,  305 => 125,  299 => 121,  296 => 97,  293 => 100,  291 => 95,  286 => 115,  284 => 97,  279 => 111,  277 => 93,  272 => 94,  268 => 94,  262 => 103,  258 => 101,  256 => 100,  238 => 83,  235 => 88,  230 => 81,  225 => 93,  213 => 77,  211 => 73,  192 => 71,  187 => 66,  178 => 58,  173 => 75,  169 => 54,  166 => 62,  158 => 47,  155 => 64,  147 => 62,  130 => 50,  112 => 44,  97 => 38,  85 => 22,  79 => 17,  64 => 18,  42 => 6,  39 => 5,  82 => 18,  75 => 13,  72 => 12,  57 => 14,  50 => 9,  45 => 7,  43 => 11,  40 => 10,  25 => 1,  167 => 67,  160 => 59,  148 => 46,  142 => 57,  134 => 52,  123 => 31,  118 => 43,  114 => 45,  111 => 36,  109 => 33,  104 => 32,  101 => 31,  95 => 27,  86 => 25,  83 => 29,  77 => 14,  69 => 11,  63 => 13,  58 => 6,  55 => 13,  53 => 10,  44 => 6,  35 => 4,  32 => 3,  465 => 202,  456 => 199,  452 => 198,  449 => 197,  444 => 196,  442 => 195,  434 => 189,  432 => 188,  425 => 184,  418 => 180,  411 => 138,  404 => 172,  397 => 130,  390 => 164,  383 => 158,  376 => 156,  364 => 152,  358 => 150,  354 => 114,  351 => 118,  345 => 137,  341 => 135,  338 => 134,  332 => 131,  328 => 111,  326 => 128,  323 => 127,  318 => 104,  315 => 130,  306 => 122,  303 => 121,  301 => 102,  292 => 113,  289 => 112,  281 => 94,  278 => 105,  273 => 95,  270 => 136,  265 => 89,  259 => 96,  251 => 97,  249 => 90,  244 => 93,  236 => 87,  232 => 87,  229 => 84,  223 => 81,  219 => 79,  216 => 78,  210 => 75,  206 => 78,  203 => 72,  200 => 76,  197 => 75,  194 => 67,  188 => 66,  184 => 80,  181 => 64,  179 => 64,  175 => 57,  171 => 62,  168 => 60,  165 => 59,  159 => 65,  156 => 56,  153 => 51,  150 => 58,  144 => 61,  137 => 39,  133 => 41,  126 => 50,  122 => 42,  119 => 41,  116 => 42,  108 => 30,  105 => 41,  102 => 31,  99 => 33,  93 => 20,  87 => 24,  84 => 25,  76 => 19,  73 => 21,  70 => 15,  67 => 14,  62 => 14,  56 => 5,  48 => 8,  46 => 9,  41 => 6,  38 => 5,  36 => 4,  33 => 3,);
    }
}
