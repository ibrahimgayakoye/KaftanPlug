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

/* @SyliusShop/shared/layout/base/header/content.html.twig */
class __TwigTemplate_1b530ea768e14e280b60d44c42bf95dc extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'styles' => [$this, 'block_styles'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@!SyliusShop/shared/layout/base/header/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/layout/base/header/content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/shared/layout/base/header/content.html.twig"));

        $this->parent = $this->load("@!SyliusShop/shared/layout/base/header/content.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "  ";
        yield from $this->yieldParentBlock("content", $context, $blocks);
        yield "

  ";
        // line 7
        yield "  <nav class=\"extra-nav\">
    <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
        yield "#about\" class=\"extra-link\">Qui sommes-nous</a>
  </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 13
        yield "  ";
        yield from $this->yieldParentBlock("styles", $context, $blocks);
        yield "
  <style>
    /* Marron principal */
    header,
    .ui.menu,
    .main.menu,
    .top.bar,
    .sylius-main-menu {
      background-color: #a88a6a !important;
    }

    .ui.menu .item,
    .ui.menu a.item,
    .ui.menu .dropdown.item {
      color: #fff !important;
    }

    .ui.menu a.item:hover {
      color: #f1e5d0 !important;
    }

    .extra-nav {
      display: inline-block;
      margin-left: 2rem;
    }

    .extra-link {
      color: #fff;
      text-decoration: none;
      font-weight: 600;
    }

    .extra-link:hover {
      color: #f1e5d0;
    }

    /* Logo personnalisé */
    .ui.menu .item img.logo {
      height: 60px !important;
      width: auto;
      object-fit: contain;
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusShop/shared/layout/base/header/content.html.twig";
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
        return array (  113 => 13,  100 => 12,  86 => 8,  83 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@!SyliusShop/shared/layout/base/header/content.html.twig' %}

{% block content %}
  {{ parent() }}

  {# Ajout du lien “Qui sommes-nous” #}
  <nav class=\"extra-nav\">
    <a href=\"{{ path('sylius_shop_homepage') }}#about\" class=\"extra-link\">Qui sommes-nous</a>
  </nav>
{% endblock %}

{% block styles %}
  {{ parent() }}
  <style>
    /* Marron principal */
    header,
    .ui.menu,
    .main.menu,
    .top.bar,
    .sylius-main-menu {
      background-color: #a88a6a !important;
    }

    .ui.menu .item,
    .ui.menu a.item,
    .ui.menu .dropdown.item {
      color: #fff !important;
    }

    .ui.menu a.item:hover {
      color: #f1e5d0 !important;
    }

    .extra-nav {
      display: inline-block;
      margin-left: 2rem;
    }

    .extra-link {
      color: #fff;
      text-decoration: none;
      font-weight: 600;
    }

    .extra-link:hover {
      color: #f1e5d0;
    }

    /* Logo personnalisé */
    .ui.menu .item img.logo {
      height: 60px !important;
      width: auto;
      object-fit: contain;
    }
  </style>
{% endblock %}
", "@SyliusShop/shared/layout/base/header/content.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/templates/bundles/SyliusShopBundle/shared/layout/base/header/content.html.twig");
    }
}
