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

/* @BazingaJsTranslation/getTranslations.json.twig */
class __TwigTemplate_112925d7a9ef3fd42ac15fd04b7181eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BazingaJsTranslation/getTranslations.json.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BazingaJsTranslation/getTranslations.json.twig"));

        // line 1
        yield "{
";
        // line 2
        if ((($tmp = (isset($context["include_config"]) || array_key_exists("include_config", $context) ? $context["include_config"] : (function () { throw new RuntimeError('Variable "include_config" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    \"fallback\": \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fallback"]) || array_key_exists("fallback", $context) ? $context["fallback"] : (function () { throw new RuntimeError('Variable "fallback" does not exist.', 3, $this->source); })()), "js", null, true);
            yield "\",
    \"defaultDomain\": \"";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["defaultDomain"]) || array_key_exists("defaultDomain", $context) ? $context["defaultDomain"] : (function () { throw new RuntimeError('Variable "defaultDomain" does not exist.', 4, $this->source); })()), "js", null, true);
            yield "\",
";
        }
        // line 6
        yield "    \"translations\": ";
        yield json_encode((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 6, $this->source); })()));
        yield "
}
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
        return "@BazingaJsTranslation/getTranslations.json.twig";
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
        return array (  63 => 6,  58 => 4,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{
{% if include_config %}
    \"fallback\": \"{{ fallback }}\",
    \"defaultDomain\": \"{{ defaultDomain }}\",
{% endif %}
    \"translations\": {{ translations|json_encode|raw }}
}
", "@BazingaJsTranslation/getTranslations.json.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/willdurand/js-translation-bundle/Resources/views/getTranslations.json.twig");
    }
}
