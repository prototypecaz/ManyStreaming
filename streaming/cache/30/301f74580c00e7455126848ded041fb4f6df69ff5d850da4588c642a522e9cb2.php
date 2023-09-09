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

/* genres.block.html.twig */
class __TwigTemplate_04729e5b60aca0051690ddbb526eb44c2345a9594b9215dd19e4b05304d3f076 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'genres' => [$this, 'block_genres'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('genres', $context, $blocks);
    }

    public function block_genres($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<section class=\"row\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choiceGenre"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 5
            echo "
<article class=\"col-4 mt-4\">
                <h5 class=\"text-center font-weight-bold text-white\">";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["genre"], "title", [], "any", false, false, false, 7);
            echo "</h5>
                <a href=\"./?uniquemov=";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 8);
            echo "\"><img src=\"./assets/upload/";
            echo twig_get_attribute($this->env, $this->source, $context["genre"], "picture", [], "any", false, false, false, 8);
            echo "\" class=\"w-50 d-block mx-auto\"></a>
            </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</section>

";
    }

    public function getTemplateName()
    {
        return "genres.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  61 => 8,  57 => 7,  53 => 5,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block genres %}

<section class=\"row\">
{% for genre in choiceGenre %}

<article class=\"col-4 mt-4\">
                <h5 class=\"text-center font-weight-bold text-white\">{{genre.title}}</h5>
                <a href=\"./?uniquemov={{genre.id}}\"><img src=\"./assets/upload/{{genre.picture}}\" class=\"w-50 d-block mx-auto\"></a>
            </article>
{% endfor %}
</section>

{% endblock %}", "genres.block.html.twig", "/var/www/html/streaming/streaming/themes/classic/templates/front-office/genres.block.html.twig");
    }
}
