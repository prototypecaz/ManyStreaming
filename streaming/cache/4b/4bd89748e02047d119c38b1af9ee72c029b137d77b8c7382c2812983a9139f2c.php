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
class __TwigTemplate_789bc6db059afa9d861f8b18c693b10b9ec429806f39d440f8f03526d6276f65 extends Template
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
<footer>
    
    


    
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

<footer>
    
    


    
</footer>

{% endblock %}", "footer.block.html.twig", "/var/www/html/streaming/themes/classic/templates/back-office/footer.block.html.twig");
    }
}
