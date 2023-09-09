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

/* update-backgroundImg.block.html.twig */
class __TwigTemplate_aaa21456d1cbec9450342842fee97416eb70be7d74ee77d6b2c50d22392dfaa4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'backgroundImg' => [$this, 'block_backgroundImg'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('backgroundImg', $context, $blocks);
        // line 8
        echo "
";
    }

    // line 1
    public function block_backgroundImg($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<form method=\"POST\" action=\"./update/update-background.php\" enctype=\"multipart/form-data\">
<label for=\"image\">Modifier le theme</label>
<input id=\"image\" type=\"file\" name=\"image\" required>
<button type=\"submit\">Envoyer</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "update-backgroundImg.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 2,  45 => 1,  40 => 8,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block backgroundImg %}
<form method=\"POST\" action=\"./update/update-background.php\" enctype=\"multipart/form-data\">
<label for=\"image\">Modifier le theme</label>
<input id=\"image\" type=\"file\" name=\"image\" required>
<button type=\"submit\">Envoyer</button>
</form>
{% endblock %}

", "update-backgroundImg.block.html.twig", "/var/www/html/streaming/themes/classic/templates/back-office/update-backgroundImg.block.html.twig");
    }
}
