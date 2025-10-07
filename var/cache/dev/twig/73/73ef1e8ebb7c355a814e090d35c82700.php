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

/* @SyliusAdmin/product/show/content/page_body/attributes/translatable/body/value.html.twig */
class __TwigTemplate_eeec8704d82617f661d22489503b9b71 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/attributes/translatable/body/value.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/attributes/translatable/body/value.html.twig"));

        // line 1
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1);
        // line 2
        yield "
<div class=\"col-12 col-md-8\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 4, $this->source); })()), function ($__attribute_value__) use ($context, $macros) { $context["attribute_value"] = $__attribute_value__; return (CoreExtension::getAttribute($this->env, $this->source, $context["attribute_value"], "localeCode", [], "any", false, false, false, 4) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "locale_code", [], "any", false, false, false, 4)); }));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["attribute_value"]) {
            // line 5
            yield "        <p ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("attribute-value");
            yield ">
            ";
            // line 6
            yield from $this->load([(("@SyliusAdmin/product/show/content/page_body/attributes/types/" . CoreExtension::getAttribute($this->env, $this->source,             // line 7
$context["attribute_value"], "type", [], "any", false, false, false, 7)) . ".html.twig"), (("@SyliusAttribute/Types/" . CoreExtension::getAttribute($this->env, $this->source,             // line 8
$context["attribute_value"], "type", [], "any", false, false, false, 8)) . ".html.twig"), "@SyliusAdmin/product/show/content/page_body/attributes/types/default.html.twig"], 6)->unwrap()->yield(CoreExtension::merge($context, ["attribute" =>             // line 11
$context["attribute_value"], "locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 12
(isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 12, $this->source); })()), "context", [], "any", false, false, false, 12), "locale_code", [], "any", false, false, false, 12), "fallbackLocale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 13
(isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 13, $this->source); })()), "context", [], "any", false, false, false, 13), "sylius_base_locale", [], "any", false, false, false, 13)]));
            // line 15
            yield "        </p>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['attribute_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "</div>
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
        return "@SyliusAdmin/product/show/content/page_body/attributes/translatable/body/value.html.twig";
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
        return array (  98 => 17,  83 => 15,  81 => 13,  80 => 12,  79 => 11,  78 => 8,  77 => 7,  76 => 6,  71 => 5,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set attributes = hookable_metadata.context.attributes  %}

<div class=\"col-12 col-md-8\">
    {% for attribute_value in attributes|filter(attribute_value => attribute_value.localeCode == hookable_metadata.context.locale_code) %}
        <p {{ sylius_test_html_attribute('attribute-value') }}>
            {% include [
                '@SyliusAdmin/product/show/content/page_body/attributes/types/'~attribute_value.type~'.html.twig',
                '@SyliusAttribute/Types/'~attribute_value.type~'.html.twig',
                '@SyliusAdmin/product/show/content/page_body/attributes/types/default.html.twig'
            ] with {
                'attribute': attribute_value,
                'locale': hookable_metadata.context.locale_code,
                'fallbackLocale': hookable_metadata.context.sylius_base_locale,
            } %}
        </p>
    {% endfor %}
</div>
", "@SyliusAdmin/product/show/content/page_body/attributes/translatable/body/value.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/show/content/page_body/attributes/translatable/body/value.html.twig");
    }
}
