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

/* @SyliusAdmin/shared/crud/index/content/grid/no_results/action.html.twig */
class __TwigTemplate_e9aeedab328d944127ba8e49f7c0c5ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/index/content/grid/no_results/action.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/index/content/grid/no_results/action.html.twig"));

        // line 1
        if ((CoreExtension::getAttribute($this->env, $this->source, $context, "route", [], "any", true, true, false, 1) && ( !CoreExtension::getAttribute($this->env, $this->source, $context, "hidden", [], "any", true, true, false, 1) || (CoreExtension::getAttribute($this->env, $this->source, $context, "hidden", [], "any", false, false, false, 1) == false)))) {
            // line 2
            yield "    <div class=\"empty-action\">
        <a href=\"";
            // line 3
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context, "route", [], "any", false, false, false, 3));
            yield "\" class=\"btn btn-primary\">
            ";
            // line 4
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon(((CoreExtension::getAttribute($this->env, $this->source, $context, "icon", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context, "icon", [], "any", false, false, false, 4), "tabler:plus")) : ("tabler:plus")));
            yield "
            ";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, $context, "translation_key", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context, "translation_key", [], "any", false, false, false, 5), "sylius.ui.add_new_entry")) : ("sylius.ui.add_new_entry"))), "html", null, true);
            yield "
        </a>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusAdmin/shared/crud/index/content/grid/no_results/action.html.twig";
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
        return array (  61 => 5,  57 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if _context.route is defined and (_context.hidden is not defined or _context.hidden == false) %}
    <div class=\"empty-action\">
        <a href=\"{{ path(_context.route) }}\" class=\"btn btn-primary\">
            {{ ux_icon(_context.icon|default('tabler:plus')) }}
            {{ _context.translation_key|default('sylius.ui.add_new_entry')|trans }}
        </a>
    </div>
{% endif %}
", "@SyliusAdmin/shared/crud/index/content/grid/no_results/action.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/crud/index/content/grid/no_results/action.html.twig");
    }
}
