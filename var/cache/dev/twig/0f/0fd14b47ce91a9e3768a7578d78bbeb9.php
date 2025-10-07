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

/* @SyliusAdmin/product_variant/form/sections/channel_pricing/accordion/alerts/first_error.html.twig */
class __TwigTemplate_741c0382dd5850815f59e2dda756a190 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product_variant/form/sections/channel_pricing/accordion/alerts/first_error.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product_variant/form/sections/channel_pricing/accordion/alerts/first_error.html.twig"));

        // line 1
        $context["channel_pricing_form"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "channel_pricing_form", [], "any", false, false, false, 1);
        // line 2
        $context["is_channel_pricing_invalid"] =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel_pricing_form"]) || array_key_exists("channel_pricing_form", $context) ? $context["channel_pricing_form"] : (function () { throw new RuntimeError('Variable "channel_pricing_form" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2), "errors", [], "any", false, false, false, 2), "form", [], "any", false, false, false, 2), "parent", [], "any", false, false, false, 2), "errors", [], "any", false, false, false, 2));
        // line 3
        yield "
";
        // line 4
        if ((($tmp = (isset($context["is_channel_pricing_invalid"]) || array_key_exists("is_channel_pricing_invalid", $context) ? $context["is_channel_pricing_invalid"] : (function () { throw new RuntimeError('Variable "is_channel_pricing_invalid" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "    <div class=\"alert alert-danger\" role=\"alert\">
        <div class=\"d-flex\">
            ";
            // line 7
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("first_error", [], $context, false);
            // line 8
            yield "        </div>
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
        return "@SyliusAdmin/product_variant/form/sections/channel_pricing/accordion/alerts/first_error.html.twig";
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
        return array (  64 => 8,  61 => 7,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set channel_pricing_form = hookable_metadata.context.channel_pricing_form %}
{% set is_channel_pricing_invalid = channel_pricing_form.vars.errors.form.parent.errors is not empty %}

{% if is_channel_pricing_invalid %}
    <div class=\"alert alert-danger\" role=\"alert\">
        <div class=\"d-flex\">
            {% hook 'first_error' %}
        </div>
    </div>
{% endif %}
", "@SyliusAdmin/product_variant/form/sections/channel_pricing/accordion/alerts/first_error.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product_variant/form/sections/channel_pricing/accordion/alerts/first_error.html.twig");
    }
}
