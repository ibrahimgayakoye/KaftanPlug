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

/* @SyliusAdmin/order/show/content/sections/summary/shipping_total.html.twig */
class __TwigTemplate_5ee2e125bc2f8065777d910ff4394b18 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/show/content/sections/summary/shipping_total.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/show/content/sections/summary/shipping_total.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/shared/helper/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["order_shipping_promotion_adjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT");
        // line 4
        $context["shipping_adjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::SHIPPING_ADJUSTMENT");
        // line 5
        $context["tax_adjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::TAX_ADJUSTMENT");
        // line 6
        yield "
";
        // line 7
        $context["order"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 7, $this->source); })()), "context", [], "any", false, false, false, 7), "resource", [], "any", false, false, false, 7);
        // line 8
        $context["order_shipping_promotions"] = $this->env->getFunction('sylius_aggregate_adjustments')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "getAdjustmentsRecursively", [(isset($context["order_shipping_promotion_adjustment"]) || array_key_exists("order_shipping_promotion_adjustment", $context) ? $context["order_shipping_promotion_adjustment"] : (function () { throw new RuntimeError('Variable "order_shipping_promotion_adjustment" does not exist.', 8, $this->source); })())], "method", false, false, false, 8));
        // line 9
        yield "
<tr>
    <td><strong>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_total"), "html", null, true);
        yield ":</strong></td>
    <td class=\"text-end\" ";
        // line 12
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipping-total");
        yield ">";
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 12, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "shippingTotal", [], "any", false, false, false, 12), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "currencyCode", [], "any", false, false, false, 12)]);
        yield "</td>
</tr>

";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "shipments", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["shipment"]) {
            // line 16
            yield "    <tr class=\"text-muted\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipping", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["shipment"], "method", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16));
            yield ">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["shipment"], "adjustments", [(isset($context["shipping_adjustment"]) || array_key_exists("shipping_adjustment", $context) ? $context["shipping_adjustment"] : (function () { throw new RuntimeError('Variable "shipping_adjustment" does not exist.', 17, $this->source); })())], "method", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
                // line 18
                yield "            <td><div class=\"ps-2\">&bull; ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "label", [], "any", false, false, false, 18), "html", null, true);
                yield ":</div></td>
            <td class=\"text-end\"><span ";
                // line 19
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("base-value");
                yield ">";
                yield $macros["money"]->getTemplateForMacro("macro_format", $context, 19, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "amount", [], "any", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 19, $this->source); })()), "currencyCode", [], "any", false, false, false, 19)]);
                yield "</span></td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['adjustment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["shipment"], "adjustments", [(isset($context["tax_adjustment"]) || array_key_exists("tax_adjustment", $context) ? $context["tax_adjustment"] : (function () { throw new RuntimeError('Variable "tax_adjustment" does not exist.', 21, $this->source); })())], "method", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
                // line 22
                yield "            <td><div class=\"ps-2\">&bull; ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "label", [], "any", false, false, false, 22), "html", null, true);
                yield ":</div></td>
            <td class=\"text-end\">
                <span ";
                // line 24
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("tax-value");
                yield ">";
                yield $macros["money"]->getTemplateForMacro("macro_format", $context, 24, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "amount", [], "any", false, false, false, 24), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 24, $this->source); })()), "currencyCode", [], "any", false, false, false, 24)]);
                yield "</span>
                ";
                // line 25
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "isNeutral", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 26
                    yield "                    <small>(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.included_in_price"), "html", null, true);
                    yield ")</small>
                ";
                }
                // line 28
                yield "            </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['adjustment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['shipment'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["order_shipping_promotions"]) || array_key_exists("order_shipping_promotions", $context) ? $context["order_shipping_promotions"] : (function () { throw new RuntimeError('Variable "order_shipping_promotions" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
            // line 34
            yield "    <tr class=\"text-muted\">
        <td><div class=\"ps-2\">&bull; ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield ":</div></td>
        <td class=\"text-end\"><span ";
            // line 36
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipping-promotion-discount");
            yield ">";
            yield $macros["money"]->getTemplateForMacro("macro_format", $context, 36, $this->getSourceContext())->macro_format(...[$context["amount"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 36, $this->source); })()), "currencyCode", [], "any", false, false, false, 36)]);
            yield "</span></td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['amount'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusAdmin/order/show/content/sections/summary/shipping_total.html.twig";
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
        return array (  163 => 36,  159 => 35,  156 => 34,  152 => 33,  149 => 32,  142 => 30,  135 => 28,  129 => 26,  127 => 25,  121 => 24,  115 => 22,  110 => 21,  100 => 19,  95 => 18,  91 => 17,  86 => 16,  82 => 15,  74 => 12,  70 => 11,  66 => 9,  64 => 8,  62 => 7,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/shared/helper/money.html.twig' as money %}

{% set order_shipping_promotion_adjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT') %}
{% set shipping_adjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::SHIPPING_ADJUSTMENT') %}
{% set tax_adjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::TAX_ADJUSTMENT') %}

{% set order = hookable_metadata.context.resource %}
{% set order_shipping_promotions = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(order_shipping_promotion_adjustment)) %}

<tr>
    <td><strong>{{ 'sylius.ui.shipping_total'|trans }}:</strong></td>
    <td class=\"text-end\" {{ sylius_test_html_attribute('shipping-total') }}>{{ money.format(order.shippingTotal, order.currencyCode) }}</td>
</tr>

{% for shipment in order.shipments %}
    <tr class=\"text-muted\" {{ sylius_test_html_attribute('shipping', shipment.method.name) }}>
        {% for adjustment in shipment.adjustments(shipping_adjustment) %}
            <td><div class=\"ps-2\">&bull; {{ adjustment.label }}:</div></td>
            <td class=\"text-end\"><span {{ sylius_test_html_attribute('base-value') }}>{{ money.format(adjustment.amount, order.currencyCode) }}</span></td>
        {% endfor %}
        {% for adjustment in shipment.adjustments(tax_adjustment) %}
            <td><div class=\"ps-2\">&bull; {{ adjustment.label }}:</div></td>
            <td class=\"text-end\">
                <span {{ sylius_test_html_attribute('tax-value') }}>{{ money.format(adjustment.amount, order.currencyCode) }}</span>
                {% if adjustment.isNeutral %}
                    <small>({{ 'sylius.ui.included_in_price'|trans }})</small>
                {% endif %}
            </td>
        {% endfor %}
    </tr>
{% endfor %}

{% for label, amount in order_shipping_promotions %}
    <tr class=\"text-muted\">
        <td><div class=\"ps-2\">&bull; {{ label }}:</div></td>
        <td class=\"text-end\"><span {{ sylius_test_html_attribute('shipping-promotion-discount') }}>{{ money.format(amount, order.currencyCode) }}</span></td>
    </tr>
{% endfor %}
", "@SyliusAdmin/order/show/content/sections/summary/shipping_total.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/order/show/content/sections/summary/shipping_total.html.twig");
    }
}
