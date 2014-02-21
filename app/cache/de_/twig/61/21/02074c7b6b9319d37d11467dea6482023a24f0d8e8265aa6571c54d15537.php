<?php

/* NelmioApiDocBundle::resources.html.twig */
class __TwigTemplate_612102074c7b6b9319d37d11467dea6482023a24f0d8e8265aa6571c54d15537 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NelmioApiDocBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resources"]) ? $context["resources"] : $this->getContext($context, "resources")));
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
        foreach ($context['_seq'] as $context["section"] => $context["sections"]) {
            // line 5
            echo "        ";
            if (((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")) != "_others")) {
                // line 6
                echo "            <div id=\"section\">
            <h1>";
                // line 7
                echo twig_escape_filter($this->env, (isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "html", null, true);
                echo "</h1>
        ";
            }
            // line 9
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : $this->getContext($context, "sections")));
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
            foreach ($context['_seq'] as $context["resource"] => $context["methods"]) {
                // line 10
                echo "            <li class=\"resource\">
                <div class=\"heading\">
                    ";
                // line 12
                if ((((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")) == "_others") && ((isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")) != "others"))) {
                    // line 13
                    echo "                        <h2>";
                    echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
                    echo "</h2>
                    ";
                } elseif (((isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")) != "others")) {
                    // line 15
                    echo "                        <h2>";
                    echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
                    echo "</h2>
                    ";
                }
                // line 17
                echo "                </div>
                <ul class=\"endpoints\">
                    <li class=\"endpoint\">
                        <ul class=\"operations\">
                            ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["methods"]) ? $context["methods"] : $this->getContext($context, "methods")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 22
                    echo "                                ";
                    $this->env->loadTemplate("NelmioApiDocBundle::method.html.twig")->display($context);
                    // line 23
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                        </ul>
                    </li>
                </ul>
            </li>
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
            unset($context['_seq'], $context['_iterated'], $context['resource'], $context['methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
            if (((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")) != "_others")) {
                // line 30
                echo "            </div>
        ";
            }
            // line 32
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['sections'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 32,  122 => 23,  119 => 22,  671 => 293,  621 => 245,  615 => 242,  610 => 239,  608 => 238,  600 => 232,  596 => 230,  590 => 229,  561 => 224,  558 => 223,  555 => 222,  551 => 221,  548 => 220,  545 => 219,  542 => 218,  523 => 215,  518 => 213,  515 => 212,  511 => 211,  508 => 210,  505 => 209,  502 => 208,  483 => 205,  478 => 203,  475 => 202,  471 => 201,  454 => 196,  449 => 194,  439 => 189,  436 => 188,  431 => 186,  426 => 183,  408 => 177,  396 => 173,  389 => 171,  368 => 157,  355 => 153,  351 => 152,  347 => 151,  344 => 150,  340 => 149,  322 => 136,  311 => 132,  301 => 128,  297 => 127,  286 => 124,  283 => 123,  260 => 108,  237 => 98,  233 => 97,  230 => 96,  226 => 95,  217 => 91,  202 => 81,  197 => 79,  192 => 76,  175 => 71,  182 => 85,  179 => 72,  152 => 74,  149 => 56,  124 => 62,  97 => 52,  84 => 13,  34 => 26,  181 => 81,  137 => 65,  125 => 59,  107 => 52,  90 => 15,  63 => 34,  53 => 14,  485 => 171,  480 => 168,  472 => 165,  468 => 200,  455 => 159,  451 => 195,  448 => 157,  438 => 153,  434 => 187,  424 => 144,  420 => 142,  418 => 141,  409 => 139,  404 => 176,  398 => 132,  392 => 130,  390 => 129,  385 => 126,  379 => 122,  376 => 161,  373 => 160,  366 => 116,  348 => 113,  333 => 111,  325 => 137,  320 => 107,  316 => 105,  309 => 101,  305 => 129,  294 => 98,  289 => 125,  279 => 122,  275 => 94,  269 => 91,  263 => 109,  252 => 87,  240 => 83,  235 => 81,  219 => 78,  193 => 76,  189 => 75,  170 => 77,  129 => 64,  102 => 21,  65 => 20,  58 => 32,  71 => 19,  270 => 95,  255 => 105,  247 => 91,  244 => 89,  241 => 87,  239 => 86,  236 => 84,  231 => 80,  228 => 82,  225 => 79,  222 => 78,  220 => 92,  218 => 76,  209 => 74,  205 => 73,  180 => 70,  172 => 62,  144 => 57,  93 => 47,  88 => 31,  78 => 10,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  173 => 74,  168 => 69,  166 => 79,  156 => 66,  138 => 69,  136 => 24,  133 => 52,  121 => 46,  112 => 38,  62 => 18,  706 => 189,  699 => 'placeholder',  694 => 185,  691 => 184,  687 => 179,  679 => 173,  672 => 169,  668 => 168,  663 => 166,  659 => 165,  655 => 164,  651 => 163,  647 => 162,  640 => 158,  636 => 157,  632 => 156,  628 => 155,  624 => 154,  617 => 150,  613 => 149,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 144,  589 => 143,  581 => 137,  579 => 136,  576 => 135,  572 => 180,  569 => 135,  566 => 226,  560 => 125,  556 => 123,  550 => 122,  539 => 120,  534 => 119,  530 => 118,  527 => 117,  525 => 116,  507 => 100,  504 => 99,  500 => 95,  493 => 'placeholder',  491 => 172,  488 => 93,  481 => 128,  479 => 99,  476 => 98,  469 => 'placeholder',  466 => 199,  464 => 161,  460 => 91,  457 => 90,  453 => 89,  446 => 156,  444 => 191,  441 => 154,  437 => 86,  430 => 'placeholder',  428 => 85,  425 => 84,  419 => 181,  417 => 179,  413 => 140,  410 => 90,  407 => 87,  405 => 84,  402 => 83,  399 => 82,  395 => 131,  393 => 172,  380 => 'placeholder',  378 => 162,  375 => 67,  371 => 119,  364 => 'placeholder',  362 => 63,  359 => 154,  354 => 58,  352 => 115,  345 => 'placeholder',  342 => 56,  339 => 55,  334 => 80,  329 => 76,  327 => 138,  323 => 108,  321 => 62,  317 => 133,  314 => 55,  307 => 'placeholder',  303 => 52,  296 => 99,  293 => 126,  290 => 49,  285 => 39,  281 => 35,  278 => 34,  274 => 97,  267 => 'placeholder',  265 => 110,  262 => 30,  258 => 88,  215 => 'placeholder',  213 => 90,  206 => 36,  203 => 34,  178 => 80,  176 => 33,  171 => 70,  167 => 76,  160 => 62,  154 => 29,  151 => 57,  141 => 70,  132 => 65,  116 => 37,  114 => 59,  104 => 51,  91 => 50,  158 => 67,  146 => 55,  140 => 66,  128 => 60,  118 => 38,  110 => 34,  105 => 55,  100 => 33,  81 => 47,  61 => 41,  87 => 49,  46 => 13,  44 => 9,  76 => 24,  70 => 17,  59 => 17,  49 => 5,  28 => 3,  25 => 3,  21 => 2,  94 => 33,  89 => 28,  85 => 19,  75 => 43,  68 => 20,  56 => 35,  27 => 5,  31 => 4,  38 => 10,  26 => 2,  24 => 21,  19 => 1,  79 => 26,  72 => 22,  69 => 40,  47 => 8,  40 => 8,  37 => 10,  22 => 20,  246 => 101,  164 => 68,  162 => 74,  157 => 30,  139 => 53,  120 => 57,  115 => 42,  111 => 40,  108 => 56,  101 => 39,  98 => 40,  96 => 17,  83 => 44,  74 => 23,  66 => 39,  55 => 7,  52 => 6,  50 => 13,  43 => 12,  41 => 11,  35 => 5,  32 => 7,  29 => 24,  210 => 77,  204 => 79,  200 => 80,  194 => 74,  190 => 72,  188 => 88,  183 => 73,  177 => 65,  174 => 66,  169 => 63,  165 => 75,  163 => 78,  155 => 75,  150 => 52,  148 => 69,  145 => 16,  142 => 59,  134 => 51,  131 => 50,  126 => 48,  123 => 47,  117 => 42,  113 => 55,  109 => 39,  106 => 36,  103 => 34,  99 => 36,  95 => 29,  92 => 28,  86 => 30,  82 => 12,  80 => 43,  73 => 23,  64 => 38,  60 => 9,  57 => 14,  54 => 34,  51 => 33,  48 => 7,  45 => 30,  42 => 8,  39 => 7,  36 => 5,  33 => 5,  30 => 21,);
    }
}
