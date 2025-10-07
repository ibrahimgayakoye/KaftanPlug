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

/* @SyliusAdmin/product/show/content/page_body/general/simple_product/details/pricing.html.twig */
class __TwigTemplate_47f805aebb45817c660490fcda38043b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/general/simple_product/details/pricing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/general/simple_product/details/pricing.html.twig"));

        // line 1
        $context["variant"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "variant", [], "any", false, false, false, 1);
        // line 2
        $context["channels"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "channels", [], "any", false, false, false, 2);
        // line 3
        yield "
<div class=\"card mb-3\">
    <div class=\"card-header\">
        <div class=\"card-title\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pricing"), "html", null, true);
        yield "</div>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table card-table table-vcenter\">
            <thead>
                <tr>
                    ";
        // line 12
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("pricing#head", [], $context, false);
        // line 13
        yield "                </tr>
            </thead>
            <tbody>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 16, $this->source); })()), "channelPricings", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["channel_pricing"]) {
            // line 17
            yield "                ";
            $context["channel"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["channels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["channel_pricing"], "channelCode", [], "any", false, false, false, 17), [], "any", true, true, false, 17)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 17, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["channel_pricing"], "channelCode", [], "any", false, false, false, 17), [], "any", false, false, false, 17)) : (null));
            // line 18
            yield "
                ";
            // line 19
            if ((($tmp = (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 19, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 20
                yield "                    ";
                $context["currency_code"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 20, $this->source); })()), "baseCurrency", [], "any", false, false, false, 20), "code", [], "any", false, false, false, 20);
                // line 21
                yield "                    ";
                $context["channel"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 21, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["channel_pricing"], "channelCode", [], "any", false, false, false, 21), [], "any", false, false, false, 21);
                // line 22
                yield "
                    <tr ";
                // line 23
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("simple-product", Twig\Extension\CoreExtension::sprintf("%s", CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 23, $this->source); })()), "code", [], "any", false, false, false, 23)));
                yield " ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("pricing", Twig\Extension\CoreExtension::sprintf("%s", CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 23, $this->source); })()), "code", [], "any", false, false, false, 23)));
                yield " >
                        ";
                // line 24
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("pricing#body", ["variant" => (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 24, $this->source); })()), "channel" => (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 24, $this->source); })()), "channel_pricing" => $context["channel_pricing"], "currency_code" => (isset($context["currency_code"]) || array_key_exists("currency_code", $context) ? $context["currency_code"] : (function () { throw new RuntimeError('Variable "currency_code" does not exist.', 24, $this->source); })())], $context, false);
                // line 25
                yield "                    </tr>
                ";
            } else {
                // line 27
                yield "                    ";
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("pricing#body", ["variant" => (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 27, $this->source); })()), "channel_pricing" => $context["channel_pricing"]], $context, false);
                // line 28
                yield "                ";
            }
            // line 29
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['channel_pricing'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "            </tbody>
        </table>
    </div>
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
        return "@SyliusAdmin/product/show/content/page_body/general/simple_product/details/pricing.html.twig";
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
        return array (  121 => 30,  115 => 29,  112 => 28,  108 => 27,  104 => 25,  101 => 24,  95 => 23,  92 => 22,  89 => 21,  86 => 20,  84 => 19,  81 => 18,  78 => 17,  74 => 16,  69 => 13,  66 => 12,  57 => 6,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set variant = hookable_metadata.context.variant %}
{% set channels = hookable_metadata.context.channels %}

<div class=\"card mb-3\">
    <div class=\"card-header\">
        <div class=\"card-title\">{{ 'sylius.ui.pricing'|trans }}</div>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table card-table table-vcenter\">
            <thead>
                <tr>
                    {% hook 'pricing#head' %}
                </tr>
            </thead>
            <tbody>
            {% for channel_pricing in variant.channelPricings %}
                {% set channel = attribute(channels, channel_pricing.channelCode) is defined ? attribute(channels, channel_pricing.channelCode) : null %}

                {% if channel %}
                    {% set currency_code = channel.baseCurrency.code %}
                    {% set channel = attribute(channels, channel_pricing.channelCode) %}

                    <tr {{ sylius_test_html_attribute('simple-product', \"%s\"|format(channel.code)) }} {{ sylius_test_html_attribute('pricing', \"%s\"|format(channel.code)) }} >
                        {% hook 'pricing#body' with { variant, channel, channel_pricing, currency_code } %}
                    </tr>
                {% else %}
                    {% hook 'pricing#body' with { variant, channel_pricing } %}
                {% endif %}
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
", "@SyliusAdmin/product/show/content/page_body/general/simple_product/details/pricing.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/show/content/page_body/general/simple_product/details/pricing.html.twig");
    }
}
