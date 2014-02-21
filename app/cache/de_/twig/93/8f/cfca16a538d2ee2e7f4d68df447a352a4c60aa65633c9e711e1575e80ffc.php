<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_938fcfca16a538d2ee2e7f4d68df447a352a4c60aa65633c9e711e1575e80ffc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OroUIBundle:Default:index.html.twig");

        $this->blocks = array(
            'hash_nav' => array($this, 'block_hash_nav'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'header' => array($this, 'block_header'),
            'before_content' => array($this, 'block_before_content'),
            'scripts_before' => array($this, 'block_scripts_before'),
            'right_panel' => array($this, 'block_right_panel'),
            'left_panel' => array($this, 'block_left_panel'),
            'content' => array($this, 'block_content'),
            'head_script' => array($this, 'block_head_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("titleTemplate" => "%code% - %status%", "params" => array("%code%" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "%status%" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"))), "force" => true));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_hash_nav($context, array $blocks = array())
    {
    }

    // line 4
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "error-page";
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")))) {
            // line 8
            echo "        ";
            $this->displayParentBlock("header", $context, $blocks);
            echo "
    ";
        } else {
            // line 10
            echo "        <header class=\"navbar\" id=\"oroplatform-header\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    ";
            // line placeholder
            try {
                $this->env->loadTemplate("OroUIBundle:Default:logo.html.twig")->display(array());
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 14
            echo "                </div>
            </div>
        </header>
    ";
        }
    }

    // line 20
    public function block_before_content($context, array $blocks = array())
    {
    }

    // line 23
    public function block_scripts_before($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        if ((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")))) {
            // line 25
            echo "        ";
            $this->displayParentBlock("scripts_before", $context, $blocks);
            echo "
    ";
        }
    }

    // line 29
    public function block_right_panel($context, array $blocks = array())
    {
    }

    // line 31
    public function block_left_panel($context, array $blocks = array())
    {
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        // line 35
        echo "    <div class=\"popup-frame\">
        <div class=\"popup-holder\">
            <div class=\"pagination-centered popup-box-errors\">
                <h1><span>";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</h1>
                <div class=\"popup-content\">
                    <p>
                        ";
        // line 41
        if (((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) == 404)) {
            // line 42
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("The page you requested could not be found. Please make sure the path you used is correct"), "html", null, true);
            echo "
                        ";
        } elseif (((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) == 403)) {
            // line 44
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("You don't have permission to access this page"), "html", null, true);
            echo "
                        ";
        } else {
            // line 46
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("The System is currently under maintenance and should be available in a few minutes"), "html", null, true);
            echo "
                        ";
        }
        // line 48
        echo "                    </p>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 56
    public function block_head_script($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    <script type=\"text/javascript\">require(['oroui/js/init-errors'])</script>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 57,  146 => 48,  140 => 46,  128 => 42,  118 => 38,  110 => 34,  105 => 31,  100 => 29,  81 => 20,  61 => 10,  87 => 20,  46 => 11,  44 => 10,  76 => 19,  70 => 17,  59 => 15,  49 => 6,  28 => 3,  25 => 4,  21 => 2,  94 => 22,  89 => 24,  85 => 19,  75 => 17,  68 => 14,  56 => 14,  27 => 4,  31 => 5,  38 => 3,  26 => 3,  24 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 12,  47 => 18,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  164 => 58,  162 => 57,  157 => 56,  139 => 45,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  101 => 24,  98 => 32,  96 => 31,  83 => 22,  74 => 14,  66 => 'placeholder',  55 => 8,  52 => 7,  50 => 8,  43 => 4,  41 => 9,  35 => 7,  32 => 4,  29 => 4,  210 => 83,  204 => 79,  200 => 77,  194 => 74,  190 => 72,  188 => 71,  183 => 69,  177 => 65,  174 => 64,  169 => 63,  165 => 61,  163 => 60,  155 => 56,  150 => 52,  148 => 51,  145 => 46,  142 => 49,  134 => 44,  131 => 42,  126 => 41,  123 => 41,  117 => 37,  113 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 30,  95 => 28,  92 => 25,  86 => 23,  82 => 22,  80 => 19,  73 => 14,  64 => 12,  60 => 6,  57 => 14,  54 => 22,  51 => 12,  48 => 9,  45 => 9,  42 => 6,  39 => 6,  36 => 7,  33 => 6,  30 => 3,);
    }
}
