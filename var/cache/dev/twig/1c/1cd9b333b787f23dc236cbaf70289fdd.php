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

/* @SyliusAdmin/taxon/sections/tree/actions/dropdown/move_down.html.twig */
class __TwigTemplate_bdffa14eff8874d11a4d0d1db554f41a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/taxon/sections/tree/actions/dropdown/move_down.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/taxon/sections/tree/actions/dropdown/move_down.html.twig"));

        // line 1
        yield "<li>
    <button class=\"dropdown-item\"
            data-action=\"live#action:prevent\"
            data-live-action-param=\"moveDown\"
            data-live-taxon-id-param=\"__TAXON_ID__\"
        ";
        // line 6
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("move-down");
        yield "
    >
        ";
        // line 8
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:arrow-down", ["class" => "icon dropdown-item-icon icon-tabler icon-tabler-settings"]);
        yield "
        ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.move_down"), "html", null, true);
        yield "
    </button>
</li>
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
        return "@SyliusAdmin/taxon/sections/tree/actions/dropdown/move_down.html.twig";
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
        return array (  64 => 9,  60 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<li>
    <button class=\"dropdown-item\"
            data-action=\"live#action:prevent\"
            data-live-action-param=\"moveDown\"
            data-live-taxon-id-param=\"__TAXON_ID__\"
        {{ sylius_test_html_attribute('move-down') }}
    >
        {{ ux_icon('tabler:arrow-down', { class: 'icon dropdown-item-icon icon-tabler icon-tabler-settings' }) }}
        {{ 'sylius.ui.move_down'|trans }}
    </button>
</li>
", "@SyliusAdmin/taxon/sections/tree/actions/dropdown/move_down.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/taxon/sections/tree/actions/dropdown/move_down.html.twig");
    }
}
