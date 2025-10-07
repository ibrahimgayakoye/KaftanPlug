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

/* @SyliusMolliePlugin/admin/order/show/content/sections/payments/item/actions/complete_payment_link.html.twig */
class __TwigTemplate_c67aa792496818ab14d4f4dba2328f66 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/order/show/content/sections/payments/item/actions/complete_payment_link.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/order/show/content/sections/payments/item/actions/complete_payment_link.html.twig"));

        // line 1
        $context["payment"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "payment", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        $context["payment_link"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "details", [], "any", false, true, false, 3), "payment-link", [], "array", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 3, $this->source); })()), "details", [], "any", false, false, false, 3), "payment-link", [], "array", false, false, false, 3), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "details", [], "any", false, true, false, 3), "payment_mollie_link", [], "array", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 3, $this->source); })()), "details", [], "any", false, false, false, 3), "payment_mollie_link", [], "array", false, false, false, 3), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "details", [], "any", false, true, false, 3), "payment_mollie_link", [], "array", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 3, $this->source); })()), "details", [], "any", false, false, false, 3), "payment_mollie_link", [], "array", false, false, false, 3), "")) : (""))));
        // line 4
        $context["payment_gateway"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "method", [], "any", false, true, false, 4), "gatewayConfig", [], "any", false, true, false, 4), "factoryName", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 4, $this->source); })()), "method", [], "any", false, false, false, 4), "gatewayConfig", [], "any", false, false, false, 4), "factoryName", [], "any", false, false, false, 4), "")) : (""));
        // line 5
        yield "
";
        // line 6
        if ((((        // line 7
(isset($context["payment_link"]) || array_key_exists("payment_link", $context) ? $context["payment_link"] : (function () { throw new RuntimeError('Variable "payment_link" does not exist.', 7, $this->source); })()) != "") && (        // line 8
(isset($context["payment_gateway"]) || array_key_exists("payment_gateway", $context) ? $context["payment_gateway"] : (function () { throw new RuntimeError('Variable "payment_gateway" does not exist.', 8, $this->source); })()) == Twig\Extension\CoreExtension::constant("Sylius\\MolliePlugin\\Payum\\Factory\\MollieGatewayFactory::FACTORY_NAME"))) && $this->env->getFunction('sylius_sm_can')->getCallable()(        // line 9
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 9, $this->source); })()), Twig\Extension\CoreExtension::constant("Sylius\\Component\\Payment\\PaymentTransitions::GRAPH"), Twig\Extension\CoreExtension::constant("Sylius\\Component\\Payment\\PaymentTransitions::TRANSITION_COMPLETE")))) {
            // line 11
            yield "    <a href=\"";
            yield (((array_key_exists("payment_link", $context) &&  !(null === $context["payment_link"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["payment_link"], "html", null, true)) : (""));
            yield "\" class=\"btn\">
        ";
            // line 12
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:currency");
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pay"), "html", null, true);
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
        return "@SyliusMolliePlugin/admin/order/show/content/sections/payments/item/actions/complete_payment_link.html.twig";
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
        return array (  70 => 12,  65 => 11,  63 => 9,  62 => 8,  61 => 7,  60 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set payment = hookable_metadata.context.payment %}

{% set payment_link = payment.details['payment-link']|default(payment.details['payment_mollie_link']|default('')) %}
{% set payment_gateway = payment.method.gatewayConfig.factoryName|default('') %}

{% if
    payment_link != ''
    and payment_gateway == constant('Sylius\\\\MolliePlugin\\\\Payum\\\\Factory\\\\MollieGatewayFactory::FACTORY_NAME')
    and sylius_sm_can(payment, constant('Sylius\\\\Component\\\\Payment\\\\PaymentTransitions::GRAPH'), constant('Sylius\\\\Component\\\\Payment\\\\PaymentTransitions::TRANSITION_COMPLETE'))
%}
    <a href=\"{{ payment_link ?? '' }}\" class=\"btn\">
        {{ ux_icon('tabler:currency') }} {{ 'sylius.ui.pay'|trans }}
    </a>
{% endif %}
", "@SyliusMolliePlugin/admin/order/show/content/sections/payments/item/actions/complete_payment_link.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/order/show/content/sections/payments/item/actions/complete_payment_link.html.twig");
    }
}
