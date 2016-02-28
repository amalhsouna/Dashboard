<?php

/* SuiviVenteBundle:chart:PieChart.html.twig */
class __TwigTemplate_fb92cc3e92cbac2b69390a4c3dec72f509d9e5a22ce1998e09ef2747449937af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:chart:PieChart.html.twig", 1);
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
        echo "    <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" ></script>
    <script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/highcharts.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/modules/exporting.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        
    </script>
<title>Suivi Vente | Dashboard</title>

";
        // line 11
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:chart:PieChart.html.twig", 11)->display($context);
        // line 12
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:chart:PieChart.html.twig", 12)->display($context);
        // line 13
        echo "
 <div class=\"content-wrapper\">
          <section class=\"content-header\">
          <h1>
          Statistiques
            
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"glyphicon glyphicon-hand-right\"></i> Accueil</a></li>
            <li class=\"active\">Statistiques</li>
            <li class=\"active\">Vente</li>
          </ol>
        </section>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Statistique des ventes par semaine</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                       <div id=\"container\" style=\"min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto\"></div>

                  </div><!--fin-1--->

  </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
\t</section>
 </div>


";
        // line 46
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:chart:PieChart.html.twig", 46)->display($context);
        // line 47
        echo "
    </div><!-- ./wrapper -->


    ";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:chart:PieChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 47,  86 => 46,  51 => 13,  49 => 12,  47 => 11,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
