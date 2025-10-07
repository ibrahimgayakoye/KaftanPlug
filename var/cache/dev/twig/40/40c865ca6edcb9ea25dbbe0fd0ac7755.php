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

/* @SyliusShop/shared/layout/base/header/content/cart_button.html.twig */
class __TwigTemplate_44c238ef93e5aa4eb93ae6367616f2f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/layout/base/header/content/cart_button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/layout/base/header/content/cart_button.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/shared/macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
<div ";
        // line 3
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-button");
        yield ">
    <button class=\"btn btn-icon btn-transparent px-0 position-relative\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasCart\">
        ";
        // line 5
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:shopping-bag");
        yield "
        <span class=\"d-none d-lg-block ps-1\" ";
        // line 6
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-total");
        yield ">";
        // line 7
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 7, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 7, $this->source); })()), "itemsTotal", [], "any", false, false, false, 7)]);
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.item.choice", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 8, $this->source); })()), "totalQuantity", [], "any", false, false, false, 8)]), "html", null, true);
        yield "
        </span>
        ";
        // line 10
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 10, $this->source); })()), "totalQuantity", [], "any", false, false, false, 10) > 0)) {
            // line 11
            yield "            <span class=\"position-absolute top-0 start-0 badge rounded-pill bg-primary\">
                ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 12, $this->source); })()), "totalQuantity", [], "any", false, false, false, 12), "html", null, true);
            yield "
            </span>
        ";
        }
        // line 15
        yield "    </button>
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
        return "@SyliusShop/shared/layout/base/header/content/cart_button.html.twig";
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
        return array (  83 => 15,  77 => 12,  74 => 11,  72 => 10,  67 => 8,  65 => 7,  62 => 6,  58 => 5,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/shared/macro/money.html.twig\" as money %}

<div {{ sylius_test_html_attribute('cart-button') }}>
    <button class=\"btn btn-icon btn-transparent px-0 position-relative\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasCart\">
        {{ ux_icon('tabler:shopping-bag') }}
        <span class=\"d-none d-lg-block ps-1\" {{ sylius_test_html_attribute('cart-total') }}>
            {{- money.convertAndFormat(cart.itemsTotal) -}}
            {{- 'sylius.ui.item.choice'|trans({'%count%': cart.totalQuantity}) }}
        </span>
        {% if cart.totalQuantity > 0 %}
            <span class=\"position-absolute top-0 start-0 badge rounded-pill bg-primary\">
                {{ cart.totalQuantity }}
            </span>
        {% endif %}
    </button>
</div>
", "@SyliusShop/shared/layout/base/header/content/cart_button.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/layout/base/header/content/cart_button.html.twig");
    }
}
