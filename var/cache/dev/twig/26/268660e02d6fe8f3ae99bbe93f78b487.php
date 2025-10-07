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

/* @SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/header/accordion_button.html.twig */
class __TwigTemplate_6e114d6d75a72bd4ecde862e1531db99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/header/accordion_button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/header/accordion_button.html.twig"));

        // line 1
        $context["inner_payment_method"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "inner_payment_method", [], "any", false, false, false, 1);
        // line 2
        $context["payment_method_accordion_id"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "payment_method_accordion_id", [], "any", false, false, false, 2);
        // line 3
        yield "
";
        // line 4
        $context["method_image"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inner_payment_method"]) || array_key_exists("inner_payment_method", $context) ? $context["inner_payment_method"] : (function () { throw new RuntimeError('Variable "inner_payment_method" does not exist.', 4, $this->source); })()), "image", [], "any", false, false, false, 4), "svg", [], "any", false, false, false, 4);
        // line 5
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["inner_payment_method"]) || array_key_exists("inner_payment_method", $context) ? $context["inner_payment_method"] : (function () { throw new RuntimeError('Variable "inner_payment_method" does not exist.', 5, $this->source); })()), "customizeMethodImage", [], "any", false, false, false, 5) != null) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inner_payment_method"]) || array_key_exists("inner_payment_method", $context) ? $context["inner_payment_method"] : (function () { throw new RuntimeError('Variable "inner_payment_method" does not exist.', 5, $this->source); })()), "customizeMethodImage", [], "any", false, false, false, 5), "path", [], "any", false, false, false, 5) != null))) {
            // line 6
            yield "    ";
            $context["method_image"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inner_payment_method"]) || array_key_exists("inner_payment_method", $context) ? $context["inner_payment_method"] : (function () { throw new RuntimeError('Variable "inner_payment_method" does not exist.', 6, $this->source); })()), "customizeMethodImage", [], "any", false, false, false, 6), "path", [], "any", false, false, false, 6), "sylius_original");
        }
        // line 8
        yield "
";
        // line 9
        $context["methods_loop"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 9, $this->source); })()), "context", [], "any", false, false, false, 9), "methods_loop", [], "any", false, false, false, 9);
        // line 10
        yield "
<div class=\"col\">
    <button
        class=\"accordion-button mollie-accordion ";
        // line 13
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["methods_loop"]) || array_key_exists("methods_loop", $context) ? $context["methods_loop"] : (function () { throw new RuntimeError('Variable "methods_loop" does not exist.', 13, $this->source); })()), "first", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " collapsed";
        }
        yield "\"
        type=\"button\"
        data-bs-toggle=\"collapse\"
        data-bs-target=\"#";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["payment_method_accordion_id"]) || array_key_exists("payment_method_accordion_id", $context) ? $context["payment_method_accordion_id"] : (function () { throw new RuntimeError('Variable "payment_method_accordion_id" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "\"
        aria-expanded=\"";
        // line 17
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["methods_loop"]) || array_key_exists("methods_loop", $context) ? $context["methods_loop"] : (function () { throw new RuntimeError('Variable "methods_loop" does not exist.', 17, $this->source); })()), "first", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "true";
        } else {
            yield "false";
        }
        yield "\"
        aria-controls=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["payment_method_accordion_id"]) || array_key_exists("payment_method_accordion_id", $context) ? $context["payment_method_accordion_id"] : (function () { throw new RuntimeError('Variable "payment_method_accordion_id" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "\"
    >
        <img class=\"ui mini avatar image\" src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["method_image"]) || array_key_exists("method_image", $context) ? $context["method_image"] : (function () { throw new RuntimeError('Variable "method_image" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "\" />
        <span class=\"ms-3\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inner_payment_method"]) || array_key_exists("inner_payment_method", $context) ? $context["inner_payment_method"] : (function () { throw new RuntimeError('Variable "inner_payment_method" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        yield "</span>
    </button>
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
        return "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/header/accordion_button.html.twig";
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
        return array (  102 => 21,  98 => 20,  93 => 18,  85 => 17,  81 => 16,  73 => 13,  68 => 10,  66 => 9,  63 => 8,  59 => 6,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set inner_payment_method = hookable_metadata.context.inner_payment_method %}
{% set payment_method_accordion_id = hookable_metadata.context.payment_method_accordion_id %}

{% set method_image = inner_payment_method.image.svg %}
{% if inner_payment_method.customizeMethodImage != null and inner_payment_method.customizeMethodImage.path != null %}
    {% set method_image = inner_payment_method.customizeMethodImage.path|imagine_filter('sylius_original') %}
{% endif %}

{% set methods_loop = hookable_metadata.context.methods_loop %}

<div class=\"col\">
    <button
        class=\"accordion-button mollie-accordion {% if not methods_loop.first %} collapsed{% endif %}\"
        type=\"button\"
        data-bs-toggle=\"collapse\"
        data-bs-target=\"#{{ payment_method_accordion_id }}\"
        aria-expanded=\"{% if methods_loop.first %}true{% else %}false{% endif %}\"
        aria-controls=\"{{ payment_method_accordion_id }}\"
    >
        <img class=\"ui mini avatar image\" src=\"{{ method_image }}\" />
        <span class=\"ms-3\">{{ inner_payment_method.name }}</span>
    </button>
</div>
", "@SyliusMolliePlugin/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/header/accordion_button.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/payment_method/form/sections/gateway_configuration/mollie_payment_methods/body/accordion/item/header/accordion_button.html.twig");
    }
}
