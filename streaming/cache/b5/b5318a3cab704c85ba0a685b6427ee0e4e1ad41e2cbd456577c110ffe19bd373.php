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

/* add-gender.block.html.twig */
class __TwigTemplate_bc80dbcf82dbdfaf60d45284cf09240b9564af86da2f9c16a29af7e08582e0fc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'gender' => [$this, 'block_gender'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('gender', $context, $blocks);
    }

    public function block_gender($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <form method=\"POST\" action=\"./insert/insert-gender.php\"> 
        <label for=\"gender\">genres</label>
        <input type=\"text\" name=\"gender\" id=\"gender\" placeholder=\"Genre\" required>
        <label for=\"category\">categories</label>
        <select name=\"category\" id=\"category\">
        <option value=\"\">Choirsir categories</option>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 9
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
        // line 11
        echo "        </select>
        <button type=\"submit\">Envoyer</button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "add-gender.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  57 => 9,  53 => 8,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block gender %}
    <form method=\"POST\" action=\"./insert/insert-gender.php\"> 
        <label for=\"gender\">genres</label>
        <input type=\"text\" name=\"gender\" id=\"gender\" placeholder=\"Genre\" required>
        <label for=\"category\">categories</label>
        <select name=\"category\" id=\"category\">
        <option value=\"\">Choirsir categories</option>
        {% for categorie in category %}
        <option value=\"{{categorie['id']}}\">{{categorie['category']}}</option>
        {% endfor %}
        </select>
        <button type=\"submit\">Envoyer</button>
    </form>
{% endblock %}
", "add-gender.block.html.twig", "/var/www/html/streaming/themes/classic/templates/back-office/add-gender.block.html.twig");
    }
}
