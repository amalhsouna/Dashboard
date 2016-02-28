<?php

/* SuiviVenteBundle:PDF:test.html.twig */
class __TwigTemplate_21b35bb7fd2a60db1371221a57f1e2ce873803afe34d69bdf36dc2da9adf19e2 extends Twig_Template
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
  <script src=\"script.js\"></script>
</head>
<body>
 <div class=\"bloc-total\">
    <h1>Tunisie Télécom</h1>

<h2>Liste des catégories :</h2>
<table class=\"table-pfd\">
    <tr>
    <th>Nom</th>
    <th>Description</th>
    <th>Date création</th>

    </tr>
";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 21
            echo "    <tr>
        <td>
    ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", array()), "html", null, true);
            echo "
        </td>
        <td class=\"large\">
    ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "description", array()), "html", null, true);
            echo "
        </td>
        <td >
    ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "dateCreation", array()), "Y-M-D"), "html", null, true);
            echo "
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</table>
  </div>
</body>
</html>
<style>
    .bloc-total{

        padding: 15px;
    }
    h2{
        font-weight:bold;
        font-size:14px;
    }
    h1{
        font-weight:bold;
        font-size:17px;
        display:block;
       background:url(../img/logo4.png);
        border-bottom: 1px solid #0000FF;
    }
    .table-pfd {
    border-collapse: collapse;
    display: block;
    margin: 0 auto;
   }

    .table-pfd, .table-pfd td,.table-pfd th {
        border: 1px solid black;
    }
    .table-pfd td,.table-pfd th{
        padding: 5px;
    }
    .table-pfd .large{
        width:200px;
    }
    </style>";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:PDF:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 33,  60 => 29,  54 => 26,  48 => 23,  44 => 21,  40 => 20,  19 => 1,);
    }
}
