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

/* @SyliusAdmin/shared/crud/create/content/header/title_block/title.html.twig */
class __TwigTemplate_9d1b740f6f717f68b60e10c15e54a00c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/create/content/header/title_block/title.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/create/content/header/title_block/title.html.twig"));

        // line 1
        $macros["header"] = $this->macros["header"] = $this->load("@SyliusAdmin/shared/helper/header.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 3), "metadata", [], "any", true, true, false, 3) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 3), "configuration", [], "any", true, true, false, 3))) {
            // line 4
            yield "    ";
            $context["configuration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "configuration", [], "any", false, false, false, 4);
            // line 5
            yield "    ";
            $context["metadata"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 5, $this->source); })()), "context", [], "any", false, false, false, 5), "metadata", [], "any", false, false, false, 5);
            // line 6
            yield "
    ";
            // line 7
            $context["singular_name"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "configuration", [], "any", false, true, false, 7), "resource_name", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 7, $this->source); })()), "configuration", [], "any", false, false, false, 7), "resource_name", [], "any", false, false, false, 7), ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 7, $this->source); })()), "applicationName", [], "any", false, false, false, 7) . ".ui.") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context, "metadata", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7)))) : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 7, $this->source); })()), "applicationName", [], "any", false, false, false, 7) . ".ui.") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context, "metadata", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7))));
            // line 8
            yield "    ";
            $context["header"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "configuration", [], "any", false, true, false, 8), "header", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 8, $this->source); })()), "configuration", [], "any", false, false, false, 8), "header", [], "any", false, false, false, 8), null)) : (null));
        } else {
            // line 10
            yield "    ";
            $context["singular_name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 10, $this->source); })()), "configuration", [], "any", false, false, false, 10), "resource_name", [], "any", false, false, false, 10);
            // line 11
            yield "    ";
            $context["header"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 11, $this->source); })()), "configuration", [], "any", false, false, false, 11), "header", [], "any", false, false, false, 11);
        }
        // line 13
        yield "
<div class=\"col-12 col-md-6\">
    <div class=\"d-md-flex gap-2 align-items-center\">
        ";
        // line 16
        yield $macros["header"]->getTemplateForMacro("macro_h1", $context, 16, $this->getSourceContext())->macro_h1(...[(((($tmp =  !(null === (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 16, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 16, $this->source); })()))) : ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.new") . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["singular_name"]) || array_key_exists("singular_name", $context) ? $context["singular_name"] : (function () { throw new RuntimeError('Variable "singular_name" does not exist.', 16, $this->source); })())))))]);
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
        return "@SyliusAdmin/shared/crud/create/content/header/title_block/title.html.twig";
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
        return array (  82 => 16,  77 => 13,  73 => 11,  70 => 10,  66 => 8,  64 => 7,  61 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/shared/helper/header.html.twig' as header %}

{% if hookable_metadata.context.metadata is defined and hookable_metadata.context.configuration is defined %}
    {% set configuration = hookable_metadata.context.configuration %}
    {% set metadata = hookable_metadata.context.metadata %}

    {% set singular_name = hookable_metadata.configuration.resource_name|default(metadata.applicationName ~ '.ui.' ~ _context.metadata.name) %}
    {% set header = hookable_metadata.configuration.header|default(null) %}
{% else %}
    {% set singular_name = hookable_metadata.configuration.resource_name %}
    {% set header = hookable_metadata.configuration.header %}
{% endif %}

<div class=\"col-12 col-md-6\">
    <div class=\"d-md-flex gap-2 align-items-center\">
        {{ header.h1(header is not null ? header|trans : 'sylius.ui.new'|trans ~ ' ' ~ singular_name|trans) }}
    </div>
</div>
", "@SyliusAdmin/shared/crud/create/content/header/title_block/title.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/crud/create/content/header/title_block/title.html.twig");
    }
}
