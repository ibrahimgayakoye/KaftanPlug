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

/* @SyliusShop/shared/components/order_item/product_info.html.twig */
class __TwigTemplate_cc464f05513cc7987c01110218b1d46a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/components/order_item/product_info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/components/order_item/product_info.html.twig"));

        // line 1
        $context["variant"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })()), "variant", [], "any", false, false, false, 1);
        // line 2
        $context["product"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 2, $this->source); })()), "product", [], "any", false, false, false, 2);
        // line 3
        yield "
<div class=\"d-flex align-items-center gap-4\">
    <div class=\"flex-shrink-0 align-self-start align-self-md-auto\" style=\"width: 6rem;\">
        <div class=\"overflow-auto bg-light rounded-3\" style=\"aspect-ratio: 3/4; \">
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("sylius_shop:main_image", ["product" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 8
(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 8, $this->source); })()), "hasImages", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 8, $this->source); })())) : ((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()))), "class" => "w-100 h-100 object-fit-cover", "filter" => "sylius_shop_product_small_thumbnail"]);
        // line 11
        yield "
        </div>
    </div>
    <div>
        <div class=\"h6\">
            <a class=\"link-reset text-break\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "slug", [], "any", false, false, false, 16), "_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "translation", [], "any", false, false, false, 16), "locale", [], "any", false, false, false, 16)]), "html", null, true);
        yield "\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-name", CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "productName", [], "any", false, false, false, 16));
        yield ">
                ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "productName", [], "any", false, false, false, 17), "html", null, true);
        yield "
            </a>
        </div>

        <small class=\"text-body-tertiary\" ";
        // line 21
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-variant-code", CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 21, $this->source); })()), "code", [], "any", false, false, false, 21));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 21, $this->source); })()), "code", [], "any", false, false, false, 21), "html", null, true);
        yield "</small>

        ";
        // line 23
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "hasOptions", [], "method", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "            <div ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-options");
            yield ">
                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 25, $this->source); })()), "optionValues", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                // line 26
                yield "                    <small class=\"text-body-tertiary\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("option-name", CoreExtension::getAttribute($this->env, $this->source, $context["optionValue"], "name", [], "any", false, false, false, 26));
                yield ">
                        ";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["optionValue"], "name", [], "any", false, false, false, 27), "html", null, true);
                yield ": <span ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("option-value");
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["optionValue"], "value", [], "any", false, false, false, 27), "html", null, true);
                yield "</span>
                    </small>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['optionValue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "            </div>
        ";
        } elseif ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source,         // line 31
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "variantName", [], "any", false, false, false, 31))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "            <small class=\"text-body-tertiary\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-variant-name");
            yield ">
                ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), "variantName", [], "any", false, false, false, 33), "html", null, true);
            yield "
            </small>
        ";
        }
        // line 36
        yield "    </div>
</div>
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
        return "@SyliusShop/shared/components/order_item/product_info.html.twig";
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
        return array (  133 => 36,  127 => 33,  122 => 32,  120 => 31,  117 => 30,  104 => 27,  99 => 26,  95 => 25,  90 => 24,  88 => 23,  81 => 21,  74 => 17,  68 => 16,  61 => 11,  59 => 8,  58 => 7,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set variant = item.variant %}
{% set product = variant.product %}

<div class=\"d-flex align-items-center gap-4\">
    <div class=\"flex-shrink-0 align-self-start align-self-md-auto\" style=\"width: 6rem;\">
        <div class=\"overflow-auto bg-light rounded-3\" style=\"aspect-ratio: 3/4; \">
            {{ component('sylius_shop:main_image', {
                product: variant.hasImages ? variant : product,
                class: \"w-100 h-100 object-fit-cover\",
                filter: 'sylius_shop_product_small_thumbnail'
            }) }}
        </div>
    </div>
    <div>
        <div class=\"h6\">
            <a class=\"link-reset text-break\" href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\" {{ sylius_test_html_attribute('product-name', item.productName) }}>
                {{ item.productName }}
            </a>
        </div>

        <small class=\"text-body-tertiary\" {{ sylius_test_html_attribute('product-variant-code', variant.code) }}>{{ variant.code }}</small>

        {% if product.hasOptions() %}
            <div {{ sylius_test_html_attribute('product-options') }}>
                {% for optionValue in variant.optionValues %}
                    <small class=\"text-body-tertiary\" {{ sylius_test_html_attribute('option-name', optionValue.name) }}>
                        {{ optionValue.name }}: <span {{ sylius_test_html_attribute('option-value') }}>{{ optionValue.value }}</span>
                    </small>
                {% endfor %}
            </div>
        {% elseif item.variantName is not null %}
            <small class=\"text-body-tertiary\" {{ sylius_test_html_attribute('product-variant-name') }}>
                {{ item.variantName }}
            </small>
        {% endif %}
    </div>
</div>
", "@SyliusShop/shared/components/order_item/product_info.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/components/order_item/product_info.html.twig");
    }
}
