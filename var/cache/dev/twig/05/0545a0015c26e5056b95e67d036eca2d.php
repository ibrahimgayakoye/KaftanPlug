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

/* @SyliusAdmin/shared/components/navbar/notifications.html.twig */
class __TwigTemplate_37900e437238c8a588d44aa932a48659 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/components/navbar/notifications.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/components/navbar/notifications.html.twig"));

        // line 2
        yield "
";
        // line 3
        $macros["dropdown"] = $this->macros["dropdown"] = $this->load("@SyliusAdmin/shared/helper/dropdown.html.twig", 3)->unwrap();
        // line 4
        yield "
<div class=\"nav-item\">
    ";
        // line 6
        $context["dropdown_trigger"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 7
            yield "        ";
            if ((($tmp = (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 8
                yield "            <button class=\"nav-link nav-button justify-content-center px-0 text-body\">
                ";
                // line 9
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:bell");
                yield "
                <span class=\"badge bg-red\" style=\"transform: translate(-3px, -9px)\"></span>
            </button>
        ";
            } else {
                // line 13
                yield "            <div class=\"nav-link px-0 text-body\">
                ";
                // line 14
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:bell");
                yield "
            </div>
        ";
            }
            // line 17
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        yield "
    ";
        // line 19
        $context["dropdown_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 20
            yield "        <div class=\"card\" style=\"min-width: 15rem; max-width: 25rem\">
            ";
            // line 21
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 21, $this->source); })()))) {
                // line 22
                yield "                <div class=\"card-header\">
                    <h3 class=\"card-title\">";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_new_notifications"), "html", null, true);
                yield "</h3>
                </div>
            ";
            } else {
                // line 26
                yield "                <div class=\"list-group list-group-flush list-group-hoverable\">
                    ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 27, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                    // line 28
                    yield "                        <div class=\"list-group-item\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-auto\">
                                    <span class=\"status-dot status-dot-animated bg-red d-block\"></span>
                                </div>
                                <div class=\"col\">
                                    <div class=\"d-block mt-n1\">
                                        ";
                    // line 35
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 35)), "html", null, true);
                    yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                yield "                </div>
            ";
            }
            // line 43
            yield "        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        yield "
    ";
        // line 46
        yield $macros["dropdown"]->getTemplateForMacro("macro_default", $context, 46, $this->getSourceContext())->macro_default(...[["class" => "dropdown-menu-card", "custom_trigger" =>         // line 48
(isset($context["dropdown_trigger"]) || array_key_exists("dropdown_trigger", $context) ? $context["dropdown_trigger"] : (function () { throw new RuntimeError('Variable "dropdown_trigger" does not exist.', 48, $this->source); })()), "content" =>         // line 49
(isset($context["dropdown_content"]) || array_key_exists("dropdown_content", $context) ? $context["dropdown_content"] : (function () { throw new RuntimeError('Variable "dropdown_content" does not exist.', 49, $this->source); })()), "direction" => "down-end"]]);
        // line 51
        yield "
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
        return "@SyliusAdmin/shared/components/navbar/notifications.html.twig";
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
        return array (  148 => 51,  146 => 49,  145 => 48,  144 => 46,  141 => 45,  136 => 43,  132 => 41,  120 => 35,  111 => 28,  107 => 27,  104 => 26,  98 => 23,  95 => 22,  93 => 21,  90 => 20,  88 => 19,  85 => 18,  81 => 17,  75 => 14,  72 => 13,  65 => 9,  62 => 8,  59 => 7,  57 => 6,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Rendered by \\Sylius\\Bundle\\AdminBundle\\TwigComponent\\Shared\\Navbar\\NotificationsComponent #}

{% import '@SyliusAdmin/shared/helper/dropdown.html.twig' as dropdown %}

<div class=\"nav-item\">
    {% set dropdown_trigger %}
        {% if notifications %}
            <button class=\"nav-link nav-button justify-content-center px-0 text-body\">
                {{ ux_icon('tabler:bell') }}
                <span class=\"badge bg-red\" style=\"transform: translate(-3px, -9px)\"></span>
            </button>
        {% else %}
            <div class=\"nav-link px-0 text-body\">
                {{ ux_icon('tabler:bell') }}
            </div>
        {% endif %}
    {% endset %}

    {% set dropdown_content %}
        <div class=\"card\" style=\"min-width: 15rem; max-width: 25rem\">
            {% if notifications is empty %}
                <div class=\"card-header\">
                    <h3 class=\"card-title\">{{ 'sylius.ui.no_new_notifications'|trans }}</h3>
                </div>
            {% else %}
                <div class=\"list-group list-group-flush list-group-hoverable\">
                    {% for notification in notifications %}
                        <div class=\"list-group-item\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-auto\">
                                    <span class=\"status-dot status-dot-animated bg-red d-block\"></span>
                                </div>
                                <div class=\"col\">
                                    <div class=\"d-block mt-n1\">
                                        {{ notification.message|trans }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    {% endset %}

    {{ dropdown.default({
        class: 'dropdown-menu-card',
        custom_trigger: dropdown_trigger,
        content: dropdown_content,
        direction: 'down-end'
    }) }}
</div>
", "@SyliusAdmin/shared/components/navbar/notifications.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/components/navbar/notifications.html.twig");
    }
}
