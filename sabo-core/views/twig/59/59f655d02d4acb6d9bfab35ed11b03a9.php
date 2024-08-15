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

/* template/section/skills.html.twig */
class __TwigTemplate_74ac39f6b9990f7255b7c4939cedc5cf extends Template
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
        echo "<div class=\"skills\">
    <h2>Skills</h2>
    <div id=\"progress-section\" class=\"skills-container\">
        <div class=\"skills-section\">
            <h2>Virtualisation</h2>
            <div class=\"skill-with-progress\">
                <p>VMWARE</p>
                <div class=\"progress-bar\" id=\"progress-vmware\">
                    <div class=\"progress\"></div>
                </div>
            </div>
        </div>
        
        <div class=\"skills-section\">
            <h2>Développement</h2>
            <div class=\"skill-with-progress\">
                <p>PHP</p>
                <div class=\"progress-bar\" id=\"progress-php\">
                    <div class=\"progress\"></div>
                </div>
            </div>
        </div>
        

        <div class=\"skills-section\">
            <p>hggggggg</p>
        </div>

        <div class=\"skills-section\">
            <p>hggggggg</p>
        </div>

        <div class=\"skills-section\">
            <p>hggggggg</p>
        </div>

        <div class=\"skills-section\">
            <p>hggggggg</p>
        </div>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "template/section/skills.html.twig";
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
        return new Source("<div class=\"skills\">
    <h2>Skills</h2>
    <div id=\"progress-section\" class=\"skills-container\">
        <div class=\"skills-section\">
            <h2>Virtualisation</h2>
            <div class=\"skill-with-progress\">
                <p>VMWARE</p>
                <div class=\"progress-bar\" id=\"progress-vmware\">
                    <div class=\"progress\"></div>
                </div>
            </div>
        </div>
        
        <div class=\"skills-section\">
            <h2>Développement</h2>
            <div class=\"skill-with-progress\">
                <p>PHP</p>
                <div class=\"progress-bar\" id=\"progress-php\">
                    <div class=\"progress\"></div>
                </div>
            </div>
        </div>
        

        <div class=\"skills-section\">
            <p>hggggggg</p>
        </div>

        <div class=\"skills-section\">
            <p>hggggggg</p>
        </div>

        <div class=\"skills-section\">
            <p>hggggggg</p>
        </div>

        <div class=\"skills-section\">
            <p>hggggggg</p>
        </div>
    </div>
</div>", "template/section/skills.html.twig", "C:\\wamp64\\www\\portefolio\\src\\views\\template\\section\\skills.html.twig");
    }
}
