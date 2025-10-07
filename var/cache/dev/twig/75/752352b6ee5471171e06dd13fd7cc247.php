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

/* @SyliusMolliePlugin/admin/payment_link/create/content/header/title_block/actions/cancel.html.twig */
class __TwigTemplate_fceb42db6725c7526c4f4b9d1ea23e4f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_link/create/content/header/title_block/actions/cancel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_link/create/content/header/title_block/actions/cancel.html.twig"));

        // line 1
        $macros["button"] = $this->macros["button"] = $this->load("@SyliusAdmin/shared/helper/button.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["order"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 3), "order", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "order", [], "any", false, false, false, 3), null)) : (null));
        // line 4
        yield "
";
        // line 5
        $context["index_url"] = $this->extensions['Sylius\Bundle\UiBundle\Twig\RedirectPathExtension']->generateRedirectPath((((($tmp = (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)])) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 5), "headers", [], "any", false, true, false, 5), "get", ["referer"], "method", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "headers", [], "any", false, false, false, 5), "get", ["referer"], "method", false, false, false, 5), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_index"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_index"))))));
        // line 6
        yield "
";
        // line 7
        yield $macros["button"]->getTemplateForMacro("macro_cancel", $context, 7, $this->getSourceContext())->macro_cancel(...[Twig\Extension\CoreExtension::merge($this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("cancel-changes-button"), ["text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cancel"), "url" => (isset($context["index_url"]) || array_key_exists("index_url", $context) ? $context["index_url"] : (function () { throw new RuntimeError('Variable "index_url" does not exist.', 7, $this->source); })()), "class" => "btn"])]);
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
        return "@SyliusMolliePlugin/admin/payment_link/create/content/header/title_block/actions/cancel.html.twig";
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
        return array (  63 => 7,  60 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/shared/helper/button.html.twig' as button %}

{% set order = hookable_metadata.context.order|default(null) %}

{% set index_url = sylius_generate_redirect_path(order ? path('sylius_admin_order_show', {'id': order.id}) : app.request.headers.get('referer')|default(path('sylius_admin_order_index'))) %}

{{ button.cancel(sylius_test_form_attribute('cancel-changes-button')|merge({ text: 'sylius.ui.cancel'|trans, url: index_url, class: 'btn' })) }}
", "@SyliusMolliePlugin/admin/payment_link/create/content/header/title_block/actions/cancel.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/payment_link/create/content/header/title_block/actions/cancel.html.twig");
    }
}
