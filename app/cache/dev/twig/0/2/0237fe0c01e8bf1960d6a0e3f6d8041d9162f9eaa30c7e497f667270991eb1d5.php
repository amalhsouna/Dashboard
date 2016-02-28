<?php

/* SuiviVenteBundle:Produit:ajoutproduit.html.twig */
class __TwigTemplate_0237fe0c01e8bf1960d6a0e3f6d8041d9162f9eaa30c7e497f667270991eb1d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Produit:ajoutproduit.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Produit:ajoutproduit.html.twig", 6)->display($context);
        // line 7
        echo "      ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Produit:ajoutproduit.html.twig", 7)->display($context);
        // line 8
        echo "

 <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
          Ajouter des produits
            
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"glyphicon glyphicon-hand-right\"></i> Accueil</a></li>
            <li class=\"active\">Produit</li>
            <li class=\"active\">Ajouter des produits</li>
          </ol>
        </section>
<!-- Main content -->
        <section class=\"content\">
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <div class=\"box\">
              
      <div class=\"box-body\">
            
                <div class=\"panel-body\">

          <!----partie----->
                    <div class=\"container\">

            <div class=\"panel\">
                <h1 class=\"h1-intern\">Ajout vente</h1>
                <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("lite_vente_chef");
        echo "\" class=\"liste-v\"> Liste des produits</a>

              ";
        // line 40
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            echo "  
                <div class=\"alert alert-success\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                ";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "

                  </div>
                ";
        }
        // line 47
        echo "    <article class=\"col5\">


        <div class=\"tabs_cont\" id=\"tabs-1\">
       <form method=\"post\" enctype=\"multipart/form-data\">
\t      <div class=\"box-body\">
            <div class=\"form-group\">

\t\t\t";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t\t\t
\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
           <div class=\"form-group\">
\t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom"));
        echo "
            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
            </div>
             <div class=\"form-group\">
\t\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label" => "Déscription"));
        echo "
            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
           </div>
\t\t\t ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

                ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                 <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
       </form>

 </div><!---fin-objecif--->

         </div><!--fin-1--->

  </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
\t</section>
 </div>


";
        // line 86
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Produit:ajoutproduit.html.twig", 86)->display($context);
        // line 87
        echo "

    </div><!-- ./wrapper -->


    ";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Produit:ajoutproduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 87,  162 => 86,  143 => 70,  138 => 68,  133 => 66,  129 => 65,  125 => 64,  119 => 61,  115 => 60,  111 => 59,  106 => 57,  101 => 55,  91 => 47,  84 => 43,  78 => 40,  73 => 38,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
