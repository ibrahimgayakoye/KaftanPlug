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

/* @SyliusAdmin/shared/crud/create/content/header/breadcrumbs.html.twig */
class __TwigTemplate_f38f9002569127cd2973abe3fbff8640 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/create/content/header/breadcrumbs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/create/content/header/breadcrumbs.html.twig"));

        // line 1
        $macros["_v0"] = $this->macros["_v0"] = $this->load("@SyliusAdmin/shared/helper/breadcrumbs.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 3), "metadata", [], "any", true, true, false, 3)) {
            // line 4
            yield "    ";
            $context["metadata"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "metadata", [], "any", false, false, false, 4);
            // line 5
            yield "    ";
            $context["resource_name"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "configuration", [], "any", false, true, false, 5), "resource_name", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 5, $this->source); })()), "configuration", [], "any", false, false, false, 5), "resource_name", [], "any", false, false, false, 5), ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 5, $this->source); })()), "applicationName", [], "any", false, false, false, 5) . ".ui.") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 5, $this->source); })()), "pluralName", [], "any", false, false, false, 5)))) : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 5, $this->source); })()), "applicationName", [], "any", false, false, false, 5) . ".ui.") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 5, $this->source); })()), "pluralName", [], "any", false, false, false, 5))));
        } else {
            // line 7
            yield "    ";
            $context["resource_name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 7, $this->source); })()), "configuration", [], "any", false, false, false, 7), "resource_name", [], "any", false, false, false, 7);
        }
        // line 9
        yield "
";
        // line 10
        $context["configuration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 10, $this->source); })()), "context", [], "any", false, false, false, 10), "configuration", [], "any", false, false, false, 10);
        // line 11
        $context["index_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 12
($context["configuration"] ?? null), "vars", [], "any", false, true, false, 12), "index", [], "any", false, true, false, 12), "route", [], "any", false, true, false, 12), "name", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "index", [], "any", false, false, false, 12), "route", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 12, $this->source); })()), "getRouteName", ["index"], "method", false, false, false, 12))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 12, $this->source); })()), "getRouteName", ["index"], "method", false, false, false, 12))), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 13
($context["configuration"] ?? null), "vars", [], "any", false, true, false, 13), "index", [], "any", false, true, false, 13), "route", [], "any", false, true, false, 13), "parameters", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "index", [], "any", false, false, false, 13), "route", [], "any", false, false, false, 13), "parameters", [], "any", false, false, false, 13), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 13), "route", [], "any", false, true, false, 13), "parameters", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "route", [], "any", false, false, false, 13), "parameters", [], "any", false, false, false, 13), [])) : ([])))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 13), "route", [], "any", false, true, false, 13), "parameters", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "route", [], "any", false, false, false, 13), "parameters", [], "any", false, false, false, 13), [])) : ([])))));
        // line 16
        yield "
";
        // line 17
        yield $macros["_v0"]->getTemplateForMacro("macro_breadcrumbs", $context, 17, $this->getSourceContext())->macro_breadcrumbs(...[[["name" => "sylius.ui.dashboard", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard"), "active" => false], ["name" =>         // line 19
(isset($context["resource_name"]) || array_key_exists("resource_name", $context) ? $context["resource_name"] : (function () { throw new RuntimeError('Variable "resource_name" does not exist.', 19, $this->source); })()), "url" => (isset($context["index_url"]) || array_key_exists("index_url", $context) ? $context["index_url"] : (function () { throw new RuntimeError('Variable "index_url" does not exist.', 19, $this->source); })()), "active" => false], ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.new"), "active" => true]]]);
        // line 21
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
        return "@SyliusAdmin/shared/crud/create/content/header/breadcrumbs.html.twig";
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
        return array (  81 => 21,  79 => 19,  78 => 17,  75 => 16,  73 => 13,  72 => 12,  71 => 11,  69 => 10,  66 => 9,  62 => 7,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% from '@SyliusAdmin/shared/helper/breadcrumbs.html.twig' import breadcrumbs %}

{% if hookable_metadata.context.metadata is defined %}
    {% set metadata = hookable_metadata.context.metadata %}
    {% set resource_name = hookable_metadata.configuration.resource_name|default(metadata.applicationName~'.ui.'~metadata.pluralName) %}
{% else %}
    {% set resource_name = hookable_metadata.configuration.resource_name %}
{% endif %}

{% set configuration = hookable_metadata.context.configuration %}
{% set index_url = path(
    configuration.vars.index.route.name|default(configuration.getRouteName('index')),
    configuration.vars.index.route.parameters|default(configuration.vars.route.parameters|default({}))
)
%}

{{ breadcrumbs([
    { name: 'sylius.ui.dashboard', url: path('sylius_admin_dashboard'), active: false },
    { name: resource_name, url: index_url, active: false },
    { name: 'sylius.ui.new'|trans, active: true}
]) }}
", "@SyliusAdmin/shared/crud/create/content/header/breadcrumbs.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/crud/create/content/header/breadcrumbs.html.twig");
    }
}
