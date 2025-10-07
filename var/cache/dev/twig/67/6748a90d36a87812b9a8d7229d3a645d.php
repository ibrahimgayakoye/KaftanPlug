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

/* @SyliusShop/checkout/common/steps.html.twig */
class __TwigTemplate_8bb74064563ae2e0f17183cbb8645991 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/checkout/common/steps.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/checkout/common/steps.html.twig"));

        // line 1
        $context["order"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "order", [], "any", false, false, false, 1);
        // line 2
        $context["active_step"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 2), "active_step", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "active_step", [], "any", false, false, false, 2), "")) : (""));
        // line 3
        $context["order_requires_shipping"] = $this->env->getFunction('sylius_is_shipping_required')->getCallable()((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 3, $this->source); })()));
        // line 4
        $context["order_requires_payment"] = $this->env->getFunction('sylius_is_payment_required')->getCallable()((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 4, $this->source); })()));
        // line 5
        yield "
";
        // line 6
        $context["steps"] = [["name" => "address", "route" => "sylius_shop_checkout_address", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.address"), "required" => true, "state" => (((        // line 12
(isset($context["active_step"]) || array_key_exists("active_step", $context) ? $context["active_step"] : (function () { throw new RuntimeError('Variable "active_step" does not exist.', 12, $this->source); })()) == "address")) ? ("active") : ("completed")), "test_attribute" => "step-address"], ["name" => "select_shipping", "route" => "sylius_shop_checkout_select_shipping", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping"), "required" =>         // line 19
(isset($context["order_requires_shipping"]) || array_key_exists("order_requires_shipping", $context) ? $context["order_requires_shipping"] : (function () { throw new RuntimeError('Variable "order_requires_shipping" does not exist.', 19, $this->source); })()), "state" => (((        // line 20
(isset($context["active_step"]) || array_key_exists("active_step", $context) ? $context["active_step"] : (function () { throw new RuntimeError('Variable "active_step" does not exist.', 20, $this->source); })()) == "select_shipping")) ? ("active") : (((((isset($context["active_step"]) || array_key_exists("active_step", $context) ? $context["active_step"] : (function () { throw new RuntimeError('Variable "active_step" does not exist.', 20, $this->source); })()) == "address")) ? ("disabled") : ("completed")))), "test_attribute" => "step-shipping"], ["name" => "select_payment", "route" => "sylius_shop_checkout_select_payment", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.payment"), "required" =>         // line 27
(isset($context["order_requires_payment"]) || array_key_exists("order_requires_payment", $context) ? $context["order_requires_payment"] : (function () { throw new RuntimeError('Variable "order_requires_payment" does not exist.', 27, $this->source); })()), "state" => (((        // line 28
(isset($context["active_step"]) || array_key_exists("active_step", $context) ? $context["active_step"] : (function () { throw new RuntimeError('Variable "active_step" does not exist.', 28, $this->source); })()) == "select_payment")) ? ("active") : (((((isset($context["active_step"]) || array_key_exists("active_step", $context) ? $context["active_step"] : (function () { throw new RuntimeError('Variable "active_step" does not exist.', 28, $this->source); })()) == "complete")) ? ("completed") : ("disabled")))), "test_attribute" => "step-payment"], ["name" => "complete", "route" => "sylius_shop_checkout_complete", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.complete"), "required" => true, "state" => (((        // line 36
(isset($context["active_step"]) || array_key_exists("active_step", $context) ? $context["active_step"] : (function () { throw new RuntimeError('Variable "active_step" does not exist.', 36, $this->source); })()) == "complete")) ? ("active") : ("disabled")), "test_attribute" => "step-complete"]];
        // line 40
        yield "
<div class=\"steps steps-";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active_step"]) || array_key_exists("active_step", $context) ? $context["active_step"] : (function () { throw new RuntimeError('Variable "active_step" does not exist.', 41, $this->source); })()), "html", null, true);
        yield " mb-5\">
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new RuntimeError('Variable "steps" does not exist.', 42, $this->source); })()), function ($__step__) use ($context, $macros) { $context["step"] = $__step__; return CoreExtension::getAttribute($this->env, $this->source, $context["step"], "required", [], "any", false, false, false, 42); }));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 43
            yield "        <div class=\"steps-item steps-item-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "state", [], "any", false, false, false, 43), "html", null, true);
            yield "\">
            ";
            // line 44
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["step"], "state", [], "any", false, false, false, 44) != "disabled")) {
                // line 45
                yield "                <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "route", [], "any", false, false, false, 45));
                yield "\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "test_attribute", [], "any", false, false, false, 45));
                yield ">
                    ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "label", [], "any", false, false, false, 46)), "html", null, true);
                yield "
                </a>
            ";
            } else {
                // line 49
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "label", [], "any", false, false, false, 49)), "html", null, true);
                yield "
            ";
            }
            // line 51
            yield "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['step'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "</div>
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
        return "@SyliusShop/checkout/common/steps.html.twig";
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
        return array (  111 => 53,  104 => 51,  98 => 49,  92 => 46,  85 => 45,  83 => 44,  78 => 43,  74 => 42,  70 => 41,  67 => 40,  65 => 36,  64 => 28,  63 => 27,  62 => 20,  61 => 19,  60 => 12,  59 => 6,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set order = hookable_metadata.context.order %}
{% set active_step = hookable_metadata.context.active_step|default('') %}
{% set order_requires_shipping = sylius_is_shipping_required(order) %}
{% set order_requires_payment = sylius_is_payment_required(order) %}

{% set steps = [
    {
        'name': 'address',
        'route': 'sylius_shop_checkout_address',
        'label': 'sylius.ui.address'|trans,
        'required': true,
        'state': active_step == 'address' ? 'active' : 'completed',
        'test_attribute': 'step-address',
    },
    {
        'name': 'select_shipping',
        'route': 'sylius_shop_checkout_select_shipping',
        'label': 'sylius.ui.shipping'|trans,
        'required': order_requires_shipping,
        'state': active_step == 'select_shipping' ? 'active' : (active_step == 'address' ? 'disabled' : 'completed'),
        'test_attribute': 'step-shipping',
    },
    {
        'name': 'select_payment',
        'route': 'sylius_shop_checkout_select_payment',
        'label': 'sylius.ui.payment'|trans,
        'required': order_requires_payment,
        'state': active_step == 'select_payment' ? 'active' : (active_step == 'complete' ? 'completed' : 'disabled'),
        'test_attribute': 'step-payment',
    },
    {
        'name': 'complete',
        'route': 'sylius_shop_checkout_complete',
        'label': 'sylius.ui.complete'|trans,
        'required': true,
        'state': active_step == 'complete' ? 'active' : 'disabled',
        'test_attribute': 'step-complete',
    },
] %}

<div class=\"steps steps-{{ active_step }} mb-5\">
    {% for step in steps|filter(step => step.required) %}
        <div class=\"steps-item steps-item-{{ step.state }}\">
            {% if step.state != 'disabled' %}
                <a href=\"{{ path(step.route) }}\" {{ sylius_test_html_attribute(step.test_attribute) }}>
                    {{ step.label|trans }}
                </a>
            {% else %}
                {{ step.label|trans }}
            {% endif %}
        </div>
    {% endfor %}
</div>
", "@SyliusShop/checkout/common/steps.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/checkout/common/steps.html.twig");
    }
}
