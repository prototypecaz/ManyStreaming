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

/* add-movie.block.html.twig */
class __TwigTemplate_026f21964f230c0d7c3f3a14ceec1e0558509fe1d05f22af264473c0845c965e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'movie' => [$this, 'block_movie'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('movie', $context, $blocks);
    }

    public function block_movie($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<form  class=\"d-flex flex-column justify-content-center align-items-center\" method=\"POST\" enctype=\"multipart/form-data\" action=\"./insert/insert-movie.php\" > 
<label for=\"titre\">Titre</label>
<input id=\"titre\" type=\"text\" name=\"titre\" placeholder=\"titre\" maxlength=\"75\" required>
<label for=\"description\">Description</label>
<input id=\"description\" type=\"text\" name=\"description\" placeholder=\"description\" required>
<label for=\"image\">Image</label>
<input id=\"image\" type=\"file\" name=\"image\" accept=\".jpg, .jpeg, .gif, .png, .bmp\" required>
<label for=\"video\">Lien vidéo</label>
<input id=\"video\" type=\"text\" name=\"video\" placeholder=\"video\" maxlength=\"255\" required>
<label for=\"prive\">Privée ?</label>
<input type=\"checkbox\" name=\"prive\" id=\"prive\" placeholder=\"0\" value=\"1\" >
<label for=\"categorie\">Catégorie  </label>
<select id=\"categorie\" name=\"categorie\">
<option value=\"\">Choisir votre categorie</option>
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 17
            echo "        <option value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["categorie"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["id"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["categorie"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["category"] ?? null) : null);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</select>
<label>Genre</label>
<select id=\"genre\" name=\"genre\">
<option value=\"\">Choisir votre genre</option>
  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 24
            echo "<option value=\"";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["gender"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["id"] ?? null) : null);
            echo "\">";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["gender"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["gender"] ?? null) : null);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</select>
<label>Année</label>
<select id=\"annee\" name=\"annee\">
<option value=\"\">Choisir l'année</option>
  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["years"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 31
            echo "<option value=\"";
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["year"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["id"] ?? null) : null);
            echo "\">";
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["year"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["year"] ?? null) : null);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</select>
<button type=\"submit\">Creer vidéo</button>




</form>

";
    }

    public function getTemplateName()
    {
        return "add-movie.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 33,  107 => 31,  103 => 30,  97 => 26,  86 => 24,  82 => 23,  76 => 19,  65 => 17,  61 => 16,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block movie %}
<form  class=\"d-flex flex-column justify-content-center align-items-center\" method=\"POST\" enctype=\"multipart/form-data\" action=\"./insert/insert-movie.php\" > 
<label for=\"titre\">Titre</label>
<input id=\"titre\" type=\"text\" name=\"titre\" placeholder=\"titre\" maxlength=\"75\" required>
<label for=\"description\">Description</label>
<input id=\"description\" type=\"text\" name=\"description\" placeholder=\"description\" required>
<label for=\"image\">Image</label>
<input id=\"image\" type=\"file\" name=\"image\" accept=\".jpg, .jpeg, .gif, .png, .bmp\" required>
<label for=\"video\">Lien vidéo</label>
<input id=\"video\" type=\"text\" name=\"video\" placeholder=\"video\" maxlength=\"255\" required>
<label for=\"prive\">Privée ?</label>
<input type=\"checkbox\" name=\"prive\" id=\"prive\" placeholder=\"0\" value=\"1\" >
<label for=\"categorie\">Catégorie  </label>
<select id=\"categorie\" name=\"categorie\">
<option value=\"\">Choisir votre categorie</option>
  {% for categorie in category %}
        <option value=\"{{categorie['id']}}\">{{categorie['category']}}</option>
  {% endfor %}
</select>
<label>Genre</label>
<select id=\"genre\" name=\"genre\">
<option value=\"\">Choisir votre genre</option>
  {% for gender in genders %}
<option value=\"{{gender['id']}}\">{{gender['gender']}}</option>
  {% endfor %}
</select>
<label>Année</label>
<select id=\"annee\" name=\"annee\">
<option value=\"\">Choisir l'année</option>
  {% for year in years %}
<option value=\"{{year['id']}}\">{{year['year']}}</option>
  {% endfor %}
</select>
<button type=\"submit\">Creer vidéo</button>




</form>

{% endblock %}", "add-movie.block.html.twig", "/var/www/html/streaming/themes/classic/templates/back-office/add-movie.block.html.twig");
    }
}
