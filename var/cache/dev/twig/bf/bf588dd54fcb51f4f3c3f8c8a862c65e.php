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

/* @SyliusAdmin/shared/crud/common/sidebar/search.html.twig */
class __TwigTemplate_c65f3e71eb2d2d82dbd11c7ffbb1123d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/common/sidebar/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/common/sidebar/search.html.twig"));

        // line 1
        yield "<div class=\"input-group ps-2 pt-2 pb-3 menu-search\">
    <button class=\"btn btn-sm\" type=\"button\" disabled data-menu-search-icon>";
        // line 2
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:search", ["class" => "icon mx-1"]);
        yield "</button>
    <button class=\"btn btn-sm btn-dark\" type=\"button\" data-menu-search-clear>";
        // line 3
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:x", ["class" => "icon mx-1"]);
        yield "</button>
    <input class=\"form-control form-control-sm text-white\" placeholder=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.search_menu"), "html", null, true);
        yield "...\" type=\"text\" data-menu-search>
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
        return "@SyliusAdmin/shared/crud/common/sidebar/search.html.twig";
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
        return array (  59 => 4,  55 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"input-group ps-2 pt-2 pb-3 menu-search\">
    <button class=\"btn btn-sm\" type=\"button\" disabled data-menu-search-icon>{{ ux_icon('tabler:search', {'class': 'icon mx-1'}) }}</button>
    <button class=\"btn btn-sm btn-dark\" type=\"button\" data-menu-search-clear>{{ ux_icon('tabler:x', {'class': 'icon mx-1'}) }}</button>
    <input class=\"form-control form-control-sm text-white\" placeholder=\"{{ 'sylius.ui.search_menu'|trans }}...\" type=\"text\" data-menu-search>
</div>
", "@SyliusAdmin/shared/crud/common/sidebar/search.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/crud/common/sidebar/search.html.twig");
    }
}
