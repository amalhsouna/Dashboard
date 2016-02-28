<?php

/* SuiviVenteBundle:Default:admin.html.twig */
class __TwigTemplate_9a9f6253361327c69d9bda84cbee94d60d926e6a6b6bb750598de5ba994a9f1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Default:admin.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Default:admin.html.twig", 6)->display($context);
        // line 7
        echo "      ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Default:admin.html.twig", 7)->display($context);
        // line 8
        echo "
      <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
\t
  
        <section class=\"content-header\">
          <h1>
          Tableau de bord 
            
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"glyphicon glyphicon-hand-right\"></i> Accueil</a></li>
            <li class=\"active\">Tableau de bord </li>
          </ol>
        </section>


        <section class=\"content\">
          <!-- Info boxes -->
         
          <div class=\"row\">
              ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 31
            echo "            <div class=\"col-md-3 col-sm-6 col-xs-12\">
              <div class=\"info-box\">
                <span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-ios-paper-outline\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">Catégories</span>
                  <span class=\"info-box-number\">";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["nbr1"]) ? $context["nbr1"] : $this->getContext($context, "nbr1")), "html", null, true);
            echo "<small></small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            

            <!-- fix for small devices only -->
           

            <div class=\"col-md-3 col-sm-6 col-xs-12\">
              <div class=\"info-box\">
                <span class=\"info-box-icon bg-green\"><i class=\"ion ion-ios-star-outline\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">Offres</span>
                  <span class=\"info-box-number\">";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["nboffre"]) ? $context["nboffre"] : $this->getContext($context, "nboffre")), "html", null, true);
            echo "</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
              <div class=\"info-box\">
                <span class=\"info-box-icon bg-yellow\"><i class=\"ion ion-ios-people-outline\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">Utilisateurs</span>
                  <span class=\"info-box-number\"> ";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["nbreutil"]) ? $context["nbreutil"] : $this->getContext($context, "nbreutil")), "html", null, true);
            echo "</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
\t\t\t<section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-9 col-sm-8\">
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
            ";
        }
        // line 82
        echo "             ";
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEF")) {
            // line 83
            echo "                 <div class=\"col-md-3 col-sm-6 col-xs-12\">
              <div class=\"info-box\">
                <span class=\"info-box-icon bg-red\"><i class=\"ion ion-android-cart\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">Ventes</span>
                  <span class=\"info-box-number\">";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["nbr1"]) ? $context["nbr1"] : $this->getContext($context, "nbr1")), "html", null, true);
            echo "<small></small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
              <div class=\"info-box\">
                <span class=\"info-box-icon bg-blue\"><i class=\"ion ion-social-euro\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">Recettes</span>
                  <span class=\"info-box-number\">";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["nbr1"]) ? $context["nbr1"] : $this->getContext($context, "nbr1")), "html", null, true);
            echo "<small></small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
           
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
              <div class=\"info-box\">
                <span class=\"info-box-icon bg-yellow\"><i class=\"ion ion-pie-graph\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">Statistiques</span>
                  <span class=\"info-box-number\"><small></small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
                 ";
        }
        // line 113
        echo "           </div><!---fin-objecif--->

         </div><!--fin-1--->

  </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
\t</section>
 </div>


";
        // line 125
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Default:admin.html.twig", 125)->display($context);
        // line 126
        echo "

    </div><!-- ./wrapper -->


    ";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 126,  184 => 125,  170 => 113,  152 => 98,  139 => 88,  132 => 83,  129 => 82,  104 => 60,  91 => 50,  74 => 36,  67 => 31,  65 => 30,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
