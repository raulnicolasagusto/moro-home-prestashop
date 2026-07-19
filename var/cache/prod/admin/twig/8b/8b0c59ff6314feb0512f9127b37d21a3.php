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

/* @PrestaShop/Admin/Component/Layout/toolbar.html.twig */
class __TwigTemplate_db9cda905b149481f5b9cb652c0c3ab2 extends Template
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
            'pageBreadcrumb' => [$this, 'block_pageBreadcrumb'],
            'pageTitle' => [$this, 'block_pageTitle'],
            'toolbarBox' => [$this, 'block_toolbarBox'],
            'pageSubTitle' => [$this, 'block_pageSubTitle'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<div class=\"header-toolbar d-print-none\">
  ";
        // line 6
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("MultistoreHeader");
        yield "
  <div class=\"container-fluid\">

    ";
        // line 9
        yield from $this->unwrap()->yieldBlock('pageBreadcrumb', $context, $blocks);
        // line 30
        yield "
    ";
        // line 31
        $context["persistent_help_btn"] = ((array_key_exists("help_link", $context) &&  !(($context["help_link"] ?? null) === false)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 31)));
        // line 32
        yield "    <div class=\"title-row ";
        if ((($tmp = ($context["persistent_help_btn"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "flex-nowrap flex-md-wrap";
        }
        yield "\">
      ";
        // line 33
        yield from $this->unwrap()->yieldBlock('pageTitle', $context, $blocks);
        // line 38
        yield "      ";
        yield from $this->unwrap()->yieldBlock('toolbarBox', $context, $blocks);
        // line 118
        yield "      ";
        yield from $this->unwrap()->yieldBlock('pageSubTitle', $context, $blocks);
        // line 125
        yield "    </div>
  </div>

  ";
        // line 128
        if ((array_key_exists("headerTabContent", $context) && ($context["headerTabContent"] ?? null))) {
            // line 129
            yield "    <div class=\"page-head-tabs\" id=\"head_tabs\">
      ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["headerTabContent"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tabContent"]) {
                // line 131
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tabContent"], "html", null, true);
                yield "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tabContent'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            yield "    </div>
  ";
        }
        // line 135
        yield "
  ";
        // line 136
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentTabLevel", [], "any", false, false, false, 136) >= 3)) {
            // line 137
            yield "    <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
        ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "navigationTabs", [], "any", false, false, false, 139));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 140
                yield "          ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 140), "active", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 141
                    yield "            <li class=\"nav-item\">
              <a href=\"";
                    // line 142
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "href", [], "any", false, false, false, 142), "html", null, true);
                    yield "\" id=\"subtab-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 142), "class_name", [], "any", false, false, false, 142), "html", null, true);
                    yield "\"
                 class=\"nav-link tab ";
                    // line 143
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 143), "current", [], "any", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "active current";
                    }
                    yield "\"
                 data-submenu=\"";
                    // line 144
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 144), "id_tab", [], "any", false, false, false, 144), "html", null, true);
                    yield "\">
                ";
                    // line 145
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 145), "html", null, true);
                    yield "
                <span class=\"notification-container\">
                <span class=\"notification-counter\"></span>
              </span>
              </a>
            </li>
          ";
                }
                // line 152
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            yield "      </ul>
    </div>
  ";
        }
        // line 156
        yield "
  ";
        // line 157
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", true, true, false, 157) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 157)))) {
            // line 158
            yield "    <div class=\"btn-floating\">
      <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\"
              aria-expanded=\"false\">
        <i class=\"material-icons\">add</i>
      </button>
      <div class=\"btn-floating-container collapse\">
        <div class=\"btn-floating-menu\">
          ";
            // line 165
            yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardToolbarTopMenu");
            yield "

          ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 167));
            foreach ($context['_seq'] as $context["k"] => $context["btn"]) {
                // line 168
                yield "            ";
                if ((($context["k"] != "back") && ($context["k"] != "modules-list"))) {
                    // line 169
                    yield "              <a
                class=\"btn btn-floating-item ";
                    // line 170
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "floating_class", [], "any", true, true, false, 170) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "floating_class", [], "any", false, false, false, 170))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "floating_class", [], "any", false, false, false, 170));
                    }
                    yield " ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", true, true, false, 170) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", false, false, false, 170))) {
                        yield " _blank";
                    }
                    yield " pointer\"";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", true, true, false, 170)) {
                        // line 171
                        yield "                id=\"page-header-desc-floating-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default(($context["table"] ?? null), "configuration")) : ("configuration")), "html", null, true);
                        yield "-";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 171)) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 171));
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                        }
                        yield "\"
              href=\"";
                        // line 172
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", false, false, false, 172));
                        yield "\"";
                    }
                    // line 173
                    yield "                title=\"";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 173)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", false, false, false, 173), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 173));
                    }
                    yield "\"";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", true, true, false, 173) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 173))) {
                        // line 174
                        yield "              onclick=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 174), "html", null, true);
                        yield "\"";
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", true, true, false, 174) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 174))) {
                        // line 175
                        yield "                data-target=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 175), "html", null, true);
                        yield "\"
                data-toggle=\"modal\"";
                    }
                    // line 176
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 176)) {
                        // line 177
                        yield "                data-toggle=\"pstooltip\"
                data-placement=\"bottom\"";
                    }
                    // line 179
                    yield "              >
                ";
                    // line 180
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 180));
                    yield "
                ";
                    // line 181
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", true, true, false, 181) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 181)))) {
                        yield "<i class=\"material-icons\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 181), "html", null, true);
                        yield "</i>";
                    }
                    // line 182
                    yield "              </a>
            ";
                }
                // line 184
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['btn'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            yield "
          ";
            // line 186
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 186))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 187
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "sidebarEnabled", [], "any", false, false, false, 187)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 188
                    yield "              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
                 title=\"";
                    // line 189
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    yield "\"
                 data-toggle=\"sidebar\"
                 data-target=\"#right-sidebar\"
                 data-url=\"";
                    // line 192
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 192));
                    yield "\"
              >
                ";
                    // line 194
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    yield "
              </a>
            ";
                } else {
                    // line 197
                    yield "              <a class=\"btn btn-floating-item btn-help\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 197));
                    yield "\"
                 title=\"";
                    // line 198
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    yield "\">
                ";
                    // line 199
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    yield "
              </a>
            ";
                }
                // line 202
                yield "          ";
            }
            // line 203
            yield "        </div>
      </div>
    </div>
  ";
        }
        // line 207
        yield "  ";
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardTop");
        yield "
</div>
";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageBreadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "      ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 10), "container", [], "any", true, true, false, 10) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 10), "tab", [], "any", true, true, false, 10))) {
            // line 11
            yield "        <nav aria-label=\"Breadcrumb\">
          <ol class=\"breadcrumb\">
            ";
            // line 13
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 13), "container", [], "any", true, true, false, 13) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 13), "container", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13) != ""))) {
                // line 14
                yield "              <li class=\"breadcrumb-item\">
                ";
                // line 15
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 15), "container", [], "any", false, false, false, 15), "icon", [], "any", false, false, false, 15))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<i class=\"material-icons\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 15), "container", [], "any", false, false, false, 15), "icon", [], "any", false, false, false, 15), "html", null, true);
                    yield "</i>";
                }
                // line 16
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 16), "container", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16));
                yield "
              </li>
            ";
            }
            // line 19
            yield "
            ";
            // line 20
            if (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 20), "container", [], "any", true, true, false, 20) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 20), "tab", [], "any", true, true, false, 20)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 20), "tab", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20) != "")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 20), "container", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 20), "tab", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20))) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 20), "tab", [], "any", false, false, false, 20), "href", [], "any", false, false, false, 20) != ""))) {
                // line 21
                yield "              <li class=\"breadcrumb-item active\">
                ";
                // line 22
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 22), "tab", [], "any", false, false, false, 22), "icon", [], "any", false, false, false, 22))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<i class=\"material-icons\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 22), "tab", [], "any", false, false, false, 22), "icon", [], "any", false, false, false, 22), "html", null, true);
                    yield "</i>";
                }
                // line 23
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 23), "tab", [], "any", false, false, false, 23), "href", [], "any", false, false, false, 23));
                yield "\" aria-current=\"page\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 23), "tab", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23));
                yield "</a>
              </li>
            ";
            }
            // line 26
            yield "          </ol>
        </nav>
      ";
        }
        // line 29
        yield "    ";
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "          <h1 class=\"title\">
            ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "title", [], "any", false, false, false, 35));
        yield "
          </h1>
      ";
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbarBox(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "        <div class=\"toolbar-icons";
        if ((($tmp = ($context["persistent_help_btn"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " toolbar-icons--persistent";
        }
        yield "\">
          <div class=\"wrapper\">
            ";
        // line 41
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardToolbarTopMenu");
        yield "
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["k"] => $context["btn"]) {
            // line 43
            yield "              ";
            if ((($context["k"] != "back") && ($context["k"] != "modules-list"))) {
                // line 44
                yield "                ";
                // line 45
                yield "                <a
                  id=\"page-header-desc-";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default(($context["table"] ?? null), "configuration")) : ("configuration")), "html", null, true);
                yield "-";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 46)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 46));
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                }
                yield "\"
                  class=\"btn ";
                // line 47
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", true, true, false, 47) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", false, false, false, 47))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", false, false, false, 47));
                } else {
                    yield "btn-primary";
                }
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", true, true, false, 47) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", false, false, false, 47))) {
                    yield " _blank";
                }
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "disabled", [], "any", true, true, false, 47) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "disabled", [], "any", false, false, false, 47))) {
                    yield " disabled auto-pointer-events";
                }
                yield " pointer\"
                  ";
                // line 48
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", true, true, false, 48)) {
                    // line 49
                    yield "                    href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", false, false, false, 49));
                    yield "\"
                  ";
                }
                // line 51
                yield "                  title=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 51)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", false, false, false, 51), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 51));
                }
                yield "\"
                  ";
                // line 52
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", true, true, false, 52) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 52))) {
                    yield "onclick=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 52), "html", null, true);
                    yield "\" ";
                }
                // line 53
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", true, true, false, 53) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 53))) {
                    // line 54
                    yield "                    data-target=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 54), "html", null, true);
                    yield "\"
                    data-toggle=\"modal\"
                  ";
                }
                // line 57
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 57)) {
                    // line 58
                    yield "                    data-toggle=\"pstooltip\"
                    data-placement=\"bottom\"
                  ";
                }
                // line 61
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "data_attributes", [], "any", true, true, false, 61) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "data_attributes", [], "any", false, false, false, 61))) {
                    // line 62
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "data_attributes", [], "any", false, false, false, 62));
                    foreach ($context['_seq'] as $context["attribute_name"] => $context["attribute_value"]) {
                        // line 63
                        yield "                      data-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute_name"], "html", null, true);
                        yield "=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute_value"], "html", null, true);
                        yield "\"
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['attribute_name'], $context['attribute_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    yield "                  ";
                }
                // line 66
                yield "                >
                  ";
                // line 67
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", true, true, false, 67) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 67)))) {
                    yield "<i class=\"material-icons\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 67), "html", null, true);
                    yield "</i>";
                }
                // line 68
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 68));
                yield "
                </a>
              ";
            }
            // line 71
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['btn'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 72), "modules-list", [], "array", true, true, false, 72)) {
            // line 73
            yield "              ";
            // line 74
            yield "              <a
                class=\"btn btn-outline-secondary ";
            // line 75
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 75), "modules-list", [], "array", false, true, false, 75), "target", [], "any", true, true, false, 75) && CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 75)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["modules-list"] ?? null) : null), "target", [], "any", false, false, false, 75))) {
                yield " _blank";
            }
            yield "\"
                id=\"page-header-desc-";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default(($context["table"] ?? null), "configuration")) : ("configuration")), "html", null, true);
            yield "-";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 76), "modules-list", [], "array", false, true, false, 76), "imgclass", [], "any", true, true, false, 76)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 76)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["modules-list"] ?? null) : null), "imgclass", [], "any", false, false, false, 76), "html", null, true);
            } else {
                yield "modules-list";
            }
            yield "\"
                ";
            // line 77
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 77), "modules-list", [], "array", false, true, false, 77), "href", [], "any", true, true, false, 77)) {
                yield "href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 77)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["modules-list"] ?? null) : null), "href", [], "any", false, false, false, 77), "html", null, true);
                yield "\"";
            }
            // line 78
            yield "                title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 78)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["modules-list"] ?? null) : null), "desc", [], "any", false, false, false, 78), "html", null, true);
            yield "\"
                ";
            // line 79
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 79), "modules-list", [], "array", false, true, false, 79), "js", [], "any", true, true, false, 79) && CoreExtension::getAttribute($this->env, $this->source, (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 79)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["modules-list"] ?? null) : null), "js", [], "any", false, false, false, 79))) {
                yield "onclick=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 79)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["modules-list"] ?? null) : null), "js", [], "any", false, false, false, 79), "html", null, true);
                yield "\"";
            }
            // line 80
            yield "              >
                ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 81)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["modules-list"] ?? null) : null), "desc", [], "any", false, false, false, 81), "html", null, true);
            yield "
              </a>
            ";
        }
        // line 84
        yield "
            ";
        // line 85
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 85))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "              ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "sidebarEnabled", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 87
                yield "                <a class=\"toolbar-button btn-sidebar d-inline-block d-md-none\" href=\"#\"
                   title=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 91));
                yield "\"
                   id=\"product_form_open_help_mobile\"
                >
                  <i class=\"material-icons\">help_outline</i>
                </a>
                <a class=\"btn btn-outline-secondary btn-help btn-sidebar d-none d-md-inline-block\" href=\"#\"
                   title=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 100));
                yield "\"
                   id=\"product_form_open_help\"
                >
                  ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "
                </a>
              ";
            } else {
                // line 106
                yield "                <a class=\"toolbar-button d-inline-block d-md-none\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 106));
                yield "\"
                   title=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "\">
                  <i class=\"material-icons\">help_outline</i>
                </a>
                <a class=\"btn btn-outline-secondary btn-help d-none d-md-inline-block\" href=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 110));
                yield "\"
                   title=\"";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "
                </a>
              ";
            }
            // line 114
            yield "            ";
        }
        // line 115
        yield "          </div>
        </div>
      ";
        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageSubTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 119
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "subTitle", [], "any", false, false, false, 119))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 120
            yield "          <h4 class=\"page-subtitle\">
            ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "subTitle", [], "any", false, false, false, 121), "html", null, true);
            yield "
          </h4>
        ";
        }
        // line 124
        yield "      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/toolbar.html.twig";
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
        return array (  694 => 124,  688 => 121,  685 => 120,  682 => 119,  675 => 118,  668 => 115,  665 => 114,  657 => 111,  653 => 110,  647 => 107,  642 => 106,  636 => 103,  630 => 100,  624 => 97,  615 => 91,  609 => 88,  606 => 87,  603 => 86,  601 => 85,  598 => 84,  592 => 81,  589 => 80,  583 => 79,  578 => 78,  572 => 77,  562 => 76,  556 => 75,  553 => 74,  551 => 73,  548 => 72,  542 => 71,  535 => 68,  529 => 67,  526 => 66,  523 => 65,  512 => 63,  507 => 62,  504 => 61,  499 => 58,  496 => 57,  489 => 54,  486 => 53,  480 => 52,  471 => 51,  465 => 49,  463 => 48,  449 => 47,  439 => 46,  436 => 45,  434 => 44,  431 => 43,  427 => 42,  423 => 41,  415 => 39,  408 => 38,  400 => 35,  397 => 34,  390 => 33,  385 => 29,  380 => 26,  371 => 23,  365 => 22,  362 => 21,  360 => 20,  357 => 19,  350 => 16,  344 => 15,  341 => 14,  339 => 13,  335 => 11,  332 => 10,  325 => 9,  316 => 207,  310 => 203,  307 => 202,  301 => 199,  297 => 198,  292 => 197,  286 => 194,  281 => 192,  275 => 189,  272 => 188,  269 => 187,  267 => 186,  264 => 185,  258 => 184,  254 => 182,  248 => 181,  244 => 180,  241 => 179,  237 => 177,  235 => 176,  229 => 175,  223 => 174,  214 => 173,  210 => 172,  199 => 171,  189 => 170,  186 => 169,  183 => 168,  179 => 167,  174 => 165,  165 => 158,  163 => 157,  160 => 156,  155 => 153,  149 => 152,  139 => 145,  135 => 144,  129 => 143,  123 => 142,  120 => 141,  117 => 140,  113 => 139,  109 => 137,  107 => 136,  104 => 135,  100 => 133,  91 => 131,  87 => 130,  84 => 129,  82 => 128,  77 => 125,  74 => 118,  71 => 38,  69 => 33,  62 => 32,  60 => 31,  57 => 30,  55 => 9,  49 => 6,  46 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/toolbar.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\Layout\\toolbar.html.twig");
    }
}
