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

/* @SyliusMolliePlugin/admin/payment_method/update/content/mollie_info.html.twig */
class __TwigTemplate_233fba42e8dbe7bd686cb0b85d47acc2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/update/content/mollie_info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/update/content/mollie_info.html.twig"));

        // line 1
        $context["resource"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "resource", [], "any", false, false, false, 1);
        // line 2
        $context["factory_name"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["resource"] ?? null), "gatewayConfig", [], "any", false, true, false, 2), "factoryName", [], "any", true, true, false, 2) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 2, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 2), "factoryName", [], "any", false, false, false, 2)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 2, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 2), "factoryName", [], "any", false, false, false, 2)) : (""));
        // line 4
        if (((isset($context["factory_name"]) || array_key_exists("factory_name", $context) ? $context["factory_name"] : (function () { throw new RuntimeError('Variable "factory_name" does not exist.', 4, $this->source); })()) == Twig\Extension\CoreExtension::constant("Sylius\\MolliePlugin\\Payum\\Factory\\MollieGatewayFactory::FACTORY_NAME"))) {
            // line 5
            yield "<div class=\"container-xl\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-6 d-flex justify-content-end\">
                            <button class=\"btn btn-primary js-restart-tour\" type=\"button\">
                                ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.restart_tour"), "html", null, true);
            yield "
                            </button>
                        </div>
                        <div class=\"col-6 d-flex justify-content-start\">
                            <a href=\"https://www.mollie.com/dashboard/login?lang=en\" target=\"_blank\">
                                <img
                                    src=\"https://images.ctfassets.net/k4kk06v59kf0/5WfNYahm6s4W2aqOsUsM0y/93db1c43d56b2a073dae1faa44410619/og-image-mollie.png\"
                                    style=\"width: 100px\"
                                >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"card-footer\">
                <div class=\"row\">
                    <div class=\"col-4 d-flex justify-content-center\">
                        <a class=\"native-link\" href=\"https://github.com/Sylius/MolliePlugin\" target=\"_blank\">
                            ";
            // line 30
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:home");
            yield "
                            ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.sylius_bundle"), "html", null, true);
            yield "
                        </a>
                    </div>
                    <div class=\"col-4 d-flex justify-content-center\">
                        <a class=\"native-link\" href=\"https://www.mollie.com/en/contact\" target=\"_blank\">
                            ";
            // line 36
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:mail");
            yield "
                            ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.contact_mollie"), "html", null, true);
            yield "
                        </a>
                    </div>
                    <div class=\"col-4 d-flex justify-content-center\">
                        <a class=\"native-link\" href=\"https://help.mollie.com/hc/en-us\" target=\"_blank\">
                            ";
            // line 42
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:help");
            yield "
                            ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.more_info_about_mollie"), "html", null, true);
            yield "
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>";
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
        return "@SyliusMolliePlugin/admin/payment_method/update/content/mollie_info.html.twig";
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
        return array (  112 => 43,  108 => 42,  100 => 37,  96 => 36,  88 => 31,  84 => 30,  63 => 12,  54 => 5,  52 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set resource = hookable_metadata.context.resource %}
{% set factory_name = resource.gatewayConfig.factoryName ?? '' %}

{%- if factory_name == constant('Sylius\\\\MolliePlugin\\\\Payum\\\\Factory\\\\MollieGatewayFactory::FACTORY_NAME') -%}
    <div class=\"container-xl\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-6 d-flex justify-content-end\">
                            <button class=\"btn btn-primary js-restart-tour\" type=\"button\">
                                {{ 'sylius_mollie.ui.restart_tour'|trans }}
                            </button>
                        </div>
                        <div class=\"col-6 d-flex justify-content-start\">
                            <a href=\"https://www.mollie.com/dashboard/login?lang=en\" target=\"_blank\">
                                <img
                                    src=\"https://images.ctfassets.net/k4kk06v59kf0/5WfNYahm6s4W2aqOsUsM0y/93db1c43d56b2a073dae1faa44410619/og-image-mollie.png\"
                                    style=\"width: 100px\"
                                >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"card-footer\">
                <div class=\"row\">
                    <div class=\"col-4 d-flex justify-content-center\">
                        <a class=\"native-link\" href=\"https://github.com/Sylius/MolliePlugin\" target=\"_blank\">
                            {{ ux_icon('tabler:home') }}
                            {{ 'sylius_mollie.ui.sylius_bundle'|trans }}
                        </a>
                    </div>
                    <div class=\"col-4 d-flex justify-content-center\">
                        <a class=\"native-link\" href=\"https://www.mollie.com/en/contact\" target=\"_blank\">
                            {{ ux_icon('tabler:mail') }}
                            {{ 'sylius_mollie.ui.contact_mollie'|trans }}
                        </a>
                    </div>
                    <div class=\"col-4 d-flex justify-content-center\">
                        <a class=\"native-link\" href=\"https://help.mollie.com/hc/en-us\" target=\"_blank\">
                            {{ ux_icon('tabler:help') }}
                            {{ 'sylius_mollie.ui.more_info_about_mollie'|trans }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{%- endif -%}
", "@SyliusMolliePlugin/admin/payment_method/update/content/mollie_info.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/payment_method/update/content/mollie_info.html.twig");
    }
}
