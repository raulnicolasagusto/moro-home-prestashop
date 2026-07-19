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

/* @Modules/ps_mbo/views/templates/hook/twig/module_manager_message.html.twig */
class __TwigTemplate_235bfb9b527337440acc038963fc8cf8 extends Template
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
        // line 19
        yield "<script defer type=\"application/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cdc_error_templating_url"] ?? null), "html", null, true);
        yield "\"></script>

";
        // line 21
        if ((array_key_exists("cdc_script_not_found", $context) && (($context["cdc_script_not_found"] ?? null) === true))) {
            // line 22
            yield "  <script defer type=\"application/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cdc_error_url"] ?? null), "html", null, true);
            yield "\"></script>
";
        } else {
            // line 24
            yield "  <script defer type=\"application/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cdc_url"] ?? null), "html", null, true);
            yield "\"></script>
";
        }
        // line 26
        yield "
<script>
  window.\$(document).ready(function () {
    \$(\x27#main-div\x27).prepend(\x27<div class=\"module-manager-message-wrapper cdc-container\" id=\"module-manager-message-cdc-container\" data-error-path=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mbo_module_cdc_error");
        yield "\"></div>\x27)
    if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== \"undefined\") {
      const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

      const context = ";
        // line 33
        yield json_encode(($context["shop_context"] ?? null));
        yield ";

      renderModulesManagerMessage(context, \x27#module-manager-message-cdc-container\x27)
    }
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
        return "@Modules/ps_mbo/views/templates/hook/twig/module_manager_message.html.twig";
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
        return array (  74 => 33,  67 => 29,  62 => 26,  56 => 24,  50 => 22,  48 => 21,  42 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Modules/ps_mbo/views/templates/hook/twig/module_manager_message.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\modules\\ps_mbo\\views\\templates\\hook\\twig\\module_manager_message.html.twig");
    }
}
