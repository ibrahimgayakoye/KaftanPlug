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

/* @SyliusAdmin/dashboard/index/component/channel_selector.html.twig */
class __TwigTemplate_631a0fc48c2e7fde66b076f481588ac2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/dashboard/index/component/channel_selector.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/dashboard/index/component/channel_selector.html.twig"));

        // line 2
        yield "
";
        // line 3
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 3, $this->source); })())) > 1)) {
            // line 4
            yield "    <div class=\"col-12 col-md-auto ms-auto d-print-none\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 4, $this->source); })()), "html", null, true);
            yield ">
        <div class=\"dropdown\">
            <a class=\"btn btn-secondary dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" ";
            // line 6
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("choose-channel-button");
            yield ">
                ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["channel_name"]) || array_key_exists("channel_name", $context) ? $context["channel_name"] : (function () { throw new RuntimeError('Variable "channel_name" does not exist.', 7, $this->source); })()), "html", null, true);
            yield "
            </a>
            <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink\" ";
            // line 9
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("choose-channel-list");
            yield ">
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 11
                yield "                    <li>
                        <a
                            class=\"dropdown-item\"
                            data-action=\"live#action\"
                            data-live-action-param=\"changeChannel\"
                            data-live-channel-code-param=\"";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "code", [], "any", false, false, false, 16), "html", null, true);
                yield "\"
                        >
                            ";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "name", [], "any", false, false, false, 18), "html", null, true);
                yield "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['channel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
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
        return "@SyliusAdmin/dashboard/index/component/channel_selector.html.twig";
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
        return array (  98 => 22,  88 => 18,  83 => 16,  76 => 11,  72 => 10,  68 => 9,  63 => 7,  59 => 6,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Rendered with \\Sylius\\Bundle\\AdminBundle\\Twig\\Component\\Dashboard\\ChannelSelectorComponent #}

{% if channels|length > 1 %}
    <div class=\"col-12 col-md-auto ms-auto d-print-none\" {{ attributes }}>
        <div class=\"dropdown\">
            <a class=\"btn btn-secondary dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" {{ sylius_test_html_attribute('choose-channel-button') }}>
                {{ channel_name }}
            </a>
            <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink\" {{ sylius_test_html_attribute('choose-channel-list') }}>
                {% for channel in channels %}
                    <li>
                        <a
                            class=\"dropdown-item\"
                            data-action=\"live#action\"
                            data-live-action-param=\"changeChannel\"
                            data-live-channel-code-param=\"{{ channel.code }}\"
                        >
                            {{ channel.name }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </div>
    </div>
{% endif %}
", "@SyliusAdmin/dashboard/index/component/channel_selector.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/dashboard/index/component/channel_selector.html.twig");
    }
}
