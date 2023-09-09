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

/* forget.block.html.twig */
class __TwigTemplate_f790b5fc35ab78bccb45e4fdeacf4516cdb5cbadbb01fdde3a542a232a3a194f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'forget' => [$this, 'block_forget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('forget', $context, $blocks);
    }

    public function block_forget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
 <!-- Formulaire de mot de pass oublier -->
    <section>
                
        <form class=\"d-flex flex-column justify-content-center align-items-center mt-5 \" method=\"POST\" action=\"./forget.php\">
            <label class=\"col-12 col-md-6 mt-3 h4 text-center bg-dark text-primary rounded\" for=\"emailForget\">Entrer votre mail</label>
            <input class=\"col-12 col-md-6 text-center mt-1\" id=\"emailForget\" type=\"email\" name=\"email\" maxlength=\"320\" placeholder=\"e.dupont@gmail.com\" required>
            <button id=\"btnForget\" class=\"col-6 Col-md-3 border-primary bg-dark h4 text-center text-white rounded-pill mt-3 py-1\" type=\"submit\">envoyer</button>
        </form>
        <div class=\"col-12 col-md-6 mx-auto border border-dark bg-danger text-white h3 text-center rounded mb-3 mt-3\" id=\"erreurs\"></div>
                
    </section>
  <script type=\"text/javascript\" src=\"./assets/js/loginUser.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "forget.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  41 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#  #}

{% block forget %}

 <!-- Formulaire de mot de pass oublier -->
    <section>
                
        <form class=\"d-flex flex-column justify-content-center align-items-center mt-5 \" method=\"POST\" action=\"./forget.php\">
            <label class=\"col-12 col-md-6 mt-3 h4 text-center bg-dark text-primary rounded\" for=\"emailForget\">Entrer votre mail</label>
            <input class=\"col-12 col-md-6 text-center mt-1\" id=\"emailForget\" type=\"email\" name=\"email\" maxlength=\"320\" placeholder=\"e.dupont@gmail.com\" required>
            <button id=\"btnForget\" class=\"col-6 Col-md-3 border-primary bg-dark h4 text-center text-white rounded-pill mt-3 py-1\" type=\"submit\">envoyer</button>
        </form>
        <div class=\"col-12 col-md-6 mx-auto border border-dark bg-danger text-white h3 text-center rounded mb-3 mt-3\" id=\"erreurs\"></div>
                
    </section>
  <script type=\"text/javascript\" src=\"./assets/js/loginUser.js\"></script>
    {% endblock %}", "forget.block.html.twig", "/var/www/html/streaming/themes/classic/templates/front-office/forget.block.html.twig");
    }
}
