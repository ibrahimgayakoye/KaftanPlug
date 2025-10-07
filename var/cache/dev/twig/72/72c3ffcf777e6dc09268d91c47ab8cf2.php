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

/* @SyliusAdmin/shared/crud/index/content/grid/filters.html.twig */
class __TwigTemplate_126aa8da33032ce06a95fd8e0c5b12b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/index/content/grid/filters.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/index/content/grid/filters.html.twig"));

        // line 1
        $macros["_v0"] = $this->macros["_v0"] = $this->load("@SyliusAdmin/shared/helper/accordion.html.twig", 1)->unwrap();
        // line 2
        $macros["button"] = $this->macros["button"] = $this->load("@SyliusAdmin/shared/helper/button.html.twig", 2)->unwrap();
        // line 3
        yield "
";
        // line 4
        $context["resources"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "resources", [], "any", false, false, false, 4);
        // line 5
        yield "
";
        // line 6
        $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "attributes", [], "any", false, false, false, 6), "get", ["_route"], "method", false, false, false, 6), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "attributes", [], "any", false, false, false, 6), "all", ["_route_params"], "method", false, false, false, 6));
        // line 7
        $context["are_criteria_set"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "query", [], "any", false, false, false, 7), "has", ["criteria"], "method", false, false, false, 7);
        // line 8
        yield "
";
        // line 9
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 9, $this->source); })()), "definition", [], "any", false, false, false, 9), "enabledFilters", [], "any", false, false, false, 9))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                yield "\" novalidate ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("filters-form");
                yield ">
                    <div class=\"sylius-filters\">
                        ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Sylius\TwigExtra\Twig\Extension\SortByExtension']->sortBy(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 15, $this->source); })()), "definition", [], "any", false, false, false, 15), "enabledFilters", [], "any", false, false, false, 15), function ($__filter__) use ($context, $macros) { $context["filter"] = $__filter__; return CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "enabled", [], "any", false, false, false, 15); }), "position"));
                foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                    // line 16
                    yield "                            <div class=\"sylius-filters__item\">
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
                    <div>
                        ";
                // line 22
                yield $macros["button"]->getTemplateForMacro("macro_primary", $context, 22, $this->getSourceContext())->macro_primary(...[["text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.filter"), "icon" => "tabler:adjustments", "type" => "submit", "attr" => $this->env->getFunction('sylius_test_html_attribute')->getCallable()("filter")]]);
                yield "
                        ";
                // line 23
                yield $macros["button"]->getTemplateForMacro("macro_default", $context, 23, $this->getSourceContext())->macro_default(...[["text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.reset"), "url" => (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 23, $this->source); })()), "attr" => $this->env->getFunction('sylius_test_html_attribute')->getCallable()("reset")]]);
                yield "
                    </div>
                </form>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 28
            yield "
        ";
            // line 29
            yield $macros["_v0"]->getTemplateForMacro("macro_accordion", $context, 29, $this->getSourceContext())->macro_accordion(...[[["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.filters"), "content" =>             // line 31
(isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 31, $this->source); })()), "icon" => "tabler:adjustments"]],             // line 33
(isset($context["are_criteria_set"]) || array_key_exists("are_criteria_set", $context) ? $context["are_criteria_set"] : (function () { throw new RuntimeError('Variable "are_criteria_set" does not exist.', 33, $this->source); })())]);
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
        return "@SyliusAdmin/shared/crud/index/content/grid/filters.html.twig";
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
        return array (  122 => 33,  121 => 31,  120 => 29,  117 => 28,  108 => 23,  104 => 22,  100 => 20,  91 => 17,  88 => 16,  84 => 15,  77 => 13,  74 => 12,  72 => 11,  69 => 10,  67 => 9,  64 => 8,  62 => 7,  60 => 6,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% from \"@SyliusAdmin/shared/helper/accordion.html.twig\" import accordion %}
{% import \"@SyliusAdmin/shared/helper/button.html.twig\" as button %}

{% set resources = hookable_metadata.context.resources %}

{% set path = path(app.request.attributes.get('_route'), app.request.attributes.all('_route_params')) %}
{% set are_criteria_set = app.request.query.has('criteria') %}

{% if resources.definition.enabledFilters is not empty %}
    <div class=\"position-relative z-1 bg-white mb-5\">
        {% set content %}
            <div class=\"mb-3\">
                <form method=\"get\" action=\"{{ path }}\" novalidate {{ sylius_test_html_attribute('filters-form') }}>
                    <div class=\"sylius-filters\">
                        {% for filter in resources.definition.enabledFilters|filter(filter => filter.enabled)|sylius_sort_by('position') %}
                            <div class=\"sylius-filters__item\">
                                {{ sylius_grid_render_filter(resources, filter) }}
                            </div>
                        {% endfor %}
                    </div>
                    <div>
                        {{ button.primary({ text: 'sylius.ui.filter'|trans, icon: 'tabler:adjustments', type: 'submit', attr: sylius_test_html_attribute('filter') }) }}
                        {{ button.default({ text: 'sylius.ui.reset'|trans, url: path, attr: sylius_test_html_attribute('reset') }) }}
                    </div>
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
", "@SyliusAdmin/shared/crud/index/content/grid/filters.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/crud/index/content/grid/filters.html.twig");
    }
}
