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

/* @SyliusAdmin/taxon/sections/tree.html.twig */
class __TwigTemplate_bd5809cd65be8d8e28f2297b2f0d7a0b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/taxon/sections/tree.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/taxon/sections/tree.html.twig"));

        // line 2
        yield "
<div ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 3, $this->source); })()), "defaults", [$this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("@sylius/admin-bundle/taxon-tree", ["autoOpen" => true, "treeData" => json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 3, $this->source); })()), "tree", [], "any", false, false, false, 3))])], "method", false, false, false, 3), "html", null, true);
        yield ">
    <div class=\"card mb-5\">
        <div data-loading>
            <div class=\"sylius-loader\">
                <img src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/admin/images/loader.svg", "admin"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.loading"), "html", null, true);
        yield "\"/>
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"d-none\" ";
        // line 11
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("@sylius/admin-bundle/taxon-tree", "itemPrototyp");
        yield ">
                <div class=\"d-flex justify-content-between infinite-tree-item\" ";
        // line 12
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("tree-taxon", "__TAXON_NAME__");
        yield ">
                    <div class=\"infinite-tree-node\">
                        <span class=\"infinite-tree-toggler\" data-infinite-tree-toggler></span>
                        <span class=\"infinite-tree-toggler infinite-tree-title\">__TAXON_NAME__</span>
                    </div>

                    ";
        // line 18
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("tree", [], $context, false);
        // line 19
        yield "
                </div>
            </div>
            <div ";
        // line 22
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("@sylius/admin-bundle/taxon-tree", "tree");
        yield " ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("tree-taxons");
        yield "></div>
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
        return "@SyliusAdmin/taxon/sections/tree.html.twig";
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
        return array (  88 => 22,  83 => 19,  80 => 18,  71 => 12,  67 => 11,  58 => 7,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Rendered with \\Sylius\\Bundle\\AdminBundle\\Twig\\Component\\Taxon\\TreeComponent #}

<div {{ attributes.defaults(stimulus_controller('@sylius/admin-bundle/taxon-tree', {autoOpen: true, treeData: this.tree|json_encode})) }}>
    <div class=\"card mb-5\">
        <div data-loading>
            <div class=\"sylius-loader\">
                <img src=\"{{ asset('build/admin/images/loader.svg', 'admin') }}\" alt=\"{{ 'sylius.ui.loading'|trans }}\"/>
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"d-none\" {{ stimulus_target('@sylius/admin-bundle/taxon-tree', 'itemPrototyp') }}>
                <div class=\"d-flex justify-content-between infinite-tree-item\" {{ sylius_test_html_attribute('tree-taxon', '__TAXON_NAME__') }}>
                    <div class=\"infinite-tree-node\">
                        <span class=\"infinite-tree-toggler\" data-infinite-tree-toggler></span>
                        <span class=\"infinite-tree-toggler infinite-tree-title\">__TAXON_NAME__</span>
                    </div>

                    {% hook 'tree' %}

                </div>
            </div>
            <div {{ stimulus_target('@sylius/admin-bundle/taxon-tree', 'tree') }} {{ sylius_test_html_attribute('tree-taxons') }}></div>
        </div>
    </div>
</div>
", "@SyliusAdmin/taxon/sections/tree.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/taxon/sections/tree.html.twig");
    }
}
