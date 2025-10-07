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

/* @SyliusShop/product/common/macro/breadcrumbs.html.twig */
class __TwigTemplate_f666fa68d74c5948387844be54d844c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/common/macro/breadcrumbs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/common/macro/breadcrumbs.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_product_breadcrumbs($product = null, $additional_items = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "product" => $product,
            "additional_items" => $additional_items,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "product_breadcrumbs"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "product_breadcrumbs"));

            // line 2
            yield "    ";
            $macros["_v0"] = $this->load("@SyliusShop/shared/breadcrumbs.html.twig", 2)->unwrap();
            // line 3
            yield "
    ";
            // line 4
            $context["items"] = Twig\Extension\CoreExtension::merge(((array_key_exists("items", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 4, $this->source); })()), [])) : ([])), [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.home")]]);
            // line 8
            yield "
    ";
            // line 9
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "mainTaxon", [], "any", false, false, false, 9))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 10
                yield "        ";
                $context["taxon"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "mainTaxon", [], "any", false, false, false, 10);
                // line 11
                yield "        ";
                $context["ancestors"] = Twig\Extension\CoreExtension::reverse($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 11, $this->source); })()), "ancestors", [], "any", false, false, false, 11));
                // line 12
                yield "
        ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ancestors"]) || array_key_exists("ancestors", $context) ? $context["ancestors"] : (function () { throw new RuntimeError('Variable "ancestors" does not exist.', 13, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["ancestor"]) {
                    // line 14
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["ancestor"], "isRoot", [], "method", false, false, false, 14) ||  !CoreExtension::getAttribute($this->env, $this->source, $context["ancestor"], "enabled", [], "any", false, false, false, 14))) {
                        // line 15
                        yield "                ";
                        $context["items"] = Twig\Extension\CoreExtension::merge((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 15, $this->source); })()), [["label" => CoreExtension::getAttribute($this->env, $this->source, $context["ancestor"], "name", [], "any", false, false, false, 15)]]);
                        // line 16
                        yield "            ";
                    } else {
                        // line 17
                        yield "                ";
                        $context["items"] = Twig\Extension\CoreExtension::merge((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 17, $this->source); })()), [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", ["slug" => CoreExtension::getAttribute($this->env, $this->source,                         // line 18
$context["ancestor"], "slug", [], "any", false, false, false, 18), "_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ancestor"], "translation", [], "any", false, false, false, 18), "locale", [], "any", false, false, false, 18)]), "label" => CoreExtension::getAttribute($this->env, $this->source,                         // line 19
$context["ancestor"], "name", [], "any", false, false, false, 19)]]);
                        // line 20
                        yield "            ";
                    }
                    // line 21
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['ancestor'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                yield "
        ";
                // line 23
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 23, $this->source); })()), "enabled", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 24
                    yield "            ";
                    $context["items"] = Twig\Extension\CoreExtension::merge((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 24, $this->source); })()), [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", ["slug" => CoreExtension::getAttribute($this->env, $this->source,                     // line 25
(isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 25, $this->source); })()), "slug", [], "any", false, false, false, 25), "_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 25, $this->source); })()), "translation", [], "any", false, false, false, 25), "locale", [], "any", false, false, false, 25)]), "label" => CoreExtension::getAttribute($this->env, $this->source,                     // line 26
(isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26)]]);
                    // line 27
                    yield "        ";
                } else {
                    // line 28
                    yield "            ";
                    $context["items"] = Twig\Extension\CoreExtension::merge((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 28, $this->source); })()), [["label" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28)]]);
                    // line 29
                    yield "        ";
                }
                // line 30
                yield "    ";
            }
            // line 31
            yield "
    ";
            // line 32
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["additional_items"]) || array_key_exists("additional_items", $context) ? $context["additional_items"] : (function () { throw new RuntimeError('Variable "additional_items" does not exist.', 32, $this->source); })())) > 0)) {
                // line 33
                yield "        ";
                $context["items"] = Twig\Extension\CoreExtension::merge((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 33, $this->source); })()), [["label" => CoreExtension::getAttribute($this->env, $this->source,                 // line 34
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source,                 // line 35
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "slug", [], "any", false, false, false, 35), "_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "translation", [], "any", false, false, false, 35), "locale", [], "any", false, false, false, 35)])]]);
                // line 36
                yield "    ";
            } else {
                // line 37
                yield "        ";
                $context["items"] = Twig\Extension\CoreExtension::merge((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 37, $this->source); })()), [["label" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "active" => true]]);
                // line 38
                yield "    ";
            }
            // line 39
            yield "
    ";
            // line 40
            $context["items"] = Twig\Extension\CoreExtension::merge((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 40, $this->source); })()), (isset($context["additional_items"]) || array_key_exists("additional_items", $context) ? $context["additional_items"] : (function () { throw new RuntimeError('Variable "additional_items" does not exist.', 40, $this->source); })()));
            // line 41
            yield "
    ";
            // line 42
            yield $macros["_v0"]->getTemplateForMacro("macro_breadcrumbs", $context, 42, $this->getSourceContext())->macro_breadcrumbs(...[(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 42, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusShop/product/common/macro/breadcrumbs.html.twig";
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
        return array (  174 => 42,  171 => 41,  169 => 40,  166 => 39,  163 => 38,  160 => 37,  157 => 36,  155 => 35,  154 => 34,  152 => 33,  150 => 32,  147 => 31,  144 => 30,  141 => 29,  138 => 28,  135 => 27,  133 => 26,  132 => 25,  130 => 24,  128 => 23,  125 => 22,  119 => 21,  116 => 20,  114 => 19,  113 => 18,  111 => 17,  108 => 16,  105 => 15,  102 => 14,  98 => 13,  95 => 12,  92 => 11,  89 => 10,  87 => 9,  84 => 8,  82 => 4,  79 => 3,  76 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro product_breadcrumbs(product, additional_items = []) %}
    {% from '@SyliusShop/shared/breadcrumbs.html.twig' import breadcrumbs as breadcrumbs %}

    {% set items = items|default([])|merge([{
        path: path('sylius_shop_homepage'),
        label: 'sylius.ui.home'|trans
    }]) %}

    {% if product.mainTaxon is not null %}
        {% set taxon = product.mainTaxon %}
        {% set ancestors = taxon.ancestors|reverse %}

        {% for ancestor in ancestors %}
            {% if ancestor.isRoot() or not ancestor.enabled %}
                {% set items = items|merge([{ label: ancestor.name }]) %}
            {% else %}
                {% set items = items|merge([{
                    path: path('sylius_shop_product_index',{'slug': ancestor.slug, '_locale': ancestor.translation.locale}),
                    label: ancestor.name }]) %}
            {% endif %}
        {% endfor %}

        {% if taxon.enabled %}
            {% set items = items|merge([{
                path: path('sylius_shop_product_index', {'slug': taxon.slug, '_locale': taxon.translation.locale}),
                label: taxon.name }]) %}
        {% else %}
            {% set items = items|merge([{ label: taxon.name }]) %}
        {% endif %}
    {% endif %}

    {% if additional_items|length > 0 %}
        {% set items = items|merge([{
            label: product.name,
            path: path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }]) %}
    {% else %}
        {% set items = items|merge([{ label: product.name, active: true }]) %}
    {% endif %}

    {% set items = items|merge(additional_items) %}

    {{ breadcrumbs(items) }}
{% endmacro %}
", "@SyliusShop/product/common/macro/breadcrumbs.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/product/common/macro/breadcrumbs.html.twig");
    }
}
