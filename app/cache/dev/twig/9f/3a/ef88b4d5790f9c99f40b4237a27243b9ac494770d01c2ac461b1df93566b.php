<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_9f3aef88b4d5790f9c99f40b4237a27243b9ac494770d01c2ac461b1df93566b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "html", null, true);
            echo "

        ";
            // line 5
            if (($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"))) {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"), "route"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"), "parameters"), array("_switch_user" => "_exit"))), "html", null, true);
                echo "\">(exit)</a>
        ";
            }
            // line 8
            echo "
        - <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getUrl("sonata_user_admin_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  23 => 1,  730 => 241,  727 => 240,  722 => 235,  715 => 231,  709 => 228,  705 => 226,  703 => 225,  700 => 224,  694 => 222,  692 => 221,  689 => 220,  683 => 218,  681 => 217,  678 => 216,  672 => 214,  670 => 213,  667 => 212,  661 => 210,  659 => 209,  656 => 208,  653 => 207,  649 => 162,  643 => 161,  634 => 158,  629 => 157,  624 => 156,  621 => 155,  616 => 154,  613 => 153,  607 => 143,  603 => 142,  600 => 141,  594 => 140,  589 => 137,  583 => 136,  575 => 134,  572 => 133,  568 => 132,  563 => 130,  560 => 129,  558 => 128,  555 => 127,  548 => 126,  545 => 125,  539 => 124,  536 => 123,  531 => 122,  528 => 121,  525 => 120,  519 => 119,  513 => 144,  510 => 143,  507 => 120,  505 => 119,  501 => 117,  498 => 116,  491 => 112,  485 => 111,  480 => 110,  477 => 109,  470 => 73,  464 => 72,  460 => 71,  457 => 70,  451 => 68,  449 => 67,  444 => 65,  439 => 63,  435 => 62,  431 => 61,  425 => 58,  421 => 56,  415 => 55,  407 => 54,  403 => 52,  400 => 51,  393 => 47,  389 => 46,  385 => 44,  374 => 37,  372 => 36,  367 => 34,  363 => 33,  359 => 32,  354 => 30,  351 => 29,  348 => 28,  342 => 22,  335 => 247,  333 => 240,  328 => 237,  326 => 207,  322 => 206,  319 => 205,  313 => 202,  310 => 201,  308 => 200,  303 => 197,  297 => 194,  294 => 193,  292 => 192,  289 => 191,  284 => 188,  278 => 186,  275 => 185,  272 => 184,  258 => 183,  252 => 181,  247 => 178,  241 => 176,  233 => 174,  231 => 173,  228 => 172,  225 => 171,  207 => 170,  204 => 169,  202 => 168,  198 => 166,  196 => 165,  192 => 163,  190 => 153,  183 => 148,  180 => 147,  178 => 116,  175 => 115,  173 => 109,  166 => 107,  164 => 106,  152 => 96,  146 => 94,  142 => 92,  139 => 91,  136 => 90,  119 => 88,  115 => 86,  112 => 85,  95 => 84,  89 => 82,  83 => 80,  81 => 79,  76 => 77,  72 => 75,  70 => 51,  67 => 50,  65 => 28,  56 => 22,  49 => 9,  45 => 17,  41 => 15,  39 => 14,  37 => 13,  33 => 11,  53 => 21,  47 => 18,  43 => 16,  38 => 5,  92 => 83,  84 => 32,  71 => 22,  63 => 15,  57 => 12,  51 => 20,  48 => 10,  42 => 8,  40 => 6,  35 => 12,  32 => 3,  29 => 2,);
    }
}
