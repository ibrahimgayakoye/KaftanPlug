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

/* @SyliusShop/shared/layout/base/footer/content/menu.html.twig */
class __TwigTemplate_b842cf5b8c94094830eca6b6b0b85738 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/layout/base/footer/content/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/layout/base/footer/content/menu.html.twig"));

        // line 1
        yield "<div class=\"col-12 col-lg-6 order-lg-2\">
    <div class=\"row\">
        <div class=\"col-12 col-sm-6\">
            <nav aria-label=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.footer_informational_links"), "html", null, true);
        yield "\" class=\"nav flex-column\">
                <a class=\"nav-link\" href=\"#\">About</a>
                <a class=\"nav-link\" href=\"#\">Terms and Conditions</a>
                <a class=\"nav-link\" href=\"#\">Privacy Policy</a>
                <a class=\"nav-link\" href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_contact_request");
        yield "\">Contact us</a>
            </nav>
        </div>

        <div class=\"col-12 col-sm-6\">
            <nav aria-label=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.footer_help_links"), "html", null, true);
        yield "\" class=\"nav flex-column mb-5\">
                <a class=\"nav-link\" href=\"#\">FAQ</a>
                <a class=\"nav-link\" href=\"#\">Delivery & Shipping</a>
                <a class=\"nav-link\" href=\"#\">Returns Policy</a>
            </nav>
        </div>
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
        return "@SyliusShop/shared/layout/base/footer/content/menu.html.twig";
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
        return array (  68 => 13,  60 => 8,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"col-12 col-lg-6 order-lg-2\">
    <div class=\"row\">
        <div class=\"col-12 col-sm-6\">
            <nav aria-label=\"{{ 'sylius.ui.footer_informational_links'|trans }}\" class=\"nav flex-column\">
                <a class=\"nav-link\" href=\"#\">About</a>
                <a class=\"nav-link\" href=\"#\">Terms and Conditions</a>
                <a class=\"nav-link\" href=\"#\">Privacy Policy</a>
                <a class=\"nav-link\" href=\"{{ path('sylius_shop_contact_request') }}\">Contact us</a>
            </nav>
        </div>

        <div class=\"col-12 col-sm-6\">
            <nav aria-label=\"{{ 'sylius.ui.footer_help_links'|trans }}\" class=\"nav flex-column mb-5\">
                <a class=\"nav-link\" href=\"#\">FAQ</a>
                <a class=\"nav-link\" href=\"#\">Delivery & Shipping</a>
                <a class=\"nav-link\" href=\"#\">Returns Policy</a>
            </nav>
        </div>
    </div>
</div>
", "@SyliusShop/shared/layout/base/footer/content/menu.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/layout/base/footer/content/menu.html.twig");
    }
}
