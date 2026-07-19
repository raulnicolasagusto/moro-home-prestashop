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

/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_8b9e1a4ca8bf8a273d73539bc89ce16a extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_import"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new theme", [], "Admin.Design.Feature"), "icon" => "add_circle_outline"], "export" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_export_current"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export current theme", [], "Admin.Design.Feature"), "icon" => "cloud_download"]];
        // line 5
        $this->parent = $this->load("@PrestaShop/Admin/layout.html.twig", 5);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "  <div id=\"themes-logo-page\">

    ";
        // line 22
        if ((($tmp =  !($context["isSingleShopContext"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "      <div class=\"alert alert-info\">
        <p class=\"alert-text\">
          ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You must select a shop from the above list if you wish to choose a theme.", [], "Admin.Design.Help"), "html", null, true);
            yield "
        </p>
      </div>
    ";
        }
        // line 29
        yield "
    ";
        // line 30
        if ((($tmp = ($context["isInstalledRtlLanguage"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig");
            yield "
    ";
        }
        // line 33
        yield "
    ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["shopLogosForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_upload_logos")]);
        yield "
    ";
        // line 35
        if ((( !($context["isInstalledRtlLanguage"] ?? null) && ($context["isSingleShopContext"] ?? null)) && ($context["isMultiShopFeatureUsed"] ?? null))) {
            // line 36
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig");
            yield "
    ";
        }
        // line 38
        yield "    <div class=\"card\">
      <div class=\"card-header\">
        ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo", [], "Admin.Global"), "html", null, true);
        yield "
      </div>
      <div class=\"card-body logo-configuration-card-body\">
        ";
        // line 43
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
        yield "
      </div>
      <div class=\"card-footer\">
        <button class=\"btn btn-primary float-right\">
          ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "
        </button>
        <div class=\"clearfix\">&nbsp;</div>
      </div>
    </div>
    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["shopLogosForm"] ?? null), 'rest');
        yield "
    ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["shopLogosForm"] ?? null), 'form_end');
        yield "

    <div class=\"card\">
      <div class=\"card-header\" data-role=\"theme-shop\">
        ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My theme for %name% shop", ["%name%" => ($context["shopName"] ?? null)], "Admin.Design.Feature"), "html", null, true);
        yield "
      </div>
      <div class=\"card-body\">
        <div class=\"row\">
          ";
        // line 61
        yield from $this->load("@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 61, 1)->unwrap()->yield(CoreExtension::merge($context, ["themeName" => CoreExtension::getAttribute($this->env, $this->source,         // line 62
($context["theme"] ?? null), "get", ["name"], "method", false, false, false, 62), "themeDisplayName" => CoreExtension::getAttribute($this->env, $this->source,         // line 63
($context["theme"] ?? null), "get", ["display_name"], "method", false, false, false, 63), "themeVersion" => CoreExtension::getAttribute($this->env, $this->source,         // line 64
($context["currentlyUsedTheme"] ?? null), "get", ["version"], "method", false, false, false, 64), "themeAuthor" => CoreExtension::getAttribute($this->env, $this->source,         // line 65
($context["currentlyUsedTheme"] ?? null), "get", ["author.name"], "method", false, false, false, 65), "themeAuthorUrl" => CoreExtension::getAttribute($this->env, $this->source,         // line 66
($context["theme"] ?? null), "get", ["author.url"], "method", false, false, false, 66), "themeFramework" => CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["theme"] ?? null), "get", ["meta.compatibility.framework"], "method", false, false, false, 67), "isActive" => true]));
        // line 80
        yield "
          ";
        // line 81
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["notUsedThemes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["notUsedThemes"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 83
                yield "              ";
                yield from $this->load("@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 83, 2)->unwrap()->yield(CoreExtension::merge($context, ["themeName" => CoreExtension::getAttribute($this->env, $this->source,                 // line 84
$context["theme"], "get", ["name"], "method", false, false, false, 84), "themeDisplayName" => CoreExtension::getAttribute($this->env, $this->source,                 // line 85
$context["theme"], "get", ["display_name"], "method", false, false, false, 85), "themeVersion" => CoreExtension::getAttribute($this->env, $this->source,                 // line 86
$context["theme"], "get", ["version"], "method", false, false, false, 86), "themeAuthor" => CoreExtension::getAttribute($this->env, $this->source,                 // line 87
$context["theme"], "get", ["author.name"], "method", false, false, false, 87), "themeAuthorUrl" => CoreExtension::getAttribute($this->env, $this->source,                 // line 88
$context["theme"], "get", ["author.url"], "method", false, false, false, 88), "themeFramework" => CoreExtension::getAttribute($this->env, $this->source,                 // line 89
$context["theme"], "get", ["meta.compatibility.framework"], "method", false, false, false, 89), "isActive" => false]));
                // line 115
                yield "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "          </div>

          ";
            // line 118
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Improve/Design/Theme/Blocks/use_theme_modal.html.twig");
            yield "
          ";
            // line 119
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Improve/Design/Theme/Blocks/delete_theme_modal.html.twig");
            yield "
        ";
        }
        // line 121
        yield "
        ";
        // line 122
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminThemesListAfter", ["current_theme_name" => CoreExtension::getAttribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "get", ["name"], "method", false, false, false, 122)]);
        yield "

        ";
        // line 124
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig");
        yield "
      </div>
    </div>

  </div>
";
        yield from [];
    }

    // line 131
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 132
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

  <script src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/themes.bundle.js"), "html", null, true);
        yield "\"></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
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
        return array (  247 => 134,  241 => 132,  234 => 131,  223 => 124,  218 => 122,  215 => 121,  210 => 119,  206 => 118,  202 => 116,  188 => 115,  186 => 89,  185 => 88,  184 => 87,  183 => 86,  182 => 85,  181 => 84,  179 => 83,  161 => 82,  159 => 81,  156 => 80,  154 => 67,  153 => 66,  152 => 65,  151 => 64,  150 => 63,  149 => 62,  148 => 61,  141 => 57,  134 => 53,  130 => 52,  122 => 47,  115 => 43,  109 => 40,  105 => 38,  99 => 36,  97 => 35,  93 => 34,  90 => 33,  84 => 31,  82 => 30,  79 => 29,  72 => 25,  68 => 23,  66 => 22,  62 => 20,  55 => 19,  50 => 5,  48 => 6,  41 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Theme\\index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_8b9e1a4ca8bf8a273d73539bc89ce16a___1 extends Template
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
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 61
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", 61);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 71
        yield "              <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["baseShopUrl"] ?? null), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "get", ["preview"], "method", false, false, false, 71), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "get", ["display_name"], "method", false, false, false, 71), "html", null, true);
        yield "\">
            ";
        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 74
        yield "              <button class=\"btn action-button\">
                <i class=\"material-icons icon-current-theme\">done</i>
                ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My current theme", [], "Admin.Design.Feature"), "html", null, true);
        yield "
              </button>
            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
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
        return array (  348 => 76,  344 => 74,  337 => 73,  326 => 71,  319 => 70,  308 => 61,  247 => 134,  241 => 132,  234 => 131,  223 => 124,  218 => 122,  215 => 121,  210 => 119,  206 => 118,  202 => 116,  188 => 115,  186 => 89,  185 => 88,  184 => 87,  183 => 86,  182 => 85,  181 => 84,  179 => 83,  161 => 82,  159 => 81,  156 => 80,  154 => 67,  153 => 66,  152 => 65,  151 => 64,  150 => 63,  149 => 62,  148 => 61,  141 => 57,  134 => 53,  130 => 52,  122 => 47,  115 => 43,  109 => 40,  105 => 38,  99 => 36,  97 => 35,  93 => 34,  90 => 33,  84 => 31,  82 => 30,  79 => 29,  72 => 25,  68 => 23,  66 => 22,  62 => 20,  55 => 19,  50 => 5,  48 => 6,  41 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Theme\\index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_8b9e1a4ca8bf8a273d73539bc89ce16a___2 extends Template
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
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 83
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", 83);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 93
        yield "                  <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["baseShopUrl"] ?? null), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "get", ["preview"], "method", false, false, false, 93), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "get", ["display_name"], "method", false, false, false, 93), "html", null, true);
        yield "\">
                ";
        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 96
        yield "                  <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_enable", ["themeName" => CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 96)]), "html", null, true);
        yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("enable-theme"), "html", null, true);
        yield "\"/>
                    <button type=\"button\" class=\"btn action-button js-display-use-theme-modal\" ";
        // line 98
        yield (((($tmp = (!($context["isSingleShopContext"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield ">
                      <i class=\"material-icons\">
                        present_to_all
                      </i>
                      <span>";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use this theme", [], "Admin.Design.Feature"), "html", null, true);
        yield "</span>
                    </button>
                  </form>
                  <form action=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_delete", ["themeName" => CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 105)]), "html", null, true);
        yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-theme"), "html", null, true);
        yield "\"/>
                    <button type=\"button\" class=\"btn delete-button js-display-delete-theme-modal\">
                      <i class=\"material-icons\">
                        delete
                      </i>
                    </button>
                  </form>
                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
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
        return array (  472 => 106,  468 => 105,  462 => 102,  455 => 98,  451 => 97,  446 => 96,  439 => 95,  428 => 93,  421 => 92,  410 => 83,  348 => 76,  344 => 74,  337 => 73,  326 => 71,  319 => 70,  308 => 61,  247 => 134,  241 => 132,  234 => 131,  223 => 124,  218 => 122,  215 => 121,  210 => 119,  206 => 118,  202 => 116,  188 => 115,  186 => 89,  185 => 88,  184 => 87,  183 => 86,  182 => 85,  181 => 84,  179 => 83,  161 => 82,  159 => 81,  156 => 80,  154 => 67,  153 => 66,  152 => 65,  151 => 64,  150 => 63,  149 => 62,  148 => 61,  141 => 57,  134 => 53,  130 => 52,  122 => 47,  115 => 43,  109 => 40,  105 => 38,  99 => 36,  97 => 35,  93 => 34,  90 => 33,  84 => 31,  82 => 30,  79 => 29,  72 => 25,  68 => 23,  66 => 22,  62 => 20,  55 => 19,  50 => 5,  48 => 6,  41 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Theme\\index.html.twig");
    }
}
