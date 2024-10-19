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

/* template/section/hobby.html.twig */
class __TwigTemplate_0c40eb0a476d182ac2460705c8a36aca extends Template
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
        echo "<div class=\"hobby\" >
<h2>Mes Moments de Détente et de Loisirs</h2>
<div class=\"activities\">
        <div class=\"elements\" id=\"services\">
            <div class=\"m-auto\">

                    <span style=\"--i : 1\">
                        <img src=\"/src/public/images/swimmer.png\" alt=\"#\">
                    </span>

                    <span style=\"--i : 2\">
                        <img src=\"/src/public/images/lifting.png\" alt=\"#\">
                    </span>

                    <span style=\"--i : 3\">
                        <img src=\"/src/public/images/roadtrip.png\" alt=\"#\">
                    </span>

                    <span style=\"--i : 4\">
                        <img src=\"/src/public/images/Apersonsittin.png\" alt=\"#\">
                    </span>

            </div>
        </div>
    </div>

</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "template/section/hobby.html.twig";
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
        return new Source("<div class=\"hobby\" >
<h2>Mes Moments de Détente et de Loisirs</h2>
<div class=\"activities\">
        <div class=\"elements\" id=\"services\">
            <div class=\"m-auto\">

                    <span style=\"--i : 1\">
                        <img src=\"/src/public/images/swimmer.png\" alt=\"#\">
                    </span>

                    <span style=\"--i : 2\">
                        <img src=\"/src/public/images/lifting.png\" alt=\"#\">
                    </span>

                    <span style=\"--i : 3\">
                        <img src=\"/src/public/images/roadtrip.png\" alt=\"#\">
                    </span>

                    <span style=\"--i : 4\">
                        <img src=\"/src/public/images/Apersonsittin.png\" alt=\"#\">
                    </span>

            </div>
        </div>
    </div>

</div>", "template/section/hobby.html.twig", "C:\\wamp64\\www\\portefolio\\src\\views\\template\\section\\hobby.html.twig");
    }
}
