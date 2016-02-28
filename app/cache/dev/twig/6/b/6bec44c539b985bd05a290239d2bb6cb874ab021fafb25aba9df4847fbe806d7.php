<?php

/* SuiviVenteBundle:Offres:new.html.twig */
class __TwigTemplate_6bec44c539b985bd05a290239d2bb6cb874ab021fafb25aba9df4847fbe806d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Offres:new.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Offres:new.html.twig", 6)->display($context);
        // line 7
        echo "      ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Offres:new.html.twig", 7)->display($context);
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
            <li class=\"active\">Ajouter</li>
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
                  <h3 class=\"box-title\">Ajout Offre</h3>
                </div><!-- /.box-header -->
                ";
        // line 34
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 35
            echo "               <div class=\"alert alert-success\">
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "&times;</a>
                </div>
                
                ";
        }
        // line 40
        echo "        
                <!-- form start -->
                <form role=\"form\" method=\"Post\" action=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("offres_create");
        echo "\">
                  <div class=\"box-body\">
                    <div class=\"form-group\">
                      <label for=\"nom\">Nom offre</label>
                      ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                     
                    </div>
                    <div class=\"form-group\">
                      <label for=\"description\">Description</label>
                  
                       ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
\t\t\t\t\t<div class=\"form-group\">
                      <label for=\"prix\">Prix Unitaire</label>
                  
                       ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixunitaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                      <label for=\"date\">Status</label>
                     
                     ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                     <div class=\"form-group\">
                         <label for=\"date\">Catégorie</label>

                         ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categ", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                     </div>
               <div class=\"box-footer\">
                      ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                    <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
                   
                  </div>

                
                 
                        <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("offres");
        echo "\">
                          <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/MB__back.png"), "html", null, true);
        echo "\">
                        </a>
                    
                </div><!-- /.box -->
                            </form>
              
</section>

            
";
        // line 87
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Offres:new.html.twig", 87)->display($context);
        // line 88
        echo "
    </div><!-- ./wrapper -->


    ";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Offres:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 88,  157 => 87,  145 => 78,  141 => 77,  131 => 70,  125 => 67,  117 => 62,  109 => 57,  101 => 52,  92 => 46,  85 => 42,  81 => 40,  74 => 36,  71 => 35,  69 => 34,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
