<?php

/* UtilisateurBundle:Liste:liste-admin.html.twig */
class __TwigTemplate_e85faaffc7199b2e9983230efcd0bbc3e5442b522bc413dbbff24a4dc02f94d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SuiviVenteBundle::layout.html.twig", "UtilisateurBundle:Liste:liste-admin.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <title>Suivi Vente | Dashboard</title>


</head>
<body class=\"skin-blue\">
    <div class=\"wrapper\">

        ";
        // line 11
        $this->loadTemplate("SuiviVenteBundle::header.html.twig", "UtilisateurBundle:Liste:liste-admin.html.twig", 11)->display($context);
        // line 12
        echo "        ";
        $this->loadTemplate("SuiviVenteBundle::colonne-gauche.html.twig", "UtilisateurBundle:Liste:liste-admin.html.twig", 12)->display($context);
        // line 13
        echo "
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    Gestion des utilisateurs

                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("suivi_vente_admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
                    <li class=\"active\">Gestion utilisateur</li>
                    <li class=\"active\"> Liste des utilisateurs</li>
                </ol>
            </section>

            <!-- Main content -->
            ";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "            <section class=\"content\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"box\">

                            <div class=\"box-body filterable\">
                                <div class=\"panel-heading\">

                                    <div class=\"pull-right\">
                                        <button class=\"btn btn-default btn-xs btn-filter\"><span class=\"glyphicon glyphicon-filter\"></span> Filter</button>
                                    </div>
                                </div>


                                <table id=\"example1\" class=\"table table-bordered table-striped\" >
                                    <thead>
                                        <tr  class=\"filters\">


                                            <th><input type=\"text\" class=\"form-control\" placeholder=\"Login\" disabled></th>
                                            <th><input type=\"text\" class=\"form-control\" placeholder=\"Email\" disabled></th>
                                            <th><input type=\"text\" class=\"form-control\" placeholder=\"Rôle\" disabled></th>
                                            <th><input type=\"text\" class=\"form-control\" placeholder=\"Espace TT\" disabled></th>
                                            <th><input type=\"text\" class=\"form-control\" placeholder=\"dernier login\" disabled></th>

                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 63
            echo "                                            <tr class=\"active\">


                                                <td >";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                                                <td > ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                                                <td > 
                                                    ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "roles", array()), 0, array(), "array"), "html", null, true);
            echo "
                                                </td>
                                                <td >";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "espace", array()), "html", null, true);
            echo "</td>
                                                <td >";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()), "d/m/Y"), "html", null, true);
            echo "</td>

                                                ";
            // line 74
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 75
                echo "                                                    <td style=\"width: 50px\">
                                                        <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_supprimeadmin", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" onClick=\"if (!confirm('vous voulez supprimer    ?')) {
                                                                    return false;
                                                                }\"  name=\"modal\"><img src=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/delete.jpg"), "html", null, true);
                echo "\" alt=\"picture\" width=\"30\" height=\"20\" /></a>

                                                    </td>
                                                ";
            }
            // line 82
            echo "                                            </tr>


                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                                    </tbody>
                                </table>
                                <div class=\"navigation\">
                                    ";
        // line 89
        echo $this->env->getExtension('knp_pagination')->render((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        echo "

                                </div>
                                <div class=\"btn-table\">
                                    
                                     <button type=\"button\" class=\"btn btn-success pull-right\" data-toggle=\"modal\" data-target=\"#myModal\">Ajouter Utilisateur</button> 
                                    <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("PDF_offre");
        echo "\"><button class=\"btn btn-primary pull-right\" style=\"margin-right: 5px;\"><i class=\"fa fa-download\"></i> Generate PDF</button></a>
                                    
                            
                                </div>

                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
 

            </section>
        </div>


        ";
        // line 109
        $this->loadTemplate("SuiviVenteBundle::footer.html.twig", "UtilisateurBundle:Liste:liste-admin.html.twig", 109)->display($context);
        // line 110
        echo "


    ";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "            ";
    }

    public function getTemplateName()
    {
        return "UtilisateurBundle:Liste:liste-admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 31,  200 => 30,  193 => 110,  191 => 109,  174 => 95,  165 => 89,  160 => 86,  151 => 82,  144 => 78,  139 => 76,  136 => 75,  134 => 74,  129 => 72,  125 => 71,  120 => 69,  115 => 67,  111 => 66,  106 => 63,  102 => 62,  70 => 32,  68 => 30,  58 => 23,  46 => 13,  43 => 12,  41 => 11,  32 => 4,  29 => 3,  11 => 2,);
    }
}
