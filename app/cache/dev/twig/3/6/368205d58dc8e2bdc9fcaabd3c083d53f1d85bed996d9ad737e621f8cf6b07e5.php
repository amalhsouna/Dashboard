<?php

/* SuiviVenteBundle:Chart:chartLine.html.twig */
class __TwigTemplate_368205d58dc8e2bdc9fcaabd3c083d53f1d85bed996d9ad737e621f8cf6b07e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Chart:chartLine.html.twig", 1);
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
        ";
        // line 7
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["linechart"]) ? $context["linechart"] : $this->getContext($context, "linechart")));
        echo "
    </script>
<title>Suivi Vente | Dashboard</title>

";
        // line 11
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Chart:chartLine.html.twig", 11)->display($context);
        // line 12
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Chart:chartLine.html.twig", 12)->display($context);
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
                        <div id=\"linechart\" style=\"min-width: 50px; height: 400px;\"></div>

                  </div><!--fin-1--->

  </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
\t</section>
 </div>


";
        // line 46
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Chart:chartLine.html.twig", 46)->display($context);
        // line 47
        echo "
    </div><!-- ./wrapper -->


    ";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Chart:chartLine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 47,  89 => 46,  54 => 13,  52 => 12,  50 => 11,  43 => 7,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
