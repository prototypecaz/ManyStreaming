<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* head.block.html.twig */
class __TwigTemplate_adfc4c40b3da99d9fa3a61342e92e32a43efefc13192872b0964a6a9d6f9d9da extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<!-- Balise ouvrante : Contenu HTML est ici -->
<html lang=\"fr\">

    <!-- Il s'agit balise enfant de la balise parent html-->
    <head>

        <!-- Une balise posséde des attributs comme \"charset\" et 
        une valeur comme utf-8 -->
        <!-- <nomDeLaBalise nomDeAttribut=\"valeur\"></nomDeLaBalise> -->

        <meta charset=\"utf-8\">

        <!-- Permet la compatiblité de la langue avec Internet Explorer (IE) -->
        <meta name=\"language\" content=\"fr-FR\">
        
        <!-- Nom et le prenom de l'auteur -->
        <meta name=\"author\" content=\"Mani et guillaume\">
        
        <!-- Nom de l'agence -->
        <meta name=\"b\" content=\" Agence de e-commerce de pop\" />

        <!-- Décrit le contenu de la page (environ 156 mots) -->
        <meta name=\"description\" content=\"site de streaming\">
        
        <!-- 
            Aide au référencement par la recherche de mot-clés (environ 10% du total des mots dans la page) 
            !deprecated!
        -->
        <meta name=\"keywords\" content=\"film, series, documentaires\">

        <!-- Informer BootStrap des dimensions des écrans -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        
        <link rel=\"stylesheet\" href=\"./assets/css/style.css\"

        <!--Link css de Bootstrap-->
         <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"./assets/lib/bootstrap/bootstrap.min.css?version=4.5.0\"/>

        <title>";
        // line 42
        echo ($context["title"] ?? null);
        echo "</title>
        ";
        // line 44
        echo "        <style>";
        $this->loadTemplate("background.block.css.twig", "head.block.html.twig", 44)->display($context);
        echo " </style>
    </head>

    ";
    }

    public function getTemplateName()
    {
        return "head.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 44,  89 => 42,  48 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block head %}
<!-- Balise ouvrante : Contenu HTML est ici -->
<html lang=\"fr\">

    <!-- Il s'agit balise enfant de la balise parent html-->
    <head>

        <!-- Une balise posséde des attributs comme \"charset\" et 
        une valeur comme utf-8 -->
        <!-- <nomDeLaBalise nomDeAttribut=\"valeur\"></nomDeLaBalise> -->

        <meta charset=\"utf-8\">

        <!-- Permet la compatiblité de la langue avec Internet Explorer (IE) -->
        <meta name=\"language\" content=\"fr-FR\">
        
        <!-- Nom et le prenom de l'auteur -->
        <meta name=\"author\" content=\"Mani et guillaume\">
        
        <!-- Nom de l'agence -->
        <meta name=\"b\" content=\" Agence de e-commerce de pop\" />

        <!-- Décrit le contenu de la page (environ 156 mots) -->
        <meta name=\"description\" content=\"site de streaming\">
        
        <!-- 
            Aide au référencement par la recherche de mot-clés (environ 10% du total des mots dans la page) 
            !deprecated!
        -->
        <meta name=\"keywords\" content=\"film, series, documentaires\">

        <!-- Informer BootStrap des dimensions des écrans -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        
        <link rel=\"stylesheet\" href=\"./assets/css/style.css\"

        <!--Link css de Bootstrap-->
         <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"./assets/lib/bootstrap/bootstrap.min.css?version=4.5.0\"/>

        <title>{{ title }}</title>
        {# façon d'inclure le css directement dans le head : voir le background.block.css.twig  #}
        <style>{% include (\"background.block.css.twig\") %} </style>
    </head>

    {% endblock %}", "head.block.html.twig", "/var/www/html/streaming/streaming/themes/classic/templates/front-office/head.block.html.twig");
    }
}
