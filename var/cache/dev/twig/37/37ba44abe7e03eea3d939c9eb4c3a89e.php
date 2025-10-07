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

/* @SyliusShop/shared/layout/base/footer/content/copy.html.twig */
class __TwigTemplate_313e93c7ac7dcd89ecfadbbdc4bf9233 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/layout/base/footer/content/copy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/layout/base/footer/content/copy.html.twig"));

        // line 1
        yield "<div class=\"col-12 text-center col-md-6 order-md-3 text-md-start col-lg-3 order-lg-1\">
    <a href=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
        yield "\" class=\"d-inline-block mb-4\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sylius_logo_aria"), "html", null, true);
        yield "\">
        <div style=\"width: 10rem\">
            ";
        // line 4
        yield from $this->load("@SyliusShop/shared/logo.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "        </div>
    </a>

    <div class=\"mb-3\">
        &copy; ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.your_store"), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.powered_by"), "html", null, true);
        yield "
        <a href=\"https://sylius.com\" target=\"_blank\" class=\"text-primary-emphasis text-decoration-underline\">Sylius</a>
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
        return "@SyliusShop/shared/layout/base/footer/content/copy.html.twig";
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
        return array (  66 => 9,  60 => 5,  58 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"col-12 text-center col-md-6 order-md-3 text-md-start col-lg-3 order-lg-1\">
    <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"d-inline-block mb-4\" aria-label=\"{{ 'sylius.ui.sylius_logo_aria'|trans }}\">
        <div style=\"width: 10rem\">
            {% include '@SyliusShop/shared/logo.html.twig'%}
        </div>
    </a>

    <div class=\"mb-3\">
        &copy; {{ 'sylius.ui.your_store'|trans }}, {{ 'sylius.ui.powered_by'|trans }}
        <a href=\"https://sylius.com\" target=\"_blank\" class=\"text-primary-emphasis text-decoration-underline\">Sylius</a>
    </div>
</div>
", "@SyliusShop/shared/layout/base/footer/content/copy.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/layout/base/footer/content/copy.html.twig");
    }
}
