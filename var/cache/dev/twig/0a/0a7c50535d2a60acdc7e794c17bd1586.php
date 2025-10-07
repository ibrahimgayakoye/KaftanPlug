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

/* @SyliusShop/shared/order/table/item.html.twig */
class __TwigTemplate_3294a2db34f390264f6762952f720f4c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/order/table/item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/order/table/item.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/shared/macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["unitPromotionAdjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_UNIT_PROMOTION_ADJUSTMENT");
        // line 4
        $context["unitPromotions"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "units", [], "any", false, false, false, 4), "first", [], "any", false, false, false, 4), "adjustments", [(isset($context["unitPromotionAdjustment"]) || array_key_exists("unitPromotionAdjustment", $context) ? $context["unitPromotionAdjustment"] : (function () { throw new RuntimeError('Variable "unitPromotionAdjustment" does not exist.', 4, $this->source); })())], "method", false, false, false, 4);
        // line 5
        yield "
<tr ";
        // line 6
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-row", CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "productName", [], "any", false, false, false, 6));
        yield ">
    <td class=\"border-bottom\">
        ";
        // line 8
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("sylius_shop:order_item:product_info", ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })())]);
        yield "
    </td>
    <td class=\"text-end border-bottom\">
        ";
        // line 11
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "unitPrice", [], "any", false, false, false, 11) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "discountedUnitPrice", [], "any", false, false, false, 11))) {
            // line 12
            yield "            <span ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-old-price", CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "productName", [], "any", false, false, false, 12));
            yield ">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 12, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "unitPrice", [], "any", false, false, false, 12)]);
            yield "</span>
        ";
        }
        // line 14
        yield "        <span ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-unit-price", CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "productName", [], "any", false, false, false, 14));
        yield ">";
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 14, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "discountedUnitPrice", [], "any", false, false, false, 14)]);
        yield "
            ";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "unitPrice", [], "any", false, false, false, 15) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "discountedUnitPrice", [], "any", false, false, false, 15))) {
            // line 16
            yield "                <i data-html=\"";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["unitPromotions"]) || array_key_exists("unitPromotions", $context) ? $context["unitPromotions"] : (function () { throw new RuntimeError('Variable "unitPromotions" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                yield "<div>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "label", [], "any", false, false, false, 16), "html", null, true);
                yield ": ";
                yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 16, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "amount", [], "any", false, false, false, 16)]);
                yield "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "\">
            </i>
            ";
        }
        // line 19
        yield "        </span>
    </td>
    <td class=\"text-end border-bottom\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "quantity", [], "any", false, false, false, 21), "html", null, true);
        yield "</td>
    <td class=\"text-end border-bottom\">";
        // line 22
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 22, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "subtotal", [], "any", false, false, false, 22)]);
        yield "</td>
</tr>
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
        return "@SyliusShop/shared/order/table/item.html.twig";
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
        return array (  116 => 22,  112 => 21,  108 => 19,  90 => 16,  88 => 15,  81 => 14,  73 => 12,  71 => 11,  65 => 8,  60 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/shared/macro/money.html.twig\" as money %}

{% set unitPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_UNIT_PROMOTION_ADJUSTMENT') %}
{% set unitPromotions = item.units.first.adjustments(unitPromotionAdjustment) %}

<tr {{ sylius_test_html_attribute('product-row', item.productName) }}>
    <td class=\"border-bottom\">
        {{ component('sylius_shop:order_item:product_info', { item: item }) }}
    </td>
    <td class=\"text-end border-bottom\">
        {% if item.unitPrice != item.discountedUnitPrice %}
            <span {{ sylius_test_html_attribute('product-old-price', item.productName) }}>{{ money.convertAndFormat(item.unitPrice) }}</span>
        {% endif %}
        <span {{ sylius_test_html_attribute('product-unit-price', item.productName) }}>{{ money.convertAndFormat(item.discountedUnitPrice) }}
            {% if item.unitPrice != item.discountedUnitPrice %}
                <i data-html=\"{% for promotion in unitPromotions %}<div>{{ promotion.label }}: {{ money.convertAndFormat(promotion.amount) }}</div>{% endfor %}\">
            </i>
            {% endif %}
        </span>
    </td>
    <td class=\"text-end border-bottom\">{{ item.quantity }}</td>
    <td class=\"text-end border-bottom\">{{ money.convertAndFormat(item.subtotal) }}</td>
</tr>
", "@SyliusShop/shared/order/table/item.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/order/table/item.html.twig");
    }
}
