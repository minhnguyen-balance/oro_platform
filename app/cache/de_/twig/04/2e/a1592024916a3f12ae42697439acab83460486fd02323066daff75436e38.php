<?php

/* SecurityBundle:Collector:security.html.twig */
class __TwigTemplate_042ea1592024916a3f12ae42697439acab83460486fd02323066daff75436e38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user")) {
            // line 5
            echo "        ";
            $context["color_code"] = ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled") && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated"))) ? ("green") : ("yellow"));
            // line 6
            echo "        ";
            $context["authentication_color_code"] = ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled") && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated"))) ? ("green") : ("red"));
            // line 7
            echo "        ";
            $context["authentication_color_text"] = ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled") && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated"))) ? ("Yes") : ("No"));
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context["color_code"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled")) ? ("red") : ("black"));
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user")) {
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Logged in as</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["color_code"]) ? $context["color_code"] : $this->getContext($context, "color_code")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user"), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Authenticated</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["authentication_color_code"]) ? $context["authentication_color_code"] : $this->getContext($context, "authentication_color_code")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["authentication_color_text"]) ? $context["authentication_color_text"] : $this->getContext($context, "authentication_color_text")), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 21
            if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass") != null)) {
                // line 22
                echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token class</b>
                ";
                // line 24
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass"));
                echo "
            </div>
            ";
            }
            // line 27
            echo "        ";
        } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled")) {
            // line 28
            echo "            You are not authenticated.
        ";
        } else {
            // line 30
            echo "            The security is disabled.
        ";
        }
        // line 32
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "    ";
        ob_start();
        // line 34
        echo "        <img width=\"28\" height=\"28\" class=\"hover-icon\" alt=\"Security\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAMAAABF0y+mAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpiNzNmNTNiYS1jMzQ3LTQ3NDEtODQxZi1hYzAwODZhMGRkNmYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QkFFNzY2OUU2NkNGMTFFM0I0MEZDRDczMDcwNzgyREEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QkFFNzY2OUQ2NkNGMTFFM0I0MEZDRDczMDcwNzgyREEiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjdhNGY4NGRhLWM2Y2UtNDI0ZC04OTQyLWE3NDUzZDc3MzgzMCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpiNzNmNTNiYS1jMzQ3LTQ3NDEtODQxZi1hYzAwODZhMGRkNmYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4HZVEGAAAARVBMVEU/Pz////8/Pz8/Pz8/Pz8/Pz8/Pz8/Pz8/Pz8/Pz8/Pz8/Pz8/Pz8/Pz8/Pz8/Pz8/Pz8/Pz8/Pz8/Pz8/Pz8/Pz8/Pz+QKxbrAAAAFnRSTlMAAA4dKzlWV2RygI+dq8PEyMzW3eP2SbnvawAAAIRJREFUKM/N0tsOgyAMBuCuTlYOOsSN93/UkWbgIQX1zv+Ci37hTwiFRyPQxjFWMiaM1ZxAKInR5JxFVAoZhVr0IQy4urlGCil0iEJtl2p9pZac0pQOCfvwz1Oo1RlpeWdBl9EKaDNqoRat4xi8+itN/Mzf3ZwnvCYTwGtrPHkfLdjN8AcdGCNz3I1AxQAAAABJRU5ErkJggg==\" />
        <img width=\"28\" height=\"28\" style=\"display: none;\"  class=\"active-icon\" alt=\"Security\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpiNzNmNTNiYS1jMzQ3LTQ3NDEtODQxZi1hYzAwODZhMGRkNmYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QkEwQ0Q2QjI2NkNGMTFFM0I0MEZDRDczMDcwNzgyREEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QkEwQ0Q2QjE2NkNGMTFFM0I0MEZDRDczMDcwNzgyREEiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjdhNGY4NGRhLWM2Y2UtNDI0ZC04OTQyLWE3NDUzZDc3MzgzMCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpiNzNmNTNiYS1jMzQ3LTQ3NDEtODQxZi1hYzAwODZhMGRkNmYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6YvsssAAADzUlEQVR42txWTWwbVRCe511v1ms79rq2mzqUNElbFSpCxAGkJIc2tBfKAXGoxAH6F+XSSOmhzQEh1AoOIP7EIYAK3LihAj0ggRBVJXJoRRAI2kJLmqZtfhwncWJn47XX611m7N3WxhsnWEoOPGv2rXfnzffme/OzzDRN2Mzhgk0emw7IM8bgyljmJ7zv2WCsRcLg8eL5435uQ8E4F4P2qFteXpztIsDIRseNXjAho5lw5+8/owQYAHiI2N8burweI+cvJffRnJgaV9bSDYS2igBBPrmQkAmQsz3seFSkaQxlLSM+XLNPdDNo4F01+dENE4r2UfR8nudLj+01xfl7CxSe6Xm2sW/wtYN0/9mHb/5wdeTHtKW4E3X76CbavMNfCzCPdBaMhxhFQNtDayaw374bjYd0l0T3ckDi4P3PLz6XWVEOen3+ZNdub1FXxXOZj99NMWCOXvrliCQ0eATbtlkjD9mteG5gMpmXUWA8oYFhsqfw+QCCMVtJFIhSYIK7WhgzXFjFWFUeltCrNigkpia2NLftLf7J5AqwsKyDMns/RO8erEF7kW07Gp12rOlEpfnAtlkO6DCkb794968jQ8NagygVAXJZNXf29PFRemcrqZpRopQ5U+oLhL243l3lYWXMAFwcmTh1c1J54dKFj3/xB6PN2Uwq39IUWHrv/FdnOI4PP9/depl0PYILRA5LFWMOHhqMzqHCtmlTCrbbJgye+6Q7bfhf37MrCG2tQ8UqQUNRC8C8HMg+/oMX+8+9YkLpF4611Ka0zDZdKyhVsgaIobb9yziT/HvQMwm9atndud+mdCF+LwWrUGoahssfDEsNHi/vGDRpVQePL9BRq0em0VPJF+wkHaJU4InQan18wjSklPRKAebgIeWVkkpCJNa6KqCaMyAxPZ6PtT5W/B/Z5kxpOa0OaWE1RzyuT984Nnpk6CNMWElyrPzawuKXw69ef7Lr0NOZnLHuAm7FDFSUtu1b3DD8zbWXCqvYEXgGMdktb+840AbwX1uMQ2n7/a665rL5tF5XizLL06J8tyvpxUyhkDe9flnkeDdXbw/MqYqezSh5QZR4j7fRXXGGs5O3p6PN7bHkzNjy2RM9V2kHPYeOxg6ffGtvvR3+7YEDV+amJ1RMCe6dC7d7tWxW+/XnkTuU1U+gvIzSSVGPMkUbpABE2UqfIHVgUj+dRFlCoSh+hE4D5WvyMIVyg1oXSpyO0lqAgQGPowTrAExQi7M232Q5Q/ZnmOUBeeO3gOYohSygMHWhOgBX6KSoOFENpz5ttcIE+99/ef8jwACM3pu+eMVxWQAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["color_code"]) ? $context["color_code"] : $this->getContext($context, "color_code")), "html", null, true);
        echo "\"></span>
        ";
        // line 37
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user")) {
            echo "<div class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user"), "html", null, true);
            echo "</div>";
        }
        // line 38
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 39
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 42
    public function block_menu($context, array $blocks = array())
    {
        // line 43
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAYAAABaKIzgAAADqUlEQVR42u2YXUiTYRTHs6wbg4Toru4iI7qIrgoFv3XOj0BRpoE4U5n4AV6UOg0UhhaKwvLCr2ZeTPwIsbL50Yb5Oc0hrFU2WY55sUJB2wK3qbn+J15jvJhvay9S4MWfPe95znme357znPOOHXO73f+FjkD/OdDQ0FBf5DPo6bi4OC0Wch+WaD/a11vQyxR82KJ9vQUN2QvWarUWPE9CY4xeu1yucfqkZ5Ymyd8H0BBvQcM8gqsgAdmgqJaWlgdRUVEOgUBgLy4uHpqamhLDHsHMC8h/PwihUOiuqKhwNTU12eVyuV0mkzkSEhJ2WaBhvoAKIH/Gfi45Ofmj5+KJiYnvYQ+kwmD8BGzI0tLSzfX19ZmJiQlNa2vrbG1traGnp2fObDbPNTY22vkAZQdfjY2NdbJBpqenKWV+BOsZS6qsrLSvra31ZmVlLdFzUlKSDRnZonF0dLQTV2WEfPgGvYmUu9igSL+ITpMNKhKJtm02mzI9Pd2CNNt0Ol2P1Wp9otfrB1Qqlaazs3M4LS3ts8lkGuQb9EZeXt4q6+5tOxwOIeZOskGbm5uNdXV1wzQeGBgYWlhYaKD7nZGRYYJfaUFBwWJ4ePgOxg/xucsn6BW1Wv0Ui/4Cxam8oS8AHWeDjoyMvMzOzjbjNB2wS4uKijRkl0gkeqfTmY5r5ED/dNjtdhmzVyhfoGehXJziDtOkv+P5LnSeINmg/f39zwC1kpqa+hX2O4A2kl2j0SgxV0vjhoYGPb5sH9+p99/Y2IiLiYn5CYq79w22WOjUfqBVVVU6hUIxRWnFPb4Hyfv6+sbb29ubl5eXJR0dHaMGg0GBzsFbMfnV19efEYvFtwGn25sjgJycnOdQJHxOsEGR2q2lpaXHiLNS3y0pKXm1V/2ZmZm6wsLCWap8vtpTRHV19XUs+OWgtwpAPtTU1FyCf7inPTc314gsPAKkiR0THx+/ib76Dmvv8gF6KyUlRUdjLsFvBv5JbDtOdBG9VI6qV7e1tVm6u7st8/Pzc0aj8YVUKl2h4uQDVEIt5E9AqYrhn7ffHNqSKz8/34BTny0rK3uLwvoUGRm5zdsrtKurq436HDQKjR2gYahGqVS2UJwX8h30b3UEygXK/m3K9bvTy1j+QfE26cVcIonGHHAcsfyABqNCV3+z2AUSF5i3sbQf7estaBB0H1J5VPUgVA5dZFTO2MY4xR2rYvYL8hY0gAkKhsI8dA0KJNGYsXGLOzaY2S/g6A+II1CWfgAh4q3QhpOWjAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
    <strong>Security</strong>
</span>
";
    }

    // line 49
    public function block_panel($context, array $blocks = array())
    {
        // line 50
        echo "    <h2>Security</h2>
    ";
        // line 51
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user")) {
            // line 52
            echo "        <table>
            <tr>
                <th>Username</th>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Authenticated?</th>
                <td>
                    ";
            // line 60
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated")) {
                // line 61
                echo "                        yes
                    ";
            } else {
                // line 63
                echo "                        no ";
                if ((!twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles")))) {
                    echo "<em>(probably because the user has no roles)</em>";
                }
                // line 64
                echo "                    ";
            }
            // line 65
            echo "                </td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles")), "html", null, true);
            echo "</td>
            </tr>
            ";
            // line 71
            if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass") != null)) {
                // line 72
                echo "            <tr>
                <th>Token class</th>
                <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            // line 77
            echo "        </table>
    ";
        } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled")) {
            // line 79
            echo "        <p>
            <em>No token</em>
        </p>
    ";
        } else {
            // line 83
            echo "        <p>
            <em>The security component is disabled</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SecurityBundle:Collector:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 83,  204 => 79,  200 => 77,  194 => 74,  190 => 72,  188 => 71,  183 => 69,  177 => 65,  174 => 64,  169 => 63,  165 => 61,  163 => 60,  155 => 55,  150 => 52,  148 => 51,  145 => 50,  142 => 49,  134 => 43,  131 => 42,  126 => 39,  123 => 38,  117 => 37,  113 => 36,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  95 => 28,  92 => 27,  86 => 24,  82 => 22,  80 => 21,  73 => 19,  64 => 15,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
