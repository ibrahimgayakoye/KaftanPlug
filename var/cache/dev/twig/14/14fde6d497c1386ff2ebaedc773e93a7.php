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

/* @SyliusShop/shared/macro/navigation_buttons.html.twig */
class __TwigTemplate_1338f3060a3665656d304e4e4e2734a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/macro/navigation_buttons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/macro/navigation_buttons.html.twig"));

        // line 11
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_default($back_text = null, $back_link = null, $can_submit = true, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "back_text" => $back_text,
            "back_link" => $back_link,
            "can_submit" => $can_submit,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "default"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "default"));

            // line 2
            yield "    ";
            $macros["buttons"] = $this->load("@SyliusShop/shared/buttons.html.twig", 2)->unwrap();
            // line 3
            yield "
    <div class=\"d-flex justify-content-between flex-column flex-sm-row gap-2\">
        ";
            // line 5
            yield $macros["buttons"]->getTemplateForMacro("macro_default", $context, 5, $this->getSourceContext())->macro_default(...[(isset($context["back_link"]) || array_key_exists("back_link", $context) ? $context["back_link"] : (function () { throw new RuntimeError('Variable "back_link" does not exist.', 5, $this->source); })()), (isset($context["back_text"]) || array_key_exists("back_text", $context) ? $context["back_text"] : (function () { throw new RuntimeError('Variable "back_text" does not exist.', 5, $this->source); })()), null, "tabler:chevron-left", "btn-light btn-icon"]);
            yield "
        <button type=\"submit\" class=\"btn btn-primary btn-icon";
            // line 6
            if ((($tmp =  !(isset($context["can_submit"]) || array_key_exists("can_submit", $context) ? $context["can_submit"] : (function () { throw new RuntimeError('Variable "can_submit" does not exist.', 6, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " disabled";
            }
            yield "\"";
            if ((($tmp =  !(isset($context["can_submit"]) || array_key_exists("can_submit", $context) ? $context["can_submit"] : (function () { throw new RuntimeError('Variable "can_submit" does not exist.', 6, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " disabled";
            }
            yield " ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("next-step");
            yield ">
            ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.next"), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:chevron-right", ["class" => "icon icon-sm"]);
            yield "
        </button>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 12
    public function macro_complete($confirm_text = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "confirm_text" => $confirm_text,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "complete"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "complete"));

            // line 13
            yield "    ";
            $macros["buttons"] = $this->load("@SyliusShop/shared/buttons.html.twig", 13)->unwrap();
            // line 14
            yield "
    <div class=\"text-center\">
        ";
            // line 16
            yield $macros["buttons"]->getTemplateForMacro("macro_submit", $context, 16, $this->getSourceContext())->macro_submit(...[(isset($context["confirm_text"]) || array_key_exists("confirm_text", $context) ? $context["confirm_text"] : (function () { throw new RuntimeError('Variable "confirm_text" does not exist.', 16, $this->source); })()), "confirmation-button", null, "btn-primary"]);
            yield "
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusShop/shared/macro/navigation_buttons.html.twig";
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
        return array (  146 => 16,  142 => 14,  139 => 13,  121 => 12,  103 => 7,  91 => 6,  87 => 5,  83 => 3,  80 => 2,  60 => 1,  48 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro default(back_text, back_link, can_submit = true) %}
    {% import '@SyliusShop/shared/buttons.html.twig' as buttons %}

    <div class=\"d-flex justify-content-between flex-column flex-sm-row gap-2\">
        {{ buttons.default(back_link, back_text, null, 'tabler:chevron-left', 'btn-light btn-icon') }}
        <button type=\"submit\" class=\"btn btn-primary btn-icon{% if not can_submit %} disabled{% endif %}\"{% if not can_submit %} disabled{% endif %} {{ sylius_test_html_attribute('next-step') }}>
            {{ 'sylius.ui.next'|trans }} {{ ux_icon('tabler:chevron-right', {'class': 'icon icon-sm'}) }}
        </button>
    </div>
{% endmacro %}

{% macro complete(confirm_text) %}
    {% import '@SyliusShop/shared/buttons.html.twig' as buttons %}

    <div class=\"text-center\">
        {{ buttons.submit(confirm_text, 'confirmation-button', null, 'btn-primary') }}
    </div>
{% endmacro %}
", "@SyliusShop/shared/macro/navigation_buttons.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/macro/navigation_buttons.html.twig");
    }
}
