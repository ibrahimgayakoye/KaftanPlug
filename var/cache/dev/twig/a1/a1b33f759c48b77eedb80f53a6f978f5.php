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

/* @SyliusAdmin/order/show/content/sections/items.html.twig */
class __TwigTemplate_8972ec632bdcd9730ec739c986d17fe9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/show/content/sections/items.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/show/content/sections/items.html.twig"));

        // line 1
        yield "<div class=\"card mb-3\" data-fullscreen-container=\"orders\">
    <div class=\"card-header\">
        <div class=\"card-title\">
            ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.items"), "html", null, true);
        yield "
        </div>
        <div class=\"card-actions btn-actions\">
            <button type=\"button\" class=\"btn-action\" data-fullscreen-btn=\"orders\" data-bs-toggle=\"tooltip\" data-bs-title=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.full_screen"), "html", null, true);
        yield "\">
                ";
        // line 8
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:maximize");
        yield "
            </button>
        </div>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-hover table-vcenter card-table\" ";
        // line 13
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("table-items");
        yield ">
            ";
        // line 14
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("items", [], $context, false);
        // line 15
        yield "        </table>
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
        return "@SyliusAdmin/order/show/content/sections/items.html.twig";
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
        return array (  78 => 15,  75 => 14,  71 => 13,  63 => 8,  59 => 7,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card mb-3\" data-fullscreen-container=\"orders\">
    <div class=\"card-header\">
        <div class=\"card-title\">
            {{ 'sylius.ui.items'|trans }}
        </div>
        <div class=\"card-actions btn-actions\">
            <button type=\"button\" class=\"btn-action\" data-fullscreen-btn=\"orders\" data-bs-toggle=\"tooltip\" data-bs-title=\"{{ 'sylius.ui.full_screen'|trans }}\">
                {{ ux_icon('tabler:maximize') }}
            </button>
        </div>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-hover table-vcenter card-table\" {{ sylius_test_html_attribute('table-items') }}>
            {% hook 'items' %}
        </table>
    </div>
</div>
", "@SyliusAdmin/order/show/content/sections/items.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/order/show/content/sections/items.html.twig");
    }
}
