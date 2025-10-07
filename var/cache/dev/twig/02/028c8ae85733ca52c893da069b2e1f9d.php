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

/* @SyliusAdmin/dashboard/index/content/statistics_grid/sales.html.twig */
class __TwigTemplate_6eba26c8aa1bcb117393392fceef6b2d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/dashboard/index/content/statistics_grid/sales.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/dashboard/index/content/statistics_grid/sales.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/shared/helper/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["statistics_data"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "statistics_data", [], "any", false, false, false, 3);
        // line 4
        yield "
<div class=\"col-sm-6 col-lg-3 mb-3\">
    <div class=\"card card-sm\">
        <div data-loading>
            <div class=\"sylius-loader\">
                <img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/admin/images/loader.svg", "admin"), "html", null, true);
        yield "\" alt=\"Loading\"/>
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                <div class=\"col-auto\">
                    <span class=\"bg-gray text-black-50 avatar\">
                        ";
        // line 16
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:coins");
        yield "
                    </span>
                </div>
                <div class=\"col\">
                    <div class=\"subheader\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sales"), "html", null, true);
        yield "</div>
                    <div class=\"h2 mb-0 me-2\" ";
        // line 21
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("total-sales");
        yield ">
                        ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sylius_format_money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistics_data"]) || array_key_exists("statistics_data", $context) ? $context["statistics_data"] : (function () { throw new RuntimeError('Variable "statistics_data" does not exist.', 22, $this->source); })()), "business_activity_summary", [], "any", false, false, false, 22), "totalSales", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistics_data"]) || array_key_exists("statistics_data", $context) ? $context["statistics_data"] : (function () { throw new RuntimeError('Variable "statistics_data" does not exist.', 22, $this->source); })()), "channel", [], "any", false, false, false, 22), "baseCurrency", [], "any", false, false, false, 22), "code", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistics_data"]) || array_key_exists("statistics_data", $context) ? $context["statistics_data"] : (function () { throw new RuntimeError('Variable "statistics_data" does not exist.', 22, $this->source); })()), "channel", [], "any", false, false, false, 22), "defaultLocale", [], "any", false, false, false, 22), "code", [], "any", false, false, false, 22)), "html", null, true);
        yield "
                    </div>
                </div>
            </div>
        </div>
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
        return "@SyliusAdmin/dashboard/index/content/statistics_grid/sales.html.twig";
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
        return array (  87 => 22,  83 => 21,  79 => 20,  72 => 16,  62 => 9,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/shared/helper/money.html.twig' as money %}

{% set statistics_data = hookable_metadata.context.statistics_data %}

<div class=\"col-sm-6 col-lg-3 mb-3\">
    <div class=\"card card-sm\">
        <div data-loading>
            <div class=\"sylius-loader\">
                <img src=\"{{ asset('build/admin/images/loader.svg', 'admin') }}\" alt=\"Loading\"/>
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                <div class=\"col-auto\">
                    <span class=\"bg-gray text-black-50 avatar\">
                        {{ ux_icon('tabler:coins') }}
                    </span>
                </div>
                <div class=\"col\">
                    <div class=\"subheader\">{{ 'sylius.ui.sales'|trans }}</div>
                    <div class=\"h2 mb-0 me-2\" {{ sylius_test_html_attribute('total-sales') }}>
                        {{ statistics_data.business_activity_summary.totalSales|sylius_format_money(statistics_data.channel.baseCurrency.code, statistics_data.channel.defaultLocale.code) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "@SyliusAdmin/dashboard/index/content/statistics_grid/sales.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/dashboard/index/content/statistics_grid/sales.html.twig");
    }
}
