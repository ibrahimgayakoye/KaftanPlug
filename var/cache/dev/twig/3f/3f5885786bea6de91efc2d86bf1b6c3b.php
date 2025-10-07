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

/* @SyliusAdmin/shared/helper/dropdown.html.twig */
class __TwigTemplate_ff95da81d770e511f6dcc32c2d76d45e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/helper/dropdown.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/helper/dropdown.html.twig"));

        // line 27
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_default($params = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "params" => $params,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "default"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "default"));

            // line 2
            yield "    ";
            $macros["button"] = $this->load("@SyliusAdmin/shared/helper/button.html.twig", 2)->unwrap();
            // line 3
            yield "
    ";
            // line 4
            $context["params"] = Twig\Extension\CoreExtension::merge(["button" => [], "class" => null, "content" => null, "custom_trigger" => null, "direction" => "down"],             // line 10
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 10, $this->source); })()));
            // line 11
            yield "
    ";
            // line 12
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 12, $this->source); })()), "direction", [], "any", false, false, false, 12) == "down")) {
                $context["drop"] = "";
            }
            // line 13
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 13, $this->source); })()), "direction", [], "any", false, false, false, 13) == "down-end")) {
                $context["drop"] = " dropdown-menu-end";
            }
            // line 14
            yield "
    <div class=\"dropdown\">
        ";
            // line 16
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 16, $this->source); })()), "custom_trigger", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 17
                yield "            <div data-bs-toggle=\"dropdown\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 17, $this->source); })()), "custom_trigger", [], "any", false, false, false, 17), "html", null, true);
                yield "</div>
        ";
            } else {
                // line 19
                yield "            ";
                yield $macros["button"]->getTemplateForMacro("macro_default", $context, 19, $this->getSourceContext())->macro_default(...[Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 19, $this->source); })()), "button", [], "any", false, false, false, 19), ["dropdown" => true])]);
                yield "
        ";
            }
            // line 21
            yield "
        <div class=\"dropdown-menu";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["drop"]) || array_key_exists("drop", $context) ? $context["drop"] : (function () { throw new RuntimeError('Variable "drop" does not exist.', 22, $this->source); })()), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 22, $this->source); })()), "class", [], "any", false, false, false, 22), "html", null, true);
            yield "\">
            ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 23, $this->source); })()), "content", [], "any", false, false, false, 23), "html", null, true);
            yield "
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 28
    public function macro_list($params = null, $items = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "params" => $params,
            "items" => $items,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "list"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "list"));

            // line 29
            yield "    ";
            $context["content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 30
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 30, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 31
                    yield "            ";
                    $context["item"] = Twig\Extension\CoreExtension::merge(["type" => null, "class" => null, "icon" => null, "attributes" => []],                     // line 36
$context["item"]);
                    // line 37
                    yield "
            ";
                    // line 38
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 38) == "header")) {
                        // line 39
                        yield "                <span class=\"dropdown-header\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 39)), "html", null, true);
                        yield "</span>
            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 40
$context["item"], "type", [], "any", false, false, false, 40) == "divider")) {
                        // line 41
                        yield "                <hr class=\"dropdown-divider\">
            ";
                    } else {
                        // line 43
                        yield "                ";
                        $context["extra_class"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, false, 43))) : (""));
                        // line 44
                        yield "                <a class=\"dropdown-item";
                        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["extra_class"]) || array_key_exists("extra_class", $context) ? $context["extra_class"] : (function () { throw new RuntimeError('Variable "extra_class" does not exist.', 44, $this->source); })()), "html", null, true)) : (""));
                        yield "\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 44), "html", null, true);
                        yield "\" ";
                        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("user-dropdown-item", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 44), [], null, "en_US"));
                        yield " ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, false, 44));
                        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                            yield "=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                            yield "\" ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        yield ">
                    ";
                        // line 45
                        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 45), ["class" => ("icon dropdown-item-icon " . (isset($context["extra_class"]) || array_key_exists("extra_class", $context) ? $context["extra_class"] : (function () { throw new RuntimeError('Variable "extra_class" does not exist.', 45, $this->source); })()))])) : (""));
                        yield "
                    ";
                        // line 46
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 46)), "html", null, true);
                        yield "
                </a>
            ";
                    }
                    // line 49
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                yield "    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 51
            yield "
    ";
            // line 52
            yield $this->getTemplateForMacro("macro_default", $context, 52, $this->getSourceContext())->macro_default(...[Twig\Extension\CoreExtension::merge((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 52, $this->source); })()), ["content" => (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 52, $this->source); })())])]);
            yield "
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
        return "@SyliusAdmin/shared/helper/dropdown.html.twig";
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
        return array (  236 => 52,  233 => 51,  229 => 50,  223 => 49,  217 => 46,  213 => 45,  192 => 44,  189 => 43,  185 => 41,  183 => 40,  178 => 39,  176 => 38,  173 => 37,  171 => 36,  169 => 31,  164 => 30,  161 => 29,  142 => 28,  126 => 23,  120 => 22,  117 => 21,  111 => 19,  105 => 17,  103 => 16,  99 => 14,  94 => 13,  90 => 12,  87 => 11,  85 => 10,  84 => 4,  81 => 3,  78 => 2,  60 => 1,  48 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro default(params) %}
    {% import '@SyliusAdmin/shared/helper/button.html.twig' as button %}

    {% set params = {
        button: {},
        class: null,
        content: null,
        custom_trigger: null,
        direction: 'down'
    }|merge(params) %}

    {% if params.direction == 'down' %}{% set drop = '' %}{% endif %}
    {% if params.direction == 'down-end' %}{% set drop = ' dropdown-menu-end' %}{% endif %}

    <div class=\"dropdown\">
        {% if params.custom_trigger %}
            <div data-bs-toggle=\"dropdown\">{{ params.custom_trigger }}</div>
        {% else %}
            {{ button.default(params.button|merge({ dropdown: true })) }}
        {% endif %}

        <div class=\"dropdown-menu{{ drop }} {{ params.class }}\">
            {{ params.content }}
        </div>
    </div>
{% endmacro %}

{% macro list(params, items) %}
    {% set content %}
        {% for item in items %}
            {% set item = {
                type: null,
                class: null,
                icon: null,
                attributes: {}
            }|merge(item) %}

            {% if item.type == 'header' %}
                <span class=\"dropdown-header\">{{ item.title|trans }}</span>
            {% elseif item.type == 'divider' %}
                <hr class=\"dropdown-divider\">
            {% else %}
                {% set extra_class = item.class ? ' ' ~ item.class %}
                <a class=\"dropdown-item{{ item.class ? extra_class }}\" href=\"{{ item.url }}\" {{ sylius_test_html_attribute('user-dropdown-item', item.title|trans({}, null, 'en_US')) }} {% for attr, value in item.attributes %}{{ attr }}=\"{{ value }}\" {% endfor %}>
                    {{ item.icon ? ux_icon(item.icon, {'class': 'icon dropdown-item-icon ' ~ extra_class }) }}
                    {{ item.title|trans }}
                </a>
            {% endif %}
        {% endfor %}
    {% endset %}

    {{ _self.default(params|merge({ content: content })) }}
{% endmacro %}
", "@SyliusAdmin/shared/helper/dropdown.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/helper/dropdown.html.twig");
    }
}
