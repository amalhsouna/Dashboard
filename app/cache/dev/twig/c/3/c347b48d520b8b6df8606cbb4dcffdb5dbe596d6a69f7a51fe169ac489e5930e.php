<?php

/* SuiviVenteBundle:chart:chartBar.html.twig */
class __TwigTemplate_c347b48d520b8b6df8606cbb4dcffdb5dbe596d6a69f7a51fe169ac489e5930e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:chart:chartBar.html.twig", 1);
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
        echo "    ";
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:chart:chartBar.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:chart:chartBar.html.twig", 4)->display($context);
        // line 5
        echo "


    <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" ></script>
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/highcharts.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/modules/exporting.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        ";
        // line 12
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["barchart"]) ? $context["barchart"] : $this->getContext($context, "barchart")));
        echo "
    </script>

    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
      
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Statistique des rectte par semaine</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <div id=\"barchart\" style=\"min-width: 50px; height: 400px;\"></div>
  <div id=\"piechart\" style=\"min-width: 50px; height: 400px;\"></div>
                    </div>
                </div></div></div>
    </section>
</div>
    ";
        // line 32
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:chart:chartBar.html.twig", 32)->display($context);
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:chart:chartBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 32,  52 => 12,  47 => 10,  43 => 9,  37 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
