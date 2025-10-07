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

/* @SyliusAdmin/promotion/grid/field/usage.html.twig */
class __TwigTemplate_6f30754d230a402a4e0693ffdaea04b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/promotion/grid/field/usage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/promotion/grid/field/usage.html.twig"));

        // line 1
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "usageLimit", [], "any", false, false, false, 1))) {
            // line 2
            yield "    <div class=\"d-flex align-items-center gap-2 justify-content-center\">
        <div class=\"text-blue\"><span ";
            // line 3
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("used");
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "used", [], "any", false, false, false, 3), "html", null, true);
            yield "</span> / &#8734;</div>
    </div>
";
        } else {
            // line 6
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "used", [], "any", false, false, false, 6) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "usageLimit", [], "any", false, false, false, 6))) {
                // line 7
                yield "        ";
                $context["color"] = "danger";
                // line 8
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "used", [], "any", false, false, false, 8) > (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "usageLimit", [], "any", false, false, false, 8) / 2))) {
                // line 9
                yield "        ";
                $context["color"] = "warning";
                // line 10
                yield "    ";
            } else {
                // line 11
                yield "        ";
                $context["color"] = "success";
                // line 12
                yield "    ";
            }
            // line 13
            yield "
    <div class=\"d-flex flex-column align-items-center gap-2\">
        <div class=\"progress usage-progress-bar\">
            <div class=\"progress-bar bg-";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 16, $this->source); })()), "html", null, true);
            yield "\" style=\"width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "usageLimit", [], "any", false, false, false, 16) > 0)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "used", [], "any", false, false, false, 16) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "usageLimit", [], "any", false, false, false, 16))) : (1)), [], "percent"), "html", null, true);
            yield "\" role=\"progressbar\"></div>
        </div>
        <div class=\"text-";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 18, $this->source); })()), "html", null, true);
            yield "\"><span ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("used");
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "used", [], "any", false, false, false, 18), "html", null, true);
            yield "</span> / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "usageLimit", [], "any", false, false, false, 18), "html", null, true);
            yield "</div>
    </div>
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
        return "@SyliusAdmin/promotion/grid/field/usage.html.twig";
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
        return array (  94 => 18,  87 => 16,  82 => 13,  79 => 12,  76 => 11,  73 => 10,  70 => 9,  67 => 8,  64 => 7,  61 => 6,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if data.usageLimit is empty %}
    <div class=\"d-flex align-items-center gap-2 justify-content-center\">
        <div class=\"text-blue\"><span {{ sylius_test_html_attribute('used') }}>{{ data.used }}</span> / &#8734;</div>
    </div>
{% else %}
    {% if data.used == data.usageLimit %}
        {% set color = 'danger' %}
    {% elseif data.used > data.usageLimit / 2 %}
        {% set color = 'warning' %}
    {% else %}
        {% set color = 'success' %}
    {% endif %}

    <div class=\"d-flex flex-column align-items-center gap-2\">
        <div class=\"progress usage-progress-bar\">
            <div class=\"progress-bar bg-{{ color }}\" style=\"width: {{ (data.usageLimit > 0 ? (data.used / data.usageLimit) : 1)|format_number(style='percent') }}\" role=\"progressbar\"></div>
        </div>
        <div class=\"text-{{ color }}\"><span {{ sylius_test_html_attribute('used') }}>{{ data.used }}</span> / {{ data.usageLimit }}</div>
    </div>
{% endif %}
", "@SyliusAdmin/promotion/grid/field/usage.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/promotion/grid/field/usage.html.twig");
    }
}
