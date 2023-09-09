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

/* body.block.html.twig */
class __TwigTemplate_693bbf289f63b6fa3a6ea03d0e39ef91ef1efaef4fe80b1739d7ce398865e87d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<body style = \"background-image: url('../assets/upload/";
        // line 3
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["backgroundImg"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["background"] ?? null) : null);
        echo "');\">
        ";
        // line 5
        echo "        ";
        $this->loadTemplate("header.block.html.twig", "body.block.html.twig", 5)->display($context);
        // line 6
        echo "        ";
        // line 7
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "
        ";
        // line 10
        echo "        ";
        $this->loadTemplate("main.block.html.twig", "body.block.html.twig", 10)->display($context);
        // line 11
        echo "        ";
        // line 12
        echo "        ";
        $this->displayBlock('main', $context, $blocks);
        // line 13
        echo "
        ";
        // line 15
        echo "        ";
        $this->loadTemplate("footer.block.html.twig", "body.block.html.twig", 15)->display($context);
        // line 16
        echo "        ";
        // line 17
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 18
        echo "
      <script type=\"text/javascript\" src=\"../assets/lib/jquery/jquery-3.5.1.min.js\"></script>
      <script type=\"text/javascript\" src=\"../assets/lib/bootstrap/bootstrap.min.js\"></script>
     
     <script type=\"text/javascript\" src=\"../assets/lib/datatables/jquery.dataTables.min.js?version=1.10.21\"></script> 

        <!-- Link de fichier data.js qui nous permet de creer la datatables -->
\t    <script type=\"text/javascript\" src=\"../assets/js/get-all-user.js?version=1.0.0\"></script>
\t
     <script type=\"text/javascript\" src=\"../assets/js/updateMovie.js?version=1.0.0\"></script>
      
        ";
        // line 30
        echo "     
     
     ";
        // line 33
        echo "    
     
    </body>
</html>

";
    }

    // line 7
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 17
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "body.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 17,  117 => 12,  111 => 7,  102 => 33,  98 => 30,  85 => 18,  82 => 17,  80 => 16,  77 => 15,  74 => 13,  71 => 12,  69 => 11,  66 => 10,  63 => 8,  60 => 7,  58 => 6,  55 => 5,  51 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

<body style = \"background-image: url('../assets/upload/{{backgroundImg[0]['background']}}');\">
        {# inclure le fichier Twig contenant le block #}
        {% include('header.block.html.twig') %}
        {# appel du block #}
        {% block header %}{% endblock %}

        {# inclure le fichier Twig contenant le block #}
        {% include('main.block.html.twig') %}
        {# appel du block #}
        {% block main %}{% endblock %}

        {# inclure le fichier Twig contenant le block #}
        {% include('footer.block.html.twig') %}
        {# appel du block #}
        {% block footer %}{% endblock %}

      <script type=\"text/javascript\" src=\"../assets/lib/jquery/jquery-3.5.1.min.js\"></script>
      <script type=\"text/javascript\" src=\"../assets/lib/bootstrap/bootstrap.min.js\"></script>
     
     <script type=\"text/javascript\" src=\"../assets/lib/datatables/jquery.dataTables.min.js?version=1.10.21\"></script> 

        <!-- Link de fichier data.js qui nous permet de creer la datatables -->
\t    <script type=\"text/javascript\" src=\"../assets/js/get-all-user.js?version=1.0.0\"></script>
\t
     <script type=\"text/javascript\" src=\"../assets/js/updateMovie.js?version=1.0.0\"></script>
      
        {# <script type=\"text/javascript\" src=\"./assets/js/activate.js\"></script> #}
     
     
     {#    <script type=\"text/javascript\" src=\"./assets/js/registerUser.js\"></script> #}
    
     
    </body>
</html>

{% endblock %}", "body.block.html.twig", "/var/www/html/streaming/themes/classic/templates/back-office/body.block.html.twig");
    }
}
