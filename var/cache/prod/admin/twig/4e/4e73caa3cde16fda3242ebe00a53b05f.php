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

/* @PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig */
class __TwigTemplate_2d1331dfcb637b2391662b9c2158e998 extends Template
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
";
        // line 6
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "confirmationMessage", [], "any", false, false, false, 6))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-success\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "confirmationMessage", [], "any", false, false, false, 10), "html", null, true);
            yield "
  </div>
</div>
";
        }
        // line 14
        yield "
";
        // line 15
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "errorMessage", [], "any", false, false, false, 15))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "errorMessage", [], "any", false, false, false, 19), "html", null, true);
            yield "
  </div>
</div>
";
        }
        // line 23
        yield "
";
        // line 24
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "errors", [], "any", false, false, false, 24))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 28
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "errors", [], "any", false, false, false, 28)) == 1)) {
                // line 29
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "errors", [], "any", false, false, false, 29)), "html", null, true);
                yield "
    ";
            } else {
                // line 31
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There are %d errors.", ["%d" => Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "errors", [], "any", false, false, false, 31))], "Admin.Notifications.Error"), "html", null, true);
                yield "
      <br/>
      <ol>
        ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "errors", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 35
                    yield "        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                    yield "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                yield "      </ol>
    ";
            }
            // line 39
            yield "  </div>
</div>
";
        }
        // line 42
        yield "
";
        // line 43
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "informations", [], "any", false, false, false, 43))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-info\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <ul id=\"infos_block\" class=\"list-unstyled\">
      ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "informations", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 49
                yield "      <li>";
                yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($context["info"]);
                yield "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['info'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "    </ul>
  </div>
</div>
";
        }
        // line 55
        yield "
";
        // line 56
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "confirmations", [], "any", false, false, false, 56))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-success\" style=\"display:block;\">
    ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "confirmations", [], "any", false, false, false, 59));
            foreach ($context['_seq'] as $context["_key"] => $context["confirmation"]) {
                // line 60
                yield "    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["confirmation"], "html", null, true);
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['confirmation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "  </div>
</div>
";
        }
        // line 65
        yield "
";
        // line 66
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "warnings", [], "any", false, false, false, 66))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-warning\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 70
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "warnings", [], "any", false, false, false, 70)) > 1)) {
                // line 71
                yield "    <h4>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There are %d warnings:", ["%d" => Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "warnings", [], "any", false, false, false, 71))]), "html", null, true);
                yield "</h4>
    ";
            }
            // line 73
            yield "    <ul class=\"list-unstyled\">
      ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "warnings", [], "any", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 75
                yield "      <li>";
                yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($context["warning"]);
                yield "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['warning'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "    </ul>
  </div>
</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig";
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
        return array (  214 => 77,  205 => 75,  201 => 74,  198 => 73,  192 => 71,  190 => 70,  185 => 67,  183 => 66,  180 => 65,  175 => 62,  166 => 60,  162 => 59,  158 => 57,  156 => 56,  153 => 55,  147 => 51,  138 => 49,  134 => 48,  128 => 44,  126 => 43,  123 => 42,  118 => 39,  114 => 37,  105 => 35,  101 => 34,  94 => 31,  88 => 29,  86 => 28,  81 => 25,  79 => 24,  76 => 23,  69 => 19,  64 => 16,  62 => 15,  59 => 14,  52 => 10,  47 => 7,  45 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\LegacyLayout\\session_alert.html.twig");
    }
}
