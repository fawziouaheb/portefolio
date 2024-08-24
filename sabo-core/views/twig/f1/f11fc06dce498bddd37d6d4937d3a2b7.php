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
class __TwigTemplate_4a2edfe8dda046018aff1b4f546a8802 extends Template
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
            <h3>Apprentice - 2 Years</h3>
        </div>
        <div class=\"text-experience-1\">
            <p>experience  1</p>
        </div>
        
        <img class=\"img-experience-2\" src=\"/src/public/images/logo-virobotic.png\" alt=\"stagiaire chez Tereos\">
        <div class=\"title-experience-2\">
            <h3>Internship - 2 Month</h3>
        </div>
        <div class=\"text-experience-2\">
            <p><span class=\"bullet-point\">•</span> Analysis of website performance and proposal of improvement solutions to enhance user experience.</p>
            <p><span class=\"bullet-point\">•</span> Development and maintenance of a website using the Symfony framework.</p>
            <p><span class=\"bullet-point\">•</span> Ensuring the security of the site's data.</p>      
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
            <h3>Apprentice - 2 Years</h3>
        </div>
        <div class=\"text-experience-1\">
            <p>experience  1</p>
        </div>
        
        <img class=\"img-experience-2\" src=\"/src/public/images/logo-virobotic.png\" alt=\"stagiaire chez Tereos\">
        <div class=\"title-experience-2\">
            <h3>Internship - 2 Month</h3>
        </div>
        <div class=\"text-experience-2\">
            <p><span class=\"bullet-point\">•</span> Analysis of website performance and proposal of improvement solutions to enhance user experience.</p>
            <p><span class=\"bullet-point\">•</span> Development and maintenance of a website using the Symfony framework.</p>
            <p><span class=\"bullet-point\">•</span> Ensuring the security of the site's data.</p>      
        </div>
</div>      
</section>", "template/section/experience.html.twig", "C:\\wamp64\\www\\portefolio\\src\\views\\template\\section\\experience.html.twig");
    }
}
