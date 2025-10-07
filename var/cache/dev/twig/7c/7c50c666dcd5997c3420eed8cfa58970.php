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

/* @SyliusShop/cart/index/content/form/sections/general/items/body/unit_price.html.twig */
class __TwigTemplate_798dd0d45f8256a12f83be76fdc0d8e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/cart/index/content/form/sections/general/items/body/unit_price.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/cart/index/content/form/sections/general/items/body/unit_price.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/shared/macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["item"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "item", [], "any", false, false, false, 3);
        // line 4
        $context["original_price_to_display"] = $this->extensions['Sylius\Bundle\ShopBundle\Twig\OrderItemOriginalPriceToDisplayExtension']->getOriginalPriceToDisplay((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()));
        // line 5
        yield "
<td class=\"text-black-50 text-end\">
    ";
        // line 7
        if ((($tmp =  !(null === (isset($context["original_price_to_display"]) || array_key_exists("original_price_to_display", $context) ? $context["original_price_to_display"] : (function () { throw new RuntimeError('Variable "original_price_to_display" does not exist.', 7, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "        <span ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-item-unit-regular-price");
            yield ">
            <del>";
            // line 9
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 9, $this->getSourceContext())->macro_convertAndFormat(...[(isset($context["original_price_to_display"]) || array_key_exists("original_price_to_display", $context) ? $context["original_price_to_display"] : (function () { throw new RuntimeError('Variable "original_price_to_display" does not exist.', 9, $this->source); })())]);
            yield "</del>
        </span>
    ";
        }
        // line 12
        yield "    <span ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-item-unit-price");
        yield ">
        ";
        // line 13
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 13, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "discountedUnitPrice", [], "any", false, false, false, 13)]);
        yield "
    </span>
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
        return "@SyliusShop/cart/index/content/form/sections/general/items/body/unit_price.html.twig";
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
        return array (  79 => 13,  74 => 12,  68 => 9,  63 => 8,  61 => 7,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/shared/macro/money.html.twig\" as money %}

{% set item = hookable_metadata.context.item %}
{% set original_price_to_display = sylius_order_item_original_price_to_display(item) %}

<td class=\"text-black-50 text-end\">
    {% if original_price_to_display is not null %}
        <span {{ sylius_test_html_attribute('cart-item-unit-regular-price') }}>
            <del>{{ money.convertAndFormat(original_price_to_display) }}</del>
        </span>
    {% endif %}
    <span {{ sylius_test_html_attribute('cart-item-unit-price') }}>
        {{ money.convertAndFormat(item.discountedUnitPrice) }}
    </span>
</td>
", "@SyliusShop/cart/index/content/form/sections/general/items/body/unit_price.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/cart/index/content/form/sections/general/items/body/unit_price.html.twig");
    }
}
