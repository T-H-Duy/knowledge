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

/* formation/index.html.twig */
class __TwigTemplate_90f4a5434851a0468447ecfe34212091 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formation/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Les formations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        // line 4
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/formationIndex.css"), "html", null, true);
        yield "\" type=\"text/css\" />

<div class=\"container my-3\">
  <div class=\"row\">
    <h1>Nos Formations</h1>

    <div class=\"text-center\">
      <div class=\"separation\"></div>
    </div>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["themes"]) || array_key_exists("themes", $context) ? $context["themes"] : (function () { throw new RuntimeError('Variable "themes" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 14
            yield "
    <h2 class=\"mt-3\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "nameTheme", [], "any", false, false, false, 15), "html", null, true);
            yield " :</h2>

    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "cursuses", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["cursus"]) {
                // line 18
                yield "    <div class=\"card my-2\">
      <div class=\"card-title mt-3\">
        <div class=\"d-flex justify-content-evenly\">
          <h3>";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursus"], "nameCursus", [], "any", false, false, false, 21), "html", null, true);
                yield "</h3>
        </div>
      </div>
      
      <p class=\"mt-2\">";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursus"], "description", [], "any", false, false, false, 25), "html", null, true);
                yield "</p>

      <div class=\"d-flex flex-row\">
        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["cursus"], "lesson", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                    // line 29
                    yield "        <div class=\"col-md-6\">
          <div class=\"d-flex flex-column mx-2 p-3 card card-lesson\">
            <h4>";
                    // line 31
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lesson"], "nameLesson", [], "any", false, false, false, 31), "html", null, true);
                    yield "</h4>
            <div class=\"d-flex justify-content-between\">
              <p>";
                    // line 33
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lesson"], "description", [], "any", false, false, false, 33), "html", null, true);
                    yield "</p>
              <p>";
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lesson"], "price", [], "any", false, false, false, 34), "html", null, true);
                    yield "€</p>
            </div>

            <div class=\"button\">
              ";
                    // line 38
                    if ((CoreExtension::inFilter($context["lesson"], (isset($context["purchasedLessons"]) || array_key_exists("purchasedLessons", $context) ? $context["purchasedLessons"] : (function () { throw new RuntimeError('Variable "purchasedLessons" does not exist.', 38, $this->source); })())) || CoreExtension::inFilter($context["cursus"], (isset($context["purchasedCursus"]) || array_key_exists("purchasedCursus", $context) ? $context["purchasedCursus"] : (function () { throw new RuntimeError('Variable "purchasedCursus" does not exist.', 38, $this->source); })())))) {
                        // line 39
                        yield "                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cursus", ["id_lesson" => CoreExtension::getAttribute($this->env, $this->source, $context["lesson"], "idLesson", [], "any", false, false, false, 39)]), "html", null, true);
                        yield "\" class=\"btn\">Voir la leçon</a>
              ";
                    } else {
                        // line 41
                        yield "                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_cart", ["id_lesson" => CoreExtension::getAttribute($this->env, $this->source, $context["lesson"], "idLesson", [], "any", false, false, false, 41)]), "html", null, true);
                        yield "\" class=\"btn\">Acheter la leçon</a>
              ";
                    }
                    // line 43
                    yield "            </div>
          </div>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['lesson'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                yield "      </div>
      ";
                // line 48
                if (CoreExtension::inFilter($context["cursus"], (isset($context["purchasedCursus"]) || array_key_exists("purchasedCursus", $context) ? $context["purchasedCursus"] : (function () { throw new RuntimeError('Variable "purchasedCursus" does not exist.', 48, $this->source); })()))) {
                    // line 49
                    yield "        <div class=\"d-flex justify-content-evenly text-center mt-2\">
          <p>Vous avez acheté ce cursus.</p>
        </div>
      ";
                } elseif (CoreExtension::inFilter(                // line 52
$context["cursus"], (isset($context["cursusWithAllLessonsPurchased"]) || array_key_exists("cursusWithAllLessonsPurchased", $context) ? $context["cursusWithAllLessonsPurchased"] : (function () { throw new RuntimeError('Variable "cursusWithAllLessonsPurchased" does not exist.', 52, $this->source); })()))) {
                    // line 53
                    yield "        <div class=\"d-flex justify-content-evenly text-center mt-2\">
          <p>Vous avez toutes les leçons de ce cursus.</p>
        </div>
      ";
                } else {
                    // line 57
                    yield "        <div class=\"d-flex justify-content-evenly text-center mt-2\">
          <p>L'ensemble du cursus coûte ";
                    // line 58
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursus"], "price", [], "any", false, false, false, 58), "html", null, true);
                    yield "€</p>
          <a href=\"";
                    // line 59
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_cart", ["id_cursus" => CoreExtension::getAttribute($this->env, $this->source, $context["cursus"], "idCursus", [], "any", false, false, false, 59)]), "html", null, true);
                    yield "\" class=\"btn mb-2\">Acheter ce cursus</a>
        </div>
      ";
                }
                // line 62
                yield "    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cursus'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
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
        return "formation/index.html.twig";
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
        return array (  238 => 65,  232 => 64,  225 => 62,  219 => 59,  215 => 58,  212 => 57,  206 => 53,  204 => 52,  199 => 49,  197 => 48,  194 => 47,  185 => 43,  179 => 41,  173 => 39,  171 => 38,  164 => 34,  160 => 33,  155 => 31,  151 => 29,  147 => 28,  141 => 25,  134 => 21,  129 => 18,  125 => 17,  120 => 15,  117 => 14,  113 => 13,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Les formations{% endblock %}
{% block body %}
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/formationIndex.css') }}\" type=\"text/css\" />

<div class=\"container my-3\">
  <div class=\"row\">
    <h1>Nos Formations</h1>

    <div class=\"text-center\">
      <div class=\"separation\"></div>
    </div>
    {% for theme in themes %}

    <h2 class=\"mt-3\">{{ theme.nameTheme }} :</h2>

    {% for cursus in theme.cursuses %}
    <div class=\"card my-2\">
      <div class=\"card-title mt-3\">
        <div class=\"d-flex justify-content-evenly\">
          <h3>{{ cursus.nameCursus }}</h3>
        </div>
      </div>
      
      <p class=\"mt-2\">{{ cursus.description }}</p>

      <div class=\"d-flex flex-row\">
        {% for lesson in cursus.lesson %}
        <div class=\"col-md-6\">
          <div class=\"d-flex flex-column mx-2 p-3 card card-lesson\">
            <h4>{{ lesson.nameLesson }}</h4>
            <div class=\"d-flex justify-content-between\">
              <p>{{ lesson.description }}</p>
              <p>{{ lesson.price }}€</p>
            </div>

            <div class=\"button\">
              {% if lesson in purchasedLessons or cursus in purchasedCursus %}
                <a href=\"{{ path('app_cursus', { id_lesson: lesson.idLesson }) }}\" class=\"btn\">Voir la leçon</a>
              {% else %}
                <a href=\"{{ path('add_cart', { id_lesson: lesson.idLesson }) }}\" class=\"btn\">Acheter la leçon</a>
              {% endif %}
            </div>
          </div>
        </div>
        {% endfor %}
      </div>
      {% if cursus in purchasedCursus %}
        <div class=\"d-flex justify-content-evenly text-center mt-2\">
          <p>Vous avez acheté ce cursus.</p>
        </div>
      {% elseif cursus in cursusWithAllLessonsPurchased %}
        <div class=\"d-flex justify-content-evenly text-center mt-2\">
          <p>Vous avez toutes les leçons de ce cursus.</p>
        </div>
      {% else%}
        <div class=\"d-flex justify-content-evenly text-center mt-2\">
          <p>L'ensemble du cursus coûte {{ cursus.price }}€</p>
          <a href=\"{{ path('add_cart', { id_cursus: cursus.idCursus }) }}\" class=\"btn mb-2\">Acheter ce cursus</a>
        </div>
      {% endif %}
    </div>
    {% endfor %}
    {% endfor %}
  </div>
</div>
{% endblock %}
", "formation/index.html.twig", "E:\\CEF\\Devoirs\\Bilan 3 - Knowledge Learning\\knowledge_learning-main\\knowledge_learning\\templates\\formation\\index.html.twig");
    }
}
