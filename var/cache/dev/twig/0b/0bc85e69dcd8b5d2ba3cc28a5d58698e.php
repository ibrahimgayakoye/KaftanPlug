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

/* @SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/payment_type.html.twig */
class __TwigTemplate_9d4d9c1dc9a19c55ec6c8077c09ad1ff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/payment_type.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/payment_type.html.twig"));

        // line 1
        $context["mealvouchersId"] = Twig\Extension\CoreExtension::constant("Sylius\\MolliePlugin\\Model\\PaymentMethod\\MealVoucher::MEAL_VOUCHERS");
        // line 2
        $context["klarnaOne"] = Twig\Extension\CoreExtension::constant("Mollie\\Api\\Types\\PaymentMethod::KLARNA_ONE");
        // line 3
        $context["klarnaPayLater"] = Twig\Extension\CoreExtension::constant("Mollie\\Api\\Types\\PaymentMethod::KLARNA_PAY_LATER");
        // line 4
        $context["klarnaSliceIt"] = Twig\Extension\CoreExtension::constant("Mollie\\Api\\Types\\PaymentMethod::KLARNA_SLICE_IT");
        // line 5
        $context["billie"] = Twig\Extension\CoreExtension::constant("Mollie\\Api\\Types\\PaymentMethod::BILLIE");
        // line 6
        $context["in3"] = Twig\Extension\CoreExtension::constant("Mollie\\Api\\Types\\PaymentMethod::IN3");
        // line 7
        $context["alma"] = Twig\Extension\CoreExtension::constant("Mollie\\Api\\Types\\PaymentMethod::ALMA");
        // line 8
        $context["riverty"] = Twig\Extension\CoreExtension::constant("Mollie\\Api\\Types\\PaymentMethod::RIVERTY");
        // line 9
        yield "
";
        // line 10
        $context["inner_payment_method"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 10, $this->source); })()), "context", [], "any", false, false, false, 10), "inner_payment_method", [], "any", false, false, false, 10);
        // line 11
        yield "
";
        // line 12
        $context["form"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 12, $this->source); })()), "context", [], "any", false, false, false, 12), "method_form", [], "any", false, false, false, 12), "paymentType", [], "any", false, false, false, 12);
        // line 13
        $context["attr"] = ["class" => "js-onboardingWizard-PaymentMethod"];
        // line 14
        yield "
";
        // line 16
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inner_payment_method"]) || array_key_exists("inner_payment_method", $context) ? $context["inner_payment_method"] : (function () { throw new RuntimeError('Variable "inner_payment_method" does not exist.', 16, $this->source); })()), "methodId", [], "any", false, false, false, 16), [(isset($context["mealvouchersId"]) || array_key_exists("mealvouchersId", $context) ? $context["mealvouchersId"] : (function () { throw new RuntimeError('Variable "mealvouchersId" does not exist.', 16, $this->source); })()), (isset($context["klarnaOne"]) || array_key_exists("klarnaOne", $context) ? $context["klarnaOne"] : (function () { throw new RuntimeError('Variable "klarnaOne" does not exist.', 16, $this->source); })()), (isset($context["klarnaPayLater"]) || array_key_exists("klarnaPayLater", $context) ? $context["klarnaPayLater"] : (function () { throw new RuntimeError('Variable "klarnaPayLater" does not exist.', 16, $this->source); })()), (isset($context["klarnaSliceIt"]) || array_key_exists("klarnaSliceIt", $context) ? $context["klarnaSliceIt"] : (function () { throw new RuntimeError('Variable "klarnaSliceIt" does not exist.', 16, $this->source); })()), (isset($context["billie"]) || array_key_exists("billie", $context) ? $context["billie"] : (function () { throw new RuntimeError('Variable "billie" does not exist.', 16, $this->source); })()), (isset($context["alma"]) || array_key_exists("alma", $context) ? $context["alma"] : (function () { throw new RuntimeError('Variable "alma" does not exist.', 16, $this->source); })()), (isset($context["riverty"]) || array_key_exists("riverty", $context) ? $context["riverty"] : (function () { throw new RuntimeError('Variable "riverty" does not exist.', 16, $this->source); })()), (isset($context["in3"]) || array_key_exists("in3", $context) ? $context["in3"] : (function () { throw new RuntimeError('Variable "in3" does not exist.', 16, $this->source); })())])) {
            // line 17
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 17, $this->source); })()), ["disabled" => "disabled"]);
        }
        // line 19
        yield "
";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'row', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 20, $this->source); })())]);
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
        return "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/payment_type.html.twig";
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
        return array (  88 => 20,  85 => 19,  81 => 17,  79 => 16,  76 => 14,  74 => 13,  72 => 12,  69 => 11,  67 => 10,  64 => 9,  62 => 8,  60 => 7,  58 => 6,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set mealvouchersId = constant('Sylius\\\\MolliePlugin\\\\Model\\\\PaymentMethod\\\\MealVoucher::MEAL_VOUCHERS') %}
{% set klarnaOne = constant('Mollie\\\\Api\\\\Types\\\\PaymentMethod::KLARNA_ONE') %}
{% set klarnaPayLater = constant('Mollie\\\\Api\\\\Types\\\\PaymentMethod::KLARNA_PAY_LATER') %}
{% set klarnaSliceIt = constant('Mollie\\\\Api\\\\Types\\\\PaymentMethod::KLARNA_SLICE_IT') %}
{% set billie = constant('Mollie\\\\Api\\\\Types\\\\PaymentMethod::BILLIE') %}
{% set in3 = constant('Mollie\\\\Api\\\\Types\\\\PaymentMethod::IN3') %}
{% set alma = constant('Mollie\\\\Api\\\\Types\\\\PaymentMethod::ALMA') %}
{% set riverty = constant('Mollie\\\\Api\\\\Types\\\\PaymentMethod::RIVERTY') %}

{% set inner_payment_method = hookable_metadata.context.inner_payment_method %}

{% set form = hookable_metadata.context.method_form.paymentType %}
{% set attr = {'class': 'js-onboardingWizard-PaymentMethod'} %}

{# TODO: this condition is potentially unneeded #}
{% if inner_payment_method.methodId in [mealvouchersId, klarnaOne, klarnaPayLater, klarnaSliceIt, billie, alma, riverty, in3] %}
    {% set attr = attr|merge({'disabled': 'disabled'}) %}
{% endif %}

{{ form_row(form, {'attr': attr}) }}
", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/payment_type.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/body/payment_type.html.twig");
    }
}
