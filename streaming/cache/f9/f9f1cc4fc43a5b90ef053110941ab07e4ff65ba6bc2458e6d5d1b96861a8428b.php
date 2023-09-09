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

/* header.block.html.twig */
class __TwigTemplate_03977b229f7648e35b55d3f514b2e031682bcbeb8ce0e24f1054991b3ceb1b1b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<header class=\"divHeader mt-2 mb-5\">

<section class=\"container\">

   


    <nav class=\"row  h-75 position-relative  justify-content-center\" id=\"navbarSupportedContent1\">

  

        <div class=\"col-md-12 col-lg-2 col-sm-12 col-12 text-center text-white\">
            <a href=\"./\"> <h2 class=\"text-uppercase text-white font-weight-bold\">
            <span class=\"text-primary\">m</span>amy<span class=\"text-primary\">s</span>treaming
            </h4> </a>
         </div>


            <div class=\"col-6 col-sm-6 col-md-5 col-lg-2 offset-lg-2 text-center dropdown hauteur\">
                <span class=\"nav-item nav-link text-white font-weight-bold h5\">";
        // line 21
        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["menu"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "text", [], "any", false, false, false, 21);
        echo " </span>
                <div class=\"dropdown-menu position-absolute\">
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 24
            echo "                    <a href=\"./?categorie=";
            echo twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 24);
            echo "\" class=\"dropdown-item\">";
            echo twig_get_attribute($this->env, $this->source, $context["categorie"], "category", [], "any", false, false, false, 24);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo " 
                </div>
            </div> 

            <div class=\"col-6 col-sm-6 col-md-5 col-lg-2 dropdown hauteur text-center\">
                <span class=\"nav-item nav-link text-white font-weight-bold h5\">";
        // line 30
        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["menu"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), "text", [], "any", false, false, false, 30);
        echo " </span>
                <div class=\"dropdown-menu\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 33
            echo "                    <a href=\"./?genres=";
            echo twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 33);
            echo "\" class=\"dropdown-item\">";
            echo twig_get_attribute($this->env, $this->source, $context["genre"], "gender", [], "any", false, false, false, 33);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo " 
                </div>
            </div>
    

                <div class=\"col-6 col-sm-6 col-md-6 col-lg-2 \">
                    <form method=\"GET\" id=\"rechercher\"  action=\"./\">
                        <input class=\"barreRecherche w-100 rounded-pill text-center \"  type=\"text\" placeholder=\"Rechercher\" name=\"search\" id=\"recherche\">
                    </form>
                </div>

                <div class=\"col-6 col-sm-6 col-md-6 col-lg-2 nav-item dropdown h5\">
                    <a href=\"";
        // line 46
        echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["menu"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[2] ?? null) : null), "href", [], "any", false, false, false, 46);
        echo "\" title=\"";
        echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["menu"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[2] ?? null) : null), "title", [], "any", false, false, false, 46);
        echo "\" class=\"btn btn-header font-weight-bold rounded-pill nav-item nav-link text-white\">";
        echo twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["menu"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[2] ?? null) : null), "text", [], "any", false, false, false, 46);
        echo " </a>

                </div> 
</nav>
                <div class=\"position-absolute nouveauHeader d-none d-lg-block\">
                        <h1 class=\"text-white font-weight-bold\">WARCRAFT</h1>
                </div>

                <a href=\"#\"><img src=\"./assets/img/header/play-icon.png\" class=\"position-absolute iconeHeader d-none d-lg-block\"></a>


    
    </section>
</header>
";
    }

    public function getTemplateName()
    {
        return "header.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 46,  113 => 34,  102 => 33,  98 => 32,  93 => 30,  86 => 25,  75 => 24,  71 => 23,  66 => 21,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}
<header class=\"divHeader mt-2 mb-5\">

<section class=\"container\">

   


    <nav class=\"row  h-75 position-relative  justify-content-center\" id=\"navbarSupportedContent1\">

  

        <div class=\"col-md-12 col-lg-2 col-sm-12 col-12 text-center text-white\">
            <a href=\"./\"> <h2 class=\"text-uppercase text-white font-weight-bold\">
            <span class=\"text-primary\">m</span>amy<span class=\"text-primary\">s</span>treaming
            </h4> </a>
         </div>


            <div class=\"col-6 col-sm-6 col-md-5 col-lg-2 offset-lg-2 text-center dropdown hauteur\">
                <span class=\"nav-item nav-link text-white font-weight-bold h5\">{{ menu[0].text }} </span>
                <div class=\"dropdown-menu position-absolute\">
                    {% for categorie in categories %}
                    <a href=\"./?categorie={{categorie.id}}\" class=\"dropdown-item\">{{categorie.category}}</a>
                    {% endfor %} 
                </div>
            </div> 

            <div class=\"col-6 col-sm-6 col-md-5 col-lg-2 dropdown hauteur text-center\">
                <span class=\"nav-item nav-link text-white font-weight-bold h5\">{{ menu[1].text }} </span>
                <div class=\"dropdown-menu\">
                    {% for genre in genres %}
                    <a href=\"./?genres={{genre.id}}\" class=\"dropdown-item\">{{genre.gender}}</a>
                    {% endfor %} 
                </div>
            </div>
    

                <div class=\"col-6 col-sm-6 col-md-6 col-lg-2 \">
                    <form method=\"GET\" id=\"rechercher\"  action=\"./\">
                        <input class=\"barreRecherche w-100 rounded-pill text-center \"  type=\"text\" placeholder=\"Rechercher\" name=\"search\" id=\"recherche\">
                    </form>
                </div>

                <div class=\"col-6 col-sm-6 col-md-6 col-lg-2 nav-item dropdown h5\">
                    <a href=\"{{ menu[2].href }}\" title=\"{{ menu[2].title }}\" class=\"btn btn-header font-weight-bold rounded-pill nav-item nav-link text-white\">{{ menu[2].text }} </a>

                </div> 
</nav>
                <div class=\"position-absolute nouveauHeader d-none d-lg-block\">
                        <h1 class=\"text-white font-weight-bold\">WARCRAFT</h1>
                </div>

                <a href=\"#\"><img src=\"./assets/img/header/play-icon.png\" class=\"position-absolute iconeHeader d-none d-lg-block\"></a>


    
    </section>
</header>
{% endblock %}", "header.block.html.twig", "/var/www/html/streaming/streaming/themes/classic/templates/front-office/header.block.html.twig");
    }
}
