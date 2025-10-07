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

/* @SyliusAdmin/promotion/form_theme.html.twig */
class __TwigTemplate_debe086b1bdc250ac3376c0d423fd335 extends Template
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
            'live_collection_widget' => [$this, 'block_live_collection_widget'],
            'sylius_promotion_rule_row' => [$this, 'block_sylius_promotion_rule_row'],
            'sylius_promotion_action_row' => [$this, 'block_sylius_promotion_action_row'],
            'add_button_row' => [$this, 'block_add_button_row'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@SyliusAdmin/shared/form_theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/promotion/form_theme.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/promotion/form_theme.html.twig"));

        $this->parent = $this->load("@SyliusAdmin/shared/form_theme.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_live_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "live_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "live_collection_widget"));

        // line 4
        yield from         $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sylius_promotion_rule_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_promotion_rule_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_promotion_rule_row"));

        // line 8
        yield "<div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "\" ";
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        yield " ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("entry-row");
        yield ">";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'errors');
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "type", [], "any", false, false, false, 10), 'row');
        // line 11
        yield "<div class=\"alert text-body flex-column gap-0\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-auto mb-3\"><strong>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Sylius\Bundle\AdminBundle\Twig\PromotionLabelsExtension']->getPromotionRuleLabel(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "type", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "data", [], "any", false, false, false, 13))), "html", null, true);
        yield "</strong></div>";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["button_delete"]) || array_key_exists("button_delete", $context) ? $context["button_delete"] : (function () { throw new RuntimeError('Variable "button_delete" does not exist.', 14, $this->source); })()), 'row', $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("delete"), ["attr" => ["class" => "btn-close"]]));
        // line 15
        yield "</div>
            <div class=\"flex-grow-1\">";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "configuration", [], "any", false, false, false, 17), 'row', ["label" => false]);
        // line 18
        yield "</div>
        </div>
    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sylius_promotion_action_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_promotion_action_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_promotion_action_row"));

        // line 24
        yield "<div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "\" ";
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        yield " ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("entry-row");
        yield ">";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'errors');
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26), 'row');
        // line 27
        yield "<div class=\"alert text-body flex-column gap-0\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-auto mb-3\"><strong>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Sylius\Bundle\AdminBundle\Twig\PromotionLabelsExtension']->getPromotionActionLabel(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "type", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "data", [], "any", false, false, false, 29))), "html", null, true);
        yield "</strong></div>";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["button_delete"]) || array_key_exists("button_delete", $context) ? $context["button_delete"] : (function () { throw new RuntimeError('Variable "button_delete" does not exist.', 30, $this->source); })()), 'row', $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("delete"), ["attr" => ["class" => "btn-close"]]));
        // line 31
        yield "</div>
            <div class=\"flex-grow-1\">";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "configuration", [], "any", false, false, false, 33), 'row', ["label" => false]);
        // line 34
        yield "</div>
        </div>
    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_add_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add_button_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add_button_row"));

        // line 40
        yield "    ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 40, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "        <div class=\"dropdown\">
            <button class=\"btn dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 42, $this->source); })())), "html", null, true);
            yield "</button>
            <ul class=\"dropdown-menu\">
                ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 44, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["type"] => $context["label"]) {
                // line 45
                yield "                    <li>
                        <button class=\"dropdown-item\" type=\"button\" ";
                // line 46
                yield from                 $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
                yield " data-live-type-param=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()(("add-" . $context["type"]));
                yield ">
                            ";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["label"]), "html", null, true);
                yield "
                        </button>
                    </li>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['type'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "            </ul>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusAdmin/promotion/form_theme.html.twig";
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
        return array (  264 => 51,  246 => 47,  238 => 46,  235 => 45,  218 => 44,  213 => 42,  210 => 41,  207 => 40,  194 => 39,  181 => 34,  179 => 33,  176 => 31,  174 => 30,  171 => 29,  167 => 27,  165 => 26,  163 => 25,  155 => 24,  142 => 23,  129 => 18,  127 => 17,  124 => 15,  122 => 14,  119 => 13,  115 => 11,  113 => 10,  111 => 9,  103 => 8,  90 => 7,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@SyliusAdmin/shared/form_theme.html.twig' %}

{%- block live_collection_widget -%}
    {{ block('form_widget') }}
{%- endblock live_collection_widget -%}

{%- block sylius_promotion_rule_row -%}
    <div id=\"{{ id }}\" {{ block('attributes') }} {{ sylius_test_html_attribute('entry-row') }}>
        {{- form_errors(form) -}}
        {{- form_row(form.type) -}}
        <div class=\"alert text-body flex-column gap-0\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-auto mb-3\"><strong>{{ (sylius_admin_get_promotion_rule_label(form.type.vars.data))|trans }}</strong></div>
                {{- form_row(button_delete, sylius_test_form_attribute('delete')|sylius_merge_recursive({'attr': {'class': 'btn-close'}})) -}}
            </div>
            <div class=\"flex-grow-1\">
                {{- form_row(form.configuration, {'label': false}) -}}
            </div>
        </div>
    </div>
{%- endblock sylius_promotion_rule_row -%}

{%- block sylius_promotion_action_row -%}
    <div id=\"{{ id }}\" {{ block('attributes') }} {{ sylius_test_html_attribute('entry-row') }}>
        {{- form_errors(form) -}}
        {{- form_row(form.type) -}}
        <div class=\"alert text-body flex-column gap-0\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-auto mb-3\"><strong>{{ (sylius_admin_get_promotion_action_label(form.type.vars.data))|trans }}</strong></div>
                {{- form_row(button_delete, sylius_test_form_attribute('delete')|sylius_merge_recursive({'attr': {'class': 'btn-close'}})) -}}
            </div>
            <div class=\"flex-grow-1\">
                {{- form_row(form.configuration, {'label': false}) -}}
            </div>
        </div>
    </div>
{%- endblock sylius_promotion_action_row -%}

{% block add_button_row %}
    {% if types is not empty %}
        <div class=\"dropdown\">
            <button class=\"btn dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\">{{ label|trans }}</button>
            <ul class=\"dropdown-menu\">
                {% for type, label in types %}
                    <li>
                        <button class=\"dropdown-item\" type=\"button\" {{ block('button_attributes') }} data-live-type-param=\"{{ type }}\" {{ sylius_test_html_attribute('add-' ~ type) }}>
                            {{ (label)|trans }}
                        </button>
                    </li>
                {% endfor %}
            </ul>
        </div>
    {% endif %}
{% endblock %}
", "@SyliusAdmin/promotion/form_theme.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/promotion/form_theme.html.twig");
    }
}
