<?php

/* SuiviVenteBundle:Recette:index.html.twig */
class __TwigTemplate_09816fc64d0cd1c844f1ae161fbd3b040980fdbb1283c12dcf27e5813b99c152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Recette:index.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Recette:index.html.twig", 6)->display($context);
        // line 7
        echo "      ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Recette:index.html.twig", 7)->display($context);
        // line 8
        echo "

 <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
      <br>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"glyphicon glyphicon-hand-right\"></i> Accueil</a></li>
            <li class=\"active\">Recette</li>
            <li class=\"active\">Liste des Recettes</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class=\"content\">
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <div class=\"box\">
                <div class=\"box-header\">
                  <span class=\"objectif\">Recette par date</span>

                     <form method=\"post\" action=";
        // line 29
        echo $this->env->getExtension('routing')->getPath("recette_resultat");
        echo " class=\"formdate\">
                       ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formdate"]) ? $context["formdate"] : $this->getContext($context, "formdate")), 'form_start');
        echo "
                       ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formdate"]) ? $context["formdate"] : $this->getContext($context, "formdate")), "date1", array()), 'label');
        echo "
                       ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formdate"]) ? $context["formdate"] : $this->getContext($context, "formdate")), "date1", array()), 'errors');
        echo "
                       ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formdate"]) ? $context["formdate"] : $this->getContext($context, "formdate")), "date1", array()), 'widget');
        echo "
                       ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formdate"]) ? $context["formdate"] : $this->getContext($context, "formdate")), "date2", array()), 'label');
        echo "
                       ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formdate"]) ? $context["formdate"] : $this->getContext($context, "formdate")), "date2", array()), 'errors');
        echo "
                       ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formdate"]) ? $context["formdate"] : $this->getContext($context, "formdate")), "date2", array()), 'widget');
        echo "
                      
                       <button type=\"submit\" class=\"btn btn-primary\">Ok</button>
                     ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formdate"]) ? $context["formdate"] : $this->getContext($context, "formdate")), 'form_end');
        echo "

                     </form>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table id=\"exemple1\" class=\"table\">
                    <thead>
                      <tr>

                <th>Offres</th>
                <th>Quantité</th>
                <th>Prix</th>
                <th>Date</th>
                <th>Prix total</th>

                      </tr>
                    </thead>
                    <tbody>
                     ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recette"]) ? $context["recette"] : $this->getContext($context, "recette")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 58
            echo "                <tr>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "offres", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "quantite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "offres", array()), "prixunitaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y/m/d"), "html", null, true);
            echo "</td>
                <td class=\"rowDataSd\">";
            // line 63
            $context["prixtotal"] = ($this->getAttribute($this->getAttribute($context["entity"], "offres", array()), "prixunitaire", array()) * $this->getAttribute($context["entity"], "quantite", array()));
            // line 64
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["prixtotal"]) ? $context["prixtotal"] : $this->getContext($context, "prixtotal")), "html", null, true);
            echo "
                </td>
                </tr>
                
    
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        
         <tr>
             <td class=\"total\">
                 Total général
             </td>
              <td>

             </td>
              <td>

             </td>
              <td class=\"total\">
                  <td class=\"totalCol\">Total:</td>
             </td>
             

             </td>
         </tr>
                    </tbody>
                  
                  </table>
                  
                 </div>
      

  </div><!-- /.box-body -->

              </div><!-- /.box -->
          
            </div><!-- /.col -->
          </div><!-- /.row -->
\t</section>
 </div>


";
        // line 105
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Recette:index.html.twig", 105)->display($context);
        // line 106
        echo "

    </div><!-- ./wrapper -->
    

    ";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Recette:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 106,  194 => 105,  157 => 70,  144 => 64,  142 => 63,  138 => 62,  134 => 61,  130 => 60,  126 => 59,  123 => 58,  119 => 57,  98 => 39,  92 => 36,  88 => 35,  84 => 34,  80 => 33,  76 => 32,  72 => 31,  68 => 30,  64 => 29,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
