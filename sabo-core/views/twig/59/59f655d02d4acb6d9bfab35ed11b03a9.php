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
        echo "<section id=\"skills\">
<div class=\"skills\">
    <h2>Compétances</h2>
    <div id=\"progress-section\" class=\"skills-container\">


        
        ";
        // line 9
        echo "        <div class=\"skills-section\">
            <h2>Développement</h2>
            
            ";
        // line 13
        echo "            <div class=\"skill-with-progress\">
                <p>PHP </p>
                <div class=\"progress-bar\" id=\"progress-php\">
                    <div class=\"progress\"></div>
                </div>
            </div>

            ";
        // line 21
        echo "            <div class=\"skill-with-progress\">
                <p>JAVA</p>
                <div class=\"progress-bar\" id=\"progress-java\">
                    <div class=\"progress\"></div>
                </div>
            </div>

            ";
        // line 29
        echo "            <div class=\"skill-with-progress\">
                <p>C</p>
                <div class=\"progress-bar\" id=\"progress-c\">
                    <div class=\"progress\"></div>
                </div>
            </div>

            ";
        // line 37
        echo "            <div class=\"skill-with-progress\">
                <p>JAVASCRIPT</p>
                <div class=\"progress-bar\" id=\"progress-javascript\">
                    <div class=\"progress\"></div>
                </div>
            </div>
        </div>
        

        ";
        // line 47
        echo "        <div class=\"skills-section\">
            <h2>Base Des Données</h2>
            
            ";
        // line 51
        echo "            <div class=\"skill-with-progress\">
                <p>MYSQL</p>
                <div class=\"progress-bar\" id=\"progress-mysql\">
                    <div class=\"progress\"></div>
                </div>
            </div>

            ";
        // line 59
        echo "            <div class=\"skill-with-progress\">
                <p>ORACLE</p>
                <div class=\"progress-bar\" id=\"progress-oracle\">
                    <div class=\"progress\"></div>
                </div>
            </div>

            ";
        // line 67
        echo "            <div class=\"skill-with-progress\">
                <p>MARIADB</p>
                <div class=\"progress-bar\" id=\"progress-mariadb\">
                    <div class=\"progress\"></div>
                </div>
            </div>
        </div>

        ";
        // line 76
        echo "        <div class=\"skills-section\">
            <h2>Virtualisation</h2>
            <div class=\"skill-with-progress\">
                <p>VMWARE</p>
                <div class=\"progress-bar\" id=\"progress-vmware\">
                    <div class=\"progress\"></div>
                </div>
            </div>

        </div>
        ";
        // line 87
        echo "        <div class=\"skills-section\">
            <h2>Système d'exploitation</h2>
            <div class=\"skill-with-progress\">
                <p>Kali-linux</p>
                <div class=\"progress-bar\" id=\"progress-kali-linux\">
                    <div class=\"progress\"></div>
                </div>
            </div>
            <div class=\"skill-with-progress\">
                <p>Windows</p>
                <div class=\"progress-bar\" id=\"progress-windows\">
                    <div class=\"progress\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>";
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
        return array (  134 => 87,  122 => 76,  112 => 67,  103 => 59,  94 => 51,  89 => 47,  78 => 37,  69 => 29,  60 => 21,  51 => 13,  46 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"skills\">
<div class=\"skills\">
    <h2>Compétances</h2>
    <div id=\"progress-section\" class=\"skills-container\">


        
        {# skills développement #}
        <div class=\"skills-section\">
            <h2>Développement</h2>
            
            {# skills PHP #}
            <div class=\"skill-with-progress\">
                <p>PHP </p>
                <div class=\"progress-bar\" id=\"progress-php\">
                    <div class=\"progress\"></div>
                </div>
            </div>

            {# skills JAVA #}
            <div class=\"skill-with-progress\">
                <p>JAVA</p>
                <div class=\"progress-bar\" id=\"progress-java\">
                    <div class=\"progress\"></div>
                </div>
            </div>

            {# skills C #}
            <div class=\"skill-with-progress\">
                <p>C</p>
                <div class=\"progress-bar\" id=\"progress-c\">
                    <div class=\"progress\"></div>
                </div>
            </div>

            {# skills JAVASCRIPT #}
            <div class=\"skill-with-progress\">
                <p>JAVASCRIPT</p>
                <div class=\"progress-bar\" id=\"progress-javascript\">
                    <div class=\"progress\"></div>
                </div>
            </div>
        </div>
        

        {# skills base des données #}
        <div class=\"skills-section\">
            <h2>Base Des Données</h2>
            
            {# skills MYSQL #}
            <div class=\"skill-with-progress\">
                <p>MYSQL</p>
                <div class=\"progress-bar\" id=\"progress-mysql\">
                    <div class=\"progress\"></div>
                </div>
            </div>

            {# skills ORACLE #}
            <div class=\"skill-with-progress\">
                <p>ORACLE</p>
                <div class=\"progress-bar\" id=\"progress-oracle\">
                    <div class=\"progress\"></div>
                </div>
            </div>

            {# skills MARIADB #}
            <div class=\"skill-with-progress\">
                <p>MARIADB</p>
                <div class=\"progress-bar\" id=\"progress-mariadb\">
                    <div class=\"progress\"></div>
                </div>
            </div>
        </div>

        {# skills virtualisation #}
        <div class=\"skills-section\">
            <h2>Virtualisation</h2>
            <div class=\"skill-with-progress\">
                <p>VMWARE</p>
                <div class=\"progress-bar\" id=\"progress-vmware\">
                    <div class=\"progress\"></div>
                </div>
            </div>

        </div>
        {# skills Système d'exploitation #}
        <div class=\"skills-section\">
            <h2>Système d'exploitation</h2>
            <div class=\"skill-with-progress\">
                <p>Kali-linux</p>
                <div class=\"progress-bar\" id=\"progress-kali-linux\">
                    <div class=\"progress\"></div>
                </div>
            </div>
            <div class=\"skill-with-progress\">
                <p>Windows</p>
                <div class=\"progress-bar\" id=\"progress-windows\">
                    <div class=\"progress\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>", "template/section/skills.html.twig", "C:\\wamp64\\www\\portefolio\\src\\views\\template\\section\\skills.html.twig");
    }
}
