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

/* @PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig */
class __TwigTemplate_a2c658894a7cd806c727ac74030ef04e extends Template
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
            'translatable_choice_widget' => [$this, 'block_translatable_choice_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield from $this->unwrap()->yieldBlock('translatable_choice_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_choice_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "  ";
        $macros["ps"] = $this->load("@PrestaShop/Admin/macros.html.twig", 6)->unwrap();
        // line 7
        yield "
  ";
        // line 8
        $context["class"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", false, false, false, 8), "")) : (""));
        // line 9
        yield "  ";
        $context["rowAttributes"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", false, false, false, 9), [])) : ([]));
        // line 10
        yield "  ";
        $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 10), "attr", [], "any", false, false, false, 10);
        // line 11
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 11), "")) : ("")) . " custom-select translatable_choice"))]);
        // line 12
        yield "  <div class=\"form-group row type-choice ";
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
        // line 13
        $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (Twig\Extension\CoreExtension::default(($context["extraVars"] ?? null), [])) : ([]));
        // line 14
        yield "
  ";
        // line 16
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 16), "choices", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["language"] => $context["choices"]) {
            // line 17
            yield "    <div class=\"col-sm-6\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 17), "default_locale", [], "any", true, true, false, 17) &&  !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 17), "default_locale", [], "any", false, false, false, 17) === $context["language"]))) {
                yield "style=\"display: none\"";
            }
            yield ">
      <select class=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 18), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18) . "_") . $context["language"]), "html", null, true);
            yield "\" data-language=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["language"], "html", null, true);
            yield "\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["choices"]);
            foreach ($context['_seq'] as $context["choiceValue"] => $context["choiceLabel"]) {
                // line 20
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choiceValue"], "html", null, true);
                yield "\"
            ";
                // line 21
                if (((array_key_exists("value", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), $context["language"], [], "array", true, true, false, 21)) && ($context["choiceValue"] === (($_v0 = ($context["value"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = $context["language"]) instanceof \Stringable ? (string) $_v1 : $_v1)] ?? null) : null)))) {
                    yield " selected=\"selected\"";
                }
                // line 22
                yield "             ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 22), "row_attr", [], "any", false, true, false, 22), $context["language"], [], "array", false, true, false, 22), $context["choiceValue"], [], "array", true, true, false, 22) && is_iterable((($_v2 = (($_v3 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 22), "row_attr", [], "any", false, false, false, 22)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[(($_v4 = $context["language"]) instanceof \Stringable ? (string) $_v4 : $_v4)] ?? null) : null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v5 = $context["choiceValue"]) instanceof \Stringable ? (string) $_v5 : $_v5)] ?? null) : null)))) {
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((($_v6 = (($_v7 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 22), "row_attr", [], "any", false, false, false, 22)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[(($_v8 = $context["language"]) instanceof \Stringable ? (string) $_v8 : $_v8)] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[(($_v9 = $context["choiceValue"]) instanceof \Stringable ? (string) $_v9 : $_v9)] ?? null) : null));
                    foreach ($context['_seq'] as $context["optionKey"] => $context["optionAttr"]) {
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["optionKey"], "html", null, true);
                        yield "=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["optionAttr"], "html", null, true);
                        yield "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['optionKey'], $context['optionAttr'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                yield ">";
                yield ((( !array_key_exists("choice_translation_domain", $context) || (($context["choice_translation_domain"] ?? null) === false))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choiceLabel"], "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["choiceLabel"], [], ($context["choice_translation_domain"] ?? null)), "html", null, true)));
                yield "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['choiceValue'], $context['choiceLabel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "      </select>
      <input type=\"hidden\" id=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25) . "_") . $context["language"]) . "_value"), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 25), "full_name", [], "any", false, false, false, 25) . "[") . $context["language"]) . "]"), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["choices"]), "html", null, true);
            yield "\" />
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['language'], $context['choices'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
  ";
        // line 30
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 30), "locales", [], "any", true, true, false, 30) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 30), "locales", [], "any", false, false, false, 30)))) {
            // line 31
            yield "    <div class=\"col-sm-3\">
      <select name=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32) . "_language"), "html", null, true);
            yield "\" class=\"custom-select translatable_choice_language\">
        ";
            // line 33
            if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 33), "locales", [], "any", false, false, false, 33))) {
                // line 34
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 34), "locales", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 35
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "id_lang", [], "any", false, false, false, 35), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "iso_code", [], "any", false, false, false, 35) . " - ") . CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 35)), "html", null, true);
                    yield "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                yield "        ";
            }
            // line 38
            yield "      </select>
    </div>
  ";
        }
        // line 41
        yield "
  ";
        // line 43
        yield "  ";
        if (array_key_exists("button", $context)) {
            // line 44
            yield "    <div class=\"col-sm-3\">
      <button type=\"button\" ";
            // line 45
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "id", [], "any", true, true, false, 45)) {
                yield "id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "id", [], "any", false, false, false, 45), "html", null, true);
                yield "\"";
            }
            yield " class=\"btn ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "class", [], "any", true, true, false, 45)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "class", [], "any", false, false, false, 45), "html", null, true);
            } else {
                yield "btn-default";
            }
            yield "\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "action", [], "any", true, true, false, 45)) {
                yield " onclick=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "action", [], "any", false, false, false, 45), "html", null, true);
                yield "\"";
            }
            yield ">
        ";
            // line 46
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "icon", [], "any", true, true, false, 46)) {
                yield "<i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "icon", [], "any", false, false, false, 46), "html", null, true);
                yield "</i>";
            }
            // line 47
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "label", [], "any", false, false, false, 47), "html", null, true);
            yield "
      </button>
    </div>
  ";
        }
        // line 51
        yield "  </div>";
        // line 53
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        // line 54
        yield from         $this->unwrap()->yieldBlock("form_hint", $context, $blocks);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  253 => 54,  251 => 53,  249 => 51,  241 => 47,  235 => 46,  215 => 45,  212 => 44,  209 => 43,  206 => 41,  201 => 38,  198 => 37,  187 => 35,  182 => 34,  180 => 33,  176 => 32,  173 => 31,  170 => 30,  167 => 28,  154 => 25,  151 => 24,  127 => 22,  123 => 21,  118 => 20,  114 => 19,  106 => 18,  99 => 17,  94 => 16,  91 => 14,  89 => 13,  71 => 12,  68 => 11,  65 => 10,  62 => 9,  60 => 8,  57 => 7,  54 => 6,  43 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\translatable_choice.html.twig");
    }
}
