<?php

/* SuiviVenteBundle:Contrat:ajout.html.twig */
class __TwigTemplate_1cadd3fe0219b9453c4711f93a95f95203552b2e841b25cca078d309d8516bf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Contrat:ajout.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Contrat:ajout.html.twig", 6)->display($context);
        // line 7
        echo "  ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Contrat:ajout.html.twig", 7)->display($context);
        // line 8
        echo "   

      <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
          Gestion Contrats

          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
            <li class=\"active\">Gestion Contrats</li>
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
                <div class=\"box-header\">
                  <h3 class=\"box-title\">Ajout Contrat</h3>
                </div><!-- /.box-header -->
                <!-- form start -->

                <form role=\"form\" method=\"Post\" action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("contrat_ajout", array("id" => 1));
        echo "\">
                  <div class=\"box-body\">
                    <div class=\"form-group\">
                      <label for=\"nom\">Nom abonnée</label>
                      ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "raisonSocial", array()), 'widget', array("attr" => array("class" => "form-control", "value" => (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array(), "any", false, true), "vars", array(), "any", false, true), "value", array()), (isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")))) : ((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")))))));
        echo "

                    </div>
                    <div class=\"form-group\">
                      <label for=\"description\">Numéro de CIN</label>

                       ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nCin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                      <label for=\"date\">Adresse</label>

                     ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                     <div class=\"form-group\">
                      <label for=\"date\">Ligne d'abonnement</label>

                     ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ligne", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                     <div class=\"form-group\">
                      <label for=\"date\">Date début</label>

                     ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'widget');
        echo "
                    </div>
                     <div class=\"form-group\">
                      <label for=\"date\">Date fin</label>

                     ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'widget');
        echo "
                    </div>
                     <div class=\"form-group\">
                      <label for=\"date\">Type de produits</label>

                     ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prod", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                      <label for=\"date\">Montant de Forfait</label>

                     ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montantForfait", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    
               <div class=\"box-footer\">
                      ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                    <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>

                  </div>
                       


                            </form>
              </div><!-- /.box -->
</section>
 </div>
<script>
date1 = new Date('2012-07-20 00:00:00');
date2 = new Date('2012-10-29 22:16:57');
diff = dateDiff(date1, date2);
alert(\"Entre le \"+date1.toString()+\" et \"+date2.toString()+\" il y a \"+diff.day+\" jours, \"+diff.hour+\" heures, \"+diff.min+\" minutes et \"+diff.sec+\" secondes\");
</script>
        ";
        // line 98
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Contrat:ajout.html.twig", 98)->display($context);
        // line 99
        echo "


        ";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Contrat:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 99,  163 => 98,  143 => 81,  136 => 77,  128 => 72,  120 => 67,  112 => 62,  104 => 57,  96 => 52,  88 => 47,  79 => 41,  72 => 37,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
