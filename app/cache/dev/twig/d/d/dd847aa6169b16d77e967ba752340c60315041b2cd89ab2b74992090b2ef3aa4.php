<?php

/* BladeTesterCalendarBundle:Event:cancel.html.twig */
class __TwigTemplate_dd847aa6169b16d77e967ba752340c60315041b2cd89ab2b74992090b2ef3aa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("or"), "html", null, true);
        echo " <a href=\"
";
        // line 2
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "destination"), "method") && ($this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(        // line 3
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "destination"), "method")))) {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "destination"), "method"), "html", null, true);
            echo "
";
        } else {
            // line 6
            echo "    ";
            echo $this->env->getExtension('routing')->getPath("calendar_event_list");
            echo "
";
        }
        // line 8
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.cancel"), "html", null, true);
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:cancel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  32 => 6,  26 => 4,  24 => 3,  23 => 2,  19 => 1,);
    }
}
