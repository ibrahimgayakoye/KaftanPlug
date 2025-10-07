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

/* @SyliusAdmin/shared/crud/common/content/header/title_block/title.html.twig */
class __TwigTemplate_007cd2e73030b4e1e661d89d530cfbf0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/common/content/header/title_block/title.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/common/content/header/title_block/title.html.twig"));

        // line 1
        $macros["header"] = $this->macros["header"] = $this->load("@SyliusAdmin/shared/helper/header.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "has", ["metadata"], "method", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    ";
            $context["metadata"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "metadata", [], "any", false, false, false, 4);
            // line 5
            yield "    ";
            $context["header"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "configuration", [], "any", false, true, false, 5), "title", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 5, $this->source); })()), "configuration", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 5, $this->source); })()), "applicationName", [], "any", false, false, false, 5) . ".ui.") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 5, $this->source); })()), "pluralName", [], "any", false, false, false, 5)))) : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 5, $this->source); })()), "applicationName", [], "any", false, false, false, 5) . ".ui.") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 5, $this->source); })()), "pluralName", [], "any", false, false, false, 5))));
        } else {
            // line 7
            yield "    ";
            $context["header"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 7, $this->source); })()), "configuration", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7);
        }
        // line 9
        yield "
";
        // line 10
        $context["icon"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "configuration", [], "any", false, true, false, 10), "icon", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 10, $this->source); })()), "configuration", [], "any", false, false, false, 10), "icon", [], "any", false, false, false, 10), null)) : (null));
        // line 11
        $context["subheader"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "configuration", [], "any", false, true, false, 11), "subheader", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 11, $this->source); })()), "configuration", [], "any", false, false, false, 11), "subheader", [], "any", false, false, false, 11), null)) : (null));
        // line 12
        $context["test_attribute"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "configuration", [], "any", false, true, false, 12), "sylius_test_html_attribute", [], "any", true, true, false, 12)) ? ($this->env->getFunction('sylius_test_html_attribute')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 12, $this->source); })()), "configuration", [], "any", false, false, false, 12), "sylius_test_html_attribute", [], "any", false, false, false, 12))) : (null));
        // line 13
        yield "
<div class=\"col-12 col-md\" ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["test_attribute"]) || array_key_exists("test_attribute", $context) ? $context["test_attribute"] : (function () { throw new RuntimeError('Variable "test_attribute" does not exist.', 14, $this->source); })()), "html", null, true);
        yield ">
    <div class=\"d-md-flex gap-2 align-items-center\">
        ";
        // line 16
        yield $macros["header"]->getTemplateForMacro("macro_h1", $context, 16, $this->getSourceContext())->macro_h1(...[$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 16, $this->source); })())), (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 16, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["subheader"]) || array_key_exists("subheader", $context) ? $context["subheader"] : (function () { throw new RuntimeError('Variable "subheader" does not exist.', 16, $this->source); })()))]);
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
        return "@SyliusAdmin/shared/crud/common/content/header/title_block/title.html.twig";
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
        return array (  83 => 16,  78 => 14,  75 => 13,  73 => 12,  71 => 11,  69 => 10,  66 => 9,  62 => 7,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/shared/helper/header.html.twig' as header %}

{% if hookable_metadata.context.has(\"metadata\") %}
    {% set metadata = hookable_metadata.context.metadata %}
    {% set header = hookable_metadata.configuration.title|default(metadata.applicationName~'.ui.'~metadata.pluralName) %}
{% else %}
    {% set header = hookable_metadata.configuration.title %}
{% endif %}

{% set icon = hookable_metadata.configuration.icon|default(null) %}
{% set subheader = hookable_metadata.configuration.subheader|default(null) %}
{% set test_attribute = hookable_metadata.configuration.sylius_test_html_attribute is defined ? sylius_test_html_attribute(hookable_metadata.configuration.sylius_test_html_attribute) : null %}

<div class=\"col-12 col-md\" {{ test_attribute }}>
    <div class=\"d-md-flex gap-2 align-items-center\">
        {{ header.h1(header|trans, icon, subheader|trans) }}
    </div>
</div>
", "@SyliusAdmin/shared/crud/common/content/header/title_block/title.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/crud/common/content/header/title_block/title.html.twig");
    }
}
