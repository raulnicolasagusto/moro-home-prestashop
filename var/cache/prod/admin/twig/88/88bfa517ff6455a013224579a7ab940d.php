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

/* @PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig */
class __TwigTemplate_34a86fc4c0aa535521e0b3fcf03f4d0c extends Template
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
        $_trait_0 = $this->load("@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig", 5);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig".'" cannot be used as a trait.', 5, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        // line 6
        $_trait_1 = $this->load("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", 6);
        if (!$_trait_1->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 6, $this->source);
        }
        $_trait_1_blocks = $_trait_1->unwrap()->getBlocks();

        // line 7
        $_trait_2 = $this->load("@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", 7);
        if (!$_trait_2->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig".'" cannot be used as a trait.', 7, $this->source);
        }
        $_trait_2_blocks = $_trait_2->unwrap()->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'color_picker_widget' => [$this, 'block_color_picker_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'form_help' => [$this, 'block_form_help'],
                'form_hint' => [$this, 'block_form_hint'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "
";
        // line 10
        yield "
";
        // line 11
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 17
        yield "
";
        // line 18
        yield from $this->unwrap()->yieldBlock('textarea_widget', $context, $blocks);
        // line 22
        yield "
";
        // line 23
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 27
        yield "
";
        // line 28
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 44
        yield "
";
        // line 45
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 53
        yield "
";
        // line 54
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 67
        yield "
";
        // line 68
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 86
        yield "
";
        // line 87
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 101
        yield "
";
        // line 102
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 107
        yield "
";
        // line 108
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 129
        yield "
";
        // line 130
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 140
        yield "
";
        // line 141
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 151
        yield "
";
        // line 152
        yield from $this->unwrap()->yieldBlock('choice_tree_widget', $context, $blocks);
        // line 162
        yield "
";
        // line 163
        yield from $this->unwrap()->yieldBlock('choice_tree_item_widget', $context, $blocks);
        // line 201
        yield "
";
        // line 202
        yield from $this->unwrap()->yieldBlock('translatefields_widget', $context, $blocks);
        // line 228
        yield "
";
        // line 229
        yield from $this->unwrap()->yieldBlock('translate_fields_widget', $context, $blocks);
        // line 235
        yield "
";
        // line 236
        yield from $this->unwrap()->yieldBlock('translate_text_widget', $context, $blocks);
        // line 273
        yield "
";
        // line 274
        yield from $this->unwrap()->yieldBlock('translate_textarea_widget', $context, $blocks);
        // line 315
        yield "
";
        // line 316
        yield from $this->unwrap()->yieldBlock('date_picker_widget', $context, $blocks);
        // line 330
        yield "
";
        // line 331
        yield from $this->unwrap()->yieldBlock('date_range_widget', $context, $blocks);
        // line 339
        yield "
";
        // line 340
        yield from $this->unwrap()->yieldBlock('color_picker_widget', $context, $blocks);
        // line 349
        yield "
";
        // line 350
        yield from $this->unwrap()->yieldBlock('search_and_reset_widget', $context, $blocks);
        // line 375
        yield "
";
        // line 376
        yield from $this->unwrap()->yieldBlock('switch_widget', $context, $blocks);
        // line 396
        yield "
";
        // line 397
        yield from $this->unwrap()->yieldBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 426
        yield "
";
        // line 428
        yield "
";
        // line 429
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 432
        yield "
";
        // line 433
        yield from $this->unwrap()->yieldBlock('choice_label', $context, $blocks);
        // line 438
        yield "
";
        // line 439
        yield from $this->unwrap()->yieldBlock('checkbox_label', $context, $blocks);
        // line 442
        yield "
";
        // line 443
        yield from $this->unwrap()->yieldBlock('radio_label', $context, $blocks);
        // line 446
        yield "
";
        // line 447
        yield from $this->unwrap()->yieldBlock('checkbox_radio_label', $context, $blocks);
        // line 476
        yield "
";
        // line 478
        yield "
";
        // line 479
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 486
        yield "
";
        // line 487
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 493
        yield "
";
        // line 494
        yield from $this->unwrap()->yieldBlock('choice_row', $context, $blocks);
        // line 498
        yield "
";
        // line 499
        yield from $this->unwrap()->yieldBlock('date_row', $context, $blocks);
        // line 503
        yield "
";
        // line 504
        yield from $this->unwrap()->yieldBlock('time_row', $context, $blocks);
        // line 508
        yield "
";
        // line 509
        yield from $this->unwrap()->yieldBlock('datetime_row', $context, $blocks);
        // line 513
        yield "
";
        // line 514
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 520
        yield "
";
        // line 521
        yield from $this->unwrap()->yieldBlock('radio_row', $context, $blocks);
        // line 527
        yield "
";
        // line 529
        yield "
";
        // line 530
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 551
        yield "
";
        // line 553
        yield "
";
        // line 554
        yield from $this->unwrap()->yieldBlock('material_choice_table_widget', $context, $blocks);
        // line 590
        yield "
";
        // line 591
        yield from $this->unwrap()->yieldBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 643
        yield "
";
        // line 644
        yield from $this->unwrap()->yieldBlock('translatable_widget', $context, $blocks);
        // line 680
        yield "
";
        // line 681
        yield from $this->unwrap()->yieldBlock('birthday_widget', $context, $blocks);
        // line 705
        yield "
";
        // line 706
        yield from $this->unwrap()->yieldBlock('file_widget', $context, $blocks);
        // line 733
        yield "
";
        // line 734
        yield from $this->unwrap()->yieldBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 750
        yield "
";
        // line 751
        yield from $this->unwrap()->yieldBlock('generatable_text_widget', $context, $blocks);
        // line 765
        yield "
";
        // line 766
        yield from $this->unwrap()->yieldBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 791
        yield "
";
        // line 792
        yield from $this->unwrap()->yieldBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 796
        yield "
";
        // line 797
        yield from $this->unwrap()->yieldBlock('number_min_max_filter_widget', $context, $blocks);
        // line 801
        yield "
";
        // line 802
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        // line 807
        yield "
";
        // line 808
        yield from $this->unwrap()->yieldBlock('form_hint', $context, $blocks);
        // line 815
        yield "
";
        // line 816
        yield from $this->unwrap()->yieldBlock('custom_content_widget', $context, $blocks);
        // line 819
        yield "
";
        // line 820
        yield from $this->unwrap()->yieldBlock('text_widget', $context, $blocks);
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 13
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 13), "")) : ("")) . " form-control"))]);
        }
        // line 15
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 19), "")) : ("")) . " form-control"))]);
        // line 20
        yield from $this->yieldParentBlock("textarea_widget", $context, $blocks);
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 24), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 25
        yield from $this->yieldParentBlock("button_widget", $context, $blocks);
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_money_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "<div class=\"input-group money-type\">
        ";
        // line 30
        $context["prepend"] = ("{{" == Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["money_pattern"] ?? null), 0, 2));
        // line 31
        yield "        ";
        if ((($tmp =  !($context["prepend"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            yield "</span>
            </div>
        ";
        }
        // line 36
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 37
        if ((($tmp = ($context["prepend"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "            <div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            yield "</span>
            </div>
        ";
        }
        // line 42
        yield "    </div>";
        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_percent_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "<div class=\"input-group\">";
        // line 47
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 48
        yield "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 56
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 58
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 58), "")) : ("")) . " form-inline"))]);
            // line 59
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 60
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 60), 'errors');
            // line 61
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 61), 'errors');
            // line 62
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 62), 'widget', ["datetime" => true]);
            // line 63
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 63), 'widget', ["datetime" => true]);
            // line 64
            yield "</div>";
        }
        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 69
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 70
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 72
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 72), "")) : ("")) . " form-inline"))]);
            // line 73
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 74
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 76
            yield Twig\Extension\CoreExtension::replace(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 77
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 77), 'widget'), "{{ month }}" =>             // line 78
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 78), 'widget'), "{{ day }}" =>             // line 79
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 79), 'widget')]);
            // line 81
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 82
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 88
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 89
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 91), "")) : ("")) . " form-inline"))]);
            // line 92
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 93
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 95
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 95), 'widget');
            yield ":";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 95), 'widget');
            if ((($tmp = ($context["with_seconds"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ":";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 95), 'widget');
            }
            // line 96
            yield "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 97
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 103
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 103), "")) : ("")) . " custom-select"))]);
        // line 104
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104)], "Admin.Global")]);
        // line 105
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        yield from [];
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 109
        if (CoreExtension::inFilter("-inline", ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 109)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 109), "")) : ("")))) {
            // line 110
            yield "<div class=\"control-group\">";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 112
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 113
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 113), "")) : ("")), "translation_domain" =>                 // line 114
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            yield "</div>";
        } else {
            // line 119
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 121
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 122
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 122), "")) : ("")), "translation_domain" =>                 // line 123
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            yield "</div>";
        }
        yield from [];
    }

    // line 130
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 131
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), "")) : (""));
        // line 132
        if (CoreExtension::inFilter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 133
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 135
            yield "<div class=\"checkbox\">";
            // line 136
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 137
            yield "</div>";
        }
        yield from [];
    }

    // line 141
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 142
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), "")) : (""));
        // line 143
        if (CoreExtension::inFilter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 144
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 146
            yield "<div class=\"radio form-check form-check-radio\">";
            // line 147
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 148
            yield "</div>";
        }
        yield from [];
    }

    // line 152
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_tree_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 153
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield " class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</li>";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["choices"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 157
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("choice_tree_item_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "</ul>
    </div>";
        yield from [];
    }

    // line 163
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_tree_item_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 164
        yield "<li";
        if ((array_key_exists("defaultHidden", $context) && (($context["defaultHidden"] ?? null) === true))) {
            yield " class=\"more\"";
        }
        yield ">
        ";
        // line 165
        $context["checked"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 165), "submitted_values", [], "any", true, true, false, 165) && CoreExtension::getAttribute($this->env, $this->source, ($context["submitted_values"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 165), [], "array", true, true, false, 165));
        // line 166
        yield "        ";
        if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 167
            yield "<div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 169), "full_name", [], "any", false, false, false, 169), "html", null, true);
            yield "[tree][]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 169), "html", null, true);
            yield "\"";
            if ((($tmp = ($context["checked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked=\"checked\"";
            }
            yield " class=\"category\">
                    ";
            // line 170
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", true, true, false, 170) && (CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", false, false, false, 170) == 0))) {
                // line 171
                yield "                        <i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 171), "html", null, true);
                yield "</i>";
            } else {
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 173), "html", null, true);
                yield "
                    ";
            }
            // line 175
            yield "                    ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 176
                yield "                        <input type=\"radio\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 176), "html", null, true);
                yield "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 178
            yield "                </label>
            </div>";
        } else {
            // line 181
            yield "<div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"form[";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 183), "id", [], "any", false, false, false, 183), "html", null, true);
            yield "][tree]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 183), "html", null, true);
            yield "\"";
            if ((($tmp = ($context["checked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked=\"checked\"";
            }
            yield " class=\"category\"";
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " required";
            }
            yield ">
                    ";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 184), "html", null, true);
            yield "
                    ";
            // line 185
            if (array_key_exists("defaultCategory", $context)) {
                // line 186
                yield "                        <input type=\"radio\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 186), "html", null, true);
                yield "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 188
            yield "                </label>
            </div>";
        }
        // line 191
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 191)) {
            // line 192
            yield "            <ul";
            if ((array_key_exists("defaultHidden", $context) && (($context["defaultHidden"] ?? null) === true))) {
                yield " style=\"display: none;\"";
            }
            yield ">
                ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", false, false, false, 193));
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
                // line 194
                yield "                    ";
                $context["child"] = $context["item"];
                // line 195
                yield "                    ";
                yield from                 $this->unwrap()->yieldBlock("choice_tree_item_widget", $context, $blocks);
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
            // line 197
            yield "</ul>
        ";
        }
        // line 199
        yield "    </li>";
        yield from [];
    }

    // line 202
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatefields_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 203
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
    <div class=\"translations tabbable\" id=\"";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 204), "id", [], "any", false, false, false, 204), "html", null, true);
        yield "\">
        ";
        // line 205
        if (((($context["hideTabs"] ?? null) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 1))) {
            // line 206
            yield "        <ul class=\"translationsLocales nav nav-pills\">
            ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 208
                yield "                <li class=\"nav-item\">
                    <a href=\"#\" data-locale=\"";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 209), "label", [], "any", false, false, false, 209), "html", null, true);
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 209) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 209), "name", [], "any", false, false, false, 209))) {
                    yield "active";
                }
                yield " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 209), "id", [], "any", false, false, false, 209), "html", null, true);
                yield "\">
                        ";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 210), "label", [], "any", false, false, false, 210)), "html", null, true);
                yield "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            yield "        </ul>
        ";
        }
        // line 216
        yield "
        <div class=\"translationsFields tab-content\">
            ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 219
            yield "                <div data-locale=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 219), "label", [], "any", false, false, false, 219), "html", null, true);
            yield "\" class=\"translationsFields-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 219), "id", [], "any", false, false, false, 219), "html", null, true);
            yield " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? null) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 1))) {
                yield "panel panel-default";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 219) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 219), "name", [], "any", false, false, false, 219))) {
                yield "show active";
            }
            yield " ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 219), "valid", [], "any", false, false, false, 219)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "field-error";
            }
            yield " translation-label-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 219), "label", [], "any", false, false, false, 219), "html", null, true);
            yield "\">
                    ";
            // line 220
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            yield "
                    ";
            // line 221
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            // line 222
            yield from             $this->unwrap()->yieldBlock("form_help", $context, $blocks);
            // line 223
            yield "</div>
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
        unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        yield "        </div>
    </div>
";
        yield from [];
    }

    // line 229
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_fields_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 230
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 231
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 231)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 231), "")) : ("")) . " form-control"))]);
        }
        // line 233
        yield from $this->yieldParentBlock("translate_fields_widget", $context, $blocks);
        yield from [];
    }

    // line 236
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 237
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
    <div class=\"input-group locale-input-group js-locale-input-group\">
        ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 240
            yield "            ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 240), "attr", [], "any", false, true, false, 240), "class", [], "any", true, true, false, 240)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 240), "attr", [], "any", false, false, false, 240), "class", [], "any", false, false, false, 240), "")) : ("")) . " js-locale-input");
            // line 241
            yield "            ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 241), "label", [], "any", false, false, false, 241));
            // line 242
            yield "
            ";
            // line 243
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 243) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 243), "name", [], "any", false, false, false, 243))) {
                // line 244
                yield "                ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 245
                yield "            ";
            }
            // line 246
            yield "
            ";
            // line 247
            $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 247), "attr", [], "any", false, false, false, 247);
            // line 248
            yield "
            ";
            // line 249
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget', ["attr" => ["class" => Twig\Extension\CoreExtension::trim(($context["classes"] ?? null))]]);
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translateField'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        yield "
        ";
        // line 252
        if ((($tmp =  !($context["hide_locales"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 253
            yield "        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 259), "id", [], "any", false, false, false, 259), "html", null, true);
            yield "\"
            >
                ";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 261), "default_locale", [], "any", false, false, false, 261), "iso_code", [], "any", false, false, false, 261), "html", null, true);
            yield "
            </button>

            <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 264), "id", [], "any", false, false, false, 264), "html", null, true);
            yield "\">
                ";
            // line 265
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 266
                yield "                    <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 266), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 266), "html", null, true);
                yield "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 268
            yield "            </div>
        </div>
        ";
        }
        // line 271
        yield "    </div>";
        yield from [];
    }

    // line 274
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 275
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 278
            yield "      ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 278), "attr", [], "any", false, true, false, 278), "class", [], "any", true, true, false, 278)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 278), "attr", [], "any", false, false, false, 278), "class", [], "any", false, false, false, 278), "")) : ("")) . " js-locale-input");
            // line 279
            yield "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 279), "label", [], "any", false, false, false, 279));
            // line 280
            yield "
      ";
            // line 281
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 281) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 281), "name", [], "any", false, false, false, 281))) {
                // line 282
                yield "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 283
                yield "      ";
            }
            // line 284
            yield "
      <div class=\"";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 286
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => Twig\Extension\CoreExtension::trim(($context["classes"] ?? null))]]);
            yield "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['textarea'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        yield "
    ";
        // line 290
        if ((($tmp = ($context["show_locale_select"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 291
            yield "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 297), "id", [], "any", false, false, false, 297), "html", null, true);
            yield "\"
        >
          ";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 299), "default_locale", [], "any", false, false, false, 299), "iso_code", [], "any", false, false, false, 299), "html", null, true);
            yield "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 302), "id", [], "any", false, false, false, 302), "html", null, true);
            yield "\">
          ";
            // line 303
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 304
                yield "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 305
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 305), "html", null, true);
                yield "\"
            >
              ";
                // line 307
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 307), "html", null, true);
                yield "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 310
            yield "        </div>
      </div>
    ";
        }
        // line 313
        yield "  </div>";
        yield from [];
    }

    // line 316
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_picker_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 317
        yield "  ";
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 318
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 318)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 318), "")) : ("")) . " datepicker form-control"))]);
            // line 319
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 319), "id", [], "any", false, false, false, 319)], "Admin.Global")]);
            // line 320
            yield "<div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date_format"] ?? null), "html", null, true);
            yield "\" ";
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            yield " ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\" ";
            }
            yield "/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 317
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v0, "html", null, true));
        yield from [];
    }

    // line 331
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_range_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 332
        yield "  ";
        $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 333
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "from", [], "any", false, false, false, 333), 'widget');
            yield "
    ";
            // line 334
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "from", [], "any", false, false, false, 334), 'errors');
            yield "
    ";
            // line 335
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "to", [], "any", false, false, false, 335), 'widget');
            yield "
    ";
            // line 336
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "to", [], "any", false, false, false, 336), 'errors');
            yield "
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 332
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v1, "html", null, true));
        yield from [];
    }

    // line 340
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_color_picker_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 341
        yield "  ";
        $_v2 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 342
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 342)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 342), "")) : ("")) . " form-control colorpicker"))]);
            // line 343
            yield "    <div class=\"input-group colorpicker\">
      <input type=\"text\" ";
            // line 344
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            yield " ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\" ";
            }
            yield "/>
    </div>";
            // line 346
            yield from             $this->unwrap()->yieldBlock("form_help", $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 341
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v2, "html", null, true));
        yield from [];
    }

    // line 350
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_and_reset_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 351
        yield "    ";
        $_v3 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 352
            yield "        <button type=\"submit\"
                class=\"btn btn-primary grid-search-button\"
                title=\"";
            // line 354
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
            yield "\"
                name=\"";
            // line 355
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
            yield "[search]\"
        >
          <i class=\"material-icons\">search</i>
          ";
            // line 358
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
            yield "
        </button>
      ";
            // line 360
            if ((($tmp = ($context["show_reset_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 361
                yield "          <div class=\"js-grid-reset-button\">
            <button type=\"reset\"
                    name=\"";
                // line 363
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
                yield "[reset]\"
                    class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                    data-url=\"";
                // line 365
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reset_url"] ?? null), "html", null, true);
                yield "\"
                    data-redirect=\"";
                // line 366
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["redirect_url"] ?? null), "html", null, true);
                yield "\"
            >
              <i class=\"material-icons\">clear</i>
              ";
                // line 369
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
                yield "
            </button>
          </div>
      ";
            }
            // line 373
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 351
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v3, "html", null, true));
        yield from [];
    }

    // line 376
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_switch_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 377
        yield "    ";
        $_v4 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 378
            yield "    <span class=\"ps-switch\">
        ";
            // line 379
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["choices"] ?? null));
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
                // line 380
                yield "            ";
                $context["inputId"] = ((($context["id"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 380));
                // line 381
                yield "            <input id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inputId"] ?? null), "html", null, true);
                yield "\"
                ";
                // line 382
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                yield "
                name=\"";
                // line 383
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
                yield "\"
                value=\"";
                // line 384
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 384), "html", null, true);
                yield "\"
                ";
                // line 385
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                    yield "checked=\"\"";
                }
                // line 386
                yield "                ";
                if ((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "disabled=\"\"";
                }
                // line 387
                yield "                type=\"radio\"
                aria-label=\"";
                // line 388
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 388), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
                yield "\"
                >
            <label for=\"";
                // line 390
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inputId"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 390), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
                yield "</label>
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
            // line 392
            yield "        <span class=\"slide-button\"></span>
    </span>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 377
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v4, "html", null, true));
        yield from [];
    }

    // line 397
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__form_step6_attachments_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 398
        yield "    <div class=\"js-options-no-attachments ";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        yield "\">
        <small>";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        yield "</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments ";
        // line 402
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        yield "\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\">";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title", [], "Admin.Global"), "html", null, true);
        yield "</th>
                <th class=\"col-md-6\">";
        // line 408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File name", [], "Admin.Global"), "html", null, true);
        yield "</th>
                <th class=\"col-md-2\">";
        // line 409
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
              </tr>
            </thead>
            <tbody>";
        // line 413
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 414
            yield "              <tr>
                <td class=\"col-md-3\">";
            // line 415
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "</td>
                <td class=\"col-md-6 file-name\"><span>";
            // line 416
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = (($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 416), "attr", [], "any", false, false, false, 416), "data", [], "any", false, false, false, 416)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[(($_v7 = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 416)) instanceof \Stringable ? (string) $_v7 : $_v7)] ?? null) : null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["file_name"] ?? null) : null), "html", null, true);
            yield "</span></td>
                <td class=\"col-md-2\">";
            // line 417
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = (($_v9 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 417), "attr", [], "any", false, false, false, 417), "data", [], "any", false, false, false, 417)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[(($_v10 = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 417)) instanceof \Stringable ? (string) $_v10 : $_v10)] ?? null) : null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["mime"] ?? null) : null), "html", null, true);
            yield "</td>
              </tr>
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
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 420
        yield "</tbody>
          </table>
        </div>
      </div>
    </div>
";
        yield from [];
    }

    // line 429
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 430
        yield from $this->yieldParentBlock("form_label", $context, $blocks);
        yield from [];
    }

    // line 433
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 435
        $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 435)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 435), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 436
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        yield from [];
    }

    // line 439
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 440
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        yield from [];
    }

    // line 443
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 444
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        yield from [];
    }

    // line 447
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 448
        yield "    ";
        // line 449
        yield "    ";
        if (array_key_exists("widget", $context)) {
            // line 450
            yield "      ";
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 451
                yield "        ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 451)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 451), "")) : ("")) . " required"))]);
                // line 452
                yield "      ";
            }
            // line 453
            yield "      ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 454
                yield "          ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 454)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 454), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 455
                yield "      ";
            }
            // line 456
            yield "      ";
            if (( !(($context["label"] ?? null) === false) && Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null)))) {
                // line 457
                yield "          ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 458
                yield "      ";
            }
            // line 459
            yield "
      ";
            // line 460
            if ((array_key_exists("material_design", $context) || CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "material_design", [], "any", true, true, false, 460))) {
                // line 461
                yield "        <div class=\"md-checkbox md-checkbox-inline\">
          <label";
                // line 462
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                    yield "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield ">";
                // line 463
                yield ($context["widget"] ?? null);
                // line 464
                yield "<i class=\"md-checkbox-control\"></i>";
                // line 465
                yield (((($tmp =  !(($context["label"] ?? null) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($context["translation_domain"] ?? null) === false)) ? ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["label"] ?? null))) : ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["label"] ?? null))))) : (""));
                // line 466
                yield "</label>
        </div>
      ";
            } else {
                // line 469
                yield "      <label";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                    if (($context["attrname"] === "class")) {
                        yield " form-check-label";
                    }
                    yield "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["label_attr"] ?? null)) <= 0)) {
                    yield " class=\"form-check-label\"";
                }
                yield ">";
                // line 470
                yield ($context["widget"] ?? null);
                // line 471
                yield (((($tmp =  !(($context["label"] ?? null) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($context["translation_domain"] ?? null) === false)) ? ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["label"] ?? null))) : ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["label"] ?? null))))) : (""));
                // line 472
                yield "</label>
      ";
            }
            // line 474
            yield "    ";
        }
        yield from [];
    }

    // line 479
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 480
        yield "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            yield " has-error";
        }
        yield "\">";
        // line 481
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 482
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 483
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 484
        yield "</div>";
        yield from [];
    }

    // line 487
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 488
        $context["rowClass"] = ("form-group " . Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 488), "row_attr", [], "any", false, true, false, 488), "class", [], "any", true, true, false, 488)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 488), "row_attr", [], "any", false, false, false, 488), "class", [], "any", false, false, false, 488), "")) : (""))));
        // line 489
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rowClass"] ?? null), "html", null, true);
        yield "\">";
        // line 490
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 491
        yield "</div>";
        yield from [];
    }

    // line 494
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 495
        $context["force_error"] = true;
        // line 496
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield from [];
    }

    // line 499
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 500
        $context["force_error"] = true;
        // line 501
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield from [];
    }

    // line 504
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 505
        $context["force_error"] = true;
        // line 506
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield from [];
    }

    // line 509
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 510
        $context["force_error"] = true;
        // line 511
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield from [];
    }

    // line 514
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 515
        yield "<div class=\"form-group";
        if ((($tmp =  !($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " has-error";
        }
        yield "\">";
        // line 516
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 517
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 518
        yield "</div>";
        yield from [];
    }

    // line 521
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 522
        yield "<div class=\"form-group";
        if ((($tmp =  !($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " has-error";
        }
        yield "\">";
        // line 523
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 524
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 525
        yield "</div>";
        yield from [];
    }

    // line 530
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 531
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 532
            yield "<div class=\"alert alert-danger\">";
            // line 533
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 1)) {
                // line 534
                yield "<ul class=\"alert-text\">";
                // line 535
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 536
                    yield "<li> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 536), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 536), "form_error"), "html", null, true);
                    yield "
                    </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 539
                yield "</ul>";
            } else {
                // line 541
                yield "<div class=\"alert-text\">";
                // line 542
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 543
                    yield "<p> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 543), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 543), "form_error"), "html", null, true);
                    yield "
                </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 546
                yield "</div>";
            }
            // line 548
            yield "</div>";
        }
        yield from [];
    }

    // line 554
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_table_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 555
        yield "  ";
        $_v11 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 556
            yield "    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
          <tr>
            <th class=\"checkbox\">
              <div class=\"md-checkbox\">
                <label>
                  <input
                    type=\"checkbox\"
                    class=\"js-choice-table-select-all\"
                    ";
            // line 566
            if ((($tmp = ($context["isCheckSelectAll"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 567
                yield "                      checked
                    ";
            }
            // line 569
            yield "                  >
                  <i class=\"md-checkbox-control\"></i>
                  ";
            // line 571
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all", [], "Admin.Actions"), "html", null, true);
            yield " ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 571), "displayTotalItems", [], "any", false, false, false, 571)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)), "html", null, true);
                yield ") ";
            }
            // line 572
            yield "                </label>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
        ";
            // line 578
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 579
                yield "          <tr>
            <td>
              ";
                // line 581
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
                yield "
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 585
            yield "        </tbody>
      </table>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 555
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v11, "html", null, true));
        yield from [];
    }

    // line 591
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_multiple_choice_table_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 592
        yield "  ";
        $_v12 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 593
            yield "    <div class=\"choice-table";
            if ((($tmp = ($context["headers_fixed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "-headers-fixed";
            }
            yield " table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 597
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "</th>
            ";
            // line 598
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
                // line 599
                yield "              <th class=\"text-center\">
                ";
                // line 600
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 600), "multiple", [], "any", false, false, false, 600) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 600), "name", [], "any", false, false, false, 600), ($context["headers_to_disable"] ?? null)))) {
                    // line 601
                    yield "                  <a href=\"#\"
                     class=\"js-multiple-choice-table-select-column\"
                     data-column-num=\"";
                    // line 603
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 603) + 1), "html", null, true);
                    yield "\"
                     data-column-checked=\"false\"
                  >
                    ";
                    // line 606
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 606), "label", [], "any", false, false, false, 606), "html", null, true);
                    yield "
                  </a>
                ";
                } else {
                    // line 609
                    yield "                  ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 609), "label", [], "any", false, false, false, 609), "html", null, true);
                    yield "
                ";
                }
                // line 611
                yield "              </th>
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
            unset($context['_seq'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 613
            yield "          </tr>
        </thead>
        <tbody>
        ";
            // line 616
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["choices"] ?? null));
            foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
                // line 617
                yield "          <tr>
            <td>
              ";
                // line 619
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choice_name"], "html", null, true);
                yield "
            </td>
            ";
                // line 621
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
                foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                    // line 622
                    yield "              <td class=\"text-center\">
                ";
                    // line 623
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true, false, 623), $context["child_choice_name"], [], "array", true, true, false, 623)) {
                        // line 624
                        yield "                  ";
                        $context["entry_index"] = (($_v13 = (($_v14 = ($context["child_choice_entry_index_mapping"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[(($_v15 = $context["choice_value"]) instanceof \Stringable ? (string) $_v15 : $_v15)] ?? null) : null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[(($_v16 = $context["child_choice_name"]) instanceof \Stringable ? (string) $_v16 : $_v16)] ?? null) : null);
                        // line 625
                        yield "
                  ";
                        // line 626
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 626), "multiple", [], "any", false, false, false, 626)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 627
                            yield "                    ";
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v17 = $context["child_choice"]) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[(($_v18 = ($context["entry_index"] ?? null)) instanceof \Stringable ? (string) $_v18 : $_v18)] ?? null) : null), 'widget', ["material_design" => true]);
                            yield "
                  ";
                        } else {
                            // line 629
                            yield "                    ";
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v19 = $context["child_choice"]) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[(($_v20 = ($context["entry_index"] ?? null)) instanceof \Stringable ? (string) $_v20 : $_v20)] ?? null) : null), 'widget');
                            yield "
                  ";
                        }
                        // line 631
                        yield "                ";
                    } else {
                        // line 632
                        yield "                  --
                ";
                    }
                    // line 634
                    yield "              </td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['child_choice_name'], $context['child_choice'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 636
                yield "          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['choice_name'], $context['choice_value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 638
            yield "        </tbody>
      </table>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 592
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v12, "html", null, true));
        yield from [];
    }

    // line 644
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 645
        $context["formClass"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 645), "attr", [], "any", false, true, false, 645), "class", [], "any", true, true, false, 645)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 645), "attr", [], "any", false, false, false, 645), "class", [], "any", false, false, false, 645), "")) : ("")) . Twig\Extension\CoreExtension::trim(" input-group locale-input-group js-locale-input-group d-flex"));
        // line 646
        yield "  <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formClass"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 647
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 648
            yield "      ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 648), "attr", [], "any", false, true, false, 648), "class", [], "any", true, true, false, 648)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 648), "attr", [], "any", false, false, false, 648), "class", [], "any", false, false, false, 648), "")) : ("")) . " js-locale-input");
            // line 649
            yield "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 649), "label", [], "any", false, false, false, 649));
            // line 650
            yield "      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 650) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 650), "name", [], "any", false, false, false, 650))) {
                // line 651
                yield "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 652
                yield "      ";
            }
            // line 653
            yield "      <div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
            yield "\" style=\"flex-grow: 1;\">
        ";
            // line 654
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            yield "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translateField'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 657
        yield "    ";
        if ((($tmp =  !($context["hide_locales"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 658
            yield "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                ";
            // line 662
            if (array_key_exists("change_form_language_url", $context)) {
                // line 663
                yield "                  data-change-language-url=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 663), "change_form_language_url", [], "any", false, false, false, 663), "html", null, true);
                yield "\"
                ";
            }
            // line 665
            yield "                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 667
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 667), "id", [], "any", false, false, false, 667), "html", null, true);
            yield "_dropdown\"
        >
          ";
            // line 669
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 669), "default_locale", [], "any", false, false, false, 669), "iso_code", [], "any", false, false, false, 669), "html", null, true);
            yield "
        </button>
        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 671
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 671), "id", [], "any", false, false, false, 671), "html", null, true);
            yield "_dropdown\">
          ";
            // line 672
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 673
                yield "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 673), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 673), "html", null, true);
                yield "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 675
            yield "        </div>
      </div>
    ";
        }
        // line 678
        yield "  </div>";
        yield from [];
    }

    // line 681
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_birthday_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 682
        yield "  ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 683
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 685
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 685)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 685), "")) : ("")) . " form-inline"))]);
            // line 686
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 687
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 689
            yield "
    ";
            // line 690
            $context["yearWidget"] = (("<div class=\"col pl-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 690), 'widget')) . "</div>");
            // line 691
            yield "    ";
            $context["monthWidget"] = (("<div class=\"col\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 691), 'widget')) . "</div>");
            // line 692
            yield "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 692), 'widget')) . "</div>");
            // line 694
            yield Twig\Extension\CoreExtension::replace(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 695
($context["yearWidget"] ?? null), "{{ month }}" =>             // line 696
($context["monthWidget"] ?? null), "{{ day }}" =>             // line 697
($context["dayWidget"] ?? null)]);
            // line 700
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 701
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 706
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 707
        yield "  <style>
    .custom-file-label:after {
      content: \"";
        // line 709
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "Admin.Actions"), "html", null, true);
        yield "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 713
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 714
($context["attr"] ?? null), "class", [], "any", true, true, false, 714)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 714), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->extensions['PrestaShopBundle\Twig\ContextIsoCodeProviderExtension']->getIsoCode()]);
        // line 719
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 719) && CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 719))) {
            // line 720
            yield "      ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => (CoreExtension::getAttribute($this->env, $this->source,             // line 721
($context["attr"] ?? null), "class", [], "any", false, false, false, 721) . " disabled")]);
            // line 723
            yield "    ";
        }
        // line 724
        yield "
    ";
        // line 725
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        yield "

    <label class=\"custom-file-label\" for=\"";
        // line 727
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 727), "id", [], "any", false, false, false, 727), "html", null, true);
        yield "\">
      ";
        // line 728
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 728), "attr", [], "any", false, false, false, 728);
        // line 729
        yield "      ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", true, true, false, 729)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", false, false, false, 729), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose file(s)", [], "Admin.Actions"), "html", null, true)));
        yield "
    </label>
  </div>
";
        yield from [];
    }

    // line 734
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_restriction_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 735
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 735), "attr", [], "any", false, false, false, 735), "is_allowed_to_display", [], "any", false, false, false, 735)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 736
            yield "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 738
            $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "checkbox")) : ("checkbox"));
            // line 739
            yield "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 741
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield "\"
          ";
            // line 742
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            yield "
          value=\"";
            // line 743
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
        yield from [];
    }

    // line 751
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_generatable_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 752
        yield "  <div class=\"input-group\">";
        // line 753
        yield from         $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        // line 754
        yield "<span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 757
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\"
              data-generated-value-length=\"";
        // line 758
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["generated_value_length"] ?? null), "html", null, true);
        yield "\"
      >
        ";
        // line 760
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate", [], "Admin.Actions"), "html", null, true);
        yield "
      </button>
   </span>
  </div>
";
        yield from [];
    }

    // line 766
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_with_recommended_length_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 767
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-recommended-length-counter" => (("#" .         // line 768
($context["id"] ?? null)) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 772
        if ((($context["input_type"] ?? null) == "textarea")) {
            // line 773
            yield from             $this->unwrap()->yieldBlock("textarea_widget", $context, $blocks);
        } else {
            // line 775
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        // line 777
        yield "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 779
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "_recommended_length_counter\"
  >
    <em>
      ";
        // line 782
        yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 783
($context["value"] ?? null))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 785
($context["recommended_length"] ?? null)), "[/2]" => "</span>"]));
        // line 787
        yield "
    </em>
  </small>
";
        yield from [];
    }

    // line 792
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integer_min_max_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 793
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v21 = ($context["form"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        yield "
  ";
        // line 794
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v22 = ($context["form"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        yield "
";
        yield from [];
    }

    // line 797
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_number_min_max_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 798
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v23 = ($context["form"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        yield "
  ";
        // line 799
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v24 = ($context["form"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        yield "
";
        yield from [];
    }

    // line 802
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 803
        yield "  ";
        if ((($tmp = ($context["help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 804
            yield "    <small class=\"form-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["help"] ?? null), "html", null, true);
            yield "</small>
  ";
        }
        yield from [];
    }

    // line 808
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_hint(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 809
        yield "  ";
        if ((($tmp = ($context["hint"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 810
            yield "    <div class=\"hint-box\">
      <div class=\"alert alert-info\">";
            // line 811
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["hint"] ?? null));
            yield "</div>
    </div>
  ";
        }
        yield from [];
    }

    // line 816
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_custom_content_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 817
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, ($context["template"] ?? null), ($context["data"] ?? null));
        yield "
";
        yield from [];
    }

    // line 820
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 821
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 821), "id", [], "any", false, false, false, 821)], "Admin.Global")]);
        // line 822
        if ((($tmp =  !(null === ($context["data_list"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 823
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["list" => (($context["id"] ?? null) . "_datalist")]);
        }
        // line 825
        yield "
  ";
        // line 826
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        yield "

  ";
        // line 828
        if ((($tmp =  !(null === ($context["data_list"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 829
            yield "    <datalist id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["id"] ?? null) . "_datalist"), "html", null, true);
            yield "\">
      ";
            // line 830
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["data_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 831
                yield "        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                yield "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 833
            yield "    </datalist>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  2707 => 833,  2698 => 831,  2694 => 830,  2689 => 829,  2687 => 828,  2682 => 826,  2679 => 825,  2676 => 823,  2674 => 822,  2672 => 821,  2665 => 820,  2657 => 817,  2650 => 816,  2641 => 811,  2638 => 810,  2635 => 809,  2628 => 808,  2619 => 804,  2616 => 803,  2609 => 802,  2602 => 799,  2597 => 798,  2590 => 797,  2583 => 794,  2578 => 793,  2571 => 792,  2563 => 787,  2561 => 785,  2560 => 783,  2559 => 782,  2553 => 779,  2549 => 777,  2546 => 775,  2543 => 773,  2541 => 772,  2539 => 768,  2537 => 767,  2530 => 766,  2520 => 760,  2515 => 758,  2511 => 757,  2506 => 754,  2504 => 753,  2502 => 752,  2495 => 751,  2483 => 743,  2479 => 742,  2475 => 741,  2471 => 739,  2469 => 738,  2465 => 736,  2462 => 735,  2455 => 734,  2445 => 729,  2443 => 728,  2439 => 727,  2434 => 725,  2431 => 724,  2428 => 723,  2426 => 721,  2424 => 720,  2422 => 719,  2420 => 714,  2419 => 713,  2412 => 709,  2408 => 707,  2401 => 706,  2394 => 701,  2392 => 700,  2390 => 697,  2389 => 696,  2388 => 695,  2387 => 694,  2384 => 692,  2381 => 691,  2379 => 690,  2376 => 689,  2371 => 687,  2369 => 686,  2367 => 685,  2364 => 683,  2361 => 682,  2354 => 681,  2349 => 678,  2344 => 675,  2333 => 673,  2329 => 672,  2325 => 671,  2320 => 669,  2315 => 667,  2311 => 665,  2305 => 663,  2303 => 662,  2297 => 658,  2294 => 657,  2285 => 654,  2280 => 653,  2277 => 652,  2274 => 651,  2271 => 650,  2268 => 649,  2265 => 648,  2261 => 647,  2256 => 646,  2254 => 645,  2247 => 644,  2242 => 592,  2235 => 638,  2228 => 636,  2221 => 634,  2217 => 632,  2214 => 631,  2208 => 629,  2202 => 627,  2200 => 626,  2197 => 625,  2194 => 624,  2192 => 623,  2189 => 622,  2185 => 621,  2180 => 619,  2176 => 617,  2172 => 616,  2167 => 613,  2152 => 611,  2146 => 609,  2140 => 606,  2134 => 603,  2130 => 601,  2128 => 600,  2125 => 599,  2108 => 598,  2104 => 597,  2094 => 593,  2091 => 592,  2084 => 591,  2079 => 555,  2072 => 585,  2062 => 581,  2058 => 579,  2054 => 578,  2046 => 572,  2038 => 571,  2034 => 569,  2030 => 567,  2028 => 566,  2016 => 556,  2013 => 555,  2006 => 554,  2000 => 548,  1997 => 546,  1988 => 543,  1984 => 542,  1982 => 541,  1979 => 539,  1970 => 536,  1966 => 535,  1964 => 534,  1962 => 533,  1960 => 532,  1958 => 531,  1951 => 530,  1946 => 525,  1944 => 524,  1942 => 523,  1936 => 522,  1929 => 521,  1924 => 518,  1922 => 517,  1920 => 516,  1914 => 515,  1907 => 514,  1902 => 511,  1900 => 510,  1893 => 509,  1888 => 506,  1886 => 505,  1879 => 504,  1874 => 501,  1872 => 500,  1865 => 499,  1860 => 496,  1858 => 495,  1851 => 494,  1846 => 491,  1844 => 490,  1840 => 489,  1838 => 488,  1831 => 487,  1826 => 484,  1824 => 483,  1822 => 482,  1820 => 481,  1814 => 480,  1807 => 479,  1801 => 474,  1797 => 472,  1795 => 471,  1793 => 470,  1772 => 469,  1767 => 466,  1765 => 465,  1763 => 464,  1761 => 463,  1747 => 462,  1744 => 461,  1742 => 460,  1739 => 459,  1736 => 458,  1733 => 457,  1730 => 456,  1727 => 455,  1724 => 454,  1721 => 453,  1718 => 452,  1715 => 451,  1712 => 450,  1709 => 449,  1707 => 448,  1700 => 447,  1695 => 444,  1688 => 443,  1683 => 440,  1676 => 439,  1671 => 436,  1669 => 435,  1662 => 433,  1657 => 430,  1650 => 429,  1640 => 420,  1623 => 417,  1619 => 416,  1615 => 415,  1612 => 414,  1595 => 413,  1589 => 409,  1585 => 408,  1581 => 407,  1573 => 402,  1567 => 399,  1562 => 398,  1555 => 397,  1550 => 377,  1544 => 392,  1526 => 390,  1521 => 388,  1518 => 387,  1513 => 386,  1509 => 385,  1505 => 384,  1501 => 383,  1497 => 382,  1492 => 381,  1489 => 380,  1472 => 379,  1469 => 378,  1466 => 377,  1459 => 376,  1454 => 351,  1450 => 373,  1443 => 369,  1437 => 366,  1433 => 365,  1428 => 363,  1424 => 361,  1422 => 360,  1417 => 358,  1411 => 355,  1407 => 354,  1403 => 352,  1400 => 351,  1393 => 350,  1388 => 341,  1384 => 346,  1374 => 344,  1371 => 343,  1368 => 342,  1365 => 341,  1358 => 340,  1353 => 332,  1347 => 336,  1343 => 335,  1339 => 334,  1334 => 333,  1331 => 332,  1324 => 331,  1319 => 317,  1299 => 321,  1296 => 320,  1294 => 319,  1291 => 318,  1288 => 317,  1281 => 316,  1276 => 313,  1271 => 310,  1262 => 307,  1257 => 305,  1254 => 304,  1250 => 303,  1246 => 302,  1240 => 299,  1235 => 297,  1227 => 291,  1225 => 290,  1222 => 289,  1213 => 286,  1209 => 285,  1206 => 284,  1203 => 283,  1200 => 282,  1198 => 281,  1195 => 280,  1192 => 279,  1189 => 278,  1185 => 277,  1180 => 275,  1173 => 274,  1168 => 271,  1163 => 268,  1152 => 266,  1148 => 265,  1144 => 264,  1138 => 261,  1133 => 259,  1125 => 253,  1123 => 252,  1120 => 251,  1112 => 249,  1109 => 248,  1107 => 247,  1104 => 246,  1101 => 245,  1098 => 244,  1096 => 243,  1093 => 242,  1090 => 241,  1087 => 240,  1083 => 239,  1078 => 237,  1071 => 236,  1066 => 233,  1063 => 231,  1061 => 230,  1054 => 229,  1047 => 225,  1032 => 223,  1030 => 222,  1028 => 221,  1024 => 220,  1003 => 219,  986 => 218,  982 => 216,  978 => 214,  968 => 210,  958 => 209,  955 => 208,  951 => 207,  948 => 206,  946 => 205,  942 => 204,  937 => 203,  930 => 202,  925 => 199,  921 => 197,  904 => 195,  901 => 194,  884 => 193,  877 => 192,  874 => 191,  870 => 188,  864 => 186,  862 => 185,  858 => 184,  844 => 183,  840 => 181,  836 => 178,  830 => 176,  827 => 175,  822 => 173,  817 => 171,  815 => 170,  805 => 169,  801 => 167,  798 => 166,  796 => 165,  789 => 164,  782 => 163,  776 => 159,  759 => 157,  742 => 156,  739 => 155,  733 => 153,  726 => 152,  720 => 148,  718 => 147,  716 => 146,  713 => 144,  711 => 143,  709 => 142,  702 => 141,  696 => 137,  694 => 136,  692 => 135,  689 => 133,  687 => 132,  685 => 131,  678 => 130,  672 => 126,  666 => 123,  665 => 122,  664 => 121,  660 => 120,  656 => 119,  653 => 117,  647 => 114,  646 => 113,  645 => 112,  641 => 111,  639 => 110,  637 => 109,  630 => 108,  625 => 105,  623 => 104,  621 => 103,  614 => 102,  607 => 97,  604 => 96,  596 => 95,  591 => 93,  589 => 92,  587 => 91,  584 => 89,  582 => 88,  575 => 87,  568 => 82,  566 => 81,  564 => 79,  563 => 78,  562 => 77,  561 => 76,  556 => 74,  554 => 73,  552 => 72,  549 => 70,  547 => 69,  540 => 68,  534 => 64,  532 => 63,  530 => 62,  528 => 61,  526 => 60,  522 => 59,  520 => 58,  517 => 56,  515 => 55,  508 => 54,  500 => 48,  498 => 47,  496 => 46,  489 => 45,  484 => 42,  478 => 39,  475 => 38,  473 => 37,  471 => 36,  465 => 33,  462 => 32,  459 => 31,  457 => 30,  454 => 29,  447 => 28,  442 => 25,  440 => 24,  433 => 23,  428 => 20,  426 => 19,  419 => 18,  414 => 15,  411 => 13,  409 => 12,  402 => 11,  397 => 820,  394 => 819,  392 => 816,  389 => 815,  387 => 808,  384 => 807,  382 => 802,  379 => 801,  377 => 797,  374 => 796,  372 => 792,  369 => 791,  367 => 766,  364 => 765,  362 => 751,  359 => 750,  357 => 734,  354 => 733,  352 => 706,  349 => 705,  347 => 681,  344 => 680,  342 => 644,  339 => 643,  337 => 591,  334 => 590,  332 => 554,  329 => 553,  326 => 551,  324 => 530,  321 => 529,  318 => 527,  316 => 521,  313 => 520,  311 => 514,  308 => 513,  306 => 509,  303 => 508,  301 => 504,  298 => 503,  296 => 499,  293 => 498,  291 => 494,  288 => 493,  286 => 487,  283 => 486,  281 => 479,  278 => 478,  275 => 476,  273 => 447,  270 => 446,  268 => 443,  265 => 442,  263 => 439,  260 => 438,  258 => 433,  255 => 432,  253 => 429,  250 => 428,  247 => 426,  245 => 397,  242 => 396,  240 => 376,  237 => 375,  235 => 350,  232 => 349,  230 => 340,  227 => 339,  225 => 331,  222 => 330,  220 => 316,  217 => 315,  215 => 274,  212 => 273,  210 => 236,  207 => 235,  205 => 229,  202 => 228,  200 => 202,  197 => 201,  195 => 163,  192 => 162,  190 => 152,  187 => 151,  185 => 141,  182 => 140,  180 => 130,  177 => 129,  175 => 108,  172 => 107,  170 => 102,  167 => 101,  165 => 87,  162 => 86,  160 => 68,  157 => 67,  155 => 54,  152 => 53,  150 => 45,  147 => 44,  145 => 28,  142 => 27,  140 => 23,  137 => 22,  135 => 18,  132 => 17,  130 => 11,  127 => 10,  124 => 8,  49 => 7,  42 => 6,  35 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\bootstrap_4_layout.html.twig");
    }
}
