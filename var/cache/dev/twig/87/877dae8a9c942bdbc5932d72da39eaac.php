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

/* @SyliusAdmin/order/show/content/header/title_block/actions/cancel.html.twig */
class __TwigTemplate_44109518b6cfce122ae00a8a4961aeaa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/show/content/header/title_block/actions/cancel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/show/content/header/title_block/actions/cancel.html.twig"));

        // line 1
        trigger_deprecation('', '', "The \"cancel.html.twig\" template is deprecated. Please use list/cancel.html.twig"." in \"@SyliusAdmin/order/show/content/header/title_block/actions/cancel.html.twig\" at line 1.");
        // line 2
        yield "
";
        // line 3
        $context["order"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "resource", [], "any", false, false, false, 3);
        // line 4
        yield "
";
        // line 5
        if ((($tmp = $this->env->getFunction('sylius_sm_can')->getCallable()((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), Twig\Extension\CoreExtension::constant("Sylius\\Component\\Order\\OrderTransitions::GRAPH"), Twig\Extension\CoreExtension::constant("Sylius\\Component\\Order\\OrderTransitions::TRANSITION_CANCEL"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]), "html", null, true);
            yield "\" method=\"POST\" novalidate>
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)), "html", null, true);
            yield "\" />
        <button type=\"submit\" class=\"dropdown-item\" ";
            // line 9
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cancel-order");
            yield ">
            ";
            // line 10
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:circle-check", ["class" => "icon dropdown-item-icon"]);
            yield "
            ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cancel"), "html", null, true);
            yield "
        </button>
    </form>
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
        return "@SyliusAdmin/order/show/content/header/title_block/actions/cancel.html.twig";
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
        return array (  78 => 11,  74 => 10,  70 => 9,  66 => 8,  60 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% deprecated 'The \"cancel.html.twig\" template is deprecated. Please use list/cancel.html.twig' %}

{% set order = hookable_metadata.context.resource %}

{% if sylius_sm_can(order, constant('Sylius\\\\Component\\\\Order\\\\OrderTransitions::GRAPH'), constant('Sylius\\\\Component\\\\Order\\\\OrderTransitions::TRANSITION_CANCEL')) %}
    <form action=\"{{ path('sylius_admin_order_cancel', {'id': order.id}) }}\" method=\"POST\" novalidate>
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(order.id) }}\" />
        <button type=\"submit\" class=\"dropdown-item\" {{ sylius_test_html_attribute('cancel-order') }}>
            {{ ux_icon('tabler:circle-check', {'class': 'icon dropdown-item-icon'}) }}
            {{ 'sylius.ui.cancel'|trans }}
        </button>
    </form>
{% endif %}
", "@SyliusAdmin/order/show/content/header/title_block/actions/cancel.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/order/show/content/header/title_block/actions/cancel.html.twig");
    }
}
