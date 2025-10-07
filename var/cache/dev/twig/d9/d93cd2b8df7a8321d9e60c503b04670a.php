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

/* @SyliusAdmin/order/show/content/sections/shipments/item/general.html.twig */
class __TwigTemplate_4d3527eabbfa7ceb3cf14d62d7ca11ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/show/content/sections/shipments/item/general.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/show/content/sections/shipments/item/general.html.twig"));

        // line 1
        $context["shipment"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "shipment", [], "any", false, false, false, 1);
        // line 2
        yield "
<td class=\"px-3 py-2 text-nowrap\">
    <div class=\"py-2\">
        <strong ";
        // line 5
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipment-method");
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 5, $this->source); })()), "method", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
        yield "</strong>
        <div class=\"text-secondary\">";
        // line 6
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:world");
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 6, $this->source); })()), "method", [], "any", false, false, false, 6), "zone", [], "any", false, false, false, 6), "html", null, true);
        yield "</div>
    </div>
    ";
        // line 8
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 8, $this->source); })()), "shippedAt", [], "any", false, false, false, 8))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "        <div class=\"text-secondary-emphasis\">
            <strong>";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipped_at"), "html", null, true);
            yield ":</strong>
            <span ";
            // line 11
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipped-at-date");
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 11, $this->source); })()), "shippedAt", [], "any", false, false, false, 11), "d-m-Y H:i:s"), "html", null, true);
            yield "</span>
        </div>
    ";
        }
        // line 14
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 14, $this->source); })()), "state", [], "any", false, false, false, 14) == "shipped") &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 14, $this->source); })()), "tracking", [], "any", false, false, false, 14)))) {
            // line 15
            yield "        <div class=\"text-secondary-emphasis\">
            <strong>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tracking_code"), "html", null, true);
            yield ":</strong>
            <span>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 17, $this->source); })()), "tracking", [], "any", false, false, false, 17), "html", null, true);
            yield "</span>
        </div>
    ";
        }
        // line 20
        yield "</td>
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
        return "@SyliusAdmin/order/show/content/sections/shipments/item/general.html.twig";
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
        return array (  101 => 20,  95 => 17,  91 => 16,  88 => 15,  85 => 14,  77 => 11,  73 => 10,  70 => 9,  68 => 8,  61 => 6,  55 => 5,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set shipment = hookable_metadata.context.shipment %}

<td class=\"px-3 py-2 text-nowrap\">
    <div class=\"py-2\">
        <strong {{ sylius_test_html_attribute('shipment-method') }}>{{ shipment.method.name }}</strong>
        <div class=\"text-secondary\">{{ ux_icon('tabler:world') }} {{ shipment.method.zone }}</div>
    </div>
    {% if shipment.shippedAt is not empty %}
        <div class=\"text-secondary-emphasis\">
            <strong>{{ 'sylius.ui.shipped_at'|trans }}:</strong>
            <span {{ sylius_test_html_attribute('shipped-at-date') }}>{{ shipment.shippedAt|date('d-m-Y H:i:s') }}</span>
        </div>
    {% endif %}
    {% if shipment.state == 'shipped' and shipment.tracking is not empty %}
        <div class=\"text-secondary-emphasis\">
            <strong>{{ 'sylius.ui.tracking_code'|trans }}:</strong>
            <span>{{ shipment.tracking }}</span>
        </div>
    {% endif %}
</td>
", "@SyliusAdmin/order/show/content/sections/shipments/item/general.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/order/show/content/sections/shipments/item/general.html.twig");
    }
}
