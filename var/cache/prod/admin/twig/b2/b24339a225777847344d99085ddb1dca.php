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

/* @PrestaShop/Admin/Error/error.html.twig */
class __TwigTemplate_1c85d212db0b9ad7def377ac7af1e00e extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return "@PrestaShop/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("@PrestaShop/base.html.twig", 5);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/theme" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        yield "\"/>
";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Oops... looks like an unexpected error occurred", [], "Admin.Notifications.Error"), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "  <div class=\"container\">
    <div class=\"mt-5\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <img class=\"img-responsive\"
               src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/img/error/error.svg"), "html", null, true);
        yield "\"
               width=\"320\"
               height=\"auto\"
               alt=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Oops... looks like an unexpected error occurred", [], "Admin.Notifications.Error"), "html", null, true);
        yield "\">

          <div class=\"mt-3\">
            <p class=\"error-header\">
              ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Oops... looks like an unexpected error occurred", [], "Admin.Notifications.Error"), "html", null, true);
        yield "
            </p>

            ";
        // line 32
        if (array_key_exists("exception", $context)) {
            // line 33
            yield "              <div class=\"mx-auto\">
                <p class=\"mb-0\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["exception"] ?? null), "message", [], "any", false, false, false, 34), "html", null, true);
            yield "</p>
                <p class=\"mb-0\">[";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["exception"] ?? null), "class", [], "any", false, false, false, 35), "html", null, true);
            yield "
                  ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["exception"] ?? null), "code", [], "any", false, false, false, 36), "html", null, true);
            yield "]</p>
              </div>
            ";
        }
        // line 39
        yield "
            <div class=\"mt-4\">
              <form action=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_errors_enable_debug_mode");
        yield "\" method=\"post\" class=\"d-inline\">
                <input type=\"hidden\" name=\"_redirect_url\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 42), "requestUri", [], "any", false, false, false, 42), "html", null, true);
        yield "\">

                <button class=\"btn btn-outline-secondary\" type=\"submit\">
                  ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable debug mode", [], "Admin.Actions"), "html", null, true);
        yield "
                </button>
              </form>
              <button class=\"btn btn-primary js-go-back-btn ml-3\" type=\"button\">
                ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to previous page", [], "Admin.Actions"), "html", null, true);
        yield "
              </button>
            </div>

            <p class=\"mt-3\">
              <a href=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('documentation_link')->getCallable()("debug_mode"), "html", null, true);
        yield "\" target=\"_blank\">
                ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Learn more about debug mode", [], "Admin.Actions"), "html", null, true);
        yield "
                <i class=\"material-icons rtl-flip\">arrow_right_alt</i>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 67
        yield "  <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/error.bundle.js"), "html", null, true);
        yield "\"></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Error/error.html.twig";
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
        return array (  195 => 67,  188 => 66,  173 => 55,  169 => 54,  161 => 49,  154 => 45,  148 => 42,  144 => 41,  140 => 39,  134 => 36,  130 => 35,  126 => 34,  123 => 33,  121 => 32,  115 => 29,  108 => 25,  102 => 22,  95 => 17,  88 => 16,  80 => 13,  73 => 12,  66 => 9,  61 => 8,  54 => 7,  43 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Error/error.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Error\\error.html.twig");
    }
}
