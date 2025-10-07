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

/* @SyliusAdmin/product/show/content/page_body/media.html.twig */
class __TwigTemplate_048547e280f36f83d24191cae6c7e1bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/media.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/product/show/content/page_body/media.html.twig"));

        // line 1
        $context["product"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "resource", [], "any", false, false, false, 1);
        // line 2
        yield "
<div class=\"bg-white mb-3\">
<div class=\"accordion\" id=\"media\" >
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#media-body\" aria-expanded=\"false\" aria-controls=\"media\" >
                    ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.media"), "html", null, true);
        yield "
                    <span class=\"accordion-button-toggle\">
                    ";
        // line 10
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:chevron-down");
        yield "
                </span>
                </button>
            </h2>
            <div id=\"media-body\" class=\"accordion-collapse collapse\" data-bs-parent=\"#media\">
                <div class=\"accordion-body\">
                    ";
        // line 16
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "images", [], "any", false, false, false, 16)) >= 1)) {
            // line 17
            yield "                        <div class=\"spotlight-group\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("media");
            yield ">
                            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "images", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 19
                yield "                                ";
                $context["path"] = (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 19))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 19), "sylius_admin_product_thumbnail")) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusui/images/200x200.png")));
                // line 20
                yield "                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "isConfigurable", [], "method", false, false, false, 20) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "variants", [], "any", false, false, false, 20)) > 0))) {
                    // line 21
                    yield "                                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "getVariantSelectionMethod", [], "method", false, false, false, 21) == "match")) {
                        // line 22
                        yield "                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "productVariants", [], "any", false, false, false, 22));
                        foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                            // line 23
                            yield "                                                <div data-variant-options=\"";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["variant"], "optionValues", [], "any", false, false, false, 23));
                            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "code", [], "any", false, false, false, 23), "html", null, true);
                                yield " ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            yield "\"></div>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['variant'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 25
                        yield "                                        ";
                    } else {
                        // line 26
                        yield "                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "productVariants", [], "any", false, false, false, 26));
                        foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                            // line 27
                            yield "                                                <div data-variant-code=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["variant"], "code", [], "any", false, false, false, 27), "html", null, true);
                            yield "\"></div>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['variant'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 29
                        yield "                                        ";
                    }
                    // line 30
                    yield "                                    ";
                }
                // line 31
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 31), "sylius_admin_product_original"), "html", null, true);
                yield "\" class=\"spotlight\">
                                        <img src=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 32, $this->source); })()), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
                yield "\" />
                                    </a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "                        </div>
                    ";
        } else {
            // line 37
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.there_are_no_images_for_this_product"), "html", null, true);
            yield "
                    ";
        }
        // line 39
        yield "                </div>
            </div>
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
        return "@SyliusAdmin/product/show/content/page_body/media.html.twig";
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
        return array (  163 => 39,  157 => 37,  153 => 35,  142 => 32,  137 => 31,  134 => 30,  131 => 29,  122 => 27,  117 => 26,  114 => 25,  97 => 23,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  79 => 18,  74 => 17,  72 => 16,  63 => 10,  58 => 8,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set product = hookable_metadata.context.resource %}

<div class=\"bg-white mb-3\">
<div class=\"accordion\" id=\"media\" >
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#media-body\" aria-expanded=\"false\" aria-controls=\"media\" >
                    {{ 'sylius.ui.media'|trans }}
                    <span class=\"accordion-button-toggle\">
                    {{ ux_icon('tabler:chevron-down') }}
                </span>
                </button>
            </h2>
            <div id=\"media-body\" class=\"accordion-collapse collapse\" data-bs-parent=\"#media\">
                <div class=\"accordion-body\">
                    {% if product.images|length >= 1 %}
                        <div class=\"spotlight-group\" {{ sylius_test_html_attribute('media') }}>
                            {% for image in product.images %}
                                {% set path = image.path is not null ? image.path|imagine_filter('sylius_admin_product_thumbnail') : asset('bundles/syliusui/images/200x200.png') %}
                                    {% if product.isConfigurable() and product.variants|length > 0 %}
                                        {% if product.getVariantSelectionMethod() == 'match' %}
                                            {% for variant in image.productVariants %}
                                                <div data-variant-options=\"{% for option in variant.optionValues %}{{ option.code }} {% endfor %}\"></div>
                                            {% endfor %}
                                        {% else %}
                                            {% for variant in image.productVariants %}
                                                <div data-variant-code=\"{{ variant.code }}\"></div>
                                            {% endfor %}
                                        {% endif %}
                                    {% endif %}
                                    <a href=\"{{ image.path|imagine_filter('sylius_admin_product_original') }}\" class=\"spotlight\">
                                        <img src=\"{{ path }}\" alt=\"{{ product.name }}\" />
                                    </a>
                            {% endfor %}
                        </div>
                    {% else %}
                        {{ 'sylius.ui.there_are_no_images_for_this_product'|trans }}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
", "@SyliusAdmin/product/show/content/page_body/media.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/product/show/content/page_body/media.html.twig");
    }
}
