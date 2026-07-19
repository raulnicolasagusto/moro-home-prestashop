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

/* @PrestaShop/Admin/Layout/legacy_layout.html.twig */
class __TwigTemplate_45f22ed045fd6ef3731e3716a3b4016b extends Template
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
            'layout_header' => [$this, 'block_layout_header'],
            'content_header' => [$this, 'block_content_header'],
            'session_alert' => [$this, 'block_session_alert'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7 lt-ie6\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8 ie7\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9 ie8\"> <![endif]-->
<!--[if gt IE 8]> <html class=\"no-js ie9\"> <![endif]-->
<html lang=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 10), "html", null, true);
        yield "\">
<head>
  ";
        // line 12
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 15
        yield "</head>

<body class=\"lang-";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 17), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isRtlLanguage", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " lang-rtl";
        }
        yield " ps_back-office page-sidebar ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "controllerName", [], "any", false, false, false, 17))), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "menuCollapsed", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " page-sidebar-closed";
        }
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "multiShop", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "multiShop", [], "any", false, false, false, 17), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " multishop-enabled";
        }
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", false, false, false, 17), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " developer-mode";
        }
        yield " ps-bo-rebrand\"
  ";
        // line 18
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 18) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 18), "base_url", [], "any", true, true, false, 18))) {
            yield "data-base-url=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 18), "base_url", [], "any", false, false, false, 18), "html", null, true);
            yield "\"";
        }
        // line 19
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 19) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 19), "token", [], "any", true, true, false, 19))) {
            yield "data-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 19), "token", [], "any", false, false, false, 19), "html", null, true);
            yield "\"";
        }
        // line 20
        yield ">

";
        // line 23
        yield from $this->unwrap()->yieldBlock('layout_header', $context, $blocks);
        // line 100
        yield "
  <div id=\"main\">
    <div id=\"content\" class=\"bootstrap";
        // line 102
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "displayedWithTabs", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " with-tabs";
        }
        yield "\">
      ";
        // line 104
        yield "      ";
        if ((($tmp = ($context["showContentHeader"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyToolbar", ["layoutTitle" => ((            // line 106
array_key_exists("layoutTitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutTitle"] ?? null))) : ("")), "layoutSubTitle" => ((            // line 107
array_key_exists("layoutSubTitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutSubTitle"] ?? null))) : ("")), "helpLink" => ((            // line 108
array_key_exists("help_link", $context)) ? (Twig\Extension\CoreExtension::default(($context["help_link"] ?? null))) : ("")), "enableSidebar" => ((            // line 109
array_key_exists("enableSidebar", $context)) ? (Twig\Extension\CoreExtension::default(($context["enableSidebar"] ?? null), false)) : (false)), "layoutHeaderToolbarBtn" => ((            // line 110
array_key_exists("layoutHeaderToolbarBtn", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutHeaderToolbarBtn"] ?? null), [])) : ([])), "breadcrumbLinks" => ((            // line 111
array_key_exists("breadcrumbLinks", $context)) ? (Twig\Extension\CoreExtension::default(($context["breadcrumbLinks"] ?? null), [])) : ([]))]);
            // line 112
            yield "
      ";
        }
        // line 114
        yield "
      ";
        // line 115
        yield from $this->unwrap()->yieldBlock('content_header', $context, $blocks);
        // line 120
        yield "
      ";
        // line 121
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 124
        yield "    </div>
  </div>

  <div id=\"footer\" class=\"bootstrap\">
    <div class=\"col-sm-12\">
      ";
        // line 129
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeFooter", []);
        yield "
    </div>
  </div>

  ";
        // line 133
        if ((array_key_exists("modals", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["modals"] ?? null)))) {
            // line 134
            yield "    <div class=\"bootstrap\">
      ";
            // line 135
            yield ($context["modals"] ?? null);
            yield "
    </div>
  ";
        }
        // line 138
        yield "</body>
</html>
";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "    ";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyHeadTag", ["metaTitle" => ((array_key_exists("metaTitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["metaTitle"] ?? null))) : (""))]);
        yield "
  ";
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "  <header id=\"header\" class=\"bootstrap\">
    <nav id=\"header_infos\" role=\"navigation\">
      <i class=\"material-icons js-mobile-menu\">menu</i>

      ";
        // line 29
        yield "      <a id=\"header_logo\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "defaultTabLink", [], "any", false, false, false, 29), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PrestaShop logo", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\"></a>
      <span id=\"shop_version\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "version", [], "any", false, false, false, 30), "html", null, true);
        yield "</span>

      ";
        // line 32
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyQuickAccess");
        yield "
      ";
        // line 33
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacySearchForm");
        yield "

      ";
        // line 35
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", false, false, false, 35), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "        <div class=\"component hide-mobile-sm\">
          <a class=\"shop-state label-tooltip\"
             id=\"debug-mode\"
             data-toggle=\"tooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your shop is in debug mode.", [], "Admin.Navigation.Notification"), "html", null, true);
            yield "</strong></p><p class=&quot;text-left&quot;>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All the PHP errors and messages are displayed. When you no longer need it, [1]turn off[/1] this mode.", ["[1]" => "<strong>", "[/1]" => "</strong>"], "Admin.Navigation.Notification"), "html", null, true);
            yield "</p>\"
             href=\"";
            // line 43
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_performance");
            yield "\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Debug mode", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
          </a>
        </div>
      ";
        }
        // line 50
        yield "      ";
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isMaintenanceEnabled", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isMaintenanceEnabled", [], "any", false, false, false, 50), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "        ";
            $context["maintenanceTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 52
                yield "          <p class=\"text-left\">
            <strong>
              ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your store is in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
            </strong>
          </p>
          <p class=\"text-left\">
            ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your visitors and customers cannot access your store while in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
          </p>
          <p class=\"text-left\">
            ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To manage the maintenance settings, go to Shop Parameters > Maintenance tab.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
          </p>
          ";
                // line 63
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", false, false, false, 63), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 64
                    yield "            <p class=\"text-left\">
              ";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admins can access the store front office without storing their IP.", [], "Admin.Navigation.Notification"), "html", null, true);
                    yield "
            </p>
          ";
                }
                // line 68
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 69
            yield "        <div class=\"component hide-mobile-sm\">
          <a class=\"shop-state label-tooltip\"
             id=\"maintenance-mode\"
             data-toggle=\"tooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maintenanceTitle"] ?? null), "html");
            yield "\"
             href=\"";
            // line 76
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_maintenance");
            yield "\"
          >
            <i class=\"material-icons\">build</i>
            <span>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maintenance mode", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
          </a>
        </div>
      ";
        }
        // line 83
        yield "
      ";
        // line 84
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyShopList");
        yield "

      ";
        // line 86
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyNotificationsCenter");
        yield "
      ";
        // line 87
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyEmployeeDropdown");
        yield "

      ";
        // line 90
        yield "      <span id=\"ajax_running\" class=\"hidden-xs\">
        <i class=\"icon-refresh icon-spin icon-fw\"></i>
      </span>

      ";
        // line 94
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeTop");
        yield "
    </nav>
  </header>

  ";
        // line 98
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyNavBar");
        yield "
";
        yield from [];
    }

    // line 115
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 116
        yield "        ";
        yield from $this->unwrap()->yieldBlock('session_alert', $context, $blocks);
        // line 119
        yield "      ";
        yield from [];
    }

    // line 116
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_session_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 117
        yield "          ";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacySessionAlert");
        yield "
        ";
        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 122
        yield "        ";
        yield ($context["legacyContent"] ?? null);
        yield "
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Layout/legacy_layout.html.twig";
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
        return array (  390 => 122,  383 => 121,  375 => 117,  368 => 116,  363 => 119,  360 => 116,  353 => 115,  346 => 98,  339 => 94,  333 => 90,  328 => 87,  324 => 86,  319 => 84,  316 => 83,  309 => 79,  303 => 76,  299 => 75,  291 => 69,  287 => 68,  281 => 65,  278 => 64,  276 => 63,  271 => 61,  265 => 58,  258 => 54,  254 => 52,  251 => 51,  248 => 50,  241 => 46,  235 => 43,  229 => 42,  221 => 36,  219 => 35,  214 => 33,  210 => 32,  205 => 30,  198 => 29,  192 => 24,  185 => 23,  177 => 13,  170 => 12,  163 => 138,  157 => 135,  154 => 134,  152 => 133,  145 => 129,  138 => 124,  136 => 121,  133 => 120,  131 => 115,  128 => 114,  124 => 112,  122 => 111,  121 => 110,  120 => 109,  119 => 108,  118 => 107,  117 => 106,  115 => 105,  112 => 104,  106 => 102,  102 => 100,  100 => 23,  96 => 20,  89 => 19,  83 => 18,  65 => 17,  61 => 15,  59 => 12,  54 => 10,  47 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Layout/legacy_layout.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Layout\\legacy_layout.html.twig");
    }
}
