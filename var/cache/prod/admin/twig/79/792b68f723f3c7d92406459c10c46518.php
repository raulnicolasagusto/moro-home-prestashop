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

/* @PrestaShop/Admin/Helpers/bootstrap_popup.html.twig */
class __TwigTemplate_ba5c05bd73a34b9283409dcc5d1a1e57 extends Template
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
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<div class=\"modal fade\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\" tabindex=\"-1\">
    <div class=\"modal-dialog ";
        // line 6
        if (array_key_exists("class", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
        }
        yield "\">
        <div class=\"modal-content\">
            ";
        // line 8
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 16
        yield "
            ";
        // line 17
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 19
        yield "
            ";
        // line 20
        if (array_key_exists("progressbar", $context)) {
            // line 21
            yield "                <div class=\"modal-body\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["progressbar"] ?? null), "id", [], "any", false, false, false, 21), "html", null, true);
            yield "\">
                    <div class=\"float-right progress-details-text\" default-value=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["progressbar"] ?? null), "label", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["progressbar"] ?? null), "label", [], "any", false, false, false, 22), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Processing...", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Processing...", [], "Admin.Global"))), "html", null, true);
            yield "\">
                        ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["progressbar"] ?? null), "label", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["progressbar"] ?? null), "label", [], "any", false, false, false, 23), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Processing...", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Processing...", [], "Admin.Global"))), "html", null, true);
            yield "
                    </div>
                    <div class=\"progress\" style=\"width: 100%\">
                        <div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" style=\"width: 0%\">
                            <span>0 %</span>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 32
        yield "
            ";
        // line 33
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 57
        yield "        </div>
    </div>
</div>
<script>
    \$(function() {
        var closable = ";
        // line 62
        if ((array_key_exists("closable", $context) && (($context["closable"] ?? null) == true))) {
            yield "true";
        } else {
            yield "false";
        }
        yield ";
        \$(\x27#";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\x27).modal({
            backdrop: (closable ? true : \x27static\x27),
            keyboard: closable,
            closable: closable,
            show: false
        });
    });
</script>
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "                ";
        if (array_key_exists("title", $context)) {
            // line 10
            yield "                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</h4>
                        ";
            // line 12
            if ((array_key_exists("closable", $context) && (($context["closable"] ?? null) == true))) {
                yield "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
            }
            // line 13
            yield "                    </div>
                ";
        }
        // line 15
        yield "            ";
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "            ";
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "                ";
        if (array_key_exists("actions", $context)) {
            // line 35
            yield "                    <div class=\"modal-footer\">
                        ";
            // line 36
            if ((array_key_exists("closable", $context) && (($context["closable"] ?? null) == true))) {
                // line 37
                yield "                            <button type=\"button\" class=\"btn btn-outline-secondary btn-lg\" data-dismiss=\"modal\">
                              ";
                // line 38
                if (array_key_exists("closeLabel", $context)) {
                    // line 39
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["closeLabel"] ?? null), "html", null, true);
                    yield "
                              ";
                } else {
                    // line 41
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"), "html", null, true);
                    yield "
                              ";
                }
                // line 43
                yield "                            </button>
                        ";
            }
            // line 45
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 46
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", true, true, false, 46) && (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 46) == "link"))) {
                    // line 47
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "href", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "href", [], "any", false, false, false, 47), "#")) : ("#")), "html", null, true);
                    yield "\" class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "class", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 47), "btn")) : ("btn")), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 47), "Label is missing")) : ("Label is missing")), "html", null, true);
                    yield "</a>
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 48
$context["action"], "type", [], "any", true, true, false, 48) && (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 48) == "button"))) {
                    // line 49
                    yield "                                <button type=\"button\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "value", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "value", [], "any", false, false, false, 49), "")) : ("")), "html", null, true);
                    yield "\" class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "class", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 49), "btn")) : ("btn")), "html", null, true);
                    yield "\">
                                    ";
                    // line 50
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 50), "Label is missing")) : ("Label is missing")), "html", null, true);
                    yield "
                                </button>
                            ";
                }
                // line 53
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "                    </div>
                ";
        }
        // line 56
        yield "            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
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
        return array (  244 => 56,  240 => 54,  234 => 53,  228 => 50,  221 => 49,  219 => 48,  210 => 47,  207 => 46,  202 => 45,  198 => 43,  192 => 41,  186 => 39,  184 => 38,  181 => 37,  179 => 36,  176 => 35,  173 => 34,  166 => 33,  161 => 18,  154 => 17,  149 => 15,  145 => 13,  141 => 12,  137 => 11,  134 => 10,  131 => 9,  124 => 8,  110 => 63,  102 => 62,  95 => 57,  93 => 33,  90 => 32,  78 => 23,  74 => 22,  69 => 21,  67 => 20,  64 => 19,  62 => 17,  59 => 16,  57 => 8,  50 => 6,  45 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Helpers\\bootstrap_popup.html.twig");
    }
}
