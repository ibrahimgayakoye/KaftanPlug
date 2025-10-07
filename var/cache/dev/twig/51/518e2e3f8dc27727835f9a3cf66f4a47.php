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

/* @SyliusAdmin/product/show/content/page_body/general/shared/pricing/body/lowest_price_before_the_discount.html.twig */
class __TwigTemplate_a4ead6ff7e763167d33bbb30a9edb6d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/general/shared/pricing/body/lowest_price_before_the_discount.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/general/shared/pricing/body/lowest_price_before_the_discount.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/shared/helper/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["channel_pricing"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "channel_pricing", [], "any", false, false, false, 3);
        // line 4
        $context["variant"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "variant", [], "any", false, false, false, 4);
        // line 5
        yield "
";
        // line 6
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 6), "channel", [], "any", true, true, false, 6) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 6), "currency_code", [], "any", true, true, false, 6))) {
            // line 7
            yield "    <td class=\"text-end\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("lowest-price-before-the-discount", Twig\Extension\CoreExtension::sprintf("%s.%s", CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 7, $this->source); })()), "code", [], "any", false, false, false, 7), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 7, $this->source); })()), "context", [], "any", false, false, false, 7), "channel", [], "any", false, false, false, 7), "code", [], "any", false, false, false, 7)));
            yield ">
        ";
            // line 8
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel_pricing"]) || array_key_exists("channel_pricing", $context) ? $context["channel_pricing"] : (function () { throw new RuntimeError('Variable "channel_pricing" does not exist.', 8, $this->source); })()), "lowestPriceBeforeDiscount", [], "any", false, false, false, 8) != null)) {
                // line 9
                yield "            ";
                yield $macros["money"]->getTemplateForMacro("macro_format", $context, 9, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel_pricing"]) || array_key_exists("channel_pricing", $context) ? $context["channel_pricing"] : (function () { throw new RuntimeError('Variable "channel_pricing" does not exist.', 9, $this->source); })()), "lowestPriceBeforeDiscount", [], "any", false, false, false, 9), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 9, $this->source); })()), "context", [], "any", false, false, false, 9), "currency_code", [], "any", false, false, false, 9)]);
                yield "
        ";
            } else {
                // line 11
                yield "            -
        ";
            }
            // line 13
            yield "    </td>
";
        } else {
            // line 15
            yield "    <td></td>
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
        return "@SyliusAdmin/product/show/content/page_body/general/shared/pricing/body/lowest_price_before_the_discount.html.twig";
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
        return array (  83 => 15,  79 => 13,  75 => 11,  69 => 9,  67 => 8,  62 => 7,  60 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/shared/helper/money.html.twig' as money %}

{% set channel_pricing = hookable_metadata.context.channel_pricing %}
{% set variant = hookable_metadata.context.variant %}

{% if hookable_metadata.context.channel is defined and  hookable_metadata.context.currency_code is defined%}
    <td class=\"text-end\" {{ sylius_test_html_attribute('lowest-price-before-the-discount', '%s.%s'|format(variant.code, hookable_metadata.context.channel.code)) }}>
        {% if channel_pricing.lowestPriceBeforeDiscount != null %}
            {{ money.format(channel_pricing.lowestPriceBeforeDiscount, hookable_metadata.context.currency_code) }}
        {% else %}
            -
        {% endif %}
    </td>
{% else %}
    <td></td>
{% endif %}
", "@SyliusAdmin/product/show/content/page_body/general/shared/pricing/body/lowest_price_before_the_discount.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/show/content/page_body/general/shared/pricing/body/lowest_price_before_the_discount.html.twig");
    }
}
