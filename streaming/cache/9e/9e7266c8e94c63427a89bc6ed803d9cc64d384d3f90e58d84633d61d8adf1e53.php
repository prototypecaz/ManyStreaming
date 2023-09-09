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

/* add-category.block.html.twig */
class __TwigTemplate_79e1c6d3f1fda6eb543ce06283bb0bb727f84d962b14a1ca55a121dde841b506 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'category' => [$this, 'block_category'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('category', $context, $blocks);
        // line 9
        echo "

";
    }

    // line 1
    public function block_category($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <form method=\"POST\" action=\"./insert/insert-category.php\"> 
        <label for=\"category\">Rajouter categorie</label>
        <input type=\"text\" name=\"category\" id=\"category\" placeholder=\"Categorie\" required>
        
        <button type=\"submit\">Envoyer</button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "add-category.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 2,  46 => 1,  40 => 9,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block category %}
    <form method=\"POST\" action=\"./insert/insert-category.php\"> 
        <label for=\"category\">Rajouter categorie</label>
        <input type=\"text\" name=\"category\" id=\"category\" placeholder=\"Categorie\" required>
        
        <button type=\"submit\">Envoyer</button>
    </form>
{% endblock %}


", "add-category.block.html.twig", "/var/www/html/streaming/themes/classic/templates/back-office/add-category.block.html.twig");
    }
}
