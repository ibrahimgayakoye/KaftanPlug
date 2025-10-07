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

/* @SyliusAdmin/dashboard/index/component/new_orders.html.twig */
class __TwigTemplate_239e0b83c051ce07d6624ac0bbf7238f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/dashboard/index/component/new_orders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/dashboard/index/component/new_orders.html.twig"));

        // line 1
        yield "<div class=\"col-12 col-md-6\" ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield ">
    <div class=\"card mb-3\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.new_orders"), "html", null, true);
        yield "</h3>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-vcenter card-table\" ";
        // line 7
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("new-orders");
        yield ">
                <thead>
                <tr>
                    <th>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customer"), "html", null, true);
        yield "</th>
                    <th class=\"text-center\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.items"), "html", null, true);
        yield "</th>
                    <th class=\"text-center\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total"), "html", null, true);
        yield "</th>
                    <th class=\"w-1\"></th>
                </tr>
                </thead>
                <tbody>
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["new_orders"]) || array_key_exists("new_orders", $context) ? $context["new_orders"] : (function () { throw new RuntimeError('Variable "new_orders" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 18
            yield "                        <tr>
                            <td>
                                <div class=\"row align-items-center py-1\">
                                    <div class=\"col-auto\">
                                        <span class=\"avatar \">
                                            ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 23), "firstName", [], "any", false, false, false, 23)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 23), "lastName", [], "any", false, false, false, 23)), "html", null, true);
            yield "
                                        </span>
                                    </div>
                                    <div class=\"col text-truncate\">
                                        <div>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 27), "firstName", [], "any", false, false, false, 27), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 27), "lastName", [], "any", false, false, false, 27), "html", null, true);
            yield "</div>
                                        <div class=\"text-muted text-truncate mt-n1\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 28), "email", [], "any", false, false, false, 28), "html", null, true);
            yield "</div>
                                    </div>
                                </div>
                            </td>
                            <td class=\"text-center\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "items", [], "any", false, false, false, 32)), "html", null, true);
            yield "</td>
                            <td class=\"text-center text-muted\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sylius_format_money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 33), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "currencyCode", [], "any", false, false, false, 33), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "localeCode", [], "any", false, false, false, 33)), "html", null, true);
            yield "</td>
                            <td class=\"text-end\">
                                <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" class=\"btn btn-icon\" data-bs-toggle=\"tooltip\" data-bs-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show"), "html", null, true);
            yield "\">
                                    ";
            // line 36
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon(((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 36, $this->source); })()), "icon", [], "any", false, false, false, 36), "tabler:eye")) : ("tabler:eye")));
            yield "
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                </tbody>
                <tfoot>
                <tr>
                    <td colspan=\"4\" class=\"text-center\"><a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_index");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show_all"), "html", null, true);
        yield "</a></td>
                </tr>
                </tfoot>
            </table>
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
        return "@SyliusAdmin/dashboard/index/component/new_orders.html.twig";
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
        return array (  146 => 44,  141 => 41,  130 => 36,  124 => 35,  119 => 33,  115 => 32,  108 => 28,  102 => 27,  94 => 23,  87 => 18,  83 => 17,  75 => 12,  71 => 11,  67 => 10,  61 => 7,  55 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"col-12 col-md-6\" {{ attributes }}>
    <div class=\"card mb-3\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">{{ 'sylius.ui.new_orders'|trans }}</h3>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-vcenter card-table\" {{ sylius_test_html_attribute('new-orders') }}>
                <thead>
                <tr>
                    <th>{{ 'sylius.ui.customer'|trans }}</th>
                    <th class=\"text-center\">{{ 'sylius.ui.items'|trans }}</th>
                    <th class=\"text-center\">{{ 'sylius.ui.total'|trans }}</th>
                    <th class=\"w-1\"></th>
                </tr>
                </thead>
                <tbody>
                    {% for order in new_orders %}
                        <tr>
                            <td>
                                <div class=\"row align-items-center py-1\">
                                    <div class=\"col-auto\">
                                        <span class=\"avatar \">
                                            {{ order.customer.firstName|first }}{{ order.customer.lastName|first }}
                                        </span>
                                    </div>
                                    <div class=\"col text-truncate\">
                                        <div>{{ order.customer.firstName }} {{ order.customer.lastName }}</div>
                                        <div class=\"text-muted text-truncate mt-n1\">{{ order.customer.email }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class=\"text-center\">{{ order.items|length }}</td>
                            <td class=\"text-center text-muted\">{{ order.total|sylius_format_money(order.currencyCode, order.localeCode) }}</td>
                            <td class=\"text-end\">
                                <a href=\"{{ path('sylius_admin_order_show', { id: order.id }) }}\" class=\"btn btn-icon\" data-bs-toggle=\"tooltip\" data-bs-title=\"{{ 'sylius.ui.show'|trans }}\">
                                    {{ ux_icon(action.icon|default('tabler:eye')) }}
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
                <tfoot>
                <tr>
                    <td colspan=\"4\" class=\"text-center\"><a href=\"{{ path('sylius_admin_order_index') }}\">{{ 'sylius.ui.show_all'|trans }}</a></td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
", "@SyliusAdmin/dashboard/index/component/new_orders.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/dashboard/index/component/new_orders.html.twig");
    }
}
