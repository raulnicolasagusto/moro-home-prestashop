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

/* @PrestaShop/Admin/Component/Layout/notifications_center.html.twig */
class __TwigTemplate_a160b523baebf0b5b51460fe0e9f77b0 extends Template
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
            yield "  <div class=\"component header-right-component\" id=\"header-notifications-container\">
    <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
      <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"material-icons\">notifications_none</i>
        <span id=\"notifications-total\" class=\"count hide\">0</span>
      </button>
      <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
        <div class=\"notifications\">
          <ul class=\"nav nav-pills\" role=\"tablist\">
            ";
            // line 15
            $context["active"] = "active";
            // line 16
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 17
                yield "              <li class=\"nav-item\">
                <a
                  class=\"nav-link ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\"
                  id=\"orders-tab\"
                  data-toggle=\"tab\"
                  data-type=\"order\"
                  href=\"#orders-notifications\"
                  role=\"tab\"
                >
                  ";
                // line 26
                yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders[1][/1]", ["[1]" => "", "[/1]" => ""], "Admin.Navigation.Notification"));
                yield "
                  <span id=\"_nb_new_orders_\"></span>
                </a>
              </li>
              ";
                // line 30
                $context["active"] = "";
                // line 31
                yield "            ";
            }
            // line 32
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 33
                yield "              <li class=\"nav-item\">
                <a
                  class=\"nav-link ";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\"
                  id=\"customers-tab\"
                  data-toggle=\"tab\"
                  data-type=\"customer\"
                  href=\"#customers-notifications\"
                  role=\"tab\"
                >
                  ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers[1][/1]", ["[1]" => "", "[/1]" => ""], "Admin.Navigation.Notification"), "html", null, true);
                yield "
                  <span id=\"_nb_new_customers_\"></span>
                </a>
              </li>
              ";
                // line 46
                $context["active"] = "";
                // line 47
                yield "            ";
            }
            // line 48
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "              <li class=\"nav-item\">
                <a
                  class=\"nav-link ";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\"
                  id=\"messages-tab\"
                  data-toggle=\"tab\"
                  data-type=\"customer_message\"
                  href=\"#messages-notifications\"
                  role=\"tab\"
                >
                  ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Messages[1][/1]", ["[1]" => "", "[/1]" => ""], "Admin.Navigation.Notification"), "html", null, true);
                yield "
                  <span id=\"_nb_new_messages_\"></span>
                </a>
              </li>
              ";
                // line 62
                $context["active"] = "";
                // line 63
                yield "            ";
            }
            // line 64
            yield "          </ul>

          <!-- Tab panes -->
          <div class=\"tab-content\">
            ";
            // line 68
            $context["active"] = "active";
            // line 69
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 70
                yield "              <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield " empty\" id=\"orders-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  ";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new order for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                  ";
                // line 73
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "noOrderTip", [], "any", false, false, false, 73);
                yield "
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              ";
                // line 77
                $context["active"] = "";
                // line 78
                yield "            ";
            }
            // line 79
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 80
                yield "              <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield " empty\" id=\"customers-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  ";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new customer for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                  ";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "noCustomerTip", [], "any", false, false, false, 83), "html", null, true);
                yield "
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              ";
                // line 87
                $context["active"] = "";
                // line 88
                yield "            ";
            }
            // line 89
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 90
                yield "              <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield " empty\" id=\"messages-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new message for now.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                  ";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "noCustomerMessageTip", [], "any", false, false, false, 93), "html", null, true);
                yield "
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              ";
                // line 97
                $context["active"] = "";
                // line 98
                yield "            ";
            }
            // line 99
            yield "          </div>
        </div>
      </div>
    </div>

    ";
            // line 104
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 105
                yield "      <script type=\"text/html\" id=\"order-notification-template\">
        <a class=\"notif\" href=\"order_url\">
          <span class=\"notif__id\">#_id_order_</span>
          <span class=\"notif__customer\">
           - ";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From:", [], "Admin.Navigation.Notification"), "html", null, true);
                yield " <strong>_customer_name_</strong> <span class=\"notif__iso\">(_iso_code_)</span>
          </span>
          <span class=\"notif__order-info\">
           <span class=\"notif__carrier\"> _carrier_ -</span> <strong class=\"notif__total\">_total_paid_</strong>
          </span>
        </a>
      </script>
    ";
            }
            // line 117
            yield "
    ";
            // line 118
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 119
                yield "      <script type=\"text/html\" id=\"customer-notification-template\">
        <a class=\"notif\" href=\x27customer_url\x27>
          <span class=\"notif__id\">#_id_customer_</span>
          <span class=\"notif__customer\">
           - <strong>_customer_name_</strong> _company_ -
          </span>
          <span class=\"notif__registered-date\">
            ";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Registered on:", [], "Admin.Navigation.Notification"), "html", null, true);
                yield " <strong>_date_add_</strong>
          </span>
        </a>
      </script>
    ";
            }
            // line 131
            yield "
    ";
            // line 132
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 133
                yield "      <script type=\"text/html\" id=\"message-notification-template\">
        <a class=\"notif\" href=\x27message_url\x27>
          <span class=\"notif__status _status_\">
            <i class=\"material-icons\">fiber_manual_record</i> _status_
          </span>
          <span class=\"notif__customer\">
           - <strong>_customer_name_</strong> _company_ -
          </span>
          <span class=\"notif__date\">
            <i class=\"material-icons\">access_time</i> _date_add_
          </span>
        </a>
      </script>
    ";
            }
            // line 147
            yield "  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/notifications_center.html.twig";
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
        return array (  296 => 147,  280 => 133,  278 => 132,  275 => 131,  267 => 126,  258 => 119,  256 => 118,  253 => 117,  242 => 109,  236 => 105,  234 => 104,  227 => 99,  224 => 98,  222 => 97,  215 => 93,  211 => 92,  205 => 90,  202 => 89,  199 => 88,  197 => 87,  190 => 83,  186 => 82,  180 => 80,  177 => 79,  174 => 78,  172 => 77,  165 => 73,  161 => 72,  155 => 70,  152 => 69,  150 => 68,  144 => 64,  141 => 63,  139 => 62,  132 => 58,  122 => 51,  118 => 49,  115 => 48,  112 => 47,  110 => 46,  103 => 42,  93 => 35,  89 => 33,  86 => 32,  83 => 31,  81 => 30,  74 => 26,  64 => 19,  60 => 17,  57 => 16,  55 => 15,  44 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/notifications_center.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\Layout\\notifications_center.html.twig");
    }
}
