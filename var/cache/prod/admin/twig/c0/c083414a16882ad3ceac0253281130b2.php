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

/* @PrestaShop/Admin/Component/Layout/nav_bar.html.twig */
class __TwigTemplate_f49f3abf21566931013ff2805d4d2c69 extends Template
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
        yield "<nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"";
        // line 6
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminEmployees", ["action" => "toggleMenu"]);
        yield "\">
    <i class=\"material-icons rtl-flip\">first_page</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <div class=\"logo-container\">
      <div class=\"logo-container__header\">
        <a id=\"header_logo\" class=\"logo float-left\" href=\"";
        // line 13
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "defaultTab", [], "any", false, false, false, 13));
        yield "\"></a>
        <span id=\"shop_version\" class=\"header-version\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "psVersion", [], "any", false, false, false, 14), "html", null, true);
        yield "</span>
      </div>
      <div class=\"logo-container__close js-mobile-menu\">
        <i class=\"material-icons close-btn\">close</i>
      </div>
    </div>

    <ul class=\"main-menu";
        // line 21
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "menuCollapsed", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " sidebar-closed";
        }
        yield "\">
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "tabs", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["level1"]) {
            // line 23
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "active", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 24
                yield "
        ";
                // line 25
                $context["level1Href"] = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "href", [], "any", false, false, false, 25);
                // line 26
                yield "        ";
                if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 26)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, true, false, 26), 0, [], "array", false, true, false, 26), "href", [], "any", true, true, false, 26))) {
                    // line 27
                    yield "          ";
                    $context["level1Href"] = CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 27)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "href", [], "any", false, false, false, 27);
                    // line 28
                    yield "        ";
                }
                // line 29
                yield "
        ";
                // line 30
                $context["level1Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "name", [], "any", false, false, false, 30);
                // line 31
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "name", [], "any", false, false, false, 31) === "")) {
                    // line 32
                    yield "          ";
                    $context["level1Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "class_name", [], "any", false, false, false, 32);
                    // line 33
                    yield "        ";
                }
                // line 34
                yield "
        ";
                // line 35
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "icon", [], "any", false, false, false, 35))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 36
                    yield "
          <li class=\"link-levelone";
                    // line 37
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "current", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " link-levelone-active";
                    }
                    yield "\" data-submenu=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "id_tab", [], "any", false, false, false, 37), "html", null, true);
                    yield "\" id=\"tab-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "class_name", [], "any", false, false, false, 37), "html", null, true);
                    yield "\">
            <a href=\"";
                    // line 38
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["level1Href"] ?? null), "html", null, true);
                    yield "\" class=\"link\" >
              <i class=\"material-icons\">";
                    // line 39
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "icon", [], "any", false, false, false, 39), "html", null, true);
                    yield "</i> <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["level1Name"] ?? null), "html", null, true);
                    yield "</span>
            </a>
          </li>

        ";
                } else {
                    // line 44
                    yield "
        <li class=\"category-title";
                    // line 45
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "current", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " link-active";
                    }
                    yield "\" data-submenu=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "id_tab", [], "any", false, false, false, 45), "html", null, true);
                    yield "\" id=\"tab-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "class_name", [], "any", false, false, false, 45), "html", null, true);
                    yield "\">
          <span class=\"title\">";
                    // line 46
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["level1Name"] ?? null), "html", null, true);
                    yield "</span>
        </li>

        ";
                    // line 49
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 49));
                    foreach ($context['_seq'] as $context["_key"] => $context["level2"]) {
                        // line 50
                        yield "        ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "active", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 51
                            yield "
        ";
                            // line 52
                            $context["level2Href"] = CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "href", [], "any", false, false, false, 52);
                            // line 53
                            yield "
        ";
                            // line 54
                            $context["level2Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "name", [], "any", false, false, false, 54);
                            // line 55
                            yield "        ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "name", [], "any", false, false, false, 55) === "")) {
                                // line 56
                                yield "          ";
                                $context["level2Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "class_name", [], "any", false, false, false, 56);
                                // line 57
                                yield "        ";
                            }
                            // line 58
                            yield "        ";
                            $context["levelOneClass"] = "";
                            // line 59
                            yield "
        ";
                            // line 60
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "current", [], "any", false, false, false, 60) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "menuCollapsed", [], "any", false, false, false, 60))) {
                                // line 61
                                yield "          ";
                                $context["levelOneClass"] = " link-active open ul-open";
                                // line 62
                                yield "        ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "current", [], "any", false, false, false, 62) && CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "menuCollapsed", [], "any", false, false, false, 62))) {
                                // line 63
                                yield "          ";
                                $context["levelOneClass"] = " link-active";
                                // line 64
                                yield "        ";
                            }
                            // line 65
                            yield "
        <li class=\"link-levelone";
                            // line 66
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "sub_tabs", [], "any", false, false, false, 66)) > 0)) {
                                yield " has_submenu";
                            }
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["levelOneClass"] ?? null), "html", null, true);
                            yield "\" data-submenu=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "id_tab", [], "any", false, false, false, 66), "html", null, true);
                            yield "\" id=\"subtab-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "class_name", [], "any", false, false, false, 66), "html", null, true);
                            yield "\">
          <a href=\"";
                            // line 67
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["level2Href"] ?? null), "html", null, true);
                            yield "\" class=\"link\">
            <i class=\"material-icons mi-";
                            // line 68
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "icon", [], "any", false, false, false, 68), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "icon", [], "any", false, false, false, 68), "html", null, true);
                            yield "</i>
            <span>";
                            // line 69
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["level2Name"] ?? null), "html", null, true);
                            yield "</span>
            ";
                            // line 70
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 70)) > 0)) {
                                // line 71
                                yield "              <i class=\"material-icons sub-tabs-arrow\">
                ";
                                // line 72
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "current", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 73
                                    yield "                  keyboard_arrow_up
                ";
                                } else {
                                    // line 75
                                    yield "                  keyboard_arrow_down
                ";
                                }
                                // line 77
                                yield "              </i>
            ";
                            }
                            // line 79
                            yield "          </a>
          ";
                            // line 80
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "sub_tabs", [], "any", false, false, false, 80)) > 0)) {
                                // line 81
                                yield "            <ul id=\"collapse-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "id_tab", [], "any", false, false, false, 81), "html", null, true);
                                yield "\" class=\"submenu panel-collapse\">
              ";
                                // line 82
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "sub_tabs", [], "any", false, false, false, 82));
                                foreach ($context['_seq'] as $context["_key"] => $context["level3"]) {
                                    // line 83
                                    yield "              ";
                                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "active", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 84
                                        yield "
              ";
                                        // line 85
                                        $context["level3Href"] = CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "href", [], "any", false, false, false, 85);
                                        // line 86
                                        yield "
              ";
                                        // line 87
                                        $context["level3Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "name", [], "any", false, false, false, 87);
                                        // line 88
                                        yield "              ";
                                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "name", [], "any", false, false, false, 88) === "")) {
                                            // line 89
                                            yield "                ";
                                            $context["level3Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "class_name", [], "any", false, false, false, 89);
                                            // line 90
                                            yield "              ";
                                        }
                                        // line 91
                                        yield "
              <li class=\"link-leveltwo";
                                        // line 92
                                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "current", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            yield " link-active";
                                        }
                                        yield "\" data-submenu=\"";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "id_tab", [], "any", false, false, false, 92), "html", null, true);
                                        yield "\" id=\"subtab-";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "class_name", [], "any", false, false, false, 92), "html", null, true);
                                        yield "\">
                <a href=\"";
                                        // line 93
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["level3Href"] ?? null), "html", null, true);
                                        yield "\" class=\"link\"> ";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["level3Name"] ?? null), "html", null, true);
                                        yield "</a>
              </li>

              ";
                                    }
                                    // line 97
                                    yield "              ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['level3'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 98
                                yield "            </ul>
          ";
                            }
                            // line 100
                            yield "        </li>
        ";
                        }
                        // line 102
                        yield "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['level2'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    yield "
        ";
                }
                // line 105
                yield "
        ";
            }
            // line 107
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['level1'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "    </ul>
  </div>
  ";
        // line 110
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminNavBarBeforeEnd");
        yield "
</nav>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/nav_bar.html.twig";
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
        return array (  350 => 110,  346 => 108,  340 => 107,  336 => 105,  332 => 103,  326 => 102,  322 => 100,  318 => 98,  312 => 97,  303 => 93,  293 => 92,  290 => 91,  287 => 90,  284 => 89,  281 => 88,  279 => 87,  276 => 86,  274 => 85,  271 => 84,  268 => 83,  264 => 82,  259 => 81,  257 => 80,  254 => 79,  250 => 77,  246 => 75,  242 => 73,  240 => 72,  237 => 71,  235 => 70,  231 => 69,  225 => 68,  221 => 67,  210 => 66,  207 => 65,  204 => 64,  201 => 63,  198 => 62,  195 => 61,  193 => 60,  190 => 59,  187 => 58,  184 => 57,  181 => 56,  178 => 55,  176 => 54,  173 => 53,  171 => 52,  168 => 51,  165 => 50,  161 => 49,  155 => 46,  145 => 45,  142 => 44,  132 => 39,  128 => 38,  118 => 37,  115 => 36,  113 => 35,  110 => 34,  107 => 33,  104 => 32,  101 => 31,  99 => 30,  96 => 29,  93 => 28,  90 => 27,  87 => 26,  85 => 25,  82 => 24,  79 => 23,  75 => 22,  69 => 21,  59 => 14,  55 => 13,  45 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/nav_bar.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\Layout\\nav_bar.html.twig");
    }
}
