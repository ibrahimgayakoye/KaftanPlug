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

/* @SyliusShop/cart/index/content/form/sections/general/coupon.html.twig */
class __TwigTemplate_e4bae6e9d8e486943471d236d352b443 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/cart/index/content/form/sections/general/coupon.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/cart/index/content/form/sections/general/coupon.html.twig"));

        // line 1
        $context["form"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "form", [], "any", false, false, false, 1);
        // line 2
        $context["form_promotion_coupon"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "promotionCoupon", [], "any", false, false, false, 2);
        // line 3
        yield "
";
        // line 4
        if (array_key_exists("form_promotion_coupon", $context)) {
            // line 5
            yield "    <div class=\"mb-4\">
        <div class=\"p-4 bg-light\">
            <div class=\"input-group field\" ";
            // line 7
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-promotion-coupon");
            yield ">
                ";
            // line 8
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_promotion_coupon"]) || array_key_exists("form_promotion_coupon", $context) ? $context["form_promotion_coupon"] : (function () { throw new RuntimeError('Variable "form_promotion_coupon" does not exist.', 8, $this->source); })()), "vars", [], "any", false, false, false, 8), "value", [], "any", false, false, false, 8)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_promotion_coupon"]) || array_key_exists("form_promotion_coupon", $context) ? $context["form_promotion_coupon"] : (function () { throw new RuntimeError('Variable "form_promotion_coupon" does not exist.', 8, $this->source); })()), "vars", [], "any", false, false, false, 8), "valid", [], "any", false, false, false, 8))) {
                // line 9
                yield "                    <div class=\"card d-flex flex-row justify-content-between align-items-center w-100 py-2 px-3\">
                        <div class=\"d-flex flex-wrap\" style=\"gap: .5rem 0;\">
                            <span class=\"me-2\">";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.applied_coupon"), "html", null, true);
                yield ":</span>
                            <span class=\"badge d-flex align-items-center text-bg-secondary\">
                                ";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_promotion_coupon"]) || array_key_exists("form_promotion_coupon", $context) ? $context["form_promotion_coupon"] : (function () { throw new RuntimeError('Variable "form_promotion_coupon" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13), "html", null, true);
                yield "
                            </span>
                        </div>
                        <button type=\"button\" class=\"btn btn-sm btn-transparent d-flex align-items-center p-0\"
                            data-action=\"live#action:prevent\"
                            data-live-action-param=\"removeCoupon\"
                            ";
                // line 19
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-promotion-remove-coupon");
                yield "
                        >
                            ";
                // line 21
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:trash", ["class" => "icon icon-sm"]);
                yield "
                        </button>
                    </div>
                ";
            } else {
                // line 25
                yield "                    ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_promotion_coupon"]) || array_key_exists("form_promotion_coupon", $context) ? $context["form_promotion_coupon"] : (function () { throw new RuntimeError('Variable "form_promotion_coupon" does not exist.', 25, $this->source); })()), 'widget', $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->extensions['Sylius\TwigExtra\Twig\Extension\TestFormAttributeExtension']->getTestFormAttribute("cart-promotion-coupon-input"), ["attr" => ["data-model" => "norender|sylius_shop_cart[promotionCoupon]", "form" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "vars", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25), "placeholder" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.enter_your_code") . "...")]]));
                yield "
                    <button class=\"btn btn-outline-gray\" type=\"button\" ";
                // line 26
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("apply-coupon-button");
                yield " data-action=\"live#\$render\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.apply_coupon"), "html", null, true);
                yield "</button>
                    ";
                // line 27
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_promotion_coupon"]) || array_key_exists("form_promotion_coupon", $context) ? $context["form_promotion_coupon"] : (function () { throw new RuntimeError('Variable "form_promotion_coupon" does not exist.', 27, $this->source); })()), 'errors');
                yield "
                ";
            }
            // line 29
            yield "            </div>
        </div>
    </div>
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
        return "@SyliusShop/cart/index/content/form/sections/general/coupon.html.twig";
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
        return array (  113 => 29,  108 => 27,  102 => 26,  97 => 25,  90 => 21,  85 => 19,  76 => 13,  71 => 11,  67 => 9,  65 => 8,  61 => 7,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set form = hookable_metadata.context.form %}
{% set form_promotion_coupon = form.promotionCoupon %}

{% if form_promotion_coupon is defined %}
    <div class=\"mb-4\">
        <div class=\"p-4 bg-light\">
            <div class=\"input-group field\" {{ sylius_test_html_attribute('cart-promotion-coupon') }}>
                {% if form_promotion_coupon.vars.value is not empty and form_promotion_coupon.vars.valid %}
                    <div class=\"card d-flex flex-row justify-content-between align-items-center w-100 py-2 px-3\">
                        <div class=\"d-flex flex-wrap\" style=\"gap: .5rem 0;\">
                            <span class=\"me-2\">{{ 'sylius.ui.applied_coupon'|trans }}:</span>
                            <span class=\"badge d-flex align-items-center text-bg-secondary\">
                                {{ form_promotion_coupon.vars.value }}
                            </span>
                        </div>
                        <button type=\"button\" class=\"btn btn-sm btn-transparent d-flex align-items-center p-0\"
                            data-action=\"live#action:prevent\"
                            data-live-action-param=\"removeCoupon\"
                            {{ sylius_test_html_attribute('cart-promotion-remove-coupon') }}
                        >
                            {{ ux_icon('tabler:trash', {class: 'icon icon-sm'}) }}
                        </button>
                    </div>
                {% else %}
                    {{ form_widget(form_promotion_coupon, sylius_test_form_attribute('cart-promotion-coupon-input')|sylius_merge_recursive({'attr': {'data-model': 'norender|sylius_shop_cart[promotionCoupon]', 'form': form.vars.id, 'placeholder': 'sylius.ui.enter_your_code'|trans ~ '...'}})) }}
                    <button class=\"btn btn-outline-gray\" type=\"button\" {{ sylius_test_html_attribute('apply-coupon-button') }} data-action=\"live#\$render\">{{ 'sylius.ui.apply_coupon'|trans }}</button>
                    {{ form_errors(form_promotion_coupon) }}
                {% endif %}
            </div>
        </div>
    </div>
{% endif %}
", "@SyliusShop/cart/index/content/form/sections/general/coupon.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/cart/index/content/form/sections/general/coupon.html.twig");
    }
}
