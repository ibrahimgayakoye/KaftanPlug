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

/* @SyliusShop/product/show/content/info/overview/images/thumbnails.html.twig */
class __TwigTemplate_7d96819766233616193a5a5a68a89551 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/overview/images/thumbnails.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/product/show/content/info/overview/images/thumbnails.html.twig"));

        // line 1
        $context["product"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "product", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "images", [], "any", false, false, false, 3)) > 1)) {
            // line 4
            yield "    <div class=\"col-12 col-sm-3 mb-3\">
        <div class=\"d-flex flex-column gap-3 gap-xxl-4\" ";
            // line 5
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("thumbnails");
            yield ">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "images", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 7
                yield "                ";
                $context["path"] = (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 7))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 7), "sylius_shop_product_small_thumbnail")) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusui/images/200x200.png")));
                // line 8
                yield "                <div>
                    ";
                // line 9
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("thumbnails", ["image" => $context["image"], "path" => (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 9, $this->source); })())], $context, false);
                // line 10
                yield "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            yield "        </div>
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
        return "@SyliusShop/product/show/content/info/overview/images/thumbnails.html.twig";
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
        return array (  82 => 12,  75 => 10,  72 => 9,  69 => 8,  66 => 7,  62 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set product = hookable_metadata.context.product %}

{% if product.images|length > 1 %}
    <div class=\"col-12 col-sm-3 mb-3\">
        <div class=\"d-flex flex-column gap-3 gap-xxl-4\" {{ sylius_test_html_attribute('thumbnails') }}>
            {% for image in product.images %}
                {% set path = image.path is not null ? image.path|imagine_filter('sylius_shop_product_small_thumbnail') : asset('bundles/syliusui/images/200x200.png') %}
                <div>
                    {% hook 'thumbnails' with {image, path} %}
                </div>
            {% endfor %}
        </div>
    </div>
{% endif %}
", "@SyliusShop/product/show/content/info/overview/images/thumbnails.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/product/show/content/info/overview/images/thumbnails.html.twig");
    }
}
