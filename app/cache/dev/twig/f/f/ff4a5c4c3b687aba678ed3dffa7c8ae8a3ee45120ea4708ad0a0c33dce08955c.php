<?php

/* SuiviVenteBundle:Categorie:index.html.twig */
class __TwigTemplate_ff4a5c4c3b687aba678ed3dffa7c8ae8a3ee45120ea4708ad0a0c33dce08955c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Categorie:index.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Categorie:index.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Categorie:index.html.twig", 7)->display($context);
        // line 8
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Gestion Catégories

            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("suivi_vente_admin");
        echo "\"><i class=\"glyphicon glyphicon-hand-right\"></i> Accueil</a></li>
                <li class=\"active\">Gestion Catégories</li>
                <li class=\"active\">Liste</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                     
                    <div class=\"box\">

                        <div class=\"box-body filterable\">
                            <div class=\"panel-heading\">

                                <div class=\"pull-right\">
                                    <button class=\"btn btn-default btn-xs btn-filter\"><span class=\"glyphicon glyphicon-filter\"></span> Filtrer</button>
                                </div>
                            </div>
                             <h3>
               Liste Catégories

            </h3>
                            <table id=\"example1\" class=\"table table-bordered table-striped\">
                                <thead>

                                    <tr class=\"filters\">

                                        <th><input type=\"text\" class=\"form-control\" placeholder=\"Nom\" disabled></th>
                                        <th><input type=\"text\" class=\"form-control\" placeholder=\"Description\" disabled></th>
                                        <th><input type=\"text\" class=\"form-control\" placeholder=\"Date création\" disabled></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 54
            echo "                                        <tr>
                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 57
            if ($this->getAttribute($context["entity"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                            <td>

                                              <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#myModal2\" class=\"glyphicon glyphicon-search\"></a>
                                                
                                                <a  href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"  data-toggle=\"modal\" data-target=\"#myModal1\" >M</a>
                                                <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-trash\" onClick=\"if (!confirm('vous voulez supprimer    ?')) {
                                                                    return false;
                                                                }\"  ></a>
                                                
                                            </td>
                                        </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                                </tbody>

                            </table>

                            <div class=\"navigation\">
                                ";
        // line 76
        echo $this->env->getExtension('knp_pagination')->render((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "

                            </div>
                            <div class=\"btn-table\">
                                   <button type=\"button\" class=\"btn btn-success pull-right\" data-toggle=\"modal\" data-target=\"#myModal\">Ajouter Catégorie</button>
                                <a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("PDF_categ");
        echo "\"> <button class=\"btn btn-primary pull-right\" style=\"margin-right: 5px;\"><i class=\"fa fa-download\"></i> Generate PDF</button></a>  
                             
                            </div>

                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                    </div><!-- /.box -->
                </div><!-- /.col -->

                <!-- Modal -->
                <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
                    <div class=\"modal-dialog\">
                        <!-- Modal content-->
                        <div class=\"modal-content\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\"><strong style=\"color: #161617;\">Ajout Catégorie</strong></h3>
                            </div><!-- /.box-header -->
                            ";
        // line 98
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 99
            echo "                                <div class=\"alert alert-success\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "&times;</a>
                                </div>

                            ";
        }
        // line 104
        echo "
                            <!-- form start -->
                            <form role=\"form\" method=\"Post\" action=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("categorie_create");
        echo "\" class=\"form-ajout\">
                                <div class=\"box-body\">
                                    <div class=\"form-group\">
                                        <label for=\"nom\">Nom catégorie</label>
                                        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"description\">Description</label>

                                        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"date\">Date création</label>
                                        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateCreation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    </div>
                                    <div class=\"box-footer\">
                                        ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                                        <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
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
                <div class=\"modal fade\" id=\"myModal2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\">
                                                        <div class=\"modal-content\">

                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
 
            </div>

        </section>

    </div><!-- ./wrapper -->       

    ";
        // line 157
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Categorie:index.html.twig", 157)->display($context);
        // line 158
        echo "



";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Categorie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 158,  254 => 157,  217 => 123,  211 => 120,  204 => 116,  195 => 110,  188 => 106,  184 => 104,  177 => 100,  174 => 99,  172 => 98,  152 => 81,  144 => 76,  137 => 71,  123 => 63,  119 => 62,  114 => 60,  106 => 57,  102 => 56,  98 => 55,  95 => 54,  91 => 53,  52 => 17,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
