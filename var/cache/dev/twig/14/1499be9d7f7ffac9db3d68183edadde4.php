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

/* @SyliusAdmin/shared/helper/channel_pricings.html.twig */
class __TwigTemplate_93d431b0e15ec2bdb765cfb57658728b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/helper/channel_pricings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/helper/channel_pricings.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_channel_pricings($channel_pricing_forms = null, $product_variant = null, $body = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "channel_pricing_forms" => $channel_pricing_forms,
            "product_variant" => $product_variant,
            "body" => $body,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "channel_pricings"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "channel_pricings"));

            // line 2
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["accordion_id" => "product-channel-pricings"],             // line 4
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 4, $this->source); })()));
            // line 5
            yield "    ";
            $context["accordion_flush"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "accordion_flush", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 5, $this->source); })()), "accordion_flush", [], "any", false, false, false, 5), false)) : (false));
            // line 6
            yield "
    <div class=\"accordion ";
            // line 7
            yield (((($tmp = (isset($context["accordion_flush"]) || array_key_exists("accordion_flush", $context) ? $context["accordion_flush"] : (function () { throw new RuntimeError('Variable "accordion_flush" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("accordion-flush") : (null));
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 7, $this->source); })()), "accordion_id", [], "any", false, false, false, 7), "html", null, true);
            yield "\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["channel_pricing_forms"]) || array_key_exists("channel_pricing_forms", $context) ? $context["channel_pricing_forms"] : (function () { throw new RuntimeError('Variable "channel_pricing_forms" does not exist.', 8, $this->source); })()));
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
            foreach ($context['_seq'] as $context["channel_code"] => $context["channel_pricing_form"]) {
                // line 9
                yield "            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button
                        class=\"accordion-button ";
                // line 12
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 12) == false)) {
                    yield "collapsed";
                }
                yield "\"
                        type=\"button\"
                        data-bs-toggle=\"collapse\"
                        data-bs-target=\"#channel-pricing-";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["channel_code"], "html", null, true);
                yield "\"
                        aria-expanded=\"";
                // line 16
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "true";
                } else {
                    yield "false";
                }
                yield "\"
                        aria-controls=\"channel-pricing-";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["channel_code"], "html", null, true);
                yield "\"
                        ";
                // line 18
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-channel-pricings-accordion", $context["channel_code"]);
                yield "
                    >
                        ";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["channel_pricing_form"], "vars", [], "any", false, false, false, 20), "label", [], "any", false, false, false, 20), "html", null, true);
                yield "

                        <span class=\"accordion-button-toggle\">
                            ";
                // line 23
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:chevron-down");
                yield "
                        </span>
                    </button>
                </h2>
                <div id=\"channel-pricing-";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["channel_code"], "html", null, true);
                yield "\" class=\"accordion-collapse collapse ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "show";
                }
                yield "\" data-bs-parent=\"#product-channel-pricings\">
                    <div class=\"accordion-body\" ";
                // line 28
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-channel-pricings-accordion-body");
                yield ">
                        ";
                // line 29
                if ((($tmp =  !(null === (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 29, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 30
                    yield "                            ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, Twig\Extension\StringLoaderExtension::templateFromString($this->env, (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 30, $this->source); })())), ["channel_code" => $context["channel_code"], "channel_pricing_form" => $context["channel_pricing_form"], "product_variant" => (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new RuntimeError('Variable "product_variant" does not exist.', 30, $this->source); })())]);
                    yield "
                        ";
                } else {
                    // line 32
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["channel_pricing_form"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 33
                        yield "                                ";
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                        yield "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    yield "                        ";
                }
                // line 36
                yield "                    </div>
                </div>
            </div>
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
            unset($context['_seq'], $context['channel_code'], $context['channel_pricing_form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusAdmin/shared/helper/channel_pricings.html.twig";
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
        return array (  212 => 40,  195 => 36,  192 => 35,  183 => 33,  178 => 32,  172 => 30,  170 => 29,  166 => 28,  158 => 27,  151 => 23,  145 => 20,  140 => 18,  136 => 17,  128 => 16,  124 => 15,  116 => 12,  111 => 9,  94 => 8,  88 => 7,  85 => 6,  82 => 5,  80 => 4,  78 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro channel_pricings(channel_pricing_forms, product_variant, body = null, options = {}) %}
    {% set options = {
        accordion_id: 'product-channel-pricings'
    }|merge(options) %}
    {% set accordion_flush = options.accordion_flush|default(false) %}

    <div class=\"accordion {{ accordion_flush ? 'accordion-flush' : null }}\" id=\"{{ options.accordion_id }}\">
        {% for channel_code, channel_pricing_form in channel_pricing_forms %}
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button
                        class=\"accordion-button {% if loop.first == false %}collapsed{% endif %}\"
                        type=\"button\"
                        data-bs-toggle=\"collapse\"
                        data-bs-target=\"#channel-pricing-{{ channel_code }}\"
                        aria-expanded=\"{% if loop.first %}true{% else %}false{% endif %}\"
                        aria-controls=\"channel-pricing-{{ channel_code }}\"
                        {{ sylius_test_html_attribute('product-channel-pricings-accordion', channel_code) }}
                    >
                        {{ channel_pricing_form.vars.label }}

                        <span class=\"accordion-button-toggle\">
                            {{ ux_icon('tabler:chevron-down') }}
                        </span>
                    </button>
                </h2>
                <div id=\"channel-pricing-{{ channel_code }}\" class=\"accordion-collapse collapse {% if loop.first %}show{% endif %}\" data-bs-parent=\"#product-channel-pricings\">
                    <div class=\"accordion-body\" {{ sylius_test_html_attribute('product-channel-pricings-accordion-body') }}>
                        {% if body is not null %}
                            {{ include(template_from_string(body), { channel_code: channel_code, channel_pricing_form: channel_pricing_form, product_variant: product_variant}) }}
                        {% else %}
                            {% for field in channel_pricing_form %}
                                {{ form_row(field) }}
                            {% endfor %}
                        {% endif %}
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% endmacro %}
", "@SyliusAdmin/shared/helper/channel_pricings.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/helper/channel_pricings.html.twig");
    }
}
