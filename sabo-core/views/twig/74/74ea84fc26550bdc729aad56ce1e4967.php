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

/* template/section/otherProject.html.twig */
class __TwigTemplate_81774173e056d406744732e367a9c65c extends Template
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
        echo "
    <section class=\"other_projects\">
        <h2>Projets Serveur et Réseau (Lab)</h2>

        <div class=\"other_project\">
            <h3><i class=\"fas fa-users\"></i> Serveur Active Directory</h3>
            <p><strong>Description :</strong> Mise en place d'un serveur Active Directory pour gérer les utilisateurs et les groupes dans un réseau d'entreprise.</p>
            <p><strong>Technologies :</strong> Windows Server, ADDS, GPO, GPP.</p>
            <p><strong>Résultat :</strong> Centralisation de la gestion des utilisateurs avec des stratégies de sécurité renforcées.</p>
        </div>
        
        <div class=\"other_project\">
            <h3><i class=\"fas fa-globe\"></i> Serveur DNS</h3>
            <p><strong>Description :</strong> Configuration d’un serveur DNS pour la résolution des noms de domaine dans un réseau local.</p>
            <p><strong>Technologies :</strong> Windows Server, DNS</p>
            <p><strong>Résultat :</strong> Amélioration de la gestion des adresses IP et des noms de domaine.</p>
        </div>
        
        <div class=\"other_project\">
            <h3><i class=\"fas fa-network-wired\"></i> Serveur DHCP</h3>
            <p><strong>Description :</strong> Installation d'un serveur DHCP pour l'attribution automatique des adresses IP aux appareils du réseau.</p>
            <p><strong>Technologies :</strong> Windows Server, DHCP</p>
            <p><strong>Résultat :</strong> Réduction des conflits d'IP et simplification de la gestion des adresses.</p>
        </div>
        
        <div class=\"other_project\">
            <h3><i class=\"fas fa-folder\"></i> Serveur de Fichiers</h3>
            <p><strong>Description :</strong> Déploiement d'un serveur de fichiers pour le stockage sécurisé et le partage des données.</p>
            <p><strong>Technologies :</strong> Windows Server, NTFS</p>
            <p><strong>Résultat :</strong> Gestion des accès aux fichiers avec des permissions personnalisées.</p>
        </div>
        
    </section>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "template/section/otherProject.html.twig";
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
        return new Source("
    <section class=\"other_projects\">
        <h2>Projets Serveur et Réseau (Lab)</h2>

        <div class=\"other_project\">
            <h3><i class=\"fas fa-users\"></i> Serveur Active Directory</h3>
            <p><strong>Description :</strong> Mise en place d'un serveur Active Directory pour gérer les utilisateurs et les groupes dans un réseau d'entreprise.</p>
            <p><strong>Technologies :</strong> Windows Server, ADDS, GPO, GPP.</p>
            <p><strong>Résultat :</strong> Centralisation de la gestion des utilisateurs avec des stratégies de sécurité renforcées.</p>
        </div>
        
        <div class=\"other_project\">
            <h3><i class=\"fas fa-globe\"></i> Serveur DNS</h3>
            <p><strong>Description :</strong> Configuration d’un serveur DNS pour la résolution des noms de domaine dans un réseau local.</p>
            <p><strong>Technologies :</strong> Windows Server, DNS</p>
            <p><strong>Résultat :</strong> Amélioration de la gestion des adresses IP et des noms de domaine.</p>
        </div>
        
        <div class=\"other_project\">
            <h3><i class=\"fas fa-network-wired\"></i> Serveur DHCP</h3>
            <p><strong>Description :</strong> Installation d'un serveur DHCP pour l'attribution automatique des adresses IP aux appareils du réseau.</p>
            <p><strong>Technologies :</strong> Windows Server, DHCP</p>
            <p><strong>Résultat :</strong> Réduction des conflits d'IP et simplification de la gestion des adresses.</p>
        </div>
        
        <div class=\"other_project\">
            <h3><i class=\"fas fa-folder\"></i> Serveur de Fichiers</h3>
            <p><strong>Description :</strong> Déploiement d'un serveur de fichiers pour le stockage sécurisé et le partage des données.</p>
            <p><strong>Technologies :</strong> Windows Server, NTFS</p>
            <p><strong>Résultat :</strong> Gestion des accès aux fichiers avec des permissions personnalisées.</p>
        </div>
        
    </section>
", "template/section/otherProject.html.twig", "C:\\wamp64\\www\\portefolio\\src\\views\\template\\section\\otherProject.html.twig");
    }
}
