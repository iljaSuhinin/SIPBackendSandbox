<?php

/* SecurityBundle:Collector:security.html.twig */
class __TwigTemplate_0b512b2a08f239fb00cef3a9b83c9021c22c49369868f9d5617270d42b575960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user")) {
            // line 5
            echo "        ";
            $context["color_code"] = ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled") && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated"))) ? ("green") : ("yellow"));
            // line 6
            echo "        ";
            $context["authentication_color_code"] = ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled") && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated"))) ? ("green") : ("red"));
            // line 7
            echo "        ";
            $context["authentication_color_text"] = ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled") && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated"))) ? ("Yes") : ("No"));
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context["color_code"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled")) ? ("red") : ("black"));
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user")) {
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Logged in as</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["color_code"]) ? $context["color_code"] : $this->getContext($context, "color_code")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user"), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Authenticated</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["authentication_color_code"]) ? $context["authentication_color_code"] : $this->getContext($context, "authentication_color_code")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["authentication_color_text"]) ? $context["authentication_color_text"] : $this->getContext($context, "authentication_color_text")), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 21
            if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass") != null)) {
                // line 22
                echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token class</b>
                ";
                // line 24
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass"));
                echo "
            </div>
            ";
            }
            // line 27
            echo "        ";
        } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled")) {
            // line 28
            echo "            You are not authenticated.
        ";
        } else {
            // line 30
            echo "            The security is disabled.
        ";
        }
        // line 32
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "    ";
        ob_start();
        // line 34
        echo "        <img width=\"24\" height=\"28\" alt=\"Security\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAcCAYAAAB75n/uAAAC70lEQVR42u2V3UtTYRzHu+mFwCwK+gO6CEryPlg7yiYx50vDqUwjFIZDSYUk2ZTmCysHvg9ZVggOQZiRScsR4VwXTjEwdKZWk8o6gd5UOt0mbev7g/PAkLONIOkiBx+25/v89vuc85zn2Q5Fo9F95UDwnwhS5HK5TyqVRv8m1JN6k+AiC+fn54cwbgFNIrTQ/J9IqDcJJDGBHsgDgYBSq9W6ysvLPf39/SSUUU7zsQ1yc3MjmN90OBzfRkZG1umzQqGIxPSTkIBjgdDkaGNjoza2kcFgUCE/QvMsq6io2PV6vQu1tbV8Xl7etkql2qqvr/+MbDE/Pz8s9OP2Cjhwwmw29+4R3Kec1WZnZ4fn5uamc3Jyttra2qbH8ero6JgdHh5+CvFHq9X6JZHgzODgoCVW0NPTY0N+ltU2Nzdv4GqXsYSrPp+vDw80aLFYxru6uhyQ/rDb7a8TCVJDodB1jUazTVlxcXGQ5/mbyE+z2u7u7veY38BVT3Z2djopm5qa6isrK/tQWVn5qb29fSGR4DC4PDAwMEsZHuArjGnyGKutq6v7ajQaF6urq9/MzMz0QuSemJiwQDwGkR0POhhXgILjNTU1TaWlpTxlOp1uyWQyaUjMajMzM8Nut/tJQUHBOpZppbCwkM/KytrBznuL9xDVxBMo8KXHYnu6qKjIivmrbIy67x6Px4Yd58W672ApfzY0NCyNjo7OZmRkiAv8fr+O47iwmABXtoXaG3uykF6vX7bZbF6cgZWqqiqezYkKcNtmjO+CF2AyhufgjsvlMiU7vXEF+4C4ALf9CwdrlVAqlcFkTdRqdQSHLUDgBEeSCrArAsiGwENs0XfJBE6ncxm1D8Aj/B6tigkkJSUlmxSwLYhMDeRsyyUCd+lHrWxtbe2aTCbbZTn1ZD92F0Cr8GBfgnsgDZwDt8EzMBmHMXBLqD0PDMAh9Gql3iRIESQSIAXp4CRIBZeEjIvDFZAm1J4C6UK9ROiZcvCn/+8FvwHtDdJEaRY+oQAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["color_code"]) ? $context["color_code"] : $this->getContext($context, "color_code")), "html", null, true);
        echo "\"></span>
        ";
        // line 36
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user")) {
            echo "<div class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user"), "html", null, true);
            echo "</div>";
        }
        // line 37
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        // line 42
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAYAAABaKIzgAAADqUlEQVR42u2YXUiTYRTHs6wbg4Toru4iI7qIrgoFv3XOj0BRpoE4U5n4AV6UOg0UhhaKwvLCr2ZeTPwIsbL50Yb5Oc0hrFU2WY55sUJB2wK3qbn+J15jvJhvay9S4MWfPe95znme357znPOOHXO73f+FjkD/OdDQ0FBf5DPo6bi4OC0Wch+WaD/a11vQyxR82KJ9vQUN2QvWarUWPE9CY4xeu1yucfqkZ5Ymyd8H0BBvQcM8gqsgAdmgqJaWlgdRUVEOgUBgLy4uHpqamhLDHsHMC8h/PwihUOiuqKhwNTU12eVyuV0mkzkSEhJ2WaBhvoAKIH/Gfi45Ofmj5+KJiYnvYQ+kwmD8BGzI0tLSzfX19ZmJiQlNa2vrbG1traGnp2fObDbPNTY22vkAZQdfjY2NdbJBpqenKWV+BOsZS6qsrLSvra31ZmVlLdFzUlKSDRnZonF0dLQTV2WEfPgGvYmUu9igSL+ITpMNKhKJtm02mzI9Pd2CNNt0Ol2P1Wp9otfrB1Qqlaazs3M4LS3ts8lkGuQb9EZeXt4q6+5tOxwOIeZOskGbm5uNdXV1wzQeGBgYWlhYaKD7nZGRYYJfaUFBwWJ4ePgOxg/xucsn6BW1Wv0Ui/4Cxam8oS8AHWeDjoyMvMzOzjbjNB2wS4uKijRkl0gkeqfTmY5r5ED/dNjtdhmzVyhfoGehXJziDtOkv+P5LnSeINmg/f39zwC1kpqa+hX2O4A2kl2j0SgxV0vjhoYGPb5sH9+p99/Y2IiLiYn5CYq79w22WOjUfqBVVVU6hUIxRWnFPb4Hyfv6+sbb29ubl5eXJR0dHaMGg0GBzsFbMfnV19efEYvFtwGn25sjgJycnOdQJHxOsEGR2q2lpaXHiLNS3y0pKXm1V/2ZmZm6wsLCWap8vtpTRHV19XUs+OWgtwpAPtTU1FyCf7inPTc314gsPAKkiR0THx+/ib76Dmvv8gF6KyUlRUdjLsFvBv5JbDtOdBG9VI6qV7e1tVm6u7st8/Pzc0aj8YVUKl2h4uQDVEIt5E9AqYrhn7ffHNqSKz8/34BTny0rK3uLwvoUGRm5zdsrtKurq436HDQKjR2gYahGqVS2UJwX8h30b3UEygXK/m3K9bvTy1j+QfE26cVcIonGHHAcsfyABqNCV3+z2AUSF5i3sbQf7estaBB0H1J5VPUgVA5dZFTO2MY4xR2rYvYL8hY0gAkKhsI8dA0KJNGYsXGLOzaY2S/g6A+II1CWfgAh4q3QhpOWjAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
    <strong>Security</strong>
</span>
";
    }

    // line 48
    public function block_panel($context, array $blocks = array())
    {
        // line 49
        echo "    <h2>Security</h2>
    ";
        // line 50
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user")) {
            // line 51
            echo "        <table>
            <tr>
                <th>Username</th>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Authenticated?</th>
                <td>
                    ";
            // line 59
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated")) {
                // line 60
                echo "                        yes
                    ";
            } else {
                // line 62
                echo "                        no ";
                if ((!twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles")))) {
                    echo "<em>(probably because the user has no roles)</em>";
                }
                // line 63
                echo "                    ";
            }
            // line 64
            echo "                </td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles")), "html", null, true);
            echo "</td>
            </tr>
            ";
            // line 70
            if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass") != null)) {
                // line 71
                echo "            <tr>
                <th>Token class</th>
                <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            // line 76
            echo "        </table>
    ";
        } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled")) {
            // line 78
            echo "        <p>
            <em>No token</em>
        </p>
    ";
        } else {
            // line 82
            echo "        <p>
            <em>The security component is disabled</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SecurityBundle:Collector:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 70,  185 => 68,  176 => 63,  157 => 54,  152 => 51,  136 => 42,  128 => 38,  125 => 37,  115 => 35,  106 => 32,  60 => 12,  49 => 13,  47 => 10,  34 => 4,  31 => 3,  832 => 488,  829 => 487,  818 => 485,  814 => 484,  810 => 482,  797 => 481,  771 => 476,  768 => 475,  749 => 473,  732 => 472,  728 => 470,  724 => 469,  720 => 468,  716 => 467,  712 => 466,  708 => 465,  704 => 464,  701 => 463,  699 => 462,  682 => 461,  671 => 460,  656 => 455,  651 => 453,  647 => 452,  644 => 451,  642 => 450,  628 => 449,  591 => 414,  573 => 411,  556 => 410,  553 => 409,  551 => 408,  546 => 406,  541 => 404,  214 => 90,  208 => 87,  202 => 76,  199 => 85,  196 => 73,  191 => 83,  189 => 82,  162 => 71,  124 => 45,  113 => 41,  110 => 40,  88 => 27,  81 => 24,  373 => 126,  367 => 123,  363 => 121,  342 => 116,  325 => 110,  322 => 109,  319 => 108,  316 => 107,  313 => 106,  307 => 104,  298 => 101,  288 => 98,  275 => 96,  253 => 92,  245 => 85,  241 => 83,  234 => 81,  222 => 92,  212 => 82,  195 => 74,  146 => 48,  141 => 45,  135 => 52,  132 => 51,  129 => 40,  98 => 28,  71 => 15,  68 => 14,  65 => 13,  59 => 11,  54 => 10,  51 => 9,  37 => 5,  170 => 63,  163 => 60,  149 => 61,  143 => 54,  127 => 39,  120 => 47,  96 => 34,  92 => 33,  89 => 24,  52 => 14,  94 => 30,  91 => 32,  66 => 18,  392 => 160,  389 => 159,  381 => 157,  374 => 156,  370 => 155,  366 => 153,  361 => 120,  356 => 149,  348 => 147,  346 => 146,  343 => 145,  337 => 114,  334 => 113,  331 => 112,  329 => 138,  324 => 135,  312 => 129,  310 => 105,  305 => 125,  299 => 121,  296 => 120,  293 => 100,  291 => 118,  286 => 115,  284 => 97,  279 => 111,  277 => 110,  272 => 107,  268 => 94,  262 => 103,  258 => 101,  256 => 100,  238 => 89,  235 => 88,  230 => 86,  225 => 93,  213 => 77,  211 => 76,  192 => 71,  187 => 66,  178 => 58,  173 => 75,  169 => 54,  166 => 62,  158 => 47,  155 => 52,  147 => 49,  130 => 50,  112 => 34,  97 => 21,  85 => 22,  79 => 17,  64 => 18,  42 => 6,  39 => 5,  82 => 18,  75 => 13,  72 => 12,  57 => 11,  50 => 11,  45 => 7,  43 => 11,  40 => 10,  25 => 1,  167 => 60,  160 => 59,  148 => 46,  142 => 57,  134 => 51,  123 => 31,  118 => 43,  114 => 32,  111 => 31,  109 => 33,  104 => 33,  101 => 32,  95 => 27,  86 => 25,  83 => 21,  77 => 14,  69 => 11,  63 => 13,  58 => 6,  55 => 13,  53 => 14,  44 => 6,  35 => 4,  32 => 6,  465 => 202,  456 => 199,  452 => 198,  449 => 197,  444 => 196,  442 => 195,  434 => 189,  432 => 188,  425 => 184,  418 => 180,  411 => 176,  404 => 172,  397 => 168,  390 => 164,  383 => 158,  376 => 156,  364 => 152,  358 => 150,  354 => 119,  351 => 118,  345 => 137,  341 => 135,  338 => 134,  332 => 131,  328 => 111,  326 => 128,  323 => 127,  318 => 131,  315 => 130,  306 => 122,  303 => 121,  301 => 102,  292 => 113,  289 => 112,  281 => 106,  278 => 105,  273 => 95,  270 => 136,  265 => 93,  259 => 96,  251 => 97,  249 => 96,  244 => 93,  236 => 87,  232 => 87,  229 => 84,  223 => 81,  219 => 79,  216 => 78,  210 => 75,  206 => 78,  203 => 72,  200 => 76,  197 => 75,  194 => 67,  188 => 66,  184 => 80,  181 => 64,  179 => 64,  175 => 57,  171 => 62,  168 => 60,  165 => 59,  159 => 58,  156 => 56,  153 => 51,  150 => 50,  144 => 48,  137 => 39,  133 => 41,  126 => 41,  122 => 36,  119 => 36,  116 => 42,  108 => 30,  105 => 37,  102 => 30,  99 => 33,  93 => 20,  87 => 24,  84 => 25,  76 => 19,  73 => 21,  70 => 20,  67 => 15,  62 => 16,  56 => 5,  48 => 8,  46 => 9,  41 => 7,  38 => 6,  36 => 4,  33 => 3,);
    }
}
