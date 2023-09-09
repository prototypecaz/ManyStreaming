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

/* recherche.block.html.twig */
class __TwigTemplate_325eb480f706a43c83f277355adf8ee7975093a633d292b6445c10701f5ca922 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'recherche' => [$this, 'block_recherche'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('recherche', $context, $blocks);
    }

    public function block_recherche($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"d-flex flex-wrap\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recherche"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["search"]) {
            // line 4
            echo "<div class=\"col-4\">
<h2 class=\"text-warning text-center\">";
            // line 5
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["search"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["title"] ?? null) : null);
            echo "</h2>
<a href=\"./?uniquemov=";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["search"], "id", [], "any", false, false, false, 6);
            echo "\"><img src=\"./assets/upload/";
            echo twig_get_attribute($this->env, $this->source, $context["search"], "picture", [], "any", false, false, false, 6);
            echo "\" class=\"w-50 d-block mx-auto\"></a>

</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "recherche.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  59 => 6,  55 => 5,  52 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block recherche %}
<div class=\"d-flex flex-wrap\">
{% for search in recherche %}
<div class=\"col-4\">
<h2 class=\"text-warning text-center\">{{search['title']}}</h2>
<a href=\"./?uniquemov={{search.id}}\"><img src=\"./assets/upload/{{search.picture}}\" class=\"w-50 d-block mx-auto\"></a>

</div>
{% endfor %}
</div>
{% endblock %}", "recherche.block.html.twig", "/var/www/html/streaming/themes/classic/templates/front-office/recherche.block.html.twig");
    }
}
