<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_1f9199b5ef626b51184c62d54013666970e7779768d7acf224777b4e77645f6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'list_table' => array($this, 'block_list_table'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters' => array($this, 'block_list_filters'),
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
        $this->env->loadTemplate("SonataAdminBundle:Core:create_button.html.twig")->display($context);
        // line 17
        echo "    </div>
";
    }

    // line 20
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), array("currentClass" => "active"), "list");
    }

    // line 22
    public function block_list_table($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "batchactions");
        // line 24
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "results")) > 0)) {
            // line 25
            echo "        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method")) {
                // line 26
                echo "        <form action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "filterParameters"))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 27
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
                echo "\" />
        ";
            }
            // line 29
            echo "            <table class=\"table table-bordered table-striped\">
                ";
            // line 30
            $this->displayBlock('table_header', $context, $blocks);
            // line 64
            echo "
                ";
            // line 65
            $this->displayBlock('table_body', $context, $blocks);
            // line 74
            echo "
                ";
            // line 75
            $this->displayBlock('table_footer', $context, $blocks);
            // line 138
            echo "            </table>
        ";
            // line 139
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method")) {
                // line 140
                echo "        </form>
        ";
            }
            // line 142
            echo "    ";
        } else {
            // line 143
            echo "        <p class=\"notice\">
            ";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </p>
    ";
        }
    }

    // line 30
    public function block_table_header($context, array $blocks = array())
    {
        // line 31
        echo "                    <thead>
                        <tr class=\"sonata-ba-list-field-header\">
                            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 34
            echo "                                ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                // line 35
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                      <input type=\"checkbox\" id=\"list_batch_checkbox\" />
                                    </th>
                                ";
            } elseif (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "getOption", array(0 => "code"), "method") == "_select")) {
                // line 39
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                ";
            } elseif ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "name") == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest"))) {
                // line 41
                echo "                                        ";
                // line 42
                echo "                                ";
            } else {
                // line 43
                echo "                                    ";
                $context["sortable"] = false;
                // line 44
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "sortable"))) {
                    // line 45
                    echo "                                        ";
                    $context["sortable"] = true;
                    // line 46
                    echo "                                        ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "sortparameters", array(0 => (isset($context["field_description"]) ? $context["field_description"] : null), 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid")), "method");
                    // line 47
                    echo "                                        ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), "_sort_by") == (isset($context["field_description"]) ? $context["field_description"] : null)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), "_sort_by"), "fieldName") == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : null), "filter"), "_sort_by")));
                    // line 48
                    echo "                                        ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 49
                    echo "                                        ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), "_sort_order")) : ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "_sort_order")));
                    // line 50
                    echo "                                    ";
                }
                // line 51
                echo "
                                    ";
                // line 52
                ob_start();
                // line 53
                echo "                                        <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "type"), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : null)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : null), "html", null, true);
                }
                echo "\">
                                            ";
                // line 54
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : null)), "method"), "html", null, true);
                    echo "\">";
                }
                // line 55
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "label")), "method"), "html", null, true);
                echo "
                                            ";
                // line 56
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "</a>";
                }
                // line 57
                echo "                                        </th>
                                    ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 59
                echo "                                ";
            }
            // line 60
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                        </tr>
                    </thead>
                ";
    }

    // line 65
    public function block_table_body($context, array $blocks = array())
    {
        // line 66
        echo "                    <tbody>
                        ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "results"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 68
            echo "                            <tr>
                                ";
            // line 69
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "inner_list_row"), "method"));
            $template->display($context);
            // line 70
            echo "                            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                    </tbody>
                ";
    }

    // line 75
    public function block_table_footer($context, array $blocks = array())
    {
        // line 76
        echo "                    <tr>
                        <th colspan=\"";
        // line 77
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements")) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
                            <div class=\"form-inline\">
                                ";
        // line 79
        if ((!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest"))) {
            // line 80
            echo "                                    ";
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                // line 81
                echo "                                        ";
                $this->displayBlock('batch', $context, $blocks);
                // line 108
                echo "
                                        <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                                    ";
            }
            // line 111
            echo "
                                    <div class=\"pull-right\">
                                        ";
            // line 113
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method")))) {
                // line 114
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                            ";
                // line 115
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 116
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => 0), "method") + array("format" => (isset($context["format"]) ? $context["format"] : null)))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["format"]) ? $context["format"] : null), "html", null, true);
                    echo "</a>";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                        echo ",";
                    }
                    // line 117
                    echo "                                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "
                                            &nbsp;-&nbsp;
                                        ";
            }
            // line 121
            echo "
                                        ";
            // line 122
            $this->displayBlock('pager_results', $context, $blocks);
            // line 125
            echo "                                    </div>
                                ";
        }
        // line 127
        echo "                            </div>
                        </th>
                    </tr>

                    ";
        // line 131
        $this->displayBlock('pager_links', $context, $blocks);
        // line 136
        echo "
                ";
    }

    // line 81
    public function block_batch($context, array $blocks = array())
    {
        // line 82
        echo "                                            <script type=\"text/javascript\">
                                                ";
        // line 83
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 93
        echo "                                            </script>

                                            ";
        // line 95
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 107
        echo "                                        ";
    }

    // line 83
    public function block_batch_javascript($context, array $blocks = array())
    {
        // line 84
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        \$('#list_batch_checkbox').click(function () {
                                                            \$(this).closest('table').find(\"td input[type='checkbox']\").attr('checked', \$(this).is(':checked')).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                                                        });
                                                        \$(\"td.sonata-ba-list-field-batch input[type='checkbox']\").change(function () {
                                                            \$(this).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                                                        });
                                                    });
                                                ";
    }

    // line 95
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 96
        echo "                                                <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                    <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_all_elements\"/>
                                                    ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                </label>

                                                <select name=\"action\" style=\"width: auto; height: auto\">
                                                    ";
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : null));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 103
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "label"), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                                </select>
                                            ";
    }

    // line 122
    public function block_pager_results($context, array $blocks = array())
    {
        // line 123
        echo "                                            ";
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_results"), "method"));
        $template->display($context);
        // line 124
        echo "                                        ";
    }

    // line 131
    public function block_pager_links($context, array $blocks = array())
    {
        // line 132
        echo "                        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "haveToPaginate", array(), "method")) {
            // line 133
            echo "                            ";
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_links"), "method"));
            $template->display($context);
            // line 134
            echo "                        ";
        }
        // line 135
        echo "                    ";
    }

    // line 149
    public function block_list_filters($context, array $blocks = array())
    {
        // line 150
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters")) {
            // line 151
            echo "        <form class=\"sonata-filter-form ";
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isChild") && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters"))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\">
            <fieldset class=\"filter_legend\">
                <legend class=\"filter_legend ";
            // line 153
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</legend>

                <div class=\"filter_container ";
            // line 155
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">
                    <div>
                        ";
            // line 157
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 158
                echo "                            <div class=\"clearfix\">
                                <label for=\"";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "value", array(), "array"), "vars"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "label")), "method"), "html", null, true);
                echo "</label>
                                ";
                // line 160
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "type", array(), "array"), 'widget', array("attr" => array("class" => "span8 sonata-filter-option")));
                echo "
                                ";
                // line 161
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "value", array(), "array"), 'widget', array("attr" => array("class" => "span8")));
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                    </div>

                    <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\" />

                    ";
            // line 168
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), "_page", array(), "array"), "setRendered", array(), "method");
            // line 169
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "

                    <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "\" />

                    <a class=\"btn\" href=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                </div>

                ";
            // line 176
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "persistentParameters"));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 177
                echo "                    <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["paramKey"]) ? $context["paramKey"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["paramValue"]) ? $context["paramValue"] : null), "html", null, true);
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "            </fieldset>
        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  571 => 179,  560 => 177,  556 => 176,  543 => 171,  537 => 169,  535 => 168,  529 => 164,  516 => 160,  507 => 158,  498 => 155,  491 => 153,  477 => 149,  473 => 135,  463 => 132,  460 => 131,  456 => 124,  452 => 123,  444 => 105,  433 => 103,  429 => 102,  418 => 97,  398 => 84,  395 => 83,  389 => 95,  385 => 93,  383 => 83,  380 => 82,  377 => 81,  372 => 136,  336 => 117,  310 => 115,  303 => 113,  288 => 81,  285 => 80,  278 => 77,  275 => 76,  267 => 72,  223 => 65,  217 => 61,  208 => 59,  200 => 56,  175 => 52,  370 => 131,  364 => 127,  358 => 122,  355 => 121,  346 => 91,  343 => 90,  323 => 84,  313 => 81,  305 => 114,  290 => 72,  280 => 68,  274 => 66,  268 => 64,  252 => 70,  188 => 20,  177 => 53,  12 => 34,  160 => 47,  148 => 43,  123 => 48,  116 => 39,  113 => 36,  184 => 72,  99 => 139,  163 => 48,  151 => 44,  129 => 52,  287 => 128,  283 => 79,  256 => 112,  226 => 66,  213 => 84,  205 => 79,  197 => 74,  168 => 68,  156 => 48,  79 => 32,  40 => 14,  1320 => 662,  1317 => 661,  1311 => 664,  1309 => 661,  1304 => 659,  1300 => 657,  1297 => 656,  1291 => 648,  1287 => 646,  1280 => 642,  1276 => 641,  1270 => 638,  1266 => 637,  1262 => 636,  1258 => 634,  1256 => 633,  1235 => 615,  1227 => 610,  1217 => 603,  1205 => 594,  1156 => 550,  1153 => 549,  1151 => 548,  1115 => 515,  1108 => 510,  1106 => 505,  1097 => 499,  1093 => 498,  1088 => 496,  1084 => 495,  1081 => 494,  1078 => 493,  1071 => 651,  1069 => 493,  1065 => 492,  1061 => 490,  1059 => 489,  1056 => 488,  1042 => 472,  1036 => 468,  1021 => 455,  1019 => 454,  1002 => 440,  999 => 439,  995 => 437,  985 => 431,  983 => 430,  976 => 425,  974 => 420,  968 => 417,  965 => 416,  962 => 415,  955 => 483,  953 => 415,  949 => 414,  945 => 412,  943 => 411,  940 => 410,  933 => 405,  926 => 400,  924 => 399,  919 => 397,  914 => 395,  909 => 392,  906 => 391,  903 => 390,  900 => 389,  897 => 387,  894 => 386,  891 => 385,  889 => 384,  886 => 383,  883 => 382,  880 => 381,  878 => 380,  875 => 379,  872 => 378,  869 => 377,  867 => 376,  864 => 375,  861 => 374,  858 => 373,  856 => 372,  853 => 371,  850 => 370,  847 => 369,  844 => 368,  842 => 367,  840 => 366,  837 => 365,  830 => 357,  826 => 356,  822 => 355,  819 => 354,  816 => 353,  809 => 360,  807 => 353,  802 => 351,  798 => 349,  796 => 348,  793 => 347,  786 => 342,  780 => 338,  778 => 337,  773 => 334,  767 => 332,  759 => 327,  756 => 326,  754 => 325,  749 => 323,  745 => 322,  741 => 320,  739 => 319,  736 => 318,  729 => 313,  719 => 305,  717 => 304,  714 => 303,  703 => 294,  701 => 293,  696 => 290,  690 => 288,  684 => 287,  681 => 286,  676 => 285,  673 => 284,  665 => 279,  662 => 278,  660 => 277,  652 => 271,  647 => 268,  635 => 258,  633 => 257,  624 => 251,  620 => 250,  616 => 248,  614 => 247,  611 => 246,  601 => 238,  595 => 237,  589 => 236,  586 => 235,  581 => 234,  578 => 233,  572 => 231,  570 => 230,  561 => 224,  557 => 223,  554 => 222,  551 => 221,  548 => 173,  545 => 219,  542 => 218,  539 => 217,  536 => 216,  534 => 215,  528 => 211,  521 => 207,  514 => 203,  510 => 159,  504 => 199,  501 => 198,  486 => 190,  484 => 189,  481 => 188,  464 => 175,  446 => 162,  441 => 160,  432 => 154,  423 => 150,  414 => 144,  405 => 138,  393 => 134,  391 => 107,  367 => 115,  362 => 114,  360 => 125,  353 => 111,  349 => 92,  341 => 107,  338 => 106,  330 => 86,  324 => 99,  316 => 82,  299 => 111,  294 => 109,  292 => 90,  289 => 89,  282 => 84,  266 => 72,  263 => 62,  261 => 70,  258 => 68,  253 => 65,  250 => 64,  247 => 60,  244 => 31,  236 => 54,  181 => 18,  142 => 41,  140 => 47,  137 => 39,  132 => 42,  130 => 34,  127 => 43,  117 => 47,  107 => 42,  100 => 37,  87 => 33,  80 => 20,  77 => 19,  55 => 24,  523 => 208,  520 => 161,  511 => 164,  506 => 200,  503 => 157,  496 => 158,  494 => 157,  492 => 156,  490 => 192,  485 => 153,  483 => 151,  480 => 150,  465 => 142,  462 => 141,  449 => 122,  445 => 137,  434 => 135,  431 => 134,  428 => 152,  425 => 132,  419 => 130,  416 => 129,  413 => 96,  410 => 95,  407 => 126,  404 => 125,  401 => 137,  399 => 123,  388 => 132,  386 => 118,  382 => 124,  376 => 115,  374 => 114,  371 => 116,  365 => 109,  356 => 107,  352 => 106,  347 => 105,  345 => 109,  342 => 103,  333 => 87,  319 => 97,  312 => 93,  309 => 127,  304 => 90,  286 => 70,  284 => 81,  270 => 120,  264 => 72,  262 => 71,  259 => 70,  251 => 66,  235 => 56,  232 => 55,  229 => 67,  219 => 25,  216 => 49,  209 => 45,  189 => 54,  183 => 104,  178 => 71,  170 => 27,  164 => 25,  158 => 62,  155 => 63,  153 => 58,  121 => 4,  93 => 28,  86 => 64,  73 => 29,  68 => 25,  56 => 24,  37 => 16,  26 => 1,  103 => 36,  84 => 30,  61 => 22,  23 => 1,  493 => 171,  487 => 170,  482 => 167,  474 => 183,  470 => 134,  466 => 133,  457 => 158,  453 => 139,  450 => 156,  448 => 163,  443 => 153,  440 => 152,  436 => 151,  426 => 151,  422 => 98,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 136,  394 => 121,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 100,  368 => 115,  354 => 114,  350 => 118,  335 => 88,  327 => 116,  325 => 107,  322 => 98,  318 => 83,  311 => 100,  307 => 79,  298 => 98,  296 => 75,  291 => 108,  281 => 80,  277 => 124,  271 => 90,  265 => 63,  260 => 61,  254 => 86,  248 => 62,  242 => 104,  237 => 80,  221 => 51,  195 => 55,  191 => 21,  180 => 33,  172 => 51,  143 => 41,  135 => 44,  131 => 44,  114 => 41,  110 => 40,  64 => 23,  276 => 96,  272 => 75,  257 => 60,  249 => 69,  246 => 68,  243 => 60,  241 => 56,  238 => 55,  233 => 53,  230 => 95,  227 => 53,  224 => 77,  222 => 76,  220 => 75,  211 => 60,  207 => 72,  182 => 69,  162 => 49,  146 => 48,  138 => 53,  134 => 45,  122 => 31,  111 => 144,  105 => 142,  74 => 32,  70 => 31,  66 => 16,  62 => 23,  50 => 19,  41 => 14,  97 => 36,  92 => 197,  88 => 28,  82 => 33,  78 => 31,  71 => 26,  59 => 22,  53 => 20,  32 => 2,  90 => 38,  75 => 19,  58 => 18,  24 => 11,  29 => 14,  101 => 140,  96 => 138,  91 => 74,  81 => 29,  49 => 9,  30 => 14,  43 => 15,  47 => 20,  38 => 17,  34 => 23,  46 => 16,  44 => 19,  31 => 22,  204 => 57,  199 => 33,  186 => 35,  174 => 69,  169 => 50,  166 => 49,  161 => 52,  159 => 65,  154 => 45,  145 => 42,  141 => 54,  139 => 39,  126 => 33,  124 => 42,  120 => 47,  118 => 40,  108 => 143,  104 => 33,  94 => 75,  72 => 24,  69 => 17,  65 => 24,  52 => 28,  27 => 13,  35 => 3,  28 => 12,  25 => 11,  22 => 11,  212 => 24,  206 => 78,  202 => 34,  196 => 73,  192 => 71,  190 => 84,  185 => 70,  179 => 102,  176 => 70,  171 => 13,  167 => 54,  165 => 11,  157 => 46,  152 => 51,  150 => 46,  147 => 45,  144 => 57,  136 => 51,  133 => 35,  128 => 40,  125 => 488,  119 => 30,  115 => 46,  112 => 45,  109 => 35,  106 => 34,  102 => 31,  98 => 37,  95 => 28,  89 => 65,  85 => 23,  83 => 28,  76 => 27,  67 => 25,  63 => 15,  60 => 14,  57 => 26,  54 => 29,  51 => 15,  48 => 17,  45 => 19,  42 => 25,  39 => 17,  36 => 16,  33 => 15,);
    }
}
