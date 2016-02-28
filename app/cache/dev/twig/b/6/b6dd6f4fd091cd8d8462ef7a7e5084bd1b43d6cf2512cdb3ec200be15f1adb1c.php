<?php

/* SuiviVenteBundle:PDF:vente.html.twig */
class __TwigTemplate_b6dd6f4fd091cd8d8462ef7a7e5084bd1b43d6cf2512cdb3ec200be15f1adb1c extends Twig_Template
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
        echo "<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <title>Liste Ventes</title>
        <link rel=\"stylesheet\" href=\"style.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon-32x32.png"), "html", null, true);
        echo "\" />
        <script src=\"script.js\"></script>
    </head>
    <body >
        <div class=\"bloc-total\">
            <div class=\"date-jour\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["myEntity"]) ? $context["myEntity"] : $this->getContext($context, "myEntity")), "html", null, true);
        echo "</div>

            <div class=\"bloc-haut\">
                <h1 class=\"tunise-telecome\">Direction Régionale Ben Arous</h1>
                  <h2 >Agence ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["espace"]) ? $context["espace"] : $this->getContext($context, "espace")), "html", null, true);
        echo " </h2>
                <img src=\"C:\\wamp\\www\\DashboardCommercial\\web\\bundles\\adminTemplate\\img\\tt400.jpg\" width=\"250\" height=\"100\" alt=\"caré\" class=\"img-log\" />
                <div class=\"clear_both\"></div>
            </div>

            <h1 align=\"center\">Liste des ventes </h1>
            <table class=\"table-pfd\" align=\"center\">
                <tr>
                    <th>Offres</th>
                    <th>Quantité</th>

                    <th>Date</th>
                </tr>
                ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vente"]) ? $context["vente"] : $this->getContext($context, "vente")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 29
            echo "                    <tr>
                        <td class=\"large\">
                            ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "offres", array()), "nom", array()), "html", null, true);
            echo "
                        </td>
                        <td class=\"large\">
                            ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "quantite", array()), "html", null, true);
            echo "
                        </td>
                        <td class=\"large\">
                            ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "date", array()), "Y/m/d"), "html", null, true);
            echo "
                        </td>


                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
            </table>
        </div>
    </body>
</html>
<style>
    .bloc-total{
       
        padding: 15px;
    }
    body{
         background:graytext;
    }
    h2{
        font-weight:bold;
        font-size:14px;
    }
    h1{
        font-weight:bold;
        font-size:17px;
        display:block;
     
        border-bottom: 1px solid #0000FF;
    }
    .table-pfd {
    border-collapse: collapse;
    display: block;
    margin: 0 auto;
    width:500px;
   }

    .table-pfd, .table-pfd td,.table-pfd th {
        border: 1px solid black;
    }
    .table-pfd td,.table-pfd th{
        padding: 5px;
    }
    .table-pfd .large{
        width:200px;
        alignment-adjust:auto;
    }
    .bloc-haut{
        display: block;
    }
    .tunise-telecome{
        float: left;
    }
    .img-log{
        float: right;
    }
    .date-jour{
        display: block;
        text-align: right;
        padding: 0 15px;
    }
    </style>";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:PDF:vente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 43,  77 => 37,  71 => 34,  65 => 31,  61 => 29,  57 => 28,  41 => 15,  34 => 11,  26 => 6,  19 => 1,);
    }
}
