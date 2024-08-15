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

/* template/section/formation.html.twig */
class __TwigTemplate_36eb7ff47beedf157991e418ed06204b extends Template
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
        echo "<div class=\"formation\">
    <h2>Certification And Formation</h2>
    <div class=\"formation-container\">

        <div class=\"formation-section\">
            <img class=\"formation-logo\" src=\"/src/public/images/Université_de_Picardie_(logo).svg\" alt=\"logo universite de jule verne picardie\">
            <div class=\"formation-text\">
                <p class=\"formation-date\">2023-2025</p>
                <p class=\"formation-text-text\">Master's in Applied Computer Methods for Business Management.</p>

                <p class=\"formation-date\">2020-2023</p>
                <p class=\"formation-text-text\">Bachelor's degree in Computer Science with a focus on Information Technology.</p>
            </div>
        </div>
        
        <div class=\"formation-section\">
            <img class=\"formation-logo\" src=\"/src/public/images/anssi_logo.png\" alt=\"logo universite de jule verne picardie\">
            <div class=\"formation-text\">
                <p class=\"formation-date\">2024</p>
                <p class=\"formation-text-text\">Follow-up certificate on SecNum academy.</p>
            </div>
        </div>

        <div class=\"formation-section\">
            <img class=\"formation-logo\" src=\"/src/public/images/bac_logo.jpg\" alt=\"logo universite de jule verne picardie\">
            <div class=\"formation-text\">
                <p class=\"formation-date\">2020</p>
                <p class=\"formation-text-text\">Baccalaureate-Mathematical Series.</p>
            </div>
        </div>


</div>
</div>


";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "template/section/formation.html.twig";
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
        return new Source("<div class=\"formation\">
    <h2>Certification And Formation</h2>
    <div class=\"formation-container\">

        <div class=\"formation-section\">
            <img class=\"formation-logo\" src=\"/src/public/images/Université_de_Picardie_(logo).svg\" alt=\"logo universite de jule verne picardie\">
            <div class=\"formation-text\">
                <p class=\"formation-date\">2023-2025</p>
                <p class=\"formation-text-text\">Master's in Applied Computer Methods for Business Management.</p>

                <p class=\"formation-date\">2020-2023</p>
                <p class=\"formation-text-text\">Bachelor's degree in Computer Science with a focus on Information Technology.</p>
            </div>
        </div>
        
        <div class=\"formation-section\">
            <img class=\"formation-logo\" src=\"/src/public/images/anssi_logo.png\" alt=\"logo universite de jule verne picardie\">
            <div class=\"formation-text\">
                <p class=\"formation-date\">2024</p>
                <p class=\"formation-text-text\">Follow-up certificate on SecNum academy.</p>
            </div>
        </div>

        <div class=\"formation-section\">
            <img class=\"formation-logo\" src=\"/src/public/images/bac_logo.jpg\" alt=\"logo universite de jule verne picardie\">
            <div class=\"formation-text\">
                <p class=\"formation-date\">2020</p>
                <p class=\"formation-text-text\">Baccalaureate-Mathematical Series.</p>
            </div>
        </div>


</div>
</div>


", "template/section/formation.html.twig", "C:\\wamp64\\www\\portefolio\\src\\views\\template\\section\\formation.html.twig");
    }
}
