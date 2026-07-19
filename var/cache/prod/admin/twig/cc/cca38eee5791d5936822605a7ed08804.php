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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig */
class __TwigTemplate_2b10aaf1223285f8322dc303601ccd13 extends Template
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
            'logo_card' => [$this, 'block_logo_card'],
            'card_title' => [$this, 'block_card_title'],
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('logo_card', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_logo_card(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "  <div class=\"card logo-card\">
    <div class=\"card-body\">
      <div class=\"logo-card-title text-left\">
        ";
        // line 10
        yield from $this->unwrap()->yieldBlock('card_title', $context, $blocks);
        // line 12
        yield "      </div>
      ";
        // line 13
        yield from $this->unwrap()->yieldBlock('card_content', $context, $blocks);
        // line 15
        yield "    </div>
  </div>
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_card_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "        ";
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_card_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  97 => 14,  90 => 13,  85 => 11,  78 => 10,  71 => 15,  69 => 13,  66 => 12,  64 => 10,  59 => 7,  48 => 6,  45 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig", "C:\\xampp-8-2\\htdocs\\more-home\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Theme\\Blocks\\Partials\\logo_card.html.twig");
    }
}
