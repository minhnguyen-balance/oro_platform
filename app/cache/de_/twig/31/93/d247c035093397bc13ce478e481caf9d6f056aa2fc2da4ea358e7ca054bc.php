<?php

/* KnpPaginatorBundle:Pagination:sliding.html.twig */
class __TwigTemplate_3193d247c035093397bc13ce478e481caf9d6f056aa2fc2da4ea358e7ca054bc extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 4
            echo "<div class=\"pagination\">
    ";
            // line 5
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                // line 6
                echo "        <span class=\"first\">
            <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
                echo "\">&lt;&lt;</a>
        </span>
    ";
            }
            // line 10
            echo "
    ";
            // line 11
            if (array_key_exists("previous", $context)) {
                // line 12
                echo "        <span class=\"previous\">
            <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&lt;</a>
        </span>
    ";
            }
            // line 16
            echo "
    ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "        ";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 19
                    echo "            <span class=\"page\">
                <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a>
            </span>
        ";
                } else {
                    // line 23
                    echo "            <span class=\"current\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</span>
        ";
                }
                // line 25
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
    ";
            // line 28
            if (array_key_exists("next", $context)) {
                // line 29
                echo "        <span class=\"next\">
            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">&gt;</a>
        </span>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                // line 35
                echo "        <span class=\"last\">
            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                echo "\">&gt;&gt;</a>
        </span>
    ";
            }
            // line 39
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  137 => 65,  125 => 59,  107 => 52,  90 => 46,  63 => 34,  53 => 30,  485 => 171,  480 => 168,  472 => 165,  468 => 163,  455 => 159,  451 => 158,  448 => 157,  438 => 153,  434 => 152,  424 => 144,  420 => 142,  418 => 141,  409 => 139,  404 => 136,  398 => 132,  392 => 130,  390 => 129,  385 => 126,  379 => 122,  376 => 121,  373 => 120,  366 => 116,  348 => 113,  333 => 111,  325 => 109,  320 => 107,  316 => 105,  309 => 101,  305 => 100,  294 => 98,  289 => 96,  279 => 95,  275 => 94,  269 => 91,  263 => 90,  252 => 87,  240 => 83,  235 => 81,  219 => 78,  193 => 76,  189 => 75,  170 => 77,  129 => 50,  102 => 33,  65 => 20,  58 => 32,  71 => 19,  270 => 95,  255 => 93,  247 => 91,  244 => 89,  241 => 87,  239 => 86,  236 => 84,  231 => 80,  228 => 82,  225 => 79,  222 => 78,  220 => 77,  218 => 76,  209 => 74,  205 => 73,  180 => 70,  172 => 62,  144 => 57,  93 => 47,  88 => 26,  78 => 40,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  173 => 74,  168 => 72,  166 => 71,  156 => 66,  138 => 57,  136 => 54,  133 => 52,  121 => 46,  112 => 38,  62 => 19,  706 => 189,  699 => 'placeholder',  694 => 185,  691 => 184,  687 => 179,  679 => 173,  672 => 169,  668 => 168,  663 => 166,  659 => 165,  655 => 164,  651 => 163,  647 => 162,  640 => 158,  636 => 157,  632 => 156,  628 => 155,  624 => 154,  617 => 150,  613 => 149,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 144,  589 => 143,  581 => 137,  579 => 136,  576 => 135,  572 => 180,  569 => 135,  566 => 134,  560 => 125,  556 => 123,  550 => 122,  539 => 120,  534 => 119,  530 => 118,  527 => 117,  525 => 116,  507 => 100,  504 => 99,  500 => 95,  493 => 'placeholder',  491 => 172,  488 => 93,  481 => 128,  479 => 99,  476 => 98,  469 => 'placeholder',  466 => 96,  464 => 161,  460 => 91,  457 => 90,  453 => 89,  446 => 156,  444 => 88,  441 => 154,  437 => 86,  430 => 'placeholder',  428 => 85,  425 => 84,  419 => 181,  417 => 134,  413 => 140,  410 => 90,  407 => 87,  405 => 84,  402 => 83,  399 => 82,  395 => 131,  393 => 69,  380 => 'placeholder',  378 => 68,  375 => 67,  371 => 119,  364 => 'placeholder',  362 => 63,  359 => 62,  354 => 58,  352 => 115,  345 => 'placeholder',  342 => 56,  339 => 55,  334 => 80,  329 => 76,  327 => 67,  323 => 108,  321 => 62,  317 => 60,  314 => 55,  307 => 'placeholder',  303 => 52,  296 => 99,  293 => 50,  290 => 49,  285 => 39,  281 => 35,  278 => 34,  274 => 97,  267 => 'placeholder',  265 => 31,  262 => 30,  258 => 88,  215 => 'placeholder',  213 => 18,  206 => 36,  203 => 34,  178 => 80,  176 => 33,  171 => 73,  167 => 76,  160 => 62,  154 => 71,  151 => 70,  141 => 56,  132 => 53,  116 => 37,  114 => 39,  104 => 51,  91 => 29,  158 => 67,  146 => 48,  140 => 66,  128 => 60,  118 => 38,  110 => 34,  105 => 35,  100 => 33,  81 => 20,  61 => 41,  87 => 20,  46 => 13,  44 => 26,  76 => 82,  70 => 17,  59 => 18,  49 => 9,  28 => 20,  25 => 4,  21 => 2,  94 => 30,  89 => 28,  85 => 19,  75 => 17,  68 => 36,  56 => 14,  27 => 5,  31 => 5,  38 => 10,  26 => 6,  24 => 4,  19 => 2,  79 => 25,  72 => 18,  69 => 25,  47 => 8,  40 => 8,  37 => 10,  22 => 3,  246 => 84,  164 => 63,  162 => 74,  157 => 56,  139 => 55,  120 => 57,  115 => 43,  111 => 15,  108 => 36,  101 => 39,  98 => 40,  96 => 48,  83 => 44,  74 => 39,  66 => 24,  55 => 17,  52 => 16,  50 => 29,  43 => 12,  41 => 11,  35 => 5,  32 => 7,  29 => 6,  210 => 77,  204 => 79,  200 => 72,  194 => 74,  190 => 72,  188 => 71,  183 => 71,  177 => 65,  174 => 66,  169 => 63,  165 => 75,  163 => 70,  155 => 59,  150 => 52,  148 => 69,  145 => 16,  142 => 59,  134 => 'placeholder',  131 => 61,  126 => 45,  123 => 58,  117 => 42,  113 => 55,  109 => 37,  106 => 36,  103 => 34,  99 => 32,  95 => 29,  92 => 28,  86 => 27,  82 => 192,  80 => 43,  73 => 23,  64 => 17,  60 => 15,  57 => 14,  54 => 21,  51 => 14,  48 => 13,  45 => 9,  42 => 6,  39 => 7,  36 => 5,  33 => 22,  30 => 21,);
    }
}
