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

/* @SyliusShop/shared/layout/base/header/top_bar/locale_switcher.html.twig */
class __TwigTemplate_6088cc070c75152c115dfab5e24cfb11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/layout/base/header/top_bar/locale_switcher.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/layout/base/header/top_bar/locale_switcher.html.twig"));

        // line 2
        yield "
";
        // line 3
        $macros["_v0"] = $this->macros["_v0"] = $this->load("@SyliusShop/shared/macro/locales.html.twig", 3)->unwrap();
        // line 4
        yield "
";
        // line 5
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["available_locales"]) || array_key_exists("available_locales", $context) ? $context["available_locales"] : (function () { throw new RuntimeError('Variable "available_locales" does not exist.', 5, $this->source); })())) > 1)) {
            // line 6
            yield "    <div class=\"col-auto\">
        <div class=\"dropdown\" ";
            // line 7
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("locale-selector");
            yield ">
            <button class=\"btn btn-sm btn-dark dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" ";
            // line 8
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("active-locale", (isset($context["active_locale"]) || array_key_exists("active_locale", $context) ? $context["active_locale"] : (function () { throw new RuntimeError('Variable "active_locale" does not exist.', 8, $this->source); })()));
            yield ">
                ";
            // line 9
            yield $macros["_v0"]->getTemplateForMacro("macro_locale", $context, 9, $this->getSourceContext())->macro_locale(...[(isset($context["active_locale"]) || array_key_exists("active_locale", $context) ? $context["active_locale"] : (function () { throw new RuntimeError('Variable "active_locale" does not exist.', 9, $this->source); })())]);
            yield "
            </button>
            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-dark\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["available_locales"]) || array_key_exists("available_locales", $context) ? $context["available_locales"] : (function () { throw new RuntimeError('Variable "available_locales" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 13
                yield "                    ";
                if ((($tmp =  !($context["code"] === (isset($context["active_locale"]) || array_key_exists("active_locale", $context) ? $context["active_locale"] : (function () { throw new RuntimeError('Variable "active_locale" does not exist.', 13, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 14
                    yield "                        <li>
                            <a class=\"dropdown-item py-2\" href=\"";
                    // line 15
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_switch_locale", ["code" => $context["code"]]), "html", null, true);
                    yield "\" ";
                    yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("available-locale", $context["code"]);
                    yield " >
                                ";
                    // line 16
                    yield $macros["_v0"]->getTemplateForMacro("macro_locale", $context, 16, $this->getSourceContext())->macro_locale(...[$context["code"]]);
                    yield "
                            </a>
                        </li>
                    ";
                }
                // line 20
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['code'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
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
        return "@SyliusShop/shared/layout/base/header/top_bar/locale_switcher.html.twig";
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
        return array (  104 => 21,  98 => 20,  91 => 16,  85 => 15,  82 => 14,  79 => 13,  75 => 12,  69 => 9,  65 => 8,  61 => 7,  58 => 6,  56 => 5,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Rendered with \\Sylius\\Bundle\\ShopBundle\\Twig\\Component\\Common\\LocaleSwitcherComponent #}

{% from '@SyliusShop/shared/macro/locales.html.twig' import locale %}

{% if available_locales|length > 1 %}
    <div class=\"col-auto\">
        <div class=\"dropdown\" {{ sylius_test_html_attribute('locale-selector') }}>
            <button class=\"btn btn-sm btn-dark dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" {{ sylius_test_html_attribute('active-locale', active_locale) }}>
                {{ locale(active_locale) }}
            </button>
            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-dark\">
                {% for code in available_locales %}
                    {% if code is not same as(active_locale) %}
                        <li>
                            <a class=\"dropdown-item py-2\" href=\"{{ path('sylius_shop_switch_locale', {'code': code}) }}\" {{ sylius_test_html_attribute('available-locale', code) }} >
                                {{ locale(code) }}
                            </a>
                        </li>
                    {% endif %}
                {% endfor %}
            </ul>
        </div>
    </div>
{% endif %}
", "@SyliusShop/shared/layout/base/header/top_bar/locale_switcher.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/shared/layout/base/header/top_bar/locale_switcher.html.twig");
    }
}
