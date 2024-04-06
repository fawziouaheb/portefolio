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

/* template/layoutGeneral.twig */
class __TwigTemplate_c33bc33586e03ac1aad4fbb8f179ae62 extends Template
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
        // line 12
        echo "    </head>
    <body>
         
        ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "   
        ";
        // line 24
        $this->displayBlock('javascript', $context, $blocks);
        // line 26
        echo "    </body>
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
        echo "        <link rel=\"stylesheet\" href=\"css/index.css\">
        ";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "        <p>Bienvenue sur la page d'accueil de Fawzi OUAHEB</p>
        <div class=\"containter-presentation\">
            <h1>Accueil</h1>
            <p>Bienvenue sur la page d'accueil de Fawzi OUAHEB</p>
        </div>
        
        ";
    }

    // line 24
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "template/layoutGeneral.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  106 => 25,  102 => 24,  92 => 16,  88 => 15,  83 => 10,  79 => 9,  72 => 8,  67 => 26,  65 => 24,  62 => 23,  60 => 15,  55 => 12,  53 => 9,  49 => 8,  41 => 2,);
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
        <link rel=\"stylesheet\" href=\"css/index.css\">
        {% endblock %}
    </head>
    <body>
         
        {% block content %}
        <p>Bienvenue sur la page d'accueil de Fawzi OUAHEB</p>
        <div class=\"containter-presentation\">
            <h1>Accueil</h1>
            <p>Bienvenue sur la page d'accueil de Fawzi OUAHEB</p>
        </div>
        
        {% endblock %}
   
        {% block javascript %}
        {% endblock %}
    </body>
</html>", "template/layoutGeneral.twig", "C:\\wamp64\\www\\portefolio\\src\\views\\template\\layoutGeneral.twig");
    }
}
