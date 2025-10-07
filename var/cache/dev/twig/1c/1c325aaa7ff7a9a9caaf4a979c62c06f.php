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

/* @SyliusShop/product/index/content/body/sidebar/taxonomy.html.twig */
class __TwigTemplate_1f352fc9e04a13efabdafa663da1e5f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/index/content/body/sidebar/taxonomy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/index/content/body/sidebar/taxonomy.html.twig"));

        // line 1
        yield "<div ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("vertical-menu");
        yield ">
    <div class=\"d-flex flex-column\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 3, $this->source); })()), "enabledChildren", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "slug", [], "any", false, false, false, 4), "_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "translation", [], "any", false, false, false, 4), "locale", [], "any", false, false, false, 4)]), "html", null, true);
            yield "\" class=\"d-inline-block py-1 link-reset\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("vertical-menu-item");
            yield ">
                ";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 5), "html", null, true);
            yield "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        yield "
        ";
        // line 9
        if ((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 9, $this->source); })()), "parent", [], "any", false, false, false, 9)) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 9, $this->source); })()), "parent", [], "any", false, false, false, 9), "isRoot", [], "method", false, false, false, 9)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 9, $this->source); })()), "parent", [], "any", false, false, false, 9), "enabled", [], "any", false, false, false, 9))) {
            // line 10
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", ["slug" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 10, $this->source); })()), "parent", [], "any", false, false, false, 10), "slug", [], "any", false, false, false, 10), "_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 10, $this->source); })()), "parent", [], "any", false, false, false, 10), "translation", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10)]), "html", null, true);
            yield "\" class=\"d-inline-block py-1 link-reset\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("vertical-menu-go-level-up");
            yield ">
                ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.go_level_up"), "html", null, true);
            yield "
            </a>
        ";
        }
        // line 14
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
        return "@SyliusShop/product/index/content/body/sidebar/taxonomy.html.twig";
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
        return array (  92 => 14,  86 => 11,  79 => 10,  77 => 9,  74 => 8,  65 => 5,  58 => 4,  54 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div {{ sylius_test_html_attribute('vertical-menu') }}>
    <div class=\"d-flex flex-column\">
        {% for child in taxon.enabledChildren %}
            <a href=\"{{ path('sylius_shop_product_index', {'slug': child.slug, '_locale': child.translation.locale}) }}\" class=\"d-inline-block py-1 link-reset\" {{ sylius_test_html_attribute('vertical-menu-item') }}>
                {{ child.name }}
            </a>
        {% endfor %}

        {% if taxon.parent is not empty and not taxon.parent.isRoot() and taxon.parent.enabled %}
            <a href=\"{{ path('sylius_shop_product_index', {'slug': taxon.parent.slug, '_locale': taxon.parent.translation.locale}) }}\" class=\"d-inline-block py-1 link-reset\" {{ sylius_test_html_attribute('vertical-menu-go-level-up') }}>
                {{ 'sylius.ui.go_level_up'|trans }}
            </a>
        {% endif %}
    </div>
</div>
", "@SyliusShop/product/index/content/body/sidebar/taxonomy.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/product/index/content/body/sidebar/taxonomy.html.twig");
    }
}
