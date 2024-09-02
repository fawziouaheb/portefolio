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

/* template/section/about.html.twig */
class __TwigTemplate_245c3ad84ec189ff93e1087f70ac0350 extends Template
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
        echo "<div class=\"container-about\">
    <h2>A Propos De Moi</h2>
    <div class=\"section-propos\">
        <div class=\"propos-column\">
            <p> <span class=\"flech\">></span> <span class=\"text-bold\">Email : </span> fawziouaheb@gmail.com</p>
            <p> <span class=\"flech\">></span> <span class=\"text-bold\">Téléphone : </span>06 03 52 43 51.</p>
            <p> <span class=\"flech\">></span> <span class=\"text-bold\">Ville : </span> Amiens.</p>
            <p> <span class=\"flech\">></span> <span class=\"text-bold\">Age : </span>23 ans</p>
        </div>
        <div class=\"propos-column\">
            <p> <span class=\"flech\">></span> <span class=\"text-bold\">Dernier diplôme obtenu : </span> Master 2</p>
            <p> <span class=\"flech\">></span> <span class=\"text-bold\">Disponibilité : </span>Mi-septembre 2025</p>
            <p> <span class=\"flech\">></span> <span class=\"text-bold\">Mobilité : </span> France</p>

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
        return "template/section/about.html.twig";
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
        return new Source("<div class=\"container-about\">
    <h2>A Propos De Moi</h2>
    <div class=\"section-propos\">
        <div class=\"propos-column\">
            <p> <span class=\"flech\">></span> <span class=\"text-bold\">Email : </span> fawziouaheb@gmail.com</p>
            <p> <span class=\"flech\">></span> <span class=\"text-bold\">Téléphone : </span>06 03 52 43 51.</p>
            <p> <span class=\"flech\">></span> <span class=\"text-bold\">Ville : </span> Amiens.</p>
            <p> <span class=\"flech\">></span> <span class=\"text-bold\">Age : </span>23 ans</p>
        </div>
        <div class=\"propos-column\">
            <p> <span class=\"flech\">></span> <span class=\"text-bold\">Dernier diplôme obtenu : </span> Master 2</p>
            <p> <span class=\"flech\">></span> <span class=\"text-bold\">Disponibilité : </span>Mi-septembre 2025</p>
            <p> <span class=\"flech\">></span> <span class=\"text-bold\">Mobilité : </span> France</p>

        </div>
    </div>
</div>
", "template/section/about.html.twig", "C:\\Users\\fouaheb\\Downloads\\portefolio\\src\\views\\template\\section\\about.html.twig");
    }
}
