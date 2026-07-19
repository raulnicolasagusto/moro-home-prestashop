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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig */
class __TwigTemplate_5f1befc8451f2e7126192e59d3d97b64 extends Template
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
            'layouts_configuration' => [$this, 'block_layouts_configuration'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('layouts_configuration', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layouts_configuration(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "  <div class=\"layout-configuration\">
    <div class=\"inner-content\">
      <div class=\"float-left\">
        <div class=\"d-inline-block layout-logo\">
          <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/pages/themes/icon_layouts.png"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure your page layouts", [], "Admin.Design.Feature"), "html", null, true);
        yield "\">
        </div>
        <div class=\"d-inline-block\">
          <span class=\"title\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure your page layouts", [], "Admin.Design.Feature"), "html", null, true);
        yield "</span>
          <p class=\"mb-0 description\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Each page can use a different layout, choose it among the layouts bundled in your theme.", [], "Admin.Design.Feature"), "html", null, true);
        yield "</p>
        </div>
      </div>
      <div class=\"float-right\">
        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_theme_customize_layouts");
        yield "\"
          class=\"btn btn-tertiary choose-layouts-button\"
        >
          ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose layouts", [], "Admin.Design.Feature"), "html", null, true);
        yield "
        </a>

        ";
        // line 25
        if ((($tmp = ($context["isDevModeOn"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "          <button class=\"btn btn-tertiary-outline js-reset-theme-layouts-btn\"
            type=\"button\"
            data-submit-url=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_reset_layouts", ["themeName" => CoreExtension::getAttribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "name", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\"
            data-csrf-token=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("reset-theme-layouts"), "html", null, true);
            yield "\"
          >
            <i class=\"material-icons\">settings_backup_restore</i>
            ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset to defaults", [], "Admin.Design.Feature"), "html", null, true);
            yield "
          </button>
        ";
        }
        // line 35
        yield "      </div>
      <div class=\"clearfix\"></div>
    </div>
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  116 => 35,  110 => 32,  104 => 29,  100 => 28,  96 => 26,  94 => 25,  88 => 22,  82 => 19,  75 => 15,  71 => 14,  63 => 11,  57 => 7,  46 => 6,  43 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Theme\\Blocks\\layouts_configuration.html.twig");
    }
}
