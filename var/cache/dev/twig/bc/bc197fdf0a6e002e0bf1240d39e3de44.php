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

/* shop/header/logo.html.twig */
class __TwigTemplate_676a6389bf516ef0a1035796731f69c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/header/logo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/header/logo.html.twig"));

        // line 2
        yield "<a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
        yield "\" 
   class=\"kp-logo d-flex align-items-center justify-content-start\" 
   aria-label=\"Kaftan Plug\">
  <img 
    src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app/shop/images/logo.png", "app.shop"), "html", null, true);
        yield "\"
    alt=\"Kaftan Plug — Logo\"
    class=\"kp-logo-img\"
    loading=\"lazy\"
  >
</a>

<style>
  /* Conteneur du logo */
  .kp-logo {
    display: flex;
    align-items: left;
    justify-content: flex-start;
  }

  /* Image du logo */
  .kp-logo-img {
    height: 100px;           /* hauteur idéale (ajuste ici : 38–50px max) */
    width: auto;
    object-fit: contain;
    display: block;
    transition: transform .2s ease;
  }

  /* Légère animation au survol */
  .kp-logo-img:hover {
    transform: scale(1.05);
  }

  /* Réduction sur mobile */
  @media (max-width: 992px) {
    .kp-logo-img {
      height: 34px;
    }
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
        return "shop/header/logo.html.twig";
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
        return array (  56 => 6,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/shop/header/logo.html.twig #}
<a href=\"{{ path('sylius_shop_homepage') }}\" 
   class=\"kp-logo d-flex align-items-center justify-content-start\" 
   aria-label=\"Kaftan Plug\">
  <img 
    src=\"{{ asset('build/app/shop/images/logo.png', 'app.shop') }}\"
    alt=\"Kaftan Plug — Logo\"
    class=\"kp-logo-img\"
    loading=\"lazy\"
  >
</a>

<style>
  /* Conteneur du logo */
  .kp-logo {
    display: flex;
    align-items: left;
    justify-content: flex-start;
  }

  /* Image du logo */
  .kp-logo-img {
    height: 100px;           /* hauteur idéale (ajuste ici : 38–50px max) */
    width: auto;
    object-fit: contain;
    display: block;
    transition: transform .2s ease;
  }

  /* Légère animation au survol */
  .kp-logo-img:hover {
    transform: scale(1.05);
  }

  /* Réduction sur mobile */
  @media (max-width: 992px) {
    .kp-logo-img {
      height: 34px;
    }
  }
</style>
", "shop/header/logo.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/templates/shop/header/logo.html.twig");
    }
}
