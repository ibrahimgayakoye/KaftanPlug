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

/* @SyliusShop/order/show/content/form/pay_button.html.twig */
class __TwigTemplate_97160e98e390b9a5b80c07fe2ecf9f0e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/order/show/content/form/pay_button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/order/show/content/form/pay_button.html.twig"));

        // line 1
        $context["order"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "order", [], "any", false, false, false, 1);
        // line 2
        $context["order_cannot_be_paid"] =  !$this->extensions['Sylius\Bundle\ShopBundle\Twig\OrderPaymentsExtension']->allNewPaymentsCanBePaid((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 2, $this->source); })()));
        // line 3
        yield "
<div class=\"d-grid\">
    <button type=\"submit\" class=\"btn btn-primary";
        // line 5
        if ((($tmp = (isset($context["order_cannot_be_paid"]) || array_key_exists("order_cannot_be_paid", $context) ? $context["order_cannot_be_paid"] : (function () { throw new RuntimeError('Variable "order_cannot_be_paid" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " disabled";
        }
        yield "\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("pay-link");
        yield " ";
        if ((($tmp = (isset($context["order_cannot_be_paid"]) || array_key_exists("order_cannot_be_paid", $context) ? $context["order_cannot_be_paid"] : (function () { throw new RuntimeError('Variable "order_cannot_be_paid" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled";
        }
        yield ">
        ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pay"), "html", null, true);
        yield "
    </button>
</div>
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
        return "@SyliusShop/order/show/content/form/pay_button.html.twig";
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
        return array (  68 => 6,  56 => 5,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set order = hookable_metadata.context.order %}
{% set order_cannot_be_paid = not sylius_order_can_be_paid(order) %}

<div class=\"d-grid\">
    <button type=\"submit\" class=\"btn btn-primary{% if order_cannot_be_paid %} disabled{% endif %}\" {{ sylius_test_html_attribute('pay-link') }} {% if order_cannot_be_paid %}disabled{% endif %}>
        {{ 'sylius.ui.pay'|trans }}
    </button>
</div>
", "@SyliusShop/order/show/content/form/pay_button.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/order/show/content/form/pay_button.html.twig");
    }
}
