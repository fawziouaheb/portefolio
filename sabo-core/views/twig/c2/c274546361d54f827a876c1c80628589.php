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
        // line 13
        echo "    </head>
    <body>

        ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "   
        ";
        // line 20
        $this->displayBlock('javascript', $context, $blocks);
        // line 23
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
        echo "        <link rel=\"stylesheet\" href=\"/src/public/css/index.css\">
        <link rel=\"stylesheet\" href=\"/src/public/css/sections.css\">
        ";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
        ";
    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "            <script src=\"/src/public/javascript/index.js\"></script>
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
        return array (  103 => 21,  99 => 20,  94 => 17,  90 => 16,  84 => 10,  80 => 9,  73 => 8,  67 => 23,  65 => 20,  62 => 19,  60 => 16,  55 => 13,  53 => 9,  49 => 8,  41 => 2,);
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
        <link rel=\"stylesheet\" href=\"/src/public/css/index.css\">
        <link rel=\"stylesheet\" href=\"/src/public/css/sections.css\">
        {% endblock %}
    </head>
    <body>

        {% block content %}

        {% endblock %}
   
        {% block javascript %}
            <script src=\"/src/public/javascript/index.js\"></script>
        {% endblock %}

    </body>
</html>", "template/layoutGeneral.html.twig", "C:\\wamp64\\www\\portefolio\\src\\views\\template\\layoutGeneral.html.twig");
    }
}
