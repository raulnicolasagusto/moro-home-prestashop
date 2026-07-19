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

/* @PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig */
class __TwigTemplate_59c9d29dda20e49ac7028afb05871a8d extends Template
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
            'entity_search_input_widget' => [$this, 'block_entity_search_input_widget'],
            'entity_search_list_layout' => [$this, 'block_entity_search_list_layout'],
            'entity_search_table_layout' => [$this, 'block_entity_search_table_layout'],
            'entity_item_row' => [$this, 'block_entity_item_row'],
            'entity_item_list_row' => [$this, 'block_entity_item_list_row'],
            'entity_item_table_row' => [$this, 'block_entity_item_table_row'],
            'searched_customer_row' => [$this, 'block_searched_customer_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('entity_search_input_widget', $context, $blocks);
        // line 55
        yield "
";
        // line 56
        yield from $this->unwrap()->yieldBlock('entity_search_list_layout', $context, $blocks);
        // line 62
        yield "
";
        // line 63
        yield from $this->unwrap()->yieldBlock('entity_search_table_layout', $context, $blocks);
        // line 92
        yield "
";
        // line 93
        yield from $this->unwrap()->yieldBlock('entity_item_row', $context, $blocks);
        // line 100
        yield "
";
        // line 101
        yield from $this->unwrap()->yieldBlock('entity_item_list_row', $context, $blocks);
        // line 115
        yield from $this->unwrap()->yieldBlock('entity_item_table_row', $context, $blocks);
        // line 138
        yield from $this->unwrap()->yieldBlock('searched_customer_row', $context, $blocks);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_search_input_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "  ";
        // line 8
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-prototype-template" =>         // line 9
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-index" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 10
($context["prototype"] ?? null), "vars", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10), "html_attr"), "data-prototype-mapping" => json_encode(        // line 11
($context["prototype_mapping"] ?? null)), "data-identifier-field" =>         // line 12
($context["identifier_field"] ?? null), "data-filtered-identities" => json_encode(        // line 13
($context["filtered_identities"] ?? null)), "data-remove-modal" => json_encode(        // line 14
($context["remove_modal"] ?? null)), "data-remote-url" =>         // line 15
($context["remote_url"] ?? null), "data-data-limit" =>         // line 16
($context["limit"] ?? null), "data-min-length" =>         // line 17
($context["min_length"] ?? null), "data-allow-delete" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 18
($context["form"] ?? null), "vars", [], "any", false, false, false, 18), "allow_delete", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0)), "data-suggestion-field" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 19
($context["form"] ?? null), "vars", [], "any", false, false, false, 19), "suggestion_field", [], "any", false, false, false, 19)]);
        // line 21
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 21), "")) : ("")) . " entity-search-widget"))]);
        // line 24
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    ";
        // line 26
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 26), "allow_search", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "      <div class=\"search search-with-icon\">";
            // line 28
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["search_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,             // line 29
($context["search_attr"] ?? null), "class", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["search_attr"] ?? null), "class", [], "any", false, false, false, 29), "")) : ("")) . " entity-search-input form-control")), "autocomplete" => "off", "placeholder" =>             // line 31
($context["placeholder"] ?? null), "type" => "text"]);
            // line 34
            $context["id"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34) . "_search_input");
            // line 35
            yield "<input ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield " />
      </div>
    ";
        }
        // line 38
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        // line 40
        $context["id"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40) . "_list");
        // line 41
        if ((($context["list_layout"] ?? null) == "table")) {
            // line 42
            yield from             $this->unwrap()->yieldBlock("entity_search_table_layout", $context, $blocks);
        } else {
            // line 44
            yield from             $this->unwrap()->yieldBlock("entity_search_list_layout", $context, $blocks);
        }
        // line 46
        yield "    ";
        if ((($tmp =  !(null === ($context["empty_state"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "      <div class=\"alert alert-info empty-entity-list mt-2\" role=\"alert\">
        <p class=\"alert-text\">
          ";
            // line 49
            yield ($context["empty_state"] ?? null);
            yield "
        </p>
      </div>
    ";
        }
        // line 53
        yield "  </div>
";
        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_search_list_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["list_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", false, false, false, 57), "")) : ("")) . " entities-list entities-list-container"))]);
        // line 58
        yield "<ul ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 59
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 60
        yield "</ul>
";
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_search_table_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["list_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", false, false, false, 64), "")) : ("")) . " entities-list-container"))]);
        // line 65
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <div class=\"row\">
      <div class=\"col-sm\">
        <table class=\"table\">
          <thead class=\"thead-default\">
            <tr>
            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "children", [], "any", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 72
            yield "              ";
            $context["childType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 72), "block_prefixes", [], "any", false, false, false, 72), 1, [], "any", false, false, false, 72);
            // line 73
            yield "              ";
            if ((($context["childType"] ?? null) != "hidden")) {
                // line 74
                yield "                <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 74), "label", [], "any", false, false, false, 74), "html", null, true);
                yield "</th>
              ";
            }
            // line 76
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "
            ";
        // line 79
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 79), "allow_delete", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "              <th></th>
            ";
        }
        // line 82
        yield "            </tr>
          </thead>
          <tbody class=\"entities-list\">";
        // line 85
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 86
        yield "</tbody>
        </table>
      </div>
    </div>
  </div>
";
        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_item_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 94
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "list_layout", [], "any", false, false, false, 94) == "table")) {
            // line 95
            yield from             $this->unwrap()->yieldBlock("entity_item_table_row", $context, $blocks);
        } else {
            // line 97
            yield from             $this->unwrap()->yieldBlock("entity_item_list_row", $context, $blocks);
        }
        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_item_list_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 102
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 102), "")) : ("")) . " media entity-item"))]);
        // line 103
        yield "  <li ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <div class=\"media-left\">
      ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 105), 'widget');
        yield "
    </div>
    <div class=\"media-body media-middle\">
      ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 108), 'widget');
        yield "
      <i class=\"material-icons entity-item-delete\">clear</i>
    </div>
    ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
  </li>
";
        yield from [];
    }

    // line 115
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_item_table_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 116
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 116)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 116), "")) : ("")) . " entity-item"))]);
        // line 117
        yield "  <tr ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
  ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 118));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 119
            yield "    ";
            $context["childType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 119), "block_prefixes", [], "any", false, false, false, 119), 1, [], "any", false, false, false, 119);
            // line 120
            yield "    ";
            if ((($context["childType"] ?? null) == "hidden")) {
                // line 121
                yield "      ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
    ";
            } else {
                // line 123
                yield "    <td>
      ";
                // line 124
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
    </td>
    ";
            }
            // line 127
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "
  ";
        // line 130
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 130), "vars", [], "any", false, false, false, 130), "allow_delete", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "    <td>
      <i class=\"material-icons entity-item-delete\">clear</i>
    </td>
  ";
        }
        // line 135
        yield "  </tr>";
        yield from [];
    }

    // line 138
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_searched_customer_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 139
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 139)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 139), "")) : ("")) . " media entity-item"))]);
        // line 140
        yield "  <li ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <div class=\"media-body media-middle\">
      ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fullname_and_email", [], "any", false, false, false, 142), 'widget');
        yield "
      <i class=\"material-icons entity-item-delete\">clear</i>
    </div>
    ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id_customer", [], "any", false, false, false, 145), 'widget');
        yield "
  </li>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  387 => 145,  381 => 142,  375 => 140,  372 => 139,  365 => 138,  360 => 135,  354 => 131,  351 => 130,  348 => 128,  342 => 127,  336 => 124,  333 => 123,  327 => 121,  324 => 120,  321 => 119,  317 => 118,  312 => 117,  310 => 116,  303 => 115,  295 => 111,  289 => 108,  283 => 105,  277 => 103,  274 => 102,  267 => 101,  261 => 97,  258 => 95,  255 => 94,  248 => 93,  238 => 86,  236 => 85,  232 => 82,  228 => 80,  225 => 79,  222 => 77,  216 => 76,  210 => 74,  207 => 73,  204 => 72,  200 => 71,  190 => 65,  188 => 64,  181 => 63,  175 => 60,  173 => 59,  169 => 58,  167 => 57,  160 => 56,  154 => 53,  147 => 49,  143 => 47,  140 => 46,  137 => 44,  134 => 42,  132 => 41,  130 => 40,  128 => 38,  121 => 35,  119 => 34,  117 => 31,  116 => 29,  115 => 28,  113 => 27,  110 => 26,  105 => 24,  103 => 21,  101 => 19,  100 => 18,  99 => 17,  98 => 16,  97 => 15,  96 => 14,  95 => 13,  94 => 12,  93 => 11,  92 => 10,  91 => 9,  90 => 8,  88 => 7,  81 => 6,  76 => 138,  74 => 115,  72 => 101,  69 => 100,  67 => 93,  64 => 92,  62 => 63,  59 => 62,  57 => 56,  54 => 55,  52 => 6,  49 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\entity_search_input.html.twig");
    }
}
