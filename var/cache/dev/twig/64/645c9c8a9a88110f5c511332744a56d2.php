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

/* @SyliusAdmin/product_option/form/sections/values.html.twig */
class __TwigTemplate_1faae5d5a146b7a894a4e4ef3da929dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product_option/form/sections/values.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product_option/form/sections/values.html.twig"));

        // line 1
        yield "<div class=\"card mb-3\" >
    <div class=\"card-header\">
        <div class=\"card-title\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.values"), "html", null, true);
        yield "</div>
    </div>
    <div class=\"card-body\" >
        <div class=\"row\" ";
        // line 6
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("option-values");
        yield ">
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 7, $this->source); })()), "context", [], "any", false, false, false, 7), "form", [], "any", false, false, false, 7), "values", [], "any", false, false, false, 7), 'errors');
        yield "

            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 9, $this->source); })()), "context", [], "any", false, false, false, 9), "form", [], "any", false, false, false, 9), "values", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["value_form_key"] => $context["value_form"]) {
            // line 10
            yield "                ";
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("values", ["value_form" => $context["value_form"], "value_form_key" => $context["value_form_key"]], $context, false);
            // line 11
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['value_form_key'], $context['value_form'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "        </div>
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 13, $this->source); })()), "context", [], "any", false, false, false, 13), "form", [], "any", false, false, false, 13), "values", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "button_add", [], "any", false, false, false, 13), 'row', $this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("add-option-value"));
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
        return "@SyliusAdmin/product_option/form/sections/values.html.twig";
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
        return array (  84 => 13,  81 => 12,  75 => 11,  71 => 10,  67 => 9,  62 => 7,  58 => 6,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card mb-3\" >
    <div class=\"card-header\">
        <div class=\"card-title\">{{ 'sylius.ui.values'|trans }}</div>
    </div>
    <div class=\"card-body\" >
        <div class=\"row\" {{ sylius_test_html_attribute('option-values') }}>
            {{ form_errors(hookable_metadata.context.form.values) }}

            {% for value_form_key, value_form in hookable_metadata.context.form.values %}
                {% hook 'values' with { value_form, value_form_key } %}
            {% endfor %}
        </div>
        {{ form_row(hookable_metadata.context.form.values.vars.button_add, sylius_test_form_attribute('add-option-value')) }}
    </div>
</div>
", "@SyliusAdmin/product_option/form/sections/values.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product_option/form/sections/values.html.twig");
    }
}
