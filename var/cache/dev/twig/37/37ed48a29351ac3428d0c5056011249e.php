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

/* @SyliusMolliePlugin/shop/shared/order/show/summary/table_summary/payment_fee/value.html.twig */
class __TwigTemplate_c5235907a816e60caadaa38c8814f40e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/shop/shared/order/show/summary/table_summary/payment_fee/value.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/shop/shared/order/show/summary/table_summary/payment_fee/value.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/shared/macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["order"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "order", [], "any", false, false, false, 3);
        // line 4
        yield "
";
        // line 5
        if ((($tmp =  !(null === (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "    ";
            $context["orderPromotionAdjustmentPercentage"] = Twig\Extension\CoreExtension::constant("Sylius\\MolliePlugin\\Model\\AdjustmentInterface::PERCENTAGE_ADJUSTMENT");
            // line 7
            yield "    ";
            $context["orderPromotionAdjustmentFixAmount"] = Twig\Extension\CoreExtension::constant("Sylius\\MolliePlugin\\Model\\AdjustmentInterface::FIXED_AMOUNT_ADJUSTMENT");
            // line 8
            yield "    ";
            $context["orderPromotionAdjustmentFixAmountAndPercentage"] = Twig\Extension\CoreExtension::constant("Sylius\\MolliePlugin\\Model\\AdjustmentInterface::PERCENTAGE_AND_AMOUNT_ADJUSTMENT");
            // line 9
            yield "
    ";
            // line 10
            $context["surchargePercentage"] = $this->env->getFunction('sylius_aggregate_adjustments')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "adjustmentsRecursively", [(isset($context["orderPromotionAdjustmentPercentage"]) || array_key_exists("orderPromotionAdjustmentPercentage", $context) ? $context["orderPromotionAdjustmentPercentage"] : (function () { throw new RuntimeError('Variable "orderPromotionAdjustmentPercentage" does not exist.', 10, $this->source); })())], "method", false, false, false, 10));
            // line 11
            yield "    ";
            $context["surchargeFixAmount"] = $this->env->getFunction('sylius_aggregate_adjustments')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 11, $this->source); })()), "adjustmentsRecursively", [(isset($context["orderPromotionAdjustmentFixAmount"]) || array_key_exists("orderPromotionAdjustmentFixAmount", $context) ? $context["orderPromotionAdjustmentFixAmount"] : (function () { throw new RuntimeError('Variable "orderPromotionAdjustmentFixAmount" does not exist.', 11, $this->source); })())], "method", false, false, false, 11));
            // line 12
            yield "    ";
            $context["surchargePercentageAndFixAmount"] = $this->env->getFunction('sylius_aggregate_adjustments')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "adjustmentsRecursively", [(isset($context["orderPromotionAdjustmentFixAmountAndPercentage"]) || array_key_exists("orderPromotionAdjustmentFixAmountAndPercentage", $context) ? $context["orderPromotionAdjustmentFixAmountAndPercentage"] : (function () { throw new RuntimeError('Variable "orderPromotionAdjustmentFixAmountAndPercentage" does not exist.', 12, $this->source); })())], "method", false, false, false, 12));
            // line 13
            yield "
    <td class=\"text-end\">
        <div data-test=\"payment-fee-total\" ";
            // line 15
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("payment-fee-total");
            yield ">
            ";
            // line 16
            if ((( !(isset($context["surchargePercentage"]) || array_key_exists("surchargePercentage", $context) ? $context["surchargePercentage"] : (function () { throw new RuntimeError('Variable "surchargePercentage" does not exist.', 16, $this->source); })()) &&  !(isset($context["surchargeFixAmount"]) || array_key_exists("surchargeFixAmount", $context) ? $context["surchargeFixAmount"] : (function () { throw new RuntimeError('Variable "surchargeFixAmount" does not exist.', 16, $this->source); })())) &&  !(isset($context["surchargePercentageAndFixAmount"]) || array_key_exists("surchargePercentageAndFixAmount", $context) ? $context["surchargePercentageAndFixAmount"] : (function () { throw new RuntimeError('Variable "surchargePercentageAndFixAmount" does not exist.', 16, $this->source); })()))) {
                // line 17
                yield "                <div>";
                yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 17, $this->getSourceContext())->macro_convertAndFormat(...[0]);
                yield "</div>
            ";
            }
            // line 19
            yield "
            ";
            // line 20
            if ((($tmp = (isset($context["surchargeFixAmount"]) || array_key_exists("surchargeFixAmount", $context) ? $context["surchargeFixAmount"] : (function () { throw new RuntimeError('Variable "surchargeFixAmount" does not exist.', 20, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 21
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["surchargeFixAmount"]) || array_key_exists("surchargeFixAmount", $context) ? $context["surchargeFixAmount"] : (function () { throw new RuntimeError('Variable "surchargeFixAmount" does not exist.', 21, $this->source); })()));
                foreach ($context['_seq'] as $context["_"] => $context["value"]) {
                    // line 22
                    yield "                    <div>";
                    yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 22, $this->getSourceContext())->macro_convertAndFormat(...[$context["value"]]);
                    yield "</div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                yield "            ";
            }
            // line 25
            yield "
            ";
            // line 26
            if ((($tmp = (isset($context["surchargePercentage"]) || array_key_exists("surchargePercentage", $context) ? $context["surchargePercentage"] : (function () { throw new RuntimeError('Variable "surchargePercentage" does not exist.', 26, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 27
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["surchargePercentage"]) || array_key_exists("surchargePercentage", $context) ? $context["surchargePercentage"] : (function () { throw new RuntimeError('Variable "surchargePercentage" does not exist.', 27, $this->source); })()));
                foreach ($context['_seq'] as $context["_"] => $context["value"]) {
                    // line 28
                    yield "                    <div>";
                    yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 28, $this->getSourceContext())->macro_convertAndFormat(...[$context["value"]]);
                    yield "</div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                yield "            ";
            }
            // line 31
            yield "
            ";
            // line 32
            if ((($tmp = (isset($context["surchargePercentageAndFixAmount"]) || array_key_exists("surchargePercentageAndFixAmount", $context) ? $context["surchargePercentageAndFixAmount"] : (function () { throw new RuntimeError('Variable "surchargePercentageAndFixAmount" does not exist.', 32, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 33
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["surchargePercentageAndFixAmount"]) || array_key_exists("surchargePercentageAndFixAmount", $context) ? $context["surchargePercentageAndFixAmount"] : (function () { throw new RuntimeError('Variable "surchargePercentageAndFixAmount" does not exist.', 33, $this->source); })()));
                foreach ($context['_seq'] as $context["_"] => $context["value"]) {
                    // line 34
                    yield "                    <div>";
                    yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 34, $this->getSourceContext())->macro_convertAndFormat(...[$context["value"]]);
                    yield "</div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                yield "            ";
            }
            // line 37
            yield "        </div>
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
        return "@SyliusMolliePlugin/shop/shared/order/show/summary/table_summary/payment_fee/value.html.twig";
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
        return array (  162 => 37,  159 => 36,  150 => 34,  145 => 33,  143 => 32,  140 => 31,  137 => 30,  128 => 28,  123 => 27,  121 => 26,  118 => 25,  115 => 24,  106 => 22,  101 => 21,  99 => 20,  96 => 19,  90 => 17,  88 => 16,  84 => 15,  80 => 13,  77 => 12,  74 => 11,  72 => 10,  69 => 9,  66 => 8,  63 => 7,  60 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/shared/macro/money.html.twig\" as money %}

{% set order = hookable_metadata.context.order %}

{% if order is not null %}
    {% set orderPromotionAdjustmentPercentage = constant('Sylius\\\\MolliePlugin\\\\Model\\\\AdjustmentInterface::PERCENTAGE_ADJUSTMENT') %}
    {% set orderPromotionAdjustmentFixAmount =  constant('Sylius\\\\MolliePlugin\\\\Model\\\\AdjustmentInterface::FIXED_AMOUNT_ADJUSTMENT') %}
    {% set orderPromotionAdjustmentFixAmountAndPercentage = constant('Sylius\\\\MolliePlugin\\\\Model\\\\AdjustmentInterface::PERCENTAGE_AND_AMOUNT_ADJUSTMENT') %}

    {% set surchargePercentage = sylius_aggregate_adjustments(order.adjustmentsRecursively(orderPromotionAdjustmentPercentage)) %}
    {% set surchargeFixAmount = sylius_aggregate_adjustments(order.adjustmentsRecursively(orderPromotionAdjustmentFixAmount)) %}
    {% set surchargePercentageAndFixAmount = sylius_aggregate_adjustments(order.adjustmentsRecursively(orderPromotionAdjustmentFixAmountAndPercentage)) %}

    <td class=\"text-end\">
        <div data-test=\"payment-fee-total\" {{ sylius_test_html_attribute('payment-fee-total') }}>
            {% if not surchargePercentage and not surchargeFixAmount and not surchargePercentageAndFixAmount %}
                <div>{{ money.convertAndFormat(0) }}</div>
            {% endif %}

            {% if surchargeFixAmount %}
                {% for _, value in surchargeFixAmount %}
                    <div>{{ money.convertAndFormat(value) }}</div>
                {% endfor %}
            {% endif %}

            {% if surchargePercentage %}
                {% for _, value in surchargePercentage %}
                    <div>{{ money.convertAndFormat(value) }}</div>
                {% endfor %}
            {% endif %}

            {% if surchargePercentageAndFixAmount %}
                {% for _, value in surchargePercentageAndFixAmount %}
                    <div>{{ money.convertAndFormat(value) }}</div>
                {% endfor %}
            {% endif %}
        </div>
    </td>
{% endif %}
", "@SyliusMolliePlugin/shop/shared/order/show/summary/table_summary/payment_fee/value.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/shop/shared/order/show/summary/table_summary/payment_fee/value.html.twig");
    }
}
