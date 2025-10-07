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

/* @SyliusShop/shared/grid/filters.html.twig */
class __TwigTemplate_dcbcb61e30b109ced54d17389d1594b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/grid/filters.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/grid/filters.html.twig"));

        // line 1
        $macros["_v0"] = $this->macros["_v0"] = $this->load("@SyliusShop/shared/helpers/accordion.html.twig", 1)->unwrap();
        // line 2
        $macros["buttons"] = $this->macros["buttons"] = $this->load("@SyliusShop/shared/buttons.html.twig", 2)->unwrap();
        // line 3
        yield "
";
        // line 4
        $context["resources"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "resources", [], "any", false, false, false, 4);
        // line 5
        $context["definition"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 5, $this->source); })()), "definition", [], "any", false, false, false, 5);
        // line 6
        $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "attributes", [], "any", false, false, false, 6), "get", ["_route"], "method", false, false, false, 6), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "attributes", [], "any", false, false, false, 6), "all", ["_route_params"], "method", false, false, false, 6));
        // line 7
        $context["are_criteria_set"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "query", [], "any", false, false, false, 7), "has", ["criteria"], "method", false, false, false, 7);
        // line 8
        yield "
";
        // line 9
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 9, $this->source); })()), "enabledFilters", [], "any", false, false, false, 9)) > 0)) {
            // line 10
            yield "    <div class=\"position-relative z-1 bg-white mb-5\">
        ";
            // line 11
            $context["content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 12
                yield "            <div class=\"mb-3\">
                <form method=\"get\" action=\"";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 13, $this->source); })()), "html", null, true);
                yield "\" novalidate>
                    <div class=\"sylius-filters\">
                        ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Sylius\TwigExtra\Twig\Extension\SortByExtension']->sortBy(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 15, $this->source); })()), "enabledFilters", [], "any", false, false, false, 15), function ($__filter__) use ($context, $macros) { $context["filter"] = $__filter__; return CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "enabled", [], "any", false, false, false, 15); }), "position"));
                foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                    // line 16
                    yield "                            <div class=\"sylius-filters__field\">
                                ";
                    // line 17
                    yield $this->env->getFunction('sylius_grid_render_filter')->getCallable()((isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 17, $this->source); })()), $context["filter"]);
                    yield "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                yield "                    </div>
                    ";
                // line 21
                yield $macros["buttons"]->getTemplateForMacro("macro_submit", $context, 21, $this->getSourceContext())->macro_submit(...["sylius.ui.filter", null, null, "btn-primary"]);
                yield "
                    ";
                // line 22
                yield $macros["buttons"]->getTemplateForMacro("macro_secondary", $context, 22, $this->getSourceContext())->macro_secondary(...[(isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 22, $this->source); })()), "sylius.ui.reset", null, null]);
                yield "
                </form>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 26
            yield "
        ";
            // line 27
            yield $macros["_v0"]->getTemplateForMacro("macro_accordion", $context, 27, $this->getSourceContext())->macro_accordion(...[[["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.filters"), "content" =>             // line 29
(isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 29, $this->source); })()), "icon" => "tabler:adjustments"]],             // line 31
(isset($context["are_criteria_set"]) || array_key_exists("are_criteria_set", $context) ? $context["are_criteria_set"] : (function () { throw new RuntimeError('Variable "are_criteria_set" does not exist.', 31, $this->source); })())]);
            yield "
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
        return "@SyliusShop/shared/grid/filters.html.twig";
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
        return array (  117 => 31,  116 => 29,  115 => 27,  112 => 26,  104 => 22,  100 => 21,  97 => 20,  88 => 17,  85 => 16,  81 => 15,  76 => 13,  73 => 12,  71 => 11,  68 => 10,  66 => 9,  63 => 8,  61 => 7,  59 => 6,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% from \"@SyliusShop/shared/helpers/accordion.html.twig\" import accordion %}
{% import '@SyliusShop/shared/buttons.html.twig' as buttons %}

{% set resources = hookable_metadata.context.resources %}
{% set definition = resources.definition %}
{% set path = path(app.request.attributes.get('_route'), app.request.attributes.all('_route_params')) %}
{% set are_criteria_set = app.request.query.has('criteria') %}

{% if definition.enabledFilters|length > 0 %}
    <div class=\"position-relative z-1 bg-white mb-5\">
        {% set content %}
            <div class=\"mb-3\">
                <form method=\"get\" action=\"{{ path }}\" novalidate>
                    <div class=\"sylius-filters\">
                        {% for filter in definition.enabledFilters|filter(filter => filter.enabled)|sylius_sort_by('position') %}
                            <div class=\"sylius-filters__field\">
                                {{ sylius_grid_render_filter(resources, filter) }}
                            </div>
                        {% endfor %}
                    </div>
                    {{ buttons.submit('sylius.ui.filter', null, null, 'btn-primary') }}
                    {{ buttons.secondary(path, 'sylius.ui.reset', null, null) }}
                </form>
            </div>
        {% endset %}

        {{ accordion([{
            title: 'sylius.ui.filters'|trans,
            content: content,
            icon: 'tabler:adjustments',
        }], are_criteria_set) }}
    </div>
{% endif %}
", "@SyliusShop/shared/grid/filters.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/grid/filters.html.twig");
    }
}
