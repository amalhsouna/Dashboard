<?php

/* SuiviVenteBundle::colonne-gauche.html.twig */
class __TwigTemplate_efd8d21ce19517181bc1785c7bcb14594c69acfd1b20d96c66ab618068835b14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
        <!-- Sidebar user panel -->

     
         <ul class=\"sidebar-menu\">
            <li class=\"header\">Menu Principale</li>
            
            ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 11
            echo "            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"glyphicon glyphicon-tasks\"></i> <span>Gestion Catégorie</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("categorie");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste Catégories</a></li>
              
              </ul>
            </li>
             <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"glyphicon glyphicon-shopping-cart\"></i> <span>Gestion Offres</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("offres");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste Offres</a></li>
             
              </ul>
            </li>
\t\t
             <li class=\"treeview\">
              <a href=\"#\">

                <i class=\"fa fa-pie-chart\"></i> <span>Statistiques</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("stat_admin");
            echo "\"><i class=\"fa fa-bar-chart\"></i> Ventes</a></li>
                <li><a href=\"#\"><i class=\"fa fa-bar-chart\"></i> Prospection</a></li>
\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-bar-chart\"></i> Recouvrement</a></li>
              </ul>
            </li>
             <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"glyphicon glyphicon-user\"></i><span>Gestion Utilisateurs</span>
                <span></span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
               
                  <li><a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("admin_listeadmin");
            echo "\"><i class=\"fa fa-users\"></i>Liste Utilisateurs</a></li>
\t\t  <li><a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"><i class=\"fa fa-user-plus\"></i>Ajout Utilisateur</a></li>
\t\t\t\t   
              </ul>
            </li>
             ";
        }
        // line 58
        echo "             ";
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEF")) {
            // line 59
            echo "         <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"glyphicon glyphicon-shopping-cart\"></i> <span> Ventes</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("suivi_vente_chef");
            echo "\"><i class=\"fa fa-circle-o\"></i> Ajout vente </a></li>
                <li><a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("lite_vente_chef");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste vente</a></li>
              </ul>
            </li>
            
              <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"ion-calculator\"></i> <span> Recette</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
              <ul class=\"treeview-menu\">
               
                <li><a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("recette_liste");
            echo "\"><i class=\"fa fa-circle-o\"></i> Recette par date</a></li>
              </ul>
            </li>
             <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"ion-calculator\"></i> <span> Objectifs</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
              <ul class=\"treeview-menu\">
               
                <li><a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("recette_liste");
            echo "\"><i class=\"fa fa-circle-o\"></i> Ajout objectif</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-pie-chart\"></i> <span> Statistiques</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
              <ul class=\"treeview-menu\">
               
                <li><a href=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("stat_admin");
            echo "\"><i class=\"fa fa-circle-o\"></i>Statistiques par semaine</a></li>
              </ul>
              <ul class=\"treeview-menu\">
               
                <li><a href=\"";
            // line 101
            echo $this->env->getExtension('routing')->getPath("stat_bar");
            echo "\"><i class=\"fa fa-circle-o\"></i>Statistiques par agences</a></li>
              </ul>
            </li>
        
          ";
        }
        // line 106
        echo "          
          ";
        // line 107
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            // line 108
            echo "              
               <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"glyphicon glyphicon-shopping-cart\"></i> <span> Consulter Ventes</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
              <ul class=\"treeview-menu\">
               
                <li><a href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("lite_vente_chef");
            echo "\"><i class=\"fa fa-circle-o\"></i>Ventes</a></li>
              </ul>
             
            </li>
             <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"ion ion-calendar\"></i> <span> Calendrier</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
             
              <ul class=\"treeview-menu\">
               
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>Listes évenements</a></li>
              </ul>
            </li>
             <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"ion ion-briefcase\"></i> <span> Recouvrements</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
              <ul class=\"treeview-menu\">
               
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>Listes des contrats</a></li>
              </ul>
              <ul class=\"treeview-menu\">
               
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>Listes des crénaces</a></li>
              </ul>
            </li>
             <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-pie-chart\"></i> <span> Statistiques</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
              <ul class=\"treeview-menu\">
               
                <li><a href=\"";
            // line 152
            echo $this->env->getExtension('routing')->getPath("stat_admin");
            echo "\"><i class=\"fa fa-circle-o\"></i>Statistiques par semaine</a></li>
              </ul>
              <ul class=\"treeview-menu\">
               
                <li><a href=\"";
            // line 156
            echo $this->env->getExtension('routing')->getPath("stat_bar");
            echo "\"><i class=\"fa fa-circle-o\"></i>Statistiques par agences</a></li>
              </ul>
            </li>
            ";
        }
        // line 160
        echo "            
                 ";
        // line 161
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMERCIAL")) {
            // line 162
            echo "            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"ion ion-android-contact\"></i> <span> Contacts</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
              <ul class=\"treeview-menu\">
               
                <li><a href=\"";
            // line 169
            echo $this->env->getExtension('routing')->getPath("contact_ajout");
            echo "\"><i class=\"fa fa-circle-o\"></i>Ajout contact</a></li>
              </ul>
              <ul class=\"treeview-menu\">
               
                <li><a href=\"";
            // line 173
            echo $this->env->getExtension('routing')->getPath("contact_liste");
            echo "\"><i class=\"fa fa-circle-o\"></i>Liste des contacts</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"ion ion-ios-book\"></i> <span> Catalogue Produits</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
              <ul class=\"treeview-menu\">
               
                <li><a href=\"";
            // line 183
            echo $this->env->getExtension('routing')->getPath("produit_ajout");
            echo "\"><i class=\"fa fa-circle-o\"></i>Ajout produits</a></li>
              </ul>
              <ul class=\"treeview-menu\">
               
                <li><a href=\"";
            // line 187
            echo $this->env->getExtension('routing')->getPath("produit_liste");
            echo "\"><i class=\"fa fa-circle-o\"></i>Liste produits</a></li>
              </ul>
            </li>
            
             <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"ion-ios-compose\"></i> <span> Gestion contrats</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
              <ul class=\"treeview-menu\">
               
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>Ajout contrat</a></li>
              </ul>
             
            </li>
           
             <li class=\"treeview\">
                <a href=\"";
            // line 204
            echo $this->env->getExtension('routing')->getPath("calendar_index");
            echo "\">
                    <i class=\"ion ion-calendar\"></i> <span> Consulter calendrier</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
              <ul class=\"treeview-menu\">
               
                <li><a href=\"";
            // line 210
            echo $this->env->getExtension('routing')->getPath("calendar_index");
            echo "\"><i class=\"fa fa-circle-o\"></i>Liste évenements</a></li>
              </ul>
             
            </li>
             ";
        }
        // line 215
        echo "            
            
            
            
         <li class=\"header\">Option</li>
            <li><a href=\"";
        // line 220
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"glyphicon glyphicon-log-out\"></i>Déconnexion</a></li>
        
         
    </section>
    <!-- /.sidebar -->
</aside>
";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle::colonne-gauche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 220,  312 => 215,  304 => 210,  295 => 204,  275 => 187,  268 => 183,  255 => 173,  248 => 169,  239 => 162,  237 => 161,  234 => 160,  227 => 156,  220 => 152,  181 => 116,  171 => 108,  169 => 107,  166 => 106,  158 => 101,  151 => 97,  138 => 87,  125 => 77,  111 => 66,  107 => 65,  99 => 59,  96 => 58,  88 => 53,  84 => 52,  68 => 39,  53 => 27,  40 => 17,  32 => 11,  30 => 10,  19 => 1,);
    }
}
