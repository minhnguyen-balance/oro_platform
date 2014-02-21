<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_ddb7ec1065aed74cdbe72f6833e1b726aeec6cf8530ddb3a7874babfe53b9108 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  75 => 17,  68 => 14,  56 => 9,  27 => 4,  31 => 5,  38 => 13,  26 => 3,  24 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 12,  47 => 18,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  164 => 58,  162 => 57,  157 => 56,  139 => 45,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  101 => 24,  98 => 32,  96 => 31,  83 => 25,  74 => 14,  66 => 11,  55 => 16,  52 => 21,  50 => 8,  43 => 9,  41 => 7,  35 => 9,  32 => 4,  29 => 4,  210 => 83,  204 => 79,  200 => 77,  194 => 74,  190 => 72,  188 => 71,  183 => 69,  177 => 65,  174 => 64,  169 => 63,  165 => 61,  163 => 60,  155 => 55,  150 => 52,  148 => 51,  145 => 46,  142 => 49,  134 => 43,  131 => 42,  126 => 39,  123 => 41,  117 => 37,  113 => 36,  109 => 34,  106 => 36,  103 => 32,  99 => 30,  95 => 28,  92 => 21,  86 => 24,  82 => 22,  80 => 24,  73 => 19,  64 => 12,  60 => 6,  57 => 16,  54 => 22,  51 => 15,  48 => 9,  45 => 17,  42 => 14,  39 => 6,  36 => 5,  33 => 5,  30 => 3,);
    }
}
