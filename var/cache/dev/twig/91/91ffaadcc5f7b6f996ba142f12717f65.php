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

/* @SyliusAdmin/shared/crud/show/content/header/title_block/actions/edit.html.twig */
class __TwigTemplate_45004f54d26602c7aba9ccb0ffe371ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/show/content/header/title_block/actions/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/show/content/header/title_block/actions/edit.html.twig"));

        // line 1
        $context["configuration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "configuration", [], "any", false, false, false, 1);
        // line 2
        $context["update_route_name"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 2), "update", [], "any", false, true, false, 2), "route", [], "any", false, true, false, 2), "name", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2), "update", [], "any", false, false, false, 2), "route", [], "any", false, false, false, 2), "name", [], "any", false, false, false, 2), CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 2, $this->source); })()), "getRouteName", ["update"], "method", false, false, false, 2))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 2, $this->source); })()), "getRouteName", ["update"], "method", false, false, false, 2)));
        // line 3
        yield "
";
        // line 4
        if ((($tmp = $this->extensions['Sylius\TwigExtra\Twig\Extension\RouteExistsExtension']->routeExists((isset($context["update_route_name"]) || array_key_exists("update_route_name", $context) ? $context["update_route_name"] : (function () { throw new RuntimeError('Variable "update_route_name" does not exist.', 4, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "    ";
            $context["resource_id"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 5, $this->source); })()), "context", [], "any", false, false, false, 5), "resource", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5);
            // line 6
            yield "    ";
            $context["resource_name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 6, $this->source); })()), "context", [], "any", false, false, false, 6), "metadata", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6);
            // line 7
            yield "
    <a class=\"btn\" href=\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["update_route_name"]) || array_key_exists("update_route_name", $context) ? $context["update_route_name"] : (function () { throw new RuntimeError('Variable "update_route_name" does not exist.', 8, $this->source); })()), ["id" => (isset($context["resource_id"]) || array_key_exists("resource_id", $context) ? $context["resource_id"] : (function () { throw new RuntimeError('Variable "resource_id" does not exist.', 8, $this->source); })())]), "html", null, true);
            yield "\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()(("edit-" . (isset($context["resource_name"]) || array_key_exists("resource_name", $context) ? $context["resource_name"] : (function () { throw new RuntimeError('Variable "resource_name" does not exist.', 8, $this->source); })())));
            yield ">
        ";
            // line 9
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:pencil");
            yield "
        ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit"), "html", null, true);
            yield "
    </a>
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
        return "@SyliusAdmin/shared/crud/show/content/header/title_block/actions/edit.html.twig";
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
        return array (  76 => 10,  72 => 9,  66 => 8,  63 => 7,  60 => 6,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set configuration = hookable_metadata.context.configuration %}
{% set update_route_name = configuration.vars.update.route.name|default(configuration.getRouteName('update')) %}

{% if sylius_route_exists(update_route_name) %}
    {% set resource_id = hookable_metadata.context.resource.id %}
    {% set resource_name = hookable_metadata.context.metadata.name %}

    <a class=\"btn\" href=\"{{ path(update_route_name, {'id': resource_id}) }}\" {{ sylius_test_html_attribute('edit-' ~ resource_name) }}>
        {{ ux_icon('tabler:pencil') }}
        {{ 'sylius.ui.edit'|trans }}
    </a>
{% endif %}
", "@SyliusAdmin/shared/crud/show/content/header/title_block/actions/edit.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/crud/show/content/header/title_block/actions/edit.html.twig");
    }
}
