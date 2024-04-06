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

/* /template/layoutGeneral.html.twig */
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
        // line 12
        echo "    </head>
    <body>

        ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "   
        ";
        // line 19
        $this->displayBlock('javascript', $context, $blocks);
        // line 21
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
        echo "        <link rel=\"stylesheet\" href=\"/src/public/css/index.css\">
        ";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
        ";
    }

    // line 19
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/template/layoutGeneral.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  101 => 20,  97 => 19,  92 => 16,  88 => 15,  83 => 10,  79 => 9,  72 => 8,  67 => 21,  65 => 19,  62 => 18,  60 => 15,  55 => 12,  53 => 9,  49 => 8,  41 => 2,);
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
        {% endblock %}
    </head>
    <body>

        {% block content %}

        {% endblock %}
   
        {% block javascript %}
        {% endblock %}
    </body>
</html>", "/template/layoutGeneral.html.twig", "C:\\wamp64\\www\\portefolio\\src\\views\\template\\layoutGeneral.html.twig");
    }
}
