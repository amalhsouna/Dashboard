<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2ba4444229bedd5e2f37dda1298ad919cd0c02002aee9dda0d185a3dd97a9917 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 2);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<title>Suivi Vente | Dashboard</title>

";
        // line 7
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "FOSUserBundle:Registration:register.html.twig", 7)->display($context);
        // line 8
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "FOSUserBundle:Registration:register.html.twig", 8)->display($context);
        // line 9
        echo "
      <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
      <section class=\"content-header\">
          <h1>
          Gestion Utilisateur

          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
            <li class=\"active\">Gestion Utilisateur</li>
            <li class=\"active\">Ajouter</li>
          </ol>
        </section>
        <section class=\"content\">
        <div class=\"row\">
        <!-- Content Header (Page header) -->
        <div class=\"col-md-6\">
              <!-- general form elements -->
              <div class=\"box box-primary\">
                <div class=\"box-header\">
                  <h3 class=\"box-title\">Ajout Utilisateur</h3>
                </div>

          ";
        // line 33
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 36
        echo "          <!-- Info boxes -->
       </section>
       </div>
 \t  </div>
 \t  </div>

</div>

            
              
 ";
        // line 46
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "FOSUserBundle:Registration:register.html.twig", 46)->display($context);
        // line 47
        echo "


";
    }

    // line 33
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 34
        echo "        ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 34)->display($context);
        // line 35
        echo "        ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  93 => 34,  90 => 33,  83 => 47,  81 => 46,  69 => 36,  67 => 33,  41 => 9,  39 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 2,);
    }
}
