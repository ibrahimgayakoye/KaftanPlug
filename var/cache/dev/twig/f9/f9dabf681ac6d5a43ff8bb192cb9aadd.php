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

/* @SyliusAdmin/product/show/content/page_body/general/simple_product.html.twig */
class __TwigTemplate_acad1969121d78d1f42ff233b29ccf34 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/general/simple_product.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/general/simple_product.html.twig"));

        // line 1
        $context["product"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "product", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "isSimple", [], "method", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    ";
            $context["variant"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "variants", [], "any", false, false, false, 4), "first", [], "any", false, false, false, 4);
            // line 5
            yield "    ";
            $context["channels"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 5, $this->source); })()), "context", [], "any", false, false, false, 5), "channels", [], "any", false, false, false, 5);
            // line 6
            yield "
    <div class=\"table-responsive\">
        <table class=\"table table-vcenter\">
            <thead>
                <tr>
                    ";
            // line 11
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("simple_product#head", [], $context, false);
            // line 12
            yield "                </tr>
            </thead>
            <tbody>
                <tr>
                    ";
            // line 16
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("simple_product#tab", ["variant" => (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 16, $this->source); })()), "product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })())], $context, false);
            // line 17
            yield "                </tr>
                <tr class=\"bg-gray-100\">
                    <td colspan=\"9\" class=\"p-0 border-0\">
                        <div class=\"py-3 px-5\">
                            ";
            // line 21
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("simple_product#details", ["variant" => (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 21, $this->source); })())], $context, false);
            // line 22
            yield "                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
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
        return "@SyliusAdmin/product/show/content/page_body/general/simple_product.html.twig";
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
        return array (  89 => 22,  86 => 21,  80 => 17,  77 => 16,  71 => 12,  68 => 11,  61 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set product = hookable_metadata.context.product %}

{% if product.isSimple() %}
    {% set variant = product.variants.first %}
    {% set channels = hookable_metadata.context.channels %}

    <div class=\"table-responsive\">
        <table class=\"table table-vcenter\">
            <thead>
                <tr>
                    {% hook 'simple_product#head' %}
                </tr>
            </thead>
            <tbody>
                <tr>
                    {% hook 'simple_product#tab' with { variant, product } %}
                </tr>
                <tr class=\"bg-gray-100\">
                    <td colspan=\"9\" class=\"p-0 border-0\">
                        <div class=\"py-3 px-5\">
                            {% hook 'simple_product#details' with { variant } %}
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
{% endif %}
", "@SyliusAdmin/product/show/content/page_body/general/simple_product.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/show/content/page_body/general/simple_product.html.twig");
    }
}
