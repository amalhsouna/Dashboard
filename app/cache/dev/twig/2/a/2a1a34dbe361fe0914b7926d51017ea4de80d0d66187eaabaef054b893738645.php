<?php

/* SuiviVenteBundle:Offres:edit.html.twig */
class __TwigTemplate_2a1a34dbe361fe0914b7926d51017ea4de80d0d66187eaabaef054b893738645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Offres:edit.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Offres:edit.html.twig", 6)->display($context);
        // line 7
        echo "      ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Offres:edit.html.twig", 7)->display($context);
        // line 8
        echo "
      <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
          Gestion Offres
            
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
            <li class=\"active\">Gestion Offres</li>
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
                  <h3 class=\"box-title\">Modifier Offre</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
            <form role=\"form\" method=\"Post\" action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offres_edit", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()))), "html", null, true);
        echo "\">
                  <div class=\"box-body\">
                    <div class=\"form-group\">
                      <label for=\"nom\">Nom offre</label>
                      ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                     
                    </div>
                    <div class=\"form-group\">
                      <label for=\"description\">Description</label>
                  
                       ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                      <label for=\"date\">Status</label>
                     
                     ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
             <div class=\"form-group\">
                      <label for=\"date\">Catégorie</label>
                     
                     ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categ", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
               <div class=\"box-footer\">
                      ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                    <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
                   
                  </div>

                
                 
                        <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("offres");
        echo "\">
                          <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/MB__back.png"), "html", null, true);
        echo "\">
                        </a>
                    
                
                            </form>
                
              </div><!-- /.box -->
</section>

            
              
 ";
        // line 77
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Offres:edit.html.twig", 77)->display($context);
        // line 78
        echo "
    </div><!-- ./wrapper -->


    ";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Offres:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 78,  136 => 77,  122 => 66,  118 => 65,  108 => 58,  102 => 55,  94 => 50,  86 => 45,  77 => 39,  70 => 35,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
