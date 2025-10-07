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

/* shop/header/theme_overrides.html.twig */
class __TwigTemplate_2dae05f40e9fd92c4e3d0ee4009978f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/header/theme_overrides.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/header/theme_overrides.html.twig"));

        // line 1
        yield "<style>
  :root{
    --kp-brown:#a88a6a;
    --kp-brown-2:#9c7d5c;
    --kp-ink:#fff;
    --kp-ink-soft:#f1e5d0;
    --kp-sep:rgba(0,0,0,.15);
    --kp-icon:20px; /* icônes légèrement plus petites */
  }

  /* ===== 1) TOP BAR ===== */
  .bg-black{
    background-color:var(--kp-brown) !important;
    padding: 4px 0 !important; /* top bar plus fine */
  }
  .bg-black a{
    color:var(--kp-ink) !important;
    text-decoration:none !important;
    font-weight:500;
    font-size: 13px; /* texte plus petit */
  }
  .bg-black a:hover{ color:var(--kp-ink-soft) !important; }

  /* ===== 2) LIGNE LOGO / COMPTE / PANIER ===== */
  .border-bottom.py-4{
    background-color:var(--kp-brown) !important;
    border-color:var(--kp-sep) !important;
    padding-top: .4rem !important;
    padding-bottom: .4rem !important; /* moitié de la hauteur d’avant */
  }
  .border-bottom.py-4 .row{ align-items:center !important; }

  .border-bottom.py-4 a,
  .border-bottom.py-4 .btn.btn-transparent,
  .border-bottom.py-4 .btn-icon{
    color:var(--kp-ink) !important;
    font-size: 14px; /* plus fin */
  }
  .border-bottom.py-4 a:hover{ color:var(--kp-ink-soft) !important; }

  /* Icônes + total panier */
  .border-bottom.py-4 .icon{ width:var(--kp-icon) !important; height:var(--kp-icon) !important; }
  .border-bottom.py-4 [data-test-cart-total]{ 
    color:var(--kp-ink) !important; 
    font-weight:600;
    font-size: 14px;
  }

  /* ===== 3) NAVBAR ===== */
  .w-100.border-bottom{
    background-color:var(--kp-brown) !important;
    border-color:var(--kp-sep) !important;
    padding-top: 6px !important;
    padding-bottom: 6px !important;
  }
  .navbar a, .navbar .nav-link{
    color:var(--kp-ink) !important;
    text-decoration:none !important;
    font-weight:600;
    font-size: 14px;
  }
  .navbar a:hover{ color:var(--kp-ink-soft) !important; }

  /* ===== 4) LOGO ===== */
  .sylius-header a[aria-label=\"Kaftan Plug\"] img{
    height: 20px !important; /* réduit de 45 → 38px */
    width:auto !important;
    object-fit:contain;
    display:block;
  }
  .sylius-header .container .row > .col:first-child{
    display:flex; align-items:center; justify-content:flex-start;
  }

  /* ===== 5) Finitions ===== */
  .btn.btn-transparent{ background:transparent !important; border:0 !important; }
  .sylius-messages{ display:none; }

  @media (max-width:992px){
    .border-bottom.py-4 [data-test-cart-total]{ display:none; }
    .sylius-header a[aria-label=\"Kaftan Plug\"] img{ height:32px !important; }
  }
</style>
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
        return "shop/header/theme_overrides.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
  :root{
    --kp-brown:#a88a6a;
    --kp-brown-2:#9c7d5c;
    --kp-ink:#fff;
    --kp-ink-soft:#f1e5d0;
    --kp-sep:rgba(0,0,0,.15);
    --kp-icon:20px; /* icônes légèrement plus petites */
  }

  /* ===== 1) TOP BAR ===== */
  .bg-black{
    background-color:var(--kp-brown) !important;
    padding: 4px 0 !important; /* top bar plus fine */
  }
  .bg-black a{
    color:var(--kp-ink) !important;
    text-decoration:none !important;
    font-weight:500;
    font-size: 13px; /* texte plus petit */
  }
  .bg-black a:hover{ color:var(--kp-ink-soft) !important; }

  /* ===== 2) LIGNE LOGO / COMPTE / PANIER ===== */
  .border-bottom.py-4{
    background-color:var(--kp-brown) !important;
    border-color:var(--kp-sep) !important;
    padding-top: .4rem !important;
    padding-bottom: .4rem !important; /* moitié de la hauteur d’avant */
  }
  .border-bottom.py-4 .row{ align-items:center !important; }

  .border-bottom.py-4 a,
  .border-bottom.py-4 .btn.btn-transparent,
  .border-bottom.py-4 .btn-icon{
    color:var(--kp-ink) !important;
    font-size: 14px; /* plus fin */
  }
  .border-bottom.py-4 a:hover{ color:var(--kp-ink-soft) !important; }

  /* Icônes + total panier */
  .border-bottom.py-4 .icon{ width:var(--kp-icon) !important; height:var(--kp-icon) !important; }
  .border-bottom.py-4 [data-test-cart-total]{ 
    color:var(--kp-ink) !important; 
    font-weight:600;
    font-size: 14px;
  }

  /* ===== 3) NAVBAR ===== */
  .w-100.border-bottom{
    background-color:var(--kp-brown) !important;
    border-color:var(--kp-sep) !important;
    padding-top: 6px !important;
    padding-bottom: 6px !important;
  }
  .navbar a, .navbar .nav-link{
    color:var(--kp-ink) !important;
    text-decoration:none !important;
    font-weight:600;
    font-size: 14px;
  }
  .navbar a:hover{ color:var(--kp-ink-soft) !important; }

  /* ===== 4) LOGO ===== */
  .sylius-header a[aria-label=\"Kaftan Plug\"] img{
    height: 20px !important; /* réduit de 45 → 38px */
    width:auto !important;
    object-fit:contain;
    display:block;
  }
  .sylius-header .container .row > .col:first-child{
    display:flex; align-items:center; justify-content:flex-start;
  }

  /* ===== 5) Finitions ===== */
  .btn.btn-transparent{ background:transparent !important; border:0 !important; }
  .sylius-messages{ display:none; }

  @media (max-width:992px){
    .border-bottom.py-4 [data-test-cart-total]{ display:none; }
    .sylius-header a[aria-label=\"Kaftan Plug\"] img{ height:32px !important; }
  }
</style>
", "shop/header/theme_overrides.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/templates/shop/header/theme_overrides.html.twig");
    }
}
