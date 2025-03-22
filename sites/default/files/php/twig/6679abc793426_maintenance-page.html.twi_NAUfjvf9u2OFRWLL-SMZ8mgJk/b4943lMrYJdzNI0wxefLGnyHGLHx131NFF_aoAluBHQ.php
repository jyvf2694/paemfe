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

/* themes/custom/paemfe/templates/layout/maintenance-page.html.twig */
class __TwigTemplate_3948c2d2a27bce44de2dd490cc90a63b extends \Twig\Template
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
        // line 12
        echo "<header role=\"banner\">
  ";
        // line 13
        if (($context["logo"] ?? null)) {
            // line 14
            echo "    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 14, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">
      <img src=\"";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 15, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\"/>
    </a>
  ";
        }
        // line 18
        echo "
  ";
        // line 19
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 20
            echo "    ";
            if (($context["site_name"] ?? null)) {
                // line 21
                echo "      <h1>
        <a href=\"";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 22, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 22, $this->source), "html", null, true);
                echo "</a>
      </h1>
    ";
            }
            // line 25
            echo "
    ";
            // line 26
            if (($context["site_slogan"] ?? null)) {
                // line 27
                echo "      <div>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 27, $this->source), "html", null, true);
                echo "</div>
    ";
            }
            // line 29
            echo "  ";
        }
        // line 30
        echo "</header>

<main role=\"main\">
  ";
        // line 33
        if (($context["title"] ?? null)) {
            // line 34
            echo "    <h1>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 34, $this->source), "html", null, true);
            echo "</h1>
  ";
        }
        // line 36
        echo "
  ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "

  ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "
</main>

";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 42)) {
            // line 43
            echo "  <aside role=\"complementary\">
    ";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "
  </aside>
";
        }
        // line 47
        echo "
";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 48)) {
            // line 49
            echo "  <aside role=\"complementary\">
    ";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "
  </aside>
";
        }
        // line 53
        echo "
";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 54)) {
            // line 55
            echo "  <footer role=\"contentinfo\">
    ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "
  </footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/paemfe/templates/layout/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 56,  151 => 55,  149 => 54,  146 => 53,  140 => 50,  137 => 49,  135 => 48,  132 => 47,  126 => 44,  123 => 43,  121 => 42,  115 => 39,  110 => 37,  107 => 36,  101 => 34,  99 => 33,  94 => 30,  91 => 29,  85 => 27,  83 => 26,  80 => 25,  70 => 22,  67 => 21,  64 => 20,  62 => 19,  59 => 18,  51 => 15,  44 => 14,  42 => 13,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single Drupal page while offline.
 *
 * All available variables are mirrored in page.html.twig.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess_maintenance_page()
 */
#}
<header role=\"banner\">
  {% if logo %}
    <a href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">
      <img src=\"{{ logo }}\" alt=\"{{ 'Home'|t }}\"/>
    </a>
  {% endif %}

  {% if site_name or site_slogan %}
    {% if site_name %}
      <h1>
        <a href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
      </h1>
    {% endif %}

    {% if site_slogan %}
      <div>{{ site_slogan }}</div>
    {% endif %}
  {% endif %}
</header>

<main role=\"main\">
  {% if title %}
    <h1>{{ title }}</h1>
  {% endif %}

  {{ page.highlighted }}

  {{ page.content }}
</main>

{% if page.sidebar_first %}
  <aside role=\"complementary\">
    {{ page.sidebar_first }}
  </aside>
{% endif %}

{% if page.sidebar_second %}
  <aside role=\"complementary\">
    {{ page.sidebar_second }}
  </aside>
{% endif %}

{% if page.footer %}
  <footer role=\"contentinfo\">
    {{ page.footer }}
  </footer>
{% endif %}
", "themes/custom/paemfe/templates/layout/maintenance-page.html.twig", "/web/paemfe/themes/custom/paemfe/templates/layout/maintenance-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13);
        static $filters = array("escape" => 14, "t" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                []
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
