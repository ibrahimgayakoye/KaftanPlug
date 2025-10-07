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

/* @SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/default_category.html.twig */
class __TwigTemplate_0d09a70a63b20fe7541525901683e143 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/default_category.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/default_category.html.twig"));

        // line 1
        $context["meal_vouchers_id"] = Twig\Extension\CoreExtension::constant("Sylius\\MolliePlugin\\Model\\PaymentMethod\\MealVoucher::MEAL_VOUCHERS");
        // line 2
        yield "
";
        // line 3
        $context["inner_payment_method"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "inner_payment_method", [], "any", false, false, false, 3);
        // line 4
        $context["form"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "method_form", [], "any", false, false, false, 4), "defaultCategory", [], "any", false, false, false, 4);
        // line 5
        yield "
";
        // line 6
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["inner_payment_method"]) || array_key_exists("inner_payment_method", $context) ? $context["inner_payment_method"] : (function () { throw new RuntimeError('Variable "inner_payment_method" does not exist.', 6, $this->source); })()), "methodId", [], "any", false, false, false, 6) == (isset($context["meal_vouchers_id"]) || array_key_exists("meal_vouchers_id", $context) ? $context["meal_vouchers_id"] : (function () { throw new RuntimeError('Variable "meal_vouchers_id" does not exist.', 6, $this->source); })()))) {
            // line 7
            yield "    <div class=\"mb-3 field\">
        ";
            // line 8
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'row', ["label" => false]);
            yield "
    </div>
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
        return "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/default_category.html.twig";
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
        return array (  65 => 8,  62 => 7,  60 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set meal_vouchers_id = constant('Sylius\\\\MolliePlugin\\\\Model\\\\PaymentMethod\\\\MealVoucher::MEAL_VOUCHERS') %}

{% set inner_payment_method = hookable_metadata.context.inner_payment_method %}
{% set form = hookable_metadata.context.method_form.defaultCategory %}

{% if inner_payment_method.methodId == meal_vouchers_id %}
    <div class=\"mb-3 field\">
        {{ form_row(form, {'label': false}) }}
    </div>
{% endif %}
", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/default_category.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/default_category.html.twig");
    }
}
