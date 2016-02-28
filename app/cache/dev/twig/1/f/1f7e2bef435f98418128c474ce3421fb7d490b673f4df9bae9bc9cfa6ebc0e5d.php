<?php

/* SuiviVenteBundle:Default:ajoutervente.html.twig */
class __TwigTemplate_1f7e2bef435f98418128c474ce3421fb7d490b673f4df9bae9bc9cfa6ebc0e5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Default:ajoutervente.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Default:ajoutervente.html.twig", 6)->display($context);
        // line 7
        echo "      ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Default:ajoutervente.html.twig", 7)->display($context);
        // line 8
        echo "
  <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
          Ajout ventes
            
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"glyphicon glyphicon-hand-right\"></i> Accueil</a></li>
            <li class=\"active\">Ventes</li>
            <li class=\"active\">Ajouter vente</li>
          </ol>
        </section>
\t\t <section class=\"content\">
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <div class=\"box\">

            
  <section class=\"content\">
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <div class=\"box\">
              
      <div class=\"box-body\">
       <div class=\"tabs_cont\" id=\"tabs-1\">
     
      </div><!--fin-1--->
       
                </div><!--/col-12-->

            </div>

        <!----debut---------!---->

        </div>
    </div>

   </section>

      </div><!-- /#myCarousel -->
  </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
\t</section>
\t</div>



";
        // line 59
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Default:ajoutervente.html.twig", 59)->display($context);
        // line 60
        echo "
    </div><!-- ./wrapper -->


    ";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Default:ajoutervente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 60,  94 => 59,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
