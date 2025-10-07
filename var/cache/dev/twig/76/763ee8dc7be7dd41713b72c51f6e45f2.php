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

/* @SyliusMolliePlugin/shop/checkout/select_payment/sidebar/apple_pay_button.html.twig */
class __TwigTemplate_d6cac5a91af5b1ea21b4792749d28308 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/shop/checkout/select_payment/sidebar/apple_pay_button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/shop/checkout/select_payment/sidebar/apple_pay_button.html.twig"));

        // line 1
        if ((($tmp = $this->env->getFunction('mollie_render_apple_pay_direct')->getCallable()()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    ";
            $context["order"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "order", [], "any", false, false, false, 2);
            // line 3
            yield "    <div class=\"apple-pay-button-with-text apple-pay-button apple-pay-button-black\" id=\"mollie_applepay_button\"
         data-divisor=\"";
            // line 4
            yield $this->env->getFunction('mollie_get_divisor')->getCallable()();
            yield "\"
         data-url-validate=\"";
            // line 5
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_mollie_shop_apple_pay_validation");
            yield "\"
         data-url-payment=\"";
            // line 6
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_mollie_shop_checkout_apple_complete");
            yield "\"
         data-total-order=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 7, $this->source); })()), "total", [], "any", false, false, false, 7), "html", null, true);
            yield "\"
         data-currency-order=\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "channel", [], "any", false, false, false, 8), "baseCurrency", [], "any", false, false, false, 8), "code", [], "any", false, false, false, 8), "html", null, true);
            yield "\"
         data-merchant-name=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 9, $this->source); })()), "channel", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
            yield "\"
    >
        <span class=\" apple-pay-text\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.buy_with_apple_pay"), "html", null, true);
            yield "</span>
        <span class=\"logo\"></span>
    </div>
";
        }
        // line 15
        yield "
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
        return "@SyliusMolliePlugin/shop/checkout/select_payment/sidebar/apple_pay_button.html.twig";
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
        return array (  88 => 15,  81 => 11,  76 => 9,  72 => 8,  68 => 7,  64 => 6,  60 => 5,  56 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if mollie_render_apple_pay_direct() %}
    {% set order = hookable_metadata.context.order %}
    <div class=\"apple-pay-button-with-text apple-pay-button apple-pay-button-black\" id=\"mollie_applepay_button\"
         data-divisor=\"{{ mollie_get_divisor() }}\"
         data-url-validate=\"{{ path('sylius_mollie_shop_apple_pay_validation') }}\"
         data-url-payment=\"{{ path('sylius_mollie_shop_checkout_apple_complete') }}\"
         data-total-order=\"{{ order.total }}\"
         data-currency-order=\"{{ order.channel.baseCurrency.code }}\"
         data-merchant-name=\"{{ order.channel.name }}\"
    >
        <span class=\" apple-pay-text\">{{ 'sylius_mollie.ui.buy_with_apple_pay'|trans }}</span>
        <span class=\"logo\"></span>
    </div>
{% endif %}

", "@SyliusMolliePlugin/shop/checkout/select_payment/sidebar/apple_pay_button.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/shop/checkout/select_payment/sidebar/apple_pay_button.html.twig");
    }
}
