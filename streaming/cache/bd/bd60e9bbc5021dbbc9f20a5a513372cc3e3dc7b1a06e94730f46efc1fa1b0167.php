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

/* footer.block.html.twig */
class __TwigTemplate_ffaf91432caccaf5e71df31269a00073c3b82f94038dd9e864f53ad089305a5a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<footer class=\"text-white container-fluid mt-5\">
    
    <section class=\"row align-items-center justify-content-around h-25\">
        <div class=\" text-white\">
            <a href=\"./\"> <h2 class=\"text-uppercase text-white font-weight-bold\">
            <span class=\"text-primary\">m</span>amy<span class=\"text-primary\">s</span>treaming
            </h4> </a>
         </div>

<div class=\"text-center\">
<i class=\"fa fa-facebook-square\"></i>
<i class=\"ml-2 fa fa-instagram\"></i>
<i class=\"ml-2 fa fa-youtube-square\"></i>
<i class=\"ml-2 mr-5 fa fa-twitter-square\"></i>
</div>

<div class=\" text-center\">
<p>Copyright Guillaume.C 2020</p>
</div>
</section>
    
</footer>

";
    }

    public function getTemplateName()
    {
        return "footer.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  41 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Rajout du footer #}

{% block footer %}

<footer class=\"text-white container-fluid mt-5\">
    
    <section class=\"row align-items-center justify-content-around h-25\">
        <div class=\" text-white\">
            <a href=\"./\"> <h2 class=\"text-uppercase text-white font-weight-bold\">
            <span class=\"text-primary\">m</span>amy<span class=\"text-primary\">s</span>treaming
            </h4> </a>
         </div>

<div class=\"text-center\">
<i class=\"fa fa-facebook-square\"></i>
<i class=\"ml-2 fa fa-instagram\"></i>
<i class=\"ml-2 fa fa-youtube-square\"></i>
<i class=\"ml-2 mr-5 fa fa-twitter-square\"></i>
</div>

<div class=\" text-center\">
<p>Copyright Guillaume.C 2020</p>
</div>
</section>
    
</footer>

{% endblock %}", "footer.block.html.twig", "/var/www/html/streaming/streaming/themes/classic/templates/front-office/footer.block.html.twig");
    }
}
