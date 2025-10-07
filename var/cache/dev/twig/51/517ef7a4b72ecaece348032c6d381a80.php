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

/* @SyliusAdmin/product_variant/grid/action/update_positions.html.twig */
class __TwigTemplate_4b26d3a41389b4befe7303db7b381bb3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product_variant/grid/action/update_positions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product_variant/grid/action/update_positions.html.twig"));

        // line 1
        yield "<button class=\"btn primary\"
    ";
        // line 2
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("@sylius/admin-bundle/save-positions", ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_product_variants_update_position"), "csrfToken" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("update-product-variant-position"), "inputSelector" => ".sylius-product-variant-position", "dataKey" => "productVariants"]);
        // line 7
        yield "
    ";
        // line 8
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("@sylius/admin-bundle/save-positions", "submit");
        yield "
    ";
        // line 9
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("save-configuration-button");
        yield "
>
        ";
        // line 11
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon(((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 11, $this->source); })()), "icon", [], "any", false, false, false, 11), "tabler:check")) : ("tabler:check")), ["class" => "icon dropdown-item-icon"]);
        yield "
        ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.save_positions"), "html", null, true);
        yield "
</button>
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
        return "@SyliusAdmin/product_variant/grid/action/update_positions.html.twig";
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
        return array (  69 => 12,  65 => 11,  60 => 9,  56 => 8,  53 => 7,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<button class=\"btn primary\"
    {{ stimulus_controller('@sylius/admin-bundle/save-positions', {
        url: path('sylius_admin_ajax_product_variants_update_position'),
        csrfToken: csrf_token('update-product-variant-position'),
        inputSelector: '.sylius-product-variant-position',
        dataKey: 'productVariants',
    }) }}
    {{ stimulus_action('@sylius/admin-bundle/save-positions', 'submit') }}
    {{ sylius_test_html_attribute('save-configuration-button') }}
>
        {{ ux_icon(action.icon|default('tabler:check'), {'class': 'icon dropdown-item-icon' }) }}
        {{ 'sylius.ui.save_positions'|trans }}
</button>
", "@SyliusAdmin/product_variant/grid/action/update_positions.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product_variant/grid/action/update_positions.html.twig");
    }
}
