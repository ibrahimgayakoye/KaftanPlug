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

/* @SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/qr_code_enabled.html.twig */
class __TwigTemplate_5ea06199677118b6c90bfa248782cb8b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/qr_code_enabled.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/qr_code_enabled.html.twig"));

        // line 1
        $context["ideal"] = Twig\Extension\CoreExtension::constant("Mollie\\Api\\Types\\PaymentMethod::IDEAL");
        // line 2
        $context["bancontact"] = Twig\Extension\CoreExtension::constant("Mollie\\Api\\Types\\PaymentMethod::BANCONTACT");
        // line 3
        yield "
";
        // line 4
        $context["inner_payment_method"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "inner_payment_method", [], "any", false, false, false, 4);
        // line 5
        yield "
";
        // line 6
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inner_payment_method"]) || array_key_exists("inner_payment_method", $context) ? $context["inner_payment_method"] : (function () { throw new RuntimeError('Variable "inner_payment_method" does not exist.', 6, $this->source); })()), "methodId", [], "any", false, false, false, 6), [(isset($context["ideal"]) || array_key_exists("ideal", $context) ? $context["ideal"] : (function () { throw new RuntimeError('Variable "ideal" does not exist.', 6, $this->source); })()), (isset($context["bancontact"]) || array_key_exists("bancontact", $context) ? $context["bancontact"] : (function () { throw new RuntimeError('Variable "bancontact" does not exist.', 6, $this->source); })())])) {
            // line 7
            yield "    ";
            $context["form"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 7, $this->source); })()), "context", [], "any", false, false, false, 7), "method_form", [], "any", false, false, false, 7), "qrCodeEnabled", [], "any", false, false, false, 7);
            // line 8
            yield "
    ";
            // line 9
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'row');
            yield "
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
        return "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/qr_code_enabled.html.twig";
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
        return array (  68 => 9,  65 => 8,  62 => 7,  60 => 6,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set ideal = constant('Mollie\\\\Api\\\\Types\\\\PaymentMethod::IDEAL') %}
{% set bancontact = constant('Mollie\\\\Api\\\\Types\\\\PaymentMethod::BANCONTACT') %}

{% set inner_payment_method = hookable_metadata.context.inner_payment_method %}

{% if inner_payment_method.methodId in [ideal, bancontact] %}
    {% set form = hookable_metadata.context.method_form.qrCodeEnabled %}

    {{ form_row(form) }}
{% endif %}
", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/qr_code_enabled.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/qr_code_enabled.html.twig");
    }
}
