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

/* @PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig */
class __TwigTemplate_7cd63621564efc896ab63d25fd70ede7 extends Template
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
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'collection_widget' => [$this, 'block_collection_widget'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_options' => [$this, 'block_choice_widget_options'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'integer_widget' => [$this, 'block_integer_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'url_widget' => [$this, 'block_url_widget'],
            'search_widget' => [$this, 'block_search_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'hidden_widget' => [$this, 'block_hidden_widget'],
            'email_widget' => [$this, 'block_email_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'submit_widget' => [$this, 'block_submit_widget'],
            'reset_widget' => [$this, 'block_reset_widget'],
            'form_label' => [$this, 'block_form_label'],
            'button_label' => [$this, 'block_button_label'],
            'repeated_row' => [$this, 'block_repeated_row'],
            'form_row' => [$this, 'block_form_row'],
            'button_row' => [$this, 'block_button_row'],
            'hidden_row' => [$this, 'block_hidden_row'],
            'form' => [$this, 'block_form'],
            'form_start' => [$this, 'block_form_start'],
            'form_end' => [$this, 'block_form_end'],
            'form_enctype' => [$this, 'block_form_enctype'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_rest' => [$this, 'block_form_rest'],
            'form_rows' => [$this, 'block_form_rows'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'widget_container_attributes' => [$this, 'block_widget_container_attributes'],
            'button_attributes' => [$this, 'block_button_attributes'],
            'attributes' => [$this, 'block_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield from $this->unwrap()->yieldBlock('form_widget', $context, $blocks);
        // line 15
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 21
        yield from $this->unwrap()->yieldBlock('form_widget_compound', $context, $blocks);
        // line 31
        yield from $this->unwrap()->yieldBlock('collection_widget', $context, $blocks);
        // line 38
        yield from $this->unwrap()->yieldBlock('textarea_widget', $context, $blocks);
        // line 43
        yield from $this->unwrap()->yieldBlock('choice_widget', $context, $blocks);
        // line 51
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 60
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 81
        yield from $this->unwrap()->yieldBlock('choice_widget_options', $context, $blocks);
        // line 94
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 100
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 106
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 119
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 133
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 144
        yield from $this->unwrap()->yieldBlock('number_widget', $context, $blocks);
        // line 150
        yield from $this->unwrap()->yieldBlock('integer_widget', $context, $blocks);
        // line 155
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 159
        yield from $this->unwrap()->yieldBlock('url_widget', $context, $blocks);
        // line 164
        yield from $this->unwrap()->yieldBlock('search_widget', $context, $blocks);
        // line 169
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 174
        yield from $this->unwrap()->yieldBlock('password_widget', $context, $blocks);
        // line 179
        yield from $this->unwrap()->yieldBlock('hidden_widget', $context, $blocks);
        // line 184
        yield from $this->unwrap()->yieldBlock('email_widget', $context, $blocks);
        // line 189
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 203
        yield from $this->unwrap()->yieldBlock('submit_widget', $context, $blocks);
        // line 208
        yield from $this->unwrap()->yieldBlock('reset_widget', $context, $blocks);
        // line 215
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 249
        yield from $this->unwrap()->yieldBlock('button_label', $context, $blocks);
        // line 253
        yield from $this->unwrap()->yieldBlock('repeated_row', $context, $blocks);
        // line 261
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 269
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 275
        yield from $this->unwrap()->yieldBlock('hidden_row', $context, $blocks);
        // line 281
        yield from $this->unwrap()->yieldBlock('form', $context, $blocks);
        // line 287
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 304
        yield from $this->unwrap()->yieldBlock('form_end', $context, $blocks);
        // line 311
        yield from $this->unwrap()->yieldBlock('form_enctype', $context, $blocks);
        // line 315
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 325
        yield from $this->unwrap()->yieldBlock('form_rest', $context, $blocks);
        // line 336
        yield "
";
        // line 339
        yield from $this->unwrap()->yieldBlock('form_rows', $context, $blocks);
        // line 345
        yield from $this->unwrap()->yieldBlock('widget_attributes', $context, $blocks);
        // line 362
        yield from $this->unwrap()->yieldBlock('widget_container_attributes', $context, $blocks);
        // line 376
        yield from $this->unwrap()->yieldBlock('button_attributes', $context, $blocks);
        // line 390
        yield from $this->unwrap()->yieldBlock('attributes', $context, $blocks);
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        if ((($tmp = ($context["compound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield from             $this->unwrap()->yieldBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 11
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "text")) : ("text"));
        // line 17
        yield "<input type=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
        yield "\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield " ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
        }
        yield "/>
  ";
        // line 18
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/form_max_length.html.twig", ["attr" => ($context["attr"] ?? null)]);
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_compound(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 23
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 23))) {
            // line 24
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        // line 26
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 28
        yield "</div>";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        if (array_key_exists("prototype", $context)) {
            // line 33
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
        }
        // line 35
        yield from         $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "<textarea ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
        yield "</textarea>
  ";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/form_max_length.html.twig", ["attr" => ($context["attr"] ?? null)]);
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        if ((($tmp = ($context["expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield from             $this->unwrap()->yieldBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 47
            yield from             $this->unwrap()->yieldBlock("choice_widget_collapsed", $context, $blocks);
        }
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 54
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 55
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "</div>";
        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 61
        if ((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 62
            $context["required"] = false;
        }
        // line 64
        yield "<select ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " multiple=\"multiple\"";
        }
        yield ">";
        // line 65
        if ((($tmp =  !(null === ($context["placeholder"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "<option
        value=\"\"";
            // line 67
            if ((($context["required"] ?? null) && Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null)))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield (((($context["placeholder"] ?? null) != "")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "html", null, true)) : (""));
            yield "</option>";
        }
        // line 69
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["preferred_choices"] ?? null)) > 0)) {
            // line 70
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 71
            yield from             $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
            // line 72
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 73
                yield "<option disabled=\"disabled\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["separator"] ?? null), "html", null, true);
                yield "</option>";
            }
        }
        // line 76
        $context["options"] = ($context["choices"] ?? null);
        // line 77
        yield from         $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
        // line 78
        yield "</select>";
        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_options(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 83
            if (is_iterable($context["choice"])) {
                // line 84
                yield "<optgroup label=\"";
                yield (((($context["choice_translation_domain"] ?? null) === false)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["group_label"], "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], ($context["choice_translation_domain"] ?? null)), "html", null, true)));
                yield "\">
                ";
                // line 85
                $context["options"] = $context["choice"];
                // line 86
                yield from                 $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
                // line 87
                yield "</optgroup>";
            } else {
                // line 89
                yield "<option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 89), "html", null, true);
                yield "\"";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " ";
                    $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 89);
                    yield from                     $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield (((($context["choice_translation_domain"] ?? null) === false)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 89), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 89), [], ($context["choice_translation_domain"] ?? null)), "html", null, true)));
                yield "</option>";
            }
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
        unset($context['_seq'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 95
        $context["switch"] = ((array_key_exists("switch", $context)) ? (Twig\Extension\CoreExtension::default(($context["switch"] ?? null), "")) : (""));
        // line 96
        yield "<input type=\"checkbox\"
         ";
        // line 97
        if ((($tmp = ($context["switch"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "data-toggle=\"switch\"";
        }
        yield " ";
        if ((($tmp = ($context["switch"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["switch"] ?? null), "html", null, true);
            yield "\"";
        }
        yield " ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"";
        }
        if ((($tmp = ($context["checked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked=\"checked\"";
        }
        yield " />
";
        yield from [];
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 101
        yield "<input
    type=\"radio\" ";
        // line 102
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"";
        }
        if ((($tmp = ($context["checked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked=\"checked\"";
        }
        yield " />
  <i class=\"form-check-round\"></i>
";
        yield from [];
    }

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 107
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 108
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 110
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 111
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 111), 'errors');
            // line 112
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 112), 'errors');
            // line 113
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 113), 'widget');
            // line 114
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 114), 'widget');
            // line 115
            yield "</div>";
        }
        yield from [];
    }

    // line 119
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 120
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 121
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 123
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 124
            yield Twig\Extension\CoreExtension::replace(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 125
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 125), 'widget'), "{{ month }}" =>             // line 126
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 126), 'widget'), "{{ day }}" =>             // line 127
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 127), 'widget')]);
            // line 129
            yield "</div>";
        }
        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 134
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 135
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 138
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
      ";
            // line 139
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 139), 'widget', ($context["vars"] ?? null));
            if ((($tmp = ($context["with_minutes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ":";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 139), 'widget', ($context["vars"] ?? null));
            }
            if ((($tmp = ($context["with_seconds"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ":";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 139), 'widget', ($context["vars"] ?? null));
            }
            // line 140
            yield "    </div>";
        }
        yield from [];
    }

    // line 144
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_number_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 146
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "text")) : ("text"));
        // line 147
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integer_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 151
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "number")) : ("number"));
        // line 152
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 155
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_money_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 156
        yield Twig\Extension\CoreExtension::replace(($context["money_pattern"] ?? null), ["{{ widget }}" =>         $this->unwrap()->renderBlock("form_widget_simple", $context, $blocks)]);
        yield from [];
    }

    // line 159
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_url_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 160
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "url")) : ("url"));
        // line 161
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 164
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 165
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "search")) : ("search"));
        // line 166
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_percent_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "text")) : ("text"));
        // line 171
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield " %";
        yield from [];
    }

    // line 174
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_password_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "password")) : ("password"));
        // line 176
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 179
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hidden_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 180
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "hidden")) : ("hidden"));
        // line 181
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 184
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_email_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 185
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "email")) : ("email"));
        // line 186
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 189
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 190
        if (Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) {
            // line 191
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 192
                $context["label"] = Twig\Extension\CoreExtension::replace(($context["label_format"] ?? null), ["%name%" =>                 // line 193
($context["name"] ?? null), "%id%" =>                 // line 194
($context["id"] ?? null)]);
            } else {
                // line 197
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 200
        yield "<button type=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "button")) : ("button")), "html", null, true);
        yield "\" ";
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
        yield "</button>";
        yield from [];
    }

    // line 203
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submit_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "submit")) : ("submit"));
        // line 205
        yield from         $this->unwrap()->yieldBlock("button_widget", $context, $blocks);
        yield from [];
    }

    // line 208
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_reset_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "reset")) : ("reset"));
        // line 210
        yield from         $this->unwrap()->yieldBlock("button_widget", $context, $blocks);
        yield from [];
    }

    // line 215
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 216
        if ((($tmp =  !(($context["label"] ?? null) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 217
            if ((($tmp =  !($context["compound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 218
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 220
            yield "    ";
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 221
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 221)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 221), "")) : ("")) . " required"))]);
            }
            // line 223
            yield "    ";
            if (Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) {
                // line 224
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 225
                    $context["label"] = Twig\Extension\CoreExtension::replace(($context["label_format"] ?? null), ["%name%" =>                     // line 226
($context["name"] ?? null), "%id%" =>                     // line 227
($context["id"] ?? null)]);
                } else {
                    // line 230
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 233
            yield "<label";
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
            yield (((($context["translation_domain"] ?? null) === false)) ? ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["label"] ?? null))) : ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(($context["label"] ?? null))));
            yield "
      ";
            // line 234
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip", [], "array", true, true, false, 234)) {
                // line 235
                yield "        ";
                $context["placement"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip_placement", [], "array", true, true, false, 235)) ? ((($_v0 = ($context["label_attr"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["tooltip_placement"] ?? null) : null)) : ("top"));
                // line 236
                yield "        <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placement"] ?? null), "html", null, true);
                yield "\"
           title=\"";
                // line 237
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["label_attr"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["tooltip"] ?? null) : null), "html", null, true);
                yield "\"></i>
      ";
            }
            // line 239
            yield "
      ";
            // line 240
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover", [], "array", true, true, false, 240)) {
                // line 241
                yield "        ";
                $context["placement"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover_placement", [], "array", true, true, false, 241)) ? ((($_v2 = ($context["label_attr"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["popover_placement"] ?? null) : null)) : ("top"));
                // line 242
                yield "        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["placement" => ($context["placement"] ?? null), "content" => (($_v3 = ($context["label_attr"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["popover"] ?? null) : null)]);
                yield "
      ";
            }
            // line 244
            yield "    </label>";
        }
        yield from [];
    }

    // line 249
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 253
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_repeated_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 258
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        yield from [];
    }

    // line 261
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 262
        yield "<div>";
        // line 263
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 264
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 265
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 266
        yield "</div>";
        yield from [];
    }

    // line 269
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 270
        yield "<div>";
        // line 271
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 272
        yield "</div>";
        yield from [];
    }

    // line 275
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hidden_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 276
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        yield from [];
    }

    // line 281
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 282
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        // line 283
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 284
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield from [];
    }

    // line 287
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 288
        $context["method"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["method"] ?? null));
        // line 289
        if (CoreExtension::inFilter(($context["method"] ?? null), ["GET", "POST"])) {
            // line 290
            $context["form_method"] = ($context["method"] ?? null);
        } else {
            // line 292
            $context["form_method"] = "POST";
        }
        // line 294
        yield "<form name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "\"
        method=\"";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["form_method"] ?? null)), "html", null, true);
        yield "\"
        action=\"";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "html", null, true);
        yield "\"
        ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["attr"] ?? null));
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
        // line 298
        yield "        ";
        if ((($tmp = ($context["multipart"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " enctype=\"multipart/form-data\"";
        }
        yield ">";
        // line 299
        if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
            // line 300
            yield "<input type=\"hidden\" name=\"_method\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["method"] ?? null), "html", null, true);
            yield "\"/>";
        }
        yield from [];
    }

    // line 304
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 305
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 306
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        }
        // line 308
        yield "</form>";
        yield from [];
    }

    // line 311
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_enctype(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 312
        if ((($tmp = ($context["multipart"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "enctype=\"multipart/form-data\"";
        }
        yield from [];
    }

    // line 315
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 316
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 317
            yield "<ul>";
            // line 318
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 319
                yield "<li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 319), "html", null, true);
                yield "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 321
            yield "</ul>";
        }
        yield from [];
    }

    // line 325
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_rest(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 326
        $macros["ps"] = $this->load("@PrestaShop/Admin/macros.html.twig", 326)->unwrap();
        // line 327
        yield "
  ";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 329
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 329)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 330
                yield $macros["ps"]->getTemplateForMacro("macro_form_group_row", $context, 330, $this->getSourceContext())->macro_form_group_row(...[$context["child"], ["attr" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 330), "attr", [], "any", false, false, false, 330)], ["label" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 331
$context["child"], "vars", [], "any", false, false, false, 331), "label", [], "any", false, false, false, 331)]]);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 339
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_rows(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 340
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 341
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 345
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 346
        yield "id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
        yield "\"";
        // line 347
        if ((((array_key_exists("read_only", $context)) ? (Twig\Extension\CoreExtension::default(($context["read_only"] ?? null), false)) : (false)) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "readonly", [], "any", true, true, false, 347))) {
            yield " readonly=\"readonly\"";
        }
        // line 348
        if ((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " disabled=\"disabled\"";
        }
        // line 349
        if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " required=\"required\"";
        }
        // line 350
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 351
            yield " ";
            // line 352
            if (CoreExtension::inFilter($context["attrname"], ["placeholder", "title"])) {
                // line 353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            } elseif ((            // line 354
$context["attrvalue"] === true)) {
                // line 355
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "\"";
            } elseif ((($tmp =  !(            // line 356
$context["attrvalue"] === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 357
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 362
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_container_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 363
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["id"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 364
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 365
            yield " ";
            // line 366
            if (CoreExtension::inFilter($context["attrname"], ["placeholder", "title"])) {
                // line 367
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            } elseif ((            // line 368
$context["attrvalue"] === true)) {
                // line 369
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "\"";
            } elseif ((($tmp =  !(            // line 370
$context["attrvalue"] === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 371
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 376
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 377
        yield "id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
        yield "\"";
        if ((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " disabled=\"disabled\"";
        }
        // line 378
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 379
            yield " ";
            // line 380
            if (CoreExtension::inFilter($context["attrname"], ["placeholder", "title"])) {
                // line 381
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            } elseif ((            // line 382
$context["attrvalue"] === true)) {
                // line 383
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "\"";
            } elseif ((($tmp =  !(            // line 384
$context["attrvalue"] === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 385
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 390
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 392
            yield " ";
            // line 393
            if (CoreExtension::inFilter($context["attrname"], ["placeholder", "title"])) {
                // line 394
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            } elseif ((            // line 395
$context["attrvalue"] === true)) {
                // line 396
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "\"";
            } elseif ((($tmp =  !(            // line 397
$context["attrvalue"] === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 398
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1321 => 398,  1319 => 397,  1314 => 396,  1312 => 395,  1307 => 394,  1305 => 393,  1303 => 392,  1299 => 391,  1292 => 390,  1279 => 385,  1277 => 384,  1272 => 383,  1270 => 382,  1265 => 381,  1263 => 380,  1261 => 379,  1257 => 378,  1248 => 377,  1241 => 376,  1228 => 371,  1226 => 370,  1221 => 369,  1219 => 368,  1214 => 367,  1212 => 366,  1210 => 365,  1206 => 364,  1200 => 363,  1193 => 362,  1180 => 357,  1178 => 356,  1173 => 355,  1171 => 354,  1166 => 353,  1164 => 352,  1162 => 351,  1158 => 350,  1154 => 349,  1150 => 348,  1146 => 347,  1140 => 346,  1133 => 345,  1124 => 341,  1120 => 340,  1113 => 339,  1103 => 331,  1102 => 330,  1100 => 329,  1096 => 328,  1093 => 327,  1091 => 326,  1084 => 325,  1078 => 321,  1070 => 319,  1066 => 318,  1064 => 317,  1062 => 316,  1055 => 315,  1048 => 312,  1041 => 311,  1036 => 308,  1033 => 306,  1031 => 305,  1024 => 304,  1016 => 300,  1014 => 299,  1008 => 298,  995 => 297,  991 => 296,  987 => 295,  982 => 294,  979 => 292,  976 => 290,  974 => 289,  972 => 288,  965 => 287,  960 => 284,  958 => 283,  956 => 282,  949 => 281,  944 => 276,  937 => 275,  932 => 272,  930 => 271,  928 => 270,  921 => 269,  916 => 266,  914 => 265,  912 => 264,  910 => 263,  908 => 262,  901 => 261,  896 => 258,  889 => 253,  879 => 249,  873 => 244,  867 => 242,  864 => 241,  862 => 240,  859 => 239,  854 => 237,  849 => 236,  846 => 235,  844 => 234,  826 => 233,  822 => 230,  819 => 227,  818 => 226,  817 => 225,  815 => 224,  812 => 223,  809 => 221,  806 => 220,  803 => 218,  801 => 217,  799 => 216,  792 => 215,  787 => 210,  785 => 209,  778 => 208,  773 => 205,  771 => 204,  764 => 203,  753 => 200,  749 => 197,  746 => 194,  745 => 193,  744 => 192,  742 => 191,  740 => 190,  733 => 189,  728 => 186,  726 => 185,  719 => 184,  714 => 181,  712 => 180,  705 => 179,  700 => 176,  698 => 175,  691 => 174,  685 => 171,  683 => 170,  676 => 169,  671 => 166,  669 => 165,  662 => 164,  657 => 161,  655 => 160,  648 => 159,  643 => 156,  636 => 155,  631 => 152,  629 => 151,  622 => 150,  617 => 147,  615 => 146,  608 => 144,  602 => 140,  592 => 139,  587 => 138,  585 => 137,  582 => 135,  580 => 134,  573 => 133,  567 => 129,  565 => 127,  564 => 126,  563 => 125,  562 => 124,  558 => 123,  555 => 121,  553 => 120,  546 => 119,  540 => 115,  538 => 114,  536 => 113,  534 => 112,  532 => 111,  528 => 110,  525 => 108,  523 => 107,  516 => 106,  500 => 102,  497 => 101,  490 => 100,  465 => 97,  462 => 96,  460 => 95,  453 => 94,  422 => 89,  419 => 87,  417 => 86,  415 => 85,  410 => 84,  408 => 83,  391 => 82,  384 => 81,  379 => 78,  377 => 77,  375 => 76,  369 => 73,  367 => 72,  365 => 71,  363 => 70,  361 => 69,  353 => 67,  350 => 66,  348 => 65,  341 => 64,  338 => 62,  336 => 61,  329 => 60,  324 => 57,  318 => 55,  316 => 54,  312 => 53,  308 => 52,  301 => 51,  295 => 47,  292 => 45,  290 => 44,  283 => 43,  278 => 40,  271 => 39,  264 => 38,  259 => 35,  256 => 33,  254 => 32,  247 => 31,  242 => 28,  240 => 27,  238 => 26,  235 => 24,  233 => 23,  229 => 22,  222 => 21,  217 => 18,  204 => 17,  202 => 16,  195 => 15,  189 => 11,  186 => 9,  184 => 8,  177 => 7,  172 => 390,  170 => 376,  168 => 362,  166 => 345,  164 => 339,  161 => 336,  159 => 325,  157 => 315,  155 => 311,  153 => 304,  151 => 287,  149 => 281,  147 => 275,  145 => 269,  143 => 261,  141 => 253,  139 => 249,  137 => 215,  135 => 208,  133 => 203,  131 => 189,  129 => 184,  127 => 179,  125 => 174,  123 => 169,  121 => 164,  119 => 159,  117 => 155,  115 => 150,  113 => 144,  111 => 133,  109 => 119,  107 => 106,  105 => 100,  103 => 94,  101 => 81,  99 => 60,  97 => 51,  95 => 43,  93 => 38,  91 => 31,  89 => 21,  87 => 15,  85 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\form_div_layout.html.twig");
    }
}
