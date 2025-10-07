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

/* @SyliusMolliePlugin/shop/shared/order/show/summary/table/body/recurring_settings.html.twig */
class __TwigTemplate_55f64ba25b34b42aa371d6d94245685d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/shop/shared/order/show/summary/table/body/recurring_settings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/shop/shared/order/show/summary/table/body/recurring_settings.html.twig"));

        // line 1
        $context["item"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "item", [], "any", false, false, false, 1);
        // line 2
        $context["variant"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 2, $this->source); })()), "variant", [], "any", false, false, false, 2);
        // line 3
        yield "
<td class=\"text-end\">";
        // line 5
        if (( !(null === (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 5, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 5, $this->source); })()), "recurring", [], "any", false, false, false, 5))) {
            // line 6
            $context["interval"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["variant"] ?? null), "interval", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 6, $this->source); })()), "interval", [], "any", false, false, false, 6), "")) : ("")), " ");
            // line 7
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 7, $this->source); })())) == 2)) {
                // line 8
                yield "        ";
                $context["intervalValue"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 8, $this->source); })()), 0, [], "array", false, false, false, 8);
                // line 9
                yield "        ";
                $context["intervalUnit"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 9, $this->source); })()), 1, [], "array", false, false, false, 9);
                // line 10
                yield "        <span>
            ";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(Twig\Extension\CoreExtension::sprintf("sylius_mollie.shop.product_variant.every.%s", (isset($context["intervalUnit"]) || array_key_exists("intervalUnit", $context) ? $context["intervalUnit"] : (function () { throw new RuntimeError('Variable "intervalUnit" does not exist.', 11, $this->source); })())), ["%amount%" => (isset($context["intervalValue"]) || array_key_exists("intervalValue", $context) ? $context["intervalValue"] : (function () { throw new RuntimeError('Variable "intervalValue" does not exist.', 11, $this->source); })())])), "html", null, true);
                yield ",
            ";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 12, $this->source); })()), "times", [], "any", false, false, false, 12), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.shop.product_variant.times"), "html", null, true);
                yield "
        </span>
    ";
            }
        } else {
            // line 16
            yield "<span>";
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:x");
            yield "</span>";
        }
        // line 18
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
        return "@SyliusMolliePlugin/shop/shared/order/show/summary/table/body/recurring_settings.html.twig";
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
        return array (  89 => 18,  84 => 16,  75 => 12,  71 => 11,  68 => 10,  65 => 9,  62 => 8,  59 => 7,  57 => 6,  55 => 5,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set item = hookable_metadata.context.item %}
{% set variant = item.variant %}

<td class=\"text-end\">
{%- if variant is not null and variant.recurring -%}
    {% set interval = variant.interval|default('')|split(' ') %}
    {% if interval|length == 2 %}
        {% set intervalValue = interval[0] %}
        {% set intervalUnit = interval[1] %}
        <span>
            {{ 'sylius_mollie.shop.product_variant.every.%s'|format(intervalUnit)|trans({'%amount%': intervalValue})|capitalize }},
            {{ variant.times }} {{ 'sylius_mollie.shop.product_variant.times'|trans }}
        </span>
    {% endif %}
{%- else -%}
    <span>{{ ux_icon('tabler:x') }}</span>
{%- endif -%}
</td>
", "@SyliusMolliePlugin/shop/shared/order/show/summary/table/body/recurring_settings.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/shop/shared/order/show/summary/table/body/recurring_settings.html.twig");
    }
}
