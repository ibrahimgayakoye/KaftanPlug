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

/* @SyliusAdmin/order/history/content/sections/addresses/address.html.twig */
class __TwigTemplate_d077c597a6f5d352f4e91353a17ce713 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/history/content/sections/addresses/address.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/order/history/content/sections/addresses/address.html.twig"));

        // line 1
        trigger_deprecation('', '', "The \"address.html.twig\" template is deprecated, use \"billing_address.html.twig\" or \"shipping_address.html.twig\" instead."." in \"@SyliusAdmin/order/history/content/sections/addresses/address.html.twig\" at line 1.");
        // line 2
        yield "
";
        // line 3
        $macros["_v0"] = $this->macros["_v0"] = $this->load("@SyliusAdmin/order/history/macro/action_label.html.twig", 3)->unwrap();
        // line 4
        yield "
";
        // line 5
        $context["header"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("header", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 5, $this->source); })()), "sylius.ui.address")) : ("sylius.ui.address")));
        // line 6
        yield "
<div class=\"mb-5\" ";
        // line 7
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("address-type", (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 7, $this->source); })()));
        yield ">
    <div class=\"mb-6 border-bottom\">
        <div class=\"h2\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "</div>
    </div>";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["address_logs"]) || array_key_exists("address_logs", $context) ? $context["address_logs"] : (function () { throw new RuntimeError('Variable "address_logs" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 12
            yield "<div class=\"row\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("address-log");
            yield ">
            <div class=\"col-12 col-sm-4 col-md-2 text-sm-end mb-3 pe-xl-5\">
                ";
            // line 14
            yield $macros["_v0"]->getTemplateForMacro("macro_label", $context, 14, $this->getSourceContext())->macro_label(...[$context["log"]]);
            yield "
                <div class=\"d-inline d-sm-block text-secondary pe-sm-3 pt-3\">
                    <span class=\"text-nowrap\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "loggedAt", [], "any", false, false, false, 16), "Y-m-d"), "html", null, true);
            yield "</span>
                    <span class=\"text-nowrap\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "loggedAt", [], "any", false, false, false, 17), "H:i:s"), "html", null, true);
            yield "</span>
                </div>
            </div>
            <div class=\"col-12 col-sm-8 col-md-9\">
                <div class=\"alert alert-";
            // line 21
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 21) == "create")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 21) == "update")) ? ("yellow") : (""))));
            yield "\">
                    <div class=\"table-responsive text-secondary\">
                        <table class=\"table table-sm table-vcenter\">";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["log"], "data", [], "any", false, false, false, 24), function ($__data__) use ($context, $macros) { $context["data"] = $__data__; return  !Twig\Extension\CoreExtension::testEmpty($context["data"]); }));
            foreach ($context['_seq'] as $context["field"] => $context["data"]) {
                // line 25
                yield "<tr>
                                    <td class=\"col-4 border-0\"><strong>";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("sylius.ui." . CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString($context["field"]), "snake", [], "any", false, false, false, 26))), "html", null, true);
                yield "</strong></td>
                                    <td class=\"col-8 border-0 text-body w-full\"><span>";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["data"], "html", null, true);
                yield "</span></td>
                                </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['field'], $context['data'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "</table>
                    </div>
                </div>
            </div>
        </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['log'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "</div>
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
        return "@SyliusAdmin/order/history/content/sections/addresses/address.html.twig";
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
        return array (  132 => 36,  122 => 30,  114 => 27,  110 => 26,  107 => 25,  103 => 24,  98 => 21,  91 => 17,  87 => 16,  82 => 14,  76 => 12,  72 => 11,  68 => 9,  63 => 7,  60 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% deprecated 'The \"address.html.twig\" template is deprecated, use \"billing_address.html.twig\" or \"shipping_address.html.twig\" instead.' %}

{% from '@SyliusAdmin/order/history/macro/action_label.html.twig' import label %}

{% set header = (header|default('sylius.ui.address'))|trans %}

<div class=\"mb-5\" {{ sylius_test_html_attribute('address-type', header) }}>
    <div class=\"mb-6 border-bottom\">
        <div class=\"h2\">{{ header }}</div>
    </div>
    {%- for log in address_logs -%}
        <div class=\"row\" {{ sylius_test_html_attribute('address-log') }}>
            <div class=\"col-12 col-sm-4 col-md-2 text-sm-end mb-3 pe-xl-5\">
                {{ label(log) }}
                <div class=\"d-inline d-sm-block text-secondary pe-sm-3 pt-3\">
                    <span class=\"text-nowrap\">{{ log.loggedAt|date('Y-m-d') }}</span>
                    <span class=\"text-nowrap\">{{ log.loggedAt|date('H:i:s') }}</span>
                </div>
            </div>
            <div class=\"col-12 col-sm-8 col-md-9\">
                <div class=\"alert alert-{{ log.action == 'create' ? 'success' : (log.action == 'update' ? 'yellow') }}\">
                    <div class=\"table-responsive text-secondary\">
                        <table class=\"table table-sm table-vcenter\">
                            {%- for field, data in log.data|filter(data => not data is empty) -%}
                                <tr>
                                    <td class=\"col-4 border-0\"><strong>{{ ('sylius.ui.' ~ field|u.snake)|trans }}</strong></td>
                                    <td class=\"col-8 border-0 text-body w-full\"><span>{{ data }}</span></td>
                                </tr>
                            {%- endfor -%}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    {%- endfor -%}
</div>
", "@SyliusAdmin/order/history/content/sections/addresses/address.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/order/history/content/sections/addresses/address.html.twig");
    }
}
