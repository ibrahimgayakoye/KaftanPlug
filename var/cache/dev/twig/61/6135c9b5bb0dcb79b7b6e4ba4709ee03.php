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

/* @SyliusAdmin/customer/show/content/sections/general/default_address.html.twig */
class __TwigTemplate_d6d0099e8e6bc6dc8d448a5d6ae40cc4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/customer/show/content/sections/general/default_address.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/customer/show/content/sections/general/default_address.html.twig"));

        // line 1
        yield "<div class=\"row\">
    <div class=\"col-12 col-md-4 fw-bold\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.default_address"), "html", null, true);
        yield "</div>
    <div class=\"col-12 col-md-8\" ";
        // line 3
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("customer-default-address");
        yield ">
        ";
        // line 4
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 4, $this->source); })()), "context", [], "any", false, false, false, 4), "customer", [], "any", false, false, false, 4), "defaultAddress", [], "any", false, false, false, 4))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "            ";
            $context["address"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 5, $this->source); })()), "context", [], "any", false, false, false, 5), "customer", [], "any", false, false, false, 5), "defaultAddress", [], "any", false, false, false, 5);
            // line 6
            yield "            <span>
                ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 7, $this->source); })()), "fullname", [], "any", false, false, false, 7), "html", null, true);
            yield ",
                ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 8, $this->source); })()), "street", [], "any", false, false, false, 8), "html", null, true);
            yield ",
                ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 9, $this->source); })()), "postcode", [], "any", false, false, false, 9), "html", null, true);
            yield "
                ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 10, $this->source); })()), "city", [], "any", false, false, false, 10), "html", null, true);
            yield ",
                ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->env->getFilter('sylius_province_name')->getCallable()((isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 11, $this->source); })())), ""), "html", null, true);
            yield "
                ";
            // line 12
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon(("flagpack:" . Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 12, $this->source); })()), "countryCode", [], "any", false, false, false, 12))), ["class" => "flag flag-xs"]);
            yield "
                ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension']->translateCountryIsoCode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 13, $this->source); })()), "countryCode", [], "any", false, false, false, 13)), "html", null, true);
            yield "
            </span>
        ";
        } else {
            // line 16
            yield "            <span class=\"text-muted\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.this_customer_does_not_have_a_default_address"), "html", null, true);
            yield "</span>
        ";
        }
        // line 18
        yield "    </div>
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
        return "@SyliusAdmin/customer/show/content/sections/general/default_address.html.twig";
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
        return array (  103 => 18,  97 => 16,  91 => 13,  87 => 12,  83 => 11,  79 => 10,  75 => 9,  71 => 8,  67 => 7,  64 => 6,  61 => 5,  59 => 4,  55 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row\">
    <div class=\"col-12 col-md-4 fw-bold\">{{ 'sylius.ui.default_address'|trans }}</div>
    <div class=\"col-12 col-md-8\" {{ sylius_test_html_attribute('customer-default-address') }}>
        {% if hookable_metadata.context.customer.defaultAddress is not empty %}
            {% set address = hookable_metadata.context.customer.defaultAddress %}
            <span>
                {{ address.fullname }},
                {{ address.street }},
                {{ address.postcode }}
                {{ address.city }},
                {{ address|sylius_province_name|default('') }}
                {{ ux_icon('flagpack:' ~ address.countryCode|lower, {'class': 'flag flag-xs'}) }}
                {{ address.countryCode|sylius_country_name }}
            </span>
        {% else %}
            <span class=\"text-muted\">{{ 'sylius.ui.this_customer_does_not_have_a_default_address'|trans }}</span>
        {% endif %}
    </div>
</div>
", "@SyliusAdmin/customer/show/content/sections/general/default_address.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/customer/show/content/sections/general/default_address.html.twig");
    }
}
