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

/* @SyliusAdmin/order/show/content/sections/items/body/subtotal.html.twig */
class __TwigTemplate_262f5d8aea69c7f094b2d7be2e93d95f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/show/content/sections/items/body/subtotal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/show/content/sections/items/body/subtotal.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/shared/helper/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["order_promotion_adjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 4
        $context["unit_promotion_adjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_UNIT_PROMOTION_ADJUSTMENT");
        // line 5
        yield "
";
        // line 6
        $context["order"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 6, $this->source); })()), "context", [], "any", false, false, false, 6), "resource", [], "any", false, false, false, 6);
        // line 7
        $context["item"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 7, $this->source); })()), "context", [], "any", false, false, false, 7), "item", [], "any", false, false, false, 7);
        // line 8
        $context["aggregated_unit_promotion_adjustments"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "getAdjustmentsTotalRecursively", [(isset($context["unit_promotion_adjustment"]) || array_key_exists("unit_promotion_adjustment", $context) ? $context["unit_promotion_adjustment"] : (function () { throw new RuntimeError('Variable "unit_promotion_adjustment" does not exist.', 8, $this->source); })())], "method", false, false, false, 8) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "getAdjustmentsTotalRecursively", [(isset($context["order_promotion_adjustment"]) || array_key_exists("order_promotion_adjustment", $context) ? $context["order_promotion_adjustment"] : (function () { throw new RuntimeError('Variable "order_promotion_adjustment" does not exist.', 8, $this->source); })())], "method", false, false, false, 8));
        // line 9
        $context["subtotal"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "unitPrice", [], "any", false, false, false, 9) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "quantity", [], "any", false, false, false, 9)) + (isset($context["aggregated_unit_promotion_adjustments"]) || array_key_exists("aggregated_unit_promotion_adjustments", $context) ? $context["aggregated_unit_promotion_adjustments"] : (function () { throw new RuntimeError('Variable "aggregated_unit_promotion_adjustments" does not exist.', 9, $this->source); })()));
        // line 10
        yield "
<td class=\"text-end\" ";
        // line 11
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("subtotal");
        yield ">
    ";
        // line 12
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 12, $this->getSourceContext())->macro_format(...[(isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new RuntimeError('Variable "subtotal" does not exist.', 12, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "currencyCode", [], "any", false, false, false, 12)]);
        yield "
</td>
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
        return "@SyliusAdmin/order/show/content/sections/items/body/subtotal.html.twig";
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
        return array (  75 => 12,  71 => 11,  68 => 10,  66 => 9,  64 => 8,  62 => 7,  60 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/shared/helper/money.html.twig' as money %}

{% set order_promotion_adjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT') %}
{% set unit_promotion_adjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_UNIT_PROMOTION_ADJUSTMENT') %}

{% set order = hookable_metadata.context.resource %}
{% set item = hookable_metadata.context.item %}
{% set aggregated_unit_promotion_adjustments = item.getAdjustmentsTotalRecursively(unit_promotion_adjustment) + item.getAdjustmentsTotalRecursively(order_promotion_adjustment) %}
{% set subtotal = (item.unitPrice * item.quantity) + aggregated_unit_promotion_adjustments %}

<td class=\"text-end\" {{ sylius_test_html_attribute('subtotal') }}>
    {{ money.format(subtotal, order.currencyCode) }}
</td>
", "@SyliusAdmin/order/show/content/sections/items/body/subtotal.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/order/show/content/sections/items/body/subtotal.html.twig");
    }
}
