<?php

/* SuiviVenteBundle:Vente:listesventechef.html.twig */
class __TwigTemplate_c0ad8d77065e843887e0b9a7406499fd010fb24811a960111006adcdc10dced5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Vente:listesventechef.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Vente:listesventechef.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Vente:listesventechef.html.twig", 7)->display($context);
        // line 8
        echo "

    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Liste des ventes

            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
                <li class=\"active\">Ventes</li>
                <li class=\"active\">Liste des ventes</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"box\">

                        <div class=\"box-body\">

                            <div class=\"panel-body\">
                                <form action=";
        // line 32
        echo $this->env->getExtension('routing')->getPath("oc_global_resultat-resultat1");
        echo " method=\"POST\">

                                    <div class=\"control-group rech\">
                                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

                                    </div>
                                    <div class=\"btn btn3\">
                                        <button type=\"submit\" class=\"btn btnrech\"></button>
                                    </div>
                                </form>
                                <table id=\"example1\" class=\"table table-bordered table-striped\">
                                    <thead>
                                        <tr>

                                            <th>Offres</th>
                                            <th>Quantité</th>

                                            <th>Date</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 55
            echo "                                            <tr>

                                                <td >";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "offres", array()), "nom", array()), "html", null, true);
            echo "</td>
                                                <td>\t";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "quantite", array()), "html", null, true);
            echo " </td>

                                                <td>\t\t";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "date", array()), "Y/m/d"), "html", null, true);
            echo " </td>

                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                                    </tbody>

                                </table>           
                                <div class=\"navigation\">
                                    ";
        // line 68
        echo $this->env->getExtension('knp_pagination')->render((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "

                                </div>
                                <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("PDF_vente");
        echo "\" class=\"glyphicon glyphicon-download-alt pdf\" TARGET='_blank'> </a> 
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
        </section>
    </div>\t\t  


    ";
        // line 80
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "SuiviVenteBundle:Vente:listesventechef.html.twig", 80)->display($context);
        // line 81
        echo "
</div><!-- ./wrapper -->


";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Vente:listesventechef.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 81,  146 => 80,  134 => 71,  128 => 68,  122 => 64,  112 => 60,  107 => 58,  103 => 57,  99 => 55,  95 => 54,  73 => 35,  67 => 32,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
