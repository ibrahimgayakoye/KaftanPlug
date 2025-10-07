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

/* @SyliusAdmin/shared/helper/accordion.html.twig */
class __TwigTemplate_8c81dfa70920109f3eece7a578c41d17 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/helper/accordion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/helper/accordion.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_accordion($items = null, $open = false, $auto_close = null, $flush = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "open" => $open,
            "auto_close" => $auto_close,
            "flush" => $flush,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "accordion"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "accordion"));

            // line 2
            yield "    ";
            $context["auto_close"] = ((array_key_exists("auto_close", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["auto_close"]) || array_key_exists("auto_close", $context) ? $context["auto_close"] : (function () { throw new RuntimeError('Variable "auto_close" does not exist.', 2, $this->source); })()), true)) : (true));
            // line 3
            yield "    ";
            $context["id"] = ((array_key_exists("id", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 3, $this->source); })()), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset())));
            // line 4
            yield "
    <div class=\"accordion";
            // line 5
            if ((($tmp = (isset($context["flush"]) || array_key_exists("flush", $context) ? $context["flush"] : (function () { throw new RuntimeError('Variable "flush" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " accordion-flush";
            }
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 6, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                yield "            ";
                $context["item"] = Twig\Extension\CoreExtension::merge(["open" =>                 // line 8
(isset($context["open"]) || array_key_exists("open", $context) ? $context["open"] : (function () { throw new RuntimeError('Variable "open" does not exist.', 8, $this->source); })()), "icon" => null],                 // line 10
$context["item"]);
                // line 11
                yield "            ";
                $context["item_id"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 11), ("collapse" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 11)))) : (("collapse" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 11))));
                // line 12
                yield "
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button ";
                // line 15
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "open", [], "any", false, false, false, 15) == true)) ? ("") : ("collapsed"));
                yield "\"
                            type=\"button\"
                            data-bs-toggle=\"collapse\"
                            data-bs-target=\"#";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["item_id"]) || array_key_exists("item_id", $context) ? $context["item_id"] : (function () { throw new RuntimeError('Variable "item_id" does not exist.', 18, $this->source); })()), "html", null, true);
                yield "\"
                            aria-expanded=\"";
                // line 19
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "open", [], "any", false, false, false, 19) == true)) ? ("true") : ("false"));
                yield "\"
                            aria-controls=\"";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["item_id"]) || array_key_exists("item_id", $context) ? $context["item_id"] : (function () { throw new RuntimeError('Variable "item_id" does not exist.', 20, $this->source); })()), "html", null, true);
                yield "\">

                    <span class=\"d-flex gap-2\">
                            ";
                // line 23
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 24
                    yield "                                <span class=\"d-flex align-items-center\">";
                    yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 24));
                    yield "</span>
                            ";
                }
                // line 26
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 26), "Title")) : ("Title")), "html", null, true);
                yield "
                    </span>

                    <span class=\"accordion-button-toggle\">
                        ";
                // line 30
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:chevron-down");
                yield "
                    </span>
                    </button>
                </h2>
                <div id=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["item_id"]) || array_key_exists("item_id", $context) ? $context["item_id"] : (function () { throw new RuntimeError('Variable "item_id" does not exist.', 34, $this->source); })()), "html", null, true);
                yield "\"
                     class=\"accordion-collapse collapse ";
                // line 35
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "open", [], "any", false, false, false, 35) == true)) ? ("show") : (""));
                yield "\"
                     ";
                // line 36
                if (((isset($context["auto_close"]) || array_key_exists("auto_close", $context) ? $context["auto_close"] : (function () { throw new RuntimeError('Variable "auto_close" does not exist.', 36, $this->source); })()) == true)) {
                    yield "data-bs-parent=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 36, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                yield ">

                    <div class=\"accordion-body\">
                        ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 39), "Content")) : ("Content")), "html", null, true);
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "    </div>
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
        return "@SyliusAdmin/shared/helper/accordion.html.twig";
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
        return array (  205 => 44,  186 => 39,  176 => 36,  172 => 35,  168 => 34,  161 => 30,  153 => 26,  147 => 24,  145 => 23,  139 => 20,  135 => 19,  131 => 18,  125 => 15,  120 => 12,  117 => 11,  115 => 10,  114 => 8,  112 => 7,  95 => 6,  87 => 5,  84 => 4,  81 => 3,  78 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro accordion(items, open = false, auto_close = null, flush = false) %}
    {% set auto_close = auto_close|default(true) %}
    {% set id = id|default(random()) %}

    <div class=\"accordion{% if flush %} accordion-flush{% endif %}\" id=\"{{ id }}\">
        {% for item in items %}
            {% set item = {
                'open': open,
                'icon': null,
            }|merge(item) %}
            {% set item_id = item.id|default('collapse' ~ loop.index) %}

            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button {{ item.open == true ? '' : 'collapsed' }}\"
                            type=\"button\"
                            data-bs-toggle=\"collapse\"
                            data-bs-target=\"#{{ item_id }}\"
                            aria-expanded=\"{{ item.open == true ? 'true' : 'false' }}\"
                            aria-controls=\"{{ item_id }}\">

                    <span class=\"d-flex gap-2\">
                            {% if item.icon %}
                                <span class=\"d-flex align-items-center\">{{ ux_icon(item.icon) }}</span>
                            {% endif %}
                        {{ item.title|default('Title') }}
                    </span>

                    <span class=\"accordion-button-toggle\">
                        {{ ux_icon('tabler:chevron-down') }}
                    </span>
                    </button>
                </h2>
                <div id=\"{{ item_id }}\"
                     class=\"accordion-collapse collapse {{ item.open == true ? 'show' : '' }}\"
                     {% if auto_close == true %}data-bs-parent=\"#{{ id }}\"{% endif %}>

                    <div class=\"accordion-body\">
                        {{ item.content|default('Content') }}
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% endmacro %}
", "@SyliusAdmin/shared/helper/accordion.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/helper/accordion.html.twig");
    }
}
