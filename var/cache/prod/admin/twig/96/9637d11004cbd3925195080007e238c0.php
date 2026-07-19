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

/* @PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig */
class __TwigTemplate_e45de3494c4f24d275f87ab438616794 extends Template
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

        // line 25
        $_trait_0 = $this->load("bootstrap_base_layout.html.twig", 25);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 25, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        if (!isset($_trait_0_blocks["radio_widget"])) {
            throw new RuntimeError(sprintf('Block "%s" is not defined in trait "%s".', "radio_widget", "bootstrap_base_layout.html.twig"), 25, $this->source);
        }

        $_trait_0_blocks["base_radio_widget"] = $_trait_0_blocks["radio_widget"]; unset($_trait_0_blocks["radio_widget"]); $this->traitAliases["base_radio_widget"] = "radio_widget";

        if (!isset($_trait_0_blocks["checkbox_widget"])) {
            throw new RuntimeError(sprintf('Block "%s" is not defined in trait "%s".', "checkbox_widget", "bootstrap_base_layout.html.twig"), 25, $this->source);
        }

        $_trait_0_blocks["base_checkbox_widget"] = $_trait_0_blocks["checkbox_widget"]; unset($_trait_0_blocks["checkbox_widget"]); $this->traitAliases["base_checkbox_widget"] = "checkbox_widget";

        // line 28
        $_trait_1 = $this->load("bootstrap_4_layout.html.twig", 28);
        if (!$_trait_1->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 28, $this->source);
        }
        $_trait_1_blocks = $_trait_1->unwrap()->getBlocks();

        // line 29
        $_trait_2 = $this->load("@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig", 29);
        if (!$_trait_2->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig".'" cannot be used as a trait.', 29, $this->source);
        }
        $_trait_2_blocks = $_trait_2->unwrap()->getBlocks();

        // line 30
        $_trait_3 = $this->load("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", 30);
        if (!$_trait_3->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 30, $this->source);
        }
        $_trait_3_blocks = $_trait_3->unwrap()->getBlocks();

        // line 31
        $_trait_4 = $this->load("@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig", 31);
        if (!$_trait_4->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig".'" cannot be used as a trait.', 31, $this->source);
        }
        $_trait_4_blocks = $_trait_4->unwrap()->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks,
            $_trait_4_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'password_widget' => [$this, 'block_password_widget'],
                'form_row' => [$this, 'block_form_row'],
                'form_modify_all_shops' => [$this, 'block_form_modify_all_shops'],
                'form_disabling_switch' => [$this, 'block_form_disabling_switch'],
                'widget_type_class' => [$this, 'block_widget_type_class'],
                'form_label' => [$this, 'block_form_label'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'url_widget' => [$this, 'block_url_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'email_widget' => [$this, 'block_email_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'icon_button_widget' => [$this, 'block_icon_button_widget'],
                'choice_widget' => [$this, 'block_choice_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'row_attributes' => [$this, 'block_row_attributes'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_errors_field' => [$this, 'block_form_errors_field'],
                'form_errors_other' => [$this, 'block_form_errors_other'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_fields_with_tabs' => [$this, 'block_translatable_fields_with_tabs'],
                'translatable_fields_with_dropdown' => [$this, 'block_translatable_fields_with_dropdown'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'number_widget' => [$this, 'block_number_widget'],
                'integer_widget' => [$this, 'block_integer_widget'],
                'form_unit' => [$this, 'block_form_unit'],
                'form_unit_prepend' => [$this, 'block_form_unit_prepend'],
                'form_help' => [$this, 'block_form_help'],
                'form_prepend_external_link' => [$this, 'block_form_prepend_external_link'],
                'form_append_external_link' => [$this, 'block_form_append_external_link'],
                'form_external_link' => [$this, 'block_form_external_link'],
                'form_external_link_attributes' => [$this, 'block_form_external_link_attributes'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
                'form_prepend_alert' => [$this, 'block_form_prepend_alert'],
                'form_append_alert' => [$this, 'block_form_append_alert'],
                'form_alert' => [$this, 'block_form_alert'],
                'unavailable_widget' => [$this, 'block_unavailable_widget'],
                'text_preview_widget' => [$this, 'block_text_preview_widget'],
                'link_preview_widget' => [$this, 'block_link_preview_widget'],
                'image_preview_widget' => [$this, 'block_image_preview_widget'],
                'delta_quantity_widget' => [$this, 'block_delta_quantity_widget'],
                'delta_quantity_quantity_widget' => [$this, 'block_delta_quantity_quantity_widget'],
                'delta_quantity_delta_row' => [$this, 'block_delta_quantity_delta_row'],
                'delta_quantity_delta_widget' => [$this, 'block_delta_quantity_delta_widget'],
                'submittable_input_widget' => [$this, 'block_submittable_input_widget'],
                'submittable_input_button_widget' => [$this, 'block_submittable_input_button_widget'],
                'submittable_delta_quantity_delta_widget' => [$this, 'block_submittable_delta_quantity_delta_widget'],
                'navigation_tab_widget' => [$this, 'block_navigation_tab_widget'],
                'toggle_children_choice_widget' => [$this, 'block_toggle_children_choice_widget'],
                'accordion_widget' => [$this, 'block_accordion_widget'],
                'button_collection_widget' => [$this, 'block_button_collection_widget'],
                'card_row' => [$this, 'block_card_row'],
                'avatar_url_row' => [$this, 'block_avatar_url_row'],
                'change_password_row' => [$this, 'block_change_password_row'],
                'price_reduction_widget' => [$this, 'block_price_reduction_widget'],
                'image_with_preview_widget' => [$this, 'block_image_with_preview_widget'],
                'tagged_item_collection_widget' => [$this, 'block_tagged_item_collection_widget'],
                'tagged_item_collection_entry_row' => [$this, 'block_tagged_item_collection_entry_row'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
";
        // line 14
        yield "
";
        // line 26
        yield "
";
        // line 32
        yield "
";
        // line 34
        yield "
";
        // line 36
        yield "
";
        // line 37
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 47
        yield from $this->unwrap()->yieldBlock('form_widget', $context, $blocks);
        // line 55
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 60
        yield from $this->unwrap()->yieldBlock('ip_address_text_widget', $context, $blocks);
        // line 70
        yield from $this->unwrap()->yieldBlock('password_widget', $context, $blocks);
        // line 77
        yield "
";
        // line 78
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 96
        yield "
";
        // line 101
        yield from $this->unwrap()->yieldBlock('form_modify_all_shops', $context, $blocks);
        // line 108
        yield "
";
        // line 109
        yield from $this->unwrap()->yieldBlock('form_disabling_switch', $context, $blocks);
        // line 119
        yield "
";
        // line 120
        yield from $this->unwrap()->yieldBlock('widget_type_class', $context, $blocks);
        // line 139
        yield "
";
        // line 142
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 188
        yield "
";
        // line 189
        yield from $this->unwrap()->yieldBlock('textarea_widget', $context, $blocks);
        // line 195
        yield "
";
        // line 196
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 214
        yield "
";
        // line 215
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 223
        yield "
";
        // line 224
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 238
        yield from $this->unwrap()->yieldBlock('url_widget', $context, $blocks);
        // line 244
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 262
        yield "
";
        // line 263
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 278
        yield from $this->unwrap()->yieldBlock('email_widget', $context, $blocks);
        // line 284
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 288
        yield "
";
        // line 289
        yield from $this->unwrap()->yieldBlock('icon_button_widget', $context, $blocks);
        // line 307
        yield "
";
        // line 308
        yield from $this->unwrap()->yieldBlock('choice_widget', $context, $blocks);
        // line 312
        yield "
";
        // line 313
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 317
        yield "
";
        // line 318
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 341
        yield "
";
        // line 342
        yield from $this->unwrap()->yieldBlock('choice_tree_widget', $context, $blocks);
        // line 352
        yield "
";
        // line 353
        yield from $this->unwrap()->yieldBlock('choice_tree_item_widget', $context, $blocks);
        // line 391
        yield "
";
        // line 392
        yield from $this->unwrap()->yieldBlock('translatefields_widget', $context, $blocks);
        // line 417
        yield "
";
        // line 418
        yield from $this->unwrap()->yieldBlock('translate_fields_widget', $context, $blocks);
        // line 424
        yield "
";
        // line 425
        yield from $this->unwrap()->yieldBlock('translate_text_widget', $context, $blocks);
        // line 461
        yield "
";
        // line 462
        yield from $this->unwrap()->yieldBlock('translate_textarea_widget', $context, $blocks);
        // line 503
        yield "
";
        // line 504
        yield from $this->unwrap()->yieldBlock('date_picker_widget', $context, $blocks);
        // line 518
        yield "
";
        // line 519
        yield from $this->unwrap()->yieldBlock('date_range_widget', $context, $blocks);
        // line 535
        yield "
";
        // line 536
        yield from $this->unwrap()->yieldBlock('search_and_reset_widget', $context, $blocks);
        // line 561
        yield "
";
        // line 562
        yield from $this->unwrap()->yieldBlock('switch_widget', $context, $blocks);
        // line 586
        yield from $this->unwrap()->yieldBlock('row_attributes', $context, $blocks);
        // line 594
        yield from $this->unwrap()->yieldBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 623
        yield "
";
        // line 625
        yield "
";
        // line 626
        yield from $this->unwrap()->yieldBlock('choice_label', $context, $blocks);
        // line 631
        yield "
";
        // line 632
        yield from $this->unwrap()->yieldBlock('checkbox_label', $context, $blocks);
        // line 635
        yield "
";
        // line 636
        yield from $this->unwrap()->yieldBlock('radio_label', $context, $blocks);
        // line 639
        yield "
";
        // line 640
        yield from $this->unwrap()->yieldBlock('checkbox_radio_label', $context, $blocks);
        // line 672
        yield "
";
        // line 673
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 687
        yield "
";
        // line 688
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 695
        yield "
";
        // line 697
        yield "
";
        // line 698
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 705
        yield "
";
        // line 706
        yield from $this->unwrap()->yieldBlock('form_errors_field', $context, $blocks);
        // line 762
        yield "
";
        // line 763
        yield from $this->unwrap()->yieldBlock('form_errors_other', $context, $blocks);
        // line 778
        yield "
";
        // line 780
        yield "
";
        // line 781
        yield from $this->unwrap()->yieldBlock('material_choice_table_widget', $context, $blocks);
        // line 818
        yield "
";
        // line 819
        yield from $this->unwrap()->yieldBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 871
        yield "
";
        // line 873
        yield from $this->unwrap()->yieldBlock('translatable_fields_with_tabs', $context, $blocks);
        // line 896
        yield "
";
        // line 897
        yield from $this->unwrap()->yieldBlock('translatable_fields_with_dropdown', $context, $blocks);
        // line 933
        yield "
";
        // line 934
        yield from $this->unwrap()->yieldBlock('translatable_widget', $context, $blocks);
        // line 942
        yield "
";
        // line 943
        yield from $this->unwrap()->yieldBlock('birthday_widget', $context, $blocks);
        // line 967
        yield "
";
        // line 968
        yield from $this->unwrap()->yieldBlock('file_widget', $context, $blocks);
        // line 1000
        yield "
";
        // line 1001
        yield from $this->unwrap()->yieldBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 1017
        yield "
";
        // line 1018
        yield from $this->unwrap()->yieldBlock('generatable_text_widget', $context, $blocks);
        // line 1037
        yield "
";
        // line 1038
        yield from $this->unwrap()->yieldBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 1063
        yield "
";
        // line 1064
        yield from $this->unwrap()->yieldBlock('text_with_length_counter_widget', $context, $blocks);
        // line 1092
        yield "
";
        // line 1093
        yield from $this->unwrap()->yieldBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 1097
        yield "
";
        // line 1098
        yield from $this->unwrap()->yieldBlock('number_min_max_filter_widget', $context, $blocks);
        // line 1103
        yield from $this->unwrap()->yieldBlock('number_widget', $context, $blocks);
        // line 1113
        yield from $this->unwrap()->yieldBlock('integer_widget', $context, $blocks);
        // line 1123
        yield from $this->unwrap()->yieldBlock('form_unit', $context, $blocks);
        // line 1130
        yield "
";
        // line 1131
        yield from $this->unwrap()->yieldBlock('form_unit_prepend', $context, $blocks);
        // line 1138
        yield "
";
        // line 1139
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        // line 1148
        yield "
";
        // line 1149
        yield from $this->unwrap()->yieldBlock('form_prepend_external_link', $context, $blocks);
        // line 1154
        yield "
";
        // line 1155
        yield from $this->unwrap()->yieldBlock('form_append_external_link', $context, $blocks);
        // line 1160
        yield "
";
        // line 1161
        yield from $this->unwrap()->yieldBlock('form_external_link', $context, $blocks);
        // line 1179
        yield from $this->unwrap()->yieldBlock('form_external_link_attributes', $context, $blocks);
        // line 1193
        yield from $this->unwrap()->yieldBlock('custom_content_widget', $context, $blocks);
        // line 1196
        yield "
";
        // line 1197
        yield from $this->unwrap()->yieldBlock('text_widget', $context, $blocks);
        // line 1214
        yield from $this->unwrap()->yieldBlock('form_prepend_alert', $context, $blocks);
        // line 1220
        yield from $this->unwrap()->yieldBlock('form_append_alert', $context, $blocks);
        // line 1226
        yield from $this->unwrap()->yieldBlock('form_alert', $context, $blocks);
        // line 1267
        yield from $this->unwrap()->yieldBlock('unavailable_widget', $context, $blocks);
        // line 1274
        yield "
";
        // line 1275
        yield from $this->unwrap()->yieldBlock('text_preview_widget', $context, $blocks);
        // line 1305
        yield "
";
        // line 1306
        yield from $this->unwrap()->yieldBlock('link_preview_widget', $context, $blocks);
        // line 1313
        yield "
";
        // line 1314
        yield from $this->unwrap()->yieldBlock('image_preview_widget', $context, $blocks);
        // line 1323
        yield "
";
        // line 1324
        yield from $this->unwrap()->yieldBlock('delta_quantity_widget', $context, $blocks);
        // line 1337
        yield "
";
        // line 1338
        yield from $this->unwrap()->yieldBlock('delta_quantity_quantity_widget', $context, $blocks);
        // line 1350
        yield "
";
        // line 1351
        yield from $this->unwrap()->yieldBlock('delta_quantity_delta_row', $context, $blocks);
        // line 1367
        yield "
";
        // line 1368
        yield from $this->unwrap()->yieldBlock('delta_quantity_delta_widget', $context, $blocks);
        // line 1373
        yield "
";
        // line 1374
        yield from $this->unwrap()->yieldBlock('submittable_input_widget', $context, $blocks);
        // line 1387
        yield "
";
        // line 1388
        yield from $this->unwrap()->yieldBlock('submittable_input_button_widget', $context, $blocks);
        // line 1393
        yield "
";
        // line 1394
        yield from $this->unwrap()->yieldBlock('submittable_delta_quantity_delta_widget', $context, $blocks);
        // line 1408
        yield from $this->unwrap()->yieldBlock('navigation_tab_widget', $context, $blocks);
        // line 1466
        yield from $this->unwrap()->yieldBlock('toggle_children_choice_widget', $context, $blocks);
        // line 1500
        yield from $this->unwrap()->yieldBlock('accordion_widget', $context, $blocks);
        // line 1546
        yield from $this->unwrap()->yieldBlock('button_collection_widget', $context, $blocks);
        // line 1593
        yield from $this->unwrap()->yieldBlock('card_row', $context, $blocks);
        // line 1612
        yield "
";
        // line 1613
        yield from $this->unwrap()->yieldBlock('avatar_url_row', $context, $blocks);
        // line 1623
        yield "
";
        // line 1624
        yield from $this->unwrap()->yieldBlock('change_password_row', $context, $blocks);
        // line 1664
        yield from $this->unwrap()->yieldBlock('price_reduction_widget', $context, $blocks);
        // line 1678
        yield from $this->unwrap()->yieldBlock('image_with_preview_widget', $context, $blocks);
        // line 1718
        yield "
";
        // line 1719
        yield from $this->unwrap()->yieldBlock('tagged_item_collection_widget', $context, $blocks);
        // line 1726
        yield "
";
        // line 1727
        yield from $this->unwrap()->yieldBlock('tagged_item_collection_entry_row', $context, $blocks);
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-alerts-success" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 38), "alerts", [], "any", false, true, false, 38), "success", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 38), "alerts", [], "any", false, false, false, 38), "success", [], "any", false, false, false, 38), [])) : ([])))]);
        // line 39
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-alerts-info" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 39), "alerts", [], "any", false, true, false, 39), "info", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 39), "alerts", [], "any", false, false, false, 39), "info", [], "any", false, false, false, 39), [])) : ([])))]);
        // line 40
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-alerts-warning" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 40), "alerts", [], "any", false, true, false, 40), "warning", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 40), "alerts", [], "any", false, false, false, 40), "warning", [], "any", false, false, false, 40), [])) : ([])))]);
        // line 41
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-alerts-error" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 41), "alerts", [], "any", false, true, false, 41), "error", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 41), "alerts", [], "any", false, false, false, 41), "error", [], "any", false, false, false, 41), [])) : ([])))]);
        // line 42
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-form-submitted" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 42), "submitted", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0))]);
        // line 43
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-form-valid" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 43), "valid", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0))]);
        // line 44
        yield "  ";
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        if (array_key_exists("columns_number", $context)) {
            // line 49
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 49), "")) : ("")) . " form-columns-") . ($context["columns_number"] ?? null)))]);
            // line 50
            yield "  ";
        }
        // line 51
        yield "  ";
        yield from $this->yieldParentBlock("form_widget", $context, $blocks);
        // line 52
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 57
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", ["attr" => ($context["attr"] ?? null)]);
        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ip_address_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 61
        yield "  <div class=\"input-group\">";
        // line 62
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 63
        yield "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentIp"] ?? null), "html", null, true);
        yield "\">
      <i class=\"material-icons\">add_circle</i> ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        yield "
    </button>
  </div>
  ";
        // line 67
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_password_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 71
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "password")) : ("password"));
        // line 72
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 73
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 79
        yield "<div class=\"form-group";
        yield from         $this->unwrap()->yieldBlock("widget_type_class", $context, $blocks);
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            yield " has-error";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 79)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 79), "html", null, true);
        }
        yield "\">";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 81
        yield from         $this->unwrap()->yieldBlock("form_prepend_alert", $context, $blocks);
        // line 82
        yield from         $this->unwrap()->yieldBlock("form_prepend_external_link", $context, $blocks);
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 86
        yield from         $this->unwrap()->yieldBlock("form_modify_all_shops", $context, $blocks);
        // line 88
        yield from         $this->unwrap()->yieldBlock("form_append_alert", $context, $blocks);
        // line 89
        yield from         $this->unwrap()->yieldBlock("form_append_external_link", $context, $blocks);
        // line 90
        yield "</div>

  ";
        // line 92
        if ((($tmp = ($context["column_breaker"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "  <div class=\"form-group form-column-breaker\"></div>
  ";
        }
        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_modify_all_shops(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 102
        yield "  ";
        $context["overrideCheckboxName"] = (($context["modify_all_shops_prefix"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 102), "name", [], "any", false, false, false, 102));
        // line 103
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 103), ($context["overrideCheckboxName"] ?? null), [], "any", true, true, false, 103)) {
            // line 104
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 104), ($context["overrideCheckboxName"] ?? null), [], "any", false, false, false, 104), 'errors');
            yield "
    ";
            // line 105
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 105), ($context["overrideCheckboxName"] ?? null), [], "any", false, false, false, 105), 'widget');
            yield "
  ";
        }
        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_disabling_switch(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 110
        yield "  ";
        $context["disablingSwitchName"] = (($context["disabling_switch_prefix"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 110), "name", [], "any", false, false, false, 110));
        // line 111
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 111), ($context["disablingSwitchName"] ?? null), [], "any", true, true, false, 111)) {
            // line 112
            yield "    <div class=\"d-inline-flex align-items-center ml-3\">
      ";
            // line 113
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 113), ($context["disablingSwitchName"] ?? null), [], "any", false, false, false, 113), 'errors');
            yield "
      ";
            // line 114
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 114), ($context["disablingSwitchName"] ?? null), [], "any", false, false, false, 114), 'widget');
            yield "
      ";
            // line 115
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 115), ($context["disablingSwitchName"] ?? null), [], "any", false, false, false, 115), 'label');
            yield "
    </div>
  ";
        }
        yield from [];
    }

    // line 120
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_type_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 121
        if (( !((array_key_exists("compound", $context)) ? (Twig\Extension\CoreExtension::default(($context["compound"] ?? null), false)) : (false)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 121), "block_prefixes", [], "any", false, false, false, 121)) > 2))) {
            // line 122
            yield " ";
            $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 123
                yield "
    ";
                // line 124
                $context["index"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 124), "block_prefixes", [], "any", false, false, false, 124)) - 2);
                // line 125
                yield "    ";
                $context["widgetType"] = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 125), "block_prefixes", [], "any", false, false, false, 125)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[(($_v2 = ($context["index"] ?? null)) instanceof \Stringable ? (string) $_v2 : $_v2)] ?? null) : null);
                // line 126
                yield "    ";
                if ((($context["widgetType"] ?? null) == "choice")) {
                    // line 127
                    yield "      ";
                    if ((($tmp =  !($context["expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 128
                        yield "        ";
                        $context["widgetType"] = "select";
                        // line 129
                        yield "      ";
                    } elseif ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 130
                        yield "        ";
                        $context["widgetType"] = "checboxes";
                        // line 131
                        yield "      ";
                    } else {
                        // line 132
                        yield "        ";
                        $context["widgetType"] = "radio";
                        // line 133
                        yield "      ";
                    }
                    // line 134
                    yield "    ";
                }
                // line 135
                yield "    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["widgetType"] ?? null), "html", null, true);
                yield "-widget
";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 122
            yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v0, "html", null, true));
        }
        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 143
        if ((($tmp =  !(($context["label"] ?? null) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            if ((($tmp =  !($context["compound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 145
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 147
            yield "    ";
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 148
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 148)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 148), "")) : ("")) . " required"))]);
            }
            // line 150
            yield "    ";
            if (Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) {
                // line 151
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 152
                    $context["label"] = Twig\Extension\CoreExtension::replace(($context["label_format"] ?? null), ["%name%" =>                     // line 153
($context["name"] ?? null), "%id%" =>                     // line 154
($context["id"] ?? null)]);
                } else {
                    // line 157
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 161
            $context["labelTag"] = ((array_key_exists("label_tag_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_tag_name"] ?? null), "label")) : ("label"));
            // line 162
            yield "    <";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["labelTag"] ?? null), "html", null, true);
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
            yield ">
    ";
            // line 163
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 164
                yield "      <span class=\"text-danger\">*</span>
    ";
            }
            // line 166
            yield "    ";
            yield (((($context["translation_domain"] ?? null) === false)) ? ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["label"] ?? null))) : ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["label"] ?? null))));
            yield "
    ";
            // line 167
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip", [], "array", true, true, false, 167)) {
                // line 168
                yield "      ";
                $context["placement"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip_placement", [], "array", true, true, false, 168)) ? ((($_v3 = ($context["label_attr"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["tooltip_placement"] ?? null) : null)) : ("top"));
                // line 169
                yield "      <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placement"] ?? null), "html", null, true);
                yield "\"
         title=\"";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = ($context["label_attr"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["tooltip"] ?? null) : null), "html", null, true);
                yield "\"></i>
    ";
            }
            // line 172
            yield "
    ";
            // line 173
            if ((array_key_exists("label_help_box", $context) || CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover", [], "array", true, true, false, 173))) {
                // line 174
                yield "      ";
                $context["content"] = ((array_key_exists("label_help_box", $context)) ? (($context["label_help_box"] ?? null)) : ((($_v5 = ($context["label_attr"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["popover"] ?? null) : null)));
                // line 175
                yield "      ";
                $context["placement"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover_placement", [], "array", true, true, false, 175)) ? ((($_v6 = ($context["label_attr"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["popover_placement"] ?? null) : null)) : ("top"));
                // line 176
                yield "      ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["placement" => ($context["placement"] ?? null), "content" => ($context["content"] ?? null)]);
                yield "
    ";
            }
            // line 179
            yield from             $this->unwrap()->yieldBlock("form_disabling_switch", $context, $blocks);
            // line 180
            yield "</";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["labelTag"] ?? null), "html", null, true);
            yield ">";
        }
        // line 182
        if ((array_key_exists("label_subtitle", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["label_subtitle"] ?? null)))) {
            // line 183
            yield "    <p class=\"subtitle\">";
            yield ($context["label_subtitle"] ?? null);
            yield "</p>
  ";
        }
        yield from [];
    }

    // line 189
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 190
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 190)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 190), "")) : ("")) . " form-control"))]);
        // line 191
        yield from $this->yieldParentBlock("textarea_widget", $context, $blocks);
        // line 192
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", ["attr" => ($context["attr"] ?? null)]);
        yield "
  ";
        // line 193
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 196
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_money_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 197
        yield "<div class=\"input-group money-type\">
    ";
        // line 198
        $context["prepend"] = ("{{" == Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["money_pattern"] ?? null), 0, 2));
        // line 199
        yield "    ";
        if ((($tmp =  !($context["prepend"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 200
            yield "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text\">";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 204
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 205
        if ((($tmp = ($context["prepend"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 206
            yield "      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 210
        yield "  </div>

  ";
        // line 212
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 215
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_percent_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 216
        yield "<div class=\"input-group\">";
        // line 217
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 218
        yield "<div class=\"input-group-append\">
      <span class=\"input-group-text\">%</span>
    </div>
  </div>";
        yield from [];
    }

    // line 224
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 225
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 226
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 228
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 228)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 228), "")) : ("")) . " form-inline"))]);
            // line 229
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 230
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 230), 'errors');
            // line 231
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 231), 'errors');
            // line 232
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 232), 'widget', ["datetime" => true]);
            // line 233
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 233), 'widget', ["datetime" => true]);
            // line 234
            yield "</div>";
        }
        yield from [];
    }

    // line 238
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_url_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 239
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "url")) : ("url"));
        // line 240
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 241
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 244
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 245
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 246
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 248
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 248)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 248), "")) : ("")) . " form-inline"))]);
            // line 249
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 250
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 252
            yield Twig\Extension\CoreExtension::replace(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 253
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 253), 'widget'), "{{ month }}" =>             // line 254
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 254), 'widget'), "{{ day }}" =>             // line 255
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 255), 'widget')]);
            // line 257
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 258
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 263
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 264
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 265
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 267
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 267)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 267), "")) : ("")) . " form-inline"))]);
            // line 268
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 269
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 271
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 271), 'widget');
            yield ":";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 271), 'widget');
            if ((($tmp = ($context["with_seconds"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ":";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 271), 'widget');
            }
            // line 272
            yield "    ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 273
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 278
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_email_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 279
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "email")) : ("email"));
        // line 280
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 281
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 284
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 285
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 285)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 285), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 286
        yield from $this->yieldParentBlock("button_widget", $context, $blocks);
        yield from [];
    }

    // line 289
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_icon_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 290
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 290)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 290), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 291
        yield "  ";
        if ((($context["button_type"] ?? null) == "link")) {
            // line 292
            yield "    ";
            $context["buttonTag"] = "a";
            // line 293
            yield "    ";
            // line 294
            yield "    ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 294)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 294), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 295
                yield "      ";
                $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 295) . " disabled"))]);
                // line 296
                yield "    ";
            }
            // line 297
            yield "  ";
        } else {
            // line 298
            yield "    ";
            $context["buttonTag"] = "button";
            // line 299
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["type" => "button"]);
            // line 300
            yield "  ";
        }
        // line 301
        yield "
  <";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonTag"] ?? null), "html", null, true);
        yield " ";
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">
    <i class=\"material-icons\">";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_icon"] ?? null), "html", null, true);
        yield "</i>
    <span class=\"btn-label\">";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
        yield "</span>
  </";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonTag"] ?? null), "html", null, true);
        yield ">";
        yield from [];
    }

    // line 308
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 309
        yield from $this->yieldParentBlock("choice_widget", $context, $blocks);
        // line 310
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 313
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 314
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 314)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 314), "")) : ("")) . " custom-select"))]);
        // line 315
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        yield from [];
    }

    // line 318
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 319
        if (CoreExtension::inFilter("-inline", ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 319)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 319), "")) : ("")))) {
            // line 320
            yield "<div class=\"control-group\">";
            // line 321
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 322
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 323
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 323)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 323), "")) : ("")), "translation_domain" =>                 // line 324
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 325
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 328
            yield "</div>";
        } else {
            // line 330
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 331
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 332
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 333
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 333)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 333), "")) : ("")), "translation_domain" =>                 // line 334
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 335
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            yield "</div>";
        }
        yield from [];
    }

    // line 342
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_tree_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 343
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield " class=\"category-tree-overflow\">
    <ul class=\"category-tree\">
      <li class=\"form-control-label text-right main-category\">";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</li>";
        // line 346
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
            // line 347
            yield "        ";
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
        // line 349
        yield "</ul>
  </div>";
        yield from [];
    }

    // line 353
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_tree_item_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 354
        yield "<li>
    ";
        // line 355
        $context["checked"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 355), "submitted_values", [], "any", true, true, false, 355) && CoreExtension::getAttribute($this->env, $this->source, ($context["submitted_values"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 355), [], "array", true, true, false, 355))) ? ("checked=\"checked\"") : (""));
        // line 356
        yield "    ";
        if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 357
            yield "<div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"";
            // line 359
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 359), "full_name", [], "any", false, false, false, 359), "html", null, true);
            yield "[tree][]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 359), "html", null, true);
            yield "\" class=\"category\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["checked"] ?? null), "html", null, true);
            yield ">
          ";
            // line 360
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", true, true, false, 360) && (CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", false, false, false, 360) == 0))) {
                // line 361
                yield "            <i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 361), "html", null, true);
                yield "</i>";
            } else {
                // line 363
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 363), "html", null, true);
                yield "
          ";
            }
            // line 365
            yield "          ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 366
                yield "            <input type=\"radio\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 366), "html", null, true);
                yield "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 368
            yield "        </label>
      </div>";
        } else {
            // line 371
            yield "<div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"form[";
            // line 373
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 373), "id", [], "any", false, false, false, 373), "html", null, true);
            yield "][tree]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 373), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["checked"] ?? null), "html", null, true);
            yield " class=\"category\">
          ";
            // line 374
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 374), "html", null, true);
            yield "
          ";
            // line 375
            if (array_key_exists("defaultCategory", $context)) {
                // line 376
                yield "            <input type=\"radio\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 376), "html", null, true);
                yield "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 378
            yield "        </label>
      </div>";
        }
        // line 381
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 381)) {
            // line 382
            yield "      <ul>
        ";
            // line 383
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", false, false, false, 383));
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
                // line 384
                yield "          ";
                $context["child"] = $context["item"];
                // line 385
                yield "          ";
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
            // line 387
            yield "</ul>
    ";
        }
        // line 389
        yield "  </li>";
        yield from [];
    }

    // line 392
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatefields_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 393
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
  <div class=\"translations tabbable\" id=\"";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 394), "id", [], "any", false, false, false, 394), "html", null, true);
        yield "\" tabindex=\"1\">
    ";
        // line 395
        if (((($context["hideTabs"] ?? null) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 1))) {
            // line 396
            yield "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 397
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 398
                yield "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 399
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 399), "label", [], "any", false, false, false, 399), "html", null, true);
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 399) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 399), "name", [], "any", false, false, false, 399))) {
                    yield "active";
                }
                yield " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 399), "id", [], "any", false, false, false, 399), "html", null, true);
                yield "\">
              ";
                // line 400
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 400), "label", [], "any", false, false, false, 400)), "html", null, true);
                yield "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            yield "      </ul>
    ";
        }
        // line 406
        yield "
    <div class=\"translationsFields tab-content\">
      ";
        // line 408
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 409
            yield "        <div data-locale=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 409), "label", [], "any", false, false, false, 409), "html", null, true);
            yield "\" class=\"translationsFields-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 409), "id", [], "any", false, false, false, 409), "html", null, true);
            yield " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? null) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 1))) {
                yield "panel panel-default";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 409) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 409), "name", [], "any", false, false, false, 409))) {
                yield "show active";
            }
            yield " ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 409), "valid", [], "any", false, false, false, 409)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "field-error";
            }
            yield " translation-label-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 409), "label", [], "any", false, false, false, 409), "html", null, true);
            yield "\">
          ";
            // line 410
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            yield "
          ";
            // line 411
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        yield "    </div>
  </div>
";
        yield from [];
    }

    // line 418
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_fields_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 419
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 420
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 420)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 420), "")) : ("")) . " form-control"))]);
        }
        // line 422
        yield from $this->yieldParentBlock("translate_fields_widget", $context, $blocks);
        yield from [];
    }

    // line 425
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 426
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 428
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
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 429
            yield "      ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 429), "attr", [], "any", false, true, false, 429), "class", [], "any", true, true, false, 429)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 429), "attr", [], "any", false, false, false, 429), "class", [], "any", false, false, false, 429), "")) : ("")) . " js-locale-input");
            // line 430
            yield "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 430), "label", [], "any", false, false, false, 430));
            // line 431
            yield "
      ";
            // line 432
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 432) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 432), "name", [], "any", false, false, false, 432))) {
                // line 433
                yield "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 434
                yield "      ";
            }
            // line 436
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(($context["classes"] ?? null))]);
            // line 437
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 439
        yield "
    ";
        // line 440
        if ((($tmp =  !($context["hide_locales"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 441
            yield "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 447
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 447), "id", [], "any", false, false, false, 447), "html", null, true);
            yield "\"
        >
          ";
            // line 449
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 449), "default_locale", [], "any", false, false, false, 449), "iso_code", [], "any", false, false, false, 449)), "html", null, true);
            yield "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 452
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 452), "id", [], "any", false, false, false, 452), "html", null, true);
            yield "\">
          ";
            // line 453
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 454
                yield "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 454), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 454), "html", null, true);
                yield "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 456
            yield "        </div>
      </div>
    ";
        }
        // line 459
        yield "  </div>";
        yield from [];
    }

    // line 462
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 463
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 465
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 466
            yield "      ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 466), "attr", [], "any", false, true, false, 466), "class", [], "any", true, true, false, 466)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 466), "attr", [], "any", false, false, false, 466), "class", [], "any", false, false, false, 466), "")) : ("")) . " js-locale-input");
            // line 467
            yield "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 467), "label", [], "any", false, false, false, 467));
            // line 468
            yield "
      ";
            // line 469
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 469) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 469), "name", [], "any", false, false, false, 469))) {
                // line 470
                yield "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 471
                yield "      ";
            }
            // line 472
            yield "
      <div class=\"";
            // line 473
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 474
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => Twig\Extension\CoreExtension::trim(($context["classes"] ?? null))]]);
            yield "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['textarea'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 477
        yield "
    ";
        // line 478
        if ((($tmp = ($context["show_locale_select"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 479
            yield "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 485
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 485), "id", [], "any", false, false, false, 485), "html", null, true);
            yield "\"
        >
          ";
            // line 487
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 487), "default_locale", [], "any", false, false, false, 487), "iso_code", [], "any", false, false, false, 487)), "html", null, true);
            yield "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 490
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 490), "id", [], "any", false, false, false, 490), "html", null, true);
            yield "\">
          ";
            // line 491
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 492
                yield "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 493
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 493), "html", null, true);
                yield "\"
            >
              ";
                // line 495
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 495), "html", null, true);
                yield "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 498
            yield "        </div>
      </div>
    ";
        }
        // line 501
        yield "  </div>";
        yield from [];
    }

    // line 504
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_picker_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 505
        yield "  ";
        $_v7 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 506
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 506)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 506), "")) : ("")) . " form-control datepicker"))]);
            // line 507
            yield "    <div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"";
            // line 508
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
            // line 515
            yield from             $this->unwrap()->yieldBlock("form_help", $context, $blocks);
            yield "
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 505
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v7, "html", null, true));
        yield from [];
    }

    // line 519
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_range_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 520
        yield "  ";
        $_v8 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 521
            yield "    <div class=\"input-group date-range row\">
      <div class=\"col col-md-4\">
        ";
            // line 523
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "from", [], "any", false, false, false, 523), 'row');
            yield "
      </div>
      <div class=\"col col-md-4\">
        ";
            // line 526
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "to", [], "any", false, false, false, 526), 'row');
            yield "
        ";
            // line 527
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", true, true, false, 527)) {
                // line 528
                yield "          ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", false, false, false, 528), 'widget');
                yield "
          ";
                // line 529
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", false, false, false, 529), 'errors');
                yield "
        ";
            }
            // line 531
            yield "      </div>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 520
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v8, "html", null, true));
        yield from [];
    }

    // line 536
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_and_reset_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 537
        yield "  ";
        $_v9 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 538
            yield "    <button type=\"submit\"
            class=\"btn btn-primary grid-search-button\"
            title=\"";
            // line 540
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
            yield "\"
            name=\"";
            // line 541
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
            yield "[search]\"
    >
      <i class=\"material-icons\">search</i>
      ";
            // line 544
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
            yield "
    </button>
    ";
            // line 546
            if ((($tmp = ($context["show_reset_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 547
                yield "      <div class=\"js-grid-reset-button\">
        <button type=\"reset\"
                name=\"";
                // line 549
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
                yield "[reset]\"
                class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                data-url=\"";
                // line 551
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reset_url"] ?? null), "html", null, true);
                yield "\"
                data-redirect=\"";
                // line 552
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["redirect_url"] ?? null), "html", null, true);
                yield "\"
        >
          <i class=\"material-icons\">clear</i>
          ";
                // line 555
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
                yield "
        </button>
      </div>
    ";
            }
            // line 559
            yield "  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 537
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v9, "html", null, true));
        yield from [];
    }

    // line 562
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_switch_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 563
        yield "  ";
        $_v10 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 564
            yield "  ";
            $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_attr"] ?? null), [])) : ([]));
            // line 565
            yield "  <div class=\"input-group ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", true, true, false, 565)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", false, false, false, 565), "")) : ("")), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rowAttributes"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
                yield " ";
                if (($context["key"] != "class")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rowAttr"], "html", null, true);
                    yield "\"";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['rowAttr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
    <span class=\"ps-switch\" id=\"";
            // line 566
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 566), "id", [], "any", false, false, false, 566), "html", null, true);
            yield "\">
        ";
            // line 567
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
                // line 568
                yield "          ";
                $context["inputId"] = ((($context["id"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 568));
                // line 569
                yield "          <input id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inputId"] ?? null), "html", null, true);
                yield "\"
            ";
                // line 570
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                yield "
            name=\"";
                // line 571
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
                yield "\"
            value=\"";
                // line 572
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 572), "html", null, true);
                yield "\"
            ";
                // line 573
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                    yield "checked=\"\"";
                }
                // line 574
                yield "            ";
                if ((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "disabled=\"\"";
                }
                // line 575
                yield "            type=\"radio\"
          >
          ";
                // line 577
                if ((($tmp = ($context["show_choices"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<label for=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inputId"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 577), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
                    yield "</label>";
                }
                // line 578
                yield "        ";
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
            // line 579
            yield "        <span class=\"slide-button\"></span>
    </span>
  </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 563
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v10, "html", null, true));
        // line 583
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 586
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_row_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 587
        $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_attr"] ?? null), [])) : ([]));
        // line 588
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rowAttributes"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 589
            yield " ";
            // line 590
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 594
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__form_step6_attachments_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 595
        yield "  <div class=\"js-options-no-attachments ";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        yield "\">
    <small>";
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        yield "</small>
  </div>
  <div id=\"product-attachments\" class=\"panel panel-default\">
    <div class=\"panel-body js-options-with-attachments ";
        // line 599
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        yield "\">
      <div>
        <table id=\"product-attachment-file\" class=\"table\">
          <thead class=\"thead-default\">
          <tr>
            <th class=\"col-md-3\">";
        // line 604
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title", [], "Admin.Global"), "html", null, true);
        yield "</th>
            <th class=\"col-md-6\">";
        // line 605
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File name", [], "Admin.Global"), "html", null, true);
        yield "</th>
            <th class=\"col-md-2\">";
        // line 606
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
          </tr>
          </thead>
          <tbody>";
        // line 610
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
            // line 611
            yield "            <tr>
              <td class=\"col-md-3\">";
            // line 612
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "</td>
              <td class=\"col-md-6 file-name\"><span>";
            // line 613
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v11 = (($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 613), "attr", [], "any", false, false, false, 613), "data", [], "any", false, false, false, 613)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[(($_v13 = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 613)) instanceof \Stringable ? (string) $_v13 : $_v13)] ?? null) : null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["file_name"] ?? null) : null), "html", null, true);
            yield "</span></td>
              <td class=\"col-md-2\">";
            // line 614
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v14 = (($_v15 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 614), "attr", [], "any", false, false, false, 614), "data", [], "any", false, false, false, 614)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[(($_v16 = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 614)) instanceof \Stringable ? (string) $_v16 : $_v16)] ?? null) : null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["mime"] ?? null) : null), "html", null, true);
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
        // line 617
        yield "</tbody>
        </table>
      </div>
    </div>
  </div>
";
        yield from [];
    }

    // line 626
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 628
        $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 628)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 628), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 629
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        yield from [];
    }

    // line 632
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 633
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        yield from [];
    }

    // line 636
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 637
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        yield from [];
    }

    // line 640
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 641
        yield "  ";
        // line 642
        yield "  ";
        if (array_key_exists("widget", $context)) {
            // line 643
            yield "    ";
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 644
                yield "      ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 644)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 644), "")) : ("")) . " required"))]);
                // line 645
                yield "    ";
            }
            // line 646
            yield "    ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 647
                yield "      ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 647)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 647), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 648
                yield "    ";
            }
            // line 649
            yield "    ";
            if (( !(($context["label"] ?? null) === false) && Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null)))) {
                // line 650
                yield "      ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 651
                yield "    ";
            }
            // line 652
            yield "
    ";
            // line 653
            if (((($_v17 = ($context["block_prefixes"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[2] ?? null) : null) == "radio")) {
                // line 654
                yield "      <label class=\"form-check-label\"";
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
                // line 655
                yield ($context["widget"] ?? null);
                // line 657
                yield "<i class=\"form-check-round\"></i>";
                // line 659
                yield (((($tmp =  !(($context["label"] ?? null) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($context["translation_domain"] ?? null) === false)) ? ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["label"] ?? null))) : ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["label"] ?? null))))) : (""));
                // line 660
                yield "</label>
    ";
            } else {
                // line 662
                yield "      <div class=\"md-checkbox md-checkbox-inline\">
        <label";
                // line 663
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
                // line 664
                yield ($context["widget"] ?? null);
                // line 665
                yield "<i class=\"md-checkbox-control\"></i>";
                // line 666
                yield (((($tmp =  !(($context["label"] ?? null) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($context["translation_domain"] ?? null) === false)) ? ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["label"] ?? null))) : ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["label"] ?? null))))) : (""));
                // line 667
                yield "</label>
      </div>
    ";
            }
            // line 670
            yield "  ";
        }
        yield from [];
    }

    // line 673
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 674
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 674)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 674), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 674)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 674), "")) : (""))));
        // line 675
        if (CoreExtension::inFilter("radio-custom", ($context["parent_label_class"] ?? null))) {
            // line 676
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 676)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 676), "")) : ("")) . " custom-control-input"))]);
            // line 677
            yield "<div class=\"custom-control custom-radio";
            yield ((CoreExtension::inFilter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            yield "\">";
            // line 678
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>             $this->unwrap()->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 679
            yield "</div>";
        } else {
            // line 681
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 681)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 681), "")) : ("")) . " form-check-input"))]);
            // line 682
            yield "<div class=\"form-check form-check-radio form-radio";
            yield ((CoreExtension::inFilter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 682), "valid", [], "any", false, false, false, 682) != true)) {
                yield " has-error";
            }
            yield "\">";
            // line 683
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>             $this->unwrap()->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 684
            yield "</div>";
        }
        yield from [];
    }

    // line 688
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 689
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 689)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 689), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 689)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 689), "")) : (""))));
        // line 690
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 690)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 690), "")) : ("")) . " form-check-input"))]);
        // line 691
        yield "<div class=\"form-check form-check-radio form-checkbox";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "container_class", [], "any", true, true, false, 691)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "container_class", [], "any", false, false, false, 691), "html", null, true);
        }
        yield "\">";
        // line 692
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>         $this->unwrap()->renderBlock("base_checkbox_widget", $context, $blocks)]);
        // line 693
        yield "</div>";
        yield from [];
    }

    // line 698
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 699
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "fieldError", [], "array", true, true, false, 699) && ((($_v18 = ($context["attr"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["fieldError"] ?? null) : null) == true))) {
            // line 700
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("form_errors_field", $context, $blocks);
            yield "
  ";
        } else {
            // line 702
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("form_errors_other", $context, $blocks);
            yield "
  ";
        }
        yield from [];
    }

    // line 706
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 707
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 709
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 1)) {
                // line 711
                $context["popoverContainer"] = ("popover-error-container-" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 711), "id", [], "any", false, false, false, 711));
                // line 712
                yield "      <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["popoverContainer"] ?? null), "html", null, true);
                yield "\"></div>

      ";
                // line 714
                $context["popoverErrorContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 715
                    yield "        <div class=\"popover-error-list\">
          <ul>";
                    // line 717
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 718
                        yield "<li class=\"text-danger\"> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 718), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 718), "form_error"), "html", null, true);
                        yield "
              </li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 721
                    yield "          </ul>
        </div>
      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 724
                yield "
      <template class=\"js-popover-error-content\" data-id=\"";
                // line 725
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 725), "id", [], "any", false, false, false, 725), "html", null, true);
                yield "\">
        ";
                // line 726
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["popoverErrorContent"] ?? null), "html", null, true);
                yield "
      </template>

      ";
                // line 729
                $context["errorPopover"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 730
                    yield "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                    // line 732
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 732), "id", [], "any", false, false, false, 732), "html", null, true);
                    yield "\"
          data-placement=\"bottom\"
          data-template=\x27<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>\x27
          data-trigger=\"hover\"
          data-container=\".";
                    // line 736
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["popoverContainer"] ?? null), "html", null, true);
                    yield "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u> ";
                    // line 738
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% errors", ["%count%" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null))], "Admin.Global"), "html", null, true);
                    yield "</u>
        </span>
      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 741
                yield "
      <div class=\"invalid-feedback-container\">
        <div class=\"text-danger\">
          ";
                // line 744
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["errorPopover"] ?? null), "html", null, true);
                yield "
        </div>
      </div>

      ";
            } else {
                // line 750
                yield "<div class=\"d-inline-block align-baseline text-danger mt-1\" role=\"alert\">
        <i class=\"material-icons form-error-icon\">error_outline</i>

        ";
                // line 753
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 754
                    yield "          <span>
            ";
                    // line 755
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 755), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 755), "form_error"), "html", null, true);
                    yield "
          </span>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 758
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 763
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors_other(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 764
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 765
            yield "<div class=\"alert alert-danger d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <div class=\"alert-text\">
        ";
            // line 770
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 771
                yield "            <p> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 771), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 771), "form_error"), "html", null, true);
                yield "
            </p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 774
            yield "</div>
    </div>
  ";
        }
        yield from [];
    }

    // line 781
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_table_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 782
        yield "  ";
        $_v19 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 783
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
            // line 793
            if ((($tmp = ($context["isCheckSelectAll"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 794
                yield "                    checked
                  ";
            }
            // line 796
            yield "                >
                <i class=\"md-checkbox-control\"></i>
                ";
            // line 798
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all", [], "Admin.Actions"), "html", null, true);
            yield " ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 798), "displayTotalItems", [], "any", false, false, false, 798)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)), "html", null, true);
                yield ") ";
            }
            // line 799
            yield "              </label>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 805
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 806
                yield "          <tr>
            <td>
              ";
                // line 808
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
                yield "
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 812
            yield "        </tbody>
      </table>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 782
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v19, "html", null, true));
        // line 816
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 819
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_multiple_choice_table_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 820
        yield "  ";
        $_v20 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 821
            yield "    <div class=\"choice-table";
            if ((($tmp = ($context["headers_fixed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "-headers-fixed";
            }
            yield " table-responsive\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>";
            // line 825
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_label"] ?? null), "html", null, true);
            yield "</th>
          ";
            // line 826
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
                // line 827
                yield "            <th class=\"text-center\">
              ";
                // line 828
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 828), "multiple", [], "any", false, false, false, 828) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 828), "name", [], "any", false, false, false, 828), ($context["headers_to_disable"] ?? null)))) {
                    // line 829
                    yield "                <a href=\"#\"
                   class=\"js-multiple-choice-table-select-column\"
                   data-column-num=\"";
                    // line 831
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 831) + 1), "html", null, true);
                    yield "\"
                   data-column-checked=\"false\"
                >
                  ";
                    // line 834
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 834), "label", [], "any", false, false, false, 834), "html", null, true);
                    yield "
                </a>
              ";
                } else {
                    // line 837
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 837), "label", [], "any", false, false, false, 837), "html", null, true);
                    yield "
              ";
                }
                // line 839
                yield "            </th>
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
            // line 841
            yield "        </tr>
        </thead>
        <tbody>
        ";
            // line 844
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["choices"] ?? null));
            foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
                // line 845
                yield "          <tr>
            <td>
              ";
                // line 847
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choice_name"], "html", null, true);
                yield "
            </td>
            ";
                // line 849
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
                foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                    // line 850
                    yield "              <td class=\"text-center\">
                ";
                    // line 851
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true, false, 851), $context["child_choice_name"], [], "array", true, true, false, 851)) {
                        // line 852
                        yield "                  ";
                        $context["entry_index"] = (($_v21 = (($_v22 = ($context["child_choice_entry_index_mapping"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[(($_v23 = $context["choice_value"]) instanceof \Stringable ? (string) $_v23 : $_v23)] ?? null) : null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[(($_v24 = $context["child_choice_name"]) instanceof \Stringable ? (string) $_v24 : $_v24)] ?? null) : null);
                        // line 853
                        yield "
                  ";
                        // line 854
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 854), "multiple", [], "any", false, false, false, 854)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 855
                            yield "                    ";
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v25 = $context["child_choice"]) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[(($_v26 = ($context["entry_index"] ?? null)) instanceof \Stringable ? (string) $_v26 : $_v26)] ?? null) : null), 'widget', ["material_design" => true]);
                            yield "
                  ";
                        } else {
                            // line 857
                            yield "                    ";
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v27 = $context["child_choice"]) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[(($_v28 = ($context["entry_index"] ?? null)) instanceof \Stringable ? (string) $_v28 : $_v28)] ?? null) : null), 'widget');
                            yield "
                  ";
                        }
                        // line 859
                        yield "                ";
                    } else {
                        // line 860
                        yield "                  --
                ";
                    }
                    // line 862
                    yield "              </td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['child_choice_name'], $context['child_choice'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 864
                yield "          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['choice_name'], $context['choice_value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 866
            yield "        </tbody>
      </table>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 820
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v20, "html", null, true));
        yield from [];
    }

    // line 873
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_fields_with_tabs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 874
        yield "  <div class=\"translations tabbable\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 874), "id", [], "any", false, false, false, 874), "html", null, true);
        yield "\" tabindex=\"1\">
    ";
        // line 875
        if (((($context["hide_locales"] ?? null) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 1))) {
            // line 876
            yield "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 877
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 878
                yield "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 879
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 879), "label", [], "any", false, false, false, 879), "html", null, true);
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 879) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 879), "name", [], "any", false, false, false, 879))) {
                    yield "active";
                }
                yield " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 879), "id", [], "any", false, false, false, 879), "html", null, true);
                yield "\">
              ";
                // line 880
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 880), "label", [], "any", false, false, false, 880)), "html", null, true);
                yield "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 884
            yield "      </ul>
    ";
        }
        // line 886
        yield "
    <div class=\"translationsFields tab-content\">
      ";
        // line 888
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 889
            yield "        <div data-locale=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 889), "label", [], "any", false, false, false, 889), "html", null, true);
            yield "\" class=\"translationsFields-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 889), "id", [], "any", false, false, false, 889), "html", null, true);
            yield " tab-pane translation-field ";
            if (((($context["hide_locales"] ?? null) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 1))) {
                yield "panel panel-default";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 889) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 889), "name", [], "any", false, false, false, 889))) {
                yield "show active";
            }
            yield " ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 889), "valid", [], "any", false, false, false, 889)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "field-error";
            }
            yield " translation-label-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 889), "label", [], "any", false, false, false, 889), "html", null, true);
            yield "\">
          ";
            // line 890
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 893
        yield "    </div>
  </div>
";
        yield from [];
    }

    // line 897
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_fields_with_dropdown(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 898
        $context["formClass"] = Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 898), "attr", [], "any", false, true, false, 898), "class", [], "any", true, true, false, 898)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 898), "attr", [], "any", false, false, false, 898), "class", [], "any", false, false, false, 898), "")) : ("")) . " input-group locale-input-group js-locale-input-group d-flex"));
        // line 899
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formClass"] ?? null), "html", null, true);
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 899), "id", [], "any", false, false, false, 899), "html", null, true);
        yield "\" tabindex=\"1\">
      ";
        // line 900
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 901
            yield "        ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 901), "attr", [], "any", false, true, false, 901), "class", [], "any", true, true, false, 901)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 901), "attr", [], "any", false, false, false, 901), "class", [], "any", false, false, false, 901), "")) : ("")) . " js-locale-input");
            // line 902
            yield "        ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 902), "label", [], "any", false, false, false, 902));
            // line 903
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 903) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 903), "name", [], "any", false, false, false, 903))) {
                // line 904
                yield "          ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 905
                yield "        ";
            }
            // line 906
            yield "        <div data-lang-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 906), "name", [], "any", false, false, false, 906), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
            yield "\" style=\"flex-grow: 1;\">
          ";
            // line 907
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translateField'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 910
        yield "      ";
        if ((($tmp =  !($context["hide_locales"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 911
            yield "        <div class=\"dropdown\">
          <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
            ";
            // line 915
            if (array_key_exists("change_form_language_url", $context)) {
                // line 916
                yield "              data-change-language-url=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 916), "change_form_language_url", [], "any", false, false, false, 916), "html", null, true);
                yield "\"
            ";
            }
            // line 918
            yield "                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                  id=\"";
            // line 920
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 920), "id", [], "any", false, false, false, 920), "html", null, true);
            yield "_dropdown\"
          >
            ";
            // line 922
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 922), "default_locale", [], "any", false, false, false, 922), "iso_code", [], "any", false, false, false, 922)), "html", null, true);
            yield "
          </button>
          <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 924
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 924), "id", [], "any", false, false, false, 924), "html", null, true);
            yield "_dropdown\">
            ";
            // line 925
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 926
                yield "              <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 926), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 926), "html", null, true);
                yield "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 928
            yield "          </div>
        </div>
      ";
        }
        // line 931
        yield "    </div>";
        yield from [];
    }

    // line 934
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 935
        if ((($tmp = ($context["use_tabs"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 936
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("translatable_fields_with_tabs", $context, $blocks);
            yield "
  ";
        } else {
            // line 938
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("translatable_fields_with_dropdown", $context, $blocks);
            yield "
  ";
        }
        // line 940
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 943
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_birthday_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 944
        yield "  ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 945
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 947
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 947)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 947), "")) : ("")) . " form-inline"))]);
            // line 948
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 949
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 951
            yield "
    ";
            // line 952
            $context["yearWidget"] = (("<div class=\"col pl-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 952), 'widget')) . "</div>");
            // line 953
            yield "    ";
            $context["monthWidget"] = (("<div class=\"col birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 953), 'widget')) . "</div>");
            // line 954
            yield "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 954), 'widget')) . "</div>");
            // line 956
            yield Twig\Extension\CoreExtension::replace(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 957
($context["yearWidget"] ?? null), "{{ month }}" =>             // line 958
($context["monthWidget"] ?? null), "{{ day }}" =>             // line 959
($context["dayWidget"] ?? null)]);
            // line 962
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 963
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 968
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 969
        yield "  <style>
    .custom-file-label:after {
      content: \"";
        // line 971
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "Admin.Actions"), "html", null, true);
        yield "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 975
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 976
($context["attr"] ?? null), "class", [], "any", true, true, false, 976)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 976), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->extensions['PrestaShopBundle\Twig\ContextIsoCodeProviderExtension']->getIsoCode()]);
        // line 981
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 981) && CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 981))) {
            // line 982
            yield "      ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => (CoreExtension::getAttribute($this->env, $this->source,             // line 983
($context["attr"] ?? null), "class", [], "any", false, false, false, 983) . " disabled")]);
            // line 985
            yield "    ";
        }
        // line 986
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 988
        yield "<label class=\"custom-file-label\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 988), "id", [], "any", false, false, false, 988), "html", null, true);
        yield "\">
      ";
        // line 989
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 989), "attr", [], "any", false, false, false, 989);
        // line 990
        yield "      ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", true, true, false, 990)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", false, false, false, 990), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose file(s)", [], "Admin.Actions"), "html", null, true)));
        yield "
    </label>
  </div>";
        // line 993
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        // line 994
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 994), "download_url", [], "any", false, false, false, 994)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 995
            yield "    <a target=\"_blank\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 995), "download_url", [], "any", false, false, false, 995), "html", null, true);
            yield "\">
      ";
            // line 996
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download file", [], "Admin.Actions"), "html", null, true);
            yield "
    </a>
  ";
        }
        yield from [];
    }

    // line 1001
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_restriction_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1002
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1002), "attr", [], "any", false, false, false, 1002), "is_allowed_to_display", [], "any", false, false, false, 1002)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1003
            yield "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 1005
            $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "checkbox")) : ("checkbox"));
            // line 1006
            yield "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 1008
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield "\"
          ";
            // line 1009
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            yield "
          value=\"";
            // line 1010
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

    // line 1018
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_generatable_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1019
        yield "  <div class=\"input-group\">
    ";
        // line 1020
        if ((($tmp = ($context["compound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1021
            yield from             $this->unwrap()->yieldBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 1023
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        // line 1025
        yield "    <span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 1028
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\"
              data-generated-value-length=\"";
        // line 1029
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["generated_value_length"] ?? null), "html", null, true);
        yield "\"
      >
        ";
        // line 1031
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate", [], "Admin.Actions"), "html", null, true);
        yield "
      </button>
   </span>
  </div>
  ";
        // line 1035
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 1038
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_with_recommended_length_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1039
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-recommended-length-counter" => (("#" .         // line 1040
($context["id"] ?? null)) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 1044
        if ((($context["input_type"] ?? null) == "textarea")) {
            // line 1045
            yield from             $this->unwrap()->yieldBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1047
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        // line 1049
        yield "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 1051
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "_recommended_length_counter\"
  >
    <em>
      ";
        // line 1054
        yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 1055
($context["value"] ?? null))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 1057
($context["recommended_length"] ?? null)), "[/2]" => "</span>"]));
        // line 1059
        yield "
    </em>
  </small>
";
        yield from [];
    }

    // line 1064
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_with_length_counter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1065
        yield "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 1066
        $context["current_length"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1066), "max_length", [], "any", false, false, false, 1066) - Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null)));
        // line 1067
        yield "
    ";
        // line 1068
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1068), "position", [], "any", false, false, false, 1068) == "before")) {
            // line 1069
            yield "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1070
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_length"] ?? null), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 1073
        yield "
    ";
        // line 1074
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ($context["input_attr"] ?? null));
        // line 1075
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-max-length" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1075), "max_length", [], "any", false, false, false, 1075), "maxlength" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1075), "max_length", [], "any", false, false, false, 1075), "class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1075)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1075), "")) : ("")) . " js-countable-input"))]);
        // line 1077
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1077), "input", [], "any", false, false, false, 1077) == "input")) {
            // line 1078
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1079
($context["form"] ?? null), "vars", [], "any", false, false, false, 1079), "input", [], "any", false, false, false, 1079) == "textarea")) {
            // line 1080
            yield from             $this->unwrap()->yieldBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1082
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        }
        // line 1084
        yield "
    ";
        // line 1085
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1085), "position", [], "any", false, false, false, 1085) == "after")) {
            // line 1086
            yield "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1087
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_length"] ?? null), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 1090
        yield "  </div>
";
        yield from [];
    }

    // line 1093
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integer_min_max_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1094
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v29 = ($context["form"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        yield "
  ";
        // line 1095
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v30 = ($context["form"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        yield "
";
        yield from [];
    }

    // line 1098
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_number_min_max_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1099
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v31 = ($context["form"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        yield "
  ";
        // line 1100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v32 = ($context["form"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        yield "
";
        yield from [];
    }

    // line 1103
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_number_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1104
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "text")) : ("text"));
        // line 1105
        yield "<div class=\"input-group\">";
        // line 1106
        yield from         $this->unwrap()->yieldBlock("form_unit_prepend", $context, $blocks);
        // line 1107
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1108
        yield from         $this->unwrap()->yieldBlock("form_unit", $context, $blocks);
        // line 1109
        yield "</div>
  ";
        // line 1110
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 1113
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integer_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1114
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "number")) : ("number"));
        // line 1115
        yield "<div class=\"input-group\">";
        // line 1116
        yield from         $this->unwrap()->yieldBlock("form_unit_prepend", $context, $blocks);
        // line 1117
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1118
        yield from         $this->unwrap()->yieldBlock("form_unit", $context, $blocks);
        // line 1119
        yield "</div>
  ";
        // line 1120
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 1123
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_unit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1124
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1124), "unit", [], "any", true, true, false, 1124) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1124), "prepend_unit", [], "any", false, false, false, 1124))) {
            // line 1125
            yield "    <div class=\"input-group-append\">
      <span class=\"input-group-text\">";
            // line 1126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1126), "unit", [], "any", false, false, false, 1126), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        yield from [];
    }

    // line 1131
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_unit_prepend(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1132
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1132), "unit", [], "any", true, true, false, 1132) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1132), "prepend_unit", [], "any", false, false, false, 1132))) {
            // line 1133
            yield "    <div class=\"input-group-prepend\">
      <span class=\"input-group-text\">";
            // line 1134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1134), "unit", [], "any", false, false, false, 1134), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        yield from [];
    }

    // line 1139
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1140
        yield "  ";
        if ((($tmp =  !(null === ($context["help"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1141
            $context["help_attr"] = Twig\Extension\CoreExtension::merge(($context["help_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 1141)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 1141), "")) : ("")) . " form-text"))]);
            // line 1142
            yield "<small id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "_help\"";
            $_v33 = $context;
            $_v34 = ["attr" => ($context["help_attr"] ?? null)];
            if (!is_iterable($_v34)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 1142, $this->getSourceContext());
            }
            $_v34 = CoreExtension::toArray($_v34);
            $context = $_v34 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $_v33;
            yield ">";
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["help"] ?? null));
            yield "</small>
  ";
        }
        // line 1144
        yield "  ";
        if (array_key_exists("warning", $context)) {
            // line 1145
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["warning"] ?? null), "html", null, true);
            yield "
  ";
        }
        yield from [];
    }

    // line 1149
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_prepend_external_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1150
        yield "  ";
        if ((array_key_exists("external_link", $context) && (CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "position", [], "any", false, false, false, 1150) == "prepend"))) {
            // line 1151
            yield from             $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
        }
        yield from [];
    }

    // line 1155
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_append_external_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1156
        yield "  ";
        if ((array_key_exists("external_link", $context) && (CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "position", [], "any", false, false, false, 1156) == "append"))) {
            // line 1157
            yield from             $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
        }
        yield from [];
    }

    // line 1161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_external_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1162
        yield "  ";
        if (array_key_exists("external_link", $context)) {
            // line 1163
            $context["openingTag"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 1164
                yield "<a ";
                yield from                 $this->unwrap()->yieldBlock("form_external_link_attributes", $context, $blocks);
                yield ">
        ";
                // line 1165
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "open_in_new_tab", [], "any", false, false, false, 1165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<i class=\"material-icons\">open_in_new</i>";
                }
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1168
            yield "<div class=\"small font-secondary form-external-link";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "align", [], "any", false, false, false, 1168) === "right")) {
                yield " text-right";
            }
            yield "\">
      ";
            // line 1170
            yield "      ";
            if ((CoreExtension::inFilter("[1]", CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1170)) && CoreExtension::inFilter("[/1]", CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1170)))) {
                // line 1171
                yield "        ";
                yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(Twig\Extension\CoreExtension::replace($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1171)), ["[1]" => ($context["openingTag"] ?? null), "[/1]" => "</a>"]));
                yield "
      ";
            } else {
                // line 1173
                yield "        ";
                yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(Twig\Extension\CoreExtension::replace((("[1]" . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1173))) . "[/1]"), ["[1]" => ($context["openingTag"] ?? null), "[/1]" => "</a>"]));
                yield "
      ";
            }
            // line 1175
            yield "    </div>
  ";
        }
        yield from [];
    }

    // line 1179
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_external_link_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1180
        $context["external_link_attr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, false, false, 1180), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, true, false, 1180), "class", [], "any", true, true, false, 1180)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, false, false, 1180), "class", [], "any", false, false, false, 1180), "")) : ("")) . " btn btn-link px-0 align-right"))]);
        // line 1181
        yield "
  ";
        // line 1182
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["external_link_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 1183
            yield "    ";
            if (!CoreExtension::inFilter($context["attrname"], ["href", "class"])) {
                // line 1184
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"
    ";
            }
            // line 1186
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1187
        yield "
  ";
        // line 1188
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "open_in_new_tab", [], "any", false, false, false, 1188)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "target=\"_blank\"";
        }
        // line 1189
        yield "  href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "href", [], "any", false, false, false, 1189), "html", null, true);
        yield "\"
  class=\"";
        // line 1190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["external_link_attr"] ?? null), "class", [], "any", false, false, false, 1190), "html", null, true);
        yield "\"";
        yield from [];
    }

    // line 1193
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_custom_content_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1194
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, ($context["template"] ?? null), ($context["data"] ?? null));
        yield "
";
        yield from [];
    }

    // line 1197
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1198
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1198), "id", [], "any", false, false, false, 1198)], "Admin.Global")]);
        // line 1199
        if ((($tmp =  !(null === ($context["data_list"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1200
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["list" => (($context["id"] ?? null) . "_datalist")]);
        }
        // line 1202
        yield "
  ";
        // line 1203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        yield "

  ";
        // line 1205
        if ((($tmp =  !(null === ($context["data_list"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1206
            yield "    <datalist id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["id"] ?? null) . "_datalist"), "html", null, true);
            yield "\">
      ";
            // line 1207
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["data_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 1208
                yield "        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                yield "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1210
            yield "    </datalist>
  ";
        }
        yield from [];
    }

    // line 1214
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_prepend_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1215
        if ((array_key_exists("alert_position", $context) && (($context["alert_position"] ?? null) == "prepend"))) {
            // line 1216
            yield from             $this->unwrap()->yieldBlock("form_alert", $context, $blocks);
        }
        yield from [];
    }

    // line 1220
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_append_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1221
        if ((array_key_exists("alert_position", $context) && (($context["alert_position"] ?? null) == "append"))) {
            // line 1222
            yield from             $this->unwrap()->yieldBlock("form_alert", $context, $blocks);
        }
        yield from [];
    }

    // line 1226
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1227
        if (array_key_exists("alert_message", $context)) {
            // line 1228
            yield "    <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alert_type"] ?? null), "html", null, true);
            if (array_key_exists("alert_title", $context)) {
                yield " expandable-alert";
            }
            yield "\" role=\"alert\">
    ";
            // line 1229
            if (array_key_exists("alert_title", $context)) {
                // line 1230
                yield "      <p class=\"alert-text\">
        ";
                // line 1231
                yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["alert_title"] ?? null));
                yield "
      </p>
    ";
            } else {
                // line 1234
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["alert_message"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 1235
                    yield "        <p class=\"alert-text\">
          ";
                    // line 1236
                    yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($context["message"]);
                    yield "
        </p>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1239
                yield "    ";
            }
            // line 1240
            yield "
    ";
            // line 1241
            if (array_key_exists("alert_title", $context)) {
                // line 1242
                yield "      <div class=\"alert-more collapse\" id=\"expandable_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1242), "id", [], "any", false, false, false, 1242), "html", null, true);
                yield "\" style=\"\">
        ";
                // line 1243
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["alert_message"] ?? null)) > 1)) {
                    // line 1244
                    yield "          <ul class=\"p-0\">
            ";
                    // line 1245
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["alert_message"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 1246
                        yield "              <li>";
                        yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($context["message"]);
                        yield "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1248
                    yield "          </ul>
        ";
                } else {
                    // line 1250
                    yield "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["alert_message"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 1251
                        yield "            <p>
              ";
                        // line 1252
                        yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($context["message"]);
                        yield "
            </p>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1255
                    yield "        ";
                }
                // line 1256
                yield "      </div>
      <div class=\"read-more-container\">
         <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_";
                // line 1258
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1258), "id", [], "any", false, false, false, 1258), "html", null, true);
                yield "\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            ";
                // line 1259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more", [], "Admin.Actions"), "html", null, true);
                yield "
          </button>
       </div>
    ";
            }
            // line 1263
            yield "  </div>
  ";
        }
        yield from [];
    }

    // line 1267
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_unavailable_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1268
        yield "  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      ";
        // line 1270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not available yet.", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "
    </p>
  </div>
";
        yield from [];
    }

    // line 1275
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1276
        yield "  ";
        // line 1277
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1278
        yield "<span class=\"label text-preview ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["preview_class"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 1280
        yield "    ";
        if (array_key_exists("prefix", $context)) {
            // line 1281
            yield "    <span class=\"text-preview-prefix\">
      ";
            // line 1282
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["prefix"] ?? null));
            yield "
    </span>
    ";
        }
        // line 1285
        yield "
    <span class=\"text-preview-value\">
      ";
        // line 1287
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1287), "allow_html", [], "any", false, false, false, 1287)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1288
            yield "        ";
            // line 1289
            yield "        ";
            yield ($context["value"] ?? null);
            yield "
      ";
        } else {
            // line 1291
            yield "        ";
            // line 1292
            yield "        ";
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["value"] ?? null));
            yield "
      ";
        }
        // line 1294
        yield "    </span>

    ";
        // line 1297
        yield "    ";
        if (array_key_exists("suffix", $context)) {
            // line 1298
            yield "    <span class=\"text-preview-suffix\">
      ";
            // line 1299
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["suffix"] ?? null));
            yield "
    </span>
    ";
        }
        // line 1302
        yield "  </span>";
        // line 1303
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 1306
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_link_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1307
        yield "  ";
        // line 1308
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1309
        yield "<a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1309), "value", [], "any", false, false, false, 1309), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1309)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1309), "")) : ("")), "html", null, true);
        yield "\">
    ";
        // line 1310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1310), "button_label", [], "any", false, false, false, 1310), "html", null, true);
        yield "
  </a>
";
        yield from [];
    }

    // line 1314
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1315
        yield "  ";
        // line 1316
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1317
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1318
            yield "    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(("Image preview for " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1318), "name", [], "any", false, false, false, 1318))), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1318), "image_class", [], "any", false, false, false, 1318), "html", null, true);
            yield "\" />
  ";
        } else {
            // line 1320
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No picture", [], "Admin.Global"), "html", null, true);
            yield "
  ";
        }
        yield from [];
    }

    // line 1324
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1325
        yield "  ";
        $context["quantity"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", true, true, false, 1325)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", false, false, false, 1325), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1325), "vars", [], "any", false, false, false, 1325), "value", [], "any", false, false, false, 1325))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1325), "vars", [], "any", false, false, false, 1325), "value", [], "any", false, false, false, 1325)));
        // line 1326
        yield "  ";
        // line 1327
        yield "  ";
        if ((null === ($context["initialQuantity"] ?? null))) {
            // line 1328
            yield "    ";
            $context["initialQuantity"] = ($context["quantity"] ?? null);
            // line 1329
            yield "  ";
        }
        // line 1330
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1330)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1330), "")) : ("")) . " delta-quantity")), "data-initial-quantity" => ($context["initialQuantity"] ?? null)]);
        // line 1331
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    ";
        // line 1332
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "initial_quantity", [], "any", false, false, false, 1332), 'widget', ["value" => ($context["initialQuantity"] ?? null)]);
        yield "
    ";
        // line 1333
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1333), 'widget', ["initialQuantity" => ($context["initialQuantity"] ?? null), "deltaQuantity" => ($context["deltaQuantity"] ?? null), "value" => ($context["quantity"] ?? null)]);
        yield "
    ";
        // line 1334
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delta", [], "any", false, false, false, 1334), 'row');
        yield "
  </div>
";
        yield from [];
    }

    // line 1338
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_quantity_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1339
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1339)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1339), "")) : ("")) . " delta-quantity-quantity"))]);
        // line 1340
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 1341
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1342
        yield "<span class=\"initial-quantity\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["initialQuantity"] ?? null), "html", null, true);
        yield "</span>
    <span class=\"quantity-update";
        // line 1343
        if ((($context["deltaQuantity"] ?? null) != 0)) {
            yield " quantity-modified";
        }
        yield "\">
      <i class=\"material-icons\">trending_flat</i>
      <span class=\"new-quantity\">";
        // line 1345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
        yield "</span>
    </span>
    ";
        // line 1347
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
  </div>
";
        yield from [];
    }

    // line 1351
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_delta_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1352
        yield "  <div class=\"form-group";
        yield from         $this->unwrap()->yieldBlock("widget_type_class", $context, $blocks);
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            yield " has-error";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 1352)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 1352), "html", null, true);
        }
        yield "\">
    <div class=\"delta-quantity-delta-container\">";
        // line 1354
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 1355
        yield from         $this->unwrap()->yieldBlock("form_prepend_alert", $context, $blocks);
        // line 1356
        yield from         $this->unwrap()->yieldBlock("form_prepend_external_link", $context, $blocks);
        // line 1358
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 1360
        yield from         $this->unwrap()->yieldBlock("form_append_alert", $context, $blocks);
        // line 1361
        yield from         $this->unwrap()->yieldBlock("form_append_external_link", $context, $blocks);
        // line 1362
        yield "</div>";
        // line 1363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 1364
        yield from         $this->unwrap()->yieldBlock("form_modify_all_shops", $context, $blocks);
        // line 1365
        yield "</div>
";
        yield from [];
    }

    // line 1368
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_delta_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1369
        $context["type"] = "number";
        // line 1370
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1370)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1370), "")) : ("")) . " delta-quantity-delta"))]);
        // line 1371
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 1374
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submittable_input_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1375
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1375)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1375), "")) : ("")) . " ps-submittable-input-wrapper"))]);
        // line 1376
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        // line 1377
        $context["typeAttr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1377), "type_attr", [], "any", false, false, false, 1377), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1378
($context["form"] ?? null), "vars", [], "any", false, true, false, 1378), "type_attr", [], "any", false, true, false, 1378), "class", [], "any", true, true, false, 1378)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1378), "type_attr", [], "any", false, false, false, 1378), "class", [], "any", false, false, false, 1378), "")) : ("")) . " submittable-input")), "data-initial-value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1379
($context["form"] ?? null), "value", [], "any", false, false, false, 1379), "vars", [], "any", false, false, false, 1379), "value", [], "any", false, false, false, 1379), "value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1380
($context["form"] ?? null), "value", [], "any", false, false, false, 1380), "vars", [], "any", false, false, false, 1380), "value", [], "any", false, false, false, 1380)]);
        // line 1383
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 1383), 'widget', ["attr" => ($context["typeAttr"] ?? null)]);
        // line 1384
        yield from         $this->unwrap()->yieldBlock("submittable_input_button_widget", $context, $blocks);
        // line 1385
        yield "</div>
";
        yield from [];
    }

    // line 1388
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submittable_input_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1389
        yield "  <button type=\"button\" class=\"check-button d-none\">
    <i class=\"material-icons\">check</i>
  </button>
";
        yield from [];
    }

    // line 1394
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submittable_delta_quantity_delta_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1395
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1395)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1395), "")) : ("")) . " delta-quantity-delta ps-submittable-input-wrapper"))]);
        // line 1396
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        // line 1397
        $context["attr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1397), "attr", [], "any", false, false, false, 1397), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1398
($context["form"] ?? null), "vars", [], "any", false, true, false, 1398), "attr", [], "any", false, true, false, 1398), "class", [], "any", true, true, false, 1398)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1398), "attr", [], "any", false, false, false, 1398), "class", [], "any", false, false, false, 1398), "")) : ("")) . " submittable-input")), "data-initial-value" =>         // line 1399
($context["value"] ?? null), "value" =>         // line 1400
($context["value"] ?? null)]);
        // line 1403
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        // line 1404
        yield from         $this->unwrap()->yieldBlock("submittable_input_button_widget", $context, $blocks);
        // line 1405
        yield "</div>
";
        yield from [];
    }

    // line 1408
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation_tab_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1409
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1409)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1409), "")) : ("")) . " navigation-tab-widget"))]);
        // line 1410
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
  <div id=\"";
        // line 1411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1411), "id", [], "any", false, false, false, 1411), "html", null, true);
        yield "-tabs\" class=\"tabs js-tabs\">
    <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
      <i class=\"material-icons rtl-flip hide\">chevron_left</i>
    </div>

    <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
    ";
        // line 1417
        $context["firstRenderedChild"] = true;
        // line 1418
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1418));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1419
            yield "      ";
            if (((( !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1419) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1419), "name", [], "any", false, false, false, 1419) != "_toolbar_buttons")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1419), "name", [], "any", false, false, false, 1419) != "_footer_buttons")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1419), "name", [], "any", false, false, false, 1419) != "_token"))) {
                // line 1420
                yield "      <li id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1420), "id", [], "any", false, false, false, 1420), "html", null, true);
                yield "-tab-nav\" class=\"nav-item";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1420), "valid", [], "any", false, false, false, 1420)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " has-error";
                }
                yield "\">
        <a href=\"#";
                // line 1421
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1421), "id", [], "any", false, false, false, 1421), "html", null, true);
                yield "-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link";
                if ((($tmp = ($context["firstRenderedChild"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " active";
                }
                yield "\">
          ";
                // line 1422
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1422), "label", [], "any", false, false, false, 1422), "html", null, true);
                yield "
        </a>
      </li>
      ";
                // line 1425
                $context["firstRenderedChild"] = false;
                // line 1426
                yield "      ";
            }
            // line 1427
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1428
        yield "    </ul>

    <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
      <i class=\"material-icons rtl-flip hide\">chevron_right</i>
    </div>

    ";
        // line 1434
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", ["_toolbar_buttons"], "method", false, false, false, 1434)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1435
            yield "    <div class=\"navigation-tab-widget-toolbar toolbar text-md-right\">
      ";
            // line 1436
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "_toolbar_buttons", [], "any", false, false, false, 1436), 'widget');
            yield "
    </div>
    ";
        }
        // line 1439
        yield "  </div>

  <div id=\"";
        // line 1441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1441), "id", [], "any", false, false, false, 1441), "html", null, true);
        yield "-tabs-content\" class=\"tab-content\">
    ";
        // line 1442
        $context["firstRenderedChild"] = true;
        // line 1443
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1443));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1444
            yield "      ";
            if ((( !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1444) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1444), "name", [], "any", false, false, false, 1444) != "_footer_buttons")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1444), "name", [], "any", false, false, false, 1444) != "_token"))) {
                // line 1445
                yield "      <div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid";
                if ((($tmp = ($context["firstRenderedChild"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " active";
                }
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1445), "id", [], "any", false, false, false, 1445), "html", null, true);
                yield "-tab\">
        ";
                // line 1446
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1446), "label_tab", [], "any", true, true, false, 1446)) {
                    // line 1447
                    yield "          ";
                    // line 1448
                    yield "          ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["required" => false] + (CoreExtension::testEmpty($_label_ = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1448), "label_tab", [], "any", false, false, false, 1448)) ? [] : ["label" => $_label_]));
                    yield "
        ";
                }
                // line 1450
                yield "        ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                yield "
        ";
                // line 1451
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
      </div>
      ";
                // line 1453
                $context["firstRenderedChild"] = false;
                // line 1454
                yield "      ";
            }
            // line 1455
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1456
        yield "  </div>

  ";
        // line 1458
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", ["_footer_buttons"], "method", false, false, false, 1458)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1459
            yield "    <div class=\"navigation-tab-widget-footer\">
      ";
            // line 1460
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "_footer_buttons", [], "any", false, false, false, 1460), 'widget');
            yield "
    </div>
  ";
        }
        // line 1463
        yield "</div>
";
        yield from [];
    }

    // line 1466
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toggle_children_choice_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1467
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 1468
($context["attr"] ?? null), "class", [], "any", true, true, false, 1468)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1468), "")) : ("")) . " toggle-children-choice"))]);
        // line 1470
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        // line 1471
        $context["selectAttr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children_selector", [], "any", false, false, false, 1471), "vars", [], "any", false, false, false, 1471), "attr", [], "any", false, false, false, 1471), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1472
($context["form"] ?? null), "children_selector", [], "any", false, true, false, 1472), "vars", [], "any", false, true, false, 1472), "attr", [], "any", false, true, false, 1472), "class", [], "any", true, true, false, 1472)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children_selector", [], "any", false, false, false, 1472), "vars", [], "any", false, false, false, 1472), "attr", [], "any", false, false, false, 1472), "class", [], "any", false, false, false, 1472), "")) : ("")) . " toggle-children-choice-select"))]);
        // line 1476
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
            // line 1477
            yield "      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1477), "valid", [], "any", false, false, false, 1477) != true)) {
                // line 1478
                yield "        ";
                // line 1479
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children_selector", [], "any", false, false, false, 1479));
                foreach ($context['_seq'] as $context["choiceChildName"] => $context["choiceChild"]) {
                    // line 1480
                    yield "          ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choiceChild"], "vars", [], "any", false, false, false, 1480), "value", [], "any", false, false, false, 1480) == $context["childName"])) {
                        // line 1481
                        yield "            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\UpdateFormVarsExtension']->updateFormVars($context["choiceChild"], ["valid" => false]), "html", null, true);
                        yield "
          ";
                    }
                    // line 1483
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['choiceChildName'], $context['choiceChild'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1484
                yield "      ";
            }
            // line 1485
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['childName'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1486
        yield "
    ";
        // line 1487
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children_selector", [], "any", false, false, false, 1487), 'row', ["attr" => ($context["selectAttr"] ?? null)]);
        yield "
    <div class=\"toggle-children-choice-container\">
      ";
        // line 1489
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
            // line 1490
            yield "        ";
            if (($context["childName"] != "children_selector")) {
                // line 1491
                yield "          <div class=\"toggle-children-choice-child";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children_selector", [], "any", false, false, false, 1491), "vars", [], "any", false, false, false, 1491), "value", [], "any", false, false, false, 1491) != $context["childName"])) {
                    yield " d-none";
                }
                yield "\" data-toggle-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["childName"], "html", null, true);
                yield "\">
            ";
                // line 1492
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row', ["label" => false]);
                yield "
          </div>
        ";
            }
            // line 1495
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['childName'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1496
        yield "    </div>
  </div>";
        yield from [];
    }

    // line 1500
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_accordion_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1501
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 1502
($context["attr"] ?? null), "class", [], "any", true, true, false, 1502)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1502), "")) : ("")) . " accordion accordion-form"))]);
        // line 1504
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1505
        $context["firstChild"] = true;
        // line 1506
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1507
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1507), "compound", [], "any", false, false, false, 1507)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1508
                yield "      ";
                $context["hasError"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1508), "valid", [], "any", false, false, false, 1508) != true);
                // line 1509
                yield "      ";
                $context["isExpanded"] = (((($context["firstChild"] ?? null) && ($context["expand_first"] ?? null)) || (($context["hasError"] ?? null) && ($context["expand_on_error"] ?? null))) || ($context["expand_all"] ?? null));
                // line 1510
                yield "      <div class=\"card\">
        <div class=\"card-header\" id=\"";
                // line 1511
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1511), "id", [], "any", false, false, false, 1511), "html", null, true);
                yield "_accordion_header\">
          <h2 class=\"mb-0\">
            <button
              class=\"accordion-form-button ";
                // line 1514
                if ((($tmp = ($context["hasError"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " has-error ";
                }
                yield " btn btn-block text-left";
                if ((($tmp =  !($context["isExpanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " collapsed";
                }
                yield "\"
              type=\"button\"
              data-toggle=\"collapse\"
              data-target=\"#";
                // line 1517
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1517), "id", [], "any", false, false, false, 1517), "html", null, true);
                yield "_accordion\"
              aria-expanded=\"";
                // line 1518
                if ((($tmp = ($context["isExpanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "true";
                } else {
                    yield "false";
                }
                yield "\"
              aria-controls=\"";
                // line 1519
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1519), "id", [], "any", false, false, false, 1519), "html", null, true);
                yield "_accordion\">
              <span class=\"accordion-form-button-label\">";
                // line 1520
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1520), "label", [], "any", false, false, false, 1520), "html", null, true);
                yield "</span>
              ";
                // line 1521
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1521), "label_subtitle", [], "any", true, true, false, 1521) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1521), "label_subtitle", [], "any", false, false, false, 1521)))) {
                    // line 1522
                    yield "                <span class=\"accordion-form-button-sub-label\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1522), "label_subtitle", [], "any", false, false, false, 1522), "html", null, true);
                    yield "</span>
              ";
                }
                // line 1524
                yield "              <i class=\"material-icons\"></i>
            </button>
          </h2>
        </div>

        <div id=\"";
                // line 1529
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1529), "id", [], "any", false, false, false, 1529), "html", null, true);
                yield "_accordion\" class=\"collapse";
                if ((($tmp = ($context["isExpanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " show";
                }
                yield "\" aria-labelledby=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1529), "id", [], "any", false, false, false, 1529), "html", null, true);
                yield "_accordion_header\" ";
                if ((($tmp = ($context["display_one"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-parent=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1529), "id", [], "any", false, false, false, 1529), "html", null, true);
                    yield "\"";
                }
                yield ">
          <div class=\"card-body\">
            ";
                // line 1531
                $context["childAttr"] = ["class" => "accordion-sub-form"];
                // line 1532
                yield "            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ($context["childAttr"] ?? null)]);
                yield "
            ";
                // line 1533
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                yield "
          </div>
        </div>
      </div>
      ";
                // line 1537
                $context["firstChild"] = false;
                // line 1538
                yield "      ";
            }
            // line 1539
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1540
        yield "
    ";
        // line 1542
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
  </div>";
        yield from [];
    }

    // line 1546
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1547
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 1548
($context["attr"] ?? null), "class", [], "any", true, true, false, 1548)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1548), "")) : ("")) . " form-group btn-collection btn-toolbar")), "role" => "group", "style" => ("justify-content: " .         // line 1550
($context["justify_content"] ?? null))]);
        // line 1552
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1553
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["button_groups"] ?? null));
        foreach ($context['_seq'] as $context["group"] => $context["buttons"]) {
            // line 1554
            yield "      <div class=\"";
            if ((($tmp = ($context["use_button_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "btn-group ";
            }
            yield "group-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["group"], "html", null, true);
            yield "\">
        ";
            // line 1556
            yield "        ";
            $context["inlineButtonsLimit"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1556), "inline_buttons_limit", [], "any", false, false, false, 1556);
            // line 1557
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["buttons"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 1558
                yield "          ";
                $context["action"] = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), $context["button"], [], "any", false, false, false, 1558);
                // line 1559
                yield "          ";
                if (((($context["inlineButtonsLimit"] ?? null) === null) || (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1559) <= ($context["inlineButtonsLimit"] ?? null)))) {
                    // line 1560
                    yield "            ";
                    // line 1561
                    yield "            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1561), "use_inline_labels", [], "any", false, false, false, 1561)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1562
                        yield "              ";
                        $context["actionLabel"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "vars", [], "any", false, false, false, 1562), "label", [], "any", false, false, false, 1562);
                        // line 1563
                        yield "            ";
                    } else {
                        // line 1564
                        yield "              ";
                        $context["actionLabel"] = "";
                        // line 1565
                        yield "            ";
                    }
                    // line 1566
                    yield "            ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["action"] ?? null), 'widget', ["label" => ($context["actionLabel"] ?? null)]);
                    yield "
          ";
                }
                // line 1568
                yield "        ";
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
            unset($context['_seq'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1569
            yield "
        ";
            // line 1571
            yield "        ";
            if (( !(($context["inlineButtonsLimit"] ?? null) === null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["buttons"]) > ($context["inlineButtonsLimit"] ?? null)))) {
                // line 1572
                yield "          <a id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1572), "id", [], "any", false, false, false, 1572), "html", null, true);
                yield "_dropdown\" class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
             data-toggle=\"dropdown\"
             aria-haspopup=\"true\"
             aria-expanded=\"false\"
          >
          </a>
          <div class=\"dropdown-menu\">
            ";
                // line 1579
                $context["remainingButtons"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["buttons"], ($context["inlineButtonsLimit"] ?? null));
                // line 1580
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["remainingButtons"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 1581
                    yield "              ";
                    $context["action"] = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), $context["button"], [], "any", false, false, false, 1581);
                    // line 1582
                    yield "              ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["action"] ?? null), 'widget', ["attr" => ["class" => ("dropdown-item " . Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 1583
($context["action"] ?? null), "vars", [], "any", false, true, false, 1583), "attr", [], "any", false, true, false, 1583), "class", [], "any", true, true, false, 1583)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "vars", [], "any", false, false, false, 1583), "attr", [], "any", false, false, false, 1583), "class", [], "any", false, false, false, 1583), "")) : (""))))]]);
                    // line 1584
                    yield "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['button'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1586
                yield "          </div>
        ";
            }
            // line 1588
            yield "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['group'], $context['buttons'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1590
        yield "  </div>
";
        yield from [];
    }

    // line 1593
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_card_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1594
        if ((array_key_exists("label_subtitle", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["label_subtitle"] ?? null)))) {
            // line 1595
            yield "    ";
            $context["cardSubtitle"] = ($context["label_subtitle"] ?? null);
            // line 1596
            yield "  ";
        }
        // line 1597
        yield "  <div class=\"card\">
    ";
        // line 1598
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["label_tag_name" => "h3", "label_attr" => ["class" => "card-header"], "required" => false, "label_subtitle" => null]);
        yield "
    <div class=\"card-body\">
      ";
        // line 1601
        yield "      ";
        if (array_key_exists("cardSubtitle", $context)) {
            // line 1602
            yield "        <p class=\"subtitle\">";
            yield ($context["cardSubtitle"] ?? null);
            yield "</p>
      ";
        }
        // line 1604
        yield "
      <div class=\"form-wrapper\">
        ";
        // line 1606
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
        ";
        // line 1607
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        yield "
      </div>
    </div>
  </div>
";
        yield from [];
    }

    // line 1613
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_avatar_url_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1614
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'row', ["attr" => ($context["attr"] ?? null)]);
        yield "

  <div class=\"form-group row\">
    <label class=\"form-control-label\"></label>
    <div class=\"col-sm\">
      <img class=\"img-thumbnail clickable-avatar\" src=\"";
        // line 1619
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 1619), "vars", [], "any", false, false, false, 1619), "value", [], "any", false, false, false, 1619), "avatar_url", [], "any", false, false, false, 1619), "html", null, true);
        yield "\" alt=\"\">
    </div>
  </div>
";
        yield from [];
    }

    // line 1624
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_change_password_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1625
        yield "  <div class=\"form-group row\">
    <label class=\"form-control-label\">
      ";
        // line 1627
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password", [], "Admin.Global"), "html", null, true);
        yield "
    </label>
    <div class=\"col-sm\">
      ";
        // line 1631
        yield "      ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1631), "change_password_button", [], "any", false, false, false, 1631), 'row');
        yield "

      <div class=\"card card-body js-change-password-block d-none\">
        ";
        // line 1635
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1635), "old_password", [], "any", false, false, false, 1635), 'row');
        yield "

        ";
        // line 1638
        yield "        ";
        // line 1639
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1639), "new_password", [], "any", false, false, false, 1639), 'row');
        yield "

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
        // line 1644
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1644), "generated_password", [], "any", false, false, false, 1644), 'widget');
        yield "
          </div>
          <div class=\"col-sm\">
            ";
        // line 1647
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1647), "generate_password_button", [], "any", false, false, false, 1647), 'widget');
        yield "
          </div>
        </div>
        ";
        // line 1650
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1650), "cancel_button", [], "any", false, false, false, 1650), 'row');
        yield "

        ";
        // line 1653
        yield "        <div class=\"js-password-strength-feedback d-none\">
          <span class=\"strength-low\">";
        // line 1654
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
          <span class=\"strength-medium\">";
        // line 1655
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Okay", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
          <span class=\"strength-high\">";
        // line 1656
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Good", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
          <span class=\"strength-extreme\">";
        // line 1657
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fabulous", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
        </div>
      </div>
    </div>
  </div>
";
        yield from [];
    }

    // line 1664
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_price_reduction_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1665
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1665)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1665), "")) : ("")) . " reduction-widget row"))]);
        // line 1666
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1667
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1667));
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
            // line 1668
            yield "      ";
            $_v35 = $context;
            $_v36 = ["row_attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1668), "row_attr", [], "any", false, false, false, 1668), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1668), "row_attr", [], "any", false, true, false, 1668), "class", [], "any", true, true, false, 1668)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1668), "row_attr", [], "any", false, false, false, 1668), "class", [], "any", false, false, false, 1668), "")) : ("")) . " col col-md-3"))])];
            if (!is_iterable($_v36)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 1668, $this->getSourceContext());
            }
            $_v36 = CoreExtension::toArray($_v36);
            $context = $_v36 + $context + $this->env->getGlobals();
            // line 1669
            yield "      <div ";
            yield from             $this->unwrap()->yieldBlock("row_attributes", $context, $blocks);
            yield ">
      ";
            $context = $_v35;
            // line 1671
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "
        ";
            // line 1672
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
            yield "
      </div>
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
        // line 1675
        yield "</div>";
        yield from [];
    }

    // line 1678
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_with_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1679
        yield "  ";
        if ((array_key_exists("data", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["data"] ?? null)))) {
            // line 1680
            yield "    <div>
      ";
            // line 1681
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["preview_image"]) {
                // line 1684
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", true, true, false, 1684)) {
                    // line 1685
                    yield "          ";
                    if ((($tmp = ($context["can_be_deleted"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1686
                        yield "            <figure class=\"figure\">
              <img src=\"";
                        // line 1687
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", false, false, false, 1687), "html", null, true);
                        yield "\" class=\"figure-img img-fluid img-thumbnail\">
              <figcaption class=\"figure-caption\">
                ";
                        // line 1689
                        if ((($tmp = ($context["show_size"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 1690
                            yield "                  <p>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File size", [], "Admin.Advparameters.Feature"), "html", null, true);
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "size", [], "any", false, false, false, 1690), "html", null, true);
                            yield "</p>
                ";
                        }
                        // line 1692
                        yield "                <button class=\"btn btn-outline-danger btn-sm js-form-submit-btn\"
                        data-form-submit-url=\"";
                        // line 1693
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "delete_path", [], "any", false, false, false, 1693), "html", null, true);
                        yield "\"
                >
                  <i class=\"material-icons\">
                    delete_forever
                  </i>
                  ";
                        // line 1698
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
                        yield "
                </button>
              </figcaption>
            </figure>
          ";
                    } else {
                        // line 1703
                        yield "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["preview_image"]) {
                            // line 1704
                            yield "              <figure class=\"figure\">
                <img src=\"";
                            // line 1705
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", false, false, false, 1705), "html", null, true);
                            yield "\" class=\"figure-img img-fluid img-thumbnail\">
                ";
                            // line 1706
                            if ((($tmp = ($context["show_size"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 1707
                                yield "                  <figcaption class=\"figure-caption\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File size", [], "Admin.Advparameters.Feature"), "html", null, true);
                                yield " ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "size", [], "any", false, false, false, 1707), "html", null, true);
                                yield "</figcaption>
                ";
                            }
                            // line 1709
                            yield "              </figure>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['preview_image'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1711
                        yield "          ";
                    }
                    // line 1712
                    yield "      ";
                }
                // line 1713
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['preview_image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1714
            yield "    </div>
  ";
        }
        // line 1716
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("file_widget", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 1719
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_tagged_item_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1720
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1720)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1720), "")) : ("")) . " pstaggerTagsWrapper d-block"))]);
        // line 1721
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 1721), "name", [], "any", false, false, false, 1721)]);
        // line 1722
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1723
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        yield "
  </div>
";
        yield from [];
    }

    // line 1727
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_tagged_item_collection_entry_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1728
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1728)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1728), "")) : ("")) . " pstaggerTag tag-item"))]);
        // line 1729
        yield "<span ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1730
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 1730), 'widget');
        yield "
    ";
        // line 1731
        $context["isRemovable"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 1731), "vars", [], "any", false, false, false, 1731), "allow_delete", [], "any", false, false, false, 1731);
        // line 1732
        yield "    <a class=\"pstaggerClosingCross remove-tag-item ";
        if ((($tmp =  !($context["isRemovable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "d-none";
        }
        yield "\">x</a>
    ";
        // line 1733
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 1733), 'widget');
        yield "
  </span>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  5329 => 1733,  5322 => 1732,  5320 => 1731,  5316 => 1730,  5311 => 1729,  5309 => 1728,  5302 => 1727,  5294 => 1723,  5289 => 1722,  5287 => 1721,  5285 => 1720,  5278 => 1719,  5270 => 1716,  5266 => 1714,  5260 => 1713,  5257 => 1712,  5254 => 1711,  5247 => 1709,  5239 => 1707,  5237 => 1706,  5233 => 1705,  5230 => 1704,  5225 => 1703,  5217 => 1698,  5209 => 1693,  5206 => 1692,  5198 => 1690,  5196 => 1689,  5191 => 1687,  5188 => 1686,  5185 => 1685,  5182 => 1684,  5178 => 1681,  5175 => 1680,  5172 => 1679,  5165 => 1678,  5160 => 1675,  5143 => 1672,  5138 => 1671,  5132 => 1669,  5123 => 1668,  5106 => 1667,  5101 => 1666,  5099 => 1665,  5092 => 1664,  5081 => 1657,  5077 => 1656,  5073 => 1655,  5069 => 1654,  5066 => 1653,  5061 => 1650,  5055 => 1647,  5049 => 1644,  5040 => 1639,  5038 => 1638,  5032 => 1635,  5025 => 1631,  5019 => 1627,  5015 => 1625,  5008 => 1624,  4999 => 1619,  4990 => 1614,  4983 => 1613,  4973 => 1607,  4969 => 1606,  4965 => 1604,  4959 => 1602,  4956 => 1601,  4951 => 1598,  4948 => 1597,  4945 => 1596,  4942 => 1595,  4940 => 1594,  4933 => 1593,  4927 => 1590,  4920 => 1588,  4916 => 1586,  4909 => 1584,  4907 => 1583,  4905 => 1582,  4902 => 1581,  4897 => 1580,  4895 => 1579,  4884 => 1572,  4881 => 1571,  4878 => 1569,  4864 => 1568,  4858 => 1566,  4855 => 1565,  4852 => 1564,  4849 => 1563,  4846 => 1562,  4843 => 1561,  4841 => 1560,  4838 => 1559,  4835 => 1558,  4817 => 1557,  4814 => 1556,  4805 => 1554,  4801 => 1553,  4796 => 1552,  4794 => 1550,  4793 => 1548,  4792 => 1547,  4785 => 1546,  4777 => 1542,  4774 => 1540,  4768 => 1539,  4765 => 1538,  4763 => 1537,  4756 => 1533,  4751 => 1532,  4749 => 1531,  4732 => 1529,  4725 => 1524,  4719 => 1522,  4717 => 1521,  4713 => 1520,  4709 => 1519,  4701 => 1518,  4697 => 1517,  4685 => 1514,  4679 => 1511,  4676 => 1510,  4673 => 1509,  4670 => 1508,  4667 => 1507,  4662 => 1506,  4660 => 1505,  4655 => 1504,  4653 => 1502,  4652 => 1501,  4645 => 1500,  4639 => 1496,  4633 => 1495,  4627 => 1492,  4618 => 1491,  4615 => 1490,  4611 => 1489,  4606 => 1487,  4603 => 1486,  4597 => 1485,  4594 => 1484,  4588 => 1483,  4582 => 1481,  4579 => 1480,  4574 => 1479,  4572 => 1478,  4569 => 1477,  4564 => 1476,  4562 => 1472,  4561 => 1471,  4557 => 1470,  4555 => 1468,  4554 => 1467,  4547 => 1466,  4541 => 1463,  4535 => 1460,  4532 => 1459,  4530 => 1458,  4526 => 1456,  4520 => 1455,  4517 => 1454,  4515 => 1453,  4510 => 1451,  4505 => 1450,  4499 => 1448,  4497 => 1447,  4495 => 1446,  4486 => 1445,  4483 => 1444,  4478 => 1443,  4476 => 1442,  4472 => 1441,  4468 => 1439,  4462 => 1436,  4459 => 1435,  4457 => 1434,  4449 => 1428,  4443 => 1427,  4440 => 1426,  4438 => 1425,  4432 => 1422,  4424 => 1421,  4415 => 1420,  4412 => 1419,  4407 => 1418,  4405 => 1417,  4396 => 1411,  4391 => 1410,  4389 => 1409,  4382 => 1408,  4376 => 1405,  4374 => 1404,  4372 => 1403,  4370 => 1400,  4369 => 1399,  4368 => 1398,  4367 => 1397,  4363 => 1396,  4361 => 1395,  4354 => 1394,  4346 => 1389,  4339 => 1388,  4333 => 1385,  4331 => 1384,  4329 => 1383,  4327 => 1380,  4326 => 1379,  4325 => 1378,  4324 => 1377,  4320 => 1376,  4318 => 1375,  4311 => 1374,  4306 => 1371,  4304 => 1370,  4302 => 1369,  4295 => 1368,  4289 => 1365,  4287 => 1364,  4285 => 1363,  4283 => 1362,  4281 => 1361,  4279 => 1360,  4277 => 1358,  4275 => 1356,  4273 => 1355,  4271 => 1354,  4259 => 1352,  4252 => 1351,  4244 => 1347,  4239 => 1345,  4232 => 1343,  4227 => 1342,  4225 => 1341,  4221 => 1340,  4219 => 1339,  4212 => 1338,  4204 => 1334,  4200 => 1333,  4196 => 1332,  4191 => 1331,  4188 => 1330,  4185 => 1329,  4182 => 1328,  4179 => 1327,  4177 => 1326,  4174 => 1325,  4167 => 1324,  4158 => 1320,  4148 => 1318,  4146 => 1317,  4144 => 1316,  4142 => 1315,  4135 => 1314,  4127 => 1310,  4120 => 1309,  4118 => 1308,  4116 => 1307,  4109 => 1306,  4104 => 1303,  4102 => 1302,  4096 => 1299,  4093 => 1298,  4090 => 1297,  4086 => 1294,  4080 => 1292,  4078 => 1291,  4072 => 1289,  4070 => 1288,  4068 => 1287,  4064 => 1285,  4058 => 1282,  4055 => 1281,  4052 => 1280,  4047 => 1278,  4045 => 1277,  4043 => 1276,  4036 => 1275,  4027 => 1270,  4023 => 1268,  4016 => 1267,  4009 => 1263,  4002 => 1259,  3998 => 1258,  3994 => 1256,  3991 => 1255,  3982 => 1252,  3979 => 1251,  3974 => 1250,  3970 => 1248,  3961 => 1246,  3957 => 1245,  3954 => 1244,  3952 => 1243,  3947 => 1242,  3945 => 1241,  3942 => 1240,  3939 => 1239,  3930 => 1236,  3927 => 1235,  3922 => 1234,  3916 => 1231,  3913 => 1230,  3911 => 1229,  3903 => 1228,  3901 => 1227,  3894 => 1226,  3888 => 1222,  3886 => 1221,  3879 => 1220,  3873 => 1216,  3871 => 1215,  3864 => 1214,  3857 => 1210,  3848 => 1208,  3844 => 1207,  3839 => 1206,  3837 => 1205,  3832 => 1203,  3829 => 1202,  3826 => 1200,  3824 => 1199,  3822 => 1198,  3815 => 1197,  3807 => 1194,  3800 => 1193,  3794 => 1190,  3789 => 1189,  3785 => 1188,  3782 => 1187,  3776 => 1186,  3768 => 1184,  3765 => 1183,  3761 => 1182,  3758 => 1181,  3756 => 1180,  3749 => 1179,  3742 => 1175,  3736 => 1173,  3730 => 1171,  3727 => 1170,  3720 => 1168,  3714 => 1165,  3709 => 1164,  3707 => 1163,  3704 => 1162,  3697 => 1161,  3691 => 1157,  3688 => 1156,  3681 => 1155,  3675 => 1151,  3672 => 1150,  3665 => 1149,  3656 => 1145,  3653 => 1144,  3635 => 1142,  3633 => 1141,  3630 => 1140,  3623 => 1139,  3614 => 1134,  3611 => 1133,  3608 => 1132,  3601 => 1131,  3592 => 1126,  3589 => 1125,  3586 => 1124,  3579 => 1123,  3574 => 1120,  3571 => 1119,  3569 => 1118,  3567 => 1117,  3565 => 1116,  3563 => 1115,  3561 => 1114,  3554 => 1113,  3549 => 1110,  3546 => 1109,  3544 => 1108,  3542 => 1107,  3540 => 1106,  3538 => 1105,  3536 => 1104,  3529 => 1103,  3522 => 1100,  3517 => 1099,  3510 => 1098,  3503 => 1095,  3498 => 1094,  3491 => 1093,  3485 => 1090,  3479 => 1087,  3476 => 1086,  3474 => 1085,  3471 => 1084,  3468 => 1082,  3465 => 1080,  3463 => 1079,  3461 => 1078,  3459 => 1077,  3457 => 1075,  3455 => 1074,  3452 => 1073,  3446 => 1070,  3443 => 1069,  3441 => 1068,  3438 => 1067,  3436 => 1066,  3433 => 1065,  3426 => 1064,  3418 => 1059,  3416 => 1057,  3415 => 1055,  3414 => 1054,  3408 => 1051,  3404 => 1049,  3401 => 1047,  3398 => 1045,  3396 => 1044,  3394 => 1040,  3392 => 1039,  3385 => 1038,  3378 => 1035,  3371 => 1031,  3366 => 1029,  3362 => 1028,  3357 => 1025,  3354 => 1023,  3351 => 1021,  3349 => 1020,  3346 => 1019,  3339 => 1018,  3327 => 1010,  3323 => 1009,  3319 => 1008,  3315 => 1006,  3313 => 1005,  3309 => 1003,  3306 => 1002,  3299 => 1001,  3290 => 996,  3285 => 995,  3283 => 994,  3281 => 993,  3275 => 990,  3273 => 989,  3268 => 988,  3266 => 986,  3263 => 985,  3261 => 983,  3259 => 982,  3257 => 981,  3255 => 976,  3254 => 975,  3247 => 971,  3243 => 969,  3236 => 968,  3229 => 963,  3227 => 962,  3225 => 959,  3224 => 958,  3223 => 957,  3222 => 956,  3219 => 954,  3216 => 953,  3214 => 952,  3211 => 951,  3206 => 949,  3204 => 948,  3202 => 947,  3199 => 945,  3196 => 944,  3189 => 943,  3183 => 940,  3177 => 938,  3171 => 936,  3169 => 935,  3162 => 934,  3157 => 931,  3152 => 928,  3141 => 926,  3137 => 925,  3133 => 924,  3128 => 922,  3123 => 920,  3119 => 918,  3113 => 916,  3111 => 915,  3105 => 911,  3102 => 910,  3093 => 907,  3086 => 906,  3083 => 905,  3080 => 904,  3077 => 903,  3074 => 902,  3071 => 901,  3067 => 900,  3060 => 899,  3058 => 898,  3051 => 897,  3044 => 893,  3035 => 890,  3014 => 889,  3010 => 888,  3006 => 886,  3002 => 884,  2992 => 880,  2982 => 879,  2979 => 878,  2975 => 877,  2972 => 876,  2970 => 875,  2965 => 874,  2958 => 873,  2953 => 820,  2946 => 866,  2939 => 864,  2932 => 862,  2928 => 860,  2925 => 859,  2919 => 857,  2913 => 855,  2911 => 854,  2908 => 853,  2905 => 852,  2903 => 851,  2900 => 850,  2896 => 849,  2891 => 847,  2887 => 845,  2883 => 844,  2878 => 841,  2863 => 839,  2857 => 837,  2851 => 834,  2845 => 831,  2841 => 829,  2839 => 828,  2836 => 827,  2819 => 826,  2815 => 825,  2805 => 821,  2802 => 820,  2795 => 819,  2787 => 816,  2785 => 782,  2778 => 812,  2768 => 808,  2764 => 806,  2760 => 805,  2752 => 799,  2744 => 798,  2740 => 796,  2736 => 794,  2734 => 793,  2722 => 783,  2719 => 782,  2712 => 781,  2704 => 774,  2695 => 771,  2691 => 770,  2684 => 765,  2681 => 764,  2674 => 763,  2667 => 758,  2659 => 755,  2656 => 754,  2652 => 753,  2647 => 750,  2639 => 744,  2634 => 741,  2627 => 738,  2622 => 736,  2615 => 732,  2611 => 730,  2609 => 729,  2603 => 726,  2599 => 725,  2596 => 724,  2590 => 721,  2580 => 718,  2576 => 717,  2573 => 715,  2571 => 714,  2565 => 712,  2563 => 711,  2561 => 709,  2558 => 707,  2551 => 706,  2542 => 702,  2536 => 700,  2534 => 699,  2527 => 698,  2522 => 693,  2520 => 692,  2513 => 691,  2511 => 690,  2509 => 689,  2502 => 688,  2496 => 684,  2494 => 683,  2487 => 682,  2485 => 681,  2482 => 679,  2480 => 678,  2476 => 677,  2474 => 676,  2472 => 675,  2470 => 674,  2463 => 673,  2457 => 670,  2452 => 667,  2450 => 666,  2448 => 665,  2446 => 664,  2432 => 663,  2429 => 662,  2425 => 660,  2423 => 659,  2421 => 657,  2419 => 655,  2404 => 654,  2402 => 653,  2399 => 652,  2396 => 651,  2393 => 650,  2390 => 649,  2387 => 648,  2384 => 647,  2381 => 646,  2378 => 645,  2375 => 644,  2372 => 643,  2369 => 642,  2367 => 641,  2360 => 640,  2355 => 637,  2348 => 636,  2343 => 633,  2336 => 632,  2331 => 629,  2329 => 628,  2322 => 626,  2312 => 617,  2295 => 614,  2291 => 613,  2287 => 612,  2284 => 611,  2267 => 610,  2261 => 606,  2257 => 605,  2253 => 604,  2245 => 599,  2239 => 596,  2234 => 595,  2227 => 594,  2215 => 590,  2213 => 589,  2209 => 588,  2207 => 587,  2200 => 586,  2195 => 583,  2193 => 563,  2186 => 579,  2172 => 578,  2164 => 577,  2160 => 575,  2155 => 574,  2151 => 573,  2147 => 572,  2143 => 571,  2139 => 570,  2134 => 569,  2131 => 568,  2114 => 567,  2110 => 566,  2090 => 565,  2087 => 564,  2084 => 563,  2077 => 562,  2072 => 537,  2068 => 559,  2061 => 555,  2055 => 552,  2051 => 551,  2046 => 549,  2042 => 547,  2040 => 546,  2035 => 544,  2029 => 541,  2025 => 540,  2021 => 538,  2018 => 537,  2011 => 536,  2006 => 520,  2000 => 531,  1995 => 529,  1990 => 528,  1988 => 527,  1984 => 526,  1978 => 523,  1974 => 521,  1971 => 520,  1964 => 519,  1959 => 505,  1953 => 515,  1935 => 508,  1932 => 507,  1929 => 506,  1926 => 505,  1919 => 504,  1914 => 501,  1909 => 498,  1900 => 495,  1895 => 493,  1892 => 492,  1888 => 491,  1884 => 490,  1878 => 487,  1873 => 485,  1865 => 479,  1863 => 478,  1860 => 477,  1851 => 474,  1847 => 473,  1844 => 472,  1841 => 471,  1838 => 470,  1836 => 469,  1833 => 468,  1830 => 467,  1827 => 466,  1823 => 465,  1818 => 463,  1811 => 462,  1806 => 459,  1801 => 456,  1790 => 454,  1786 => 453,  1782 => 452,  1776 => 449,  1771 => 447,  1763 => 441,  1761 => 440,  1758 => 439,  1742 => 437,  1740 => 436,  1737 => 434,  1734 => 433,  1732 => 432,  1729 => 431,  1726 => 430,  1723 => 429,  1706 => 428,  1701 => 426,  1694 => 425,  1689 => 422,  1686 => 420,  1684 => 419,  1677 => 418,  1670 => 414,  1661 => 411,  1657 => 410,  1636 => 409,  1632 => 408,  1628 => 406,  1624 => 404,  1614 => 400,  1604 => 399,  1601 => 398,  1597 => 397,  1594 => 396,  1592 => 395,  1588 => 394,  1583 => 393,  1576 => 392,  1571 => 389,  1567 => 387,  1550 => 385,  1547 => 384,  1530 => 383,  1527 => 382,  1524 => 381,  1520 => 378,  1514 => 376,  1512 => 375,  1508 => 374,  1500 => 373,  1496 => 371,  1492 => 368,  1486 => 366,  1483 => 365,  1478 => 363,  1473 => 361,  1471 => 360,  1463 => 359,  1459 => 357,  1456 => 356,  1454 => 355,  1451 => 354,  1444 => 353,  1438 => 349,  1421 => 347,  1404 => 346,  1401 => 345,  1395 => 343,  1388 => 342,  1382 => 338,  1376 => 335,  1375 => 334,  1374 => 333,  1373 => 332,  1369 => 331,  1365 => 330,  1362 => 328,  1356 => 325,  1355 => 324,  1354 => 323,  1353 => 322,  1349 => 321,  1347 => 320,  1345 => 319,  1338 => 318,  1333 => 315,  1331 => 314,  1324 => 313,  1317 => 310,  1315 => 309,  1308 => 308,  1302 => 305,  1298 => 304,  1294 => 303,  1288 => 302,  1285 => 301,  1282 => 300,  1279 => 299,  1276 => 298,  1273 => 297,  1270 => 296,  1267 => 295,  1264 => 294,  1262 => 293,  1259 => 292,  1256 => 291,  1254 => 290,  1247 => 289,  1242 => 286,  1240 => 285,  1233 => 284,  1228 => 281,  1224 => 280,  1222 => 279,  1215 => 278,  1208 => 273,  1205 => 272,  1197 => 271,  1192 => 269,  1190 => 268,  1188 => 267,  1185 => 265,  1183 => 264,  1176 => 263,  1169 => 258,  1167 => 257,  1165 => 255,  1164 => 254,  1163 => 253,  1162 => 252,  1157 => 250,  1155 => 249,  1153 => 248,  1150 => 246,  1148 => 245,  1141 => 244,  1136 => 241,  1132 => 240,  1130 => 239,  1123 => 238,  1117 => 234,  1115 => 233,  1113 => 232,  1111 => 231,  1109 => 230,  1105 => 229,  1103 => 228,  1100 => 226,  1098 => 225,  1091 => 224,  1083 => 218,  1081 => 217,  1079 => 216,  1072 => 215,  1067 => 212,  1063 => 210,  1057 => 207,  1054 => 206,  1052 => 205,  1050 => 204,  1044 => 201,  1041 => 200,  1038 => 199,  1036 => 198,  1033 => 197,  1026 => 196,  1021 => 193,  1017 => 192,  1015 => 191,  1013 => 190,  1006 => 189,  997 => 183,  995 => 182,  990 => 180,  988 => 179,  982 => 176,  979 => 175,  976 => 174,  974 => 173,  971 => 172,  966 => 170,  961 => 169,  958 => 168,  956 => 167,  951 => 166,  947 => 164,  945 => 163,  928 => 162,  926 => 161,  922 => 157,  919 => 154,  918 => 153,  917 => 152,  915 => 151,  912 => 150,  909 => 148,  906 => 147,  903 => 145,  901 => 144,  899 => 143,  892 => 142,  886 => 122,  879 => 135,  876 => 134,  873 => 133,  870 => 132,  867 => 131,  864 => 130,  861 => 129,  858 => 128,  855 => 127,  852 => 126,  849 => 125,  847 => 124,  844 => 123,  841 => 122,  839 => 121,  832 => 120,  823 => 115,  819 => 114,  815 => 113,  812 => 112,  809 => 111,  806 => 110,  799 => 109,  791 => 105,  786 => 104,  783 => 103,  780 => 102,  773 => 101,  766 => 93,  764 => 92,  760 => 90,  758 => 89,  756 => 88,  754 => 86,  752 => 85,  750 => 84,  748 => 82,  746 => 81,  744 => 80,  733 => 79,  726 => 78,  721 => 73,  717 => 72,  715 => 71,  708 => 70,  701 => 67,  695 => 64,  690 => 63,  688 => 62,  686 => 61,  679 => 60,  674 => 57,  670 => 56,  663 => 55,  658 => 52,  655 => 51,  652 => 50,  649 => 49,  647 => 48,  640 => 47,  632 => 44,  629 => 43,  626 => 42,  623 => 41,  620 => 40,  617 => 39,  614 => 38,  607 => 37,  602 => 1727,  599 => 1726,  597 => 1719,  594 => 1718,  592 => 1678,  590 => 1664,  588 => 1624,  585 => 1623,  583 => 1613,  580 => 1612,  578 => 1593,  576 => 1546,  574 => 1500,  572 => 1466,  570 => 1408,  568 => 1394,  565 => 1393,  563 => 1388,  560 => 1387,  558 => 1374,  555 => 1373,  553 => 1368,  550 => 1367,  548 => 1351,  545 => 1350,  543 => 1338,  540 => 1337,  538 => 1324,  535 => 1323,  533 => 1314,  530 => 1313,  528 => 1306,  525 => 1305,  523 => 1275,  520 => 1274,  518 => 1267,  516 => 1226,  514 => 1220,  512 => 1214,  510 => 1197,  507 => 1196,  505 => 1193,  503 => 1179,  501 => 1161,  498 => 1160,  496 => 1155,  493 => 1154,  491 => 1149,  488 => 1148,  486 => 1139,  483 => 1138,  481 => 1131,  478 => 1130,  476 => 1123,  474 => 1113,  472 => 1103,  470 => 1098,  467 => 1097,  465 => 1093,  462 => 1092,  460 => 1064,  457 => 1063,  455 => 1038,  452 => 1037,  450 => 1018,  447 => 1017,  445 => 1001,  442 => 1000,  440 => 968,  437 => 967,  435 => 943,  432 => 942,  430 => 934,  427 => 933,  425 => 897,  422 => 896,  420 => 873,  417 => 871,  415 => 819,  412 => 818,  410 => 781,  407 => 780,  404 => 778,  402 => 763,  399 => 762,  397 => 706,  394 => 705,  392 => 698,  389 => 697,  386 => 695,  384 => 688,  381 => 687,  379 => 673,  376 => 672,  374 => 640,  371 => 639,  369 => 636,  366 => 635,  364 => 632,  361 => 631,  359 => 626,  356 => 625,  353 => 623,  351 => 594,  349 => 586,  347 => 562,  344 => 561,  342 => 536,  339 => 535,  337 => 519,  334 => 518,  332 => 504,  329 => 503,  327 => 462,  324 => 461,  322 => 425,  319 => 424,  317 => 418,  314 => 417,  312 => 392,  309 => 391,  307 => 353,  304 => 352,  302 => 342,  299 => 341,  297 => 318,  294 => 317,  292 => 313,  289 => 312,  287 => 308,  284 => 307,  282 => 289,  279 => 288,  277 => 284,  275 => 278,  273 => 263,  270 => 262,  268 => 244,  266 => 238,  264 => 224,  261 => 223,  259 => 215,  256 => 214,  254 => 196,  251 => 195,  249 => 189,  246 => 188,  244 => 142,  241 => 139,  239 => 120,  236 => 119,  234 => 109,  231 => 108,  229 => 101,  226 => 96,  224 => 78,  221 => 77,  219 => 70,  217 => 60,  215 => 55,  213 => 47,  211 => 37,  208 => 36,  205 => 34,  202 => 32,  199 => 26,  196 => 14,  193 => 5,  75 => 31,  68 => 30,  61 => 29,  54 => 28,  35 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\prestashop_ui_kit_base.html.twig");
    }
}
