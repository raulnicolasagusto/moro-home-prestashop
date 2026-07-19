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

/* @PrestaShop/Admin/macros.html.twig */
class __TwigTemplate_e37a203b0e362cf8cdadcc9c1ae793ef extends Template
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
        // line 8
        yield "
";
        // line 12
        yield "
";
        // line 18
        yield "
";
        // line 30
        yield "
";
        // line 38
        yield "
";
        // line 51
        yield "
";
        // line 68
        yield "
";
        // line 76
        yield "
";
        // line 106
        yield "
";
        // line 220
        yield "
 ";
        // line 267
        yield "
";
        // line 286
        yield "
";
        yield from [];
    }

    // line 5
    public function macro_form_label_tooltip($name = null, $tooltip = null, $placement = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "tooltip" => $tooltip,
            "placement" => $placement,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 6
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["name"] ?? null), 'label', ["label_attr" => ["tooltip" => ($context["tooltip"] ?? null), "tooltip_placement" => ((array_key_exists("placement", $context)) ? (Twig\Extension\CoreExtension::default(($context["placement"] ?? null), "top")) : ("top"))]]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function macro_check($variable = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "variable" => $variable,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 10
            yield "  ";
            yield (((array_key_exists("variable", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["variable"] ?? null)) > 0))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["variable"] ?? null), "html", null, true)) : (false));
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function macro_tooltip($text = null, $icon = null, $position = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "icon" => $icon,
            "position" => $position,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 14
            yield "  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text"] ?? null), "html", null, true);
            yield "\" data-html=\"true\" data-placement=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("position", $context)) ? (Twig\Extension\CoreExtension::default(($context["position"] ?? null), "top")) : ("top")), "html", null, true);
            yield "\">
    <i class=\"material-icons\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
            yield "</i>
  </span>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function macro_infotip($text = null, $use_raw = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "use_raw" => $use_raw,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 20
            yield "<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 22
            if ((($tmp = ($context["use_raw"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 23
                yield "      ";
                yield ($context["text"] ?? null);
                yield "
    ";
            } else {
                // line 25
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text"] ?? null), "html", null, true);
                yield "
    ";
            }
            // line 27
            yield "  </p>
</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 31
    public function macro_warningtip($text = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 32
            yield "<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text"] ?? null), "html", null, true);
            yield "
  </p>
</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function macro_label_with_help($label = null, $help = null, $class = "", $for = "", $isRequired = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "help" => $help,
            "class" => $class,
            "for" => $for,
            "isRequired" => $isRequired,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 40
            yield "<label";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["for"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["for"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"form-control-label ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\">
  ";
            // line 41
            if ((($tmp = ($context["isRequired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 42
                yield "    <span class=\"text-danger\">*</span>
  ";
            }
            // line 44
            yield "
  ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "
  ";
            // line 46
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["content" => ($context["help"] ?? null)]);
            yield "
</label>

<p class=\"sr-only\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["help"] ?? null), "html", null, true);
            yield "</p>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 53
    public function macro_sortable_column_header($title = null, $sortColumnName = null, $orderBy = null, $sortOrder = null, $prefix = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "title" => $title,
            "sortColumnName" => $sortColumnName,
            "orderBy" => $orderBy,
            "sortOrder" => $sortOrder,
            "prefix" => $prefix,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 54
            yield "  ";
            [$context["sortOrder"], $context["orderBy"], $context["prefix"]] =             [((array_key_exists("sortOrder", $context)) ? (Twig\Extension\CoreExtension::default(($context["sortOrder"] ?? null), "")) : ("")), ((array_key_exists("orderBy", $context)) ? (Twig\Extension\CoreExtension::default(($context["orderBy"] ?? null))) : ("")), ((array_key_exists("prefix", $context)) ? (Twig\Extension\CoreExtension::default(($context["prefix"] ?? null), "")) : (""))];
            // line 55
            yield "  <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sortColumnName"] ?? null), "html", null, true);
            yield "\"
      data-sort-prefix=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["prefix"] ?? null), "html", null, true);
            yield "\"
      ";
            // line 59
            if ((($context["orderBy"] ?? null) == ($context["sortColumnName"] ?? null))) {
                // line 60
                yield "        data-sort-is-current=\"true\"
        data-sort-direction=\"";
                // line 61
                yield (((($context["sortOrder"] ?? null) == "desc")) ? ("desc") : ("asc"));
                yield "\"
      ";
            }
            // line 63
            yield "    >
      <span role=\"columnheader\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort by", [], "Admin.Actions"), "html", null, true);
            yield "\"></span>
  </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 70
    public function macro_import_file_sample($label = null, $filename = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "filename" => $filename,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 71
            yield "    <a id=\"download-sample-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield "-file-link\" class=\"list-group-item list-group-item-action\"
       href=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_sample_download", ["sampleName" => ($context["filename"] ?? null)]), "html", null, true);
            yield "\">
        ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "
    </a>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 86
    public function macro_form_widget_with_error($form = null, $vars = null, $extraVars = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "vars" => $vars,
            "extraVars" => $extraVars,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 87
            yield "  ";
            $macros["self"] = $this->load("@PrestaShop/Admin/macros.html.twig", 87)->unwrap();
            // line 88
            yield "
  ";
            // line 89
            $context["vars"] = ((array_key_exists("vars", $context)) ? (Twig\Extension\CoreExtension::default(($context["vars"] ?? null), [])) : ([]));
            // line 90
            yield "  ";
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (Twig\Extension\CoreExtension::default(($context["extraVars"] ?? null), [])) : ([]));
            // line 91
            yield "  ";
            $context["attr"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["vars"] ?? null), "attr", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["vars"] ?? null), "attr", [], "any", false, false, false, 91), [])) : ([]));
            // line 92
            yield "  ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 92)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 92)) : (""))]);
            // line 93
            yield "  ";
            $context["vars"] = Twig\Extension\CoreExtension::merge(($context["vars"] ?? null), ["attr" => ($context["attr"] ?? null)]);
            // line 94
            yield "
  ";
            // line 95
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["vars"] ?? null));
            yield "

  ";
            // line 97
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "help", [], "any", true, true, false, 97) && CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "help", [], "any", false, false, false, 97))) {
                // line 98
                yield "      <small class=\"form-text\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "help", [], "any", false, false, false, 98), "html", null, true);
                yield "</small>
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 99
($context["form"] ?? null), "vars", [], "any", false, true, false, 99), "help", [], "any", true, true, false, 99) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 99), "help", [], "any", false, false, false, 99))) {
                // line 100
                yield "      <small class=\"form-text\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 100), "help", [], "any", false, false, false, 100), "html", null, true);
                yield "</small>
  ";
            }
            // line 102
            yield "
  ";
            // line 103
            yield $macros["self"]->getTemplateForMacro("macro_form_error_with_popover", $context, 103, $this->getSourceContext())->macro_form_error_with_popover(...[($context["form"] ?? null)]);
            yield "

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 116
    public function macro_form_error_with_popover($form = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 117
            yield "  ";
            $context["errors"] = [];
            // line 118
            yield "
  ";
            // line 119
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 119), "valid", [], "any", true, true, false, 119) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 119), "valid", [], "any", false, false, false, 119))) {
                // line 120
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 120), "errors", [], "any", false, false, false, 120));
                foreach ($context['_seq'] as $context["_key"] => $context["parentError"]) {
                    // line 121
                    yield "      ";
                    $context["errors"] = Twig\Extension\CoreExtension::merge(($context["errors"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, $context["parentError"], "message", [], "any", false, false, false, 121)]);
                    // line 122
                    yield "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['parentError'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                yield "
    ";
                // line 125
                yield "  ";
            }
            // line 126
            yield "
  ";
            // line 127
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
                // line 128
                yield "    ";
                // line 129
                yield "    ";
                $context["errorPopover"] = null;
                // line 130
                yield "
    ";
                // line 131
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 1)) {
                    // line 132
                    yield "      ";
                    $context["popoverContainer"] = ("popover-error-container-" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132));
                    // line 133
                    yield "      <div class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["popoverContainer"] ?? null), "html", null, true);
                    yield "\"></div>

      ";
                    // line 135
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 135), "errors_by_locale", [], "any", true, true, false, 135)) {
                        // line 136
                        yield "          ";
                        $context["popoverErrors"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 136), "errors_by_locale", [], "any", false, false, false, 136);
                        // line 137
                        yield "
          ";
                        // line 139
                        yield "          ";
                        $context["translatableErrors"] = [];
                        // line 140
                        yield "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["popoverErrors"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["translatableError"]) {
                            // line 141
                            yield "            ";
                            $context["translatableErrors"] = Twig\Extension\CoreExtension::merge(($context["translatableErrors"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, $context["translatableError"], "error_message", [], "any", false, false, false, 141)]);
                            // line 142
                            yield "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['translatableError'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 143
                        yield "
          ";
                        // line 145
                        yield "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 146
                            yield "            ";
                            if (!CoreExtension::inFilter($context["error"], ($context["translatableErrors"] ?? null))) {
                                // line 147
                                yield "              ";
                                $context["popoverErrors"] = Twig\Extension\CoreExtension::merge(($context["popoverErrors"] ?? null), [$context["error"]]);
                                // line 148
                                yield "            ";
                            }
                            // line 149
                            yield "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 150
                        yield "
        ";
                    } else {
                        // line 152
                        yield "          ";
                        $context["popoverErrors"] = ($context["errors"] ?? null);
                        // line 153
                        yield "      ";
                    }
                    // line 154
                    yield "
      ";
                    // line 155
                    $context["errorMessages"] = [];
                    // line 156
                    yield "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["popoverErrors"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["popoverError"]) {
                        // line 157
                        yield "        ";
                        $context["errorMessage"] = $context["popoverError"];
                        // line 158
                        yield "
        ";
                        // line 159
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["popoverError"], "error_message", [], "any", true, true, false, 159) && CoreExtension::getAttribute($this->env, $this->source, $context["popoverError"], "locale_name", [], "any", true, true, false, 159))) {
                            // line 160
                            yield "          ";
                            $context["errorMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%error_message% - Language: %language_name%", ["%error_message%" => CoreExtension::getAttribute($this->env, $this->source, $context["popoverError"], "error_message", [], "any", false, false, false, 160), "%language_name%" => CoreExtension::getAttribute($this->env, $this->source, $context["popoverError"], "locale_name", [], "any", false, false, false, 160)], "Admin.Notifications.Error");
                            // line 161
                            yield "        ";
                        }
                        // line 162
                        yield "
        ";
                        // line 163
                        $context["errorMessages"] = Twig\Extension\CoreExtension::merge(($context["errorMessages"] ?? null), [($context["errorMessage"] ?? null)]);
                        // line 164
                        yield "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['popoverError'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 165
                    yield "
      ";
                    // line 166
                    $context["popoverErrorContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 167
                        yield "        <div class=\"popover-error-list\">
          <ul>
            ";
                        // line 169
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["errorMessages"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["popoverError"]) {
                            // line 170
                            yield "              <li class=\"text-danger\">
                ";
                            // line 171
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["popoverError"], "html", null, true);
                            yield "
              </li>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['popoverError'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 174
                        yield "          </ul>
        </div>
      ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 177
                    yield "
      <template class=\"js-popover-error-content\" data-id=\"";
                    // line 178
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 178), "id", [], "any", false, false, false, 178), "html", null, true);
                    yield "\">
        ";
                    // line 179
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["popoverErrorContent"] ?? null), "html", null, true);
                    yield "
      </template>

      ";
                    // line 182
                    $context["errorPopover"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 183
                        yield "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                        // line 185
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 185), "id", [], "any", false, false, false, 185), "html", null, true);
                        yield "\"
          data-placement=\"bottom\"
          data-template=\x27<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>\x27
          data-trigger=\"hover\"
          data-container=\".";
                        // line 189
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["popoverContainer"] ?? null), "html", null, true);
                        yield "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u>";
                        // line 191
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% errors", ["%count%" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["popoverErrors"] ?? null))], "Admin.Global"), "html", null, true);
                        yield "</u>
        </span>
      ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 194
                    yield "
    ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 195
($context["form"] ?? null), "vars", [], "any", false, true, false, 195), "error_by_locale", [], "any", true, true, false, 195)) {
                    // line 196
                    yield "      ";
                    $context["errorByLocale"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%error_message% - Language: %language_name%", ["%error_message%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 196), "error_by_locale", [], "any", false, false, false, 196), "error_message", [], "any", false, false, false, 196), "%language_name%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 196), "error_by_locale", [], "any", false, false, false, 196), "locale_name", [], "any", false, false, false, 196)], "Admin.Notifications.Error");
                    // line 197
                    yield "      ";
                    $context["errors"] = [($context["errorByLocale"] ?? null)];
                    // line 198
                    yield "    ";
                }
                // line 199
                yield "
    <div class=\"invalid-feedback-container\">
      ";
                // line 201
                if ((($tmp =  !(null === ($context["errorPopover"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 202
                    yield "        <div class=\"text-danger\">
          ";
                    // line 203
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["errorPopover"] ?? null), "html", null, true);
                    yield "
        </div>
      ";
                } else {
                    // line 206
                    yield "        <div class=\"d-inline-block text-danger align-top\">
          <i class=\"material-icons form-error-icon\">error_outline</i>
        </div>
        <div class=\"d-inline-block\">
          ";
                    // line 210
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 211
                        yield "            <div class=\"text-danger\">
              ";
                        // line 212
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                        yield "
            </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 215
                    yield "        </div>
      ";
                }
                // line 217
                yield "    </div>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 227
    public function macro_form_group_row($form = null, $vars = null, $extraVars = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "vars" => $vars,
            "extraVars" => $extraVars,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 228
            yield "  ";
            $macros["self"] = $this->load("@PrestaShop/Admin/macros.html.twig", 228)->unwrap();
            // line 229
            yield "
  ";
            // line 230
            $context["class"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", true, true, false, 230)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", false, false, false, 230), "")) : (""));
            // line 231
            yield "  ";
            $context["inputType"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 231), "block_prefixes", [], "any", false, true, false, 231), 1, [], "any", true, true, false, 231)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 231), "block_prefixes", [], "any", false, false, false, 231), 1, [], "any", false, false, false, 231), "text")) : ("text"));
            // line 232
            yield "  ";
            $context["rowAttributes"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", true, true, false, 232)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", false, false, false, 232), [])) : ([]));
            // line 233
            yield "  <div class=\"form-group row type-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inputType"] ?? null), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rowAttributes"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rowAttr"], "html", null, true);
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['rowAttr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
    ";
            // line 234
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (Twig\Extension\CoreExtension::default(($context["extraVars"] ?? null), [])) : ([]));
            // line 235
            yield "
    ";
            // line 237
            yield "    ";
            $context["labelOnTop"] = false;
            // line 238
            yield "
    ";
            // line 239
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label_on_top", [], "any", true, true, false, 239)) {
                // line 240
                yield "      ";
                $context["labelOnTop"] = CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label_on_top", [], "any", false, false, false, 240);
                // line 241
                yield "    ";
            }
            // line 242
            yield "
    ";
            // line 243
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label", [], "any", true, true, false, 243)) {
                // line 244
                yield "      ";
                $context["isRequired"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 244), "required", [], "any", true, true, false, 244)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 244), "required", [], "any", false, false, false, 244), false)) : (false));
                // line 245
                yield "
      ";
                // line 246
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "required", [], "any", true, true, false, 246)) {
                    // line 247
                    yield "        ";
                    $context["isRequired"] = CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "required", [], "any", false, false, false, 247);
                    // line 248
                    yield "      ";
                }
                // line 249
                yield "
      <label for=\"";
                // line 250
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 250), "id", [], "any", false, false, false, 250), "html", null, true);
                yield "\" class=\"form-control-label ";
                yield (((($tmp = ($context["labelOnTop"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("label-on-top col-12") : (""));
                yield "\">
        ";
                // line 251
                if ((($tmp = ($context["isRequired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 252
                    yield "          <span class=\"text-danger\">*</span>
        ";
                }
                // line 254
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label", [], "any", false, false, false, 254), "html", null, true);
                yield "

        ";
                // line 256
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 256), "label_attr", [], "any", true, true, false, 256) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 256), "label_attr", [], "any", false, false, false, 256)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 256), "label_attr", [], "any", false, true, false, 256), "popover", [], "array", true, true, false, 256))) {
                    // line 257
                    yield "          ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["content" => (($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 257), "label_attr", [], "any", false, false, false, 257)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["popover"] ?? null) : null)]);
                    yield "
        ";
                }
                // line 259
                yield "      </label>
    ";
            }
            // line 261
            yield "
    <div class=\"";
            // line 262
            yield (((($tmp = ($context["labelOnTop"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("col-12") : ("col-sm"));
            yield "\">
      ";
            // line 263
            yield $macros["self"]->getTemplateForMacro("macro_form_widget_with_error", $context, 263, $this->getSourceContext())->macro_form_widget_with_error(...[($context["form"] ?? null), ($context["vars"] ?? null), ($context["extraVars"] ?? null)]);
            yield "
    </div>
  </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 268
    public function macro_multistore_switch($form = null, $extraVars = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "extraVars" => $extraVars,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 269
            yield "  ";
            $macros["self"] = $this->load("@PrestaShop/Admin/macros.html.twig", 269)->unwrap();
            // line 270
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shop_restriction_switch", [], "any", true, true, false, 270)) {
                // line 271
                yield "    ";
                $context["defaultLabel"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 272
                    yield "      <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check / Uncheck all", [], "Admin.Actions"), "html", null, true);
                    yield "</strong> <br>
      ";
                    // line 273
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are editing this page for a specific shop or group. Click \"%yes_label%\" to check all fields, \"%no_label%\" to uncheck all.", ["%yes_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes", [], "Admin.Global"), "%no_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No", [], "Admin.Global")], "Admin.Design.Help"), "html", null, true);
                    yield " <br>
      ";
                    // line 274
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you check a field, change its value, and save, the multistore behavior will not apply to this shop (or group), for this particular parameter.", [], "Admin.Design.Help"), "html", null, true);
                    yield "
    ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 276
                yield "
    ";
                // line 277
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "help", [], "any", true, true, false, 277)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 278
                    yield "      ";
                    $context["extraVars"] = Twig\Extension\CoreExtension::merge(($context["extraVars"] ?? null), ["help" => ($context["defaultLabel"] ?? null)]);
                    // line 279
                    yield "    ";
                }
                // line 280
                yield "
    ";
                // line 281
                $context["vars"] = ["attr" => ["class" => "js-multi-store-restriction-switch"]];
                // line 282
                yield "
    ";
                // line 283
                yield $macros["self"]->getTemplateForMacro("macro_form_group_row", $context, 283, $this->getSourceContext())->macro_form_group_row(...[CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shop_restriction_switch", [], "any", false, false, false, 283), ($context["vars"] ?? null), ($context["extraVars"] ?? null)]);
                yield "
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 287
    public function macro_language_dependant_select($form = null, $vars = null, $extraVars = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "vars" => $vars,
            "extraVars" => $extraVars,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 288
            yield "  ";
            $macros["self"] = $this->load("@PrestaShop/Admin/macros.html.twig", 288)->unwrap();
            // line 289
            yield "
  ";
            // line 290
            $context["class"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", true, true, false, 290)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", false, false, false, 290), "")) : (""));
            // line 291
            yield "  ";
            $context["inputType"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 291), "block_prefixes", [], "any", false, true, false, 291), 1, [], "any", true, true, false, 291)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 291), "block_prefixes", [], "any", false, false, false, 291), 1, [], "any", false, false, false, 291), "text")) : ("text"));
            // line 292
            yield "  ";
            $context["rowAttributes"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", true, true, false, 292)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", false, false, false, 292), [])) : ([]));
            // line 293
            yield "  ";
            $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 293), "attr", [], "any", false, false, false, 293);
            // line 294
            yield "  ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 294)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 294), "")) : ("")) . " language_dependant_select"))]);
            // line 295
            yield "  <div class=\"form-group row type-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inputType"] ?? null), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rowAttributes"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rowAttr"], "html", null, true);
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['rowAttr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
  ";
            // line 296
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (Twig\Extension\CoreExtension::default(($context["extraVars"] ?? null), [])) : ([]));
            // line 297
            yield "
  ";
            // line 299
            yield "  ";
            $context["labelOnTop"] = false;
            // line 300
            yield "
  ";
            // line 301
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label_on_top", [], "any", true, true, false, 301)) {
                // line 302
                yield "    ";
                $context["labelOnTop"] = CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label_on_top", [], "any", false, false, false, 302);
                // line 303
                yield "  ";
            }
            // line 304
            yield "
  ";
            // line 305
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label", [], "any", true, true, false, 305)) {
                // line 306
                yield "    ";
                $context["isRequired"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 306), "required", [], "any", true, true, false, 306)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 306), "required", [], "any", false, false, false, 306), false)) : (false));
                // line 307
                yield "
    ";
                // line 308
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "required", [], "any", true, true, false, 308)) {
                    // line 309
                    yield "      ";
                    $context["isRequired"] = CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "required", [], "any", false, false, false, 309);
                    // line 310
                    yield "    ";
                }
                // line 311
                yield "
    <label for=\"";
                // line 312
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 312), "id", [], "any", false, false, false, 312), "html", null, true);
                yield "\" class=\"form-control-label ";
                yield (((($tmp = ($context["labelOnTop"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("label-on-top col-12") : (""));
                yield "\">
      ";
                // line 313
                if ((($tmp = ($context["isRequired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 314
                    yield "        <span class=\"text-danger\">*</span>
      ";
                }
                // line 316
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label", [], "any", false, false, false, 316), "html", null, true);
                yield "
    </label>
  ";
            }
            // line 319
            yield "
  <div class=\"";
            // line 320
            yield "col-sm-5";
            yield "\">
    ";
            // line 321
            yield $macros["self"]->getTemplateForMacro("macro_form_widget_with_error", $context, 321, $this->getSourceContext())->macro_form_widget_with_error(...[($context["form"] ?? null), ["attr" => ($context["attr"] ?? null)], ($context["extraVars"] ?? null)]);
            yield "
  </div>
  ";
            // line 323
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "languages", [], "any", true, true, false, 323) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "languages", [], "any", false, false, false, 323)))) {
                // line 324
                yield "  <div class=\"";
                yield "col-sm-3";
                yield "\">
    <select name=\"";
                // line 325
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 325), "id", [], "any", false, false, false, 325) . "_language"), "html", null, true);
                yield "\" class=\"custom-select language_dependant_select_language\">
    ";
                // line 326
                if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "languages", [], "any", false, false, false, 326))) {
                    // line 327
                    yield "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "languages", [], "any", false, false, false, 327));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 328
                        yield "        <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "id", [], "any", false, false, false, 328), "html", null, true);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "value", [], "any", false, false, false, 328);
                        yield "</option>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 330
                    yield "    ";
                }
                // line 331
                yield "    </select>
  </div>
  ";
            }
            // line 334
            yield "  </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/macros.html.twig";
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
        return array (  1084 => 334,  1079 => 331,  1076 => 330,  1065 => 328,  1060 => 327,  1058 => 326,  1054 => 325,  1049 => 324,  1047 => 323,  1042 => 321,  1038 => 320,  1035 => 319,  1028 => 316,  1024 => 314,  1022 => 313,  1016 => 312,  1013 => 311,  1010 => 310,  1007 => 309,  1005 => 308,  1002 => 307,  999 => 306,  997 => 305,  994 => 304,  991 => 303,  988 => 302,  986 => 301,  983 => 300,  980 => 299,  977 => 297,  975 => 296,  955 => 295,  952 => 294,  949 => 293,  946 => 292,  943 => 291,  941 => 290,  938 => 289,  935 => 288,  921 => 287,  912 => 283,  909 => 282,  907 => 281,  904 => 280,  901 => 279,  898 => 278,  896 => 277,  893 => 276,  887 => 274,  883 => 273,  878 => 272,  875 => 271,  872 => 270,  869 => 269,  856 => 268,  846 => 263,  842 => 262,  839 => 261,  835 => 259,  829 => 257,  827 => 256,  821 => 254,  817 => 252,  815 => 251,  809 => 250,  806 => 249,  803 => 248,  800 => 247,  798 => 246,  795 => 245,  792 => 244,  790 => 243,  787 => 242,  784 => 241,  781 => 240,  779 => 239,  776 => 238,  773 => 237,  770 => 235,  768 => 234,  748 => 233,  745 => 232,  742 => 231,  740 => 230,  737 => 229,  734 => 228,  720 => 227,  712 => 217,  708 => 215,  699 => 212,  696 => 211,  692 => 210,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  671 => 199,  668 => 198,  665 => 197,  662 => 196,  660 => 195,  657 => 194,  650 => 191,  645 => 189,  638 => 185,  634 => 183,  632 => 182,  626 => 179,  622 => 178,  619 => 177,  613 => 174,  604 => 171,  601 => 170,  597 => 169,  593 => 167,  591 => 166,  588 => 165,  582 => 164,  580 => 163,  577 => 162,  574 => 161,  571 => 160,  569 => 159,  566 => 158,  563 => 157,  558 => 156,  556 => 155,  553 => 154,  550 => 153,  547 => 152,  543 => 150,  537 => 149,  534 => 148,  531 => 147,  528 => 146,  523 => 145,  520 => 143,  514 => 142,  511 => 141,  506 => 140,  503 => 139,  500 => 137,  497 => 136,  495 => 135,  489 => 133,  486 => 132,  484 => 131,  481 => 130,  478 => 129,  476 => 128,  474 => 127,  471 => 126,  468 => 125,  465 => 123,  459 => 122,  456 => 121,  451 => 120,  449 => 119,  446 => 118,  443 => 117,  431 => 116,  422 => 103,  419 => 102,  413 => 100,  411 => 99,  406 => 98,  404 => 97,  399 => 95,  396 => 94,  393 => 93,  390 => 92,  387 => 91,  384 => 90,  382 => 89,  379 => 88,  376 => 87,  362 => 86,  353 => 73,  349 => 72,  344 => 71,  331 => 70,  322 => 65,  318 => 64,  315 => 63,  310 => 61,  307 => 60,  305 => 59,  301 => 58,  297 => 57,  293 => 55,  290 => 54,  274 => 53,  266 => 49,  260 => 46,  256 => 45,  253 => 44,  249 => 42,  247 => 41,  236 => 40,  220 => 39,  210 => 34,  206 => 32,  194 => 31,  186 => 27,  180 => 25,  174 => 23,  172 => 22,  168 => 20,  155 => 19,  146 => 15,  139 => 14,  125 => 13,  116 => 10,  104 => 9,  95 => 6,  81 => 5,  75 => 286,  72 => 267,  69 => 220,  66 => 106,  63 => 76,  60 => 68,  57 => 51,  54 => 38,  51 => 30,  48 => 18,  45 => 12,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/macros.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\macros.html.twig");
    }
}
