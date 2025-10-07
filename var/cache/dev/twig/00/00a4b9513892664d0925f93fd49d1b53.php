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

/* @SyliusPayPalPlugin/admin/order/show/content/sections/payments/item/refunded_paypal.html.twig */
class __TwigTemplate_4f2a0aaf99a5bbfe002d7b42c01ee3a6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/admin/order/show/content/sections/payments/item/refunded_paypal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/admin/order/show/content/sections/payments/item/refunded_paypal.html.twig"));

        // line 1
        $context["payment"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "payment", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        if (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["payment"] ?? null), "method", [], "any", false, true, false, 4), "gatewayConfig", [], "any", false, true, false, 4), "factoryName", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 4, $this->source); })()), "method", [], "any", false, false, false, 4), "gatewayConfig", [], "any", false, false, false, 4), "factoryName", [], "any", false, false, false, 4), "")) : ("")) == Twig\Extension\CoreExtension::constant("Sylius\\PayPalPlugin\\DependencyInjection\\SyliusPayPalExtension::PAYPAL_FACTORY_NAME")) && (CoreExtension::getAttribute($this->env, $this->source,         // line 5
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 5, $this->source); })()), "state", [], "any", false, false, false, 5) == Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\PaymentInterface::STATE_REFUNDED")))) {
            // line 7
            yield "    <td class=\"py-2\">
        <div class=\"alert alert-purple mb-0\" role=\"alert\">
            <div class=\"d-flex\">
                <div>";
            // line 10
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:brand-paypal-filled");
            yield "</div>
                <div>";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_paypal.tender_type"), "html", null, true);
            yield "</div>
            </div>
        </div>
    </td>
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
        return "@SyliusPayPalPlugin/admin/order/show/content/sections/payments/item/refunded_paypal.html.twig";
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
        return array (  66 => 11,  62 => 10,  57 => 7,  55 => 5,  54 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set payment = hookable_metadata.context.payment %}

{% if
    payment.method.gatewayConfig.factoryName|default('') == constant('Sylius\\\\PayPalPlugin\\\\DependencyInjection\\\\SyliusPayPalExtension::PAYPAL_FACTORY_NAME') and
    payment.state == constant('Sylius\\\\Component\\\\Core\\\\Model\\\\PaymentInterface::STATE_REFUNDED')
%}
    <td class=\"py-2\">
        <div class=\"alert alert-purple mb-0\" role=\"alert\">
            <div class=\"d-flex\">
                <div>{{ ux_icon('tabler:brand-paypal-filled') }}</div>
                <div>{{ 'sylius_paypal.tender_type'|trans }}</div>
            </div>
        </div>
    </td>
{% endif %}
", "@SyliusPayPalPlugin/admin/order/show/content/sections/payments/item/refunded_paypal.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/paypal-plugin/templates/admin/order/show/content/sections/payments/item/refunded_paypal.html.twig");
    }
}
