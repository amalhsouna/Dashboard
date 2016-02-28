<?php

/* SuiviVenteBundle:Produit:listesproduit.html.twig */
class __TwigTemplate_f7de10f289c1773d9391f0901c090e3ee90453e65f43d9f041f09298f9547c53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Produit:listesproduit.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Produit:listesproduit.html.twig", 6)->display($context);
        // line 7
        echo "      ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Produit:listesproduit.html.twig", 7)->display($context);
        // line 8
        echo "    <style>
        /* Global */


        img { max-width:100%; }

        a {
            -webkit-transition: all 150ms ease;
            -moz-transition: all 150ms ease;
            -ms-transition: all 150ms ease;
            -o-transition: all 150ms ease;
            transition: all 150ms ease;
        }
        a:hover {
            -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=50)\"; /* IE 8 */
            filter: alpha(opacity=50); /* IE7 */
            opacity: 0.6;
            text-decoration: none;
        }

        .thumbnails li> .fff .caption { background:#D7D5D5 !important; padding:10px }
        /* Page Header */
        .page-header {
            background: #f9f9f9;
            margin: -30px -40px 40px;
            padding: 20px 40px;
            border-top: 4px solid #ccc;
            color: #999;
            text-transform: uppercase;
        }
        .page-header h3 {
            line-height: 0.88rem;
            color: #000;
        }

        /* Thumbnail Box */
        .caption h4 {

            color: #444;
        }
        .caption p {

            color: #999;
        }


        /* Carousel Control */
        .control-box {
            text-align: right;
            width: 100%;
        }
        .carousel-control{
            background: #666;
            border: 0px;
            border-radius: 0px;
            display: inline-block;
            font-size: 34px;
            font-weight: 200;
            line-height: 18px;
            opacity: 0.5;
            padding: 4px 10px 0px;
            position: static;
            height: 30px;
            width: 15px;
        }
        #myCarousel img {
          width: 178px !important;
          height: 180px !important;
    }





        /* Mobile Only */
        @media (max-width: 767px) {
            .page-header, .control-box {
                text-align: center;
            }
        }
        @media (max-width: 479px) {
            .caption {
                word-break: break-all;
            }
        }


        li { list-style-type:none;}

        ::selection { background: #ff5e99; color: #FFFFFF; text-shadow: 0; }
        ::-moz-selection { background: #ff5e99; color: #FFFFFF; }

    </style>

    
 <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          </br>
         
            
          
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"glyphicon glyphicon-hand-right\"></i> Accueil</a></li>
            <li class=\"active\">Ventes</li>
            <li class=\"active\">Liste des produits</li>
          </ol>
        </section>
<!-- Main content -->
        <section class=\"content\">
          <div class=\"row\">
            <div class=\"col-xs-12\">
      
              
    
                                    
                <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Liste Produits</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <ul class=\"products-list product-list-in-box\">
                      ";
        // line 134
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 135
            echo "                    <li class=\"item\">
                      <div class=\"product-img\">
                        <img src=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . $this->getAttribute($this->getAttribute($context["a"], "image", array()), "url", array()))), "html", null, true);
            echo "\" alt=\"\">
                      </div>
                      <div class=\"product-info\">
                        <a href=\"javascript::;\" class=\"product-title\">";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nom", array()), "html", null, true);
            echo " <span class=\"label label-warning pull-right\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "prix", array()), "html", null, true);
            echo " dinars</span></a>
                        <span class=\"product-description\">
                          ";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "description", array()), "html", null, true);
            echo ".
                        </span>
                      </div>
                    </li><!-- /.item -->
                     <a class=\"btn btn-mini\" href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_detail", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\"> » En savoir plus</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                   
                  </ul>
                     <div class=\"navigation\">
                                ";
        // line 151
        echo $this->env->getExtension('knp_pagination')->render((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")));
        echo "

                            </div>
                </div><!-- /.box-body -->
               
                <div class=\"box-footer text-center\">
                 <button type=\"button\" class=\"btn btn-success pull-right\" data-toggle=\"modal\" data-target=\"#myModal\">Ajouter Produits</button>
                </div><!-- /.box-footer -->
              </div>
                
                
  </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
\t</section>
\t</div>



";
        // line 171
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Produit:listesproduit.html.twig", 171)->display($context);
        // line 172
        echo "
    </div><!-- ./wrapper -->


    ";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Produit:listesproduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 172,  233 => 171,  210 => 151,  205 => 148,  197 => 146,  190 => 142,  183 => 140,  177 => 137,  173 => 135,  169 => 134,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
