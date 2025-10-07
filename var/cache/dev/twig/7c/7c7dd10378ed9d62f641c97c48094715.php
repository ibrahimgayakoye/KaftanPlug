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

/* @SyliusShop/shared/order/show/summary/table/body/unit_price.html.twig */
class __TwigTemplate_4e0d87142dab0561c4a0cc0a832c3645 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/order/show/summary/table/body/unit_price.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/order/show/summary/table/body/unit_price.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/shared/macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["item"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "item", [], "any", false, false, false, 3);
        // line 4
        $context["unit_promotion_adjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_UNIT_PROMOTION_ADJUSTMENT");
        // line 5
        $context["unit_promotions"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "units", [], "any", false, false, false, 5), "first", [], "any", false, false, false, 5), "adjustments", [(isset($context["unit_promotion_adjustment"]) || array_key_exists("unit_promotion_adjustment", $context) ? $context["unit_promotion_adjustment"] : (function () { throw new RuntimeError('Variable "unit_promotion_adjustment" does not exist.', 5, $this->source); })())], "method", false, false, false, 5);
        // line 6
        yield "
<td class=\"text-end\">
    ";
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "unitPrice", [], "any", false, false, false, 8) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "discountedUnitPrice", [], "any", false, false, false, 8))) {
            // line 9
            yield "        <span ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-old-price", CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "productName", [], "any", false, false, false, 9));
            yield ">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 9, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "unitPrice", [], "any", false, false, false, 9)]);
            yield "</span>
    ";
        }
        // line 11
        yield "    <span ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-unit-price", CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "productName", [], "any", false, false, false, 11));
        yield ">";
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 11, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "discountedUnitPrice", [], "any", false, false, false, 11)]);
        yield "
        ";
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "unitPrice", [], "any", false, false, false, 12) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "discountedUnitPrice", [], "any", false, false, false, 12))) {
            // line 13
            yield "            <i data-html=\"";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["unit_promotions"]) || array_key_exists("unit_promotions", $context) ? $context["unit_promotions"] : (function () { throw new RuntimeError('Variable "unit_promotions" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                yield "<div>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "label", [], "any", false, false, false, 13), "html", null, true);
                yield ": ";
                yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 13, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "amount", [], "any", false, false, false, 13)]);
                yield "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "\">
            </i>
        ";
        }
        // line 16
        yield "    </span>
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
        return "@SyliusShop/shared/order/show/summary/table/body/unit_price.html.twig";
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
        return array (  100 => 16,  82 => 13,  80 => 12,  73 => 11,  65 => 9,  63 => 8,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/shared/macro/money.html.twig\" as money %}

{% set item = hookable_metadata.context.item %}
{% set unit_promotion_adjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_UNIT_PROMOTION_ADJUSTMENT') %}
{% set unit_promotions = item.units.first.adjustments(unit_promotion_adjustment) %}

<td class=\"text-end\">
    {% if item.unitPrice != item.discountedUnitPrice %}
        <span {{ sylius_test_html_attribute('product-old-price', item.productName) }}>{{ money.convertAndFormat(item.unitPrice) }}</span>
    {% endif %}
    <span {{ sylius_test_html_attribute('product-unit-price', item.productName) }}>{{ money.convertAndFormat(item.discountedUnitPrice) }}
        {% if item.unitPrice != item.discountedUnitPrice %}
            <i data-html=\"{% for promotion in unit_promotions %}<div>{{ promotion.label }}: {{ money.convertAndFormat(promotion.amount) }}</div>{% endfor %}\">
            </i>
        {% endif %}
    </span>
</td>
", "@SyliusShop/shared/order/show/summary/table/body/unit_price.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/order/show/summary/table/body/unit_price.html.twig");
    }
}
