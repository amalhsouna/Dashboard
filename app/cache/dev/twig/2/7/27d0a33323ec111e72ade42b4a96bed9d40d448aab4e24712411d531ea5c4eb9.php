<?php

/* SuiviVenteBundle:Vente:ajoutventechef.html.twig */
class __TwigTemplate_27d0a33323ec111e72ade42b4a96bed9d40d448aab4e24712411d531ea5c4eb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Vente:ajoutventechef.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Vente:ajoutventechef.html.twig", 6)->display($context);
        // line 7
        echo "      ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Vente:ajoutventechef.html.twig", 7)->display($context);
        // line 8
        echo "
  <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
          Ajout ventes
            
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"glyphicon glyphicon-hand-right\"></i> Accueil</a></li>
            <li class=\"active\">Ventes</li>
            <li class=\"active\">Ajouter vente</li>
          </ol>
        </section>
\t<section class=\"content\">
          <div class=\"row\">
              
            <div class=\"col-xs-12\">
      
            <div class=\"box-body bloc-l\">
            <div class=\"tabs_cont\" id=\"tabs-1\">
             ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryNames"]) ? $context["categoryNames"] : $this->getContext($context, "categoryNames")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 30
            echo "                <h2> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nom", array()), "html", null, true);
            echo "</h2>
             ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["a"], "offre", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                echo " 
                 <a class=\"cli\" href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "id", array()), "html", null, true);
                echo "\">  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "nom", array()), "html", null, true);
                echo "</a>
             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    

            </div><!--/col-12-->

            </div>
             <div class=\"box-body bloc-r\">
              ";
        // line 40
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            echo "  
                <div class=\"alert alert-success\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                ";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "

                  </div>
                ";
        }
        // line 47
        echo "             <form method=\"post\" enctype=\"multipart/form-data\" class=\"form-ajout\">
                   
                    <div class=\"control-group rech\">
                        ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                         <div class=\"form-group\">
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "offres", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                        <div class=\"clear_both\"></div>
                      <div class=\"btn btn3\">
                            <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
                            <button type=\"reset\" value=\"Rénisialiser\" class=\"btn btn-annuler\">Annuler</button>
                      </div>
                    ";
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </form>
                </div>
            <div class=\"clear_both\"></div>
                  
                
 
           
              
      
        
        <!----debut---------!---->

    


      </div><!-- /#myCarousel -->
  </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
\t</section>
\t</div>



";
        // line 92
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Vente:ajoutventechef.html.twig", 92)->display($context);
        // line 93
        echo "
    </div><!-- ./wrapper -->


    ";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Vente:ajoutventechef.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 93,  179 => 92,  150 => 66,  139 => 58,  133 => 55,  127 => 52,  122 => 50,  117 => 47,  110 => 43,  104 => 40,  96 => 34,  89 => 33,  79 => 32,  73 => 31,  68 => 30,  64 => 29,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
