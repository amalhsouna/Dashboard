<?php

/* SuiviVenteBundle:Contact:detailcontact.html.twig */
class __TwigTemplate_5fa98a6ae2268e951abb5f0d3d0d6ae4306a4dfcebdbf30aef116dce983f1df2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Contact:detailcontact.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Contact:detailcontact.html.twig", 6)->display($context);
        // line 7
        echo "      ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Contact:detailcontact.html.twig", 7)->display($context);
        // line 8
        echo "    
    
 <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
          Détail du contact :";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "Nom", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "Prenom", array()), "html", null, true);
        echo "
            
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"glyphicon glyphicon-hand-right\"></i> Accueil</a></li>
            <li class=\"active\">Contact</li>
            <li class=\"active\">détail des contact</li>
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
                             
\t\t\t\t\t\t\t\t  <div class=\"cordonner-contact\">
                             <div class=\"colonne-gauche\">
\t\t\t\t\t\t\t\t  ";
        // line 41
        if ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "image", array())) {
            // line 42
            echo "                                          <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . $this->getAttribute($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "image", array()), "url", array()))), "html", null, true);
            echo "\" alt=\"\">
                                      ";
        } else {
            // line 44
            echo "                                          <img src=\"http://placehold.it/360x240\" alt=\"\">
                                 ";
        }
        // line 46
        echo "                                     <span class=\"blue\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_modifier", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()))), "html", null, true);
        echo "\">Modifier</a></span>

                              </div>
                                      <p><span>Nom de l'entreprise:</span>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "Nomentreprise", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t  <p><span>Nom:</span>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "Nom", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t  <p><span>Prénom:</span>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "Prenom", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t  <p><span>Email:</span>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "Email", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t  <p><span>Téléphone:</span>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "tel", array()), "html", null, true);
        echo "</p>

                                <div class=\"clear_both\"></div>

\t\t\t\t\t\t\t\t\t  </div>


                                    
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
        // line 77
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Contact:detailcontact.html.twig", 77)->display($context);
        // line 78
        echo "
    </div><!-- ./wrapper -->


    ";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Contact:detailcontact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 78,  143 => 77,  116 => 53,  112 => 52,  108 => 51,  104 => 50,  100 => 49,  93 => 46,  89 => 44,  83 => 42,  81 => 41,  49 => 14,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
