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

/* @SyliusShop/shared/components/header/cart.html.twig */
class __TwigTemplate_bfc766c39fd60ed5ea5f33fabc28535b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/components/header/cart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/components/header/cart.html.twig"));

        // line 2
        yield "
";
        // line 3
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/shared/macro/money.html.twig", 3)->unwrap();
        // line 4
        yield "
<div class=\"col-auto position-relative\" ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 5, $this->source); })()), "html", null, true);
        yield ">
    <div data-loading>
        <div class=\"sylius-shop-loader\">
            <img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/shop/images/loader.gif", "shop"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.loading"), "html", null, true);
        yield "\" loading=\"lazy\"/>
        </div>
    </div>
    <div ";
        // line 11
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-button");
        yield ">
        <button class=\"btn btn-icon btn-transparent px-0 position-relative\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasCart\" aria-label=\"cart button\">
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:shopping-bag");
        yield "
            <span class=\"d-none d-lg-block ps-1\" ";
        // line 14
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-total");
        yield ">";
        // line 15
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 15, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 15, $this->source); })()), "itemsTotal", [], "any", false, false, false, 15)]);
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.item.choice", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 16, $this->source); })()), "totalQuantity", [], "any", false, false, false, 16)]), "html", null, true);
        yield "
        </span>
            ";
        // line 18
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 18, $this->source); })()), "totalQuantity", [], "any", false, false, false, 18) > 0)) {
            // line 19
            yield "                <span class=\"position-absolute top-0 start-0 badge rounded-pill bg-primary\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-quantity", CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 19, $this->source); })()), "totalQuantity", [], "any", false, false, false, 19));
            yield ">
                ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 20, $this->source); })()), "totalQuantity", [], "any", false, false, false, 20), "html", null, true);
            yield "
            </span>
            ";
        }
        // line 23
        yield "        </button>
    </div>
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
        return "@SyliusShop/shared/components/header/cart.html.twig";
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
        return array (  102 => 23,  96 => 20,  91 => 19,  89 => 18,  84 => 16,  82 => 15,  79 => 14,  75 => 13,  70 => 11,  62 => 8,  56 => 5,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Rendered with \\Sylius\\Bundle\\ShopBundle\\Twig\\Component\\Common\\CartComponent #}

{% import \"@SyliusShop/shared/macro/money.html.twig\" as money %}

<div class=\"col-auto position-relative\" {{ attributes }}>
    <div data-loading>
        <div class=\"sylius-shop-loader\">
            <img src=\"{{ asset('build/shop/images/loader.gif', 'shop') }}\" alt=\"{{ 'sylius.ui.loading'|trans }}\" loading=\"lazy\"/>
        </div>
    </div>
    <div {{ sylius_test_html_attribute('cart-button') }}>
        <button class=\"btn btn-icon btn-transparent px-0 position-relative\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasCart\" aria-label=\"cart button\">
            {{ ux_icon('tabler:shopping-bag') }}
            <span class=\"d-none d-lg-block ps-1\" {{ sylius_test_html_attribute('cart-total') }}>
            {{- money.convertAndFormat(cart.itemsTotal) -}}
                {{- 'sylius.ui.item.choice'|trans({'%count%': cart.totalQuantity}) }}
        </span>
            {% if cart.totalQuantity > 0 %}
                <span class=\"position-absolute top-0 start-0 badge rounded-pill bg-primary\" {{ sylius_test_html_attribute('cart-quantity', cart.totalQuantity) }}>
                {{ cart.totalQuantity }}
            </span>
            {% endif %}
        </button>
    </div>
</div>
", "@SyliusShop/shared/components/header/cart.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/components/header/cart.html.twig");
    }
}
