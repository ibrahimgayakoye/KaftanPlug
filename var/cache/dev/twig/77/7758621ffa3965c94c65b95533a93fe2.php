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

/* @SyliusAdmin/product/show/content/page_body/attributes/translatable.html.twig */
class __TwigTemplate_b6184e6650c1ba08a6845e668b214d5d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/attributes/translatable.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/attributes/translatable.html.twig"));

        // line 1
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 1), "locale_code", [], "any", true, true, false, 1)) {
            // line 2
            yield "    ";
            $context["locale_code"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "locale_code", [], "any", false, false, false, 2);
            // line 3
            yield "    ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "attributes", [], "any", false, false, false, 3);
            // line 4
            yield "    ";
            $context["loop"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "loop", [], "any", false, false, false, 4);
            // line 5
            yield "
    <div id=\"translation-";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locale_code"]) || array_key_exists("locale_code", $context) ? $context["locale_code"] : (function () { throw new RuntimeError('Variable "locale_code" does not exist.', 6, $this->source); })()), "html", null, true);
            yield "-attributes\" class=\"accordion-collapse collapse ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 6, $this->source); })()), "first", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "show";
            }
            yield "\" data-bs-parent=\"#attribute-translations\">
        <div class=\"accordion-body bg-gray-100\">
            <div class=\"card mb-3 mx-md-5\">
                <div class=\"card-header\">
                    <div class=\"card-title\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.content"), "html", null, true);
            yield "</div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\" ";
            // line 13
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("attribute-with-locale", Twig\Extension\CoreExtension::sprintf("%s", (isset($context["locale_code"]) || array_key_exists("locale_code", $context) ? $context["locale_code"] : (function () { throw new RuntimeError('Variable "locale_code" does not exist.', 13, $this->source); })())));
            yield ">
                        ";
            // line 14
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("translatable", ["attributes" => (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 14, $this->source); })()), "locale_code" => (isset($context["locale_code"]) || array_key_exists("locale_code", $context) ? $context["locale_code"] : (function () { throw new RuntimeError('Variable "locale_code" does not exist.', 14, $this->source); })())], $context, false);
            // line 15
            yield "                    </div>
                </div>
            </div>
        </div>
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
        return "@SyliusAdmin/product/show/content/page_body/attributes/translatable.html.twig";
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
        return array (  86 => 15,  83 => 14,  79 => 13,  73 => 10,  62 => 6,  59 => 5,  56 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if hookable_metadata.context.locale_code is defined %}
    {% set locale_code = hookable_metadata.context.locale_code %}
    {% set attributes = hookable_metadata.context.attributes %}
    {% set loop = hookable_metadata.context.loop %}

    <div id=\"translation-{{ locale_code }}-attributes\" class=\"accordion-collapse collapse {% if loop.first %}show{% endif %}\" data-bs-parent=\"#attribute-translations\">
        <div class=\"accordion-body bg-gray-100\">
            <div class=\"card mb-3 mx-md-5\">
                <div class=\"card-header\">
                    <div class=\"card-title\">{{ 'sylius.ui.content'|trans }}</div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\" {{ sylius_test_html_attribute('attribute-with-locale', '%s'|format(locale_code)) }}>
                        {% hook 'translatable' with { 'attributes': attributes, locale_code } %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endif %}
", "@SyliusAdmin/product/show/content/page_body/attributes/translatable.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/show/content/page_body/attributes/translatable.html.twig");
    }
}
