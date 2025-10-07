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

/* @SyliusPayPalPlugin/admin/payment_method/grid/action/enable_seller.html.twig */
class __TwigTemplate_6ebe73c6d2cbd7089a69ed8540a52e58 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/admin/payment_method/grid/action/enable_seller.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/admin/payment_method/grid/action/enable_seller.html.twig"));

        // line 1
        $macros["button"] = $this->macros["button"] = $this->load("@SyliusAdmin/shared/helper/button.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "enabled", [], "any", false, false, false, 3) && (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "gatewayConfig", [], "any", false, true, false, 3), "factoryName", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 3), "factoryName", [], "any", false, false, false, 3), "")) : ("")) == Twig\Extension\CoreExtension::constant("Sylius\\PayPalPlugin\\DependencyInjection\\SyliusPayPalExtension::PAYPAL_FACTORY_NAME")))) {
            // line 4
            yield "    <div data-bs-toggle=\"tooltip\" data-bs-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.enable"), "html", null, true);
            yield "\">
        <form action=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_admin_enable_seller", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)]), "html", null, true);
            yield "\" method=\"post\">
            ";
            // line 6
            yield $macros["button"]->getTemplateForMacro("macro_default", $context, 6, $this->getSourceContext())->macro_default(...[["type" => "submit", "icon" => "tabler:check", "icon_class" => "icon text-purple", "icon_only" => true]]);
            yield "
        </form>
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
        return "@SyliusPayPalPlugin/admin/payment_method/grid/action/enable_seller.html.twig";
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
        return array (  64 => 6,  60 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/shared/helper/button.html.twig' as button %}

{% if not data.enabled and data.gatewayConfig.factoryName|default('') == constant('Sylius\\\\PayPalPlugin\\\\DependencyInjection\\\\SyliusPayPalExtension::PAYPAL_FACTORY_NAME') %}
    <div data-bs-toggle=\"tooltip\" data-bs-title=\"{{ 'sylius.ui.enable'|trans }}\">
        <form action=\"{{ path('sylius_paypal_admin_enable_seller', {'id': data.id}) }}\" method=\"post\">
            {{ button.default({type: 'submit', icon: 'tabler:check', icon_class: 'icon text-purple', icon_only: true,}) }}
        </form>
    </div>
{% endif %}
", "@SyliusPayPalPlugin/admin/payment_method/grid/action/enable_seller.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/paypal-plugin/templates/admin/payment_method/grid/action/enable_seller.html.twig");
    }
}
