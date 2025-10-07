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

/* @SyliusAdmin/taxon/sections/tree/actions/dropdown/delete.html.twig */
class __TwigTemplate_fed3c9eacbcbe2737b22a1ea294f9528 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/taxon/sections/tree/actions/dropdown/delete.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/taxon/sections/tree/actions/dropdown/delete.html.twig"));

        // line 2
        yield "
";
        // line 3
        $macros["button"] = $this->macros["button"] = $this->load("@SyliusAdmin/shared/helper/button.html.twig", 3)->unwrap();
        // line 4
        $context["id"] = ((array_key_exists("taxon_id", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["taxon_id"]) || array_key_exists("taxon_id", $context) ? $context["taxon_id"] : (function () { throw new RuntimeError('Variable "taxon_id" does not exist.', 4, $this->source); })()), "__TAXON_ID__")) : ("__TAXON_ID__"));
        // line 5
        yield "
<div ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 6, $this->source); })()), "defaults", [$this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("@sylius/admin-bundle/delete-taxon")], "method", false, false, false, 6), "html", null, true);
        yield ">
    <button
        class=\"dropdown-item\"
        data-action=\"live#action:prevent\"
        data-live-action-param=\"delete\"
        data-live-taxon-id-param=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "\"
        ";
        // line 12
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("delete");
        yield "
    >
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:trash", ["class" => "icon dropdown-item-icon icon-tabler icon-tabler-settings"]);
        yield "
        ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true);
        yield "
    </button>

    <div ";
        // line 18
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("@sylius/admin-bundle/delete-taxon", "parent");
        yield ">
        <div class=\"modal fade\" id=\"delete-modal-";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "\" tabindex=\"-1\" aria-hidden=\"true\" ";
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("@sylius/admin-bundle/delete-taxon", "modal");
        yield " ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("delete-modal");
        yield ">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title py-5\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.are_your_sure_you_want_to_perform_this_action"), "html", null, true);
        yield "</h1>
                    </div>
                    <div class=\"modal-footer\">
                        <form action=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_delete", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 26, $this->source); })())]), "html", null, true);
        yield "\" method=\"post\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_csrf_token\" ";
        // line 28
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("@sylius/admin-bundle/delete-taxon", "csrfToken");
        yield "/>

                            ";
        // line 30
        yield $macros["button"]->getTemplateForMacro("macro_default", $context, 30, $this->getSourceContext())->macro_default(...[["text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cancel"), "attr" => "data-bs-dismiss=modal"]]);
        yield "
                            ";
        // line 31
        yield $macros["button"]->getTemplateForMacro("macro_default", $context, 31, $this->getSourceContext())->macro_default(...[["text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "type" => "submit", "class" => "btn-danger", "attr" => $this->env->getFunction('sylius_test_html_attribute')->getCallable()("confirm-button")]]);
        yield "
                        </form>
                    </div>
                </div>
            </div>
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
        return "@SyliusAdmin/taxon/sections/tree/actions/dropdown/delete.html.twig";
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
        return array (  120 => 31,  116 => 30,  111 => 28,  106 => 26,  100 => 23,  89 => 19,  85 => 18,  79 => 15,  75 => 14,  70 => 12,  66 => 11,  58 => 6,  55 => 5,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Rendered with \\Sylius\\Bundle\\AdminBundle\\Twig\\Component\\Taxon\\DeleteComponent #}

{% import '@SyliusAdmin/shared/helper/button.html.twig' as button %}
{% set id = taxon_id|default('__TAXON_ID__') %}

<div {{ attributes.defaults(stimulus_controller('@sylius/admin-bundle/delete-taxon')) }}>
    <button
        class=\"dropdown-item\"
        data-action=\"live#action:prevent\"
        data-live-action-param=\"delete\"
        data-live-taxon-id-param=\"{{ id }}\"
        {{ sylius_test_html_attribute('delete') }}
    >
        {{ ux_icon('tabler:trash', { class: 'icon dropdown-item-icon icon-tabler icon-tabler-settings' }) }}
        {{ 'sylius.ui.delete'|trans }}
    </button>

    <div {{ stimulus_target('@sylius/admin-bundle/delete-taxon', 'parent') }}>
        <div class=\"modal fade\" id=\"delete-modal-{{ id }}\" tabindex=\"-1\" aria-hidden=\"true\" {{ stimulus_target('@sylius/admin-bundle/delete-taxon', 'modal') }} {{ sylius_test_html_attribute('delete-modal') }}>
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h1 class=\"modal-title py-5\">{{ 'sylius.ui.are_your_sure_you_want_to_perform_this_action'|trans }}</h1>
                    </div>
                    <div class=\"modal-footer\">
                        <form action=\"{{ path('sylius_admin_taxon_delete', {id: id}) }}\" method=\"post\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_csrf_token\" {{ stimulus_target('@sylius/admin-bundle/delete-taxon', 'csrfToken') }}/>

                            {{ button.default({ text: 'sylius.ui.cancel'|trans, attr: 'data-bs-dismiss=modal' }) }}
                            {{ button.default({ text: 'sylius.ui.delete'|trans, type: 'submit', class: 'btn-danger', attr: sylius_test_html_attribute('confirm-button') }) }}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "@SyliusAdmin/taxon/sections/tree/actions/dropdown/delete.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/taxon/sections/tree/actions/dropdown/delete.html.twig");
    }
}
