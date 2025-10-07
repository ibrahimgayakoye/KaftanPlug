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

/* @SyliusShop/shared/product_review/list.html.twig */
class __TwigTemplate_1aadc99d2a9aba9a2f85164cb85ae4ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/product_review/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/product_review/list.html.twig"));

        // line 1
        $macros["messages"] = $this->macros["messages"] = $this->load("@SyliusShop/shared/messages.html.twig", 1)->unwrap();
        // line 2
        $context["prefixes"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "prefixes", [], "any", false, false, false, 2), ["sylius.shop.product_review.index.content.main"]);
        // line 3
        yield "
";
        // line 4
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["product_reviews"]) || array_key_exists("product_reviews", $context) ? $context["product_reviews"] : (function () { throw new RuntimeError('Variable "product_reviews" does not exist.', 4, $this->source); })())) > 0)) {
            // line 5
            yield "    <div class=\"mb-5\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["product_reviews"]) || array_key_exists("product_reviews", $context) ? $context["product_reviews"] : (function () { throw new RuntimeError('Variable "product_reviews" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 7
                yield "            ";
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("list", ["_prefixes" => (isset($context["prefixes"]) || array_key_exists("prefixes", $context) ? $context["prefixes"] : (function () { throw new RuntimeError('Variable "prefixes" does not exist.', 7, $this->source); })()), "review" => $context["review"]], $context, false);
                // line 8
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['review'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            yield "    </div>
";
        } else {
            // line 11
            yield "    ";
            yield $macros["messages"]->getTemplateForMacro("macro_info", $context, 11, $this->getSourceContext())->macro_info(...["sylius.ui.there_are_no_reviews"]);
            yield "
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
        return "@SyliusShop/shared/product_review/list.html.twig";
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
        return array (  78 => 11,  74 => 9,  68 => 8,  64 => 7,  60 => 6,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusShop/shared/messages.html.twig' as messages %}
{% set prefixes = hookable_metadata.prefixes|merge(['sylius.shop.product_review.index.content.main']) %}

{% if product_reviews|length > 0 %}
    <div class=\"mb-5\">
        {% for review in product_reviews %}
            {% hook 'list' with { _prefixes: prefixes, review } %}
        {% endfor %}
    </div>
{% else %}
    {{ messages.info('sylius.ui.there_are_no_reviews') }}
{% endif %}
", "@SyliusShop/shared/product_review/list.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/product_review/list.html.twig");
    }
}
