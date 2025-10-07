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

/* @SyliusAdmin/payment_method/grid/action/create.html.twig */
class __TwigTemplate_ce4e81ee770822e2756153afe900dc8a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/payment_method/grid/action/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/payment_method/grid/action/create.html.twig"));

        // line 1
        $macros["dropdown"] = $this->macros["dropdown"] = $this->load("@SyliusAdmin/shared/helper/dropdown.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        yield $macros["dropdown"]->getTemplateForMacro("macro_list", $context, 3, $this->getSourceContext())->macro_list(...[["direction" => "down-end", "button" => ["text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.create"), "icon" => "tabler:plus"]], Twig\Extension\CoreExtension::map($this->env, $this->extensions['Sylius\Bundle\AdminBundle\Twig\PaymentMethodExtension']->getPaymentGateways(),         // line 8
function ($__gatewayName__, $__gatewayServiceId__) use ($context, $macros) { $context["gatewayName"] = $__gatewayName__; $context["gatewayServiceId"] = $__gatewayServiceId__; return ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 9
(isset($context["gatewayName"]) || array_key_exists("gatewayName", $context) ? $context["gatewayName"] : (function () { throw new RuntimeError('Variable "gatewayName" does not exist.', 9, $this->source); })())), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_payment_method_create", ["factory" =>         // line 10
(isset($context["gatewayServiceId"]) || array_key_exists("gatewayServiceId", $context) ? $context["gatewayServiceId"] : (function () { throw new RuntimeError('Variable "gatewayServiceId" does not exist.', 10, $this->source); })())])]; })]);
        // line 12
        yield "
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
        return "@SyliusAdmin/payment_method/grid/action/create.html.twig";
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
        return array (  58 => 12,  56 => 10,  55 => 9,  54 => 8,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/shared/helper/dropdown.html.twig' as dropdown %}

{{ dropdown.list(
    {
        direction: 'down-end',
        button: { text: 'sylius.ui.create'|trans, icon: 'tabler:plus' }
    },
    sylius_admin_get_payment_gateways()|map((gatewayName, gatewayServiceId) => {
        title: gatewayName|trans,
        url: path('sylius_admin_payment_method_create', { 'factory': gatewayServiceId }),
    })
) }}
", "@SyliusAdmin/payment_method/grid/action/create.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/payment_method/grid/action/create.html.twig");
    }
}
