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

/* @PrestaShop/Admin/layout.html.twig */
class __TwigTemplate_61d4db5296dcd90b3759094af53adca7 extends Template
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

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
            'content_header' => [$this, 'block_content_header'],
            'session_alert' => [$this, 'block_session_alert'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 10
        return $this->load((((($tmp = ($context["lightDisplay"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("@PrestaShop/Admin/Layout/light_layout.html.twig") : ("@PrestaShop/Admin/Layout/default_layout.html.twig")), 10);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        $context["lightDisplay"] = ((array_key_exists("lightDisplay", $context)) ? (($context["lightDisplay"] ?? null)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 5), "query", [], "any", false, false, false, 5), "get", ["liteDisplaying", false], "method", false, false, false, 5)));
        // line 6
        $context["showContentHeader"] = ((array_key_exists("showContentHeader", $context)) ? (($context["showContentHeader"] ?? null)) : (true));
        // line 7
        $context["layoutHeaderToolbarBtn"] = ((array_key_exists("layoutHeaderToolbarBtn", $context)) ? (($context["layoutHeaderToolbarBtn"] ?? null)) : ([]));
        // line 8
        $context["metaTitle"] = ((array_key_exists("meta_title", $context)) ? (($context["meta_title"] ?? null)) : (((array_key_exists("layoutTitle", $context)) ? (($context["layoutTitle"] ?? null)) : (""))));
        // line 10
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "  <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/default.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/right-sidebar.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/form_popover_error.bundle.js"), "html", null, true);
        yield "\"></script>
";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "  <script>
    var translate_javascripts = ";
        // line 20
        yield json_encode(($context["js_translatable"] ?? null));
        yield ";
    var PS_ALLOW_ACCENTED_CHARS_URL = ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_ALLOW_ACCENTED_CHARS_URL")), "html", null, true);
        yield ";
  </script>
";
        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("session_alert", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_session_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "  ";
        // line 50
        yield "  ";
        $macros["layout"] = $this;
        // line 51
        yield "
  ";
        // line 52
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 52), "flashbag", [], "any", false, false, false, 52), "peek", ["error"], "method", false, false, false, 52)) > 0)) {
            // line 53
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 53, $this->getSourceContext())->macro_alert(...["danger", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 53), "flashbag", [], "any", false, false, false, 53), "get", ["error"], "method", false, false, false, 53)]);
            yield "
  ";
        }
        // line 55
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 55), "flashbag", [], "any", false, false, false, 55), "peek", ["failure"], "method", false, false, false, 55)) > 0)) {
            // line 56
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 56, $this->getSourceContext())->macro_alert(...["danger", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 56), "flashbag", [], "any", false, false, false, 56), "get", ["failure"], "method", false, false, false, 56)]);
            yield "
  ";
        }
        // line 58
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 58), "flashbag", [], "any", false, false, false, 58), "peek", ["success"], "method", false, false, false, 58)) > 0)) {
            // line 59
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 59, $this->getSourceContext())->macro_alert(...["success", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 59), "flashbag", [], "any", false, false, false, 59), "get", ["success"], "method", false, false, false, 59)]);
            yield "
  ";
        }
        // line 61
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 61), "flashbag", [], "any", false, false, false, 61), "peek", ["warning"], "method", false, false, false, 61)) > 0)) {
            // line 62
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 62, $this->getSourceContext())->macro_alert(...["warning", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 62), "flashbag", [], "any", false, false, false, 62), "get", ["warning"], "method", false, false, false, 62)]);
            yield "
  ";
        }
        // line 64
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 64), "flashbag", [], "any", false, false, false, 64), "peek", ["info"], "method", false, false, false, 64)) > 0)) {
            // line 65
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 65, $this->getSourceContext())->macro_alert(...["info", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 65), "flashbag", [], "any", false, false, false, 65), "get", ["info"], "method", false, false, false, 65)]);
            yield "
  ";
        }
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_right(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        yield "  <nav
    id=\"right-sidebar\"
    role=\"navigation\"
    class=\"col-lg-3 sidebar sidebar-right sidebar-animate text-sm-center\"
  >
    <img
      src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/img/bundle/dashboard_loading.gif"), "html", null, true);
        yield "\"
      style=\"margin-top: 10em;\" alt=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading...", [], "Admin.Global"), "html", null, true);
        yield "\"
    />
  </nav>
";
        yield from [];
    }

    // line 30
    public function macro_alert($type = null, $flashbagContent = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "type" => $type,
            "flashbagContent" => $flashbagContent,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 31
            yield "    <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield " d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      ";
            // line 35
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["flashbagContent"] ?? null)) > 1)) {
                // line 36
                yield "        <ul class=\"alert-text\">
          ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 38
                    yield "            <li>";
                    yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($context["flashMessage"]);
                    yield "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                yield "        </ul>
      ";
            } else {
                // line 42
                yield "        <div class=\"alert-text\">
          ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 44
                    yield "            <p>";
                    yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($context["flashMessage"]);
                    yield "</p>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                yield "        </div>
      ";
            }
            // line 48
            yield "    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/layout.html.twig";
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
        return array (  276 => 48,  272 => 46,  263 => 44,  259 => 43,  256 => 42,  252 => 40,  243 => 38,  239 => 37,  236 => 36,  234 => 35,  226 => 31,  213 => 30,  204 => 77,  200 => 76,  192 => 70,  185 => 69,  176 => 65,  173 => 64,  167 => 62,  164 => 61,  158 => 59,  155 => 58,  149 => 56,  146 => 55,  140 => 53,  138 => 52,  135 => 51,  132 => 50,  130 => 30,  123 => 29,  115 => 26,  108 => 25,  100 => 21,  96 => 20,  93 => 19,  86 => 18,  79 => 15,  75 => 14,  70 => 13,  63 => 12,  59 => 10,  57 => 8,  55 => 7,  53 => 6,  51 => 5,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/layout.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\layout.html.twig");
    }
}
