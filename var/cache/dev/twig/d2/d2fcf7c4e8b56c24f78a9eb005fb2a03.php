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

/* @SyliusAdmin/shared/helper/pagination.html.twig */
class __TwigTemplate_d5393c1cc376c6bd27393862db50dbc6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/helper/pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/helper/pagination.html.twig"));

        // line 4
        yield "
";
        // line 12
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_simple($paginator = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "paginator" => $paginator,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "simple"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "simple"));

            // line 2
            yield "    ";
            yield $this->env->getRuntime('Pagerfanta\Twig\Extension\PagerfantaRuntime')->renderPagerfanta((isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 2, $this->source); })()), "twig", ((array_key_exists("options", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 2, $this->source); })()), ["template" => "@SyliusAdmin/shared/pagerfanta.html.twig"])) : (["template" => "@SyliusAdmin/shared/pagerfanta.html.twig"])));
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 5
    public function macro_results_count($paginator = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "paginator" => $paginator,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "results_count"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "results_count"));

            // line 6
            yield "    ";
            $context["from"] = (1 + ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 6, $this->source); })()), "currentPage", [], "any", false, false, false, 6) - 1) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 6, $this->source); })()), "maxPerPage", [], "any", false, false, false, 6)));
            // line 7
            yield "    ";
            $context["to"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 7, $this->source); })()), "maxPerPage", [], "any", false, false, false, 7) + ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 7, $this->source); })()), "currentPage", [], "any", false, false, false, 7) - 1) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 7, $this->source); })()), "maxPerPage", [], "any", false, false, false, 7)));
            // line 8
            yield "    ";
            $context["to"] = ((((isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 8, $this->source); })()) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 8, $this->source); })()), "nbResults", [], "any", false, false, false, 8))) ? ((isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 8, $this->source); })())) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 8, $this->source); })()), "nbResults", [], "any", false, false, false, 8)));
            // line 9
            yield "
    ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pagination.number_of_results", ["%from%" => (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 10, $this->source); })()), "%to%" => (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 10, $this->source); })()), "%total%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 10, $this->source); })()), "nbResults", [], "any", false, false, false, 10)]), "html", null, true);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function macro_number_of_results_selector($paginator = null, $pagination_limits = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "paginator" => $paginator,
            "pagination_limits" => $pagination_limits,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "number_of_results_selector"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "number_of_results_selector"));

            // line 14
            yield "    ";
            $context["other_pagination_limits"] = Twig\Extension\CoreExtension::filter($this->env, (isset($context["pagination_limits"]) || array_key_exists("pagination_limits", $context) ? $context["pagination_limits"] : (function () { throw new RuntimeError('Variable "pagination_limits" does not exist.', 14, $this->source); })()), function ($__limit__) use ($context, $macros) { $context["limit"] = $__limit__; return ((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 14, $this->source); })()) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 14, $this->source); })()), "maxPerPage", [], "any", false, false, false, 14)); });
            // line 15
            yield "
    ";
            // line 16
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["other_pagination_limits"]) || array_key_exists("other_pagination_limits", $context) ? $context["other_pagination_limits"] : (function () { throw new RuntimeError('Variable "other_pagination_limits" does not exist.', 16, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 17
                yield "        <div class=\"dropdown\">
            <button type=\"button\" class=\"btn dropdown-toggle\" data-bs-toggle=\"dropdown\">
                ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show"), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 19, $this->source); })()), "maxPerPage", [], "any", false, false, false, 19), "html", null, true);
                yield "
            </button>
            <div class=\"dropdown-menu dropdown-menu-end \">
                ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["other_pagination_limits"]) || array_key_exists("other_pagination_limits", $context) ? $context["other_pagination_limits"] : (function () { throw new RuntimeError('Variable "other_pagination_limits" does not exist.', 22, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                    // line 23
                    yield "                    ";
                    $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "attributes", [], "any", false, false, false, 23), "get", ["_route"], "method", false, false, false, 23), Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "attributes", [], "any", false, false, false, 23), "all", ["_route_params"], "method", false, false, false, 23), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "query", [], "any", false, false, false, 23)), ["limit" => $context["limit"]]));
                    // line 24
                    yield "                    <a class=\"dropdown-item\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 24, $this->source); })()), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limit"], "html", null, true);
                    yield "</a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['limit'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                yield "            </div>
        </div>
    ";
            } else {
                // line 29
                yield "        <button type=\"button\" class=\"btn btn-ghost-secondary dropdown-toggle\" disabled>
            ";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show"), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 30, $this->source); })()), "maxPerPage", [], "any", false, false, false, 30), "html", null, true);
                yield "
        </button>
    ";
            }
            
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
        return "@SyliusAdmin/shared/helper/pagination.html.twig";
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
        return array (  205 => 30,  202 => 29,  197 => 26,  186 => 24,  183 => 23,  179 => 22,  171 => 19,  167 => 17,  165 => 16,  162 => 15,  159 => 14,  140 => 13,  126 => 10,  123 => 9,  120 => 8,  117 => 7,  114 => 6,  96 => 5,  81 => 2,  63 => 1,  51 => 12,  48 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro simple(paginator) %}
    {{ pagerfanta(paginator, 'twig', options|default({'template': '@SyliusAdmin/shared/pagerfanta.html.twig'})) }}
{% endmacro %}

{% macro results_count(paginator) %}
    {% set from = 1 + (paginator.currentPage - 1) * paginator.maxPerPage %}
    {% set to = paginator.maxPerPage + (paginator.currentPage - 1) * paginator.maxPerPage %}
    {% set to = to < paginator.nbResults ? to : paginator.nbResults %}

    {{ 'sylius.ui.pagination.number_of_results'|trans({'%from%': from, '%to%': to, '%total%': paginator.nbResults}) }}
{% endmacro %}

{% macro number_of_results_selector(paginator, pagination_limits) %}
    {% set other_pagination_limits = pagination_limits|filter(limit => limit != paginator.maxPerPage) %}

    {% if other_pagination_limits is not empty %}
        <div class=\"dropdown\">
            <button type=\"button\" class=\"btn dropdown-toggle\" data-bs-toggle=\"dropdown\">
                {{ 'sylius.ui.show'|trans }} {{ paginator.maxPerPage }}
            </button>
            <div class=\"dropdown-menu dropdown-menu-end \">
                {% for limit in other_pagination_limits %}
                    {% set path = path(app.request.attributes.get('_route'), app.request.attributes.all('_route_params')|merge(app.request.query)|merge({'limit': limit})) %}
                    <a class=\"dropdown-item\" href=\"{{ path }}\">{{ limit }}</a>
                {% endfor %}
            </div>
        </div>
    {% else %}
        <button type=\"button\" class=\"btn btn-ghost-secondary dropdown-toggle\" disabled>
            {{ 'sylius.ui.show'|trans }} {{ paginator.maxPerPage }}
        </button>
    {% endif %}
{% endmacro %}
", "@SyliusAdmin/shared/helper/pagination.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/helper/pagination.html.twig");
    }
}
