<?php

/* BladeTesterCalendarBundle:Event:add.html.twig */
class __TwigTemplate_8a559bffe319f0749c8a330061d902232840f183c4e1e5984926ed42c647ebf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BladeTesterCalendarBundle:Event:base.html.twig", "BladeTesterCalendarBundle:Event:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "BladeTesterCalendarBundle:Event:add.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "BladeTesterCalendarBundle:Event:add.html.twig", 5)->display($context);
        // line 6
        echo "    <div class=\"bloc-calender\">
<form id=\"event-add\" method=\"POST\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("calendar_event_add");
        echo "?destination=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "destination"), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 8
        $this->loadTemplate("BladeTesterCalendarBundle:Event:form.html.twig", "BladeTesterCalendarBundle:Event:add.html.twig", 8)->display($context);
        // line 9
        echo "    <input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.event.add"), "html", null, true);
        echo "\" /> 
    ";
        // line 10
        $this->loadTemplate("BladeTesterCalendarBundle:Event:cancel.html.twig", "BladeTesterCalendarBundle:Event:add.html.twig", 10)->display($context);
        // line 11
        echo "</form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  55 => 10,  50 => 9,  48 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
