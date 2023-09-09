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

/* connexion.block.html.twig */
class __TwigTemplate_b462555fe321568fbd19b8effe3479fa27f8f9ed387eec95136cb51ce7c44e36 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'connexion' => [$this, 'block_connexion'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('connexion', $context, $blocks);
    }

    public function block_connexion($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "

<div class=\"bg-primary text-white h3 text-center rounded mb-3 mt-3\">
    Connexion utilisateur
</div>

<form class=\"d-flex flex-column justify-content-center align-items-center\" method=\"POST\" action=\"./loginUser.php\">

<label class=\"col-12 col-md-6 mt-3 h4 text-center bg-dark text-primary rounded\" for=\"emailUser\">Identifiant</label>
<input class=\"col-12 col-md-6 text-center mt-1\" id=\"emailUser\" type=\"email\" name=\"emailUser\" placeholder=\"L.dupont@gmail.com\" maxlength=\"320\" required>
<label class=\"col-12 col-md-6 mt-4 h4 text-center bg-dark text-primary rounded\" for=\"passwordUser\">Password</label>
<input class=\"col-12 col-md-6 text-center mt-1\" for=\"passwordUser\" type=\"password\" name=\"passwordUser\" placeholder=\"*********\" minlength=\"8\" autocomplete=\"off\" required>
<button class=\"col-10 Col-md-4 border-dark bg-primary text-center text-white btn rounded-pill mt-3\" type=\"submit\"><h4>Connexion</h4></button>

</form>

<div class=\"border border-dark bg-danger text-white h3 text-center rounded mb-3 mt-3\" id=\"erreurs\"></div>

";
        // line 23
        echo "<div class=\"col-10 Col-md-4 border-primary bg-dark h4 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3\">
   <a class=\"rounded-pill text-white pl-3 pr-3 pt-1 pb-1\" href=\"./?inscription\">Inscription</a>
</div>

";
        // line 28
        echo "<div class=\"col-10 Col-md-4 border-primary bg-dark h4 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3 borderRed\">
    <a class=\"rounded-pill text-white pt-1 pb-1\" href=\"./?forget\">Mot de passe oublié</a>
</div>
<script type=\"text/javascript\" src=\"./assets/js/loginUser.js\"></script>
<script type=\"text/javascript\" src=\"./assets/js/activate.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "connexion.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  68 => 23,  48 => 4,  41 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# connexion utilisateur avec methode POST sur loginUser.php #}

{% block connexion %}


<div class=\"bg-primary text-white h3 text-center rounded mb-3 mt-3\">
    Connexion utilisateur
</div>

<form class=\"d-flex flex-column justify-content-center align-items-center\" method=\"POST\" action=\"./loginUser.php\">

<label class=\"col-12 col-md-6 mt-3 h4 text-center bg-dark text-primary rounded\" for=\"emailUser\">Identifiant</label>
<input class=\"col-12 col-md-6 text-center mt-1\" id=\"emailUser\" type=\"email\" name=\"emailUser\" placeholder=\"L.dupont@gmail.com\" maxlength=\"320\" required>
<label class=\"col-12 col-md-6 mt-4 h4 text-center bg-dark text-primary rounded\" for=\"passwordUser\">Password</label>
<input class=\"col-12 col-md-6 text-center mt-1\" for=\"passwordUser\" type=\"password\" name=\"passwordUser\" placeholder=\"*********\" minlength=\"8\" autocomplete=\"off\" required>
<button class=\"col-10 Col-md-4 border-dark bg-primary text-center text-white btn rounded-pill mt-3\" type=\"submit\"><h4>Connexion</h4></button>

</form>

<div class=\"border border-dark bg-danger text-white h3 text-center rounded mb-3 mt-3\" id=\"erreurs\"></div>

{# lien pour s'inscrire #}
<div class=\"col-10 Col-md-4 border-primary bg-dark h4 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3\">
   <a class=\"rounded-pill text-white pl-3 pr-3 pt-1 pb-1\" href=\"./?inscription\">Inscription</a>
</div>

{# lien pour mot de pass oublier #}
<div class=\"col-10 Col-md-4 border-primary bg-dark h4 text-center ml-auto mr-auto rounded-pill mb-3 mt-3 pt-3 pb-3 borderRed\">
    <a class=\"rounded-pill text-white pt-1 pb-1\" href=\"./?forget\">Mot de passe oublié</a>
</div>
<script type=\"text/javascript\" src=\"./assets/js/loginUser.js\"></script>
<script type=\"text/javascript\" src=\"./assets/js/activate.js\"></script>

{% endblock %}", "connexion.block.html.twig", "/var/www/html/streaming/themes/classic/templates/front-office/connexion.block.html.twig");
    }
}
