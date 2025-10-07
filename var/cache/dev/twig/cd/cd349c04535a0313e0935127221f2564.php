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

/* @SyliusAdmin/product/product_attribute_autocomplete.html.twig */
class __TwigTemplate_998f7ad32139113ee9ebd682bde01514 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/product_attribute_autocomplete.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/product_attribute_autocomplete.html.twig"));

        // line 1
        yield "<div ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield " class=\"d-grid\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("attribute-autocomplete");
        yield ">
    <input
        name=\"product_attributes\"
        data-model=\"selectedAttributeCodes\"
        ";
        // line 5
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("@sylius/admin-bundle/product-attribute-autocomplete", ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_entity_autocomplete", ["alias" => "sylius_admin_product_attribute", "extra_options" =>         // line 6
(isset($context["extra_options"]) || array_key_exists("extra_options", $context) ? $context["extra_options"] : (function () { throw new RuntimeError('Variable "extra_options" does not exist.', 6, $this->source); })())]), "selectedAttributeCodes" => Twig\Extension\CoreExtension::join(        // line 7
(isset($context["selected_attribute_codes"]) || array_key_exists("selected_attribute_codes", $context) ? $context["selected_attribute_codes"] : (function () { throw new RuntimeError('Variable "selected_attribute_codes" does not exist.', 7, $this->source); })()), ",")]);
        // line 8
        yield "
    />
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
        return "@SyliusAdmin/product/product_attribute_autocomplete.html.twig";
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
        return array (  62 => 8,  60 => 7,  59 => 6,  58 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div {{ attributes }} class=\"d-grid\" {{ sylius_test_html_attribute('attribute-autocomplete') }}>
    <input
        name=\"product_attributes\"
        data-model=\"selectedAttributeCodes\"
        {{ stimulus_controller('@sylius/admin-bundle/product-attribute-autocomplete', {
            url: path('sylius_admin_entity_autocomplete', { alias: 'sylius_admin_product_attribute', 'extra_options': extra_options }),
            selectedAttributeCodes: selected_attribute_codes|join(','),
        }) }}
    />
</div>
", "@SyliusAdmin/product/product_attribute_autocomplete.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/product_attribute_autocomplete.html.twig");
    }
}
