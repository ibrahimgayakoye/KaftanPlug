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

/* @SyliusMolliePlugin/shop/product/show/content/info/summary/recurring_settings.html.twig */
class __TwigTemplate_820511d4efcae40d154d43da27f5bf2f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/shop/product/show/content/info/summary/recurring_settings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/shop/product/show/content/info/summary/recurring_settings.html.twig"));

        // line 1
        $context["variant"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 1), "variant", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "variant", [], "any", false, false, false, 1), null)) : (null));
        // line 3
        if (( !(null === (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 3, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 3, $this->source); })()), "recurring", [], "any", false, false, false, 3))) {
            // line 4
            $context["interval"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["variant"] ?? null), "interval", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 4, $this->source); })()), "interval", [], "any", false, false, false, 4), "")) : ("")), " ");
            // line 5
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 5, $this->source); })())) == 2)) {
                // line 6
                yield "        ";
                $context["intervalValue"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 6, $this->source); })()), 0, [], "array", false, false, false, 6);
                // line 7
                yield "        ";
                $context["intervalUnit"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 7, $this->source); })()), 1, [], "array", false, false, false, 7);
                // line 8
                yield "
        <div class=\"mb-1 pb-1\">
            <span class=\"badge bg-secondary\">
                ";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.shop.product_variant.recurring"), "html", null, true);
                yield ":

                ";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(Twig\Extension\CoreExtension::sprintf("sylius_mollie.shop.product_variant.every.%s", (isset($context["intervalUnit"]) || array_key_exists("intervalUnit", $context) ? $context["intervalUnit"] : (function () { throw new RuntimeError('Variable "intervalUnit" does not exist.', 13, $this->source); })())), ["%amount%" => (isset($context["intervalValue"]) || array_key_exists("intervalValue", $context) ? $context["intervalValue"] : (function () { throw new RuntimeError('Variable "intervalValue" does not exist.', 13, $this->source); })())]), "html", null, true);
                yield ",

                ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 15, $this->source); })()), "times", [], "any", false, false, false, 15), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.shop.product_variant.times"), "html", null, true);
                yield "
            </span>
        </div>
    ";
            }
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
        return "@SyliusMolliePlugin/shop/product/show/content/info/summary/recurring_settings.html.twig";
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
        return array (  78 => 15,  73 => 13,  68 => 11,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  52 => 4,  50 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set variant = hookable_metadata.context.variant|default(null) %}

{%- if variant is not null and variant.recurring -%}
    {% set interval = variant.interval|default('')|split(' ') %}
    {% if interval|length == 2 %}
        {% set intervalValue = interval[0] %}
        {% set intervalUnit = interval[1] %}

        <div class=\"mb-1 pb-1\">
            <span class=\"badge bg-secondary\">
                {{ 'sylius_mollie.shop.product_variant.recurring'|trans }}:

                {{ 'sylius_mollie.shop.product_variant.every.%s'|format(intervalUnit)|trans({'%amount%': intervalValue}) }},

                {{ variant.times }} {{ 'sylius_mollie.shop.product_variant.times'|trans }}
            </span>
        </div>
    {% endif %}
{%- endif -%}
", "@SyliusMolliePlugin/shop/product/show/content/info/summary/recurring_settings.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/shop/product/show/content/info/summary/recurring_settings.html.twig");
    }
}
