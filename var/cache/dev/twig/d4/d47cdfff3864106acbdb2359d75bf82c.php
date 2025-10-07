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

/* @SyliusShop/product/show/content/info/summary/prices.html.twig */
class __TwigTemplate_35f1193025fec51f0a633ea9dba3de5b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/summary/prices.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/summary/prices.html.twig"));

        // line 1
        $context["variant"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 1), "variant", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "variant", [], "any", false, false, false, 1), null)) : (null));
        // line 2
        yield "
";
        // line 3
        if ((($tmp =  !(null === (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 3, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    ";
            $context["has_discount"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\PriceExtension']->hasDiscount((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 4, $this->source); })()), ["channel" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 4, $this->source); })()), "channel", [], "any", false, false, false, 4)]);
            // line 5
            yield "    ";
            $context["days"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 5, $this->source); })()), "channel", [], "any", false, false, false, 5), "channelPriceHistoryConfig", [], "any", false, false, false, 5), "lowestPriceForDiscountedProductsCheckingPeriod", [], "any", false, false, false, 5);
            // line 6
            yield "    ";
            $context["has_lowest_price"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\PriceExtension']->hasLowestPriceBeforeDiscount((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 6, $this->source); })()), ["channel" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 6, $this->source); })()), "channel", [], "any", false, false, false, 6)]);
            // line 7
            yield "
    <div class=\"mb-3 pb-1\">
        ";
            // line 9
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("prices", ["variant" => (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 9, $this->source); })()), "has_discount" => (isset($context["has_discount"]) || array_key_exists("has_discount", $context) ? $context["has_discount"] : (function () { throw new RuntimeError('Variable "has_discount" does not exist.', 9, $this->source); })()), "has_lowest_price" => (isset($context["has_lowest_price"]) || array_key_exists("has_lowest_price", $context) ? $context["has_lowest_price"] : (function () { throw new RuntimeError('Variable "has_lowest_price" does not exist.', 9, $this->source); })()), "days" => (isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 9, $this->source); })())], $context, false);
            // line 10
            yield "    </div>
";
        } else {
            // line 12
            yield "    <div class=\"mb-3 pb-1\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-price", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.unavailable"));
            yield ">
        ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.unavailable"), "html", null, true);
            yield "
    </div>
";
        }
        // line 16
        yield "
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
        return "@SyliusShop/product/show/content/info/summary/prices.html.twig";
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
        return array (  86 => 16,  80 => 13,  75 => 12,  71 => 10,  68 => 9,  64 => 7,  61 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set variant = hookable_metadata.context.variant|default(null) %}

{% if variant is not null %}
    {% set has_discount = variant|sylius_has_discount({'channel': sylius.channel}) %}
    {% set days = sylius.channel.channelPriceHistoryConfig.lowestPriceForDiscountedProductsCheckingPeriod %}
    {% set has_lowest_price = variant|sylius_has_lowest_price({'channel': sylius.channel}) %}

    <div class=\"mb-3 pb-1\">
        {% hook 'prices' with { variant, has_discount, has_lowest_price, days } %}
    </div>
{% else %}
    <div class=\"mb-3 pb-1\" {{ sylius_test_html_attribute('product-price', 'sylius.ui.unavailable'|trans ) }}>
        {{ 'sylius.ui.unavailable'|trans }}
    </div>
{% endif %}

", "@SyliusShop/product/show/content/info/summary/prices.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/product/show/content/info/summary/prices.html.twig");
    }
}
