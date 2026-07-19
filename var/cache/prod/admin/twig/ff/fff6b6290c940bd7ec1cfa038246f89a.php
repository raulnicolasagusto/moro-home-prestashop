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

/* @PrestaShop/Admin/Module/Includes/modal_confirm.html.twig */
class __TwigTemplate_21b17948fa41f89407e9d72b3fae6267 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 5), "urls", [], "any", false, false, false, 5)) >= 1)) {
            // line 6
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 6), "urls", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                // line 7
                yield "    ";
                if (CoreExtension::inFilter($context["module_action"], ["disable", "uninstall", "reset"])) {
                    // line 8
                    yield "      <div id=\"module-modal-confirm-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
                    yield "-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_action"], "html", null, true);
                    yield "\" class=\"modal modal-vcenter fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title module-modal-title\">
                ";
                    // line 14
                    if (($context["module_action"] == "disable")) {
                        // line 15
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable module?", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                ";
                    }
                    // line 17
                    yield "                ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 18
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uninstall module?", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                ";
                    }
                    // line 20
                    yield "                ";
                    if (($context["module_action"] == "reset")) {
                        // line 21
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset module?", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                ";
                    }
                    // line 23
                    yield "              </h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
              <p>
                ";
                    // line 30
                    if (($context["module_action"] == "disable")) {
                        // line 31
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to disable %moduleName% module.", ["%moduleName%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 31), "displayName", [], "any", false, false, false, 31)], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  <br>
                  <br>
                  ";
                        // line 34
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your current settings will be saved, but the module will no longer be active.", [], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                ";
                    }
                    // line 36
                    yield "                ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 37
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to uninstall %moduleName% module.", ["%moduleName%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 37), "displayName", [], "any", false, false, false, 37)], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  <br>
                  ";
                        // line 39
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 39), "confirmUninstall", [], "any", false, false, false, 39), "html", null, true);
                        yield "
                  <br>
                  <br>
                  ";
                        // line 42
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This will disable the module and delete all its files. For good.", [], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  <br>
                  <label>
                    <input type=\"checkbox\" id=\"force_deletion\" name=\"force_deletion\" data-tech-name=\"";
                        // line 45
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
                        yield "\">
                    ";
                        // line 46
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional: delete module folder after uninstall.", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                  </label>
                  <br>
                  <span class=\"italic red\">
                    ";
                        // line 50
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This action cannot be undone.", [], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  </span>
                ";
                    }
                    // line 53
                    yield "                ";
                    if (($context["module_action"] == "reset")) {
                        // line 54
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You\x27re about to reset %moduleName% module.", ["%moduleName%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 54), "displayName", [], "any", false, false, false, 54)], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  <br>
                  <br>
                  ";
                        // line 57
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This will restore the defaults settings.", [], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  <br>
                  <span class=\"italic red\">
                    ";
                        // line 60
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This action cannot be undone.", [], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  </span>
                ";
                    }
                    // line 63
                    yield "              </p>
            </div>
            <div class=\"modal-footer\">
              <input type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\" value=\"";
                    // line 66
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
                    yield "\"/>
              ";
                    // line 67
                    if (($context["module_action"] == "disable")) {
                        // line 68
                        yield "                <a class=\"btn btn-primary uppercase module_action_modal_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_action"], "html", null, true);
                        yield "\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_url"], "html", null, true);
                        yield "\"
                data-dismiss=\"modal\" data-tech-name=\"";
                        // line 69
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "html", null, true);
                        yield "\">
                  ";
                        // line 70
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, disable it", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                </a>
              ";
                    }
                    // line 73
                    yield "              ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 74
                        yield "                <a class=\"btn btn-primary uppercase module_action_modal_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_action"], "html", null, true);
                        yield "\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_url"], "html", null, true);
                        yield "\"
                data-dismiss=\"modal\" data-tech-name=\"";
                        // line 75
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
                        yield "\">
                  ";
                        // line 76
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, uninstall it", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                </a>
              ";
                    }
                    // line 79
                    yield "              ";
                    if (($context["module_action"] == "reset")) {
                        // line 80
                        yield "                <a class=\"btn btn-primary uppercase module_action_modal_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_action"], "html", null, true);
                        yield "\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_url"], "html", null, true);
                        yield "\"
                data-dismiss=\"modal\" data-tech-name=\"";
                        // line 81
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 81), "name", [], "any", false, false, false, 81), "html", null, true);
                        yield "\">
                  ";
                        // line 82
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, reset it", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                </a>
              ";
                    }
                    // line 85
                    yield "            </div>
          </div>
        </div>
      </div>
    ";
                }
                // line 90
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['module_action'], $context['module_url'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig";
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
        return array (  248 => 90,  241 => 85,  235 => 82,  231 => 81,  224 => 80,  221 => 79,  215 => 76,  211 => 75,  204 => 74,  201 => 73,  195 => 70,  191 => 69,  184 => 68,  182 => 67,  178 => 66,  173 => 63,  167 => 60,  161 => 57,  154 => 54,  151 => 53,  145 => 50,  138 => 46,  134 => 45,  128 => 42,  122 => 39,  116 => 37,  113 => 36,  108 => 34,  101 => 31,  99 => 30,  90 => 23,  84 => 21,  81 => 20,  75 => 18,  72 => 17,  66 => 15,  64 => 14,  52 => 8,  49 => 7,  44 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\modal_confirm.html.twig");
    }
}
