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

/* themes/custom/paemfe/partials/footer.html.twig */
class __TwigTemplate_577ca924b462df4d7d4dd590dc5b83b4 extends \Twig\Template
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
        // line 1
        echo "
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 2)) {
            // line 3
            echo "<footer >
   ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "presentacion", [], "any", false, false, true, 4)) {
                // line 5
                echo "<div class=\"block-logosorganismos\" role=\"complementary\">
    ";
                // line 6
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "presentacion", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo "
</div>
";
            }
            // line 8
            echo " 

   ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sponsor", [], "any", false, false, true, 10)) {
                // line 11
                echo "   <div id=\"sponsor\" class=\"sponsor\" role=\"complementary\">
      <span>Apoyan:</span>
      ";
                // line 13
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sponsor", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "
   </div>
   ";
            }
            // line 16
            echo "   <div class=\"footer-container\">
      <div class=\"footer\">
   <div class=\"footer-top\">
      <div class=\"left\">
       ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "       
            
         
      </div>
      <div class=\"right\">
         ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menupie", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
      </div>
   </div>
   <div class=\"footer-bottom\">
      
   </div>
</div>
</footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/paemfe/partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  80 => 20,  74 => 16,  68 => 13,  64 => 11,  62 => 10,  58 => 8,  52 => 6,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if page.footer %}
<footer >
   {% if page.presentacion %}
<div class=\"block-logosorganismos\" role=\"complementary\">
    {{ page.presentacion }}
</div>
{% endif %} 

   {% if page.sponsor %}
   <div id=\"sponsor\" class=\"sponsor\" role=\"complementary\">
      <span>Apoyan:</span>
      {{ page.sponsor }}
   </div>
   {% endif %}
   <div class=\"footer-container\">
      <div class=\"footer\">
   <div class=\"footer-top\">
      <div class=\"left\">
       {{ page.footer }}       
            
         
      </div>
      <div class=\"right\">
         {{ page.menupie }}
      </div>
   </div>
   <div class=\"footer-bottom\">
      
   </div>
</div>
</footer>
{% endif %}", "themes/custom/paemfe/partials/footer.html.twig", "/web/paemfe/themes/custom/paemfe/partials/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 6);
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
