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

/* @SyliusAdmin/product_variant/grid/action/price_history.html.twig */
class __TwigTemplate_ee560dc9458c0c390a40598a701bc3f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product_variant/grid/action/price_history.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product_variant/grid/action/price_history.html.twig"));

        // line 1
        $context["visible"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "visible", [], "any", true, true, false, 1)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })()), "visible", [], "any", false, false, false, 1)) : (true));
        // line 2
        yield "
";
        // line 3
        if ((($tmp = (isset($context["visible"]) || array_key_exists("visible", $context) ? $context["visible"] : (function () { throw new RuntimeError('Variable "visible" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    <div>
        <span class=\"dropdown-header\">";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 5, $this->source); })()), "label", [], "any", false, false, false, 5)), "html", null, true);
            yield "</span>
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "channelPricings", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["channelPricing"]) {
                // line 7
                yield "            ";
                $context["parameters"] = ["productId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "product", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7), "variantId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "channelPricingId" => CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "id", [], "any", false, false, false, 7)];
                // line 8
                yield "            <a
                class=\"dropdown-item\"
                href=\"";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_channel_pricing_log_entry_index", (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 10, $this->source); })())), "html", null, true);
                yield "\"
                ";
                // line 11
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("price-history-in-channel", CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "channelCode", [], "any", false, false, false, 11));
                yield "
            >
                ";
                // line 13
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:eye", ["class" => "icon dropdown-item-icon"]);
                yield "
                <span>
                    <span class=\"text-nowrap\">";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\Bundle\AdminBundle\Twig\ChannelNameExtension']->getChannelNameByCode(CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "channelCode", [], "any", false, false, false, 15)), "html", null, true);
                yield "</span>
                </span>

            </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['channelPricing'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "    </div>
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
        return "@SyliusAdmin/product_variant/grid/action/price_history.html.twig";
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
        return array (  98 => 20,  87 => 15,  82 => 13,  77 => 11,  73 => 10,  69 => 8,  66 => 7,  62 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set visible = options.visible is defined ? options.visible : true %}

{% if visible %}
    <div>
        <span class=\"dropdown-header\">{{ action.label|trans }}</span>
        {% for channelPricing in data.channelPricings %}
            {% set parameters = { 'productId': data.product.id, 'variantId': data.id, 'channelPricingId': channelPricing.id } %}
            <a
                class=\"dropdown-item\"
                href=\"{{ path('sylius_admin_channel_pricing_log_entry_index', parameters) }}\"
                {{ sylius_test_html_attribute('price-history-in-channel', channelPricing.channelCode) }}
            >
                {{ ux_icon('tabler:eye', { class: 'icon dropdown-item-icon'}) }}
                <span>
                    <span class=\"text-nowrap\">{{ channelPricing.channelCode|sylius_channel_name }}</span>
                </span>

            </a>
        {% endfor %}
    </div>
{% endif %}
", "@SyliusAdmin/product_variant/grid/action/price_history.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product_variant/grid/action/price_history.html.twig");
    }
}
