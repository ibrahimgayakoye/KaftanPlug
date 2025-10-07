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

/* @SyliusAdmin/order/show/content/sections/payments/item/actions/refund.html.twig */
class __TwigTemplate_a14c9da97bca9f40b9d792a39abe7fc3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/show/content/sections/payments/item/actions/refund.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/show/content/sections/payments/item/actions/refund.html.twig"));

        // line 1
        $context["order"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "resource", [], "any", false, false, false, 1);
        // line 2
        $context["payment"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "payment", [], "any", false, false, false, 2);
        // line 3
        yield "
";
        // line 4
        if ((($tmp = $this->env->getFunction('sylius_sm_can')->getCallable()((isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 4, $this->source); })()), Twig\Extension\CoreExtension::constant("Sylius\\Component\\Payment\\PaymentTransitions::GRAPH"), Twig\Extension\CoreExtension::constant("Sylius\\Component\\Payment\\PaymentTransitions::TRANSITION_REFUND"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_payment_refund", ["orderId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)]), "html", null, true);
            yield "\" method=\"POST\" novalidate>
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)), "html", null, true);
            yield "\" />
        <button type=\"submit\" class=\"btn\" ";
            // line 8
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("refund-payment", CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8));
            yield ">
            ";
            // line 9
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:arrow-back-up-double");
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.refund"), "html", null, true);
            yield "
        </button>
    </form>
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
        return "@SyliusAdmin/order/show/content/sections/payments/item/actions/refund.html.twig";
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
        return array (  71 => 9,  67 => 8,  63 => 7,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set order = hookable_metadata.context.resource %}
{% set payment = hookable_metadata.context.payment %}

{% if sylius_sm_can(payment, constant('Sylius\\\\Component\\\\Payment\\\\PaymentTransitions::GRAPH'), constant('Sylius\\\\Component\\\\Payment\\\\PaymentTransitions::TRANSITION_REFUND')) %}
    <form action=\"{{ path('sylius_admin_order_payment_refund', {'orderId': order.id, 'id': payment.id}) }}\" method=\"POST\" novalidate>
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(payment.id) }}\" />
        <button type=\"submit\" class=\"btn\" {{ sylius_test_html_attribute('refund-payment', payment.id) }}>
            {{ ux_icon('tabler:arrow-back-up-double') }} {{ 'sylius.ui.refund'|trans }}
        </button>
    </form>
{% endif %}
", "@SyliusAdmin/order/show/content/sections/payments/item/actions/refund.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/order/show/content/sections/payments/item/actions/refund.html.twig");
    }
}
