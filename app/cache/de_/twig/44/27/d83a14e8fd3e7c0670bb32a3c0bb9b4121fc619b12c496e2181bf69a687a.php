<?php

/* OroUIBundle:Form:fields.html.twig */
class __TwigTemplate_4427d83a14e8fd3e7c0670bb32a3c0bb9b4121fc619b12c496e2181bf69a687a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'form_errors' => array($this, 'block_form_errors'),
            'date_widget' => array($this, 'block_date_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'choice_widget_option_attributes' => array($this, 'block_choice_widget_option_attributes'),
            'oro_flexibleentity_email_collection_widget' => array($this, 'block_oro_flexibleentity_email_collection_widget'),
            'oro_flexibleentity_phone_collection_widget' => array($this, 'block_oro_flexibleentity_phone_collection_widget'),
            'collection_render' => array($this, 'block_collection_render'),
            '_oro_entity_config_config_field_type_widget' => array($this, 'block__oro_entity_config_config_field_type_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"control-group";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class"), "html", null, true);
        }
        echo "\">
            ";
        // line 6
        if ((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false))) {
            // line 7
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("label_attr" => twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => "control-label"))));
            echo "
            ";
        }
        // line 9
        echo "            <div class=\"controls";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " validation-error";
        }
        echo "\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if ((isset($context["client_validation"]) ? $context["client_validation"] : $this->getContext($context, "client_validation"))) {
            // line 19
            echo "    <script type=\"text/javascript\">
        require(['jquery'],
        function(\$){
            \$(function() {
                \$('#";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').on('uniformInit', function () {
                    \$(this).filter('.error:not([multiple])').removeClass('error').closest('.selector').addClass('error');
                });
            });
        });
    </script>
    ";
        }
        // line 30
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 33
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if (((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "file")) && (isset($context["client_validation"]) ? $context["client_validation"] : $this->getContext($context, "client_validation")))) {
            // line 35
            echo "    <script type=\"text/javascript\">
        require(['jquery'],
        function(\$){
            \$(function() {
                \$('#";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').on('uniformInit', function () {
                    \$(this).filter('.error').removeClass('error').closest('.uploader').addClass('error');
                });
            });
        });
    </script>
    ";
        }
        // line 46
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 49
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 51
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class") . " error")) : ("error"))));
            // line 52
            echo "    ";
        }
        // line 53
        echo "    ";
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        echo "
";
    }

    // line 56
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 58
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class") . " error")) : ("error"))));
            // line 59
            echo "    ";
        }
        // line 60
        echo "    ";
        $this->displayParentBlock("widget_container_attributes", $context, $blocks);
        echo "
";
    }

    // line 63
    public function block_form_errors($context, array $blocks = array())
    {
        // line 64
        ob_start();
        // line 65
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 66
            echo "            ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent")) {
                // line 67
                echo "                ";
                $context["combinedError"] = "";
                // line 68
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 69
                    echo "                    ";
                    $context["error"] = (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators")));
                    // line 72
                    echo "                    ";
                    $context["combinedError"] = ((((isset($context["combinedError"]) ? $context["combinedError"] : $this->getContext($context, "combinedError")) != "")) ? ((((isset($context["combinedError"]) ? $context["combinedError"] : $this->getContext($context, "combinedError")) . "; ") . (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) : ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))));
                    // line 73
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                <span class=\"validation-faled\">";
                echo twig_escape_filter($this->env, (isset($context["combinedError"]) ? $context["combinedError"] : $this->getContext($context, "combinedError")), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 76
                echo "                ";
                $this->displayParentBlock("form_errors", $context, $blocks);
                echo "
            ";
            }
            // line 78
            echo "        ";
        }
        // line 79
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 82
    public function block_date_widget($context, array $blocks = array())
    {
        // line 83
        echo "    ";
        ob_start();
        // line 84
        echo "        ";
        $context["type"] = "text";
        // line 85
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 86
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 88
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 89
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 90
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'widget'), "{{ month }}" =>             // line 91
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month"), 'widget'), "{{ day }}" =>             // line 92
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day"), 'widget')));
            // line 93
            echo "
            </div>
        ";
        }
        // line 96
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 99
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 100
        echo "    ";
        ob_start();
        // line 101
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class") . " horizontal")) : ("horizontal"))));
        // line 102
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class") . " validate-group")));
        // line 103
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 104
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 105
            echo "                <div class=\"oro-clearfix\">
                    ";
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
            echo "
                    ";
            // line 107
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 114
    public function block_choice_widget_options($context, array $blocks = array())
    {
        // line 115
        echo "    ";
        ob_start();
        // line 116
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 117
            echo "            ";
            if (twig_test_iterable((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")))) {
                // line 118
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "is_translate_group", array(), "any", true, true) && (!$this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "is_translate_group")))) ? ((isset($context["group_label"]) ? $context["group_label"] : $this->getContext($context, "group_label"))) : ($this->env->getExtension('translator')->trans((isset($context["group_label"]) ? $context["group_label"] : $this->getContext($context, "group_label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\">
                    ";
                // line 119
                $context["options"] = (isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice"));
                // line 120
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 123
                echo "                ";
                $context["label"] = ((($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "is_translate_option", array(), "any", true, true) && (!$this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "is_translate_option")))) ? ($this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "label")) : ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))));
                // line 124
                echo "                <option ";
                $this->displayBlock("choice_widget_option_attributes", $context, $blocks);
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "value"), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('form')->isSelectedChoice((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "is_safe", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "is_safe"))) {
                    echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
                } else {
                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                }
                echo "</option>
            ";
            }
            // line 126
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 130
    public function block_choice_widget_option_attributes($context, array $blocks = array())
    {
        // line 131
        ob_start();
        // line 132
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "label", array(), "any", false, true), "attr", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "label"), "attr")) > 0))) {
            // line 133
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "label"), "attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 138
    public function block_oro_flexibleentity_email_collection_widget($context, array $blocks = array())
    {
        // line 139
        echo "    ";
        $context["subform"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "collection");
        // line 140
        echo "    ";
        $this->displayBlock("collection_render", $context, $blocks);
        echo "
";
    }

    // line 143
    public function block_oro_flexibleentity_phone_collection_widget($context, array $blocks = array())
    {
        // line 144
        echo "    ";
        $context["subform"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "collection");
        // line 145
        echo "    ";
        $this->displayBlock("collection_render", $context, $blocks);
        echo "
";
    }

    // line 148
    public function block_collection_render($context, array $blocks = array())
    {
        // line 149
        echo "    ";
        ob_start();
        // line 150
        echo "        ";
        $context["__internal_cc0d0e9fbca4a7515f13fc4aa64226b0f1f62db74be7fc88e17ffe7b03bdeb00"] = $this->env->loadTemplate("OroUIBundle::macros.html.twig");
        // line 151
        echo "        <div class=\"row-oro\">
            <div class=\"collection-fields-list\" data-prototype=\"";
        // line 152
        echo twig_escape_filter($this->env, $context["__internal_cc0d0e9fbca4a7515f13fc4aa64226b0f1f62db74be7fc88e17ffe7b03bdeb00"]->getcollection_prototype((isset($context["subform"]) ? $context["subform"] : $this->getContext($context, "subform"))));
        echo "\">
                ";
        // line 153
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["subform"]) ? $context["subform"] : $this->getContext($context, "subform")), "children"));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 154
            echo "                    ";
            echo $context["__internal_cc0d0e9fbca4a7515f13fc4aa64226b0f1f62db74be7fc88e17ffe7b03bdeb00"]->getcollection_prototype((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")));
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "            </div>
            <a class=\"btn add-list-item\" href=\"javascript: void(0);\"><i class=\"icon-plus\"></i>";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add"), "html", null, true);
        echo "</a>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 162
    public function block__oro_entity_config_config_field_type_widget($context, array $blocks = array())
    {
        // line 163
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children"));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 164
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), 'widget');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 164,  473 => 156,  456 => 152,  447 => 149,  421 => 139,  412 => 134,  386 => 127,  372 => 126,  337 => 118,  310 => 114,  295 => 107,  276 => 102,  254 => 91,  184 => 65,  343 => 283,  365 => 316,  2431 => 2339,  2364 => 2275,  2246 => 2160,  2128 => 2045,  2010 => 1930,  1892 => 1815,  1774 => 1700,  1656 => 1585,  1538 => 1470,  1420 => 1355,  1302 => 1240,  1184 => 1125,  948 => 895,  830 => 780,  712 => 665,  2321 => 2207,  2254 => 2143,  2136 => 2028,  2018 => 1913,  1900 => 1798,  1782 => 1683,  1664 => 1568,  1546 => 1453,  1428 => 1338,  1310 => 1223,  1192 => 1108,  1074 => 993,  956 => 878,  838 => 763,  720 => 648,  602 => 533,  484 => 162,  257 => 93,  207 => 33,  277 => 76,  268 => 73,  251 => 64,  185 => 27,  282 => 84,  221 => 78,  212 => 58,  214 => 60,  211 => 59,  191 => 53,  159 => 44,  143 => 109,  23 => 26,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 1010,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  657 => 277,  649 => 271,  644 => 268,  630 => 257,  611 => 247,  598 => 238,  592 => 237,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  567 => 230,  554 => 223,  536 => 217,  533 => 216,  531 => 215,  498 => 198,  461 => 175,  445 => 163,  443 => 162,  429 => 154,  423 => 151,  411 => 144,  394 => 131,  388 => 133,  357 => 113,  350 => 111,  346 => 110,  338 => 107,  332 => 285,  319 => 98,  313 => 115,  291 => 106,  250 => 80,  238 => 85,  127 => 27,  517 => 168,  503 => 200,  489 => 156,  487 => 163,  482 => 153,  477 => 151,  467 => 144,  462 => 142,  459 => 141,  450 => 150,  442 => 137,  422 => 132,  416 => 130,  401 => 125,  391 => 130,  383 => 118,  353 => 107,  349 => 106,  330 => 104,  324 => 102,  306 => 127,  304 => 110,  288 => 105,  261 => 77,  259 => 70,  256 => 69,  248 => 66,  245 => 209,  243 => 47,  232 => 83,  229 => 82,  224 => 79,  216 => 60,  186 => 66,  147 => 51,  130 => 37,  284 => 104,  280 => 127,  253 => 90,  227 => 95,  223 => 94,  153 => 53,  77 => 17,  520 => 208,  513 => 403,  510 => 402,  506 => 400,  501 => 199,  496 => 397,  474 => 382,  341 => 260,  335 => 106,  273 => 101,  67 => 10,  20 => 1,  161 => 45,  122 => 488,  119 => 88,  671 => 293,  621 => 251,  615 => 242,  610 => 239,  608 => 246,  600 => 232,  596 => 230,  590 => 229,  561 => 224,  558 => 224,  555 => 222,  551 => 222,  548 => 221,  545 => 220,  542 => 219,  523 => 215,  518 => 207,  515 => 212,  511 => 203,  508 => 164,  505 => 209,  502 => 208,  483 => 190,  478 => 188,  475 => 202,  471 => 183,  454 => 196,  449 => 194,  439 => 189,  436 => 188,  431 => 143,  426 => 183,  408 => 177,  396 => 132,  389 => 171,  368 => 116,  355 => 153,  351 => 123,  347 => 262,  344 => 120,  340 => 282,  322 => 136,  311 => 132,  301 => 90,  297 => 88,  286 => 89,  283 => 82,  260 => 84,  237 => 98,  233 => 45,  230 => 63,  226 => 64,  217 => 61,  202 => 33,  197 => 69,  192 => 68,  175 => 24,  182 => 64,  179 => 63,  152 => 118,  149 => 49,  124 => 39,  97 => 70,  84 => 29,  34 => 7,  181 => 23,  137 => 31,  125 => 13,  107 => 18,  90 => 16,  63 => 9,  53 => 25,  485 => 171,  480 => 152,  472 => 165,  468 => 380,  455 => 159,  451 => 195,  448 => 157,  438 => 160,  434 => 144,  424 => 140,  420 => 150,  418 => 138,  409 => 139,  404 => 126,  398 => 137,  392 => 130,  390 => 134,  385 => 132,  379 => 124,  376 => 161,  373 => 115,  366 => 116,  348 => 113,  333 => 257,  325 => 137,  320 => 107,  316 => 116,  309 => 93,  305 => 129,  294 => 99,  289 => 90,  279 => 103,  275 => 82,  269 => 75,  263 => 72,  252 => 89,  240 => 68,  235 => 84,  219 => 78,  193 => 55,  189 => 67,  170 => 77,  129 => 667,  102 => 16,  65 => 17,  58 => 12,  71 => 8,  270 => 100,  255 => 92,  247 => 88,  244 => 78,  241 => 86,  239 => 54,  236 => 46,  231 => 80,  228 => 42,  225 => 39,  222 => 38,  220 => 92,  218 => 177,  209 => 74,  205 => 34,  180 => 34,  172 => 60,  144 => 50,  93 => 17,  88 => 63,  78 => 26,  201 => 56,  199 => 53,  196 => 33,  187 => 28,  173 => 48,  168 => 13,  166 => 58,  156 => 119,  138 => 16,  136 => 19,  133 => 38,  121 => 90,  112 => 33,  62 => 33,  706 => 189,  699 => 'placeholder',  694 => 185,  691 => 184,  687 => 288,  679 => 173,  672 => 169,  668 => 168,  663 => 166,  659 => 278,  655 => 164,  651 => 163,  647 => 162,  640 => 158,  636 => 157,  632 => 258,  628 => 155,  624 => 154,  617 => 250,  613 => 248,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 144,  589 => 143,  581 => 137,  579 => 136,  576 => 135,  572 => 180,  569 => 231,  566 => 226,  560 => 125,  556 => 123,  550 => 122,  539 => 218,  534 => 119,  530 => 118,  527 => 117,  525 => 211,  507 => 202,  504 => 99,  500 => 162,  493 => 158,  491 => 157,  488 => 93,  481 => 189,  479 => 383,  476 => 157,  469 => 'placeholder',  466 => 379,  464 => 154,  460 => 153,  457 => 90,  453 => 151,  446 => 138,  444 => 148,  441 => 154,  437 => 145,  430 => 'placeholder',  428 => 134,  425 => 152,  419 => 131,  417 => 179,  413 => 129,  410 => 128,  407 => 127,  405 => 84,  402 => 138,  399 => 133,  395 => 131,  393 => 172,  380 => 'placeholder',  378 => 162,  375 => 67,  371 => 114,  364 => 115,  362 => 109,  359 => 114,  354 => 124,  352 => 115,  345 => 'placeholder',  342 => 119,  339 => 103,  334 => 117,  329 => 76,  327 => 103,  323 => 108,  321 => 99,  317 => 133,  314 => 55,  307 => 'placeholder',  303 => 52,  296 => 100,  293 => 85,  290 => 49,  285 => 85,  281 => 93,  278 => 83,  274 => 75,  267 => 99,  265 => 72,  262 => 96,  258 => 215,  215 => 76,  213 => 49,  206 => 58,  203 => 73,  178 => 25,  176 => 33,  171 => 14,  167 => 55,  160 => 56,  154 => 37,  151 => 21,  141 => 49,  132 => 65,  116 => 87,  114 => 83,  104 => 32,  91 => 14,  158 => 52,  146 => 55,  140 => 109,  128 => 14,  118 => 35,  110 => 35,  105 => 30,  100 => 20,  81 => 34,  61 => 16,  87 => 15,  46 => 18,  44 => 4,  76 => 57,  70 => 10,  59 => 16,  49 => 290,  28 => 4,  25 => 4,  21 => 2,  94 => 33,  89 => 19,  85 => 62,  75 => 20,  68 => 21,  56 => 7,  27 => 3,  31 => 2,  38 => 4,  26 => 3,  24 => 21,  19 => 1,  79 => 12,  72 => 19,  69 => 13,  47 => 5,  40 => 5,  37 => 5,  22 => 2,  246 => 108,  164 => 45,  162 => 39,  157 => 36,  139 => 3,  120 => 25,  115 => 34,  111 => 82,  108 => 44,  101 => 72,  98 => 30,  96 => 14,  83 => 17,  74 => 11,  66 => 14,  55 => 6,  52 => 8,  50 => 7,  43 => 7,  41 => 3,  35 => 4,  32 => 3,  29 => 2,  210 => 35,  204 => 32,  200 => 72,  194 => 28,  190 => 51,  188 => 71,  183 => 24,  177 => 49,  174 => 46,  169 => 59,  165 => 56,  163 => 57,  155 => 23,  150 => 52,  148 => 35,  145 => 16,  142 => 42,  134 => 46,  131 => 15,  126 => 48,  123 => 14,  117 => 39,  113 => 12,  109 => 78,  106 => 33,  103 => 21,  99 => 96,  95 => 23,  92 => 28,  86 => 18,  82 => 13,  80 => 20,  73 => 14,  64 => 9,  60 => 6,  57 => 7,  54 => 4,  51 => 20,  48 => 8,  45 => 13,  42 => 7,  39 => 6,  36 => 4,  33 => 3,  30 => 2,);
    }
}
