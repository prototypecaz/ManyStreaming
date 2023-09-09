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
class __TwigTemplate_bd8a10a6ba857ad3b309cbe9f3d48079b210372e6bb13963972df3a39aa3d5a1 extends Template
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
        
        <link rel=\"stylesheet\" href=\"../assets/css/style.css\"

        <!--Link css de Bootstrap-->
        <link rel=\"stylesheet\" href=\"../assets/lib/bootstrap/bootstrap.min.css?version=4.5.0\"/>
         <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/lib/datatables/jquery.dataTables.min.css?version=1.10.21\"/>
        

        <title>";
        // line 43
        echo ($context["title"] ?? null);
        echo "</title>
    </head>

    ";
    }

    public function getTemplateName()
    {
        return "head.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 43,  48 => 3,  41 => 2,  38 => 1,);
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
        
        <link rel=\"stylesheet\" href=\"../assets/css/style.css\"

        <!--Link css de Bootstrap-->
        <link rel=\"stylesheet\" href=\"../assets/lib/bootstrap/bootstrap.min.css?version=4.5.0\"/>
         <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/lib/datatables/jquery.dataTables.min.css?version=1.10.21\"/>
        

        <title>{{ title }}</title>
    </head>

    {% endblock %}", "head.block.html.twig", "/var/www/html/streaming/themes/classic/templates/back-office/head.block.html.twig");
    }
}
