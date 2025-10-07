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

/* @SyliusShop/cart/index/content/form/sections/general/summary/taxes_total.html.twig */
class __TwigTemplate_738c277dfb8f748f341b8ee36d6a9432 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/cart/index/content/form/sections/general/summary/taxes_total.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/cart/index/content/form/sections/general/summary/taxes_total.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/shared/macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["cart"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "cart", [], "any", false, false, false, 3);
        // line 4
        $context["taxIncluded"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 4, $this->source); })()), "getTaxIncludedTotal", [], "method", false, false, false, 4);
        // line 5
        $context["taxExcluded"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 5, $this->source); })()), "getTaxExcludedTotal", [], "method", false, false, false, 5);
        // line 6
        yield "

<div class=\"hstack gap-2 mb-2\" ";
        // line 8
        if (((isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 8, $this->source); })()) &&  !(isset($context["taxExcluded"]) || array_key_exists("taxExcluded", $context) ? $context["taxExcluded"] : (function () { throw new RuntimeError('Variable "taxExcluded" does not exist.', 8, $this->source); })()))) {
            yield "class=\"\"";
        }
        yield ">
    <div>
        ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxes_total"), "html", null, true);
        yield ":
        ";
        // line 11
        if ((($tmp = (isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 11, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "            <div><small>(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.included_in_price"), "html", null, true);
            yield ")</small></div>
        ";
        }
        // line 14
        yield "    </div>
    <div class=\"ms-auto text-end\">
        ";
        // line 16
        if (( !(isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 16, $this->source); })()) &&  !(isset($context["taxExcluded"]) || array_key_exists("taxExcluded", $context) ? $context["taxExcluded"] : (function () { throw new RuntimeError('Variable "taxExcluded" does not exist.', 16, $this->source); })()))) {
            // line 17
            yield "            <div ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-no-tax");
            yield ">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 17, $this->getSourceContext())->macro_convertAndFormat(...[0]);
            yield "</div>
        ";
        }
        // line 19
        yield "        ";
        if ((($tmp = (isset($context["taxExcluded"]) || array_key_exists("taxExcluded", $context) ? $context["taxExcluded"] : (function () { throw new RuntimeError('Variable "taxExcluded" does not exist.', 19, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "            <div ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-tax-excluded");
            yield ">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 20, $this->getSourceContext())->macro_convertAndFormat(...[(isset($context["taxExcluded"]) || array_key_exists("taxExcluded", $context) ? $context["taxExcluded"] : (function () { throw new RuntimeError('Variable "taxExcluded" does not exist.', 20, $this->source); })())]);
            yield "</div>
        ";
        }
        // line 22
        yield "        ";
        if ((($tmp = (isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 22, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "            <div ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-tax-included");
            yield ">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 23, $this->getSourceContext())->macro_convertAndFormat(...[(isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 23, $this->source); })())]);
            yield "</div>
        ";
        }
        // line 25
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
        return "@SyliusShop/cart/index/content/form/sections/general/summary/taxes_total.html.twig";
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
        return array (  118 => 25,  110 => 23,  107 => 22,  99 => 20,  96 => 19,  88 => 17,  86 => 16,  82 => 14,  76 => 12,  74 => 11,  70 => 10,  63 => 8,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/shared/macro/money.html.twig\" as money %}

{% set cart = hookable_metadata.context.cart %}
{% set taxIncluded = cart.getTaxIncludedTotal() %}
{% set taxExcluded = cart.getTaxExcludedTotal() %}


<div class=\"hstack gap-2 mb-2\" {% if taxIncluded and not taxExcluded %}class=\"\"{% endif %}>
    <div>
        {{ 'sylius.ui.taxes_total'|trans }}:
        {% if taxIncluded %}
            <div><small>({{ 'sylius.ui.included_in_price'|trans }})</small></div>
        {% endif %}
    </div>
    <div class=\"ms-auto text-end\">
        {% if not taxIncluded and not taxExcluded %}
            <div {{ sylius_test_html_attribute('cart-no-tax') }}>{{ money.convertAndFormat(0) }}</div>
        {% endif %}
        {% if taxExcluded %}
            <div {{ sylius_test_html_attribute('cart-tax-excluded') }}>{{ money.convertAndFormat(taxExcluded) }}</div>
        {% endif %}
        {% if taxIncluded %}
            <div {{ sylius_test_html_attribute('cart-tax-included') }}>{{ money.convertAndFormat(taxIncluded) }}</div>
        {% endif %}
    </div>
</div>
", "@SyliusShop/cart/index/content/form/sections/general/summary/taxes_total.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/cart/index/content/form/sections/general/summary/taxes_total.html.twig");
    }
}
