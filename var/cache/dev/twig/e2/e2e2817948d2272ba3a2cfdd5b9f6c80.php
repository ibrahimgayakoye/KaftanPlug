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

/* @SyliusMolliePlugin/shop/shared/form/select_payment/payment/choice/details/payment_methods/payment_method/credit_card/use_saved_card.html.twig */
class __TwigTemplate_ffe8e36d64977733dafbbafd4ddbe708 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/shop/shared/form/select_payment/payment/choice/details/payment_methods/payment_method/credit_card/use_saved_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/shop/shared/form/select_payment/payment/choice/details/payment_methods/payment_method/credit_card/use_saved_card.html.twig"));

        // line 1
        $context["single_click_enabled"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 1), "gateway_config", [], "any", false, true, false, 1), "config", [], "any", false, true, false, 1), "single_click_enabled", [], "array", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "gateway_config", [], "any", false, false, false, 1), "config", [], "any", false, false, false, 1), "single_click_enabled", [], "array", false, false, false, 1), false)) : (false));
        // line 2
        yield "
";
        // line 3
        if (((isset($context["single_click_enabled"]) || array_key_exists("single_click_enabled", $context) ? $context["single_click_enabled"] : (function () { throw new RuntimeError('Variable "single_click_enabled" does not exist.', 3, $this->source); })()) && $this->extensions['Sylius\MolliePlugin\Twig\Extension\CustomerCreditCards']->getCustomerFromContext())) {
            // line 4
            yield "    ";
            if ((($tmp = $this->extensions['Sylius\MolliePlugin\Twig\Extension\CustomerCreditCards']->isCardSaved(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "order", [], "any", false, false, false, 4), "customer", [], "any", false, false, false, 4), "email", [], "any", false, false, false, 4))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 5
                yield "        <div class=\"mollie-components-use-saved-card\">
            <div>
                <label class=\"form-check\">
                    <input type=\"checkbox\" id=\"mollie-sylius-use-saved-credit-card\" checked>
                    <span>";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.use_saved_card"), "html", null, true);
                yield "</span>
                </label>
            </div>
        </div>
    ";
            }
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
        return "@SyliusMolliePlugin/shop/shared/form/select_payment/payment/choice/details/payment_methods/payment_method/credit_card/use_saved_card.html.twig";
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
        return array (  64 => 9,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set single_click_enabled = hookable_metadata.context.gateway_config.config['single_click_enabled'] | default(false) %}

{% if single_click_enabled and getCustomerFromContext() %}
    {% if (isCardSaved(hookable_metadata.context.order.customer.email)) %}
        <div class=\"mollie-components-use-saved-card\">
            <div>
                <label class=\"form-check\">
                    <input type=\"checkbox\" id=\"mollie-sylius-use-saved-credit-card\" checked>
                    <span>{{ 'sylius_mollie.ui.use_saved_card'|trans }}</span>
                </label>
            </div>
        </div>
    {% endif %}
{% endif %}
", "@SyliusMolliePlugin/shop/shared/form/select_payment/payment/choice/details/payment_methods/payment_method/credit_card/use_saved_card.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/shop/shared/form/select_payment/payment/choice/details/payment_methods/payment_method/credit_card/use_saved_card.html.twig");
    }
}
