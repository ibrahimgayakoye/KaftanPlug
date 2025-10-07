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

/* @SyliusAdmin/product/form/sections/translations.html.twig */
class __TwigTemplate_d8f4855c9d041435a7f847b345d5b318 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/translations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/translations.html.twig"));

        // line 1
        $macros["translations"] = $this->macros["translations"] = $this->load("@SyliusAdmin/shared/helper/translations.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["form"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "form", [], "any", false, false, false, 3);
        // line 4
        $context["prefixes"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "prefixes", [], "any", false, false, false, 4);
        // line 5
        yield "
<div class=\"tab-pane ";
        // line 6
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "configuration", [], "any", false, true, false, 6), "active", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 6, $this->source); })()), "configuration", [], "any", false, false, false, 6), "active", [], "any", false, false, false, 6), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "show active";
        }
        yield "\" id=\"product-translations\" role=\"tabpanel\" tabindex=\"0\">
    <div class=\"card mb-3\">
        <div class=\"card-header\">
            <h2 class=\"card-title\">
                ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.translations"), "html", null, true);
        yield "
            </h2>
        </div>
        <div>
            ";
        // line 14
        yield $macros["translations"]->getTemplateForMacro("macro_with_hook", $context, 14, $this->getSourceContext())->macro_with_hook(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "translations", [], "any", false, false, false, 14), (isset($context["prefixes"]) || array_key_exists("prefixes", $context) ? $context["prefixes"] : (function () { throw new RuntimeError('Variable "prefixes" does not exist.', 14, $this->source); })()), null, ["accordion_id" => "product-translations", "accordion_flush" => true]]);
        yield "
        </div>
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
        return "@SyliusAdmin/product/form/sections/translations.html.twig";
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
        return array (  76 => 14,  69 => 10,  60 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/shared/helper/translations.html.twig' as translations %}

{% set form = hookable_metadata.context.form %}
{% set prefixes = hookable_metadata.prefixes %}

<div class=\"tab-pane {% if hookable_metadata.configuration.active|default(false) %}show active{% endif %}\" id=\"product-translations\" role=\"tabpanel\" tabindex=\"0\">
    <div class=\"card mb-3\">
        <div class=\"card-header\">
            <h2 class=\"card-title\">
                {{ 'sylius.ui.translations'|trans }}
            </h2>
        </div>
        <div>
            {{ translations.with_hook(form.translations, prefixes, null, {accordion_id: 'product-translations', accordion_flush: true}) }}
        </div>
    </div>
</div>
", "@SyliusAdmin/product/form/sections/translations.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/form/sections/translations.html.twig");
    }
}
