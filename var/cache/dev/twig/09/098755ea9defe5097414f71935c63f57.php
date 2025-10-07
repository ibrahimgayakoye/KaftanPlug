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

/* @SyliusShop/shared/flashes.html.twig */
class __TwigTemplate_5f2bc6922e8c26457f4dc23979b72b1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/flashes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/flashes.html.twig"));

        // line 1
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", [], "any", false, false, false, 1)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", [], "any", false, false, false, 1), "started", [], "any", false, false, false, 1))) {
            // line 2
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(["success", "error", "info", "warning"]);
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 3
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "session", [], "any", false, false, false, 3), "flashbag", [], "any", false, false, false, 3), "get", [$context["type"]], "method", false, false, false, 3));
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 4
                    yield "            ";
                    $context["header"] = ("sylius.ui." . $context["type"]);
                    // line 5
                    yield "            ";
                    if (($context["type"] == "error")) {
                        // line 6
                        yield "                ";
                        $context["type"] = "danger";
                        // line 7
                        yield "            ";
                    }
                    // line 8
                    yield "
            <div class=\"alert alert-";
                    // line 9
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                    yield " my-2\" role=\"alert\" data-test-sylius-flash-message>
                <div class=\"d-flex justify-content-between\">
                    <div class=\"fw-bold\">";
                    // line 11
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 11, $this->source); })())), "html", null, true);
                    yield "</div>
                    <span class=\"close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">
                        ";
                    // line 13
                    yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:x");
                    yield "
                    </span>
                </div>
                <div ";
                    // line 16
                    yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("flash-messages");
                    yield ">
                    ";
                    // line 17
                    if (is_iterable($context["flash"])) {
                        // line 18
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["flash"], "message", [], "any", false, false, false, 18), CoreExtension::getAttribute($this->env, $this->source, $context["flash"], "parameters", [], "any", false, false, false, 18), "flashes"), "html", null, true);
                        yield "
                    ";
                    } else {
                        // line 20
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["flash"], [], "flashes"), "html", null, true);
                        yield "
                    ";
                    }
                    // line 22
                    yield "                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flash'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "@SyliusShop/shared/flashes.html.twig";
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
        return array (  117 => 25,  109 => 22,  103 => 20,  97 => 18,  95 => 17,  91 => 16,  85 => 13,  80 => 11,  75 => 9,  72 => 8,  69 => 7,  66 => 6,  63 => 5,  60 => 4,  55 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if app.session is not null and app.session.started %}
    {% for type in ['success', 'error', 'info', 'warning'] %}
        {% for flash in app.session.flashbag.get(type) %}
            {% set header = 'sylius.ui.'~type %}
            {% if type == 'error' %}
                {% set type = 'danger' %}
            {% endif %}

            <div class=\"alert alert-{{ type }} my-2\" role=\"alert\" data-test-sylius-flash-message>
                <div class=\"d-flex justify-content-between\">
                    <div class=\"fw-bold\">{{ header|trans }}</div>
                    <span class=\"close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">
                        {{ ux_icon('tabler:x') }}
                    </span>
                </div>
                <div {{ sylius_test_html_attribute('flash-messages') }}>
                    {% if flash is iterable %}
                        {{ flash.message|trans(flash.parameters, 'flashes') }}
                    {% else %}
                        {{ flash|trans({}, 'flashes') }}
                    {% endif %}
                </div>
            </div>
        {% endfor %}
    {% endfor %}
{% endif %}
", "@SyliusShop/shared/flashes.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/flashes.html.twig");
    }
}
