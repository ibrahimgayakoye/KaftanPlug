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

/* @SyliusMolliePlugin/admin/mollie_subscription/macro/processing_state.html.twig */
class __TwigTemplate_8eb3a2f1a1a0e9e9a03fef5ad82504c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/mollie_subscription/macro/processing_state.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/mollie_subscription/macro/processing_state.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_label($state = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "state" => $state,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label"));

            // line 2
            yield "    ";
            $context["state_to_colors_map"] = ["none" => "bg-muted-lt", "pending" => "bg-blue-lt", "processing" => "bg-azure-lt", "processed" => "bg-green-lt"];
            // line 8
            yield "
    ";
            // line 9
            $context["state_to_icons_map"] = ["none" => "circle-dashed", "pending" => "clock", "processing" => "refresh", "processed" => "check"];
            // line 15
            yield "
    <span class=\"badge ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["state_to_colors_map"] ?? null), (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 16, $this->source); })()), [], "array", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["state_to_colors_map"]) || array_key_exists("state_to_colors_map", $context) ? $context["state_to_colors_map"] : (function () { throw new RuntimeError('Variable "state_to_colors_map" does not exist.', 16, $this->source); })()), (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 16, $this->source); })()), [], "array", false, false, false, 16), "")) : ("")), "html", null, true);
            yield "\">
        ";
            // line 17
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon(("tabler:" . ((CoreExtension::getAttribute($this->env, $this->source, ($context["state_to_icons_map"] ?? null), (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 17, $this->source); })()), [], "array", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["state_to_icons_map"]) || array_key_exists("state_to_icons_map", $context) ? $context["state_to_icons_map"] : (function () { throw new RuntimeError('Variable "state_to_icons_map" does not exist.', 17, $this->source); })()), (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 17, $this->source); })()), [], "array", false, false, false, 17), "alert-circle")) : ("alert-circle"))));
            yield "
        ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("sylius_mollie.ui.subscription.processing_state." . (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 18, $this->source); })()))), "html", null, true);
            yield "
    </span>
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
        return "@SyliusMolliePlugin/admin/mollie_subscription/macro/processing_state.html.twig";
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
        return array (  94 => 18,  90 => 17,  86 => 16,  83 => 15,  81 => 9,  78 => 8,  75 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro label(state) %}
    {% set state_to_colors_map = {
        none: 'bg-muted-lt',
        pending: 'bg-blue-lt',
        processing: 'bg-azure-lt',
        processed: 'bg-green-lt'
    } %}

    {% set state_to_icons_map = {
        none: 'circle-dashed',
        pending: 'clock',
        processing: 'refresh',
        processed: 'check'
    } %}

    <span class=\"badge {{ state_to_colors_map[state]|default('') }}\">
        {{ ux_icon('tabler:' ~ (state_to_icons_map[state]|default('alert-circle'))) }}
        {{ ('sylius_mollie.ui.subscription.processing_state.' ~ state) | trans }}
    </span>
{% endmacro %}
", "@SyliusMolliePlugin/admin/mollie_subscription/macro/processing_state.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/mollie_subscription/macro/processing_state.html.twig");
    }
}
