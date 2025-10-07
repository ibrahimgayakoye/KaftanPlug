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

/* @SyliusShop/product/show/content/info/summary/prices/lowest_price_before_discount.html.twig */
class __TwigTemplate_15b28672dbc138f5117a121a78694c8f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/summary/prices/lowest_price_before_discount.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/summary/prices/lowest_price_before_discount.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/shared/macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["variant"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "variant", [], "any", false, false, false, 3);
        // line 4
        $context["has_discount"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "has_discount", [], "any", false, false, false, 4);
        // line 5
        $context["days"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 5, $this->source); })()), "context", [], "any", false, false, false, 5), "days", [], "any", false, false, false, 5);
        // line 6
        $context["has_lowest_price"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 6, $this->source); })()), "context", [], "any", false, false, false, 6), "has_lowest_price", [], "any", false, false, false, 6);
        // line 7
        yield "
<div data-test-lowest-price-before-discount>
    ";
        // line 9
        if (((isset($context["has_discount"]) || array_key_exists("has_discount", $context) ? $context["has_discount"] : (function () { throw new RuntimeError('Variable "has_discount" does not exist.', 9, $this->source); })()) && (isset($context["has_lowest_price"]) || array_key_exists("has_lowest_price", $context) ? $context["has_lowest_price"] : (function () { throw new RuntimeError('Variable "has_lowest_price" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "        <div>
            <small class=\"text-body-tertiary\">
                ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.lowest_price_days_before_discount_was", ["%days%" => (isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 12, $this->source); })()), "%price%" => $macros["money"]->getTemplateForMacro("macro_calculateLowestPrice", $context, 12, $this->getSourceContext())->macro_calculateLowestPrice(...[(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 12, $this->source); })())])]), "html", null, true);
            yield "
            </small>
        </div>
    ";
        }
        // line 16
        yield "</div>
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
        return "@SyliusShop/product/show/content/info/summary/prices/lowest_price_before_discount.html.twig";
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
        return array (  78 => 16,  71 => 12,  67 => 10,  65 => 9,  61 => 7,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/shared/macro/money.html.twig\" as money %}

{% set variant = hookable_metadata.context.variant %}
{% set has_discount = hookable_metadata.context.has_discount %}
{% set days = hookable_metadata.context.days %}
{% set has_lowest_price = hookable_metadata.context.has_lowest_price %}

<div data-test-lowest-price-before-discount>
    {% if has_discount and has_lowest_price %}
        <div>
            <small class=\"text-body-tertiary\">
                {{ 'sylius.ui.lowest_price_days_before_discount_was'|trans({'%days%': days, '%price%': money.calculateLowestPrice(variant)}) }}
            </small>
        </div>
    {% endif %}
</div>
", "@SyliusShop/product/show/content/info/summary/prices/lowest_price_before_discount.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/product/show/content/info/summary/prices/lowest_price_before_discount.html.twig");
    }
}
