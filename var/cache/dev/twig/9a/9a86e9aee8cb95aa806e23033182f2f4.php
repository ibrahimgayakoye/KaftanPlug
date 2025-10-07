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

/* @SyliusAdmin/payment_request/show/content/header/breadcrumbs.html.twig */
class __TwigTemplate_1b5e5f7a31eef0385d4252fa66dd93b7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/payment_request/show/content/header/breadcrumbs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/payment_request/show/content/header/breadcrumbs.html.twig"));

        // line 1
        $macros["_v0"] = $this->macros["_v0"] = $this->load("@SyliusAdmin/shared/helper/breadcrumbs.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["payment_request"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "resource", [], "any", false, false, false, 3);
        // line 4
        $context["payment_id"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment_request"]) || array_key_exists("payment_request", $context) ? $context["payment_request"] : (function () { throw new RuntimeError('Variable "payment_request" does not exist.', 4, $this->source); })()), "payment", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4);
        // line 5
        yield "
";
        // line 6
        yield $macros["_v0"]->getTemplateForMacro("macro_breadcrumbs", $context, 6, $this->getSourceContext())->macro_breadcrumbs(...[[["name" => "sylius.ui.dashboard", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard"), "active" => false], ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.payments"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_payment_index"), "active" => false], ["name" =>         // line 9
(isset($context["payment_id"]) || array_key_exists("payment_id", $context) ? $context["payment_id"] : (function () { throw new RuntimeError('Variable "payment_id" does not exist.', 9, $this->source); })()), "active" => false], ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.payment_requests"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_payment_request_index", ["paymentId" =>         // line 10
(isset($context["payment_id"]) || array_key_exists("payment_id", $context) ? $context["payment_id"] : (function () { throw new RuntimeError('Variable "payment_id" does not exist.', 10, $this->source); })())]), "active" => false], ["name" => CoreExtension::getAttribute($this->env, $this->source,         // line 11
(isset($context["payment_request"]) || array_key_exists("payment_request", $context) ? $context["payment_request"] : (function () { throw new RuntimeError('Variable "payment_request" does not exist.', 11, $this->source); })()), "hash", [], "any", false, false, false, 11), "active" => true]]]);
        // line 12
        yield "
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
        return "@SyliusAdmin/payment_request/show/content/header/breadcrumbs.html.twig";
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
        return array (  65 => 12,  63 => 11,  62 => 10,  61 => 9,  60 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% from '@SyliusAdmin/shared/helper/breadcrumbs.html.twig' import breadcrumbs %}

{% set payment_request = hookable_metadata.context.resource %}
{% set payment_id = payment_request.payment.id %}

{{ breadcrumbs([
    { name: 'sylius.ui.dashboard', url: path('sylius_admin_dashboard'), active: false },
    { name: 'sylius.ui.payments'|trans, url: path('sylius_admin_payment_index'), active: false },
    { name: payment_id, active: false },
    { name: 'sylius.ui.payment_requests'|trans, url: path('sylius_admin_payment_request_index', {'paymentId': payment_id}), active: false },
    { name: payment_request.hash, active: true },
]) }}
", "@SyliusAdmin/payment_request/show/content/header/breadcrumbs.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/payment_request/show/content/header/breadcrumbs.html.twig");
    }
}
