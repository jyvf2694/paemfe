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

/* themes/custom/paemfe/page.html.twig */
class __TwigTemplate_1122e8d9e7b74833d56dbf20e4ffa566 extends \Twig\Template
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
        // line 48
        echo "<div>
  ";
        // line 49
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/header.html.twig"), "themes/custom/paemfe/page.html.twig", 49)->display($context);
        // line 50
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 50)) {
            // line 51
            echo "    <div class=\"breadcrumb\">
        ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 55
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "titulo", [], "any", false, false, true, 55)) {
            // line 56
            echo "    <div id=\"titulo\" class=\"titulo\" role=\"complementary\">
        ";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "titulo", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 60
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "oferta", [], "any", false, false, true, 60)) {
            // line 61
            echo "    <div class=\"oferta\">
        <div id=\"oferta\" class=\"main_oferta\" role=\"complementary\">
            ";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "oferta", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "
        </div>
    </div>
    ";
        }
        // line 67
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "ofertamovil", [], "any", false, false, true, 67)) {
            // line 68
            echo "    <div class=\"ofertamovil\">
        <div id=\"ofertamovil\" class=\"main_ofertamovil\" role=\"complementary\">
            ";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "ofertamovil", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "
        </div>
    </div>
    ";
        }
        // line 74
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "agendated", [], "any", false, false, true, 74)) {
            // line 75
            echo "    <div class=\"agendated\"role=\"complementary\">
        ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "agendated", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 79
        echo "    <div class=\"main-container\">
        ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebarmenu", [], "any", false, false, true, 80)) {
            // line 81
            echo "        <div id=\"sidebar\" class=\"left\" role=\"complementary\">
            ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebarmenu", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 85
        echo "        <main role=\"main\" class=\"main\">
            ";
        // line 86
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 86)) {
            // line 87
            echo "            <div class=\"highlighted\">
                <aside class=\"layout-container section clearfix\" role=\"complementary\">
                    ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
                </aside>
            </div>
            ";
        }
        // line 93
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        echo "
            ";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "calendario", [], "any", false, false, true, 94)) {
            // line 95
            echo "            <div id=\"calendario\" class=\"calendario\" role=\"complementary\">
                ";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "calendario", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "
            </div>
            ";
        }
        // line 99
        echo "       </main>
        
    </div>
</div>

";
        // line 104
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/footer.html.twig"), "themes/custom/paemfe/page.html.twig", 104)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/paemfe/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 104,  154 => 99,  148 => 96,  145 => 95,  143 => 94,  138 => 93,  131 => 89,  127 => 87,  125 => 86,  122 => 85,  116 => 82,  113 => 81,  111 => 80,  108 => 79,  102 => 76,  99 => 75,  96 => 74,  89 => 70,  85 => 68,  82 => 67,  75 => 63,  71 => 61,  68 => 60,  62 => 57,  59 => 56,  56 => 55,  50 => 52,  47 => 51,  44 => 50,  42 => 49,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Default theme implementation to display a single page.
*
* The doctype, html, head and body tags are not in this template. Instead they
* can be found in the html.html.twig template in this directory.
*
* Available variables:
*
* General utility variables:
* - base_path: The base URL path of the Drupal installation. Will usually be
* \"/\" unless you have installed Drupal in a sub-directory.
* - is_front: A flag indicating if the current page is the front page.
* - logged_in: A flag indicating if the user is registered and signed in.
* - is_admin: A flag indicating if the user has permission to access
* administration pages.
*
* Site identity:
* - front_page: The URL of the front page. Use this instead of base_path when
* linking to the front page. This includes the language domain or prefix.
*
* Page content (in order of occurrence in the default page.html.twig):
* - messages: Status and error messages. Should be displayed prominently.
* - node: Fully loaded node, if there is an automatically-loaded node
* associated with the page and the node ID is the second argument in the
* page's path (e.g. node/12345 and node/12345/revisions, but not
* comment/reply/12345).
*
* Regions:
* - page.header: Items for the header region.
* - page.primary_menu: Items for the primary menu region.
* - page.secondary_menu: Items for the secondary menu region.
* - page.highlighted: Items for the highlighted content region.
* - page.help: Dynamic help text, mostly for admin pages.
* - page.content: The main content of the current page.
* - page.sidebar_first: Items for the first sidebar.
* - page.sidebar_second: Items for the second sidebar.
* - page.footer: Items for the footer region.
* - page.breadcrumb: Items for the breadcrumb region.
*
* @see template_preprocess_page()
* @see html.html.twig
*
* @ingroup themeable
*/
#}
<div>
  {% include directory ~ '/partials/header.html.twig' %}
    {% if page.breadcrumb %}
    <div class=\"breadcrumb\">
        {{ page.breadcrumb }}
    </div>
    {% endif %}
    {% if page.titulo %}
    <div id=\"titulo\" class=\"titulo\" role=\"complementary\">
        {{ page.titulo }}
    </div>
    {% endif %}
    {% if page.oferta %}
    <div class=\"oferta\">
        <div id=\"oferta\" class=\"main_oferta\" role=\"complementary\">
            {{ page.oferta }}
        </div>
    </div>
    {% endif %}
    {% if page.ofertamovil %}
    <div class=\"ofertamovil\">
        <div id=\"ofertamovil\" class=\"main_ofertamovil\" role=\"complementary\">
            {{ page.ofertamovil }}
        </div>
    </div>
    {% endif %}
    {% if page.agendated %}
    <div class=\"agendated\"role=\"complementary\">
        {{ page.agendated }}
    </div>
    {% endif %}
    <div class=\"main-container\">
        {% if page.sidebarmenu %}
        <div id=\"sidebar\" class=\"left\" role=\"complementary\">
            {{ page.sidebarmenu }}
        </div>
        {% endif %}
        <main role=\"main\" class=\"main\">
            {% if page.highlighted %}
            <div class=\"highlighted\">
                <aside class=\"layout-container section clearfix\" role=\"complementary\">
                    {{ page.highlighted }}
                </aside>
            </div>
            {% endif %}
            {{ page.content }}
            {% if page.calendario %}
            <div id=\"calendario\" class=\"calendario\" role=\"complementary\">
                {{ page.calendario }}
            </div>
            {% endif %}
       </main>
        
    </div>
</div>

{% include directory ~ '/partials/footer.html.twig' %}", "themes/custom/paemfe/page.html.twig", "/web/paemfe/themes/custom/paemfe/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 49, "if" => 50);
        static $filters = array("escape" => 52);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
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
