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

/* head.html.block.twig */
class __TwigTemplate_0cc4f92f64829296f6d4c3080a2cdc1cf0cfe80a2809af245ef991477dfcd892 extends Template
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
        // line 4
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo " <head>
    <title>";
        // line 6
        echo ($context["title"] ?? null);
        echo " - www.mani.com</title>
 </head>   
 ";
    }

    public function getTemplateName()
    {
        return "head.html.block.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  50 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" 
 
 
 {% block head %}
 <head>
    <title>{{ title }} - www.mani.com</title>
 </head>   
 {% endblock %}", "head.html.block.twig", "/var/www/html/base/themes/classic/templates/head.html.block.twig");
    }
}
