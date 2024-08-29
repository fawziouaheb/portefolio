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

/* template/section/profile.html.twig */
class __TwigTemplate_a44854d113881cf3252a459f65a9e90f extends Template
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
        echo "<div class=\"profile\">
    <img class=\"imgProfile\" src=\"/src/public/images/profileImage.webp\" alt=\"la photo de profile de Fawzi ouaheb\">
    <div class=\"presentation\">
        <p id=\"typing-text\" class=\"txt-presentation\"></p>
    </div>
    <div class=\"navbar-m\">
        <div class=\"hamburger\">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li><a href=\"#profile\">Home</a></li>
            <li><a href=\"#experiences\">Experience</a></li>
            <li><a href=\"#skills\">Compétances</a></li>
            <li><a href=\"#formations\">Formations</a></li>
            <li><a href=\"#projects\">Project</a></li>
        </ul>
    </div>
    <div class=\"background-toggle\">
        <i class=\"fas fa-palette\"></i> <!-- Icône Font Awesome -->
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "template/section/profile.html.twig";
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
        return new Source("<div class=\"profile\">
    <img class=\"imgProfile\" src=\"/src/public/images/profileImage.webp\" alt=\"la photo de profile de Fawzi ouaheb\">
    <div class=\"presentation\">
        <p id=\"typing-text\" class=\"txt-presentation\"></p>
    </div>
    <div class=\"navbar-m\">
        <div class=\"hamburger\">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li><a href=\"#profile\">Home</a></li>
            <li><a href=\"#experiences\">Experience</a></li>
            <li><a href=\"#skills\">Compétances</a></li>
            <li><a href=\"#formations\">Formations</a></li>
            <li><a href=\"#projects\">Project</a></li>
        </ul>
    </div>
    <div class=\"background-toggle\">
        <i class=\"fas fa-palette\"></i> <!-- Icône Font Awesome -->
    </div>
</div>
", "template/section/profile.html.twig", "C:\\Users\\fouaheb\\Downloads\\portefolio\\src\\views\\template\\section\\profile.html.twig");
    }
}
