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

/* template/section/experience.html.twig */
class __TwigTemplate_9fa4d2a863079c8983e7308bb66c74cf extends Template
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
        echo "<section id=\"experiences\">
<div class=\"Container-Experience\">
   <div class=\"line-experience\">
    <div class=\"round-exp1\"></div>
    <div class=\"round-exp2\"></div>
    </div>

        <img class=\"img-experience-1\" src=\"/src/public/images/logo-tereos.png\" alt=\"Apprenti chez Tereos\">
        <div class=\"title-experience-1\">
            <h3>Alternance | 24 Mois</h3>
        </div>
        <div class=\"text-experience-1\">
            <p>--------en-cours--------</p>

        </div>
        
        <img class=\"img-experience-2\" src=\"/src/public/images/logo-virobotic.png\" alt=\"stagiaire chez Tereos\">
        <div class=\"title-experience-2\">
            <h3>Stage En Développement Web | 2 Mois</h3>
        </div>
        <div class=\"text-experience-2\">
            <p><span class=\"bullet-point\">•</span> Analyse des performances du site web et proposition de solutions d'amélioration pour améliorer l'expérience utilisateur.</p>
            <p><span class=\"bullet-point\">•</span> Développement et maintenance d'un site en utilisant le Framework Symfony.</p>
            <p><span class=\"bullet-point\">•</span> Assurer la sécurité des données du site.</p>      
        </div>
</div>      
</section>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "template/section/experience.html.twig";
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
        return new Source("<section id=\"experiences\">
<div class=\"Container-Experience\">
   <div class=\"line-experience\">
    <div class=\"round-exp1\"></div>
    <div class=\"round-exp2\"></div>
    </div>

        <img class=\"img-experience-1\" src=\"/src/public/images/logo-tereos.png\" alt=\"Apprenti chez Tereos\">
        <div class=\"title-experience-1\">
            <h3>Alternance | 24 Mois</h3>
        </div>
        <div class=\"text-experience-1\">
            <p>--------en-cours--------</p>

        </div>
        
        <img class=\"img-experience-2\" src=\"/src/public/images/logo-virobotic.png\" alt=\"stagiaire chez Tereos\">
        <div class=\"title-experience-2\">
            <h3>Stage En Développement Web | 2 Mois</h3>
        </div>
        <div class=\"text-experience-2\">
            <p><span class=\"bullet-point\">•</span> Analyse des performances du site web et proposition de solutions d'amélioration pour améliorer l'expérience utilisateur.</p>
            <p><span class=\"bullet-point\">•</span> Développement et maintenance d'un site en utilisant le Framework Symfony.</p>
            <p><span class=\"bullet-point\">•</span> Assurer la sécurité des données du site.</p>      
        </div>
</div>      
</section>", "template/section/experience.html.twig", "C:\\Users\\fouaheb\\Downloads\\portefolio\\src\\views\\template\\section\\experience.html.twig");
    }
}
