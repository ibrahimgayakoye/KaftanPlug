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

/* @SyliusAdmin/shared/components/navbar/user.html.twig */
class __TwigTemplate_53c263e57cdb7c3e42fa2cc3b70e0a9e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/components/navbar/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/components/navbar/user.html.twig"));

        // line 1
        $macros["avatar"] = $this->macros["avatar"] = $this->load("@SyliusAdmin/shared/helper/avatar.html.twig", 1)->unwrap();
        // line 2
        $macros["dropdown"] = $this->macros["dropdown"] = $this->load("@SyliusAdmin/shared/helper/dropdown.html.twig", 2)->unwrap();
        // line 3
        yield "
";
        // line 4
        $context["dropdown_trigger"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 5
            yield "    <div class=\"d-flex lh-1 text-reset p-0 cursor-pointer\">
        <div ";
            // line 6
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("user-avatar", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, true, false, 6), "path", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 6, $this->source); })()), "avatar", [], "any", false, false, false, 6), "path", [], "any", false, false, false, 6), null)) : (null)));
            yield ">
            ";
            // line 7
            if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, true, false, 7), "path", [], "any", true, true, false, 7) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "avatar", [], "any", false, false, false, 7), "path", [], "any", false, false, false, 7)))) {
                // line 8
                yield "                ";
                yield $macros["avatar"]->getTemplateForMacro("macro_small", $context, 8, $this->getSourceContext())->macro_small(...[]);
                yield "
            ";
            } else {
                // line 10
                yield "                ";
                yield $macros["avatar"]->getTemplateForMacro("macro_small", $context, 10, $this->getSourceContext())->macro_small(...[$this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "avatar", [], "any", false, false, false, 10), "path", [], "any", false, false, false, 10), "sylius_admin_avatar")]);
                yield "
            ";
            }
            // line 12
            yield "        </div>
        <div class=\"d-none d-xl-block ps-2\">
            <div class=\"mb-1 small text-muted\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.hello"), "html", null, true);
            yield "</div>
            <div>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "firstName", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "firstName", [], "any", false, false, false, 15), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15))), "html", null, true);
            yield "</div>
        </div>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        yield "
";
        // line 20
        yield $macros["dropdown"]->getTemplateForMacro("macro_list", $context, 20, $this->getSourceContext())->macro_list(...[["custom_trigger" => (isset($context["dropdown_trigger"]) || array_key_exists("dropdown_trigger", $context) ? $context["dropdown_trigger"] : (function () { throw new RuntimeError('Variable "dropdown_trigger" does not exist.', 20, $this->source); })()), "direction" => "down-end"], (isset($context["menu_items"]) || array_key_exists("menu_items", $context) ? $context["menu_items"] : (function () { throw new RuntimeError('Variable "menu_items" does not exist.', 20, $this->source); })())]);
        yield "
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
        return "@SyliusAdmin/shared/components/navbar/user.html.twig";
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
        return array (  97 => 20,  94 => 19,  86 => 15,  82 => 14,  78 => 12,  72 => 10,  66 => 8,  64 => 7,  60 => 6,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/shared/helper/avatar.html.twig' as avatar %}
{% import '@SyliusAdmin/shared/helper/dropdown.html.twig' as dropdown %}

{% set dropdown_trigger %}
    <div class=\"d-flex lh-1 text-reset p-0 cursor-pointer\">
        <div {{ sylius_test_html_attribute('user-avatar', user.avatar.path|default(null)) }}>
            {% if user.avatar.path is not defined or user.avatar.path is empty %}
                {{ avatar.small() }}
            {% else %}
                {{ avatar.small(user.avatar.path|imagine_filter('sylius_admin_avatar')) }}
            {% endif %}
        </div>
        <div class=\"d-none d-xl-block ps-2\">
            <div class=\"mb-1 small text-muted\">{{ 'sylius.ui.hello'|trans }}</div>
            <div>{{ user.firstName|default(user.username) }}</div>
        </div>
    </div>
{% endset %}

{{ dropdown.list({ custom_trigger: dropdown_trigger, direction: 'down-end' }, menu_items) }}
", "@SyliusAdmin/shared/components/navbar/user.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/components/navbar/user.html.twig");
    }
}
