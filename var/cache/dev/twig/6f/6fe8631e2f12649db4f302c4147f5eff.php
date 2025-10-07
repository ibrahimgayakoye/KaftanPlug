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

/* @SyliusMolliePlugin/admin/order/show/content/sections/summary/voucher_total.html.twig */
class __TwigTemplate_6e068eda6e0b2752e3d8b747a09f3c78 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/order/show/content/sections/summary/voucher_total.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/order/show/content/sections/summary/voucher_total.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/shared/helper/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["unit_promotion_adjustment_voucher"] = Twig\Extension\CoreExtension::constant("Sylius\\MolliePlugin\\Model\\PaymentMethod\\MealVoucher::MEAL_VOUCHERS");
        // line 4
        $context["order"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "resource", [], "any", false, false, false, 4);
        // line 5
        yield "
";
        // line 6
        $context["unit_promotion_total_voucher"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "getAdjustmentsTotalRecursively", [(isset($context["unit_promotion_adjustment_voucher"]) || array_key_exists("unit_promotion_adjustment_voucher", $context) ? $context["unit_promotion_adjustment_voucher"] : (function () { throw new RuntimeError('Variable "unit_promotion_adjustment_voucher" does not exist.', 6, $this->source); })())], "method", false, false, false, 6);
        // line 7
        yield "
";
        // line 8
        if ((($tmp = (isset($context["unit_promotion_total_voucher"]) || array_key_exists("unit_promotion_total_voucher", $context) ? $context["unit_promotion_total_voucher"] : (function () { throw new RuntimeError('Variable "unit_promotion_total_voucher" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "    <tr>
        <td>
            <strong>";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.voucher_promotion"), "html", null, true);
            yield "</strong>:
        </td>
        <td class=\"text-end voucher-disabled\">
            ";
            // line 14
            yield $macros["money"]->getTemplateForMacro("macro_format", $context, 14, $this->getSourceContext())->macro_format(...[(isset($context["unit_promotion_total_voucher"]) || array_key_exists("unit_promotion_total_voucher", $context) ? $context["unit_promotion_total_voucher"] : (function () { throw new RuntimeError('Variable "unit_promotion_total_voucher" does not exist.', 14, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "currencyCode", [], "any", false, false, false, 14)]);
            yield "
        </td>
    </tr>
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
        return "@SyliusMolliePlugin/admin/order/show/content/sections/summary/voucher_total.html.twig";
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
        return array (  77 => 14,  71 => 11,  67 => 9,  65 => 8,  62 => 7,  60 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/shared/helper/money.html.twig' as money %}

{% set unit_promotion_adjustment_voucher = constant('Sylius\\\\MolliePlugin\\\\Model\\\\PaymentMethod\\\\MealVoucher::MEAL_VOUCHERS') %}
{% set order = hookable_metadata.context.resource %}

{% set unit_promotion_total_voucher = order.getAdjustmentsTotalRecursively(unit_promotion_adjustment_voucher) %}

{% if unit_promotion_total_voucher %}
    <tr>
        <td>
            <strong>{{ 'sylius_mollie.ui.voucher_promotion'|trans }}</strong>:
        </td>
        <td class=\"text-end voucher-disabled\">
            {{ money.format(unit_promotion_total_voucher, order.currencyCode) }}
        </td>
    </tr>
{% endif %}
", "@SyliusMolliePlugin/admin/order/show/content/sections/summary/voucher_total.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/order/show/content/sections/summary/voucher_total.html.twig");
    }
}
