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

/* @SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/country_restrictions.html.twig */
class __TwigTemplate_fcfab71f5f18427650707225aabe1959 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/country_restrictions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/country_restrictions.html.twig"));

        // line 1
        $context["method_form"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "method_form", [], "any", false, false, false, 1);
        // line 2
        $context["methods_loop"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "methods_loop", [], "any", false, false, false, 2);
        // line 3
        yield "
<div class=\"js-onboardingWizard-countryRestrictions\">
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["method_form"]) || array_key_exists("method_form", $context) ? $context["method_form"] : (function () { throw new RuntimeError('Variable "method_form" does not exist.', 5, $this->source); })()), "country_restriction", [], "any", false, false, false, 5), 'row', ["attr" => ["class" => "js-onboardingWizard-countryRestriction"]]);
        yield "
    <div id=\"country-allowed_";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["methods_loop"]) || array_key_exists("methods_loop", $context) ? $context["methods_loop"] : (function () { throw new RuntimeError('Variable "methods_loop" does not exist.', 6, $this->source); })()), "index0", [], "any", false, false, false, 6), "html", null, true);
        yield "\">
        ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["method_form"]) || array_key_exists("method_form", $context) ? $context["method_form"] : (function () { throw new RuntimeError('Variable "method_form" does not exist.', 7, $this->source); })()), "countryLevel_allowed", [], "any", false, false, false, 7), 'row');
        yield "
    </div>
    <div id=\"country-excluded_";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["methods_loop"]) || array_key_exists("methods_loop", $context) ? $context["methods_loop"] : (function () { throw new RuntimeError('Variable "methods_loop" does not exist.', 9, $this->source); })()), "index0", [], "any", false, false, false, 9), "html", null, true);
        yield "\">
        ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["method_form"]) || array_key_exists("method_form", $context) ? $context["method_form"] : (function () { throw new RuntimeError('Variable "method_form" does not exist.', 10, $this->source); })()), "countryLevel_excluded", [], "any", false, false, false, 10), 'row');
        yield "
    </div>
</div>
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
        return "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/country_restrictions.html.twig";
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
        return array (  73 => 10,  69 => 9,  64 => 7,  60 => 6,  56 => 5,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set method_form = hookable_metadata.context.method_form %}
{% set methods_loop = hookable_metadata.context.methods_loop %}

<div class=\"js-onboardingWizard-countryRestrictions\">
    {{ form_row(method_form.country_restriction, { 'attr': { 'class': 'js-onboardingWizard-countryRestriction' } }) }}
    <div id=\"country-allowed_{{ methods_loop.index0 }}\">
        {{ form_row(method_form.countryLevel_allowed) }}
    </div>
    <div id=\"country-excluded_{{ methods_loop.index0 }}\">
        {{ form_row(method_form.countryLevel_excluded) }}
    </div>
</div>
", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/country_restrictions.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/country_restrictions.html.twig");
    }
}
