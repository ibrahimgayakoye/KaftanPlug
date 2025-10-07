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

/* @SyliusShop/shared/order/show/summary/table_summary/discount/value.html.twig */
class __TwigTemplate_8b36cb5d8f9f1c4a8641011c34f2fc9a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/order/show/summary/table_summary/discount/value.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/order/show/summary/table_summary/discount/value.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/shared/macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["order"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "order", [], "any", false, false, false, 3);
        // line 4
        $context["order_promotion_adjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 5
        $context["order_promotions"] = $this->env->getFunction('sylius_aggregate_adjustments')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "adjustmentsRecursively", [(isset($context["order_promotion_adjustment"]) || array_key_exists("order_promotion_adjustment", $context) ? $context["order_promotion_adjustment"] : (function () { throw new RuntimeError('Variable "order_promotion_adjustment" does not exist.', 5, $this->source); })())], "method", false, false, false, 5));
        // line 6
        yield "
<td class=\"text-end\" ";
        // line 7
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("promotion-total");
        yield ">
    ";
        // line 8
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 8, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "orderPromotionTotal", [], "any", false, false, false, 8)]);
        yield "

    ";
        // line 10
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "orderPromotionTotal", [], "any", false, false, false, 10) != 0)) {
            // line 11
            yield "        <div ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("order-promotions-details");
            yield ">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["order_promotions"]) || array_key_exists("order_promotions", $context) ? $context["order_promotions"] : (function () { throw new RuntimeError('Variable "order_promotions" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 13
                yield "                <div>
                    <small class=\"text-body-tertiary\">
                        ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield ": ";
                yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 15, $this->getSourceContext())->macro_convertAndFormat(...[$context["value"]]);
                yield "
                    </small>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "        </div>
    ";
        }
        // line 21
        yield "</td>
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
        return "@SyliusShop/shared/order/show/summary/table_summary/discount/value.html.twig";
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
        return array (  102 => 21,  98 => 19,  86 => 15,  82 => 13,  78 => 12,  73 => 11,  71 => 10,  66 => 8,  62 => 7,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/shared/macro/money.html.twig\" as money %}

{% set order = hookable_metadata.context.order %}
{% set order_promotion_adjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT') %}
{% set order_promotions = sylius_aggregate_adjustments(order.adjustmentsRecursively(order_promotion_adjustment)) %}

<td class=\"text-end\" {{ sylius_test_html_attribute('promotion-total') }}>
    {{ money.convertAndFormat(order.orderPromotionTotal)  }}

    {% if order.orderPromotionTotal != 0 %}
        <div {{ sylius_test_html_attribute('order-promotions-details') }}>
            {% for key, value in order_promotions %}
                <div>
                    <small class=\"text-body-tertiary\">
                        {{ key }}: {{ money.convertAndFormat(value) }}
                    </small>
                </div>
            {% endfor %}
        </div>
    {% endif %}
</td>
", "@SyliusShop/shared/order/show/summary/table_summary/discount/value.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/order/show/summary/table_summary/discount/value.html.twig");
    }
}
