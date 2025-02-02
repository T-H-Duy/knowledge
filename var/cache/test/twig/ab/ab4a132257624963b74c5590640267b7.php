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

/* /_partials/footer.html.twig */
class __TwigTemplate_487d058869db56dbdf66d13d814b5ba4 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/_partials/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/_partials/footer.html.twig"));

        // line 1
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/footer.css"), "html", null, true);
        yield "\" type=\"text/css\" />

<footer>

    <div class=\"footer-container py-5\">
        <div class=\"footer-logo\">
            <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                <img src=";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo_knowledge.png"), "html", null, true);
        yield " alt=\"Logo Knowledge\" class=\"logo\">
            </a>
        </div>

        <div class=\"footer-info\">
            <address>
                <p>Knowledge E-learning</p>
                <p>1 rue du Savoir</p>
                <p>75001 Paris</p>
                <a href=\"https://www.knowledge-elearning.fr\">knowledge-elearning.fr</a>
            </address>
        </div>
    </div>
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/_partials/footer.html.twig";
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
        return array (  62 => 8,  58 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<link rel=\"stylesheet\" href=\"{{ asset('assets/css/footer.css') }}\" type=\"text/css\" />

<footer>

    <div class=\"footer-container py-5\">
        <div class=\"footer-logo\">
            <a href=\"{{ path('app_home') }}\">
                <img src={{ asset(\"assets/images/logo_knowledge.png\") }} alt=\"Logo Knowledge\" class=\"logo\">
            </a>
        </div>

        <div class=\"footer-info\">
            <address>
                <p>Knowledge E-learning</p>
                <p>1 rue du Savoir</p>
                <p>75001 Paris</p>
                <a href=\"https://www.knowledge-elearning.fr\">knowledge-elearning.fr</a>
            </address>
        </div>
    </div>
</footer>", "/_partials/footer.html.twig", "E:\\CEF\\Devoirs\\Bilan 3 - Knowledge Learning\\knowledge_learning-main\\knowledge_learning\\templates\\_partials\\footer.html.twig");
    }
}
