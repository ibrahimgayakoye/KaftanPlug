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

/* @SyliusMolliePlugin/shop/component/cancel_subscription.html.twig */
class __TwigTemplate_a7edf70c93c034b891693cd394fd9c32 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/shop/component/cancel_subscription.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/shop/component/cancel_subscription.html.twig"));

        // line 2
        yield "
";
        // line 3
        if ((((isset($context["order_token"]) || array_key_exists("order_token", $context) ? $context["order_token"] : (function () { throw new RuntimeError('Variable "order_token" does not exist.', 3, $this->source); })()) && (isset($context["subscription_id"]) || array_key_exists("subscription_id", $context) ? $context["subscription_id"] : (function () { throw new RuntimeError('Variable "subscription_id" does not exist.', 3, $this->source); })())) && (isset($context["cancellable_subscription"]) || array_key_exists("cancellable_subscription", $context) ? $context["cancellable_subscription"] : (function () { throw new RuntimeError('Variable "cancellable_subscription" does not exist.', 3, $this->source); })()))) {
            // line 4
            yield "    ";
            $context["button_config"] = Twig\Extension\CoreExtension::merge(["expanded" => false, "class" => "btn btn-sm btn-outline-warning", "container_class" => ""], ((            // line 8
array_key_exists("button_config", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_config"]) || array_key_exists("button_config", $context) ? $context["button_config"] : (function () { throw new RuntimeError('Variable "button_config" does not exist.', 8, $this->source); })()), [])) : ([])));
            // line 9
            yield "
    <div class=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button_config"]) || array_key_exists("button_config", $context) ? $context["button_config"] : (function () { throw new RuntimeError('Variable "button_config" does not exist.', 10, $this->source); })()), "container_class", [], "any", false, false, false, 10), "html", null, true);
            yield "\">
        <form action=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_mollie_shop_cancel_order_subscription", ["orderToken" => (isset($context["order_token"]) || array_key_exists("order_token", $context) ? $context["order_token"] : (function () { throw new RuntimeError('Variable "order_token" does not exist.', 11, $this->source); })())]), "html", null, true);
            yield "\" method=\"post\" novalidate>
            <input type=\"hidden\" name=\"_method\" value=\"PUT\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["subscription_id"]) || array_key_exists("subscription_id", $context) ? $context["subscription_id"] : (function () { throw new RuntimeError('Variable "subscription_id" does not exist.', 13, $this->source); })())), "html", null, true);
            yield "\" />
            ";
            // line 14
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["button_config"]) || array_key_exists("button_config", $context) ? $context["button_config"] : (function () { throw new RuntimeError('Variable "button_config" does not exist.', 14, $this->source); })()), "expanded", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 15
                yield "                <button class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button_config"]) || array_key_exists("button_config", $context) ? $context["button_config"] : (function () { throw new RuntimeError('Variable "button_config" does not exist.', 15, $this->source); })()), "class", [], "any", false, false, false, 15), "html", null, true);
                yield "\" type=\"submit\">
                    <span>";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.cancel_subscription"), "html", null, true);
                yield "</span>
                </button>
            ";
            } else {
                // line 19
                yield "                <button class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button_config"]) || array_key_exists("button_config", $context) ? $context["button_config"] : (function () { throw new RuntimeError('Variable "button_config" does not exist.', 19, $this->source); })()), "class", [], "any", false, false, false, 19), "html", null, true);
                yield "\" type=\"submit\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-bs-title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.cancel_subscription"), "html", null, true);
                yield "\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cancel-subscription", (isset($context["order_token"]) || array_key_exists("order_token", $context) ? $context["order_token"] : (function () { throw new RuntimeError('Variable "order_token" does not exist.', 19, $this->source); })()));
                yield ">
                    ";
                // line 20
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:x", ["class" => "icon icon-sm flex-shrink-0"]);
                yield "
                </button>
            ";
            }
            // line 23
            yield "        </form>
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
        return "@SyliusMolliePlugin/shop/component/cancel_subscription.html.twig";
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
        return array (  101 => 23,  95 => 20,  86 => 19,  80 => 16,  75 => 15,  73 => 14,  69 => 13,  64 => 11,  60 => 10,  57 => 9,  55 => 8,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Rendered with Sylius\\MolliePlugin\\Twig\\Component\\Order\\CancelSubscriptionComponent (sylius_mollie:shop:order:cancel_subscription) #}

{% if order_token and subscription_id and cancellable_subscription %}
    {% set button_config = {
        expanded: false,
        class: 'btn btn-sm btn-outline-warning',
        container_class: '',
    }|merge(button_config|default({})) %}

    <div class=\"{{ button_config.container_class }}\">
        <form action=\"{{ path('sylius_mollie_shop_cancel_order_subscription', {'orderToken': order_token}) }}\" method=\"post\" novalidate>
            <input type=\"hidden\" name=\"_method\" value=\"PUT\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(subscription_id) }}\" />
            {% if button_config.expanded %}
                <button class=\"{{ button_config.class }}\" type=\"submit\">
                    <span>{{ 'sylius_mollie.ui.cancel_subscription'|trans }}</span>
                </button>
            {% else %}
                <button class=\"{{ button_config.class }}\" type=\"submit\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-bs-title=\"{{ 'sylius_mollie.ui.cancel_subscription'|trans }}\" {{ sylius_test_html_attribute('cancel-subscription', order_token) }}>
                    {{ ux_icon('tabler:x', { class: 'icon icon-sm flex-shrink-0' }) }}
                </button>
            {% endif %}
        </form>
    </div>
{% endif %}
", "@SyliusMolliePlugin/shop/component/cancel_subscription.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/shop/component/cancel_subscription.html.twig");
    }
}
