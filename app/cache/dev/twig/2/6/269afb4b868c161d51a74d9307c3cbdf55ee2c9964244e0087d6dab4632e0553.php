<?php

/* SuiviVenteBundle:Produit:detailproduit.html.twig */
class __TwigTemplate_269afb4b868c161d51a74d9307c3cbdf55ee2c9964244e0087d6dab4632e0553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Produit:detailproduit.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Produit:detailproduit.html.twig", 6)->display($context);
        // line 7
        echo "      ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Produit:detailproduit.html.twig", 7)->display($context);
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
          <h1>
          Détail des produits
            
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"glyphicon glyphicon-hand-right\"></i> Accueil</a></li>
            <li class=\"active\">Produit</li>
            <li class=\"active\">détail des produits</li>
          </ol>
        </section>
<!-- Main content -->
        <section class=\"content\">
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <div class=\"box\">
              
      <div class=\"box-body\">
            
                <div class=\"panel-body\">

          <!----partie----->
                    <div class=\"container\">
                        <div class=\"col-xs-12\">
               <div class=\"carousel slide\" id=\"myCarousel\">
                                        <div class=\"carousel-inner\">
                             
\t\t\t\t\t\t\t\t  <div class=\"cordonner-emplyer\">
\t\t\t\t\t\t\t\t  ";
        // line 135
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array())) {
            // line 136
            echo "                                          <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "url", array()))), "html", null, true);
            echo "\" alt=\"\">
                                      ";
        } else {
            // line 138
            echo "                                          <img src=\"http://placehold.it/360x240\" alt=\"\">
                                 ";
        }
        // line 140
        echo "\t\t\t\t\t\t\t\t\t  <p><span>Nom:</span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t  <p><span>Déscription:</span>";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t  

\t\t\t\t\t\t\t\t  </div>


                                    
                                        </div>



                                        <!-- /.control-box -->

                                    </div><!-- /#myCarousel -->
  </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
\t</section>
\t</div>



";
        // line 167
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Produit:detailproduit.html.twig", 167)->display($context);
        // line 168
        echo "
    </div><!-- ./wrapper -->


    ";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Produit:detailproduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 168,  216 => 167,  187 => 141,  182 => 140,  178 => 138,  172 => 136,  170 => 135,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
