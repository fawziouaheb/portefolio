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

/* /template/index.twig */
class __TwigTemplate_1bf6760e3a066bd9e7e21818f09c4cef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "template/layoutGeneral.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template/layoutGeneral.twig", "/template/index.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<p>Bienvenue sur la page d'accueil de Fawzi OUAHEB</p>
<div class=\"containter-presentation\">
    <h1>Accueil</h1>
    <p>Bienvenue sur la page d'accueil de Fawzi OUAHEB</p>
</div>
      
";
    }

    // line 17
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/template/index.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  80 => 17,  70 => 9,  66 => 8,  60 => 5,  56 => 4,  49 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# la page d'acuuile #}
{% extends 'template/layoutGeneral.twig' %}
{% block title %} {% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}
         
{% block content %}
<p>Bienvenue sur la page d'accueil de Fawzi OUAHEB</p>
<div class=\"containter-presentation\">
    <h1>Accueil</h1>
    <p>Bienvenue sur la page d'accueil de Fawzi OUAHEB</p>
</div>
      
{% endblock %}

{% block javascript %}
{% endblock %}
", "/template/index.twig", "C:\\wamp64\\www\\portefolio\\src\\views\\template\\index.twig");
    }
}
