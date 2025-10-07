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

/* @SyliusShop/shared/order/show/summary/table_summary/taxes/value.html.twig */
class __TwigTemplate_56727748ed4b7d9233137fa18b2bdd53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/order/show/summary/table_summary/taxes/value.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/order/show/summary/table_summary/taxes/value.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/shared/macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["tax_included"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "order", [], "any", false, false, false, 3), "getTaxIncludedTotal", [], "method", false, false, false, 3);
        // line 4
        $context["tax_excluded"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "order", [], "any", false, false, false, 4), "getTaxExcludedTotal", [], "method", false, false, false, 4);
        // line 5
        yield "
<td class=\"text-end\">
    <div data-test=\"tax-total\" ";
        // line 7
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("tax-total");
        yield ">
        ";
        // line 8
        if (( !(isset($context["tax_included"]) || array_key_exists("tax_included", $context) ? $context["tax_included"] : (function () { throw new RuntimeError('Variable "tax_included" does not exist.', 8, $this->source); })()) &&  !(isset($context["tax_excluded"]) || array_key_exists("tax_excluded", $context) ? $context["tax_excluded"] : (function () { throw new RuntimeError('Variable "tax_excluded" does not exist.', 8, $this->source); })()))) {
            // line 9
            yield "            <div>";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 9, $this->getSourceContext())->macro_convertAndFormat(...[0]);
            yield "</div>
        ";
        }
        // line 11
        yield "        ";
        if ((($tmp = (isset($context["tax_excluded"]) || array_key_exists("tax_excluded", $context) ? $context["tax_excluded"] : (function () { throw new RuntimeError('Variable "tax_excluded" does not exist.', 11, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "            <div>";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 12, $this->getSourceContext())->macro_convertAndFormat(...[(isset($context["tax_excluded"]) || array_key_exists("tax_excluded", $context) ? $context["tax_excluded"] : (function () { throw new RuntimeError('Variable "tax_excluded" does not exist.', 12, $this->source); })())]);
            yield "</div>
        ";
        }
        // line 14
        yield "        ";
        if ((($tmp = (isset($context["tax_included"]) || array_key_exists("tax_included", $context) ? $context["tax_included"] : (function () { throw new RuntimeError('Variable "tax_included" does not exist.', 14, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "            <div class=\"disabled\">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 15, $this->getSourceContext())->macro_convertAndFormat(...[(isset($context["tax_included"]) || array_key_exists("tax_included", $context) ? $context["tax_included"] : (function () { throw new RuntimeError('Variable "tax_included" does not exist.', 15, $this->source); })())]);
            yield "</div>
        ";
        }
        // line 17
        yield "    </div>

    ";
        // line 19
        if ((($tmp = (isset($context["tax_included"]) || array_key_exists("tax_included", $context) ? $context["tax_included"] : (function () { throw new RuntimeError('Variable "tax_included" does not exist.', 19, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "        <div>
            <small class=\"text-body-tertiary\">
                ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.included_in_price"), "html", null, true);
            yield "
            </small>
        </div>
    ";
        }
        // line 26
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
        return "@SyliusShop/shared/order/show/summary/table_summary/taxes/value.html.twig";
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
        return array (  108 => 26,  101 => 22,  97 => 20,  95 => 19,  91 => 17,  85 => 15,  82 => 14,  76 => 12,  73 => 11,  67 => 9,  65 => 8,  61 => 7,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/shared/macro/money.html.twig\" as money %}

{% set tax_included = hookable_metadata.context.order.getTaxIncludedTotal() %}
{% set tax_excluded = hookable_metadata.context.order.getTaxExcludedTotal() %}

<td class=\"text-end\">
    <div data-test=\"tax-total\" {{ sylius_test_html_attribute('tax-total') }}>
        {% if not tax_included and not tax_excluded %}
            <div>{{ money.convertAndFormat(0) }}</div>
        {% endif %}
        {% if tax_excluded %}
            <div>{{ money.convertAndFormat(tax_excluded) }}</div>
        {% endif %}
        {% if tax_included %}
            <div class=\"disabled\">{{ money.convertAndFormat(tax_included) }}</div>
        {% endif %}
    </div>

    {% if tax_included %}
        <div>
            <small class=\"text-body-tertiary\">
                {{ 'sylius.ui.included_in_price'|trans }}
            </small>
        </div>
    {% endif %}
</td>
", "@SyliusShop/shared/order/show/summary/table_summary/taxes/value.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/order/show/summary/table_summary/taxes/value.html.twig");
    }
}
