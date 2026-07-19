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

/* @PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig */
class __TwigTemplate_60a4c41c33553076336bfac11cc29b4d extends Template
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
        yield "<div id=\"header_quick\" class=\"component\">
  <div class=\"dropdown\" id=\"quick-access-container\">
    <button
      id=\"quick_select\"
      class=\"btn btn-link dropdown-toggle\"
      data-toggle=\"dropdown\"
    >";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
        yield " <i class=\"material-icons\">arrow_drop_down</i></button>
    <ul class=\"dropdown-menu\">
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "quickAccesses", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["quickAccess"]) {
            // line 14
            yield "        <li class=\"quick-row-link";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "active", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " active";
            }
            yield "\">
          <a ";
            // line 15
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", true, true, false, 15)) {
                yield "class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", false, false, false, 15), "html", null, true);
                yield "\"";
            }
            // line 16
            yield "          href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "link", [], "any", false, false, false, 16), "html", null, true);
            yield "\" ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "new_window", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "target=\"_blank\"";
            }
            // line 17
            yield "          data-item=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 17), "html", null, true);
            yield "\"
          >
            ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 19), "html", null, true);
            yield "
          </a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quickAccess'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
      <li class=\"divider\"></li>
      ";
        // line 25
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "      <li>
        <a id=\"quick-remove-link\" href=\"javascript:void(0);\" class=\"ajax-quick-link\" data-method=\"remove\"
           data-quicklink-id=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 28), "id_quick_access", [], "any", false, false, false, 28), "html", null, true);
            yield "\">
          <i class=\"material-icons\">remove_circle</i>
          ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove from Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
            yield "
        </a>
      </li>
      ";
        } else {
            // line 34
            yield "      <li>
        <a id=\"quick-add-link\" href=\"javascript:void(0);\" class=\"ajax-quick-link\" data-method=\"add\">
          <i class=\"material-icons\">add_circle</i>
          ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add current page to Quick Access", [], "Admin.Actions"), "html", null, true);
            yield "
        </a>
      </li>
      ";
        }
        // line 41
        yield "      <li>
        <a id=\"quick-manage-link\" href=\"";
        // line 42
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
        yield "\">
        <i class=\"material-icons\">settings</i>
          ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your quick accesses", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
        </a>
      </li>
    </ul>
  </div>
</div>

<script>
  \$(function() {
    \$(\x27.ajax-quick-link\x27).on(\x27click\x27, function(e){
      e.preventDefault();

      var method = \$(this).data(\x27method\x27);

      if(method == \x27add\x27)
        var name = prompt(\x27";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\x27, \x27";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentPageTitle", [], "any", false, false, false, 59), "html", null, true);
        yield "\x27);

      if(method == \x27add\x27 && name || method == \x27remove\x27)
      {
        \$.ajax({
          type: \x27POST\x27,
          headers: { \"cache-control\": \"no-cache\" },
          async: false,
          url: \"";
        // line 67
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses", ["action" => "GetUrl", "rand" => Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 200), "ajax" => 1]);
        yield "\" + \"&method=\" + method + ( \$(this).data(\x27quicklink-id\x27) ? \"&id_quick_access=\" + \$(this).data(\x27quicklink-id\x27) : \"\"),
          data: {
            \"url\": \"";
        // line 69
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentPageQuickAccessLink", [], "any", false, false, false, 69);
        yield "\",
            \"name\": name,
            \"icon\": \"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentPageIcon", [], "any", false, false, false, 71), "html", null, true);
        yield "\"
          },
          dataType: \"json\",
          success: function(data) {
            var quicklink_list =\x27\x27;
            \$.each(data, function(index,value){
              if (typeof data[index][\x27name\x27] !== \x27undefined\x27)
                quicklink_list += \x27<li><a href=\"\x27 + data[index][\x27link\x27] + \x27\">\x27 + data[index][\x27name\x27] + \x27</a></li>\x27;
            });

            if (typeof data[\x27has_errors\x27] !== \x27undefined\x27 && data[\x27has_errors\x27])
              \$.each(data, function(index, value)
              {
                if (typeof data[index] == \x27string\x27)
                  \$.growl.error({ title: \"\", message: data[index]});
              });
            else if (quicklink_list)
            {
              \$(\x27#header_quick ul.dropdown-menu .divider\x27).prevAll().remove();
              \$(\x27#header_quick ul.dropdown-menu\x27).prepend(quicklink_list);
              \$(e.target).remove();
              showSuccessMessage(update_success_msg);
            }
          }
        });
      }
    });
  });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig";
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
        return array (  178 => 71,  173 => 69,  168 => 67,  155 => 59,  137 => 44,  132 => 42,  129 => 41,  122 => 37,  117 => 34,  110 => 30,  105 => 28,  101 => 26,  99 => 25,  95 => 23,  85 => 19,  79 => 17,  72 => 16,  66 => 15,  59 => 14,  55 => 13,  50 => 11,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\LegacyLayout\\quick_access.html.twig");
    }
}
