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

/* @SyliusAdmin/shared/crud/common/content/header/title_block/actions/cancel.html.twig */
class __TwigTemplate_15be5d83f3a29a4cff4726a3ba09778c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/common/content/header/title_block/actions/cancel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/common/content/header/title_block/actions/cancel.html.twig"));

        // line 1
        $macros["button"] = $this->macros["button"] = $this->load("@SyliusAdmin/shared/helper/button.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["configuration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "configuration", [], "any", false, false, false, 3);
        // line 4
        yield "
";
        // line 5
        $context["fallback_url"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 5), "headers", [], "any", false, true, false, 5), "get", ["referer"], "method", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "headers", [], "any", false, false, false, 5), "get", ["referer"], "method", false, false, false, 5), $this->extensions['Sylius\Bundle\UiBundle\Twig\RedirectPathExtension']->generateRedirectPath($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["configuration"] ?? null), "vars", [], "any", false, true, false, 6), "index", [], "any", false, true, false, 6), "route", [], "any", false, true, false, 6), "name", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "index", [], "any", false, false, false, 6), "route", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 6, $this->source); })()), "getRouteName", ["index"], "method", false, false, false, 6))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 6, $this->source); })()), "getRouteName", ["index"], "method", false, false, false, 6))), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["configuration"] ?? null), "vars", [], "any", false, true, false, 7), "index", [], "any", false, true, false, 7), "route", [], "any", false, true, false, 7), "parameters", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "index", [], "any", false, false, false, 7), "route", [], "any", false, false, false, 7), "parameters", [], "any", false, false, false, 7), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 7), "route", [], "any", false, true, false, 7), "parameters", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "route", [], "any", false, false, false, 7), "parameters", [], "any", false, false, false, 7), [])) : ([])))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 7), "route", [], "any", false, true, false, 7), "parameters", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "route", [], "any", false, false, false, 7), "parameters", [], "any", false, false, false, 7), [])) : ([])))))))) : ($this->extensions['Sylius\Bundle\UiBundle\Twig\RedirectPathExtension']->generateRedirectPath($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["configuration"] ?? null), "vars", [], "any", false, true, false, 6), "index", [], "any", false, true, false, 6), "route", [], "any", false, true, false, 6), "name", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "index", [], "any", false, false, false, 6), "route", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 6, $this->source); })()), "getRouteName", ["index"], "method", false, false, false, 6))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 6, $this->source); })()), "getRouteName", ["index"], "method", false, false, false, 6))), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["configuration"] ?? null), "vars", [], "any", false, true, false, 7), "index", [], "any", false, true, false, 7), "route", [], "any", false, true, false, 7), "parameters", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "index", [], "any", false, false, false, 7), "route", [], "any", false, false, false, 7), "parameters", [], "any", false, false, false, 7), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 7), "route", [], "any", false, true, false, 7), "parameters", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "route", [], "any", false, false, false, 7), "parameters", [], "any", false, false, false, 7), [])) : ([])))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 7), "route", [], "any", false, true, false, 7), "parameters", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "route", [], "any", false, false, false, 7), "parameters", [], "any", false, false, false, 7), [])) : ([]))))))));
        // line 9
        yield "
";
        // line 10
        yield $macros["button"]->getTemplateForMacro("macro_cancel", $context, 10, $this->getSourceContext())->macro_cancel(...[Twig\Extension\CoreExtension::merge($this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("cancel-changes-button"), ["text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.back"), "class" => "btn", "fallback_url" =>         // line 13
(isset($context["fallback_url"]) || array_key_exists("fallback_url", $context) ? $context["fallback_url"] : (function () { throw new RuntimeError('Variable "fallback_url" does not exist.', 13, $this->source); })())])]);
        // line 14
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
        return "@SyliusAdmin/shared/crud/common/content/header/title_block/actions/cancel.html.twig";
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
        return array (  70 => 14,  68 => 13,  67 => 10,  64 => 9,  62 => 7,  61 => 6,  60 => 7,  59 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/shared/helper/button.html.twig' as button %}

{% set configuration = hookable_metadata.context.configuration %}

{% set fallback_url = app.request.headers.get('referer')|default(sylius_generate_redirect_path(path(
    configuration.vars.index.route.name|default(configuration.getRouteName('index')),
    configuration.vars.index.route.parameters|default(configuration.vars.route.parameters|default({}))
))) %}

{{ button.cancel(sylius_test_form_attribute('cancel-changes-button')|merge({
    text: 'sylius.ui.back'|trans,
    class: 'btn',
    fallback_url: fallback_url
})) }}
", "@SyliusAdmin/shared/crud/common/content/header/title_block/actions/cancel.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/crud/common/content/header/title_block/actions/cancel.html.twig");
    }
}
