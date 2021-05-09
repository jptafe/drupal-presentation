<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/bartik/templates/classy/navigation/book-navigation.html.twig */
class __TwigTemplate_300c75cceb7e57a809d57510a8e72220f6645dd83e37b1573969ddb234fb5b1b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bartik/classy.book-navigation"), "html", null, true);
        echo "
";
        // line 32
        if ((($context["tree"] ?? null) || ($context["has_links"] ?? null))) {
            // line 33
            echo "  <nav id=\"book-navigation-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["book_id"] ?? null), 33, $this->source), "html", null, true);
            echo "\" class=\"book-navigation\" role=\"navigation\" aria-labelledby=\"book-label-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["book_id"] ?? null), 33, $this->source), "html", null, true);
            echo "\">
    ";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tree"] ?? null), 34, $this->source), "html", null, true);
            echo "
    ";
            // line 35
            if (($context["has_links"] ?? null)) {
                // line 36
                echo "      <h2 class=\"visually-hidden\" id=\"book-label-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["book_id"] ?? null), 36, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Book traversal links for"));
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["book_title"] ?? null), 36, $this->source), "html", null, true);
                echo "</h2>
      <ul class=\"book-pager\">
      ";
                // line 38
                if (($context["prev_url"] ?? null)) {
                    // line 39
                    echo "        <li class=\"book-pager__item book-pager__item--previous\">
          <a href=\"";
                    // line 40
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prev_url"] ?? null), 40, $this->source), "html", null, true);
                    echo "\" rel=\"prev\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                    echo "\"><b>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("‹"));
                    echo "</b> ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prev_title"] ?? null), 40, $this->source), "html", null, true);
                    echo "</a>
        </li>
      ";
                }
                // line 43
                echo "      ";
                if (($context["parent_url"] ?? null)) {
                    // line 44
                    echo "        <li class=\"book-pager__item book-pager__item--center\">
          <a href=\"";
                    // line 45
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent_url"] ?? null), 45, $this->source), "html", null, true);
                    echo "\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to parent page"));
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Up"));
                    echo "</a>
        </li>
      ";
                }
                // line 48
                echo "      ";
                if (($context["next_url"] ?? null)) {
                    // line 49
                    echo "        <li class=\"book-pager__item book-pager__item--next\">
          <a href=\"";
                    // line 50
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_url"] ?? null), 50, $this->source), "html", null, true);
                    echo "\" rel=\"next\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_title"] ?? null), 50, $this->source), "html", null, true);
                    echo " <b>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("›"));
                    echo "</b></a>
        </li>
      ";
                }
                // line 53
                echo "    </ul>
    ";
            }
            // line 55
            echo "  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/classy/navigation/book-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 55,  119 => 53,  107 => 50,  104 => 49,  101 => 48,  91 => 45,  88 => 44,  85 => 43,  73 => 40,  70 => 39,  68 => 38,  58 => 36,  56 => 35,  52 => 34,  45 => 33,  43 => 32,  39 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/bartik/templates/classy/navigation/book-navigation.html.twig", "/home/jp/Projects/drupal-pres/web/core/themes/bartik/templates/classy/navigation/book-navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 32);
        static $filters = array("escape" => 31, "t" => 36);
        static $functions = array("attach_library" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
