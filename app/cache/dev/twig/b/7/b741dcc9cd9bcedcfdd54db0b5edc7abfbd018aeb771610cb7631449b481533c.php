<?php

/* SuiviVenteBundle:Offres:index.html.twig */
class __TwigTemplate_b741dcc9cd9bcedcfdd54db0b5edc7abfbd018aeb771610cb7631449b481533c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Offres:index.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Offres:index.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Offres:index.html.twig", 7)->display($context);
        // line 8
        echo "

    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Gestion Offres

            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("suivi_vente_admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
                <li class=\"active\">Gestion Offres</li>
                <li class=\"active\">Lister</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"box\">

                        <div class=\"box-body\">
                            <div class=\"box-body filterable\">
                                <div class=\"panel-heading\">

                                    <div class=\"pull-right\">
                                        <button class=\"btn btn-default btn-xs btn-filter\"><span class=\"glyphicon glyphicon-filter\"></span> Filter</button>
                                    </div>
                                </div>
                     
                                <table id=\"example1\" class=\"table table-bordered table-striped\">
                                    <thead>

                                        <tr class=\"filters\">

                                            <th><input type=\"text\" class=\"form-control\" placeholder=\"Nom\" disabled></th>
                                            <th><input type=\"text\" class=\"form-control\" placeholder=\"Description\" disabled></th>
                                            <th><input type=\"text\" class=\"form-control\" placeholder=\"Prix Unitaire\" disabled></th>
                                            <th><input type=\"text\" class=\"form-control\" placeholder=\"Status\" disabled></th>
                                            <th><input type=\"text\" class=\"form-control\" placeholder=\"Catégorie\" disabled></th>
                                            <th></th>
                                        </tr>
                                    </thead>



                                    <tbody>
                                        ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offresA"]) ? $context["offresA"] : $this->getContext($context, "offresA")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 57
            echo "                                            <tr>

                                                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prixunitaire", array()), "html", null, true);
            echo "</td>
                                                <td>
                                                ";
            // line 63
            if (($this->getAttribute($context["entity"], "status", array()) == "1")) {
                // line 64
                echo "                                                 <span class=\"label label-success\"> Active  </span>
                                                ";
            } else {
                // line 66
                echo "                                                <span class=\"label label-danger\"> Non active </span>
                                                ";
            }
            // line 68
            echo "                                                </td>
                                                <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "categ", array()), "nom", array()), "html", null, true);
            echo "</td>
                                                <td> 
                                                    <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offres_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-search\"></a>
                                                    <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offres_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-pencil\"></a>
                                                    <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offres_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-trash\" onClick=\"if (!confirm('vous voulez supprimer    ?')) {
                                                                    return false;
                                                                }\"   ></a>

                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                                    </tbody>

                                </table>
                                <div class=\"navigation\">
                                    ";
        // line 84
        echo $this->env->getExtension('knp_pagination')->render((isset($context["offresA"]) ? $context["offresA"] : $this->getContext($context, "offresA")));
        echo "

                                </div>
                                    
 
                                <div class=\"btn-table\">
                                  
                                     <button type=\"button\" class=\"btn btn-success pull-right\" data-toggle=\"modal\" data-target=\"#myModal\">Ajouter Offre</button> 
                                    <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("PDF_offre");
        echo "\"><button class=\"btn btn-primary pull-right\" style=\"margin-right: 5px;\"><i class=\"fa fa-download\"></i> Generate PDF</button></a>
                                </div>
                                    

                            </div><!--fin-1--->
</div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->


            <!-- Modal -->
            <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
                <div class=\"modal-dialog\">

                    <!-- Modal content-->
                    <div class=\"modal-content\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\"><strong style=\"color: #161617;\">Ajout Offre</strong></h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role=\"form\" method=\"Post\" action=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("offres_create");
        echo "\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <label for=\"nom\">Libellé</label>
                                    ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                </div>
                                <div class=\"form-group\">
                                    <label for=\"description\">Description</label>

                                    ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"date\">Prix Unitaire</label>

                                    ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixunitaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"date\">Status</label>

                                    ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"date\">Catégorie</label>

                                    ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categ", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"box-footer\">
                                    ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                                    <button type=\"submit\" class=\"btn btn-success \">Ajouter</button>
                                    <button type=\"reset\" value=\"Rénisialiser\" class=\"btn btn-annuler\">Annuler</button>
                                </div>

                            </div><!-- /.box -->

                        </form><!---end-form--->


                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-ferm\" data-dismiss=\"modal\"></button>
                        </div>
                    </div>

                </div>
            </div><!---end-model-->
        </section>

    </div><!-- ./wrapper -->

    ";
        // line 164
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Offres:index.html.twig", 164)->display($context);
        // line 165
        echo "



";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Offres:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 165,  267 => 164,  243 => 143,  237 => 140,  229 => 135,  221 => 130,  212 => 124,  203 => 118,  196 => 114,  171 => 92,  160 => 84,  154 => 80,  141 => 73,  137 => 72,  133 => 71,  128 => 69,  125 => 68,  121 => 66,  117 => 64,  115 => 63,  110 => 61,  106 => 60,  102 => 59,  98 => 57,  94 => 56,  53 => 18,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
