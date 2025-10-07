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

/* @SyliusAdmin/shared/crud/show/content/header/breadcrumbs.html.twig */
class __TwigTemplate_214861b39946f60784e1be9e89b9c04a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/show/content/header/breadcrumbs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/show/content/header/breadcrumbs.html.twig"));

        // line 1
        $macros["_v0"] = $this->macros["_v0"] = $this->load("@SyliusAdmin/shared/helper/breadcrumbs.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["configuration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "configuration", [], "any", false, false, false, 3);
        // line 4
        $context["resource"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "resource", [], "any", false, false, false, 4);
        // line 5
        $context["metadata"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 5, $this->source); })()), "context", [], "any", false, false, false, 5), "metadata", [], "any", false, false, false, 5);
        // line 6
        yield "
";
        // line 7
        $context["resource_index"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 7, $this->source); })()), "applicationName", [], "any", false, false, false, 7) . ".ui.") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 7, $this->source); })()), "pluralName", [], "any", false, false, false, 7));
        // line 8
        $context["index_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 9
($context["configuration"] ?? null), "vars", [], "any", false, true, false, 9), "index", [], "any", false, true, false, 9), "route", [], "any", false, true, false, 9), "name", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 9, $this->source); })()), "vars", [], "any", false, false, false, 9), "index", [], "any", false, false, false, 9), "route", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 9, $this->source); })()), "getRouteName", ["index"], "method", false, false, false, 9))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 9, $this->source); })()), "getRouteName", ["index"], "method", false, false, false, 9))), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 10
($context["configuration"] ?? null), "vars", [], "any", false, true, false, 10), "index", [], "any", false, true, false, 10), "route", [], "any", false, true, false, 10), "parameters", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "index", [], "any", false, false, false, 10), "route", [], "any", false, false, false, 10), "parameters", [], "any", false, false, false, 10), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 10), "route", [], "any", false, true, false, 10), "parameters", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "route", [], "any", false, false, false, 10), "parameters", [], "any", false, false, false, 10), [])) : ([])))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 10), "route", [], "any", false, true, false, 10), "parameters", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "route", [], "any", false, false, false, 10), "parameters", [], "any", false, false, false, 10), [])) : ([])))));
        // line 12
        yield "
";
        // line 13
        $context["rendered_field_prefix"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "configuration", [], "any", false, true, false, 13), "rendered_field_prefix", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 13, $this->source); })()), "configuration", [], "any", false, false, false, 13), "rendered_field_prefix", [], "any", false, false, false, 13), null)) : (null));
        // line 14
        $context["field_name"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "configuration", [], "any", false, true, false, 14), "rendered_field", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 14, $this->source); })()), "configuration", [], "any", false, false, false, 14), "rendered_field", [], "any", false, false, false, 14), "")) : (""));
        // line 15
        $context["rendered_field"] = ((isset($context["rendered_field_prefix"]) || array_key_exists("rendered_field_prefix", $context) ? $context["rendered_field_prefix"] : (function () { throw new RuntimeError('Variable "rendered_field_prefix" does not exist.', 15, $this->source); })()) . ((CoreExtension::getAttribute($this->env, $this->source, ($context["resource"] ?? null), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new RuntimeError('Variable "field_name" does not exist.', 15, $this->source); })()), [], "any", true, true, false, 15)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 15, $this->source); })()), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new RuntimeError('Variable "field_name" does not exist.', 15, $this->source); })()), [], "any", false, false, false, 15)) : (null)));
        // line 16
        yield "
";
        // line 17
        $context["action"] = (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "configuration", [], "any", false, true, false, 17), "action", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 17, $this->source); })()), "configuration", [], "any", false, false, false, 17), "action", [], "any", false, false, false, 17), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 18, $this->source); })()), "configuration", [], "any", false, false, false, 18), "action", [], "any", false, false, false, 18), "active" => false]) : ([]));
        // line 21
        yield "
";
        // line 22
        $context["resource_show_name"] = ((array_key_exists("rendered_field", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["rendered_field"]) || array_key_exists("rendered_field", $context) ? $context["rendered_field"] : (function () { throw new RuntimeError('Variable "rendered_field" does not exist.', 22, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["resource"] ?? null), "translations", [], "any", false, true, false, 22), CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "locale", [], "any", false, false, false, 22), [], "array", false, true, false, 22), "name", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 22, $this->source); })()), "translations", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "locale", [], "any", false, false, false, 22), [], "array", false, false, false, 22), "name", [], "any", false, false, false, 22), ((CoreExtension::getAttribute($this->env, $this->source, ($context["resource"] ?? null), "code", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 22, $this->source); })()), "code", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22))))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["resource"] ?? null), "code", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 22, $this->source); })()), "code", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22))))))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["resource"] ?? null), "translations", [], "any", false, true, false, 22), CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "locale", [], "any", false, false, false, 22), [], "array", false, true, false, 22), "name", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 22, $this->source); })()), "translations", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "locale", [], "any", false, false, false, 22), [], "array", false, false, false, 22), "name", [], "any", false, false, false, 22), ((CoreExtension::getAttribute($this->env, $this->source, ($context["resource"] ?? null), "code", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 22, $this->source); })()), "code", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22))))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["resource"] ?? null), "code", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 22, $this->source); })()), "code", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)))))));
        // line 23
        yield "
";
        // line 24
        if ((array_key_exists("action", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", true, true, false, 24))) {
            // line 25
            yield "    ";
            $context["show_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 25, $this->source); })()), "getRouteName", ["show"], "method", false, false, false, 25), ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]);
            // line 26
            yield "    ";
            $context["resource_show"] = ["name" => (isset($context["resource_show_name"]) || array_key_exists("resource_show_name", $context) ? $context["resource_show_name"] : (function () { throw new RuntimeError('Variable "resource_show_name" does not exist.', 26, $this->source); })()), "url" => (isset($context["show_url"]) || array_key_exists("show_url", $context) ? $context["show_url"] : (function () { throw new RuntimeError('Variable "show_url" does not exist.', 26, $this->source); })())];
        } else {
            // line 28
            yield "    ";
            $context["resource_show"] = ["name" => (isset($context["resource_show_name"]) || array_key_exists("resource_show_name", $context) ? $context["resource_show_name"] : (function () { throw new RuntimeError('Variable "resource_show_name" does not exist.', 28, $this->source); })()), "active" => true];
        }
        // line 30
        yield "
";
        // line 31
        yield $macros["_v0"]->getTemplateForMacro("macro_breadcrumbs", $context, 31, $this->getSourceContext())->macro_breadcrumbs(...[[["name" => "sylius.ui.dashboard", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard"), "active" => false], ["name" =>         // line 33
(isset($context["resource_index"]) || array_key_exists("resource_index", $context) ? $context["resource_index"] : (function () { throw new RuntimeError('Variable "resource_index" does not exist.', 33, $this->source); })()), "url" => (isset($context["index_url"]) || array_key_exists("index_url", $context) ? $context["index_url"] : (function () { throw new RuntimeError('Variable "index_url" does not exist.', 33, $this->source); })()), "active" => false],         // line 34
(isset($context["resource_show"]) || array_key_exists("resource_show", $context) ? $context["resource_show"] : (function () { throw new RuntimeError('Variable "resource_show" does not exist.', 34, $this->source); })()),         // line 35
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 35, $this->source); })())]]);
        // line 36
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusAdmin/shared/crud/show/content/header/breadcrumbs.html.twig";
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
        return array (  112 => 36,  110 => 35,  109 => 34,  108 => 33,  107 => 31,  104 => 30,  100 => 28,  96 => 26,  93 => 25,  91 => 24,  88 => 23,  86 => 22,  83 => 21,  81 => 18,  80 => 17,  77 => 16,  75 => 15,  73 => 14,  71 => 13,  68 => 12,  66 => 10,  65 => 9,  64 => 8,  62 => 7,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% from '@SyliusAdmin/shared/helper/breadcrumbs.html.twig' import breadcrumbs %}

{% set configuration = hookable_metadata.context.configuration %}
{% set resource = hookable_metadata.context.resource %}
{% set metadata = hookable_metadata.context.metadata %}

{% set resource_index = metadata.applicationName~'.ui.'~metadata.pluralName %}
{% set index_url = path(
    configuration.vars.index.route.name|default(configuration.getRouteName('index')),
    configuration.vars.index.route.parameters|default(configuration.vars.route.parameters|default({}))
) %}

{% set rendered_field_prefix = hookable_metadata.configuration.rendered_field_prefix|default(null) %}
{% set field_name = hookable_metadata.configuration.rendered_field|default('') %}
{% set rendered_field = rendered_field_prefix ~ (attribute(resource, field_name) is defined ? attribute(resource, field_name) : null) %}

{% set action = hookable_metadata.configuration.action|default(false)
    ? { name: hookable_metadata.configuration.action, active: false }
    : {}
%}

{% set resource_show_name = rendered_field|default(resource.translations[app.locale].name|default(resource.code|default(resource.id))) %}

{% if action is defined and action.name is defined %}
    {% set show_url = path(configuration.getRouteName('show'), { id: resource.id }) %}
    {% set resource_show = { name: resource_show_name, url: show_url} %}
{% else %}
    {% set resource_show = { name: resource_show_name, active: true} %}
{% endif %}

{{ breadcrumbs([
    { name: 'sylius.ui.dashboard', url: path('sylius_admin_dashboard'), active: false },
    { name: resource_index, url: index_url, active: false },
    resource_show,
    action
]) }}
", "@SyliusAdmin/shared/crud/show/content/header/breadcrumbs.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/crud/show/content/header/breadcrumbs.html.twig");
    }
}
