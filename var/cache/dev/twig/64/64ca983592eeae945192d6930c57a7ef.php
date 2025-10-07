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

/* @SyliusAdmin/shared/grid/action/archive.html.twig */
class __TwigTemplate_8cf71c341f740ca416e98c39db94a360 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/grid/action/archive.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/grid/action/archive.html.twig"));

        // line 1
        $context["path"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 1), "url", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })()), "link", [], "any", false, false, false, 1), "url", [], "any", false, false, false, 1), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 1), "route", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })()), "link", [], "any", false, false, false, 1), "route", [], "any", false, false, false, 1), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 1, $this->source); })()), "requestConfiguration", [], "any", false, false, false, 1), "getRouteName", ["archive"], "method", false, false, false, 1))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 1, $this->source); })()), "requestConfiguration", [], "any", false, false, false, 1), "getRouteName", ["archive"], "method", false, false, false, 1))), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 1), "parameters", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })()), "link", [], "any", false, false, false, 1), "parameters", [], "any", false, false, false, 1), ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)])) : (["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]))))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 1), "route", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })()), "link", [], "any", false, false, false, 1), "route", [], "any", false, false, false, 1), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 1, $this->source); })()), "requestConfiguration", [], "any", false, false, false, 1), "getRouteName", ["archive"], "method", false, false, false, 1))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 1, $this->source); })()), "requestConfiguration", [], "any", false, false, false, 1), "getRouteName", ["archive"], "method", false, false, false, 1))), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 1), "parameters", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })()), "link", [], "any", false, false, false, 1), "parameters", [], "any", false, false, false, 1), ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)])) : (["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)])))));
        // line 2
        $context["label"] = (((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()), "archivedAt", [], "any", false, false, false, 2))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 2, $this->source); })()), "label", [], "any", false, false, false, 2), "sylius.ui.archive")) : ("sylius.ui.archive")))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 2), "restore_label", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 2, $this->source); })()), "options", [], "any", false, false, false, 2), "restore_label", [], "any", false, false, false, 2), "sylius.ui.restore")) : ("sylius.ui.restore")))));
        // line 3
        $context["modal_id"] = ("modal-archive-restore-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3));
        // line 4
        yield "
";
        // line 5
        $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v0->preRender("sylius_admin:confirmation_modal", Twig\Extension\CoreExtension::toArray(["modal_id" => (isset($context["modal_id"]) || array_key_exists("modal_id", $context) ? $context["modal_id"] : (function () { throw new RuntimeError('Variable "modal_id" does not exist.', 5, $this->source); })()), "type" => "archive-restore"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v0->startEmbedComponent("sylius_admin:confirmation_modal", Twig\Extension\CoreExtension::toArray(["modal_id" => (isset($context["modal_id"]) || array_key_exists("modal_id", $context) ? $context["modal_id"] : (function () { throw new RuntimeError('Variable "modal_id" does not exist.', 5, $this->source); })()), "type" => "archive-restore"]), $context, "@SyliusAdmin/shared/grid/action/archive.html.twig", 29709882911);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 29709882911);
            $this->load("@SyliusAdmin/shared/grid/action/archive.html.twig", 5, "29709882911")->display($embeddedContext, $embeddedBlocks);
            $_v0->finishEmbedComponent();
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
        return "@SyliusAdmin/shared/grid/action/archive.html.twig";
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
        return array (  57 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set path = options.link.url|default(path(options.link.route|default(grid.requestConfiguration.getRouteName('archive')), options.link.parameters|default({'id': data.id}))) %}
{% set label = data.archivedAt is null ? action.label|default('sylius.ui.archive')|trans : action.options.restore_label|default('sylius.ui.restore')|trans %}
{% set modal_id = 'modal-archive-restore-' ~ data.id %}

{% component 'sylius_admin:confirmation_modal' with {modal_id: modal_id, type: 'archive-restore'} %}
    {% import '@SyliusAdmin/shared/helper/button.html.twig' as button %}
    {% block trigger %}
        <div data-bs-toggle=\"tooltip\" data-bs-title=\"{{ label }}\" {{ sylius_test_html_attribute('trigger-button', label) }}>
            {{ button.default({
                icon: action.icon|default('tabler:archive'),
                icon_class: 'icon',
                icon_only: true,
                attr: ' data-bs-toggle=modal data-bs-target=#' ~ modal_id,
            }) }}
        </div>
    {% endblock %}
    {% block footer %}
        <form action=\"{{ path }}\" method=\"POST\" name=\"sylius_archivable\">
            <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
            <input type=\"hidden\" name=\"sylius_archivable[_token]\" value=\"{{ csrf_token('sylius_archivable') }}\" />

            {{ button.default({ text: 'sylius.ui.cancel'|trans, attr: 'data-bs-dismiss=modal' }) }}
            {{ button.default({ text: label, type: 'submit', class: 'btn-primary', attr: sylius_test_html_attribute('confirm-button') }) }}
        </form>
    {% endblock %}
{% endcomponent %}
", "@SyliusAdmin/shared/grid/action/archive.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/grid/action/archive.html.twig");
    }
}


/* @SyliusAdmin/shared/grid/action/archive.html.twig */
class __TwigTemplate_8cf71c341f740ca416e98c39db94a360___29709882911 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'trigger' => [$this, 'block_trigger'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 5, $this->source); })()), 5);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/grid/action/archive.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/grid/action/archive.html.twig"));

        // line 6
        $macros["button"] = $this->macros["button"] = $this->load("@SyliusAdmin/shared/helper/button.html.twig", 6)->unwrap();
        // line 5
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_trigger(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "trigger"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "trigger"));

        // line 8
        yield "        <div data-bs-toggle=\"tooltip\" data-bs-title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("trigger-button", (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 8, $this->source); })()));
        yield ">
            ";
        // line 9
        yield $macros["button"]->getTemplateForMacro("macro_default", $context, 9, $this->getSourceContext())->macro_default(...[["icon" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 10
($context["action"] ?? null), "icon", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 10, $this->source); })()), "icon", [], "any", false, false, false, 10), "tabler:archive")) : ("tabler:archive")), "icon_class" => "icon", "icon_only" => true, "attr" => (" data-bs-toggle=modal data-bs-target=#" .         // line 13
(isset($context["modal_id"]) || array_key_exists("modal_id", $context) ? $context["modal_id"] : (function () { throw new RuntimeError('Variable "modal_id" does not exist.', 13, $this->source); })()))]]);
        // line 14
        yield "
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 18
        yield "        <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "\" method=\"POST\" name=\"sylius_archivable\">
            <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
            <input type=\"hidden\" name=\"sylius_archivable[_token]\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("sylius_archivable"), "html", null, true);
        yield "\" />

            ";
        // line 22
        yield $macros["button"]->getTemplateForMacro("macro_default", $context, 22, $this->getSourceContext())->macro_default(...[["text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cancel"), "attr" => "data-bs-dismiss=modal"]]);
        yield "
            ";
        // line 23
        yield $macros["button"]->getTemplateForMacro("macro_default", $context, 23, $this->getSourceContext())->macro_default(...[["text" => (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 23, $this->source); })()), "type" => "submit", "class" => "btn-primary", "attr" => $this->env->getFunction('sylius_test_html_attribute')->getCallable()("confirm-button")]]);
        yield "
        </form>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusAdmin/shared/grid/action/archive.html.twig";
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
        return array (  271 => 23,  267 => 22,  262 => 20,  256 => 18,  243 => 17,  230 => 14,  228 => 13,  227 => 10,  226 => 9,  219 => 8,  206 => 7,  175 => 5,  173 => 6,  57 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set path = options.link.url|default(path(options.link.route|default(grid.requestConfiguration.getRouteName('archive')), options.link.parameters|default({'id': data.id}))) %}
{% set label = data.archivedAt is null ? action.label|default('sylius.ui.archive')|trans : action.options.restore_label|default('sylius.ui.restore')|trans %}
{% set modal_id = 'modal-archive-restore-' ~ data.id %}

{% component 'sylius_admin:confirmation_modal' with {modal_id: modal_id, type: 'archive-restore'} %}
    {% import '@SyliusAdmin/shared/helper/button.html.twig' as button %}
    {% block trigger %}
        <div data-bs-toggle=\"tooltip\" data-bs-title=\"{{ label }}\" {{ sylius_test_html_attribute('trigger-button', label) }}>
            {{ button.default({
                icon: action.icon|default('tabler:archive'),
                icon_class: 'icon',
                icon_only: true,
                attr: ' data-bs-toggle=modal data-bs-target=#' ~ modal_id,
            }) }}
        </div>
    {% endblock %}
    {% block footer %}
        <form action=\"{{ path }}\" method=\"POST\" name=\"sylius_archivable\">
            <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
            <input type=\"hidden\" name=\"sylius_archivable[_token]\" value=\"{{ csrf_token('sylius_archivable') }}\" />

            {{ button.default({ text: 'sylius.ui.cancel'|trans, attr: 'data-bs-dismiss=modal' }) }}
            {{ button.default({ text: label, type: 'submit', class: 'btn-primary', attr: sylius_test_html_attribute('confirm-button') }) }}
        </form>
    {% endblock %}
{% endcomponent %}
", "@SyliusAdmin/shared/grid/action/archive.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/grid/action/archive.html.twig");
    }
}
