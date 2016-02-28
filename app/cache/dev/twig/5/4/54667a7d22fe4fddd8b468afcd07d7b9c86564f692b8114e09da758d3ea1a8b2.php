<?php

/* BladeTesterCalendarBundle:Event:form.html.twig */
class __TwigTemplate_54667a7d22fe4fddd8b468afcd07d7b9c86564f692b8114e09da758d3ea1a8b2 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
