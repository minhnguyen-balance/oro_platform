<?php

/* DoctrineBundle:Collector:explain.html.twig */
class __TwigTemplate_5027e9d6fa270d73b6ef9bad2a058b2ca002c047b0a2aa491efc1674f76ee371 extends Twig_Template
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
        echo "<strong>Explanation:</strong>

<table style=\"margin: 5px 0;\">
    <thead>
        <tr>
            ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 0, array(), "array")));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 7
            echo "                <th>";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 13
            echo "        <tr>
            ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 15
                echo "                <td>";
                echo twig_escape_filter($this->env, ((("possible_keys" == (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))) ? (strtr((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), array("," => ", "))) : ((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")))), "html", null, true);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:explain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  270 => 95,  255 => 93,  247 => 91,  244 => 89,  241 => 87,  239 => 86,  236 => 84,  231 => 83,  228 => 82,  225 => 80,  222 => 78,  220 => 77,  218 => 76,  209 => 74,  205 => 73,  180 => 70,  172 => 65,  144 => 56,  93 => 9,  88 => 26,  78 => 40,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  173 => 74,  168 => 72,  166 => 71,  156 => 66,  138 => 57,  136 => 54,  133 => 55,  121 => 46,  112 => 42,  62 => 23,  706 => 189,  699 => 'placeholder',  694 => 185,  691 => 184,  687 => 179,  679 => 173,  672 => 169,  668 => 168,  663 => 166,  659 => 165,  655 => 164,  651 => 163,  647 => 162,  640 => 158,  636 => 157,  632 => 156,  628 => 155,  624 => 154,  617 => 150,  613 => 149,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 144,  589 => 143,  581 => 137,  579 => 136,  576 => 135,  572 => 180,  569 => 135,  566 => 134,  560 => 125,  556 => 123,  550 => 122,  539 => 120,  534 => 119,  530 => 118,  527 => 117,  525 => 116,  507 => 100,  504 => 99,  500 => 95,  493 => 'placeholder',  491 => 94,  488 => 93,  481 => 128,  479 => 99,  476 => 98,  469 => 'placeholder',  466 => 96,  464 => 93,  460 => 91,  457 => 90,  453 => 89,  446 => 'placeholder',  444 => 88,  441 => 87,  437 => 86,  430 => 'placeholder',  428 => 85,  425 => 84,  419 => 181,  417 => 134,  413 => 132,  410 => 90,  407 => 87,  405 => 84,  402 => 83,  399 => 82,  395 => 75,  393 => 69,  380 => 'placeholder',  378 => 68,  375 => 67,  371 => 64,  364 => 'placeholder',  362 => 63,  359 => 62,  354 => 58,  352 => 57,  345 => 'placeholder',  342 => 56,  339 => 55,  334 => 80,  329 => 76,  327 => 67,  323 => 65,  321 => 62,  317 => 60,  314 => 55,  307 => 'placeholder',  303 => 52,  296 => 'placeholder',  293 => 50,  290 => 49,  285 => 39,  281 => 35,  278 => 34,  274 => 97,  267 => 'placeholder',  265 => 31,  262 => 30,  258 => 19,  215 => 'placeholder',  213 => 18,  206 => 36,  203 => 34,  178 => 'placeholder',  176 => 33,  171 => 73,  167 => 27,  160 => 62,  154 => 21,  151 => 63,  141 => 14,  132 => 53,  116 => 37,  114 => 16,  104 => 7,  91 => 31,  158 => 67,  146 => 48,  140 => 46,  128 => 42,  118 => 38,  110 => 34,  105 => 40,  100 => 32,  81 => 20,  61 => 41,  87 => 20,  46 => 10,  44 => 12,  76 => 82,  70 => 17,  59 => 15,  49 => 19,  28 => 3,  25 => 4,  21 => 2,  94 => 22,  89 => 24,  85 => 19,  75 => 17,  68 => 18,  56 => 14,  27 => 4,  31 => 5,  38 => 3,  26 => 6,  24 => 2,  19 => 1,  79 => 23,  72 => 19,  69 => 25,  47 => 18,  40 => 8,  37 => 10,  22 => 1,  246 => 32,  164 => 63,  162 => 57,  157 => 56,  139 => 55,  120 => 43,  115 => 43,  111 => 15,  108 => 37,  101 => 39,  98 => 40,  96 => 5,  83 => 22,  74 => 49,  66 => 24,  55 => 15,  52 => 7,  50 => 8,  43 => 8,  41 => 5,  35 => 4,  32 => 6,  29 => 4,  210 => 17,  204 => 79,  200 => 72,  194 => 74,  190 => 72,  188 => 71,  183 => 71,  177 => 65,  174 => 66,  169 => 63,  165 => 61,  163 => 70,  155 => 59,  150 => 52,  148 => 17,  145 => 16,  142 => 59,  134 => 'placeholder',  131 => 42,  126 => 11,  123 => 47,  117 => 42,  113 => 35,  109 => 37,  106 => 36,  103 => 33,  99 => 6,  95 => 29,  92 => 28,  86 => 28,  82 => 192,  80 => 41,  73 => 14,  64 => 17,  60 => 15,  57 => 14,  54 => 21,  51 => 14,  48 => 13,  45 => 9,  42 => 6,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
