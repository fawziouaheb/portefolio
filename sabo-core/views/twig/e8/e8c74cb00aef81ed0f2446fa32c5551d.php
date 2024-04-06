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
class __TwigTemplate_b2dbed1cf2b00994eb6c8bbd93a63227 extends Template
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
        // line 9
        echo "
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
</div>

      
";
    }

    // line 47
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  110 => 47,  70 => 9,  66 => 8,  60 => 5,  56 => 4,  49 => 3,  38 => 2,);
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
</div>

      
{% endblock %}

{% block javascript %}
{% endblock %}
", "/template/index.html.twig", "C:\\wamp64\\www\\portefolio\\src\\views\\template\\index.html.twig");
    }
}
