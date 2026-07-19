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

/* @PrestaShop/Admin/TwigTemplateForm/material.html.twig */
class __TwigTemplate_7b083a673fbf152ec398197b3a450709 extends Template
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
            'material_choice_tree_widget' => [$this, 'block_material_choice_tree_widget'],
            'material_choice_tree_item_widget' => [$this, 'block_material_choice_tree_item_widget'],
            'material_choice_tree_item_checkbox_widget' => [$this, 'block_material_choice_tree_item_checkbox_widget'],
            'material_choice_tree_item_radio_widget' => [$this, 'block_material_choice_tree_item_radio_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('material_choice_tree_widget', $context, $blocks);
        // line 30
        yield "
";
        // line 31
        yield from $this->unwrap()->yieldBlock('material_choice_tree_item_widget', $context, $blocks);
        // line 51
        yield "
";
        // line 52
        yield from $this->unwrap()->yieldBlock('material_choice_tree_item_checkbox_widget', $context, $blocks);
        // line 70
        yield "
";
        // line 71
        yield from $this->unwrap()->yieldBlock('material_choice_tree_item_radio_widget', $context, $blocks);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_tree_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "  <div class=\"material-choice-tree-container js-choice-tree-container";
        if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " required";
        }
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "\">
    <div class=\"choice-tree-actions\">
      <span class=\"form-control-label js-toggle-choice-tree-action\"
            data-expanded-text=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        yield "\"
            data-expanded-icon=\"expand_more\"
            data-collapsed-text=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        yield "\"
            data-collapsed-icon=\"expand_less\"
            data-action=\"expand\"
      >
        <i class=\"material-icons\">expand_more</i>
        <span class=\"js-toggle-text\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        yield "</span>
      </span>
    </div>

    <ul class=\"choice-tree\">
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["choices_tree"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 23
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("material_choice_tree_item_widget", $context, $blocks);
            yield "
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
        unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "    </ul>
  </div>";
        // line 28
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_tree_item_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "  ";
        $context["has_children"] = CoreExtension::getAttribute($this->env, $this->source, ($context["choice"] ?? null), ($context["choice_children"] ?? null), [], "array", true, true, false, 32);
        // line 33
        yield "
  <li class=\"";
        // line 34
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["choice"] ?? null), "has_selected_children", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "expanded";
        } elseif ((($tmp = ($context["has_children"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "collapsed";
        }
        yield "\">
    ";
        // line 35
        if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "      ";
            yield from             $this->unwrap()->yieldBlock("material_choice_tree_item_checkbox_widget", $context, $blocks);
            yield "
    ";
        } else {
            // line 38
            yield "      ";
            yield from             $this->unwrap()->yieldBlock("material_choice_tree_item_radio_widget", $context, $blocks);
            yield "
    ";
        }
        // line 40
        yield "
    ";
        // line 41
        if ((($tmp = ($context["has_children"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "      <ul>
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v0 = ($context["choice"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = ($context["choice_children"] ?? null)) instanceof \Stringable ? (string) $_v1 : $_v1)] ?? null) : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 44
                yield "          ";
                $context["choice"] = $context["item"];
                // line 45
                yield "          ";
                yield from                 $this->unwrap()->yieldBlock("material_choice_tree_item_widget", $context, $blocks);
                yield "
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "      </ul>
    ";
        }
        // line 49
        yield "  </li>
";
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_tree_item_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield "  <div class=\"checkbox js-input-wrapper\">
    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        <input type=\"checkbox\"
         ";
        // line 57
        if ((($tmp =  !(null === (($_v2 = ($context["choice"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = ($context["choice_value"] ?? null)) instanceof \Stringable ? (string) $_v3 : $_v3)] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "           name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 58), "full_name", [], "any", false, false, false, 58), "html", null, true);
            yield "[]\"
           value=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = ($context["choice"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[(($_v5 = ($context["choice_value"] ?? null)) instanceof \Stringable ? (string) $_v5 : $_v5)] ?? null) : null), "html", null, true);
            yield "\"
           ";
            // line 60
            if (CoreExtension::inFilter((($_v6 = ($context["choice"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[(($_v7 = ($context["choice_value"] ?? null)) instanceof \Stringable ? (string) $_v7 : $_v7)] ?? null) : null), ($context["selected_values"] ?? null))) {
                yield "checked";
            }
            // line 61
            yield "         ";
        }
        // line 62
        yield "         ";
        if ((($context["disabled"] ?? null) || CoreExtension::inFilter((($_v8 = ($context["choice"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[(($_v9 = ($context["choice_value"] ?? null)) instanceof \Stringable ? (string) $_v9 : $_v9)] ?? null) : null), ($context["disabled_values"] ?? null)))) {
            yield "disabled";
        }
        // line 63
        yield "        >
        <i class=\"md-checkbox-control\"></i>
        ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = ($context["choice"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[(($_v11 = ($context["choice_label"] ?? null)) instanceof \Stringable ? (string) $_v11 : $_v11)] ?? null) : null), "html", null, true);
        yield "
      </label>
    </div>
  </div>
";
        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_tree_item_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 72
        yield "  <div class=\"radio js-input-wrapper form-check form-check-radio\">
    <label class=\"form-check-label\">
      <input type=\"radio\"
       name=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 75), "full_name", [], "any", false, false, false, 75), "html", null, true);
        yield "\"
       value=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v12 = ($context["choice"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[(($_v13 = ($context["choice_value"] ?? null)) instanceof \Stringable ? (string) $_v13 : $_v13)] ?? null) : null), "html", null, true);
        yield "\"
       ";
        // line 77
        if (CoreExtension::inFilter((($_v14 = ($context["choice"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[(($_v15 = ($context["choice_value"] ?? null)) instanceof \Stringable ? (string) $_v15 : $_v15)] ?? null) : null), ($context["selected_values"] ?? null))) {
            yield "checked";
        }
        // line 78
        yield "       ";
        if ((($context["disabled"] ?? null) || CoreExtension::inFilter((($_v16 = ($context["choice"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[(($_v17 = ($context["choice_value"] ?? null)) instanceof \Stringable ? (string) $_v17 : $_v17)] ?? null) : null), ($context["disabled_values"] ?? null)))) {
            yield "disabled";
        }
        // line 79
        yield "       ";
        if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "required";
        }
        // line 80
        yield "      >
      <i class=\"form-check-round\"></i>
      ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v18 = ($context["choice"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[(($_v19 = ($context["choice_label"] ?? null)) instanceof \Stringable ? (string) $_v19 : $_v19)] ?? null) : null), "html", null, true);
        yield "
    </label>
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/material.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  328 => 82,  324 => 80,  319 => 79,  314 => 78,  310 => 77,  306 => 76,  302 => 75,  297 => 72,  290 => 71,  280 => 65,  276 => 63,  271 => 62,  268 => 61,  264 => 60,  260 => 59,  255 => 58,  253 => 57,  247 => 53,  240 => 52,  234 => 49,  230 => 47,  213 => 45,  210 => 44,  193 => 43,  190 => 42,  188 => 41,  185 => 40,  179 => 38,  173 => 36,  171 => 35,  163 => 34,  160 => 33,  157 => 32,  150 => 31,  145 => 28,  142 => 25,  125 => 23,  108 => 22,  100 => 17,  92 => 12,  87 => 10,  76 => 7,  69 => 6,  64 => 71,  61 => 70,  59 => 52,  56 => 51,  54 => 31,  51 => 30,  49 => 6,  46 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\material.html.twig");
    }
}
