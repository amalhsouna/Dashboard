<?php

/* BladeTesterCalendarBundle:Event:listByWeek.html.twig */
class __TwigTemplate_6f4fd4489de86ea9155905ca11182ac32ba22b55b3155e3421e8ee9ad376ad59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BladeTesterCalendarBundle:Event:base.html.twig", "BladeTesterCalendarBundle:Event:listByWeek.html.twig", 1);
        $this->blocks = array(
            'calendar_date_selector' => array($this, 'block_calendar_date_selector'),
            'calendar_body' => array($this, 'block_calendar_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BladeTesterCalendarBundle:Event:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_calendar_date_selector($context, array $blocks = array())
    {
        // line 4
        echo "    <table class=\"dp-monthtable\" role=\"presentation\">
        <tbody>
        <tr id=\"dp_0_header\" class=\"monthtableHeader\">
            <td colspan=\"5\" id=\"dp_0_cur\" class=\"dp-cell dp-sb-cur\">
                <span class=\"calendar-date-current-date\">
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Semaine de %from_day%, %from_month%  %from_year% to %to_day%, %to_month% of %to_year%", array("%from_day%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 0, array(), "array"), "d"), "%from_month%" => $this->env->getExtension('translator')->trans(twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 0, array(), "array"), "F")), "%from_year%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 0, array(), "array"), "Y"), "%to_day%" => twig_date_format_filter($this->env, $this->getAttribute(        // line 10
(isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), (twig_length_filter($this->env, (isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates"))) - 1), array(), "array"), "d"), "%to_month%" => $this->env->getExtension('translator')->trans(twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), (twig_length_filter($this->env, (isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates"))) - 1), array(), "array"), "F")), "%to_year%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), (twig_length_filter($this->env, (isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates"))) - 1), array(), "array"), "Y"))), "html", null, true);
        echo "
                </span>
            </td>
            <td colspan=\"2\" class=\"dp-cell dp-sb-nav\">
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_list_by_week", array("year" => twig_date_format_filter($this->env, (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous")), "Y"), "month" => twig_date_format_filter($this->env, (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous")), "m"), "day" => twig_date_format_filter($this->env, (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous")), "d"))), "html", null, true);
        echo "\" class=\"btn\">&lt;</a>
                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_list_by_week", array("year" => twig_date_format_filter($this->env, (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")), "Y"), "month" => twig_date_format_filter($this->env, (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")), "m"), "day" => twig_date_format_filter($this->env, (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")), "d"))), "html", null, true);
        echo "\" class=\"btn\">&gt;</a>
            </td>
        </tr>
        </tbody>
    </table>
";
    }

    // line 22
    public function block_calendar_body($context, array $blocks = array())
    {
        // line 23
        echo "    <section class=\"schedule-content schedule-view-week\">
         <div class=\"divScroll1\">
        <ul class=\"list-table\">
            <li class=\"list-table-header list-table-days\">
                <ul class=\"list-table-row\">
                    <li class=\"list-table-header-cell\"></li>
                    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 30
            echo "                        <li class=\"list-table-header-cell\">
                            <abbr title=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_date_format_filter($this->env, $context["date"], "l")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_date_format_filter($this->env, $context["date"], "D")), "html", null, true);
            echo "</abbr>
                            <time datetime=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "Y-m-d"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%month%-%day%", array("%day%" => twig_date_format_filter($this->env, $context["date"], "d"), "%month%" => twig_date_format_filter($this->env, $context["date"], "m"))), "html", null, true);
            echo "</time>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </ul>
            </li>

            <li class=\"list-table-body list-table-hours\">
                ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 23));
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
        foreach ($context['_seq'] as $context["_key"] => $context["hour"]) {
            // line 40
            echo "                    <ul class=\"list-table-row\">
                        <li class=\"list-table-cell list-table-hour\">";
            // line 41
            echo twig_escape_filter($this->env, $context["hour"], "html", null, true);
            echo ":00</li>
                        ";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                // line 43
                echo "                            <li class=\"list-table-cell\">
                                ";
                // line 44
                $this->loadTemplate("BladeTesterCalendarBundle:Event:group.html.twig", "BladeTesterCalendarBundle:Event:listByWeek.html.twig", 44)->display(array_merge($context, array("events" => $this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "allByDateAndTime", array(0 => $context["date"], 1 => $context["hour"]), "method"))));
                // line 45
                echo "                                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("calendar_event_add");
                echo "?year=";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "Y"), "html", null, true);
                echo "&month=";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "m"), "html", null, true);
                echo "&day=";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "d"), "html", null, true);
                echo "&hour=";
                echo twig_escape_filter($this->env, $context["hour"], "html", null, true);
                echo "&destination=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")), "html", null, true);
                echo "\" class=\"full-link\"></a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                    </ul>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </li>
        </ul>
            </div>
    </section>

";
    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:listByWeek.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 50,  176 => 48,  148 => 45,  146 => 44,  143 => 43,  126 => 42,  122 => 41,  119 => 40,  102 => 39,  96 => 35,  85 => 32,  79 => 31,  76 => 30,  72 => 29,  64 => 23,  61 => 22,  51 => 15,  47 => 14,  40 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
