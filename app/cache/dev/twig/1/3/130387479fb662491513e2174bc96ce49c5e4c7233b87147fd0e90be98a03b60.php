<?php

/* BladeTesterCalendarBundle:Event:base.html.twig */
class __TwigTemplate_130387479fb662491513e2174bc96ce49c5e4c7233b87147fd0e90be98a03b60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BladeTesterCalendarBundle:Base:base.html.twig", "BladeTesterCalendarBundle:Event:base.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'calendar_date_selector' => array($this, 'block_calendar_date_selector'),
            'calendar_body' => array($this, 'block_calendar_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BladeTesterCalendarBundle:Base:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "BladeTesterCalendarBundle:Event:base.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "BladeTesterCalendarBundle:Event:base.html.twig", 6)->display($context);
        // line 7
        echo "<div class=\"bloc-calender\">
    <h1 class=\"main-title\">Calendrier</h1>

    <nav>
        <ul class=\"tabs-btn\">
            <li>
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("calendar_event_list");
        echo "\" class=\"btn tab-btn tab-first";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "calendar_event_list")) {
            echo " active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.agenda"), "html", null, true);
        echo "</a>
            </li>
            <li>
                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_list_by_day", array("year" => twig_date_format_filter($this->env, "now", "Y"), "month" => twig_date_format_filter($this->env, "now", "m"), "day" => twig_date_format_filter($this->env, "now", "d"))), "html", null, true);
        echo "\" class=\"btn tab-btn tab-middle";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "calendar_event_list_by_day")) {
            echo " active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.day"), "html", null, true);
        echo "</a></li>
            <li>
                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_list_by_week", array("year" => twig_date_format_filter($this->env, "now", "Y"), "month" => twig_date_format_filter($this->env, "now", "m"), "day" => twig_date_format_filter($this->env, "now", "d"))), "html", null, true);
        echo "\" class=\"btn tab-btn tab-middle";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "calendar_event_list_by_week")) {
            echo " active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.week"), "html", null, true);
        echo "</a></li>
            <li>
                <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_list_by_month", array("year" => twig_date_format_filter($this->env, "now", "Y"), "month" => twig_date_format_filter($this->env, "now", "m"))), "html", null, true);
        echo "\" class=\"btn tab-btn tab-last";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "calendar_event_list_by_month")) {
            echo " active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.month"), "html", null, true);
        echo "</a></li>
         
             <li align=\"right\"><a class=\"btn btn-primary\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("calendar_settings");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.settings"), "html", null, true);
        echo "</a></li>
             
        </ul>
       
    </nav>

    <nav class=\"list-options\">
\t ";
        // line 29
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            // line 30
            echo "        <ul class=\"list-inline column w-20\">
            <li>
                <a id=\"calendar-event-add-btn\" href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("calendar_event_add");
            echo "?destination=";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")), "html", null, true);
            echo "&year=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "Y"), "html", null, true);
            echo "&month=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "m"), "html", null, true);
            echo "&day=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "d"), "html", null, true);
            echo "\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.event.add"), "html", null, true);
            echo "</a>
            </li>
        </ul>
\t";
        }
        // line 36
        echo "        <ul class=\"list-inline column w-80 t-align-right\">
           
            
        </ul>
    </nav>

    <section class=\"main-content\">
        <div  class=\"box-body\">
            <section class=\"schedule-nav\">
                ";
        // line 45
        $this->displayBlock('calendar_date_selector', $context, $blocks);
        // line 47
        echo "
            </section>

            ";
        // line 50
        $this->displayBlock('calendar_body', $context, $blocks);
        // line 52
        echo "        </div>
    </section>
</div>
";
    }

    // line 45
    public function block_calendar_date_selector($context, array $blocks = array())
    {
        // line 46
        echo "                ";
    }

    // line 50
    public function block_calendar_body($context, array $blocks = array())
    {
        // line 51
        echo "            ";
    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 51,  163 => 50,  159 => 46,  156 => 45,  149 => 52,  147 => 50,  142 => 47,  140 => 45,  129 => 36,  112 => 32,  108 => 30,  106 => 29,  94 => 22,  83 => 20,  72 => 18,  61 => 16,  49 => 13,  41 => 7,  38 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
