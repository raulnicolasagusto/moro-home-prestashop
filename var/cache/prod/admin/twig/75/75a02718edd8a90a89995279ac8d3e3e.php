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

/* @PrestaShop/Admin/Module/Includes/menu_top.html.twig */
class __TwigTemplate_77c64a8207701a46380b865b98d332df extends Template
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
        // line 5
        yield "<div class=\"module-top-menu\">
  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"input-group\" id=\"search-input-group\">
        <input type=\"text\" id=\"module-search-bar\" class=\"form-control\">
        <div class=\"input-group-append\">
          <button class=\"btn btn-primary float-right search-button\" id=\"module-search-button\">
            <i class=\"material-icons\">search</i>
          </button>
        </div>
      </div>
    </div>
    <div class=\"col-md-4 module-menu-item\">
    </div>
  </div>

  <div class=\"row\">
    ";
        // line 22
        if (array_key_exists("topMenuData", $context)) {
            // line 23
            yield "      <div class=\"col-md-4 module-top-menu-item\">
        <h3>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category", [], "Admin.Catalog.Feature"), "html", null, true);
            yield "</h3>
        ";
            // line 25
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig", ["topMenuData" => ($context["topMenuData"] ?? null)]);
            yield "
      </div>
    ";
        }
        // line 28
        yield "
    ";
        // line 29
        if ((array_key_exists("requireFilterStatus", $context) && (($context["requireFilterStatus"] ?? null) == true))) {
            // line 30
            yield "      <div class=\"col-md-4 module-top-menu-item\">
        <h3>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status", [], "Admin.Global"), "html", null, true);
            yield "</h3>
        ";
            // line 32
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/dropdown_status.html.twig");
            yield "
      </div>
    ";
        }
        // line 35
        yield "
    ";
        // line 36
        if (((($context["level"] ?? null) > Twig\Extension\CoreExtension::constant("PrestaShop\\PrestaShop\\Core\\Security\\Permission::LEVEL_UPDATE")) && array_key_exists("bulkActions", $context))) {
            // line 37
            yield "      <div class=\"col-md-4 module-top-menu-item disabled\">
        <h3>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bulk Actions", [], "Admin.Global"), "html", null, true);
            yield "</h3>
        ";
            // line 39
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/dropdown_bulk.html.twig");
            yield "
      </div>
    ";
        }
        // line 42
        yield "  </div>
</div>

<hr class=\"top-menu-separator\"/>

";
        // line 47
        $context["js_translatable"] = Twig\Extension\CoreExtension::merge(["Search - placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search modules: keyword, name, author...", [], "Admin.Modules.Help")],         // line 49
($context["js_translatable"] ?? null));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Module/Includes/menu_top.html.twig";
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
        return array (  120 => 49,  119 => 47,  112 => 42,  106 => 39,  102 => 38,  99 => 37,  97 => 36,  94 => 35,  88 => 32,  84 => 31,  81 => 30,  79 => 29,  76 => 28,  70 => 25,  66 => 24,  63 => 23,  61 => 22,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/menu_top.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\menu_top.html.twig");
    }
}
