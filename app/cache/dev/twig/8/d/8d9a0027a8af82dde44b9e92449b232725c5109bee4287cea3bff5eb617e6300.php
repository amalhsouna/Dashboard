<?php

/* SuiviVenteBundle:Categorie:edit.html.twig */
class __TwigTemplate_8d9a0027a8af82dde44b9e92449b232725c5109bee4287cea3bff5eb617e6300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Categorie:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        echo "
<title>Suivi Vente | Dashboard</title>

";
        // line 6
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Categorie:edit.html.twig", 6)->display($context);
        // line 7
        echo "      ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Categorie:edit.html.twig", 7)->display($context);
        // line 8
        echo "
      <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
          Gestion Catégories
            
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
            <li class=\"active\">Gestion Catégories</li>
            <li class=\"active\">Modifier</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class=\"content\">
          <div class=\"row\">
            <!-- left column -->
            <div class=\"col-md-6\">
              <!-- general form elements -->
              <div class=\"box box-primary\">
                <div class=\"box-header\">
                  <h3 class=\"box-title\">Modifier Catégorie</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
           

                
                 
                        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("categorie");
        echo "\">
                          <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/MB__back.png"), "html", null, true);
        echo "\">
                        </a>
                    
                
                            </form>
                
              </div><!-- /.box -->
</section>
 </div>
      ";
        // line 49
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Categorie:edit.html.twig", 49)->display($context);
        // line 50
        echo "


        ";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Categorie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 50,  90 => 49,  78 => 40,  74 => 39,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
