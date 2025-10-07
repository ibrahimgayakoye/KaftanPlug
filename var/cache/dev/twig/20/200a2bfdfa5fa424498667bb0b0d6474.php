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

/* @SyliusAdmin/product/generate_variants/form/variants/variant.html.twig */
class __TwigTemplate_85484db69bafd8cfc804693a51a28594 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/generate_variants/form/variants/variant.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/generate_variants/form/variants/variant.html.twig"));

        // line 1
        $context["form"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "form", [], "any", false, false, false, 1);
        // line 2
        yield "
<div class=\"card mb-3\" id=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3), "html", null, true);
        yield "\">
    <div class=\"card-header d-flex justify-content-between\">
        <div>
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "optionValues", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
            // line 7
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "vars", [], "any", false, false, false, 7), "label", [], "any", false, false, false, 7)), "html", null, true);
            yield ": <span class=\"fw-bold me-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "html", null, true);
            yield "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "        </div>
        ";
        // line 10
        if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "value", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10))) {
            // line 11
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "button_delete", [], "any", false, false, false, 11), 'row', $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("delete-button"), ["attr" => ["class" => "btn-close"]]));
        }
        // line 13
        yield "    </div>
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-12 col-md-6\">
                ";
        // line 17
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("variant#left", [], $context, false);
        // line 18
        yield "            </div>

            <div class=\"col-12 col-md-6\">
                ";
        // line 21
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("variant#right", [], $context, false);
        // line 22
        yield "            </div>
        </div>
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
        return "@SyliusAdmin/product/generate_variants/form/variants/variant.html.twig";
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
        return array (  99 => 22,  96 => 21,  91 => 18,  88 => 17,  82 => 13,  79 => 11,  77 => 10,  74 => 9,  63 => 7,  59 => 6,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set form = hookable_metadata.context.form %}

<div class=\"card mb-3\" id=\"{{ form.vars.id }}\">
    <div class=\"card-header d-flex justify-content-between\">
        <div>
            {% for option_value in form.optionValues  %}
                {{ option_value.vars.label|trans }}: <span class=\"fw-bold me-1\">{{ option_value.vars.value }}</span>
            {% endfor %}
        </div>
        {% if form.vars.value.id is null %}
            {{- form_row(form.vars.button_delete, sylius_test_form_attribute('delete-button')|sylius_merge_recursive({'attr': {'class': 'btn-close'}})) -}}
        {% endif %}
    </div>
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-12 col-md-6\">
                {% hook 'variant#left' %}
            </div>

            <div class=\"col-12 col-md-6\">
                {% hook 'variant#right' %}
            </div>
        </div>
    </div>
</div>
", "@SyliusAdmin/product/generate_variants/form/variants/variant.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/generate_variants/form/variants/variant.html.twig");
    }
}
