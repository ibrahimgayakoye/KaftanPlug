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

/* @SyliusAdmin/shared/helper/table.html.twig */
class __TwigTemplate_4e462c941bf8f951a3d351f56dc4473a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/helper/table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/helper/table.html.twig"));

        // line 23
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_headers($grid = null, $definition = null, $request_attributes = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "grid" => $grid,
            "definition" => $definition,
            "request_attributes" => $request_attributes,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "headers"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "headers"));

            // line 2
            yield "    ";
            $macros["sorting"] = $this->load("@SyliusAdmin/shared/helper/sorting.html.twig", 2)->unwrap();
            // line 3
            yield "
    ";
            // line 4
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 4), "bulk", [], "any", true, true, false, 4) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 4, $this->source); })()), "getEnabledActions", ["bulk"], "method", false, false, false, 4)) > 0))) {
                // line 5
                yield "        <th class=\"w-1 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, true, false, 5), "vars", [], "any", false, true, false, 5), "th_class", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 5, $this->source); })()), "options", [], "any", false, false, false, 5), "vars", [], "any", false, false, false, 5), "th_class", [], "any", false, false, false, 5), "")) : ("")), "html", null, true);
                yield "\">
            <input data-check-all=\"index\" type=\"checkbox\" class=\"form-check-input\">
        </th>
    ";
            }
            // line 9
            yield "
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Sylius\TwigExtra\Twig\Extension\SortByExtension']->sortBy(CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 10, $this->source); })()), "fields", [], "any", false, false, false, 10), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 11
                yield "        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "enabled", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 12
                    yield "            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 13
                        yield "                ";
                        yield $macros["sorting"]->getTemplateForMacro("macro_table_header", $context, 13, $this->getSourceContext())->macro_table_header(...[(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 13, $this->source); })()), $context["field"], (isset($context["request_attributes"]) || array_key_exists("request_attributes", $context) ? $context["request_attributes"] : (function () { throw new RuntimeError('Variable "request_attributes" does not exist.', 13, $this->source); })())]);
                        yield "
            ";
                    } else {
                        // line 15
                        yield "                <th class=\"text-body sylius-table-column-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 15), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "options", [], "any", false, true, false, 15), "vars", [], "any", false, true, false, 15), "th_class", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "options", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "th_class", [], "any", false, false, false, 15), "")) : ("")), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 15)), "html", null, true);
                        yield "</th>
            ";
                    }
                    // line 17
                    yield "        ";
                }
                // line 18
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 19), "item", [], "any", true, true, false, 19) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 19, $this->source); })()), "getEnabledActions", ["item"], "method", false, false, false, 19)) > 0))) {
                // line 20
                yield "        <th class=\"w-1 text-body text-center sylius-table-column-actions ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, true, false, 20), "vars", [], "any", false, true, false, 20), "th_class", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 20, $this->source); })()), "options", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "th_class", [], "any", false, false, false, 20), "")) : ("")), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.actions"), "html", null, true);
                yield "</th>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function macro_row($grid = null, $definition = null, $row = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "grid" => $grid,
            "definition" => $definition,
            "row" => $row,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "row"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "row"));

            // line 25
            yield "    ";
            $macros["dropdown"] = $this->load("@SyliusAdmin/shared/helper/dropdown.html.twig", 25)->unwrap();
            // line 26
            yield "
    <tr class=\"item\" ";
            // line 27
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("row");
            yield " ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("resource-id", CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27));
            yield ">
        ";
            // line 28
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 28), "bulk", [], "any", true, true, false, 28) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 28, $this->source); })()), "getEnabledActions", ["bulk"], "method", false, false, false, 28)) > 0))) {
                // line 29
                yield "            <td class=\"text-center\"><input data-check-all-group=\"index\" class=\"form-check-input\" type=\"checkbox\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "html", null, true);
                yield "\" /></td>
        ";
            }
            // line 31
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Sylius\TwigExtra\Twig\Extension\SortByExtension']->sortBy(CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 31, $this->source); })()), "enabledFields", [], "any", false, false, false, 31), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 32
                yield "            <td";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "options", [], "any", false, true, false, 32), "vars", [], "any", false, true, false, 32), "td_class", [], "any", true, true, false, 32)) {
                    yield " class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "options", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "td_class", [], "any", false, false, false, 32), "html", null, true);
                    yield "\"";
                }
                yield ">
                ";
                // line 33
                yield $this->env->getFunction('sylius_grid_render_field')->getCallable()((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 33, $this->source); })()), $context["field"], (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 33, $this->source); })()));
                yield "
            </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 36), "item", [], "any", true, true, false, 36) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 36, $this->source); })()), "getEnabledActions", ["item"], "method", false, false, false, 36)) > 0))) {
                // line 37
                yield "            <td";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, true, false, 37), "vars", [], "any", false, true, false, 37), "td_class", [], "any", true, true, false, 37)) {
                    yield " class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 37, $this->source); })()), "options", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "td_class", [], "any", false, false, false, 37), "html", null, true);
                    yield "\"";
                }
                yield " ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("actions");
                yield ">
                <div class=\"d-flex gap-1 justify-content-end\">
                    ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Sylius\TwigExtra\Twig\Extension\SortByExtension']->sortBy(CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 39, $this->source); })()), "getEnabledActions", ["item"], "method", false, false, false, 39), "position"));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 40
                    yield "                        ";
                    yield $this->env->getFunction('sylius_grid_render_action')->getCallable()((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 40, $this->source); })()), $context["action"], (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 40, $this->source); })()));
                    yield "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                yield "
                    ";
                // line 43
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 43), "subitem", [], "any", true, true, false, 43) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 43, $this->source); })()), "getEnabledActions", ["subitem"], "method", false, false, false, 43)) > 0))) {
                    // line 44
                    yield "                        ";
                    $context["subactions"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 45
                        yield "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Sylius\TwigExtra\Twig\Extension\SortByExtension']->sortBy(CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 45, $this->source); })()), "getEnabledActions", ["subitem"], "method", false, false, false, 45), "position"));
                        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                            // line 46
                            yield "                                ";
                            yield $this->env->getFunction('sylius_grid_render_action')->getCallable()((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 46, $this->source); })()), $context["action"], (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 46, $this->source); })()));
                            yield "
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 48
                        yield "                        ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 49
                    yield "                        ";
                    $context["more_button"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 50
                        yield "                            <button class=\"btn btn-icon dropdown-static\" data-bs-toggle=\"tooltip\" data-bs-title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.more"), "html", null, true);
                        yield "\">
                                ";
                        // line 51
                        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:dots");
                        yield "
                            </button>
                        ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 54
                    yield "                        ";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim((isset($context["subactions"]) || array_key_exists("subactions", $context) ? $context["subactions"] : (function () { throw new RuntimeError('Variable "subactions" does not exist.', 54, $this->source); })()))) > 0)) {
                        // line 55
                        yield "                            ";
                        yield $macros["dropdown"]->getTemplateForMacro("macro_default", $context, 55, $this->getSourceContext())->macro_default(...[["custom_trigger" => (isset($context["more_button"]) || array_key_exists("more_button", $context) ? $context["more_button"] : (function () { throw new RuntimeError('Variable "more_button" does not exist.', 55, $this->source); })()), "content" => (isset($context["subactions"]) || array_key_exists("subactions", $context) ? $context["subactions"] : (function () { throw new RuntimeError('Variable "subactions" does not exist.', 55, $this->source); })()), "direction" => "down-end"]]);
                        yield "
                        ";
                    }
                    // line 57
                    yield "                    ";
                }
                // line 58
                yield "                </div>
            </td>
        ";
            }
            // line 61
            yield "    </tr>
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
        return "@SyliusAdmin/shared/helper/table.html.twig";
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
        return array (  304 => 61,  299 => 58,  296 => 57,  290 => 55,  287 => 54,  280 => 51,  275 => 50,  272 => 49,  268 => 48,  259 => 46,  254 => 45,  251 => 44,  249 => 43,  246 => 42,  237 => 40,  233 => 39,  221 => 37,  218 => 36,  209 => 33,  200 => 32,  195 => 31,  189 => 29,  187 => 28,  181 => 27,  178 => 26,  175 => 25,  155 => 24,  137 => 20,  134 => 19,  128 => 18,  125 => 17,  115 => 15,  109 => 13,  106 => 12,  103 => 11,  99 => 10,  96 => 9,  88 => 5,  86 => 4,  83 => 3,  80 => 2,  60 => 1,  48 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro headers(grid, definition, request_attributes) %}
    {% import '@SyliusAdmin/shared/helper/sorting.html.twig' as sorting %}

    {% if definition.actionGroups.bulk is defined and definition.getEnabledActions('bulk')|length > 0 %}
        <th class=\"w-1 {{ field.options.vars.th_class|default('') }}\">
            <input data-check-all=\"index\" type=\"checkbox\" class=\"form-check-input\">
        </th>
    {% endif %}

    {% for field in definition.fields|sylius_sort_by('position') %}
        {% if field.enabled %}
            {% if field.isSortable %}
                {{ sorting.table_header(grid, field, request_attributes) }}
            {% else %}
                <th class=\"text-body sylius-table-column-{{ field.name }} {{ field.options.vars.th_class|default('') }}\">{{ field.label|trans }}</th>
            {% endif %}
        {% endif %}
    {% endfor %}
    {% if definition.actionGroups.item is defined and definition.getEnabledActions('item')|length > 0 %}
        <th class=\"w-1 text-body text-center sylius-table-column-actions {{ field.options.vars.th_class|default('') }}\">{{ 'sylius.ui.actions'|trans }}</th>
    {% endif %}
{% endmacro %}

{% macro row(grid, definition, row) %}
    {% import '@SyliusAdmin/shared/helper/dropdown.html.twig' as dropdown %}

    <tr class=\"item\" {{ sylius_test_html_attribute('row') }} {{ sylius_test_html_attribute('resource-id', row.id) }}>
        {% if definition.actionGroups.bulk is defined and definition.getEnabledActions('bulk')|length > 0 %}
            <td class=\"text-center\"><input data-check-all-group=\"index\" class=\"form-check-input\" type=\"checkbox\" value=\"{{ row.id }}\" /></td>
        {% endif %}
        {% for field in definition.enabledFields|sylius_sort_by('position') %}
            <td{% if field.options.vars.td_class is defined %} class=\"{{ field.options.vars.td_class }}\"{% endif %}>
                {{ sylius_grid_render_field(grid, field, row) }}
            </td>
        {% endfor %}
        {% if definition.actionGroups.item is defined and definition.getEnabledActions('item')|length > 0 %}
            <td{% if field.options.vars.td_class is defined %} class=\"{{ field.options.vars.td_class }}\"{% endif %} {{ sylius_test_html_attribute('actions') }}>
                <div class=\"d-flex gap-1 justify-content-end\">
                    {% for action in definition.getEnabledActions('item')|sylius_sort_by('position') %}
                        {{ sylius_grid_render_action(grid, action, row) }}
                    {% endfor %}

                    {% if definition.actionGroups.subitem is defined and definition.getEnabledActions('subitem')|length > 0 %}
                        {% set subactions %}
                            {% for action in definition.getEnabledActions('subitem')|sylius_sort_by('position') %}
                                {{ sylius_grid_render_action(grid, action, row) }}
                            {% endfor %}
                        {% endset %}
                        {% set more_button %}
                            <button class=\"btn btn-icon dropdown-static\" data-bs-toggle=\"tooltip\" data-bs-title=\"{{ 'sylius.ui.more'|trans }}\">
                                {{ ux_icon('tabler:dots') }}
                            </button>
                        {% endset %}
                        {% if subactions|trim|length > 0 %}
                            {{ dropdown.default({ custom_trigger: more_button, content: subactions, direction: 'down-end' }) }}
                        {% endif %}
                    {% endif %}
                </div>
            </td>
        {% endif %}
    </tr>
{% endmacro %}
", "@SyliusAdmin/shared/helper/table.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/helper/table.html.twig");
    }
}
