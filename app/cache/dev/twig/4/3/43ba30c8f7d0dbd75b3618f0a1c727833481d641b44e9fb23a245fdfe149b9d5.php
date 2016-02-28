<?php

/* SuiviVenteBundle:PDF:categ.html.twig */
class __TwigTemplate_43ba30c8f7d0dbd75b3618f0a1c727833481d641b44e9fb23a245fdfe149b9d5 extends Twig_Template
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
  <title>Titre de la page</title>
  <link rel=\"stylesheet\" href=\"style.css\">
  <link rel=\"icon\" type=\"image/x-icon\" href=\"/DashboardCommercial/web/favicon-32x32.png\" />
  <script src=\"script.js\"></script>
</head>
<body >
 <div class=\"bloc-total\">
     
    <div class=\"date-jour\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["myEntity"]) ? $context["myEntity"] : $this->getContext($context, "myEntity")), "html", null, true);
        echo "</div>
     <div class=\"bloc-haut\">
        <h1 class=\"tunise-telecome\">Direction Régionale Ben Arous</h1>
        
        <img src=\"C:\\wamp\\www\\DashboardCommercial\\web\\bundles\\adminTemplate\\img\\tt400.jpg\" width=\"250\" height=\"100\" alt=\"caré\" class=\"img-log\" />
        <div class=\"clear_both\"></div>
     </div>
   

<h1 align=\"center\">Liste des catégories </h1>
<table class=\"table-pfd\" align=\"center\">
    <tr>
    <th>Nom</th>
    <th>Description</th>
    <th>Date création</th>

    </tr>
";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 30
            echo "    <tr>
        <td class=\"large\">
    ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", array()), "html", null, true);
            echo "
        </td>
        <td class=\"large\">
    ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "description", array()), "html", null, true);
            echo "
        </td>
        <td class=\"large\">
    ";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "dateCreation", array()), "j-m-Y"), "html", null, true);
            echo "
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</table>
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
        return "SuiviVenteBundle:PDF:categ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 42,  72 => 38,  66 => 35,  60 => 32,  56 => 30,  52 => 29,  32 => 12,  19 => 1,);
    }
}
