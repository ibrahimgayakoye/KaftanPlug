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

/* @SyliusAdmin/shipping_method/form/rules.html.twig */
class __TwigTemplate_99911fb969f535c59c980d8f440d373d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shipping_method/form/rules.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shipping_method/form/rules.html.twig"));

        // line 1
        yield "<div class=\"card mb-3\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("rules");
        yield ">
    <div class=\"card-header\">
        <div class=\"card-title\">
            ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.rules"), "html", null, true);
        yield "
        </div>
    </div>
    <div class=\"card-body\">
        <div class=\"alert alert-info d-flex align-items-center\" role=\"alert\">
            <div>
                ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.form.shipping_method.rules_help"), "html", null, true);
        yield "
            </div>
        </div>
        <div class=\"row align-items-center\">
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 14, $this->source); })()), "context", [], "any", false, false, false, 14), "form", [], "any", false, false, false, 14), "rules", [], "any", false, false, false, 14), 'row', ["label" => false]);
        yield "
        </div>
    </div>
    <div class=\"card-footer\">
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 18, $this->source); })()), "context", [], "any", false, false, false, 18), "form", [], "any", false, false, false, 18), "rules", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "button_add", [], "any", false, false, false, 18), 'row');
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
        return "@SyliusAdmin/shipping_method/form/rules.html.twig";
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
        return array (  78 => 18,  71 => 14,  64 => 10,  55 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card mb-3\" {{ sylius_test_html_attribute('rules') }}>
    <div class=\"card-header\">
        <div class=\"card-title\">
            {{ 'sylius.ui.rules'|trans }}
        </div>
    </div>
    <div class=\"card-body\">
        <div class=\"alert alert-info d-flex align-items-center\" role=\"alert\">
            <div>
                {{ 'sylius.form.shipping_method.rules_help'|trans }}
            </div>
        </div>
        <div class=\"row align-items-center\">
            {{ form_row(hookable_metadata.context.form.rules, {label: false}) }}
        </div>
    </div>
    <div class=\"card-footer\">
        {{ form_row(hookable_metadata.context.form.rules.vars.button_add) }}
    </div>
</div>
", "@SyliusAdmin/shipping_method/form/rules.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shipping_method/form/rules.html.twig");
    }
}
