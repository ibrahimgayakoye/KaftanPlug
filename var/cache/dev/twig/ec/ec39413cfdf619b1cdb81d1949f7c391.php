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

/* @SyliusMolliePlugin/admin/mollie_subscription/show/sections/general/state.html.twig */
class __TwigTemplate_cbda4bff4723fbb370abd66941ed8b3d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/mollie_subscription/show/sections/general/state.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/mollie_subscription/show/sections/general/state.html.twig"));

        // line 1
        $context["mollie_subscription"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "resource", [], "any", false, false, false, 1);
        // line 2
        $macros["state"] = $this->macros["state"] = $this->load("@SyliusMolliePlugin/admin/mollie_subscription/macro/state.html.twig", 2)->unwrap();
        // line 3
        yield "
<div class=\"row\">
    <div class=\"col-md-4 fw-bold\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.state"), "html", null, true);
        yield "</div>
    <div class=\"col-md-8\">
        ";
        // line 7
        yield $macros["state"]->getTemplateForMacro("macro_label", $context, 7, $this->getSourceContext())->macro_label(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["mollie_subscription"]) || array_key_exists("mollie_subscription", $context) ? $context["mollie_subscription"] : (function () { throw new RuntimeError('Variable "mollie_subscription" does not exist.', 7, $this->source); })()), "state", [], "any", false, false, false, 7)]);
        yield "
    </div>
</div>
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
        return "@SyliusMolliePlugin/admin/mollie_subscription/show/sections/general/state.html.twig";
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
        return array (  61 => 7,  56 => 5,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set mollie_subscription = hookable_metadata.context.resource %}
{% import '@SyliusMolliePlugin/admin/mollie_subscription/macro/state.html.twig' as state %}

<div class=\"row\">
    <div class=\"col-md-4 fw-bold\">{{ 'sylius.ui.state'|trans }}</div>
    <div class=\"col-md-8\">
        {{ state.label(mollie_subscription.state) }}
    </div>
</div>
", "@SyliusMolliePlugin/admin/mollie_subscription/show/sections/general/state.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/mollie_subscription/show/sections/general/state.html.twig");
    }
}
