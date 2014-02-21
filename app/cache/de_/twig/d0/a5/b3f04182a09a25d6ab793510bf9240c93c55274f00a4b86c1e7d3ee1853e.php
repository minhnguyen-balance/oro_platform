<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d0a5b3f04182a09a25d6ab793510bf9240c93c55274f00a4b86c1e7d3ee1853e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'header' => array($this, 'block_header'),
            'before_content' => array($this, 'block_before_content'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate(((((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) == 403)) ? ("OroUIBundle:Default:index.html.twig") : ("TwigBundle::layout.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if (((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) == 403)) {
        } else {
        }
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_script($context, array $blocks = array())
    {
        // line 6
        echo "    ";
    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        // line 9
        echo "    ";
    }

    // line 11
    public function block_before_content($context, array $blocks = array())
    {
        // line 12
        echo "    ";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
    ";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "        ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
        // line 19
        echo "    ";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "        <div class=\"alert alert-block pagination-centered popup-box\">
            <h1>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</h1>
            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/503.png"), "html", null, true);
        echo "\" alt=\"Error page\" />
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  70 => 17,  59 => 15,  49 => 11,  28 => 3,  25 => 3,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  75 => 17,  68 => 14,  56 => 14,  27 => 4,  31 => 5,  38 => 6,  26 => 3,  24 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 12,  47 => 18,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  164 => 58,  162 => 57,  157 => 56,  139 => 45,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  101 => 24,  98 => 32,  96 => 31,  83 => 22,  74 => 14,  66 => 11,  55 => 16,  52 => 12,  50 => 8,  43 => 9,  41 => 7,  35 => 5,  32 => 4,  29 => 4,  210 => 83,  204 => 79,  200 => 77,  194 => 74,  190 => 72,  188 => 71,  183 => 69,  177 => 65,  174 => 64,  169 => 63,  165 => 61,  163 => 60,  155 => 55,  150 => 52,  148 => 51,  145 => 46,  142 => 49,  134 => 43,  131 => 42,  126 => 39,  123 => 41,  117 => 37,  113 => 36,  109 => 34,  106 => 36,  103 => 32,  99 => 30,  95 => 28,  92 => 24,  86 => 23,  82 => 22,  80 => 21,  73 => 18,  64 => 12,  60 => 6,  57 => 16,  54 => 22,  51 => 15,  48 => 9,  45 => 9,  42 => 8,  39 => 6,  36 => 5,  33 => 5,  30 => 3,);
    }
}
