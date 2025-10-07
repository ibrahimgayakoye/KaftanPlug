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

/* @SyliusShop/product/show/content/info/overview/accordion/attributes/content.html.twig */
class __TwigTemplate_dc89eb7beb82a55e5e83379b1ee83a15 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/overview/accordion/attributes/content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/overview/accordion/attributes/content.html.twig"));

        // line 1
        $context["product"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "product", [], "any", false, false, false, 1);
        // line 2
        $context["configuration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "configuration", [], "any", false, false, false, 2);
        // line 3
        yield "
";
        // line 4
        yield from $this->load("@SyliusShop/product/show/content/info/overview/accordion/attributes/content.html.twig", 4, "112357407")->unwrap()->yield(CoreExtension::merge($context, ["accordion_item_id" => "attributes"]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusShop/product/show/content/info/overview/accordion/attributes/content.html.twig";
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
        return array (  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set product = hookable_metadata.context.product %}
{% set configuration = hookable_metadata.context.configuration %}

{% embed '@SyliusShop/shared/accordion/accordion_item_content.html.twig' with { accordion_item_id: 'attributes' } %}
    {% block accordion_item_content %}
        <table class=\"table table-lg table-list\" {{ sylius_test_html_attribute('product-attributes') }}>
            <tbody>
            {% for attribute_value in product.getAttributesByLocale(configuration.request.locale, configuration.request.defaultLocale, sylius_base_locale)|sylius_sort_by('attribute.position') %}
                <tr>
                    <th scope=\"row\" {{ sylius_test_html_attribute('product-attribute-name', attribute_value.name) }}>{{ attribute_value.name }}</th>
                    <td {{ sylius_test_html_attribute('product-attribute-value', attribute_value.name) }}>
                        {% include [
                            '@SyliusAttribute/Types/'~attribute_value.type~'.html.twig',
                            '@SyliusAttribute/Types/default.html.twig'
                        ] with {
                            'attribute': attribute_value,
                            'locale': configuration.request.locale,
                            'fallbackLocale': configuration.request.defaultLocale
                        } %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endblock %}
{% endembed %}
", "@SyliusShop/product/show/content/info/overview/accordion/attributes/content.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/product/show/content/info/overview/accordion/attributes/content.html.twig");
    }
}


/* @SyliusShop/product/show/content/info/overview/accordion/attributes/content.html.twig */
class __TwigTemplate_dc89eb7beb82a55e5e83379b1ee83a15___112357407 extends Template
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

        $this->blocks = [
            'accordion_item_content' => [$this, 'block_accordion_item_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        return "@SyliusShop/shared/accordion/accordion_item_content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/overview/accordion/attributes/content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/overview/accordion/attributes/content.html.twig"));

        $this->parent = $this->load("@SyliusShop/shared/accordion/accordion_item_content.html.twig", 4);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_accordion_item_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accordion_item_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accordion_item_content"));

        // line 6
        yield "        <table class=\"table table-lg table-list\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-attributes");
        yield ">
            <tbody>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Sylius\TwigExtra\Twig\Extension\SortByExtension']->sortBy(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "getAttributesByLocale", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "locale", [], "any", false, false, false, 8), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "defaultLocale", [], "any", false, false, false, 8), (isset($context["sylius_base_locale"]) || array_key_exists("sylius_base_locale", $context) ? $context["sylius_base_locale"] : (function () { throw new RuntimeError('Variable "sylius_base_locale" does not exist.', 8, $this->source); })())], "method", false, false, false, 8), "attribute.position"));
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
            // line 9
            yield "                <tr>
                    <th scope=\"row\" ";
            // line 10
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-attribute-name", CoreExtension::getAttribute($this->env, $this->source, $context["attribute_value"], "name", [], "any", false, false, false, 10));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_value"], "name", [], "any", false, false, false, 10), "html", null, true);
            yield "</th>
                    <td ";
            // line 11
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-attribute-value", CoreExtension::getAttribute($this->env, $this->source, $context["attribute_value"], "name", [], "any", false, false, false, 11));
            yield ">
                        ";
            // line 12
            yield from $this->load([(("@SyliusAttribute/Types/" . CoreExtension::getAttribute($this->env, $this->source,             // line 13
$context["attribute_value"], "type", [], "any", false, false, false, 13)) . ".html.twig"), "@SyliusAttribute/Types/default.html.twig"], 12)->unwrap()->yield(CoreExtension::merge($context, ["attribute" =>             // line 16
$context["attribute_value"], "locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 17
(isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "locale", [], "any", false, false, false, 17), "fallbackLocale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 18
(isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "defaultLocale", [], "any", false, false, false, 18)]));
            // line 20
            yield "                    </td>
                </tr>
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
        // line 23
        yield "            </tbody>
        </table>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusShop/product/show/content/info/overview/accordion/attributes/content.html.twig";
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
        return array (  238 => 23,  222 => 20,  220 => 18,  219 => 17,  218 => 16,  217 => 13,  216 => 12,  212 => 11,  206 => 10,  203 => 9,  186 => 8,  180 => 6,  167 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set product = hookable_metadata.context.product %}
{% set configuration = hookable_metadata.context.configuration %}

{% embed '@SyliusShop/shared/accordion/accordion_item_content.html.twig' with { accordion_item_id: 'attributes' } %}
    {% block accordion_item_content %}
        <table class=\"table table-lg table-list\" {{ sylius_test_html_attribute('product-attributes') }}>
            <tbody>
            {% for attribute_value in product.getAttributesByLocale(configuration.request.locale, configuration.request.defaultLocale, sylius_base_locale)|sylius_sort_by('attribute.position') %}
                <tr>
                    <th scope=\"row\" {{ sylius_test_html_attribute('product-attribute-name', attribute_value.name) }}>{{ attribute_value.name }}</th>
                    <td {{ sylius_test_html_attribute('product-attribute-value', attribute_value.name) }}>
                        {% include [
                            '@SyliusAttribute/Types/'~attribute_value.type~'.html.twig',
                            '@SyliusAttribute/Types/default.html.twig'
                        ] with {
                            'attribute': attribute_value,
                            'locale': configuration.request.locale,
                            'fallbackLocale': configuration.request.defaultLocale
                        } %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endblock %}
{% endembed %}
", "@SyliusShop/product/show/content/info/overview/accordion/attributes/content.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/product/show/content/info/overview/accordion/attributes/content.html.twig");
    }
}
