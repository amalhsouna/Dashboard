<?php

/* BladeTesterCalendarBundle:Event:add.html.twig */
class __TwigTemplate_71a89554fd3e6550ba7d27e8aa08a76afe714db95730b47d403709d1c306c060 extends Twig_Template
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
        echo "<form id=\"event-add\" method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getUrl("calendar_event_add");
        echo "?destination=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "destination"), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 5
        $this->loadTemplate("BladeTesterCalendarBundle:Event:form.html.twig", "BladeTesterCalendarBundle:Event:add.html.twig", 5)->display($context);
        // line 6
        echo "    <input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.event.add"), "html", null, true);
        echo "\" /> 
    ";
        // line 7
        $this->loadTemplate("BladeTesterCalendarBundle:Event:cancel.html.twig", "BladeTesterCalendarBundle:Event:add.html.twig", 7)->display($context);
        // line 8
        echo "</form>
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
        return array (  49 => 8,  47 => 7,  42 => 6,  40 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
