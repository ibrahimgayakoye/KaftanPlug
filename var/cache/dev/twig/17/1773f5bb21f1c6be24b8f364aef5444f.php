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

/* @SyliusAdmin/product/form/sections/attributes/list/item/remove_button.html.twig */
class __TwigTemplate_e97adde45f4ce9f6573d8727c91b5ef6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/attributes/list/item/remove_button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/attributes/list/item/remove_button.html.twig"));

        // line 1
        $context["product_attribute_name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "product_attribute_name", [], "any", false, false, false, 1);
        // line 2
        $context["product_attribute_code"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "product_attribute_code", [], "any", false, false, false, 2);
        // line 3
        yield "
<div class=\"tab-icons d-flex align-items-center\" style=\"transform: translateX(1rem)\">
    <button
        type=\"button\"
        class=\"btn btn-sm border-0 shadow-none\"
        data-action=\"live#action:stop\"
        data-live-action-param=\"prevent|removeAttribute\"
        data-live-attribute-code-param=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["product_attribute_code"]) || array_key_exists("product_attribute_code", $context) ? $context["product_attribute_code"] : (function () { throw new RuntimeError('Variable "product_attribute_code" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "\"
        ";
        // line 11
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("attribute-delete-button", (isset($context["product_attribute_name"]) || array_key_exists("product_attribute_name", $context) ? $context["product_attribute_name"] : (function () { throw new RuntimeError('Variable "product_attribute_name" does not exist.', 11, $this->source); })()));
        yield "
    >
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"text-muted\" width=\"12\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
            <path d=\"M18 6l-12 12\"></path>
            <path d=\"M6 6l12 12\"></path>
        </svg>
    </button>
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
        return "@SyliusAdmin/product/form/sections/attributes/list/item/remove_button.html.twig";
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
        return array (  65 => 11,  61 => 10,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set product_attribute_name = hookable_metadata.context.product_attribute_name %}
{% set product_attribute_code = hookable_metadata.context.product_attribute_code %}

<div class=\"tab-icons d-flex align-items-center\" style=\"transform: translateX(1rem)\">
    <button
        type=\"button\"
        class=\"btn btn-sm border-0 shadow-none\"
        data-action=\"live#action:stop\"
        data-live-action-param=\"prevent|removeAttribute\"
        data-live-attribute-code-param=\"{{ product_attribute_code }}\"
        {{ sylius_test_html_attribute('attribute-delete-button', product_attribute_name) }}
    >
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"text-muted\" width=\"12\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
            <path d=\"M18 6l-12 12\"></path>
            <path d=\"M6 6l12 12\"></path>
        </svg>
    </button>
</div>
", "@SyliusAdmin/product/form/sections/attributes/list/item/remove_button.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/form/sections/attributes/list/item/remove_button.html.twig");
    }
}
