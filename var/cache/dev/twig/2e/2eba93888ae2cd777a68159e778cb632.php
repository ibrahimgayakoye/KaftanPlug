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

/* @SyliusShop/cart/index/content/form/sections/general.html.twig */
class __TwigTemplate_59b6462d662958ad9089af751ba8fb72 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/cart/index/content/form/sections/general.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/cart/index/content/form/sections/general.html.twig"));

        // line 1
        yield "<div class=\"row\">
    <div class=\"col-12 col-xl-8 mb-4 position-relative\">
        <div data-loading>
            <div class=\"sylius-shop-loader\">
                <img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/shop/images/loader.gif", "shop"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.loading"), "html", null, true);
        yield "\"/>
            </div>
        </div>
        ";
        // line 8
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("general#left", [], $context, false);
        // line 9
        yield "    </div>
    <div class=\"col-12 col-xl-4 ps-xl-5 mb-4\">
        ";
        // line 11
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("general#right", [], $context, false);
        // line 12
        yield "    </div>
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
        return "@SyliusShop/cart/index/content/form/sections/general.html.twig";
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
        return array (  72 => 12,  69 => 11,  65 => 9,  62 => 8,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row\">
    <div class=\"col-12 col-xl-8 mb-4 position-relative\">
        <div data-loading>
            <div class=\"sylius-shop-loader\">
                <img src=\"{{ asset('build/shop/images/loader.gif', 'shop') }}\" alt=\"{{ 'sylius.ui.loading'|trans }}\"/>
            </div>
        </div>
        {% hook 'general#left' %}
    </div>
    <div class=\"col-12 col-xl-4 ps-xl-5 mb-4\">
        {% hook 'general#right' %}
    </div>
</div>
", "@SyliusShop/cart/index/content/form/sections/general.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/cart/index/content/form/sections/general.html.twig");
    }
}
