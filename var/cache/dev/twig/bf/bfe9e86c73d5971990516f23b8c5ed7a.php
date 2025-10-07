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

/* @SyliusShop/shared/grid/data_table.html.twig */
class __TwigTemplate_945437fa92e367402d5902f22e75010e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/grid/data_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/grid/data_table.html.twig"));

        // line 1
        $macros["table"] = $this->macros["table"] = $this->load("@SyliusShop/shared/macro/grid/table.html.twig", 1)->unwrap();
        // line 2
        $macros["pagination"] = $this->macros["pagination"] = $this->load("@SyliusShop/shared/macro/pagination.html.twig", 2)->unwrap();
        // line 3
        yield "
";
        // line 4
        $context["resources"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "resources", [], "any", false, false, false, 4);
        // line 5
        $context["data"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 5, $this->source); })()), "data", [], "any", false, false, false, 5);
        // line 6
        $context["definition"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 6, $this->source); })()), "definition", [], "any", false, false, false, 6);
        // line 7
        yield "
";
        // line 8
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })())) > 0)) {
            // line 9
            yield "    <div class=\"card\">
        <div class=\"card-body border-bottom py-3\">
            <div class=\"d-flex border-bottom pb-3\">
                ";
            // line 12
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 12), "bulk", [], "any", true, true, false, 12) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 12, $this->source); })()), "getEnabledActions", ["bulk"], "method", false, false, false, 12)) > 0))) {
                // line 13
                yield "                    <div class=\"sylius-grid-nav__bulk\">
                        ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Sylius\TwigExtra\Twig\Extension\SortByExtension']->sortBy(CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 14, $this->source); })()), "getEnabledActions", ["bulk"], "method", false, false, false, 14), "position"));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 15
                    yield "                            ";
                    yield $this->env->getFunction('sylius_grid_render_bulk_action')->getCallable()((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 15, $this->source); })()), $context["action"], null);
                    yield "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                yield "                    </div>
                ";
            }
            // line 19
            yield "
                ";
            // line 20
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 20, $this->source); })()), "limits", [], "any", false, false, false, 20)) > 1) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })())) > min(CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 20, $this->source); })()), "limits", [], "any", false, false, false, 20))))) {
                // line 21
                yield "                    <div class=\"ms-auto\">
                        ";
                // line 22
                yield $macros["pagination"]->getTemplateForMacro("macro_number_of_results_selector", $context, 22, $this->getSourceContext())->macro_number_of_results_selector(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 22, $this->source); })()), "limits", [], "any", false, false, false, 22)]);
                yield "
                    </div>
                ";
            }
            // line 25
            yield "            </div>

            <div class=\"table-responsive\">
                <table class=\"table card-table table-vcenter text-nowrap datatable\" ";
            // line 28
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("grid-table");
            yield ">
                    <thead>
                        <tr>
                            ";
            // line 31
            yield $macros["table"]->getTemplateForMacro("macro_headers", $context, 31, $this->getSourceContext())->macro_headers(...[(isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 31, $this->source); })()), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 31, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "attributes", [], "any", false, false, false, 31)]);
            yield "
                        </tr>
                    </thead>
                    <tbody ";
            // line 34
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("grid-table-body");
            yield ">
                        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 36
                yield "                            ";
                yield $macros["table"]->getTemplateForMacro("macro_row", $context, 36, $this->getSourceContext())->macro_row(...[(isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 36, $this->source); })()), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 36, $this->source); })()), $context["row"]]);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "                    </tbody>
                </table>
            </div>

            <div class=\"d-flex align-items-center\">
                <div class=\"ms-auto\">
                    ";
            // line 44
            yield $macros["pagination"]->getTemplateForMacro("macro_simple", $context, 44, $this->getSourceContext())->macro_simple(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 44, $this->source); })())]);
            yield "
                </div>
            </div>
        </div>
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
        return "@SyliusShop/shared/grid/data_table.html.twig";
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
        return array (  149 => 44,  141 => 38,  132 => 36,  128 => 35,  124 => 34,  118 => 31,  112 => 28,  107 => 25,  101 => 22,  98 => 21,  96 => 20,  93 => 19,  89 => 17,  80 => 15,  76 => 14,  73 => 13,  71 => 12,  66 => 9,  64 => 8,  61 => 7,  59 => 6,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusShop/shared/macro/grid/table.html.twig' as table %}
{% import '@SyliusShop/shared/macro/pagination.html.twig' as pagination %}

{% set resources = hookable_metadata.context.resources %}
{% set data = resources.data %}
{% set definition = resources.definition %}

{% if data|length > 0 %}
    <div class=\"card\">
        <div class=\"card-body border-bottom py-3\">
            <div class=\"d-flex border-bottom pb-3\">
                {% if definition.actionGroups.bulk is defined and definition.getEnabledActions('bulk')|length > 0 %}
                    <div class=\"sylius-grid-nav__bulk\">
                        {% for action in definition.getEnabledActions('bulk')|sylius_sort_by('position') %}
                            {{ sylius_grid_render_bulk_action(grid, action, null) }}
                        {% endfor %}
                    </div>
                {% endif %}

                {% if definition.limits|length > 1 and data|length > min(definition.limits) %}
                    <div class=\"ms-auto\">
                        {{ pagination.number_of_results_selector(data, definition.limits) }}
                    </div>
                {% endif %}
            </div>

            <div class=\"table-responsive\">
                <table class=\"table card-table table-vcenter text-nowrap datatable\" {{ sylius_test_html_attribute('grid-table') }}>
                    <thead>
                        <tr>
                            {{ table.headers(resources, definition, app.request.attributes) }}
                        </tr>
                    </thead>
                    <tbody {{ sylius_test_html_attribute('grid-table-body') }}>
                        {% for row in data %}
                            {{ table.row(resources, definition, row) }}
                        {% endfor %}
                    </tbody>
                </table>
            </div>

            <div class=\"d-flex align-items-center\">
                <div class=\"ms-auto\">
                    {{ pagination.simple(data) }}
                </div>
            </div>
        </div>
    </div>
{% endif %}
", "@SyliusShop/shared/grid/data_table.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/grid/data_table.html.twig");
    }
}
