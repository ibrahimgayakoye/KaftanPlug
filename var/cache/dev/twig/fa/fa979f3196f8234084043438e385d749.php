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

/* @SyliusPayPalPlugin/admin/payment_method/grid/confirmation_modal_create_paypal.html.twig */
class __TwigTemplate_a5ef16895f1660eb6f90c2f4f14e47a4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/admin/payment_method/grid/confirmation_modal_create_paypal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/admin/payment_method/grid/confirmation_modal_create_paypal.html.twig"));

        // line 1
        $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v0->preRender("sylius_admin:confirmation_modal", Twig\Extension\CoreExtension::toArray(["modal_id" => "confirmation-modal-create-pay-pal", "type" => "create-pay-pal"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v0->startEmbedComponent("sylius_admin:confirmation_modal", Twig\Extension\CoreExtension::toArray(["modal_id" => "confirmation-modal-create-pay-pal", "type" => "create-pay-pal"]), $context, "@SyliusPayPalPlugin/admin/payment_method/grid/confirmation_modal_create_paypal.html.twig", 3454616171);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 3454616171);
            $this->load("@SyliusPayPalPlugin/admin/payment_method/grid/confirmation_modal_create_paypal.html.twig", 1, "3454616171")->display($embeddedContext, $embeddedBlocks);
            $_v0->finishEmbedComponent();
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
        return "@SyliusPayPalPlugin/admin/payment_method/grid/confirmation_modal_create_paypal.html.twig";
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
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% component 'sylius_admin:confirmation_modal' with {modal_id: 'confirmation-modal-create-pay-pal', type: 'create-pay-pal'} %}
    {% block header %}
        <h1 class=\"modal-title py-5\">{{ 'sylius_paypal.share_data_consent_confirmation'|trans }}</h1>
    {% endblock %}
    {% block footer %}
        {% import '@SyliusAdmin/shared/helper/button.html.twig' as button %}
        {% set path = path('sylius_admin_payment_method_create', {'factory': constant('Sylius\\\\PayPalPlugin\\\\DependencyInjection\\\\SyliusPayPalExtension::PAYPAL_FACTORY_NAME')}) %}

        {{ button.default({ text: 'sylius.ui.no_label'|trans, attr: 'data-bs-dismiss=modal' }) }}
        <a class=\"btn btn-outline-success\" href=\"{{ path }}\">
            {{ 'sylius.ui.yes_label'|trans }}
        </a>
    {% endblock %}
{% endcomponent %}
", "@SyliusPayPalPlugin/admin/payment_method/grid/confirmation_modal_create_paypal.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/paypal-plugin/templates/admin/payment_method/grid/confirmation_modal_create_paypal.html.twig");
    }
}


/* @SyliusPayPalPlugin/admin/payment_method/grid/confirmation_modal_create_paypal.html.twig */
class __TwigTemplate_a5ef16895f1660eb6f90c2f4f14e47a4___3454616171 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'header' => [$this, 'block_header'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 1, $this->source); })()), 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/admin/payment_method/grid/confirmation_modal_create_paypal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/admin/payment_method/grid/confirmation_modal_create_paypal.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 3
        yield "        <h1 class=\"modal-title py-5\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_paypal.share_data_consent_confirmation"), "html", null, true);
        yield "</h1>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 6
        yield "        ";
        $macros["button"] = $this->load("@SyliusAdmin/shared/helper/button.html.twig", 6)->unwrap();
        // line 7
        yield "        ";
        $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_payment_method_create", ["factory" => Twig\Extension\CoreExtension::constant("Sylius\\PayPalPlugin\\DependencyInjection\\SyliusPayPalExtension::PAYPAL_FACTORY_NAME")]);
        // line 8
        yield "
        ";
        // line 9
        yield $macros["button"]->getTemplateForMacro("macro_default", $context, 9, $this->getSourceContext())->macro_default(...[["text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_label"), "attr" => "data-bs-dismiss=modal"]]);
        yield "
        <a class=\"btn btn-outline-success\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "\">
            ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.yes_label"), "html", null, true);
        yield "
        </a>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusPayPalPlugin/admin/payment_method/grid/confirmation_modal_create_paypal.html.twig";
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
        return array (  239 => 11,  235 => 10,  231 => 9,  228 => 8,  225 => 7,  222 => 6,  209 => 5,  195 => 3,  182 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% component 'sylius_admin:confirmation_modal' with {modal_id: 'confirmation-modal-create-pay-pal', type: 'create-pay-pal'} %}
    {% block header %}
        <h1 class=\"modal-title py-5\">{{ 'sylius_paypal.share_data_consent_confirmation'|trans }}</h1>
    {% endblock %}
    {% block footer %}
        {% import '@SyliusAdmin/shared/helper/button.html.twig' as button %}
        {% set path = path('sylius_admin_payment_method_create', {'factory': constant('Sylius\\\\PayPalPlugin\\\\DependencyInjection\\\\SyliusPayPalExtension::PAYPAL_FACTORY_NAME')}) %}

        {{ button.default({ text: 'sylius.ui.no_label'|trans, attr: 'data-bs-dismiss=modal' }) }}
        <a class=\"btn btn-outline-success\" href=\"{{ path }}\">
            {{ 'sylius.ui.yes_label'|trans }}
        </a>
    {% endblock %}
{% endcomponent %}
", "@SyliusPayPalPlugin/admin/payment_method/grid/confirmation_modal_create_paypal.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/paypal-plugin/templates/admin/payment_method/grid/confirmation_modal_create_paypal.html.twig");
    }
}
