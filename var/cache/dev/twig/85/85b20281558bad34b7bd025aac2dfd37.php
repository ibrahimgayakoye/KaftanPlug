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

/* @SyliusAdmin/inventory/grid/field/inventory.html.twig */
class __TwigTemplate_b047e1461bae20c8bace3c8337c4c5b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/inventory/grid/field/inventory.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/inventory/grid/field/inventory.html.twig"));

        // line 1
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "isTracked", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    <div class=\"badge ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()), "onHand", [], "any", false, false, false, 2) > 0)) ? ("text-bg-success") : ("text-bg-danger"));
            yield "  d-flex w-fit-content\">
        ";
            // line 3
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:cube", ["class" => "icon mr-1"]);
            yield "
        <div class=\"text-start\">
            <span>";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "onHand", [], "any", false, false, false, 5), "html", null, true);
            yield "</span> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.available_on_hand"), "html", null, true);
            yield "
            ";
            // line 6
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "onHold", [], "any", false, false, false, 6) > 0)) {
                // line 7
                yield "                <br>
                <span class=\"onHold\" data-product-variant-id=\"";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "onHold", [], "any", false, false, false, 8), "html", null, true);
                yield "</span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.reserved"), "html", null, true);
                yield "
            ";
            }
            // line 10
            yield "        </div>
    </div>
";
        } else {
            // line 13
            yield "    <span class=\"ui red label\">
        <i class=\"remove icon\"></i>
        ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.not_tracked"), "html", null, true);
            yield "
    </span>
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
        return "@SyliusAdmin/inventory/grid/field/inventory.html.twig";
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
        return array (  89 => 15,  85 => 13,  80 => 10,  71 => 8,  68 => 7,  66 => 6,  60 => 5,  55 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if data.isTracked %}
    <div class=\"badge {{ data.onHand > 0 ? 'text-bg-success' : 'text-bg-danger' }}  d-flex w-fit-content\">
        {{ ux_icon('tabler:cube', {'class': 'icon mr-1'}) }}
        <div class=\"text-start\">
            <span>{{ data.onHand }}</span> {{ 'sylius.ui.available_on_hand'|trans }}
            {% if data.onHold > 0 %}
                <br>
                <span class=\"onHold\" data-product-variant-id=\"{{ data.id }}\">{{ data.onHold }}</span> {{ 'sylius.ui.reserved'|trans }}
            {% endif %}
        </div>
    </div>
{% else %}
    <span class=\"ui red label\">
        <i class=\"remove icon\"></i>
        {{ 'sylius.ui.not_tracked'|trans }}
    </span>
{% endif %}
", "@SyliusAdmin/inventory/grid/field/inventory.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/inventory/grid/field/inventory.html.twig");
    }
}
