<?php

/* SuiviVenteBundle:Contact:listescontact.html.twig */
class __TwigTemplate_bde062ce2cd7d7536aa734539f32b9cbad996502c22e5dcd2f98b03607e63cf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "SuiviVenteBundle:Contact:listescontact.html.twig", 1);
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
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "SuiviVenteBundle:Contact:listescontact.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "SuiviVenteBundle:Contact:listescontact.html.twig", 7)->display($context);
        // line 8
        echo "

    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Liste des Contacts

            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
                <li class=\"active\">Contact</li>
                <li class=\"active\">Liste des contacts</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"box\">

                        <div class=\"box-body\">

                            <div class=\"panel-body\">


                                <table id=\"example1\" class=\"table table-bordered table-striped\">
                                    <thead>
                                        <tr>
                                            <th>Logo</th>
                                            <th>Nom de l'entreprise</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Email</th>
                                            <th>Adresse</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 49
            echo "
                                            <tr>
                                                <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_detail", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . $this->getAttribute($this->getAttribute($context["a"], "image", array()), "url", array()))), "html", null, true);
            echo "\"  alt=\"\" width=\"100\"></a></td>
                                                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "Nomentreprise", array()), "html", null, true);
            echo "</td>
                                                <td>\t\t";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "Nom", array()), "html", null, true);
            echo "</td>
                                                <td>\t\t";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "Prenom", array()), "html", null, true);
            echo "</td>
                                                <td>\t";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "Email", array()), "html", null, true);
            echo " </td>
                                                <td>\t";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "adresse", array()), "html", null, true);
            echo " </td>
                                                <td>\t
                                                ";
            // line 58
            if (($this->getAttribute($context["a"], "status", array()) == "1")) {
                // line 59
                echo "                                               <span class=\"label label-success\"> Abonné </span>
                                        ";
            } else {
                // line 61
                echo "                                        <span class=\"label label-danger\"> Non abonné </span>
                                        ";
            }
            // line 63
            echo "                                                 </td>
                                                <td>

                                                    


                                                    <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_modifier", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-pencil\"></a>
                                                    <a id=\"iframe\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contrat_ajout", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\" data-fancybox-type=\"iframe\">Lien vers facture</a>
                                                 
                                                </td>

                                            </tr>

                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                                    </tbody>

                                </table>
                                <div class=\"navigation\">
                                    ";
        // line 81
        echo $this->env->getExtension('knp_pagination')->render((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")));
        echo "

                                </div>


                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->

            </div>\t\t  




    </div><!-- ./wrapper -->


";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Contact:listescontact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 81,  153 => 77,  140 => 70,  136 => 69,  128 => 63,  124 => 61,  120 => 59,  118 => 58,  113 => 56,  109 => 55,  105 => 54,  101 => 53,  97 => 52,  91 => 51,  87 => 49,  83 => 48,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
