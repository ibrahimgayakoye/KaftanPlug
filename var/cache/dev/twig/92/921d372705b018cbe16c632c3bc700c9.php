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

/* @SyliusMolliePlugin/shop/shared/form/select_payment/payment/choice/details/payment_methods.html.twig */
class __TwigTemplate_7660eee2f1f44a0ab038b374f48fa512 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/shop/shared/form/select_payment/payment/choice/details/payment_methods.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/shop/shared/form/select_payment/payment/choice/details/payment_methods.html.twig"));

        // line 1
        $context["form_mollie_payment_methods"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "parent_form", [], "any", false, false, false, 1), "details", [], "any", false, false, false, 1), "molliePaymentMethods", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_mollie_payment_methods"]) || array_key_exists("form_mollie_payment_methods", $context) ? $context["form_mollie_payment_methods"] : (function () { throw new RuntimeError('Variable "form_mollie_payment_methods" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "choices", [], "any", false, false, false, 3)) > 0)) {
            // line 4
            yield "    ";
            $context["gateway_config"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "method", [], "any", false, false, false, 4), "gatewayConfig", [], "any", false, false, false, 4);
            // line 5
            yield "    <div class=\"d-grid online-online-payment__container\"
         data-locale=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "locale", [], "any", false, false, false, 6), "html", null, true);
            yield "\"
         data-profile_id=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gateway_config"]) || array_key_exists("gateway_config", $context) ? $context["gateway_config"] : (function () { throw new RuntimeError('Variable "gateway_config" does not exist.', 7, $this->source); })()), "config", [], "any", false, false, false, 7), "profile_id", [], "array", false, false, false, 7), "html", null, true);
            yield "\"
         data-environment=\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gateway_config"]) || array_key_exists("gateway_config", $context) ? $context["gateway_config"] : (function () { throw new RuntimeError('Variable "gateway_config" does not exist.', 8, $this->source); })()), "config", [], "any", false, false, false, 8), "environment", [], "array", false, false, false, 8), "html", null, true);
            yield "\"
         data-components=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["gateway_config"] ?? null), "config", [], "any", false, true, false, 9), "components", [], "array", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gateway_config"]) || array_key_exists("gateway_config", $context) ? $context["gateway_config"] : (function () { throw new RuntimeError('Variable "gateway_config" does not exist.', 9, $this->source); })()), "config", [], "any", false, false, false, 9), "components", [], "array", false, false, false, 9), false)) : (false)), "html", null, true);
            yield "\"
         data-removeQrCode=\"";
            // line 10
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_mollie_shop_remove_qr_code");
            yield "\"
         data-fetchTranslations=\"";
            // line 11
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_mollie_shop_credit_card_translation");
            yield "\"
         data-no-fee-url=\"";
            // line 12
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_mollie_shop_no_payment_fee_calculate");
            yield "\"
    >
        ";
            // line 14
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("payment_methods", ["form" => (isset($context["form_mollie_payment_methods"]) || array_key_exists("form_mollie_payment_methods", $context) ? $context["form_mollie_payment_methods"] : (function () { throw new RuntimeError('Variable "form_mollie_payment_methods" does not exist.', 14, $this->source); })()), "gateway_config" => (isset($context["gateway_config"]) || array_key_exists("gateway_config", $context) ? $context["gateway_config"] : (function () { throw new RuntimeError('Variable "gateway_config" does not exist.', 14, $this->source); })())], $context, false);
            // line 15
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
        return "@SyliusMolliePlugin/shop/shared/form/select_payment/payment/choice/details/payment_methods.html.twig";
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
        return array (  93 => 15,  90 => 14,  85 => 12,  81 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  61 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set form_mollie_payment_methods = hookable_metadata.context.parent_form.details.molliePaymentMethods %}

{% if form_mollie_payment_methods.vars.choices|length > 0 %}
    {% set gateway_config = hookable_metadata.context.method.gatewayConfig %}
    <div class=\"d-grid online-online-payment__container\"
         data-locale=\"{{ app.request.locale }}\"
         data-profile_id=\"{{ gateway_config.config['profile_id'] }}\"
         data-environment=\"{{ gateway_config.config['environment'] }}\"
         data-components=\"{{ gateway_config.config['components'] | default(false) }}\"
         data-removeQrCode=\"{{ path('sylius_mollie_shop_remove_qr_code') }}\"
         data-fetchTranslations=\"{{ path('sylius_mollie_shop_credit_card_translation') }}\"
         data-no-fee-url=\"{{ path('sylius_mollie_shop_no_payment_fee_calculate') }}\"
    >
        {% hook 'payment_methods' with { form: form_mollie_payment_methods, gateway_config } %}
    </div>
{% endif %}
", "@SyliusMolliePlugin/shop/shared/form/select_payment/payment/choice/details/payment_methods.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/shop/shared/form/select_payment/payment/choice/details/payment_methods.html.twig");
    }
}
