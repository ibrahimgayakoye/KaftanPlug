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

/* @SyliusMolliePlugin/admin/payment_method/version_notification.html.twig */
class __TwigTemplate_b00c7482ffdb008f534e4b169057fc06 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/version_notification.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/version_notification.html.twig"));

        // line 1
        yield "<div class=\"alert alert-warning fade show\" role=\"alert\">
    <div class=\"d-flex justify-content-between\">
        <div class=\"fw-bold\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.info"), "html", null, true);
        yield "</div>
        <span class=\"close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">
            ";
        // line 5
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:x");
        yield "
        </span>
    </div>
    <div>
        <p>
            ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.latest_version_info", ["{old_version}" => (isset($context["currentVersion"]) || array_key_exists("currentVersion", $context) ? $context["currentVersion"] : (function () { throw new RuntimeError('Variable "currentVersion" does not exist.', 10, $this->source); })()), "{latest_version}" => (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 10, $this->source); })())]), "html", null, true);
        yield "
            <a href=\"https://github.com/Sylius/MolliePlugin\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.update"), "html", null, true);
        yield "</a>
            ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.enjoy_latest_version"), "html", null, true);
        yield "
        </p>
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
        return "@SyliusMolliePlugin/admin/payment_method/version_notification.html.twig";
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
        return array (  73 => 12,  69 => 11,  65 => 10,  57 => 5,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"alert alert-warning fade show\" role=\"alert\">
    <div class=\"d-flex justify-content-between\">
        <div class=\"fw-bold\">{{ 'sylius_mollie.ui.info'|trans }}</div>
        <span class=\"close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">
            {{ ux_icon('tabler:x') }}
        </span>
    </div>
    <div>
        <p>
            {{ 'sylius_mollie.ui.latest_version_info'|trans({'{old_version}': currentVersion, '{latest_version}': latestVersion}) }}
            <a href=\"https://github.com/Sylius/MolliePlugin\">{{ 'sylius_mollie.ui.update'|trans }}</a>
            {{ 'sylius_mollie.ui.enjoy_latest_version'|trans }}
        </p>
    </div>
</div>
", "@SyliusMolliePlugin/admin/payment_method/version_notification.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/payment_method/version_notification.html.twig");
    }
}
