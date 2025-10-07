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

/* @SyliusAdmin/product_variant/form/content/update/header/actions/price_history.html.twig */
class __TwigTemplate_387e379c8ea2372c87d7d0870d16fba7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product_variant/form/content/update/header/actions/price_history.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product_variant/form/content/update/header/actions/price_history.html.twig"));

        // line 1
        $context["product_variant"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "resource", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new RuntimeError('Variable "product_variant" does not exist.', 3, $this->source); })()), "channelPricings", [], "any", false, false, false, 3)) < 1)) {
            // line 4
            yield "    <button class=\"btn disabled\">
        ";
            // line 5
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:eye", ["class" => "icon dropdown-item-icon"]);
            yield "
        ";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.price_history"), "html", null, true);
            yield "
    </button>
";
        } else {
            // line 9
            yield "    <div class=\"dropdown\">
        <button class=\"btn dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.price_history"), "html", null, true);
            yield "
        </button>
        <ul class=\"dropdown-menu\">
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new RuntimeError('Variable "product_variant" does not exist.', 14, $this->source); })()), "channelPricings", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["channel_pricing"]) {
                // line 15
                yield "                ";
                $context["parameters"] = ["productId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new RuntimeError('Variable "product_variant" does not exist.', 15, $this->source); })()), "product", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), "variantId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new RuntimeError('Variable "product_variant" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "channelPricingId" => CoreExtension::getAttribute($this->env, $this->source, $context["channel_pricing"], "id", [], "any", false, false, false, 15)];
                // line 16
                yield "                ";
                $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_channel_pricing_log_entry_index", (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 16, $this->source); })()));
                // line 17
                yield "                <li>
                    <a
                        class=\"dropdown-item";
                // line 19
                if ((($tmp =  !array_key_exists("url", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " disabled";
                }
                yield "\"
                        href=\"";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 20, $this->source); })()), "html", null, true);
                yield "\"
                    >
                        ";
                // line 22
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon(((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 22, $this->source); })()), "icon", [], "any", false, false, false, 22), "tabler:eye")) : ("tabler:eye")), ["class" => "icon dropdown-item-icon"]);
                yield "
                        <span>
                            <span class=\"text-nowrap\">";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\Bundle\AdminBundle\Twig\ChannelNameExtension']->getChannelNameByCode(CoreExtension::getAttribute($this->env, $this->source, $context["channel_pricing"], "channelCode", [], "any", false, false, false, 24)), "html", null, true);
                yield "</span>
                        </span>
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['channel_pricing'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "        </ul>
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
        return "@SyliusAdmin/product_variant/form/content/update/header/actions/price_history.html.twig";
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
        return array (  119 => 29,  108 => 24,  103 => 22,  98 => 20,  92 => 19,  88 => 17,  85 => 16,  82 => 15,  78 => 14,  72 => 11,  68 => 9,  62 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set product_variant = hookable_metadata.context.resource %}

{% if product_variant.channelPricings|length < 1 %}
    <button class=\"btn disabled\">
        {{ ux_icon('tabler:eye', {'class': 'icon dropdown-item-icon'}) }}
        {{ 'sylius.ui.price_history'|trans }}
    </button>
{% else %}
    <div class=\"dropdown\">
        <button class=\"btn dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            {{ 'sylius.ui.price_history'|trans }}
        </button>
        <ul class=\"dropdown-menu\">
            {% for channel_pricing in product_variant.channelPricings %}
                {% set parameters = { 'productId': product_variant.product.id, 'variantId': product_variant.id, 'channelPricingId': channel_pricing.id } %}
                {% set url = path('sylius_admin_channel_pricing_log_entry_index', parameters) %}
                <li>
                    <a
                        class=\"dropdown-item{% if url is not defined %} disabled{% endif %}\"
                        href=\"{{ url }}\"
                    >
                        {{ ux_icon(action.icon|default('tabler:eye'), {'class': 'icon dropdown-item-icon'}) }}
                        <span>
                            <span class=\"text-nowrap\">{{ channel_pricing.channelCode|sylius_channel_name }}</span>
                        </span>
                    </a>
                </li>
            {% endfor %}
        </ul>
    </div>
{% endif %}
", "@SyliusAdmin/product_variant/form/content/update/header/actions/price_history.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product_variant/form/content/update/header/actions/price_history.html.twig");
    }
}
