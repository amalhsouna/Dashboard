<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_45be3acbbe2ce35784fa5538fab78d0ae6e37b59075a11b16cabc3c5d39fb21b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SuiviVenteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<title>Suivi Vente | Dashboard</title>


";
        // line 6
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 6)->display($context);
        // line 7
        echo "      ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 7)->display($context);
        // line 8
        echo "
<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <section class=\"content-header\">

";
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 25
        echo " </section>
       </div>
 \t  </div>
 \t  </div>

</div>



 ";
        // line 34
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 34)->display($context);
        // line 35
        echo "


";
    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"alert alert-success\">
     <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
     Enregistrement effectué avec succées !
    </div>
    ";
        // line 20
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 21
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 22
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back"), "html", null, true);
                echo "</a></p>";
            }
            // line 23
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 23,  88 => 22,  85 => 21,  83 => 20,  77 => 16,  74 => 15,  67 => 35,  65 => 34,  54 => 25,  52 => 15,  49 => 14,  42 => 8,  39 => 7,  37 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }
}
