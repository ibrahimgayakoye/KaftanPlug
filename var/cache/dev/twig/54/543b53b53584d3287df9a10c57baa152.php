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

/* @SyliusAdmin/admin_user/form/sections/personal_information/avatar.html.twig */
class __TwigTemplate_fc9ce1323f2d88c20d060861a6726dcc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/admin_user/form/sections/personal_information/avatar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/admin_user/form/sections/personal_information/avatar.html.twig"));

        // line 1
        $context["admin_user"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "resource", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 3, $this->source); })()), "context", [], "any", false, false, false, 3), "form", [], "any", false, false, false, 3), "avatar", [], "any", false, false, false, 3), 'label');
        yield "

<div class=\"row g-6\">
    <div class=\"col-auto m-0\">
        ";
        // line 7
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 7, $this->source); })()), "avatar", [], "any", false, false, false, 7)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 7, $this->source); })()), "avatar", [], "any", false, false, false, 7), "path", [], "any", false, false, false, 7)))) {
            // line 8
            yield "            <div
                class=\"avatar avatar-xl\"
                style=\"background-image: url('";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 10, $this->source); })()), "avatar", [], "any", false, false, false, 10), "path", [], "any", false, false, false, 10), "sylius_admin_avatar"), "html", null, true);
            yield "');\"
                ";
            // line 11
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("avatar-image", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 11, $this->source); })()), "avatar", [], "any", false, false, false, 11), "path", [], "any", false, false, false, 11));
            yield "
            ></div>
        ";
        } else {
            // line 14
            yield "            <div class=\"avatar avatar-xl\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("avatar-image", null);
            yield "></div>
        ";
        }
        // line 16
        yield "    </div>
    <div class=\"col m-0\">
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["hookable_metadata"]) || array_key_exists("hookable_metadata", $context) ? $context["hookable_metadata"] : (function () { throw new RuntimeError('Variable "hookable_metadata" does not exist.', 18, $this->source); })()), "context", [], "any", false, false, false, 18), "form", [], "any", false, false, false, 18), "avatar", [], "any", false, false, false, 18), 'widget');
        yield "
        ";
        // line 19
        if ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 19, $this->source); })()), "avatar", [], "any", false, false, false, 19))) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 19, $this->source); })()), "avatar", [], "any", false, false, false, 19), "path", [], "any", false, false, false, 19)))) {
            // line 20
            yield "            <button
                formaction=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_admin_user_remove_avatar", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "_csrf_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21))]), "html", null, true);
            yield "\"
                type=\"submit\"
                class=\"btn btn-danger\"
                ";
            // line 24
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("delete-avatar-button");
            yield "
            >
                ";
            // line 26
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:trash-x");
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete_avatar"), "html", null, true);
            yield "
            </button>
        ";
        }
        // line 29
        yield "    </div>
</div>
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
        return "@SyliusAdmin/admin_user/form/sections/personal_information/avatar.html.twig";
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
        return array (  114 => 29,  106 => 26,  101 => 24,  95 => 21,  92 => 20,  90 => 19,  86 => 18,  82 => 16,  76 => 14,  70 => 11,  66 => 10,  62 => 8,  60 => 7,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set admin_user = hookable_metadata.context.resource %}

{{ form_label(hookable_metadata.context.form.avatar) }}

<div class=\"row g-6\">
    <div class=\"col-auto m-0\">
        {% if admin_user.avatar is not null and admin_user.avatar.path is not empty %}
            <div
                class=\"avatar avatar-xl\"
                style=\"background-image: url('{{ admin_user.avatar.path|imagine_filter('sylius_admin_avatar') }}');\"
                {{ sylius_test_html_attribute('avatar-image', admin_user.avatar.path) }}
            ></div>
        {% else %}
            <div class=\"avatar avatar-xl\" {{ sylius_test_html_attribute('avatar-image', null) }}></div>
        {% endif %}
    </div>
    <div class=\"col m-0\">
        {{ form_widget(hookable_metadata.context.form.avatar) }}
        {% if admin_user.id is not null and admin_user.avatar is not null and admin_user.avatar.path is not empty %}
            <button
                formaction=\"{{ path('sylius_admin_admin_user_remove_avatar', {'id': admin_user.id, '_csrf_token': csrf_token(admin_user.id)}) }}\"
                type=\"submit\"
                class=\"btn btn-danger\"
                {{ sylius_test_html_attribute('delete-avatar-button') }}
            >
                {{ ux_icon('tabler:trash-x') }} {{ 'sylius.ui.delete_avatar'|trans }}
            </button>
        {% endif %}
    </div>
</div>
", "@SyliusAdmin/admin_user/form/sections/personal_information/avatar.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/admin_user/form/sections/personal_information/avatar.html.twig");
    }
}
