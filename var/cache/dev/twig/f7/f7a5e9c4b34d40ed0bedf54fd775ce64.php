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

/* @SyliusAdmin/shared/components/view_in_store.html.twig */
class __TwigTemplate_a03339b56d807bc7ef8a42d4c0ad4431 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/components/view_in_store.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/components/view_in_store.html.twig"));

        // line 1
        if ((($tmp = $this->extensions['Sylius\Bundle\CoreBundle\Twig\BundleLoadedCheckerExtension']->isBundleLoaded("SyliusShopBundle")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    ";
            $context["enabled_channels"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "channels", [], "any", false, false, false, 2), function ($__channel__) use ($context, $macros) { $context["channel"] = $__channel__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 2, $this->source); })()), "enabled", [], "any", false, false, false, 2) == true); });
            // line 3
            yield "
    ";
            // line 4
            if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "enabled", [], "any", false, false, false, 4) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["enabled_channels"]) || array_key_exists("enabled_channels", $context) ? $context["enabled_channels"] : (function () { throw new RuntimeError('Variable "enabled_channels" does not exist.', 4, $this->source); })())) < 1))) {
                // line 5
                yield "        <a class=\"btn disabled\" href=\"";
                yield (((($tmp = (!array_key_exists("url", $context))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("#") : ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 5, $this->source); })())));
                yield "\" target=\"_blank\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("view-in-store");
                yield ">
            ";
                // line 6
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:arrow-up-right");
                yield "
            ";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_in_store"), "html", null, true);
                yield "
        </a>
    ";
            } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 9
(isset($context["enabled_channels"]) || array_key_exists("enabled_channels", $context) ? $context["enabled_channels"] : (function () { throw new RuntimeError('Variable "enabled_channels" does not exist.', 9, $this->source); })())) > 1)) {
                // line 10
                yield "        <div class=\"dropdown\">
            <button class=\"btn dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                ";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_in_store"), "html", null, true);
                yield "
            </button>
            <ul class=\"dropdown-menu\" ";
                // line 14
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("view-in-store");
                yield ">
                ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["enabled_channels"]) || array_key_exists("enabled_channels", $context) ? $context["enabled_channels"] : (function () { throw new RuntimeError('Variable "enabled_channels" does not exist.', 15, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                    // line 16
                    yield "                    ";
                    $context["product_translation"] = $this->env->getFunction('sylius_product_translation')->getCallable()((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), $context["channel"]);
                    // line 17
                    yield "                    ";
                    if ((($tmp =  !(null === (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 17, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 18
                        yield "                        ";
                        $context["url"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\ChannelUrlExtension']->generateChannelUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 18, $this->source); })()), "slug", [], "any", false, false, false, 18), "_locale" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 18, $this->source); })()), "locale", [], "any", false, false, false, 18)]), $context["channel"]);
                        // line 19
                        yield "                    ";
                    }
                    // line 20
                    yield "
                    <li>
                        <a
                            class=\"dropdown-item";
                    // line 23
                    if ((($tmp =  !array_key_exists("url", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " disabled";
                    }
                    yield "\"
                            href=\"";
                    // line 24
                    yield (((($tmp = (!array_key_exists("url", $context))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("#") : ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 24, $this->source); })())));
                    yield "\"
                            target=\"_blank\"
                            ";
                    // line 26
                    yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("channel-code", CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "code", [], "any", false, false, false, 26));
                    yield "
                        >
                            ";
                    // line 28
                    yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:arrow-up-right", ["class" => "icon dropdown-item-icon"]);
                    yield "
                            ";
                    // line 29
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "name", [], "any", false, false, false, 29), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "code", [], "any", false, false, false, 29), "html", null, true);
                    yield ")
                        </a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['channel'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                yield "            </ul>
        </div>
    ";
            } else {
                // line 36
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["enabled_channels"]) || array_key_exists("enabled_channels", $context) ? $context["enabled_channels"] : (function () { throw new RuntimeError('Variable "enabled_channels" does not exist.', 36, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                    // line 37
                    yield "            ";
                    $context["product_translation"] = $this->env->getFunction('sylius_product_translation')->getCallable()((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 37, $this->source); })()), $context["channel"]);
                    // line 38
                    yield "            ";
                    if ((($tmp =  !(null === (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 38, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 39
                        yield "                ";
                        $context["url"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\ChannelUrlExtension']->generateChannelUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 39, $this->source); })()), "slug", [], "any", false, false, false, 39), "_locale" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 39, $this->source); })()), "locale", [], "any", false, false, false, 39)]), $context["channel"]);
                        // line 40
                        yield "            ";
                    }
                    // line 41
                    yield "
            <a class=\"btn ";
                    // line 42
                    if ((($tmp =  !array_key_exists("url", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "disabled";
                    }
                    yield "\" href=\"";
                    yield (((($tmp = (!array_key_exists("url", $context))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("#") : ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 42, $this->source); })())));
                    yield "\" target=\"_blank\" ";
                    yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("view-in-store");
                    yield ">
                ";
                    // line 43
                    yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:arrow-up-right");
                    yield "
                ";
                    // line 44
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_in_store"), "html", null, true);
                    yield "
            </a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['channel'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                yield "    ";
            }
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
        return "@SyliusAdmin/shared/components/view_in_store.html.twig";
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
        return array (  190 => 47,  181 => 44,  177 => 43,  167 => 42,  164 => 41,  161 => 40,  158 => 39,  155 => 38,  152 => 37,  147 => 36,  142 => 33,  130 => 29,  126 => 28,  121 => 26,  116 => 24,  110 => 23,  105 => 20,  102 => 19,  99 => 18,  96 => 17,  93 => 16,  89 => 15,  85 => 14,  80 => 12,  76 => 10,  74 => 9,  69 => 7,  65 => 6,  58 => 5,  56 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if sylius_bundle_loaded_checker('SyliusShopBundle') %}
    {% set enabled_channels = product.channels|filter(channel => channel.enabled == true) %}

    {% if not product.enabled or enabled_channels|length < 1 %}
        <a class=\"btn disabled\" href=\"{{ (url is not defined) ? '#' : url|raw }}\" target=\"_blank\" {{ sylius_test_html_attribute('view-in-store') }}>
            {{ ux_icon('tabler:arrow-up-right') }}
            {{ 'sylius.ui.view_in_store'|trans }}
        </a>
    {% elseif enabled_channels|length > 1 %}
        <div class=\"dropdown\">
            <button class=\"btn dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                {{ 'sylius.ui.view_in_store'|trans }}
            </button>
            <ul class=\"dropdown-menu\" {{ sylius_test_html_attribute('view-in-store') }}>
                {% for channel in enabled_channels %}
                    {% set product_translation = sylius_product_translation(product, channel) %}
                    {% if product_translation is not null %}
                        {% set url = sylius_channel_url(path('sylius_shop_product_show', {'slug': product_translation.slug, '_locale': product_translation.locale}), channel) %}
                    {% endif %}

                    <li>
                        <a
                            class=\"dropdown-item{% if url is not defined %} disabled{% endif %}\"
                            href=\"{{ (url is not defined) ? '#' : url|raw }}\"
                            target=\"_blank\"
                            {{ sylius_test_html_attribute('channel-code', channel.code) }}
                        >
                            {{ ux_icon('tabler:arrow-up-right', {'class': 'icon dropdown-item-icon'}) }}
                            {{ channel.name }} ({{ channel.code }})
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </div>
    {% else %}
        {% for channel in enabled_channels %}
            {% set product_translation = sylius_product_translation(product, channel) %}
            {% if product_translation is not null %}
                {% set url = sylius_channel_url(path('sylius_shop_product_show', {'slug': product_translation.slug, '_locale': product_translation.locale}), channel) %}
            {% endif %}

            <a class=\"btn {% if url is not defined %}disabled{% endif %}\" href=\"{{ (url is not defined) ? '#' : url|raw }}\" target=\"_blank\" {{ sylius_test_html_attribute('view-in-store') }}>
                {{ ux_icon('tabler:arrow-up-right') }}
                {{ 'sylius.ui.view_in_store'|trans }}
            </a>
        {% endfor %}
    {% endif %}
{% endif %}
", "@SyliusAdmin/shared/components/view_in_store.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/components/view_in_store.html.twig");
    }
}
