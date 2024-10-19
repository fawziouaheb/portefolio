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

/* template/layoutGeneral.html.twig */
class __TwigTemplate_1819d49bc703eba33b5bef675c1534d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    </head>
    <body>

        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "   
        ";
        // line 32
        $this->displayBlock('javascript', $context, $blocks);
        // line 36
        echo "
    </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
        <link rel=\"stylesheet\" href=\"/src/public/css/sections.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
        <link rel=\"stylesheet\" href=\"/src/public/css/project.css\">
        <link rel=\"stylesheet\" href=\"/src/public/css/profile.css\">
        <link rel=\"stylesheet\" href=\"/src/public/css/hobby.css\">
        <link rel=\"stylesheet\" href=\"/src/public/css/projectp.css\">
        <link rel=\"stylesheet\" href=\"/src/public/css/about.css\">
        <link rel=\"stylesheet\" href=\"/src/public/css/logiciel.css\">
        <link rel=\"stylesheet\" href=\"/src/public/css/otherProject.css\">

          <!-- Google Fonts -->
          <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
        ";
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "
        ";
    }

    // line 32
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "         <!-- Vendor JS Files -->
            <script src=\"/src/public/javascript/index.js\"></script>
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "template/layoutGeneral.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  115 => 33,  111 => 32,  106 => 29,  102 => 28,  84 => 10,  80 => 9,  73 => 8,  67 => 36,  65 => 32,  62 => 31,  60 => 28,  55 => 25,  53 => 9,  49 => 8,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# layout general #}

<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %} {% endblock %}</title>
        {% block stylesheets %}

        <link rel=\"stylesheet\" href=\"/src/public/css/sections.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
        <link rel=\"stylesheet\" href=\"/src/public/css/project.css\">
        <link rel=\"stylesheet\" href=\"/src/public/css/profile.css\">
        <link rel=\"stylesheet\" href=\"/src/public/css/hobby.css\">
        <link rel=\"stylesheet\" href=\"/src/public/css/projectp.css\">
        <link rel=\"stylesheet\" href=\"/src/public/css/about.css\">
        <link rel=\"stylesheet\" href=\"/src/public/css/logiciel.css\">
        <link rel=\"stylesheet\" href=\"/src/public/css/otherProject.css\">

          <!-- Google Fonts -->
          <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
        {% endblock %}
    </head>
    <body>

        {% block content %}

        {% endblock %}
   
        {% block javascript %}
         <!-- Vendor JS Files -->
            <script src=\"/src/public/javascript/index.js\"></script>
        {% endblock %}

    </body>
</html>", "template/layoutGeneral.html.twig", "C:\\wamp64\\www\\portefolio\\src\\views\\template\\layoutGeneral.html.twig");
    }
}
