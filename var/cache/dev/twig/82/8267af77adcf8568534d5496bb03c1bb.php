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

/* @SyliusAdmin/order/macro/order_payment_state_label.html.twig */
class __TwigTemplate_16c31961fc0ceda99d9e98e2bfadc52c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/macro/order_payment_state_label.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/macro/order_payment_state_label.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_label($state = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "state" => $state,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label"));

            // line 2
            $context["label"] = ("sylius.ui." . (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 2, $this->source); })()));
            // line 3
            yield "
    ";
            // line 4
            $context["state_badge"] = [Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\OrderPaymentStates::STATE_AWAITING_PAYMENT") => "bg-blue-lt", Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\OrderPaymentStates::STATE_PARTIALLY_AUTHORIZED") => "bg-azure-lt", Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\OrderPaymentStates::STATE_AUTHORIZED") => "bg-indigo-lt", Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\OrderPaymentStates::STATE_PARTIALLY_PAID") => "bg-yellow-lt", Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\OrderPaymentStates::STATE_CANCELLED") => "bg-orange-lt", Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\OrderPaymentStates::STATE_PAID") => "bg-green-lt", Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\OrderPaymentStates::STATE_PARTIALLY_REFUNDED") => "bg-muted-lt", Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\OrderPaymentStates::STATE_REFUNDED") => "bg-purple-lt"];
            // line 14
            yield "
    <span class=\"badge ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["state_badge"] ?? null), (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 15, $this->source); })()), [], "array", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["state_badge"]) || array_key_exists("state_badge", $context) ? $context["state_badge"] : (function () { throw new RuntimeError('Variable "state_badge" does not exist.', 15, $this->source); })()), (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 15, $this->source); })()), [], "array", false, false, false, 15), "")) : ("")), "html", null, true);
            yield "\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("order-payment-state");
            yield ">
        ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 16, $this->source); })()))), "html", null, true);
            yield "
    </span>";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusAdmin/order/macro/order_payment_state_label.html.twig";
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
        return array (  91 => 16,  85 => 15,  82 => 14,  80 => 4,  77 => 3,  75 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{%- macro label(state) -%}
    {% set label = 'sylius.ui.' ~ state %}

    {% set state_badge = {
        (constant('Sylius\\\\Component\\\\Core\\\\OrderPaymentStates::STATE_AWAITING_PAYMENT')): 'bg-blue-lt',
        (constant('Sylius\\\\Component\\\\Core\\\\OrderPaymentStates::STATE_PARTIALLY_AUTHORIZED')): 'bg-azure-lt',
        (constant('Sylius\\\\Component\\\\Core\\\\OrderPaymentStates::STATE_AUTHORIZED')): 'bg-indigo-lt',
        (constant('Sylius\\\\Component\\\\Core\\\\OrderPaymentStates::STATE_PARTIALLY_PAID')): 'bg-yellow-lt',
        (constant('Sylius\\\\Component\\\\Core\\\\OrderPaymentStates::STATE_CANCELLED')): 'bg-orange-lt',
        (constant('Sylius\\\\Component\\\\Core\\\\OrderPaymentStates::STATE_PAID')): 'bg-green-lt',
        (constant('Sylius\\\\Component\\\\Core\\\\OrderPaymentStates::STATE_PARTIALLY_REFUNDED')): 'bg-muted-lt',
        (constant('Sylius\\\\Component\\\\Core\\\\OrderPaymentStates::STATE_REFUNDED')): 'bg-purple-lt',
    } %}

    <span class=\"badge {{ state_badge[state]|default('') }}\" {{ sylius_test_html_attribute('order-payment-state') }}>
        {{ label|trans|title }}
    </span>
{%- endmacro -%}
", "@SyliusAdmin/order/macro/order_payment_state_label.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/order/macro/order_payment_state_label.html.twig");
    }
}
