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

/* @PrestaShop/Admin/Layout/login_layout.html.twig */
class __TwigTemplate_b2171294ef7200625595e4769afa4c2f extends Template
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
            'javascrips' => [$this, 'block_javascrips'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'session_alert' => [$this, 'block_session_alert'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7 lt-ie6\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8 ie7\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9 ie8\"> <![endif]-->
<!--[if gt IE 8]> <html class=\"no-js ie9\"> <![endif]-->
<html lang=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 10), "html", null, true);
        yield "\">
<head>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  ";
        // line 13
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LoginHeadTag");
        yield "
  ";
        // line 14
        yield from $this->unwrap()->yieldBlock('javascrips', $context, $blocks);
        // line 15
        yield "  ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 16
        yield "</head>

<body class=\"lang-";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 18), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isRtlLanguage", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " lang-rtl";
        }
        yield " ps_back-office bootstrap ps-bo-rebrand\">
  <div id=\"login\">
    <div id=\"content\">
      <div id=\"login-panel\">
        <div id=\"login-header\">
          <h1 class=\"text-center mb-0\">
            <img id=\"logo\" src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "baseImgUrl", [], "any", false, false, false, 24), "html", null, true);
        yield "prestashop@2x.png\" width=\"128\" height=\"auto\" alt=\"PrestaShop\" />
          </h1>
        </div>

        <div id=\"login-content-card\" class=\"card\">
          <div id=\"shop-img\">
            <img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "baseImgUrl", [], "any", false, false, false, 30), "html", null, true);
        yield "prestashop@2x.png\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["shopName"] ?? null), "html", null, true);
        yield "\" width=\"200\" height=\"22\" />
          </div>

          <div class=\"card-body\">
            ";
        // line 34
        yield from $this->unwrap()->yieldBlock('session_alert', $context, $blocks);
        // line 73
        yield "            ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 74
        yield "          </div>
        </div>

        <a class=\x27login-back\x27 href=\x27";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "baseUrl", [], "any", false, false, false, 77), "html", null, true);
        yield "\x27>
          <i class=\"material-icons rtl-flip\">arrow_back</i>
          <span>";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to", [], "Admin.Actions"), "html", null, true);
        yield "</span>
          <span class=\"login-back-shop\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["shopName"] ?? null), "html", null, true);
        yield "</span>
        </a>

        ";
        // line 83
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminLogin");
        yield "

        <div id=\"login-footer\">
          <div class=\"login__copy text-center text-muted\">
            <a href=\"https://www.prestashop-project.org\" onclick=\"return !window.open(this.href);\">
              &copy; PrestaShop&#8482; 2007-";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " - All rights reserved
            </a>
          </div>

          <div class=\"login__social text-center\">
            <a class=\"link-social link-twitter _blank\" target=\"_blank\" href=\"https://x.com/PrestaShop\" title=\"X\">
              ";
        // line 94
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "bi:twitter-x", "height" => "16", "width" => "16", "aria-hidden" => "true"]);
        yield "
            </a>
            <a class=\"link-social link-facebook _blank\" target=\"_blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
              ";
        // line 97
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "bi:facebook", "height" => "16", "width" => "16", "aria-hidden" => "true"]);
        yield "
            </a>
            <a class=\"link-social link-github _blank\" target=\"_blank\" href=\"https://github.com/PrestaShop/PrestaShop\" title=\"Github\">
              ";
        // line 100
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "bi:github", "height" => "16", "width" => "16", "aria-hidden" => "true"]);
        yield "
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
";
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascrips(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_session_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "              ";
        // line 55
        yield "              ";
        $macros["layout"] = $this;
        // line 56
        yield "
              ";
        // line 57
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 57), "flashbag", [], "any", false, false, false, 57), "peek", ["error"], "method", false, false, false, 57)) > 0)) {
            // line 58
            yield "                ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 58, $this->getSourceContext())->macro_alert(...["danger", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 58), "flashbag", [], "any", false, false, false, 58), "get", ["error"], "method", false, false, false, 58)]);
            yield "
              ";
        }
        // line 60
        yield "              ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 60), "flashbag", [], "any", false, false, false, 60), "peek", ["failure"], "method", false, false, false, 60)) > 0)) {
            // line 61
            yield "                ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 61, $this->getSourceContext())->macro_alert(...["danger", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 61), "flashbag", [], "any", false, false, false, 61), "get", ["failure"], "method", false, false, false, 61)]);
            yield "
              ";
        }
        // line 63
        yield "              ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 63), "flashbag", [], "any", false, false, false, 63), "peek", ["success"], "method", false, false, false, 63)) > 0)) {
            // line 64
            yield "                ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 64, $this->getSourceContext())->macro_alert(...["success", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 64), "flashbag", [], "any", false, false, false, 64), "get", ["success"], "method", false, false, false, 64)]);
            yield "
              ";
        }
        // line 66
        yield "              ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 66), "flashbag", [], "any", false, false, false, 66), "peek", ["warning"], "method", false, false, false, 66)) > 0)) {
            // line 67
            yield "                ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 67, $this->getSourceContext())->macro_alert(...["warning", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 67), "flashbag", [], "any", false, false, false, 67), "get", ["warning"], "method", false, false, false, 67)]);
            yield "
              ";
        }
        // line 69
        yield "              ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 69), "flashbag", [], "any", false, false, false, 69), "peek", ["info"], "method", false, false, false, 69)) > 0)) {
            // line 70
            yield "                ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 70, $this->getSourceContext())->macro_alert(...["info", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 70), "flashbag", [], "any", false, false, false, 70), "get", ["info"], "method", false, false, false, 70)]);
            yield "
              ";
        }
        // line 72
        yield "            ";
        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 35
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
            // line 36
            yield "                <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield " d-print-none\" role=\"alert\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
                  </button>
                  ";
            // line 40
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["flashbagContent"] ?? null)) > 1)) {
                // line 41
                yield "                    <ul class=\"alert-text\">
                      ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 43
                    yield "                        <li>";
                    yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($context["flashMessage"]);
                    yield "</li>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                yield "                    </ul>
                  ";
            } else {
                // line 47
                yield "                    <div class=\"alert-text\">
                      ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 49
                    yield "                        <p>";
                    yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($context["flashMessage"]);
                    yield "</p>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                yield "                    </div>
                  ";
            }
            // line 53
            yield "                </div>
              ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Layout/login_layout.html.twig";
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
        return array (  327 => 53,  323 => 51,  314 => 49,  310 => 48,  307 => 47,  303 => 45,  294 => 43,  290 => 42,  287 => 41,  285 => 40,  277 => 36,  264 => 35,  254 => 73,  249 => 72,  243 => 70,  240 => 69,  234 => 67,  231 => 66,  225 => 64,  222 => 63,  216 => 61,  213 => 60,  207 => 58,  205 => 57,  202 => 56,  199 => 55,  197 => 35,  190 => 34,  180 => 15,  170 => 14,  156 => 100,  150 => 97,  144 => 94,  135 => 88,  127 => 83,  121 => 80,  117 => 79,  112 => 77,  107 => 74,  104 => 73,  102 => 34,  93 => 30,  84 => 24,  72 => 18,  68 => 16,  65 => 15,  63 => 14,  59 => 13,  53 => 10,  46 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Layout/login_layout.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Layout\\login_layout.html.twig");
    }
}
