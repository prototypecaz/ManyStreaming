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

/* get-all.block.html.twig */
class __TwigTemplate_dfcd9673da4e343114ec58b988bbb7b9c6d2bf34baed28da35752fc3c5269b83 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'getAll' => [$this, 'block_getAll'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('getAll', $context, $blocks);
    }

    public function block_getAll($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "

";
        // line 4
        if (twig_in_filter("delete-user", ($context["page"] ?? null))) {
            // line 5
            echo " <table id=\"myTable\" class=\"display\" style=\"text-align:center;\">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Activate</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody class=\"\">
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["emailUser"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mailUser"]) {
                // line 15
                echo "                
                <tr>
                <td>";
                // line 17
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["mailUser"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["email"] ?? null) : null);
                echo "</td>
                <td>";
                // line 18
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["mailUser"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["activate"] ?? null) : null);
                echo "</td>
                <td>
                 
                <a class=\"btn btn-primary\" href=\"./delete/delete-user.php?userid=";
                // line 21
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["mailUser"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["id"] ?? null) : null);
                echo "\">Supprimer</a>
                </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mailUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            </tbody>
        </table>
    ";
        } elseif (twig_in_filter("delete-video",         // line 27
($context["page"] ?? null))) {
            // line 28
            echo "    <table id=\"myTable\" class=\"display\" style=\"text-align:center;\">
            <thead>
                <tr>
                    <th class=\"text-white\">video</th>
                    <th class=\"text-white\">Activate</th>
                    <th class=\"text-white\">Supprimer ou modifier</th>
                </tr>
            </thead>
            <tbody class=\"\">
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                // line 38
                echo "                
                <tr>
                <td>";
                // line 40
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["movie"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["title"] ?? null) : null);
                echo "</td>
                <td><img class=\"imgSize rounded\" src=\"../assets/upload/";
                // line 41
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["movie"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["picture"] ?? null) : null);
                echo "\"></td>
                <td>
                 
                <a class=\"btn btn-primary\" href=\"./delete/delete-video.php?videoid=";
                // line 44
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["movie"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["id"] ?? null) : null);
                echo "\">Supprimer</a>
               
                <a class=\"btn btn-primary\" href=\"./?update-video#";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 46);
                echo "\"  id=\"update-movie\">Modifier video</a>
                
                </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            </tbody>
        </table>
";
        }
        // line 54
        echo "
";
    }

    public function getTemplateName()
    {
        return "get-all.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  146 => 54,  141 => 51,  130 => 46,  125 => 44,  119 => 41,  115 => 40,  111 => 38,  107 => 37,  96 => 28,  94 => 27,  90 => 25,  80 => 21,  74 => 18,  70 => 17,  66 => 15,  62 => 14,  51 => 5,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block getAll %}


{% if \"delete-user\" in page %}
 <table id=\"myTable\" class=\"display\" style=\"text-align:center;\">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Activate</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody class=\"\">
                {% for mailUser in emailUser %}
                
                <tr>
                <td>{{mailUser['email']}}</td>
                <td>{{mailUser['activate']}}</td>
                <td>
                 
                <a class=\"btn btn-primary\" href=\"./delete/delete-user.php?userid={{mailUser['id']}}\">Supprimer</a>
                </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% elseif \"delete-video\" in page %}
    <table id=\"myTable\" class=\"display\" style=\"text-align:center;\">
            <thead>
                <tr>
                    <th class=\"text-white\">video</th>
                    <th class=\"text-white\">Activate</th>
                    <th class=\"text-white\">Supprimer ou modifier</th>
                </tr>
            </thead>
            <tbody class=\"\">
                {% for movie in movies %}
                
                <tr>
                <td>{{movie['title']}}</td>
                <td><img class=\"imgSize rounded\" src=\"../assets/upload/{{movie['picture']}}\"></td>
                <td>
                 
                <a class=\"btn btn-primary\" href=\"./delete/delete-video.php?videoid={{movie['id']}}\">Supprimer</a>
               
                <a class=\"btn btn-primary\" href=\"./?update-video#{{movie.id}}\"  id=\"update-movie\">Modifier video</a>
                
                </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
{% endif %}

{% endblock %}", "get-all.block.html.twig", "/var/www/html/streaming/themes/classic/templates/back-office/get-all.block.html.twig");
    }
}
