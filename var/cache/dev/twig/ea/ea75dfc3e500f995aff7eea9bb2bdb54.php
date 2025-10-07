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

/* @SyliusAdmin/shared/helper/sorting.html.twig */
class __TwigTemplate_24498e2c8518666e2de8a894649acf87 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/helper/sorting.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/helper/sorting.html.twig"));

        // line 31
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_table_header($grid = null, $field = null, $attributes = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "grid" => $grid,
            "field" => $field,
            "attributes" => $attributes,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table_header"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table_header"));

            // line 2
            yield "    ";
            $context["sorting_order"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "getSortingOrder", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2)], "method", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 2, $this->source); })()), "getSortingOrder", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2)], "method", false, false, false, 2), "asc")) : ("asc"));
            // line 3
            yield "
    ";
            // line 4
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 4, $this->source); })()), "isSortedBy", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4)], "method", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 5
                yield "        <th class=\"sortable sorted ";
                yield ((((isset($context["sorting_order"]) || array_key_exists("sorting_order", $context) ? $context["sorting_order"] : (function () { throw new RuntimeError('Variable "sorting_order" does not exist.', 5, $this->source); })()) == "desc")) ? ("descending") : ("ascending"));
                yield " sylius-table-column-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, true, false, 5), "vars", [], "any", false, true, false, 5), "th_class", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 5, $this->source); })()), "options", [], "any", false, false, false, 5), "vars", [], "any", false, false, false, 5), "th_class", [], "any", false, false, false, 5), "")) : ("")), "html", null, true);
                yield "\">
            <a class=\"link-reset\" href=\"";
                // line 6
                yield $this->getTemplateForMacro("macro_link", $context, 6, $this->getSourceContext())->macro_link(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 6, $this->source); })()), ((((isset($context["sorting_order"]) || array_key_exists("sorting_order", $context) ? $context["sorting_order"] : (function () { throw new RuntimeError('Variable "sorting_order" does not exist.', 6, $this->source); })()) == "desc")) ? ("asc") : ("desc")), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 6, $this->source); })()), "parameters", [], "any", false, false, false, 6), "all", [], "any", false, false, false, 6)]);
                yield "\">
                ";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })()), "label", [], "any", false, false, false, 7)), "html", null, true);
                yield "
                ";
                // line 8
                if (((isset($context["sorting_order"]) || array_key_exists("sorting_order", $context) ? $context["sorting_order"] : (function () { throw new RuntimeError('Variable "sorting_order" does not exist.', 8, $this->source); })()) == "desc")) {
                    // line 9
                    yield "                    <svg style=\"transform: translateY(-1px)\" xmlns=\"http://www.w3.org/2000/svg\" width=\"11\" height=\"11\" fill=\"currentColor\" class=\"bi bi-chevron-down\" viewBox=\"0 0 16 16\">
                        <path fill-rule=\"evenodd\" d=\"M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708\"/>
                    </svg>
                ";
                }
                // line 13
                yield "                ";
                if (((isset($context["sorting_order"]) || array_key_exists("sorting_order", $context) ? $context["sorting_order"] : (function () { throw new RuntimeError('Variable "sorting_order" does not exist.', 13, $this->source); })()) == "asc")) {
                    // line 14
                    yield "                    <svg style=\"transform: translateY(-1px)\" xmlns=\"http://www.w3.org/2000/svg\" width=\"11\" height=\"11\" fill=\"currentColor\" class=\"bi bi-chevron-up\" viewBox=\"0 0 16 16\">
                        <path fill-rule=\"evenodd\" d=\"M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z\"/>
                    </svg>
                ";
                }
                // line 18
                yield "            </a>
        </th>
    ";
            } else {
                // line 21
                yield "        <th class=\"sortable sylius-table-column-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, true, false, 21), "vars", [], "any", false, true, false, 21), "th_class", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 21, $this->source); })()), "options", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "th_class", [], "any", false, false, false, 21), "")) : ("")), "html", null, true);
                yield "\">
            <a class=\"link-reset\" href=\"";
                // line 22
                yield $this->getTemplateForMacro("macro_link", $context, 22, $this->getSourceContext())->macro_link(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 22, $this->source); })()), (isset($context["sorting_order"]) || array_key_exists("sorting_order", $context) ? $context["sorting_order"] : (function () { throw new RuntimeError('Variable "sorting_order" does not exist.', 22, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 22, $this->source); })()), "parameters", [], "any", false, false, false, 22), "all", [], "any", false, false, false, 22)]);
                yield "\">
                ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 23, $this->source); })()), "label", [], "any", false, false, false, 23)), "html", null, true);
                yield "
                <svg style=\"opacity: 0.7; transform: translateY(-1px)\" xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" fill=\"currentColor\" class=\"bi bi-chevron-expand\" viewBox=\"0 0 16 16\">
                    <path fill-rule=\"evenodd\" d=\"M3.646 9.146a.5.5 0 0 1 .708 0L8 12.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708m0-2.292a.5.5 0 0 0 .708 0L8 3.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708\"/>
                </svg>
            </a>
        </th>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 32
    public function macro_link($field_name = null, $attributes = null, $sorting_order = null, $parameters = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field_name" => $field_name,
            "attributes" => $attributes,
            "sorting_order" => $sorting_order,
            "parameters" => $parameters,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "link"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "link"));

            // line 33
            yield "    ";
            $context["params"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 33, $this->source); })()), "all", ["_route_params"], "method", false, false, false, 33), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 33, $this->source); })()));
            // line 34
            yield "    ";
            $context["sorting"] = ["sorting" => [ (string)(isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new RuntimeError('Variable "field_name" does not exist.', 34, $this->source); })()) => (isset($context["sorting_order"]) || array_key_exists("sorting_order", $context) ? $context["sorting_order"] : (function () { throw new RuntimeError('Variable "sorting_order" does not exist.', 34, $this->source); })())]];
            // line 35
            yield "
    ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 36, $this->source); })()), "get", ["_route"], "method", false, false, false, 36), Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 36, $this->source); })()), (isset($context["sorting"]) || array_key_exists("sorting", $context) ? $context["sorting"] : (function () { throw new RuntimeError('Variable "sorting" does not exist.', 36, $this->source); })())), ["page" => 1])), "html", null, true);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusAdmin/shared/helper/sorting.html.twig";
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
        return array (  188 => 36,  185 => 35,  182 => 34,  179 => 33,  158 => 32,  138 => 23,  134 => 22,  127 => 21,  122 => 18,  116 => 14,  113 => 13,  107 => 9,  105 => 8,  101 => 7,  97 => 6,  88 => 5,  86 => 4,  83 => 3,  80 => 2,  60 => 1,  48 => 31,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro table_header(grid, field, attributes) %}
    {% set sorting_order = grid.getSortingOrder(field.name)|default('asc') %}

    {% if grid.isSortedBy(field.name) %}
        <th class=\"sortable sorted {{ sorting_order == 'desc' ? 'descending' : 'ascending' }} sylius-table-column-{{ field.name }} {{ field.options.vars.th_class|default('') }}\">
            <a class=\"link-reset\" href=\"{{ _self.link(field.name, attributes, (sorting_order == 'desc' ? 'asc' : 'desc'), grid.parameters.all) }}\">
                {{ field.label|trans }}
                {% if sorting_order == 'desc' %}
                    <svg style=\"transform: translateY(-1px)\" xmlns=\"http://www.w3.org/2000/svg\" width=\"11\" height=\"11\" fill=\"currentColor\" class=\"bi bi-chevron-down\" viewBox=\"0 0 16 16\">
                        <path fill-rule=\"evenodd\" d=\"M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708\"/>
                    </svg>
                {% endif %}
                {% if sorting_order == 'asc' %}
                    <svg style=\"transform: translateY(-1px)\" xmlns=\"http://www.w3.org/2000/svg\" width=\"11\" height=\"11\" fill=\"currentColor\" class=\"bi bi-chevron-up\" viewBox=\"0 0 16 16\">
                        <path fill-rule=\"evenodd\" d=\"M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z\"/>
                    </svg>
                {% endif %}
            </a>
        </th>
    {% else %}
        <th class=\"sortable sylius-table-column-{{ field.name }} {{ field.options.vars.th_class|default('') }}\">
            <a class=\"link-reset\" href=\"{{ _self.link(field.name, attributes, sorting_order, grid.parameters.all) }}\">
                {{ field.label|trans }}
                <svg style=\"opacity: 0.7; transform: translateY(-1px)\" xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" fill=\"currentColor\" class=\"bi bi-chevron-expand\" viewBox=\"0 0 16 16\">
                    <path fill-rule=\"evenodd\" d=\"M3.646 9.146a.5.5 0 0 1 .708 0L8 12.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708m0-2.292a.5.5 0 0 0 .708 0L8 3.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708\"/>
                </svg>
            </a>
        </th>
    {% endif %}
{% endmacro %}

{% macro link(field_name, attributes, sorting_order, parameters) %}
    {% set params = attributes.all('_route_params')|merge(parameters) %}
    {% set sorting = {'sorting': {(field_name): (sorting_order)}} %}

    {{ path(attributes.get('_route'), params|merge(sorting)|merge({'page': 1})) }}
{% endmacro %}
", "@SyliusAdmin/shared/helper/sorting.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/helper/sorting.html.twig");
    }
}
