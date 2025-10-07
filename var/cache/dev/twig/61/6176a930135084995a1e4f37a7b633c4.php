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

/* @SyliusAdmin/product/form/sections/attributes/list/translations/field.html.twig */
class __TwigTemplate_13a2f41c52819c6f881e667151a9e3a0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/attributes/list/translations/field.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/attributes/list/translations/field.html.twig"));

        // line 1
        $context["locale_code"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 1), "locale_code", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "locale_code", [], "any", false, false, false, 1), null)) : (null));
        // line 2
        $context["product_attribute_value"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "product_attribute_value", [], "any", false, false, false, 2);
        // line 3
        yield "
<div class=\"flex-grow-1\">
    ";
        // line 5
        $context["required_class"] = ((( !(isset($context["locale_code"]) || array_key_exists("locale_code", $context) ? $context["locale_code"] : (function () { throw new RuntimeError('Variable "locale_code" does not exist.', 5, $this->source); })()) || ((isset($context["locale_code"]) || array_key_exists("locale_code", $context) ? $context["locale_code"] : (function () { throw new RuntimeError('Variable "locale_code" does not exist.', 5, $this->source); })()) == (isset($context["sylius_base_locale"]) || array_key_exists("sylius_base_locale", $context) ? $context["sylius_base_locale"] : (function () { throw new RuntimeError('Variable "sylius_base_locale" does not exist.', 5, $this->source); })())))) ? ("required") : (""));
        // line 6
        yield "    ";
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("field", ["required_class" => (isset($context["required_class"]) || array_key_exists("required_class", $context) ? $context["required_class"] : (function () { throw new RuntimeError('Variable "required_class" does not exist.', 6, $this->source); })())], $context, false);
        // line 7
        yield "    <input type=\"hidden\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_attribute_value"]) || array_key_exists("product_attribute_value", $context) ? $context["product_attribute_value"] : (function () { throw new RuntimeError('Variable "product_attribute_value" does not exist.', 7, $this->source); })()), "attribute", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "full_name", [], "any", false, false, false, 7), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_attribute_value"]) || array_key_exists("product_attribute_value", $context) ? $context["product_attribute_value"] : (function () { throw new RuntimeError('Variable "product_attribute_value" does not exist.', 7, $this->source); })()), "attribute", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_attribute_value"]) || array_key_exists("product_attribute_value", $context) ? $context["product_attribute_value"] : (function () { throw new RuntimeError('Variable "product_attribute_value" does not exist.', 8, $this->source); })()), "localeCode", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "full_name", [], "any", false, false, false, 8), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_attribute_value"]) || array_key_exists("product_attribute_value", $context) ? $context["product_attribute_value"] : (function () { throw new RuntimeError('Variable "product_attribute_value" does not exist.', 8, $this->source); })()), "localeCode", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "value", [], "any", false, false, false, 8), "html", null, true);
        yield "\">
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusAdmin/product/form/sections/attributes/list/translations/field.html.twig";
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
        return array (  69 => 8,  62 => 7,  58 => 6,  56 => 5,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set locale_code = hookable_metadata.context.locale_code|default(null) %}
{% set product_attribute_value = hookable_metadata.context.product_attribute_value %}

<div class=\"flex-grow-1\">
    {% set required_class = not locale_code or locale_code == sylius_base_locale ? 'required' : '' %}
    {% hook 'field' with { required_class } %}
    <input type=\"hidden\" name=\"{{ product_attribute_value.attribute.vars.full_name }}\" value=\"{{ product_attribute_value.attribute.vars.value }}\">
    <input type=\"hidden\" name=\"{{ product_attribute_value.localeCode.vars.full_name }}\" value=\"{{ product_attribute_value.localeCode.vars.value }}\">
</div>
", "@SyliusAdmin/product/form/sections/attributes/list/translations/field.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/form/sections/attributes/list/translations/field.html.twig");
    }
}
