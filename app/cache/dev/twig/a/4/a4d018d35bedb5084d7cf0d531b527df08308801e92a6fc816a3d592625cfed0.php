<?php

/* SuiviVenteBundle:Default:Acceuil.html.twig */
class __TwigTemplate_a4d018d35bedb5084d7cf0d531b527df08308801e92a6fc816a3d592625cfed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Default:Acceuil.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Default:Acceuil.html.twig", 6)->display($context);
        // line 7
        echo "      ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Default:Acceuil.html.twig", 7)->display($context);
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
          <!-- Profil Administrateur -->
          <div class=\"row\">
              ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 31
            echo "                  


   


       
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
              <div class=\"info-box\">
                <span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-ios-paper-outline\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">Catégories</span>
                  <span class=\"info-box-number\">";
            // line 43
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
            // line 57
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
            // line 67
            echo twig_escape_filter($this->env, (isset($context["nbreutil"]) ? $context["nbreutil"] : $this->getContext($context, "nbreutil")), "html", null, true);
            echo "</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
\t\t\t<div class=\"col-md-8\">
       <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Les offres Actives</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <div class=\"table-responsive\">
                    <table class=\"table no-margin\">
                      <thead>
                        <tr>
                         
                          <th>Libellé</th>
                          <th>Description</th>
                          <th>Prix Unitaire</th>
                           <th>Status</th>
                            <th>Catégorie</th>
                        </tr>
                      </thead>
                      <tbody>
                           ";
            // line 94
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["offreS"]) ? $context["offreS"] : $this->getContext($context, "offreS")));
            foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
                // line 95
                echo "                        <tr>
                          <td><a href=\"pages/examples/invoice.html\">";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "nom", array()), "html", null, true);
                echo "</a></td>
                          <td>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "description", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "prixunitaire", array()), "html", null, true);
                echo "</td>
                          
                          <td><span class=\"label label-success\">Active</span></td>
                           <td>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["o"], "categ", array()), "nom", array()), "html", null, true);
                echo "</td>
                         
                        </tr>
                       
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class=\"box-footer clearfix\">
                
                  <a href=\"";
            // line 112
            echo $this->env->getExtension('routing')->getPath("offres");
            echo "\" class=\"btn btn-sm btn-info btn-flat pull-right\">Toutes les Offres</a>
                </div><!-- /.box-footer -->
              </div>
                </div>
             
                 
                
        
          
             <!-- Fin Profil Administrateur -->
           
       





            ";
        }
        // line 130
        echo "            
             <!-- Fin Profil Administrateur -->
             
              <!-- Profil CHEF -->
             ";
        // line 134
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEF")) {
            // line 135
            echo "                 <div class=\"col-md-3 col-sm-6 col-xs-12\">
              <div class=\"info-box\">
                <span class=\"info-box-icon bg-red\"><i class=\"ion ion-android-cart\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">Ventes</span>
                  <span class=\"info-box-number\">";
            // line 140
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
            // line 150
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
            
             <div class=\"col-md-4\">
                      <p class=\"text-center\">
                        <strong>Objectif réalisée par mois</strong>
                      </p>
                      <div class=\"progress-group\">
                        <span class=\"progress-text\">Fixe</span>
                        <span class=\"progress-number\"><b>160</b>/200</span>
                        <div class=\"progress sm\">
                          <div class=\"progress-bar progress-bar-aqua\" style=\"width: 50%\"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class=\"progress-group\">
                        <span class=\"progress-text\">Mobile</span>
                        <span class=\"progress-number\"><b>310</b>/400</span>
                        <div class=\"progress sm\">
                          <div class=\"progress-bar progress-bar-red\" style=\"width: 80%\"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class=\"progress-group\">
                        <span class=\"progress-text\">Transfert</span>
                        <span class=\"progress-number\"><b>480</b>/800</span>
                        <div class=\"progress sm\">
                          <div class=\"progress-bar progress-bar-green\" style=\"width: 80%\"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class=\"progress-group\">
                        <span class=\"progress-text\">3G</span>
                        <span class=\"progress-number\"><b>250</b>/500</span>
                        <div class=\"progress sm\">
                          <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\"></div>
                        </div>
                      </div><!-- /.progress-group -->
                    
         </div>
                 ";
        }
        // line 200
        echo "                 
                  <!-- Fin Profil Chef -->
                  
                  <!-- Profil Commercial -->
             ";
        // line 204
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMERCIAL")) {
            // line 205
            echo "                 
                 <div class=\"col-md-3 col-sm-6 col-xs-12\">
              <div class=\"info-box\">
                <span class=\"info-box-icon bg-red\"><i class=\"ion ion-android-cart\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">Contacts</span>
                  <span class=\"info-box-number\">";
            // line 211
            echo twig_escape_filter($this->env, (isset($context["nbr1"]) ? $context["nbr1"] : $this->getContext($context, "nbr1")), "html", null, true);
            echo "<small></small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
              <div class=\"info-box\">
                <span class=\"info-box-icon bg-blue\"><i class=\"ion ion-social-euro\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">Produits</span>
                  <span class=\"info-box-number\">";
            // line 221
            echo twig_escape_filter($this->env, (isset($context["nbr1"]) ? $context["nbr1"] : $this->getContext($context, "nbr1")), "html", null, true);
            echo "<small></small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
           
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
              <div class=\"info-box\">
                <span class=\"info-box-icon bg-yellow\"><i class=\"ion ion-pie-graph\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">Visites</span>
                  <span class=\"info-box-number\"><small></small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class=\"col-md-6\">
                 <div class=\"box box-danger\">
                    <div class=\"box-header with-border\">
                      <h3 class=\"box-title\">Dérniers Contacts </h3>
                      <div class=\"box-tools pull-right\">
                       
                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                        <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class=\"box-body no-padding\">
                      <ul class=\"users-list clearfix\">
                        <li>
                          <img src=\"";
            // line 248
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/admin.png"), "html", null, true);
            echo "\" alt=\"User Image\">
                          <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                          <span class=\"users-list-date\">Today</span>
                        </li>
                        <li>
                          <img src=\"";
            // line 253
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/admin.png"), "html", null, true);
            echo "\" alt=\"User Image\">
                          <a class=\"users-list-name\" href=\"#\">Norman</a>
                          <span class=\"users-list-date\">Yesterday</span>
                        </li>
                        <li>
                          <img src=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/admin.png"), "html", null, true);
            echo "\" alt=\"User Image\">
                          <a class=\"users-list-name\" href=\"#\">Jane</a>
                          <span class=\"users-list-date\">12 Jan</span>
                        </li>
                        <li>
                          <img src=\"";
            // line 263
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/admin.png"), "html", null, true);
            echo "\" alt=\"User Image\">
                          <a class=\"users-list-name\" href=\"#\">John</a>
                          <span class=\"users-list-date\">12 Jan</span>
                        </li>
                       
                      </ul><!-- /.users-list -->
                    </div><!-- /.box-body -->
                    <div class=\"box-footer text-center\">
                      <a href=\"javascript::\" class=\"uppercase\">View All Users</a>
                    </div><!-- /.box-footer -->
                  </div>
                </div>
            
            <div class=\"col-md-6\">
                 <div class=\"box box-success\">
                    <div class=\"box-header with-border\">
                      <h3 class=\"box-title\">Dérniers Produits </h3>
                      <div class=\"box-tools pull-right\">
                       
                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                        <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class=\"box-body no-padding\">
                      <ul class=\"users-list clearfix\">
                        <li>
                          <img src=\"";
            // line 289
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/cle.jpg"), "html", null, true);
            echo "\" alt=\"User Image\">
                          <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                          <span class=\"users-list-date\">Today</span>
                        </li>
                        <li>
                          <img src=\"";
            // line 294
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/3g.jpg"), "html", null, true);
            echo "\" alt=\"User Image\">
                          <a class=\"users-list-name\" href=\"#\">Norman</a>
                          <span class=\"users-list-date\">Yesterday</span>
                        </li>
                        <li>
                          <img src=\"";
            // line 299
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/cle.jpg"), "html", null, true);
            echo "\" alt=\"User Image\">
                          <a class=\"users-list-name\" href=\"#\">Jane</a>
                          <span class=\"users-list-date\">12 Jan</span>
                        </li>
                        <li>
                          <img src=\"";
            // line 304
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/cle.jpg"), "html", null, true);
            echo "\" alt=\"User Image\">
                          <a class=\"users-list-name\" href=\"#\">John</a>
                          <span class=\"users-list-date\">12 Jan</span>
                        </li>
                       
                      </ul><!-- /.users-list -->
                    </div><!-- /.box-body -->
                    <div class=\"box-footer text-center\">
                      <a href=\"javascript::\" class=\"uppercase\">View All Users</a>
                    </div><!-- /.box-footer -->
                  </div>
                </div>
                ";
        }
        // line 316
        echo " 
                  <!-- Fin Profil Commercial -->
           </div>

         </div><!--fin-1--->

  </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
\t</section>
 </div>


";
        // line 330
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Default:Acceuil.html.twig", 330)->display($context);
        // line 331
        echo "

    </div><!-- ./wrapper -->


    ";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Default:Acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 331,  451 => 330,  435 => 316,  419 => 304,  411 => 299,  403 => 294,  395 => 289,  366 => 263,  358 => 258,  350 => 253,  342 => 248,  312 => 221,  299 => 211,  291 => 205,  289 => 204,  283 => 200,  230 => 150,  217 => 140,  210 => 135,  208 => 134,  202 => 130,  181 => 112,  173 => 106,  162 => 101,  156 => 98,  152 => 97,  148 => 96,  145 => 95,  141 => 94,  111 => 67,  98 => 57,  81 => 43,  67 => 31,  65 => 30,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
