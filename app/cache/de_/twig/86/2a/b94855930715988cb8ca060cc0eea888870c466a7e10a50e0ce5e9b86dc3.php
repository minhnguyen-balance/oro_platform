<?php

/* LiipImagineBundle:Form:form_div_layout.html.twig */
class __TwigTemplate_862ab94855930715988cb8ca060cc0eea888870c466a7e10a50e0ce5e9b86dc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'liip_imagine_image_widget' => array($this, 'block_liip_imagine_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('liip_imagine_image_widget', $context, $blocks);
    }

    public function block_liip_imagine_image_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((isset($context["image_path"]) ? $context["image_path"] : $this->getContext($context, "image_path"))) {
            // line 4
            echo "            <div>
                ";
            // line 5
            if ((isset($context["link_url"]) ? $context["link_url"] : $this->getContext($context, "link_url"))) {
                // line 6
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (((isset($context["link_filter"]) ? $context["link_filter"] : $this->getContext($context, "link_filter"))) ? ($this->env->getExtension('liip_imagine')->filter((isset($context["link_url"]) ? $context["link_url"] : $this->getContext($context, "link_url")), (isset($context["link_filter"]) ? $context["link_filter"] : $this->getContext($context, "link_filter")))) : ((isset($context["link_url"]) ? $context["link_url"] : $this->getContext($context, "link_url")))), "html", null, true);
                echo "\" ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["link_attr"]) ? $context["link_attr"] : $this->getContext($context, "link_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
            }
            // line 8
            echo "
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter((isset($context["image_path"]) ? $context["image_path"] : $this->getContext($context, "image_path")), (isset($context["image_filter"]) ? $context["image_filter"] : $this->getContext($context, "image_filter"))), "html", null, true);
            echo "\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["image_attr"]) ? $context["image_attr"] : $this->getContext($context, "image_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " />

                ";
            // line 11
            if ((isset($context["link_url"]) ? $context["link_url"] : $this->getContext($context, "link_url"))) {
                // line 12
                echo "                    </a>
                ";
            }
            // line 14
            echo "            </div>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "LiipImagineBundle:Form:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 12,  520 => 44,  513 => 403,  510 => 402,  506 => 400,  501 => 398,  496 => 397,  474 => 382,  341 => 260,  335 => 258,  273 => 200,  67 => 26,  20 => 1,  161 => 32,  122 => 23,  119 => 22,  671 => 293,  621 => 245,  615 => 242,  610 => 239,  608 => 238,  600 => 232,  596 => 230,  590 => 229,  561 => 224,  558 => 223,  555 => 222,  551 => 221,  548 => 220,  545 => 219,  542 => 218,  523 => 215,  518 => 213,  515 => 212,  511 => 211,  508 => 210,  505 => 209,  502 => 208,  483 => 205,  478 => 203,  475 => 202,  471 => 201,  454 => 196,  449 => 194,  439 => 189,  436 => 188,  431 => 186,  426 => 183,  408 => 177,  396 => 173,  389 => 171,  368 => 157,  355 => 153,  351 => 152,  347 => 262,  344 => 150,  340 => 149,  322 => 136,  311 => 132,  301 => 128,  297 => 127,  286 => 124,  283 => 123,  260 => 108,  237 => 98,  233 => 97,  230 => 96,  226 => 95,  217 => 91,  202 => 81,  197 => 79,  192 => 76,  175 => 71,  182 => 85,  179 => 72,  152 => 74,  149 => 56,  124 => 62,  97 => 52,  84 => 13,  34 => 6,  181 => 81,  137 => 67,  125 => 59,  107 => 52,  90 => 15,  63 => 34,  53 => 14,  485 => 171,  480 => 168,  472 => 165,  468 => 380,  455 => 159,  451 => 195,  448 => 157,  438 => 153,  434 => 187,  424 => 144,  420 => 142,  418 => 141,  409 => 139,  404 => 176,  398 => 132,  392 => 130,  390 => 129,  385 => 126,  379 => 122,  376 => 161,  373 => 160,  366 => 116,  348 => 113,  333 => 257,  325 => 137,  320 => 107,  316 => 105,  309 => 101,  305 => 129,  294 => 98,  289 => 125,  279 => 122,  275 => 94,  269 => 91,  263 => 109,  252 => 87,  240 => 83,  235 => 81,  219 => 78,  193 => 76,  189 => 75,  170 => 77,  129 => 64,  102 => 21,  65 => 20,  58 => 9,  71 => 27,  270 => 95,  255 => 105,  247 => 91,  244 => 89,  241 => 87,  239 => 86,  236 => 84,  231 => 80,  228 => 82,  225 => 79,  222 => 78,  220 => 92,  218 => 76,  209 => 74,  205 => 73,  180 => 70,  172 => 62,  144 => 57,  93 => 47,  88 => 17,  78 => 30,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  173 => 74,  168 => 69,  166 => 79,  156 => 66,  138 => 69,  136 => 24,  133 => 52,  121 => 46,  112 => 38,  62 => 18,  706 => 189,  699 => 'placeholder',  694 => 185,  691 => 184,  687 => 179,  679 => 173,  672 => 169,  668 => 168,  663 => 166,  659 => 165,  655 => 164,  651 => 163,  647 => 162,  640 => 158,  636 => 157,  632 => 156,  628 => 155,  624 => 154,  617 => 150,  613 => 149,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 144,  589 => 143,  581 => 137,  579 => 136,  576 => 135,  572 => 180,  569 => 135,  566 => 226,  560 => 125,  556 => 123,  550 => 122,  539 => 120,  534 => 119,  530 => 118,  527 => 117,  525 => 116,  507 => 100,  504 => 99,  500 => 95,  493 => 'placeholder',  491 => 172,  488 => 93,  481 => 128,  479 => 383,  476 => 98,  469 => 'placeholder',  466 => 379,  464 => 161,  460 => 91,  457 => 90,  453 => 89,  446 => 156,  444 => 191,  441 => 154,  437 => 86,  430 => 'placeholder',  428 => 85,  425 => 84,  419 => 181,  417 => 179,  413 => 140,  410 => 90,  407 => 87,  405 => 84,  402 => 83,  399 => 82,  395 => 131,  393 => 172,  380 => 'placeholder',  378 => 162,  375 => 67,  371 => 119,  364 => 'placeholder',  362 => 63,  359 => 154,  354 => 58,  352 => 115,  345 => 'placeholder',  342 => 56,  339 => 55,  334 => 80,  329 => 76,  327 => 138,  323 => 108,  321 => 62,  317 => 133,  314 => 55,  307 => 'placeholder',  303 => 52,  296 => 99,  293 => 126,  290 => 49,  285 => 39,  281 => 35,  278 => 34,  274 => 97,  267 => 'placeholder',  265 => 110,  262 => 30,  258 => 88,  215 => 'placeholder',  213 => 90,  206 => 36,  203 => 34,  178 => 80,  176 => 33,  171 => 70,  167 => 76,  160 => 62,  154 => 29,  151 => 57,  141 => 70,  132 => 65,  116 => 37,  114 => 59,  104 => 42,  91 => 50,  158 => 67,  146 => 55,  140 => 66,  128 => 60,  118 => 38,  110 => 45,  105 => 55,  100 => 33,  81 => 14,  61 => 41,  87 => 49,  46 => 13,  44 => 9,  76 => 29,  70 => 17,  59 => 17,  49 => 5,  28 => 3,  25 => 4,  21 => 2,  94 => 33,  89 => 35,  85 => 16,  75 => 11,  68 => 20,  56 => 21,  27 => 5,  31 => 5,  38 => 10,  26 => 2,  24 => 21,  19 => 1,  79 => 26,  72 => 22,  69 => 40,  47 => 17,  40 => 8,  37 => 6,  22 => 20,  246 => 101,  164 => 68,  162 => 74,  157 => 30,  139 => 68,  120 => 57,  115 => 48,  111 => 40,  108 => 44,  101 => 41,  98 => 40,  96 => 38,  83 => 44,  74 => 23,  66 => 39,  55 => 8,  52 => 6,  50 => 13,  43 => 12,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  210 => 77,  204 => 79,  200 => 80,  194 => 74,  190 => 72,  188 => 88,  183 => 73,  177 => 65,  174 => 66,  169 => 63,  165 => 75,  163 => 78,  155 => 75,  150 => 52,  148 => 69,  145 => 16,  142 => 59,  134 => 51,  131 => 50,  126 => 48,  123 => 47,  117 => 42,  113 => 55,  109 => 39,  106 => 36,  103 => 34,  99 => 36,  95 => 29,  92 => 36,  86 => 30,  82 => 32,  80 => 43,  73 => 23,  64 => 38,  60 => 22,  57 => 14,  54 => 34,  51 => 33,  48 => 7,  45 => 30,  42 => 8,  39 => 9,  36 => 5,  33 => 9,  30 => 21,);
    }
}
