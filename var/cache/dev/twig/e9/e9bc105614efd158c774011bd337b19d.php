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

/* @SyliusAdmin/payment_method/form/sections/gateway_configuration.html.twig */
class __TwigTemplate_3a734dfc4132d5ae156bdcdace83fd6a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/payment_method/form/sections/gateway_configuration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/payment_method/form/sections/gateway_configuration.html.twig"));

        // line 1
        $context["gateway_type"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "form", [], "any", false, false, false, 1), "vars", [], "any", false, false, false, 1), "data", [], "any", false, false, false, 1), "gatewayConfig", [], "any", false, false, false, 1), "factoryName", [], "any", false, false, false, 1);
        // line 2
        yield "
<div class=\"card mb-3\">
    <div class=\"card-header\">
        <div class=\"card-title\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.gateway_configuration"), "html", null, true);
        yield "</div>
    </div>

    <div class=\"card-body\">
        <div class=\"row\">
            ";
        // line 10
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("gateway_configuration", [], $context, false);
        // line 11
        yield "            ";
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook((("gateway_configuration" . ".") . (isset($context["gateway_type"]) || array_key_exists("gateway_type", $context) ? $context["gateway_type"] : (function () { throw new RuntimeError('Variable "gateway_type" does not exist.', 11, $this->source); })())), [], $context, false);
        // line 12
        yield "        </div>
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
        return "@SyliusAdmin/payment_method/form/sections/gateway_configuration.html.twig";
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
        return array (  70 => 12,  66 => 11,  63 => 10,  55 => 5,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set gateway_type = hookable_metadata.context.form.vars.data.gatewayConfig.factoryName %}

<div class=\"card mb-3\">
    <div class=\"card-header\">
        <div class=\"card-title\">{{ 'sylius.ui.gateway_configuration'|trans }}</div>
    </div>

    <div class=\"card-body\">
        <div class=\"row\">
            {% hook 'gateway_configuration' %}
            {% hook 'gateway_configuration' ~ '.' ~ gateway_type %}
        </div>
    </div>
</div>
", "@SyliusAdmin/payment_method/form/sections/gateway_configuration.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/payment_method/form/sections/gateway_configuration.html.twig");
    }
}
