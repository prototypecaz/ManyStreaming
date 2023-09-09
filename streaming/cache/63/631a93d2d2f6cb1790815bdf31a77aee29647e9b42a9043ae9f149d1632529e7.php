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
class __TwigTemplate_f055ee3aa9616f6c60f25c1369a8cdc2170cb081fb2d835abca3a5852c651195 extends Template
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
<body style=\"background-color:#0C1419\">
";
        // line 5
        echo " ";
        // line 6
        echo "        ";
        // line 7
        echo "        ";
        $this->loadTemplate("header.block.html.twig", "body.block.html.twig", 7)->display($context);
        // line 8
        echo "        ";
        // line 9
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 10
        echo "
        ";
        // line 12
        echo "        ";
        $this->loadTemplate("main.block.html.twig", "body.block.html.twig", 12)->display($context);
        // line 13
        echo "        ";
        // line 14
        echo "        ";
        $this->displayBlock('main', $context, $blocks);
        // line 15
        echo "
        ";
        // line 17
        echo "        ";
        $this->loadTemplate("footer.block.html.twig", "body.block.html.twig", 17)->display($context);
        // line 18
        echo "        ";
        // line 19
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 20
        echo "
      <script type=\"text/javascript\" src=\"./assets/lib/jquery/jquery-3.5.1.min.js\"></script>
      <script type=\"text/javascript\" src=\"./assets/lib/bootstrap/bootstrap.min.js\"></script>
       <!-- Call carousel -->
        <script type=\"text/javascript\">
            \$('.carousel').carousel()
        </script>
     
     
      
        ";
        // line 31
        echo "     
     
     ";
        // line 34
        echo "    
     
  </body>
</html>

";
    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 14
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 19
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
        return array (  123 => 19,  117 => 14,  111 => 9,  102 => 34,  98 => 31,  86 => 20,  83 => 19,  81 => 18,  78 => 17,  75 => 15,  72 => 14,  70 => 13,  67 => 12,  64 => 10,  61 => 9,  59 => 8,  56 => 7,  54 => 6,  52 => 5,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

<body style=\"background-color:#0C1419\">
{# une autre façon d'inclure du css dynamiquement #}
 {#  <body style = \"background-image: url('./assets/upload/{{backgroundImg[0]['background']}}');\"> #}
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

      <script type=\"text/javascript\" src=\"./assets/lib/jquery/jquery-3.5.1.min.js\"></script>
      <script type=\"text/javascript\" src=\"./assets/lib/bootstrap/bootstrap.min.js\"></script>
       <!-- Call carousel -->
        <script type=\"text/javascript\">
            \$('.carousel').carousel()
        </script>
     
     
      
        {# <script type=\"text/javascript\" src=\"./assets/js/activate.js\"></script> #}
     
     
     {#    <script type=\"text/javascript\" src=\"./assets/js/registerUser.js\"></script> #}
    
     
  </body>
</html>

{% endblock %}", "body.block.html.twig", "/var/www/html/streaming/streaming/themes/classic/templates/front-office/body.block.html.twig");
    }
}
