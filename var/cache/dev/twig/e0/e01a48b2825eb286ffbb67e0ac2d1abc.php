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

/* @SyliusShop/product/index/content/body/main/filters/controls/sorting.html.twig */
class __TwigTemplate_02db39e6b3076236d980be3f8ecca4c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/index/content/body/main/filters/controls/sorting.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/index/content/body/main/filters/controls/sorting.html.twig"));

        // line 1
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "resources", [], "any", false, false, false, 1), "data", [], "any", false, false, false, 1), "nbResults", [], "any", false, false, false, 1) > 0)) {
            // line 2
            yield "
    ";
            // line 3
            $context["route"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "attributes", [], "any", false, false, false, 3), "get", ["_route"], "method", false, false, false, 3);
            // line 4
            yield "    ";
            $context["route_parameters"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "attributes", [], "any", false, false, false, 4), "all", ["_route_params"], "method", false, false, false, 4), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "query", [], "any", false, false, false, 4), "all", [], "any", false, false, false, 4));
            // line 5
            yield "
    ";
            // line 6
            $context["criteria"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "query", [], "any", false, false, false, 6), "all", ["criteria"], "method", false, false, false, 6);
            // line 7
            yield "
    ";
            // line 8
            if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 8), "query", [], "any", false, true, false, 8), "all", [], "method", false, true, false, 8), "sorting", [], "array", true, true, false, 8) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "query", [], "any", false, false, false, 8), "all", [], "method", false, false, false, 8), "sorting", [], "array", false, false, false, 8)))) {
                // line 9
                yield "        ";
                $context["current_sorting_label"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.by_position"));
                // line 10
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 10), "query", [], "any", false, true, false, 10), "all", [], "method", false, true, false, 10), "sorting", [], "array", false, true, false, 10), "name", [], "any", true, true, false, 10) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "query", [], "any", false, false, false, 10), "all", [], "method", false, false, false, 10), "sorting", [], "array", false, false, false, 10), "name", [], "any", false, false, false, 10) == "asc"))) {
                // line 11
                yield "        ";
                $context["current_sorting_label"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_a_to_z"));
                // line 12
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 12), "query", [], "any", false, true, false, 12), "all", [], "method", false, true, false, 12), "sorting", [], "array", false, true, false, 12), "name", [], "any", true, true, false, 12) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "query", [], "any", false, false, false, 12), "all", [], "method", false, false, false, 12), "sorting", [], "array", false, false, false, 12), "name", [], "any", false, false, false, 12) == "desc"))) {
                // line 13
                yield "        ";
                $context["current_sorting_label"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_z_to_a"));
                // line 14
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 14), "query", [], "any", false, true, false, 14), "all", [], "method", false, true, false, 14), "sorting", [], "array", false, true, false, 14), "createdAt", [], "any", true, true, false, 14) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "query", [], "any", false, false, false, 14), "all", [], "method", false, false, false, 14), "sorting", [], "array", false, false, false, 14), "createdAt", [], "any", false, false, false, 14) == "desc"))) {
                // line 15
                yield "        ";
                $context["current_sorting_label"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.newest_first"));
                // line 16
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 16), "query", [], "any", false, true, false, 16), "all", [], "method", false, true, false, 16), "sorting", [], "array", false, true, false, 16), "createdAt", [], "any", true, true, false, 16) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "query", [], "any", false, false, false, 16), "all", [], "method", false, false, false, 16), "sorting", [], "array", false, false, false, 16), "createdAt", [], "any", false, false, false, 16) == "asc"))) {
                // line 17
                yield "        ";
                $context["current_sorting_label"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.oldest_first"));
                // line 18
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 18), "query", [], "any", false, true, false, 18), "all", [], "method", false, true, false, 18), "sorting", [], "array", false, true, false, 18), "price", [], "any", true, true, false, 18) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "query", [], "any", false, false, false, 18), "all", [], "method", false, false, false, 18), "sorting", [], "array", false, false, false, 18), "price", [], "any", false, false, false, 18) == "asc"))) {
                // line 19
                yield "        ";
                $context["current_sorting_label"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cheapest_first"));
                // line 20
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 20), "query", [], "any", false, true, false, 20), "all", [], "method", false, true, false, 20), "sorting", [], "array", false, true, false, 20), "price", [], "any", true, true, false, 20) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "query", [], "any", false, false, false, 20), "all", [], "method", false, false, false, 20), "sorting", [], "array", false, false, false, 20), "price", [], "any", false, false, false, 20) == "desc"))) {
                // line 21
                yield "        ";
                $context["current_sorting_label"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.most_expensive_first"));
                // line 22
                yield "    ";
            }
            // line 23
            yield "
    <div class=\"dropdown\">
        ";
            // line 25
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("sorting", ["route" => (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 25, $this->source); })()), "route_parameters" => (isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new RuntimeError('Variable "route_parameters" does not exist.', 25, $this->source); })()), "current_sorting_label" => (isset($context["current_sorting_label"]) || array_key_exists("current_sorting_label", $context) ? $context["current_sorting_label"] : (function () { throw new RuntimeError('Variable "current_sorting_label" does not exist.', 25, $this->source); })()), "criteria" => (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 25, $this->source); })())], $context, false);
            // line 26
            yield "    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusShop/product/index/content/body/main/filters/controls/sorting.html.twig";
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
        return array (  117 => 26,  114 => 25,  110 => 23,  107 => 22,  104 => 21,  101 => 20,  98 => 19,  95 => 18,  92 => 17,  89 => 16,  86 => 15,  83 => 14,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  68 => 9,  66 => 8,  63 => 7,  61 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if hookable_metadata.context.resources.data.nbResults > 0 %}

    {% set route = app.request.attributes.get('_route') %}
    {% set route_parameters = app.request.attributes.all('_route_params')|merge(app.request.query.all) %}

    {% set criteria = app.request.query.all('criteria') %}

    {% if app.request.query.all()['sorting'] is not defined or app.request.query.all()['sorting'] is empty %}
        {% set current_sorting_label = 'sylius.ui.by_position'|trans|lower %}
    {% elseif app.request.query.all()['sorting'].name is defined and app.request.query.all()['sorting'].name == 'asc'%}
        {% set current_sorting_label = 'sylius.ui.from_a_to_z'|trans|lower %}
    {% elseif app.request.query.all()['sorting'].name is defined and app.request.query.all()['sorting'].name == 'desc'%}
        {% set current_sorting_label = 'sylius.ui.from_z_to_a'|trans|lower %}
    {% elseif app.request.query.all()['sorting'].createdAt is defined and app.request.query.all()['sorting'].createdAt == 'desc'%}
        {% set current_sorting_label = 'sylius.ui.newest_first'|trans|lower %}
    {% elseif app.request.query.all()['sorting'].createdAt is defined and app.request.query.all()['sorting'].createdAt == 'asc'%}
        {% set current_sorting_label = 'sylius.ui.oldest_first'|trans|lower %}
    {% elseif app.request.query.all()['sorting'].price is defined and app.request.query.all()['sorting'].price == 'asc'%}
        {% set current_sorting_label = 'sylius.ui.cheapest_first'|trans|lower %}
    {% elseif app.request.query.all()['sorting'].price is defined and app.request.query.all()['sorting'].price == 'desc' %}
        {% set current_sorting_label = 'sylius.ui.most_expensive_first'|trans|lower %}
    {% endif %}

    <div class=\"dropdown\">
        {% hook 'sorting' with { route, route_parameters, current_sorting_label, criteria } %}
    </div>
{% endif %}
", "@SyliusShop/product/index/content/body/main/filters/controls/sorting.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/product/index/content/body/main/filters/controls/sorting.html.twig");
    }
}
