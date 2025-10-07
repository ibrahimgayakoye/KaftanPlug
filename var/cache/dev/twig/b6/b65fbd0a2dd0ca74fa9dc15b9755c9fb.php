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

/* @SyliusAdmin/dashboard/index/component/new_customers.html.twig */
class __TwigTemplate_bf319a9f263d499dd23d46751af4ce89 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/dashboard/index/component/new_customers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/dashboard/index/component/new_customers.html.twig"));

        // line 1
        yield "<div class=\"col-12 col-md-6\">
    <div class=\"card mb-3\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.new_customers"), "html", null, true);
        yield "</h3>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-vcenter card-table\">
                <thead>
                <tr>
                    <th>Customer</th>
                    <th class=\"w-1\"></th>
                </tr>
                </thead>
                <tbody>
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["new_customers"]) || array_key_exists("new_customers", $context) ? $context["new_customers"] : (function () { throw new RuntimeError('Variable "new_customers" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 16
            yield "                        <tr>
                            <td>
                                <div class=\"row align-items-center py-1\">
                                    <div class=\"col-auto\">
                                        <span class=\"avatar \">
                                            ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "firstName", [], "any", false, false, false, 21)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "lastName", [], "any", false, false, false, 21)), "html", null, true);
            yield "
                                        </span>
                                    </div>
                                    <div class=\"col text-truncate\">
                                        <div>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "firstName", [], "any", false, false, false, 25), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "lastName", [], "any", false, false, false, 25), "html", null, true);
            yield "</div>
                                        <div class=\"text-muted text-truncate mt-n1\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 26), "html", null, true);
            yield "</div>
                                    </div>
                                </div>
                            </td>
                            <td class=\"text-end\">
                                <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_customer_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"btn btn-icon\" data-bs-toggle=\"tooltip\" data-bs-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show"), "html", null, true);
            yield "\">
                                    ";
            // line 32
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:eye");
            yield "
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                </tbody>
                <tfoot>
                <tr>
                    <td colspan=\"2\" class=\"text-center\"><a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_customer_index");
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
        return "@SyliusAdmin/dashboard/index/component/new_customers.html.twig";
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
        return array (  122 => 40,  117 => 37,  106 => 32,  100 => 31,  92 => 26,  86 => 25,  78 => 21,  71 => 16,  67 => 15,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"col-12 col-md-6\">
    <div class=\"card mb-3\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">{{ 'sylius.ui.new_customers'|trans }}</h3>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-vcenter card-table\">
                <thead>
                <tr>
                    <th>Customer</th>
                    <th class=\"w-1\"></th>
                </tr>
                </thead>
                <tbody>
                    {% for customer in new_customers %}
                        <tr>
                            <td>
                                <div class=\"row align-items-center py-1\">
                                    <div class=\"col-auto\">
                                        <span class=\"avatar \">
                                            {{ customer.firstName|first }}{{ customer.lastName|first }}
                                        </span>
                                    </div>
                                    <div class=\"col text-truncate\">
                                        <div>{{ customer.firstName }} {{ customer.lastName }}</div>
                                        <div class=\"text-muted text-truncate mt-n1\">{{ customer.email }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class=\"text-end\">
                                <a href=\"{{ path('sylius_admin_customer_show', { id: customer.id }) }}\" class=\"btn btn-icon\" data-bs-toggle=\"tooltip\" data-bs-title=\"{{ 'sylius.ui.show'|trans }}\">
                                    {{ ux_icon('tabler:eye') }}
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
                <tfoot>
                <tr>
                    <td colspan=\"2\" class=\"text-center\"><a href=\"{{ path('sylius_admin_customer_index') }}\">{{ 'sylius.ui.show_all'|trans }}</a></td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
", "@SyliusAdmin/dashboard/index/component/new_customers.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/dashboard/index/component/new_customers.html.twig");
    }
}
