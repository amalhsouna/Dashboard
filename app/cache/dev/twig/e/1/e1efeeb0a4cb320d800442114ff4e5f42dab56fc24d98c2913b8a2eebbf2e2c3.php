<?php

/* SuiviVenteBundle:Default:SwiftLayout/Ajoutvente.html.twig */
class __TwigTemplate_e1efeeb0a4cb320d800442114ff4e5f42dab56fc24d98c2913b8a2eebbf2e2c3 extends Twig_Template
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
        echo "   <html>
       <body>
         <p>  Les Nouvelles ventes ajoutées par Chef Agence ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " de Espace TT ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "espace", array()), "html", null, true);
        echo " </p> 
\t\t 
<table border=\"1\">
                 <thead>
                     <tr>
                          
                           <td color=\"blue\">Libellé</td>
                           <td>Quantité</td>
                            <td>Catégorie</td>
                           <td>Date</td>
                          
                        </tr>
                      ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vente"]) ? $context["vente"] : $this->getContext($context, "vente")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 16
            echo "                       <tr>
                          
                           <td>\t\t";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "offrelcle", array()), "nom", array()), "html", null, true);
            echo "</td>
                            <td>\t";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "quantite", array()), "html", null, true);
            echo " </td>
                           <td>\t\t";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "categorie", array()), "html", null, true);
            echo " </td>
                          
                           <td>\t\t";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "date", array()), "d/m/Y"), "html", null, true);
            echo " </td>
                          
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "              </thead>
              </table>
              </body>
                   </html>";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Default:SwiftLayout/Ajoutvente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 26,  61 => 22,  56 => 20,  52 => 19,  48 => 18,  44 => 16,  40 => 15,  23 => 3,  19 => 1,);
    }
}
