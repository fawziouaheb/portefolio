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

/* template/section/logiciel.html.twig */
class __TwigTemplate_6770b9470fd1a01210dc1680ff5fe452 extends Template
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
        echo "<div class=\"logiciel\"> 
<h2>Outils et Technologies</h2>
  <div class=\"competences\">

        <div class=\"competence\">
            <img src=\"/src/public/icons/sap.png\" alt=\"Icone Sap\">
            <span>SAP</span>
        </div>

        <div class=\"competence\">
            <img src=\"/src/public/icons/trello.png\" alt=\"Icone Trello\">
            <span>Trello</span>
        </div>
        
        <div class=\"competence\">
            <img src=\"/src/public/icons/gestSup.jpg\" alt=\"Icone Gest Sup\">
            <span>Gest Sup</span>
        </div>

        <div class=\"competence\">
            <img src=\"/src/public/icons/cisco.jpg\" alt=\"Icone  Cisco prime\">
            <span>Cisco Prime</span>
        </div>
        <div class=\"competence\">
            <img src=\"/src/public/icons/zabbix.png\" alt=\"Icone Zabbix\">
            <span>Zabbix</span>
        </div>

        <div class=\"competence\">
            <img src=\"/src/public/icons/wallix.png\" alt=\"Icone Wallix\">
            <span>Wallix</span>
        </div>
        <div class=\"competence\">
            <img src=\"/src/public/icons/osi.png\" alt=\"Icone Osi\">
            <span>PI Vision, PI AF, PI DataLink</span>
        </div>
        
        <div class=\"competence\">
            <img src=\"/src/public/icons/wireshark.webp\" alt=\"Icone Wirshark\">
            <span>Wirshark</span>
        </div>

        <div class=\"competence\">
            <img src=\"/src/public/icons/Burp-Suite.png\" alt=\"Icone Burp Suite\">
            <span>Burp Suite</span>
        </div>

        <div class=\"competence\">
            <img src=\"/src/public/icons/docker.svg\" alt=\"Icone Docker\">
            <span>Docker</span>
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
        return "template/section/logiciel.html.twig";
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
        return new Source("<div class=\"logiciel\"> 
<h2>Outils et Technologies</h2>
  <div class=\"competences\">

        <div class=\"competence\">
            <img src=\"/src/public/icons/sap.png\" alt=\"Icone Sap\">
            <span>SAP</span>
        </div>

        <div class=\"competence\">
            <img src=\"/src/public/icons/trello.png\" alt=\"Icone Trello\">
            <span>Trello</span>
        </div>
        
        <div class=\"competence\">
            <img src=\"/src/public/icons/gestSup.jpg\" alt=\"Icone Gest Sup\">
            <span>Gest Sup</span>
        </div>

        <div class=\"competence\">
            <img src=\"/src/public/icons/cisco.jpg\" alt=\"Icone  Cisco prime\">
            <span>Cisco Prime</span>
        </div>
        <div class=\"competence\">
            <img src=\"/src/public/icons/zabbix.png\" alt=\"Icone Zabbix\">
            <span>Zabbix</span>
        </div>

        <div class=\"competence\">
            <img src=\"/src/public/icons/wallix.png\" alt=\"Icone Wallix\">
            <span>Wallix</span>
        </div>
        <div class=\"competence\">
            <img src=\"/src/public/icons/osi.png\" alt=\"Icone Osi\">
            <span>PI Vision, PI AF, PI DataLink</span>
        </div>
        
        <div class=\"competence\">
            <img src=\"/src/public/icons/wireshark.webp\" alt=\"Icone Wirshark\">
            <span>Wirshark</span>
        </div>

        <div class=\"competence\">
            <img src=\"/src/public/icons/Burp-Suite.png\" alt=\"Icone Burp Suite\">
            <span>Burp Suite</span>
        </div>

        <div class=\"competence\">
            <img src=\"/src/public/icons/docker.svg\" alt=\"Icone Docker\">
            <span>Docker</span>
        </div>

    </div>
</div>

", "template/section/logiciel.html.twig", "C:\\wamp64\\www\\portefolio\\src\\views\\template\\section\\logiciel.html.twig");
    }
}
