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

/* @SyliusAdmin/shipment/component/ship.html.twig */
class __TwigTemplate_e6acff6a1f62d48538651ad01a07a047 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shipment/component/ship.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shipment/component/ship.html.twig"));

        // line 2
        yield "
";
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), ["@SyliusAdmin/shared/form_theme.html.twig"], true);
        // line 4
        yield "
";
        // line 5
        $context["path"] = ((array_key_exists("path", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 5, $this->source); })()), "sylius_admin_shipment_ship")) : ("sylius_admin_shipment_ship"));
        // line 6
        $context["path_parameters"] = ((array_key_exists("path_parameters", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["path_parameters"]) || array_key_exists("path_parameters", $context) ? $context["path_parameters"] : (function () { throw new RuntimeError('Variable "path_parameters" does not exist.', 6, $this->source); })()), ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)])) : (["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]));
        // line 7
        yield "
";
        // line 8
        if ((($tmp = $this->env->getFunction('sylius_sm_can')->getCallable()((isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 8, $this->source); })()), "sylius_shipment", "ship")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "    <div ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 9, $this->source); })()), "html", null, true);
            yield ">
        ";
            // line 10
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 10, $this->source); })()), (isset($context["path_parameters"]) || array_key_exists("path_parameters", $context) ? $context["path_parameters"] : (function () { throw new RuntimeError('Variable "path_parameters" does not exist.', 10, $this->source); })())), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
            yield "
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <div class=\"input-group flex-nowrap\">
            ";
            // line 13
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "tracking", [], "any", false, false, false, 13), 'widget', $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("shipment-tracking"), ["attr" => ["placeholder" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tracking_code") . "..."), "style" => "min-width: 130px;"]]));
            yield "
            <button type=\"submit\" class=\"btn\" ";
            // line 14
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipment-ship-button");
            yield ">
                ";
            // line 15
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:truck");
            yield "
                ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.ship"), "html", null, true);
            yield "
            </button>
        </div>
        ";
            // line 19
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "_token", [], "any", false, false, false, 19), 'row');
            yield "
        ";
            // line 20
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_end', ["render_rest" => false]);
            yield "
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
        return "@SyliusAdmin/shipment/component/ship.html.twig";
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
        return array (  98 => 20,  94 => 19,  88 => 16,  84 => 15,  80 => 14,  76 => 13,  70 => 10,  65 => 9,  63 => 8,  60 => 7,  58 => 6,  56 => 5,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Rendered with \\Sylius\\Bundle\\AdminBundle\\Twig\\Component\\Shipment\\ShipFormComponent #}

{% form_theme form '@SyliusAdmin/shared/form_theme.html.twig' %}

{% set path = path|default('sylius_admin_shipment_ship') %}
{% set path_parameters = path_parameters|default({id: resource.id}) %}

{% if sylius_sm_can(resource, 'sylius_shipment', 'ship') %}
    <div {{ attributes }}>
        {{ form_start(form, {'action': path(path, path_parameters), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <div class=\"input-group flex-nowrap\">
            {{ form_widget(form.tracking, sylius_test_form_attribute('shipment-tracking')|sylius_merge_recursive({'attr': {'placeholder': 'sylius.ui.tracking_code'|trans ~ '...', 'style': 'min-width: 130px;'}})) }}
            <button type=\"submit\" class=\"btn\" {{ sylius_test_html_attribute('shipment-ship-button') }}>
                {{ ux_icon('tabler:truck') }}
                {{ 'sylius.ui.ship'|trans }}
            </button>
        </div>
        {{ form_row(form._token) }}
        {{ form_end(form, {'render_rest': false}) }}
    </div>
{% endif %}
", "@SyliusAdmin/shipment/component/ship.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shipment/component/ship.html.twig");
    }
}
