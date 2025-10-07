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

/* @SyliusShop/checkout/address/content/form/user.html.twig */
class __TwigTemplate_8fa3e5a90523b0492a1bb3180956aa01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/checkout/address/content/form/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/checkout/address/content/form/user.html.twig"));

        // line 1
        $context["form"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "form", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "customer", [], "any", true, true, false, 3)) {
            // line 4
            yield "    <div ";
            yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("@sylius/shop-bundle/api-login", ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_json_login_check")]);
            yield ">
        <div class=\"d-none\">
            <div class=\"alert alert-danger\" ";
            // line 6
            yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("@sylius/shop-bundle/api-login", "errorPrototype");
            yield "></div>
        </div>
        ";
            // line 8
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "customer", [], "any", false, false, false, 8), "email", [], "any", false, false, false, 8), 'row', $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("login-email"), ["attr" => ["data-sylius--shop-bundle--api-login-target" => "email"]]));
            yield "
        ";
            // line 9
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 9, $this->source); })()), "context", [], "any", false, false, false, 9), "email_exists", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 10
                yield "            <div class=\"input-group mb-2\">
                <input type=\"password\" class=\"form-control\" placeholder=\"";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.password"), "html", null, true);
                yield "\" ";
                yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("@sylius/shop-bundle/api-login", "password");
                yield " ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("password-input");
                yield ">
                <button class=\"btn btn-primary\" type=\"button\" ";
                // line 12
                yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("@sylius/shop-bundle/api-login", "login");
                yield " ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("login-button");
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sign_in"), "html", null, true);
                yield "</button>
            </div>
            <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("shop_authenticate"), "html", null, true);
                yield "\" ";
                yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("@sylius/shop-bundle/api-login", "csrfToken");
                yield ">
            <div ";
                // line 15
                yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("@sylius/shop-bundle/api-login", "error");
                yield " ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("login-validation-error");
                yield "></div>
        ";
            }
            // line 17
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
        return "@SyliusShop/checkout/address/content/form/user.html.twig";
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
        return array (  105 => 17,  98 => 15,  92 => 14,  83 => 12,  75 => 11,  72 => 10,  70 => 9,  66 => 8,  61 => 6,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set form = hookable_metadata.context.form %}

{% if form.customer is defined %}
    <div {{ stimulus_controller('@sylius/shop-bundle/api-login', {url: path('sylius_shop_json_login_check')} ) }}>
        <div class=\"d-none\">
            <div class=\"alert alert-danger\" {{ stimulus_target('@sylius/shop-bundle/api-login', 'errorPrototype') }}></div>
        </div>
        {{ form_row(form.customer.email, sylius_test_form_attribute('login-email')|sylius_merge_recursive({attr: {'data-sylius--shop-bundle--api-login-target': 'email'}})) }}
        {% if hookable_metadata.context.email_exists %}
            <div class=\"input-group mb-2\">
                <input type=\"password\" class=\"form-control\" placeholder=\"{{ 'sylius.ui.password'|trans }}\" {{ stimulus_target('@sylius/shop-bundle/api-login', 'password') }} {{ sylius_test_html_attribute('password-input') }}>
                <button class=\"btn btn-primary\" type=\"button\" {{ stimulus_action('@sylius/shop-bundle/api-login', 'login') }} {{ sylius_test_html_attribute('login-button') }}>{{ 'sylius.ui.sign_in'|trans }}</button>
            </div>
            <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"{{ csrf_token('shop_authenticate') }}\" {{ stimulus_target('@sylius/shop-bundle/api-login', 'csrfToken') }}>
            <div {{ stimulus_target('@sylius/shop-bundle/api-login', 'error') }} {{ sylius_test_html_attribute('login-validation-error') }}></div>
        {% endif %}
    </div>
{% endif %}
", "@SyliusShop/checkout/address/content/form/user.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/checkout/address/content/form/user.html.twig");
    }
}
