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

/* @PrestaShop/Admin/Component/Layout/multistore_header.html.twig */
class __TwigTemplate_2043291fdbfa0e2392b32769c81203a0 extends Template
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
            'multistore_header' => [$this, 'block_multistore_header'],
            'multishop_header_right' => [$this, 'block_multishop_header_right'],
            'search_shops' => [$this, 'block_search_shops'],
            'all_shops_item' => [$this, 'block_all_shops_item'],
            'shop_group_item' => [$this, 'block_shop_group_item'],
            'shop_item' => [$this, 'block_shop_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield from $this->unwrap()->yieldBlock('multistore_header', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_multistore_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "isMultistoreUsed", [], "any", false, false, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 6)))) {
            // line 7
            yield "    <div
      id=\"header-multishop\"
      class=\"header-multishop";
            // line 9
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "isAllShopContext", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " header-multishop-allshops";
            } elseif (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextColor", [], "any", false, false, false, 9))) {
                yield " header-multishop-default";
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "isTitleDark", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " header-multishop-dark";
            } else {
                yield " header-multishop-bright";
            }
            yield "\"
      ";
            // line 10
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopId", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "data-shop-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopId", [], "any", false, false, false, 10), "html", null, true);
                yield "\"";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopGroupId", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "data-group-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopGroupId", [], "any", false, false, false, 10), "html", null, true);
                yield "\"";
            } else {
                yield "data-all-shops=\"1\"";
            }
            // line 11
            yield "      ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "colorConfigLink", [], "any", false, false, false, 11))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "data-header-color-notification=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customize your multistore header, [1]pick a color[/1] for this store context.", ["[1]" => (("<a href=\"" . CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "colorConfigLink", [], "any", false, false, false, 11)) . "\">"), "[/1]" => "</a>"], "Admin.Navigation.Header"), "html", null, true);
                yield "\"";
            }
            // line 12
            yield "      data-checkbox-notification=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To apply specific settings to a store or a group of stores, select the parameter to modify, make your changes and save.", [], "Admin.Navigation.Header") . " "), "html", null, true);
            yield "\"
    >
      <div class=\"header-multishop-top-bar\"";
            // line 14
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextColor", [], "any", false, false, false, 14))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " style=\"background-color: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextColor", [], "any", false, false, false, 14), "html", null, true);
                yield ";\"";
            }
            yield ">
        <div class=\"header-multishop-center js-header-multishop-open-modal\">
          ";
            // line 16
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopId", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 17
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Component/MultiShop/shop_icon.html.twig", ["isTitleDark" => CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "isTitleDark", [], "any", false, false, false, 17)]);
                yield "
          ";
            } else {
                // line 19
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Component/MultiShop/multi_shops_icon.html.twig", ["isTitleDark" => CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "isTitleDark", [], "any", false, false, false, 19)]);
                yield "
          ";
            }
            // line 21
            yield "
          <h2 class=\"header-multishop-title\">
            ";
            // line 23
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopGroupId", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " "), "html", null, true);
                yield " ";
            }
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextName", [], "any", false, false, false, 23), "html", null, true);
            yield "
          </h2>

          <button class=\"header-multishop-button\">
            <i class=\"material-icons\">expand_more</i>
          </button>
        </div>
      </div>

      ";
            // line 32
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopId", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 33
                yield "        <div class=\"header-multishop-right\">
          ";
                // line 34
                yield from $this->unwrap()->yieldBlock('multishop_header_right', $context, $blocks);
                // line 37
                yield "        </div>
      ";
            }
            // line 39
            yield "
      <div id=\"multishop-modal\" class=\"multishop-modal multishop-modal-hidden js-multishop-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"multishop-modal\" aria-hidden=\"true\">
        <div class=\"multishop-modal-dialog js-multishop-modal-dialog\" role=\"document\">
          <div class=\"multishop-modal-body\">
            ";
            // line 43
            yield from $this->unwrap()->yieldBlock('search_shops', $context, $blocks);
            // line 51
            yield "
            <ul class=\"multishop-modal-group-list js-multishop-scrollbar\">
              ";
            // line 53
            yield from $this->unwrap()->yieldBlock('all_shops_item', $context, $blocks);
            // line 67
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "groupList", [], "any", false, false, false, 67));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 68
                yield "                <li class=\"multishop-modal-group-item multishop-modal-item";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " first-group-item";
                }
                yield "\">
                  ";
                // line 69
                yield from $this->unwrap()->yieldBlock('shop_group_item', $context, $blocks);
                // line 76
                yield "                </li>

                ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "shops", [], "any", false, false, false, 78));
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
                foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
                    // line 79
                    yield "                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                    ";
                    // line 80
                    yield from $this->unwrap()->yieldBlock('shop_item', $context, $blocks);
                    // line 94
                    yield "                  </li>
                ";
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
                unset($context['_seq'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                yield "              ";
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
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "            </ul>
          </div>
        </div>
      </div>
    </div>

    <script src=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/multistore_header.bundle.js"), "html", null, true);
            yield "\"></script>
  ";
        }
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_multishop_header_right(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "            <a class=\"header-multishop-view-action\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "link", [], "any", false, false, false, 35), "getBaseLink", [CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopId", [], "any", false, false, false, 35)], "method", false, false, false, 35), "html", null, true);
        yield "\" target=\"_blank\" rel=\"nofollow\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
        yield " <i class=\"material-icons\">visibility</i></a>
          ";
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_shops(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "              ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "isLockedToAllShopContext", [], "any", false, false, false, 44) == false)) {
            // line 45
            yield "                <div class=\"multishop-modal-search-container\">
                  <i class=\"material-icons\">search</i>
                  <input type=\"text\" class=\"form-control multishop-modal-search js-multishop-modal-search\" placeholder=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search store name", [], "Admin.Navigation.Header"), "html", null, true);
            yield "\" data-no-results=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No results found for", [], "Admin.Global"), "html", null, true);
            yield "\" data-searching=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Searching for", [], "Admin.Global"), "html", null, true);
            yield "\">
                </div>
              ";
        }
        // line 50
        yield "            ";
        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_all_shops_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "allShopsAllowed", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "                <li class=\"multishop-modal-all multishop-modal-item\">
                  ";
            // line 56
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "isAllShopContext", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 57
                yield "                    <i class=\"material-icons\">check</i>
                  ";
            } else {
                // line 59
                yield "                    <span class=\"multishop-modal-color multishop-modal-color--default\"></span>
                  ";
            }
            // line 61
            yield "                  <a class=\"multishop-modal-all-name\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateUrl(), "html", null, true);
            yield "\">
                    <span>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All stores", [], "Admin.Global"), "html", null, true);
            yield "</span>
                  </a>
                </li>
                ";
        }
        // line 66
        yield "              ";
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_group_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        yield "                    <span class=\"multishop-modal-color-container";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopGroupId", [], "any", false, false, false, 70) && (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopGroupId", [], "any", false, false, false, 70) == CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "id", [], "any", false, false, false, 70)))) {
            yield " multishop-modal-color-check";
        }
        yield "\">
                      <i class=\"material-icons\">check</i>
                      <a class=\"multishop-modal-color\"";
        // line 72
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "color", [], "any", false, false, false, 72))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " style=\"background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "color", [], "any", false, false, false, 72), "html", null, true);
            yield ";\"";
        }
        yield " href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShopGroup", true, ["id_shop_group" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "id", [], "any", false, false, false, 72), "updateshop_group" => true]), "html", null, true);
        yield "\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit color", [], "Admin.Global"), "html", null, true);
        yield "\" data-original-title=\"\" title=\"\"></a>
                    </span>
                    <a class=\"multishop-modal-group-name\" href=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateGroupUrl(($context["group"] ?? null)), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "name", [], "any", false, false, false, 74)), "html", null, true);
        yield "</a>
                  ";
        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 81
        yield "                      <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container";
        // line 82
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopId", [], "any", false, false, false, 82) && (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "contextShopId", [], "any", false, false, false, 82) == CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 82)))) {
            yield " multishop-modal-color-check";
        }
        yield "\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\"";
        // line 84
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 84))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " style=\"background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 84), "html", null, true);
            yield ";\"";
        }
        yield " href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShop", true, ["shop_id" => CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 84), "updateshop" => true]), "html", null, true);
        yield "\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit color", [], "Admin.Global"), "html", null, true);
        yield "\" data-original-title=\"\" title=\"\"></a>
                      </span>
                        <a class=\"multishop-modal-shop-name";
        // line 86
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "hasMainUrl", [], "method", false, false, false, 86) == false)) {
            yield " multishop-modal-no-url\"";
        } else {
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateShopUrl(($context["shop"] ?? null)), "html", null, true);
            yield "\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "name", [], "any", false, false, false, 86), "html", null, true);
        yield "</a>
                      </div>
                      ";
        // line 88
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "hasMainUrl", [], "method", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 89
            yield "                        <a class=\"multishop-modal-shop-view\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "link", [], "any", false, false, false, 89), "getBaseLink", [CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 89)], "method", false, false, false, 89), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noreferrer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
            yield " <i class=\"material-icons\">visibility</i></a>
                      ";
        } else {
            // line 91
            yield "                        <a class=\"multishop-modal-shop-view\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShopUrl", true, ["shop_id" => CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 91), "addshop_url" => 1]), "html", null, true);
            yield "\" rel=\"noreferrer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure URL", [], "Admin.Actions"), "html", null, true);
            yield " <i class=\"material-icons\">visibility</i></a>
                      ";
        }
        // line 93
        yield "                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/multistore_header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  454 => 93,  446 => 91,  438 => 89,  436 => 88,  423 => 86,  410 => 84,  403 => 82,  400 => 81,  393 => 80,  384 => 74,  371 => 72,  363 => 70,  356 => 69,  351 => 66,  344 => 62,  339 => 61,  335 => 59,  331 => 57,  329 => 56,  326 => 55,  323 => 54,  316 => 53,  311 => 50,  301 => 47,  297 => 45,  294 => 44,  287 => 43,  277 => 35,  270 => 34,  262 => 103,  254 => 97,  240 => 96,  225 => 94,  223 => 80,  220 => 79,  203 => 78,  199 => 76,  197 => 69,  190 => 68,  172 => 67,  170 => 53,  166 => 51,  164 => 43,  158 => 39,  154 => 37,  152 => 34,  149 => 33,  147 => 32,  131 => 23,  127 => 21,  121 => 19,  115 => 17,  113 => 16,  104 => 14,  98 => 12,  91 => 11,  79 => 10,  66 => 9,  62 => 7,  59 => 6,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/multistore_header.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\Layout\\multistore_header.html.twig");
    }
}
