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
class __TwigTemplate_ffb698e0b1eff4c57733b9cb08a047ef extends Template
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
              <li data-filter=\".filter-app\">Business Intelligence</li>
              <li data-filter=\".filter-card\">Intelligence Artificielle</li>
              <li data-filter=\".filter-web\">Web / Mobile</li>
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
              <li data-filter=\".filter-app\">Business Intelligence</li>
              <li data-filter=\".filter-card\">Intelligence Artificielle</li>
              <li data-filter=\".filter-web\">Web / Mobile</li>
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
  </section>", "template/section/project.html.twig", "C:\\wamp64\\www\\portefolio\\src\\views\\template\\section\\project.html.twig");
    }
}
