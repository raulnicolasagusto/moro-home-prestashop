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

/* @PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig */
class __TwigTemplate_a6d43a3070c1b3e63e51db8ebe6cf7c3 extends Template
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
        yield "<form id=\"header_search\" class=\"component bo_search_form\" method=\"post\" action=\"";
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminSearch");
        yield "\" role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
  ";
        // line 7
        if ((array_key_exists("showClearBtn", $context) && ($context["showClearBtn"] ?? null))) {
            // line 8
            yield "    <a href=\"#\" class=\"clear_search hide\"><i class=\"icon-remove\"></i></a>
  ";
        }
        // line 10
        yield "  <div class=\"form-group\">
    <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" />
    <div class=\"input-group\">
      <div class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
          <i id=\"search_type_icon\" class=\"material-icons\">search</i>
        </button>
        <ul id=\"header_search_options\" class=\"dropdown-menu\">
          <li class=\"search-all search-option active\">
            <a href=\"#\" data-value=\"0\" data-placeholder=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("What are you looking for?", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">search</i> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Everywhere", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a>
          </li>
          <li class=\"divider\"></li>
          <li class=\"search-book search-option\">
            <a href=\"#\" data-value=\"1\" data-placeholder=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product name, SKU, reference...", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">store_mall_directory</i> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog", [], "Admin.Navigation.Menu"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-customers-name search-option\">
            <a href=\"#\" data-value=\"2\" data-placeholder=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email, name...", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">group</i> ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers by name", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-customers-addresses search-option\">
            <a href=\"#\" data-value=\"6\" data-placeholder=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("123.45.67.89", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-desktop\">
              <i class=\"material-icons\">desktop_mac</i> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers by IP address", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a>
          </li>
          <li class=\"search-orders search-option\">
            <a href=\"#\" data-value=\"3\" data-placeholder=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order ID", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">shopping_basket</i> ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Global"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-invoices search-option\">
            <a href=\"#\" data-value=\"4\" data-placeholder=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice Number", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">book</i> ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoices", [], "Admin.Navigation.Menu"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-carts search-option\">
            <a href=\"#\" data-value=\"5\" data-placeholder=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cart ID", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">shopping_cart</i> ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carts", [], "Admin.Global"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-modules search-option\">
            <a href=\"#\" data-value=\"7\" data-placeholder=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module name", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">extension</i> ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Global"), "html", null, true);
        yield "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 59
        if ((array_key_exists("showClearBtn", $context) && ($context["showClearBtn"] ?? null))) {
            // line 60
            yield "      <a href=\"#\" class=\"clear_search hide\"><i class=\"material-icons\">clear</i></a>
      ";
        }
        // line 62
        yield "      <input id=\"bo_query\" name=\"bo_query\" type=\"text\" class=\"form-control\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["boQuery"] ?? null), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        yield "\" />
    </div>
  </div>
  <script>
    ";
        // line 66
        if ((array_key_exists("searchType", $context) && ($context["searchType"] ?? null))) {
            // line 67
            yield "    \$(function() {
      \$(\x27.search-option a[data-value=\x27 + ";
            // line 68
            yield (((($tmp = ($context["searchType"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0));
            yield " + \x27]\x27).click();
    });
    ";
        }
        // line 71
        yield "  </script>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig";
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
        return array (  182 => 71,  176 => 68,  173 => 67,  171 => 66,  159 => 62,  155 => 60,  153 => 59,  145 => 54,  141 => 53,  134 => 49,  130 => 48,  123 => 44,  119 => 43,  112 => 39,  108 => 38,  102 => 35,  98 => 34,  91 => 30,  87 => 29,  80 => 25,  76 => 24,  69 => 20,  65 => 19,  54 => 10,  50 => 8,  48 => 7,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\LegacyLayout\\search_form.html.twig");
    }
}
