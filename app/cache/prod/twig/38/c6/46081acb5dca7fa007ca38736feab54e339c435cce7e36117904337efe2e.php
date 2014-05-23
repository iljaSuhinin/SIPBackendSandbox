<?php

/* GenemuFormBundle:Form:jquery_layout.html.twig */
class __TwigTemplate_38c646081acb5dca7fa007ca38736feab54e339c435cce7e36117904337efe2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_javascript' => array($this, 'block_form_javascript'),
            'field_javascript' => array($this, 'block_field_javascript'),
            'button_javascript' => array($this, 'block_button_javascript'),
            'genemu_captcha_javascript' => array($this, 'block_genemu_captcha_javascript'),
            'genemu_recaptcha_javascript' => array($this, 'block_genemu_recaptcha_javascript'),
            'genemu_tinymce_javascript' => array($this, 'block_genemu_tinymce_javascript'),
            'genemu_jquerydate_javascript' => array($this, 'block_genemu_jquerydate_javascript'),
            'genemu_jquerydate_javascript_prototype' => array($this, 'block_genemu_jquerydate_javascript_prototype'),
            'genemu_jqueryslider_javascript' => array($this, 'block_genemu_jqueryslider_javascript'),
            'genemu_jquerycolor_javascript' => array($this, 'block_genemu_jquerycolor_javascript'),
            'genemu_jqueryrating_javascript' => array($this, 'block_genemu_jqueryrating_javascript'),
            'genemu_jquerytokeninput_javascript' => array($this, 'block_genemu_jquerytokeninput_javascript'),
            'genemu_jqueryautocompleter_javascript' => array($this, 'block_genemu_jqueryautocompleter_javascript'),
            'genemu_jqueryautocomplete_javascript' => array($this, 'block_genemu_jqueryautocomplete_javascript'),
            'genemu_jquerychosen_javascript' => array($this, 'block_genemu_jquerychosen_javascript'),
            'genemu_jquerychosen_javascript_prototype' => array($this, 'block_genemu_jquerychosen_javascript_prototype'),
            'genemu_jquerygeolocation_javascript' => array($this, 'block_genemu_jquerygeolocation_javascript'),
            'genemu_jqueryfile_javascript' => array($this, 'block_genemu_jqueryfile_javascript'),
            'genemu_jqueryfile_javascript_prototype' => array($this, 'block_genemu_jqueryfile_javascript_prototype'),
            'genemu_jqueryimage_javascript' => array($this, 'block_genemu_jqueryimage_javascript'),
            'genemu_jqueryimage_javascript_prototype' => array($this, 'block_genemu_jqueryimage_javascript_prototype'),
            'genemu_jqueryselect2_javascript' => array($this, 'block_genemu_jqueryselect2_javascript'),
            'genemu_jqueryselect2_javascript_prototype' => array($this, 'block_genemu_jqueryselect2_javascript_prototype'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_javascript', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_javascript', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('button_javascript', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('genemu_captcha_javascript', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('genemu_recaptcha_javascript', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('genemu_tinymce_javascript', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('genemu_jquerydate_javascript', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('genemu_jqueryslider_javascript', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('genemu_jquerycolor_javascript', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('genemu_jqueryrating_javascript', $context, $blocks);
        // line 197
        echo "
";
        // line 198
        $this->displayBlock('genemu_jquerytokeninput_javascript', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('genemu_jqueryautocompleter_javascript', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('genemu_jqueryautocomplete_javascript', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('genemu_jquerychosen_javascript', $context, $blocks);
        // line 364
        echo "
";
        // line 365
        $this->displayBlock('genemu_jquerygeolocation_javascript', $context, $blocks);
        // line 409
        echo "
";
        // line 410
        $this->displayBlock('genemu_jqueryfile_javascript', $context, $blocks);
        // line 487
        echo "
";
        // line 488
        $this->displayBlock('genemu_jqueryimage_javascript', $context, $blocks);
        // line 655
        echo "
";
        // line 656
        $this->displayBlock('genemu_jqueryselect2_javascript', $context, $blocks);
        // line 667
        echo "
";
    }

    // line 1
    public function block_form_javascript($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["child"]) ? $context["child"] : null));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 9
    public function block_field_javascript($context, array $blocks = array())
    {
        echo "";
    }

    // line 11
    public function block_button_javascript($context, array $blocks = array())
    {
        echo "";
    }

    // line 13
    public function block_genemu_captcha_javascript($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    <!--[if lte IE 7]>
    <script type=\"text/javascript\">
        \$(function () {
            var pathBase64 = \"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("genemu_base64");
        echo "\";

            \$(document.images).each(function(){
                var src = \$(this).attr(\"src\");
                if (/^data:.*;base64/i.test(src)) {
                    src = src.slice(5);
                    \$(this).attr(\"src\",pathBase64+\"?\"+src);
                }
            });
        });
    </script>
    <![endif]-->
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 33
    public function block_genemu_recaptcha_javascript($context, array $blocks = array())
    {
        // line 34
        ob_start();
        // line 35
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        function genemu_recaptcha_load()
        {
            Recaptcha.create('";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["public_key"]) ? $context["public_key"] : null), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_div', ";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");
        }

        if (window.addEventListener) {
            window.addEventListener('load', genemu_recaptcha_load, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', genemu_recaptcha_load);
        } else {
            window.onload = genemu_recaptcha_load;
        }
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 53
    public function block_genemu_tinymce_javascript($context, array $blocks = array())
    {
        // line 54
        ob_start();
        // line 55
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 56
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("script_url" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url"))));
            // line 59
            echo "    ";
        } else {
            // line 60
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("mode" => "exact", "elements" => (isset($context["id"]) ? $context["id"] : null)));
            // line 64
            echo "    ";
        }
        // line 65
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$configs = ";
        // line 68
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ";";
        // line 70
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 71
            echo "
            var \$textarea = jQuery('#";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "');
            if(\$textarea.is('[required]')) {
                \$configs.oninit = function(editor) {
                    editor.onChange.add(function(ed, l) { ed.save(); });
                };
            }
            \$textarea.tinymce(\$configs);
        ";
        } else {
            // line 80
            echo "
            tinyMCE.init(\$configs);
        ";
        }
        // line 84
        echo "});
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 89
    public function block_genemu_jquerydate_javascript($context, array $blocks = array())
    {
        // line 90
        ob_start();
        // line 91
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 94
        if (((isset($context["widget"]) ? $context["widget"] : null) != "single_text")) {
            echo "datepicker_";
        }
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
        
        ";
        // line 96
        $this->displayBlock('genemu_jquerydate_javascript_prototype', $context, $blocks);
        // line 127
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 96
    public function block_genemu_jquerydate_javascript_prototype($context, array $blocks = array())
    {
        // line 97
        echo "
        ";
        // line 98
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "buttonImage", array(), "any", true, true)) {
            // line 99
            echo "            ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("buttonImage" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "buttonImage"))));
            // line 102
            echo "        ";
        }
        // line 103
        echo "
        ";
        // line 104
        if (((isset($context["culture"]) ? $context["culture"] : null) == "en")) {
            // line 105
            echo "            ";
            $context["culture"] = "en-GB";
            // line 106
            echo "        ";
        }
        // line 107
        echo "
            var \$configs = \$.extend({
                minDate: new Date(";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["min_year"]) ? $context["min_year"] : null), "html", null, true);
        echo ", 0, 1),
                maxDate: new Date(";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["max_year"]) ? $context["max_year"] : null), "html", null, true);
        echo ", 11, 31)
            }, \$.datepicker.regional['";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["culture"]) ? $context["culture"] : null), "html", null, true);
        echo "'] ,";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");

        ";
        // line 113
        if (((isset($context["widget"]) ? $context["widget"] : null) != "single_text")) {
            // line 114
            echo "            var \$year = \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year"), "vars"), "id"), "html", null, true);
            echo "');
            var \$month = \$('#";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month"), "vars"), "id"), "html", null, true);
            echo "');
            var \$day = \$('#";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day"), "vars"), "id"), "html", null, true);
            echo "');

            \$configs.onSelect = function(date) {
                \$year.val(parseInt(date.substring(0, 4), 10));
                \$month.val(parseInt(date.substring(5, 7), 10));
                \$day.val(parseInt(date.substring(8), 10));
            }
        ";
        }
        // line 124
        echo "
            \$field.datepicker(\$configs);
        ";
    }

    // line 132
    public function block_genemu_jqueryslider_javascript($context, array $blocks = array())
    {
        // line 133
        ob_start();
        // line 134
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$configs = \$.extend(";
        // line 137
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ", {
                value: ";
        // line 138
        echo twig_escape_filter($this->env, (((isset($context["value"]) ? $context["value"] : null)) ? ((isset($context["value"]) ? $context["value"] : null)) : (0)), "html", null, true);
        echo ",
                slide: function(event, ui) {
                    \$field.val(ui.value);
                }
            });

            \$('#";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_slider').slider(\$configs);
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 150
    public function block_genemu_jquerycolor_javascript($context, array $blocks = array())
    {
        // line 151
        ob_start();
        // line 152
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$configs = \$.extend({
                color: '#' + \$field.val(),
                onBeforeShow: function() {
                    \$(this).ColorPickerSetColor(\$field.val());
                }
            }, ";
        // line 160
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");

        ";
        // line 162
        if (((isset($context["widget"]) ? $context["widget"] : null) == "image")) {
            // line 163
            echo "            \$picker = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "_color');

            \$picker.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex);

                    \$('div', \$picker).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        } else {
            // line 175
            echo "            \$field.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        }
        // line 183
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 188
    public function block_genemu_jqueryrating_javascript($context, array $blocks = array())
    {
        // line 189
        ob_start();
        // line 190
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$('[name=\"";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"]').rating(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 198
    public function block_genemu_jquerytokeninput_javascript($context, array $blocks = array())
    {
        // line 199
        ob_start();
        // line 200
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$tokeninput = \$('#tokeninput_";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');

            var update_hidden_sourceinput = function(item) {
                var \$val = \$tokeninput.tokenInput('get');
            ";
        // line 207
        if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : null))) {
            // line 208
            echo "                for (first in \$val) break;
                \$val = \$val[first];
            ";
        }
        // line 211
        echo "
                \$field.val(JSON.stringify(\$val));
            };

            ";
        // line 215
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            // line 216
            echo "                ";
            if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : null))) {
                // line 217
                echo "                    ";
                $context["prePopulate"] = (("[" . (isset($context["value"]) ? $context["value"] : null)) . "]");
                // line 218
                echo "                ";
            } else {
                // line 219
                echo "                    ";
                $context["prePopulate"] = (isset($context["value"]) ? $context["value"] : null);
                // line 220
                echo "                ";
            }
            // line 221
            echo "            ";
        }
        // line 222
        echo "
            var \$configs = \$.extend(";
        // line 223
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ", {
                prePopulate: ";
        // line 224
        echo (isset($context["prePopulate"]) ? $context["prePopulate"] : null);
        echo ",
                onAdd: update_hidden_sourceinput,
                onDelete: update_hidden_sourceinput
            });

            \$tokeninput.tokenInput(
            ";
        // line 230
        if ((isset($context["route_name"]) ? $context["route_name"] : null)) {
            // line 231
            echo "                '";
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : null));
            echo "'
            ";
        } else {
            // line 233
            echo "                ";
            $context["sourceChoices"] = array();
            // line 234
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 235
                echo "                    ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : null), array(0 => array("value" => $this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "value"), "label" => $this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "label"))));
                // line 236
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "                ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : null));
            echo "
            ";
        }
        // line 238
        echo ",
                \$configs
            );
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 246
    public function block_genemu_jqueryautocompleter_javascript($context, array $blocks = array())
    {
        // line 247
        ob_start();
        // line 248
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$autocompleter = \$('#autocompleter_";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$configs = {
                focus: function(event, ui) {
                    return false;
                },
                select: function(event, ui) {
                ";
        // line 257
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 258
            echo "                    terms = this.value.split(/,\\s*/);
                    terms.pop();
                    terms.push(ui.item.label);
                    terms.push('');
                    this.value = terms.join(', ');

                    terms = \$field.val();
                    terms = !terms?[]:JSON.parse(terms);
                    terms.push(ui.item);
                ";
        } else {
            // line 268
            echo "                    this.value = ui.item.label;
                    terms = ui.item;
                ";
        }
        // line 271
        echo "                    \$field.val(JSON.stringify(terms));

                    return false;
                }
            };

            ";
        // line 277
        if ((isset($context["route_name"]) ? $context["route_name"] : null)) {
            // line 278
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 279
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : null));
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 284
            echo "                ";
            $context["sourceChoices"] = array();
            // line 285
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 286
                echo "                    ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : null), array(0 => array("value" => $this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "value"), "label" => $this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "label"))));
                // line 287
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : null));
            echo ";
            ";
        }
        // line 290
        echo "
                \$autocompleter.autocomplete(\$configs);

            ";
        // line 293
        if ((isset($context["free_values"]) ? $context["free_values"] : null)) {
            // line 294
            echo "                \$autocompleter.keyup(function(){
                    var val ={}
                    var fieldval = \$(this).val();
                    val['value'] = fieldval;
                    val['label'] = fieldval;

                    \$field.val(JSON.stringify(val));
                });
            ";
        }
        // line 303
        echo "
            ";
        // line 304
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 305
            echo "                var \$source = \$autocompleter.data('autocomplete').source;

                \$autocompleter.autocomplete('option', 'source', function(request, response) {
                    request.term = request.term.split(/,\\s*/).pop();

                    \$source(request, response);
                });
            ";
        }
        // line 313
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 318
    public function block_genemu_jqueryautocomplete_javascript($context, array $blocks = array())
    {
        // line 319
        ob_start();
        // line 320
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$autocompleter = \$('#";
        // line 322
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$configs = ";
        // line 323
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ";

            ";
        // line 325
        if ((isset($context["route_name"]) ? $context["route_name"] : null)) {
            // line 326
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 327
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : null));
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 332
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["suggestions"]) ? $context["suggestions"] : null));
            echo ";
            ";
        }
        // line 334
        echo "
            \$autocompleter.autocomplete(\$configs);
            
            ";
        // line 337
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "minLength", array(), "any", true, true) && (0 == $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "minLength")))) {
            // line 338
            echo "                \$autocompleter.focus(function() {
                    \$(this).autocomplete(\"search\", \"\");
                });
            ";
        }
        // line 342
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 347
    public function block_genemu_jquerychosen_javascript($context, array $blocks = array())
    {
        // line 348
        ob_start();
        // line 349
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 351
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');

            ";
        // line 353
        $this->displayBlock('genemu_jquerychosen_javascript_prototype', $context, $blocks);
        // line 360
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 353
    public function block_genemu_jquerychosen_javascript_prototype($context, array $blocks = array())
    {
        // line 354
        echo "                \$field.chosen({
                    no_results_text: \"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["no_results_text"]) ? $context["no_results_text"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "\",
                    allow_single_deselect: ";
        // line 356
        echo (((isset($context["allow_single_deselect"]) ? $context["allow_single_deselect"] : null)) ? ("true") : ("false"));
        echo ",
                    disable_search_threshold: ";
        // line 357
        echo twig_escape_filter($this->env, (isset($context["disable_search_threshold"]) ? $context["disable_search_threshold"] : null), "html", null, true);
        echo "
                });
            ";
    }

    // line 365
    public function block_genemu_jquerygeolocation_javascript($context, array $blocks = array())
    {
        // line 366
        ob_start();
        // line 367
        echo "    ";
        // line 368
        echo "    ";
        if (((isset($context["map"]) ? $context["map"] : null) === true)) {
            // line 369
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array("map" => (("#" . (isset($context["id"]) ? $context["id"] : null)) . "_map")));
            // line 370
            echo "    ";
        }
        // line 371
        echo "
    ";
        // line 372
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latitude", array(), "any", true, true)) {
            // line 373
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array("lat" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latitude"), "vars"), "id"))));
            // line 374
            echo "    ";
        }
        // line 375
        echo "
    ";
        // line 376
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "longitude", array(), "any", true, true)) {
            // line 377
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array("lng" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "longitude"), "vars"), "id"))));
            // line 378
            echo "    ";
        }
        // line 379
        echo "
    ";
        // line 380
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locality", array(), "any", true, true)) {
            // line 381
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array("locality" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locality"), "vars"), "id"))));
            // line 382
            echo "    ";
        }
        // line 383
        echo "
    ";
        // line 384
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array(), "any", true, true)) {
            // line 385
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array("country" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country"), "vars"), "id"))));
            // line 386
            echo "    ";
        }
        // line 387
        echo "
    ";
        // line 389
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["elements"]) ? $context["elements"] : null)) > 0)) {
            // line 390
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("elements" => (isset($context["elements"]) ? $context["elements"] : null)));
            // line 391
            echo "    ";
        }
        // line 392
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 395
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address"), "vars"), "id"), "html", null, true);
        echo "');

            \$field.addresspicker(";
        // line 397
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");

            ";
        // line 399
        if (((isset($context["map"]) ? $context["map"] : null) === true)) {
            // line 400
            echo "                var gmarker = \$field.addresspicker('marker');
                gmarker.setVisible(true);

                \$field.addresspicker('updatePosition');
            ";
        }
        // line 405
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 410
    public function block_genemu_jqueryfile_javascript($context, array $blocks = array())
    {
        // line 411
        ob_start();
        // line 412
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field = \$('#";
        // line 414
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_upload');
        ";
        // line 415
        $this->displayBlock('genemu_jqueryfile_javascript_prototype', $context, $blocks);
        // line 483
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 415
    public function block_genemu_jqueryfile_javascript_prototype($context, array $blocks = array())
    {
        // line 416
        echo "        var \$form = \$field.closest('form');
        var \$queue = \$('#";
        // line 417
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_queue');
        var \$nbQueue = 0;

        var \$configs = \$.extend(";
        // line 420
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("swf" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "swf")), "cancelImg" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "cancelImg")), "uploader" => $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script")), "queueID" => ((isset($context["id"]) ? $context["id"] : null) . "_queue"))));
        // line 425
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    ";
        // line 430
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 431
            echo "                        var value = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').val();
                        if (value != '') {
                            value += \",\";
                        }
                        value += data.file;
                    ";
        } else {
            // line 437
            echo "                        var value = data.file;
                    ";
        }
        // line 439
        echo "
                    \$('#";
        // line 440
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').val(value);
                    \$nbQueue--;
                } else {
                    alert('Error');
                }
            },
            onSelect: function(file) {
                \$nbQueue++;
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

    ";
        // line 454
        if (((!$this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "auto", array(), "any", true, true)) || ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "auto") === false))) {
            // line 455
            echo "        \$configs.onAllComplete = function(event, data) {
            \$form.submit();
        };

        \$form.submit(function(event) {
            if (0 === \$nbQueue) {
                return \$joinFiles();
            } else {
                \$field.uploadifyUpload();
                event.preventDefault();
            }
        });
    ";
        } else {
            // line 468
            echo "        \$form.submit(function(event) {
            return \$joinFiles();
        });
    ";
        }
        // line 472
        echo "
        var \$joinFiles = function() {
            if (\$files = \$field.data('files')) {
                \$field.val(\$files.join(','));
            }

            return true;
        }

        \$field.uploadify(\$configs);
        ";
    }

    // line 488
    public function block_genemu_jqueryimage_javascript($context, array $blocks = array())
    {
        // line 489
        ob_start();
        // line 490
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field   = \$('#";
        // line 492
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_upload');
        ";
        // line 493
        $this->displayBlock('genemu_jqueryimage_javascript_prototype', $context, $blocks);
        // line 651
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 493
    public function block_genemu_jqueryimage_javascript_prototype($context, array $blocks = array())
    {
        // line 494
        echo "        var \$form    = \$field.closest('form');
        var \$preview = \$('#";
        // line 495
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_img_preview');
        var \$options = \$('#";
        // line 496
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_options');
        // Base path for apps not on DocumentRoot
        var \$basePath = '";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "folder")), "html", null, true);
        echo "';
        \$basePath = \$basePath.substr(0, \$basePath.length - '";
        // line 499
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "folder"), "html", null, true);
        echo "'.length);

        var \$coords = {};
        var \$crop = null;
        var \$ratio = 1;

        var \$configs = \$.extend(";
        // line 505
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("swf" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "swf")), "cancelImg" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "cancelImg")), "uploader" => $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script")), "queueID" => ((isset($context["id"]) ? $context["id"] : null) . "_queue"))));
        // line 510
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    \$('#";
        // line 515
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').val(data.file);

                    // add if and only if path is relative
                    if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                        data.thumbnail.file = \$basePath + data.thumbnail.file;
                    }

                    createCrop({
                        image:      data.image,
                        thumbnail:  data.thumbnail
                    });
                } else {
                    alert('Error');
                }
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

        var createCrop = function (data) {
            if (\$crop) {
                \$crop.destroy();
            }

            // add if and only if path is relative
            if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                data.thumbnail.file = \$basePath + data.thumbnail.file;
            }
            var \$img = new Image();

            console.log(data);
            \$(\$img).load(function() {
                ";
        // line 548
        $context["widthMax"] = (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "thumbnail", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "thumbnail"), "width")) : (500));
        // line 549
        echo "
                \$ratio = data.image.width > ";
        // line 550
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : null), "html", null, true);
        echo " ? data.image.width / ";
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : null), "html", null, true);
        echo " : 1;
                \$('.crop', \$options).hide();

                \$preview
                    .width(Math.round(data.image.width / \$ratio))
                    .height(Math.round(data.image.height / \$ratio))
                    .attr('src', this.src);

                if (!\$crop) {
                    \$options.fadeIn();
                }

                \$preview.Jcrop({
                    onSelect: checkCoords,
                    onChange: checkCoords
                }, function() {
                    \$crop = this;
                });
            }).attr('src', data.thumbnail.file);
        }

        var checkCoords = function(coords) {

            if (coords.w > 0 && coords.h > 0) {
                \$('.crop', \$options).fadeIn();

                \$coords = {
                    x: coords.x * \$ratio,
                    y: coords.y * \$ratio,
                    w: coords.w * \$ratio,
                    h: coords.h * \$ratio
                };
            } else {
                \$('.crop', \$options).fadeOut();
            }
        }

        \$('.change', \$options).click(function() {
            var \$this = \$(this);
            var \$regex = new RegExp('^\\\\b(.*?) (.*)\\\\b', 'g');
            var \$filter = \$this.attr('class').replace(\$regex, '\$1');

            var \$data = {
                filter: \$filter,
                image: \$('#";
        // line 594
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').val(),
                opacity: 0.5
            };

            if ('crop' === \$filter && !\$.isEmptyObject(\$coords)) {
                \$data = \$.extend(\$data, \$coords);
            }

            if (
                \$.inArray(\$filter, ";
        // line 603
        echo twig_jsonencode_filter((isset($context["filters"]) ? $context["filters"] : null));
        echo ") !== -1 ||
                ( 'crop' === \$filter && !\$.isEmptyObject(\$coords) )
            ) {
                \$this.addClass('loading');

                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 610
        echo $this->env->getExtension('routing')->getPath("genemu_form_image");
        echo "',
                    data: \$data,
                    dataType: 'json',
                    success: function(data) {
                        if (data.result == '1') {
                            \$('#";
        // line 615
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').val(data.file);

                            createCrop({
                                image: data.image,
                                thumbnail: \$.isEmptyObject(data.thumbnail) ? \$.extend(data.image, {
                                    file: data.file
                                }) : data.thumbnail
                            });
                        } else {
                            alert('Error');
                        }

                        \$this.removeClass('loading');
                    }
                });
            }
        });

    ";
        // line 633
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 634
            echo "        createCrop({
            thumbnail: {
                file: '";
            // line 636
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "file")) : ((isset($context["value"]) ? $context["value"] : null))), "html", null, true);
            echo "',
                width: ";
            // line 637
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "width")) : ((isset($context["width"]) ? $context["width"] : null))), "html", null, true);
            echo ",
                height: ";
            // line 638
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "height")) : ((isset($context["height"]) ? $context["height"] : null))), "html", null, true);
            echo ",
            },
            image: {
                width: ";
            // line 641
            echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
            echo ",
                height: ";
            // line 642
            echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
            echo "
            }
        });
    ";
        } else {
            // line 646
            echo "        \$options.hide();
    ";
        }
        // line 648
        echo "
        \$field.uploadify(\$configs);
        ";
    }

    // line 656
    public function block_genemu_jqueryselect2_javascript($context, array $blocks = array())
    {
        // line 657
        echo "    <script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        \$field = \$('#";
        // line 659
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');

        ";
        // line 661
        $this->displayBlock('genemu_jqueryselect2_javascript_prototype', $context, $blocks);
        // line 664
        echo "    });
    </script>
";
    }

    // line 661
    public function block_genemu_jqueryselect2_javascript_prototype($context, array $blocks = array())
    {
        // line 662
        echo "            \$field.select2(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");
        ";
    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:jquery_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1320 => 662,  1317 => 661,  1311 => 664,  1309 => 661,  1304 => 659,  1300 => 657,  1297 => 656,  1291 => 648,  1287 => 646,  1280 => 642,  1276 => 641,  1270 => 638,  1266 => 637,  1262 => 636,  1258 => 634,  1256 => 633,  1235 => 615,  1227 => 610,  1217 => 603,  1205 => 594,  1156 => 550,  1153 => 549,  1151 => 548,  1115 => 515,  1108 => 510,  1106 => 505,  1097 => 499,  1093 => 498,  1088 => 496,  1084 => 495,  1081 => 494,  1078 => 493,  1071 => 651,  1069 => 493,  1065 => 492,  1061 => 490,  1059 => 489,  1056 => 488,  1042 => 472,  1036 => 468,  1021 => 455,  1019 => 454,  1002 => 440,  999 => 439,  995 => 437,  985 => 431,  983 => 430,  976 => 425,  974 => 420,  968 => 417,  965 => 416,  962 => 415,  955 => 483,  953 => 415,  949 => 414,  945 => 412,  943 => 411,  940 => 410,  933 => 405,  926 => 400,  924 => 399,  919 => 397,  914 => 395,  909 => 392,  906 => 391,  903 => 390,  900 => 389,  897 => 387,  894 => 386,  891 => 385,  889 => 384,  886 => 383,  883 => 382,  880 => 381,  878 => 380,  875 => 379,  872 => 378,  869 => 377,  867 => 376,  864 => 375,  861 => 374,  858 => 373,  856 => 372,  853 => 371,  850 => 370,  847 => 369,  844 => 368,  842 => 367,  840 => 366,  837 => 365,  830 => 357,  826 => 356,  822 => 355,  819 => 354,  816 => 353,  809 => 360,  807 => 353,  802 => 351,  798 => 349,  796 => 348,  793 => 347,  786 => 342,  780 => 338,  778 => 337,  773 => 334,  767 => 332,  759 => 327,  756 => 326,  754 => 325,  749 => 323,  745 => 322,  741 => 320,  739 => 319,  736 => 318,  729 => 313,  719 => 305,  717 => 304,  714 => 303,  703 => 294,  701 => 293,  696 => 290,  690 => 288,  684 => 287,  681 => 286,  676 => 285,  673 => 284,  665 => 279,  662 => 278,  660 => 277,  652 => 271,  647 => 268,  635 => 258,  633 => 257,  624 => 251,  620 => 250,  616 => 248,  614 => 247,  611 => 246,  601 => 238,  595 => 237,  589 => 236,  586 => 235,  581 => 234,  578 => 233,  572 => 231,  570 => 230,  561 => 224,  557 => 223,  554 => 222,  551 => 221,  548 => 220,  545 => 219,  542 => 218,  539 => 217,  536 => 216,  534 => 215,  528 => 211,  521 => 207,  514 => 203,  510 => 202,  504 => 199,  501 => 198,  486 => 190,  484 => 189,  481 => 188,  464 => 175,  446 => 162,  441 => 160,  432 => 154,  423 => 150,  414 => 144,  405 => 138,  393 => 134,  391 => 133,  367 => 115,  362 => 114,  360 => 113,  353 => 111,  349 => 110,  341 => 107,  338 => 106,  330 => 103,  324 => 99,  316 => 96,  299 => 94,  294 => 91,  292 => 90,  289 => 89,  282 => 84,  266 => 72,  263 => 71,  261 => 70,  258 => 68,  253 => 65,  250 => 64,  247 => 60,  244 => 59,  236 => 54,  181 => 18,  142 => 3,  140 => 2,  137 => 1,  132 => 667,  130 => 656,  127 => 655,  117 => 409,  107 => 346,  100 => 246,  87 => 187,  80 => 132,  77 => 131,  55 => 11,  523 => 208,  520 => 168,  511 => 164,  506 => 200,  503 => 162,  496 => 158,  494 => 157,  492 => 156,  490 => 192,  485 => 153,  483 => 152,  480 => 151,  465 => 142,  462 => 141,  449 => 138,  445 => 137,  434 => 135,  431 => 134,  428 => 152,  425 => 132,  419 => 130,  416 => 129,  413 => 128,  410 => 127,  407 => 126,  404 => 125,  401 => 137,  399 => 123,  388 => 132,  386 => 118,  382 => 124,  376 => 115,  374 => 114,  371 => 116,  365 => 109,  356 => 107,  352 => 106,  347 => 105,  345 => 109,  342 => 103,  333 => 104,  319 => 97,  312 => 93,  309 => 127,  304 => 90,  286 => 82,  284 => 81,  270 => 74,  264 => 72,  262 => 71,  259 => 70,  251 => 66,  235 => 56,  232 => 55,  229 => 54,  219 => 50,  216 => 49,  209 => 45,  189 => 36,  183 => 34,  178 => 32,  170 => 27,  164 => 25,  158 => 23,  155 => 22,  153 => 21,  121 => 4,  93 => 161,  86 => 113,  73 => 89,  68 => 79,  56 => 49,  37 => 5,  26 => 3,  103 => 27,  84 => 24,  61 => 60,  23 => 1,  493 => 171,  487 => 170,  482 => 167,  474 => 183,  470 => 144,  466 => 160,  457 => 158,  453 => 139,  450 => 156,  448 => 163,  443 => 153,  440 => 152,  436 => 151,  426 => 151,  422 => 131,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 136,  394 => 121,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 118,  368 => 115,  354 => 114,  350 => 112,  335 => 105,  327 => 102,  325 => 107,  322 => 98,  318 => 104,  311 => 100,  307 => 96,  298 => 98,  296 => 85,  291 => 83,  281 => 80,  277 => 80,  271 => 90,  265 => 89,  260 => 87,  254 => 86,  248 => 62,  242 => 82,  237 => 80,  221 => 51,  195 => 75,  191 => 74,  180 => 33,  172 => 29,  143 => 55,  135 => 51,  131 => 9,  114 => 37,  110 => 347,  64 => 13,  276 => 96,  272 => 75,  257 => 92,  249 => 90,  246 => 61,  243 => 60,  241 => 56,  238 => 55,  233 => 53,  230 => 81,  227 => 53,  224 => 77,  222 => 76,  220 => 75,  211 => 73,  207 => 72,  182 => 69,  162 => 61,  146 => 56,  138 => 53,  134 => 52,  122 => 487,  111 => 36,  105 => 318,  74 => 19,  70 => 53,  66 => 70,  62 => 32,  50 => 9,  41 => 8,  97 => 245,  92 => 197,  88 => 150,  82 => 149,  78 => 102,  71 => 80,  59 => 9,  53 => 48,  32 => 8,  90 => 188,  75 => 89,  58 => 59,  24 => 2,  29 => 2,  101 => 168,  96 => 162,  91 => 151,  81 => 103,  49 => 9,  30 => 4,  43 => 19,  47 => 8,  38 => 7,  34 => 4,  46 => 20,  44 => 10,  31 => 3,  204 => 35,  199 => 33,  186 => 35,  174 => 14,  169 => 26,  166 => 62,  161 => 67,  159 => 9,  154 => 63,  145 => 59,  141 => 54,  139 => 12,  126 => 47,  124 => 46,  120 => 410,  118 => 43,  108 => 2,  104 => 32,  94 => 27,  72 => 88,  69 => 15,  65 => 33,  52 => 10,  27 => 6,  35 => 4,  28 => 3,  25 => 1,  22 => 1,  212 => 39,  206 => 78,  202 => 34,  196 => 73,  192 => 71,  190 => 84,  185 => 70,  179 => 64,  176 => 15,  171 => 13,  167 => 59,  165 => 11,  157 => 58,  152 => 51,  150 => 20,  147 => 4,  144 => 48,  136 => 55,  133 => 10,  128 => 8,  125 => 488,  119 => 41,  115 => 365,  112 => 364,  109 => 33,  106 => 28,  102 => 317,  98 => 167,  95 => 198,  89 => 28,  85 => 150,  83 => 112,  76 => 90,  67 => 52,  63 => 69,  60 => 13,  57 => 12,  54 => 11,  51 => 42,  48 => 41,  45 => 1,  42 => 7,  39 => 5,  36 => 1,  33 => 1,);
    }
}
