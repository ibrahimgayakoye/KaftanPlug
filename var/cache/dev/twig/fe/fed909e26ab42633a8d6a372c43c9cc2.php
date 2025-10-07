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

/* @SyliusShop/checkout/select_shipping/content/form/shipments/shipment/choice.html.twig */
class __TwigTemplate_8388a9839852f16b358ccd79b85a57b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/checkout/select_shipping/content/form/shipments/shipment/choice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/checkout/select_shipping/content/form/shipments/shipment/choice.html.twig"));

        // line 1
        $context["form"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "form", [], "any", false, false, false, 1);
        // line 2
        yield "
<div class=\"mb-5\" ";
        // line 3
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipments");
        yield ">
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "method", [], "any", false, false, false, 4), 'errors');
        yield "

    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "method", [], "any", false, false, false, 6));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["choice_form"]) {
            // line 7
            yield "        ";
            $context["fee"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "method", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "shipping_costs", [], "any", false, false, false, 7), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice_form"], "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), [], "array", false, false, false, 7);
            // line 8
            yield "        ";
            $context["method"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "method", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "choices", [], "any", false, false, false, 8), $context["key"], [], "array", false, false, false, 8), "data", [], "any", false, false, false, 8);
            // line 9
            yield "
        <div class=\"card bg-body-tertiary border-0 mb-3\" ";
            // line 10
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipping-item");
            yield ">
            <label class=\"d-flex gap-3 card-body\">
                ";
            // line 12
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("choice", ["fee" => (isset($context["fee"]) || array_key_exists("fee", $context) ? $context["fee"] : (function () { throw new RuntimeError('Variable "fee" does not exist.', 12, $this->source); })()), "form" => $context["choice_form"], "method" => (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 12, $this->source); })())], $context, false);
            // line 13
            yield "            </label>
        </div>
    ";
            $context['_iterated'] = true;
        }
        // line 15
        if (!$context['_iterated']) {
            // line 16
            yield "        ";
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("choice#unavailable", [], $context, false);
            // line 17
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['choice_form'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
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
        return "@SyliusShop/checkout/select_shipping/content/form/shipments/shipment/choice.html.twig";
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
        return array (  102 => 18,  96 => 17,  92 => 16,  90 => 15,  84 => 13,  81 => 12,  76 => 10,  73 => 9,  70 => 8,  67 => 7,  62 => 6,  57 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set form = hookable_metadata.context.form %}

<div class=\"mb-5\" {{ sylius_test_html_attribute('shipments') }}>
    {{ form_errors(form.method) }}

    {% for key, choice_form in form.method %}
        {% set fee = form.method.vars.shipping_costs[choice_form.vars.value] %}
        {% set method = form.method.vars.choices[key].data %}

        <div class=\"card bg-body-tertiary border-0 mb-3\" {{ sylius_test_html_attribute('shipping-item') }}>
            <label class=\"d-flex gap-3 card-body\">
                {% hook 'choice' with { fee, 'form': choice_form, method } %}
            </label>
        </div>
    {% else %}
        {% hook 'choice#unavailable' %}
    {% endfor %}
</div>
", "@SyliusShop/checkout/select_shipping/content/form/shipments/shipment/choice.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/checkout/select_shipping/content/form/shipments/shipment/choice.html.twig");
    }
}
