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

/* @SyliusAdmin/product/form/sections/channel_pricing/accordion.html.twig */
class __TwigTemplate_52a13b8da4c68e9e1cbdd1a805212101 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/channel_pricing/accordion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/channel_pricing/accordion.html.twig"));

        // line 1
        $macros["_v0"] = $this->macros["_v0"] = $this->load("@SyliusAdmin/shared/helper/channel_pricings.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["product_variant"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "form", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3), "data", [], "any", false, false, false, 3);
        // line 4
        $context["body"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 5
            yield "    ";
            // line 7
            yield "
        {% hook 'accordion' with { _prefixes: ['sylius_admin.product_variant.update.content.form.sections.channel_pricing'], product_variant, channel_code } %}
    ";
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        yield "
";
        // line 10
        yield $macros["_v0"]->getTemplateForMacro("macro_channel_pricings", $context, 10, $this->getSourceContext())->macro_channel_pricings(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 10, $this->source); })()), "context", [], "any", false, false, false, 10), "form", [], "any", false, false, false, 10), "channelPricings", [], "any", false, false, false, 10), (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new RuntimeError('Variable "product_variant" does not exist.', 10, $this->source); })()), (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 10, $this->source); })())]);
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
        return "@SyliusAdmin/product/form/sections/channel_pricing/accordion.html.twig";
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
        return array (  70 => 10,  67 => 9,  59 => 7,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% from '@SyliusAdmin/shared/helper/channel_pricings.html.twig' import channel_pricings %}

{% set product_variant = hookable_metadata.context.form.vars.data %}
{% set body %}
    {% verbatim %}
        {% hook 'accordion' with { _prefixes: ['sylius_admin.product_variant.update.content.form.sections.channel_pricing'], product_variant, channel_code } %}
    {% endverbatim %}
{% endset %}

{{ channel_pricings(hookable_metadata.context.form.channelPricings, product_variant, body) }}
", "@SyliusAdmin/product/form/sections/channel_pricing/accordion.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/form/sections/channel_pricing/accordion.html.twig");
    }
}
