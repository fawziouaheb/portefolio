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

/* template/section/projectp.html.twig */
class __TwigTemplate_ec331e804f50406d7edb34674bddbe5e extends Template
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
        echo "<div class=\"project-pro\">
    <h2>Projets Professionnels</h2>
    <div class=\"container-project\">
    
        <img class=\"logo-tereos\" src=\"/src/public/images/logo-tereos.png\" alt=\"logo de Tereos\">
        <img class=\"logo-loraWan\" src=\"/src/public/images/LoRaWAN_Logo.svg.png\" alt=\"Logo de la technologie LoraWan\">
        <h3>Projet IoT</h3>

        <div class=\"text-img\">
           <ul>
            <p>Gestion de projet IoT chez Tereos</p>
            <li>Étude du projet et de la problématique principale : Analyse approfondie du projet et identification des défis à relever.</li>
            <li>Installation d'une nouvelle antenne pour un réseau privé LoRaWAN : Mise en place d'une antenne pour renforcer la couverture du réseau LoRaWAN privé.</li>
            <li>Installation d'un nouveau capteur à contact sec sur l'un de nos forages : Intégration d'un capteur à contact sec pour surveiller les forages.</li>
            <li>Validation du POC (Proof of Concept) et réalisation du projet : Confirmation de la viabilité du concept et finalisation du projet.</li>
        </ul>

      
        <img class=\"image-project-lora\" src=\"/src/public/images/project-IOT.png\" alt=\"projet IoT\">

        </div>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "template/section/projectp.html.twig";
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
        return new Source("<div class=\"project-pro\">
    <h2>Projets Professionnels</h2>
    <div class=\"container-project\">
    
        <img class=\"logo-tereos\" src=\"/src/public/images/logo-tereos.png\" alt=\"logo de Tereos\">
        <img class=\"logo-loraWan\" src=\"/src/public/images/LoRaWAN_Logo.svg.png\" alt=\"Logo de la technologie LoraWan\">
        <h3>Projet IoT</h3>

        <div class=\"text-img\">
           <ul>
            <p>Gestion de projet IoT chez Tereos</p>
            <li>Étude du projet et de la problématique principale : Analyse approfondie du projet et identification des défis à relever.</li>
            <li>Installation d'une nouvelle antenne pour un réseau privé LoRaWAN : Mise en place d'une antenne pour renforcer la couverture du réseau LoRaWAN privé.</li>
            <li>Installation d'un nouveau capteur à contact sec sur l'un de nos forages : Intégration d'un capteur à contact sec pour surveiller les forages.</li>
            <li>Validation du POC (Proof of Concept) et réalisation du projet : Confirmation de la viabilité du concept et finalisation du projet.</li>
        </ul>

      
        <img class=\"image-project-lora\" src=\"/src/public/images/project-IOT.png\" alt=\"projet IoT\">

        </div>
    </div>
</div>", "template/section/projectp.html.twig", "C:\\Users\\fouaheb\\Downloads\\portefolio\\src\\views\\template\\section\\projectp.html.twig");
    }
}
