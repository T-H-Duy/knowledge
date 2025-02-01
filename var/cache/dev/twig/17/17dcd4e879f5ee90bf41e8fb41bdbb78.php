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

/* _partials/header.html.twig */
class __TwigTemplate_3fdb8fc2c3d8ddfc7e9256934d426eda extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/header.html.twig"));

        // line 1
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/header.css"), "html", null, true);
        yield "\" type=\"text/css\" />

<header>

    <nav class=\"navbar navbar-expand-lg bg-body-tertiary header-container\">

        <div class=\"container-fluid \">

            <div class=\"header-logo\">
                <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                    <img src=";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo_knowledge.png"), "html", null, true);
        yield " alt=\"Logo Knowledge\" class=\"logo\">
                </a>
            </div>

          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>

          <div class=\"collapse navbar-collapse header-nav\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto liste my-4\">
              ";
        // line 21
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            yield "              <li class=\"nav-item\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\" class=\"nav-link ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", ["_route"], "method", false, false, false, 22) == "app_home")) {
                yield "active";
            }
            yield "\">Accueil</a></li>  
              ";
        }
        // line 24
        yield "              ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) {
            yield " 

              ";
            // line 26
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "roles", [], "any", false, false, false, 26))) {
                // line 27
                yield "              <li class=\"nav-item\">
                  <a href=\"";
                // line 28
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                yield "\" class=\"nav-link ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "get", ["_route"], "method", false, false, false, 28) == "admin")) {
                    yield "active";
                }
                yield "\">Admin</a>
              </li>
              ";
            }
            // line 31
            yield "              <li class=\"nav-item\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation");
            yield "\" class=\"nav-link ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "get", ["_route"], "method", false, false, false, 31) == "app_formation")) {
                yield "active";
            }
            yield "\">Formation</a></li>
              <li class=\"nav-item\"><a href=\"";
            // line 32
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
            yield "\" class=\"nav-link ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "get", ["_route"], "method", false, false, false, 32) == "app_cart")) {
                yield "active";
            }
            yield "\">Panier</a></li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Profil
                </a>
                <div class=\"dropdown-menu dropdown-menu-end p-3\" aria-labelledby=\"navbarDropdownMenuLink\">
                  <a href=\"";
            // line 38
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certifications");
            yield "\" class=\"nav-link ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "get", ["_route"], "method", false, false, false, 38) == "app_certifications")) {
                yield "active";
            }
            yield " mb-2\">Certifications</a>
                  <a href=\"";
            // line 39
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"nav-link ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "get", ["_route"], "method", false, false, false, 39) == "app_logout")) {
                yield "active";
            }
            yield " \">Déconnexion</a>
                </div>
              </li>
              ";
        } else {
            // line 43
            yield "              <li class=\"nav-item\"><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"nav-link ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "get", ["_route"], "method", false, false, false, 43) == "app_login")) {
                yield "active";
            }
            yield "\">Connexion</a></li>

              <li class=\"nav-item\"><a href=\"";
            // line 45
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"nav-link ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "get", ["_route"], "method", false, false, false, 45) == "app_register")) {
                yield "active";
            }
            yield "\">Inscription</a></li>
              ";
        }
        // line 47
        yield "            </ul>
          </div>
        </div>
      </nav>
    
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_partials/header.html.twig";
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
        return array (  171 => 47,  162 => 45,  152 => 43,  141 => 39,  133 => 38,  120 => 32,  111 => 31,  101 => 28,  98 => 27,  96 => 26,  90 => 24,  80 => 22,  78 => 21,  65 => 11,  61 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<link rel=\"stylesheet\" href=\"{{ asset('assets/css/header.css') }}\" type=\"text/css\" />

<header>

    <nav class=\"navbar navbar-expand-lg bg-body-tertiary header-container\">

        <div class=\"container-fluid \">

            <div class=\"header-logo\">
                <a href=\"{{ path('app_home') }}\">
                    <img src={{ asset(\"assets/images/logo_knowledge.png\") }} alt=\"Logo Knowledge\" class=\"logo\">
                </a>
            </div>

          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>

          <div class=\"collapse navbar-collapse header-nav\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto liste my-4\">
              {%if not app.user%}
              <li class=\"nav-item\"><a href=\"{{ path('app_home') }}\" class=\"nav-link {% if app.request.get('_route') == 'app_home'%}active{% endif%}\">Accueil</a></li>  
              {%endif%}
              {% if app.user %} 

              {% if 'ROLE_ADMIN' in app.user.roles %}
              <li class=\"nav-item\">
                  <a href=\"{{ path('admin') }}\" class=\"nav-link {% if app.request.get('_route') == 'admin' %}active{% endif %}\">Admin</a>
              </li>
              {% endif %}
              <li class=\"nav-item\"><a href=\"{{ path('app_formation') }}\" class=\"nav-link {% if app.request.get('_route') == 'app_formation'%}active{% endif%}\">Formation</a></li>
              <li class=\"nav-item\"><a href=\"{{ path('app_cart') }}\" class=\"nav-link {% if app.request.get('_route') == 'app_cart'%}active{% endif%}\">Panier</a></li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Profil
                </a>
                <div class=\"dropdown-menu dropdown-menu-end p-3\" aria-labelledby=\"navbarDropdownMenuLink\">
                  <a href=\"{{path('app_certifications')}}\" class=\"nav-link {% if app.request.get('_route') == 'app_certifications'%}active{% endif%} mb-2\">Certifications</a>
                  <a href=\"{{ path('app_logout') }}\" class=\"nav-link {% if app.request.get('_route') == 'app_logout'%}active{% endif%} \">Déconnexion</a>
                </div>
              </li>
              {% else %}
              <li class=\"nav-item\"><a href=\"{{ path('app_login') }}\" class=\"nav-link {% if app.request.get('_route') == 'app_login'%}active{% endif%}\">Connexion</a></li>

              <li class=\"nav-item\"><a href=\"{{ path('app_register') }}\" class=\"nav-link {% if app.request.get('_route') == 'app_register'%}active{% endif%}\">Inscription</a></li>
              {% endif%}
            </ul>
          </div>
        </div>
      </nav>
    
</header>", "_partials/header.html.twig", "E:\\CEF\\Devoirs\\Bilan 3 - Knowledge Learning\\knowledge_learning-main\\knowledge_learning-main\\templates\\_partials\\header.html.twig");
    }
}
