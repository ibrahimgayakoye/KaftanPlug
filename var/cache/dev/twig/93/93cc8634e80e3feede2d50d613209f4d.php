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

/* @SyliusShop/checkout/common/layout.html.twig */
class __TwigTemplate_2b75a664333fb37972579cc741aa6a64 extends Template
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
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@SyliusShop/shared/layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/checkout/common/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/checkout/common/layout.html.twig"));

        // line 3
        $context["prefixes"] = Twig\Extension\CoreExtension::merge(((array_key_exists("prefixes", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["prefixes"]) || array_key_exists("prefixes", $context) ? $context["prefixes"] : (function () { throw new RuntimeError('Variable "prefixes" does not exist.', 3, $this->source); })()), [])) : ([])), ["sylius_shop.checkout.common"]);
        // line 1
        $this->parent = $this->load("@SyliusShop/shared/layout/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    ";
        $context["prefixes"] = Twig\Extension\CoreExtension::filter($this->env, (isset($context["prefixes"]) || array_key_exists("prefixes", $context) ? $context["prefixes"] : (function () { throw new RuntimeError('Variable "prefixes" does not exist.', 6, $this->source); })()), function ($__hook__) use ($context, $macros) { $context["hook"] = $__hook__; return ((isset($context["hook"]) || array_key_exists("hook", $context) ? $context["hook"] : (function () { throw new RuntimeError('Variable "hook" does not exist.', 6, $this->source); })()) != (isset($context["generic_hook"]) || array_key_exists("generic_hook", $context) ? $context["generic_hook"] : (function () { throw new RuntimeError('Variable "generic_hook" does not exist.', 6, $this->source); })())); });
        // line 7
        yield "    <div class=\"d-flex flex-column min-vh-100 overflow-hidden\">
        <div class=\"bg-white border-bottom py-4\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    ";
        // line 11
        if ((($tmp =  !(null === ((array_key_exists("active_step", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_step"]) || array_key_exists("active_step", $context) ? $context["active_step"] : (function () { throw new RuntimeError('Variable "active_step" does not exist.', 11, $this->source); })()), null)) : (null)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "                        ";
            $context["hooks"] = [((isset($context["active_step"]) || array_key_exists("active_step", $context) ? $context["active_step"] : (function () { throw new RuntimeError('Variable "active_step" does not exist.', 12, $this->source); })()) . ".header")];
            // line 13
            yield "                    ";
        }
        // line 14
        yield "                    ";
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook(Twig\Extension\CoreExtension::merge(((array_key_exists("hooks", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hooks"]) || array_key_exists("hooks", $context) ? $context["hooks"] : (function () { throw new RuntimeError('Variable "hooks" does not exist.', 14, $this->source); })()), [])) : ([])), ["header"]), ["_prefixes" => (isset($context["prefixes"]) || array_key_exists("prefixes", $context) ? $context["prefixes"] : (function () { throw new RuntimeError('Variable "prefixes" does not exist.', 14, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })())], $context, false);
        // line 15
        yield "                </div>
            </div>
        </div>
        <div class=\"flex-grow-1 d-flex align-items-stretch\">
            <div class=\"container\">
                <div class=\"row h-100\">
                    <div class=\"col pt-4 pb-5\">
                        ";
        // line 22
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 24
        yield "                    </div>
                    ";
        // line 25
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 33
        yield "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 23
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        yield "                        <div class=\"col-12 col-lg-5 py-5 ps-lg-6 position-relative checkout-sidebar\">
                            ";
        // line 27
        if ((($tmp =  !(null === ((array_key_exists("active_step", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_step"]) || array_key_exists("active_step", $context) ? $context["active_step"] : (function () { throw new RuntimeError('Variable "active_step" does not exist.', 27, $this->source); })()), null)) : (null)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                                ";
            $context["hooks"] = [((isset($context["active_step"]) || array_key_exists("active_step", $context) ? $context["active_step"] : (function () { throw new RuntimeError('Variable "active_step" does not exist.', 28, $this->source); })()) . ".sidebar")];
            // line 29
            yield "                            ";
        }
        // line 30
        yield "                            ";
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook(Twig\Extension\CoreExtension::merge(((array_key_exists("hooks", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hooks"]) || array_key_exists("hooks", $context) ? $context["hooks"] : (function () { throw new RuntimeError('Variable "hooks" does not exist.', 30, $this->source); })()), [])) : ([])), ["sidebar"]), ["_prefixes" => (isset($context["prefixes"]) || array_key_exists("prefixes", $context) ? $context["prefixes"] : (function () { throw new RuntimeError('Variable "prefixes" does not exist.', 30, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 30, $this->source); })())], $context, false);
        // line 31
        yield "                        </div>
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
        return "@SyliusShop/checkout/common/layout.html.twig";
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
        return array (  185 => 31,  181 => 30,  178 => 29,  175 => 28,  173 => 27,  170 => 26,  157 => 25,  146 => 23,  133 => 22,  118 => 33,  116 => 25,  113 => 24,  111 => 22,  102 => 15,  98 => 14,  95 => 13,  92 => 12,  90 => 11,  84 => 7,  81 => 6,  68 => 5,  57 => 1,  55 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@SyliusShop/shared/layout/base.html.twig' %}

{% set prefixes = prefixes|default([])|merge(['sylius_shop.checkout.common']) %}

{% block body %}
    {% set prefixes = prefixes|filter(hook => hook != generic_hook) %}
    <div class=\"d-flex flex-column min-vh-100 overflow-hidden\">
        <div class=\"bg-white border-bottom py-4\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    {% if active_step|default(null) is not null %}
                        {% set hooks = [ active_step ~ '.header'] %}
                    {% endif %}
                    {% hook hooks|default([])|merge(['header']) with { _prefixes: prefixes, order } %}
                </div>
            </div>
        </div>
        <div class=\"flex-grow-1 d-flex align-items-stretch\">
            <div class=\"container\">
                <div class=\"row h-100\">
                    <div class=\"col pt-4 pb-5\">
                        {% block content %}
                        {% endblock %}
                    </div>
                    {% block sidebar %}
                        <div class=\"col-12 col-lg-5 py-5 ps-lg-6 position-relative checkout-sidebar\">
                            {% if active_step|default(null) is not null %}
                                {% set hooks = [ active_step ~ '.sidebar'] %}
                            {% endif %}
                            {% hook hooks|default([])|merge(['sidebar']) with { _prefixes: prefixes, order } %}
                        </div>
                    {% endblock %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@SyliusShop/checkout/common/layout.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/checkout/common/layout.html.twig");
    }
}
