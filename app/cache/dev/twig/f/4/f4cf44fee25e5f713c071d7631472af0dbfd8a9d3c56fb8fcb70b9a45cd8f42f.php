<?php

/* SuiviVenteBundle::header.html.twig */
class __TwigTemplate_f4cf44fee25e5f713c071d7631472af0dbfd8a9d3c56fb8fcb70b9a45cd8f42f extends Twig_Template
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
        echo "</head>
<body class=\"skin-blue\">
<div class=\"wrapper\">
<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("suivi_vente_admin");
        echo "\" class=\"logo\">
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/logo2.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\"/>


    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
        <!-- Sidebar toggle button-->
        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\"> </span>
        </a>

        
        <!-- Navbar Right Menu -->
        <div class=\"navbar-custom-menu\">

            <ul class=\"nav navbar-nav\">

                <li class=\"dropdown user user-menu\">

                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                           <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/admin.png"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\"/>
                           <span class=\"hidden-xs\">
                               ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEF")) {
            echo " Connecté en tant que Chef espace TT :";
        }
        // line 31
        echo "                               ";
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            echo " Administrateur: ";
        }
        // line 32
        echo "                               ";
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            echo " Resp_Commercial: ";
        }
        // line 33
        echo "                               ";
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMERCIAL")) {
            echo " Commercial: ";
        }
        // line 34
        echo "                               ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                           </span>
                        </a>
                    <ul class=\"dropdown-menu\">
                        <!-- User image -->
                       <li class=\"user-header\">

                            <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/admin.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />

                            <p>
                                ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                <small>Direction ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "espace", array()), "html", null, true);
        echo "</small>
                            </p>
                       </li>




                        <!-- Menu Body -->

                        <!-- Menu Footer-->
                        <li class=\"user-footer\">

                            <div class=\"pull-right\">
                                <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-flat\">Déconnexion</a>
                            </div>
\t\t\t\t\t\t\t<div class=\"pull-left\">
                                <a href=\"#\" class=\"btn btn-default btn-flat\">Profil</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>


</header>";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 58,  99 => 45,  95 => 44,  89 => 41,  78 => 34,  73 => 33,  68 => 32,  63 => 31,  59 => 30,  54 => 28,  30 => 7,  26 => 6,  19 => 1,);
    }
}
