<?php

/* SuiviVenteBundle:PDF:offre.html.twig */
class __TwigTemplate_c2cbf5a9bda68447c7d2b8c48eaa94795f92b410988ddc09d5ddc6cb78f02f28 extends Twig_Template
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
  <link rel=\"icon\" type=\"image/x-icon\" href=\"C:\\wamp\\www\\DashboardCommercial\\web\\favicon-32x32.png\" />
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
        
        <img src=\"C:\\wamp\\www\\DashboardCommercial\\web\\bundles\\adminTemplate\\img\\tt400.jpg\" width=\"250\" height=\"100\" alt=\"caré\" class=\"img-log\" />
        <div class=\"clear_both\"></div>
     </div>
   


<h1 align=\"center\">Liste des offres </h1>
<table class=\"table-pfd\" align=\"center\">
    <tr>
    <th>Nom</th>
    <th>Description</th>
    <th>Prix Unitaire</th>
    <th>Status</th>
    <th>Catégorie</th>
    </tr>
";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 32
            echo "    <tr>
        <td class=\"large\">
    ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", array()), "html", null, true);
            echo "
        </td>
        <td class=\"large\">
    ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "description", array()), "html", null, true);
            echo "
        </td>
        <td class=\"large\">
    ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "prixunitaire", array()), "html", null, true);
            echo "
        </td>
        <td class=\"large\">
    ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "status", array()), "html", null, true);
            echo "
        </td>
        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "categ", array()), "nom", array()), "html", null, true);
            echo "</td>
      
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        width:140px;
        alignment-adjust:auto;
    }
    </style>";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:PDF:offre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 49,  85 => 45,  80 => 43,  74 => 40,  68 => 37,  62 => 34,  58 => 32,  54 => 31,  31 => 11,  19 => 1,);
    }
}
