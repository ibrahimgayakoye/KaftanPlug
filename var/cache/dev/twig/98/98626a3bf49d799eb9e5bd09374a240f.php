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

/* @SyliusShop/shared/order/show/summary/table_summary/shipping/value.html.twig */
class __TwigTemplate_fa61761dc6f330df8467f20b09a5bda2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/order/show/summary/table_summary/shipping/value.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/order/show/summary/table_summary/shipping/value.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/shared/macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["order"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "order", [], "any", false, false, false, 3);
        // line 4
        $context["order_shipping_promotion_adjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT");
        // line 5
        $context["shipping_adjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::SHIPPING_ADJUSTMENT");
        // line 6
        $context["order_shipping_promotions"] = $this->env->getFunction('sylius_aggregate_adjustments')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "getAdjustmentsRecursively", [(isset($context["order_shipping_promotion_adjustment"]) || array_key_exists("order_shipping_promotion_adjustment", $context) ? $context["order_shipping_promotion_adjustment"] : (function () { throw new RuntimeError('Variable "order_shipping_promotion_adjustment" does not exist.', 6, $this->source); })())], "method", false, false, false, 6));
        // line 7
        yield "
";
        // line 8
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["order_shipping_promotions"]) || array_key_exists("order_shipping_promotions", $context) ? $context["order_shipping_promotions"] : (function () { throw new RuntimeError('Variable "order_shipping_promotions" does not exist.', 8, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "    <td class=\"text-end\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("promotion-shipping-discounts");
            yield ">
        <div>
            <span class=\"text-decoration-line-through text-body-tertiary me-2\">
                ";
            // line 12
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 12, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "getAdjustmentsTotal", [(isset($context["shipping_adjustment"]) || array_key_exists("shipping_adjustment", $context) ? $context["shipping_adjustment"] : (function () { throw new RuntimeError('Variable "shipping_adjustment" does not exist.', 12, $this->source); })())], "method", false, false, false, 12)]);
            yield "
            </span>
            <span ";
            // line 14
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipping-total");
            yield ">
                ";
            // line 15
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 15, $this->getSourceContext())->macro_convertAndFormat(...[(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "getAdjustmentsTotal", [(isset($context["shipping_adjustment"]) || array_key_exists("shipping_adjustment", $context) ? $context["shipping_adjustment"] : (function () { throw new RuntimeError('Variable "shipping_adjustment" does not exist.', 15, $this->source); })())], "method", false, false, false, 15) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "getAdjustmentsTotal", [(isset($context["order_shipping_promotion_adjustment"]) || array_key_exists("order_shipping_promotion_adjustment", $context) ? $context["order_shipping_promotion_adjustment"] : (function () { throw new RuntimeError('Variable "order_shipping_promotion_adjustment" does not exist.', 15, $this->source); })())], "method", false, false, false, 15))]);
            yield "
            </span>
        </div>

        <div ";
            // line 19
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipping-promotion-details");
            yield ">
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["order_shipping_promotions"]) || array_key_exists("order_shipping_promotions", $context) ? $context["order_shipping_promotions"] : (function () { throw new RuntimeError('Variable "order_shipping_promotions" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
                // line 21
                yield "                <div>
                    <small class=\"text-body-tertiary\">
                        ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield ": ";
                yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 23, $this->getSourceContext())->macro_convertAndFormat(...[$context["amount"]]);
                yield "
                    </small>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['amount'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "        </div>
    </td>
";
        } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "shipments", [], "any", false, false, false, 29))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "    <td class=\"text-end\">
        <div ";
            // line 31
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipping-total");
            yield ">
            ";
            // line 32
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 32, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 32, $this->source); })()), "shippingTotal", [], "any", false, false, false, 32)]);
            yield "
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
        return "@SyliusShop/shared/order/show/summary/table_summary/shipping/value.html.twig";
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
        return array (  126 => 32,  122 => 31,  119 => 30,  117 => 29,  113 => 27,  101 => 23,  97 => 21,  93 => 20,  89 => 19,  82 => 15,  78 => 14,  73 => 12,  66 => 9,  64 => 8,  61 => 7,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/shared/macro/money.html.twig\" as money %}

{% set order = hookable_metadata.context.order %}
{% set order_shipping_promotion_adjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT') %}
{% set shipping_adjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::SHIPPING_ADJUSTMENT') %}
{% set order_shipping_promotions = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(order_shipping_promotion_adjustment)) %}

{% if not order_shipping_promotions is empty %}
    <td class=\"text-end\" {{ sylius_test_html_attribute('promotion-shipping-discounts') }}>
        <div>
            <span class=\"text-decoration-line-through text-body-tertiary me-2\">
                {{ money.convertAndFormat(order.getAdjustmentsTotal(shipping_adjustment)) }}
            </span>
            <span {{ sylius_test_html_attribute('shipping-total') }}>
                {{ money.convertAndFormat(order.getAdjustmentsTotal(shipping_adjustment) + order.getAdjustmentsTotal(order_shipping_promotion_adjustment)) }}
            </span>
        </div>

        <div {{ sylius_test_html_attribute('shipping-promotion-details') }}>
            {% for label, amount in order_shipping_promotions %}
                <div>
                    <small class=\"text-body-tertiary\">
                        {{ label }}: {{ money.convertAndFormat(amount) }}
                    </small>
                </div>
            {% endfor %}
        </div>
    </td>
{% elseif order.shipments is not empty %}
    <td class=\"text-end\">
        <div {{ sylius_test_html_attribute('shipping-total') }}>
            {{ money.convertAndFormat(order.shippingTotal) }}
        </div>
    </td>
{% endif %}
", "@SyliusShop/shared/order/show/summary/table_summary/shipping/value.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/order/show/summary/table_summary/shipping/value.html.twig");
    }
}
