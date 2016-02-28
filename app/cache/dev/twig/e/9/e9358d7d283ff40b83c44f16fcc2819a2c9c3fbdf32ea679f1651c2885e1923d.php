<?php

/* BladeTesterCalendarBundle:Category:add.html.twig */
class __TwigTemplate_e9358d7d283ff40b83c44f16fcc2819a2c9c3fbdf32ea679f1651c2885e1923d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BladeTesterCalendarBundle:Base:base.html.twig", "BladeTesterCalendarBundle:Category:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.title.category.add"), "html", null, true);
        echo "</h1>

<form id=\"category-add\" method=\"POST\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("calendar_category_add");
        echo "?destination=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "destination"), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 7
        $this->loadTemplate("BladeTesterCalendarBundle:Category:form.html.twig", "BladeTesterCalendarBundle:Category:add.html.twig", 7)->display($context);
        // line 8
        echo "    <input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.category.add"), "html", null, true);
        echo "\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Category:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  37 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
