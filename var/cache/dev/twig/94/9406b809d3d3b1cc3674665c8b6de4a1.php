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

/* @SyliusAdmin/catalog_promotion/product_variant/index/content/header/breadcrumbs.html.twig */
class __TwigTemplate_dbc3100abfbdf2d71424a923d089d582 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/catalog_promotion/product_variant/index/content/header/breadcrumbs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/catalog_promotion/product_variant/index/content/header/breadcrumbs.html.twig"));

        // line 1
        $macros["_v0"] = $this->macros["_v0"] = $this->load("@SyliusAdmin/shared/helper/breadcrumbs.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["configuration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "resources", [], "any", false, false, false, 3), "requestConfiguration", [], "any", false, false, false, 3);
        // line 4
        $context["catalog_promotion"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "catalogPromotion", [], "any", false, false, false, 4);
        // line 5
        yield "
";
        // line 6
        yield $macros["_v0"]->getTemplateForMacro("macro_breadcrumbs", $context, 6, $this->getSourceContext())->macro_breadcrumbs(...[[["name" => "sylius.ui.dashboard", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard"), "active" => false], ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.catalog_promotions"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_catalog_promotion_index"), "active" => false], ["name" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 9
($context["catalog_promotion"] ?? null), "name", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["catalog_promotion"]) || array_key_exists("catalog_promotion", $context) ? $context["catalog_promotion"] : (function () { throw new RuntimeError('Variable "catalog_promotion" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), CoreExtension::getAttribute($this->env, $this->source, (isset($context["catalog_promotion"]) || array_key_exists("catalog_promotion", $context) ? $context["catalog_promotion"] : (function () { throw new RuntimeError('Variable "catalog_promotion" does not exist.', 9, $this->source); })()), "code", [], "any", false, false, false, 9))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["catalog_promotion"]) || array_key_exists("catalog_promotion", $context) ? $context["catalog_promotion"] : (function () { throw new RuntimeError('Variable "catalog_promotion" does not exist.', 9, $this->source); })()), "code", [], "any", false, false, false, 9))), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_catalog_promotion_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["catalog_promotion"]) || array_key_exists("catalog_promotion", $context) ? $context["catalog_promotion"] : (function () { throw new RuntimeError('Variable "catalog_promotion" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "active" => false], ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.variants"), "active" => true]]]);
        // line 11
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
        return "@SyliusAdmin/catalog_promotion/product_variant/index/content/header/breadcrumbs.html.twig";
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
        return array (  63 => 11,  61 => 9,  60 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% from '@SyliusAdmin/shared/helper/breadcrumbs.html.twig' import breadcrumbs %}

{% set configuration = hookable_metadata.context.resources.requestConfiguration %}
{% set catalog_promotion = configuration.vars.catalogPromotion %}

{{ breadcrumbs([
    { name: 'sylius.ui.dashboard', url: path('sylius_admin_dashboard'), active: false },
    { name: 'sylius.ui.catalog_promotions'|trans, url: path('sylius_admin_catalog_promotion_index'), active: false },
    { name: catalog_promotion.name|default(catalog_promotion.code), url: path('sylius_admin_catalog_promotion_update', {'id': catalog_promotion.id }), active: false },
    { name: 'sylius.ui.variants'|trans, active: true },
]) }}
", "@SyliusAdmin/catalog_promotion/product_variant/index/content/header/breadcrumbs.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/catalog_promotion/product_variant/index/content/header/breadcrumbs.html.twig");
    }
}
