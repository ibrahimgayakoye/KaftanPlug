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

/* @SyliusShop/shared/components/delete_modal.html.twig */
class __TwigTemplate_6d6e2e1f8e4335aaa215957e770aec4b extends Template
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
            'trigger' => [$this, 'block_trigger'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@SyliusShop/shared/components/confirmation_modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/components/delete_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/components/delete_modal.html.twig"));

        // line 2
        $macros["buttons"] = $this->macros["buttons"] = $this->load("@SyliusShop/shared/buttons.html.twig", 2)->unwrap();
        // line 4
        $propsNames = [];        if (isset($context['__props']['id'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "id" in template "@SyliusShop/shared/components/delete_modal.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'id';        
        $context['attributes'] = $context['attributes']->remove('id');        
        if (!isset($context['id'])) {            $context['id'] = null;
        }        
        if (isset($context['__context']['id'])) {
            $context['id'] = null;
        }
        if (isset($context['__props']['path'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "path" in template "@SyliusShop/shared/components/delete_modal.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'path';        
        $context['attributes'] = $context['attributes']->remove('path');        
        if (!isset($context['path'])) {            $context['path'] = null;
        }        
        if (isset($context['__context']['path'])) {
            $context['path'] = null;
        }
        if (isset($context['__props']['label'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "label" in template "@SyliusShop/shared/components/delete_modal.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'label';        
        $context['attributes'] = $context['attributes']->remove('label');        
        if (!isset($context['label'])) {            $context['label'] = "sylius.ui.delete";
        }        
        if (isset($context['__context']['label'])) {
            $context['label'] = "sylius.ui.delete";
        }
        if (isset($context['__props']['icon'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "icon" in template "@SyliusShop/shared/components/delete_modal.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'icon';        
        $context['attributes'] = $context['attributes']->remove('icon');        
        if (!isset($context['icon'])) {            $context['icon'] = "tabler:trash";
        }        
        if (isset($context['__context']['icon'])) {
            $context['icon'] = "tabler:trash";
        }
        if (isset($context['__props']['disabled'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "disabled" in template "@SyliusShop/shared/components/delete_modal.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'disabled';        
        $context['attributes'] = $context['attributes']->remove('disabled');        
        if (!isset($context['disabled'])) {            $context['disabled'] = false;
        }        
        if (isset($context['__context']['disabled'])) {
            $context['disabled'] = false;
        }
        if (isset($context['__props']['form_attr'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "form_attr" in template "@SyliusShop/shared/components/delete_modal.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'form_attr';        
        $context['attributes'] = $context['attributes']->remove('form_attr');        
        if (!isset($context['form_attr'])) {            $context['form_attr'] = null;
        }        
        if (isset($context['__context']['form_attr'])) {
            $context['form_attr'] = null;
        }
        if (isset($context['__props']['type'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "type" in template "@SyliusShop/shared/components/delete_modal.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'type';        
        $context['attributes'] = $context['attributes']->remove('type');        
        if (!isset($context['type'])) {            $context['type'] = "delete";
        }        
        if (isset($context['__context']['type'])) {
            $context['type'] = "delete";
        }
        $attributesKeys = array_keys($context['attributes']->all());
        foreach ($context as $key => $value) {
            if (in_array($key, $attributesKeys) && !in_array($key, $propsNames)) {
unset($context[$key]);
            }
        }
        // line 5
        $context["modal_id"] = ("delete-modal-" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 5, $this->source); })()));
        // line 1
        $this->parent = $this->load("@SyliusShop/shared/components/confirmation_modal.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_trigger(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "trigger"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "trigger"));

        // line 8
        yield "    <button type=\"button\" class=\"btn btn-sm btn-outline-danger\" ";
        if ((($tmp = (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled ";
        }
        yield "data-bs-toggle=\"modal\" data-bs-target=\"#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["modal_id"]) || array_key_exists("modal_id", $context) ? $context["modal_id"] : (function () { throw new RuntimeError('Variable "modal_id" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 9, $this->source); })()), ["class" => "icon icon-xs"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 9, $this->source); })())), "html", null, true);
        yield "
    </button>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 14
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\" method=\"post\" ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["form_attr"]) || array_key_exists("form_attr", $context) ? $context["form_attr"] : (function () { throw new RuntimeError('Variable "form_attr" does not exist.', 14, $this->source); })()), "html", null, true);
        yield ">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 16, $this->source); })())), "html", null, true);
        yield "\" />

        <button type=\"button\" class=\"btn btn-sm\" data-bs-dismiss=\"modal\">
            ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cancel"), "html", null, true);
        yield "
        </button>
        <button type=\"submit\" class=\"btn btn-sm btn-danger\" ";
        // line 21
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("confirm-button");
        yield ">
            ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 22, $this->source); })())), "html", null, true);
        yield "
        </button>
    </form>
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
        return "@SyliusShop/shared/components/delete_modal.html.twig";
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
        return array (  227 => 22,  223 => 21,  218 => 19,  212 => 16,  204 => 14,  191 => 13,  175 => 9,  166 => 8,  153 => 7,  142 => 1,  140 => 5,  56 => 4,  54 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@SyliusShop/shared/components/confirmation_modal.html.twig' %}
{% import '@SyliusShop/shared/buttons.html.twig' as buttons %}

{% props id = null, path = null, label = 'sylius.ui.delete', icon = 'tabler:trash', disabled = false, form_attr = null, type = 'delete' %}
{% set modal_id = 'delete-modal-' ~ id %}

{% block trigger %}
    <button type=\"button\" class=\"btn btn-sm btn-outline-danger\" {% if disabled %}disabled {% endif %}data-bs-toggle=\"modal\" data-bs-target=\"#{{ modal_id }}\">
        {{ ux_icon(icon, {'class': 'icon icon-xs'})}} {{ label|trans }}
    </button>
{% endblock %}

{% block footer %}
    <form action=\"{{ path }}\" method=\"post\" {{ form_attr }}>
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(id) }}\" />

        <button type=\"button\" class=\"btn btn-sm\" data-bs-dismiss=\"modal\">
            {{ 'sylius.ui.cancel'|trans }}
        </button>
        <button type=\"submit\" class=\"btn btn-sm btn-danger\" {{ sylius_test_html_attribute('confirm-button') }}>
            {{ label|trans }}
        </button>
    </form>
{% endblock %}
", "@SyliusShop/shared/components/delete_modal.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/components/delete_modal.html.twig");
    }
}
