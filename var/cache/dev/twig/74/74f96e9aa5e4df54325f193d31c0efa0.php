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

/* @SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/translations.html.twig */
class __TwigTemplate_2f6b96fdfe625f69ff5a830b37d6b573 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/translations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/translations.html.twig"));

        // line 1
        $macros["translations"] = $this->macros["translations"] = $this->load("@SyliusAdmin/shared/helper/translations.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["method_form"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "method_form", [], "any", false, false, false, 3);
        // line 4
        $context["prefixes"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "prefixes", [], "any", false, false, false, 4);
        // line 5
        $context["payment_method_accordion_id"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 5, $this->source); })()), "context", [], "any", false, false, false, 5), "payment_method_accordion_id", [], "any", false, false, false, 5);
        // line 6
        yield "
";
        // line 7
        yield $macros["translations"]->getTemplateForMacro("macro_with_hook", $context, 7, $this->getSourceContext())->macro_with_hook(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["method_form"]) || array_key_exists("method_form", $context) ? $context["method_form"] : (function () { throw new RuntimeError('Variable "method_form" does not exist.', 7, $this->source); })()), "translations", [], "any", false, false, false, 7), (isset($context["prefixes"]) || array_key_exists("prefixes", $context) ? $context["prefixes"] : (function () { throw new RuntimeError('Variable "prefixes" does not exist.', 7, $this->source); })()), null, ["accordion_id" => (        // line 8
(isset($context["payment_method_accordion_id"]) || array_key_exists("payment_method_accordion_id", $context) ? $context["payment_method_accordion_id"] : (function () { throw new RuntimeError('Variable "payment_method_accordion_id" does not exist.', 8, $this->source); })()) . "-translations")]]);
        // line 9
        yield "

<div class=\"mb-3\"></div>
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
        return "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/translations.html.twig";
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
        return array (  65 => 9,  63 => 8,  62 => 7,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/shared/helper/translations.html.twig' as translations %}

{% set method_form = hookable_metadata.context.method_form %}
{% set prefixes = hookable_metadata.prefixes %}
{% set payment_method_accordion_id = hookable_metadata.context.payment_method_accordion_id %}

{{ translations.with_hook(method_form.translations, prefixes, null, {
    accordion_id: payment_method_accordion_id ~ '-translations'
}) }}

<div class=\"mb-3\"></div>
", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/translations.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/translations.html.twig");
    }
}
