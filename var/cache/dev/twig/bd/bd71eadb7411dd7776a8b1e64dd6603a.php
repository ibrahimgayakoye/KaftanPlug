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

/* @SyliusMolliePlugin/admin/payment_link/create/content/header/title_block/title.html.twig */
class __TwigTemplate_7ebb6bf3263a3b1f9c49a79f7cba5271 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_link/create/content/header/title_block/title.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_link/create/content/header/title_block/title.html.twig"));

        // line 1
        $macros["header"] = $this->macros["header"] = $this->load("@SyliusAdmin/shared/helper/header.html.twig", 1)->unwrap();
        // line 2
        yield "
<div class=\"col-12 col-md\">
    <div class=\"d-md-flex gap-2 align-items-center\">
        ";
        // line 5
        yield $macros["header"]->getTemplateForMacro("macro_h1", $context, 5, $this->getSourceContext())->macro_h1(...[$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.payment_link_generate"), "subheader" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.payment_link_generate_subtitle")]);
        yield "
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
        return "@SyliusMolliePlugin/admin/payment_link/create/content/header/title_block/title.html.twig";
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
        return array (  55 => 5,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/shared/helper/header.html.twig' as header %}

<div class=\"col-12 col-md\">
    <div class=\"d-md-flex gap-2 align-items-center\">
        {{ header.h1('sylius_mollie.ui.payment_link_generate'|trans, subheader: 'sylius_mollie.ui.payment_link_generate_subtitle'|trans ) }}
    </div>
</div>
", "@SyliusMolliePlugin/admin/payment_link/create/content/header/title_block/title.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/payment_link/create/content/header/title_block/title.html.twig");
    }
}
