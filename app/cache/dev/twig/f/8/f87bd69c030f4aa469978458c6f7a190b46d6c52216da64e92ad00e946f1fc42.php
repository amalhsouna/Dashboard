<?php

/* SuiviVenteBundle:Contact:ajoutcontact.html.twig */
class __TwigTemplate_f87bd69c030f4aa469978458c6f7a190b46d6c52216da64e92ad00e946f1fc42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Contact:ajoutcontact.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Contact:ajoutcontact.html.twig", 6)->display($context);
        // line 7
        echo "      ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Contact:ajoutcontact.html.twig", 7)->display($context);
        // line 8
        echo "

    <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            Gestion Contact

        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"glyphicon glyphicon-hand-right\"></i> Accueil</a></li>
            <li class=\"active\">Gestion Contact</li>
            <li class=\"active\">Ajouter</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
    <div class=\"row\">
    <!-- left column -->
    <div class=\"col-md-6\">
        <!-- general form elements -->
        <div class=\"box box-primary\">
               ";
        // line 31
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            echo "  
                <div class=\"alert alert-success\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                ";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "
                </div>
                ";
        }
        // line 37
        echo "    <article class=\"col5\">
    <div class=\"tabs_cont\" id=\"tabs-1\">
       <form method=\"post\" enctype=\"multipart/form-data\" class=\"form-ajout\">
\t      <div class=\"box-body\">
            <div class=\"form-group\">
               <div class=\"bloc-left\">
                 <h3 class=\"box-title\">Informations personnels </h3>
\t\t\t";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom", array()), 'label', array("label" => "Nom"));
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom", array()), 'errors');
        echo "
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Prenom", array()), 'label', array("label" => "Prénom"));
        echo "
                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Prenom", array()), 'errors');
        echo "
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Email", array()), 'label', array("label" => "Email"));
        echo "
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Email", array()), 'errors');
        echo "
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
                        <div class=\"form-group\">
\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'label', array("label" => "Téléphone"));
        echo "
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'errors');
        echo "
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label', array("label" => "Adresse"));
        echo "
                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
            </div>
                      
       
            <div class=\"bloc-right\">            
                         <h3 class=\"box-title\">Informations entreprise </h3>
\t\t\t<div class=\"form-group\">
\t\t\t";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nomentreprise", array()), 'label', array("label" => "Nom de l'entreprise"));
        echo "
                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nomentreprise", array()), 'errors');
        echo "
                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nomentreprise", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "TypeContact", array()), 'label', array("label" => "Type de contact"));
        echo "
                        ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "TypeContact", array()), 'errors');
        echo "
                        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "TypeContact", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteweb", array()), 'label', array("label" => "Site web"));
        echo "
                        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteweb", array()), 'errors');
        echo "
                        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteweb", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t\t
\t\t 
                ";
        // line 94
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t<div class=\"box-footer\">
                      ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                       </div>
                        </div>
           <div class=\"clear_both\"> </div> 
                    <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
                    <button type=\"reset\" value=\"Rénisialiser\" class=\"btn btn-primary\">Annuler</button>
                   
                      
                   
                 
                 
       </form>

      </div><!--fin-1--->

  </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
\t</section>
 </div>


";
        // line 119
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Contact:ajoutcontact.html.twig", 119)->display($context);
        // line 120
        echo "
    </div><!-- ./wrapper -->


    ";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Contact:ajoutcontact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 120,  246 => 119,  220 => 96,  215 => 94,  208 => 90,  204 => 89,  200 => 88,  194 => 85,  190 => 84,  186 => 83,  179 => 79,  175 => 78,  171 => 77,  160 => 69,  156 => 68,  152 => 67,  146 => 64,  142 => 63,  138 => 62,  132 => 59,  128 => 58,  124 => 57,  118 => 54,  114 => 53,  110 => 52,  104 => 49,  100 => 48,  96 => 47,  91 => 45,  87 => 44,  78 => 37,  72 => 34,  66 => 31,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
