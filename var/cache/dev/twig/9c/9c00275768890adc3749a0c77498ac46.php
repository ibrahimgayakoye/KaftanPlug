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

/* @SyliusShop/account/address_book/index/content/main/buttons/add_address.html.twig */
class __TwigTemplate_703387a5346beafa0b0b58bf0bdf4fa8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/account/address_book/index/content/main/buttons/add_address.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/account/address_book/index/content/main/buttons/add_address.html.twig"));

        // line 1
        trigger_deprecation('', '', "The \"add_address.html.twig\" template is deprecated. Content has been moved to header section."." in \"@SyliusShop/account/address_book/index/content/main/buttons/add_address.html.twig\" at line 1.");
        // line 2
        yield "
";
        // line 3
        $macros["buttons"] = $this->macros["buttons"] = $this->load("@SyliusShop/shared/buttons.html.twig", 3)->unwrap();
        // line 4
        yield "
";
        // line 5
        yield $macros["buttons"]->getTemplateForMacro("macro_default", $context, 5, $this->getSourceContext())->macro_default(...[$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_create"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.add_address"), null, null, "btn-primary col-12 col-md-auto mb-2"]);
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
        return "@SyliusShop/account/address_book/index/content/main/buttons/add_address.html.twig";
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
        return array (  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% deprecated 'The \"add_address.html.twig\" template is deprecated. Content has been moved to header section.' %}

{% import '@SyliusShop/shared/buttons.html.twig' as buttons %}

{{ buttons.default(path('sylius_shop_account_address_book_create'), 'sylius.ui.add_address'|trans, null, null, 'btn-primary col-12 col-md-auto mb-2') }}
", "@SyliusShop/account/address_book/index/content/main/buttons/add_address.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/account/address_book/index/content/main/buttons/add_address.html.twig");
    }
}
