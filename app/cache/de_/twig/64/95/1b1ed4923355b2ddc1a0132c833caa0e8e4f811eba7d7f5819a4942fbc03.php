<?php

/* OroUIBundle:Default:index.html.twig */
class __TwigTemplate_64951b1ed4923355b2ddc1a0132c833caa0e8e4f811eba7d7f5819a4942fbc03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'head_style' => array($this, 'block_head_style'),
            'script' => array($this, 'block_script'),
            'scripts_before' => array($this, 'block_scripts_before'),
            'hash_nav' => array($this, 'block_hash_nav'),
            'head_script' => array($this, 'block_head_script'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'header' => array($this, 'block_header'),
            'navbar' => array($this, 'block_navbar'),
            'application_menu' => array($this, 'block_application_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'main' => array($this, 'block_main'),
            'right_panel' => array($this, 'block_right_panel'),
            'left_panel' => array($this, 'block_left_panel'),
            'before_content' => array($this, 'block_before_content'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'messages' => array($this, 'block_messages'),
            'page_container' => array($this, 'block_page_container'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((!$this->env->getExtension('oro_hash_nav')->checkIsHashNavigation())) {
            // line 2
            echo "    <!DOCTYPE html>
    <html>
    <head>
        ";
            // line 5
            $this->displayBlock('head', $context, $blocks);
            // line 38
            echo "    </head>
    <body class=\"";
            // line 39
            if ($this->env->getExtension('mobile_extension')->isMobile()) {
                echo "mobile";
            } else {
                echo "desktop";
            }
            echo "-version ";
            $this->displayBlock('bodyClass', $context, $blocks);
            echo "\">
    ";
            // line 41
            echo "    <div id=\"progressbar\">
        <h3>";
            // line 42
            echo $this->env->getExtension('translator')->getTranslator()->trans("Loading ...", array(), "messages");
            echo "</h3>
        <div class=\"progress progress-striped active\">
            <div class=\"bar\" style=\"width: 90%;\"></div>
        </div>
    </div>
    <div id=\"page\" style=\"display:none;\">
        <div id=\"top-page\">
            ";
            // line 49
            $this->displayBlock('header', $context, $blocks);
            // line 82
            echo "            ";
            $this->displayBlock('main', $context, $blocks);
            // line 184
            echo "            ";
            $this->displayBlock('footer', $context, $blocks);
            // line 192
            echo "        </div>
    </div>
    ";
            // line 195
            echo "    </body>
    </html>
";
        } else {
            // line 199
            $this->env->loadTemplate("OroNavigationBundle:HashNav:hashNavAjax.html.twig")->display(array_merge($context, array("script" => $this->renderBlock("head_script", $context, $blocks), "content" => $this->renderBlock("page_container", $context, $blocks), "menu" => $this->renderBlock("application_menu", $context, $blocks), "breadcrumb" => $this->renderBlock("breadcrumb", $context, $blocks), "userMenu" => $this->renderBlock("user_menu", $context, $blocks))));
        }
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "            <title>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Loading...", array(), "messages");
        echo "</title>
            <script id=\"page-title\" type=\"text/html\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->render(), "html", null, true);
        echo "</script>
            <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=no\">
            ";
        // line 9
        $this->displayBlock('head_style', $context, $blocks);
        // line 15
        echo "
            ";
        // line 16
        $this->displayBlock('script', $context, $blocks);
        // line 37
        echo "        ";
    }

    // line 9
    public function block_head_style($context, array $blocks = array())
    {
        // line 10
        echo "                ";
        if ($this->env->getExtension('oro_theme')->getThemeIcon()) {
            // line 11
            echo "                    <link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('oro_theme')->getThemeIcon()), "html", null, true);
            echo "\" />
                ";
        }
        // line 13
        echo "               ";
        // line placeholder
        try {
            $this->env->loadTemplate("OroAsseticBundle:Assets:oro_css.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 14
        echo "            ";
    }

    // line 16
    public function block_script($context, array $blocks = array())
    {
        // line 17
        echo "                ";
        $this->displayBlock('scripts_before', $context, $blocks);
        // line 20
        echo "                ";
        $this->env->loadTemplate("OroRequireJSBundle::scripts.html.twig")->display(array_merge($context, array("compressed" => (!$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug")))));
        // line 21
        echo "                <script type=\"text/javascript\">
                    require(['oro/init-layout', 'oro/init-user', 'oro/widget-manager', 'jquery.uniform']);
                ";
        // line 23
        if ($this->env->getExtension('mobile_extension')->isMobile()) {
            // line 24
            echo "                    require(['oro/mobile/layout'], function (layout) {layout.init();});
                ";
        }
        // line 26
        echo "                ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug")) {
            // line 27
            echo "                    require(['oro/app'], function(app){app.debug = true;});
                ";
        }
        // line 29
        echo "                </script>
                ";
        // line 30
        $this->displayBlock('hash_nav', $context, $blocks);
        // line 33
        echo "                ";
        // line placeholder
        try {
            $this->env->loadTemplate("OroWindowsBundle:Include:javascript.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        try {
            $this->env->loadTemplate("OroSyncBundle::maintenance_js.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        try {
            $this->env->loadTemplate("OroSyncBundle::sync_js.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        try {
            $this->env->loadTemplate("OroLocaleBundle::locale_settings.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 34
        echo "                ";
        $this->displayBlock('head_script', $context, $blocks);
        // line 36
        echo "            ";
    }

    // line 17
    public function block_scripts_before($context, array $blocks = array())
    {
        // line 18
        echo "                    ";
        // line placeholder
        try {
            $this->env->loadTemplate("OroFilterBundle:Filter:container.js.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        try {
            $this->env->loadTemplate("OroDataGridBundle:js:toolbar.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        try {
            $this->env->loadTemplate("OroDataGridBundle:js:pagination.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        try {
            $this->env->loadTemplate("OroDataGridBundle:js:pagination-input.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        try {
            $this->env->loadTemplate("OroDataGridBundle:js:page-size.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        try {
            $this->env->loadTemplate("OroNavigationBundle:Js:dot.menu.js.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        try {
            $this->env->loadTemplate("OroNavigationBundle:Js:pinbar.js.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 19
        echo "                ";
    }

    // line 30
    public function block_hash_nav($context, array $blocks = array())
    {
        // line 31
        echo "                    ";
        // line placeholder
        try {
            $this->env->loadTemplate("OroNavigationBundle:HashNav:script.js.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 32
        echo "                ";
    }

    // line 34
    public function block_head_script($context, array $blocks = array())
    {
        // line 35
        echo "                ";
    }

    // line 39
    public function block_bodyClass($context, array $blocks = array())
    {
    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        // line 50
        echo "                <header class=\"navbar\" id=\"oroplatform-header\">
                    ";
        // line placeholder
        try {
            $this->env->loadTemplate("OroNavigationBundle:ApplicationMenu:dotsMenu.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 52
        echo "                    <div class=\"navbar-inner\">
                        <div class=\"container\">
                            ";
        // line placeholder
        try {
            $this->env->loadTemplate("OroUIBundle:Default:logo.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 55
        echo "                            ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 60
        echo "                            <div class=\"divider-vertical small-divider\"></div>
                            <div id=\"main-menu\">
                                ";
        // line 62
        $this->displayBlock('application_menu', $context, $blocks);
        // line 65
        echo "                            </div>
                            <ul class=\"nav pull-right user-menu\">
                            ";
        // line 67
        $this->displayBlock('user_menu', $context, $blocks);
        // line 76
        echo "                            </ul>
                        </div>
                    </div>
                    ";
        // line 80
        echo "                </header>
            ";
    }

    // line 55
    public function block_navbar($context, array $blocks = array())
    {
        // line 56
        echo "                            <div class=\"nav pull-left top-search shortcuts\">
                                ";
        // line placeholder
        try {
            $this->env->loadTemplate("OroNavigationBundle:Shortcut:shortcuts.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 57
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OroSearchBundle:Search:searchBar", array()), array());
        // line 58
        echo "                            </div>
                            ";
    }

    // line 62
    public function block_application_menu($context, array $blocks = array())
    {
        // line 63
        echo "                                    ";
        // line placeholder
        try {
            $this->env->loadTemplate("OroNavigationBundle:ApplicationMenu:applicationMenu.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 64
        echo "                                ";
    }

    // line 67
    public function block_user_menu($context, array $blocks = array())
    {
        // line 68
        echo "                                ";
        // line placeholder
        try {
            $this->env->loadTemplate("OroUserBundle:Menu:menuProfile.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        try {
            $this->env->loadTemplate("OroUIBundle:Default:help.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 69
        echo "                                ";
        // line 75
        echo "                            ";
    }

    // line 82
    public function block_main($context, array $blocks = array())
    {
        // line 83
        echo "                <div id=\"main\" >
                    ";
        // line 84
        $this->displayBlock('right_panel', $context, $blocks);
        // line 87
        echo "                    ";
        $this->displayBlock('left_panel', $context, $blocks);
        // line 90
        echo "                    ";
        $this->displayBlock('before_content', $context, $blocks);
        // line 132
        echo "                    <div class=\"hash-loading-mask\"></div>
                    <div id=\"container\" class=\"scrollable-container\">
                        ";
        // line 134
        $this->displayBlock('page_container', $context, $blocks);
        // line 181
        echo "                    </div>
                </div>
            ";
    }

    // line 84
    public function block_right_panel($context, array $blocks = array())
    {
        // line 85
        echo "                        ";
        // line placeholder
        try {
            $this->env->loadTemplate("OroSidebarBundle::sidebar.html.twig")->display(array("placement" => "right"));
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 86
        echo "                    ";
    }

    // line 87
    public function block_left_panel($context, array $blocks = array())
    {
        // line 88
        echo "                        ";
        // line placeholder
        try {
            $this->env->loadTemplate("OroSidebarBundle::sidebar.html.twig")->display(array("placement" => "left"));
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 89
        echo "                    ";
    }

    // line 90
    public function block_before_content($context, array $blocks = array())
    {
        // line 91
        echo "                    <div class=\"breadcrumb-pin\">
                        <div id=\"breadcrumb\">
                            ";
        // line 93
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 96
        echo "                        </div>
                        ";
        // line placeholder
        try {
            $this->env->loadTemplate("OroNavigationBundle:ApplicationMenu:pinButton.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 98
        echo "                        <div id=\"flash-messages\">
                            ";
        // line 99
        $this->displayBlock('messages', $context, $blocks);
        // line 128
        echo "                        </div>

                    </div>
                    ";
    }

    // line 93
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 94
        echo "                                ";
        // line placeholder
        try {
            $this->env->loadTemplate("OroNavigationBundle:ApplicationMenu:breabcrumbs.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 95
        echo "                            ";
    }

    // line 99
    public function block_messages($context, array $blocks = array())
    {
        // line 100
        echo "                                <div class=\"flash-messages-frame\">
                                    <div class=\"flash-messages-holder\"></div>
                                </div>
                                <script type=\"text/template\" id=\"message-item-template\">
                                    <div class=\"alert <% if (type) {  %><%= 'alert-' + type %><% } %> fade in top-messages \">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        <div class=\"message\"><%= message %></div>
                                    </div>
                                </script>
                                <script type=\"text/javascript\">
                                    require(['jquery', 'oro/messenger'],
                                            function(\$, messenger) {
                                                messenger.setup({
                                                    container: '#flash-messages .flash-messages-holder',
                                                    template: _.template(\$.trim(\$('#message-item-template').html()))
                                                });
                                                ";
        // line 116
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "peekAll")) > 0)) {
            // line 117
            echo "                                                \$(function() {
                                                    ";
            // line 118
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 119
                echo "                                                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 120
                    echo "                                                    messenger.notificationFlashMessage(";
                    echo twig_jsonencode_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")));
                    echo ", ";
                    echo twig_jsonencode_filter($this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))));
                    echo ");
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                                                });
                                                ";
        }
        // line 125
        echo "                                            });
                                </script>
                            ";
    }

    // line 134
    public function block_page_container($context, array $blocks = array())
    {
        // line 135
        echo "                            ";
        $this->displayBlock('content', $context, $blocks);
        // line 180
        echo "                        ";
    }

    // line 135
    public function block_content($context, array $blocks = array())
    {
        // line 136
        echo "                                ";
        // line 137
        echo "                                <div class=\"container\" style=\"background: #fff\">
                                    <div class=\"row\">
                                        <div class=\"span4\">
                                            <hr />
                                            <h3>Layout pages</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("oro_ui_1column");
        echo "\">1 column </a></li>
                                                <li><a href=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("oro_ui_1column_toolbar");
        echo "\">1 column with toolbar</a></li>
                                                <li><a href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("oro_ui_1column_menu");
        echo "\">1 column with menu</a></li>
                                                <li><a href=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("oro_ui_grid_page");
        echo "\">grid page</a></li>
                                                <li><a href=\"";
        // line 147
        echo $this->env->getExtension('routing')->getPath("oro_ui_grid_without_bar_page");
        echo "\">grid page without bar</a></li>
                                                <li><a href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("oro_ui_2columns_left");
        echo "\">2 columns - left</a></li>
                                                <li><a href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("oro_ui_2columns_right");
        echo "\">2 columns - right</a></li>
                                                <li><a href=\"";
        // line 150
        echo $this->env->getExtension('routing')->getPath("oro_ui_3columns");
        echo "\">3 columns</a></li>
                                            </ul>
                                            <h3>Static pages</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("oro_ui_forgot_password");
        echo "\">Forgot password</a></li>
                                                <li><a href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("oro_ui_login");
        echo "\">Login page</a></li>
                                                <li><a href=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("oro_ui_registration");
        echo "\">Registration page</a></li>
                                                <li><a href=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("oro_ui_404");
        echo "\">404</a></li>
                                                <li><a href=\"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("oro_ui_503");
        echo "\">503</a></li>
                                            </ul>
                                            <h3>Example pages</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 162
        echo $this->env->getExtension('routing')->getPath("oro_ui_form_elements");
        echo "\">Form elements</a></li>
                                                <li><a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("oro_ui_form_horizontal");
        echo "\">Form Horizontal</a></li>
                                                <li><a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("oro_ui_messages");
        echo "\">System messages</a></li>
                                                <li><a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("oro_ui_title_bar");
        echo "\">Entity Title Bar</a></li>
                                                <li><a href=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("oro_ui_buttons");
        echo "\">Buttons</a></li>
                                                <li><a href=\"#\">Print page</a></li>
                                                <li><a href=\"";
        // line 168
        echo $this->env->getExtension('routing')->getPath("oro_ui_tables");
        echo "\">Tables</a></li>
                                                <li><a href=\"";
        // line 169
        echo $this->env->getExtension('routing')->getPath("oro_ui_general_elements");
        echo "\">General elements</a></li>
                                            </ul>
                                            <h3>Js use page</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 173
        echo $this->env->getExtension('routing')->getPath("oro_ui_dialog_styled");
        echo "\">jQuery Dialog styled</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 179
        echo "                            ";
    }

    // line 184
    public function block_footer($context, array $blocks = array())
    {
        // line 185
        echo "                <div id=\"dialog-extend-fixed-container\"></div>
                <footer id=\"footer\" class=\"footer\">
                      <div class=\"alert\">
                          ";
        // line placeholder
        try {
            $this->env->loadTemplate("OroPlatformBundle::application_version.html.twig")->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 189
        echo "                      </div>
                </footer>
            ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  706 => 189,  699 => 'placeholder',  694 => 185,  691 => 184,  687 => 179,  679 => 173,  672 => 169,  668 => 168,  663 => 166,  659 => 165,  655 => 164,  651 => 163,  647 => 162,  640 => 158,  636 => 157,  632 => 156,  628 => 155,  624 => 154,  617 => 150,  613 => 149,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 144,  589 => 143,  581 => 137,  579 => 136,  576 => 135,  572 => 180,  569 => 135,  566 => 134,  560 => 125,  556 => 123,  550 => 122,  539 => 120,  534 => 119,  530 => 118,  527 => 117,  525 => 116,  507 => 100,  504 => 99,  500 => 95,  493 => 'placeholder',  491 => 94,  488 => 93,  481 => 128,  479 => 99,  476 => 98,  469 => 'placeholder',  466 => 96,  464 => 93,  460 => 91,  457 => 90,  453 => 89,  446 => 'placeholder',  444 => 88,  441 => 87,  437 => 86,  430 => 'placeholder',  428 => 85,  425 => 84,  419 => 181,  417 => 134,  413 => 132,  410 => 90,  407 => 87,  405 => 84,  402 => 83,  399 => 82,  395 => 75,  393 => 69,  380 => 'placeholder',  378 => 68,  375 => 67,  371 => 64,  364 => 'placeholder',  362 => 63,  359 => 62,  354 => 58,  352 => 57,  345 => 'placeholder',  342 => 56,  339 => 55,  334 => 80,  329 => 76,  327 => 67,  323 => 65,  321 => 62,  317 => 60,  314 => 55,  307 => 'placeholder',  303 => 52,  296 => 'placeholder',  293 => 50,  290 => 49,  285 => 39,  281 => 35,  278 => 34,  274 => 32,  267 => 'placeholder',  265 => 31,  262 => 30,  258 => 19,  215 => 'placeholder',  213 => 18,  206 => 36,  203 => 34,  178 => 'placeholder',  176 => 33,  171 => 29,  167 => 27,  160 => 24,  154 => 21,  151 => 20,  141 => 14,  132 => 13,  116 => 37,  114 => 16,  104 => 7,  91 => 199,  158 => 23,  146 => 48,  140 => 46,  128 => 42,  118 => 38,  110 => 34,  105 => 31,  100 => 29,  81 => 20,  61 => 41,  87 => 20,  46 => 5,  44 => 10,  76 => 82,  70 => 17,  59 => 15,  49 => 6,  28 => 3,  25 => 4,  21 => 2,  94 => 22,  89 => 24,  85 => 19,  75 => 17,  68 => 14,  56 => 14,  27 => 4,  31 => 5,  38 => 3,  26 => 3,  24 => 3,  19 => 1,  79 => 184,  72 => 16,  69 => 12,  47 => 18,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  164 => 26,  162 => 57,  157 => 56,  139 => 45,  120 => 9,  115 => 39,  111 => 15,  108 => 37,  101 => 24,  98 => 32,  96 => 5,  83 => 22,  74 => 49,  66 => 'placeholder',  55 => 8,  52 => 7,  50 => 8,  43 => 4,  41 => 2,  35 => 7,  32 => 4,  29 => 4,  210 => 17,  204 => 79,  200 => 77,  194 => 74,  190 => 72,  188 => 71,  183 => 69,  177 => 65,  174 => 30,  169 => 63,  165 => 61,  163 => 60,  155 => 56,  150 => 52,  148 => 17,  145 => 16,  142 => 49,  134 => 'placeholder',  131 => 42,  126 => 11,  123 => 10,  117 => 37,  113 => 35,  109 => 9,  106 => 36,  103 => 32,  99 => 6,  95 => 28,  92 => 25,  86 => 195,  82 => 192,  80 => 19,  73 => 14,  64 => 42,  60 => 6,  57 => 14,  54 => 22,  51 => 39,  48 => 38,  45 => 9,  42 => 6,  39 => 1,  36 => 7,  33 => 6,  30 => 3,);
    }
}
