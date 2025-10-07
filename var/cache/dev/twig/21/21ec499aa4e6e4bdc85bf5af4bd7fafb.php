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

/* @SyliusShop/account/address_book/index/content/main/addresses/default.html.twig */
class __TwigTemplate_0a83c4bde7f0bad768ebeaf9e6f3554a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/account/address_book/index/content/main/addresses/default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/account/address_book/index/content/main/addresses/default.html.twig"));

        // line 1
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hookable_metadata"] ?? null), "context", [], "any", false, true, false, 1), "default_address", [], "any", true, true, false, 1)) {
            // line 2
            yield "    ";
            $context["default_address"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 2, $this->source); })()), "context", [], "any", false, false, false, 2), "default_address", [], "any", false, false, false, 2);
            // line 3
            yield "
    <div class=\"card border-0 bg-body-tertiary mb-3\">
        <div class=\"card-body\" ";
            // line 5
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("default-address");
            yield ">
            ";
            // line 6
$hooksRuntime = $this->env->getRuntime('Sylius\TwigHooks\Twig\Runtime\HooksRuntime');
echo $hooksRuntime->renderHook("default", ["address" => (isset($context["default_address"]) || array_key_exists("default_address", $context) ? $context["default_address"] : (function () { throw new RuntimeError('Variable "default_address" does not exist.', 6, $this->source); })())], $context, false);
            // line 7
            yield "        </div>
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
        return "@SyliusShop/account/address_book/index/content/main/addresses/default.html.twig";
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
        return array (  64 => 7,  61 => 6,  57 => 5,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if hookable_metadata.context.default_address is defined %}
    {% set default_address = hookable_metadata.context.default_address %}

    <div class=\"card border-0 bg-body-tertiary mb-3\">
        <div class=\"card-body\" {{ sylius_test_html_attribute('default-address') }}>
            {% hook 'default' with { address: default_address } %}
        </div>
    </div>
{% endif %}
", "@SyliusShop/account/address_book/index/content/main/addresses/default.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/templates/account/address_book/index/content/main/addresses/default.html.twig");
    }
}
