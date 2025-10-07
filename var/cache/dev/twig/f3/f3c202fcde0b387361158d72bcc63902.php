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

/* @SyliusMolliePlugin/shop/shared/form/select_payment/payment/choice/details/payment_methods/payment_method/credit_card.html.twig */
class __TwigTemplate_dbf8d0edadf934571a9becf3c59d1c2d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/shop/shared/form/select_payment/payment/choice/details/payment_methods/payment_method/credit_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/shop/shared/form/select_payment/payment/choice/details/payment_methods/payment_method/credit_card.html.twig"));

        // line 1
        $context["value"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "choice", [], "any", false, false, false, 1), "value", [], "any", false, false, false, 1);
        // line 2
        $context["has_components"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 2), "gateway_config", [], "any", false, true, false, 2), "config", [], "any", false, true, false, 2), "components", [], "array", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "gateway_config", [], "any", false, false, false, 2), "config", [], "any", false, false, false, 2), "components", [], "array", false, false, false, 2), false)) : (false));
        // line 3
        yield "
";
        // line 4
        if ((((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 4, $this->source); })()) == Twig\Extension\CoreExtension::constant("Mollie\\Api\\Types\\PaymentMethod::CREDITCARD")) && (isset($context["has_components"]) || array_key_exists("has_components", $context) ? $context["has_components"] : (function () { throw new RuntimeError('Variable "has_components" does not exist.', 4, $this->source); })()))) {
            // line 5
            yield "    <div class=\"online-payment__credit-card\" id=\"mollie_cart_data\">
        ";
            // line 6
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("credit_card", [], $context, false);
            // line 7
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
        return "@SyliusMolliePlugin/shop/shared/form/select_payment/payment/choice/details/payment_methods/payment_method/credit_card.html.twig";
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
        return array (  63 => 7,  60 => 6,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set value = hookable_metadata.context.choice.value %}
{% set has_components = hookable_metadata.context.gateway_config.config['components'] | default(false) %}

{% if value == constant('Mollie\\\\Api\\\\Types\\\\PaymentMethod::CREDITCARD') and has_components %}
    <div class=\"online-payment__credit-card\" id=\"mollie_cart_data\">
        {% hook 'credit_card' %}
    </div>
{% endif %}
", "@SyliusMolliePlugin/shop/shared/form/select_payment/payment/choice/details/payment_methods/payment_method/credit_card.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/shop/shared/form/select_payment/payment/choice/details/payment_methods/payment_method/credit_card.html.twig");
    }
}
