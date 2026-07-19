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

/* @PrestaShop/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_932df37b256e64ec6a02a081945ab8d6 extends Template
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
        $_trait_0 = $this->load("@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 5);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 5, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'checkbox_radio_row' => [$this, 'block_checkbox_radio_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'form_row_class' => [$this, 'block_form_row_class'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
                'number_widget' => [$this, 'block_number_widget'],
                'integer_widget' => [$this, 'block_integer_widget'],
                'form_unit' => [$this, 'block_form_unit'],
                'form_unit_prepend' => [$this, 'block_form_unit_prepend'],
                'amount_currency_widget' => [$this, 'block_amount_currency_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 10
        yield "
";
        // line 12
        yield "
";
        // line 13
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 23
        yield "
";
        // line 24
        yield from $this->unwrap()->yieldBlock('form_label_class', $context, $blocks);
        // line 27
        yield "
";
        // line 29
        yield "
";
        // line 30
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 42
        yield "
";
        // line 43
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 46
        yield "
";
        // line 47
        yield from $this->unwrap()->yieldBlock('radio_row', $context, $blocks);
        // line 50
        yield "
";
        // line 51
        yield from $this->unwrap()->yieldBlock('checkbox_radio_row', $context, $blocks);
        // line 62
        yield "
";
        // line 63
        yield from $this->unwrap()->yieldBlock('submit_row', $context, $blocks);
        // line 73
        yield "
";
        // line 74
        yield from $this->unwrap()->yieldBlock('form_group_class', $context, $blocks);
        // line 77
        yield "
";
        // line 78
        yield from $this->unwrap()->yieldBlock('form_row_class', $context, $blocks);
        // line 81
        yield "
";
        // line 82
        yield from $this->unwrap()->yieldBlock('ip_address_text_widget', $context, $blocks);
        // line 90
        yield "
";
        // line 91
        yield from $this->unwrap()->yieldBlock('switch_widget', $context, $blocks);
        // line 96
        yield "
";
        // line 97
        yield from $this->unwrap()->yieldBlock('text_with_length_counter_widget', $context, $blocks);
        // line 124
        yield from $this->unwrap()->yieldBlock('number_widget', $context, $blocks);
        // line 133
        yield from $this->unwrap()->yieldBlock('integer_widget', $context, $blocks);
        // line 142
        yield from $this->unwrap()->yieldBlock('form_unit', $context, $blocks);
        // line 149
        yield "
";
        // line 150
        yield from $this->unwrap()->yieldBlock('form_unit_prepend', $context, $blocks);
        // line 157
        yield "
";
        // line 158
        yield from $this->unwrap()->yieldBlock('amount_currency_widget', $context, $blocks);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 7), "")) : ("")) . " form-horizontal"))]);
        // line 8
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 15
            yield "        ";
            if ((($context["label"] ?? null) === false)) {
                // line 16
                yield "            <div class=\"";
                yield from                 $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
                yield "\"></div>
        ";
            } else {
                // line 18
                yield "            ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 18), "")) : ("")) . " ") .                 $this->unwrap()->renderBlock("form_label_class", $context, $blocks)))]);
                // line 19
                yield from $this->yieldParentBlock("form_label", $context, $blocks);
            }
            // line 21
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v0, "html", null, true));
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "form-control-label";
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 32
            yield "        <div class=\"";
            yield from             $this->unwrap()->yieldBlock("form_row_class", $context, $blocks);
            yield " ";
            if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
                yield " has-error";
            }
            yield "\">
            ";
            // line 33
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            yield "
            <div class=\"";
            // line 34
            yield from             $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
            yield "\">
                ";
            // line 35
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
                ";
            // line 36
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            yield "
                ";
            // line 37
            yield from             $this->unwrap()->yieldBlock("form_help", $context, $blocks);
            yield "
            </div>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v1, "html", null, true));
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_row", $context, $blocks);
        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_row", $context, $blocks);
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_radio_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        $_v2 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 53
            yield "        <div class=\"form-group";
            if ((($tmp =  !($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " has-error";
            }
            yield "\">
            <div class=\"";
            // line 54
            yield from             $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
            yield "\"></div>
            <div class=\"";
            // line 55
            yield from             $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
            yield "\">
                ";
            // line 56
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
                ";
            // line 57
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            yield "
            </div>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v2, "html", null, true));
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submit_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        $_v3 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 65
            yield "        <div class=\"form-group\">
            <div class=\"";
            // line 66
            yield from             $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
            yield "\"></div>
            <div class=\"";
            // line 67
            yield from             $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
            yield "\">
                ";
            // line 68
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
            </div>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v3, "html", null, true));
        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_group_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 75
        yield "col-sm";
        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 79
        yield "form-group row";
        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ip_address_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 83
        yield "<div class=\"input-group\">";
        // line 84
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 85
        yield "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentIp"] ?? null), "html", null, true);
        yield "\">
        <i class=\"material-icons\">add_circle</i> ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        yield "
    </button>
</div>
";
        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_switch_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 92
        yield "<div class=\"input-group\">";
        // line 93
        yield from $this->yieldParentBlock("switch_widget", $context, $blocks);
        // line 94
        yield "</div>
";
        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_with_length_counter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 98
        yield "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 99
        $context["current_length"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 99), "max_length", [], "any", false, false, false, 99) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 99), "value", [], "any", false, false, false, 99)));
        // line 100
        yield "
    ";
        // line 101
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 101), "position", [], "any", false, false, false, 101) == "before")) {
            // line 102
            yield "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_length"] ?? null), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 106
        yield "
    ";
        // line 107
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ($context["input_attr"] ?? null));
        // line 108
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-max-length" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 108), "max_length", [], "any", false, false, false, 108), "maxlength" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 108), "max_length", [], "any", false, false, false, 108), "class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 108)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 108), "")) : ("")) . " js-countable-input"))]);
        // line 110
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 110), "input", [], "any", false, false, false, 110) == "textarea")) {
            // line 111
            yield from             $this->unwrap()->yieldBlock("textarea_widget", $context, $blocks);
        } else {
            // line 113
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        // line 115
        yield "
    ";
        // line 116
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 116), "position", [], "any", false, false, false, 116) == "after")) {
            // line 117
            yield "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_length"] ?? null), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 121
        yield "  </div>
";
        yield from [];
    }

    // line 124
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_number_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 125
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "text")) : ("text"));
        // line 126
        yield "<div class=\"input-group\">";
        // line 127
        yield from         $this->unwrap()->yieldBlock("form_unit_prepend", $context, $blocks);
        // line 128
        yield "<div class=\"w-100\">";
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "</div>";
        // line 129
        yield from         $this->unwrap()->yieldBlock("form_unit", $context, $blocks);
        // line 130
        yield "</div>";
        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integer_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 134
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "number")) : ("number"));
        // line 135
        yield "<div class=\"input-group\">";
        // line 136
        yield from         $this->unwrap()->yieldBlock("form_unit_prepend", $context, $blocks);
        // line 137
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 138
        yield from         $this->unwrap()->yieldBlock("form_unit", $context, $blocks);
        // line 139
        yield "</div>";
        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_unit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 143
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 143), "unit", [], "any", true, true, false, 143) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 143), "prepend_unit", [], "any", false, false, false, 143))) {
            // line 144
            yield "    <div class=\"input-group-append\">
      <span class=\"input-group-text\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 145), "unit", [], "any", false, false, false, 145), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        yield from [];
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_unit_prepend(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 151
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 151), "unit", [], "any", true, true, false, 151) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 151), "prepend_unit", [], "any", false, false, false, 151))) {
            // line 152
            yield "    <div class=\"input-group-prepend\">
      <span class=\"input-group-text\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 153), "unit", [], "any", false, false, false, 153), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        yield from [];
    }

    // line 158
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_amount_currency_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 159
        yield "  <div class=\"input-group\">
    <input id=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "amount", [], "any", false, false, false, 160), "vars", [], "any", false, false, false, 160), "id", [], "any", false, false, false, 160), "html", null, true);
        yield "\" type=\"text\" class=\"form-control\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "amount", [], "any", false, false, false, 160), "vars", [], "any", false, false, false, 160), "full_name", [], "any", false, false, false, 160), "html", null, true);
        yield "\" required>
    <div class=\"input-group-append\">
      ";
        // line 162
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "amount", [], "any", false, true, false, 162), "vars", [], "any", false, true, false, 162), "unit", [], "any", true, true, false, 162)) {
            // line 163
            yield "        <span class=\"input-group-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "amount", [], "any", false, false, false, 163), "vars", [], "any", false, false, false, 163), "unit", [], "any", false, false, false, 163), "html", null, true);
            yield "</span>
        ";
            // line 164
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id_currency", [], "any", false, false, false, 164), 'widget');
            yield "
      ";
        } else {
            // line 166
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id_currency", [], "any", false, false, false, 166), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
      ";
        }
        // line 168
        yield "    </div>
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  615 => 168,  609 => 166,  604 => 164,  599 => 163,  597 => 162,  590 => 160,  587 => 159,  580 => 158,  571 => 153,  568 => 152,  565 => 151,  558 => 150,  549 => 145,  546 => 144,  543 => 143,  536 => 142,  531 => 139,  529 => 138,  527 => 137,  525 => 136,  523 => 135,  521 => 134,  514 => 133,  509 => 130,  507 => 129,  503 => 128,  501 => 127,  499 => 126,  497 => 125,  490 => 124,  484 => 121,  478 => 118,  475 => 117,  473 => 116,  470 => 115,  467 => 113,  464 => 111,  462 => 110,  460 => 108,  458 => 107,  455 => 106,  449 => 103,  446 => 102,  444 => 101,  441 => 100,  439 => 99,  436 => 98,  429 => 97,  423 => 94,  421 => 93,  419 => 92,  412 => 91,  403 => 86,  398 => 85,  396 => 84,  394 => 83,  387 => 82,  382 => 79,  375 => 78,  370 => 75,  363 => 74,  358 => 64,  350 => 68,  346 => 67,  342 => 66,  339 => 65,  337 => 64,  330 => 63,  325 => 52,  317 => 57,  313 => 56,  309 => 55,  305 => 54,  298 => 53,  296 => 52,  289 => 51,  284 => 48,  277 => 47,  272 => 44,  265 => 43,  260 => 31,  252 => 37,  248 => 36,  244 => 35,  240 => 34,  236 => 33,  227 => 32,  225 => 31,  218 => 30,  213 => 25,  206 => 24,  201 => 14,  197 => 21,  194 => 19,  191 => 18,  185 => 16,  182 => 15,  180 => 14,  173 => 13,  168 => 8,  166 => 7,  159 => 6,  154 => 158,  151 => 157,  149 => 150,  146 => 149,  144 => 142,  142 => 133,  140 => 124,  138 => 97,  135 => 96,  133 => 91,  130 => 90,  128 => 82,  125 => 81,  123 => 78,  120 => 77,  118 => 74,  115 => 73,  113 => 63,  110 => 62,  108 => 51,  105 => 50,  103 => 47,  100 => 46,  98 => 43,  95 => 42,  93 => 30,  90 => 29,  87 => 27,  85 => 24,  82 => 23,  80 => 13,  77 => 12,  74 => 10,  72 => 6,  35 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\bootstrap_4_horizontal_layout.html.twig");
    }
}
