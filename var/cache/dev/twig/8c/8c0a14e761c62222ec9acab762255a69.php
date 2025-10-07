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

/* @SyliusAdmin/product/form/sections/attributes/list/item.html.twig */
class __TwigTemplate_764cda5eb9446d6209a471dfbdb7694c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/attributes/list/item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/attributes/list/item.html.twig"));

        // line 1
        $context["product_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "product_attributes", [], "any", false, false, false, 1);
        // line 2
        yield "
<div class=\"col-12 col-sm-4\">
    <div class=\"border-end\">
        <div id=\"product_attribute_tabs\" class=\"list-group list-group-flush\" role=\"tablist\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["product_attributes"]) || array_key_exists("product_attributes", $context) ? $context["product_attributes"] : (function () { throw new RuntimeError('Variable "product_attributes" does not exist.', 6, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["product_attribute_code"] => $context["product_attribute_value"]) {
            // line 7
            yield "                ";
            $context["product_attribute_name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["product_attribute_value"]), "vars", [], "any", false, false, false, 7), "data", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7);
            // line 8
            yield "                <div
                    class=\"py-2 cursor-pointer list-group-item list-group-item-action ";
            // line 9
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield "\"
                    ";
            // line 10
            yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("@sylius/admin-bundle/tabs-errors", "tab");
            yield "
                    data-bs-toggle=\"tab\"
                    data-bs-target=\"#";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["product_attribute_code"], "html", null, true);
            yield "\"
                    aria-selected=\"";
            // line 13
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\"
                    role=\"tab\"
                    ";
            // line 15
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("attribute-tab", (isset($context["product_attribute_name"]) || array_key_exists("product_attribute_name", $context) ? $context["product_attribute_name"] : (function () { throw new RuntimeError('Variable "product_attribute_name" does not exist.', 15, $this->source); })()));
            yield "
                >
                    <div class=\"d-flex justify-content-between align-items-center\">
                        ";
            // line 18
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("item", ["product_attribute_name" => (isset($context["product_attribute_name"]) || array_key_exists("product_attribute_name", $context) ? $context["product_attribute_name"] : (function () { throw new RuntimeError('Variable "product_attribute_name" does not exist.', 18, $this->source); })()), "product_attribute_code" => $context["product_attribute_code"]], $context, false);
            // line 19
            yield "                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['product_attribute_code'], $context['product_attribute_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "        </div>
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
        return "@SyliusAdmin/product/form/sections/attributes/list/item.html.twig";
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
        return array (  124 => 22,  108 => 19,  105 => 18,  99 => 15,  94 => 13,  90 => 12,  85 => 10,  79 => 9,  76 => 8,  73 => 7,  56 => 6,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set product_attributes = hookable_metadata.context.product_attributes %}

<div class=\"col-12 col-sm-4\">
    <div class=\"border-end\">
        <div id=\"product_attribute_tabs\" class=\"list-group list-group-flush\" role=\"tablist\">
            {% for product_attribute_code, product_attribute_value in product_attributes %}
                {% set product_attribute_name = (product_attribute_value|first).vars.data.name %}
                <div
                    class=\"py-2 cursor-pointer list-group-item list-group-item-action {% if loop.first %}active{% endif %}\"
                    {{ stimulus_target('@sylius/admin-bundle/tabs-errors', 'tab') }}
                    data-bs-toggle=\"tab\"
                    data-bs-target=\"#{{ product_attribute_code }}\"
                    aria-selected=\"{{ loop.first ? 'true' : 'false' }}\"
                    role=\"tab\"
                    {{ sylius_test_html_attribute('attribute-tab', product_attribute_name) }}
                >
                    <div class=\"d-flex justify-content-between align-items-center\">
                        {% hook 'item' with { product_attribute_name, product_attribute_code } %}
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
", "@SyliusAdmin/product/form/sections/attributes/list/item.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/form/sections/attributes/list/item.html.twig");
    }
}
