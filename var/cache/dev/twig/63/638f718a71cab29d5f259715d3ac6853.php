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

/* @SyliusAdmin/product/form/sections/media/images.html.twig */
class __TwigTemplate_74b17206588999fd4a341482824d94ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/media/images.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/form/sections/media/images.html.twig"));

        // line 1
        $context["images"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "form", [], "any", false, false, false, 1), "images", [], "any", false, false, false, 1);
        // line 2
        $context["product"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "product", [], "any", false, false, false, 2);
        // line 3
        yield "
<div
    class=\"row\"
    ";
        // line 6
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("images");
        yield "
    ";
        // line 7
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("image-subforms");
        yield "
>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image_form"]) {
            // line 10
            yield "        <div
            class=\"col-12 col-md-6 row mb-4\"
            ";
            // line 12
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("image-subform");
            yield "
            ";
            // line 13
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("type", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image_form"], "type", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13));
            yield "
            ";
            // line 14
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("image-url", (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image_form"], "vars", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14), "path", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image_form"], "vars", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14), "path", [], "any", false, false, false, 14), "sylius_small")) : (null)));
            yield "
        >
            <div class=\"col-auto\">
                <div>
                    ";
            // line 18
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image_form"], "vars", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18), "path", [], "any", false, false, false, 18))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 19
                yield "                        <span class=\"avatar avatar-xl\" style=\"background-image: url('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image_form"], "vars", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19), "path", [], "any", false, false, false, 19), "sylius_small"), "html", null, true);
                yield "')\"></span>
                    ";
            } else {
                // line 21
                yield "                        <span class=\"avatar avatar-xl\"></span>
                    ";
            }
            // line 23
            yield "                </div>
                <div class=\"mt-3 d-flex items-center\">
                    ";
            // line 25
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image_form"], "vars", [], "any", false, false, false, 25), "button_delete", [], "any", false, false, false, 25), 'widget', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "attr" => ["class" => "btn btn-outline-danger w-100", "data-test-image-delete" => ""]]);
            yield "
                </div>
            </div>
            <div class=\"col\">
                <div class=\"mb-3\">
                    ";
            // line 30
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["image_form"], "type", [], "any", false, false, false, 30), 'row', $this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("type"));
            yield "
                </div>
                <div class=\"mb-3\">
                    ";
            // line 33
            if ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)) && (0 != Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "variants", [], "any", false, false, false, 33)))) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "simple", [], "any", false, false, false, 33))) {
                // line 34
                yield "                        ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["image_form"], "productVariants", [], "any", false, false, false, 34), 'row', $this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("product-variant", Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image_form"], "productVariants", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34), ",")));
                yield "
                    ";
            }
            // line 36
            yield "                </div>
                <div class=\"mb-3\">
                    ";
            // line 38
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["image_form"], "file", [], "any", false, false, false, 38), 'row', $this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("file"));
            yield "
                </div>
                ";
            // line 40
            if (CoreExtension::getAttribute($this->env, $this->source, $context["image_form"], "position", [], "any", true, true, false, 40)) {
                // line 41
                yield "                    <div class=\"mb-3\">
                        ";
                // line 42
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["image_form"], "position", [], "any", false, false, false, 42), 'row', $this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("position"));
                yield "
                    </div>
                ";
            }
            // line 45
            yield "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image_form'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "</div>
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
        return "@SyliusAdmin/product/form/sections/media/images.html.twig";
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
        return array (  155 => 48,  147 => 45,  141 => 42,  138 => 41,  136 => 40,  131 => 38,  127 => 36,  121 => 34,  119 => 33,  113 => 30,  105 => 25,  101 => 23,  97 => 21,  91 => 19,  89 => 18,  82 => 14,  78 => 13,  74 => 12,  70 => 10,  66 => 9,  61 => 7,  57 => 6,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set images = hookable_metadata.context.form.images %}
{% set product = hookable_metadata.context.product %}

<div
    class=\"row\"
    {{ sylius_test_html_attribute('images') }}
    {{ sylius_test_html_attribute('image-subforms') }}
>
    {% for image_form in images %}
        <div
            class=\"col-12 col-md-6 row mb-4\"
            {{ sylius_test_html_attribute('image-subform')}}
            {{ sylius_test_html_attribute('type', image_form.type.vars.value) }}
            {{ sylius_test_html_attribute('image-url', image_form.vars.value.path ? image_form.vars.value.path|imagine_filter('sylius_small') : null) }}
        >
            <div class=\"col-auto\">
                <div>
                    {% if image_form.vars.value.path is not null %}
                        <span class=\"avatar avatar-xl\" style=\"background-image: url('{{ image_form.vars.value.path|imagine_filter('sylius_small') }}')\"></span>
                    {% else %}
                        <span class=\"avatar avatar-xl\"></span>
                    {% endif %}
                </div>
                <div class=\"mt-3 d-flex items-center\">
                    {{ form_widget(image_form.vars.button_delete, { label: 'sylius.ui.delete'|trans, attr: { class: 'btn btn-outline-danger w-100','data-test-image-delete': '' }}) }}
                </div>
            </div>
            <div class=\"col\">
                <div class=\"mb-3\">
                    {{ form_row(image_form.type, sylius_test_form_attribute('type')) }}
                </div>
                <div class=\"mb-3\">
                    {% if product.id is not null and 0 != product.variants|length and not product.simple %}
                        {{ form_row(image_form.productVariants, sylius_test_form_attribute('product-variant', image_form.productVariants.vars.value|join(','))) }}
                    {% endif %}
                </div>
                <div class=\"mb-3\">
                    {{ form_row(image_form.file, sylius_test_form_attribute('file')) }}
                </div>
                {% if image_form.position is defined %}
                    <div class=\"mb-3\">
                        {{ form_row(image_form.position, sylius_test_form_attribute('position')) }}
                    </div>
                {% endif %}
            </div>
        </div>
    {% endfor %}
</div>
", "@SyliusAdmin/product/form/sections/media/images.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/form/sections/media/images.html.twig");
    }
}
