<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_29a0cadf186ed51c6e28d966c113bf5afec789484dcaef2c332828e8c4ef29a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  91 => 32,  66 => 18,  392 => 160,  389 => 159,  381 => 157,  374 => 156,  370 => 155,  366 => 153,  361 => 151,  356 => 149,  348 => 147,  346 => 146,  343 => 145,  337 => 141,  334 => 140,  331 => 139,  329 => 138,  324 => 135,  312 => 129,  310 => 128,  305 => 125,  299 => 121,  296 => 120,  293 => 119,  291 => 118,  286 => 115,  284 => 114,  279 => 111,  277 => 110,  272 => 107,  268 => 105,  262 => 103,  258 => 101,  256 => 100,  238 => 89,  235 => 88,  230 => 86,  225 => 83,  213 => 77,  211 => 76,  192 => 66,  187 => 63,  178 => 58,  173 => 56,  169 => 54,  166 => 53,  158 => 47,  155 => 46,  147 => 42,  130 => 35,  112 => 27,  97 => 21,  85 => 28,  79 => 25,  64 => 17,  42 => 6,  39 => 5,  82 => 18,  75 => 13,  72 => 12,  57 => 22,  50 => 8,  45 => 7,  43 => 11,  40 => 10,  25 => 1,  167 => 58,  160 => 56,  148 => 46,  142 => 45,  134 => 42,  123 => 31,  118 => 39,  114 => 38,  111 => 37,  109 => 36,  104 => 33,  101 => 32,  95 => 29,  86 => 25,  83 => 27,  77 => 14,  69 => 11,  63 => 6,  58 => 13,  55 => 12,  53 => 14,  44 => 8,  35 => 4,  32 => 6,  465 => 202,  456 => 199,  452 => 198,  449 => 197,  444 => 196,  442 => 195,  434 => 189,  432 => 188,  425 => 184,  418 => 180,  411 => 176,  404 => 172,  397 => 168,  390 => 164,  383 => 158,  376 => 156,  364 => 152,  358 => 150,  354 => 141,  351 => 140,  345 => 137,  341 => 135,  338 => 134,  332 => 131,  328 => 129,  326 => 128,  323 => 127,  318 => 131,  315 => 130,  306 => 122,  303 => 121,  301 => 120,  292 => 113,  289 => 112,  281 => 106,  278 => 105,  273 => 102,  270 => 101,  265 => 98,  259 => 96,  251 => 97,  249 => 96,  244 => 93,  236 => 87,  232 => 87,  229 => 84,  223 => 81,  219 => 79,  216 => 78,  210 => 75,  206 => 73,  203 => 72,  200 => 69,  197 => 68,  194 => 67,  188 => 66,  184 => 65,  181 => 59,  179 => 63,  175 => 57,  171 => 61,  168 => 60,  165 => 57,  159 => 58,  156 => 56,  153 => 55,  150 => 43,  144 => 51,  137 => 39,  133 => 46,  126 => 41,  122 => 40,  119 => 39,  116 => 38,  108 => 25,  105 => 24,  102 => 23,  99 => 31,  93 => 20,  87 => 24,  84 => 23,  76 => 24,  73 => 15,  70 => 20,  67 => 19,  62 => 14,  56 => 12,  48 => 9,  46 => 9,  41 => 6,  38 => 9,  36 => 4,  33 => 3,);
    }
}
