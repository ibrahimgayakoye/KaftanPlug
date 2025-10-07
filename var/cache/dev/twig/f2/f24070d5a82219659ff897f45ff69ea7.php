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

/* @SyliusMolliePlugin/admin/payment_method/form/form_theme.html.twig */
class __TwigTemplate_d1af0e89c6f3701397d9cb2a543368d5 extends Template
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
            '_sylius_admin_payment_method_gatewayConfig_config_api_key_test_help' => [$this, 'block__sylius_admin_payment_method_gatewayConfig_config_api_key_test_help'],
            '_sylius_admin_payment_method_gatewayConfig_config_api_key_live_help' => [$this, 'block__sylius_admin_payment_method_gatewayConfig_config_api_key_live_help'],
            '_sylius_admin_payment_method_gatewayConfig_config_components_help' => [$this, 'block__sylius_admin_payment_method_gatewayConfig_config_components_help'],
            '_sylius_admin_payment_method_gatewayConfig_config_single_click_enabled_help' => [$this, 'block__sylius_admin_payment_method_gatewayConfig_config_single_click_enabled_help'],
            '_sylius_admin_payment_method_gatewayConfig_mollieGatewayConfig_entry_customizeMethodImage_file_widget' => [$this, 'block__sylius_admin_payment_method_gatewayConfig_mollieGatewayConfig_entry_customizeMethodImage_file_widget'],
            '_sylius_admin_payment_method_gatewayConfig_config_api_key_test_widget' => [$this, 'block__sylius_admin_payment_method_gatewayConfig_config_api_key_test_widget'],
            '_sylius_admin_payment_method_gatewayConfig_config_api_key_live_widget' => [$this, 'block__sylius_admin_payment_method_gatewayConfig_config_api_key_live_widget'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@SyliusAdmin/shared/form_theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/form/form_theme.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/form/form_theme.html.twig"));

        $this->parent = $this->load("@SyliusAdmin/shared/form_theme.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__sylius_admin_payment_method_gatewayConfig_config_api_key_test_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_admin_payment_method_gatewayConfig_config_api_key_test_help"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_admin_payment_method_gatewayConfig_config_api_key_test_help"));

        // line 4
        yield "    <div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "\" class=\"form-text mb-0 help-text\">
        ";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.read_more_test_api_key", ["%link%" => (("<a target=\"_blank\" href=\"https://www.mollie.com/dashboard/developers/api-keys\">" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.mollie_profile")) . "</a>")]);
        // line 7
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__sylius_admin_payment_method_gatewayConfig_config_api_key_live_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_admin_payment_method_gatewayConfig_config_api_key_live_help"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_admin_payment_method_gatewayConfig_config_api_key_live_help"));

        // line 12
        yield "    <div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "\" class=\"form-text mb-0 help-text\">
        ";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.read_more_live_api_key", ["%link%" => (("<a target=\"_blank\" href=\"https://www.mollie.com/dashboard/developers/api-keys\">" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.mollie_profile")) . "</a>")]);
        // line 15
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__sylius_admin_payment_method_gatewayConfig_config_components_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_admin_payment_method_gatewayConfig_config_components_help"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_admin_payment_method_gatewayConfig_config_components_help"));

        // line 20
        yield "    <div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "\" class=\"form-text mb-0 help-text\">
        ";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.read_more_enable_components", ["%link%" => (("<a target=\"_blank\" href=\"https://www.mollie.com/en/news/post/better-checkout-flows-with-mollie-components\">" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.mollie_components")) . "</a>")]);
        // line 23
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__sylius_admin_payment_method_gatewayConfig_config_single_click_enabled_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_admin_payment_method_gatewayConfig_config_single_click_enabled_help"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_admin_payment_method_gatewayConfig_config_single_click_enabled_help"));

        // line 28
        yield "    <div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\" class=\"form-text mb-0 help-text\">
        ";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.read_more_single_click_enabled", ["%link%" => (("<a target=\"_blank\" href=\"https://help.mollie.com/hc/en-us/articles/115000671249-What-are-single-click-payments-and-how-does-it-work-\">" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.mollie_single_click")) . "</a>")]);
        // line 31
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__sylius_admin_payment_method_gatewayConfig_mollieGatewayConfig_entry_customizeMethodImage_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_admin_payment_method_gatewayConfig_mollieGatewayConfig_entry_customizeMethodImage_file_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_admin_payment_method_gatewayConfig_mollieGatewayConfig_entry_customizeMethodImage_file_widget"));

        // line 36
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "parent", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "data", [], "any", false, false, false, 36) != null) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "parent", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "data", [], "any", false, false, false, 36), "path", [], "any", false, false, false, 36) != null))) {
            // line 37
            yield "    <div class=\"input-group\">
    ";
        }
        // line 39
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'widget');
        // line 41
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "parent", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "data", [], "any", false, false, false, 41) != null) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "parent", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "data", [], "any", false, false, false, 41), "path", [], "any", false, false, false, 41) != null))) {
            // line 42
            yield "        ";
            $context["payment_method"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "parent", [], "any", false, false, false, 42), "parent", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "data", [], "any", false, false, false, 42);
            // line 43
            yield "        <div class=\"input-group-append\">
            <div
                class=\"btn btn-danger form_button--delete-img\"
                data-url=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_mollie_admin_mollie_method_delete_logo", ["methodName" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment_method"]) || array_key_exists("payment_method", $context) ? $context["payment_method"] : (function () { throw new RuntimeError('Variable "payment_method" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\"
            >
                ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true);
            yield "
            </div>
        </div>
    </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__sylius_admin_payment_method_gatewayConfig_config_api_key_test_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_admin_payment_method_gatewayConfig_config_api_key_test_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_admin_payment_method_gatewayConfig_config_api_key_test_widget"));

        // line 56
        yield "    <div class=\"input-group\">
        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'widget');
        yield "
        <div class=\"input-group-append\">
            <button
                id=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 60, $this->source); })()), "html", null, true);
        yield "\"
                class=\"btn btn-success\"
                type=\"button\"
                data-input=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 63, $this->source); })()), "html", null, true);
        yield "\"
            >
                ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.show_hide"), "html", null, true);
        yield "
            </button>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__sylius_admin_payment_method_gatewayConfig_config_api_key_live_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_admin_payment_method_gatewayConfig_config_api_key_live_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_admin_payment_method_gatewayConfig_config_api_key_live_widget"));

        // line 72
        yield "    <div class=\"input-group\">
        ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'widget');
        yield "
        <div class=\"input-group-append\">
            <button
                id=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 76, $this->source); })()), "html", null, true);
        yield "\"
                class=\"btn btn-success\"
                type=\"button\"
                data-input=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 79, $this->source); })()), "html", null, true);
        yield "\"
            >
                ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.show_hide"), "html", null, true);
        yield "
            </button>
        </div>
    </div>
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
        return "@SyliusMolliePlugin/admin/payment_method/form/form_theme.html.twig";
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
        return array (  337 => 81,  332 => 79,  326 => 76,  320 => 73,  317 => 72,  304 => 71,  288 => 65,  283 => 63,  277 => 60,  271 => 57,  268 => 56,  255 => 55,  238 => 48,  233 => 46,  228 => 43,  225 => 42,  223 => 41,  220 => 39,  216 => 37,  214 => 36,  201 => 35,  188 => 31,  186 => 29,  181 => 28,  168 => 27,  155 => 23,  153 => 21,  148 => 20,  135 => 19,  122 => 15,  120 => 13,  115 => 12,  102 => 11,  89 => 7,  87 => 5,  82 => 4,  69 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@SyliusAdmin/shared/form_theme.html.twig' %}

{% block _sylius_admin_payment_method_gatewayConfig_config_api_key_test_help %}
    <div id=\"{{ id }}\" class=\"form-text mb-0 help-text\">
        {{ 'sylius_mollie.ui.read_more_test_api_key'|trans({
            '%link%': '<a target=\"_blank\" href=\"https://www.mollie.com/dashboard/developers/api-keys\">' ~ 'sylius_mollie.ui.mollie_profile'|trans ~ '</a>'
        })|raw }}
    </div>
{% endblock %}

{% block _sylius_admin_payment_method_gatewayConfig_config_api_key_live_help %}
    <div id=\"{{ id }}\" class=\"form-text mb-0 help-text\">
        {{ 'sylius_mollie.ui.read_more_live_api_key'|trans({
            '%link%': '<a target=\"_blank\" href=\"https://www.mollie.com/dashboard/developers/api-keys\">' ~ 'sylius_mollie.ui.mollie_profile'|trans ~ '</a>'
        })|raw }}
    </div>
{% endblock %}

{% block _sylius_admin_payment_method_gatewayConfig_config_components_help %}
    <div id=\"{{ id }}\" class=\"form-text mb-0 help-text\">
        {{ 'sylius_mollie.ui.read_more_enable_components'|trans({
            '%link%': '<a target=\"_blank\" href=\"https://www.mollie.com/en/news/post/better-checkout-flows-with-mollie-components\">' ~ 'sylius_mollie.ui.mollie_components'|trans ~ '</a>'
        })|raw }}
    </div>
{% endblock %}

{% block _sylius_admin_payment_method_gatewayConfig_config_single_click_enabled_help %}
    <div id=\"{{ id }}\" class=\"form-text mb-0 help-text\">
        {{ 'sylius_mollie.ui.read_more_single_click_enabled'|trans({
            '%link%': '<a target=\"_blank\" href=\"https://help.mollie.com/hc/en-us/articles/115000671249-What-are-single-click-payments-and-how-does-it-work-\">' ~ 'sylius_mollie.ui.mollie_single_click'|trans ~ '</a>'
        })|raw }}
    </div>
{% endblock %}

{% block _sylius_admin_payment_method_gatewayConfig_mollieGatewayConfig_entry_customizeMethodImage_file_widget %}
    {%- if form.parent.vars.data != null and form.parent.vars.data.path != null %}
    <div class=\"input-group\">
    {% endif %}
    {{ form_widget(form) }}

    {%- if form.parent.vars.data != null and form.parent.vars.data.path != null %}
        {% set payment_method = form.parent.parent.vars.data %}
        <div class=\"input-group-append\">
            <div
                class=\"btn btn-danger form_button--delete-img\"
                data-url=\"{{ path('sylius_mollie_admin_mollie_method_delete_logo', {'methodName': payment_method.name}) }}\"
            >
                {{ 'sylius.ui.delete'|trans }}
            </div>
        </div>
    </div>
    {% endif %}
{% endblock %}

{% block _sylius_admin_payment_method_gatewayConfig_config_api_key_test_widget %}
    <div class=\"input-group\">
        {{ form_widget(form) }}
        <div class=\"input-group-append\">
            <button
                id=\"{{ name }}\"
                class=\"btn btn-success\"
                type=\"button\"
                data-input=\"{{ id }}\"
            >
                {{ 'sylius_mollie.ui.show_hide'|trans }}
            </button>
        </div>
    </div>
{% endblock %}

{% block _sylius_admin_payment_method_gatewayConfig_config_api_key_live_widget %}
    <div class=\"input-group\">
        {{ form_widget(form) }}
        <div class=\"input-group-append\">
            <button
                id=\"{{ name }}\"
                class=\"btn btn-success\"
                type=\"button\"
                data-input=\"{{ id }}\"
            >
                {{ 'sylius_mollie.ui.show_hide'|trans }}
            </button>
        </div>
    </div>
{% endblock %}
", "@SyliusMolliePlugin/admin/payment_method/form/form_theme.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/payment_method/form/form_theme.html.twig");
    }
}
