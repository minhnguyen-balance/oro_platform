<?php

/* OroUIBundle:Default:gridPageWithoutBar.html.twig */
class __TwigTemplate_2d645409fc20549bed80fd0a48ab4418e0a6b7f81ff1ef2fd1545f6527fc10ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OroUIBundle:Default:index.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'main' => array($this, 'block_main'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/lib/bootstrap/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/lib/bootstrap/js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"main\">
";
        // line 9
        $this->displayBlock('pin_bar', $context, $blocks);
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 2281
        echo "</div>
";
    }

    // line 9
    public function block_pin_bar($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("pin_bar", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "        <div class=\"layout-content\">
            <div class=\"clearfix\"><div class=\"navbar application-menu\">
                <div class=\"cleearfix\">
                    <div class=\"container\">
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
            <div class=\"clearfix application-menu\">
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
                require(['jquery', 'jquery-ui', 'bootstrap'],
                function(\$) {
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
            <div class=\"navigation clearfix\">
                <div class=\"container-fluid\">
                    <div class=\"top-action-box\">
                        <div class=\"btn-group icons-holder icons-small\">
                            <button class=\"btn\"><i class=\"icon-minimize hide-text\">minimaze tab</i></button>
                            <button class=\"btn\"><i class=\"icon-fullscreen hide-text\">full screen</i></button>
                            <button class=\"btn\"><i class=\"icon-remove hide-text\">Close</i></button>
                        </div>
                    </div>
                    <div class=\"brand-extra pull-left\">Customers</div>
                    <div class=\"divider-vertical pull-left\" style=\"height:100%;\"></div>
                    <div class=\"navbar-responsive-collapse navbar-extra clearfix\">
                        <div class=\"btn-group pull-left\">
                            <button class=\"btn dark\">Views</button>
                            <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Accounts owned by me<span class=\"caret\"></span></button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Last update: <strong>2010/12/12-2013/18/18</strong></a></li>
                                <li><a href=\"#\">Last update: <strong>2011/12/12-2014/11/18</strong></a></li>
                            </ul>
                        </div>
                        <div class=\"btn-group pull-left\">
                            <button type=\"button\" class=\"btn btn-link\"> + Add View</button>
                        </div>
                        <div class=\"btn-group pull-right\">
                            <button class=\"btn btn-primary\"><i class=\"icon-plus icon-white\"></i> New Customers</button>
                        </div>
                        <div class=\"btn-group pull-right\">
                            <button class=\"btn btn-primary\"><i class=\"icon-window\"></i>Quick Add</button>
                        </div>
                    </div><!-- /.nav-collapse -->
                </div>
            </div>
            <div class=\"filter-box container-fluid\">
                <div class=\"btn-group\">
                    <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Account Owner: <strong>Me</strong> <span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\"> Me2</a></li>
                        <li><a href=\"#\"> M3</a></li>
                    </ul>
                </div>
                <div class=\"btn-group\">
                    <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Last update: <strong>2012/12/12-2012/12/18</strong><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Last update: <strong>2010/12/12-2013/18/18</strong></a></li>
                        <li><a href=\"#\">Last update: <strong>2011/12/12-2014/11/18</strong></a></li>
                    </ul>
                </div>
                <div class=\"btn-group\">
                    <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Status: <strong>All</strong><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">only short</a></li>
                        <li><a href=\"#\">this is long text for test</a></li>
                    </ul>
                </div>
                <div class=\"btn-group\">
                    <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Billing Country: <strong>United States</strong><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Africa</a></li>
                        <li><a href=\"#\">Russia</a></li>
                        <li><a href=\"#\">Ukraine</a></li>
                        <li><a href=\"#\">Germany</a></li>
                    </ul>
                </div>
                <div class=\"btn-group\">
                    <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Last update: <strong>2012/12/12-2012/12/18</strong><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Last update: <strong>2010/12/12-2013/18/18</strong></a></li>
                        <li><a href=\"#\">Last update: <strong>2011/12/12-2014/11/18</strong></a></li>
                    </ul>
                </div>
                <div class=\"btn-group\">
                    <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Last update: <strong>2012/12/12-2012/12/18</strong><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Last update: <strong>2010/12/12-2013/18/18</strong></a></li>
                        <li><a href=\"#\">Last update: <strong>2011/12/12-2014/11/18</strong></a></li>
                    </ul>
                </div>
                <div class=\"btn-group\">
                    <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Status: <strong>All</strong><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">only short</a></li>
                        <li><a href=\"#\">this is long text for test</a></li>
                    </ul>
                </div>
                <div class=\"btn-group\">
                    <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Billing Country: <strong>United States</strong><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Africa</a></li>
                        <li><a href=\"#\">Russia</a></li>
                        <li><a href=\"#\">Ukraine</a></li>
                        <li><a href=\"#\">Germany</a></li>
                    </ul>
                </div>
                <div class=\"btn-group\">
                    <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Last update: <strong>2012/12/12-2012/12/18</strong><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Last update: <strong>2010/12/12-2013/18/18</strong></a></li>
                        <li><a href=\"#\">Last update: <strong>2011/12/12-2014/11/18</strong></a></li>
                    </ul>
                </div>
                <div class=\"btn-group\">
                    <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Status: <strong>All</strong><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">only short</a></li>
                        <li><a href=\"#\">this is long text for test</a></li>
                    </ul>
                </div>
                <div class=\"btn-group\">
                    <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Billing Country: <strong>United States</strong><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Africa</a></li>
                        <li><a href=\"#\">Russia</a></li>
                        <li><a href=\"#\">Ukraine</a></li>
                        <li><a href=\"#\">Germany</a></li>
                    </ul>
                </div>
                <a href=\"#\" class=\"btn btn-link btn-group\">+ Add another</a>
            </div>
            <div class=\"grid-toolbar well-small\">
                <div class=\"pull-right form-horizontal\">
                    <label class=\"control-label\">View per page: &nbsp;</label>
                    <div class=\"btn-group\">
                        <button data-toggle=\"dropdown\" class=\"btn dropdown-toggle\">100<span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu pull-right\">
                            <li><a href=\"#\">10</a></li>
                            <li><a href=\"#\">25</a></li>
                            <li><a href=\"#\">50</a></li>
                        </ul>
                    </div>
                    <div class=\"btn-group icons-holder \">
                        <button class=\"btn\"><i class=\"icon-eye2-open hide-text\">hide</i></button>
                        <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-sort hide-text\">copy</i></button>
                        <ul class=\"dropdown-menu pull-right\">
                            <li>
                                <div class=\"holder-height\">
                                    <ul class=\"unstyled well-small\">
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Name
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Email
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Telephone
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Zip
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                State/Province
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Shipping City
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Country
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Shipping State
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Name
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Email
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Telephone
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Zip
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                State/Province
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Shipping City
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Country
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Shipping State
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"pull-left\">
                    <div class=\"btn-group icons-holder\">
                        <button class=\"btn\"><i class=\"icon-edit hide-text\">edit</i></button>
                        <button class=\"btn\"><i class=\"icon-copy hide-text\">copy</i></button>
                        <button class=\"btn\"><i class=\"icon-trash hide-text\">remove</i></button>
                    </div>
                    <div class=\"btn-group\">
                        <button data-toggle=\"dropdown\" class=\"btn dropdown-toggle\">Status: <strong>All</strong><span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">only short</a></li>
                            <li><a href=\"#\">this is long text for test</a></li>
                        </ul>
                    </div>
                    <button id=\"open-loading\" class=\"btn\">open loading</button>
                </div>
                <div class=\"pagination pagination-centered\">
                    <label class=\"dib\">Page:</label>
                    <ul class=\"icons-holder\">
                        <li class=\"disabled\"><a href=\"#\"><i class=\"icon-chevron-left hide-text\">prew</i></a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\"><i class=\"icon-chevron-right hide-text\">Next</i></a></li>
                    </ul>
                    <label class=\"dib\">of 10   |   565 records</label>
                </div>
            </div>
        <div class=\"clearfix scroll-holder\">
            <table class=\"grid table-hover table table-bordered table-condensed\">
                <thead>
                    <tr>
                        <th><input type=\"checkbox\" /></th>
                        <th><span class=\"open-row open-row-all\">open</span></th>
                        <th>name <span class=\"caret\"></span></th>
                        <th>Email <span class=\"caret\"></span></th>
                        <th>Telephone <span class=\"caret\"></span></th>
                        <th>ZIP <span class=\"caret\"></span></th>
                        <th>State/Province <span class=\"caret\"></span></th>
                        <th>Country <span class=\"caret\"></span></th>
                        <th>Last Updated <span class=\"caret\"></span></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class=\"\">
                    <tr class=\"selected-row \">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Ada Lindsey</td>
                        <td>adalindsey@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>California</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Account Name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Account Name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Ada Lindsey</td>
                        <td>adalindsey@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>California</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Account Name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 763
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Account Name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Ada Lindsey</td>
                        <td>adalindsey@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>California</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 878
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Account Name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 993
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Account Name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Ada Lindsey</td>
                        <td>adalindsey@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>California</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 1108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Account Name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 1223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Account Name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Ada Lindsey</td>
                        <td>adalindsey@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>California</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 1338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Account Name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 1453
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Account Name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Ada Lindsey</td>
                        <td>adalindsey@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>California</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 1568
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Account Name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 1683
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Account Name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Ada Lindsey</td>
                        <td>adalindsey@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>California</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 1798
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Account Name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 1913
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Account Name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Ada Lindsey</td>
                        <td>adalindsey@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>California</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 2028
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Account Name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 2143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Account Name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div id=\"loading-wrapper\" style=\"display: none;\">

            </div>
            <div id=\"loading-frame\" class=\"loading-frame\" style=\"display: none;\">
                <div class=\"box well\">
                    <img src=\"";
        // line 2207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/loader.gif"), "html", null, true);
        echo "\" alt=\"\">
                    Loading . . .
                </div>
            </div>
            <script type=\"text/javascript\">
                require(['jquery'],
                function(\$) {
                    \$(document).ready(function() {
                        var _qtyTh = \$('table.grid thead th').size();
                        \$('table.grid .grid-info td').attr('colspan', _qtyTh);
                        \$('table.grid tbody tr:not(.grid-info)').each(function(){
                            var _myRow = \$(this);
                            \$(this).find('span.open-row').click(function(){
                                \$(_myRow).toggleClass('open-tr');
                                \$(_myRow).next().toggleClass('hide');
                            });
                        });
                        \$('span.open-row-all').click(function(){
                            if( \$(this).parent().hasClass(\"open-tr\")){
                                \$(this).parent().removeClass('open-tr');
                                \$('table.grid tbody tr:not(.grid-info)').each(function(){
                                    var _myRow = \$(this);
                                    \$(_myRow).removeClass('open-tr');
                                    \$(_myRow).next().addClass('hide');
                                });
                            }else{
                                \$(this).parent().addClass('open-tr');
                                \$('table.grid tbody tr:not(.grid-info)').each(function(){
                                    var _myRow = \$(this);
                                    \$(_myRow).addClass('open-tr');
                                    \$(_myRow).next().removeClass('hide');
                                    console.log(\$(_myRow).next());
                                });
                            }
                        });
                        /* js for loader show */
                        \$('#open-loading').click(function(){
                            \$('#loading-wrapper , #loading-frame').css({
                                'display' : 'block'
                            })
                        });
                        \$('#loading-wrapper').click(function(){
                            \$('#loading-wrapper , #loading-frame').css({
                                'display' : 'none'
                            })
                        });
                        /* js for loader show --end */
                        /* select row */
                        console.clear();
                        \$('table.grid tbody td > input:checkbox').each(function(){
                            if(\$(this).attr('checked')=='checked'){
                                \$(this).parent().parent().addClass('selected-row');
                            }
                            \$(this).click(function(){
                                if(\$(this).attr('checked')=='checked'){
                                    \$(this).parent().parent().addClass('selected-row');
                                }else{
                                    \$(this).parent().parent().removeClass('selected-row');
                                }


                            //    \$(this).parent().parent().toggleClass('selected-row');
                            });
                        });
                        /* select row -- end*/
                    });
                });
            </script>
        </div>

    </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:gridPageWithoutBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2321 => 2207,  2254 => 2143,  2136 => 2028,  2018 => 1913,  1900 => 1798,  1782 => 1683,  1664 => 1568,  1546 => 1453,  1428 => 1338,  1310 => 1223,  1192 => 1108,  1074 => 993,  956 => 878,  838 => 763,  720 => 648,  602 => 533,  484 => 418,  257 => 83,  207 => 33,  277 => 76,  268 => 73,  251 => 64,  185 => 27,  282 => 84,  221 => 41,  212 => 58,  214 => 60,  211 => 59,  191 => 53,  159 => 44,  143 => 109,  23 => 26,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  657 => 277,  649 => 271,  644 => 268,  630 => 257,  611 => 247,  598 => 238,  592 => 237,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  567 => 230,  554 => 223,  536 => 217,  533 => 216,  531 => 215,  498 => 198,  461 => 175,  445 => 163,  443 => 162,  429 => 154,  423 => 151,  411 => 144,  394 => 136,  388 => 133,  357 => 113,  350 => 111,  346 => 110,  338 => 107,  332 => 105,  319 => 98,  313 => 96,  291 => 98,  250 => 80,  238 => 56,  127 => 27,  517 => 168,  503 => 200,  489 => 156,  487 => 192,  482 => 153,  477 => 151,  467 => 144,  462 => 142,  459 => 141,  450 => 139,  442 => 137,  422 => 132,  416 => 130,  401 => 125,  391 => 121,  383 => 118,  353 => 107,  349 => 106,  330 => 104,  324 => 102,  306 => 127,  304 => 96,  288 => 83,  261 => 77,  259 => 70,  256 => 69,  248 => 66,  245 => 209,  243 => 47,  232 => 66,  229 => 65,  224 => 53,  216 => 60,  186 => 50,  147 => 45,  130 => 37,  284 => 94,  280 => 127,  253 => 75,  227 => 95,  223 => 94,  153 => 43,  77 => 13,  520 => 208,  513 => 403,  510 => 402,  506 => 400,  501 => 199,  496 => 397,  474 => 382,  341 => 260,  335 => 106,  273 => 200,  67 => 10,  20 => 1,  161 => 45,  122 => 488,  119 => 88,  671 => 293,  621 => 251,  615 => 242,  610 => 239,  608 => 246,  600 => 232,  596 => 230,  590 => 229,  561 => 224,  558 => 224,  555 => 222,  551 => 222,  548 => 221,  545 => 220,  542 => 219,  523 => 215,  518 => 207,  515 => 212,  511 => 203,  508 => 164,  505 => 209,  502 => 208,  483 => 190,  478 => 188,  475 => 202,  471 => 183,  454 => 196,  449 => 194,  439 => 189,  436 => 188,  431 => 135,  426 => 183,  408 => 177,  396 => 123,  389 => 171,  368 => 116,  355 => 153,  351 => 152,  347 => 262,  344 => 105,  340 => 149,  322 => 136,  311 => 132,  301 => 90,  297 => 88,  286 => 89,  283 => 82,  260 => 84,  237 => 98,  233 => 45,  230 => 63,  226 => 64,  217 => 61,  202 => 33,  197 => 30,  192 => 29,  175 => 24,  182 => 52,  179 => 72,  152 => 50,  149 => 49,  124 => 655,  97 => 70,  84 => 19,  34 => 3,  181 => 23,  137 => 31,  125 => 13,  107 => 18,  90 => 'placeholder',  63 => 19,  53 => 79,  485 => 171,  480 => 152,  472 => 165,  468 => 380,  455 => 159,  451 => 195,  448 => 157,  438 => 160,  434 => 187,  424 => 144,  420 => 150,  418 => 141,  409 => 139,  404 => 126,  398 => 137,  392 => 130,  390 => 134,  385 => 132,  379 => 124,  376 => 161,  373 => 115,  366 => 116,  348 => 113,  333 => 257,  325 => 137,  320 => 107,  316 => 97,  309 => 93,  305 => 129,  294 => 99,  289 => 90,  279 => 84,  275 => 82,  269 => 75,  263 => 72,  252 => 87,  240 => 68,  235 => 44,  219 => 78,  193 => 55,  189 => 75,  170 => 77,  129 => 667,  102 => 16,  65 => 79,  58 => 60,  71 => 55,  270 => 81,  255 => 68,  247 => 79,  244 => 78,  241 => 59,  239 => 54,  236 => 46,  231 => 80,  228 => 42,  225 => 39,  222 => 38,  220 => 92,  218 => 40,  209 => 57,  205 => 34,  180 => 34,  172 => 23,  144 => 4,  93 => 162,  88 => 63,  78 => 21,  201 => 56,  199 => 53,  196 => 33,  187 => 28,  173 => 48,  168 => 13,  166 => 26,  156 => 9,  138 => 16,  136 => 19,  133 => 38,  121 => 90,  112 => 365,  62 => 33,  706 => 189,  699 => 'placeholder',  694 => 185,  691 => 184,  687 => 288,  679 => 173,  672 => 169,  668 => 168,  663 => 166,  659 => 278,  655 => 164,  651 => 163,  647 => 162,  640 => 158,  636 => 157,  632 => 258,  628 => 155,  624 => 154,  617 => 250,  613 => 248,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 144,  589 => 143,  581 => 137,  579 => 136,  576 => 135,  572 => 180,  569 => 231,  566 => 226,  560 => 125,  556 => 123,  550 => 122,  539 => 218,  534 => 119,  530 => 118,  527 => 117,  525 => 211,  507 => 202,  504 => 99,  500 => 162,  493 => 158,  491 => 157,  488 => 93,  481 => 189,  479 => 383,  476 => 98,  469 => 'placeholder',  466 => 379,  464 => 161,  460 => 91,  457 => 90,  453 => 89,  446 => 138,  444 => 191,  441 => 154,  437 => 86,  430 => 'placeholder',  428 => 134,  425 => 152,  419 => 131,  417 => 179,  413 => 129,  410 => 128,  407 => 127,  405 => 84,  402 => 138,  399 => 82,  395 => 131,  393 => 172,  380 => 'placeholder',  378 => 162,  375 => 67,  371 => 114,  364 => 115,  362 => 109,  359 => 114,  354 => 58,  352 => 115,  345 => 'placeholder',  342 => 109,  339 => 103,  334 => 80,  329 => 76,  327 => 103,  323 => 108,  321 => 99,  317 => 133,  314 => 55,  307 => 'placeholder',  303 => 52,  296 => 100,  293 => 85,  290 => 49,  285 => 85,  281 => 93,  278 => 83,  274 => 75,  267 => 80,  265 => 72,  262 => 85,  258 => 70,  215 => 39,  213 => 49,  206 => 58,  203 => 34,  178 => 25,  176 => 33,  171 => 14,  167 => 55,  160 => 62,  154 => 37,  151 => 21,  141 => 70,  132 => 65,  116 => 87,  114 => 83,  104 => 32,  91 => 14,  158 => 52,  146 => 55,  140 => 17,  128 => 14,  118 => 34,  110 => 35,  105 => 102,  100 => 71,  81 => 18,  61 => 16,  87 => 11,  46 => 8,  44 => 11,  76 => 57,  70 => 18,  59 => 2281,  49 => 7,  28 => 2,  25 => 4,  21 => 2,  94 => 245,  89 => 27,  85 => 62,  75 => 102,  68 => 21,  56 => 14,  27 => 5,  31 => 2,  38 => 34,  26 => 2,  24 => 21,  19 => 1,  79 => 149,  72 => 19,  69 => 13,  47 => 12,  40 => 10,  37 => 9,  22 => 2,  246 => 108,  164 => 45,  162 => 39,  157 => 36,  139 => 3,  120 => 25,  115 => 48,  111 => 82,  108 => 44,  101 => 72,  98 => 30,  96 => 14,  83 => 25,  74 => 12,  66 => 20,  55 => 9,  52 => 8,  50 => 15,  43 => 5,  41 => 6,  35 => 2,  32 => 3,  29 => 3,  210 => 35,  204 => 32,  200 => 80,  194 => 28,  190 => 51,  188 => 71,  183 => 24,  177 => 49,  174 => 46,  169 => 45,  165 => 56,  163 => 78,  155 => 23,  150 => 21,  148 => 35,  145 => 16,  142 => 42,  134 => 30,  131 => 15,  126 => 48,  123 => 14,  117 => 39,  113 => 12,  109 => 78,  106 => 33,  103 => 98,  99 => 96,  95 => 167,  92 => 28,  86 => 26,  82 => 23,  80 => 112,  73 => 56,  64 => 9,  60 => 1,  57 => 12,  54 => 'placeholder',  51 => 75,  48 => 74,  45 => 41,  42 => 1,  39 => 4,  36 => 5,  33 => 7,  30 => 2,);
    }
}
