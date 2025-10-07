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

/* @SyliusPayPalPlugin/shop/checkout/complete/content/form/summary/addresses/paypal_missing_billing_address.html.twig */
class __TwigTemplate_17725b9a781e76756e1861cdb2f97975 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/shop/checkout/complete/content/form/summary/addresses/paypal_missing_billing_address.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/shop/checkout/complete/content/form/summary/addresses/paypal_missing_billing_address.html.twig"));

        // line 1
        if ((($tmp = $this->extensions['Sylius\PayPalPlugin\Twig\OrderAddressExtension']->isBillingAddressMissing(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "order", [], "any", false, false, false, 1))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    <div class=\"col-12\">
        <div class=\"alert alert-secondary\" role=\"alert\">
            <div class=\"d-flex\">
                <div>
                    ";
            // line 6
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:id");
            yield "
                </div>
                <div>
                    <h4 class=\"alert-title\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_paypal.missing_billing_address_header"), "html", null, true);
            yield "</h4>
                    <div class=\"text-secondary\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_paypal.missing_billing_address_content"), "html", null, true);
            yield "</div>
                </div>
            </div>
        </div>
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
        return "@SyliusPayPalPlugin/shop/checkout/complete/content/form/summary/addresses/paypal_missing_billing_address.html.twig";
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
        return array (  66 => 10,  62 => 9,  56 => 6,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if sylius_is_billing_address_missing(hookable_metadata.context.order) %}
    <div class=\"col-12\">
        <div class=\"alert alert-secondary\" role=\"alert\">
            <div class=\"d-flex\">
                <div>
                    {{ ux_icon('tabler:id') }}
                </div>
                <div>
                    <h4 class=\"alert-title\">{{ 'sylius_paypal.missing_billing_address_header'|trans }}</h4>
                    <div class=\"text-secondary\">{{ 'sylius_paypal.missing_billing_address_content'|trans }}</div>
                </div>
            </div>
        </div>
    </div>
{% endif %}
", "@SyliusPayPalPlugin/shop/checkout/complete/content/form/summary/addresses/paypal_missing_billing_address.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/paypal-plugin/templates/shop/checkout/complete/content/form/summary/addresses/paypal_missing_billing_address.html.twig");
    }
}
