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

/* @PrestaShop/Admin/Module/Includes/card_list.html.twig */
class __TwigTemplate_fa00d6f6fb19d2b4c10113e40068a65a extends Template
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
            'addon_version' => [$this, 'block_addon_version'],
            'addon_description' => [$this, 'block_addon_description'],
            'addon_additional_description' => [$this, 'block_addon_additional_description'],
            'module_actions' => [$this, 'block_module_actions'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        $context["isModuleActive"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, true, false, 5), "active", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, false, false, 5), "active", [], "any", false, false, false, 5), "0")) : ("0"));
        // line 6
        yield "
<div
  class=\"module-item module-item-list col-md-12 ";
        // line 8
        if (((($context["origin"] ?? null) == "manage") && (($context["isModuleActive"] ?? null) == "0"))) {
            yield "module-item-list-isNotActive";
        }
        yield "\"
  data-id=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9), "html", null, true);
        yield "\"
  data-name=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 10), "displayName", [], "any", false, false, false, 10), "html", null, true);
        yield "\"
  data-scoring=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 11), "avgRate", [], "any", false, false, false, 11), "html", null, true);
        yield "\"
  data-logo=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 12), "img", [], "any", false, false, false, 12), "html", null, true);
        yield "\"
  data-author=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 13), "author", [], "any", false, false, false, 13), "html", null, true);
        yield "\"
  data-version=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 14), "version", [], "any", false, false, false, 14), "html", null, true);
        yield "\"
  data-description=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 15), "description", [], "any", false, false, false, 15), "html", null, true);
        yield "\"
  data-tech-name=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
        yield "\"
  data-child-categories=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 17), "categoryName", [], "any", false, false, false, 17), "html", null, true);
        yield "\"
  data-categories=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["category"] ?? null), "html", null, true);
        yield "\"
  data-type=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 19), "productType", [], "any", false, false, false, 19), "html", null, true);
        yield "\"
  data-price=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 20), "price", [], "any", false, false, false, 20), "raw", [], "any", false, false, false, 20), "html", null, true);
        yield "\"
  data-active=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["isModuleActive"] ?? null), "html", null, true);
        yield "\"
  data-installed=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, true, false, 22), "installed", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, false, false, 22), "installed", [], "any", false, false, false, 22), "0")) : ("0")), "html", null, true);
        yield "\"
  data-last-access=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, false, false, 23), "last_access_date", [], "any", false, false, false, 23), "html", null, true);
        yield "\"
>
  <div class=\"container-fluid\">
    <div class=\"module-item-wrapper-list row\">
      <div class=\"col-lg-1 text-sm-center\">
        <div class=\"module-logo-thumb-list\">
          <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 29), "img", [], "any", false, false, false, 29), "html", null, true);
        yield "\" class=\"text-md-center\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 29), "displayName", [], "any", false, false, false, 29), "html", null, true);
        yield "\"/>
        </div>
      </div>
      <div class=\"col-lg-11 row\">
        <div class=\"col-md-10 col-lg-11\">
          <h3
            class=\"text-ellipsis module-name-list\"
            data-toggle=\"pstooltip\"
            data-placement=\"top\"
            title=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 38), "displayName", [], "any", false, false, false, 38), "html", null, true);
        yield "\"
          >
            ";
        // line 40
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 40), "displayName", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "              ";
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 41), "displayName", [], "any", false, false, false, 41));
            yield "

            ";
        } else {
            // line 44
            yield "              ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
            yield "
            ";
        }
        // line 46
        yield "          </h3>
        </div>
        <div class=\"col-md-2\">
          <div class=\"text-ellipsis small-text\">
            ";
        // line 50
        yield from $this->unwrap()->yieldBlock('addon_version', $context, $blocks);
        // line 57
        yield "          </div>
          <div>
            ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 59), "urls", [], "any", false, true, false, 59), "upgrade", [], "any", true, true, false, 59)) {
            // line 60
            yield "                <span class=\"badge badge-success my-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upgrade available", [], "Admin.Modules.Feature"), "html", null, true);
            yield "</span>
            ";
        }
        // line 62
        yield "          </div>
        </div>
        <div class=\"col-md-8 col-lg-7 scroll-300\">
          ";
        // line 65
        yield from $this->unwrap()->yieldBlock('addon_description', $context, $blocks);
        // line 71
        yield "          ";
        yield from $this->unwrap()->yieldBlock('addon_additional_description', $context, $blocks);
        // line 76
        yield "        </div>
        <div class=\"col-lg-3 text-md-right\">
          ";
        // line 78
        yield from $this->unwrap()->yieldBlock('module_actions', $context, $blocks);
        // line 89
        yield "        </div>
        ";
        // line 90
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig", ["module" => ($context["module"] ?? null)]);
        yield "
      </div>
    </div>
  </div>
</div>
";
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_addon_version(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield "              ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 51), "productType", [], "any", false, false, false, 51) == "service")) {
            // line 52
            yield "                ";
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Service by %author%", ["%author%" => (("<b>" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 52), "author", [], "any", false, false, false, 52)) . "</b>")], "Admin.Modules.Feature"));
            yield "
              ";
        } else {
            // line 54
            yield "                ";
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("v%version% - by %author%", ["%version%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 54), "version", [], "any", false, false, false, 54), "%author%" => (("<b>" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 54), "author", [], "any", false, false, false, 54)) . "</b>")], "Admin.Modules.Feature"));
            yield "
              ";
        }
        // line 56
        yield "            ";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_addon_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "            ";
        yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 66), "description", [], "any", false, false, false, 66));
        yield "
            ";
        // line 67
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 67), "description", [], "any", false, false, false, 67)) > 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 67), "description", [], "any", false, false, false, 67)) < Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 67), "fullDescription", [], "any", false, false, false, 67))))) {
            // line 68
            yield "              ...
            ";
        }
        // line 70
        yield "          ";
        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_addon_additional_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 72
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 72), "additional_description", [], "any", true, true, false, 72)) {
            // line 73
            yield "              ";
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 73), "additional_description", [], "any", false, false, false, 73));
            yield "
            ";
        }
        // line 75
        yield "          ";
        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_module_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 79
        yield "            ";
        if ((array_key_exists("requireBulkActions", $context) && (($context["requireBulkActions"] ?? null) == true))) {
            // line 80
            yield "              <div class=\"module-checkbox-bulk-list md-checkbox\">
                <label>
                  <input type=\"checkbox\" data-name=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 82), "displayName", [], "any", false, false, false, 82), "html", null, true);
            yield "\" data-tech-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
            yield "\" />
                  <i class=\"md-checkbox-control\"></i>
                </label>
              </div>
            ";
        }
        // line 87
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", ["module" => ($context["module"] ?? null)]);
        yield "
          ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Module/Includes/card_list.html.twig";
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
        return array (  302 => 87,  292 => 82,  288 => 80,  285 => 79,  278 => 78,  273 => 75,  267 => 73,  264 => 72,  257 => 71,  252 => 70,  248 => 68,  246 => 67,  241 => 66,  234 => 65,  229 => 56,  223 => 54,  217 => 52,  214 => 51,  207 => 50,  196 => 90,  193 => 89,  191 => 78,  187 => 76,  184 => 71,  182 => 65,  177 => 62,  171 => 60,  169 => 59,  165 => 57,  163 => 50,  157 => 46,  151 => 44,  144 => 41,  142 => 40,  137 => 38,  123 => 29,  114 => 23,  110 => 22,  106 => 21,  102 => 20,  98 => 19,  94 => 18,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  52 => 8,  48 => 6,  46 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/card_list.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\card_list.html.twig");
    }
}
