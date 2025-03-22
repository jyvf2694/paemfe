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

/* modules/smart_trim/templates/smart-trim.html.twig */
class __TwigTemplate_178b19cf6c6ddaf414bc0de3f849234e extends \Twig\Template
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
        // line 19
        if ((($context["wrap_output"] ?? null) == true)) {
            // line 20
            echo "  <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_class"] ?? null), 20, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["output"] ?? null), 20, $this->source), "html", null, true);
            echo "</div>
";
        } else {
            // line 22
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["output"] ?? null), 22, $this->source), "html", null, true);
            echo "
";
        }
        // line 24
        echo "
";
        // line 25
        if ((($context["more"] ?? null) != null)) {
            // line 26
            echo "  <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more_wrapper_class"] ?? null), 26, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 26, $this->source)), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/smart_trim/templates/smart-trim.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 26,  58 => 25,  55 => 24,  49 => 22,  41 => 20,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a Smart Trimmed field.
 *
 * Available variables:
 * - output: The trimmed text to output.
 * - wrap_output: If true, output will be wrapped in a <div>.
 *     Note: wrap_output is deprecated and will be removed in a future release.
 *     Please override this template in your theme and apply any wrapping if
 *     required.
 * - wrapper_class: Class name for wrapper.
 * - more: Render array for \"More\" link.
 * - more_wrapper_class: Class name for more link wrapper.
 * - field: The name of he field being rendered.
 * - entity_type: The type of entity being rendered.
 */
#}
{% if wrap_output == true %}
  <div class=\"{{ wrapper_class }}\">{{ output }}</div>
{% else %}
  {{ output }}
{% endif %}

{% if more != null %}
  <div class=\"{{ more_wrapper_class }}\">{{ render_var(more) }}</div>
{% endif %}
", "modules/smart_trim/templates/smart-trim.html.twig", "/web/paemfe/modules/smart_trim/templates/smart-trim.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array("escape" => 20);
        static $functions = array("render_var" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['render_var']
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
