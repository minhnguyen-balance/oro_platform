<?php

/* OroUIBundle::macros.html.twig */
class __TwigTemplate_f783dca3b2f6b38bcabbee18894630d4b395c47dc3210f5d192fb75749cc9270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 26
        echo "
";
        // line 35
        echo "
";
        // line 62
        echo "
";
        // line 77
        echo "
";
        // line 87
        echo "
";
        // line 111
        echo "
";
        // line 148
        echo "
";
        // line 168
        echo "
";
        // line 212
        echo "
";
        // line 256
        echo "
";
        // line 274
        echo "
";
        // line 278
        echo "
";
        // line 284
        echo "
";
        // line 293
        echo "
";
        // line 323
        echo "
";
        // line 360
        echo "
";
        // line 430
        echo "
";
        // line 453
        echo "
";
        // line 466
        echo "
";
    }

    // line 1
    public function getcollection_prototype($_widget = null)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $_widget,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (twig_in_filter("prototype", twig_get_array_keys_filter($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars")))) {
                // line 3
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars"), "prototype");
                // line 4
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars"), "prototype"), "vars"), "name");
                // line 5
                echo "    ";
            } else {
                // line 6
                echo "        ";
                $context["form"] = (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
                // line 7
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars"), "full_name");
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    <div data-content=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\">
        <div class=\"row-oro oro-multiselect-holder\">
            ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            ";
            // line 13
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children"))) {
                // line 14
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 15
                    echo "                    ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'errors');
                    echo "
                    ";
                    // line 16
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
            ";
            }
            // line 21
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
            <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\">×</button>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 32
    public function getflexibleAttributeRow($_value = null)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $_value,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "    ";
            echo $this->getAttribute($this, "attibuteRow", array(0 => $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "attribute"), "label"), 1 => (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "__toString", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "__toString"), "N/A")) : ("N/A"))), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 44
    public function getattribute_data($_value = null, $_additionalData = null)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $_value,
            "additionalData" => $_additionalData,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 45
            echo "        <div class=\"clearfix-oro\">
            ";
            // line 46
            if ((!$this->getAttribute((isset($context["value"]) ? $context["value"] : null), "value", array(), "any", true, true))) {
                // line 47
                echo "                <p class=\"control-label\">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "</p>
            ";
            } else {
                // line 49
                echo "                <p class=\"control-label\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "value"), "html", null, true);
                echo " <strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "hint")), "html", null, true);
                echo "</strong></p>
            ";
            }
            // line 51
            echo "        </div>
        ";
            // line 52
            if (twig_length_filter($this->env, (isset($context["additionalData"]) ? $context["additionalData"] : $this->getContext($context, "additionalData")))) {
                // line 53
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["additionalData"]) ? $context["additionalData"] : $this->getContext($context, "additionalData")), "data"));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 54
                    echo "                <div class=\"clearfix-oro\">
                    <p class=\"control-label\">";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), $this->getAttribute((isset($context["additionalData"]) ? $context["additionalData"] : $this->getContext($context, "additionalData")), "field")), "html", null, true);
                    echo "</p>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "        ";
            }
            // line 59
            echo "    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 43
    public function getattibuteRow($_title = null, $_value = null, $_additionalData = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $_title,
            "value" => $_value,
            "additionalData" => $_additionalData,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 44
            echo "    ";
            // line 60
            echo "    ";
            echo $this->getAttribute($this, "renderAttribute", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => $this->getAttribute($this, "attribute_data", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 1 => (isset($context["additionalData"]) ? $context["additionalData"] : $this->getContext($context, "additionalData"))), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 69
    public function getrenderAttribute($_title = null, $_data = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $_title,
            "data" => $_data,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "    <div class=\"control-group\">
        <label class=\"control-label\">";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
            echo "</label>
        <div class=\"controls\">
            ";
            // line 73
            echo (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"));
            echo "
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 84
    public function getrenderProperty($_title = null, $_data = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $_title,
            "data" => $_data,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 85
            echo "    ";
            echo $this->getAttribute($this, "renderAttribute", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (("<p class=\"control-label\">" . ((array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), $this->env->getExtension('translator')->trans("N/A"))) : ($this->env->getExtension('translator')->trans("N/A")))) . "</p>")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 99
    public function getbutton($_parameters = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $_parameters,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 100
            echo "    <div class=\"pull-left btn-group icons-holder\">
        <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "path"), "html", null, true);
            echo "\"
           class=\"btn back icons-holder-text ";
            // line 102
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aClass", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "aClass")) : ("")), "html", null, true);
            echo "\"
           title=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "title")), "html", null, true);
            echo "\">
            ";
            // line 104
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iClass", array(), "any", true, true)) {
                // line 105
                echo "                <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "iClass"), "html", null, true);
                echo " hide-text\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label")), "html", null, true);
                echo "</i>
            ";
            }
            // line 107
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label")), "html", null, true);
            echo "
        </a>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 123
    public function geteditButton($_parameters = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $_parameters,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 124
            echo "    ";
            $context["iClass"] = array(0 => "icon-edit");
            // line 125
            echo "    ";
            $context["aClass"] = array(0 => "edit-button", 1 => "main-group");
            // line 126
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iClass", array(), "any", true, true)) {
                // line 127
                echo "        ";
                $context["iClass"] = twig_array_merge(twig_split_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "iClass"), " "), (isset($context["iClass"]) ? $context["iClass"] : $this->getContext($context, "iClass")));
                // line 128
                echo "    ";
            }
            // line 129
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aClass", array(), "any", true, true)) {
                // line 130
                echo "        ";
                $context["aClass"] = twig_array_merge(twig_split_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "aClass"), " "), (isset($context["aClass"]) ? $context["aClass"] : $this->getContext($context, "aClass")));
                // line 131
                echo "    ";
            }
            // line 132
            echo "    ";
            $context["title"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "title")) : (($this->env->getExtension('translator')->trans("Edit") . (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array(), "any", true, true)) ? ((" " . twig_lower_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "entity_label")))) : ("")))));
            // line 136
            echo "    ";
            $context["label"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label")) : ($this->env->getExtension('translator')->trans("Edit")));
            // line 140
            echo "    ";
            $context["parameters"] = twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), array("iClass" => twig_join_filter((isset($context["iClass"]) ? $context["iClass"] : $this->getContext($context, "iClass")), " "), "aClass" => twig_join_filter((isset($context["aClass"]) ? $context["aClass"] : $this->getContext($context, "aClass")), " "), "title" => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "label" => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))));
            // line 146
            echo "    ";
            echo $this->getAttribute($this, "button", array(0 => (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters"))), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 160
    public function getaddButton($_parameters = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $_parameters,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 161
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "path"), "html", null, true);
            echo "\"
        class=\"btn main-group btn-primary pull-right ";
            // line 162
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aClass", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "aClass")) : ("")), "html", null, true);
            echo "\"
        title=\"";
            // line 163
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "title")) : (($this->env->getExtension('translator')->trans("Create") . (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array(), "any", true, true)) ? ((" " . twig_lower_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "entity_label")))) : (""))))), "html", null, true);
            echo "\"
    >
        ";
            // line 165
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label")) : (($this->env->getExtension('translator')->trans("Create") . (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array(), "any", true, true)) ? ((" " . twig_lower_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "entity_label")))) : (""))))), "html", null, true);
            echo "
    </a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 183
    public function getdeleteButton($_parameters = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $_parameters,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 184
            echo "    <div class=\"pull-left btn-group icons-holder\">
        <a href=\"javascript: void(0);\" class=\"btn icons-holder-text ";
            // line 185
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "aCss")) : ("")), "html", null, true);
            echo "\"
            ";
            // line 186
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "id", array(), "any", true, true)) {
                // line 187
                echo "                id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "id"), "html", null, true);
                echo "\"
            ";
            }
            // line 189
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataId", array(), "any", true, true)) {
                // line 190
                echo "                data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataId"), "html", null, true);
                echo "\"
            ";
            }
            // line 192
            echo "            data-message=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataMessage", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataMessage"))) : ($this->env->getExtension('translator')->trans("Are you sure you want to delete this %entity_label%?", array("%entity_label%" => (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array(), "any", true, true)) ? (twig_lower_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "entity_label"))) : ($this->env->getExtension('translator')->trans("item"))))))), "html", null, true);
            echo "\"
            data-success-message=\"";
            // line 193
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "successMessage", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "successMessage"))) : ($this->env->getExtension('translator')->trans("%entity_label% deleted", array("%entity_label%" => (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "entity_label")) : ($this->env->getExtension('translator')->trans("Item"))))))), "html", null, true);
            echo "\"
            ";
            // line 194
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataUrl", array(), "any", true, true)) {
                // line 195
                echo "                data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataUrl"), "html", null, true);
                echo "\"
            ";
            }
            // line 197
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataRedirect", array(), "any", true, true)) {
                // line 198
                echo "                data-redirect=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataRedirect"), "html", null, true);
                echo "\"
            ";
            }
            // line 200
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "data", array(), "any", true, true)) {
                // line 201
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "data"));
                foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                    // line 202
                    echo "                data-";
                    echo twig_escape_filter($this->env, (isset($context["dataItemName"]) ? $context["dataItemName"] : $this->getContext($context, "dataItemName")), "html", null, true);
                    echo "=\"";
                    echo (isset($context["dataItemValue"]) ? $context["dataItemValue"] : $this->getContext($context, "dataItemValue"));
                    echo "\"
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 204
                echo "            ";
            }
            // line 205
            echo "            title=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "title")) : (($this->env->getExtension('translator')->trans("Delete") . (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array(), "any", true, true)) ? ((" " . twig_lower_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "entity_label")))) : (""))))), "html", null, true);
            echo "\"
        >
            <i class=\"icon-trash hide-text\"></i>
            ";
            // line 208
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label")) : ($this->env->getExtension('translator')->trans("Delete"))), "html", null, true);
            echo "
        </a>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 228
    public function getclientButton($_parameters = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $_parameters,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 229
            echo "    <div class=\"pull-left btn-group icons-holder\">
        <a href=\"javascript: void(0);\" class=\"btn icons-holder-text ";
            // line 230
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "aCss")) : ("")), "html", null, true);
            echo "\"
            ";
            // line 231
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "id", array(), "any", true, true)) {
                // line 232
                echo "            id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "id"), "html", null, true);
                echo "\"
            ";
            }
            // line 234
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataId", array(), "any", true, true)) {
                // line 235
                echo "            data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataId"), "html", null, true);
                echo "\"
            ";
            }
            // line 237
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataUrl", array(), "any", true, true)) {
                // line 238
                echo "            data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataUrl"), "html", null, true);
                echo "\"
            ";
            }
            // line 240
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "successMessage", array(), "any", true, true)) {
                // line 241
                echo "            data-success-message=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "successMessage")), "html", null, true);
                echo "\"
            ";
            }
            // line 243
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataRedirect", array(), "any", true, true)) {
                // line 244
                echo "            data-redirect=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataRedirect"), "html", null, true);
                echo "\"
            ";
            }
            // line 246
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) {
                // line 247
                echo "            title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "title")), "html", null, true);
                echo "\"
            ";
            }
            // line 249
            if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "visible", array(), "any", true, true) && (!$this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "visible")))) {
                // line 250
                echo "            style=\"display: none\"
            ";
            }
            // line 252
            echo "><i class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iCss", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "iCss")) : ("")), "html", null, true);
            echo " hide-text\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label")), "html", null, true);
            echo "</i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label")), "html", null, true);
            // line 253
            echo "</a>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 266
    public function getbuttonType($_parameters = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $_parameters,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 267
            echo "    <div class=\"btn-group\">
        <button type=\"";
            // line 268
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "type"), "html", null, true);
            echo "\" class=\"btn ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "class", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "class"), "html", null, true);
            }
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "action", array(), "any", true, true)) {
                echo " action-button";
            }
            echo "\"
                ";
            // line 269
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "action", array(), "any", true, true)) {
                echo "data-action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "action"), "html", null, true);
                echo "\"";
            }
            echo ">
            ";
            // line 270
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label")), "html", null, true);
            echo "
        </button>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 275
    public function getsaveAndCloseButton($_label = "Save and Close")
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 276
            echo "    ";
            echo $this->getAttribute($this, "buttonType", array(0 => array("type" => "submit", "class" => "btn-success", "label" => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 279
    public function getsaveAndStayButton($_acl = "", $_label = "Save")
    {
        $context = $this->env->mergeGlobals(array(
            "acl" => $_acl,
            "label" => $_label,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 280
            echo "    ";
            if ((twig_test_empty((isset($context["acl"]) ? $context["acl"] : $this->getContext($context, "acl"))) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted((isset($context["acl"]) ? $context["acl"] : $this->getContext($context, "acl"))))) {
                // line 281
                echo "    ";
                echo $this->getAttribute($this, "buttonType", array(0 => array("type" => "button", "class" => "btn-success main-group", "label" => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "action" => "save_and_stay")), "method");
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 288
    public function getbuttonSeparator()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 289
            echo "    <div class=\"pull-left\">
        <div class=\"separator-btn\"></div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 303
    public function getscrollSubblock($_title = null, $_data = null, $_isForm = null, $_useSpan = null, $_spanClass = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $_title,
            "data" => $_data,
            "isForm" => $_isForm,
            "useSpan" => $_useSpan,
            "spanClass" => $_spanClass,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 304
            echo "    ";
            $context["spanClass"] = ((array_key_exists("spanClass", $context)) ? (_twig_default_filter((isset($context["spanClass"]) ? $context["spanClass"] : $this->getContext($context, "spanClass")), "responsive-cell")) : ("responsive-cell"));
            // line 305
            echo "    ";
            // line 313
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["spanClass"]) ? $context["spanClass"] : $this->getContext($context, "spanClass")), "html", null, true);
            echo "\">
    ";
            // line 314
            if (twig_length_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))) {
                echo "<h5 class=\"user-fiedset\"><span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
                echo "</span></h5>";
            }
            // line 315
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["dataBlock"]) {
                // line 316
                echo "        ";
                echo (isset($context["dataBlock"]) ? $context["dataBlock"] : $this->getContext($context, "dataBlock"));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 318
            echo "    </div>
    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 338
    public function getscrollBlock($_blockId = null, $_title = null, $_subblocks = null, $_isForm = null, $_contentAttributes = null, $_useSubBlockDivider = null)
    {
        $context = $this->env->mergeGlobals(array(
            "blockId" => $_blockId,
            "title" => $_title,
            "subblocks" => $_subblocks,
            "isForm" => $_isForm,
            "contentAttributes" => $_contentAttributes,
            "useSubBlockDivider" => $_useSubBlockDivider,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 339
            echo "    ";
            $context["cols"] = twig_length_filter($this->env, (isset($context["subblocks"]) ? $context["subblocks"] : $this->getContext($context, "subblocks")));
            // line 340
            echo "    <div class=\"responsive-section\">
        <h4 class=\"scrollspy-title\">";
            // line 341
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
            echo "</h4>
        <div id=\"";
            // line 342
            echo twig_escape_filter($this->env, (isset($context["blockId"]) ? $context["blockId"] : $this->getContext($context, "blockId")), "html", null, true);
            echo "\" class=\"scrollspy-nav-target\"></div>
        <div class=\"row-fluid";
            // line 343
            if (((array_key_exists("contentAttributes", $context) && $this->getAttribute((isset($context["contentAttributes"]) ? $context["contentAttributes"] : null), "class", array(), "any", true, true)) && twig_length_filter($this->env, $this->getAttribute((isset($context["contentAttributes"]) ? $context["contentAttributes"] : $this->getContext($context, "contentAttributes")), "class")))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentAttributes"]) ? $context["contentAttributes"] : $this->getContext($context, "contentAttributes")), "class"), "html", null, true);
            }
            if ((((isset($context["cols"]) ? $context["cols"] : $this->getContext($context, "cols")) > 1) && ((!array_key_exists("useSubBlockDivider", $context)) || ((isset($context["useSubBlockDivider"]) ? $context["useSubBlockDivider"] : $this->getContext($context, "useSubBlockDivider")) == true)))) {
                echo " row-fluid-divider";
            }
            echo "\" ";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["contentAttributes"]) ? $context["contentAttributes"] : $this->getContext($context, "contentAttributes")), 1 => array(0 => "class")), "method");
            echo ">
            ";
            // line 344
            if ((array_key_exists("isForm", $context) && ((isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm")) == true))) {
                // line 345
                echo "                <fieldset class=\"form-horizontal\">
            ";
            } else {
                // line 347
                echo "                <div class=\"form-horizontal\">
            ";
            }
            // line 349
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subblocks"]) ? $context["subblocks"] : $this->getContext($context, "subblocks")));
            foreach ($context['_seq'] as $context["_key"] => $context["subblock"]) {
                // line 350
                echo "                    ";
                echo $this->getAttribute($this, "scrollSubblock", array(0 => ((($this->getAttribute((isset($context["subblock"]) ? $context["subblock"] : null), "title", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute((isset($context["subblock"]) ? $context["subblock"] : $this->getContext($context, "subblock")), "title")))) ? ($this->getAttribute((isset($context["subblock"]) ? $context["subblock"] : $this->getContext($context, "subblock")), "title")) : (null)), 1 => $this->getAttribute((isset($context["subblock"]) ? $context["subblock"] : $this->getContext($context, "subblock")), "data"), 2 => (isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm")), 3 => (($this->getAttribute((isset($context["subblock"]) ? $context["subblock"] : null), "useSpan", array(), "any", true, true)) ? ($this->getAttribute((isset($context["subblock"]) ? $context["subblock"] : $this->getContext($context, "subblock")), "useSpan")) : (true)), 4 => (($this->getAttribute((isset($context["subblock"]) ? $context["subblock"] : null), "spanClass", array(), "any", true, true)) ? ($this->getAttribute((isset($context["subblock"]) ? $context["subblock"] : $this->getContext($context, "subblock")), "spanClass")) : (""))), "method");
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subblock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 352
            echo "            ";
            if ((array_key_exists("isForm", $context) && ((isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm")) == true))) {
                // line 353
                echo "                </fieldset>
            ";
            } else {
                // line 355
                echo "                </div>
            ";
            }
            // line 357
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 384
    public function getscrollData($_dataTarget = null, $_data = null, $_form = null)
    {
        $context = $this->env->mergeGlobals(array(
            "dataTarget" => $_dataTarget,
            "data" => $_data,
            "form" => $_form,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 385
            echo "    ";
            if ((array_key_exists("form", $context) && (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                // line 386
                echo "        ";
                $context["isForm"] = true;
                // line 387
                echo "    ";
            } else {
                // line 388
                echo "        ";
                $context["isForm"] = false;
                // line 389
                echo "    ";
            }
            // line 390
            echo "
    ";
            // line 391
            $context["dataBlocks"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "dataBlocks");
            // line 392
            echo "
    <div id=\"";
            // line 393
            echo twig_escape_filter($this->env, (isset($context["dataTarget"]) ? $context["dataTarget"] : $this->getContext($context, "dataTarget")), "html", null, true);
            echo "\" class=\"navbar navbar-static scrollspy-nav\">
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\" style=\"width: auto;\">
                <ul class=\"nav\">
                    ";
            // line 397
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["navElement"]) {
                // line 398
                echo "                        <li ";
                if ($this->getAttribute((isset($context["navElement"]) ? $context["navElement"] : null), "class", array(), "any", true, true)) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navElement"]) ? $context["navElement"] : $this->getContext($context, "navElement")), "class"), "html", null, true);
                    echo "\"";
                }
                echo "><a href=\"#scroll-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["navElement"]) ? $context["navElement"] : $this->getContext($context, "navElement")), "title")), "html", null, true);
                echo "</a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navElement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 400
            echo "                </ul>
            </div>
        </div>
    </div>
    <div class=\"clearfix\">
        ";
            // line 405
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "formErrors", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "formErrors")))) {
                // line 406
                echo "            <div class=\"customer-info-actions container-fluid well-small alert-wrap\">
                <div class=\"alert alert-error\">
                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\">×</button>
                    ";
                // line 409
                echo $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "formErrors");
                echo "
                </div>
            </div>
        ";
            }
            // line 413
            echo "        <div data-spy=\"scroll\" data-target=\"#";
            echo twig_escape_filter($this->env, (isset($context["dataTarget"]) ? $context["dataTarget"] : $this->getContext($context, "dataTarget")), "html", null, true);
            echo "\" data-offset=\"1\" class=\"scrollspy container-fluid scrollable-container";
            if ((isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm"))) {
                echo " form-container";
            }
            echo "\">
            ";
            // line 414
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["scrollBlock"]) {
                // line 415
                echo "                ";
                echo $this->getAttribute($this, "scrollBlock", array(0 => ("scroll-" . $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index")), 1 => $this->getAttribute((isset($context["scrollBlock"]) ? $context["scrollBlock"] : $this->getContext($context, "scrollBlock")), "title"), 2 => $this->getAttribute((isset($context["scrollBlock"]) ? $context["scrollBlock"] : $this->getContext($context, "scrollBlock")), "subblocks"), 3 => (isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm")), 4 => (($this->getAttribute((isset($context["scrollBlock"]) ? $context["scrollBlock"] : null), "content_attr", array(), "any", true, true)) ? ($this->getAttribute((isset($context["scrollBlock"]) ? $context["scrollBlock"] : $this->getContext($context, "scrollBlock")), "content_attr")) : (null)), 5 => (($this->getAttribute((isset($context["scrollBlock"]) ? $context["scrollBlock"] : null), "useSubBlockDivider", array(), "any", true, true)) ? ($this->getAttribute((isset($context["scrollBlock"]) ? $context["scrollBlock"] : $this->getContext($context, "scrollBlock")), "useSubBlockDivider")) : (true))), "method");
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scrollBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 417
            echo "            ";
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "hiddenData", array(), "any", true, true) || (isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm")))) {
                // line 418
                echo "                <div class=\"hide\">
                    ";
                // line 419
                if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "hiddenData", array(), "any", true, true)) {
                    // line 420
                    echo "                        ";
                    echo $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "hiddenData");
                    echo "
                    ";
                }
                // line 422
                echo "                    ";
                if ((isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm"))) {
                    // line 423
                    echo "                        ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
                    echo "
                    ";
                }
                // line 425
                echo "                </div>
            ";
            }
            // line 427
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 438
    public function getcollectionField($_field = null, $_label = null, $_buttonCaption = null)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $_field,
            "label" => $_label,
            "buttonCaption" => $_buttonCaption,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 439
            echo "    <div class=\"control-group\">
        <label class=\"control-label\">";
            // line 440
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
            echo "</label>
        <div class=\"controls\">
            <div class=\"row-oro\">
                <div class=\"collection-fields-list\" data-prototype=\"";
            // line 443
            echo twig_escape_filter($this->env, $this->getAttribute($this, "collection_prototype", array(0 => (isset($context["field"]) ? $context["field"] : $this->getContext($context, "field"))), "method"));
            echo "\">
                    ";
            // line 444
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["emailField"]) {
                // line 445
                echo "                        ";
                echo $this->getAttribute($this, "collection_prototype", array(0 => (isset($context["emailField"]) ? $context["emailField"] : $this->getContext($context, "emailField"))), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 447
            echo "                </div>
                <a class=\"btn add-list-item\" href=\"javascript: void(0);\">";
            // line 448
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["buttonCaption"]) ? $context["buttonCaption"] : $this->getContext($context, "buttonCaption"))), "html", null, true);
            echo "</a>
            </div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 460
    public function getattributes($_attr = null, $_excludes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attr" => $_attr,
            "excludes" => $_excludes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 461
            echo "    ";
            ob_start();
            // line 462
            echo "        ";
            $context["attr"] = ((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array())) : (array()));
            // line 463
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                if (((!array_key_exists("excludes", $context)) || (!$this->getAttribute((isset($context["excludes"]) ? $context["excludes"] : null), (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), array(), "array", true, true)))) {
                    if (twig_in_filter((isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), array(0 => "placeholder", 1 => "title"))) {
                        echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                        echo "\" ";
                    } else {
                        echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                        echo "\" ";
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 464
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 472
    public function getentityOwnerLink($_entity = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $_entity,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 473
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "owner", array(), "any", true, true) && $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner"))) {
                // line 474
                echo "        ";
                $context["ownerType"] = $this->env->getExtension('oro_owner_type')->getOwnerType((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")));
                // line 475
                echo "        ";
                if (((isset($context["ownerType"]) ? $context["ownerType"] : $this->getContext($context, "ownerType")) == "USER")) {
                    // line 476
                    echo "            ";
                    if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_user_user_view")) {
                        // line 477
                        echo "                ";
                        $context["ownerPath"] = $this->env->getExtension('routing')->getPath("oro_user_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner"), "id")));
                        // line 478
                        echo "                ";
                        $context["ownerName"] = $this->env->getExtension('oro_locale_name')->format($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner"));
                        // line 479
                        echo "            ";
                    }
                    // line 480
                    echo "        ";
                } elseif (((isset($context["ownerType"]) ? $context["ownerType"] : $this->getContext($context, "ownerType")) == "BUSINESS_UNIT")) {
                    // line 481
                    echo "            ";
                    if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_business_unit_view")) {
                        // line 482
                        echo "                ";
                        $context["ownerPath"] = $this->env->getExtension('routing')->getPath("oro_business_unit_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner"), "id")));
                        // line 483
                        echo "                ";
                        $context["ownerName"] = $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner"), "name");
                        // line 484
                        echo "            ";
                    }
                    // line 485
                    echo "        ";
                }
                // line 486
                echo "        ";
                if (array_key_exists("ownerName", $context)) {
                    // line 487
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Owner"), "html", null, true);
                    echo ":
            ";
                    // line 488
                    if (array_key_exists("ownerPath", $context)) {
                        // line 489
                        echo "                <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["ownerPath"]) ? $context["ownerPath"] : $this->getContext($context, "ownerPath")), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["ownerName"]) ? $context["ownerName"] : $this->getContext($context, "ownerName")), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 491
                        echo "                ";
                        echo twig_escape_filter($this->env, (isset($context["ownerName"]) ? $context["ownerName"] : $this->getContext($context, "ownerName")), "html", null, true);
                        echo "
            ";
                    }
                    // line 493
                    echo "        ";
                }
                // line 494
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 497
    public function getrenderUrl($_url = null, $_title = null, $_class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "title" => $_title,
            "class" => $_class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 498
            if (twig_test_empty((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))) {
                // line 499
                echo "        ";
                $context["title"] = (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"));
                // line 500
                echo "    ";
            }
            // line 501
            echo "    ";
            if (twig_test_empty((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) {
                // line 502
                echo "        ";
                $context["class"] = "";
                // line 503
                echo "    ";
            }
            // line 504
            echo "    ";
            if ((!twig_test_empty((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))))) {
                // line 505
                echo "        <a href=\"";
                echo (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")));
                echo "\" class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
                echo "</a>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 509
    public function getrenderPhone($_phone = null, $_title = null)
    {
        $context = $this->env->mergeGlobals(array(
            "phone" => $_phone,
            "title" => $_title,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 510
            if (twig_test_empty((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))) {
                // line 511
                echo "        ";
                $context["title"] = (isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone"));
                // line 512
                echo "    ";
            }
            // line 513
            echo "    ";
            if ((!twig_test_empty((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone"))))) {
                // line 514
                echo "        <a href=\"tel:";
                echo (isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone"));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")));
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
                echo "</a>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroUIBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1441 => 514,  1438 => 513,  1435 => 512,  1432 => 511,  1430 => 510,  1418 => 509,  1397 => 505,  1394 => 504,  1391 => 503,  1388 => 502,  1385 => 501,  1382 => 500,  1379 => 499,  1377 => 498,  1364 => 497,  1349 => 493,  1343 => 491,  1335 => 489,  1333 => 488,  1328 => 487,  1325 => 486,  1316 => 483,  1313 => 482,  1307 => 480,  1304 => 479,  1298 => 477,  1295 => 476,  1292 => 475,  1289 => 474,  1287 => 473,  1276 => 472,  1264 => 464,  1242 => 463,  1239 => 462,  1236 => 461,  1208 => 448,  1205 => 447,  1182 => 440,  1179 => 439,  1149 => 425,  1140 => 422,  1134 => 420,  1132 => 419,  1129 => 418,  1126 => 417,  1092 => 414,  1083 => 413,  1076 => 409,  1071 => 406,  1069 => 405,  1037 => 398,  1020 => 397,  1013 => 393,  1010 => 392,  1008 => 391,  1005 => 390,  1002 => 389,  993 => 386,  990 => 385,  977 => 384,  960 => 355,  953 => 352,  944 => 350,  935 => 347,  929 => 344,  917 => 343,  913 => 342,  909 => 341,  887 => 338,  848 => 305,  845 => 304,  807 => 288,  792 => 281,  789 => 280,  763 => 276,  752 => 275,  737 => 270,  718 => 268,  704 => 266,  684 => 252,  669 => 246,  660 => 243,  645 => 238,  642 => 237,  633 => 234,  627 => 232,  625 => 231,  618 => 229,  607 => 228,  585 => 205,  582 => 204,  571 => 202,  563 => 200,  546 => 194,  537 => 192,  528 => 189,  522 => 187,  516 => 185,  463 => 160,  440 => 132,  381 => 105,  367 => 101,  312 => 73,  292 => 69,  249 => 58,  208 => 45,  1361 => 391,  1352 => 494,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 485,  1319 => 484,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 445,  1193 => 345,  1190 => 344,  1188 => 443,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 438,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 423,  1141 => 321,  1118 => 320,  1115 => 319,  1109 => 415,  1106 => 316,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1067 => 299,  1064 => 298,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  979 => 260,  976 => 259,  970 => 257,  967 => 256,  964 => 357,  961 => 254,  958 => 253,  955 => 252,  947 => 249,  939 => 349,  936 => 242,  934 => 241,  931 => 345,  920 => 235,  918 => 234,  915 => 233,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  833 => 199,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  785 => 178,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  749 => 162,  739 => 156,  729 => 269,  724 => 154,  721 => 153,  715 => 267,  710 => 149,  707 => 148,  697 => 141,  696 => 140,  695 => 139,  689 => 137,  683 => 135,  680 => 250,  675 => 132,  666 => 126,  658 => 124,  654 => 241,  643 => 120,  638 => 118,  635 => 117,  619 => 113,  614 => 111,  564 => 99,  557 => 198,  547 => 93,  529 => 92,  524 => 90,  512 => 84,  509 => 83,  490 => 77,  470 => 73,  433 => 60,  414 => 52,  403 => 48,  400 => 47,  377 => 37,  374 => 36,  363 => 32,  308 => 13,  299 => 8,  271 => 374,  266 => 366,  492 => 164,  473 => 156,  456 => 68,  447 => 149,  421 => 139,  412 => 134,  386 => 127,  372 => 126,  337 => 22,  310 => 114,  295 => 107,  276 => 44,  254 => 91,  184 => 233,  343 => 283,  365 => 316,  2431 => 2339,  2364 => 2275,  2246 => 2160,  2128 => 2045,  2010 => 1930,  1892 => 1815,  1774 => 1700,  1656 => 1585,  1538 => 1470,  1420 => 1355,  1302 => 1240,  1184 => 1125,  948 => 895,  830 => 303,  712 => 150,  2321 => 2207,  2254 => 2143,  2136 => 2028,  2018 => 1913,  1900 => 1798,  1782 => 1683,  1664 => 1568,  1546 => 1453,  1428 => 1338,  1310 => 481,  1192 => 444,  1074 => 304,  956 => 353,  838 => 763,  720 => 648,  602 => 533,  484 => 162,  257 => 93,  207 => 269,  277 => 76,  268 => 373,  251 => 64,  185 => 27,  282 => 84,  221 => 78,  212 => 279,  214 => 60,  211 => 46,  191 => 246,  159 => 196,  143 => 109,  23 => 10,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 478,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 460,  1214 => 603,  1202 => 594,  1153 => 427,  1150 => 549,  1148 => 548,  1112 => 318,  1105 => 510,  1103 => 315,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 1010,  1062 => 400,  1058 => 490,  1056 => 293,  1053 => 292,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 276,  999 => 388,  996 => 387,  992 => 437,  982 => 261,  980 => 430,  973 => 258,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 251,  950 => 250,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 236,  921 => 399,  916 => 397,  911 => 395,  906 => 340,  903 => 339,  900 => 228,  897 => 227,  894 => 226,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 318,  872 => 379,  869 => 378,  866 => 316,  864 => 376,  861 => 315,  858 => 374,  855 => 314,  853 => 372,  850 => 313,  847 => 370,  844 => 204,  841 => 203,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 289,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 182,  790 => 347,  783 => 177,  777 => 279,  775 => 337,  770 => 334,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  746 => 161,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  681 => 287,  678 => 249,  673 => 285,  670 => 284,  662 => 125,  657 => 277,  649 => 122,  644 => 268,  630 => 257,  611 => 247,  598 => 107,  592 => 208,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  567 => 230,  554 => 197,  536 => 217,  533 => 216,  531 => 190,  498 => 198,  461 => 70,  445 => 163,  443 => 136,  429 => 154,  423 => 57,  411 => 144,  394 => 131,  388 => 42,  357 => 113,  350 => 26,  346 => 110,  338 => 107,  332 => 20,  319 => 98,  313 => 15,  291 => 106,  250 => 341,  238 => 312,  127 => 27,  517 => 168,  503 => 81,  489 => 156,  487 => 163,  482 => 153,  477 => 151,  467 => 72,  462 => 142,  459 => 69,  450 => 64,  442 => 62,  422 => 126,  416 => 124,  401 => 125,  391 => 130,  383 => 118,  353 => 99,  349 => 106,  330 => 104,  324 => 102,  306 => 127,  304 => 70,  288 => 4,  261 => 77,  259 => 70,  256 => 69,  248 => 336,  245 => 335,  243 => 327,  232 => 53,  229 => 82,  224 => 79,  216 => 60,  186 => 239,  147 => 51,  130 => 37,  284 => 104,  280 => 127,  253 => 342,  227 => 51,  223 => 94,  153 => 53,  77 => 17,  520 => 186,  513 => 184,  510 => 402,  506 => 400,  501 => 80,  496 => 79,  474 => 161,  341 => 260,  335 => 21,  273 => 380,  67 => 430,  20 => 1,  161 => 202,  122 => 13,  119 => 32,  671 => 293,  621 => 230,  615 => 242,  610 => 239,  608 => 246,  600 => 232,  596 => 106,  590 => 229,  561 => 224,  558 => 224,  555 => 95,  551 => 222,  548 => 195,  545 => 220,  542 => 193,  523 => 215,  518 => 207,  515 => 85,  511 => 203,  508 => 164,  505 => 209,  502 => 183,  483 => 163,  478 => 74,  475 => 202,  471 => 183,  454 => 196,  449 => 146,  439 => 189,  436 => 188,  431 => 129,  426 => 58,  408 => 50,  396 => 132,  389 => 107,  368 => 34,  355 => 27,  351 => 123,  347 => 262,  344 => 24,  340 => 282,  322 => 136,  311 => 14,  301 => 90,  297 => 88,  286 => 89,  283 => 82,  260 => 363,  237 => 54,  233 => 304,  230 => 52,  226 => 64,  217 => 289,  202 => 266,  197 => 249,  192 => 68,  175 => 24,  182 => 33,  179 => 49,  152 => 118,  149 => 182,  124 => 14,  97 => 70,  84 => 41,  34 => 111,  181 => 232,  137 => 31,  125 => 13,  107 => 8,  90 => 20,  63 => 9,  53 => 8,  485 => 171,  480 => 75,  472 => 165,  468 => 380,  455 => 159,  451 => 195,  448 => 157,  438 => 160,  434 => 130,  424 => 140,  420 => 150,  418 => 138,  409 => 139,  404 => 126,  398 => 137,  392 => 130,  390 => 43,  385 => 41,  379 => 104,  376 => 161,  373 => 115,  366 => 33,  348 => 113,  333 => 257,  325 => 137,  320 => 107,  316 => 16,  309 => 93,  305 => 129,  294 => 99,  289 => 90,  279 => 103,  275 => 82,  269 => 75,  263 => 43,  252 => 59,  240 => 55,  235 => 311,  219 => 49,  193 => 55,  189 => 240,  170 => 77,  129 => 15,  102 => 16,  65 => 13,  58 => 293,  71 => 19,  270 => 100,  255 => 353,  247 => 88,  244 => 78,  241 => 86,  239 => 54,  236 => 46,  231 => 80,  228 => 42,  225 => 298,  222 => 297,  220 => 290,  218 => 177,  209 => 74,  205 => 55,  180 => 34,  172 => 60,  144 => 176,  93 => 17,  88 => 63,  78 => 1,  201 => 56,  199 => 54,  196 => 44,  187 => 28,  173 => 48,  168 => 13,  166 => 209,  156 => 22,  138 => 37,  136 => 168,  133 => 38,  121 => 131,  112 => 30,  62 => 12,  706 => 189,  699 => 142,  694 => 138,  691 => 253,  687 => 288,  679 => 173,  672 => 247,  668 => 168,  663 => 244,  659 => 278,  655 => 164,  651 => 240,  647 => 162,  640 => 119,  636 => 235,  632 => 258,  628 => 155,  624 => 154,  617 => 112,  613 => 248,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 105,  589 => 143,  581 => 137,  579 => 136,  576 => 101,  572 => 180,  569 => 231,  566 => 201,  560 => 125,  556 => 123,  550 => 94,  539 => 218,  534 => 119,  530 => 118,  527 => 91,  525 => 211,  507 => 202,  504 => 99,  500 => 162,  493 => 78,  491 => 157,  488 => 165,  481 => 189,  479 => 162,  476 => 157,  469 => 'placeholder',  466 => 379,  464 => 71,  460 => 153,  457 => 90,  453 => 151,  446 => 140,  444 => 148,  441 => 154,  437 => 131,  430 => 'placeholder',  428 => 128,  425 => 127,  419 => 125,  417 => 179,  413 => 129,  410 => 128,  407 => 127,  405 => 123,  402 => 138,  399 => 133,  395 => 131,  393 => 172,  380 => 'placeholder',  378 => 162,  375 => 103,  371 => 102,  364 => 100,  362 => 109,  359 => 114,  354 => 124,  352 => 115,  345 => 'placeholder',  342 => 23,  339 => 85,  334 => 117,  329 => 76,  327 => 84,  323 => 108,  321 => 99,  317 => 133,  314 => 55,  307 => 71,  303 => 52,  296 => 100,  293 => 6,  290 => 5,  285 => 3,  281 => 388,  278 => 60,  274 => 75,  267 => 99,  265 => 72,  262 => 96,  258 => 354,  215 => 280,  213 => 47,  206 => 58,  203 => 73,  178 => 25,  176 => 48,  171 => 32,  167 => 46,  160 => 56,  154 => 189,  151 => 21,  141 => 175,  132 => 36,  116 => 31,  114 => 111,  104 => 7,  91 => 56,  158 => 52,  146 => 181,  140 => 109,  128 => 14,  118 => 12,  110 => 9,  105 => 27,  100 => 20,  81 => 40,  61 => 323,  87 => 15,  46 => 256,  44 => 6,  76 => 17,  70 => 453,  59 => 11,  49 => 274,  28 => 77,  25 => 62,  21 => 2,  94 => 57,  89 => 2,  85 => 62,  75 => 20,  68 => 21,  56 => 7,  27 => 3,  31 => 87,  38 => 4,  26 => 11,  24 => 3,  19 => 26,  79 => 18,  72 => 16,  69 => 13,  47 => 5,  40 => 168,  37 => 148,  22 => 35,  246 => 108,  164 => 203,  162 => 43,  157 => 36,  139 => 169,  120 => 25,  115 => 34,  111 => 110,  108 => 28,  101 => 6,  98 => 5,  96 => 67,  83 => 17,  74 => 20,  66 => 12,  55 => 284,  52 => 278,  50 => 7,  43 => 212,  41 => 5,  35 => 4,  32 => 3,  29 => 2,  210 => 270,  204 => 267,  200 => 72,  194 => 248,  190 => 51,  188 => 71,  183 => 24,  177 => 49,  174 => 217,  169 => 210,  165 => 56,  163 => 57,  155 => 23,  150 => 52,  148 => 39,  145 => 19,  142 => 18,  134 => 16,  131 => 160,  126 => 34,  123 => 14,  117 => 39,  113 => 10,  109 => 105,  106 => 104,  103 => 21,  99 => 23,  95 => 4,  92 => 3,  86 => 46,  82 => 19,  80 => 20,  73 => 466,  64 => 360,  60 => 6,  57 => 9,  54 => 4,  51 => 6,  48 => 8,  45 => 13,  42 => 7,  39 => 6,  36 => 3,  33 => 2,  30 => 1,);
    }
}
