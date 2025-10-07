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

/* @SyliusAdmin/product_option/form/sections/values/value/translations.html.twig */
class __TwigTemplate_c9078b413bca40f23cf25ae52d1356ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product_option/form/sections/values/value/translations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product_option/form/sections/values/value/translations.html.twig"));

        // line 1
        yield "<div class=\"row mb-3\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "value_form", [], "any", false, false, false, 2), "translations", [], "any", false, false, false, 2));
        foreach ($context['_seq'] as $context["translation_form_key"] => $context["translation_form"]) {
            // line 3
            yield "        <div class=\"col-3\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("option-value-locale", $context["translation_form_key"]);
            yield ">
            <div>
                ";
            // line 5
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translation_form"], "vars", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 6
                yield "                    <div class=\"d-flex\">
                        <div class=\"me-3 mt-1\">";
                // line 7
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translation_form"], 'label', (CoreExtension::testEmpty($_label_ = $this->extensions['Sylius\Bundle\LocaleBundle\Twig\LocaleExtension']->convertCodeToName(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translation_form"], "vars", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7))) ? [] : ["label" => $_label_]));
                yield "</div>
                    </div>
                ";
            } else {
                // line 10
                yield "                    <div class=\"d-flex\">
                        <div class=\"me-3 mt-1\">
                            <span class=\"col-form-label\">";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.global"), "html", null, true);
                yield "</span>
                        </div>
                    </div>
                ";
            }
            // line 16
            yield "            </div>
            <div>
                <div class=\"input-group\">
                    ";
            // line 19
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["translation_form"], "value", [], "any", false, false, false, 19), 'widget');
            yield "
                    <button
                        type=\"button\"
                        class=\"btn btn-icon\"
                        data-bs-toggle=\"tooltip\"
                        data-bs-title=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.apply_to_all"), "html", null, true);
            yield "\"
                        data-action=\"live#action:prevent\"
                        data-live-action-param=\"applyToAll\"
                        data-live-value-key-param=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 27, $this->source); })()), "context", [], "any", false, false, false, 27), "value_form_key", [], "any", false, false, false, 27), "html", null, true);
            yield "\"
                        data-live-translation-key-param=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["translation_form_key"], "html", null, true);
            yield "\"
                        ";
            // line 29
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("apply-to-all");
            yield "
                    >
                        ";
            // line 31
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:copy-plus");
            yield "
                    </button>
                    ";
            // line 33
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["translation_form"], "value", [], "any", false, false, false, 33), 'errors');
            yield "
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['translation_form_key'], $context['translation_form'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "</div>
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
        return "@SyliusAdmin/product_option/form/sections/values/value/translations.html.twig";
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
        return array (  131 => 38,  120 => 33,  115 => 31,  110 => 29,  106 => 28,  102 => 27,  96 => 24,  88 => 19,  83 => 16,  76 => 12,  72 => 10,  66 => 7,  63 => 6,  61 => 5,  55 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row mb-3\">
    {% for translation_form_key, translation_form in hookable_metadata.context.value_form.translations %}
        <div class=\"col-3\" {{ sylius_test_html_attribute('option-value-locale', translation_form_key) }}>
            <div>
                {% if translation_form.vars.name is not null %}
                    <div class=\"d-flex\">
                        <div class=\"me-3 mt-1\">{{ form_label(translation_form, translation_form.vars.name|sylius_locale_name) }}</div>
                    </div>
                {% else %}
                    <div class=\"d-flex\">
                        <div class=\"me-3 mt-1\">
                            <span class=\"col-form-label\">{{ 'sylius.ui.global'|trans }}</span>
                        </div>
                    </div>
                {% endif %}
            </div>
            <div>
                <div class=\"input-group\">
                    {{ form_widget(translation_form.value) }}
                    <button
                        type=\"button\"
                        class=\"btn btn-icon\"
                        data-bs-toggle=\"tooltip\"
                        data-bs-title=\"{{ 'sylius.ui.apply_to_all'|trans }}\"
                        data-action=\"live#action:prevent\"
                        data-live-action-param=\"applyToAll\"
                        data-live-value-key-param=\"{{ hookable_metadata.context.value_form_key }}\"
                        data-live-translation-key-param=\"{{ translation_form_key }}\"
                        {{ sylius_test_html_attribute('apply-to-all') }}
                    >
                        {{ ux_icon('tabler:copy-plus') }}
                    </button>
                    {{ form_errors(translation_form.value) }}
                </div>
            </div>
        </div>
    {% endfor %}
</div>
", "@SyliusAdmin/product_option/form/sections/values/value/translations.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product_option/form/sections/values/value/translations.html.twig");
    }
}
