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

/* @PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig */
class __TwigTemplate_f738de34d86ed36e7ae6d539557a31b9 extends Template
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
        yield "<div class=\"bootstrap\">
  <div class=\"page-head ";
        // line 6
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentTabLevel", [], "any", false, false, false, 6) >= 3)) {
            yield "with-tabs";
        }
        yield "\">
    <div class=\"wrapper clearfix\">
      ";
        // line 8
        yield from $this->unwrap()->yieldBlock('pageBreadcrumb', $context, $blocks);
        // line 29
        yield "
      ";
        // line 30
        yield from $this->unwrap()->yieldBlock('pageTitle', $context, $blocks);
        // line 43
        yield "
      ";
        // line 44
        yield from $this->unwrap()->yieldBlock('toolbarBox', $context, $blocks);
        // line 91
        yield "      ";
        yield from $this->unwrap()->yieldBlock('pageSubTitle', $context, $blocks);
        // line 98
        yield "  </div>

    ";
        // line 100
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentTabLevel", [], "any", false, false, false, 100) >= 3)) {
            // line 101
            yield "    <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav\">
        ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "navigationTabs", [], "any", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 104
                yield "          ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 104), "active", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 105
                    yield "          <li>
            <a
              href=\"";
                    // line 107
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "href", [], "any", false, false, false, 107), "html", null, true);
                    yield "\"
              id=\"subtab-";
                    // line 108
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 108), "class_name", [], "any", false, false, false, 108), "html", null, true);
                    yield "\"
              ";
                    // line 109
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 109), "current", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "class=\"current\"";
                    }
                    // line 110
                    yield "              data-submenu=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 110), "id_tab", [], "any", false, false, false, 110), "html", null, true);
                    yield "\">
              ";
                    // line 111
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 111), "html", null, true);
                    yield "
              <span class=\"notification-container\">
                <span class=\"notification-counter\"></span>
              </span>
            </a>
          </li>
          ";
                }
                // line 118
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield "      </ul>
    </div>
    ";
        }
        // line 122
        yield "  </div>
  ";
        // line 123
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardTop");
        yield "
</div>
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageBreadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "      <ul class=\"breadcrumb page-breadcrumb\">
        ";
        // line 11
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 11), "container", [], "any", true, true, false, 11) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 11), "container", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11) != ""))) {
            // line 12
            yield "        <li class=\"breadcrumb-container\">
          ";
            // line 13
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 13), "container", [], "any", false, false, false, 13), "icon", [], "any", false, false, false, 13))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 13), "container", [], "any", false, false, false, 13), "icon", [], "any", false, false, false, 13), "html", null, true);
                yield "</i>";
            }
            // line 14
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 14), "container", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14));
            yield "
        </li>
        ";
        }
        // line 17
        yield "
        ";
        // line 19
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 19), "tab", [], "any", true, true, false, 19) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 19), "tab", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19) != ""))) {
            // line 20
            yield "        <li class=\"breadcrumb-current\">
          ";
            // line 21
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 21), "tab", [], "any", false, false, false, 21), "icon", [], "any", false, false, false, 21))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 21), "tab", [], "any", false, false, false, 21), "icon", [], "any", false, false, false, 21), "html", null, true);
                yield "</i>";
            }
            // line 22
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 22), "tab", [], "any", false, false, false, 22), "href", [], "any", false, false, false, 22) != "")) {
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 22), "tab", [], "any", false, false, false, 22), "href", [], "any", false, false, false, 22));
                yield "\">";
            }
            // line 23
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 23), "tab", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23));
            yield "
          ";
            // line 24
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 24), "tab", [], "any", false, false, false, 24), "href", [], "any", false, false, false, 24) != "")) {
                yield "</a>";
            }
            // line 25
            yield "        </li>
        ";
        }
        // line 27
        yield "      </ul>
      ";
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "      <h1 class=\"page-title\">
        ";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 32), "back", [], "any", true, true, false, 32)) {
            // line 33
            yield "          ";
            $context["backButton"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 33), "back", [], "any", false, false, false, 33);
            // line 34
            yield "          <a id=\"page-header-desc-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "table", [], "any", false, false, false, 34), "html", null, true);
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "imgclass", [], "any", true, true, false, 34)) {
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "imgclass", [], "any", false, false, false, 34), "html", null, true);
            }
            yield "\"
             class=\"page-header-toolbar-back";
            // line 35
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "target", [], "any", true, true, false, 35) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "target", [], "any", false, false, false, 35)))) {
                yield " _blank";
            }
            yield "\"
             ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "href", [], "any", true, true, false, 36)) {
                yield "href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "href", [], "any", false, false, false, 36));
                yield "\"";
            }
            // line 37
            yield "             title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "desc", [], "any", false, false, false, 37), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "js", [], "any", true, true, false, 37) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "js", [], "any", false, false, false, 37)))) {
                yield " onclick=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "js", [], "any", false, false, false, 37), "html", null, true);
                yield "\"";
            }
            yield ">
          </a>
        ";
        }
        // line 40
        yield "        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "title", [], "any", false, false, false, 40));
        yield "
      </h1>
      ";
        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbarBox(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "      <div class=\"page-bar toolbarBox\">
        <div class=\"btn-toolbar\">
          <a href=\"#\" class=\"toolbar_btn dropdown-toolbar navbar-toggle\" data-toggle=\"collapse\"
             data-target=\"#toolbar-nav\"><i class=\"process-icon-dropdown\"></i>
            <div>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Menu", [], "Admin.Navigation.Menu"), "html", null, true);
        yield "</div>
          </a>
          <ul id=\"toolbar-nav\" class=\"nav nav-pills pull-right collapse navbar-collapse\">
            ";
        // line 52
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardToolbarTopMenu");
        yield "
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["k"] => $context["btn"]) {
            // line 54
            yield "              ";
            if ((($context["k"] != "back") && ($context["k"] != "modules-list"))) {
                // line 55
                yield "                <li>
                  <a
                    id=\"page-header-desc-";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "table", [], "any", false, false, false, 57), "html", null, true);
                yield "-";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 57)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 57));
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                }
                yield "\"
                    class=\"toolbar_btn";
                // line 58
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", true, true, false, 58) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", false, false, false, 58))) {
                    yield " _blank";
                }
                yield " pointer\"
                    ";
                // line 59
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", true, true, false, 59)) {
                    // line 60
                    yield "                      href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", false, false, false, 60));
                    yield "\"
                    ";
                }
                // line 62
                yield "                    title=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 62)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", false, false, false, 62), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 62));
                }
                yield "\"
                    ";
                // line 63
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", true, true, false, 63) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 63))) {
                    // line 64
                    yield "                      data-target=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 64), "html", null, true);
                    yield "\"
                      data-toggle=\"modal\"
                    ";
                }
                // line 67
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 67)) {
                    // line 68
                    yield "                      data-toggle=\"pstooltip\"
                      data-placement=\"bottom\"
                    ";
                }
                // line 71
                yield "                    data-role=\"page-header-desc-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "table", [], "any", false, false, false, 71), "html", null, true);
                yield "-link\"
                  >
                    <i class=\"";
                // line 73
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", true, true, false, 73) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 73)))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 73));
                } else {
                    yield "process-icon-";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 73)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 73));
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                    }
                }
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", true, true, false, 73)) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", false, false, false, 73));
                }
                yield "\"></i>
                    <div";
                // line 74
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "force_desc", [], "any", true, true, false, 74) && (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "force_desc", [], "any", false, false, false, 74) == true))) {
                    yield " class=\"locked\"";
                }
                yield ">
                      ";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 75));
                yield "
                    </div>
                  </a>
                </li>
              ";
            }
            // line 80
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['btn'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "
            <li>
              <a class=\"toolbar_btn btn-help\" href=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 83), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
        yield "\">
                <div>";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
        yield "</div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      ";
        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageSubTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 92
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "subTitle", [], "any", false, false, false, 92))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "          <h4 class=\"page-subtitle\">
            ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "subTitle", [], "any", false, false, false, 94), "html", null, true);
            yield "
          </h4>
        ";
        }
        // line 97
        yield "      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig";
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
        return array (  437 => 97,  431 => 94,  428 => 93,  425 => 92,  418 => 91,  406 => 84,  400 => 83,  396 => 81,  390 => 80,  382 => 75,  376 => 74,  359 => 73,  353 => 71,  348 => 68,  345 => 67,  338 => 64,  336 => 63,  327 => 62,  321 => 60,  319 => 59,  313 => 58,  303 => 57,  299 => 55,  296 => 54,  292 => 53,  288 => 52,  282 => 49,  276 => 45,  269 => 44,  260 => 40,  247 => 37,  241 => 36,  235 => 35,  226 => 34,  223 => 33,  221 => 32,  218 => 31,  211 => 30,  205 => 27,  201 => 25,  197 => 24,  192 => 23,  185 => 22,  179 => 21,  176 => 20,  173 => 19,  170 => 17,  163 => 14,  157 => 13,  154 => 12,  151 => 11,  148 => 9,  141 => 8,  133 => 123,  130 => 122,  125 => 119,  119 => 118,  109 => 111,  104 => 110,  100 => 109,  96 => 108,  92 => 107,  88 => 105,  85 => 104,  81 => 103,  77 => 101,  75 => 100,  71 => 98,  68 => 91,  66 => 44,  63 => 43,  61 => 30,  58 => 29,  56 => 8,  49 => 6,  46 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\LegacyLayout\\toolbar.html.twig");
    }
}
