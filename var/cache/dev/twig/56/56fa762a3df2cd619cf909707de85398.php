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

/* @SyliusAdmin/shared/grid/action/list.html.twig */
class __TwigTemplate_fc16f1abae57bb021c652fde527fac35 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/grid/action/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/grid/action/list.html.twig"));

        // line 1
        $context["visible"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "visible", [], "any", true, true, false, 1)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })()), "visible", [], "any", false, false, false, 1)) : (true));
        // line 2
        yield "
";
        // line 3
        if ((($tmp = (isset($context["visible"]) || array_key_exists("visible", $context) ? $context["visible"] : (function () { throw new RuntimeError('Variable "visible" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    <div>
        ";
            // line 5
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 5, $this->source); })()), "label", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 6
                yield "            <span class=\"dropdown-header\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 6, $this->source); })()), "label", [], "any", false, false, false, 6)), "html", null, true);
                yield "</span>
        ";
            }
            // line 8
            yield "
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 9, $this->source); })()), "links", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 10
                yield "            ";
                $context["is_link_visible"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["link"], "visible", [], "any", true, true, false, 10)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["link"], "visible", [], "any", false, false, false, 10)) : (true));
                // line 11
                yield "
            ";
                // line 12
                if ((($tmp = (isset($context["is_link_visible"]) || array_key_exists("is_link_visible", $context) ? $context["is_link_visible"] : (function () { throw new RuntimeError('Variable "is_link_visible" does not exist.', 12, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 13
                    yield "                ";
                    $context["path"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", true, true, false, 13)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 13)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "route", [], "any", false, false, false, 13), ((CoreExtension::getAttribute($this->env, $this->source, $context["link"], "parameters", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "parameters", [], "any", false, false, false, 13), [])) : ([])))));
                    // line 14
                    yield "                <a class=\"dropdown-item\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 14, $this->source); })()), "html", null, true);
                    yield "\">
                    ";
                    // line 15
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["link"], "icon", [], "any", true, true, false, 15)) {
                        // line 16
                        yield "                        ";
                        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "icon", [], "any", false, false, false, 16), ["class" => "icon dropdown-item-icon"]);
                        yield "
                    ";
                    }
                    // line 18
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "label", [], "any", false, false, false, 18)), "html", null, true);
                    yield "
                </a>
            ";
                }
                // line 21
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "    </div>
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
        return "@SyliusAdmin/shared/grid/action/list.html.twig";
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
        return array (  110 => 22,  104 => 21,  97 => 18,  91 => 16,  89 => 15,  84 => 14,  81 => 13,  79 => 12,  76 => 11,  73 => 10,  69 => 9,  66 => 8,  60 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set visible = options.visible is defined ? options.visible : true %}

{% if visible %}
    <div>
        {% if action.label %}
            <span class=\"dropdown-header\">{{ action.label|trans }}</span>
        {% endif %}

        {% for link in options.links %}
            {% set is_link_visible = link.visible is defined ? link.visible : true %}

            {% if is_link_visible %}
                {% set path = link.url is defined ? link.url : path(link.route, link.parameters|default([])) %}
                <a class=\"dropdown-item\" href=\"{{ path }}\">
                    {% if link.icon is defined %}
                        {{ ux_icon(link.icon, {'class': 'icon dropdown-item-icon' }) }}
                    {% endif %}
                    {{ link.label|trans }}
                </a>
            {% endif %}
        {% endfor %}
    </div>
{% endif %}
", "@SyliusAdmin/shared/grid/action/list.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/grid/action/list.html.twig");
    }
}
