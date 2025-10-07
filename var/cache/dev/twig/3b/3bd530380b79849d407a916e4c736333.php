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

/* @SyliusMolliePlugin/admin/mollie_subscription/show/content/header/title_block/actions/cancel.html.twig */
class __TwigTemplate_092f1a9b01b6c66e83b0efbf0d3cf32c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/mollie_subscription/show/content/header/title_block/actions/cancel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/mollie_subscription/show/content/header/title_block/actions/cancel.html.twig"));

        // line 1
        $context["mollie_subscription"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "resource", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        if ((($tmp = $this->env->getFunction('sylius_sm_can')->getCallable()((isset($context["mollie_subscription"]) || array_key_exists("mollie_subscription", $context) ? $context["mollie_subscription"] : (function () { throw new RuntimeError('Variable "mollie_subscription" does not exist.', 3, $this->source); })()), Twig\Extension\CoreExtension::constant("Sylius\\MolliePlugin\\StateMachine\\MollieRecurringTransitions::GRAPH_MANUAL"), Twig\Extension\CoreExtension::constant("Sylius\\MolliePlugin\\StateMachine\\MollieRecurringTransitions::TRANSITION_CANCEL"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_mollie_admin_mollie_subscription_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["mollie_subscription"]) || array_key_exists("mollie_subscription", $context) ? $context["mollie_subscription"] : (function () { throw new RuntimeError('Variable "mollie_subscription" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)]), "html", null, true);
            yield "\" method=\"POST\" novalidate>
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mollie_subscription"]) || array_key_exists("mollie_subscription", $context) ? $context["mollie_subscription"] : (function () { throw new RuntimeError('Variable "mollie_subscription" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)), "html", null, true);
            yield "\" />
        <button type=\"submit\" class=\"btn btn-red\">
            ";
            // line 8
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:cancel");
            yield "
            ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_mollie.ui.subscription.transitions.cancel"), "html", null, true);
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
        return "@SyliusMolliePlugin/admin/mollie_subscription/show/content/header/title_block/actions/cancel.html.twig";
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
        return array (  70 => 9,  66 => 8,  61 => 6,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set mollie_subscription = hookable_metadata.context.resource %}

{% if sylius_sm_can(mollie_subscription, constant('Sylius\\\\MolliePlugin\\\\StateMachine\\\\MollieRecurringTransitions::GRAPH_MANUAL'), constant('Sylius\\\\MolliePlugin\\\\StateMachine\\\\MollieRecurringTransitions::TRANSITION_CANCEL')) %}
    <form action=\"{{ path('sylius_mollie_admin_mollie_subscription_cancel', {'id': mollie_subscription.id}) }}\" method=\"POST\" novalidate>
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(mollie_subscription.id) }}\" />
        <button type=\"submit\" class=\"btn btn-red\">
            {{ ux_icon('tabler:cancel') }}
            {{ 'sylius_mollie.ui.subscription.transitions.cancel'|trans }}
        </button>
    </form>
{% endif %}
", "@SyliusMolliePlugin/admin/mollie_subscription/show/content/header/title_block/actions/cancel.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/mollie_subscription/show/content/header/title_block/actions/cancel.html.twig");
    }
}
