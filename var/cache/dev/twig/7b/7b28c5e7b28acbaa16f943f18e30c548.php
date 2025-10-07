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

/* @SyliusAdmin/shared/helper/button.html.twig */
class __TwigTemplate_a7f27131edaa52c11f04ea5abc6ff88c extends Template
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
            'attributes' => [$this, 'block_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/helper/button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/helper/button.html.twig"));

        // line 48
        yield "
";
        // line 57
        yield "
";
        // line 66
        yield "
";
        // line 75
        yield "
";
        // line 84
        yield "
";
        // line 107
        yield "
";
        // line 108
        yield from $this->unwrap()->yieldBlock('attributes', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attributes"));

        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 109, $this->source); })()), "attr", [], "any", false, false, false, 109));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 110
            yield " ";
            // line 111
            if (($context["attrvalue"] === true)) {
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "\"";
            } elseif ((($tmp =  !(            // line 113
$context["attrvalue"] === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1
    public function macro_default($params = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "params" => $params,
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
            $context["params"] = Twig\Extension\CoreExtension::merge(["attr" => null, "class" => null, "text" => "Button", "disabled" => false, "dropdown" => false, "icon" => null, "icon_class" => null, "icon_only" => false, "id" => null, "size" => null, "type" => "button", "url" => null, "form" => null],             // line 16
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 16, $this->source); })()));
            // line 17
            yield "
    ";
            // line 18
            $context["button_class"] = ((((("btn" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 19
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 19, $this->source); })()), "class", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 19, $this->source); })()), "class", [], "any", false, false, false, 19))) : (""))) . (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 20
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 20, $this->source); })()), "dropdown", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" dropdown-toggle") : (""))) . (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 21
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 21, $this->source); })()), "icon_only", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" btn-icon") : (""))) . (((CoreExtension::getAttribute($this->env, $this->source,             // line 22
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 22, $this->source); })()), "size", [], "any", false, false, false, 22) == "large")) ? (" btn-lg") : (""))) . (((CoreExtension::getAttribute($this->env, $this->source,             // line 23
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 23, $this->source); })()), "size", [], "any", false, false, false, 23) == "small")) ? (" btn-sm") : ("")));
            // line 24
            yield "
    ";
            // line 25
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 25, $this->source); })()), "url", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 26, $this->source); })()), "url", [], "any", false, false, false, 26), "html", null, true);
                yield "\"
           ";
                // line 27
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "html", null, true);
                    yield "\"";
                }
                // line 28
                yield "           class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["button_class"]) || array_key_exists("button_class", $context) ? $context["button_class"] : (function () { throw new RuntimeError('Variable "button_class" does not exist.', 28, $this->source); })()), "html", null, true);
                yield "\"
            ";
                // line 29
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 29, $this->source); })()), "disabled", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "aria-disabled=\"true\"";
                }
                // line 30
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 30, $this->source); })()), "dropdown", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-bs-toggle=\"dropdown\"";
                }
                // line 31
                yield "            ";
                yield ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 31, $this->source); })()), "attr", [], "any", false, false, false, 31))) ? (                $this->unwrap()->renderBlock("attributes", $context, $blocks)) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 31, $this->source); })()), "attr", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((" " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 31, $this->source); })()), "attr", [], "any", false, false, false, 31)), "html", null, true)) : (""))));
                yield ">
            ";
                // line 32
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 32, $this->source); })()), "icon", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 32, $this->source); })()), "icon", [], "any", false, false, false, 32), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "icon_class", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 32, $this->source); })()), "icon_class", [], "any", false, false, false, 32), "icon")) : ("icon"))])) : (""));
                yield "
            ";
                // line 33
                yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 33, $this->source); })()), "icon_only", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 33, $this->source); })()), "text", [], "any", false, false, false, 33), "html", null, true)) : (""));
                yield "
        </a>
    ";
            } else {
                // line 36
                yield "        <button type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 36, $this->source); })()), "type", [], "any", false, false, false, 36), "html", null, true);
                yield "\"
                ";
                // line 37
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37), "html", null, true);
                    yield "\"";
                }
                // line 38
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 38, $this->source); })()), "form", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "form=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 38, $this->source); })()), "form", [], "any", false, false, false, 38), "html", null, true);
                    yield "\"";
                }
                // line 39
                yield "                class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["button_class"]) || array_key_exists("button_class", $context) ? $context["button_class"] : (function () { throw new RuntimeError('Variable "button_class" does not exist.', 39, $this->source); })()), "html", null, true);
                yield "\"
            ";
                // line 40
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 40, $this->source); })()), "disabled", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "disabled";
                }
                // line 41
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 41, $this->source); })()), "dropdown", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-bs-toggle=\"dropdown\"";
                }
                // line 42
                yield "            ";
                yield ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 42, $this->source); })()), "attr", [], "any", false, false, false, 42))) ? (                $this->unwrap()->renderBlock("attributes", $context, $blocks)) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 42, $this->source); })()), "attr", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((" " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 42, $this->source); })()), "attr", [], "any", false, false, false, 42)), "html", null, true)) : (""))));
                yield ">
            ";
                // line 43
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 43, $this->source); })()), "icon", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 43, $this->source); })()), "icon", [], "any", false, false, false, 43), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "icon_class", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 43, $this->source); })()), "icon_class", [], "any", false, false, false, 43), "icon")) : ("icon"))])) : (""));
                yield "
            ";
                // line 44
                yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 44, $this->source); })()), "icon_only", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 44, $this->source); })()), "text", [], "any", false, false, false, 44), "html", null, true)) : (""));
                yield "
        </button>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 49
    public function macro_primary($params = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "params" => $params,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "primary"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "primary"));

            // line 50
            yield "    ";
            $context["params"] = Twig\Extension\CoreExtension::merge(["class" => null],             // line 52
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 52, $this->source); })()));
            // line 53
            yield "
    ";
            // line 54
            $context["new_params"] = Twig\Extension\CoreExtension::merge((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 54, $this->source); })()), ["class" => ("btn-primary " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 54, $this->source); })()), "class", [], "any", false, false, false, 54))]);
            // line 55
            yield "    ";
            yield $this->getTemplateForMacro("macro_default", $context, 55, $this->getSourceContext())->macro_default(...[(isset($context["new_params"]) || array_key_exists("new_params", $context) ? $context["new_params"] : (function () { throw new RuntimeError('Variable "new_params" does not exist.', 55, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 58
    public function macro_delete($params = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "params" => $params,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "delete"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "delete"));

            // line 59
            yield "    ";
            $context["params"] = Twig\Extension\CoreExtension::merge(["class" => null],             // line 61
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 61, $this->source); })()));
            // line 62
            yield "
    ";
            // line 63
            $context["new_params"] = Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(["text" => "Delete"], (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 63, $this->source); })())), ["class" => ("btn-ghost-danger " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 63, $this->source); })()), "class", [], "any", false, false, false, 63))]);
            // line 64
            yield "    ";
            yield $this->getTemplateForMacro("macro_default", $context, 64, $this->getSourceContext())->macro_default(...[(isset($context["new_params"]) || array_key_exists("new_params", $context) ? $context["new_params"] : (function () { throw new RuntimeError('Variable "new_params" does not exist.', 64, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 67
    public function macro_create($params = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "params" => $params,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "create"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "create"));

            // line 68
            yield "    ";
            $context["params"] = Twig\Extension\CoreExtension::merge(["type" => "submit", "text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.create")],             // line 71
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 71, $this->source); })()));
            // line 72
            yield "
    ";
            // line 73
            yield $this->getTemplateForMacro("macro_primary", $context, 73, $this->getSourceContext())->macro_primary(...[(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 73, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 76
    public function macro_update($params = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "params" => $params,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "update"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "update"));

            // line 77
            yield "    ";
            $context["params"] = Twig\Extension\CoreExtension::merge(["type" => "submit", "text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.save_changes")],             // line 80
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 80, $this->source); })()));
            // line 81
            yield "
    ";
            // line 82
            yield $this->getTemplateForMacro("macro_primary", $context, 82, $this->getSourceContext())->macro_primary(...[(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 82, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 85
    public function macro_cancel($params = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "params" => $params,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "cancel"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "cancel"));

            // line 86
            yield "    ";
            $context["default_attr"] = Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge($this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("@sylius/admin-bundle/back-button"), $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("@sylius/admin-bundle/back-button", "goBack", "click")), ["data-sylius--admin-bundle--back-button-current-url-value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 90
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "request", [], "any", false, false, false, 90), "uri", [], "any", false, false, false, 90), "data-sylius--admin-bundle--back-button-fallback-url-value" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 91
($context["params"] ?? null), "fallback_url", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 91, $this->source); })()), "fallback_url", [], "any", false, false, false, 91), ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "url", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 91, $this->source); })()), "url", [], "any", false, false, false, 91), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "request", [], "any", false, false, false, 91), "uri", [], "any", false, false, false, 91))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "request", [], "any", false, false, false, 91), "uri", [], "any", false, false, false, 91))))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "url", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 91, $this->source); })()), "url", [], "any", false, false, false, 91), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "request", [], "any", false, false, false, 91), "uri", [], "any", false, false, false, 91))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "request", [], "any", false, false, false, 91), "uri", [], "any", false, false, false, 91)))))]);
            // line 94
            yield "
    ";
            // line 95
            $context["params"] = Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(["class" => null, "text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cancel"), "type" => "button", "attr" => []],             // line 101
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 101, $this->source); })())), ["attr" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 102
($context["params"] ?? null), "attr", [], "any", true, true, false, 102)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 102, $this->source); })()), "attr", [], "any", false, false, false, 102)) : ([])), (isset($context["default_attr"]) || array_key_exists("default_attr", $context) ? $context["default_attr"] : (function () { throw new RuntimeError('Variable "default_attr" does not exist.', 102, $this->source); })()))]);
            // line 104
            yield "
    ";
            // line 105
            yield $this->getTemplateForMacro("macro_default", $context, 105, $this->getSourceContext())->macro_default(...[(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 105, $this->source); })())]);
            yield "
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
        return "@SyliusAdmin/shared/helper/button.html.twig";
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
        return array (  453 => 105,  450 => 104,  448 => 102,  447 => 101,  446 => 95,  443 => 94,  441 => 91,  440 => 90,  438 => 86,  420 => 85,  406 => 82,  403 => 81,  401 => 80,  399 => 77,  381 => 76,  367 => 73,  364 => 72,  362 => 71,  360 => 68,  342 => 67,  327 => 64,  325 => 63,  322 => 62,  320 => 61,  318 => 59,  300 => 58,  285 => 55,  283 => 54,  280 => 53,  278 => 52,  276 => 50,  258 => 49,  242 => 44,  238 => 43,  233 => 42,  228 => 41,  224 => 40,  219 => 39,  212 => 38,  206 => 37,  201 => 36,  195 => 33,  191 => 32,  186 => 31,  181 => 30,  177 => 29,  172 => 28,  166 => 27,  161 => 26,  159 => 25,  156 => 24,  154 => 23,  153 => 22,  152 => 21,  151 => 20,  150 => 19,  149 => 18,  146 => 17,  144 => 16,  142 => 2,  124 => 1,  105 => 114,  103 => 113,  98 => 112,  96 => 111,  94 => 110,  90 => 109,  67 => 108,  64 => 107,  61 => 84,  58 => 75,  55 => 66,  52 => 57,  49 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro default(params = {}) %}
    {% set params = {
        attr: null,
        class: null,
        text: \"Button\",
        disabled: false,
        dropdown: false,
        icon: null,
        icon_class: null,
        icon_only: false,
        id: null,
        size: null,
        type: \"button\",
        url: null,
        form: null,
    }|merge(params) %}

    {% set button_class = 'btn' ~
        (params.class ? ' ' ~ params.class : '') ~
        (params.dropdown ? ' dropdown-toggle' : '') ~
        (params.icon_only ? ' btn-icon' : '') ~
        (params.size == 'large' ? ' btn-lg' : '') ~
        (params.size == 'small' ? ' btn-sm' : '') %}

    {% if params.url %}
        <a href=\"{{ params.url }}\"
           {% if params.id %}id=\"{{ params.id }}\"{% endif %}
           class=\"{{ button_class }}\"
            {% if params.disabled %}aria-disabled=\"true\"{% endif %}
            {% if params.dropdown %}data-bs-toggle=\"dropdown\"{% endif %}
            {{ params.attr is iterable ? block('attributes') : (params.attr ? ' ' ~ params.attr) }}>
            {{ params.icon ? ux_icon(params.icon, {'class': params.icon_class|default('icon') }) }}
            {{ not params.icon_only ? params.text }}
        </a>
    {% else %}
        <button type=\"{{ params.type }}\"
                {% if params.id %}id=\"{{ params.id }}\"{% endif %}
            {% if params.form %}form=\"{{ params.form }}\"{% endif %}
                class=\"{{ button_class }}\"
            {% if params.disabled %}disabled{% endif %}
            {% if params.dropdown %}data-bs-toggle=\"dropdown\"{% endif %}
            {{ params.attr is iterable ? block('attributes') : (params.attr ? ' ' ~ params.attr) }}>
            {{ params.icon ? ux_icon(params.icon, {'class': params.icon_class|default('icon') }) }}
            {{ not params.icon_only ? params.text }}
        </button>
    {% endif %}
{% endmacro %}

{% macro primary(params = {}) %}
    {% set params = {
        class: null,
    }|merge(params) %}

    {% set new_params = params|merge({ class: 'btn-primary ' ~ params.class }) %}
    {{ _self.default( new_params) }}
{% endmacro %}

{% macro delete(params = {}) %}
    {% set params = {
        class: null,
    }|merge(params) %}

    {% set new_params = { text: 'Delete' }|merge(params)|merge({ class: 'btn-ghost-danger ' ~ params.class }) %}
    {{ _self.default( new_params) }}
{% endmacro %}

{% macro create(params = {}) %}
    {% set params = {
        type: 'submit',
        text: 'sylius.ui.create'|trans,
    }|merge(params) %}

    {{ _self.primary(params) }}
{% endmacro %}

{% macro update(params = {}) %}
    {% set params = {
        type: 'submit',
        text: 'sylius.ui.save_changes'|trans,
    }|merge(params) %}

    {{ _self.primary(params) }}
{% endmacro %}

{% macro cancel(params = {}) %}
    {% set default_attr =
        stimulus_controller('@sylius/admin-bundle/back-button')
        |merge(stimulus_action('@sylius/admin-bundle/back-button', 'goBack', 'click'))
        |merge({
        'data-sylius--admin-bundle--back-button-current-url-value': app.request.uri,
        'data-sylius--admin-bundle--back-button-fallback-url-value': params.fallback_url|default(params.url|default(app.request.uri))
    })
    %}

    {% set params = {
        class: null,
        text: 'sylius.ui.cancel'|trans,
        type: 'button',
        attr: {}
    }
        |merge(params)
        |merge({attr: (params.attr is defined ? params.attr : {})|merge(default_attr)})
    %}

    {{ _self.default(params) }}
{% endmacro %}

{% block attributes -%}
    {%- for attrname, attrvalue in params.attr -%}
        {{- \" \" -}}
        {%- if attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "@SyliusAdmin/shared/helper/button.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/helper/button.html.twig");
    }
}
