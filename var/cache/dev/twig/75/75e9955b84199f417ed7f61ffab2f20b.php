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

/* @SyliusAdmin/product/show/content/page_body/attributes.html.twig */
class __TwigTemplate_edf52d7b49dae268d130189833e4c856 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/attributes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/attributes.html.twig"));

        // line 1
        $context["product"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "resource", [], "any", false, false, false, 1);
        // line 2
        yield "
<div class=\"card mb-3\">
    <div class=\"card-header\">
        <div class=\"card-title\">
            ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.attributes"), "html", null, true);
        yield "
        </div>
    </div>
    <div ";
        // line 9
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("attributes");
        yield ">
        <div class=\"bg-white mb-3\">
            <div class=\"accordion accordion-flush\" id=\"attribute-translations\">
                ";
        // line 12
        $context["set_locale_codes"] = [];
        // line 13
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "attributes", [], "any", false, false, false, 13)) == 0)) {
            // line 14
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.there_are_no_attributes_configured"), "html", null, true);
            yield "
                ";
        } else {
            // line 16
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "attributes", [], "any", false, false, false, 16));
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
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 17
                yield "                        ";
                if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "localeCode", [], "any", false, false, false, 17), (isset($context["set_locale_codes"]) || array_key_exists("set_locale_codes", $context) ? $context["set_locale_codes"] : (function () { throw new RuntimeError('Variable "set_locale_codes" does not exist.', 17, $this->source); })()))) {
                    // line 18
                    yield "                            ";
                    $context["locale_code"] = CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "localeCode", [], "any", false, false, false, 18);
                    // line 19
                    yield "                                <div class=\"accordion-item\">
                                    ";
                    // line 20
                    if ((($tmp = (isset($context["locale_code"]) || array_key_exists("locale_code", $context) ? $context["locale_code"] : (function () { throw new RuntimeError('Variable "locale_code" does not exist.', 20, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 21
                        yield "                                        ";
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("attributes#head", ["locale_code" => (isset($context["locale_code"]) || array_key_exists("locale_code", $context) ? $context["locale_code"] : (function () { throw new RuntimeError('Variable "locale_code" does not exist.', 21, $this->source); })()), "loop" => $context["loop"]], $context, false);
                        // line 22
                        yield "                                    ";
                    } else {
                        // line 23
                        yield "                                        ";
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("attributes#head", ["loop" => $context["loop"]], $context, false);
                        // line 24
                        yield "                                    ";
                    }
                    // line 25
                    yield "                                    ";
                    if ((($tmp = (isset($context["locale_code"]) || array_key_exists("locale_code", $context) ? $context["locale_code"] : (function () { throw new RuntimeError('Variable "locale_code" does not exist.', 25, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 26
                        yield "                                        <div ";
                        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("translatable-attribute");
                        yield ">
                                            ";
                        // line 27
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("attributes#body", ["attributes" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "attributes", [], "any", false, false, false, 27), "locale_code" => (isset($context["locale_code"]) || array_key_exists("locale_code", $context) ? $context["locale_code"] : (function () { throw new RuntimeError('Variable "locale_code" does not exist.', 27, $this->source); })())], $context, false);
                        // line 28
                        yield "                                        </div>
                                    ";
                    } else {
                        // line 30
                        yield "                                        <div ";
                        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("non-translatable-attribute");
                        yield ">
                                            ";
                        // line 31
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("attributes#body", ["attributes" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "attributes", [], "any", false, false, false, 31)], $context, false);
                        // line 32
                        yield "                                        </div>
                                    ";
                    }
                    // line 34
                    yield "                                </div>
                                ";
                    // line 35
                    $context["set_locale_codes"] = Twig\Extension\CoreExtension::merge((isset($context["set_locale_codes"]) || array_key_exists("set_locale_codes", $context) ? $context["set_locale_codes"] : (function () { throw new RuntimeError('Variable "set_locale_codes" does not exist.', 35, $this->source); })()), [(isset($context["locale_code"]) || array_key_exists("locale_code", $context) ? $context["locale_code"] : (function () { throw new RuntimeError('Variable "locale_code" does not exist.', 35, $this->source); })())]);
                    // line 36
                    yield "                        ";
                }
                // line 37
                yield "                    ";
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
            unset($context['_seq'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "                ";
        }
        // line 39
        yield "            </div>
        </div>
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
        return "@SyliusAdmin/product/show/content/page_body/attributes.html.twig";
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
        return array (  174 => 39,  171 => 38,  157 => 37,  154 => 36,  152 => 35,  149 => 34,  145 => 32,  142 => 31,  137 => 30,  133 => 28,  130 => 27,  125 => 26,  122 => 25,  119 => 24,  115 => 23,  112 => 22,  108 => 21,  106 => 20,  103 => 19,  100 => 18,  97 => 17,  79 => 16,  73 => 14,  70 => 13,  68 => 12,  62 => 9,  56 => 6,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set product = hookable_metadata.context.resource %}

<div class=\"card mb-3\">
    <div class=\"card-header\">
        <div class=\"card-title\">
            {{ 'sylius.ui.attributes'|trans }}
        </div>
    </div>
    <div {{ sylius_test_html_attribute('attributes') }}>
        <div class=\"bg-white mb-3\">
            <div class=\"accordion accordion-flush\" id=\"attribute-translations\">
                {% set set_locale_codes = [] %}
                {% if product.attributes|length == 0 %}
                    {{ 'sylius.ui.there_are_no_attributes_configured'|trans }}
                {% else %}
                    {% for attribute in product.attributes %}
                        {% if attribute.localeCode not in set_locale_codes %}
                            {% set locale_code = attribute.localeCode %}
                                <div class=\"accordion-item\">
                                    {% if locale_code %}
                                        {% hook 'attributes#head' with { locale_code, loop } %}
                                    {% else %}
                                        {% hook 'attributes#head' with { loop } %}
                                    {% endif %}
                                    {% if locale_code %}
                                        <div {{ sylius_test_html_attribute('translatable-attribute') }}>
                                            {% hook 'attributes#body' with { 'attributes': product.attributes, locale_code } %}
                                        </div>
                                    {% else %}
                                        <div {{ sylius_test_html_attribute('non-translatable-attribute') }}>
                                            {% hook 'attributes#body' with { 'attributes': product.attributes } %}
                                        </div>
                                    {% endif %}
                                </div>
                                {%  set set_locale_codes = set_locale_codes|merge([locale_code]) %}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>
</div>
", "@SyliusAdmin/product/show/content/page_body/attributes.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/show/content/page_body/attributes.html.twig");
    }
}
