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

/* @SyliusShop/product/show/content/info/summary/add_to_cart.html.twig */
class __TwigTemplate_ea149f2d0e215f14acfcbaa8592a6c5e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/summary/add_to_cart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/summary/add_to_cart.html.twig"));

        // line 2
        yield "
";
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), ["@SyliusShop/form/theme.html.twig"], true);
        // line 4
        yield "
<div class=\"position-relative\" ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 5, $this->source); })()), "html", null, true);
        yield ">
    ";
        // line 6
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "enabledVariants", [], "any", false, false, false, 6), "empty", [], "method", false, false, false, 6) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "simple", [], "any", false, false, false, 6) &&  !$this->env->getFunction('sylius_inventory_is_available')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "enabledVariants", [], "any", false, false, false, 6), "first", [], "any", false, false, false, 6))))) {
            // line 7
            yield "        <div ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-out-of-stock");
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.out_of_stock"), "html", null, true);
            yield "</div>
    ";
        } else {
            // line 9
            yield "        <div data-loading>
            <div class=\"sylius-shop-loader\">
                <img src=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/shop/images/loader.gif", "shop"), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.loading"), "html", null, true);
            yield "\"/>
            </div>
        </div>
        <div class=\"my-4\" ";
            // line 14
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-selecting-variant");
            yield ">
            ";
            // line 15
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["data-action" => "live#action:prevent live#\$render", "data-live-action-param" => "addToCart"]]);
            yield "
            ";
            // line 16
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'errors');
            yield "

            ";
            // line 18
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("add_to_cart", ["product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })())], $context, false);
            // line 19
            yield "
            ";
            // line 20
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "_token", [], "any", false, false, false, 20), 'row');
            yield "
            ";
            // line 21
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_end', ["render_rest" => false]);
            yield "
        </div>
    ";
        }
        // line 24
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
        return "@SyliusShop/product/show/content/info/summary/add_to_cart.html.twig";
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
        return array (  111 => 24,  105 => 21,  101 => 20,  98 => 19,  95 => 18,  90 => 16,  86 => 15,  82 => 14,  74 => 11,  70 => 9,  62 => 7,  60 => 6,  56 => 5,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Rendered with \\Sylius\\Bundle\\ShopBundle\\Twig\\Component\\Product\\AddToCartFormComponent #}

{% form_theme form '@SyliusShop/form/theme.html.twig' %}

<div class=\"position-relative\" {{ attributes }}>
    {% if product.enabledVariants.empty() or product.simple and not sylius_inventory_is_available(product.enabledVariants.first) %}
        <div {{ sylius_test_html_attribute('product-out-of-stock') }}>{{ 'sylius.ui.out_of_stock'|trans }}</div>
    {% else %}
        <div data-loading>
            <div class=\"sylius-shop-loader\">
                <img src=\"{{ asset('build/shop/images/loader.gif', 'shop') }}\" alt=\"{{ 'sylius.ui.loading'|trans }}\"/>
            </div>
        </div>
        <div class=\"my-4\" {{ sylius_test_html_attribute('product-selecting-variant') }}>
            {{ form_start(form, {'attr': {'data-action': 'live#action:prevent live#\$render', 'data-live-action-param': 'addToCart'}}) }}
            {{ form_errors(form) }}

            {% hook 'add_to_cart' with { product, form } %}

            {{ form_row(form._token) }}
            {{ form_end(form, {'render_rest': false}) }}
        </div>
    {% endif %}
</div>
", "@SyliusShop/product/show/content/info/summary/add_to_cart.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/product/show/content/info/summary/add_to_cart.html.twig");
    }
}
