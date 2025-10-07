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

/* @SyliusShop/product/show/content/info/summary/add_to_cart/variants/table/body/price.html.twig */
class __TwigTemplate_4f1121d5b46973eaf7d8105553561b2b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/summary/add_to_cart/variants/table/body/price.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/summary/add_to_cart/variants/table/body/price.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/shared/macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["variant"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "variant", [], "any", false, false, false, 3);
        // line 4
        $context["channel_pricing"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 4, $this->source); })()), "getChannelPricingForChannel", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 4, $this->source); })()), "channel", [], "any", false, false, false, 4)], "method", false, false, false, 4);
        // line 5
        $context["applied_promotions"] = Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel_pricing"]) || array_key_exists("channel_pricing", $context) ? $context["channel_pricing"] : (function () { throw new RuntimeError('Variable "channel_pricing" does not exist.', 5, $this->source); })()), "appliedPromotions", [], "any", false, false, false, 5), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return ["label" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 5, $this->source); })()), "label", [], "any", false, false, false, 5), "description" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 5, $this->source); })()), "description", [], "any", false, false, false, 5)]; });
        // line 6
        $context["days"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 6, $this->source); })()), "channel", [], "any", false, false, false, 6), "channelPriceHistoryConfig", [], "any", false, false, false, 6), "lowestPriceForDiscountedProductsCheckingPeriod", [], "any", false, false, false, 6);
        // line 7
        $context["has_discount"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\PriceExtension']->hasDiscount((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 7, $this->source); })()), ["channel" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 7, $this->source); })()), "channel", [], "any", false, false, false, 7)]);
        // line 8
        $context["has_lowest_price"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\PriceExtension']->hasLowestPriceBeforeDiscount((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 8, $this->source); })()), ["channel" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 8, $this->source); })()), "channel", [], "any", false, false, false, 8)]);
        // line 9
        yield "
";
        // line 10
        if ((($tmp = (isset($context["has_discount"]) || array_key_exists("has_discount", $context) ? $context["has_discount"] : (function () { throw new RuntimeError('Variable "has_discount" does not exist.', 10, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "    ";
            $context["original_int"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel_pricing"]) || array_key_exists("channel_pricing", $context) ? $context["channel_pricing"] : (function () { throw new RuntimeError('Variable "channel_pricing" does not exist.', 11, $this->source); })()), "originalPrice", [], "any", false, false, false, 11);
            // line 12
            yield "    ";
            $context["current_int"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel_pricing"]) || array_key_exists("channel_pricing", $context) ? $context["channel_pricing"] : (function () { throw new RuntimeError('Variable "channel_pricing" does not exist.', 12, $this->source); })()), "price", [], "any", false, false, false, 12);
            // line 13
            yield "    ";
            $context["discount_pct"] = Twig\Extension\CoreExtension::round(((((isset($context["original_int"]) || array_key_exists("original_int", $context) ? $context["original_int"] : (function () { throw new RuntimeError('Variable "original_int" does not exist.', 13, $this->source); })()) - (isset($context["current_int"]) || array_key_exists("current_int", $context) ? $context["current_int"] : (function () { throw new RuntimeError('Variable "current_int" does not exist.', 13, $this->source); })())) / (isset($context["original_int"]) || array_key_exists("original_int", $context) ? $context["original_int"] : (function () { throw new RuntimeError('Variable "original_int" does not exist.', 13, $this->source); })())) * 100), 0);
        }
        // line 15
        yield "
<td class=\"text-end\"
    data-applied-promotions=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["applied_promotions"]) || array_key_exists("applied_promotions", $context) ? $context["applied_promotions"] : (function () { throw new RuntimeError('Variable "applied_promotions" does not exist.', 17, $this->source); })())), "html", null, true);
        yield "\"
    ";
        // line 18
        if ((($tmp = (isset($context["has_discount"]) || array_key_exists("has_discount", $context) ? $context["has_discount"] : (function () { throw new RuntimeError('Variable "has_discount" does not exist.', 18, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "    data-original-price=\"";
            yield $macros["money"]->getTemplateForMacro("macro_calculateOriginalPrice", $context, 19, $this->getSourceContext())->macro_calculateOriginalPrice(...[(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 19, $this->source); })())]);
            yield "\"
    ";
            // line 20
            if ((($tmp = (isset($context["has_lowest_price"]) || array_key_exists("has_lowest_price", $context) ? $context["has_lowest_price"] : (function () { throw new RuntimeError('Variable "has_lowest_price" does not exist.', 20, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 21
                yield "        data-lowest-price-before-discount=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.lowest_price_days_before_discount_was", ["%days%" =>                 // line 23
(isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 23, $this->source); })()), "%price%" => $macros["money"]->getTemplateForMacro("macro_calculateLowestPrice", $context, 24, $this->getSourceContext())->macro_calculateLowestPrice(...[                // line 24
(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 24, $this->source); })())])]), "html", null, true);
                // line 26
                yield "\"
    ";
            }
            // line 28
            yield "    ";
        }
        yield ">

    ";
        // line 30
        if ((($tmp = (isset($context["has_discount"]) || array_key_exists("has_discount", $context) ? $context["has_discount"] : (function () { throw new RuntimeError('Variable "has_discount" does not exist.', 30, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "        <div class=\"d-inline-flex align-items-center gap-2\">
            <span class=\"fw-semibold text-success\">
                ";
            // line 33
            yield $macros["money"]->getTemplateForMacro("macro_calculatePrice", $context, 33, $this->getSourceContext())->macro_calculatePrice(...[(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 33, $this->source); })())]);
            yield "
            </span>

            <span class=\"text-muted text-decoration-line-through small\">
                ";
            // line 37
            yield $macros["money"]->getTemplateForMacro("macro_calculateOriginalPrice", $context, 37, $this->getSourceContext())->macro_calculateOriginalPrice(...[(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 37, $this->source); })())]);
            yield "
            </span>

            <span class=\"badge bg-danger-subtle text-danger\">
                -";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["discount_pct"]) || array_key_exists("discount_pct", $context) ? $context["discount_pct"] : (function () { throw new RuntimeError('Variable "discount_pct" does not exist.', 41, $this->source); })()), "html", null, true);
            yield "%
            </span>
        </div>
    ";
        } else {
            // line 45
            yield "        <span class=\"fw-semibold\">";
            yield $macros["money"]->getTemplateForMacro("macro_calculatePrice", $context, 45, $this->getSourceContext())->macro_calculatePrice(...[(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 45, $this->source); })())]);
            yield "</span>
    ";
        }
        // line 47
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
        return "@SyliusShop/product/show/content/info/summary/add_to_cart/variants/table/body/price.html.twig";
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
        return array (  145 => 47,  139 => 45,  132 => 41,  125 => 37,  118 => 33,  114 => 31,  112 => 30,  106 => 28,  102 => 26,  100 => 24,  99 => 23,  97 => 21,  95 => 20,  90 => 19,  88 => 18,  84 => 17,  80 => 15,  76 => 13,  73 => 12,  70 => 11,  68 => 10,  65 => 9,  63 => 8,  61 => 7,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/shared/macro/money.html.twig\" as money %}

{% set variant = hookable_metadata.context.variant %}
{% set channel_pricing = variant.getChannelPricingForChannel(sylius.channel) %}
{% set applied_promotions = channel_pricing.appliedPromotions|map(p => {'label': p.label, 'description': p.description}) %}
{% set days = sylius.channel.channelPriceHistoryConfig.lowestPriceForDiscountedProductsCheckingPeriod %}
{% set has_discount = variant|sylius_has_discount({'channel': sylius.channel}) %}
{% set has_lowest_price = variant|sylius_has_lowest_price({'channel': sylius.channel}) %}

{% if has_discount %}
    {% set original_int = channel_pricing.originalPrice %}
    {% set current_int  = channel_pricing.price %}
    {% set discount_pct = ((original_int - current_int) / original_int * 100)|round(0) %}
{% endif %}

<td class=\"text-end\"
    data-applied-promotions=\"{{ applied_promotions|json_encode }}\"
    {% if has_discount %}
    data-original-price=\"{{ money.calculateOriginalPrice(variant) }}\"
    {% if has_lowest_price %}
        data-lowest-price-before-discount=\"{{
        'sylius.ui.lowest_price_days_before_discount_was'|trans({
            '%days%': days,
            '%price%': money.calculateLowestPrice(variant)
        })
        }}\"
    {% endif %}
    {% endif %}>

    {% if has_discount %}
        <div class=\"d-inline-flex align-items-center gap-2\">
            <span class=\"fw-semibold text-success\">
                {{ money.calculatePrice(variant) }}
            </span>

            <span class=\"text-muted text-decoration-line-through small\">
                {{ money.calculateOriginalPrice(variant) }}
            </span>

            <span class=\"badge bg-danger-subtle text-danger\">
                -{{ discount_pct }}%
            </span>
        </div>
    {% else %}
        <span class=\"fw-semibold\">{{ money.calculatePrice(variant) }}</span>
    {% endif %}
</td>
", "@SyliusShop/product/show/content/info/summary/add_to_cart/variants/table/body/price.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/product/show/content/info/summary/add_to_cart/variants/table/body/price.html.twig");
    }
}
