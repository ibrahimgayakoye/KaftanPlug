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

/* @SyliusAdmin/shared/grid/field/payment_state.html.twig */
class __TwigTemplate_d10635d7c0a1c69ca7bda0f1a6e06a69 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/grid/field/payment_state.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/grid/field/payment_state.html.twig"));

        // line 2
        $context["viewOptions"] = ["authorized" => ["color" => "bg-orange-lt"], "cancelled" => ["color" => "bg-yellow-lt"], "cart" => ["color" => "bg-lime-lt"], "completed" => ["color" => "bg-green-lt"], "failed" => ["color" => "bg-red-lt"], "new" => ["color" => ""], "processing" => ["color" => "bg-indigo-lt"], "refunded" => ["color" => "bg-purple-lt"]];
        // line 13
        yield "
";
        // line 14
        $context["value"] = ("sylius.ui." . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()));
        // line 15
        yield "
<span class=\"badge ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewOptions"]) || array_key_exists("viewOptions", $context) ? $context["viewOptions"] : (function () { throw new RuntimeError('Variable "viewOptions" does not exist.', 16, $this->source); })()), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), [], "array", false, false, false, 16), "color", [], "array", false, false, false, 16), "html", null, true);
        yield "\">
    ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 17, $this->source); })())), "html", null, true);
        yield "
</span>
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
        return "@SyliusAdmin/shared/grid/field/payment_state.html.twig";
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
        return array (  62 => 17,  58 => 16,  55 => 15,  53 => 14,  50 => 13,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{%
    set viewOptions = {
    authorized: { color: 'bg-orange-lt' },
    cancelled: { color: 'bg-yellow-lt' },
    cart: { color: 'bg-lime-lt' },
    completed: { color: 'bg-green-lt' },
    failed: { color: 'bg-red-lt' },
    new: { color: '' },
    processing: { color: 'bg-indigo-lt' },
    refunded: { color: 'bg-purple-lt' },
}
%}

{% set value = 'sylius.ui.' ~ data %}

<span class=\"badge {{ viewOptions[data]['color'] }}\">
    {{ value|trans }}
</span>
", "@SyliusAdmin/shared/grid/field/payment_state.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/grid/field/payment_state.html.twig");
    }
}
