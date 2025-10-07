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

/* @BazingaJsTranslation/getTranslations.js.twig */
class __TwigTemplate_d0248c705e9c3bcc81ab27c5c0867d26 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BazingaJsTranslation/getTranslations.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BazingaJsTranslation/getTranslations.js.twig"));

        // line 1
        yield "(function (t) {
";
        // line 2
        if ((($tmp = (isset($context["include_config"]) || array_key_exists("include_config", $context) ? $context["include_config"] : (function () { throw new RuntimeError('Variable "include_config" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "t.fallback = '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fallback"]) || array_key_exists("fallback", $context) ? $context["fallback"] : (function () { throw new RuntimeError('Variable "fallback" does not exist.', 3, $this->source); })()), "js", null, true);
            yield "';
t.defaultDomain = '";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["defaultDomain"]) || array_key_exists("defaultDomain", $context) ? $context["defaultDomain"] : (function () { throw new RuntimeError('Variable "defaultDomain" does not exist.', 4, $this->source); })()), "js", null, true);
            yield "';
";
        }
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["locale"] => $context["domains"]) {
            // line 7
            yield "// ";
            yield $context["locale"];
            yield "
";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["domains"]);
            foreach ($context['_seq'] as $context["domain"] => $context["messages"]) {
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["key"] => $context["message"]) {
                    // line 10
                    yield "t.add(";
                    yield json_encode($context["key"]);
                    yield ", ";
                    yield json_encode($context["message"]);
                    yield ", \"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "js", null, true);
                    yield "\", \"";
                    yield $context["locale"];
                    yield "\");
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['domain'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['locale'], $context['domains'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "})(Translator);
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
        return "@BazingaJsTranslation/getTranslations.js.twig";
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
        return array (  103 => 14,  80 => 10,  76 => 9,  72 => 8,  67 => 7,  63 => 6,  58 => 4,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("(function (t) {
{% if include_config %}
t.fallback = '{{ fallback }}';
t.defaultDomain = '{{ defaultDomain }}';
{% endif %}
{% for locale, domains in translations %}
// {{ locale|raw }}
{% for domain, messages in domains %}
{% for key, message in messages %}
t.add({{ key|json_encode|raw }}, {{ message|json_encode|raw }}, \"{{ domain }}\", \"{{ locale|raw }}\");
{% endfor %}
{% endfor %}
{% endfor %}
})(Translator);
", "@BazingaJsTranslation/getTranslations.js.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/willdurand/js-translation-bundle/Resources/views/getTranslations.js.twig");
    }
}
