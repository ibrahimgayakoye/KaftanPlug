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

/* @SyliusAdmin/customer/show/content/sections/general/email_verified.html.twig */
class __TwigTemplate_be099ea3c4a3c30207a4b8c253336c03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/customer/show/content/sections/general/email_verified.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/customer/show/content/sections/general/email_verified.html.twig"));

        // line 1
        $context["user"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 1), "user", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "user", [], "any", false, false, false, 1), null)) : (null));
        // line 2
        yield "
<div class=\"row\">
    <div class=\"col-12 col-md-4 fw-bold\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.email_verified"), "html", null, true);
        yield "</div>
    <div class=\"col-12 col-md-8\" ";
        // line 5
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("customer-verified-email");
        yield ">
        <span>
            ";
        // line 7
        if ((((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()) != null) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "verifiedAt", [], "any", false, false, false, 7) != null))) {
            // line 8
            yield "                ";
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:check", ["class" => "icon text-green"]);
            yield "
            ";
        } else {
            // line 10
            yield "                ";
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:x", ["class" => "icon icon-sm text-secondary"]);
            yield "
            ";
        }
        // line 12
        yield "        </span>
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
        return "@SyliusAdmin/customer/show/content/sections/general/email_verified.html.twig";
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
        return array (  77 => 12,  71 => 10,  65 => 8,  63 => 7,  58 => 5,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set user = hookable_metadata.context.user|default(null) %}

<div class=\"row\">
    <div class=\"col-12 col-md-4 fw-bold\">{{ 'sylius.ui.email_verified'|trans }}</div>
    <div class=\"col-12 col-md-8\" {{ sylius_test_html_attribute('customer-verified-email') }}>
        <span>
            {% if user != null and user.verifiedAt != null %}
                {{ ux_icon('tabler:check', {'class': 'icon text-green'}) }}
            {% else %}
                {{ ux_icon('tabler:x', {'class': 'icon icon-sm text-secondary'}) }}
            {% endif %}
        </span>
    </div>
</div>
", "@SyliusAdmin/customer/show/content/sections/general/email_verified.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/customer/show/content/sections/general/email_verified.html.twig");
    }
}
