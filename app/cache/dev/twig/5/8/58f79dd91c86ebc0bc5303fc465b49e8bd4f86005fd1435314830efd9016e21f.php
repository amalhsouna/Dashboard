<?php

/* SuiviVenteBundle:Categorie:new.html.twig */
class __TwigTemplate_58f79dd91c86ebc0bc5303fc465b49e8bd4f86005fd1435314830efd9016e21f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Categorie:new.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Categorie:new.html.twig", 6)->display($context);
        // line 7
        echo "  ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Categorie:new.html.twig", 7)->display($context);
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
                  <h3 class=\"box-title\">Ajout Catégorie</h3>
                </div><!-- /.box-header -->
                <!-- form start -->

                <form role=\"form\" method=\"Post\" action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("categorie_create");
        echo "\">
                  <div class=\"box-body\">
                    <div class=\"form-group\">
                      <label for=\"nom\">Nom catégorie</label>
                      ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                    </div>
                    <div class=\"form-group\">
                      <label for=\"description\">Description</label>

                       ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                      <label for=\"date\">Date création</label>

                     ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateCreation", array()), 'widget');
        echo "
                    </div>
               <div class=\"box-footer\">
                      ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                    <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>

                  </div>
                        <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("categorie");
        echo "\">
                          <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/MB__back.png"), "html", null, true);
        echo "\">
                        </a>


                            </form>
              </div><!-- /.box -->
</section>
 </div>

        ";
        // line 69
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Categorie:new.html.twig", 69)->display($context);
        // line 70
        echo "


        ";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Categorie:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 70,  125 => 69,  113 => 60,  109 => 59,  102 => 55,  96 => 52,  88 => 47,  79 => 41,  72 => 37,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
