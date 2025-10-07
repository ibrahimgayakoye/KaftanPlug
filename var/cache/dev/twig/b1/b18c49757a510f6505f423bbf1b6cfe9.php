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

/* @SyliusMolliePlugin/admin/payment_method/update/content/onboarding_wizard/navigation.html.twig */
class __TwigTemplate_63a6d8ba7d4de22016384265891f6537 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/update/content/onboarding_wizard/navigation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/update/content/onboarding_wizard/navigation.html.twig"));

        // line 1
        $context["resource"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "resource", [], "any", false, false, false, 1);
        // line 2
        $context["factory_name"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["resource"] ?? null), "gatewayConfig", [], "any", false, true, false, 2), "factoryName", [], "any", true, true, false, 2) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 2, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 2), "factoryName", [], "any", false, false, false, 2)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 2, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 2), "factoryName", [], "any", false, false, false, 2)) : (""));
        // line 3
        yield "
";
        // line 4
        if (((isset($context["factory_name"]) || array_key_exists("factory_name", $context) ? $context["factory_name"] : (function () { throw new RuntimeError('Variable "factory_name" does not exist.', 4, $this->source); })()) == Twig\Extension\CoreExtension::constant("Sylius\\MolliePlugin\\Payum\\Factory\\MollieGatewayFactory::FACTORY_NAME"))) {
            // line 5
            yield "    <nav
        aria-hidden=\"false\"
        aria-label=\"onboarding wizard\"
        class=\"onboarding-wizard js-onboarding-wizard\"
        role=\"navigation\"
    >
        <div class=\"onboarding-wizard__logo\">
            ";
            // line 12
            yield from $this->load("@SyliusMolliePlugin/admin/payment_method/update/content/onboarding_wizard/logo.html.twig", 12)->unwrap()->yield($context);
            // line 13
            yield "        </div>

        <ul class=\"onboarding-wizard__steps\">
            <li class=\"onboarding-wizard__step js-onboarding-wizard-progress\" data-navigation-step=\"intro\">
                <i class=\"onboarding-wizard__check icon check circle\"></i>

                <span class=\"onboarding-wizard__name\">
                  ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.onboardingMollie.step_nav.1"), "html", null, true);
            yield "
                </span>

                <i class=\"onboarding-wizard__arrow icon angle right\"></i>
            </li>

            <li class=\"onboarding-wizard__step js-onboarding-wizard-progress\" data-navigation-step=\"api-settings\">
                <i class=\"onboarding-wizard__check icon check circle\"></i>

                <span class=\"onboarding-wizard__name\">
                    ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.onboardingMollie.step_nav.2"), "html", null, true);
            yield "
                </span>

                <i class=\"onboarding-wizard__arrow icon angle right\"></i>
            </li>

            <li class=\"onboarding-wizard__step js-onboarding-wizard-progress\" data-navigation-step=\"store-settings\">
                <i class=\"onboarding-wizard__check icon check circle\"></i>

                <span class=\"onboarding-wizard__name\">
                    ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.onboardingMollie.step_nav.3"), "html", null, true);
            yield "
                </span>

                <i class=\"onboarding-wizard__arrow icon angle right\"></i>
            </li>

            <li class=\"onboarding-wizard__step js-onboarding-wizard-progress\" data-navigation-step=\"payment-settings\">
                <i class=\"onboarding-wizard__check icon check circle\"></i>

                <span class=\"onboarding-wizard__name\">
                    ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.onboardingMollie.step_nav.4"), "html", null, true);
            yield "
                </span>
            </li>
        </ul>
    </nav>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusMolliePlugin/admin/payment_method/update/content/onboarding_wizard/navigation.html.twig";
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
        return array (  116 => 50,  103 => 40,  90 => 30,  77 => 20,  68 => 13,  66 => 12,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set resource = hookable_metadata.context.resource %}
{% set factory_name = resource.gatewayConfig.factoryName ?? '' %}

{% if factory_name == constant('Sylius\\\\MolliePlugin\\\\Payum\\\\Factory\\\\MollieGatewayFactory::FACTORY_NAME') %}
    <nav
        aria-hidden=\"false\"
        aria-label=\"onboarding wizard\"
        class=\"onboarding-wizard js-onboarding-wizard\"
        role=\"navigation\"
    >
        <div class=\"onboarding-wizard__logo\">
            {% include '@SyliusMolliePlugin/admin/payment_method/update/content/onboarding_wizard/logo.html.twig' %}
        </div>

        <ul class=\"onboarding-wizard__steps\">
            <li class=\"onboarding-wizard__step js-onboarding-wizard-progress\" data-navigation-step=\"intro\">
                <i class=\"onboarding-wizard__check icon check circle\"></i>

                <span class=\"onboarding-wizard__name\">
                  {{ 'sylius_mollie.onboardingMollie.step_nav.1'|trans }}
                </span>

                <i class=\"onboarding-wizard__arrow icon angle right\"></i>
            </li>

            <li class=\"onboarding-wizard__step js-onboarding-wizard-progress\" data-navigation-step=\"api-settings\">
                <i class=\"onboarding-wizard__check icon check circle\"></i>

                <span class=\"onboarding-wizard__name\">
                    {{ 'sylius_mollie.onboardingMollie.step_nav.2'|trans }}
                </span>

                <i class=\"onboarding-wizard__arrow icon angle right\"></i>
            </li>

            <li class=\"onboarding-wizard__step js-onboarding-wizard-progress\" data-navigation-step=\"store-settings\">
                <i class=\"onboarding-wizard__check icon check circle\"></i>

                <span class=\"onboarding-wizard__name\">
                    {{ 'sylius_mollie.onboardingMollie.step_nav.3'|trans }}
                </span>

                <i class=\"onboarding-wizard__arrow icon angle right\"></i>
            </li>

            <li class=\"onboarding-wizard__step js-onboarding-wizard-progress\" data-navigation-step=\"payment-settings\">
                <i class=\"onboarding-wizard__check icon check circle\"></i>

                <span class=\"onboarding-wizard__name\">
                    {{ 'sylius_mollie.onboardingMollie.step_nav.4'|trans }}
                </span>
            </li>
        </ul>
    </nav>
{% endif %}
", "@SyliusMolliePlugin/admin/payment_method/update/content/onboarding_wizard/navigation.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/payment_method/update/content/onboarding_wizard/navigation.html.twig");
    }
}
