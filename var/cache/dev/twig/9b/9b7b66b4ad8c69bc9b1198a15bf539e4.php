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

/* @SyliusShop/product/index/content/breadcrumbs.html.twig */
class __TwigTemplate_16e2be5f98192844fb311552d7ac885d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/index/content/breadcrumbs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/index/content/breadcrumbs.html.twig"));

        // line 1
        $macros["_v0"] = $this->macros["_v0"] = $this->load("@SyliusShop/shared/breadcrumbs.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["items"] = [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.home")]];
        // line 4
        $context["ancestors"] = Twig\Extension\CoreExtension::reverse($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 4, $this->source); })()), "ancestors", [], "any", false, false, false, 4));
        // line 5
        yield "
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ancestors"]) || array_key_exists("ancestors", $context) ? $context["ancestors"] : (function () { throw new RuntimeError('Variable "ancestors" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ancestor"]) {
            // line 7
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["ancestor"], "isRoot", [], "method", false, false, false, 7) ||  !CoreExtension::getAttribute($this->env, $this->source, $context["ancestor"], "enabled", [], "any", false, false, false, 7))) {
                // line 8
                yield "        ";
                $context["items"] = Twig\Extension\CoreExtension::merge((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 8, $this->source); })()), [["label" => CoreExtension::getAttribute($this->env, $this->source, $context["ancestor"], "name", [], "any", false, false, false, 8)]]);
                // line 9
                yield "    ";
            } else {
                // line 10
                yield "        ";
                $context["items"] = Twig\Extension\CoreExtension::merge((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 10, $this->source); })()), [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["ancestor"], "slug", [], "any", false, false, false, 10), "_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ancestor"], "translation", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10)]), "label" => CoreExtension::getAttribute($this->env, $this->source, $context["ancestor"], "name", [], "any", false, false, false, 10)]]);
                // line 11
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ancestor'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "
";
        // line 14
        $context["items"] = Twig\Extension\CoreExtension::merge((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 14, $this->source); })()), [["label" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "active" => true]]);
        // line 15
        yield "
";
        // line 16
        yield $macros["_v0"]->getTemplateForMacro("macro_breadcrumbs", $context, 16, $this->getSourceContext())->macro_breadcrumbs(...[(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 16, $this->source); })())]);
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
        return "@SyliusShop/product/index/content/breadcrumbs.html.twig";
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
        return array (  91 => 16,  88 => 15,  86 => 14,  83 => 13,  76 => 11,  73 => 10,  70 => 9,  67 => 8,  64 => 7,  60 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% from '@SyliusShop/shared/breadcrumbs.html.twig' import breadcrumbs as breadcrumbs %}

{% set items = [{ path: path('sylius_shop_homepage'), label: 'sylius.ui.home'|trans }] %}
{% set ancestors = taxon.ancestors|reverse %}

{% for ancestor in ancestors %}
    {% if ancestor.isRoot() or not ancestor.enabled %}
        {% set items = items|merge([{ label: ancestor.name }]) %}
    {% else %}
        {% set items = items|merge([{ path: path('sylius_shop_product_index', {'slug': ancestor.slug, '_locale': ancestor.translation.locale}), label: ancestor.name }]) %}
    {% endif %}
{% endfor %}

{% set items = items|merge([{ label: taxon.name, active: true }]) %}

{{ breadcrumbs(items) }}
", "@SyliusShop/product/index/content/breadcrumbs.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/product/index/content/breadcrumbs.html.twig");
    }
}
