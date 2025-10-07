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

/* @SyliusShop/shared/layout/base/header/navbar/menu.html.twig */
class __TwigTemplate_f9181f4983dcc9c696bf7ed4fa803abf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/layout/base/header/navbar/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/layout/base/header/navbar/menu.html.twig"));

        // line 1
        yield "<div class=\"w-100 border-bottom\">
    ";
        // line 2
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new RuntimeError('Variable "taxons" does not exist.', 2, $this->source); })())) > 0)) {
            // line 3
            yield "        <nav class=\"navbar offcanvas-lg offcanvas-start offcanvas-wide p-0\" id=\"navbarNav\" role=\"navigation\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxon_navigation_desktop"), "html", null, true);
            yield "\">
            <div class=\"offcanvas-header w-full\">
                <h1 class=\"offcanvas-title fs-5\">
                    ";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxons"), "html", null, true);
            yield "
                </h1>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" data-bs-target=\"#navbarNav\" aria-label=\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.close"), "html", null, true);
            yield "\"></button>
            </div>
            <div class=\"offcanvas-body justify-content-lg-center w-full py-0\">
                <div class=\"navbar-nav my-2 flex-column flex-lg-row gap-lg-4\" ";
            // line 11
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("menu");
            yield ">
                    ";
            // line 12
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("menu", ["taxons" => (isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new RuntimeError('Variable "taxons" does not exist.', 12, $this->source); })())], $context, false);
            // line 13
            yield "                </div>
            </div>
        </nav>
    ";
        }
        // line 17
        yield "</div>
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
        return "@SyliusShop/shared/layout/base/header/navbar/menu.html.twig";
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
        return array (  84 => 17,  78 => 13,  75 => 12,  71 => 11,  65 => 8,  60 => 6,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"w-100 border-bottom\">
    {% if taxons|length > 0 %}
        <nav class=\"navbar offcanvas-lg offcanvas-start offcanvas-wide p-0\" id=\"navbarNav\" role=\"navigation\" aria-label=\"{{ 'sylius.ui.taxon_navigation_desktop'|trans }}\">
            <div class=\"offcanvas-header w-full\">
                <h1 class=\"offcanvas-title fs-5\">
                    {{ 'sylius.ui.taxons'|trans }}
                </h1>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" data-bs-target=\"#navbarNav\" aria-label=\"{{ 'sylius.ui.close'|trans }}\"></button>
            </div>
            <div class=\"offcanvas-body justify-content-lg-center w-full py-0\">
                <div class=\"navbar-nav my-2 flex-column flex-lg-row gap-lg-4\" {{ sylius_test_html_attribute('menu') }}>
                    {% hook 'menu' with { taxons } %}
                </div>
            </div>
        </nav>
    {% endif %}
</div>
", "@SyliusShop/shared/layout/base/header/navbar/menu.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/layout/base/header/navbar/menu.html.twig");
    }
}
