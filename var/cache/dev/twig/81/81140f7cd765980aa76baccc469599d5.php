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

/* @SyliusShop/homepage/new_collection.html.twig */
class __TwigTemplate_1cad19e7b3e1c2c1ce8f4b74e17c0f22 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/homepage/new_collection.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/homepage/new_collection.html.twig"));

        // line 1
        yield "<div class=\"container mb-6\" role=\"region\" aria-labelledby=\"new-collection\">
    <div class=\"mb-5\">
        <h2 id=\"new-collection\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.homepage.new_collection"), "html", null, true);
        yield "</h2>
    </div>

    <div class=\"photo-grid\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([1, 2, 3]);
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 8
            yield "            <div class=\"photo-grid-item-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">
                <img
                    src=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("build/shop/images/homepage-new-collection-photo-" . $context["i"]) . ".webp"), "shop"), "html", null, true);
            yield "\"
                    class=\"object-fit-cover w-100 h-100 rounded-3\"
                    alt=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.homepage.new_collection"), "html", null, true);
            yield "\">
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
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
        return "@SyliusShop/homepage/new_collection.html.twig";
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
        return array (  83 => 15,  74 => 12,  69 => 10,  63 => 8,  59 => 7,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container mb-6\" role=\"region\" aria-labelledby=\"new-collection\">
    <div class=\"mb-5\">
        <h2 id=\"new-collection\">{{ 'sylius.homepage.new_collection'|trans }}</h2>
    </div>

    <div class=\"photo-grid\">
        {% for i in [1, 2, 3] %}
            <div class=\"photo-grid-item-{{ i }}\">
                <img
                    src=\"{{ asset('build/shop/images/homepage-new-collection-photo-' ~ i ~ '.webp', 'shop') }}\"
                    class=\"object-fit-cover w-100 h-100 rounded-3\"
                    alt=\"{{ 'sylius.homepage.new_collection'|trans }}\">
            </div>
        {% endfor %}
    </div>
</div>
", "@SyliusShop/homepage/new_collection.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/homepage/new_collection.html.twig");
    }
}
