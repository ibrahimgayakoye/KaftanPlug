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

/* @SyliusShop/account/common/register_box.html.twig */
class __TwigTemplate_77086b8801b4621872888d29e31efa97 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/account/common/register_box.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/account/common/register_box.html.twig"));

        // line 1
        $macros["buttons"] = $this->macros["buttons"] = $this->load("@SyliusShop/shared/buttons.html.twig", 1)->unwrap();
        // line 2
        yield "
<div class=\"text-center\">
    <div class=\"mb-3\"><svg xmlns=\"http://www.w3.org/2000/svg\" height=\"144px\" viewBox=\"0 -960 960 960\" width=\"144px\" fill=\"#e8eaed\"><path d=\"M266-586h337v-85q0-51.25-35.82-87.13-35.83-35.87-87-35.87Q429-794 393-758.13q-36 35.88-36 87.13h-22q0-61 42.17-103 42.18-42 103-42Q541-816 583-773.88T625-671v85h69q21.75 0 37.88 15.74Q748-554.53 748-532v346q0 21.75-16.12 37.87Q715.75-132 694-132H266q-21.75 0-37.87-16.13Q212-164.25 212-186v-346q0-22.53 16.13-38.26Q244.25-586 266-586Zm0 432h428q14 0 23-9t9-23v-346q0-14-9-23t-23-9H266q-14 0-23 9t-9 23v346q0 14 9 23t23 9Zm214.17-152q21.83 0 37.33-15.53T533-359q0-21-15.67-37t-37.5-16q-21.83 0-37.33 16T427-358.5q0 21.5 15.67 37t37.5 15.5ZM234-154v-410 410Z\"/></svg></div>
    <h2>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.account.dont_have_an_account"), "html", null, true);
        yield "</h2>
    ";
        // line 6
        yield $macros["buttons"]->getTemplateForMacro("macro_link", $context, 6, $this->getSourceContext())->macro_link(...[$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_register"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.account.register_here"), "register-here-button", null]);
        yield "
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
        return "@SyliusShop/account/common/register_box.html.twig";
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
        return array (  59 => 6,  55 => 5,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusShop/shared/buttons.html.twig' as buttons %}

<div class=\"text-center\">
    <div class=\"mb-3\"><svg xmlns=\"http://www.w3.org/2000/svg\" height=\"144px\" viewBox=\"0 -960 960 960\" width=\"144px\" fill=\"#e8eaed\"><path d=\"M266-586h337v-85q0-51.25-35.82-87.13-35.83-35.87-87-35.87Q429-794 393-758.13q-36 35.88-36 87.13h-22q0-61 42.17-103 42.18-42 103-42Q541-816 583-773.88T625-671v85h69q21.75 0 37.88 15.74Q748-554.53 748-532v346q0 21.75-16.12 37.87Q715.75-132 694-132H266q-21.75 0-37.87-16.13Q212-164.25 212-186v-346q0-22.53 16.13-38.26Q244.25-586 266-586Zm0 432h428q14 0 23-9t9-23v-346q0-14-9-23t-23-9H266q-14 0-23 9t-9 23v346q0 14 9 23t23 9Zm214.17-152q21.83 0 37.33-15.53T533-359q0-21-15.67-37t-37.5-16q-21.83 0-37.33 16T427-358.5q0 21.5 15.67 37t37.5 15.5ZM234-154v-410 410Z\"/></svg></div>
    <h2>{{ 'sylius.account.dont_have_an_account'|trans }}</h2>
    {{ buttons.link(path('sylius_shop_register'), 'sylius.account.register_here'|trans, 'register-here-button', null) }}
</div>
", "@SyliusShop/account/common/register_box.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/account/common/register_box.html.twig");
    }
}
