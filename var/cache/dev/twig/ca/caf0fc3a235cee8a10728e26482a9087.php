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

/* @SyliusMolliePlugin/admin/payment_method/form/test_api_keys/test.html.twig */
class __TwigTemplate_d43e6f2393dc63bf67d8378d80750429 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/form/test_api_keys/test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/form/test_api_keys/test.html.twig"));

        // line 1
        yield "<div class=\"row\">
    ";
        // line 2
        yield from $this->load("@SyliusMolliePlugin/admin/payment_method/form/test_api_keys/status.html.twig", 2)->unwrap()->yield($context);
        // line 3
        yield "
    ";
        // line 4
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 4, $this->source); })()), "status", [], "any", false, false, false, 4) == Twig\Extension\CoreExtension::constant("Sylius\\MolliePlugin\\Creator\\ApiKeysTestCreatorInterface::ERROR_STATUS"))) {
            // line 5
            yield "        <span class=\"mt-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 5, $this->source); })()), "message", [], "any", false, false, false, 5), "html", null, true);
            yield "</span>
    ";
        }
        // line 7
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 7, $this->source); })()), "status", [], "any", false, false, false, 7) == Twig\Extension\CoreExtension::constant("Sylius\\MolliePlugin\\Creator\\ApiKeysTestCreatorInterface::OK_STATUS"))) {
            // line 8
            yield "        <span class=\"mt-2\">
            ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.available_methods"), "html", null, true);
            yield ":
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 10, $this->source); })()), "methods", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                // line 11
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["method"], "description", [], "any", false, false, false, 11), "html", null, true);
                yield ",
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['method'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            yield "        </span>
    ";
        }
        // line 15
        yield "</div>
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
        return "@SyliusMolliePlugin/admin/payment_method/form/test_api_keys/test.html.twig";
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
        return array (  91 => 15,  87 => 13,  78 => 11,  74 => 10,  70 => 9,  67 => 8,  64 => 7,  58 => 5,  56 => 4,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row\">
    {% include '@SyliusMolliePlugin/admin/payment_method/form/test_api_keys/status.html.twig' %}

    {% if test.status == constant('Sylius\\\\MolliePlugin\\\\Creator\\\\ApiKeysTestCreatorInterface::ERROR_STATUS') %}
        <span class=\"mt-2\">{{ test.message }}</span>
    {% endif %}
    {% if test.status == constant('Sylius\\\\MolliePlugin\\\\Creator\\\\ApiKeysTestCreatorInterface::OK_STATUS') %}
        <span class=\"mt-2\">
            {{ 'sylius_mollie.ui.available_methods'|trans }}:
            {% for method in test.methods %}
                {{ method.description }},
            {% endfor %}
        </span>
    {% endif %}
</div>
", "@SyliusMolliePlugin/admin/payment_method/form/test_api_keys/test.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/payment_method/form/test_api_keys/test.html.twig");
    }
}
