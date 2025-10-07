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

/* @SyliusAdmin/product/form/sections/attributes/list/translations/field/input_group/widget.html.twig */
class __TwigTemplate_22ad1a13a350a4aeea840780acb0b386 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/attributes/list/translations/field/input_group/widget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/attributes/list/translations/field/input_group/widget.html.twig"));

        // line 1
        $context["product_attribute_value"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "product_attribute_value", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source,         // line 4
(isset($context["product_attribute_value"]) || array_key_exists("product_attribute_value", $context) ? $context["product_attribute_value"] : (function () { throw new RuntimeError('Variable "product_attribute_value" does not exist.', 4, $this->source); })()), "value", [], "any", false, false, false, 4), 'widget', $this->env->getFunction('sylius_test_form_attributes')->getCallable()(["attribute-value" => "", "attribute-name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 7
(isset($context["product_attribute_value"]) || array_key_exists("product_attribute_value", $context) ? $context["product_attribute_value"] : (function () { throw new RuntimeError('Variable "product_attribute_value" does not exist.', 7, $this->source); })()), "value", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "label", [], "any", false, false, false, 7), "locale-code" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 8
(isset($context["product_attribute_value"]) || array_key_exists("product_attribute_value", $context) ? $context["product_attribute_value"] : (function () { throw new RuntimeError('Variable "product_attribute_value" does not exist.', 8, $this->source); })()), "localeCode", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "value", [], "any", false, false, false, 8)]));
        // line 10
        yield "
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
        return "@SyliusAdmin/product/form/sections/attributes/list/translations/field/input_group/widget.html.twig";
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
        return array (  58 => 10,  56 => 8,  55 => 7,  54 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set product_attribute_value = hookable_metadata.context.product_attribute_value %}

{{ form_widget(
    product_attribute_value.value,
    sylius_test_form_attributes({
        'attribute-value': '',
        'attribute-name': product_attribute_value.value.vars.label,
        'locale-code': product_attribute_value.localeCode.vars.value,
    })
) }}
", "@SyliusAdmin/product/form/sections/attributes/list/translations/field/input_group/widget.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/form/sections/attributes/list/translations/field/input_group/widget.html.twig");
    }
}
