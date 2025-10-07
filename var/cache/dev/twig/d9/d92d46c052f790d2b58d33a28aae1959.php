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

/* @SyliusAdmin/product/show/content/page_body/attributes/translatable/head/name.html.twig */
class __TwigTemplate_5c5d08090995870d26264a0ac4885f15 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/attributes/translatable/head/name.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/attributes/translatable/head/name.html.twig"));

        // line 1
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 1), "locale_code", [], "any", true, true, false, 1)) {
            // line 2
            yield "    ";
            $context["locale_code"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "locale_code", [], "any", false, false, false, 2);
            // line 3
            yield "    ";
            $context["loop"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "loop", [], "any", false, false, false, 3);
            // line 4
            yield "
<button class=\"accordion-button";
            // line 5
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 5, $this->source); })()), "first", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " collapsed";
            }
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#translation-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locale_code"]) || array_key_exists("locale_code", $context) ? $context["locale_code"] : (function () { throw new RuntimeError('Variable "locale_code" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "-attributes\" aria-expanded=\"";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 5, $this->source); })()), "first", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "true";
            } else {
                yield "false";
            }
            yield "\" aria-controls=\"translation-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locale_code"]) || array_key_exists("locale_code", $context) ? $context["locale_code"] : (function () { throw new RuntimeError('Variable "locale_code" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "\">
    <span>
        ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\Bundle\LocaleBundle\Twig\LocaleExtension']->convertCodeToName((isset($context["locale_code"]) || array_key_exists("locale_code", $context) ? $context["locale_code"] : (function () { throw new RuntimeError('Variable "locale_code" does not exist.', 7, $this->source); })())), "html", null, true);
            yield "
    </span>
    <span class=\"accordion-button-toggle\">
        ";
            // line 10
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:chevron-down");
            yield "
    </span>
</button>
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
        return "@SyliusAdmin/product/show/content/page_body/attributes/translatable/head/name.html.twig";
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
        return array (  82 => 10,  76 => 7,  59 => 5,  56 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if hookable_metadata.context.locale_code is defined %}
    {% set locale_code = hookable_metadata.context.locale_code %}
    {% set loop = hookable_metadata.context.loop %}

<button class=\"accordion-button{% if not loop.first %} collapsed{% endif %}\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#translation-{{ locale_code }}-attributes\" aria-expanded=\"{% if loop.first %}true{% else %}false{% endif %}\" aria-controls=\"translation-{{ locale_code }}\">
    <span>
        {{ locale_code|sylius_locale_name }}
    </span>
    <span class=\"accordion-button-toggle\">
        {{ ux_icon('tabler:chevron-down') }}
    </span>
</button>
{% endif %}
", "@SyliusAdmin/product/show/content/page_body/attributes/translatable/head/name.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/show/content/page_body/attributes/translatable/head/name.html.twig");
    }
}
