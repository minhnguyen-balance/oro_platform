<?php

/* DoctrineBundle:Collector:db.html.twig */
class __TwigTemplate_5be4ef80b6fdbc790017cb5b9900f072aa249e5c4c0085504a79842157baee94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isXmlHttpRequest")) ? ("WebProfilerBundle:Profiler:ajax_layout.html.twig") : ("WebProfilerBundle:Profiler:layout.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"28\" height=\"28\" class=\"hover-icon\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpiNzNmNTNiYS1jMzQ3LTQ3NDEtODQxZi1hYzAwODZhMGRkNmYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QkFCNDU5RDI2NkNGMTFFM0I0MEZDRDczMDcwNzgyREEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QkFCNDU5RDE2NkNGMTFFM0I0MEZDRDczMDcwNzgyREEiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjdhNGY4NGRhLWM2Y2UtNDI0ZC04OTQyLWE3NDUzZDc3MzgzMCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpiNzNmNTNiYS1jMzQ3LTQ3NDEtODQxZi1hYzAwODZhMGRkNmYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4hKb4LAAAERElEQVR42rRWTUhjZxS9MT8mJv4b4li1/hZ1IohKpThCXIigICIMUiwo0sWsHJCBmc1sZvZ1ZBZuXNQuZjNdWNBuFHRTEF21YAV/i8ZW47+N0agxc8/le9M3j2jTTubC4b28l3znu+eee/OZotEoIXp7eylG3Gc8YHgZXzA+Y3gYVkY6I8i4ZAQYO4xlxm+MXxi/MqL6xcbGxsgSg+Qe4zHjG0VwV7jUNYtRwfDp3v3F+IHxSm1GIsmwwEOTyfQHX5/GQfZvgY0/5fX8dXV1j2ISms3mNyyxjRIYvJ55eXl5hOW0fkDID1qY0EKfIK6vr3H51pjhs2AwSEdHRxSJRBJChHWw3uHhIT6KrPqM6vHy4uKCTk9PyeFwkN1up+TkZLLZbMS1iEc+urq6onA4TOfn57IWnl1ewshUaiR06TPDDwBdfclischVpElKopubm/eZAEq6mJlyOIyEpuzsbNrZ2bn1R/9X6qysLFnfWMNAX18fFRQUUEpKSkJqiLLk5+dTT08PqeFAJm3ScLzY2Nh4jhpMTk7S4uIiwUSQFTUA7soQElutVqk5iLDpyspKam9vl3d8/5q/NqCXNDQ8PExpaWnU2dlJ/f39tLS0RKurq7S9vS1SYwMgxSZRPywkdeHawmAej4fy8vKorKxMyHZ3d2l8fJz8fj+NjIw4jRn+3tXVVaksTDk5OVRfX0/V1dVUUlJChYWFkoFGisyRDUixSbh4a2uLWCVRZ2FhQYgQGRkZIN7k28/1hKGWlhYHJL0tIFN6ero41eVyCanWa2dnZ7f+DgpMT0+H+daul9SOhe4iDIVCgv8aqpVsRpdel5eXi2yJDGRXWio9HzESbg4ODlJtba0UH06LZ7rcFjCR2+2mmpoaGhgYwKMtY+N/z656yUFzc3OCtbU1qQ1GFdoCk0TvUmwIpgGQCUYggFoXFxdTQ0MDNTU10fz8PFVUVPxoJCwaHR0VZ7W2tlJbW5tIAdfhGdri+PhYXIo6YwOojdZ3cGJubq60BVwdCARoamqKhoaGxPFM7DW2xZ8dHR33MLi1SE1NpaqqKiHGxIBEcCmygGRae0CFvb092dj6+rq0xcHBwT9Dmh09MTGBfsvWE4abm5ttus8JC0g/MzODyW7VTAPf2iDNpwioocpn1giRVtDn80ktPsadxsAUgnE4MBmieklnuKl9mH2cvhgETY4aaf978cqHjJxOp9S7sbGRuru78RlHxwd6wlbGdww3k7kxCzG8V1ZW3jsTbQHoN6C1BQYGgJYoKioir9crbcH/sTDLHuMJY8JkMEkZjoqMrxmZUITfp+3v74vNT05O5PiBo4NGCgJklJmZKS7G0OB2wQEZdgfZT4y36mBMRkJCHWdnZz0q4y8ZX6k5aFcnbosymVboiAIOLhjQF2rxOcbPDP8HksfRBjBWPqMQfaRO2U5FivhbGSKgxtemIo8Z7wQYAIybAWq/AHFEAAAAAElFTkSuQmCC\" />
        <img width=\"28\" height=\"28\" style=\"display: none;\"  class=\"active-icon\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpiNzNmNTNiYS1jMzQ3LTQ3NDEtODQxZi1hYzAwODZhMGRkNmYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QjlCQ0QzRUQ2NkNGMTFFM0I0MEZDRDczMDcwNzgyREEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QjlCQ0QzRUM2NkNGMTFFM0I0MEZDRDczMDcwNzgyREEiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjdhNGY4NGRhLWM2Y2UtNDI0ZC04OTQyLWE3NDUzZDc3MzgzMCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpiNzNmNTNiYS1jMzQ3LTQ3NDEtODQxZi1hYzAwODZhMGRkNmYiLz4gPC9y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\" />
        <span class=\"sf-toolbar-status";
        // line 7
        if ((50 < $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount"))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount"), "html", null, true);
        echo "</span>
        ";
        // line 8
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount") > 0)) {
            // line 9
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time") * 1000)), "html", null, true);
            echo " ms</span>
        ";
        }
        // line 11
        echo "        ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount") > 0)) {
            // line 12
            echo "            <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\"> </span>
        ";
        }
        // line 14
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "    ";
        ob_start();
        // line 16
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>DB Queries</b>
            <span>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 22
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time") * 1000)), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Invalid entities</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 26
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount") > 0)) ? ("red") : ("green"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount"), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 32
    public function block_menu($context, array $blocks = array())
    {
        // line 33
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
    <strong>Doctrine</strong>
    <span class=\"count\">
        <span>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount"), "html", null, true);
        echo "</span>
        <span>";
        // line 38
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time") * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
    }

    // line 43
    public function block_panel($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        if (("explain" == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
            // line 45
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DoctrineBundle:Profiler:explain", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => "db", "connectionName" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "get", array(0 => "connection"), "method"), "query" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "get", array(0 => "query"), "method"))));
            // line 50
            echo "
    ";
        } else {
            // line 52
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
    }

    // line 56
    public function block_queries($context, array $blocks = array())
    {
        // line 57
        echo "    <h2>Queries</h2>

    ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries"));
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
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 60
            echo "        <h3>Connection <em>";
            echo twig_escape_filter($this->env, (isset($context["connection"]) ? $context["connection"] : $this->getContext($context, "connection")), "html", null, true);
            echo "</em></h3>
        ";
            // line 61
            if (twig_test_empty((isset($context["queries"]) ? $context["queries"] : $this->getContext($context, "queries")))) {
                // line 62
                echo "            <p>
                <em>No queries.</em>
            </p>
        ";
            } else {
                // line 66
                echo "            <p>
                <button type=\"button\" class=\"sf-button\" onclick=\"expandAllQueries(this);\" data-action=\"expand\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Expand all queries</span>
                        </span>
                    </span>
                </button>
            </p>
            <ul class=\"alt\" id=\"queriesPlaceholder-";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\">
                ";
                // line 76
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["queries"]) ? $context["queries"] : $this->getContext($context, "queries")));
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
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 77
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
                    echo "\" data-extra-info=\"";
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "executionMS") * 1000)), "html", null, true);
                    echo "\" data-target-id=\"";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "\">
                        <div style=\"margin-top: 4px\" id=\"queryNo-";
                    // line 78
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "parent"), "loop"), "index"), "html", null, true);
                    echo "\">
                            <div class=\"query-section\" data-state=\"collapsed\" onclick=\"return expandQuery(this);\" title=\"Expand query\" data-target-id=\"code-";
                    // line 79
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "parent"), "loop"), "index"), "html", null, true);
                    echo "\" style=\"cursor: pointer;\">
                                <img alt=\"+\" src=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
                    echo "\" style=\"display: inline;\" />
                                <img alt=\"-\" src=\"";
                    // line 81
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
                    echo "\" style=\"display: none;\" />
                                <span style=\"display: none\">Shrink query</span>
                                <span id=\"smallcode-";
                    // line 83
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "parent"), "loop"), "index"), "html", null, true);
                    echo "\">
                                    ";
                    // line 84
                    echo $this->env->getExtension('doctrine_extension')->minifyQuery($this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "sql"));
                    echo "
                                </span>
                            </div>
                            <code id=\"code-";
                    // line 87
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "parent"), "loop"), "index"), "html", null, true);
                    echo "\">
                                ";
                    // line 88
                    echo SqlFormatter::format($this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "sql"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "parent"), "loop"), "index"));
                    echo "
                            </code>
                            <span id=\"original-query-";
                    // line 90
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "parent"), "loop"), "index"), "html", null, true);
                    echo "\" style=\"display: none;\">
                                ";
                    // line 91
                    echo $this->env->getExtension('doctrine_extension')->replaceQueryParameters($this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "sql"), $this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "params"));
                    echo "
                            </span>
                            <small>
                                <strong>Parameters</strong>: ";
                    // line 94
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "params")), "html", null, true);
                    echo " <br />
                                [<span id=\"expandParams-";
                    // line 95
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "parent"), "loop"), "index"), "html", null, true);
                    echo "\" onclick=\"javascript:toggleRunnableQuery(this);\" target-data-id=\"original-query-";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "parent"), "loop"), "index"), "html", null, true);
                    echo "\" style=\"cursor: pointer;\">Display runnable query</span>]<br/>
                                <strong>Time</strong>: ";
                    // line 96
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "executionMS") * 1000)), "html", null, true);
                    echo " ms
                            </small>
                            ";
                    // line 98
                    if ($this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "explainable")) {
                        // line 99
                        echo "                                [<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("panel" => "db", "token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "page" => "explain", "connection" => (isset($context["connection"]) ? $context["connection"] : $this->getContext($context, "connection")), "query" => (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))), "html", null, true);
                        echo "\" onclick=\"return explain(this);\" style=\"text-decoration: none;\" title=\"Explains the query\" data-target-id=\"explain-";
                        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "parent"), "loop"), "index"), "html", null, true);
                        echo "\" >
                                    <img alt=\"+\" src=\"";
                        // line 100
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
                        echo "\" style=\"display: inline; width: 12px; height: 12px;\" />
                                    <img alt=\"-\" src=\"";
                        // line 101
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
                        echo "\" style=\"display: none; width: 12px; height: 12px;\" />
                                    <span style=\"vertical-align:top\">Explain query</span>
                                </a>]
                            ";
                    } else {
                        // line 105
                        echo "                                This query cannot be explained
                            ";
                    }
                    // line 107
                    echo "                        </div>
                        ";
                    // line 108
                    if ($this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "explainable")) {
                        // line 109
                        echo "                        <div id=\"explain-";
                        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "parent"), "loop"), "index"), "html", null, true);
                        echo "\" class=\"loading\"></div>
                        ";
                    }
                    // line 111
                    echo "                    </li>
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
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "            </ul>
        ";
            }
            // line 115
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
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "
    <h2>Database Connections</h2>

    ";
        // line 119
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "connections")) {
            // line 120
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "connections")));
            // line 121
            echo "    ";
        } else {
            // line 122
            echo "        <p>
            <em>No connections.</em>
        </p>
    ";
        }
        // line 126
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 129
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "managers")) {
            // line 130
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "managers")));
            // line 131
            echo "    ";
        } else {
            // line 132
            echo "        <p>
            <em>No entity managers.</em>
        </p>
    ";
        }
        // line 136
        echo "
    <h2>Mapping</h2>

    ";
        // line 139
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "entities"));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 140
            echo "        <h3>Manager <em>";
            echo twig_escape_filter($this->env, (isset($context["manager"]) ? $context["manager"] : $this->getContext($context, "manager")), "html", null, true);
            echo "</em></h3>
        ";
            // line 141
            if (twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 142
                echo "            <p><em>No loaded entities.</em></p>
        ";
            } else {
                // line 144
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 152
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 153
                    echo "                    <tr>
                        <td>";
                    // line 154
                    echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                    echo "</td>
                        <td>
                            ";
                    // line 156
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "mappingErrors", array(), "any", false, true), (isset($context["manager"]) ? $context["manager"] : $this->getContext($context, "manager")), array(), "array", false, true), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), array(), "array", true, true)) {
                        // line 157
                        echo "                                <ul>
                                    ";
                        // line 158
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "mappingErrors"), (isset($context["manager"]) ? $context["manager"] : $this->getContext($context, "manager")), array(), "array"), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 159
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 161
                        echo "                                </ul>
                            ";
                    } else {
                        // line 163
                        echo "                                Valid
                            ";
                    }
                    // line 165
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 168
                echo "                </tbody>
            </table>
        ";
            }
            // line 171
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var imgs = link.children,
                target = link.getAttribute('data-target-id');

            Sfjs.toggle(target, imgs[0], imgs[1])
                .load(
                    target,
                    link.href,
                    null,
                    function(xhr, el) {
                        el.innerHTML = 'An error occurred while loading the details';
                        Sfjs.removeClass(el, 'loading');
                    }
                );

            return false;
        }

        function expandAllQueries(button) {
            var queries = document.getElementsByClassName('query-section'),
                i = queries.length,
                action = button.getAttribute('data-action');

            if (action == 'expand') {
                button.getElementsByClassName('btn-bg')[0].innerHTML = 'Collapse all queries';

                while (i--) {
                    if (queries[i].getAttribute('data-state') == 'collapsed') {
                        expandQuery(queries[i]);
                    }
                }
            } else {
                button.getElementsByClassName('btn-bg')[0].innerHTML = 'Expand all queries';

                while (i--) {
                    if (queries[i].getAttribute('data-state') == 'expanded') {
                        expandQuery(queries[i]);
                    }
                }
            }

            button.setAttribute('data-action', action == 'expand' ? 'collapse' : 'expand');
        }

        function expandQuery(link) {
            var sections = link.children,
                target = link.getAttribute('data-target-id'),
                targetId = target.replace('code', ''),
                queriesParameters = document.getElementById('original-query' + targetId);

            if (queriesParameters.style.display != 'none') {
                queriesParameters.style.display = 'none';
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById('expandParams' + targetId).innerHTML = 'Display runnable query';
            }

            if (document.getElementById('small' + target).style.display != 'none') {
                document.getElementById('small' + target).style.display = 'none';
                document.getElementById(target).style.display = 'inline';

                sections[0].style.display = 'none';
                sections[1].style.display = 'inline';
                sections[2].style.display = 'inline';

                link.setAttribute('data-state', 'expanded');
            } else {
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById(target).style.display = 'none';

                sections[0].style.display = 'inline';
                sections[1].style.display = 'none';
                sections[2].style.display = 'none';

                link.setAttribute('data-state', 'collapsed');
            }

            return false;
        }

        function toggleRunnableQuery(target) {
            var targetId = target.getAttribute('target-data-id').replace('original-query', ''),
                targetElement = document.getElementById(target.getAttribute('target-data-id')),
                elem;

            if (targetElement.style.display != 'block') {
                targetElement.style.display = 'block';
                target.innerHTML = 'Hide runnable query';

                document.getElementById('smallcode' + targetId).style.display = 'none';
                document.getElementById('code' + targetId).style.display = 'none';

                elem = document.getElementById('code' + targetId).parentElement.children[0];

                elem.children[0].style.display = 'inline';
                elem.children[1].style.display = 'none';
                elem.children[2].style.display = 'none';

            } else {
                targetElement.style.display = 'none';
                target.innerHTML = 'Display runnable query';

                document.getElementById('smallcode' + targetId).style.display = 'inline';
            }
        }

    //]]></script>

    <style>
        h3 {
            margin-bottom: 0px;
        }

        code {
            display: none;
        }

        code pre {
            padding: 5px;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 171,  480 => 168,  472 => 165,  468 => 163,  455 => 159,  451 => 158,  448 => 157,  438 => 153,  434 => 152,  424 => 144,  420 => 142,  418 => 141,  409 => 139,  404 => 136,  398 => 132,  392 => 130,  390 => 129,  385 => 126,  379 => 122,  376 => 121,  373 => 120,  366 => 116,  348 => 113,  333 => 111,  325 => 109,  320 => 107,  316 => 105,  309 => 101,  305 => 100,  294 => 98,  289 => 96,  279 => 95,  275 => 94,  269 => 91,  263 => 90,  252 => 87,  240 => 83,  235 => 81,  219 => 78,  193 => 76,  189 => 75,  170 => 61,  129 => 50,  102 => 33,  65 => 15,  58 => 12,  71 => 19,  270 => 95,  255 => 93,  247 => 91,  244 => 89,  241 => 87,  239 => 86,  236 => 84,  231 => 80,  228 => 82,  225 => 79,  222 => 78,  220 => 77,  218 => 76,  209 => 74,  205 => 73,  180 => 70,  172 => 62,  144 => 57,  93 => 9,  88 => 26,  78 => 40,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  173 => 74,  168 => 72,  166 => 71,  156 => 66,  138 => 57,  136 => 54,  133 => 52,  121 => 46,  112 => 38,  62 => 14,  706 => 189,  699 => 'placeholder',  694 => 185,  691 => 184,  687 => 179,  679 => 173,  672 => 169,  668 => 168,  663 => 166,  659 => 165,  655 => 164,  651 => 163,  647 => 162,  640 => 158,  636 => 157,  632 => 156,  628 => 155,  624 => 154,  617 => 150,  613 => 149,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 144,  589 => 143,  581 => 137,  579 => 136,  576 => 135,  572 => 180,  569 => 135,  566 => 134,  560 => 125,  556 => 123,  550 => 122,  539 => 120,  534 => 119,  530 => 118,  527 => 117,  525 => 116,  507 => 100,  504 => 99,  500 => 95,  493 => 'placeholder',  491 => 172,  488 => 93,  481 => 128,  479 => 99,  476 => 98,  469 => 'placeholder',  466 => 96,  464 => 161,  460 => 91,  457 => 90,  453 => 89,  446 => 156,  444 => 88,  441 => 154,  437 => 86,  430 => 'placeholder',  428 => 85,  425 => 84,  419 => 181,  417 => 134,  413 => 140,  410 => 90,  407 => 87,  405 => 84,  402 => 83,  399 => 82,  395 => 131,  393 => 69,  380 => 'placeholder',  378 => 68,  375 => 67,  371 => 119,  364 => 'placeholder',  362 => 63,  359 => 62,  354 => 58,  352 => 115,  345 => 'placeholder',  342 => 56,  339 => 55,  334 => 80,  329 => 76,  327 => 67,  323 => 108,  321 => 62,  317 => 60,  314 => 55,  307 => 'placeholder',  303 => 52,  296 => 99,  293 => 50,  290 => 49,  285 => 39,  281 => 35,  278 => 34,  274 => 97,  267 => 'placeholder',  265 => 31,  262 => 30,  258 => 88,  215 => 'placeholder',  213 => 18,  206 => 36,  203 => 34,  178 => 66,  176 => 33,  171 => 73,  167 => 27,  160 => 62,  154 => 21,  151 => 63,  141 => 56,  132 => 53,  116 => 37,  114 => 16,  104 => 7,  91 => 31,  158 => 67,  146 => 48,  140 => 46,  128 => 42,  118 => 38,  110 => 34,  105 => 40,  100 => 32,  81 => 20,  61 => 41,  87 => 20,  46 => 10,  44 => 12,  76 => 82,  70 => 17,  59 => 15,  49 => 9,  28 => 3,  25 => 4,  21 => 2,  94 => 29,  89 => 24,  85 => 19,  75 => 17,  68 => 16,  56 => 14,  27 => 4,  31 => 5,  38 => 3,  26 => 6,  24 => 2,  19 => 1,  79 => 22,  72 => 18,  69 => 25,  47 => 8,  40 => 8,  37 => 10,  22 => 1,  246 => 84,  164 => 63,  162 => 57,  157 => 56,  139 => 55,  120 => 43,  115 => 43,  111 => 15,  108 => 37,  101 => 39,  98 => 40,  96 => 5,  83 => 22,  74 => 49,  66 => 24,  55 => 11,  52 => 7,  50 => 8,  43 => 8,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  210 => 77,  204 => 79,  200 => 72,  194 => 74,  190 => 72,  188 => 71,  183 => 71,  177 => 65,  174 => 66,  169 => 63,  165 => 60,  163 => 70,  155 => 59,  150 => 52,  148 => 59,  145 => 16,  142 => 59,  134 => 'placeholder',  131 => 42,  126 => 45,  123 => 44,  117 => 42,  113 => 35,  109 => 37,  106 => 36,  103 => 33,  99 => 32,  95 => 29,  92 => 28,  86 => 26,  82 => 192,  80 => 41,  73 => 14,  64 => 17,  60 => 15,  57 => 14,  54 => 21,  51 => 14,  48 => 13,  45 => 9,  42 => 6,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
