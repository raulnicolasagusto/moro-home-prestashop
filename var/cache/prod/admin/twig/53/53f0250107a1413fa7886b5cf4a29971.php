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

/* @PrestaShop/Admin/TwigTemplateForm/multishop.html.twig */
class __TwigTemplate_7ac326fce98aebc51ad4ef959aa34062 extends Template
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

        // line 5
        $_trait_0 = $this->load("bootstrap_4_layout.html.twig", 5);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 5, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'shop_selector_widget' => [$this, 'block_shop_selector_widget'],
                'shop_option_checkbox_widget' => [$this, 'block_shop_option_checkbox_widget'],
                'shop_option_radio_widget' => [$this, 'block_shop_option_radio_widget'],
                'shop_selector_item_name' => [$this, 'block_shop_selector_item_name'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "
";
        // line 7
        yield from $this->unwrap()->yieldBlock('shop_selector_widget', $context, $blocks);
        // line 33
        yield "
";
        // line 34
        yield from $this->unwrap()->yieldBlock('shop_option_checkbox_widget', $context, $blocks);
        // line 47
        yield "
";
        // line 48
        yield from $this->unwrap()->yieldBlock('shop_option_radio_widget', $context, $blocks);
        // line 51
        yield "
";
        // line 52
        yield from $this->unwrap()->yieldBlock('shop_selector_item_name', $context, $blocks);
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_selector_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "  <div class=\"shop-selector-content shop-selector\" data-multiple=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["multiple"] ?? null), "html", null, true);
        yield "\">
    <ul class=\"shop-selector-group-list\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 10), "choices", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["groupName"] => $context["groupShops"]) {
            // line 11
            yield "        <li class=\"shop-selector-group-item shop-selector-item\">
          ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " ") . $context["groupName"]), "html", null, true);
            yield "
        </li>

        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["groupShops"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["shopChoice"]) {
                // line 16
                yield "          ";
                $context["shop"] = CoreExtension::getAttribute($this->env, $this->source, $context["shopChoice"], "data", [], "any", false, false, false, 16);
                // line 17
                yield "
          <li class=\"shop-selector-shop-item shop-selector-item";
                // line 18
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 18) == ($context["contextShopId"] ?? null))) {
                    yield " selected-shop current-shop disabled";
                }
                yield "\" data-shop-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 18), "html", null, true);
                yield "\">
            ";
                // line 19
                if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 20
                    yield "              ";
                    yield from                     $this->unwrap()->yieldBlock("shop_option_checkbox_widget", $context, $blocks);
                    yield "
            ";
                } else {
                    // line 22
                    yield "              ";
                    yield from                     $this->unwrap()->yieldBlock("shop_option_radio_widget", $context, $blocks);
                    yield "
            ";
                }
                // line 24
                yield "          </li>
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
            unset($context['_seq'], $context['_key'], $context['shopChoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['groupName'], $context['groupShops'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "    </ul>

    ";
        // line 29
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => "d-none shop-selector-input"]);
        // line 30
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("choice_widget", $context, $blocks);
        yield "
  </div>
";
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_option_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "  <div class=\"md-checkbox md-checkbox-inline\">
    <label class=\"shop-selector-item-label\">
      <input
        type=\"checkbox\" data-value-type=\"boolean\" class=\"form-check-input\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 38), "html", null, true);
        yield "\"
        ";
        // line 39
        if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice(($context["shopChoice"] ?? null), ($context["value"] ?? null))) {
            yield "checked";
        }
        // line 40
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 40) == ($context["contextShopId"] ?? null))) {
            yield "disabled=\"disabled\"";
        }
        // line 41
        yield "      />
      <i class=\"md-checkbox-control\"></i>
      ";
        // line 43
        yield from         $this->unwrap()->yieldBlock("shop_selector_item_name", $context, $blocks);
        yield "
    </label>
  </div>
";
        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_option_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 49
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("shop_selector_item_name", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_selector_item_name(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield "  <div class=\"shop-selector-item-name\">
    <span class=\"shop-selector-color-container\">
      <span class=\"shop-selector-color\"";
        // line 55
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 55))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " style=\"background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 55), "html", null, true);
            yield ";\"";
        }
        yield "></span>
    </span>
    ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "name", [], "any", false, false, false, 57), "html", null, true);
        yield "
    ";
        // line 58
        if ((($tmp =  !($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "      <i class=\"material-icons\">arrow_forward</i>
    ";
        } else {
            // line 61
            yield "      <span class=\"shop-selector-status\" data-added-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Added", [], "Admin.Global"), "html", null, true);
            yield "\" data-removed-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Removed", [], "Admin.Global"), "html", null, true);
            yield "\">
        ";
            // line 62
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 62) == ($context["contextShopId"] ?? null))) {
                // line 63
                yield "          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current store", [], "Admin.Global"), "html", null, true);
                yield "
        ";
            }
            // line 65
            yield "      </span>
    ";
        }
        // line 67
        yield "  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  290 => 67,  286 => 65,  280 => 63,  278 => 62,  271 => 61,  267 => 59,  265 => 58,  261 => 57,  252 => 55,  248 => 53,  241 => 52,  233 => 49,  226 => 48,  217 => 43,  213 => 41,  208 => 40,  204 => 39,  200 => 38,  195 => 35,  188 => 34,  179 => 30,  177 => 29,  173 => 27,  167 => 26,  152 => 24,  146 => 22,  140 => 20,  138 => 19,  130 => 18,  127 => 17,  124 => 16,  107 => 15,  101 => 12,  98 => 11,  94 => 10,  88 => 8,  81 => 7,  76 => 52,  73 => 51,  71 => 48,  68 => 47,  66 => 34,  63 => 33,  61 => 7,  58 => 6,  35 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\multishop.html.twig");
    }
}
