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

/* cart/index.html.twig */
class __TwigTemplate_801d715da52504542fc3032375fbd595 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        yield "Panier";
        
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
        yield "
<link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/cart.css"), "html", null, true);
        yield "\" type=\"text/css\" />

<div class=\"container\">
    <div class=\"row\">
        
        <h1>Panier</h1>

        <div class=\"text-center\">
            <div class=\"separation\"></div>
        </div>
        

    <table>
        <thead>
            <tr>
                <th>Nom de l'élèment</th>
                <th>Prix</th>
                <th>Action</th>
            </tr>
        </thead>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            yield "
    <tbody>
        <tr>
            <td>
                ";
            // line 32
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cursus", [], "any", false, false, false, 32)) {
                // line 33
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cursus", [], "any", false, false, false, 33), "nameCursus", [], "any", false, false, false, 33), "html", null, true);
                yield " 
                ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 34
$context["item"], "lesson", [], "any", false, false, false, 34)) {
                // line 35
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lesson", [], "any", false, false, false, 35), "nameLesson", [], "any", false, false, false, 35), "html", null, true);
                yield " 
                ";
            }
            // line 37
            yield "            </td>

            <td>
                ";
            // line 40
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cursus", [], "any", false, false, false, 40)) {
                // line 41
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cursus", [], "any", false, false, false, 41), "price", [], "any", false, false, false, 41), "html", null, true);
                yield " €
                ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 42
$context["item"], "lesson", [], "any", false, false, false, 42)) {
                // line 43
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "lesson", [], "any", false, false, false, 43), "price", [], "any", false, false, false, 43), "html", null, true);
                yield " €
                ";
            }
            // line 45
            yield "            </td>

            <td>
                <form action=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_cart_item", ["id_cart" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "idCart", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\" method=\"post\">
                    
                    <button type=\"submit\" class=\"delete\">Retirer</button>
                </form>
            </td>
        </tr>
    </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "</table>
    
    <div class=\"button\">
        <a href=\"/create-checkout-session\" class=\"btn\">valider la commande</a>
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
        return "cart/index.html.twig";
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
        return array (  190 => 56,  176 => 48,  171 => 45,  165 => 43,  163 => 42,  158 => 41,  156 => 40,  151 => 37,  145 => 35,  143 => 34,  138 => 33,  136 => 32,  130 => 28,  126 => 27,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier{% endblock %}

{% block body %}

<link rel=\"stylesheet\" href=\"{{ asset('assets/css/cart.css') }}\" type=\"text/css\" />

<div class=\"container\">
    <div class=\"row\">
        
        <h1>Panier</h1>

        <div class=\"text-center\">
            <div class=\"separation\"></div>
        </div>
        

    <table>
        <thead>
            <tr>
                <th>Nom de l'élèment</th>
                <th>Prix</th>
                <th>Action</th>
            </tr>
        </thead>
        {% for item in cartItems%}

    <tbody>
        <tr>
            <td>
                {% if item.cursus %}
                    {{ item.cursus.nameCursus }} 
                {% elseif item.lesson %}
                    {{ item.lesson.nameLesson }} 
                {% endif %}
            </td>

            <td>
                {% if item.cursus %}
                    {{ item.cursus.price }} €
                {% elseif item.lesson %}
                    {{ item.lesson.price }} €
                {% endif %}
            </td>

            <td>
                <form action=\"{{ path('remove_cart_item', {id_cart: item.idCart}) }}\" method=\"post\">
                    
                    <button type=\"submit\" class=\"delete\">Retirer</button>
                </form>
            </td>
        </tr>
    </tbody>
    {% endfor %}
</table>
    
    <div class=\"button\">
        <a href=\"/create-checkout-session\" class=\"btn\">valider la commande</a>
    </div>
    
   </div>
</div>
{% endblock %}
", "cart/index.html.twig", "E:\\CEF\\Devoirs\\Bilan 3 - Knowledge Learning\\knowledge_learning-main\\knowledge_learning\\templates\\cart\\index.html.twig");
    }
}
