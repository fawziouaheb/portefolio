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
        echo "<div class=\"Container-Experience\">
   <div class=\"line-experience\">
    <div class=\"round-exp1\"></div>
    <div class=\"round-exp2\"></div>
    </div>
    <div class=\"title-experience-1\">
        <p>Apprentice - 2 Years</p>
    </div>
    <div class=\"text-experience-1\">
        <p>experience  1</p>
    </div>
    <div class=\"text-experience-2\">
        <p>experience 2</p>
   </div>

</div>";
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
        return new Source("<div class=\"Container-Experience\">
   <div class=\"line-experience\">
    <div class=\"round-exp1\"></div>
    <div class=\"round-exp2\"></div>
    </div>
    <div class=\"title-experience-1\">
        <p>Apprentice - 2 Years</p>
    </div>
    <div class=\"text-experience-1\">
        <p>experience  1</p>
    </div>
    <div class=\"text-experience-2\">
        <p>experience 2</p>
   </div>

</div>", "template/section/experience.html.twig", "C:\\wamp64\\www\\portefolio\\src\\views\\template\\section\\experience.html.twig");
    }
}
