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

/* @SyliusMolliePlugin/admin/order/show/content/sections/payments/item/actions/send_payment_link.html.twig */
class __TwigTemplate_746dfcaf5ddeab992031bfcf29bf6b48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/order/show/content/sections/payments/item/actions/send_payment_link.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/order/show/content/sections/payments/item/actions/send_payment_link.html.twig"));

        // line 1
        $context["payment"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "payment", [], "any", false, false, false, 1);
        // line 2
        $context["lastPayment"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "order", [], "any", false, false, false, 2), "lastPayment", [], "any", false, false, false, 2);
        // line 3
        yield "
";
        // line 4
        $context["allowed_payment_states"] = [Twig\Extension\CoreExtension::constant("Sylius\\Component\\Payment\\Model\\PaymentInterface::STATE_NEW"), Twig\Extension\CoreExtension::constant("Sylius\\Component\\Payment\\Model\\PaymentInterface::STATE_PROCESSING"), Twig\Extension\CoreExtension::constant("Sylius\\Component\\Payment\\Model\\PaymentInterface::STATE_CANCELLED"), Twig\Extension\CoreExtension::constant("Sylius\\Component\\Payment\\Model\\PaymentInterface::STATE_FAILED")];
        // line 10
        $context["payment_gateway"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "method", [], "any", false, true, false, 10), "gatewayConfig", [], "any", false, true, false, 10), "factoryName", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 10, $this->source); })()), "method", [], "any", false, false, false, 10), "gatewayConfig", [], "any", false, false, false, 10), "factoryName", [], "any", false, false, false, 10), "")) : (""));
        // line 11
        yield "
";
        // line 12
        if ((((        // line 13
(isset($context["payment_gateway"]) || array_key_exists("payment_gateway", $context) ? $context["payment_gateway"] : (function () { throw new RuntimeError('Variable "payment_gateway" does not exist.', 13, $this->source); })()) == Twig\Extension\CoreExtension::constant("Sylius\\MolliePlugin\\Payum\\Factory\\MollieGatewayFactory::FACTORY_NAME")) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,         // line 14
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 14, $this->source); })()), "state", [], "any", false, false, false, 14), (isset($context["allowed_payment_states"]) || array_key_exists("allowed_payment_states", $context) ? $context["allowed_payment_states"] : (function () { throw new RuntimeError('Variable "allowed_payment_states" does not exist.', 14, $this->source); })()))) && (        // line 15
(isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 15, $this->source); })()) == (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 15, $this->source); })())))) {
            // line 17
            yield "    ";
            $context["order"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 17, $this->source); })()), "order", [], "any", false, false, false, 17);
            // line 18
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_mollie_admin_payment_link_generate", ["orderNumber" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "number", [], "any", false, false, false, 18)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
        ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.payment_link_generate"), "html", null, true);
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
        return "@SyliusMolliePlugin/admin/order/show/content/sections/payments/item/actions/send_payment_link.html.twig";
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
        return array (  75 => 19,  70 => 18,  67 => 17,  65 => 15,  64 => 14,  63 => 13,  62 => 12,  59 => 11,  57 => 10,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set payment = hookable_metadata.context.payment %}
{% set lastPayment = hookable_metadata.context.order.lastPayment %}

{% set allowed_payment_states = [
    constant('Sylius\\\\Component\\\\Payment\\\\Model\\\\PaymentInterface::STATE_NEW'),
    constant('Sylius\\\\Component\\\\Payment\\\\Model\\\\PaymentInterface::STATE_PROCESSING'),
    constant('Sylius\\\\Component\\\\Payment\\\\Model\\\\PaymentInterface::STATE_CANCELLED'),
    constant('Sylius\\\\Component\\\\Payment\\\\Model\\\\PaymentInterface::STATE_FAILED'),
] %}
{% set payment_gateway = payment.method.gatewayConfig.factoryName|default('') %}

{% if
    payment_gateway == constant('Sylius\\\\MolliePlugin\\\\Payum\\\\Factory\\\\MollieGatewayFactory::FACTORY_NAME') and
    payment.state in allowed_payment_states and
    lastPayment == payment
%}
    {% set order = payment.order %}
    <a href=\"{{ path('sylius_mollie_admin_payment_link_generate', {'orderNumber': order.number}) }}\" class=\"btn btn-primary\">
        {{ 'sylius_mollie.ui.payment_link_generate'|trans }}
    </a>
{% endif %}
", "@SyliusMolliePlugin/admin/order/show/content/sections/payments/item/actions/send_payment_link.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/order/show/content/sections/payments/item/actions/send_payment_link.html.twig");
    }
}
