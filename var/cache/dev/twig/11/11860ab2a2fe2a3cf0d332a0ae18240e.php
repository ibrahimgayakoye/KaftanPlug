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

/* @SyliusMolliePlugin/admin/payment_link/create/content/header/breadcrumbs.html.twig */
class __TwigTemplate_6cfe9673715e3e33a23f9248bfcb0c5f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_link/create/content/header/breadcrumbs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_link/create/content/header/breadcrumbs.html.twig"));

        // line 1
        $macros["_v0"] = $this->macros["_v0"] = $this->load("@SyliusAdmin/shared/helper/breadcrumbs.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["order"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "order", [], "any", false, false, false, 3);
        // line 4
        yield "
";
        // line 5
        yield $macros["_v0"]->getTemplateForMacro("macro_breadcrumbs", $context, 5, $this->getSourceContext())->macro_breadcrumbs(...[[["name" => "sylius.ui.dashboard", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard"), "active" => false], ["name" => "sylius.ui.orders", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_index"), "active" => false], ["name" => CoreExtension::getAttribute($this->env, $this->source,         // line 8
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "active" => false], ["name" => "sylius_mollie.ui.payment_link_generate", "active" => true]]]);
        // line 10
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
        return "@SyliusMolliePlugin/admin/payment_link/create/content/header/breadcrumbs.html.twig";
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
        return array (  61 => 10,  59 => 8,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% from '@SyliusAdmin/shared/helper/breadcrumbs.html.twig' import breadcrumbs %}

{% set order = hookable_metadata.context.order %}

{{ breadcrumbs([
    { name: 'sylius.ui.dashboard', url: path('sylius_admin_dashboard'), active: false },
    { name: 'sylius.ui.orders', url: path('sylius_admin_order_index'), active: false },
    { name: order.id, url: path('sylius_admin_order_show', {'id': order.id}), active: false },
    { name: 'sylius_mollie.ui.payment_link_generate', active: true}
]) }}
", "@SyliusMolliePlugin/admin/payment_link/create/content/header/breadcrumbs.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/payment_link/create/content/header/breadcrumbs.html.twig");
    }
}
