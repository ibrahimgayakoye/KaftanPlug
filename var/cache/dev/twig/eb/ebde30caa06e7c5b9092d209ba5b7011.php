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

/* @SyliusAdmin/shared/helper/translations.html.twig */
class __TwigTemplate_0cd2c49783037c81058f651da02fd7a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/helper/translations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/helper/translations.html.twig"));

        // line 25
        yield "
";
        // line 44
        yield "
";
        // line 64
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_default($translation_fields = null, $body = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "translation_fields" => $translation_fields,
            "body" => $body,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "default"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "default"));

            // line 2
            yield "    ";
            $macros["_v0"] = $this;
            // line 3
            yield "
    ";
            // line 4
            $context["accordion_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "accordion_id", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 4, $this->source); })()), "accordion_id", [], "any", false, false, false, 4), "translations")) : ("translations"));
            // line 5
            yield "    ";
            $context["accordion_flush"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "accordion_flush", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 5, $this->source); })()), "accordion_flush", [], "any", false, false, false, 5), false)) : (false));
            // line 6
            yield "    <div class=\"accordion ";
            yield (((($tmp = (isset($context["accordion_flush"]) || array_key_exists("accordion_flush", $context) ? $context["accordion_flush"] : (function () { throw new RuntimeError('Variable "accordion_flush" does not exist.', 6, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("accordion-flush") : (null));
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["accordion_id"]) || array_key_exists("accordion_id", $context) ? $context["accordion_id"] : (function () { throw new RuntimeError('Variable "accordion_id" does not exist.', 6, $this->source); })()), "html", null, true);
            yield "\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["translation_fields"]) || array_key_exists("translation_fields", $context) ? $context["translation_fields"] : (function () { throw new RuntimeError('Variable "translation_fields" does not exist.', 7, $this->source); })()));
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
            foreach ($context['_seq'] as $context["locale"] => $context["translation_form"]) {
                // line 8
                yield "            <div class=\"accordion-item\">
                ";
                // line 9
                yield $macros["_v0"]->getTemplateForMacro("macro_accordion_header", $context, 9, $this->getSourceContext())->macro_accordion_header(...[$context["locale"], (isset($context["accordion_id"]) || array_key_exists("accordion_id", $context) ? $context["accordion_id"] : (function () { throw new RuntimeError('Variable "accordion_id" does not exist.', 9, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 9)]);
                yield "
                <div id=\"translation-";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["accordion_id"]) || array_key_exists("accordion_id", $context) ? $context["accordion_id"] : (function () { throw new RuntimeError('Variable "accordion_id" does not exist.', 10, $this->source); })()), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["locale"], "html", null, true);
                yield "\" class=\"accordion-collapse collapse ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "show";
                }
                yield "\" data-bs-parent=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["accordion_id"]) || array_key_exists("accordion_id", $context) ? $context["accordion_id"] : (function () { throw new RuntimeError('Variable "accordion_id" does not exist.', 10, $this->source); })()), "html", null, true);
                yield "\">
                    <div class=\"accordion-body\">
                        ";
                // line 12
                if ((($tmp =  !(null === (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 12, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 13
                    yield "                            ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, Twig\Extension\StringLoaderExtension::templateFromString($this->env, (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 13, $this->source); })())), ["locale" => $context["locale"], "translation_form" => $context["translation_form"]]);
                    yield "
                        ";
                } else {
                    // line 15
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["translation_form"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 16
                        yield "                                ";
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                        yield "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 18
                    yield "                        ";
                }
                // line 19
                yield "                    </div>
                </div>
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
            unset($context['_seq'], $context['locale'], $context['translation_form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 26
    public function macro_with_hook($translation_fields = null, $prefixes = null, $hook_name = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "translation_fields" => $translation_fields,
            "prefixes" => $prefixes,
            "hook_name" => $hook_name,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "with_hook"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "with_hook"));

            // line 27
            yield "    ";
            $macros["_v1"] = $this;
            // line 28
            yield "
    ";
            // line 29
            $context["accordion_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "accordion_id", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 29, $this->source); })()), "accordion_id", [], "any", false, false, false, 29), "translations")) : ("translations"));
            // line 30
            yield "    ";
            $context["accordion_flush"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "accordion_flush", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 30, $this->source); })()), "accordion_flush", [], "any", false, false, false, 30), false)) : (false));
            // line 31
            yield "    <div class=\"accordion ";
            yield (((($tmp = (isset($context["accordion_flush"]) || array_key_exists("accordion_flush", $context) ? $context["accordion_flush"] : (function () { throw new RuntimeError('Variable "accordion_flush" does not exist.', 31, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("accordion-flush") : (null));
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["accordion_id"]) || array_key_exists("accordion_id", $context) ? $context["accordion_id"] : (function () { throw new RuntimeError('Variable "accordion_id" does not exist.', 31, $this->source); })()), "html", null, true);
            yield "\">
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["translation_fields"]) || array_key_exists("translation_fields", $context) ? $context["translation_fields"] : (function () { throw new RuntimeError('Variable "translation_fields" does not exist.', 32, $this->source); })()));
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
            foreach ($context['_seq'] as $context["locale"] => $context["translation_form"]) {
                // line 33
                yield "            <div class=\"accordion-item\">
                ";
                // line 34
                yield $macros["_v1"]->getTemplateForMacro("macro_accordion_header", $context, 34, $this->getSourceContext())->macro_accordion_header(...[$context["locale"], (isset($context["accordion_id"]) || array_key_exists("accordion_id", $context) ? $context["accordion_id"] : (function () { throw new RuntimeError('Variable "accordion_id" does not exist.', 34, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 34)]);
                yield "
                <div id=\"translation-";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["accordion_id"]) || array_key_exists("accordion_id", $context) ? $context["accordion_id"] : (function () { throw new RuntimeError('Variable "accordion_id" does not exist.', 35, $this->source); })()), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["locale"], "html", null, true);
                yield "\" class=\"accordion-collapse collapse ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "show";
                }
                yield "\" data-bs-parent=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["accordion_id"]) || array_key_exists("accordion_id", $context) ? $context["accordion_id"] : (function () { throw new RuntimeError('Variable "accordion_id" does not exist.', 35, $this->source); })()), "html", null, true);
                yield "\">
                    <div class=\"accordion-body row\">
                        ";
                // line 37
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook(((array_key_exists("hook_name", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hook_name"]) || array_key_exists("hook_name", $context) ? $context["hook_name"] : (function () { throw new RuntimeError('Variable "hook_name" does not exist.', 37, $this->source); })()), "translations")) : ("translations")), ["form" => $context["translation_form"], "locale" => $context["locale"], "_prefixes" => (isset($context["prefixes"]) || array_key_exists("prefixes", $context) ? $context["prefixes"] : (function () { throw new RuntimeError('Variable "prefixes" does not exist.', 37, $this->source); })())], $context, false);
                // line 38
                yield "                    </div>
                </div>
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
            unset($context['_seq'], $context['locale'], $context['translation_form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 45
    public function macro_single_field($translationFields = null, $key = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "translationFields" => $translationFields,
            "key" => $key,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "single_field"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "single_field"));

            // line 46
            yield "    ";
            $macros["_v2"] = $this;
            // line 47
            yield "
    ";
            // line 48
            $context["accordion_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "accordion_id", [], "any", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 48, $this->source); })()), "accordion_id", [], "any", false, false, false, 48), "translations")) : ("translations"));
            // line 49
            yield "    ";
            $context["accordion_flush"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "accordion_flush", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 49, $this->source); })()), "accordion_flush", [], "any", false, false, false, 49), false)) : (false));
            // line 50
            yield "    <div class=\"accordion ";
            yield (((($tmp = (isset($context["accordion_flush"]) || array_key_exists("accordion_flush", $context) ? $context["accordion_flush"] : (function () { throw new RuntimeError('Variable "accordion_flush" does not exist.', 50, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("accordion-flush") : (null));
            yield "\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("accordion-key", (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 50, $this->source); })()));
            yield " id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["accordion_id"]) || array_key_exists("accordion_id", $context) ? $context["accordion_id"] : (function () { throw new RuntimeError('Variable "accordion_id" does not exist.', 50, $this->source); })()), "html", null, true);
            yield "\">
        ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["translationFields"]) || array_key_exists("translationFields", $context) ? $context["translationFields"] : (function () { throw new RuntimeError('Variable "translationFields" does not exist.', 51, $this->source); })()));
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
            foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
                // line 52
                yield "            <div class=\"accordion-item\">
                ";
                // line 53
                yield $macros["_v2"]->getTemplateForMacro("macro_accordion_header", $context, 53, $this->getSourceContext())->macro_accordion_header(...[$context["locale"], (isset($context["accordion_id"]) || array_key_exists("accordion_id", $context) ? $context["accordion_id"] : (function () { throw new RuntimeError('Variable "accordion_id" does not exist.', 53, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 53)]);
                yield "
                <div id=\"translation-";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["accordion_id"]) || array_key_exists("accordion_id", $context) ? $context["accordion_id"] : (function () { throw new RuntimeError('Variable "accordion_id" does not exist.', 54, $this->source); })()), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["locale"], "html", null, true);
                yield "\" class=\"accordion-collapse collapse ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "show";
                }
                yield "\" data-bs-parent=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["accordion_id"]) || array_key_exists("accordion_id", $context) ? $context["accordion_id"] : (function () { throw new RuntimeError('Variable "accordion_id" does not exist.', 54, $this->source); })()), "html", null, true);
                yield "\">
                    <div class=\"accordion-body\">
                        ";
                // line 56
                $context["attributes"] = $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("key", (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 56, $this->source); })())), $this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("locale", $context["locale"]));
                // line 57
                yield "                        ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationForm"], 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 57, $this->source); })()));
                yield "
                    </div>
                </div>
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
            unset($context['_seq'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 65
    public function macro_accordion_header($locale = null, $accordion_id = null, $is_first = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "locale" => $locale,
            "accordion_id" => $accordion_id,
            "is_first" => $is_first,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "accordion_header"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "accordion_header"));

            // line 66
            yield "    <button
        class=\"accordion-button ";
            // line 67
            if (((isset($context["is_first"]) || array_key_exists("is_first", $context) ? $context["is_first"] : (function () { throw new RuntimeError('Variable "is_first" does not exist.', 67, $this->source); })()) == false)) {
                yield "collapsed";
            }
            yield "\"
        type=\"button\"
        data-bs-toggle=\"collapse\"
        data-bs-target=\"#translation-";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["accordion_id"]) || array_key_exists("accordion_id", $context) ? $context["accordion_id"] : (function () { throw new RuntimeError('Variable "accordion_id" does not exist.', 70, $this->source); })()), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 70, $this->source); })()), "html", null, true);
            yield "\"
        aria-expanded=\"";
            // line 71
            if ((($tmp = (isset($context["is_first"]) || array_key_exists("is_first", $context) ? $context["is_first"] : (function () { throw new RuntimeError('Variable "is_first" does not exist.', 71, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "true";
            } else {
                yield "false";
            }
            yield "\"
        aria-controls=\"translation-";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["accordion_id"]) || array_key_exists("accordion_id", $context) ? $context["accordion_id"] : (function () { throw new RuntimeError('Variable "accordion_id" does not exist.', 72, $this->source); })()), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 72, $this->source); })()), "html", null, true);
            yield "\"
        ";
            // line 73
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()(((isset($context["accordion_id"]) || array_key_exists("accordion_id", $context) ? $context["accordion_id"] : (function () { throw new RuntimeError('Variable "accordion_id" does not exist.', 73, $this->source); })()) . "-accordion"), (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 73, $this->source); })()));
            yield "
    >
        ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\Bundle\LocaleBundle\Twig\LocaleExtension']->convertCodeToName((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 75, $this->source); })())), "html", null, true);
            yield "
        <div class=\"accordion-button-toggle\">
            ";
            // line 77
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:chevron-down");
            yield "
        </div>
    </button>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusAdmin/shared/helper/translations.html.twig";
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
        return array (  478 => 77,  473 => 75,  468 => 73,  462 => 72,  454 => 71,  448 => 70,  440 => 67,  437 => 66,  417 => 65,  404 => 62,  384 => 57,  382 => 56,  369 => 54,  365 => 53,  362 => 52,  345 => 51,  336 => 50,  333 => 49,  331 => 48,  328 => 47,  325 => 46,  305 => 45,  292 => 42,  275 => 38,  272 => 37,  259 => 35,  255 => 34,  252 => 33,  235 => 32,  228 => 31,  225 => 30,  223 => 29,  220 => 28,  217 => 27,  196 => 26,  183 => 23,  166 => 19,  163 => 18,  154 => 16,  149 => 15,  143 => 13,  141 => 12,  128 => 10,  124 => 9,  121 => 8,  104 => 7,  97 => 6,  94 => 5,  92 => 4,  89 => 3,  86 => 2,  66 => 1,  54 => 64,  51 => 44,  48 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro default(translation_fields, body = null, options = {}) %}
    {% from _self import accordion_header %}

    {% set accordion_id = options.accordion_id|default('translations') %}
    {% set accordion_flush = options.accordion_flush|default(false) %}
    <div class=\"accordion {{ accordion_flush ? 'accordion-flush' : null }}\" id=\"{{ accordion_id }}\">
        {% for locale, translation_form in translation_fields %}
            <div class=\"accordion-item\">
                {{ accordion_header(locale, accordion_id, loop.first) }}
                <div id=\"translation-{{ accordion_id }}-{{ locale }}\" class=\"accordion-collapse collapse {% if loop.first %}show{% endif %}\" data-bs-parent=\"#{{ accordion_id }}\">
                    <div class=\"accordion-body\">
                        {% if body is not null %}
                            {{ include(template_from_string(body), { locale: locale, translation_form: translation_form }) }}
                        {% else %}
                            {% for field in translation_form %}
                                {{ form_row(field) }}
                            {% endfor %}
                        {% endif %}
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% endmacro %}

{% macro with_hook(translation_fields, prefixes, hook_name = null, options = {}) %}
    {% from _self import accordion_header %}

    {% set accordion_id = options.accordion_id|default('translations') %}
    {% set accordion_flush = options.accordion_flush|default(false) %}
    <div class=\"accordion {{ accordion_flush ? 'accordion-flush' : null }}\" id=\"{{ accordion_id }}\">
        {% for locale, translation_form in translation_fields %}
            <div class=\"accordion-item\">
                {{ accordion_header(locale, accordion_id, loop.first) }}
                <div id=\"translation-{{ accordion_id }}-{{ locale }}\" class=\"accordion-collapse collapse {% if loop.first %}show{% endif %}\" data-bs-parent=\"#{{ accordion_id }}\">
                    <div class=\"accordion-body row\">
                        {% hook hook_name|default('translations') with { form: translation_form, locale, _prefixes: prefixes } %}
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% endmacro %}

{% macro single_field(translationFields, key, options = {}) %}
    {% from _self import accordion_header %}

    {% set accordion_id = options.accordion_id|default('translations') %}
    {% set accordion_flush = options.accordion_flush|default(false) %}
    <div class=\"accordion {{ accordion_flush ? 'accordion-flush' : null }}\" {{ sylius_test_html_attribute('accordion-key', key)}} id=\"{{ accordion_id }}\">
        {% for locale, translationForm in translationFields %}
            <div class=\"accordion-item\">
                {{ accordion_header(locale, accordion_id, loop.first) }}
                <div id=\"translation-{{ accordion_id }}-{{ locale }}\" class=\"accordion-collapse collapse {% if loop.first %}show{% endif %}\" data-bs-parent=\"#{{ accordion_id }}\">
                    <div class=\"accordion-body\">
                        {%  set attributes = sylius_test_form_attribute('key', key)|sylius_merge_recursive(sylius_test_form_attribute('locale', locale)) %}
                        {{ form_widget(translationForm, attributes) }}
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% endmacro %}

{% macro accordion_header(locale, accordion_id, is_first = false) %}
    <button
        class=\"accordion-button {% if is_first == false %}collapsed{% endif %}\"
        type=\"button\"
        data-bs-toggle=\"collapse\"
        data-bs-target=\"#translation-{{ accordion_id }}-{{ locale }}\"
        aria-expanded=\"{% if is_first %}true{% else %}false{% endif %}\"
        aria-controls=\"translation-{{ accordion_id }}-{{ locale }}\"
        {{ sylius_test_html_attribute( accordion_id ~ '-accordion', locale) }}
    >
        {{ locale|sylius_locale_name }}
        <div class=\"accordion-button-toggle\">
            {{ ux_icon('tabler:chevron-down') }}
        </div>
    </button>
{% endmacro %}
", "@SyliusAdmin/shared/helper/translations.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/helper/translations.html.twig");
    }
}
