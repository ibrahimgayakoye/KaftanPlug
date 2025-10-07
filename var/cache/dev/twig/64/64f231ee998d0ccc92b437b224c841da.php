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

/* @SyliusAdmin/promotion/form/sections/rules_and_actions/rules.html.twig */
class __TwigTemplate_68c87802064534d93ee7a7076ebc15a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/promotion/form/sections/rules_and_actions/rules.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/promotion/form/sections/rules_and_actions/rules.html.twig"));

        // line 1
        yield "<div class=\"col-12 col-md-6 mb-3\">
    <div class=\"card\" ";
        // line 2
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("rules");
        yield ">
        <div class=\"card-header\">
            <div class=\"card-title\">
                ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.rules"), "html", null, true);
        yield "
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 10, $this->source); })()), "context", [], "any", false, false, false, 10), "form", [], "any", false, false, false, 10), "rules", [], "any", false, false, false, 10), 'row', ["label" => false]);
        yield "

                ";
        // line 12
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("rules", [], $context, false);
        // line 13
        yield "            </div>
        </div>
        <div class=\"card-footer\">
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 16, $this->source); })()), "context", [], "any", false, false, false, 16), "form", [], "any", false, false, false, 16), "rules", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "button_add", [], "any", false, false, false, 16), 'row');
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
        return "@SyliusAdmin/promotion/form/sections/rules_and_actions/rules.html.twig";
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
        return array (  78 => 16,  73 => 13,  70 => 12,  65 => 10,  57 => 5,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"col-12 col-md-6 mb-3\">
    <div class=\"card\" {{ sylius_test_html_attribute('rules') }}>
        <div class=\"card-header\">
            <div class=\"card-title\">
                {{ 'sylius.ui.rules'|trans }}
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                {{ form_row(hookable_metadata.context.form.rules, {label: false}) }}

                {% hook 'rules' %}
            </div>
        </div>
        <div class=\"card-footer\">
            {{ form_row(hookable_metadata.context.form.rules.vars.button_add) }}
        </div>
    </div>
</div>
", "@SyliusAdmin/promotion/form/sections/rules_and_actions/rules.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/promotion/form/sections/rules_and_actions/rules.html.twig");
    }
}
