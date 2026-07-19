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

/* @PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig */
class __TwigTemplate_af01452395cdffd96df677cec901c8b2 extends Template
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
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 5) || CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 5)) || CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 5))) {
            // line 6
            yield "<ul class=\"header-list component\">
  <li id=\"notification\" class=\"dropdown\">
    <a href=\"javascript:void(0);\" class=\"notification dropdown-toggle notifs\">
      <i class=\"material-icons\">notifications_none</i>
      <span id=\"total_notif_number_wrapper\" class=\"notifs_badge hide\">
              <span id=\"total_notif_value\">0</span>
            </span>
    </a>
    <div class=\"dropdown-menu dropdown-menu-right notifs_dropdown\">
      <div class=\"notifications\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
          ";
            // line 17
            $context["active"] = "active";
            // line 18
            yield "          ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 19
                yield "            <li class=\"nav-item ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"order\" href=\"#orders-notifications\" role=\"tab\" id=\"orders-tab\">";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Navigation.Header"), "html", null, true);
                yield "<span id=\"orders_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            ";
                // line 22
                $context["active"] = "";
                // line 23
                yield "          ";
            }
            // line 24
            yield "
          ";
            // line 25
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "            <li class=\"nav-item ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"customer\" href=\"#customers-notifications\" role=\"tab\" id=\"customers-tab\">";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
                yield "<span id=\"customers_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            ";
                // line 29
                $context["active"] = "";
                // line 30
                yield "          ";
            }
            // line 31
            yield "
          ";
            // line 32
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 33
                yield "            <li class=\"nav-item ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"customer_message\" href=\"#messages-notifications\" role=\"tab\" id=\"messages-tab\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Messages", [], "Admin.Global"), "html", null, true);
                yield "<span id=\"customer_messages_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            ";
                // line 36
                $context["active"] = "";
                // line 37
                yield "          ";
            }
            // line 38
            yield "        </ul>

        <!-- Tab panes -->
        <div class=\"tab-content\">
          ";
            // line 42
            $context["active"] = "active";
            // line 43
            yield "          ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "            <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield " empty\" id=\"orders-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new order for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                ";
                // line 47
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "noOrderTip", [], "any", false, false, false, 47);
                yield "
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            ";
                // line 51
                $context["active"] = "";
                // line 52
                yield "          ";
            }
            // line 53
            yield "
          ";
            // line 54
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "            <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield " empty\" id=\"customers-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new customer for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "noCustomerTip", [], "any", false, false, false, 58), "html", null, true);
                yield "
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            ";
                // line 62
                $context["active"] = "";
                // line 63
                yield "          ";
            }
            // line 64
            yield "
          ";
            // line 65
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 66
                yield "            <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield " empty\" id=\"messages-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new message for now.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                ";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "noCustomerMessageTip", [], "any", false, false, false, 69), "html", null, true);
                yield "
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            ";
                // line 73
                $context["active"] = "";
                // line 74
                yield "          ";
            }
            // line 75
            yield "        </div>
      </div>
    </div>
  </li>
</ul>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig";
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
        return array (  204 => 75,  201 => 74,  199 => 73,  192 => 69,  188 => 68,  182 => 66,  180 => 65,  177 => 64,  174 => 63,  172 => 62,  165 => 58,  161 => 57,  155 => 55,  153 => 54,  150 => 53,  147 => 52,  145 => 51,  138 => 47,  134 => 46,  128 => 44,  125 => 43,  123 => 42,  117 => 38,  114 => 37,  112 => 36,  107 => 34,  102 => 33,  100 => 32,  97 => 31,  94 => 30,  92 => 29,  87 => 27,  82 => 26,  80 => 25,  77 => 24,  74 => 23,  72 => 22,  67 => 20,  62 => 19,  59 => 18,  57 => 17,  44 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\LegacyLayout\\notifications_center.html.twig");
    }
}
