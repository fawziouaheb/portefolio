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

/* /template/index.html.twig */
class __TwigTemplate_f31d366352772bb1ccee713da17432cc extends Template
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
        return "template/layoutGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template/layoutGeneral.html.twig", "/template/index.html.twig", 2);
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
        // line 41
        echo "
";
        // line 42
        $this->loadTemplate("template/section/profile.html.twig", "/template/index.html.twig", 42)->display($context);
        // line 43
        $this->loadTemplate("template/section/experience.html.twig", "/template/index.html.twig", 43)->display($context);
        // line 44
        $this->loadTemplate("template/section/skills.html.twig", "/template/index.html.twig", 44)->display($context);
        // line 45
        $this->loadTemplate("template/section/formation.html.twig", "/template/index.html.twig", 45)->display($context);
        // line 46
        $this->loadTemplate("template/section/project.html.twig", "/template/index.html.twig", 46)->display($context);
        // line 47
        echo "
";
    }

    // line 50
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "<script src=\"/src/public/javascript/index.js\"></script>  
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/template/index.html.twig";
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
        return array (  92 => 51,  88 => 50,  83 => 47,  81 => 46,  79 => 45,  77 => 44,  75 => 43,  73 => 42,  70 => 41,  66 => 8,  60 => 5,  56 => 4,  49 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# la page d'acuuile #}
{% extends 'template/layoutGeneral.html.twig' %}
{% block title %} {% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}
         
{% block content %}
{# 
<div class=\"ContainerProfile\">
    <div class=\"ContainerProfileLeft\">
        <img class=\"imgProfile\" src=\"/src/public/images/profileImage.webp\" alt=\"la photo de profile de Fawzi ouaheb\">
        <img class=\"imgBitmogie\" src=\"/src/public/images/bitmojie.png\" alt=\"le bitmojoe de Fawzi ouaheb\">
    </div>
    
    <div class=\"ContainerProfileRight\">
        
        <div class=\"ContainerProfileNavbar\">
            <ul>
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"#\">Skills</a></li>
                <li><a href=\"#\">Experience</a></li>
                <li><a href=\"#\">Project</a></li>
            </ul>
        </div>

        <div class=\"ContainerProfilePresentation\">
            <h2>Fawzi OUAHEB</h2>
            <h3>Network Engineer</h3>
            <p>Welcome to my portfolio to discover my experiences and projects</p>
        </div>

        <div class=\"ContainerProfileSocial\">
            <button class=\"btn-donate\">
                Download Cv
            </button>
        </div>
    </div>
            
</div> #}

{% include 'template/section/profile.html.twig'%}
{% include 'template/section/experience.html.twig' %}
{% include 'template/section/skills.html.twig' %}
{% include 'template/section/formation.html.twig' %}
{% include 'template/section/project.html.twig' %}

{% endblock %}

{% block javascript %}
<script src=\"/src/public/javascript/index.js\"></script>  
{% endblock %}
", "/template/index.html.twig", "C:\\Users\\fouaheb\\Downloads\\portefolio\\src\\views\\template\\index.html.twig");
    }
}
