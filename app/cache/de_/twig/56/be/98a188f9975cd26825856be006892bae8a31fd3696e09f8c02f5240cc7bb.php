<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_56be98a188f9975cd26825856be006892bae8a31fd3696e09f8c02f5240cc7bb extends Twig_Template
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
        echo "<a";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 85,  179 => 84,  152 => 74,  149 => 73,  124 => 62,  97 => 52,  84 => 48,  34 => 26,  181 => 81,  137 => 65,  125 => 59,  107 => 52,  90 => 46,  63 => 34,  53 => 30,  485 => 171,  480 => 168,  472 => 165,  468 => 163,  455 => 159,  451 => 158,  448 => 157,  438 => 153,  434 => 152,  424 => 144,  420 => 142,  418 => 141,  409 => 139,  404 => 136,  398 => 132,  392 => 130,  390 => 129,  385 => 126,  379 => 122,  376 => 121,  373 => 120,  366 => 116,  348 => 113,  333 => 111,  325 => 109,  320 => 107,  316 => 105,  309 => 101,  305 => 100,  294 => 98,  289 => 96,  279 => 95,  275 => 94,  269 => 91,  263 => 90,  252 => 87,  240 => 83,  235 => 81,  219 => 78,  193 => 76,  189 => 75,  170 => 77,  129 => 64,  102 => 33,  65 => 20,  58 => 32,  71 => 19,  270 => 95,  255 => 93,  247 => 91,  244 => 89,  241 => 87,  239 => 86,  236 => 84,  231 => 80,  228 => 82,  225 => 79,  222 => 78,  220 => 77,  218 => 76,  209 => 74,  205 => 73,  180 => 70,  172 => 62,  144 => 57,  93 => 47,  88 => 26,  78 => 40,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  173 => 74,  168 => 80,  166 => 79,  156 => 66,  138 => 69,  136 => 54,  133 => 52,  121 => 61,  112 => 38,  62 => 19,  706 => 189,  699 => 'placeholder',  694 => 185,  691 => 184,  687 => 179,  679 => 173,  672 => 169,  668 => 168,  663 => 166,  659 => 165,  655 => 164,  651 => 163,  647 => 162,  640 => 158,  636 => 157,  632 => 156,  628 => 155,  624 => 154,  617 => 150,  613 => 149,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 144,  589 => 143,  581 => 137,  579 => 136,  576 => 135,  572 => 180,  569 => 135,  566 => 134,  560 => 125,  556 => 123,  550 => 122,  539 => 120,  534 => 119,  530 => 118,  527 => 117,  525 => 116,  507 => 100,  504 => 99,  500 => 95,  493 => 'placeholder',  491 => 172,  488 => 93,  481 => 128,  479 => 99,  476 => 98,  469 => 'placeholder',  466 => 96,  464 => 161,  460 => 91,  457 => 90,  453 => 89,  446 => 156,  444 => 88,  441 => 154,  437 => 86,  430 => 'placeholder',  428 => 85,  425 => 84,  419 => 181,  417 => 134,  413 => 140,  410 => 90,  407 => 87,  405 => 84,  402 => 83,  399 => 82,  395 => 131,  393 => 69,  380 => 'placeholder',  378 => 68,  375 => 67,  371 => 119,  364 => 'placeholder',  362 => 63,  359 => 62,  354 => 58,  352 => 115,  345 => 'placeholder',  342 => 56,  339 => 55,  334 => 80,  329 => 76,  327 => 67,  323 => 108,  321 => 62,  317 => 60,  314 => 55,  307 => 'placeholder',  303 => 52,  296 => 99,  293 => 50,  290 => 49,  285 => 39,  281 => 35,  278 => 34,  274 => 97,  267 => 'placeholder',  265 => 31,  262 => 30,  258 => 88,  215 => 'placeholder',  213 => 18,  206 => 36,  203 => 34,  178 => 80,  176 => 33,  171 => 81,  167 => 76,  160 => 62,  154 => 71,  151 => 70,  141 => 70,  132 => 65,  116 => 37,  114 => 59,  104 => 51,  91 => 50,  158 => 67,  146 => 48,  140 => 66,  128 => 60,  118 => 38,  110 => 34,  105 => 55,  100 => 33,  81 => 47,  61 => 41,  87 => 49,  46 => 13,  44 => 26,  76 => 82,  70 => 17,  59 => 36,  49 => 9,  28 => 20,  25 => 3,  21 => 2,  94 => 51,  89 => 28,  85 => 19,  75 => 43,  68 => 36,  56 => 35,  27 => 5,  31 => 25,  38 => 10,  26 => 6,  24 => 21,  19 => 1,  79 => 25,  72 => 18,  69 => 40,  47 => 8,  40 => 8,  37 => 10,  22 => 20,  246 => 84,  164 => 63,  162 => 74,  157 => 56,  139 => 55,  120 => 57,  115 => 43,  111 => 15,  108 => 56,  101 => 39,  98 => 40,  96 => 48,  83 => 44,  74 => 39,  66 => 39,  55 => 17,  52 => 9,  50 => 29,  43 => 12,  41 => 11,  35 => 5,  32 => 7,  29 => 24,  210 => 77,  204 => 79,  200 => 72,  194 => 74,  190 => 72,  188 => 88,  183 => 71,  177 => 65,  174 => 66,  169 => 63,  165 => 75,  163 => 78,  155 => 75,  150 => 52,  148 => 69,  145 => 16,  142 => 59,  134 => 'placeholder',  131 => 61,  126 => 63,  123 => 58,  117 => 42,  113 => 55,  109 => 37,  106 => 36,  103 => 34,  99 => 32,  95 => 29,  92 => 28,  86 => 27,  82 => 192,  80 => 43,  73 => 23,  64 => 38,  60 => 15,  57 => 14,  54 => 34,  51 => 33,  48 => 7,  45 => 30,  42 => 29,  39 => 7,  36 => 5,  33 => 5,  30 => 21,);
    }
}
