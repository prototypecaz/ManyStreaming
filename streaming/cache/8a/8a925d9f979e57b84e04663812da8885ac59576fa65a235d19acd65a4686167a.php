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

/* uniquemov.block.html.twig */
class __TwigTemplate_190821af27ed44c558d189bb2c46dc28f87f4825c2f01f83c8ea6a80a646380d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'uniquemov' => [$this, 'block_uniquemov'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('uniquemov', $context, $blocks);
        // line 19
        echo "
";
    }

    // line 1
    public function block_uniquemov($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
   
    ";
        // line 4
        if (twig_test_empty(($context["uniqueMov"] ?? null))) {
            // line 5
            echo "        <h2>Vous n'etes pas connecté</h2>

        ";
        } else {
            // line 8
            echo "        <h2>";
            echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["uniqueMov"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "title", [], "any", false, false, false, 8);
            echo "</h2>

        <div class=\"embed-responsive embed-responsive-16by9\">
            <iframe class=\"embed-responsive-item\" src=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["uniqueMov"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "link", [], "any", false, false, false, 11);
            echo "\" allowfullscreen></iframe>
        </div>
    ";
        }
        // line 14
        echo "    

    

";
    }

    public function getTemplateName()
    {
        return "uniquemov.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  67 => 11,  60 => 8,  55 => 5,  53 => 4,  49 => 2,  45 => 1,  40 => 19,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block uniquemov %}

   
    {% if uniqueMov is empty %}
        <h2>Vous n'etes pas connecté</h2>

        {% else %}
        <h2>{{uniqueMov[0].title}}</h2>

        <div class=\"embed-responsive embed-responsive-16by9\">
            <iframe class=\"embed-responsive-item\" src=\"{{uniqueMov[0].link}}\" allowfullscreen></iframe>
        </div>
    {% endif %}
    

    

{% endblock %}

", "uniquemov.block.html.twig", "/var/www/html/streaming/themes/classic/templates/front-office/uniquemov.block.html.twig");
    }
}
