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

/* @SyliusAdmin/order/show/content/sections/summary/promotion_total.html.twig */
class __TwigTemplate_26d124d1772ba7f01466a2be0e33a4ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/show/content/sections/summary/promotion_total.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/show/content/sections/summary/promotion_total.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/shared/helper/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["order"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "resource", [], "any", false, false, false, 3);
        // line 4
        yield "
";
        // line 5
        $context["order_promotion_adjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 6
        $context["unit_promotion_adjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_UNIT_PROMOTION_ADJUSTMENT");
        // line 7
        yield "
";
        // line 8
        $context["order_promotion_adjustments"] = $this->env->getFunction('sylius_aggregate_adjustments')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "getAdjustmentsRecursively", [(isset($context["order_promotion_adjustment"]) || array_key_exists("order_promotion_adjustment", $context) ? $context["order_promotion_adjustment"] : (function () { throw new RuntimeError('Variable "order_promotion_adjustment" does not exist.', 8, $this->source); })())], "method", false, false, false, 8));
        // line 9
        $context["unit_promotion_adjustments"] = $this->env->getFunction('sylius_aggregate_adjustments')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 9, $this->source); })()), "getAdjustmentsRecursively", [(isset($context["unit_promotion_adjustment"]) || array_key_exists("unit_promotion_adjustment", $context) ? $context["unit_promotion_adjustment"] : (function () { throw new RuntimeError('Variable "unit_promotion_adjustment" does not exist.', 9, $this->source); })())], "method", false, false, false, 9));
        // line 10
        $context["promotion_adjustments"] = Twig\Extension\CoreExtension::merge((isset($context["order_promotion_adjustments"]) || array_key_exists("order_promotion_adjustments", $context) ? $context["order_promotion_adjustments"] : (function () { throw new RuntimeError('Variable "order_promotion_adjustments" does not exist.', 10, $this->source); })()), (isset($context["unit_promotion_adjustments"]) || array_key_exists("unit_promotion_adjustments", $context) ? $context["unit_promotion_adjustments"] : (function () { throw new RuntimeError('Variable "unit_promotion_adjustments" does not exist.', 10, $this->source); })()));
        // line 11
        $context["total_adjustments"] = Twig\Extension\CoreExtension::reduce($this->env, (isset($context["promotion_adjustments"]) || array_key_exists("promotion_adjustments", $context) ? $context["promotion_adjustments"] : (function () { throw new RuntimeError('Variable "promotion_adjustments" does not exist.', 11, $this->source); })()), function ($__carry__, $__v__) use ($context, $macros) { $context["carry"] = $__carry__; $context["v"] = $__v__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 11, $this->source); })()) + (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 11, $this->source); })())); });
        // line 12
        yield "
<tr>
    <td>
        <strong>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.promotion_total"), "html", null, true);
        yield ":</strong>
    </td>
    <td class=\"text-end\" ";
        // line 17
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("promotion-total");
        yield ">
        ";
        // line 18
        if (((isset($context["total_adjustments"]) || array_key_exists("total_adjustments", $context) ? $context["total_adjustments"] : (function () { throw new RuntimeError('Variable "total_adjustments" does not exist.', 18, $this->source); })()) == 0)) {
            // line 19
            yield "            <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_promotion"), "html", null, true);
            yield "</p>
        ";
        } else {
            // line 21
            yield "            ";
            yield $macros["money"]->getTemplateForMacro("macro_format", $context, 21, $this->getSourceContext())->macro_format(...[(isset($context["total_adjustments"]) || array_key_exists("total_adjustments", $context) ? $context["total_adjustments"] : (function () { throw new RuntimeError('Variable "total_adjustments" does not exist.', 21, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 21, $this->source); })()), "currencyCode", [], "any", false, false, false, 21)]);
            yield "
        ";
        }
        // line 23
        yield "    </td>
</tr>

";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotion_adjustments"]) || array_key_exists("promotion_adjustments", $context) ? $context["promotion_adjustments"] : (function () { throw new RuntimeError('Variable "promotion_adjustments" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
            // line 27
            yield "    <tr class=\"text-muted\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("promotion", $context["label"]);
            yield ">
        <td>
            <div class=\"ps-2\">
                &bull; ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield ":
            </div>
        </td>
        <td class=\"text-end\" ";
            // line 33
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("discount");
            yield ">
            ";
            // line 34
            yield $macros["money"]->getTemplateForMacro("macro_format", $context, 34, $this->getSourceContext())->macro_format(...[$context["amount"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 34, $this->source); })()), "currencyCode", [], "any", false, false, false, 34)]);
            yield "
        </td>
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
        return "@SyliusAdmin/order/show/content/sections/summary/promotion_total.html.twig";
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
        return array (  127 => 34,  123 => 33,  117 => 30,  110 => 27,  106 => 26,  101 => 23,  95 => 21,  89 => 19,  87 => 18,  83 => 17,  78 => 15,  73 => 12,  71 => 11,  69 => 10,  67 => 9,  65 => 8,  62 => 7,  60 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/shared/helper/money.html.twig' as money %}

{% set order = hookable_metadata.context.resource %}

{% set order_promotion_adjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT') %}
{% set unit_promotion_adjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_UNIT_PROMOTION_ADJUSTMENT') %}

{% set order_promotion_adjustments = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(order_promotion_adjustment)) %}
{% set unit_promotion_adjustments = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(unit_promotion_adjustment)) %}
{% set promotion_adjustments = order_promotion_adjustments|merge(unit_promotion_adjustments) %}
{% set total_adjustments = promotion_adjustments|reduce((carry, v) => carry + v) %}

<tr>
    <td>
        <strong>{{ 'sylius.ui.promotion_total'|trans }}:</strong>
    </td>
    <td class=\"text-end\" {{ sylius_test_html_attribute('promotion-total') }}>
        {% if total_adjustments == 0 %}
            <p>{{ 'sylius.ui.no_promotion'|trans }}</p>
        {% else %}
            {{ money.format(total_adjustments, order.currencyCode) }}
        {% endif %}
    </td>
</tr>

{% for label, amount in promotion_adjustments  %}
    <tr class=\"text-muted\" {{ sylius_test_html_attribute('promotion', label) }}>
        <td>
            <div class=\"ps-2\">
                &bull; {{ label }}:
            </div>
        </td>
        <td class=\"text-end\" {{ sylius_test_html_attribute('discount') }}>
            {{ money.format(amount, order.currencyCode) }}
        </td>
    </tr>
{% endfor %}
", "@SyliusAdmin/order/show/content/sections/summary/promotion_total.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/order/show/content/sections/summary/promotion_total.html.twig");
    }
}
