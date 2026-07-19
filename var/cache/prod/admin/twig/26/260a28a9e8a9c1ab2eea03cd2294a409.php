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

/* @PrestaShop/Admin/Layout/default_layout.html.twig */
class __TwigTemplate_7a8c25f408839ee19e808d6c37299abb extends Template
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
            'header' => [$this, 'block_header'],
            'core_javascript' => [$this, 'block_core_javascript'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'layout_header' => [$this, 'block_layout_header'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "setupSmarty", [(((array_key_exists("layoutTitle", $context) &&  !(null === $context["layoutTitle"]))) ? ($context["layoutTitle"]) : ("")), ($context["metaTitle"] ?? null), ($context["lightDisplay"] ?? null)], "method", false, false, false, 6), "html", null, true);
        yield "
<!DOCTYPE html>
<html lang=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 8), "html", null, true);
        yield "\">
  <head>
    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 20
        yield "  </head>

  <body class=\"lang-";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 22), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isRtlLanguage", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " lang-rtl";
        }
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "controllerName", [], "any", false, false, false, 22))), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "menuCollapsed", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " page-sidebar-closed";
        }
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "multiShop", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "multiShop", [], "any", false, false, false, 22), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " multishop-enabled";
        }
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", false, false, false, 22), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " developer-mode";
        }
        yield " ps-bo-rebrand\"
    ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 23) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 23), "base_url", [], "any", true, true, false, 23))) {
            yield "data-base-url=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 23), "base_url", [], "any", false, false, false, 23), "html", null, true);
            yield "\"";
        }
        // line 24
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 24) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 24), "token", [], "any", true, true, false, 24))) {
            yield "data-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 24), "token", [], "any", false, false, false, 24), "html", null, true);
            yield "\"";
        }
        // line 25
        yield "  >
";
        // line 27
        yield from $this->unwrap()->yieldBlock('layout_header', $context, $blocks);
        // line 118
        yield "
";
        // line 120
        if ((($tmp = ($context["showContentHeader"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 121
            yield "  ";
            $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v0->preRender("Toolbar", Twig\Extension\CoreExtension::toArray(["layoutTitle" => ((            // line 122
array_key_exists("layoutTitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutTitle"] ?? null))) : ("")), "layoutSubTitle" => ((            // line 123
array_key_exists("layoutSubTitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutSubTitle"] ?? null))) : ("")), "helpLink" => ((            // line 124
array_key_exists("help_link", $context)) ? (Twig\Extension\CoreExtension::default(($context["help_link"] ?? null), "")) : ("")), "enableSidebar" => ((            // line 125
array_key_exists("enableSidebar", $context)) ? (Twig\Extension\CoreExtension::default(($context["enableSidebar"] ?? null), false)) : (false)), "layoutHeaderToolbarBtn" => ((            // line 126
array_key_exists("layoutHeaderToolbarBtn", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutHeaderToolbarBtn"] ?? null), [])) : ([])), "breadcrumbLinks" => ((            // line 127
array_key_exists("breadcrumbLinks", $context)) ? (Twig\Extension\CoreExtension::default(($context["breadcrumbLinks"] ?? null), [])) : ([]))]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v0->startEmbedComponent("Toolbar", Twig\Extension\CoreExtension::toArray(["layoutTitle" => ((                // line 122
array_key_exists("layoutTitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutTitle"] ?? null))) : ("")), "layoutSubTitle" => ((                // line 123
array_key_exists("layoutSubTitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutSubTitle"] ?? null))) : ("")), "helpLink" => ((                // line 124
array_key_exists("help_link", $context)) ? (Twig\Extension\CoreExtension::default(($context["help_link"] ?? null), "")) : ("")), "enableSidebar" => ((                // line 125
array_key_exists("enableSidebar", $context)) ? (Twig\Extension\CoreExtension::default(($context["enableSidebar"] ?? null), false)) : (false)), "layoutHeaderToolbarBtn" => ((                // line 126
array_key_exists("layoutHeaderToolbarBtn", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutHeaderToolbarBtn"] ?? null), [])) : ([])), "breadcrumbLinks" => ((                // line 127
array_key_exists("breadcrumbLinks", $context)) ? (Twig\Extension\CoreExtension::default(($context["breadcrumbLinks"] ?? null), [])) : ([]))]), $context, "@PrestaShop/Admin/Layout/default_layout.html.twig", 41636278771);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 41636278771);
                $this->load("@PrestaShop/Admin/Layout/default_layout.html.twig", 121, "41636278771")->display($embeddedContext, $embeddedBlocks);
                $_v0->finishEmbedComponent();
            }
        }
        // line 132
        yield "
<div id=\"main-div\">
  <div
    class=\"content-div";
        // line 135
        if ((($context["showContentHeader"] ?? null) === false)) {
            yield " -notoolbar";
        }
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "displayedWithTabs", [], "any", false, false, false, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " with-tabs";
        }
        yield "\">
    ";
        // line 136
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "installDirExists", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 137
            yield "      <div class=\"alert alert-warning\">
        ";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("For security reasons, you must also delete the /install folder.", [], "Admin.Login.Notification"), "html", null, true);
            yield "
      </div>
    ";
        } else {
            // line 141
            yield "      ";
            yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminAfterHeader", []);
            yield "

      <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
      <div id=\"content-message-box\"></div>

      ";
            // line 147
            yield "      ";
            yield from $this->unwrap()->yieldBlock('content_header', $context, $blocks);
            // line 148
            yield "      ";
            yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
            // line 149
            yield "      ";
            yield from $this->unwrap()->yieldBlock('content_footer', $context, $blocks);
            // line 150
            yield "      ";
            yield from $this->unwrap()->yieldBlock('sidebar_right', $context, $blocks);
            // line 151
            yield "
      ";
            // line 152
            yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminEndContent", []);
            yield "
    ";
        }
        // line 154
        yield "  </div>
</div>

  <div class=\"mobile-layer\"></div>

  ";
        // line 159
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Footer");
        yield "

  ";
        // line 162
        yield "  ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 163
        yield "  ";
        yield from $this->unwrap()->yieldBlock('extra_javascripts', $context, $blocks);
        // line 164
        yield "  ";
        yield from $this->unwrap()->yieldBlock('translate_javascripts', $context, $blocks);
        // line 165
        yield "</body>
</html>
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "      ";
        yield from $this->unwrap()->yieldBlock('core_javascript', $context, $blocks);
        // line 14
        yield "      ";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("HeadTag", ["metaTitle" => ($context["metaTitle"] ?? null)]);
        yield "
      ";
        // line 15
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 18
        yield "      ";
        yield from $this->unwrap()->yieldBlock('extra_stylesheets', $context, $blocks);
        // line 19
        yield "    ";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_core_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Layout/core_javascript.html.twig");
        yield "
      ";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Layout/stylesheets.html.twig");
        yield "
      ";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "  <header id=\"header\" class=\"d-print-none\">
    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

      ";
        // line 33
        yield "      <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "defaultTabLink", [], "any", false, false, false, 34), "html", null, true);
        yield "\"></a>
      <span id=\"shop_version\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "version", [], "any", false, false, false, 35), "html", null, true);
        yield "</span>

      ";
        // line 37
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("QuickAccess");
        yield "

      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("SearchForm");
        yield "
            <button class=\"component-search-cancel d-none\">
              ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        yield "
            </button>
          </div>
          ";
        // line 47
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("MobileQuickAccess");
        yield "
        </div>
        <div class=\"component-search-background d-none\"></div>
      </div>

      ";
        // line 52
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", false, false, false, 52), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "        <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your shop is in debug mode.", [], "Admin.Navigation.Notification"), "html", null, true);
            yield "</strong></p><p class=&quot;text-left&quot;>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All the PHP errors and messages are displayed. When you no longer need it, [1]turn off[/1] this mode.", ["[1]" => "<strong>", "[/1]" => "</strong>"], "Admin.Navigation.Notification"), "html", null, true);
            yield "</p>\"
             href=\"";
            // line 60
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_performance");
            yield "\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Debug mode", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
          </a>
        </div>
      ";
        }
        // line 67
        yield "
      ";
        // line 68
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isMaintenanceEnabled", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isMaintenanceEnabled", [], "any", false, false, false, 68), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "        ";
            $context["maintenanceTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 70
                yield "          <p class=\"text-left text-nowrap\">
            <strong>
              ";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your store is in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
            </strong>
          </p>
          <p class=\"text-left\">
            ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your visitors and customers cannot access your store while in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
          </p>
          <p class=\"text-left\">
            ";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To manage the maintenance settings, go to Shop Parameters > Maintenance tab.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
          </p>
          ";
                // line 81
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", true, true, false, 81)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", false, false, false, 81), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 82
                    yield "            <p class=\"text-left\">
              ";
                    // line 83
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admins can access the store front office without storing their IP.", [], "Admin.Navigation.Notification"), "html", null, true);
                    yield "
            </p>
          ";
                }
                // line 86
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 87
            yield "        <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maintenanceTitle"] ?? null), "html");
            yield "\"
             href=\"";
            // line 94
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_maintenance");
            yield "\"
          >
            <i class=\"material-icons\">build</i>
            <span>";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maintenance mode", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
          </a>
        </div>
      ";
        }
        // line 101
        yield "
      <div class=\"header-right\">
        <div class=\"shop-list\">
          <a class=\"link\" id=\"header_shopname\" href=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "baseUrl", [], "any", false, false, false, 104), "html", null, true);
        yield "\" target= \"_blank\">
            <i class=\"material-icons\">visibility</i>
            <span>";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</span>
          </a>
        </div>
        ";
        // line 109
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("NotificationsCenter");
        yield "
        ";
        // line 110
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("EmployeeDropdown");
        yield "
        ";
        // line 111
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeTop");
        yield "
      </div>
    </nav>
  </header>

  ";
        // line 116
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("NavBar");
        yield "
";
        yield from [];
    }

    // line 147
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 148
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 149
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_right(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 162
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 163
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 164
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Layout/default_layout.html.twig";
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
        return array (  536 => 164,  526 => 163,  516 => 162,  506 => 150,  496 => 149,  486 => 148,  476 => 147,  469 => 116,  461 => 111,  457 => 110,  453 => 109,  447 => 106,  442 => 104,  437 => 101,  430 => 97,  424 => 94,  420 => 93,  412 => 87,  408 => 86,  402 => 83,  399 => 82,  397 => 81,  392 => 79,  386 => 76,  379 => 72,  375 => 70,  372 => 69,  370 => 68,  367 => 67,  360 => 63,  354 => 60,  348 => 59,  340 => 53,  338 => 52,  330 => 47,  324 => 44,  319 => 42,  311 => 37,  306 => 35,  302 => 34,  299 => 33,  293 => 28,  286 => 27,  276 => 18,  268 => 16,  261 => 15,  253 => 12,  246 => 11,  241 => 19,  238 => 18,  236 => 15,  231 => 14,  228 => 11,  221 => 10,  214 => 165,  211 => 164,  208 => 163,  205 => 162,  200 => 159,  193 => 154,  188 => 152,  185 => 151,  182 => 150,  179 => 149,  176 => 148,  173 => 147,  164 => 141,  158 => 138,  155 => 137,  153 => 136,  144 => 135,  139 => 132,  129 => 127,  128 => 126,  127 => 125,  126 => 124,  125 => 123,  124 => 122,  119 => 127,  118 => 126,  117 => 125,  116 => 124,  115 => 123,  114 => 122,  111 => 121,  109 => 120,  106 => 118,  104 => 27,  101 => 25,  94 => 24,  88 => 23,  70 => 22,  66 => 20,  64 => 10,  59 => 8,  54 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Layout/default_layout.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Layout\\default_layout.html.twig");
    }
}


/* @PrestaShop/Admin/Layout/default_layout.html.twig */
class __TwigTemplate_7a8c25f408839ee19e808d6c37299abb___41636278771 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'pageTitle' => [$this, 'block_pageTitle'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 121
        return $this->load(($context["__parent__"] ?? null), 121);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield ((        $this->unwrap()->renderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["outerBlocks"] ?? null), "pageTitle", [], "any", false, false, false, 129), $context, $blocks)) ? (        $this->unwrap()->renderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["outerBlocks"] ?? null), "pageTitle", [], "any", false, false, false, 129), $context, $blocks)) : ($this->renderParentBlock("pageTitle", $context, $blocks)));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Layout/default_layout.html.twig";
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
        return array (  619 => 129,  600 => 121,  536 => 164,  526 => 163,  516 => 162,  506 => 150,  496 => 149,  486 => 148,  476 => 147,  469 => 116,  461 => 111,  457 => 110,  453 => 109,  447 => 106,  442 => 104,  437 => 101,  430 => 97,  424 => 94,  420 => 93,  412 => 87,  408 => 86,  402 => 83,  399 => 82,  397 => 81,  392 => 79,  386 => 76,  379 => 72,  375 => 70,  372 => 69,  370 => 68,  367 => 67,  360 => 63,  354 => 60,  348 => 59,  340 => 53,  338 => 52,  330 => 47,  324 => 44,  319 => 42,  311 => 37,  306 => 35,  302 => 34,  299 => 33,  293 => 28,  286 => 27,  276 => 18,  268 => 16,  261 => 15,  253 => 12,  246 => 11,  241 => 19,  238 => 18,  236 => 15,  231 => 14,  228 => 11,  221 => 10,  214 => 165,  211 => 164,  208 => 163,  205 => 162,  200 => 159,  193 => 154,  188 => 152,  185 => 151,  182 => 150,  179 => 149,  176 => 148,  173 => 147,  164 => 141,  158 => 138,  155 => 137,  153 => 136,  144 => 135,  139 => 132,  129 => 127,  128 => 126,  127 => 125,  126 => 124,  125 => 123,  124 => 122,  119 => 127,  118 => 126,  117 => 125,  116 => 124,  115 => 123,  114 => 122,  111 => 121,  109 => 120,  106 => 118,  104 => 27,  101 => 25,  94 => 24,  88 => 23,  70 => 22,  66 => 20,  64 => 10,  59 => 8,  54 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Layout/default_layout.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Layout\\default_layout.html.twig");
    }
}
