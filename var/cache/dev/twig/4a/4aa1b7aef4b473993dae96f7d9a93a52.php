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

/* @SyliusAdmin/shared/form_theme.html.twig */
class __TwigTemplate_666e21eb99218fd2471e8c77cc285b91 extends Template
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
            'form_start' => [$this, 'block_form_start'],
            'form_row' => [$this, 'block_form_row'],
            'sylius_resource_autocomplete_choice_row' => [$this, 'block_sylius_resource_autocomplete_choice_row'],
            'sylius_channel_collection_row' => [$this, 'block_sylius_channel_collection_row'],
            'button_widget' => [$this, 'block_button_widget'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "bootstrap_5_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/form_theme.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/form_theme.html.twig"));

        $this->parent = $this->load("bootstrap_5_layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "setMethodRendered", [], "method", false, false, false, 4);
        // line 5
        $context["method"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 5, $this->source); })()));
        // line 6
        if (CoreExtension::inFilter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 6, $this->source); })()), ["GET", "POST"])) {
            // line 7
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 7, $this->source); })());
        } else {
            // line 9
            $context["form_method"] = "POST";
        }
        // line 11
        yield "<form";
        if (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 11, $this->source); })()) != "")) {
            yield " name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 11, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield " method=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new RuntimeError('Variable "form_method" does not exist.', 11, $this->source); })())), "html", null, true);
        yield "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 11, $this->source); })()) != "")) {
            yield " action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 11, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        if ((($tmp = (isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new RuntimeError('Variable "multipart" does not exist.', 11, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " enctype=\"multipart/form-data\"";
        }
        yield " ";
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("@sylius/admin-bundle/compound-form-errors");
        yield ">";
        // line 12
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new RuntimeError('Variable "form_method" does not exist.', 12, $this->source); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 12, $this->source); })()))) {
            // line 13
            yield "<input type=\"hidden\" name=\"_method\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 13, $this->source); })()), "html", null, true);
            yield "\" />";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 18
        $context["row_attr"] = Twig\Extension\CoreExtension::merge(((array_key_exists("row_attr", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 18, $this->source); })()), [])) : ([])), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 18, $this->source); })()), "class", [], "any", false, false, false, 18), "mb-3")) : ("mb-3")) . " field"))]);
        // line 19
        yield "    ";
        yield from $this->yieldParentBlock("form_row", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sylius_resource_autocomplete_choice_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_resource_autocomplete_choice_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_resource_autocomplete_choice_row"));

        // line 23
        yield "    <div class=\"";
        if ((($tmp = (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 23, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "required ";
        }
        if ((($tmp = (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 23, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled ";
        }
        yield "field";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 23, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 23, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 23, $this->source); })()))) {
            yield " error";
        }
        yield "\">";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'label');
        // line 25
        yield "<select
            class=\"form-control\"
            data-choices=\"true\"
            data-choice-label-field=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["choice_name"]) || array_key_exists("choice_name", $context) ? $context["choice_name"] : (function () { throw new RuntimeError('Variable "choice_name" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\"
            data-choice-value-field=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "\"
            data-input-id=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "html", null, true);
        yield "\"
            data-init-url=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("init_load_url", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["init_load_url"]) || array_key_exists("init_load_url", $context) ? $context["init_load_url"] : (function () { throw new RuntimeError('Variable "init_load_url" does not exist.', 31, $this->source); })()), null)) : (null)), "html", null, true);
        yield "\"
            ";
        // line 32
        if (array_key_exists("search_url", $context)) {
            yield "data-search-url=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_url"]) || array_key_exists("search_url", $context) ? $context["search_url"] : (function () { throw new RuntimeError('Variable "search_url" does not exist.', 32, $this->source); })()), "html", null, true);
            yield "\"";
        }
        // line 33
        yield "            data-no-choices-text=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("no_choices_translation", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["no_choices_translation"]) || array_key_exists("no_choices_translation", $context) ? $context["no_choices_translation"] : (function () { throw new RuntimeError('Variable "no_choices_translation" does not exist.', 33, $this->source); })()), "sylius.ui.start_typing_to_search")) : ("sylius.ui.start_typing_to_search"))), "html", null, true);
        yield "\"
            ";
        // line 34
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "disabled", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled";
        }
        // line 35
        yield "            ";
        if ((($tmp = (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 35, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "multiple";
        }
        // line 36
        yield "        ></select>
        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'widget');
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'errors');
        // line 39
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sylius_channel_collection_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_channel_collection_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_channel_collection_row"));

        // line 43
        yield "    <div";
        $_v0 = $context;
        $_v1 = ["attr" => Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 43, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 43, $this->source); })()), "class", [], "any", false, false, false, 43), "mb-3 card")) : ("mb-3 card")))])];
        if (!is_iterable($_v1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 43, $this->getSourceContext());
        }
        $_v1 = CoreExtension::toArray($_v1);
        $context = $_v1 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v0;
        yield ">
        <div class=\"card-header\">
            <ul class=\"nav nav-tabs card-header-tabs\" data-bs-toggle=\"tabs\" role=\"tablist\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()));
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
        foreach ($context['_seq'] as $context["channel_code"] => $context["channel_configuration"]) {
            // line 47
            yield "                    ";
            $context["tab_id"] = (($context["channel_code"] . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 47, $this->source); })()));
            // line 48
            yield "                    ";
            $context["channel_error_count"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "vars", [], "any", false, false, false, 48), "channels_errors_count", [], "any", false, false, false, 48), $context["channel_code"], [], "array", false, false, false, 48);
            // line 49
            yield "                    <li class=\"nav-item\">
                        <a
                            class=\"nav-link ";
            // line 51
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 51) == 0)) {
                yield "active";
            }
            yield "\"
                            data-bs-toggle=\"tab\"
                            href=\"#";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tab_id"]) || array_key_exists("tab_id", $context) ? $context["tab_id"] : (function () { throw new RuntimeError('Variable "tab_id" does not exist.', 53, $this->source); })()), "html", null, true);
            yield "\"
                            role=\"tab\"
                            ";
            // line 55
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("tab", (isset($context["tab_id"]) || array_key_exists("tab_id", $context) ? $context["tab_id"] : (function () { throw new RuntimeError('Variable "tab_id" does not exist.', 55, $this->source); })()));
            yield "
                            ";
            // line 56
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("channel-tab", (isset($context["tab_id"]) || array_key_exists("tab_id", $context) ? $context["tab_id"] : (function () { throw new RuntimeError('Variable "tab_id" does not exist.', 56, $this->source); })()));
            yield "
                        >
                            <span>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["channel_configuration"], "vars", [], "any", false, false, false, 58), "label", [], "any", false, false, false, 58), "html", null, true);
            yield "</span>
                            ";
            // line 59
            if (((isset($context["channel_error_count"]) || array_key_exists("channel_error_count", $context) ? $context["channel_error_count"] : (function () { throw new RuntimeError('Variable "channel_error_count" does not exist.', 59, $this->source); })()) > 0)) {
                // line 60
                yield "                                <span class=\"text-white badge rounded-pill bg-danger ms-1\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["channel_error_count"]) || array_key_exists("channel_error_count", $context) ? $context["channel_error_count"] : (function () { throw new RuntimeError('Variable "channel_error_count" does not exist.', 60, $this->source); })()), "html", null, true);
                yield "</span>
                            ";
            }
            // line 62
            yield "                        </a>
                    </li>
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
        unset($context['_seq'], $context['channel_code'], $context['channel_configuration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "            </ul>
        </div>
        <div class=\"card-body\">
            <div class=\"tab-content\">
                ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()));
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
        foreach ($context['_seq'] as $context["channel_code"] => $context["channel_configuration"]) {
            // line 70
            yield "                    ";
            $context["tab_id"] = (($context["channel_code"] . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 70, $this->source); })()));
            // line 71
            yield "                    <div
                        class=\"tab-pane fade ";
            // line 72
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 72) == 0)) {
                yield "show active";
            }
            yield "\"
                        id=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tab_id"]) || array_key_exists("tab_id", $context) ? $context["tab_id"] : (function () { throw new RuntimeError('Variable "tab_id" does not exist.', 73, $this->source); })()), "html", null, true);
            yield "\"
                        role=\"tabpanel\"
                        ";
            // line 75
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("channel-tab-content", (isset($context["tab_id"]) || array_key_exists("tab_id", $context) ? $context["tab_id"] : (function () { throw new RuntimeError('Variable "tab_id" does not exist.', 75, $this->source); })()));
            yield "
                    >
                        ";
            // line 77
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["channel_configuration"], 'row', Twig\Extension\CoreExtension::merge($this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("tab-content"), ["label" => false]));
            yield "
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
        unset($context['_seq'], $context['channel_code'], $context['channel_configuration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "            </div>
        </div>
    </div>
    ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'errors');
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        // line 87
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 87, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 87, $this->source); })()), "class", [], "any", false, false, false, 87), "")) : ("")) . " btn btn-outline-primary"))]);
        // line 88
        yield "    ";
        yield from $this->yieldParentBlock("button_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusAdmin/shared/form_theme.html.twig";
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
        return array (  444 => 88,  442 => 87,  429 => 86,  416 => 83,  411 => 80,  394 => 77,  389 => 75,  384 => 73,  378 => 72,  375 => 71,  372 => 70,  355 => 69,  349 => 65,  333 => 62,  327 => 60,  325 => 59,  321 => 58,  316 => 56,  312 => 55,  307 => 53,  300 => 51,  296 => 49,  293 => 48,  290 => 47,  273 => 46,  258 => 43,  245 => 42,  233 => 39,  231 => 38,  229 => 37,  226 => 36,  221 => 35,  217 => 34,  212 => 33,  206 => 32,  202 => 31,  198 => 30,  194 => 29,  190 => 28,  185 => 25,  183 => 24,  170 => 23,  157 => 22,  145 => 19,  143 => 18,  130 => 17,  116 => 13,  114 => 12,  92 => 11,  89 => 9,  86 => 7,  84 => 6,  82 => 5,  80 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'bootstrap_5_layout.html.twig' %}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form{% if name != '' %} name=\"{{ name }}\"{% endif %} method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{{ block('attributes') }}{% if multipart %} enctype=\"multipart/form-data\"{% endif %} {{ stimulus_controller('@sylius/admin-bundle/compound-form-errors') }}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_row -%}
    {% set row_attr = row_attr|default({})|merge({ class: (row_attr.class|default('mb-3') ~ ' field')|trim }) %}
    {{ parent() }}
{%- endblock form_row %}

{% block sylius_resource_autocomplete_choice_row %}
    <div class=\"{% if required %}required {% endif %}{% if disabled %}disabled {% endif %}field{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
        {{- form_label(form) -}}
        <select
            class=\"form-control\"
            data-choices=\"true\"
            data-choice-label-field=\"{{ choice_name }}\"
            data-choice-value-field=\"{{ choice_value }}\"
            data-input-id=\"{{ form.vars.id }}\"
            data-init-url=\"{{ init_load_url|default(null) }}\"
            {% if search_url is defined %}data-search-url=\"{{ search_url }}\"{% endif %}
            data-no-choices-text=\"{{ no_choices_translation|default('sylius.ui.start_typing_to_search')|trans }}\"
            {% if form.vars.disabled %}disabled{% endif %}
            {% if multiple %}multiple{% endif %}
        ></select>
        {{ form_widget(form) }}
        {{- form_errors(form) -}}
    </div>
{% endblock %}

{% block sylius_channel_collection_row %}
    <div{% with {attr: row_attr|merge({class: row_attr.class|default('mb-3 card')|trim})} %}{{ block('attributes') }}{% endwith %}>
        <div class=\"card-header\">
            <ul class=\"nav nav-tabs card-header-tabs\" data-bs-toggle=\"tabs\" role=\"tablist\">
                {% for channel_code, channel_configuration in form %}
                    {% set tab_id = channel_code ~ '_' ~ id %}
                    {% set channel_error_count = form.vars.channels_errors_count[channel_code] %}
                    <li class=\"nav-item\">
                        <a
                            class=\"nav-link {% if loop.index0 == 0 %}active{% endif %}\"
                            data-bs-toggle=\"tab\"
                            href=\"#{{ tab_id }}\"
                            role=\"tab\"
                            {{ sylius_test_html_attribute('tab', tab_id) }}
                            {{ sylius_test_html_attribute('channel-tab', tab_id) }}
                        >
                            <span>{{- channel_configuration.vars.label -}}</span>
                            {% if channel_error_count > 0 %}
                                <span class=\"text-white badge rounded-pill bg-danger ms-1\">{{ channel_error_count }}</span>
                            {% endif %}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </div>
        <div class=\"card-body\">
            <div class=\"tab-content\">
                {% for channel_code, channel_configuration in form %}
                    {% set tab_id = channel_code ~ '_' ~ id %}
                    <div
                        class=\"tab-pane fade {% if loop.index0 == 0 %}show active{% endif %}\"
                        id=\"{{ tab_id }}\"
                        role=\"tabpanel\"
                        {{ sylius_test_html_attribute('channel-tab-content', tab_id) }}
                    >
                        {{ form_row(channel_configuration, sylius_test_form_attribute('tab-content')|merge({'label': false})) }}
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
    {{ form_errors(form) }}
{% endblock %}

{%- block button_widget -%}
    {% set attr = attr|merge({'class': (attr.class|default('') ~ ' btn btn-outline-primary')|trim}) %}
    {{ parent() }}
{%- endblock -%}
", "@SyliusAdmin/shared/form_theme.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/form_theme.html.twig");
    }
}
