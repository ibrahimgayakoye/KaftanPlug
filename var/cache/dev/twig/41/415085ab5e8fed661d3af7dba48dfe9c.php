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

/* @SyliusAdmin/promotion/form/sections/rules_and_actions/actions.html.twig */
class __TwigTemplate_57d1bf00ab13677b820575c6d23cfe0f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/promotion/form/sections/rules_and_actions/actions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/promotion/form/sections/rules_and_actions/actions.html.twig"));

        // line 1
        yield "<div class=\"col-12 col-md-6 mb-3\">
    <div class=\"card\" ";
        // line 2
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("actions");
        yield ">
        <div class=\"card-header\">
            <div class=\"card-title\">
                ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.actions"), "html", null, true);
        yield "
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 10, $this->source); })()), "context", [], "any", false, false, false, 10), "form", [], "any", false, false, false, 10), "actions", [], "any", false, false, false, 10), 'row', ["label" => false, "attr" => ["class" => "flex-grow-1"]]);
        // line 13
        yield "

                ";
        // line 15
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("actions", [], $context, false);
        // line 16
        yield "            </div>
        </div>
        <div class=\"card-footer\">
            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 19, $this->source); })()), "context", [], "any", false, false, false, 19), "form", [], "any", false, false, false, 19), "actions", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "button_add", [], "any", false, false, false, 19), 'row');
        yield "
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
        return "@SyliusAdmin/promotion/form/sections/rules_and_actions/actions.html.twig";
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
        return array (  79 => 19,  74 => 16,  71 => 15,  67 => 13,  65 => 10,  57 => 5,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"col-12 col-md-6 mb-3\">
    <div class=\"card\" {{ sylius_test_html_attribute('actions') }}>
        <div class=\"card-header\">
            <div class=\"card-title\">
                {{ 'sylius.ui.actions'|trans }}
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                {{ form_row(hookable_metadata.context.form.actions, {
                    label: false,
                    attr: {'class': 'flex-grow-1'}
                }) }}

                {% hook 'actions' %}
            </div>
        </div>
        <div class=\"card-footer\">
            {{ form_row(hookable_metadata.context.form.actions.vars.button_add) }}
        </div>
    </div>
</div>
", "@SyliusAdmin/promotion/form/sections/rules_and_actions/actions.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/promotion/form/sections/rules_and_actions/actions.html.twig");
    }
}
