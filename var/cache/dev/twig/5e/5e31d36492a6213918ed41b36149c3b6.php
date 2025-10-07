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

/* @SyliusAdmin/dashboard/index/component/pending_actions/body/product_reviews_to_approve.html.twig */
class __TwigTemplate_b13f8bfb81804a1c271aa46d2c31c8b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/dashboard/index/component/pending_actions/body/product_reviews_to_approve.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/dashboard/index/component/pending_actions/body/product_reviews_to_approve.html.twig"));

        // line 1
        yield "<a
    href=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_review_index", ["criteria" => ["status" => Twig\Extension\CoreExtension::constant("Sylius\\Component\\Review\\Model\\ReviewInterface::STATUS_NEW")]]), "html", null, true);
        yield "\"
    class=\"d-flex align-items-center justify-content-between list-group-item list-group-item-action border-bottom\"
    ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "
    ";
        // line 5
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-reviews-to-approve");
        yield "
>
    <div><strong>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.product_reviews"), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.to_approve"), "html", null, true);
        yield "</div>
    <div class=\"d-flex align-items-center gap-4\">
        <span
            class=\"badge rounded-pill bg-dark-lt text-default-fg py-2 px-3 fs-4 fw-bold my-1\"
            ";
        // line 11
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-reviews-to-approve-count");
        yield "
        >
            ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "
        </span>
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("tabler:chevron-right");
        yield "
    </div>
</a>
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
        return "@SyliusAdmin/dashboard/index/component/pending_actions/body/product_reviews_to_approve.html.twig";
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
        return array (  84 => 15,  79 => 13,  74 => 11,  65 => 7,  60 => 5,  56 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<a
    href=\"{{ path('sylius_admin_product_review_index', { criteria: { 'status': constant('Sylius\\\\Component\\\\Review\\\\Model\\\\ReviewInterface::STATUS_NEW') } }) }}\"
    class=\"d-flex align-items-center justify-content-between list-group-item list-group-item-action border-bottom\"
    {{ attributes }}
    {{ sylius_test_html_attribute('product-reviews-to-approve') }}
>
    <div><strong>{{ 'sylius.ui.product_reviews'|trans }}</strong> {{ 'sylius.ui.to_approve'|trans }}</div>
    <div class=\"d-flex align-items-center gap-4\">
        <span
            class=\"badge rounded-pill bg-dark-lt text-default-fg py-2 px-3 fs-4 fw-bold my-1\"
            {{ sylius_test_html_attribute('product-reviews-to-approve-count') }}
        >
            {{ count }}
        </span>
        {{ ux_icon('tabler:chevron-right') }}
    </div>
</a>
", "@SyliusAdmin/dashboard/index/component/pending_actions/body/product_reviews_to_approve.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/templates/dashboard/index/component/pending_actions/body/product_reviews_to_approve.html.twig");
    }
}
