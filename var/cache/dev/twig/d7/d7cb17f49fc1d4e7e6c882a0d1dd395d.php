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

/* @SyliusAdmin/shared/crud/common/content/flashes.html.twig */
class __TwigTemplate_298aead637e4f55a66d956901babe219 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/common/content/flashes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/common/content/flashes.html.twig"));

        // line 1
        $context["session"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context, "app", [], "any", false, true, false, 1), "session", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context, "app", [], "any", false, false, false, 1), "session", [], "any", false, false, false, 1), null)) : (null));
        // line 2
        yield "
";
        // line 3
        if (( !(null === (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 3, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 3, $this->source); })()), "started", [], "any", false, false, false, 3))) {
            // line 4
            yield "    ";
            $context["icons"] = ["success" => "tabler:circle-check", "error" => "tabler:exclamation-circle", "info" => "tabler:info-circle", "warning" => "tabler:alert-triangle"];
            // line 10
            yield "
    <div class=\"container-xl\" ";
            // line 11
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("sylius-flashes-container");
            yield ">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(["success", "error", "info", "warning"]);
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 13
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 13, $this->source); })()), "flashbag", [], "any", false, false, false, 13), "get", [$context["type"]], "method", false, false, false, 13));
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 14
                    yield "                <div
                    class=\"mt-3 sylius alert alert-";
                    // line 15
                    yield ((($context["type"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true)));
                    yield " alert-dismissible\"
                    role=\"alert\"
                    ";
                    // line 17
                    yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("sylius-flash-message");
                    yield "
                    ";
                    // line 18
                    yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("sylius-flash-message-type", $context["type"]);
                    yield "
                >
                    <div class=\"alert-icon\">
                        ";
                    // line 21
                    yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 21, $this->source); })()), $context["type"], [], "array", false, false, false, 21));
                    yield "
                    </div>
                    <div>
                        <h4 class=\"alert-heading\">
                            ";
                    // line 25
                    $context["header"] = ("sylius.ui." . $context["type"]);
                    // line 26
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 26, $this->source); })())), "html", null, true);
                    yield "
                        </h4>
                        <div class=\"alert-description\">
                            ";
                    // line 29
                    if (is_iterable($context["flash"])) {
                        // line 30
                        yield "                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["flash"], "message", [], "any", false, false, false, 30), CoreExtension::getAttribute($this->env, $this->source, $context["flash"], "parameters", [], "any", false, false, false, 30), "flashes"), "html", null, true);
                        yield "
                            ";
                    } else {
                        // line 32
                        yield "                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["flash"], [], "flashes"), "html", null, true);
                        yield "
                            ";
                    }
                    // line 34
                    yield "                        </div>
                    </div>
                    <a class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"close\">
                        ";
                    // line 37
                    yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:x");
                    yield "
                    </a>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flash'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
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
        return "@SyliusAdmin/shared/crud/common/content/flashes.html.twig";
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
        return array (  143 => 42,  137 => 41,  127 => 37,  122 => 34,  116 => 32,  110 => 30,  108 => 29,  101 => 26,  99 => 25,  92 => 21,  86 => 18,  82 => 17,  77 => 15,  74 => 14,  69 => 13,  65 => 12,  61 => 11,  58 => 10,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set session = _context.app.session|default(null) %}

{% if session is not null and session.started %}
    {% set icons = {
        'success': 'tabler:circle-check',
        'error': 'tabler:exclamation-circle',
        'info': 'tabler:info-circle',
        'warning': 'tabler:alert-triangle',
    } %}

    <div class=\"container-xl\" {{ sylius_test_html_attribute('sylius-flashes-container') }}>
        {% for type in ['success', 'error', 'info', 'warning'] %}
            {% for flash in session.flashbag.get(type) %}
                <div
                    class=\"mt-3 sylius alert alert-{{ type == 'error' ? 'danger' : type }} alert-dismissible\"
                    role=\"alert\"
                    {{ sylius_test_html_attribute('sylius-flash-message') }}
                    {{ sylius_test_html_attribute('sylius-flash-message-type', type) }}
                >
                    <div class=\"alert-icon\">
                        {{ ux_icon(icons[type]) }}
                    </div>
                    <div>
                        <h4 class=\"alert-heading\">
                            {% set header = 'sylius.ui.' ~ type %}
                            {{ header|trans }}
                        </h4>
                        <div class=\"alert-description\">
                            {% if flash is iterable %}
                                {{ flash.message|trans(flash.parameters, 'flashes') }}
                            {% else %}
                                {{ flash|trans({}, 'flashes') }}
                            {% endif %}
                        </div>
                    </div>
                    <a class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"close\">
                        {{ ux_icon('tabler:x') }}
                    </a>
                </div>
            {% endfor %}
        {% endfor %}
    </div>
{% endif %}
", "@SyliusAdmin/shared/crud/common/content/flashes.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/crud/common/content/flashes.html.twig");
    }
}
