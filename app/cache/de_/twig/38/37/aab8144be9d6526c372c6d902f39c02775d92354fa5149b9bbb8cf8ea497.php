<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3837aab8144be9d6526c372c6d902f39c02775d92354fa5149b9bbb8cf8ea497 extends Twig_Template
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
        // line 1
        echo twig_jsonencode_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  76 => 19,  70 => 17,  59 => 15,  49 => 11,  28 => 3,  25 => 3,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  75 => 17,  68 => 14,  56 => 14,  27 => 4,  31 => 4,  38 => 6,  26 => 3,  24 => 4,  19 => 1,  79 => 18,  72 => 16,  69 => 12,  47 => 18,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  164 => 58,  162 => 57,  157 => 56,  139 => 45,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  101 => 24,  98 => 32,  96 => 31,  83 => 22,  74 => 14,  66 => 11,  55 => 16,  52 => 12,  50 => 8,  43 => 9,  41 => 7,  35 => 7,  32 => 4,  29 => 4,  210 => 83,  204 => 79,  200 => 77,  194 => 74,  190 => 72,  188 => 71,  183 => 69,  177 => 65,  174 => 64,  169 => 63,  165 => 61,  163 => 60,  155 => 55,  150 => 52,  148 => 51,  145 => 46,  142 => 49,  134 => 43,  131 => 42,  126 => 39,  123 => 41,  117 => 37,  113 => 36,  109 => 34,  106 => 36,  103 => 32,  99 => 30,  95 => 28,  92 => 24,  86 => 23,  82 => 22,  80 => 21,  73 => 18,  64 => 12,  60 => 6,  57 => 16,  54 => 22,  51 => 9,  48 => 9,  45 => 9,  42 => 6,  39 => 6,  36 => 5,  33 => 6,  30 => 3,);
    }
}
