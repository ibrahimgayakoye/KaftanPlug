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

/* @SyliusAdmin/admin_user/form/sections/roles.html.twig */
class __TwigTemplate_0acbae0bba3ecb034bfed25e1ddd0795 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/admin_user/form/sections/roles.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/admin_user/form/sections/roles.html.twig"));

        // line 1
        yield "<div class=\"card mb-3 plus-blur\" onclick=\"window.open('https://sylius.com/plus/?utm_source=product&utm_medium=placeholder&utm_campaign=rbac-placeholder', '_blank')\" style=\"cursor: pointer;\">

    <img src=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/admin/images/sylius-plus-sidebar.svg", "admin"), "html", null, true);
        yield "\" alt=\"Plus Feature\" class=\"overlay-image\" />

    <div class=\"blur-content\">
        <div class=\"card-header\">
            <div class=\"card-title\">
                ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.roles"), "html", null, true);
        yield "
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"mb-3 field\">
                <label for=\"sylius_admin_admin_user_rolesResources\" class=\"form-label\">Roles</label>
                <select multiple=\"multiple\" class=\"form-select\" id=\"sylius_admin_admin_user_rolesResources\">
                    <option>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.role_super_admin"), "html", null, true);
        yield "</option>
                    <option>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.role_product_manager"), "html", null, true);
        yield "</option>
                    <option>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.role_fulfillment_worker"), "html", null, true);
        yield "</option>
                    <option>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.role_channel_admin"), "html", null, true);
        yield "</option>
                </select>
            </div>
            <div class=\"mb-3 field\">
                <div class=\"form-check\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"sylius_admin_admin_user_enablePermissionChecker\" value=\"1\" checked>
                    <label class=\"form-check-label\" for=\"sylius_admin_admin_user_enablePermissionChecker\">
                        ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.enabled_permission_checker"), "html", null, true);
        yield "
                    </label>
                </div>
            </div>
        </div>
    </div>
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
        return "@SyliusAdmin/admin_user/form/sections/roles.html.twig";
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
        return array (  92 => 25,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  60 => 8,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card mb-3 plus-blur\" onclick=\"window.open('https://sylius.com/plus/?utm_source=product&utm_medium=placeholder&utm_campaign=rbac-placeholder', '_blank')\" style=\"cursor: pointer;\">

    <img src=\"{{ asset('build/admin/images/sylius-plus-sidebar.svg', 'admin') }}\" alt=\"Plus Feature\" class=\"overlay-image\" />

    <div class=\"blur-content\">
        <div class=\"card-header\">
            <div class=\"card-title\">
                {{ 'sylius.ui.roles'|trans }}
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"mb-3 field\">
                <label for=\"sylius_admin_admin_user_rolesResources\" class=\"form-label\">Roles</label>
                <select multiple=\"multiple\" class=\"form-select\" id=\"sylius_admin_admin_user_rolesResources\">
                    <option>{{ 'sylius.ui.role_super_admin'|trans }}</option>
                    <option>{{ 'sylius.ui.role_product_manager'|trans }}</option>
                    <option>{{ 'sylius.ui.role_fulfillment_worker'|trans }}</option>
                    <option>{{ 'sylius.ui.role_channel_admin'|trans }}</option>
                </select>
            </div>
            <div class=\"mb-3 field\">
                <div class=\"form-check\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"sylius_admin_admin_user_enablePermissionChecker\" value=\"1\" checked>
                    <label class=\"form-check-label\" for=\"sylius_admin_admin_user_enablePermissionChecker\">
                        {{ 'sylius.ui.enabled_permission_checker'|trans }}
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
", "@SyliusAdmin/admin_user/form/sections/roles.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/admin_user/form/sections/roles.html.twig");
    }
}
