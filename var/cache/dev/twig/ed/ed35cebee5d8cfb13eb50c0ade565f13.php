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

/* @SyliusShop/shared/helpers/accordion.html.twig */
class __TwigTemplate_bb51ee35c6b2e07c6ccc41428448272b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/helpers/accordion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/helpers/accordion.html.twig"));

        
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
            yield "
    ";
            // line 3
            $context["auto_close"] = ((array_key_exists("auto_close", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["auto_close"]) || array_key_exists("auto_close", $context) ? $context["auto_close"] : (function () { throw new RuntimeError('Variable "auto_close" does not exist.', 3, $this->source); })()), true)) : (true));
            // line 4
            yield "    ";
            $context["id"] = ((array_key_exists("id", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 4, $this->source); })()), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset())));
            // line 5
            yield "
    <div class=\"accordion";
            // line 6
            if ((($tmp = (isset($context["flush"]) || array_key_exists("flush", $context) ? $context["flush"] : (function () { throw new RuntimeError('Variable "flush" does not exist.', 6, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " accordion-flush";
            }
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 6, $this->source); })()), "html", null, true);
            yield "\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 7, $this->source); })()));
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
                // line 8
                yield "            ";
                $context["item"] = Twig\Extension\CoreExtension::merge(["open" =>                 // line 9
(isset($context["open"]) || array_key_exists("open", $context) ? $context["open"] : (function () { throw new RuntimeError('Variable "open" does not exist.', 9, $this->source); })()), "flag" => null, "icon" => null],                 // line 12
$context["item"]);
                // line 13
                yield "            ";
                $context["item_id"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 13), ("collapse" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 13)))) : (("collapse" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 13))));
                // line 14
                yield "
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button ";
                // line 17
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "open", [], "any", false, false, false, 17) == true)) ? ("") : ("collapsed"));
                yield "\"
                            type=\"button\"
                            data-bs-toggle=\"collapse\"
                            data-bs-target=\"#";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["item_id"]) || array_key_exists("item_id", $context) ? $context["item_id"] : (function () { throw new RuntimeError('Variable "item_id" does not exist.', 20, $this->source); })()), "html", null, true);
                yield "\"
                            aria-expanded=\"";
                // line 21
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "open", [], "any", false, false, false, 21) == true)) ? ("true") : ("false"));
                yield "\"
                            aria-controls=\"";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["item_id"]) || array_key_exists("item_id", $context) ? $context["item_id"] : (function () { throw new RuntimeError('Variable "item_id" does not exist.', 22, $this->source); })()), "html", null, true);
                yield "\">

                        <span class=\"d-flex gap-2 align-items-center\">
                            ";
                // line 25
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "flag", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 26
                    yield "                                <span class=\"flag flag-country-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "flag", [], "any", false, false, false, 26), "html", null, true);
                    yield "\"></span>
                            ";
                }
                // line 28
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 29
                    yield "                                <span class=\"d-flex align-items-center\">";
                    yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 29));
                    yield "</span>
                            ";
                }
                // line 31
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 31), "Title")) : ("Title")), "html", null, true);
                yield "
                        </span>
                    </button>
                </h2>
                <div id=\"";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["item_id"]) || array_key_exists("item_id", $context) ? $context["item_id"] : (function () { throw new RuntimeError('Variable "item_id" does not exist.', 35, $this->source); })()), "html", null, true);
                yield "\"
                     class=\"accordion-collapse collapse ";
                // line 36
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "open", [], "any", false, false, false, 36) == true)) ? ("show") : (""));
                yield "\"
                     ";
                // line 37
                if (((isset($context["auto_close"]) || array_key_exists("auto_close", $context) ? $context["auto_close"] : (function () { throw new RuntimeError('Variable "auto_close" does not exist.', 37, $this->source); })()) == true)) {
                    yield "data-bs-parent=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 37, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                yield ">

                    <div class=\"accordion-body\">
                        ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 40), "Content")) : ("Content")), "html", null, true);
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
            // line 45
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
        return "@SyliusShop/shared/helpers/accordion.html.twig";
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
        return array (  209 => 45,  190 => 40,  180 => 37,  176 => 36,  172 => 35,  164 => 31,  158 => 29,  155 => 28,  149 => 26,  147 => 25,  141 => 22,  137 => 21,  133 => 20,  127 => 17,  122 => 14,  119 => 13,  117 => 12,  116 => 9,  114 => 8,  97 => 7,  89 => 6,  86 => 5,  83 => 4,  81 => 3,  78 => 2,  57 => 1,);
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
                'flag': null,
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

                        <span class=\"d-flex gap-2 align-items-center\">
                            {% if item.flag %}
                                <span class=\"flag flag-country-{{ item.flag }}\"></span>
                            {% endif %}
                            {% if item.icon %}
                                <span class=\"d-flex align-items-center\">{{ ux_icon(item.icon) }}</span>
                            {% endif %}
                            {{ item.title|default('Title') }}
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
", "@SyliusShop/shared/helpers/accordion.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/helpers/accordion.html.twig");
    }
}
