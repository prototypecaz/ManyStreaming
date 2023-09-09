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

/* main.block.html.twig */
class __TwigTemplate_f076a46a5e08fad22dd8f147ca28f241c97403e726c9b0be9be1ea44d0894b1c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'uniquemov' => [$this, 'block_uniquemov'],
            'categories' => [$this, 'block_categories'],
            'genres' => [$this, 'block_genres'],
            'connexion' => [$this, 'block_connexion'],
            'inscription' => [$this, 'block_inscription'],
            'forget' => [$this, 'block_forget'],
            'recherche' => [$this, 'block_recherche'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('main', $context, $blocks);
    }

    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<main class=\"container \">

";
        // line 4
        if (((($context["page"] ?? null) === "") || (($context["page"] ?? null) === "accueil"))) {
            // line 5
            echo "
<section id=\"slider\" class=\"text-center my-5 d-none d-sm-none d-md-none d-lg-block\">
        <div id=\"carouselIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carouselIndicators\" data-slide-to=\"1\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lastSlidemovies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                // line 15
                echo "                    <img class=\"imgSlide mx-3\" src=\"./assets/upload/";
                echo twig_get_attribute($this->env, $this->source, $context["movie"], "picture", [], "any", false, false, false, 15);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 15);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                </div>
                <div class=\"carousel-item\">
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["firstSlidemovies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                // line 20
                echo "                    <img class=\"imgSLide mx-3\" src=\"./assets/upload/";
                echo twig_get_attribute($this->env, $this->source, $context["movie"], "picture", [], "any", false, false, false, 20);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 20);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                </div>
            </div>
            <a class=\"carousel-control-prev \" href=\"#carouselIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next \" href=\"#carouselIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
</section>
   

    <section>
        <h3 class=\"text-white font-weight-bold ml-md-3 \"><u>Derniere sortie:</u></h3>
            <div class=\"row\">
        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                // line 40
                echo "            
            <article class=\"col-md-4 col-lg-3 col-6 col-sm-6 mt-5\">
                <h5 class=\"text-center text-white font-weight-bold\">";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 42);
                echo "</h5>
                <a href=\"./?uniquemov=";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 43);
                echo "\"><img src=\"./assets/upload/";
                echo twig_get_attribute($this->env, $this->source, $context["movie"], "picture", [], "any", false, false, false, 43);
                echo "\" class=\"w-75 d-block mx-auto\"></a>
            </article>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </div>
    </section>
    
        ";
        } elseif (twig_in_filter("uniquemov",         // line 49
($context["page"] ?? null))) {
            // line 50
            echo "        ";
            $this->loadTemplate("uniquemov.block.html.twig", "main.block.html.twig", 50)->display($context);
            // line 51
            echo "        ";
            $this->displayBlock('uniquemov', $context, $blocks);
            // line 52
            echo "
        ";
        } elseif (twig_in_filter("categorie",         // line 53
($context["page"] ?? null))) {
            // line 54
            echo "        ";
            $this->loadTemplate("categories.block.html.twig", "main.block.html.twig", 54)->display($context);
            // line 55
            echo "        ";
            $this->displayBlock('categories', $context, $blocks);
            // line 56
            echo "
        ";
        } elseif (twig_in_filter("genres",         // line 57
($context["page"] ?? null))) {
            // line 58
            echo "        ";
            $this->loadTemplate("genres.block.html.twig", "main.block.html.twig", 58)->display($context);
            // line 59
            echo "        ";
            $this->displayBlock('genres', $context, $blocks);
            // line 60
            echo "
        ";
        } elseif (twig_in_filter("connexion",         // line 61
($context["page"] ?? null))) {
            // line 62
            echo "        ";
            $this->loadTemplate("connexion.block.html.twig", "main.block.html.twig", 62)->display($context);
            // line 63
            echo "        ";
            $this->displayBlock('connexion', $context, $blocks);
            // line 64
            echo "
        ";
        } elseif (twig_in_filter("inscription",         // line 65
($context["page"] ?? null))) {
            // line 66
            echo "        ";
            $this->loadTemplate("inscription.block.html.twig", "main.block.html.twig", 66)->display($context);
            // line 67
            echo "        ";
            $this->displayBlock('inscription', $context, $blocks);
            // line 68
            echo "
        ";
        } elseif (twig_in_filter("forget",         // line 69
($context["page"] ?? null))) {
            // line 70
            echo "        ";
            $this->loadTemplate("forget.block.html.twig", "main.block.html.twig", 70)->display($context);
            // line 71
            echo "        ";
            $this->displayBlock('forget', $context, $blocks);
            // line 72
            echo "
        ";
        } elseif (twig_in_filter("search",         // line 73
($context["page"] ?? null))) {
            // line 74
            echo "        ";
            $this->loadTemplate("recherche.block.html.twig", "main.block.html.twig", 74)->display($context);
            // line 75
            echo "        ";
            $this->displayBlock('recherche', $context, $blocks);
            // line 76
            echo "
";
        }
        // line 78
        echo "    
</main>

";
    }

    // line 51
    public function block_uniquemov($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 55
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 59
    public function block_genres($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 63
    public function block_connexion($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 67
    public function block_inscription($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 71
    public function block_forget($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 75
    public function block_recherche($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "main.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  271 => 75,  265 => 71,  259 => 67,  253 => 63,  247 => 59,  241 => 55,  235 => 51,  228 => 78,  224 => 76,  221 => 75,  218 => 74,  216 => 73,  213 => 72,  210 => 71,  207 => 70,  205 => 69,  202 => 68,  199 => 67,  196 => 66,  194 => 65,  191 => 64,  188 => 63,  185 => 62,  183 => 61,  180 => 60,  177 => 59,  174 => 58,  172 => 57,  169 => 56,  166 => 55,  163 => 54,  161 => 53,  158 => 52,  155 => 51,  152 => 50,  150 => 49,  145 => 46,  134 => 43,  130 => 42,  126 => 40,  122 => 39,  103 => 22,  92 => 20,  88 => 19,  84 => 17,  73 => 15,  69 => 14,  58 => 5,  56 => 4,  52 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block main %}
<main class=\"container \">

{% if page is same as('') or page is same as ('accueil') %}

<section id=\"slider\" class=\"text-center my-5 d-none d-sm-none d-md-none d-lg-block\">
        <div id=\"carouselIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carouselIndicators\" data-slide-to=\"1\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                {% for movie in lastSlidemovies %}
                    <img class=\"imgSlide mx-3\" src=\"./assets/upload/{{ movie.picture }}\" alt=\"{{ movie.title }}\">
                {% endfor %}
                </div>
                <div class=\"carousel-item\">
                {% for movie in firstSlidemovies %}
                    <img class=\"imgSLide mx-3\" src=\"./assets/upload/{{ movie.picture }}\" alt=\"{{ movie.title }}\">
                {% endfor %}
                </div>
            </div>
            <a class=\"carousel-control-prev \" href=\"#carouselIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next \" href=\"#carouselIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
</section>
   

    <section>
        <h3 class=\"text-white font-weight-bold ml-md-3 \"><u>Derniere sortie:</u></h3>
            <div class=\"row\">
        {% for movie in movies %}
            
            <article class=\"col-md-4 col-lg-3 col-6 col-sm-6 mt-5\">
                <h5 class=\"text-center text-white font-weight-bold\">{{movie.title}}</h5>
                <a href=\"./?uniquemov={{movie.id}}\"><img src=\"./assets/upload/{{movie.picture}}\" class=\"w-75 d-block mx-auto\"></a>
            </article>
        {% endfor %}
            </div>
    </section>
    
        {% elseif 'uniquemov' in page %}
        {% include('uniquemov.block.html.twig') %}
        {% block uniquemov %}{% endblock %}

        {% elseif 'categorie' in page %}
        {% include('categories.block.html.twig') %}
        {% block categories %}{% endblock %}

        {% elseif 'genres' in page %}
        {% include('genres.block.html.twig') %}
        {% block genres %}{% endblock %}

        {% elseif 'connexion' in page %}
        {% include('connexion.block.html.twig') %}
        {% block connexion %}{% endblock %}

        {% elseif 'inscription' in page %}
        {% include('inscription.block.html.twig') %}
        {% block inscription %}{% endblock %}

        {% elseif 'forget' in page %}
        {% include('forget.block.html.twig') %}
        {% block forget %}{% endblock %}

        {% elseif 'search' in page %}
        {% include('recherche.block.html.twig') %}
        {% block recherche %}{% endblock %}

{% endif %}
    
</main>

{% endblock %}", "main.block.html.twig", "/var/www/html/streaming/streaming/themes/classic/templates/front-office/main.block.html.twig");
    }
}
