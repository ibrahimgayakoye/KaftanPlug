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

/* @SyliusAdmin/product/form/sections/attributes/list/translations/field/input_group/apply_to_all.html.twig */
class __TwigTemplate_8e2fc8c5d7ea052bbe2a94afa781eb0e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/attributes/list/translations/field/input_group/apply_to_all.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/attributes/list/translations/field/input_group/apply_to_all.html.twig"));

        // line 1
        $context["locale_code"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 1), "locale_code", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "locale_code", [], "any", false, false, false, 1), null)) : (null));
        // line 2
        $context["product_attribute_value"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "product_attribute_value", [], "any", false, false, false, 2);
        // line 3
        $context["product_attribute_code"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "product_attribute_code", [], "any", false, false, false, 3);
        // line 4
        yield "
";
        // line 5
        if ((($tmp =  !(null === (isset($context["locale_code"]) || array_key_exists("locale_code", $context) ? $context["locale_code"] : (function () { throw new RuntimeError('Variable "locale_code" does not exist.', 5, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "    <button
        type=\"button\"
        class=\"btn btn-icon\"
        data-bs-toggle=\"tooltip\"
        data-bs-title=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.apply_to_all"), "html", null, true);
            yield "\"
        data-action=\"live#action\"
        data-live-action-param=\"applyToAll\"
        data-live-attribute-code-param=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["product_attribute_code"]) || array_key_exists("product_attribute_code", $context) ? $context["product_attribute_code"] : (function () { throw new RuntimeError('Variable "product_attribute_code" does not exist.', 13, $this->source); })()), "html", null, true);
            yield "\"
        data-live-locale-code-param=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_attribute_value"]) || array_key_exists("product_attribute_value", $context) ? $context["product_attribute_value"] : (function () { throw new RuntimeError('Variable "product_attribute_value" does not exist.', 14, $this->source); })()), "vars", [], "any", false, false, false, 14), "data", [], "any", false, false, false, 14), "localeCode", [], "any", false, false, false, 14), "html", null, true);
            yield "\"
        ";
            // line 15
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("apply-to-all");
            yield "
    >
        ";
            // line 17
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:copy-plus");
            yield "
    </button>
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
        return "@SyliusAdmin/product/form/sections/attributes/list/translations/field/input_group/apply_to_all.html.twig";
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
        return array (  84 => 17,  79 => 15,  75 => 14,  71 => 13,  65 => 10,  59 => 6,  57 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set locale_code = hookable_metadata.context.locale_code|default(null) %}
{% set product_attribute_value = hookable_metadata.context.product_attribute_value %}
{% set product_attribute_code = hookable_metadata.context.product_attribute_code %}

{% if locale_code is not null %}
    <button
        type=\"button\"
        class=\"btn btn-icon\"
        data-bs-toggle=\"tooltip\"
        data-bs-title=\"{{ 'sylius.ui.apply_to_all'|trans }}\"
        data-action=\"live#action\"
        data-live-action-param=\"applyToAll\"
        data-live-attribute-code-param=\"{{ product_attribute_code }}\"
        data-live-locale-code-param=\"{{ product_attribute_value.vars.data.localeCode }}\"
        {{ sylius_test_html_attribute('apply-to-all') }}
    >
        {{ ux_icon('tabler:copy-plus') }}
    </button>
{% endif %}
", "@SyliusAdmin/product/form/sections/attributes/list/translations/field/input_group/apply_to_all.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/form/sections/attributes/list/translations/field/input_group/apply_to_all.html.twig");
    }
}
