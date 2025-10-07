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

/* @SyliusAdmin/channel_pricing_log_entry/index/content/header/breadcrumbs.html.twig */
class __TwigTemplate_bdfd2f02337a3faf6b9220fb2aa561d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/channel_pricing_log_entry/index/content/header/breadcrumbs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/channel_pricing_log_entry/index/content/header/breadcrumbs.html.twig"));

        // line 1
        $macros["_v0"] = $this->macros["_v0"] = $this->load("@SyliusAdmin/shared/helper/breadcrumbs.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["configuration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "resources", [], "any", false, false, false, 3), "requestConfiguration", [], "any", false, false, false, 3);
        // line 4
        yield "
";
        // line 5
        $context["product_variant"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "product_variant", [], "any", false, false, false, 5);
        // line 6
        $context["product"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "product_variant", [], "any", false, false, false, 6), "product", [], "any", false, false, false, 6);
        // line 7
        yield "
";
        // line 8
        yield $macros["_v0"]->getTemplateForMacro("macro_breadcrumbs", $context, 8, $this->getSourceContext())->macro_breadcrumbs(...[[["name" => "sylius.ui.dashboard", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard"), "active" => false], ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.products"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_index"), "active" => false], ["name" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 11
($context["product"] ?? null), "name", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "code", [], "any", false, false, false, 11))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "code", [], "any", false, false, false, 11))), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "active" => false], ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.variants"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_variant_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source,         // line 12
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "active" => false], ["name" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 13
($context["product_variant"] ?? null), "name", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new RuntimeError('Variable "product_variant" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new RuntimeError('Variable "product_variant" does not exist.', 13, $this->source); })()), "code", [], "any", false, false, false, 13))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new RuntimeError('Variable "product_variant" does not exist.', 13, $this->source); })()), "code", [], "any", false, false, false, 13))), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_variant_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new RuntimeError('Variable "product_variant" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "active" => false], ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.price_history"), "active" => true]]]);
        // line 15
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
        return "@SyliusAdmin/channel_pricing_log_entry/index/content/header/breadcrumbs.html.twig";
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
        return array (  70 => 15,  68 => 13,  67 => 12,  66 => 11,  65 => 8,  62 => 7,  60 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% from '@SyliusAdmin/shared/helper/breadcrumbs.html.twig' import breadcrumbs %}

{% set configuration = hookable_metadata.context.resources.requestConfiguration %}

{% set product_variant = configuration.vars.product_variant %}
{% set product = configuration.vars.product_variant.product %}

{{ breadcrumbs([
    { name: 'sylius.ui.dashboard', url: path('sylius_admin_dashboard'), active: false },
    { name: 'sylius.ui.products'|trans, url: path('sylius_admin_product_index'), active: false },
    { name: product.name|default(product.code), url: path('sylius_admin_product_show', {'id': product.id }), active: false },
    { name: 'sylius.ui.variants'|trans, url: path('sylius_admin_product_variant_index', {'productId': product.id }), active: false },
    { name: product_variant.name|default(product_variant.code), url: path('sylius_admin_product_variant_update', {'id': product_variant.id, 'productId': product.id }), active: false },
    { name: 'sylius.ui.price_history'|trans, active: true }
]) }}
", "@SyliusAdmin/channel_pricing_log_entry/index/content/header/breadcrumbs.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/channel_pricing_log_entry/index/content/header/breadcrumbs.html.twig");
    }
}
