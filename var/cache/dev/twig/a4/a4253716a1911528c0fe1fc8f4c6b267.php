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

/* @SyliusAdmin/taxon/sections/form/images.html.twig */
class __TwigTemplate_f5dc6b4dbde4c4f802eeb6a639bb6909 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/taxon/sections/form/images.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/taxon/sections/form/images.html.twig"));

        // line 1
        $context["form"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "form", [], "any", false, false, false, 1);
        // line 2
        yield "
<div ";
        // line 3
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("images");
        yield ">
    <div class=\"card mb-3\">
        <div class=\"card-header\">
            <h2 class=\"card-title\">
                ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.media"), "html", null, true);
        yield "
            </h2>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "images", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["image_form"]) {
            // line 13
            yield "                    ";
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("images", ["form" => $context["image_form"]], $context, false);
            // line 14
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image_form'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "            </div>

            <div class=\"d-grid gap-2\">
                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "images", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "button_add", [], "any", false, false, false, 18), 'widget', $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("add-image"), ["attr" => ["class" => "btn btn-outline-primary "]]));
        yield "
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
        return "@SyliusAdmin/taxon/sections/form/images.html.twig";
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
        return array (  87 => 18,  82 => 15,  76 => 14,  72 => 13,  68 => 12,  60 => 7,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set form = hookable_metadata.context.form %}

<div {{ sylius_test_html_attribute('images') }}>
    <div class=\"card mb-3\">
        <div class=\"card-header\">
            <h2 class=\"card-title\">
                {{ 'sylius.ui.media'|trans }}
            </h2>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                {% for image_form in form.images %}
                    {% hook 'images' with {form: image_form} %}
                {% endfor %}
            </div>

            <div class=\"d-grid gap-2\">
                {{ form_widget(form.images.vars.button_add, sylius_test_form_attribute('add-image')|sylius_merge_recursive({attr: {class: 'btn btn-outline-primary '}})) }}
            </div>
        </div>
    </div>
</div>
", "@SyliusAdmin/taxon/sections/form/images.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/taxon/sections/form/images.html.twig");
    }
}
