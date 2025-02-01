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

/* certification/index.html.twig */
class __TwigTemplate_a85416c0e661e1e42f7547b58b07df34 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certification/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certification/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "certification/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

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

        yield "Certifications";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 2
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/certifications.css"), "html", null, true);
        yield "\" type=\"text/css\" />

<div class=\"container my-3\">
  <div class=\"row\">
    <h1>Vos Certifications !</h1>

    <div class=\"separation\"></div>

    ";
        // line 10
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["certifications"]) || array_key_exists("certifications", $context) ? $context["certifications"] : (function () { throw new RuntimeError('Variable "certifications" does not exist.', 10, $this->source); })()))) {
            // line 11
            yield "    <p>
      Vous n'avez pas encore de certifications. Continuez à apprendre et validez vos leçons pour en
      obtenir !
    </p>

    ";
        } else {
            // line 16
            yield " 
    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["certifications"]) || array_key_exists("certifications", $context) ? $context["certifications"] : (function () { throw new RuntimeError('Variable "certifications" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["themeData"]) {
                // line 18
                yield "
    <h2 class=\" theme  mt-4 mb-2\">";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["themeData"], "theme", [], "any", false, false, false, 19), "nameTheme", [], "any", false, false, false, 19), "html", null, true);
                yield "</h2>

    ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["themeData"], "cursusList", [], "any", false, false, false, 21));
                foreach ($context['_seq'] as $context["_key"] => $context["cursusData"]) {
                    // line 22
                    yield "    <div class=\"cursus mx-3 my-2\">
        <h3 >";
                    // line 23
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursusData"], "cursus", [], "any", false, false, false, 23), "nameCursus", [], "any", false, false, false, 23), "html", null, true);
                    yield "</h3>
    </div>
    <ul class=\"ul-cursus\">
      ";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["cursusData"], "lessonsList", [], "any", false, false, false, 26));
                    foreach ($context['_seq'] as $context["_key"] => $context["lessonData"]) {
                        // line 27
                        yield "      <li class=\"li-lesson\">
        <img
          class=\"certification-img\"
          src=\"";
                        // line 30
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/uploads/images/certification/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lessonData"], "lesson", [], "any", false, false, false, 30), "certificationImage", [], "any", false, false, false, 30))), "html", null, true);
                        yield "\"
          alt=\"";
                        // line 31
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lessonData"], "lesson", [], "any", false, false, false, 31), "nameLesson", [], "any", false, false, false, 31), "html", null, true);
                        yield "\"
        />
        <p>";
                        // line 33
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lessonData"], "lesson", [], "any", false, false, false, 33), "nameLesson", [], "any", false, false, false, 33), "html", null, true);
                        yield "</p>
        <p>Obtenue le : ";
                        // line 34
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["lessonData"], "obtainedAt", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
                        yield "</p>
      </li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['lessonData'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    yield "    </ul>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cursusData'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['themeData'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield " ";
        }
        // line 39
        yield "  </div>
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
        return "certification/index.html.twig";
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
        return array (  194 => 39,  186 => 38,  179 => 37,  170 => 34,  166 => 33,  161 => 31,  157 => 30,  152 => 27,  148 => 26,  142 => 23,  139 => 22,  135 => 21,  130 => 19,  127 => 18,  123 => 17,  120 => 16,  112 => 11,  110 => 10,  98 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}Certifications{% endblock %} {% block body %}
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/certifications.css') }}\" type=\"text/css\" />

<div class=\"container my-3\">
  <div class=\"row\">
    <h1>Vos Certifications !</h1>

    <div class=\"separation\"></div>

    {% if certifications is empty %}
    <p>
      Vous n'avez pas encore de certifications. Continuez à apprendre et validez vos leçons pour en
      obtenir !
    </p>

    {% else %} 
    {% for themeData in certifications %}

    <h2 class=\" theme  mt-4 mb-2\">{{ themeData.theme.nameTheme }}</h2>

    {% for cursusData in themeData.cursusList %}
    <div class=\"cursus mx-3 my-2\">
        <h3 >{{ cursusData.cursus.nameCursus }}</h3>
    </div>
    <ul class=\"ul-cursus\">
      {% for lessonData in cursusData.lessonsList %}
      <li class=\"li-lesson\">
        <img
          class=\"certification-img\"
          src=\"{{ asset('assets/uploads/images/certification/'~ lessonData.lesson.certificationImage) }}\"
          alt=\"{{ lessonData.lesson.nameLesson }}\"
        />
        <p>{{ lessonData.lesson.nameLesson }}</p>
        <p>Obtenue le : {{lessonData.obtainedAt|date('d/m/Y')}}</p>
      </li>
      {% endfor %}
    </ul>
    {% endfor %} {% endfor %} {% endif %}
  </div>
</div>
{% endblock %}
", "certification/index.html.twig", "E:\\CEF\\Devoirs\\Bilan 3 - Knowledge Learning\\knowledge_learning-main\\knowledge_learning\\templates\\certification\\index.html.twig");
    }
}
