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

/* @SyliusAdmin/product/form.html.twig */
class __TwigTemplate_51ad07254e0248f37620c35d28b12cea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form.html.twig"));

        // line 2
        yield "
";
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), ["@SyliusAdmin/product/form_theme.html.twig"], true);
        // line 4
        yield "
<div class=\"container-xl\" ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 5, $this->source); })()), "html", null, true);
        yield ">
    ";
        // line 6
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["class" => "ui loadable form", "novalidate" => "novalidate", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6)]]);
        yield "
        <div class=\"row\">
            ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "configuration", [], "any", false, true, false, 8), "method", [], "any", true, true, false, 8)) {
            // line 9
            yield "                <input type=\"hidden\" name=\"_method\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 9, $this->source); })()), "configuration", [], "any", false, false, false, 9), "method", [], "any", false, false, false, 9), "html", null, true);
            yield "\" />
            ";
        }
        // line 11
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'errors');
        yield "
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "_token", [], "any", false, false, false, 12), 'widget');
        yield "

            ";
        // line 14
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("form", ["mapped_product_attributes" =>         // line 15
(isset($context["mapped_product_attributes"]) || array_key_exists("mapped_product_attributes", $context) ? $context["mapped_product_attributes"] : (function () { throw new RuntimeError('Variable "mapped_product_attributes" does not exist.', 15, $this->source); })()), "attributes_to_be_added" =>         // line 16
(isset($context["attributes_to_be_added"]) || array_key_exists("attributes_to_be_added", $context) ? $context["attributes_to_be_added"] : (function () { throw new RuntimeError('Variable "attributes_to_be_added" does not exist.', 16, $this->source); })()), "resource" =>         // line 17
(isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 17, $this->source); })()), "form" =>         // line 18
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })())], $context, false);
        // line 20
        yield "        </div>
    ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_end', ["render_rest" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable"] ?? null), "configuration", [], "any", false, true, false, 21), "render_rest", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable"]) || array_key_exists("hookable", $context) ? $context["hookable"] : (function () { throw new RuntimeError('Variable "hookable" does not exist.', 21, $this->source); })()), "configuration", [], "any", false, false, false, 21), "render_rest", [], "any", false, false, false, 21), false)) : (false))]);
        yield "
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
        return "@SyliusAdmin/product/form.html.twig";
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
        return array (  93 => 21,  90 => 20,  88 => 18,  87 => 17,  86 => 16,  85 => 15,  83 => 14,  78 => 12,  73 => 11,  67 => 9,  65 => 8,  60 => 6,  56 => 5,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Rendered with using \\Sylius\\Bundle\\AdminBundle\\TwigComponent\\Product\\FormComponent #}

{% form_theme form '@SyliusAdmin/product/form_theme.html.twig' %}

<div class=\"container-xl\" {{ attributes }}>
    {{ form_start(form, {'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate', 'id': form.vars.id}}) }}
        <div class=\"row\">
            {% if hookable_metadata.configuration.method is defined %}
                <input type=\"hidden\" name=\"_method\" value=\"{{ hookable_metadata.configuration.method }}\" />
            {% endif %}
            {{ form_errors(form) }}
            {{ form_widget(form._token) }}

            {% hook 'form' with {
                mapped_product_attributes,
                attributes_to_be_added,
                resource,
                form,
            } %}
        </div>
    {{ form_end(form, {render_rest: hookable.configuration.render_rest|default(false)}) }}
</div>
", "@SyliusAdmin/product/form.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/form.html.twig");
    }
}
