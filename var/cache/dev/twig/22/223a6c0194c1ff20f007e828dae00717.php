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

/* @SyliusAdmin/customer/show/component/order_statistics.html.twig */
class __TwigTemplate_119ef67895131615ddfc612a2b97acd8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/customer/show/component/order_statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/customer/show/component/order_statistics.html.twig"));

        // line 1
        $macros["_v0"] = $this->macros["_v0"] = $this->load("@SyliusAdmin/shared/helper/accordion.html.twig", 1)->unwrap();
        // line 2
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/shared/helper/money.html.twig", 2)->unwrap();
        // line 3
        yield "
";
        // line 4
        $context["items"] = [];
        // line 5
        yield "
<div class=\"mb-2\">
    <div class=\"card\">
        <div class=\"card-body\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 9, $this->source); })()), "statistics", [], "any", false, false, false, 9));
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
        foreach ($context['_seq'] as $context["_key"] => $context["channel_statistics"]) {
            // line 10
            yield "                ";
            $context["channel"] = CoreExtension::getAttribute($this->env, $this->source, $context["channel_statistics"], "channel", [], "any", false, false, false, 10);
            // line 11
            yield "
                ";
            // line 12
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 13
                yield "                    <div class=\"h3\">
                        <span class=\"badge me-2\" style=\"background-color: ";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["channel"] ?? null), "color", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 14, $this->source); })()), "color", [], "any", false, false, false, 14), "#000")) : ("#000")), "html", null, true);
                yield "\"></span>
                        ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
                yield "
                    </div>
                ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 18
            yield "
                ";
            // line 19
            $context["content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 20
                yield "                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-4 mb-3\">
                            <div class=\"card card-sm\">
                                <div class=\"card-body\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-auto\">
                                            <span class=\"bg-gray text-muted avatar\">
                                                ";
                // line 27
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:shopping-bag");
                yield "
                                            </span>
                                        </div>
                                        <div class=\"col\">
                                            <div>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.orders"), "html", null, true);
                yield "</div>
                                            <div class=\"h2 mb-0 me-2\" ";
                // line 32
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()((("customer-statistics-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 32, $this->source); })()), "code", [], "any", false, false, false, 32)) . "-orders-count"));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel_statistics"], "ordersCount", [], "any", false, false, false, 32), "html", null, true);
                yield "</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12 col-md-4 mb-3\">
                            <div class=\"card card-sm\">
                                <div class=\"card-body\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-auto\">
                                            <span class=\"bg-gray text-muted avatar\">
                                                ";
                // line 44
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:coins");
                yield "
                                            </span>
                                        </div>
                                        <div class=\"col\">
                                            <div>";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total_value_of_orders"), "html", null, true);
                yield "</div>
                                            <div class=\"h2 mb-0 me-2\" ";
                // line 49
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()((("customer-statistics-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 49, $this->source); })()), "code", [], "any", false, false, false, 49)) . "-orders-total"));
                yield ">";
                yield $macros["money"]->getTemplateForMacro("macro_format", $context, 49, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, $context["channel_statistics"], "ordersValue", [], "any", false, false, false, 49), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 49, $this->source); })()), "baseCurrency", [], "any", false, false, false, 49), "code", [], "any", false, false, false, 49)]);
                yield "</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12 col-md-4 mb-3\">
                            <div class=\"card card-sm\">
                                <div class=\"card-body\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-auto\">
                                            <span class=\"bg-gray text-muted avatar\">
                                                ";
                // line 61
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:slash");
                yield "
                                            </span>
                                        </div>
                                        <div class=\"col\">
                                            <div>";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.average_order_value"), "html", null, true);
                yield "</div>
                                            <div class=\"h2 mb-0 me-2\" ";
                // line 66
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()((("customer-statistics-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 66, $this->source); })()), "code", [], "any", false, false, false, 66)) . "-orders-average"));
                yield ">";
                yield $macros["money"]->getTemplateForMacro("macro_format", $context, 66, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, $context["channel_statistics"], "averageOrderValue", [], "any", false, false, false, 66), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 66, $this->source); })()), "baseCurrency", [], "any", false, false, false, 66), "code", [], "any", false, false, false, 66)]);
                yield "</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 74
            yield "
                ";
            // line 75
            $context["open"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (true) : (false));
            // line 76
            yield "                ";
            $context["items"] = Twig\Extension\CoreExtension::merge((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 76, $this->source); })()), [["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 76, $this->source); })()), "content" => (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 76, $this->source); })()), "open" => (isset($context["open"]) || array_key_exists("open", $context) ? $context["open"] : (function () { throw new RuntimeError('Variable "open" does not exist.', 76, $this->source); })())]]);
            // line 77
            yield "            ";
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
        unset($context['_seq'], $context['_key'], $context['channel_statistics'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "
            ";
        // line 79
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 79, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "                ";
            yield $macros["_v0"]->getTemplateForMacro("macro_accordion", $context, 80, $this->getSourceContext())->macro_accordion(...[(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 80, $this->source); })()), false, null, true]);
            yield "
            ";
        } else {
            // line 82
            yield "                <div class=\"h3 text-muted\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("customer-statistics-no-orders");
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.there_are_no_orders_for_this_customer_to_display"), "html", null, true);
            yield "</div>
            ";
        }
        // line 84
        yield "        </div>
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
        return "@SyliusAdmin/customer/show/component/order_statistics.html.twig";
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
        return array (  238 => 84,  230 => 82,  224 => 80,  222 => 79,  219 => 78,  205 => 77,  202 => 76,  200 => 75,  197 => 74,  183 => 66,  179 => 65,  172 => 61,  155 => 49,  151 => 48,  144 => 44,  127 => 32,  123 => 31,  116 => 27,  107 => 20,  105 => 19,  102 => 18,  95 => 15,  91 => 14,  88 => 13,  86 => 12,  83 => 11,  80 => 10,  63 => 9,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% from '@SyliusAdmin/shared/helper/accordion.html.twig' import accordion %}
{% import '@SyliusAdmin/shared/helper/money.html.twig' as money %}

{% set items = [] %}

<div class=\"mb-2\">
    <div class=\"card\">
        <div class=\"card-body\">
            {% for channel_statistics in this.statistics %}
                {% set channel = channel_statistics.channel %}

                {% set title %}
                    <div class=\"h3\">
                        <span class=\"badge me-2\" style=\"background-color: {{ channel.color|default('#000') }}\"></span>
                        {{ channel.name }}
                    </div>
                {% endset %}

                {% set content %}
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-4 mb-3\">
                            <div class=\"card card-sm\">
                                <div class=\"card-body\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-auto\">
                                            <span class=\"bg-gray text-muted avatar\">
                                                {{ ux_icon('tabler:shopping-bag') }}
                                            </span>
                                        </div>
                                        <div class=\"col\">
                                            <div>{{ 'sylius.ui.orders'|trans }}</div>
                                            <div class=\"h2 mb-0 me-2\" {{ sylius_test_html_attribute('customer-statistics-' ~ channel.code ~ '-orders-count') }}>{{ channel_statistics.ordersCount }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12 col-md-4 mb-3\">
                            <div class=\"card card-sm\">
                                <div class=\"card-body\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-auto\">
                                            <span class=\"bg-gray text-muted avatar\">
                                                {{ ux_icon('tabler:coins') }}
                                            </span>
                                        </div>
                                        <div class=\"col\">
                                            <div>{{ 'sylius.ui.total_value_of_orders'|trans }}</div>
                                            <div class=\"h2 mb-0 me-2\" {{ sylius_test_html_attribute('customer-statistics-' ~ channel.code ~ '-orders-total') }}>{{ money.format(channel_statistics.ordersValue, channel.baseCurrency.code) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12 col-md-4 mb-3\">
                            <div class=\"card card-sm\">
                                <div class=\"card-body\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-auto\">
                                            <span class=\"bg-gray text-muted avatar\">
                                                {{ ux_icon('tabler:slash') }}
                                            </span>
                                        </div>
                                        <div class=\"col\">
                                            <div>{{ 'sylius.ui.average_order_value'|trans }}</div>
                                            <div class=\"h2 mb-0 me-2\" {{ sylius_test_html_attribute('customer-statistics-' ~ channel.code ~ '-orders-average') }}>{{ money.format(channel_statistics.averageOrderValue, channel.baseCurrency.code) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endset %}

                {% set open = loop.first ? true : false %}
                {% set items = items|merge([{title: title, content: content, open: open}]) %}
            {% endfor %}

            {% if items is not empty %}
                {{ accordion(items, false, null, true) }}
            {% else %}
                <div class=\"h3 text-muted\" {{ sylius_test_html_attribute('customer-statistics-no-orders') }}>{{ 'sylius.ui.there_are_no_orders_for_this_customer_to_display'|trans }}</div>
            {% endif %}
        </div>
    </div>
</div>
", "@SyliusAdmin/customer/show/component/order_statistics.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/customer/show/component/order_statistics.html.twig");
    }
}
