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

/* @SyliusAdmin/product/show/content/page_body/general/shared/pricing/body/applied_promotions.html.twig */
class __TwigTemplate_0c889aa5b7b53b1b39421bd830da5828 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/general/shared/pricing/body/applied_promotions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/general/shared/pricing/body/applied_promotions.html.twig"));

        // line 1
        $context["channel_pricing"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "channel_pricing", [], "any", false, false, false, 1);
        // line 2
        yield "
<td class=\"text-end\">
    ";
        // line 4
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel_pricing"]) || array_key_exists("channel_pricing", $context) ? $context["channel_pricing"] : (function () { throw new RuntimeError('Variable "channel_pricing" does not exist.', 4, $this->source); })()), "appliedPromotions", [], "any", false, false, false, 4)) > 0)) {
            // line 5
            yield "        <div class=\"row\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel_pricing"]) || array_key_exists("channel_pricing", $context) ? $context["channel_pricing"] : (function () { throw new RuntimeError('Variable "channel_pricing" does not exist.', 6, $this->source); })()), "appliedPromotions", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 7
                yield "                <a class=\"mb-1 applied-promotion\"
                    ";
                // line 8
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("applied-promotion");
                yield "
                   href=\"";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_catalog_promotion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 9)]), "html", null, true);
                yield "\"
                >
                    ";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 11), "html", null, true);
                yield "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            yield "        </div>
    ";
        } else {
            // line 16
            yield "        -
    ";
        }
        // line 18
        yield "</td>
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
        return "@SyliusAdmin/product/show/content/page_body/general/shared/pricing/body/applied_promotions.html.twig";
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
        return array (  92 => 18,  88 => 16,  84 => 14,  75 => 11,  70 => 9,  66 => 8,  63 => 7,  59 => 6,  56 => 5,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set channel_pricing = hookable_metadata.context.channel_pricing %}

<td class=\"text-end\">
    {% if channel_pricing.appliedPromotions|length > 0 %}
        <div class=\"row\">
            {% for promotion in channel_pricing.appliedPromotions %}
                <a class=\"mb-1 applied-promotion\"
                    {{ sylius_test_html_attribute('applied-promotion') }}
                   href=\"{{ path('sylius_admin_catalog_promotion_show', {'id': promotion.id}) }}\"
                >
                    {{ promotion.name }}
                </a>
            {% endfor %}
        </div>
    {% else %}
        -
    {% endif %}
</td>
", "@SyliusAdmin/product/show/content/page_body/general/shared/pricing/body/applied_promotions.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/show/content/page_body/general/shared/pricing/body/applied_promotions.html.twig");
    }
}
