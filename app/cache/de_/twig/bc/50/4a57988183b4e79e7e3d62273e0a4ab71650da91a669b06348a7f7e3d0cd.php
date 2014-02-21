<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_bc504a57988183b4e79e7e3d62273e0a4ab71650da91a669b06348a7f7e3d0cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\"/>
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/structure.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/body.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
        <div id=\"content\">
            <div class=\"header clear-fix\">
                <div class=\"header-logo\">
                    <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALYAAAA+CAMAAACxzRGDAAAAUVBMVEX////Ly8yko6WLioxkYmVXVVkwLjLl5eWxsLJKSEzy8vJxcHLY2Ni+vb89Oz9XVVh+fH+Yl5n///+xsbLY2Nlxb3KkpKWXlph+fX+LiYy+vr/IZP61AAAAAXRSTlMAQObYZgAABRBJREFUeNrVmtuWoyAQRS1FEEQSzQU7//+hYxUiXsKQZLJWM+chsUloN+WhCuguYoKyYqzmvGasKqH4HyRKxndipcgcumH8qViTM7TkUclcwaHmf5XM0eWq4km1KjdqXfMXJHVe1J3hL8lk5fCGv6wmT+o0d87U+XNrk0Y9nfv+7LM6ZJH5ZBL6LAbSxQ3Q5FDr22Skr8PQSy4n7isnsQxSX4r6pobhjCHHeDNOKrO3yGmCvZOjV9jmt8ulTdXFKdbKLNh+kOMvBzuVRa4Y7MUsdEUSWQe7xxCfZmcwjHU83LqzFvSbJQOXQvptbPnEFoyZtUUGwTeKuLuTHyT1kaP0P6cR01OKvv448gtl61dqZfmJezQmU/t+1R2fJLtBwXV6uWGwB9SZPrn0fKO2WAvQN1PUhHjTom3xgXYTkvlSKHs19OhslETq6X3HrXbjt8XbGj9b4Gi+lUAnL6XxQj8Pyk9N4Bt1xUrsLVN/3isYMug8rODMdbgOvoHs8uAb2fcANIAzkKCLYy+AXRpSU8sr1r4P67xhLgPp7vM32zlqt7Bhq2fI1Hwp+VgANxok59SsGV3oqdUL0YVDMRY7Yg8QLbVUU4NZNoOq5hJHuxEM28Sh/IyUZ8D3reR+yc58EGvOy2U0HQL6G9V+kWyEWHmzaMx6t4o9RhOm/riUiYrzqij4Ptqkn7AaCXqc+F47m04ahfde7YIz8RHEBN6BdVwdIGRVdNbKqYu1Hc0x0wBY4wqC8+XUgBGnj81SZsQB+0yAS1x/BlI/6ebHHk0lauQLuPDpu6EwAVJ7T0rl2uXa23jcqNyOZekhqYHRz3JOANrF4wCCmEs1f9D1lUe0n4NAATed80Y5e0Q7CO2TezM/BR6wKdgQzKbCF4uOQC3Bk0fKAzbFlyRWg3gksA/gmm7eOjrpaKX7fHlEW2xLbE6GZsPiCiShVzN7RG2xTz2G+OJtEqzdJ7APxy3MrSsV0VukXbKMp9lhs5BN6dr3CN+sySUaoxGwfRUM3I/gdPYONgVU+PLX4vUWm32AvUySarbONvcpV2RQEPKKjEBHFk01kQDGRblnn8ZuE9g+JUl8OWAPbkFK2K6JxhJVvF47FzYYnAN22ttwxKYCoH36rheEB7KG/HF/YUaa2G5JF+55tpyrl7B1WHM39HuP2N2EXPl1UBu8vbj4OjvD+NoTE4ssF+ScARgaJY1N7+u8bY/Y9BSM5PKwJbvMVab32YP5FB5TtcYVrGoASolVLTzI7kVsYVxRtAb5n2JXq1vCdtd47XtYItynrN0835PasLg0y13aOPbmPI+on2Lr9e5tjSHvgkAvclUjL3Fsdaw03IzgTR62yYClk7QMah4IQ0qSsoYYbOix6zJR1ZGDNMOY3Bb6W5S6jiyovep3t7bUPyoq7OkjYumrfESp8zSBc/OLosVf+nTnnKjsqR16++WDwpI8FxJWRFTlI6NKnqYJaL96TqjAbo9Toi5QiWBDcmfdFV+T8dkvFe5bItgstbM2X6QG2mVun+cazfRwOS0eiaeRRJKgLfc3BQAqfnhJyz8lfR6580SF/FXVu83Nz1xrrnFqqXL6Qxl47DNSm4RFflvN5sABDD8peouqLLKQXVdGbnqf+qIpOxON4ZyYdJEJ6sy4zS2c5eRPTT4Jyp46qDE5/ptAWqJOQ9e6yE82FXBbZCk1/tXVoshVoopE3CB0zmraI3nbqCJ/gW3ZMgtbC5nh/QHlOoOZBxQCRgAAAABJRU5ErkJggg==\" alt=\"Symfony\" />
                </div>

                <div class=\"search\">
                    <form method=\"get\" action=\"http://symfony.com/search\" target=\"_blank\">
                        <div class=\"form-row\">
                            <label for=\"search-id\">
                                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAABUElEQVQoz2NgAIJ29iBdD0d7X2cPb+tY2f9MDMjgP2O2hKu7vS8CBlisZUNSMJ3fxRMkXO61wm2ue6I3iB1q8Z8ZriDZFCS03fm/wX+1/xp/TBo8QPxeqf+MUAW+QIFKj/+q/wX/c/3n/i/6Qd/bx943z/Q/K1SBI1D9fKv/AhCn/Wf5L5EHdFGKw39OqAIXoPpOMziX4T9/DFBBnuN/HqhAEtCKCNf/XDA/rZRyAmrpsvrPDVUw3wrkqCiLaewg6TohX1d7X0ffs5r/OaAKfinmgt3t4ulr4+Xg4ANip3j+l/zPArNT4LNOD0pAgWCSOUIBy3+h/+pXbBa5tni0eMx23+/mB1YSYnENroT5Pw/QSOX/mkCo+l/jgo0v2KJA643s8PgAmsMBDCbu/5xALHPB2husxN9uCzsDOgAq5kAoaZVnYMCh5Ky1r88Eh/+iABM8jUk7ClYIAAAAAElFTkSuQmCC\" alt=\"Search on Symfony website\" />
                            </label>

                            <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"Search on Symfony website\" />

                            <button type=\"submit\" class=\"sf-button\">
                                <span class=\"border-l\">
                                    <span class=\"border-r\">
                                        <span class=\"btn-bg\">OK</span>
                                    </span>
                                </span>
                            </button>
                        </div>
                   </form>
                </div>
            </div>

            <div class=\"sf-reset\">
                ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "            </div>
        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 9,  88 => 6,  78 => 40,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  173 => 74,  168 => 72,  166 => 71,  156 => 66,  138 => 57,  136 => 56,  133 => 55,  121 => 46,  112 => 42,  62 => 23,  706 => 189,  699 => 'placeholder',  694 => 185,  691 => 184,  687 => 179,  679 => 173,  672 => 169,  668 => 168,  663 => 166,  659 => 165,  655 => 164,  651 => 163,  647 => 162,  640 => 158,  636 => 157,  632 => 156,  628 => 155,  624 => 154,  617 => 150,  613 => 149,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 144,  589 => 143,  581 => 137,  579 => 136,  576 => 135,  572 => 180,  569 => 135,  566 => 134,  560 => 125,  556 => 123,  550 => 122,  539 => 120,  534 => 119,  530 => 118,  527 => 117,  525 => 116,  507 => 100,  504 => 99,  500 => 95,  493 => 'placeholder',  491 => 94,  488 => 93,  481 => 128,  479 => 99,  476 => 98,  469 => 'placeholder',  466 => 96,  464 => 93,  460 => 91,  457 => 90,  453 => 89,  446 => 'placeholder',  444 => 88,  441 => 87,  437 => 86,  430 => 'placeholder',  428 => 85,  425 => 84,  419 => 181,  417 => 134,  413 => 132,  410 => 90,  407 => 87,  405 => 84,  402 => 83,  399 => 82,  395 => 75,  393 => 69,  380 => 'placeholder',  378 => 68,  375 => 67,  371 => 64,  364 => 'placeholder',  362 => 63,  359 => 62,  354 => 58,  352 => 57,  345 => 'placeholder',  342 => 56,  339 => 55,  334 => 80,  329 => 76,  327 => 67,  323 => 65,  321 => 62,  317 => 60,  314 => 55,  307 => 'placeholder',  303 => 52,  296 => 'placeholder',  293 => 50,  290 => 49,  285 => 39,  281 => 35,  278 => 34,  274 => 32,  267 => 'placeholder',  265 => 31,  262 => 30,  258 => 19,  215 => 'placeholder',  213 => 18,  206 => 36,  203 => 34,  178 => 'placeholder',  176 => 33,  171 => 73,  167 => 27,  160 => 24,  154 => 21,  151 => 63,  141 => 14,  132 => 13,  116 => 37,  114 => 16,  104 => 7,  91 => 31,  158 => 67,  146 => 48,  140 => 46,  128 => 42,  118 => 38,  110 => 34,  105 => 40,  100 => 29,  81 => 20,  61 => 41,  87 => 20,  46 => 10,  44 => 9,  76 => 82,  70 => 17,  59 => 15,  49 => 19,  28 => 3,  25 => 4,  21 => 2,  94 => 22,  89 => 24,  85 => 19,  75 => 17,  68 => 14,  56 => 14,  27 => 4,  31 => 5,  38 => 3,  26 => 3,  24 => 2,  19 => 1,  79 => 184,  72 => 16,  69 => 25,  47 => 18,  40 => 8,  37 => 10,  22 => 1,  246 => 32,  164 => 26,  162 => 57,  157 => 56,  139 => 45,  120 => 9,  115 => 43,  111 => 15,  108 => 37,  101 => 39,  98 => 40,  96 => 5,  83 => 22,  74 => 49,  66 => 24,  55 => 8,  52 => 7,  50 => 8,  43 => 6,  41 => 5,  35 => 4,  32 => 6,  29 => 4,  210 => 17,  204 => 79,  200 => 77,  194 => 74,  190 => 72,  188 => 71,  183 => 82,  177 => 65,  174 => 30,  169 => 63,  165 => 61,  163 => 70,  155 => 56,  150 => 52,  148 => 17,  145 => 16,  142 => 59,  134 => 'placeholder',  131 => 42,  126 => 11,  123 => 47,  117 => 44,  113 => 35,  109 => 9,  106 => 36,  103 => 32,  99 => 6,  95 => 28,  92 => 25,  86 => 28,  82 => 192,  80 => 41,  73 => 14,  64 => 42,  60 => 6,  57 => 14,  54 => 21,  51 => 20,  48 => 38,  45 => 9,  42 => 6,  39 => 16,  36 => 7,  33 => 6,  30 => 3,);
    }
}
