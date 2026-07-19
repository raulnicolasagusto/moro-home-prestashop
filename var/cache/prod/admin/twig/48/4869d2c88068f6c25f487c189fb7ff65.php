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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_4d067487970e5607bb6d4cf76ebcc4a7 extends Template
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
        // line 5
        yield "
<div class=\"card-group\">
  ";
        // line 7
        yield from $this->load("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 7, 1)->unwrap()->yield($context);
        // line 29
        yield "
  ";
        // line 30
        yield from $this->load("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 30, 2)->unwrap()->yield($context);
        // line 103
        yield "
  ";
        // line 104
        yield from $this->load("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 104, 3)->unwrap()->yield($context);
        // line 131
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
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
        return array (  58 => 131,  56 => 104,  53 => 103,  51 => 30,  48 => 29,  46 => 7,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Theme\\Blocks\\logo_configuration.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_4d067487970e5607bb6d4cf76ebcc4a7___1 extends Template
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
            'card_title' => [$this, 'block_card_title'],
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 7
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        $macros["ps"] = $this->macros["ps"] = $this->load("@PrestaShop/Admin/macros.html.twig", 8)->unwrap();
        // line 7
        $this->parent = $this->load("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig", 7);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_card_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "      ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["shopLogosForm"] ?? null), "header_logo_is_restricted_to_shop", [], "any", false, false, false, 10), 'widget');
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Header logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "
    ";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_card_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "      <p class=\"logo-card-description\">
        ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Will appear on your main page. Recommended size for the default theme: height %height% and width %width%.", ["%height%" => "40px", "%width%" => "200px"], "Admin.Design.Help"), "html", null, true);
        yield "
      </p>

      <div class=\"text-center logo-image-container\">
        <img
          class=\"header-logo\"
          src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["headerLogoPath"] ?? null), "html", null, true);
        yield "\"
          alt=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Header logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "\"
          title=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Header logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "\"
        >
      </div>

      ";
        // line 26
        yield $macros["ps"]->getTemplateForMacro("macro_form_group_row", $context, 26, $this->getSourceContext())->macro_form_group_row(...[CoreExtension::getAttribute($this->env, $this->source, ($context["shopLogosForm"] ?? null), "header_logo", [], "any", false, false, false, 26)]);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
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
        return array (  183 => 26,  176 => 22,  172 => 21,  168 => 20,  159 => 14,  156 => 13,  149 => 12,  139 => 10,  132 => 9,  127 => 7,  125 => 8,  118 => 7,  58 => 131,  56 => 104,  53 => 103,  51 => 30,  48 => 29,  46 => 7,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Theme\\Blocks\\logo_configuration.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_4d067487970e5607bb6d4cf76ebcc4a7___2 extends Template
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
            'card_title' => [$this, 'block_card_title'],
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 30
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        $macros["ps"] = $this->macros["ps"] = $this->load("@PrestaShop/Admin/macros.html.twig", 31)->unwrap();
        // line 30
        $this->parent = $this->load("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig", 30);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_card_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        yield "      <ul class=\"nav nav-pills\" role=\"tablist\">
        <li class=\"nav-item\">
          ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["shopLogosForm"] ?? null), "mail_logo_is_restricted_to_shop", [], "any", false, false, false, 35), 'widget');
        yield "
          <a class=\"nav-link active show d-inline-block\"
             id=\"mail-tab\"
             data-toggle=\"tab\"
             href=\"#email-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
            ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "
          </a>
        </li>
        <li class=\"nav-item\">
          ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["shopLogosForm"] ?? null), "invoice_logo_is_restricted_to_shop", [], "any", false, false, false, 49), 'widget');
        yield "
          <a class=\"nav-link d-inline-block\"
             id=\"invoice-tab\"
             data-toggle=\"tab\"
             href=\"#invoice-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
             ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "
          </a>
        </li>
      </ul>
    ";
        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_card_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 65
        yield "      <div class=\"tab-content\">
        <div class=\"tab-pane active show\" id=\"email-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Will appear on email headers. If undefined, the header logo will be used.", [], "Admin.Design.Help"), "html", null, true);
        yield "
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"email-logo\"
              src=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailLogoPath"] ?? null), "html", null, true);
        yield "\"
              alt=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "\"
              title=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "\"
            >
          </div>
          <div class=\"input-in-tab\">
            ";
        // line 80
        yield $macros["ps"]->getTemplateForMacro("macro_form_group_row", $context, 80, $this->getSourceContext())->macro_form_group_row(...[CoreExtension::getAttribute($this->env, $this->source, ($context["shopLogosForm"] ?? null), "mail_logo", [], "any", false, false, false, 80), [], ["help" => (((($context["headerLogoPath"] ?? null) == ($context["mailLogoPath"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Warning: if no email logo is available, the main logo will be used instead.", [], "Admin.Design.Notification")) : (""))]]);
        yield "
          </div>
        </div>
        <div class=\"tab-pane\" id=\"invoice-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Will appear on invoice headers.", [], "Admin.Design.Help"), "html", null, true);
        yield "
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"invoice-logo\"
              src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["invoiceLogoPath"] ?? null), "html", null, true);
        yield "\"
              alt=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "\"
              title=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "\"
            >
          </div>
          <div class=\"input-in-tab\">
            ";
        // line 97
        yield $macros["ps"]->getTemplateForMacro("macro_form_group_row", $context, 97, $this->getSourceContext())->macro_form_group_row(...[CoreExtension::getAttribute($this->env, $this->source, ($context["shopLogosForm"] ?? null), "invoice_logo", [], "any", false, false, false, 97), [], ["help" => (((($context["headerLogoPath"] ?? null) == ($context["invoiceLogoPath"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Warning: if no invoice logo is available, the main logo will be used instead.", [], "Admin.Design.Help")) : (""))]]);
        yield "
          </div>
        </div>
      </div>
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
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
        return array (  380 => 97,  373 => 93,  369 => 92,  365 => 91,  356 => 85,  348 => 80,  341 => 76,  337 => 75,  333 => 74,  324 => 68,  319 => 65,  312 => 64,  302 => 59,  289 => 49,  282 => 45,  269 => 35,  265 => 33,  258 => 32,  253 => 30,  251 => 31,  244 => 30,  183 => 26,  176 => 22,  172 => 21,  168 => 20,  159 => 14,  156 => 13,  149 => 12,  139 => 10,  132 => 9,  127 => 7,  125 => 8,  118 => 7,  58 => 131,  56 => 104,  53 => 103,  51 => 30,  48 => 29,  46 => 7,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Theme\\Blocks\\logo_configuration.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_4d067487970e5607bb6d4cf76ebcc4a7___3 extends Template
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
            'card_title' => [$this, 'block_card_title'],
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 104
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 105
        $macros["ps"] = $this->macros["ps"] = $this->load("@PrestaShop/Admin/macros.html.twig", 105)->unwrap();
        // line 104
        $this->parent = $this->load("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig", 104);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_card_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 107
        yield "      ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["shopLogosForm"] ?? null), "favicon_is_restricted_to_shop", [], "any", false, false, false, 107), 'widget');
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Favicon", [], "Admin.Design.Feature"), "html", null, true);
        yield "
    ";
        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_card_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 110
        yield "      <p class=\"logo-card-description\">
        ";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It is the small icon that appears in browser tabs, next to the title.", [], "Admin.Design.Help"), "html", null, true);
        yield "
      </p>

      <div class=\"text-center logo-image-container\">
          <img
            class=\"rounded-circle img-thumbnail favicon-logo\"
            src=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["faviconPath"] ?? null), "html", null, true);
        yield "\"
            alt=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Favicon image", [], "Admin.Design.Feature"), "html", null, true);
        yield "\"
            title=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Favicon image", [], "Admin.Design.Feature"), "html", null, true);
        yield "\"
          >
      </div>

      <div class=\"form-group row\">
        <div class=\"col-sm\">
          ";
        // line 125
        yield $macros["ps"]->getTemplateForMacro("macro_form_widget_with_error", $context, 125, $this->getSourceContext())->macro_form_widget_with_error(...[CoreExtension::getAttribute($this->env, $this->source, ($context["shopLogosForm"] ?? null), "favicon", [], "any", false, false, false, 125)]);
        yield "
        </div>
      </div>

    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
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
        return array (  511 => 125,  502 => 119,  498 => 118,  494 => 117,  485 => 111,  482 => 110,  475 => 109,  465 => 107,  458 => 106,  453 => 104,  451 => 105,  444 => 104,  380 => 97,  373 => 93,  369 => 92,  365 => 91,  356 => 85,  348 => 80,  341 => 76,  337 => 75,  333 => 74,  324 => 68,  319 => 65,  312 => 64,  302 => 59,  289 => 49,  282 => 45,  269 => 35,  265 => 33,  258 => 32,  253 => 30,  251 => 31,  244 => 30,  183 => 26,  176 => 22,  172 => 21,  168 => 20,  159 => 14,  156 => 13,  149 => 12,  139 => 10,  132 => 9,  127 => 7,  125 => 8,  118 => 7,  58 => 131,  56 => 104,  53 => 103,  51 => 30,  48 => 29,  46 => 7,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Theme\\Blocks\\logo_configuration.html.twig");
    }
}
