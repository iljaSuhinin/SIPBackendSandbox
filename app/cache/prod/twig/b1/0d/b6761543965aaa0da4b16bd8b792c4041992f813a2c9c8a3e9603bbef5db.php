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
        if ((!twig_test_empty((isset($context["_title"]) ? $context["_title"] : null)))) {
            // line 80
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : null);
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"));
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
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first"))) {
                        // line 86
                        echo "                            &gt;
                        ";
                    }
                    // line 88
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
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
        if (twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : null))) {
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
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getTemplate", array(0 => "user_block"), "method"));
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
        if (((!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) || array_key_exists("action", $context))) {
            // line 166
            echo "                    <div class=\"span6\">
                        <ul class=\"breadcrumb\">
                            ";
            // line 168
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) {
                // line 169
                echo "                                ";
                if (array_key_exists("action", $context)) {
                    // line 170
                    echo "                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"));
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
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                            // line 172
                            echo "                                            <li>
                                                ";
                            // line 173
                            if ((!twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "uri")))) {
                                // line 174
                                echo "                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "uri"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                                echo "</a>
                                                ";
                            } else {
                                // line 176
                                echo "                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
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
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
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
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null);
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
        if ((!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : null)))) {
            // line 193
            echo "                    <div class=\"span4 offset2\">
                        ";
            // line 194
            echo (isset($context["_actions"]) ? $context["_actions"] : null);
            echo "
                    </div>
                ";
        }
        // line 197
        echo "            </div>

            <div class=\"row-fluid\">
                ";
        // line 200
        if ((!twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : null)))) {
            // line 201
            echo "                    <div class=\"sidebar span2\">
                        <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 202
            echo (isset($context["_side_menu"]) ? $context["_side_menu"] : null);
            echo "</div>
                    </div>
                ";
        }
        // line 205
        echo "
                <div class=\"content ";
        // line 206
        echo (((!twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : null)))) ? (" span10") : ("span12"));
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
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
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
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 55
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
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
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
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
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "confirm_exit"), "method"))) {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "title"), "html", null, true);
        echo "\" />
                                ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "title"), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 122
            echo "                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 123
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 124
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : null))) {
                        // line 125
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : null));
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
                if ((isset($context["display"]) ? $context["display"] : null)) {
                    // line 129
                    echo "                                                <li class=\"dropdown\">
                                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 130
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label_catalogue")), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                                                    <ul class=\"dropdown-menu\">
                                                        ";
                    // line 132
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 133
                        echo "                                                            ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 134
                            echo "                                                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain")), "html", null, true);
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
            $context["session_var"] = ("sonata_flash_" . (isset($context["notice_level"]) ? $context["notice_level"] : null));
            // line 156
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => (isset($context["session_var"]) ? $context["session_var"] : null)), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 157
                echo "                        <div class=\"alert ";
                echo twig_escape_filter($this->env, ("alert-" . (isset($context["notice_level"]) ? $context["notice_level"] : null)), "html", null, true);
                echo "\">
                            ";
                // line 158
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : null), array(), "SonataAdminBundle"), "html", null, true);
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
        if ((!twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : null)))) {
            // line 210
            echo "                            <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : null);
            echo "</div>
                        ";
        }
        // line 212
        echo "
                        ";
        // line 213
        if ((!twig_test_empty((isset($context["_content"]) ? $context["_content"] : null)))) {
            // line 214
            echo "                            <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : null);
            echo "</div>
                        ";
        }
        // line 216
        echo "
                        ";
        // line 217
        if ((!twig_test_empty((isset($context["_show"]) ? $context["_show"] : null)))) {
            // line 218
            echo "                            <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : null);
            echo "</div>
                        ";
        }
        // line 220
        echo "
                        ";
        // line 221
        if ((!twig_test_empty((isset($context["_form"]) ? $context["_form"] : null)))) {
            // line 222
            echo "                            <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : null);
            echo "</div>
                        ";
        }
        // line 224
        echo "
                        ";
        // line 225
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : null))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : null))))) {
            // line 226
            echo "                            <div class=\"row-fluid\">
                                <div class=\"sonata-ba-list span10\">
                                    ";
            // line 228
            echo (isset($context["_list_table"]) ? $context["_list_table"] : null);
            echo "
                                </div>
                                <div class=\"sonata-ba-filter span2\">
                                    ";
            // line 231
            echo (isset($context["_list_filters"]) ? $context["_list_filters"] : null);
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
        return array (  730 => 241,  727 => 240,  722 => 235,  715 => 231,  709 => 228,  705 => 226,  700 => 224,  694 => 222,  692 => 221,  689 => 220,  683 => 218,  678 => 216,  670 => 213,  667 => 212,  661 => 210,  659 => 209,  656 => 208,  653 => 207,  649 => 162,  634 => 158,  629 => 157,  621 => 155,  613 => 153,  607 => 143,  603 => 142,  600 => 141,  594 => 140,  575 => 134,  568 => 132,  563 => 130,  558 => 128,  555 => 127,  531 => 122,  525 => 120,  513 => 144,  505 => 119,  451 => 68,  439 => 63,  435 => 62,  403 => 52,  363 => 33,  359 => 32,  351 => 29,  348 => 28,  328 => 237,  326 => 207,  308 => 200,  297 => 194,  228 => 172,  225 => 171,  198 => 166,  173 => 109,  704 => 213,  698 => 210,  695 => 209,  693 => 208,  687 => 205,  677 => 204,  672 => 214,  657 => 199,  654 => 198,  646 => 193,  643 => 161,  626 => 190,  609 => 189,  604 => 187,  599 => 186,  596 => 185,  593 => 184,  587 => 180,  583 => 136,  576 => 176,  559 => 174,  538 => 172,  533 => 171,  530 => 170,  527 => 169,  524 => 168,  519 => 119,  489 => 134,  471 => 128,  458 => 147,  447 => 142,  442 => 140,  437 => 138,  421 => 56,  412 => 127,  396 => 119,  361 => 106,  339 => 99,  332 => 95,  329 => 93,  314 => 89,  300 => 84,  239 => 63,  231 => 173,  203 => 55,  194 => 50,  149 => 34,  315 => 89,  295 => 87,  255 => 68,  218 => 54,  193 => 50,  187 => 47,  571 => 179,  560 => 129,  556 => 176,  543 => 171,  537 => 169,  535 => 168,  529 => 164,  516 => 165,  507 => 120,  498 => 116,  491 => 112,  477 => 109,  473 => 135,  463 => 132,  460 => 71,  456 => 146,  452 => 123,  444 => 65,  433 => 103,  429 => 102,  418 => 97,  398 => 120,  395 => 83,  389 => 46,  385 => 44,  383 => 83,  380 => 115,  377 => 114,  372 => 36,  336 => 117,  310 => 201,  303 => 197,  288 => 84,  285 => 79,  278 => 186,  275 => 185,  267 => 72,  223 => 56,  217 => 61,  208 => 59,  200 => 54,  175 => 115,  370 => 131,  364 => 107,  358 => 105,  355 => 121,  346 => 91,  343 => 95,  323 => 84,  313 => 202,  305 => 114,  290 => 72,  280 => 78,  274 => 66,  268 => 64,  252 => 181,  188 => 20,  177 => 53,  12 => 34,  160 => 41,  148 => 43,  123 => 50,  116 => 48,  113 => 25,  184 => 47,  99 => 44,  163 => 48,  151 => 44,  129 => 55,  287 => 128,  283 => 82,  256 => 112,  226 => 58,  213 => 84,  205 => 79,  197 => 74,  168 => 68,  156 => 35,  79 => 13,  40 => 54,  1320 => 662,  1317 => 661,  1311 => 664,  1309 => 661,  1304 => 659,  1300 => 657,  1297 => 656,  1291 => 648,  1287 => 646,  1280 => 642,  1276 => 641,  1270 => 638,  1266 => 637,  1262 => 636,  1258 => 634,  1256 => 633,  1235 => 615,  1227 => 610,  1217 => 603,  1205 => 594,  1156 => 550,  1153 => 549,  1151 => 548,  1115 => 515,  1108 => 510,  1106 => 505,  1097 => 499,  1093 => 498,  1088 => 496,  1084 => 495,  1081 => 494,  1078 => 493,  1071 => 651,  1069 => 493,  1065 => 492,  1061 => 490,  1059 => 489,  1056 => 488,  1042 => 472,  1036 => 468,  1021 => 455,  1019 => 454,  1002 => 440,  999 => 439,  995 => 437,  985 => 431,  983 => 430,  976 => 425,  974 => 420,  968 => 417,  965 => 416,  962 => 415,  955 => 483,  953 => 415,  949 => 414,  945 => 412,  943 => 411,  940 => 410,  933 => 405,  926 => 400,  924 => 399,  919 => 397,  914 => 395,  909 => 392,  906 => 391,  903 => 390,  900 => 389,  897 => 387,  894 => 386,  891 => 385,  889 => 384,  886 => 383,  883 => 382,  880 => 381,  878 => 380,  875 => 379,  872 => 378,  869 => 377,  867 => 376,  864 => 375,  861 => 374,  858 => 373,  856 => 372,  853 => 371,  850 => 370,  847 => 369,  844 => 368,  842 => 367,  840 => 366,  837 => 365,  830 => 357,  826 => 356,  822 => 355,  819 => 354,  816 => 353,  809 => 360,  807 => 353,  802 => 351,  798 => 349,  796 => 348,  793 => 347,  786 => 342,  780 => 338,  778 => 337,  773 => 334,  767 => 332,  759 => 327,  756 => 326,  754 => 325,  749 => 323,  745 => 322,  741 => 320,  739 => 319,  736 => 318,  729 => 313,  719 => 305,  717 => 304,  714 => 303,  703 => 225,  701 => 293,  696 => 290,  690 => 288,  684 => 287,  681 => 217,  676 => 285,  673 => 284,  665 => 279,  662 => 278,  660 => 200,  652 => 271,  647 => 268,  635 => 258,  633 => 257,  624 => 156,  620 => 250,  616 => 154,  614 => 247,  611 => 246,  601 => 238,  595 => 237,  589 => 137,  586 => 235,  581 => 177,  578 => 233,  572 => 133,  570 => 230,  561 => 224,  557 => 223,  554 => 222,  551 => 221,  548 => 126,  545 => 125,  542 => 173,  539 => 124,  536 => 123,  534 => 215,  528 => 121,  521 => 167,  514 => 203,  510 => 143,  504 => 199,  501 => 117,  486 => 190,  484 => 189,  481 => 188,  464 => 72,  446 => 162,  441 => 160,  432 => 154,  423 => 135,  414 => 144,  405 => 138,  393 => 47,  391 => 107,  367 => 34,  362 => 114,  360 => 125,  353 => 111,  349 => 92,  341 => 94,  338 => 93,  330 => 86,  324 => 91,  316 => 82,  299 => 111,  294 => 193,  292 => 192,  289 => 191,  282 => 84,  266 => 71,  263 => 62,  261 => 70,  258 => 183,  253 => 67,  250 => 66,  247 => 178,  244 => 31,  236 => 62,  181 => 45,  142 => 92,  140 => 27,  137 => 39,  132 => 24,  130 => 34,  127 => 23,  117 => 50,  107 => 23,  100 => 37,  87 => 16,  80 => 25,  77 => 19,  55 => 17,  523 => 208,  520 => 161,  511 => 164,  506 => 200,  503 => 158,  496 => 155,  494 => 157,  492 => 156,  490 => 192,  485 => 111,  483 => 132,  480 => 110,  465 => 142,  462 => 141,  449 => 67,  445 => 137,  434 => 135,  431 => 61,  428 => 152,  425 => 58,  419 => 130,  416 => 129,  413 => 96,  410 => 95,  407 => 54,  404 => 125,  401 => 121,  399 => 123,  388 => 132,  386 => 118,  382 => 124,  376 => 115,  374 => 37,  371 => 116,  365 => 109,  356 => 107,  352 => 103,  347 => 97,  345 => 101,  342 => 22,  333 => 240,  319 => 205,  312 => 93,  309 => 127,  304 => 90,  286 => 70,  284 => 188,  270 => 120,  264 => 72,  262 => 70,  259 => 70,  251 => 66,  235 => 56,  232 => 55,  229 => 67,  219 => 25,  216 => 49,  209 => 45,  189 => 54,  183 => 148,  178 => 116,  170 => 27,  164 => 106,  158 => 62,  155 => 38,  153 => 58,  121 => 28,  93 => 27,  86 => 37,  73 => 29,  68 => 5,  56 => 22,  37 => 13,  26 => 13,  103 => 43,  84 => 26,  61 => 19,  23 => 11,  493 => 154,  487 => 170,  482 => 167,  474 => 129,  470 => 73,  466 => 133,  457 => 70,  453 => 145,  450 => 156,  448 => 163,  443 => 153,  440 => 152,  436 => 151,  426 => 136,  422 => 98,  420 => 140,  415 => 55,  411 => 138,  406 => 135,  400 => 51,  397 => 136,  394 => 121,  392 => 118,  387 => 116,  381 => 121,  378 => 120,  375 => 119,  373 => 100,  368 => 115,  354 => 30,  350 => 102,  335 => 247,  327 => 92,  325 => 107,  322 => 206,  318 => 90,  311 => 100,  307 => 79,  298 => 88,  296 => 75,  291 => 85,  281 => 80,  277 => 77,  271 => 73,  265 => 63,  260 => 61,  254 => 86,  248 => 62,  242 => 104,  237 => 80,  221 => 51,  195 => 55,  191 => 21,  180 => 147,  172 => 51,  143 => 28,  135 => 57,  131 => 44,  114 => 40,  110 => 24,  64 => 27,  276 => 96,  272 => 184,  257 => 68,  249 => 69,  246 => 65,  243 => 60,  241 => 176,  238 => 55,  233 => 174,  230 => 60,  227 => 53,  224 => 77,  222 => 76,  220 => 75,  211 => 57,  207 => 170,  182 => 69,  162 => 49,  146 => 94,  138 => 53,  134 => 25,  122 => 31,  111 => 144,  105 => 17,  74 => 29,  70 => 51,  66 => 22,  62 => 164,  50 => 75,  41 => 15,  97 => 40,  92 => 83,  88 => 32,  82 => 31,  78 => 21,  71 => 6,  59 => 81,  53 => 21,  32 => 16,  90 => 17,  75 => 198,  58 => 18,  24 => 11,  29 => 14,  101 => 36,  96 => 138,  91 => 33,  81 => 79,  49 => 19,  30 => 16,  43 => 16,  47 => 18,  38 => 22,  34 => 17,  46 => 18,  44 => 20,  31 => 13,  204 => 169,  199 => 52,  186 => 35,  174 => 69,  169 => 50,  166 => 107,  161 => 37,  159 => 36,  154 => 45,  145 => 42,  141 => 54,  139 => 91,  126 => 30,  124 => 29,  120 => 47,  118 => 27,  108 => 45,  104 => 37,  94 => 40,  72 => 75,  69 => 23,  65 => 28,  52 => 112,  27 => 3,  35 => 12,  28 => 12,  25 => 11,  22 => 11,  212 => 24,  206 => 56,  202 => 168,  196 => 165,  192 => 163,  190 => 153,  185 => 70,  179 => 45,  176 => 42,  171 => 13,  167 => 54,  165 => 11,  157 => 46,  152 => 96,  150 => 46,  147 => 33,  144 => 57,  136 => 90,  133 => 35,  128 => 40,  125 => 488,  119 => 88,  115 => 86,  112 => 85,  109 => 35,  106 => 38,  102 => 30,  98 => 20,  95 => 84,  89 => 82,  85 => 10,  83 => 80,  76 => 77,  67 => 50,  63 => 26,  60 => 154,  57 => 153,  54 => 21,  51 => 20,  48 => 66,  45 => 17,  42 => 12,  39 => 14,  36 => 16,  33 => 11,);
    }
}
