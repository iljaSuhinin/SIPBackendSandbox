<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_61f6f738c33749f1e41ad393bebb6c46b3e31da7ee520d35fbd8041261736b73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "
<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  26 => 3,  103 => 27,  84 => 24,  61 => 18,  23 => 1,  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 129,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 118,  368 => 115,  354 => 114,  350 => 112,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 100,  307 => 99,  298 => 98,  296 => 97,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 87,  254 => 86,  248 => 83,  242 => 82,  237 => 80,  221 => 77,  195 => 75,  191 => 74,  180 => 65,  172 => 60,  143 => 55,  135 => 51,  131 => 49,  114 => 37,  110 => 36,  64 => 13,  276 => 96,  272 => 94,  257 => 92,  249 => 90,  246 => 88,  243 => 86,  241 => 85,  238 => 83,  233 => 79,  230 => 81,  227 => 78,  224 => 77,  222 => 76,  220 => 75,  211 => 73,  207 => 72,  182 => 69,  162 => 61,  146 => 56,  138 => 53,  134 => 52,  122 => 42,  111 => 36,  105 => 32,  74 => 19,  70 => 18,  66 => 15,  62 => 14,  50 => 9,  41 => 6,  97 => 28,  92 => 20,  88 => 25,  82 => 18,  78 => 17,  71 => 14,  59 => 9,  53 => 8,  32 => 8,  90 => 25,  75 => 20,  58 => 12,  24 => 2,  29 => 2,  101 => 31,  96 => 29,  91 => 6,  81 => 21,  49 => 9,  30 => 4,  43 => 11,  47 => 12,  38 => 5,  34 => 4,  46 => 8,  44 => 10,  31 => 3,  204 => 92,  199 => 90,  186 => 82,  174 => 61,  169 => 71,  166 => 62,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 54,  139 => 56,  126 => 47,  124 => 46,  120 => 44,  118 => 43,  108 => 40,  104 => 32,  94 => 27,  72 => 25,  69 => 15,  65 => 19,  52 => 19,  27 => 6,  35 => 4,  28 => 3,  25 => 1,  22 => 1,  212 => 76,  206 => 78,  202 => 71,  196 => 73,  192 => 71,  190 => 84,  185 => 70,  179 => 64,  176 => 65,  171 => 72,  167 => 59,  165 => 59,  157 => 58,  152 => 51,  150 => 58,  147 => 49,  144 => 48,  136 => 55,  133 => 41,  128 => 44,  125 => 43,  119 => 41,  115 => 42,  112 => 34,  109 => 33,  106 => 28,  102 => 31,  98 => 28,  95 => 21,  89 => 28,  85 => 22,  83 => 19,  76 => 19,  67 => 17,  63 => 14,  60 => 11,  57 => 16,  54 => 11,  51 => 11,  48 => 8,  45 => 8,  42 => 7,  39 => 5,  36 => 5,  33 => 1,);
    }
}
