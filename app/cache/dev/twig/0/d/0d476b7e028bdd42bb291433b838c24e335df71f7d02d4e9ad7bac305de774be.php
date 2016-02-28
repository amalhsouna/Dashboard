<?php

/* SuiviVenteBundle:Offres:show.html.twig */
class __TwigTemplate_0d476b7e028bdd42bb291433b838c24e335df71f7d02d4e9ad7bac305de774be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Offres:show.html.twig", 1);
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
        echo "     ";
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Offres:show.html.twig", 3)->display($context);
        // line 4
        echo "      ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Offres:show.html.twig", 4)->display($context);
        // line 5
        echo "

    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
          Gestion Offres
            
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
            <li class=\"active\">Gestion Offres</li>
            <li class=\"active\">Lister</li>
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
                 
                  <h3 class=\"box-title\" Fontcolor=\"bleu\">Offre ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
              

                <table class=\"record_properties\">
                    <tbody>
                       
                        <tr>
                            <th>Nom  :</th>
                            <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Description  :</th>
                            <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Status  :</th>
                            <td>";
        // line 49
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status", array()) == "1")) {
            // line 50
            echo "                                Active
                                 ";
        } else {
            // line 52
            echo "                              Nom active
                                ";
        }
        // line 54
        echo "                                
                            </td>
                        </tr>
                        <tr>
                            <th>Catégorie  :</th>
                            <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categ", array()), "nom", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
         <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offres_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn-right\">
           <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/edit.png"), "html", null, true);
        echo "\">
        </a>

        </br>

        <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("offres");
        echo "\" class=\"next\" >
           <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/MB__back.png"), "html", null, true);
        echo "\">
        </a>


              </div><!-- /.box -->
</section>
 </div>\t\t  
            
              
 <footer class=\"main-footer\">
     <div class=\"pull-right hidden-xs\">
          <b>Dashboard Commercial</b> 
        </div>
\t\t  
            
              

        <strong>Copyright &copy; 2015 <a href=\"http://www.tunisietelecom.tn/\">Tunisie Télécom</a>.</strong>
      </footer>

    </div><!-- ./wrapper -->

   
";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Offres:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 70,  128 => 69,  120 => 64,  116 => 63,  109 => 59,  102 => 54,  98 => 52,  94 => 50,  92 => 49,  85 => 45,  78 => 41,  65 => 31,  37 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
