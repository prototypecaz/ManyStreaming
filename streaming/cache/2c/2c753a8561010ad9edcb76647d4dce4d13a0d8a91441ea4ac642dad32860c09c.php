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

/* categories.block.html.twig */
class __TwigTemplate_d536f6776ec0e090283bae438dcd5a4eee69896a3ce7cd718d9b7db6a4385cf1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'categories' => [$this, 'block_categories'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->displayBlock('categories', $context, $blocks);
    }

    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choiceCategory"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 6
            echo "<div class=\"mt-2\">
<a class=\"btn btn-primary d-flex flex-column font-weight-bold\" href=\"./?genres=";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["choice"], "id", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["choice"], "gender", [], "any", false, false, false, 7);
            echo "</a>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
    }

    public function getTemplateName()
    {
        return "categories.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  55 => 7,  52 => 6,  48 => 5,  45 => 4,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# recupère les categries avec des lien qui contient des GET qui contient l'id
de la categorie choisie via la boucle for #}
{% block categories %}

{% for choice in choiceCategory %}
<div class=\"mt-2\">
<a class=\"btn btn-primary d-flex flex-column font-weight-bold\" href=\"./?genres={{choice.id}}\">{{choice.gender}}</a>
</div>

{% endfor %}

{% endblock %}
", "categories.block.html.twig", "/var/www/html/streaming/streaming/themes/classic/templates/front-office/categories.block.html.twig");
    }
}
