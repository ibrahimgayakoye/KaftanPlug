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

/* @SyliusShop/shared/layout/base/header/top_bar/currency_switcher.html.twig */
class __TwigTemplate_7c76a3d1b07ac824a274086dfcac48e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/layout/base/header/top_bar/currency_switcher.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/layout/base/header/top_bar/currency_switcher.html.twig"));

        // line 2
        yield "
";
        // line 3
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["available_currencies"]) || array_key_exists("available_currencies", $context) ? $context["available_currencies"] : (function () { throw new RuntimeError('Variable "available_currencies" does not exist.', 3, $this->source); })())) > 1)) {
            // line 4
            yield "    <div class=\"col-auto\">
        <div class=\"dropdown\" ";
            // line 5
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("currency-selector");
            yield ">
            <button class=\"btn btn-sm btn-dark dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" ";
            // line 6
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("active-currency");
            yield ">
                ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active_currency"]) || array_key_exists("active_currency", $context) ? $context["active_currency"] : (function () { throw new RuntimeError('Variable "active_currency" does not exist.', 7, $this->source); })()), "html", null, true);
            yield "
            </button>
            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-dark\">
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["available_currencies"]) || array_key_exists("available_currencies", $context) ? $context["available_currencies"] : (function () { throw new RuntimeError('Variable "available_currencies" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 11
                yield "                    ";
                if ((($tmp =  !($context["code"] === (isset($context["active_currency"]) || array_key_exists("active_currency", $context) ? $context["active_currency"] : (function () { throw new RuntimeError('Variable "active_currency" does not exist.', 11, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 12
                    yield "                        <li>
                            <a class=\"dropdown-item py-2\" href=\"";
                    // line 13
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_switch_currency", ["code" => $context["code"]]), "html", null, true);
                    yield "\" ";
                    yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("available-currency");
                    yield ">
                                ";
                    // line 14
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["code"], "html", null, true);
                    yield "
                            </a>
                        </li>
                    ";
                }
                // line 18
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['code'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "            </ul>
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
        return "@SyliusShop/shared/layout/base/header/top_bar/currency_switcher.html.twig";
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
        return array (  99 => 19,  93 => 18,  86 => 14,  80 => 13,  77 => 12,  74 => 11,  70 => 10,  64 => 7,  60 => 6,  56 => 5,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Rendered with \\Sylius\\Bundle\\ShopBundle\\Twig\\Component\\Common\\CurrencySwitcherComponent #}

{% if available_currencies|length > 1 %}
    <div class=\"col-auto\">
        <div class=\"dropdown\" {{ sylius_test_html_attribute('currency-selector') }}>
            <button class=\"btn btn-sm btn-dark dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" {{ sylius_test_html_attribute('active-currency') }}>
                {{ active_currency }}
            </button>
            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-dark\">
                {% for code in available_currencies %}
                    {% if code is not same as(active_currency) %}
                        <li>
                            <a class=\"dropdown-item py-2\" href=\"{{ path('sylius_shop_switch_currency', {'code': code}) }}\" {{ sylius_test_html_attribute('available-currency') }}>
                                {{ code }}
                            </a>
                        </li>
                    {% endif %}
                {% endfor %}
            </ul>
        </div>
    </div>
{% endif %}
", "@SyliusShop/shared/layout/base/header/top_bar/currency_switcher.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/layout/base/header/top_bar/currency_switcher.html.twig");
    }
}
