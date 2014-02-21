<?php

/* OroUIBundle:Default:RecordEdit.html.twig */
class __TwigTemplate_d187af93d8adefd9c872e561e9c4b01948b178affb10f7c75f6dc2e92057bc63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OroUIBundle:Default:index.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'main' => array($this, 'block_main'),
            'right_panel' => array($this, 'block_right_panel'),
            'left_panel' => array($this, 'block_left_panel'),
            'pin_bar' => array($this, 'block_pin_bar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/lib/bootstrap/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "    <div>
    ";
        // line 8
        $this->displayBlock('right_panel', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('left_panel', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('pin_bar', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 457
        echo "    </div>
";
    }

    // line 8
    public function block_right_panel($context, array $blocks = array())
    {
        // line 9
        echo "
    ";
    }

    // line 12
    public function block_left_panel($context, array $blocks = array())
    {
        // line 13
        echo "
    ";
    }

    // line 15
    public function block_pin_bar($context, array $blocks = array())
    {
        // line 16
        echo "        <div style=\"overflow: hidden;\">
        ";
        // line 17
        $this->displayParentBlock("pin_bar", $context, $blocks);
        echo "
        </div>
    ";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "        <div class=\"layout-content\">
            <div class=\"clearfix-oro\"><div class=\"navbar application-menu\">
                    <div class=\"clearfix-oro\">
                        <div class=\"\">
                            <div class=\" navbar-responsive-collapse\">
                                <ul class=\"nav nav-tabs\" id=\"myTab\">
                                    <li class=\"home\"><a href=\"#myhome\"><span>Home</span></a></li>
                                    <li><a href=\"#mycrm\">My CRM</a></li>
                                    <li><a href=\"#mypim\">My PIM</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div></div>
            <div class=\"clearfix-oro application-menu\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane\" id=\"myhome\">
                        <ul class=\"nav nav-pills\">
                            <li class=\"active\">
                                <a href=\"#\">Dashboard</a>
                            </li>
                            <li><a href=\"#\">Leads</a></li>
                            <li><a href=\"#\">Customers</a></li>
                            <li><a href=\"#\">Accounts</a></li>
                            <li><a href=\"#\">Forecasts</a></li>
                            <li><a href=\"#\">Reports</a></li>
                        </ul>
                    </div>
                    <div class=\"tab-pane\" id=\"mycrm\">
                        <ul class=\"nav nav-pills\">
                            <li class=\"active\">
                                <a href=\"#\">Dashboard</a>
                            </li>
                            <li><a href=\"#\">Leads</a></li>
                            <li><a href=\"#\">Customers</a></li>
                            <li><a href=\"#\">Accounts</a></li>
                            <li><a href=\"#\">Forecasts</a></li>
                            <li><a href=\"#\">Reports</a></li>
                        </ul>
                    </div>
                    <div class=\"tab-pane\" id=\"mypim\">
                        <ul class=\"nav nav-pills\">
                            <li class=\"active\">
                                <a href=\"#\">Dashboard pim</a>
                            </li>
                            <li><a href=\"#\">Leads pim</a></li>
                            <li><a href=\"#\">Customers pim</a></li>
                            <li><a href=\"#\">Accounts pim</a></li>
                            <li><a href=\"#\">Forecasts pim</a></li>
                            <li><a href=\"#\">Reports pim</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <script>
                require(['jquery'],
                function(\$){
                    \$(function () {
                        \$('#myTab a:last').tab('show');
                        \$('#myTab a').click(function (e) {
                            e.preventDefault();
                            \$(this).tab('show');
                        });
                        \$('a.popup-me').popover();
                    });
                });
            </script>
            <div class=\"navigation clearfix navbar-extra navbar-extra-right\">
                <div class=\"top-action-box\">
                    <div class=\"btn-group icons-holder icons-small\">
                        <button class=\"btn\"><i class=\"icon-minimize hide-text\">minimaze tab</i></button>
                        <button class=\"btn\"><i class=\"icon-fullscreen hide-text\">full screen</i></button>
                        <button class=\"btn\"><i class=\"icon-remove hide-text\">Close</i></button>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"pull-right\">
                        <div class=\"btn-group icons-holder\">
                            <button class=\"btn\"><i class=\"icon-edit hide-text\">edit</i></button>
                            <button class=\"btn\"><i class=\"icon-copy hide-text\">copy</i></button>
                            <button class=\"btn\"><i class=\"icon-trash hide-text\">remove</i></button>
                        </div>
                        <div class=\"btn-group\">
                            <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Export:<span class=\"caret\"></span></button>
                            <ul class=\"dropdown-menu pull-right\">
                                <li><a href=\"#\">Export</a></li>
                                <li><a href=\"#\">Inport</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"span9 \">
                       <div class=\"customer-info well-small\">
                           <div class=\"visual\"><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/info-user.png"), "html", null, true);
        echo "\" alt=\"user avatar\"/></div>
                           <div class=\"customer-content\">
                               <div class=\"sub-title\">Customers</div>
                               <h1 class=\"user-name\">Anna Griffin</h1>
                               <ul class=\"inline\">
                                   <li>Last logged in 3 days ago</li>
                                   <li>Lifetime Sales: \$3004.92</li>
                                   <li>Retail Customer</li>
                               </ul>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
            <div class=\"layout-content\">
                <div id=\"navbarExample\" class=\"navbar navbar-static scrollspy-nav\">
                    <div class=\"navbar-inner\">
                        <div class=\"container-fluid\" style=\"width: auto;\">
                            <ul class=\"nav\">
                                <li class=\"active\"><a href=\"#scroll-a1\">Overview</a></li>
                                <li class=\"\"><a href=\"#scroll-a2\">Cases</a></li>
                                <li class=\"\"><a href=\"#scroll-a3\">Sales History</a></li>
                                <li class=\"\"><a href=\"#scroll-a4\">Activity History</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"clearfix-oro\">
                    <form action=\"#\">
                    <div class=\"customer-info-actions container-fluid well-small\">
                        <div class=\"pull-right\">
                            <button type=\"button\" class=\"btn\">Cancel</button>
                            <button type=\"button\" class=\"btn btn-primary\">Save</button>
                        </div>
                    </div>
                    <div data-spy=\"scroll\" data-target=\"#navbarExample\" data-offset=\"50\" class=\"scrollspy container-fluid\">
                        <h4 id=\"scroll-a1\" class=\"scrollspy-title \">Overview</h4>
                        <div class=\"row-fluid\">
                            <fieldset class=\"form-horizontal span6\">
                                <div class=\"control-group\">
                                    <label for=\"selectAccountName\" class=\"control-label\">User name</label>
                                    <div class=\"controls\">
                                        <select class=\"input-xlarge\" id=\"selectAccountName\">
                                            <option>Oro Inc</option>
                                            <option>Oro Inc2</option>
                                            <option>Oro Inc3</option>
                                            <option>Oro Inc4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputTitle\" class=\"control-label\">Title:</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"input-xlarge\" placeholder=\"inputTitle\" id=\"inputTitle\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputDepartment\" class=\"control-label\">Department:</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"input-xlarge\" id=\"inputDepartment\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"selectAccountName\" class=\"control-label\">Type:</label>
                                    <div class=\"controls\">
                                        <select class=\"input-xlarge\" id=\"selectAccountName\">
                                            <option>Retail Customer</option>
                                            <option>Retail Customer2</option>
                                            <option>Retail Customer3</option>
                                            <option>Retail Customer4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputBirthdate\" class=\"control-label\">Birthdate:</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"input-xlarge\" placeholder=\"1975/12/25\" id=\"inputBirthdate\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputLanguage\" class=\"control-label\">Language:</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"input-xlarge\" placeholder=\"English\" id=\"inputLanguage\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputTwitter\" class=\"control-label\">Twitter:</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"input-xlarge\" placeholder=\"annagraffin\" id=\"inputTwitter\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputLinkedIn\" class=\"control-label\">LinkedIn:</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"input-xlarge\" placeholder=\"annagraffin\" id=\"inputLinkedIn\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputFacebook\" class=\"control-label\">Facebook:</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"input-xlarge\" placeholder=\"annagraffin\" id=\"inputFacebook\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <div class=\"controls\">
                                        <label class=\"checkbox\">
                                            <input type=\"checkbox\"> Remember me
                                        </label>
                                        <button class=\"btn\" type=\"submit\">Sign in</button>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class=\"form-horizontal span6\">
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Phone:</label>
                                    <div class=\"controls\">
                                        <div class=\"row-oro\">
                                            <input type=\"text\" class=\"input-xlarge\" />
                                            <div class=\"btn-group\">
                                                <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Work <span class=\"caret\"></span></button>
                                                <ul class=\"dropdown-menu\">
                                                    <li><a href=\"#\">Action</a></li>
                                                    <li><a href=\"#\">Another action</a></li>
                                                    <li><a href=\"#\">Something else here</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">+</button>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">&times;</button>
                                        </div>
                                        <div class=\"row-oro\">
                                            <input type=\"text\" class=\"input-xlarge\" />
                                            <div class=\"btn-group\">
                                                <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Home <span class=\"caret\"></span></button>
                                                <ul class=\"dropdown-menu\">
                                                    <li><a href=\"#\">Action</a></li>
                                                    <li><a href=\"#\">Another action</a></li>
                                                    <li><a href=\"#\">Something else here</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">+</button>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">&times;</button>
                                        </div>
                                        <div class=\"row-oro\">
                                            <input type=\"text\" class=\"input-xlarge\" />
                                            <div class=\"btn-group\">
                                                <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Call <span class=\"caret\"></span></button>
                                                <ul class=\"dropdown-menu\">
                                                    <li><a href=\"#\">Action</a></li>
                                                    <li><a href=\"#\">Another action</a></li>
                                                    <li><a href=\"#\">Something else here</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">+</button>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">&times;</button>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Email:</label>
                                    <div class=\"controls\">
                                        <div class=\"row-oro\">
                                            <input type=\"text\" class=\"input-xlarge\" />
                                            <div class=\"btn-group\">
                                                <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Work <span class=\"caret\"></span></button>
                                                <ul class=\"dropdown-menu\">
                                                    <li><a href=\"#\">Action</a></li>
                                                    <li><a href=\"#\">Another action</a></li>
                                                    <li><a href=\"#\">Something else here</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">+</button>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">&times;</button>
                                        </div>
                                        <div class=\"row-oro\">
                                            <input type=\"text\" class=\"input-xlarge\" />
                                            <div class=\"btn-group\">
                                                <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Home <span class=\"caret\"></span></button>
                                                <ul class=\"dropdown-menu\">
                                                    <li><a href=\"#\">Action</a></li>
                                                    <li><a href=\"#\">Another action</a></li>
                                                    <li><a href=\"#\">Something else here</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">+</button>
                                            <button type=\"button\" class=\"btn btn-action btn-link\">&times;</button>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Address:</label>
                                    <div class=\"controls\">
                                        <div class=\"row-oro\">
                                            <textarea class=\"input-xlarge\">1234 Dream Lane Portland, OR 97236 United States</textarea>
                                        </div>
                                        <div class=\"row-oro\">
                                            <textarea class=\"input-xlarge\">1234 Dream Lane Portland, OR 97236 United States</textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <h4 id=\"scroll-a2\" class=\"scrollspy-title \">Cases</h4>
                        <div class=\"row-fluid\">
                            <fieldset class=\"form-horizontal span6\">
                                <div class=\"control-group\">
                                    <label  class=\"control-label\">User name</label>
                                    <div class=\"controls\">
                                        <div class=\"clearfix-oro\">
                                            <a class=\"control-label\" href=\"#\">Oro Inc</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label  class=\"control-label\">Title:</label>
                                    <div class=\"controls\">
                                        <div class=\"clearfix-oro\">
                                            <p class=\"control-label\">VP of Global Services</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Department:</label>
                                    <div class=\"controls\">
                                        <p class=\"control-label\">Global Services</p>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label  class=\"control-label\">Type:</label>
                                    <div class=\"controls\">
                                        <p class=\"control-label\">Active Prospect</p>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label  class=\"control-label\">Birthdate:</label>
                                    <div class=\"controls\">
                                        <p class=\"control-label\">01/01/1977</p>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputLanguage\" class=\"control-label\">Language:</label>
                                    <div class=\"controls\">
                                        <p class=\"control-label\">English</p>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label  class=\"control-label\">Twitter:</label>
                                    <div class=\"controls\">
                                        <div class=\"clearfix-oro\">
                                            <a class=\"control-label\" href=\"#\">annagraffin</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label for=\"inputLinkedIn\" class=\"control-label\">LinkedIn:</label>
                                    <div class=\"controls\">
                                        <div class=\"clearfix-oro\">
                                            <a class=\"control-label\" href=\"#\">annagraffin</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label  class=\"control-label\">Facebook:</label>
                                    <div class=\"controls\">
                                        <div class=\"clearfix-oro\">
                                            <a class=\"control-label\" href=\"#\">annagraffin</a>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class=\"form-horizontal span6\">
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Phone:</label>
                                    <div class=\"controls\">
                                        <div class=\"clearfix-oro\">
                                            <p class=\"control-label\">
                                            503-123-1234   <strong> Work</strong>
                                            </p>
                                        </div>
                                        <div class=\"clearfix-oro\">
                                            <p class=\"control-label\">
                                            503-123-1234   <strong> Home</strong>
                                            </p>
                                        </div>
                                        <div class=\"clearfix-oro\">
                                            <p class=\"control-label\">
                                                503-123-1239   <strong> Cell</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label  class=\"control-label\">Email:</label>
                                    <div class=\"controls\">
                                        <div class=\"clearfix-oro\">
                                            <p class=\"control-label\">
                                                anna.griffin4321@gmail.com   <strong> Work</strong>
                                            </p>
                                        </div>
                                        <div class=\"clearfix-oro\">
                                            <p class=\"control-label\">
                                                anna.griffin4321@dreamlane123.com   <strong> Work</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Address:</label>
                                    <div class=\"controls\">
                                        <div class=\"row-oro\">
                                            <p>1234 Dream Lane <br />Portland, OR 97236<br />United States</p>
                                        </div>
                                        <div class=\"row-oro\">
                                            <p>1234 Dream Lane <br />Portland, OR 97236<br />United States</p>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <h4 id=\"scroll-a3\" class=\"scrollspy-title \">Sales History</h4>
                        <p>Nulla rhoncus aliquet enim, sed ornare metus vulputate et. Sed egestas mi nec dui convallis euismod. Nulla accumsan, metus vitae pretium scelerisque, quam neque luctus turpis, vel auctor erat dui vitae diam. Vivamus ac nibh enim. Nulla vel magna ac leo scelerisque ultricies in at neque. Curabitur eu metus quis mi scelerisque volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas fermentum, ante non malesuada pellentesque, dui urna pellentesque velit, eget dictum lacus purus sit amet mi. Praesent eget aliquet orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Suspendisse at lorem ac justo sodales bibendum. Proin vel leo sit amet urna fringilla tempus. Sed egestas felis ac sapien sagittis eu lacinia arcu interdum. Phasellus quis mi a ligula aliquam iaculis. Duis fermentum cursus metus vel volutpat. </p>
                        <p>Nulla rhoncus aliquet enim, sed ornare metus vulputate et. Sed egestas mi nec dui convallis euismod. Nulla accumsan, metus vitae pretium scelerisque, quam neque luctus turpis, vel auctor erat dui vitae diam. Vivamus ac nibh enim. Nulla vel magna ac leo scelerisque ultricies in at neque. Curabitur eu metus quis mi scelerisque volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas fermentum, ante non malesuada pellentesque, dui urna pellentesque velit, eget dictum lacus purus sit amet mi. Praesent eget aliquet orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Suspendisse at lorem ac justo sodales bibendum. Proin vel leo sit amet urna fringilla tempus. Sed egestas felis ac sapien sagittis eu lacinia arcu interdum. Phasellus quis mi a ligula aliquam iaculis. Duis fermentum cursus metus vel volutpat. </p>
                        <p>Nulla rhoncus aliquet enim, sed ornare metus vulputate et. Sed egestas mi nec dui convallis euismod. Nulla accumsan, metus vitae pretium scelerisque, quam neque luctus turpis, vel auctor erat dui vitae diam. Vivamus ac nibh enim. Nulla vel magna ac leo scelerisque ultricies in at neque. Curabitur eu metus quis mi scelerisque volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas fermentum, ante non malesuada pellentesque, dui urna pellentesque velit, eget dictum lacus purus sit amet mi. Praesent eget aliquet orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Suspendisse at lorem ac justo sodales bibendum. Proin vel leo sit amet urna fringilla tempus. Sed egestas felis ac sapien sagittis eu lacinia arcu interdum. Phasellus quis mi a ligula aliquam iaculis. Duis fermentum cursus metus vel volutpat. </p>
                        <p>Nulla rhoncus aliquet enim, sed ornare metus vulputate et. Sed egestas mi nec dui convallis euismod. Nulla accumsan, metus vitae pretium scelerisque, quam neque luctus turpis, vel auctor erat dui vitae diam. Vivamus ac nibh enim. Nulla vel magna ac leo scelerisque ultricies in at neque. Curabitur eu metus quis mi scelerisque volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas fermentum, ante non malesuada pellentesque, dui urna pellentesque velit, eget dictum lacus purus sit amet mi. Praesent eget aliquet orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Suspendisse at lorem ac justo sodales bibendum. Proin vel leo sit amet urna fringilla tempus. Sed egestas felis ac sapien sagittis eu lacinia arcu interdum. Phasellus quis mi a ligula aliquam iaculis. Duis fermentum cursus metus vel volutpat. </p>
                        <p>Nulla rhoncus aliquet enim, sed ornare metus vulputate et. Sed egestas mi nec dui convallis euismod. Nulla accumsan, metus vitae pretium scelerisque, quam neque luctus turpis, vel auctor erat dui vitae diam. Vivamus ac nibh enim. Nulla vel magna ac leo scelerisque ultricies in at neque. Curabitur eu metus quis mi scelerisque volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas fermentum, ante non malesuada pellentesque, dui urna pellentesque velit, eget dictum lacus purus sit amet mi. Praesent eget aliquet orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Suspendisse at lorem ac justo sodales bibendum. Proin vel leo sit amet urna fringilla tempus. Sed egestas felis ac sapien sagittis eu lacinia arcu interdum. Phasellus quis mi a ligula aliquam iaculis. Duis fermentum cursus metus vel volutpat. </p>
                        <p>In accumsan cursus erat ut tempor. Cras cursus lorem eu neque posuere eget rhoncus elit egestas. Suspendisse dictum augue nec mi malesuada feugiat. Morbi et sapien vitae nunc molestie tempus quis et purus. Vivamus vehicula velit ut nunc posuere suscipit. Etiam elementum volutpat ante, in facilisis velit egestas non. Integer ultricies vestibulum lacus, vitae vehicula urna ultricies et. Aliquam facilisis ipsum id enim rhoncus nec viverra nibh scelerisque. Vivamus auctor varius nisl nec fermentum. Morbi est est, suscipit eget hendrerit et, tincidunt tincidunt nisl. Integer eu nunc velit, euismod dictum tellus. Curabitur pulvinar consectetur feugiat. Aliquam metus mi, pretium a laoreet et, faucibus a purus. </p>
                        <h4 id=\"scroll-a4\" class=\"scrollspy-title \">Activity History</h4>
                        <p>Donec eu metus dolor, et eleifend lacus. Vivamus malesuada sodales purus, at ultrices lectus eleifend ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur sollicitudin ornare ornare. In ac purus eget enim varius feugiat vitae ac nulla. Donec bibendum aliquam auctor. Sed ultrices volutpat felis vel accumsan. Nullam tincidunt nibh tortor. </p>
                        <p>Nullam bibendum turpis vitae risus tempor tincidunt. Maecenas posuere, erat sed mattis dignissim, massa massa vestibulum dolor, et tristique est dolor sed est. Duis rhoncus augue eget metus auctor a ultricies nisi blandit. Duis sem ipsum, pretium in varius sit amet, dignissim sit amet erat. Sed vulputate risus nec ipsum ultrices a aliquam ligula lobortis. Suspendisse hendrerit sollicitudin tellus, in varius ipsum consequat id. Suspendisse potenti. Integer a enim ac erat volutpat imperdiet eget in ante. Nulla lacus arcu, dignissim in fermentum vel, ultrices vitae urna. Proin sed convallis urna. Nam ornare metus nec ipsum ornare ut dignissim dolor iaculis. Nullam vulputate scelerisque ligula quis blandit. Proin scelerisque, purus nec aliquam ultrices, lorem tortor vulputate ante, at fringilla ligula nisl eu est. Praesent eleifend semper metus, non semper leo scelerisque a. Suspendisse eget odio quis justo iaculis cursus. Donec placerat rutrum arcu non dignissim. </p>
                    </div>
                    </form>
                </div>
            </div>
       </div>
    ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:RecordEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 283,  365 => 316,  2431 => 2339,  2364 => 2275,  2246 => 2160,  2128 => 2045,  2010 => 1930,  1892 => 1815,  1774 => 1700,  1656 => 1585,  1538 => 1470,  1420 => 1355,  1302 => 1240,  1184 => 1125,  948 => 895,  830 => 780,  712 => 665,  2321 => 2207,  2254 => 2143,  2136 => 2028,  2018 => 1913,  1900 => 1798,  1782 => 1683,  1664 => 1568,  1546 => 1453,  1428 => 1338,  1310 => 1223,  1192 => 1108,  1074 => 993,  956 => 878,  838 => 763,  720 => 648,  602 => 533,  484 => 418,  257 => 83,  207 => 33,  277 => 76,  268 => 73,  251 => 64,  185 => 27,  282 => 84,  221 => 41,  212 => 58,  214 => 60,  211 => 59,  191 => 53,  159 => 44,  143 => 109,  23 => 26,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 1010,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  657 => 277,  649 => 271,  644 => 268,  630 => 257,  611 => 247,  598 => 238,  592 => 237,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  567 => 230,  554 => 223,  536 => 217,  533 => 216,  531 => 215,  498 => 198,  461 => 175,  445 => 163,  443 => 162,  429 => 154,  423 => 151,  411 => 144,  394 => 136,  388 => 133,  357 => 113,  350 => 111,  346 => 110,  338 => 107,  332 => 285,  319 => 98,  313 => 96,  291 => 246,  250 => 80,  238 => 56,  127 => 27,  517 => 168,  503 => 200,  489 => 156,  487 => 192,  482 => 153,  477 => 151,  467 => 144,  462 => 142,  459 => 141,  450 => 406,  442 => 137,  422 => 132,  416 => 130,  401 => 125,  391 => 121,  383 => 118,  353 => 107,  349 => 106,  330 => 104,  324 => 102,  306 => 127,  304 => 96,  288 => 83,  261 => 77,  259 => 70,  256 => 69,  248 => 66,  245 => 209,  243 => 47,  232 => 66,  229 => 65,  224 => 53,  216 => 60,  186 => 147,  147 => 45,  130 => 37,  284 => 94,  280 => 127,  253 => 75,  227 => 95,  223 => 94,  153 => 43,  77 => 17,  520 => 208,  513 => 403,  510 => 402,  506 => 400,  501 => 199,  496 => 397,  474 => 382,  341 => 260,  335 => 106,  273 => 200,  67 => 10,  20 => 1,  161 => 45,  122 => 488,  119 => 88,  671 => 293,  621 => 251,  615 => 242,  610 => 239,  608 => 246,  600 => 232,  596 => 230,  590 => 229,  561 => 224,  558 => 224,  555 => 222,  551 => 222,  548 => 221,  545 => 220,  542 => 219,  523 => 215,  518 => 207,  515 => 212,  511 => 203,  508 => 164,  505 => 209,  502 => 208,  483 => 190,  478 => 188,  475 => 202,  471 => 183,  454 => 196,  449 => 194,  439 => 189,  436 => 188,  431 => 135,  426 => 183,  408 => 177,  396 => 123,  389 => 171,  368 => 116,  355 => 153,  351 => 152,  347 => 262,  344 => 105,  340 => 282,  322 => 136,  311 => 132,  301 => 90,  297 => 88,  286 => 89,  283 => 82,  260 => 84,  237 => 98,  233 => 45,  230 => 63,  226 => 64,  217 => 61,  202 => 33,  197 => 113,  192 => 29,  175 => 24,  182 => 52,  179 => 72,  152 => 118,  149 => 49,  124 => 655,  97 => 70,  84 => 19,  34 => 3,  181 => 23,  137 => 31,  125 => 13,  107 => 18,  90 => 16,  63 => 20,  53 => 8,  485 => 171,  480 => 152,  472 => 165,  468 => 380,  455 => 159,  451 => 195,  448 => 157,  438 => 160,  434 => 187,  424 => 144,  420 => 150,  418 => 141,  409 => 139,  404 => 126,  398 => 137,  392 => 130,  390 => 134,  385 => 132,  379 => 124,  376 => 161,  373 => 115,  366 => 116,  348 => 113,  333 => 257,  325 => 137,  320 => 107,  316 => 97,  309 => 93,  305 => 129,  294 => 99,  289 => 90,  279 => 84,  275 => 82,  269 => 75,  263 => 72,  252 => 87,  240 => 68,  235 => 44,  219 => 78,  193 => 55,  189 => 75,  170 => 77,  129 => 667,  102 => 16,  65 => 17,  58 => 12,  71 => 8,  270 => 81,  255 => 68,  247 => 79,  244 => 78,  241 => 59,  239 => 54,  236 => 46,  231 => 80,  228 => 42,  225 => 39,  222 => 38,  220 => 92,  218 => 177,  209 => 57,  205 => 34,  180 => 34,  172 => 23,  144 => 4,  93 => 17,  88 => 63,  78 => 21,  201 => 56,  199 => 53,  196 => 33,  187 => 28,  173 => 48,  168 => 13,  166 => 26,  156 => 119,  138 => 16,  136 => 19,  133 => 38,  121 => 90,  112 => 365,  62 => 33,  706 => 189,  699 => 'placeholder',  694 => 185,  691 => 184,  687 => 288,  679 => 173,  672 => 169,  668 => 168,  663 => 166,  659 => 278,  655 => 164,  651 => 163,  647 => 162,  640 => 158,  636 => 157,  632 => 258,  628 => 155,  624 => 154,  617 => 250,  613 => 248,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 144,  589 => 143,  581 => 137,  579 => 136,  576 => 135,  572 => 180,  569 => 231,  566 => 226,  560 => 125,  556 => 123,  550 => 122,  539 => 218,  534 => 119,  530 => 118,  527 => 117,  525 => 211,  507 => 202,  504 => 99,  500 => 162,  493 => 158,  491 => 157,  488 => 93,  481 => 189,  479 => 383,  476 => 98,  469 => 'placeholder',  466 => 379,  464 => 161,  460 => 91,  457 => 90,  453 => 89,  446 => 138,  444 => 191,  441 => 154,  437 => 86,  430 => 'placeholder',  428 => 134,  425 => 152,  419 => 131,  417 => 179,  413 => 129,  410 => 128,  407 => 127,  405 => 84,  402 => 138,  399 => 82,  395 => 131,  393 => 172,  380 => 'placeholder',  378 => 162,  375 => 67,  371 => 114,  364 => 115,  362 => 109,  359 => 114,  354 => 58,  352 => 115,  345 => 'placeholder',  342 => 109,  339 => 103,  334 => 80,  329 => 76,  327 => 103,  323 => 108,  321 => 99,  317 => 133,  314 => 55,  307 => 'placeholder',  303 => 52,  296 => 100,  293 => 85,  290 => 49,  285 => 85,  281 => 93,  278 => 83,  274 => 75,  267 => 80,  265 => 72,  262 => 85,  258 => 215,  215 => 39,  213 => 49,  206 => 58,  203 => 34,  178 => 25,  176 => 33,  171 => 14,  167 => 55,  160 => 62,  154 => 37,  151 => 21,  141 => 70,  132 => 65,  116 => 87,  114 => 83,  104 => 32,  91 => 14,  158 => 52,  146 => 55,  140 => 109,  128 => 14,  118 => 34,  110 => 35,  105 => 102,  100 => 20,  81 => 22,  61 => 16,  87 => 15,  46 => 8,  44 => 281,  76 => 57,  70 => 18,  59 => 16,  49 => 290,  28 => 2,  25 => 4,  21 => 2,  94 => 245,  89 => 27,  85 => 62,  75 => 20,  68 => 21,  56 => 14,  27 => 5,  31 => 2,  38 => 34,  26 => 3,  24 => 21,  19 => 1,  79 => 12,  72 => 19,  69 => 13,  47 => 6,  40 => 6,  37 => 4,  22 => 2,  246 => 108,  164 => 45,  162 => 39,  157 => 36,  139 => 3,  120 => 25,  115 => 48,  111 => 82,  108 => 44,  101 => 72,  98 => 30,  96 => 14,  83 => 25,  74 => 9,  66 => 457,  55 => 11,  52 => 8,  50 => 7,  43 => 7,  41 => 4,  35 => 4,  32 => 3,  29 => 2,  210 => 35,  204 => 32,  200 => 144,  194 => 28,  190 => 51,  188 => 71,  183 => 24,  177 => 49,  174 => 46,  169 => 45,  165 => 56,  163 => 78,  155 => 23,  150 => 21,  148 => 35,  145 => 16,  142 => 42,  134 => 30,  131 => 15,  126 => 48,  123 => 14,  117 => 39,  113 => 12,  109 => 78,  106 => 33,  103 => 21,  99 => 96,  95 => 167,  92 => 28,  86 => 26,  82 => 13,  80 => 112,  73 => 56,  64 => 9,  60 => 15,  57 => 5,  54 => 4,  51 => 14,  48 => 9,  45 => 41,  42 => 143,  39 => 142,  36 => 3,  33 => 2,  30 => 2,);
    }
}
