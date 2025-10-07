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

/* @SyliusAdmin/product/form/sections/taxonomy/product_taxons.html.twig */
class __TwigTemplate_6a149b722b3cf773d0f7e0d5085f5bb0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/taxonomy/product_taxons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/taxonomy/product_taxons.html.twig"));

        // line 1
        $context["product_taxons_form"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), "productTaxons", [], "any", false, false, false, 1);
        // line 2
        yield "
<div ";
        // line 3
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-taxons");
        yield ">
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["product_taxons_form"]) || array_key_exists("product_taxons_form", $context) ? $context["product_taxons_form"] : (function () { throw new RuntimeError('Variable "product_taxons_form" does not exist.', 4, $this->source); })()), 'label');
        yield "
    <div ";
        // line 5
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("@sylius/admin-bundle/product-taxon-tree", ["treeData" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 5, $this->source); })()), "tree", [], "any", false, false, false, 5), "autoOpen" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookableMetadata"]) || array_key_exists("hookableMetadata", $context) ? $context["hookableMetadata"] : (function () { throw new RuntimeError('Variable "hookableMetadata" does not exist.', 5, $this->source); })()), "configuration", [], "any", false, false, false, 5), "auto_open", [], "any", false, false, false, 5)]);
        yield ">
        ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["product_taxons_form"]) || array_key_exists("product_taxons_form", $context) ? $context["product_taxons_form"] : (function () { throw new RuntimeError('Variable "product_taxons_form" does not exist.', 6, $this->source); })()), 'widget', ["attr" => ["data-sylius--admin-bundle--product-taxon-tree-target" => "productTaxons"]]);
        yield "

        <div class=\"pb-5\">
            <div class=\"input-group input-group-flat mb-4\">
                <input class=\"form-control\" placeholder=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.filter"), "html", null, true);
        yield "\" type=\"text\"
                    ";
        // line 11
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("@sylius/admin-bundle/product-taxon-tree", "filter");
        yield "
                    ";
        // line 12
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("@sylius/admin-bundle/product-taxon-tree", "filter", "input");
        yield "
                    ";
        // line 13
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-taxons-filter");
        yield "
                />
                <span class=\"input-group-text\">
                        <a class=\"input-group-link link-reset\" type=\"button\" ";
        // line 16
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("@sylius/admin-bundle/product-taxon-tree", "clearFilter");
        yield " >";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.clear"), "html", null, true);
        yield "</a>
                    </span>
            </div>
            <div class=\"d-flex flex-column gap-1\">
                <div class=\"d-flex gap-3 align-items-center\">
                    <a class=\"d-flex align-items-center gap-1 text-nowrap link-reset fs-5\" type=\"button\" ";
        // line 21
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("@sylius/admin-bundle/product-taxon-tree", "checkAll");
        yield " ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-taxons-check-all");
        yield ">
                        ";
        // line 22
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:copy-check", ["class" => "icon m-0"]);
        yield "
                        ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.check_all"), "html", null, true);
        yield "
                    </a>
                    <a class=\"d-flex align-items-center gap-1 text-nowrap link-reset fs-5\" type=\"button\"  ";
        // line 25
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("@sylius/admin-bundle/product-taxon-tree", "uncheckAll");
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-taxons-uncheck-all");
        yield ">
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:copy-x", ["class" => "icon m-0"]);
        yield "
                        ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.uncheck_all"), "html", null, true);
        yield "
                    </a>
                </div>
                <div ";
        // line 30
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("@sylius/admin-bundle/product-taxon-tree", "tree");
        yield "></div>
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
        return "@SyliusAdmin/product/form/sections/taxonomy/product_taxons.html.twig";
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
        return array (  130 => 30,  124 => 27,  120 => 26,  115 => 25,  110 => 23,  106 => 22,  100 => 21,  90 => 16,  84 => 13,  80 => 12,  76 => 11,  72 => 10,  65 => 6,  61 => 5,  57 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set product_taxons_form = form.productTaxons %}

<div {{ sylius_test_html_attribute('product-taxons') }}>
    {{ form_label(product_taxons_form) }}
    <div {{ stimulus_controller('@sylius/admin-bundle/product-taxon-tree', {treeData: this.tree, autoOpen: hookableMetadata.configuration.auto_open}) }}>
        {{ form_widget(product_taxons_form, {attr: {'data-sylius--admin-bundle--product-taxon-tree-target': 'productTaxons'}}) }}

        <div class=\"pb-5\">
            <div class=\"input-group input-group-flat mb-4\">
                <input class=\"form-control\" placeholder=\"{{ 'sylius.ui.filter'|trans }}\" type=\"text\"
                    {{ stimulus_target('@sylius/admin-bundle/product-taxon-tree', 'filter') }}
                    {{ stimulus_action('@sylius/admin-bundle/product-taxon-tree', 'filter', 'input') }}
                    {{ sylius_test_html_attribute('product-taxons-filter') }}
                />
                <span class=\"input-group-text\">
                        <a class=\"input-group-link link-reset\" type=\"button\" {{ stimulus_action('@sylius/admin-bundle/product-taxon-tree', 'clearFilter') }} >{{ 'sylius.ui.clear'|trans }}</a>
                    </span>
            </div>
            <div class=\"d-flex flex-column gap-1\">
                <div class=\"d-flex gap-3 align-items-center\">
                    <a class=\"d-flex align-items-center gap-1 text-nowrap link-reset fs-5\" type=\"button\" {{ stimulus_action('@sylius/admin-bundle/product-taxon-tree', 'checkAll') }} {{ sylius_test_html_attribute('product-taxons-check-all') }}>
                        {{ ux_icon('tabler:copy-check', {'class': 'icon m-0'}) }}
                        {{ 'sylius.ui.check_all'|trans }}
                    </a>
                    <a class=\"d-flex align-items-center gap-1 text-nowrap link-reset fs-5\" type=\"button\"  {{ stimulus_action('@sylius/admin-bundle/product-taxon-tree', 'uncheckAll') }}{{ sylius_test_html_attribute('product-taxons-uncheck-all') }}>
                        {{ ux_icon('tabler:copy-x', {'class': 'icon m-0'}) }}
                        {{ 'sylius.ui.uncheck_all'|trans }}
                    </a>
                </div>
                <div {{ stimulus_target('@sylius/admin-bundle/product-taxon-tree', 'tree') }}></div>
            </div>
        </div>
    </div>
</div>
", "@SyliusAdmin/product/form/sections/taxonomy/product_taxons.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/form/sections/taxonomy/product_taxons.html.twig");
    }
}
