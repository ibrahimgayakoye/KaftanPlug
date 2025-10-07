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

/* @SyliusShop/product/show/content/info/summary/add_to_cart/variants/table/body.html.twig */
class __TwigTemplate_52a9a34526fc8769fad5625e315dfb11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/summary/add_to_cart/variants/table/body.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/summary/add_to_cart/variants/table/body.html.twig"));

        // line 1
        $context["selected_variant"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "variant", [], "any", false, false, false, 1);
        // line 2
        yield "<tbody>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "product", [], "any", false, false, false, 3), "enabledVariants", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["key"] => $context["variant"]) {
            // line 4
            yield "    <tr class=\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["variant"], "code", [], "any", false, false, false, 4) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_variant"]) || array_key_exists("selected_variant", $context) ? $context["selected_variant"] : (function () { throw new RuntimeError('Variable "selected_variant" does not exist.', 4, $this->source); })()), "code", [], "any", false, false, false, 4))) {
                yield "table-success";
            }
            yield "\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-variants-row");
            yield ">
        ";
            // line 5
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("body", ["variant" => $context["variant"], "key" => $context["key"]], $context, false);
            // line 6
            yield "    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['variant'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        yield "</tbody>
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
        return "@SyliusShop/product/show/content/info/summary/add_to_cart/variants/table/body.html.twig";
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
        return array (  76 => 8,  69 => 6,  66 => 5,  57 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set selected_variant = hookable_metadata.context.variant %}
<tbody>
{% for key, variant in hookable_metadata.context.product.enabledVariants %}
    <tr class=\"{% if variant.code == selected_variant.code %}table-success{% endif %}\" {{ sylius_test_html_attribute('product-variants-row') }}>
        {% hook 'body' with { variant, key } %}
    </tr>
{% endfor %}
</tbody>
", "@SyliusShop/product/show/content/info/summary/add_to_cart/variants/table/body.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/product/show/content/info/summary/add_to_cart/variants/table/body.html.twig");
    }
}
