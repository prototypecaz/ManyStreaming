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

/* main.block.html.twig */
class __TwigTemplate_f41e46e721ed6d3018ac3d6c6ec1aee606263b007ad92928564d7214d7d2551d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'getAll' => [$this, 'block_getAll'],
            'gender' => [$this, 'block_gender'],
            'category' => [$this, 'block_category'],
            'backgroundImg' => [$this, 'block_backgroundImg'],
            'updateMovie' => [$this, 'block_updateMovie'],
            'movie' => [$this, 'block_movie'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('main', $context, $blocks);
    }

    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<main class=\"container-fluid\">

";
        // line 4
        if ((($context["page"] ?? null) === "")) {
            // line 5
            echo "<div class=\"bg-primary text-white h3 text-center rounded my-1 py-2\">
    Espace administrateur
</div>
<div class=\"d-flex flex-column align-items-center justify-content-center text-center mt-4 py-3 border-bleu\">
    <div class=\"col-8 Col-md-3 border-primary bg-dark h6 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3\">
         <a class=\"text-danger font-weight-bold py-3 pz-3\" href=\"./?delete-user\">Supprimer un user</a>
    </div>
    <div class=\"col-8 Col-md-3 border-primary bg-dark h6 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3\">
        <a class=\"text-danger font-weight-bold py-3 pz-3\" href=\"./?delete-video\">Supprimer une video</a>
    </div>
    <div class=\"col-8 Col-md-3 border-primary bg-dark h6 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3\">
         <a class=\"text-success font-weight-bold py-3 pz-3\" href=\"./?delete-video\">Modifier une video</a>
    </div>
    <div class=\"col-8 Col-md-3 border-primary bg-dark h6 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3\">
        <a class=\"text-success font-weight-bold py-3 pz-3\"  href=\"./?add-gender\">Modifier background</a>
    </div>
    <div class=\"col-8 Col-md-3 border-primary bg-dark h6 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3\">
        <a class=\"text-primary font-weight-bold py-3 pz-3\"  href=\"./?add-gender\">Ajouter un genre</a>
    </div>
    <div class=\"col-8 Col-md-3 border-primary bg-dark h6 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3\">
        <a class=\"text-primary font-weight-bold py-3 pz-3\"  href=\"./?add-gender\">Ajouter un une categorie</a>
    </div>
    
    <div class=\"col-8 Col-md-3 border-primary bg-dark h6 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3\">
        <a class=\"text-primary font-weight-bold py-3 pz-3\"  href=\"./?add-movie\">Ajouter une video</a>
    </div>
</div>

";
        } elseif (twig_in_filter("delete-user",         // line 33
($context["page"] ?? null))) {
            // line 34
            echo " ";
            $this->loadTemplate("get-all.block.html.twig", "main.block.html.twig", 34)->display($context);
            // line 35
            echo " ";
            $this->displayBlock('getAll', $context, $blocks);
            // line 36
            echo "
 ";
        } elseif (twig_in_filter("delete-video",         // line 37
($context["page"] ?? null))) {
            // line 38
            echo " ";
            $this->loadTemplate("get-all.block.html.twig", "main.block.html.twig", 38)->display($context);
            // line 39
            echo "
 ";
        } elseif (twig_in_filter("add-gender",         // line 40
($context["page"] ?? null))) {
            // line 41
            echo " ";
            $this->loadTemplate("add-gender.block.html.twig", "main.block.html.twig", 41)->display($context);
            // line 42
            echo " ";
            $this->displayBlock('gender', $context, $blocks);
            // line 43
            echo " ";
            $this->loadTemplate("add-category.block.html.twig", "main.block.html.twig", 43)->display($context);
            // line 44
            $this->displayBlock('category', $context, $blocks);
            // line 45
            echo " ";
            $this->loadTemplate("update-backgroundImg.block.html.twig", "main.block.html.twig", 45)->display($context);
            // line 46
            $this->displayBlock('backgroundImg', $context, $blocks);
            // line 47
            echo "
";
        } elseif (twig_in_filter("update-video",         // line 48
($context["page"] ?? null))) {
            // line 49
            $this->loadTemplate("update-movie.block.html.twig", "main.block.html.twig", 49)->display($context);
            // line 50
            $this->displayBlock('updateMovie', $context, $blocks);
            // line 51
            echo "
 
 ";
        } elseif (twig_in_filter("add-movie",         // line 53
($context["page"] ?? null))) {
            // line 54
            echo " ";
            $this->loadTemplate("add-movie.block.html.twig", "main.block.html.twig", 54)->display($context);
            // line 55
            echo " ";
            $this->displayBlock('movie', $context, $blocks);
            // line 56
            echo "   
";
        }
        // line 58
        echo "    
</main>

";
    }

    // line 35
    public function block_getAll($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 42
    public function block_gender($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 44
    public function block_category($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 46
    public function block_backgroundImg($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 50
    public function block_updateMovie($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 55
    public function block_movie($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "main.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  186 => 55,  180 => 50,  174 => 46,  168 => 44,  162 => 42,  156 => 35,  149 => 58,  145 => 56,  142 => 55,  139 => 54,  137 => 53,  133 => 51,  131 => 50,  129 => 49,  127 => 48,  124 => 47,  122 => 46,  119 => 45,  117 => 44,  114 => 43,  111 => 42,  108 => 41,  106 => 40,  103 => 39,  100 => 38,  98 => 37,  95 => 36,  92 => 35,  89 => 34,  87 => 33,  57 => 5,  55 => 4,  51 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block main %}
<main class=\"container-fluid\">

{% if page is same as('') %}
<div class=\"bg-primary text-white h3 text-center rounded my-1 py-2\">
    Espace administrateur
</div>
<div class=\"d-flex flex-column align-items-center justify-content-center text-center mt-4 py-3 border-bleu\">
    <div class=\"col-8 Col-md-3 border-primary bg-dark h6 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3\">
         <a class=\"text-danger font-weight-bold py-3 pz-3\" href=\"./?delete-user\">Supprimer un user</a>
    </div>
    <div class=\"col-8 Col-md-3 border-primary bg-dark h6 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3\">
        <a class=\"text-danger font-weight-bold py-3 pz-3\" href=\"./?delete-video\">Supprimer une video</a>
    </div>
    <div class=\"col-8 Col-md-3 border-primary bg-dark h6 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3\">
         <a class=\"text-success font-weight-bold py-3 pz-3\" href=\"./?delete-video\">Modifier une video</a>
    </div>
    <div class=\"col-8 Col-md-3 border-primary bg-dark h6 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3\">
        <a class=\"text-success font-weight-bold py-3 pz-3\"  href=\"./?add-gender\">Modifier background</a>
    </div>
    <div class=\"col-8 Col-md-3 border-primary bg-dark h6 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3\">
        <a class=\"text-primary font-weight-bold py-3 pz-3\"  href=\"./?add-gender\">Ajouter un genre</a>
    </div>
    <div class=\"col-8 Col-md-3 border-primary bg-dark h6 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3\">
        <a class=\"text-primary font-weight-bold py-3 pz-3\"  href=\"./?add-gender\">Ajouter un une categorie</a>
    </div>
    
    <div class=\"col-8 Col-md-3 border-primary bg-dark h6 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3\">
        <a class=\"text-primary font-weight-bold py-3 pz-3\"  href=\"./?add-movie\">Ajouter une video</a>
    </div>
</div>

{% elseif 'delete-user' in page %}
 {% include('get-all.block.html.twig') %}
 {% block getAll %}{% endblock %}

 {% elseif 'delete-video' in page %}
 {% include('get-all.block.html.twig') %}

 {% elseif 'add-gender' in page %}
 {% include('add-gender.block.html.twig') %}
 {% block gender %}{% endblock %}
 {% include('add-category.block.html.twig') %}
{% block category %}{% endblock %}
 {% include('update-backgroundImg.block.html.twig') %}
{% block backgroundImg %}{% endblock %}

{% elseif 'update-video' in page %}
{% include('update-movie.block.html.twig') %}
{% block updateMovie %}{% endblock %}

 
 {% elseif 'add-movie' in page %}
 {% include('add-movie.block.html.twig') %}
 {% block movie %}{% endblock %}
   
{% endif %}
    
</main>

{% endblock %}", "main.block.html.twig", "/var/www/html/streaming/themes/classic/templates/back-office/main.block.html.twig");
    }
}
