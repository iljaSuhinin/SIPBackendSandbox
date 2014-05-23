<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_b10db6761543965aaa0da4b16bd8b792c4041992f813a2c9c8a3e9603bbef5db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav_menu' => array($this, 'block_sonata_nav_menu'),
            'top_bar_before_nav' => array($this, 'block_top_bar_before_nav'),
            'sonata_top_bar_nav' => array($this, 'block_sonata_top_bar_nav'),
            'top_bar_after_nav' => array($this, 'block_top_bar_after_nav'),
            'notice' => array($this, 'block_notice'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'footer' => array($this, 'block_footer'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_side_menu"] = $this->renderBlock("side_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        echo "<!DOCTYPE html>
<html ";
        // line 22
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 50
        echo "
        ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "
        <title>
            ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 79
        if ((!twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"))))) {
            // line 80
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 82
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 83
                echo "                    -
                    ";
                // line 84
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 85
                    echo "                        ";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first"))) {
                        // line 86
                        echo "                            &gt;
                        ";
                    }
                    // line 88
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                    echo "
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                ";
            }
            // line 91
            echo "            ";
        }
        // line 92
        echo "        </title>
    </head>
    <body class=\"sonata-bc ";
        // line 94
        if (twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu")))) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\">
        ";
        // line 96
        echo "
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>

                    ";
        // line 106
        if (array_key_exists("admin_pool", $context)) {
            // line 107
            echo "                        <div class=\"navbar-text pull-right\">";
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"));
            $template->display($context);
            echo "</div>

                        ";
            // line 109
            $this->displayBlock('logo', $context, $blocks);
            // line 115
            echo "
                        ";
            // line 116
            $this->displayBlock('sonata_nav_menu', $context, $blocks);
            // line 147
            echo "                    ";
        }
        // line 148
        echo "                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            ";
        // line 153
        $this->displayBlock('notice', $context, $blocks);
        // line 163
        echo "
            <div class=\"row-fluid\">
                ";
        // line 165
        if (((!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) || array_key_exists("action", $context))) {
            // line 166
            echo "                    <div class=\"span6\">
                        <ul class=\"breadcrumb\">
                            ";
            // line 168
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 169
                echo "                                ";
                if (array_key_exists("action", $context)) {
                    // line 170
                    echo "                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 171
                        echo "                                        ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                            // line 172
                            echo "                                            <li>
                                                ";
                            // line 173
                            if ((!twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri")))) {
                                // line 174
                                echo "                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                                echo "</a>
                                                ";
                            } else {
                                // line 176
                                echo "                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                                echo "
                                                ";
                            }
                            // line 178
                            echo "                                                <span class=\"divider\">/</span>
                                            </li>
                                        ";
                        } else {
                            // line 181
                            echo "                                            <li class=\"active\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                            echo "</li>
                                        ";
                        }
                        // line 183
                        echo "                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 184
                    echo "                                ";
                }
                // line 185
                echo "                            ";
            } else {
                // line 186
                echo "                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                            ";
            }
            // line 188
            echo "                        </ul>
                    </div>
                ";
        }
        // line 191
        echo "
                ";
        // line 192
        if ((!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"))))) {
            // line 193
            echo "                    <div class=\"span4 offset2\">
                        ";
            // line 194
            echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
            echo "
                    </div>
                ";
        }
        // line 197
        echo "            </div>

            <div class=\"row-fluid\">
                ";
        // line 200
        if ((!twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu"))))) {
            // line 201
            echo "                    <div class=\"sidebar span2\">
                        <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 202
            echo (isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu"));
            echo "</div>
                    </div>
                ";
        }
        // line 205
        echo "
                <div class=\"content ";
        // line 206
        echo (((!twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu"))))) ? (" span10") : ("span12"));
        echo "\">
                    ";
        // line 207
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 237
        echo "                </div>
            </div>

            ";
        // line 240
        $this->displayBlock('footer', $context, $blocks);
        // line 247
        echo "        </div>
    </body>
</html>
";
    }

    // line 22
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"  />
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            ";
        // line 36
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            // line 37
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/select2/select2.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\" />
                <style>
                    div.select2-container {
                        margin-left: 0px !important;
                    }
                </style>
            ";
        }
        // line 44
        echo "
            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

        ";
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        // line 52
        echo "            <script type=\"text/javascript\">
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 54
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 55
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 56
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 58
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>
            <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.8.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.23.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            ";
        // line 67
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            // line 68
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/select2/select2.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        // line 70
        echo "
            <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            ";
        // line 72
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.confirmExit.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>";
        }
        // line 73
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 109
    public function block_logo($context, array $blocks = array())
    {
        // line 110
        echo "                            <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\" class=\"brand\">
                                <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title"), "html", null, true);
        echo "\" />
                                ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title"), "html", null, true);
        echo "
                            </a>
                        ";
    }

    // line 116
    public function block_sonata_nav_menu($context, array $blocks = array())
    {
        // line 117
        echo "                            <div class=\"nav-collapse\">
                                <ul class=\"nav\">
                                    ";
        // line 119
        $this->displayBlock('top_bar_before_nav', $context, $blocks);
        // line 120
        echo "                                    ";
        $this->displayBlock('sonata_top_bar_nav', $context, $blocks);
        // line 143
        echo "                                    ";
        $this->displayBlock('top_bar_after_nav', $context, $blocks);
        // line 144
        echo "                                </ul>
                            </div>
                        ";
    }

    // line 119
    public function block_top_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 120
    public function block_sonata_top_bar_nav($context, array $blocks = array())
    {
        // line 121
        echo "                                        ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 122
            echo "                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 123
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 124
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                        // line 125
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                        // line 126
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "
                                                ";
                // line 128
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 129
                    echo "                                                <li class=\"dropdown\">
                                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 130
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                                                    <ul class=\"dropdown-menu\">
                                                        ";
                    // line 132
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 133
                        echo "                                                            ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 134
                            echo "                                                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                            ";
                        }
                        // line 136
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo "                                                    </ul>
                                                </li>
                                                ";
                }
                // line 140
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                                        ";
        }
        // line 142
        echo "                                    ";
    }

    // line 143
    public function block_top_bar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 153
    public function block_notice($context, array $blocks = array())
    {
        // line 154
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 155
            echo "                    ";
            $context["session_var"] = ("sonata_flash_" . (isset($context["notice_level"]) ? $context["notice_level"] : $this->getContext($context, "notice_level")));
            // line 156
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => (isset($context["session_var"]) ? $context["session_var"] : $this->getContext($context, "session_var"))), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 157
                echo "                        <div class=\"alert ";
                echo twig_escape_filter($this->env, ("alert-" . (isset($context["notice_level"]) ? $context["notice_level"] : $this->getContext($context, "notice_level"))), "html", null, true);
                echo "\">
                            ";
                // line 158
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash")), array(), "SonataAdminBundle"), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "            ";
    }

    // line 207
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 208
        echo "
                        ";
        // line 209
        if ((!twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"))))) {
            // line 210
            echo "                            <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                        ";
        }
        // line 212
        echo "
                        ";
        // line 213
        if ((!twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"))))) {
            // line 214
            echo "                            <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                        ";
        }
        // line 216
        echo "
                        ";
        // line 217
        if ((!twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"))))) {
            // line 218
            echo "                            <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                        ";
        }
        // line 220
        echo "
                        ";
        // line 221
        if ((!twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"))))) {
            // line 222
            echo "                            <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                        ";
        }
        // line 224
        echo "
                        ";
        // line 225
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table")))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))))) {
            // line 226
            echo "                            <div class=\"row-fluid\">
                                <div class=\"sonata-ba-list span10\">
                                    ";
            // line 228
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>
                                <div class=\"sonata-ba-filter span2\">
                                    ";
            // line 231
            echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
            echo "
                                </div>
                            </div>
                        ";
        }
        // line 235
        echo "
                    ";
    }

    // line 240
    public function block_footer($context, array $blocks = array())
    {
        // line 241
        echo "                <div class=\"row-fluid\">
                    <div class=\"span2 offset10 pull-right\">
                        <span class=\"label\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" style=\"text-decoration: none; color: black\">Sonata Project</a></span>
                    </div>
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  730 => 241,  727 => 240,  722 => 235,  715 => 231,  709 => 228,  705 => 226,  703 => 225,  700 => 224,  694 => 222,  692 => 221,  689 => 220,  683 => 218,  681 => 217,  678 => 216,  672 => 214,  670 => 213,  667 => 212,  661 => 210,  659 => 209,  656 => 208,  653 => 207,  649 => 162,  643 => 161,  634 => 158,  629 => 157,  624 => 156,  621 => 155,  616 => 154,  613 => 153,  607 => 143,  603 => 142,  600 => 141,  594 => 140,  589 => 137,  583 => 136,  575 => 134,  572 => 133,  568 => 132,  563 => 130,  560 => 129,  558 => 128,  555 => 127,  548 => 126,  545 => 125,  539 => 124,  536 => 123,  531 => 122,  528 => 121,  525 => 120,  519 => 119,  513 => 144,  510 => 143,  507 => 120,  505 => 119,  501 => 117,  498 => 116,  491 => 112,  485 => 111,  480 => 110,  477 => 109,  470 => 73,  464 => 72,  460 => 71,  457 => 70,  451 => 68,  449 => 67,  444 => 65,  439 => 63,  435 => 62,  431 => 61,  425 => 58,  421 => 56,  415 => 55,  407 => 54,  403 => 52,  400 => 51,  393 => 47,  389 => 46,  385 => 44,  374 => 37,  372 => 36,  367 => 34,  363 => 33,  359 => 32,  354 => 30,  351 => 29,  348 => 28,  342 => 22,  335 => 247,  333 => 240,  328 => 237,  326 => 207,  322 => 206,  319 => 205,  313 => 202,  310 => 201,  308 => 200,  303 => 197,  297 => 194,  294 => 193,  292 => 192,  289 => 191,  284 => 188,  278 => 186,  275 => 185,  272 => 184,  258 => 183,  252 => 181,  247 => 178,  241 => 176,  233 => 174,  231 => 173,  228 => 172,  225 => 171,  207 => 170,  204 => 169,  202 => 168,  198 => 166,  196 => 165,  192 => 163,  190 => 153,  183 => 148,  180 => 147,  178 => 116,  175 => 115,  173 => 109,  166 => 107,  164 => 106,  152 => 96,  146 => 94,  142 => 92,  139 => 91,  136 => 90,  119 => 88,  115 => 86,  112 => 85,  95 => 84,  89 => 82,  83 => 80,  81 => 79,  76 => 77,  72 => 75,  70 => 51,  67 => 50,  65 => 28,  56 => 22,  49 => 19,  45 => 17,  41 => 15,  39 => 14,  37 => 13,  33 => 11,  53 => 21,  47 => 18,  43 => 16,  38 => 5,  92 => 83,  84 => 32,  71 => 22,  63 => 15,  57 => 12,  51 => 20,  48 => 10,  42 => 8,  40 => 7,  35 => 12,  32 => 3,  29 => 3,);
    }
}
