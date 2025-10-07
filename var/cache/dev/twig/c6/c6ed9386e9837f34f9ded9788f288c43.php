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

/* @SyliusAdmin/shipping_method/form/configuration/channels_configuration.html.twig */
class __TwigTemplate_762c1a4823ce6648eb4b0bb951192c47 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shipping_method/form/configuration/channels_configuration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shipping_method/form/configuration/channels_configuration.html.twig"));

        // line 1
        $context["form"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "form", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "calculator", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    <div class=\"col-12\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("calculator-configuration");
            yield ">
        ";
            // line 5
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "configuration", [], "any", true, true, false, 5)) {
                // line 6
                yield "            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "configuration", [], "any", false, false, false, 6), 'row');
                yield "
        ";
            } else {
                // line 8
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "vars", [], "any", false, false, false, 8), "prototypes", [], "any", false, false, false, 8));
                foreach ($context['_seq'] as $context["name"] => $context["calculator_configuration_prototype"]) {
                    // line 9
                    yield "                ";
                    $context["chosen_calculator"] = ("calculators_" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "calculator", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "value", [], "any", false, false, false, 9));
                    // line 10
                    yield "                ";
                    if (((isset($context["chosen_calculator"]) || array_key_exists("chosen_calculator", $context) ? $context["chosen_calculator"] : (function () { throw new RuntimeError('Variable "chosen_calculator" does not exist.', 10, $this->source); })()) == $context["name"])) {
                        // line 11
                        yield "                    ";
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["calculator_configuration_prototype"], 'row');
                        yield "
                ";
                    }
                    // line 13
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['name'], $context['calculator_configuration_prototype'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                yield "        ";
            }
            // line 15
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
        return "@SyliusAdmin/shipping_method/form/configuration/channels_configuration.html.twig";
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
        return array (  94 => 15,  91 => 14,  85 => 13,  79 => 11,  76 => 10,  73 => 9,  68 => 8,  62 => 6,  60 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set form = hookable_metadata.context.form %}

{% if form.calculator.vars.value is not empty %}
    <div class=\"col-12\" {{ sylius_test_html_attribute('calculator-configuration') }}>
        {% if form.configuration is defined %}
            {{ form_row(form.configuration) }}
        {% else %}
            {% for name, calculator_configuration_prototype in form.vars.prototypes %}
                {% set chosen_calculator = 'calculators_' ~ form.calculator.vars.value %}
                {% if chosen_calculator == name %}
                    {{ form_row(calculator_configuration_prototype) }}
                {% endif %}
            {% endfor %}
        {% endif %}
    </div>
{% endif %}
", "@SyliusAdmin/shipping_method/form/configuration/channels_configuration.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shipping_method/form/configuration/channels_configuration.html.twig");
    }
}
