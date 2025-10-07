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

/* @SyliusMolliePlugin/admin/payment_method/update/content/onboarding_wizard/logo.html.twig */
class __TwigTemplate_604e9d6029ad1ce53c15122481be9336 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/update/content/onboarding_wizard/logo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusMolliePlugin/admin/payment_method/update/content/onboarding_wizard/logo.html.twig"));

        // line 1
        yield "<svg
  xmlns=\"http://www.w3.org/2000/svg\"
  xmlns:xlink=\"http://www.w3.org/1999/xlink\"
  width=\"60px\"
  height=\"60px\"
  viewBox=\"0 0 60 60\"
  version=\"1.1\"
>
  <g fill=\"#000\">
    <path d=\"M 0 30 C 0 13.429688 13.429688 0 30 0 C 46.570312 0 60 13.429688 60 30 C 60 46.566406 46.570312 60 30 60 C 13.429688 60 0 46.566406 0 30 Z M 0 30 \"/>
    <path fill=\"#fff\" d=\"M 47.117188 29.019531 L 47.113281 29.019531 C 47.113281 23.722656 42.957031 19.296875 37.679688 19.144531 C 34.714844 19.058594 31.878906 20.332031 29.964844 22.601562 C 28.1875 20.496094 25.535156 19.148438 22.566406 19.148438 C 17.21875 19.148438 12.882812 23.488281 12.882812 28.855469 L 12.882812 41.226562 L 17.390625 41.226562 L 17.390625 29.019531 C 17.390625 26.164062 19.71875 23.761719 22.5625 23.789062 C 25.351562 23.824219 27.597656 26.089844 27.621094 28.886719 L 27.621094 41.226562 L 32.253906 41.226562 L 32.253906 28.992188 C 32.253906 26.148438 34.578125 23.746094 37.417969 23.769531 C 40.203125 23.800781 42.453125 26.058594 42.488281 28.855469 L 42.488281 41.226562 L 47.117188 41.226562 Z M 47.117188 29.019531 \"/>
  </g>
</svg>
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
        return "@SyliusMolliePlugin/admin/payment_method/update/content/onboarding_wizard/logo.html.twig";
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
        return new Source("<svg
  xmlns=\"http://www.w3.org/2000/svg\"
  xmlns:xlink=\"http://www.w3.org/1999/xlink\"
  width=\"60px\"
  height=\"60px\"
  viewBox=\"0 0 60 60\"
  version=\"1.1\"
>
  <g fill=\"#000\">
    <path d=\"M 0 30 C 0 13.429688 13.429688 0 30 0 C 46.570312 0 60 13.429688 60 30 C 60 46.566406 46.570312 60 30 60 C 13.429688 60 0 46.566406 0 30 Z M 0 30 \"/>
    <path fill=\"#fff\" d=\"M 47.117188 29.019531 L 47.113281 29.019531 C 47.113281 23.722656 42.957031 19.296875 37.679688 19.144531 C 34.714844 19.058594 31.878906 20.332031 29.964844 22.601562 C 28.1875 20.496094 25.535156 19.148438 22.566406 19.148438 C 17.21875 19.148438 12.882812 23.488281 12.882812 28.855469 L 12.882812 41.226562 L 17.390625 41.226562 L 17.390625 29.019531 C 17.390625 26.164062 19.71875 23.761719 22.5625 23.789062 C 25.351562 23.824219 27.597656 26.089844 27.621094 28.886719 L 27.621094 41.226562 L 32.253906 41.226562 L 32.253906 28.992188 C 32.253906 26.148438 34.578125 23.746094 37.417969 23.769531 C 40.203125 23.800781 42.453125 26.058594 42.488281 28.855469 L 42.488281 41.226562 L 47.117188 41.226562 Z M 47.117188 29.019531 \"/>
  </g>
</svg>
", "@SyliusMolliePlugin/admin/payment_method/update/content/onboarding_wizard/logo.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/mollie-plugin/templates/admin/payment_method/update/content/onboarding_wizard/logo.html.twig");
    }
}
