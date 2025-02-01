<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/index.html.twig */
class __TwigTemplate_f97ff4e3db75df2634f2af596ae1ca83 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Knowledge-Learning";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/home.css"), "html", null, true);
        yield "\" type=\"text/css\" />

<div class=\"container my-5\">
    <div class=\"row\">
        <div class=\"col-12 text-center\">
            <div class=\"img mb-4\">
                <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/image_home.png"), "html", null, true);
        yield "\" alt=\"Image de présentation\" class=\"img-fluid\">
            </div>
            <h1>Bienvenue sur Knowledge-Learning</h1>
        </div>
    </div>
    
    <div class=\"row mt-5\">
        <div class=\"col-12 col-lg-8\">
            <h2>Présentation</h2>
            <p>
                Knowledge-Learning est une plateforme e-learning dédiée à l’apprentissage dans des domaines aussi divers que la musique, la cuisine, l'informatique, et le jardinage. Pensée pour les passionnés et les curieux, elle propose des parcours structurés et enrichissants adaptés à tous les niveaux. Chaque cursus se compose de leçons interactives avec des fiches et des vidéos, permettant aux utilisateurs d’apprendre à leur propre rythme. Les apprenants peuvent valider leurs compétences en obtenant des certifications « Knowledge-Learning » après avoir complété l’ensemble des leçons d'un thème.
            </p>
        </div>

        <div class=\"col-12 col-lg-4\">
            
            <h3>Les points forts</h3>
            <ul>
                <li>Choix de cursus couvrant de nombreux centres d’intérêt.</li>
                <li>Possibilité d’acheter un cursus complet ou des leçons individuelles.</li>
                <li>Apprentissage en ligne accessible depuis n’importe quel appareil.</li>
                <li>À chaque leçon validée, un badge est attribué, attestant la maîtrise de cette leçon.</li>
            </ul>
        </div>
    </div>
    
    <div class=\"row mt-4\">
        <div class=\"col-12 text-center\">
            <p>Knowledge-Learning, pour apprendre, se perfectionner et valider ses connaissances dans ses passions !</p>
            <p>N'hésitez pas et lancez-vous !</p>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  110 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Knowledge-Learning{% endblock %}

{% block body %}
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/home.css') }}\" type=\"text/css\" />

<div class=\"container my-5\">
    <div class=\"row\">
        <div class=\"col-12 text-center\">
            <div class=\"img mb-4\">
                <img src=\"{{ asset('assets/images/image_home.png') }}\" alt=\"Image de présentation\" class=\"img-fluid\">
            </div>
            <h1>Bienvenue sur Knowledge-Learning</h1>
        </div>
    </div>
    
    <div class=\"row mt-5\">
        <div class=\"col-12 col-lg-8\">
            <h2>Présentation</h2>
            <p>
                Knowledge-Learning est une plateforme e-learning dédiée à l’apprentissage dans des domaines aussi divers que la musique, la cuisine, l'informatique, et le jardinage. Pensée pour les passionnés et les curieux, elle propose des parcours structurés et enrichissants adaptés à tous les niveaux. Chaque cursus se compose de leçons interactives avec des fiches et des vidéos, permettant aux utilisateurs d’apprendre à leur propre rythme. Les apprenants peuvent valider leurs compétences en obtenant des certifications « Knowledge-Learning » après avoir complété l’ensemble des leçons d'un thème.
            </p>
        </div>

        <div class=\"col-12 col-lg-4\">
            
            <h3>Les points forts</h3>
            <ul>
                <li>Choix de cursus couvrant de nombreux centres d’intérêt.</li>
                <li>Possibilité d’acheter un cursus complet ou des leçons individuelles.</li>
                <li>Apprentissage en ligne accessible depuis n’importe quel appareil.</li>
                <li>À chaque leçon validée, un badge est attribué, attestant la maîtrise de cette leçon.</li>
            </ul>
        </div>
    </div>
    
    <div class=\"row mt-4\">
        <div class=\"col-12 text-center\">
            <p>Knowledge-Learning, pour apprendre, se perfectionner et valider ses connaissances dans ses passions !</p>
            <p>N'hésitez pas et lancez-vous !</p>
        </div>
    </div>
</div>

{% endblock %}
", "home/index.html.twig", "E:\\CEF\\Devoirs\\Bilan 3 - Knowledge Learning\\knowledge_learning-main\\knowledge_learning-main\\templates\\home\\index.html.twig");
    }
}
