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

/* @SyliusAdmin/shared/crud/index/content/header/breadcrumbs.html.twig */
class __TwigTemplate_d333cfb42659b40179ab96de77a84d01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/index/content/header/breadcrumbs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/index/content/header/breadcrumbs.html.twig"));

        // line 1
        $macros["_v0"] = $this->macros["_v0"] = $this->load("@SyliusAdmin/shared/helper/breadcrumbs.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["title_from_context"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 3), "title", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "title", [], "any", false, false, false, 3), null)) : (null));
        // line 4
        $context["resource_metadata"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 4), "metadata", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "metadata", [], "any", false, false, false, 4), null)) : (null));
        // line 5
        yield "
";
        // line 6
        if (( !(null === (isset($context["title_from_context"]) || array_key_exists("title_from_context", $context) ? $context["title_from_context"] : (function () { throw new RuntimeError('Variable "title_from_context" does not exist.', 6, $this->source); })())) ||  !(null === (isset($context["resource_metadata"]) || array_key_exists("resource_metadata", $context) ? $context["resource_metadata"] : (function () { throw new RuntimeError('Variable "resource_metadata" does not exist.', 6, $this->source); })())))) {
            // line 7
            yield "    ";
            $context["title"] = ((array_key_exists("title_from_context", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["title_from_context"]) || array_key_exists("title_from_context", $context) ? $context["title_from_context"] : (function () { throw new RuntimeError('Variable "title_from_context" does not exist.', 7, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource_metadata"]) || array_key_exists("resource_metadata", $context) ? $context["resource_metadata"] : (function () { throw new RuntimeError('Variable "resource_metadata" does not exist.', 7, $this->source); })()), "applicationName", [], "any", false, false, false, 7) . ".ui.") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource_metadata"]) || array_key_exists("resource_metadata", $context) ? $context["resource_metadata"] : (function () { throw new RuntimeError('Variable "resource_metadata" does not exist.', 7, $this->source); })()), "pluralName", [], "any", false, false, false, 7)))) : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource_metadata"]) || array_key_exists("resource_metadata", $context) ? $context["resource_metadata"] : (function () { throw new RuntimeError('Variable "resource_metadata" does not exist.', 7, $this->source); })()), "applicationName", [], "any", false, false, false, 7) . ".ui.") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource_metadata"]) || array_key_exists("resource_metadata", $context) ? $context["resource_metadata"] : (function () { throw new RuntimeError('Variable "resource_metadata" does not exist.', 7, $this->source); })()), "pluralName", [], "any", false, false, false, 7))));
        } else {
            // line 9
            yield "    ";
            $context["title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 9, $this->source); })()), "configuration", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9);
        }
        // line 11
        yield "
";
        // line 12
        yield $macros["_v0"]->getTemplateForMacro("macro_breadcrumbs", $context, 12, $this->getSourceContext())->macro_breadcrumbs(...[[["name" => "sylius.ui.dashboard", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard"), "active" => false], ["name" =>         // line 14
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 14, $this->source); })()), "active" => true]]]);
        // line 15
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
        return "@SyliusAdmin/shared/crud/index/content/header/breadcrumbs.html.twig";
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
        return array (  76 => 15,  74 => 14,  73 => 12,  70 => 11,  66 => 9,  62 => 7,  60 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% from '@SyliusAdmin/shared/helper/breadcrumbs.html.twig' import breadcrumbs %}

{% set title_from_context = hookable_metadata.context.title|default(null) %}
{% set resource_metadata = hookable_metadata.context.metadata|default(null) %}

{% if title_from_context is not null or resource_metadata is not null %}
    {% set title = title_from_context|default(resource_metadata.applicationName~'.ui.'~resource_metadata.pluralName) %}
{% else %}
    {% set title = hookable_metadata.configuration.title %}
{% endif %}

{{ breadcrumbs([
    { name: 'sylius.ui.dashboard', 'url': path('sylius_admin_dashboard'), 'active': false },
    { name: title, 'active': true },
]) }}
", "@SyliusAdmin/shared/crud/index/content/header/breadcrumbs.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/crud/index/content/header/breadcrumbs.html.twig");
    }
}
