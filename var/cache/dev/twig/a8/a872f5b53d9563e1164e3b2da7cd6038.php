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

/* @SyliusAdmin/shared/crud/common/navbar/menu/shop_preview.html.twig */
class __TwigTemplate_f61ee1bd67e0a862a6d84fc9a81bc98b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/common/navbar/menu/shop_preview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/common/navbar/menu/shop_preview.html.twig"));

        // line 1
        $context["homepage_path"] = (((($tmp = $this->extensions['Sylius\Bundle\CoreBundle\Twig\BundleLoadedCheckerExtension']->isBundleLoaded("SyliusShopBundle")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage")) : ("/"));
        // line 2
        yield "
";
        // line 3
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 3, $this->source); })())) == 1)) {
            // line 4
            yield "    ";
            $context["channel"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 4, $this->source); })()));
            // line 5
            yield "    <a class=\"\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\Bundle\CoreBundle\Twig\ChannelUrlExtension']->generateChannelUrl((isset($context["homepage_path"]) || array_key_exists("homepage_path", $context) ? $context["homepage_path"] : (function () { throw new RuntimeError('Variable "homepage_path" does not exist.', 5, $this->source); })()), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 5, $this->source); })())), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\">
        <span data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_your_store"), "html", null, true);
            yield "\" data-bs-placement=\"right\">
            ";
            // line 7
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:arrow-up-right");
            yield "
        </span>
    </a>
";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 10
(isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 10, $this->source); })())) > 1)) {
            // line 11
            yield "    <div class=\"dropdown\">
        <div type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            <span data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_your_store"), "html", null, true);
            yield "\" data-bs-placement=\"right\">
                ";
            // line 14
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:arrow-up-right");
            yield "
            </span>
        </div>
        <ul class=\"dropdown-menu dropdown-menu-sm-end\">
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 19
                yield "                <li><a class=\"dropdown-item\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\Bundle\CoreBundle\Twig\ChannelUrlExtension']->generateChannelUrl((isset($context["homepage_path"]) || array_key_exists("homepage_path", $context) ? $context["homepage_path"] : (function () { throw new RuntimeError('Variable "homepage_path" does not exist.', 19, $this->source); })()), $context["channel"]), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "name", [], "any", false, false, false, 19), "html", null, true);
                yield "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['channel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "        </ul>
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
        return "@SyliusAdmin/shared/crud/common/navbar/menu/shop_preview.html.twig";
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
        return array (  105 => 21,  94 => 19,  90 => 18,  83 => 14,  79 => 13,  75 => 11,  73 => 10,  67 => 7,  63 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set homepage_path = sylius_bundle_loaded_checker('SyliusShopBundle') ? path('sylius_shop_homepage') : '/' %}

{% if channels|length == 1 %}
    {% set channel = channels|first %}
    <a class=\"\" href=\"{{ sylius_channel_url(homepage_path, channel) }}\" target=\"_blank\" rel=\"noopener\">
        <span data-bs-toggle=\"tooltip\" data-bs-title=\"{{ 'sylius.ui.view_your_store'|trans }}\" data-bs-placement=\"right\">
            {{ ux_icon('tabler:arrow-up-right') }}
        </span>
    </a>
{% elseif channels|length > 1 %}
    <div class=\"dropdown\">
        <div type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            <span data-bs-toggle=\"tooltip\" data-bs-title=\"{{ 'sylius.ui.view_your_store'|trans }}\" data-bs-placement=\"right\">
                {{ ux_icon('tabler:arrow-up-right') }}
            </span>
        </div>
        <ul class=\"dropdown-menu dropdown-menu-sm-end\">
            {% for channel in channels %}
                <li><a class=\"dropdown-item\" href=\"{{ sylius_channel_url(homepage_path, channel) }}\" target=\"_blank\" rel=\"noopener\">{{ channel.name }}</a></li>
            {% endfor %}
        </ul>
    </div>
{% endif %}
", "@SyliusAdmin/shared/crud/common/navbar/menu/shop_preview.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/crud/common/navbar/menu/shop_preview.html.twig");
    }
}
