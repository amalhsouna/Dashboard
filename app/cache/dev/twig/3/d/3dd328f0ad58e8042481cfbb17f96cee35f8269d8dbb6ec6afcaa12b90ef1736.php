<?php

/* SuiviVenteBundle:Categorie:show.html.twig */
class __TwigTemplate_3dd328f0ad58e8042481cfbb17f96cee35f8269d8dbb6ec6afcaa12b90ef1736 extends Twig_Template
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
        echo "
              
                <div class=\"box-header\">
                 
                  <h3 class=\"box-title\" Fontcolor=\"bleu\">Offre ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
              

                <table class=\"record_properties\">
                    <tbody>
                       
                        <tr>
                            <th>Nom  :</th>
                            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Description  :</th>
                            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
                        </tr>
                       
                       
                    </tbody>
                </table>
        


              </div><!-- /.box -->
</section>";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Categorie:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 19,  38 => 15,  25 => 5,  19 => 1,);
    }
}
