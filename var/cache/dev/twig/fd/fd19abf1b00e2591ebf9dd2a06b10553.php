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

/* @SyliusShop/shared/macro/order/state.html.twig */
class __TwigTemplate_1819097425569bdb14c656933703524b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/macro/order/state.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/macro/order/state.html.twig"));

        
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
            $context["value"] = ("sylius.ui." . (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 2, $this->source); })()));
            // line 3
            yield "    ";
            $context["view_options"] = ["authorized" => ["bg_color" => "orange"], "awaiting_payment" => ["bg_color" => "grey"], "cancelled" => ["bg_color" => "red"], "completed" => ["bg_color" => "green"], "cart" => ["bg_color" => "grey"], "failed" => ["bg_color" => "red"], "new" => ["bg_color" => "green"], "paid" => ["bg_color" => "green"], "partially_authorized" => ["bg_color" => "yellow"], "partially_paid" => ["bg_color" => "olive"], "partially_refunded" => ["bg_color" => "violet"], "processing" => ["bg_color" => "violet"], "ready" => ["bg_color" => "blue"], "refunded" => ["bg_color" => "purple"], "shipped" => ["bg_color" => "green"], "partially_shipped" => ["bg_color" => "yellow"]];
            // line 21
            yield "
    <div class=\"d-inline-block\">
        <span class=\"badge rounded-pill\" style=\"background-color: ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["view_options"] ?? null), (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 23, $this->source); })()), [], "array", false, true, false, 23), "bg_color", [], "array", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["view_options"]) || array_key_exists("view_options", $context) ? $context["view_options"] : (function () { throw new RuntimeError('Variable "view_options" does not exist.', 23, $this->source); })()), (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 23, $this->source); })()), [], "array", false, false, false, 23), "bg_color", [], "array", false, false, false, 23), "green")) : ("green")), "html", null, true);
            yield "; color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["view_options"] ?? null), (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 23, $this->source); })()), [], "array", false, true, false, 23), "text_color", [], "array", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["view_options"]) || array_key_exists("view_options", $context) ? $context["view_options"] : (function () { throw new RuntimeError('Variable "view_options" does not exist.', 23, $this->source); })()), (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 23, $this->source); })()), [], "array", false, false, false, 23), "text_color", [], "array", false, false, false, 23), "white")) : ("white")), "html", null, true);
            yield "\">
            ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 24, $this->source); })())), "html", null, true);
            yield "
        </span>
    </div>
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
        return "@SyliusShop/shared/macro/order/state.html.twig";
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
        return array (  91 => 24,  85 => 23,  81 => 21,  78 => 3,  75 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro label(state) %}
    {% set value = 'sylius.ui.' ~ state %}
    {% set view_options = {
        authorized: { bg_color: 'orange' },
        awaiting_payment: { bg_color: 'grey' },
        cancelled: { bg_color: 'red' },
        completed: { bg_color: 'green' },
        cart: { bg_color: 'grey' },
        failed: { bg_color: 'red' },
        new: { bg_color: 'green' },
        paid: { bg_color: 'green' },
        partially_authorized: { bg_color: 'yellow' },
        partially_paid: { bg_color: 'olive' },
        partially_refunded: { bg_color: 'violet' },
        processing: { bg_color: 'violet' },
        ready: { bg_color: 'blue' },
        refunded: { bg_color: 'purple' },
        shipped: { bg_color: 'green' },
        partially_shipped: { bg_color: 'yellow' },
    } %}

    <div class=\"d-inline-block\">
        <span class=\"badge rounded-pill\" style=\"background-color: {{ view_options[state]['bg_color']|default('green') }}; color: {{ view_options[state]['text_color']|default('white') }}\">
            {{ value|trans }}
        </span>
    </div>
{% endmacro %}
", "@SyliusShop/shared/macro/order/state.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/macro/order/state.html.twig");
    }
}
