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

/* @SyliusAdmin/order/show/content/sections/shipments/item/actions/resend_confirmation.html.twig */
class __TwigTemplate_79161b23e30fcdb5826a64f163c257e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/show/content/sections/shipments/item/actions/resend_confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/show/content/sections/shipments/item/actions/resend_confirmation.html.twig"));

        // line 1
        $context["shipment"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "shipment", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 3, $this->source); })()), "state", [], "any", false, false, false, 3) == "shipped")) {
            // line 4
            yield "    ";
            $context["resend_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_shipment_resend_confirmation_email", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "_csrf_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4))]);
            // line 5
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resend_path"]) || array_key_exists("resend_path", $context) ? $context["resend_path"] : (function () { throw new RuntimeError('Variable "resend_path" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "\" class=\"btn btn-icon\" data-bs-toggle=\"tooltip\" data-bs-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.resend_the_shipment_confirmation_email"), "html", null, true);
            yield "\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("resend-shipment-confirmation-email");
            yield ">
        ";
            // line 6
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:send");
            yield "
    </a>
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
        return "@SyliusAdmin/order/show/content/sections/shipments/item/actions/resend_confirmation.html.twig";
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
        return array (  67 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set shipment = hookable_metadata.context.shipment %}

{% if shipment.state == 'shipped' %}
    {% set resend_path = path('sylius_admin_shipment_resend_confirmation_email', {'id': shipment.id, '_csrf_token': csrf_token(shipment.id)}) %}
    <a href=\"{{ resend_path }}\" class=\"btn btn-icon\" data-bs-toggle=\"tooltip\" data-bs-title=\"{{ 'sylius.ui.resend_the_shipment_confirmation_email'|trans }}\" {{ sylius_test_html_attribute('resend-shipment-confirmation-email') }}>
        {{ ux_icon('tabler:send') }}
    </a>
{% endif %}
", "@SyliusAdmin/order/show/content/sections/shipments/item/actions/resend_confirmation.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/order/show/content/sections/shipments/item/actions/resend_confirmation.html.twig");
    }
}
