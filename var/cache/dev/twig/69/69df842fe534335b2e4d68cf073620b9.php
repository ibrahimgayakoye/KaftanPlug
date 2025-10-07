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

/* @SyliusShop/product/show/content/info/summary/prices/price.html.twig */
class __TwigTemplate_241b63b89f75af4912a521c9498fd156 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/summary/prices/price.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/summary/prices/price.html.twig"));

        // line 1
        yield "<div class=\"mb-2\" ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield ">
    <div class=\"d-flex gap-3 align-items-center\">
        <div class=\"fs-3\" ";
        // line 3
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-price", (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 3, $this->source); })()));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "</div>
        ";
        // line 4
        if ((($tmp = (isset($context["has_discount"]) || array_key_exists("has_discount", $context) ? $context["has_discount"] : (function () { throw new RuntimeError('Variable "has_discount" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "            <div ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-original-price", (isset($context["original_price"]) || array_key_exists("original_price", $context) ? $context["original_price"] : (function () { throw new RuntimeError('Variable "original_price" does not exist.', 5, $this->source); })()));
            yield ">
                <del>";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["original_price"]) || array_key_exists("original_price", $context) ? $context["original_price"] : (function () { throw new RuntimeError('Variable "original_price" does not exist.', 6, $this->source); })()), "html", null, true);
            yield "</del>
            </div>
        ";
        }
        // line 9
        yield "    </div>
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
        return "@SyliusShop/product/show/content/info/summary/prices/price.html.twig";
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
        return array (  73 => 9,  67 => 6,  62 => 5,  60 => 4,  54 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"mb-2\" {{ attributes }}>
    <div class=\"d-flex gap-3 align-items-center\">
        <div class=\"fs-3\" {{ sylius_test_html_attribute('product-price', price) }}>{{ price }}</div>
        {% if has_discount %}
            <div {{ sylius_test_html_attribute('product-original-price', original_price) }}>
                <del>{{ original_price }}</del>
            </div>
        {% endif %}
    </div>
</div>
", "@SyliusShop/product/show/content/info/summary/prices/price.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/product/show/content/info/summary/prices/price.html.twig");
    }
}
