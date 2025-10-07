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

/* @SyliusShop/shared/layout/base/footer/content/payment_methods.html.twig */
class __TwigTemplate_6ed2e8d11398bdb825d37c769eacb896 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/layout/base/footer/content/payment_methods.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/layout/base/footer/content/payment_methods.html.twig"));

        // line 1
        yield "<div class=\"col-12 text-center col-md-6 order-md-4 text-md-start col-lg-3 order-lg-4 text-lg-center\">
    <div class=\"mb-3 fw-medium\">Payment methods:</div>

    <div class=\"row g-2 mb-4\">
        <div class=\"col-4\">
            <a href=\"https://sylius.com/partner/paypal/\" target=\"_blank\" class=\"d-block border rounded p-2\">
                <img class=\"img-fluid\" src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/shop/images/paypal-logo.svg", "shop"), "html", null, true);
        yield "\" width=\"100%\" height=\"100%\" alt=\"PayPal\" />
            </a>
        </div>
        <div class=\"col-4\">
            <a href=\"https://sylius.com/partner/adyen/\" target=\"_blank\" class=\"d-block border rounded p-2\">
                <img class=\"img-fluid\" src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/shop/images/adyen-logo.svg", "shop"), "html", null, true);
        yield "\" width=\"100%\" height=\"100%\" alt=\"Adyen\" />
            </a>
        </div>
        <div class=\"col-4\">
            <a href=\"https://sylius.com/partner/mollie/\" target=\"_blank\" class=\"d-block border rounded p-2\">
                <img class=\"img-fluid\" src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/shop/images/mollie-logo.svg", "shop"), "html", null, true);
        yield "\" width=\"100%\" height=\"100%\" alt=\"Mollie\" />
            </a>
        </div>
    </div>

    <div class=\"d-flex justify-content-center justify-content-md-start justify-content-lg-center gap-3 mb-5\">
        <a class=\"link-reset\" href=\"https://www.instagram.com/sylius.team/\" target=\"_blank\" aria-label=\"instagram logo\">";
        // line 23
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:brand-instagram", ["class" => "icon icon-md"]);
        yield "</a>
        <a class=\"link-reset\" href=\"https://www.facebook.com/SyliusEcommerce/\" target=\"_blank\" aria-label=\"facebook logo\">";
        // line 24
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:brand-facebook", ["class" => "icon icon-md"]);
        yield "</a>
        <a class=\"link-reset\" href=\"https://x.com/Sylius\" target=\"_blank\" aria-label=\"x logo\">";
        // line 25
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:brand-x", ["class" => "icon icon-md"]);
        yield "</a>
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
        return "@SyliusShop/shared/layout/base/footer/content/payment_methods.html.twig";
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
        return array (  89 => 25,  85 => 24,  81 => 23,  72 => 17,  64 => 12,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"col-12 text-center col-md-6 order-md-4 text-md-start col-lg-3 order-lg-4 text-lg-center\">
    <div class=\"mb-3 fw-medium\">Payment methods:</div>

    <div class=\"row g-2 mb-4\">
        <div class=\"col-4\">
            <a href=\"https://sylius.com/partner/paypal/\" target=\"_blank\" class=\"d-block border rounded p-2\">
                <img class=\"img-fluid\" src=\"{{ asset('build/shop/images/paypal-logo.svg', 'shop') }}\" width=\"100%\" height=\"100%\" alt=\"PayPal\" />
            </a>
        </div>
        <div class=\"col-4\">
            <a href=\"https://sylius.com/partner/adyen/\" target=\"_blank\" class=\"d-block border rounded p-2\">
                <img class=\"img-fluid\" src=\"{{ asset('build/shop/images/adyen-logo.svg', 'shop') }}\" width=\"100%\" height=\"100%\" alt=\"Adyen\" />
            </a>
        </div>
        <div class=\"col-4\">
            <a href=\"https://sylius.com/partner/mollie/\" target=\"_blank\" class=\"d-block border rounded p-2\">
                <img class=\"img-fluid\" src=\"{{ asset('build/shop/images/mollie-logo.svg', 'shop') }}\" width=\"100%\" height=\"100%\" alt=\"Mollie\" />
            </a>
        </div>
    </div>

    <div class=\"d-flex justify-content-center justify-content-md-start justify-content-lg-center gap-3 mb-5\">
        <a class=\"link-reset\" href=\"https://www.instagram.com/sylius.team/\" target=\"_blank\" aria-label=\"instagram logo\">{{ ux_icon('tabler:brand-instagram', { class: 'icon icon-md' }) }}</a>
        <a class=\"link-reset\" href=\"https://www.facebook.com/SyliusEcommerce/\" target=\"_blank\" aria-label=\"facebook logo\">{{ ux_icon('tabler:brand-facebook', { class: 'icon icon-md' }) }}</a>
        <a class=\"link-reset\" href=\"https://x.com/Sylius\" target=\"_blank\" aria-label=\"x logo\">{{ ux_icon('tabler:brand-x', { class: 'icon icon-md' }) }}</a>
    </div>
</div>
", "@SyliusShop/shared/layout/base/footer/content/payment_methods.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/layout/base/footer/content/payment_methods.html.twig");
    }
}
