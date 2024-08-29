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

/* template/section/project.html.twig */
class __TwigTemplate_4fbc5ff52989846d342cda38a555d7a0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section id=\"projects\">
<div class=\"project\">
    <section id=\"portfolio\" class=\"portfolio section-bg\">
      <div class=\"container\">
  
        <div class=\"section-title\">
          <h2>Project</h2>
        </div>
  
        <div class=\"row\" data-aos=\"fade-up\">
          <div class=\"col-lg-12 d-flex justify-content-center\">
            <ul id=\"portfolio-flters\">
              <li data-filter=\"*\" class=\"filter-active\">All</li>
              <li data-filter=\".filter-app\">Réseau</li>
              <li data-filter=\".filter-web\">Application web & mobile</li>
              <li data-filter=\".filter-appDesktop\">Application bureau</li>
            </ul>
          </div>
        </div>
  
        <!-- Conteneur pour afficher les sections -->
      <div id=\"portfolio-projects\" class=\"row\"></div>
  
      </div>
      <!-- Modal -->
      <div id=\"projectModal\" class=\"modal\">
        <div class=\"modal-content\">
            <span class=\"close\">&times;</span>
            <div class=\"language-icon\">
                <img src=\"/src/public/images/anssi_logo.png\" alt=\"JavaFX\" class=\"language-image\"> <!-- Remplace par l'URL de ton icône -->
            </div>
            <div class=\"modal-images\">
                <!-- Images slider -->
            </div>
            <div class=\"modal-description\">
                <!-- Project description -->
            </div>
        </div>
    </div>
    
    
    </section>
    <!-- End Portfolio Section -->
  </div>
  </section>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "template/section/project.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"projects\">
<div class=\"project\">
    <section id=\"portfolio\" class=\"portfolio section-bg\">
      <div class=\"container\">
  
        <div class=\"section-title\">
          <h2>Project</h2>
        </div>
  
        <div class=\"row\" data-aos=\"fade-up\">
          <div class=\"col-lg-12 d-flex justify-content-center\">
            <ul id=\"portfolio-flters\">
              <li data-filter=\"*\" class=\"filter-active\">All</li>
              <li data-filter=\".filter-app\">Réseau</li>
              <li data-filter=\".filter-web\">Application web & mobile</li>
              <li data-filter=\".filter-appDesktop\">Application bureau</li>
            </ul>
          </div>
        </div>
  
        <!-- Conteneur pour afficher les sections -->
      <div id=\"portfolio-projects\" class=\"row\"></div>
  
      </div>
      <!-- Modal -->
      <div id=\"projectModal\" class=\"modal\">
        <div class=\"modal-content\">
            <span class=\"close\">&times;</span>
            <div class=\"language-icon\">
                <img src=\"/src/public/images/anssi_logo.png\" alt=\"JavaFX\" class=\"language-image\"> <!-- Remplace par l'URL de ton icône -->
            </div>
            <div class=\"modal-images\">
                <!-- Images slider -->
            </div>
            <div class=\"modal-description\">
                <!-- Project description -->
            </div>
        </div>
    </div>
    
    
    </section>
    <!-- End Portfolio Section -->
  </div>
  </section>", "template/section/project.html.twig", "C:\\Users\\fouaheb\\Downloads\\portefolio\\src\\views\\template\\section\\project.html.twig");
    }
}
