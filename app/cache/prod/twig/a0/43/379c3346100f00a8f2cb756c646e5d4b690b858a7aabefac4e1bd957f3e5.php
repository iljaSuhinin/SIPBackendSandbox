<?php

/* GenemuFormBundle:Form:div_layout.html.twig */
class __TwigTemplate_a043379c3346100f00a8f2cb756c646e5d4b690b858a7aabefac4e1bd957f3e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'genemu_captcha_widget' => array($this, 'block_genemu_captcha_widget'),
            'genemu_recaptcha_widget' => array($this, 'block_genemu_recaptcha_widget'),
            'genemu_jquerydate_widget' => array($this, 'block_genemu_jquerydate_widget'),
            'genemu_jqueryslider_widget' => array($this, 'block_genemu_jqueryslider_widget'),
            'genemu_jqueryautocompleter_widget' => array($this, 'block_genemu_jqueryautocompleter_widget'),
            'genemu_jquerychosen_widget' => array($this, 'block_genemu_jquerychosen_widget'),
            'genemu_jquerygeolocation_widget' => array($this, 'block_genemu_jquerygeolocation_widget'),
            'genemu_jqueryfile_widget' => array($this, 'block_genemu_jqueryfile_widget'),
            'genemu_jquerycolor_widget' => array($this, 'block_genemu_jquerycolor_widget'),
            'genemu_jqueryrating_widget' => array($this, 'block_genemu_jqueryrating_widget'),
            'genemu_jqueryimage_widget' => array($this, 'block_genemu_jqueryimage_widget'),
            'genemu_jquerytokeninput_widget' => array($this, 'block_genemu_jquerytokeninput_widget'),
            'genemu_plain_widget' => array($this, 'block_genemu_plain_widget'),
            'genemu_jqueryselect2_hidden_row' => array($this, 'block_genemu_jqueryselect2_hidden_row'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('genemu_captcha_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('genemu_recaptcha_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('genemu_jquerydate_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('genemu_jqueryslider_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('genemu_jqueryautocompleter_widget', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('genemu_jquerychosen_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('genemu_jquerygeolocation_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('genemu_jqueryfile_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('genemu_jquerycolor_widget', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('genemu_jqueryrating_widget', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('genemu_jqueryimage_widget', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('genemu_jquerytokeninput_widget', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        $this->displayBlock('genemu_plain_widget', $context, $blocks);
        // line 167
        echo "
";
        // line 168
        $this->displayBlock('genemu_jqueryselect2_hidden_row', $context, $blocks);
    }

    // line 1
    public function block_genemu_captcha_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["src"]) ? $context["src"] : null), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : null)), "html", null, true);
        echo "\" />
    ";
        // line 4
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 8
    public function block_genemu_recaptcha_widget($context, array $blocks = array())
    {
        // line 9
        ob_start();
        // line 10
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_div\" style=\"display: none;\"></div>
    <noscript>
        <iframe src=\"http://www.google.com/recaptcha/api/noscript?k=";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["public_key"]) ? $context["public_key"] : null), "html", null, true);
        echo "\" width=\"500\" height=\"300\" frameborder=\"0\"></iframe>
        <br />
        <textarea name=\"recaptcha_challenge_field\" rows=\"3\" cols=\"40\"></textarea>
        <input type=\"hidden\" name=\"recaptcha_response_field\" value=\"manual_challenge\" />
    </noscript>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 20
    public function block_genemu_jquerydate_widget($context, array $blocks = array())
    {
        // line 21
        ob_start();
        // line 22
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 23
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 25
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 26
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" =>             // line 27
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year"), 'widget'), "{{ month }}" =>             // line 28
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month"), 'widget'), "{{ day }}" =>             // line 29
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day"), 'widget')));
            // line 30
            echo "

            ";
            // line 32
            $context["attr"] = twig_array_merge(array("size" => 10), (isset($context["attr"]) ? $context["attr"] : null));
            // line 33
            echo "            ";
            $context["id"] = ("datepicker_" . (isset($context["id"]) ? $context["id"] : null));
            // line 34
            echo "            ";
            $context["value"] = "";
            // line 35
            echo "            ";
            $context["full_name"] = ("datepicker_" . (isset($context["full_name"]) ? $context["full_name"] : null));
            // line 36
            echo "            ";
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 42
    public function block_genemu_jqueryslider_widget($context, array $blocks = array())
    {
        // line 43
        ob_start();
        // line 44
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
    <div id=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_slider\"></div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 49
    public function block_genemu_jqueryautocompleter_widget($context, array $blocks = array())
    {
        // line 50
        ob_start();
        // line 51
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

    ";
        // line 53
        $context["id"] = ("autocompleter_" . (isset($context["id"]) ? $context["id"] : null));
        // line 54
        echo "    ";
        $context["full_name"] = ("autocompleter_" . (isset($context["full_name"]) ? $context["full_name"] : null));
        // line 55
        echo "    ";
        $context["value"] = (isset($context["autocompleter_value"]) ? $context["autocompleter_value"] : null);
        // line 56
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 60
    public function block_genemu_jquerychosen_widget($context, array $blocks = array())
    {
        // line 61
        ob_start();
        // line 62
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-placeholder" => (isset($context["empty_value"]) ? $context["empty_value"] : null), "class" => "chzn-select"), (isset($context["attr"]) ? $context["attr"] : null));
        // line 66
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 70
    public function block_genemu_jquerygeolocation_widget($context, array $blocks = array())
    {
        // line 71
        ob_start();
        // line 72
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

    ";
        // line 74
        if (((isset($context["map"]) ? $context["map"] : null) === true)) {
            // line 75
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "_map\">&nbsp;</div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 80
    public function block_genemu_jqueryfile_widget($context, array $blocks = array())
    {
        // line 81
        ob_start();
        // line 82
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
    <div id=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_upload\"></div>
    <div class=\"queue\">
        <div id=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_queue\"></div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 90
    public function block_genemu_jquerycolor_widget($context, array $blocks = array())
    {
        // line 91
        ob_start();
        // line 92
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "image")) {
            // line 93
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "_color\" ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div";
            // line 94
            if ((isset($context["value"]) ? $context["value"] : null)) {
                echo " style=\"background-color: #";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo ";\"";
            }
            echo ">&nbsp;</div>
            ";
            // line 95
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 98
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 103
    public function block_genemu_jqueryrating_widget($context, array $blocks = array())
    {
        // line 104
        ob_start();
        // line 105
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 107
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 113
    public function block_genemu_jqueryimage_widget($context, array $blocks = array())
    {
        // line 114
        ob_start();
        // line 115
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_container\">
        <div class=\"left\">
            <div id=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_preview\">
                ";
        // line 118
        $context["type"] = "hidden";
        // line 119
        echo "                ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

                <a id=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_overlay\" href=\"#\">&nbsp;</a>

                ";
        // line 123
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 124
            echo "                    ";
            $context["widthMax"] = ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "width")) : (500));
            // line 125
            echo "                    ";
            $context["ratio"] = ((((isset($context["width"]) ? $context["width"] : null) > (isset($context["widthMax"]) ? $context["widthMax"] : null))) ? (((isset($context["width"]) ? $context["width"] : null) / (isset($context["widthMax"]) ? $context["widthMax"] : null))) : (1));
            // line 126
            echo "                    ";
            $context["asset"] = $this->env->getExtension('assets')->getAssetUrl(((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "file")) : ((isset($context["value"]) ? $context["value"] : null))));
            // line 127
            echo "                    ";
            $context["width"] = ((isset($context["width"]) ? $context["width"] : null) / (isset($context["ratio"]) ? $context["ratio"] : null));
            // line 128
            echo "                    ";
            $context["height"] = ((isset($context["height"]) ? $context["height"] : null) / (isset($context["ratio"]) ? $context["ratio"] : null));
            // line 129
            echo "                ";
        } else {
            // line 130
            echo "                    ";
            $context["asset"] = $this->env->getExtension('assets')->getAssetUrl("bundles/genemuform/images/default.png");
            // line 131
            echo "                    ";
            $context["width"] = 96;
            // line 132
            echo "                    ";
            $context["height"] = 96;
            // line 133
            echo "                ";
        }
        // line 134
        echo "
                <img id=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_img_preview\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset"]) ? $context["asset"] : null), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "\" />
            </div>
            <ul id=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_options\" class=\"options\">
                ";
        // line 138
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) ? $context["filters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 139
            echo "                    <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["filter"]) ? $context["filter"] : null), "html", null, true);
            echo " change\"></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "            </ul>
            <div id=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_upload\"></div>
            <div class=\"queue\">
                <div id=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_queue\"></div>
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 151
    public function block_genemu_jquerytokeninput_widget($context, array $blocks = array())
    {
        // line 152
        ob_start();
        // line 153
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

";
        // line 155
        $context["id"] = ("tokeninput_" . (isset($context["id"]) ? $context["id"] : null));
        // line 156
        $context["full_name"] = ("tokeninput_" . (isset($context["full_name"]) ? $context["full_name"] : null));
        // line 157
        $context["value"] = (isset($context["tokeninput_value"]) ? $context["tokeninput_value"] : null);
        // line 158
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 162
    public function block_genemu_plain_widget($context, array $blocks = array())
    {
        // line 163
        echo "    <div ";
        $this->displayBlock("container_attributes", $context, $blocks);
        echo ">
        <p ";
        // line 164
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null));
        echo "</p>
    </div>
";
    }

    // line 168
    public function block_genemu_jqueryselect2_hidden_row($context, array $blocks = array())
    {
        // line 169
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  523 => 169,  520 => 168,  511 => 164,  506 => 163,  503 => 162,  496 => 158,  494 => 157,  492 => 156,  490 => 155,  485 => 153,  483 => 152,  480 => 151,  465 => 142,  462 => 141,  449 => 138,  445 => 137,  434 => 135,  431 => 134,  428 => 133,  425 => 132,  419 => 130,  416 => 129,  413 => 128,  410 => 127,  407 => 126,  404 => 125,  401 => 124,  399 => 123,  388 => 119,  386 => 118,  382 => 117,  376 => 115,  374 => 114,  371 => 113,  365 => 109,  356 => 107,  352 => 106,  347 => 105,  345 => 104,  342 => 103,  333 => 98,  319 => 94,  312 => 93,  309 => 92,  304 => 90,  286 => 82,  284 => 81,  270 => 74,  264 => 72,  262 => 71,  259 => 70,  251 => 66,  235 => 56,  232 => 55,  229 => 54,  219 => 50,  216 => 49,  209 => 45,  189 => 36,  183 => 34,  178 => 32,  170 => 27,  164 => 25,  158 => 23,  155 => 22,  153 => 21,  121 => 4,  93 => 161,  86 => 113,  73 => 89,  68 => 79,  56 => 49,  37 => 5,  26 => 3,  103 => 27,  84 => 24,  61 => 60,  23 => 1,  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 144,  466 => 160,  457 => 158,  453 => 139,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 131,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 121,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 118,  368 => 115,  354 => 114,  350 => 112,  335 => 110,  327 => 95,  325 => 107,  322 => 106,  318 => 104,  311 => 100,  307 => 91,  298 => 98,  296 => 85,  291 => 83,  281 => 80,  277 => 93,  271 => 90,  265 => 89,  260 => 87,  254 => 86,  248 => 62,  242 => 82,  237 => 80,  221 => 51,  195 => 75,  191 => 74,  180 => 33,  172 => 29,  143 => 55,  135 => 51,  131 => 9,  114 => 37,  110 => 3,  64 => 13,  276 => 96,  272 => 75,  257 => 92,  249 => 90,  246 => 61,  243 => 60,  241 => 85,  238 => 83,  233 => 79,  230 => 81,  227 => 53,  224 => 77,  222 => 76,  220 => 75,  211 => 73,  207 => 72,  182 => 69,  162 => 61,  146 => 56,  138 => 53,  134 => 52,  122 => 42,  111 => 36,  105 => 1,  74 => 19,  70 => 18,  66 => 70,  62 => 14,  50 => 9,  41 => 8,  97 => 28,  92 => 20,  88 => 150,  82 => 18,  78 => 102,  71 => 80,  59 => 9,  53 => 48,  32 => 8,  90 => 25,  75 => 20,  58 => 59,  24 => 2,  29 => 2,  101 => 168,  96 => 162,  91 => 151,  81 => 103,  49 => 9,  30 => 4,  43 => 19,  47 => 12,  38 => 7,  34 => 4,  46 => 20,  44 => 10,  31 => 3,  204 => 44,  199 => 42,  186 => 35,  174 => 30,  169 => 26,  166 => 62,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 54,  139 => 12,  126 => 47,  124 => 46,  120 => 44,  118 => 43,  108 => 2,  104 => 32,  94 => 27,  72 => 25,  69 => 15,  65 => 19,  52 => 19,  27 => 6,  35 => 4,  28 => 3,  25 => 1,  22 => 1,  212 => 76,  206 => 78,  202 => 43,  196 => 73,  192 => 71,  190 => 84,  185 => 70,  179 => 64,  176 => 65,  171 => 28,  167 => 59,  165 => 59,  157 => 58,  152 => 51,  150 => 20,  147 => 49,  144 => 48,  136 => 55,  133 => 10,  128 => 8,  125 => 43,  119 => 41,  115 => 42,  112 => 34,  109 => 33,  106 => 28,  102 => 31,  98 => 167,  95 => 21,  89 => 28,  85 => 22,  83 => 112,  76 => 90,  67 => 17,  63 => 69,  60 => 11,  57 => 16,  54 => 11,  51 => 42,  48 => 41,  45 => 8,  42 => 7,  39 => 5,  36 => 1,  33 => 1,);
    }
}
