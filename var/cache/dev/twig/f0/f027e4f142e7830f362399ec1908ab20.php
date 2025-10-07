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

/* @SyliusPayPalPlugin/shop/checkout/select_payment/content/form/select_payment/payment/choice/details/paypal.html.twig */
class __TwigTemplate_35d63c1f0e74cc5346d16afc45f32045 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/shop/checkout/select_payment/content/form/select_payment/payment/choice/details/paypal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/shop/checkout/select_payment/content/form/select_payment/payment/choice/details/paypal.html.twig"));

        // line 2
        if (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 3
($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 3), "method", [], "any", false, true, false, 3), "gatewayConfig", [], "any", false, true, false, 3), "factoryName", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "method", [], "any", false, false, false, 3), "gatewayConfig", [], "any", false, false, false, 3), "factoryName", [], "any", false, false, false, 3), "")) : ("")) == Twig\Extension\CoreExtension::constant("Sylius\\PayPalPlugin\\DependencyInjection\\SyliusPayPalExtension::PAYPAL_FACTORY_NAME")) &&  !(is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source,         // line 4
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "environment", [], "any", false, false, false, 4)) && is_string($_v1 = "test") && str_starts_with($_v0, $_v1)))) {
            // line 6
            yield "    <div data-live-ignore>
        ";
            // line 7
            yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius_paypal.controller.paypal_buttons::renderPaymentPageButtonsAction", ["orderId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 7, $this->source); })()), "context", [], "any", false, false, false, 7), "order", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)]));
            yield "
    </div>
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
        return "@SyliusPayPalPlugin/shop/checkout/select_payment/content/form/select_payment/payment/choice/details/paypal.html.twig";
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
        return array (  55 => 7,  52 => 6,  50 => 4,  49 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Check for environment has been added because of a problem with rendering below controller in test environment for Symfony 7.3. #}
{% if
    hookable_metadata.context.method.gatewayConfig.factoryName|default('') == constant('Sylius\\\\PayPalPlugin\\\\DependencyInjection\\\\SyliusPayPalExtension::PAYPAL_FACTORY_NAME') and
    not (app.environment starts with 'test')
%}
    <div data-live-ignore>
        {{ render(controller('sylius_paypal.controller.paypal_buttons::renderPaymentPageButtonsAction', {'orderId': hookable_metadata.context.order.id})) }}
    </div>
{% endif %}
", "@SyliusPayPalPlugin/shop/checkout/select_payment/content/form/select_payment/payment/choice/details/paypal.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/paypal-plugin/templates/shop/checkout/select_payment/content/form/select_payment/payment/choice/details/paypal.html.twig");
    }
}
