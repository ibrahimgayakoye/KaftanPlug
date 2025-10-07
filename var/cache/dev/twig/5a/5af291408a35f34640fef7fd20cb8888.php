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

/* @SyliusAdmin/country/form/sections/general/provinces.html.twig */
class __TwigTemplate_2b1a535ccdd17c2ab1a5660426f1abfd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/country/form/sections/general/provinces.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/country/form/sections/general/provinces.html.twig"));

        // line 1
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "form", [], "any", false, false, false, 1), "provinces", [], "any", false, false, false, 1), 'label');
        yield "
";
        // line 2
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "form", [], "any", false, false, false, 2), "provinces", [], "any", false, false, false, 2), 'errors');
        yield "

<div ";
        // line 4
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("provinces");
        yield ">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 5, $this->source); })()), "context", [], "any", false, false, false, 5), "form", [], "any", false, false, false, 5), "provinces", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["province_form"]) {
            // line 6
            yield "        <div class=\"card mb-2\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("province");
            yield ">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"row\">
                            ";
            // line 11
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["province_form"], "code", [], "any", false, false, false, 11), 'label', ["label_attr" => ["class" => "col-form-label col-auto"]]);
            yield "
                            <div class=\"col\">
                                ";
            // line 13
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["province_form"], "code", [], "any", false, false, false, 13), 'widget', $this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("province-code"));
            yield "
                                ";
            // line 14
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["province_form"], "code", [], "any", false, false, false, 14), 'errors');
            yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"row\">
                            ";
            // line 20
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["province_form"], "name", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "col-form-label col-auto"]]);
            yield "
                            <div class=\"col\">
                                ";
            // line 22
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["province_form"], "name", [], "any", false, false, false, 22), 'widget', $this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("province-name"));
            yield "
                                ";
            // line 23
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["province_form"], "name", [], "any", false, false, false, 23), 'errors');
            yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"row\">
                            ";
            // line 29
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["province_form"], "abbreviation", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "col-form-label col-auto"]]);
            yield "
                            <div class=\"col\">
                                ";
            // line 31
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["province_form"], "abbreviation", [], "any", false, false, false, 31), 'widget', $this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("province-abbreviation"));
            yield "
                                ";
            // line 32
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["province_form"], "abbreviation", [], "any", false, false, false, 32), 'errors');
            yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-auto\" ";
            // line 36
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("delete-province");
            yield ">
                        ";
            // line 37
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["province_form"], "vars", [], "any", false, false, false, 37), "button_delete", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "btn btn-outline-danger"]]);
            yield "
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['province_form'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "</div>

";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 45, $this->source); })()), "context", [], "any", false, false, false, 45), "form", [], "any", false, false, false, 45), "provinces", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "button_add", [], "any", false, false, false, 45), 'widget', $this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("add-province"));
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
        return "@SyliusAdmin/country/form/sections/general/provinces.html.twig";
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
        return array (  146 => 45,  142 => 43,  130 => 37,  126 => 36,  119 => 32,  115 => 31,  110 => 29,  101 => 23,  97 => 22,  92 => 20,  83 => 14,  79 => 13,  74 => 11,  65 => 6,  61 => 5,  57 => 4,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_label(hookable_metadata.context.form.provinces) }}
{{ form_errors(hookable_metadata.context.form.provinces) }}

<div {{ sylius_test_html_attribute('provinces') }}>
    {% for province_form in hookable_metadata.context.form.provinces %}
        <div class=\"card mb-2\" {{ sylius_test_html_attribute('province') }}>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"row\">
                            {{ form_label(province_form.code, null, {label_attr: {class: 'col-form-label col-auto'}}) }}
                            <div class=\"col\">
                                {{ form_widget(province_form.code, sylius_test_form_attribute('province-code')) }}
                                {{ form_errors(province_form.code) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"row\">
                            {{ form_label(province_form.name, null, {label_attr: {class: 'col-form-label col-auto'}}) }}
                            <div class=\"col\">
                                {{ form_widget(province_form.name, sylius_test_form_attribute('province-name')) }}
                                {{ form_errors(province_form.name) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"row\">
                            {{ form_label(province_form.abbreviation, null, {label_attr: {class: 'col-form-label col-auto'}}) }}
                            <div class=\"col\">
                                {{ form_widget(province_form.abbreviation, sylius_test_form_attribute('province-abbreviation')) }}
                                {{ form_errors(province_form.abbreviation) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-auto\" {{ sylius_test_html_attribute('delete-province') }}>
                        {{ form_row(province_form.vars.button_delete, {attr: {class: 'btn btn-outline-danger'}}) }}
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
</div>

{{ form_widget(hookable_metadata.context.form.provinces.vars.button_add, sylius_test_form_attribute('add-province')) }}
", "@SyliusAdmin/country/form/sections/general/provinces.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/country/form/sections/general/provinces.html.twig");
    }
}
