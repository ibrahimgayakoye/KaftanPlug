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

/* @SyliusAdmin/dashboard/index/content/statistics_chart.html.twig */
class __TwigTemplate_f33d7bbe396d5cbf53565d78a5a9fc59 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/dashboard/index/content/statistics_chart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/dashboard/index/content/statistics_chart.html.twig"));

        // line 1
        $context["statistics_data"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "statistics_data", [], "any", false, false, false, 1);
        // line 2
        $context["period"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "period", [], "any", false, false, false, 2);
        // line 3
        yield "
<div class=\"card mb-3\">
    <div data-loading>
        <div class=\"sylius-loader\">
            <img src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/admin/images/loader.svg", "admin"), "html", null, true);
        yield "\" alt=\"Loading\"/>
        </div>
    </div>
    <div class=\"card-body\">
        <div class=\"d-flex justify-content-end gap-5 mb-3\">
            <div class=\"btn-group\" role=\"group\">
                <button
                    type=\"button\"
                    class=\"btn ";
        // line 15
        if (((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 15, $this->source); })()) == "2 weeks")) {
            yield "btn-light border";
        }
        yield "\"
                    data-action=\"live#action\"
                    data-live-action-param=\"prevent|changeRange\"
                    data-live-period-param=\"2 weeks\"
                    data-live-interval-param=\"day\"
                >
                    ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.statistics.2weeks"), "html", null, true);
        yield "
                </button>
                <button
                    type=\"button\"
                    class=\"btn ";
        // line 25
        if (((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 25, $this->source); })()) == "month")) {
            yield "btn-light border";
        }
        yield "\"
                    data-action=\"live#action\"
                    data-live-action-param=\"prevent|changeRange\"
                    data-live-period-param=\"month\"
                    data-live-interval-param=\"day\"
                >
                    ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.statistics.month"), "html", null, true);
        yield "
                </button>
                <button
                    type=\"button\"
                    class=\"btn ";
        // line 35
        if (((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 35, $this->source); })()) == "year")) {
            yield "btn-light border";
        }
        yield "\"
                    data-action=\"live#action\"
                    data-live-action-param=\"prevent|changeRange\"
                    data-live-period-param=\"year\"
                    data-live-interval-param=\"month\"
                    ";
        // line 40
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("year-split-into-months");
        yield "
                >
                    ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.statistics.year"), "html", null, true);
        yield "
                </button>
            </div>
            <div class=\"btn-group\" role=\"group\">
                <button
                    type=\"button\"
                    class=\"btn btn-icon navigation navigation-prev\"
                    data-action=\"live#action\"
                    data-live-action-param=\"prevent|getPreviousPeriod\"
                    ";
        // line 51
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("previous-period");
        yield "
                >
                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:arrow-left", ["class" => "icon dropdown-item-icon"]);
        yield "
                </button>
                <button
                    type=\"button\"
                    class=\"btn btn-icon navigation navigation-prev\"
                    data-action=\"live#action\"
                    data-live-action-param=\"prevent|getNextPeriod\"
                    ";
        // line 60
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("next-period");
        yield "
                >
                    ";
        // line 62
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:arrow-right", ["class" => "icon dropdown-item-icon"]);
        yield "
                </button>
            </div>
        </div>

        <div
            id=\"statistics-chart\"
            class=\"chart-lg\"
            data-intervals=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistics_data"]) || array_key_exists("statistics_data", $context) ? $context["statistics_data"] : (function () { throw new RuntimeError('Variable "statistics_data" does not exist.', 70, $this->source); })()), "sales_summary", [], "any", false, false, false, 70), "intervals", [], "any", false, false, false, 70)), "html", null, true);
        yield "\"
            data-sales=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistics_data"]) || array_key_exists("statistics_data", $context) ? $context["statistics_data"] : (function () { throw new RuntimeError('Variable "statistics_data" does not exist.', 71, $this->source); })()), "sales_summary", [], "any", false, false, false, 71), "sales", [], "any", false, false, false, 71)), "html", null, true);
        yield "\"
            data-paid-orders-count=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistics_data"]) || array_key_exists("statistics_data", $context) ? $context["statistics_data"] : (function () { throw new RuntimeError('Variable "statistics_data" does not exist.', 72, $this->source); })()), "sales_summary", [], "any", false, false, false, 72), "paid_orders_count", [], "any", false, false, false, 72)), "html", null, true);
        yield "\"
            data-currency=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistics_data"]) || array_key_exists("statistics_data", $context) ? $context["statistics_data"] : (function () { throw new RuntimeError('Variable "statistics_data" does not exist.', 73, $this->source); })()), "currency_symbol", [], "any", false, false, false, 73), "html", null, true);
        yield "\"
        ></div>
    </div>
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
        return "@SyliusAdmin/dashboard/index/content/statistics_chart.html.twig";
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
        return array (  175 => 73,  171 => 72,  167 => 71,  163 => 70,  152 => 62,  147 => 60,  137 => 53,  132 => 51,  120 => 42,  115 => 40,  105 => 35,  98 => 31,  87 => 25,  80 => 21,  69 => 15,  58 => 7,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set statistics_data = hookable_metadata.context.statistics_data %}
{% set period = hookable_metadata.context.period %}

<div class=\"card mb-3\">
    <div data-loading>
        <div class=\"sylius-loader\">
            <img src=\"{{ asset('build/admin/images/loader.svg', 'admin') }}\" alt=\"Loading\"/>
        </div>
    </div>
    <div class=\"card-body\">
        <div class=\"d-flex justify-content-end gap-5 mb-3\">
            <div class=\"btn-group\" role=\"group\">
                <button
                    type=\"button\"
                    class=\"btn {% if period == '2 weeks' %}btn-light border{% endif %}\"
                    data-action=\"live#action\"
                    data-live-action-param=\"prevent|changeRange\"
                    data-live-period-param=\"2 weeks\"
                    data-live-interval-param=\"day\"
                >
                    {{ 'sylius.ui.statistics.2weeks'|trans }}
                </button>
                <button
                    type=\"button\"
                    class=\"btn {% if period == 'month' %}btn-light border{% endif %}\"
                    data-action=\"live#action\"
                    data-live-action-param=\"prevent|changeRange\"
                    data-live-period-param=\"month\"
                    data-live-interval-param=\"day\"
                >
                    {{ 'sylius.ui.statistics.month'|trans }}
                </button>
                <button
                    type=\"button\"
                    class=\"btn {% if period == 'year' %}btn-light border{% endif %}\"
                    data-action=\"live#action\"
                    data-live-action-param=\"prevent|changeRange\"
                    data-live-period-param=\"year\"
                    data-live-interval-param=\"month\"
                    {{ sylius_test_html_attribute('year-split-into-months') }}
                >
                    {{ 'sylius.ui.statistics.year'|trans }}
                </button>
            </div>
            <div class=\"btn-group\" role=\"group\">
                <button
                    type=\"button\"
                    class=\"btn btn-icon navigation navigation-prev\"
                    data-action=\"live#action\"
                    data-live-action-param=\"prevent|getPreviousPeriod\"
                    {{ sylius_test_html_attribute('previous-period') }}
                >
                    {{ ux_icon('tabler:arrow-left', {'class': 'icon dropdown-item-icon'}) }}
                </button>
                <button
                    type=\"button\"
                    class=\"btn btn-icon navigation navigation-prev\"
                    data-action=\"live#action\"
                    data-live-action-param=\"prevent|getNextPeriod\"
                    {{ sylius_test_html_attribute('next-period') }}
                >
                    {{ ux_icon('tabler:arrow-right', {'class': 'icon dropdown-item-icon'}) }}
                </button>
            </div>
        </div>

        <div
            id=\"statistics-chart\"
            class=\"chart-lg\"
            data-intervals=\"{{ statistics_data.sales_summary.intervals|json_encode }}\"
            data-sales=\"{{ statistics_data.sales_summary.sales|json_encode }}\"
            data-paid-orders-count=\"{{ statistics_data.sales_summary.paid_orders_count|json_encode }}\"
            data-currency=\"{{ statistics_data.currency_symbol }}\"
        ></div>
    </div>
</div>
", "@SyliusAdmin/dashboard/index/content/statistics_chart.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/dashboard/index/content/statistics_chart.html.twig");
    }
}
