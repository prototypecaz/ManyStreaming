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
class __TwigTemplate_b493b5f503e1bb6ef9830a715fd23c132d3ef8f7af158fdb6d64d78d12b379ef extends Template
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
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<head>
    <title>";
        // line 3
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
        return array (  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
<head>
    <title>{{ title }}</title>
</head>
{% endblock %}", "head.block.html.twig", "/var/www/html/base/themes/classic/templates/head.block.html.twig");
    }
}
