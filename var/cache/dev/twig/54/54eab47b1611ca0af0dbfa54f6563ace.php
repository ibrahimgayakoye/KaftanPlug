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

/* @SyliusShop/product/show/content/info/summary/catalog_promotions.html.twig */
class __TwigTemplate_40fb35858c0292e337e674e9e7ab02bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/summary/catalog_promotions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/summary/catalog_promotions.html.twig"));

        // line 1
        $context["variant"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 1), "variant", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "variant", [], "any", false, false, false, 1), null)) : (null));
        // line 2
        $context["applied_promotions"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 2), "appliedPromotions", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "appliedPromotions", [], "any", false, false, false, 2), [])) : ([]));
        // line 3
        $context["with_description"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 3), "withDescription", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "withDescription", [], "any", false, false, false, 3), [])) : ([]));
        // line 4
        yield "
";
        // line 5
        if ((($tmp =  !(null === (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 5, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "    ";
            $context["applied_promotions"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 6, $this->source); })()), "getChannelPricingForChannel", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 6, $this->source); })()), "channel", [], "any", false, false, false, 6)], "method", false, false, false, 6), "getAppliedPromotions", [], "method", false, false, false, 6);
            // line 7
            yield "    ";
            $context["with_description"] = true;
            // line 8
            yield "
    <div data-applied-promotions-locale=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 9, $this->source); })()), "localeCode", [], "any", false, false, false, 9), "html", null, true);
            yield "\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("applied-catalog-promotions");
            yield ">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["applied_promotions"]) || array_key_exists("applied_promotions", $context) ? $context["applied_promotions"] : (function () { throw new RuntimeError('Variable "applied_promotions" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["applied_promotion"]) {
                // line 11
                yield "            <div class=\"mb-3\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("applied-catalog-promotion");
                yield ">
                <div class=\"badge bg-success-subtle text-success\" style=\"transform: translateY(-1px)\" data-test-promotion-label>";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["applied_promotion"], "label", [], "any", false, false, false, 12), "html", null, true);
                yield "</div>
                ";
                // line 13
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["applied_promotion"], "description", [], "any", false, false, false, 13) && (isset($context["with_description"]) || array_key_exists("with_description", $context) ? $context["with_description"] : (function () { throw new RuntimeError('Variable "with_description" does not exist.', 13, $this->source); })()))) {
                    yield "<small class=\"text-success\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["applied_promotion"], "description", [], "any", false, false, false, 13), "html", null, true);
                    yield "</small>";
                }
                // line 14
                yield "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['applied_promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "    </div>
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
        return "@SyliusShop/product/show/content/info/summary/catalog_promotions.html.twig";
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
        return array (  100 => 16,  93 => 14,  87 => 13,  83 => 12,  78 => 11,  74 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  57 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set variant = hookable_metadata.context.variant|default(null) %}
{% set applied_promotions = hookable_metadata.context.appliedPromotions|default({}) %}
{% set with_description = hookable_metadata.context.withDescription|default({}) %}

{% if variant is not null %}
    {% set applied_promotions = variant.getChannelPricingForChannel(sylius.channel).getAppliedPromotions() %}
    {% set with_description = true %}

    <div data-applied-promotions-locale=\"{{ sylius.localeCode }}\" {{ sylius_test_html_attribute('applied-catalog-promotions') }}>
        {% for applied_promotion in applied_promotions %}
            <div class=\"mb-3\" {{ sylius_test_html_attribute('applied-catalog-promotion') }}>
                <div class=\"badge bg-success-subtle text-success\" style=\"transform: translateY(-1px)\" data-test-promotion-label>{{ applied_promotion.label }}</div>
                {% if applied_promotion.description and with_description %}<small class=\"text-success\">{{ applied_promotion.description }}</small>{% endif %}
            </div>
        {% endfor %}
    </div>
{% endif %}
", "@SyliusShop/product/show/content/info/summary/catalog_promotions.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/product/show/content/info/summary/catalog_promotions.html.twig");
    }
}
