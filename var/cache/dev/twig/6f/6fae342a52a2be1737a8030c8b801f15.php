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

/* @SyliusAdmin/shared/crud/index/content/grid/data_table.html.twig */
class __TwigTemplate_0888f563f4a2108df6e90f6e26d3b01b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/index/content/grid/data_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/index/content/grid/data_table.html.twig"));

        // line 1
        $macros["table"] = $this->macros["table"] = $this->load("@SyliusAdmin/shared/helper/table.html.twig", 1)->unwrap();
        // line 2
        $macros["pagination"] = $this->macros["pagination"] = $this->load("@SyliusAdmin/shared/helper/pagination.html.twig", 2)->unwrap();
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
            <div class=\"d-flex\">
                ";
            // line 12
            if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })())) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 12), "bulk", [], "any", true, true, false, 12)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 12, $this->source); })()), "getEnabledActions", ["bulk"], "method", false, false, false, 12)) > 0))) {
                // line 13
                yield "                    <div class=\"sylius-grid-nav__bulk grid\">
                        ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 14, $this->source); })()), "getEnabledActions", ["bulk"], "method", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 15
                    yield "                            ";
                    yield $this->env->getFunction('sylius_grid_render_bulk_action')->getCallable()((isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 15, $this->source); })()), $context["action"], null);
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
            yield "                <div class=\"ms-auto\">
                    ";
            // line 20
            yield $macros["pagination"]->getTemplateForMacro("macro_number_of_results_selector", $context, 20, $this->getSourceContext())->macro_number_of_results_selector(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 20, $this->source); })()), "limits", [], "any", false, false, false, 20)]);
            yield "
                </div>
            </div>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table card-table table-vcenter datatable\" ";
            // line 25
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("grid-table");
            yield ">
                <thead>
                <tr>
                    ";
            // line 28
            yield $macros["table"]->getTemplateForMacro("macro_headers", $context, 28, $this->getSourceContext())->macro_headers(...[(isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 28, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 28, $this->source); })()), "definition", [], "any", false, false, false, 28), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "attributes", [], "any", false, false, false, 28)]);
            yield "
                </tr>
                </thead>
                <tbody ";
            // line 31
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("grid-table-body");
            yield ">
                ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 32, $this->source); })()), "data", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 33
                yield "                    ";
                yield $macros["table"]->getTemplateForMacro("macro_row", $context, 33, $this->getSourceContext())->macro_row(...[(isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 33, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 33, $this->source); })()), "definition", [], "any", false, false, false, 33), $context["row"]]);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "                </tbody>
            </table>
        </div>
        <div class=\"card-footer d-flex align-items-center gap-2 flex-wrap\">
            <div class=\"text-muted\">
                ";
            // line 40
            yield $macros["pagination"]->getTemplateForMacro("macro_results_count", $context, 40, $this->getSourceContext())->macro_results_count(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 40, $this->source); })())]);
            yield "
            </div>
            <div class=\"ms-auto\">
                ";
            // line 43
            yield $macros["pagination"]->getTemplateForMacro("macro_simple", $context, 43, $this->getSourceContext())->macro_simple(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })())]);
            yield "
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
        return "@SyliusAdmin/shared/crud/index/content/grid/data_table.html.twig";
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
        return array (  146 => 43,  140 => 40,  133 => 35,  124 => 33,  120 => 32,  116 => 31,  110 => 28,  104 => 25,  96 => 20,  93 => 19,  89 => 17,  80 => 15,  76 => 14,  73 => 13,  71 => 12,  66 => 9,  64 => 8,  61 => 7,  59 => 6,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/shared/helper/table.html.twig' as table %}
{% import '@SyliusAdmin/shared/helper/pagination.html.twig' as pagination %}

{% set resources = hookable_metadata.context.resources %}
{% set data = resources.data %}
{% set definition = resources.definition %}

{% if data|length > 0 %}
    <div class=\"card\">
        <div class=\"card-body border-bottom py-3\">
            <div class=\"d-flex\">
                {% if data|length > 0 and definition.actionGroups.bulk is defined and definition.getEnabledActions('bulk')|length > 0 %}
                    <div class=\"sylius-grid-nav__bulk grid\">
                        {% for action in definition.getEnabledActions('bulk') %}
                            {{ sylius_grid_render_bulk_action(resources, action, null) }}
                        {% endfor %}
                    </div>
                {% endif %}
                <div class=\"ms-auto\">
                    {{ pagination.number_of_results_selector(data, definition.limits) }}
                </div>
            </div>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table card-table table-vcenter datatable\" {{ sylius_test_html_attribute('grid-table') }}>
                <thead>
                <tr>
                    {{ table.headers(resources, resources.definition, app.request.attributes) }}
                </tr>
                </thead>
                <tbody {{ sylius_test_html_attribute('grid-table-body') }}>
                {% for row in resources.data %}
                    {{ table.row(resources, resources.definition, row) }}
                {% endfor %}
                </tbody>
            </table>
        </div>
        <div class=\"card-footer d-flex align-items-center gap-2 flex-wrap\">
            <div class=\"text-muted\">
                {{ pagination.results_count(data) }}
            </div>
            <div class=\"ms-auto\">
                {{ pagination.simple(data) }}
            </div>
        </div>
    </div>
{% endif %}
", "@SyliusAdmin/shared/crud/index/content/grid/data_table.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/crud/index/content/grid/data_table.html.twig");
    }
}
