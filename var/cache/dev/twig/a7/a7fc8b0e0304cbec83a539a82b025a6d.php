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

/* @SyliusAdmin/shared/crud/common/content/footer.html.twig */
class __TwigTemplate_2b145b75f6afc1783e2ec88d3ffcf4fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/common/content/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/shared/crud/common/content/footer.html.twig"));

        // line 1
        yield "<footer class=\"footer footer-transparent d-print-none\">
    <div class=\"container-xl\">
        <div class=\"row text-center align-items-center\">
            <div class=\"col-12 col-lg-12\">
                <ul class=\"list-inline list-inline-dots\">
                    <li class=\"list-inline-item\">
                        ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.copyright"), "html", null, true);
        yield " © ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "
                        <a href=\"https://sylius.com/\" target=\"_blank\" class=\"link-secondary\">Sylius</a>.
                        ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.all_rights_reserved"), "html", null, true);
        yield ".
                    </li>
                </ul>
            </div>

            <div class=\"col-lg-12 ms-lg-auto\">
                <ul class=\"list-inline list-inline-dots m-1\">
                    <li class=\"list-inline-item\">
                        <a href=\"https://docs.sylius.com\" target=\"_blank\" class=\"link-secondary\" rel=\"noopener\">
                            ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.documentation"), "html", null, true);
        yield "
                        </a></li>
                    <li class=\"list-inline-item\">
                        <a href=\"https://github.com/Sylius/Sylius?tab=MIT-1-ov-file#readme\" target=\"_blank\"
                           class=\"link-secondary\" rel=\"noopener\">
                            ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.license"), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"https://github.com/Sylius/Sylius\" target=\"_blank\" class=\"link-secondary\"
                           rel=\"noopener\">
                            ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.source_code"), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"https://github.com/Sylius/Sylius/issues\" target=\"_blank\" class=\"link-secondary\"
                           rel=\"noopener\">
                            ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.see_issue"), "html", null, true);
        yield "? ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.report_it"), "html", null, true);
        yield "!
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.powered_by"), "html", null, true);
        yield " Sylius v";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius_meta"]) || array_key_exists("sylius_meta", $context) ? $context["sylius_meta"] : (function () { throw new RuntimeError('Variable "sylius_meta" does not exist.', 39, $this->source); })()), "version", [], "any", false, false, false, 39), "html", null, true);
        yield ".
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
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
        return "@SyliusAdmin/shared/crud/common/content/footer.html.twig";
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
        return array (  110 => 39,  101 => 35,  92 => 29,  83 => 23,  75 => 18,  63 => 9,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"footer footer-transparent d-print-none\">
    <div class=\"container-xl\">
        <div class=\"row text-center align-items-center\">
            <div class=\"col-12 col-lg-12\">
                <ul class=\"list-inline list-inline-dots\">
                    <li class=\"list-inline-item\">
                        {{ 'sylius.ui.copyright'|trans }} © {{ 'now'|date(\"Y\") }}
                        <a href=\"https://sylius.com/\" target=\"_blank\" class=\"link-secondary\">Sylius</a>.
                        {{ 'sylius.ui.all_rights_reserved'|trans }}.
                    </li>
                </ul>
            </div>

            <div class=\"col-lg-12 ms-lg-auto\">
                <ul class=\"list-inline list-inline-dots m-1\">
                    <li class=\"list-inline-item\">
                        <a href=\"https://docs.sylius.com\" target=\"_blank\" class=\"link-secondary\" rel=\"noopener\">
                            {{ 'sylius.ui.documentation'|trans }}
                        </a></li>
                    <li class=\"list-inline-item\">
                        <a href=\"https://github.com/Sylius/Sylius?tab=MIT-1-ov-file#readme\" target=\"_blank\"
                           class=\"link-secondary\" rel=\"noopener\">
                            {{ 'sylius.ui.license'|trans }}
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"https://github.com/Sylius/Sylius\" target=\"_blank\" class=\"link-secondary\"
                           rel=\"noopener\">
                            {{ 'sylius.ui.source_code'|trans }}
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"https://github.com/Sylius/Sylius/issues\" target=\"_blank\" class=\"link-secondary\"
                           rel=\"noopener\">
                            {{ 'sylius.ui.see_issue'|trans }}? {{ 'sylius.ui.report_it'|trans }}!
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        {{ 'sylius.ui.powered_by'|trans }} Sylius v{{ sylius_meta.version }}.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
", "@SyliusAdmin/shared/crud/common/content/footer.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/shared/crud/common/content/footer.html.twig");
    }
}
