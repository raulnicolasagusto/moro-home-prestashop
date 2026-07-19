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

/* @PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig */
class __TwigTemplate_54941b23af8d34d25605fe9f961a3d17 extends Template
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "counter", [], "any", true, true, false, 5)) {
            // line 6
            yield "  ";
            $context["isRecommandedType"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "counter_type", [], "any", true, true, false, 6) && (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "counter_type", [], "any", false, false, false, 6) == "recommended"));
            // line 7
            yield "  <small class=\"form-text text-muted text-right maxLength ";
            yield (((($tmp =  !($context["isRecommandedType"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("maxType") : (""));
            yield "\">
      <em>
        ";
            // line 9
            if ((($tmp = ($context["isRecommandedType"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 10
                yield "          ";
                yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => "<span class=\"currentLength\">", "[/1]" => "</span>", "[2]" => ("<span class=\"currentTotalMax\">" . CoreExtension::getAttribute($this->env, $this->source,                 // line 13
($context["attr"] ?? null), "counter", [], "any", false, false, false, 13)), "[/2]" => "</span>"]));
                // line 15
                yield "
        ";
            } else {
                // line 17
                yield "          ";
                yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters allowed", [], "Admin.Catalog.Feature"), ["[1]" => "<span class=\"currentLength\">", "[/1]" => "</span>", "[2]" => ("<span class=\"currentTotalMax\">" . CoreExtension::getAttribute($this->env, $this->source,                 // line 20
($context["attr"] ?? null), "counter", [], "any", false, false, false, 20)), "[/2]" => "</span>"]));
                // line 22
                yield "
        ";
            }
            // line 24
            yield "      </em>
  </small>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig";
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
        return array (  71 => 24,  67 => 22,  65 => 20,  63 => 17,  59 => 15,  57 => 13,  55 => 10,  53 => 9,  47 => 7,  44 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\form_max_length.html.twig");
    }
}
