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

/* themes/custom/paemfe/templates/content/search-result.html.twig */
class __TwigTemplate_892342b08b5481e7ef294a5bb0cbdc35 extends \Twig\Template
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
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 59, $this->source), "html", null, true);
        echo "
<h3";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 60, $this->source), "html", null, true);
        echo ">
  <a href=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 61, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 61, $this->source), "html", null, true);
        echo "</a>
</h3>
";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 63, $this->source), "html", null, true);
        echo "
";
        // line 64
        if (($context["snippet"] ?? null)) {
            // line 65
            echo "  <p";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 65, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["snippet"] ?? null), 65, $this->source), "html", null, true);
            echo "</p>
";
        }
        // line 67
        if (($context["info"] ?? null)) {
            // line 68
            echo "  <p>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["info"] ?? null), 68, $this->source), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/paemfe/templates/content/search-result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 68,  68 => 67,  60 => 65,  58 => 64,  54 => 63,  47 => 61,  43 => 60,  39 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for displaying a single search result.
 *
 * This template renders a single search result. The list of results is
 * rendered using '#theme' => 'item_list', with suggestions of:
 * - item_list__search_results__(plugin_id)
 * - item_list__search_results
 *
 * Available variables:
 * - url: URL of the result.
 * - title: Title of the result.
 * - snippet: A small preview of the result. Does not apply to user searches.
 * - info: String of all the meta information ready for print. Does not apply
 *   to user searches.
 * - plugin_id: The machine-readable name of the plugin being executed,such
 *   as \"node_search\" or \"user_search\".
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - info_split: Contains same data as info, but split into separate parts.
 *   - info_split.type: Node type (or item type string supplied by module).
 *   - info_split.user: Author of the node linked to users profile. Depends
 *     on permission.
 *   - info_split.date: Last update of the node. Short formatted.
 *   - info_split.comment: Number of comments output as \"% comments\", %
 *     being the count. (Depends on comment.module).
 * @todo The info variable needs to be made drillable and each of these sub
 *   items should instead be within info and renamed info.foo, info.bar, etc.
 *
 * Other variables:
 * - title_attributes: HTML attributes for the title.
 * - content_attributes: HTML attributes for the content.
 *
 * Since info_split is keyed, a direct print of the item is possible.
 * This array does not apply to user searches so it is recommended to check
 * for its existence before printing. The default keys of 'type', 'user' and
 * 'date' always exist for node searches. Modules may provide other data.
 * @code
 *   {% if (info_split.comment) %}
 *     <span class=\"info-comment\">
 *       {{ info_split.comment }}
 *     </span>
 *   {% endif %}
 * @endcode
 *
 * To check for all available data within info_split, use the code below.
 * @code
 *   <pre>
 *     {{ dump(info_split) }}
 *   </pre>
 * @endcode
 *
 * @see template_preprocess_search_result()
 */
#}
{{ title_prefix }}
<h3{{ title_attributes }}>
  <a href=\"{{ url }}\">{{ title }}</a>
</h3>
{{ title_suffix }}
{% if snippet %}
  <p{{ content_attributes }}>{{ snippet }}</p>
{% endif %}
{% if info %}
  <p>{{ info }}</p>
{% endif %}
", "themes/custom/paemfe/templates/content/search-result.html.twig", "/web/paemfe/themes/custom/paemfe/templates/content/search-result.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 64);
        static $filters = array("escape" => 59);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
