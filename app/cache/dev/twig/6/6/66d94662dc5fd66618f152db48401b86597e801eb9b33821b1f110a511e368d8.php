<?php

/* SuiviVenteBundle:Default:testventechef.html.twig */
class __TwigTemplate_66d94662dc5fd66618f152db48401b86597e801eb9b33821b1f110a511e368d8 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
    <meta charset=\"utf-8\">
    <title>Suivi vente |Tunisie Telecom</title>
    <meta name=\"generator\" content=\"Bootply\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"//html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

</head>
<body>
<header class=\"navbar navbar-bright navbar-fixed-top\" role=\"banner\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a href=\"/\" class=\"navbar-brand\">Acceuil</a>
        </div>
        <nav class=\"collapse navbar-collapse\" role=\"navigation\">
            <ul class=\"nav navbar-nav\">
                <li>
                    <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("suivi_vente_chef");
        echo "\">Ventes</a>
                </li>
                <li>
                    <a href=\"#\">Statistiques</a>
                </li>
                <li>
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Quiter</a>
                </li>

            </ul>
            <ul class=\"nav navbar-right navbar-nav\">
                <li class=\"dropdown\">
                    Profil:Chef  Login:";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "


                    <ul class=\"dropdown-menu\" style=\"padding:12px;\">
                        <form class=\"form-inline\">
                            <button type=\"submit\" class=\"btn btn-default pull-right\"><i class=\"glyphicon glyphicon-search\"></i></button><input type=\"text\" class=\"form-control pull-left\" placeholder=\"Search\">
                        </form>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>

<div id=\"masthead\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7\">
                <h1>SUIVI VENTE
                    <p class=\"lead\"></p>
                </h1>
            </div>
            <div class=\"col-md-5\">
                <div class=\"well well-lg\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">

                            <img class=\"img-logo\"  src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/tt400.jpg"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /cont -->

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-md-12\">

                <div class=\"top-spacer\"> </div>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-12\">

            <div class=\"panel\">
                <h1 class=\"h1-intern\">Liste des ventes</h1>
                <div class=\"panel-body\">


                 <table class=\"table table-bordered\">
                 <thead>
                     <tr>
                          
                           <td>Libellé</td>
                           <td>Quantité</td>
                            <td>Catégorie</td>
                           <td>Date</td>
                          
                        </tr>
                      ";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operation"]) ? $context["operation"] : $this->getContext($context, "operation")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 111
            echo "                       <tr>
                          
                           <td>\t\t";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nom", array()), "html", null, true);
            echo "
                                    ";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "categ", array()), "nom", array()), "html", null, true);
            echo "
                           </td>

                          
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "              </thead>
              </table>            
            </div><!--/col-12-->
            </div>
        </div>
    </div>
</div>

<hr>



<hr>

<hr>

<footer>
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-sm-6\">
                <p class=\"pull-right\">Copyright &copy; <a href=\"http://www.bootply.com\">Tunisie Telecom</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- script references -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:Default:testventechef.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 148,  172 => 120,  160 => 114,  156 => 113,  152 => 111,  148 => 110,  106 => 71,  76 => 44,  67 => 38,  58 => 32,  33 => 10,  29 => 9,  19 => 1,);
    }
}
