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

/* formation/detailLesson.html.twig */
class __TwigTemplate_026c9d11df73f3f04c35622bd2214f70 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/detailLesson.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/detailLesson.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formation/detailLesson.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 1, $this->source); })()), "nameLesson", [], "any", false, false, false, 1), "html", null, true);
        
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

        // line 3
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/detailLesson.css"), "html", null, true);
        yield "\" type=\"text/css\" />

<div class=\"container d-flex flex-column align-items-center my-3\">
  <div class=\"row\">
    <div class=\"block\">
      <h1>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 8, $this->source); })()), "nameLesson", [], "any", false, false, false, 8), "html", null, true);
        yield "</h1>

      <div class=\"d-flex text-center\">
        <div class=\"separation\"></div>
      </div>

      <div class=\"block-center\">
        <p>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 15, $this->source); })()), "content", [], "any", false, false, false, 15), "html", null, true);
        yield "</p>
        <video src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/uploads/videos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 16, $this->source); })()), "videoUrl", [], "any", false, false, false, 16))), "html", null, true);
        yield "\" controls></video>
      </div>

      ";
        // line 19
        if ((isset($context["certification"]) || array_key_exists("certification", $context) ? $context["certification"] : (function () { throw new RuntimeError('Variable "certification" does not exist.', 19, $this->source); })())) {
            // line 20
            yield "      <div class=\"mt-2 certification text-center\">
        
          <h2 class=\"titre-certif\">Certification Obtenue ! </h2>
        
        <div class=\"block-certif\">
          <img class=\"certification-img\" src=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/uploads/images/certification/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 25, $this->source); })()), "certificationImage", [], "any", false, false, false, 25))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 25, $this->source); })()), "nameLesson", [], "any", false, false, false, 25), "html", null, true);
            yield "\">
          <p>  Obtenue le : ";
            // line 26
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["certification"]) || array_key_exists("certification", $context) ? $context["certification"] : (function () { throw new RuntimeError('Variable "certification" does not exist.', 26, $this->source); })()), "obtainedAt", [], "any", false, false, false, 26)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["certification"]) || array_key_exists("certification", $context) ? $context["certification"] : (function () { throw new RuntimeError('Variable "certification" does not exist.', 26, $this->source); })()), "obtainedAt", [], "any", false, false, false, 26), "d-m-Y"), "html", null, true)) : (yield "N/A"));
            yield "</p>
        </div>
      </div>
      ";
        } else {
            // line 30
            yield "       <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validate_lesson", ["id_lesson" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 30, $this->source); })()), "idLesson", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" method=\"post\">
          <div class=\"button\">
            <button type=\"submit \" class=\"btn mt-3\">Valider la leçon</button>
          </div>
       </form>
      ";
        }
        // line 36
        yield "      
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
        return "formation/detailLesson.html.twig";
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
        return array (  159 => 36,  149 => 30,  142 => 26,  136 => 25,  129 => 20,  127 => 19,  121 => 16,  117 => 15,  107 => 8,  98 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}{{ lesson.nameLesson }}{% endblock %} {% block body
%}
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/detailLesson.css') }}\" type=\"text/css\" />

<div class=\"container d-flex flex-column align-items-center my-3\">
  <div class=\"row\">
    <div class=\"block\">
      <h1>{{ lesson.nameLesson }}</h1>

      <div class=\"d-flex text-center\">
        <div class=\"separation\"></div>
      </div>

      <div class=\"block-center\">
        <p>{{ lesson.content }}</p>
        <video src=\"{{ asset('assets/uploads/videos/' ~ lesson.videoUrl) }}\" controls></video>
      </div>

      {% if certification %}
      <div class=\"mt-2 certification text-center\">
        
          <h2 class=\"titre-certif\">Certification Obtenue ! </h2>
        
        <div class=\"block-certif\">
          <img class=\"certification-img\" src=\"{{ asset('assets/uploads/images/certification/'~ lesson.certificationImage) }}\" alt=\"{{lesson.nameLesson}}\">
          <p>  Obtenue le : {{ certification.obtainedAt ? certification.obtainedAt|date('d-m-Y') : 'N/A' }}</p>
        </div>
      </div>
      {% else %}
       <form action=\"{{ path('validate_lesson', {id_lesson: lesson.idLesson})}}\" method=\"post\">
          <div class=\"button\">
            <button type=\"submit \" class=\"btn mt-3\">Valider la leçon</button>
          </div>
       </form>
      {% endif %}
      
    </div>
  </div>
</div>
{% endblock %}
", "formation/detailLesson.html.twig", "E:\\CEF\\Devoirs\\Bilan 3 - Knowledge Learning\\knowledge_learning-main\\knowledge_learning-main\\templates\\formation\\detailLesson.html.twig");
    }
}
