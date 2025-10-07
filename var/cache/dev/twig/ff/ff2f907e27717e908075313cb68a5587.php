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

/* @SyliusAdmin/shared/grid/action/apply_transition.html.twig */
class __TwigTemplate_43fc7aa2573ca00ddab18508585208c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/grid/action/apply_transition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/grid/action/apply_transition.html.twig"));

        // line 1
        $context["labeled"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "labeled", [], "any", true, true, false, 1)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })()), "labeled", [], "any", false, false, false, 1)) : (true));
        // line 2
        $context["show_disabled"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "show_disabled", [], "any", true, true, false, 2)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 2, $this->source); })()), "show_disabled", [], "any", false, false, false, 2)) : (true));
        // line 3
        yield "
";
        // line 4
        if ((($tmp = $this->env->getFunction('sylius_sm_can')->getCallable()((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 4, $this->source); })()), "graph", [], "any", false, false, false, 4), CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 4, $this->source); })()), "transition", [], "any", false, false, false, 4))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 5, $this->source); })()), "link", [], "any", false, false, false, 5), "route", [], "any", false, false, false, 5), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 5, $this->source); })()), "link", [], "any", false, false, false, 5), "parameters", [], "any", false, false, false, 5)), "html", null, true);
            yield "\" method=\"post\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("action", CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5));
            yield ">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)), "html", null, true);
            yield "\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <button class=\"btn ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 8, $this->source); })()), "class", [], "any", false, false, false, 8))) : ("")), "html", null, true);
            yield "\" ";
            if (((isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new RuntimeError('Variable "labeled" does not exist.', 8, $this->source); })()) && CoreExtension::inFilter("btn-icon", ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 8, $this->source); })()), "class", [], "any", false, false, false, 8))) : (""))))) {
                yield "data-bs-toggle=\"tooltip\" data-bs-title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "label", [], "any", false, false, false, 8)), "html", null, true);
                yield "\"";
            }
            yield ">
            ";
            // line 9
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 9, $this->source); })()), "icon", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 9, $this->source); })()), "icon", [], "any", false, false, false, 9));
            }
            // line 10
            yield "            ";
            if (((isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new RuntimeError('Variable "labeled" does not exist.', 10, $this->source); })()) && !CoreExtension::inFilter("btn-icon", ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 10, $this->source); })()), "class", [], "any", false, false, false, 10))) : (""))))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 10, $this->source); })()), "label", [], "any", false, false, false, 10)), "html", null, true);
            }
            // line 11
            yield "        </button>
    </form>
";
        } elseif ((($tmp =         // line 13
(isset($context["show_disabled"]) || array_key_exists("show_disabled", $context) ? $context["show_disabled"] : (function () { throw new RuntimeError('Variable "show_disabled" does not exist.', 13, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "    <button class=\"btn ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 14, $this->source); })()), "class", [], "any", false, false, false, 14))) : ("")), "html", null, true);
            yield " btn-ghost-dark disabled\">
        ";
            // line 15
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 15, $this->source); })()), "icon", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 15, $this->source); })()), "icon", [], "any", false, false, false, 15));
            }
            // line 16
            yield "        ";
            if (((isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new RuntimeError('Variable "labeled" does not exist.', 16, $this->source); })()) && !CoreExtension::inFilter("btn-icon", ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 16, $this->source); })()), "class", [], "any", false, false, false, 16))) : (""))))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 16, $this->source); })()), "label", [], "any", false, false, false, 16)), "html", null, true);
            }
            // line 17
            yield "    </button>
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
        return "@SyliusAdmin/shared/grid/action/apply_transition.html.twig";
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
        return array (  108 => 17,  103 => 16,  99 => 15,  94 => 14,  92 => 13,  88 => 11,  83 => 10,  79 => 9,  69 => 8,  64 => 6,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set labeled = options.labeled is defined ? options.labeled : true %}
{% set show_disabled = options.show_disabled is defined ? options.show_disabled : true %}

{% if sylius_sm_can(data, options.graph, options.transition) %}
    <form action=\"{{ path(options.link.route, options.link.parameters) }}\" method=\"post\" {{ sylius_test_html_attribute('action', action.name) }}>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(data.id) }}\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <button class=\"btn {{ options.class|default }}\" {% if labeled and 'btn-icon' in options.class|default %}data-bs-toggle=\"tooltip\" data-bs-title=\"{{ action.label|trans }}\"{% endif %}>
            {% if action.icon %}{{ ux_icon(action.icon) }}{% endif %}
            {% if labeled and 'btn-icon' not in options.class|default %}{{ action.label|trans }}{% endif %}
        </button>
    </form>
{% elseif show_disabled %}
    <button class=\"btn {{ options.class|default }} btn-ghost-dark disabled\">
        {% if action.icon %}{{ ux_icon(action.icon) }}{% endif %}
        {% if labeled and 'btn-icon' not in options.class|default %}{{ action.label|trans }}{% endif %}
    </button>
{% endif %}
", "@SyliusAdmin/shared/grid/action/apply_transition.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/grid/action/apply_transition.html.twig");
    }
}
