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

/* index.master.html.twig */
class __TwigTemplate_3cc37830e4d644d73c2cf4bb1bb94a8890f11b58de46ef8a8d473473a1b3ae67 extends Template
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
        // line 2
        echo "
<!DOCTYPE html>
<html>

    ";
        // line 7
        echo "    ";
        $this->loadTemplate("head.block.html.twig", "index.master.html.twig", 7)->display($context);
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "    
    <body>

        <header>
            <nav>
                ";
        // line 16
        echo "               ";
        // line 17
        echo "
                ";
        // line 19
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 20
            echo "                    <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 20);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 20);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "text", [], "any", false, false, false, 20);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </nav>
        </header>

        <main>

            ";
        // line 28
        echo "            <h1>";
        echo twig_upper_filter($this->env, ($context["title"] ?? null));
        echo "</h1>
            
            <section>
                ";
        // line 32
        echo "                ";
        if ((null === ($context["isNull"] ?? null))) {
            // line 33
            echo "                    <p>isNull est nulle</p>
                ";
        }
        // line 35
        echo "
                ";
        // line 37
        echo "                ";
        if (twig_test_empty(($context["isEmpty"] ?? null))) {
            // line 38
            echo "                    <p>isEmpty est vide</p>
                ";
        }
        // line 40
        echo "
                ";
        // line 42
        echo "                ";
        if ( !twig_test_empty(($context["isNotEmpty"] ?? null))) {
            // line 43
            echo "                    <p>isNotEmpty n'est pas vide</p>
                ";
        }
        // line 45
        echo "
                ";
        // line 46
        if (((null === ($context["isNull"] ?? null)) && twig_test_empty(($context["isEmpty"] ?? null)))) {
            echo " 
                    <p>isNull est nulle et isEmpty est vide</p>
                ";
        }
        // line 49
        echo "
                ";
        // line 51
        echo "                ";
        if ((($context["isNotEmpty"] ?? null) === "value")) {
            // line 52
            echo "                    <p>isNotEmpty contient 'value'</p>
                ";
        }
        // line 54
        echo "
                ";
        // line 56
        echo "                ";
        if ( !(($context["isEmpty"] ?? null) === "value")) {
            // line 57
            echo "                    <p>isEmpty ne contient pas 'value'</p>
                ";
        }
        // line 59
        echo "            </section>

            ";
        // line 61
        if ((($context["page"] ?? null) === "accueil")) {
            // line 62
            echo "                ";
            $this->loadTemplate("accueil.html.twig", "index.master.html.twig", 62)->display($context);
            // line 63
            echo "            ";
        } elseif ((($context["page"] ?? null) === "realisations")) {
            // line 64
            echo "                ";
            $this->loadTemplate("realisations.html.twig", "index.master.html.twig", 64)->display($context);
            // line 65
            echo "            ";
        }
        // line 66
        echo "
        </main>

        <footer>
            <ul>
                ";
        // line 72
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["footer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 73
            echo "                    <li>";
            echo $context["text"];
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            </ul>
        </footer>

    </body>
</html>";
    }

    // line 9
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "index.master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 9,  191 => 75,  182 => 73,  177 => 72,  170 => 66,  167 => 65,  164 => 64,  161 => 63,  158 => 62,  156 => 61,  152 => 59,  148 => 57,  145 => 56,  142 => 54,  138 => 52,  135 => 51,  132 => 49,  126 => 46,  123 => 45,  119 => 43,  116 => 42,  113 => 40,  109 => 38,  106 => 37,  103 => 35,  99 => 33,  96 => 32,  89 => 28,  82 => 22,  69 => 20,  64 => 19,  61 => 17,  59 => 16,  52 => 10,  49 => 9,  47 => 8,  44 => 7,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Commentaire Twig #}

<!DOCTYPE html>
<html>

    {# inclure le fichier Twig contenant le block #}
    {% include('head.block.html.twig') %}
    {# appel du block #}
    {% block head %}{% endblock %}
    
    <body>

        <header>
            <nav>
                {# l'equivalent d'un 'var_dump' #}
               {#  {{ dump(menu) }} #}

                {# parcours d'un tableau avec cle et valeur #}
                {% for link in menu %}
                    <a href=\"{{ link.href }}\" title=\"{{ link.title }}\">{{ link.text }}</a>
                {% endfor %}
            </nav>
        </header>

        <main>

            {# variable|upper pour le passage d'une 'string' en majuscule #}
            <h1>{{ title|upper }}</h1>
            
            <section>
                {# equivalent a is_null() #}
                {% if isNull is null %}
                    <p>isNull est nulle</p>
                {% endif %}

                {# equivalent a empty() #}
                {% if isEmpty is empty %}
                    <p>isEmpty est vide</p>
                {% endif %}

                {# equivalent a !empty() #}
                {% if isNotEmpty is not empty %}
                    <p>isNotEmpty n'est pas vide</p>
                {% endif %}

                {% if isNull is null and isEmpty is empty %} 
                    <p>isNull est nulle et isEmpty est vide</p>
                {% endif %}

                {# equivalent a === #}
                {% if isNotEmpty is same as('value') %}
                    <p>isNotEmpty contient 'value'</p>
                {% endif %}

                {# equivalent a !== #}
                {% if isEmpty is not same as('value') %}
                    <p>isEmpty ne contient pas 'value'</p>
                {% endif %}
            </section>

            {% if page is same as('accueil') %}
                {% include('accueil.html.twig') %}
            {% elseif page is same as('realisations') %}
                {% include('realisations.html.twig') %}
            {% endif %}

        </main>

        <footer>
            <ul>
                {# parcours d'un tableau a indice #}
                {% for text in footer %}
                    <li>{{ text }}</li>
                {% endfor %}
            </ul>
        </footer>

    </body>
</html>", "index.master.html.twig", "/var/www/html/base/themes/classic/templates/index.master.html.twig");
    }
}
