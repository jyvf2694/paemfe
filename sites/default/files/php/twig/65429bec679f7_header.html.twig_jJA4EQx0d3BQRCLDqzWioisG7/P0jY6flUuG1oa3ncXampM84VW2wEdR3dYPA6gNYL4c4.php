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

/* themes/custom/paemfe/partials/header.html.twig */
class __TwigTemplate_71d9a7af6af9b2d0d393f19d7efa4501 extends \Twig\Template
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
        echo "<header>
    <meta property=\"og:image\" content=\"https://transformacioneducativa.anep.edu.uy/sites/default/files/2022-11/2-b.png\" />
    
    <div class=\"site-bar\">
        <div class=\"site-bar-container\">
            <div class=\"responsive-bar\">

                ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 8)) {
            echo " 
                    <div class=\"logo\">
                        ";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
                    </div>
                    ";
        }
        // line 13
        echo "                
                <div class=\"open-container\">
                    <button class=\"open-icon\" type=\"button\" title=\"Abrir menú\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 245.89 246.57\"><defs></defs><g id=\"Capa_2\" data-name=\"Capa 2\"><g id=\"Capa_1-2\" data-name=\"Capa 1\"><path class=\"cls-1\" d=\"M231.62,0H14.26A14.27,14.27,0,0,0,0,14.26v218a14.27,14.27,0,0,0,14.26,14.27H231.62a14.27,14.27,0,0,0,14.27-14.27v-218A14.27,14.27,0,0,0,231.62,0Zm2.75,232.69A2.33,2.33,0,0,1,232,235H13.84a2.32,2.32,0,0,1-2.32-2.33V13.88a2.32,2.32,0,0,1,2.32-2.33H232a2.33,2.33,0,0,1,2.33,2.33Z\"/><path class=\"cls-1\" d=\"M57.19,65.75H188.7a8.22,8.22,0,1,1,0,16.44H57.19a8.22,8.22,0,0,1,0-16.44Zm0,49.31H188.7a8.22,8.22,0,1,1,0,16.44H57.19a8.22,8.22,0,0,1,0-16.44Zm0,49.32H188.7a8.22,8.22,0,1,1,0,16.44H57.19a8.22,8.22,0,1,1,0-16.44Z\"/></g></g></svg>
                    </button>
                </div>
            </div>
            <div class=\"site-bar-nav\" style=\"display:none;\">
                ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mainnavigation", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
                <div class=\"search-box\">
                    ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
                    <button class=\"open-searchBox\" type=\"button\" title=\"Abrir Buscador\" style=\"display:block;\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13.252\" height=\"13.255\" viewBox=\"0 0 13.252 13.255\"><g id=\"Grupo_17\" data-name=\"Grupo 17\" transform=\"translate(-129.439 -2.941)\"><path id=\"Icon_ionic-ios-search\" data-name=\"Icon ionic-ios-search\" d=\"M4.655,16.789l3.686-3.72a5.252,5.252,0,1,1,.8.808l-3.661,3.7a.567.567,0,0,1-.8.021A.571.571,0,0,1,4.655,16.789Zm7.813-2.868a4.147,4.147,0,1,0-2.933-1.215A4.122,4.122,0,0,0,12.468,13.921Z\" transform=\"translate(124.939 -1.552)\" fill=\"#fff\"/></g></svg>
                    </button>
                </div>
            </div>
        </div>
    </header>";
    }

    public function getTemplateName()
    {
        return "themes/custom/paemfe/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  69 => 21,  59 => 13,  53 => 10,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <meta property=\"og:image\" content=\"https://transformacioneducativa.anep.edu.uy/sites/default/files/2022-11/2-b.png\" />
    
    <div class=\"site-bar\">
        <div class=\"site-bar-container\">
            <div class=\"responsive-bar\">

                {% if page.logo %} 
                    <div class=\"logo\">
                        {{ page.logo }}
                    </div>
                    {% endif %}
                
                <div class=\"open-container\">
                    <button class=\"open-icon\" type=\"button\" title=\"Abrir menú\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 245.89 246.57\"><defs></defs><g id=\"Capa_2\" data-name=\"Capa 2\"><g id=\"Capa_1-2\" data-name=\"Capa 1\"><path class=\"cls-1\" d=\"M231.62,0H14.26A14.27,14.27,0,0,0,0,14.26v218a14.27,14.27,0,0,0,14.26,14.27H231.62a14.27,14.27,0,0,0,14.27-14.27v-218A14.27,14.27,0,0,0,231.62,0Zm2.75,232.69A2.33,2.33,0,0,1,232,235H13.84a2.32,2.32,0,0,1-2.32-2.33V13.88a2.32,2.32,0,0,1,2.32-2.33H232a2.33,2.33,0,0,1,2.33,2.33Z\"/><path class=\"cls-1\" d=\"M57.19,65.75H188.7a8.22,8.22,0,1,1,0,16.44H57.19a8.22,8.22,0,0,1,0-16.44Zm0,49.31H188.7a8.22,8.22,0,1,1,0,16.44H57.19a8.22,8.22,0,0,1,0-16.44Zm0,49.32H188.7a8.22,8.22,0,1,1,0,16.44H57.19a8.22,8.22,0,1,1,0-16.44Z\"/></g></g></svg>
                    </button>
                </div>
            </div>
            <div class=\"site-bar-nav\" style=\"display:none;\">
                {{ page.mainnavigation }}
                <div class=\"search-box\">
                    {{ page.search }}
                    <button class=\"open-searchBox\" type=\"button\" title=\"Abrir Buscador\" style=\"display:block;\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13.252\" height=\"13.255\" viewBox=\"0 0 13.252 13.255\"><g id=\"Grupo_17\" data-name=\"Grupo 17\" transform=\"translate(-129.439 -2.941)\"><path id=\"Icon_ionic-ios-search\" data-name=\"Icon ionic-ios-search\" d=\"M4.655,16.789l3.686-3.72a5.252,5.252,0,1,1,.8.808l-3.661,3.7a.567.567,0,0,1-.8.021A.571.571,0,0,1,4.655,16.789Zm7.813-2.868a4.147,4.147,0,1,0-2.933-1.215A4.122,4.122,0,0,0,12.468,13.921Z\" transform=\"translate(124.939 -1.552)\" fill=\"#fff\"/></g></svg>
                    </button>
                </div>
            </div>
        </div>
    </header>", "themes/custom/paemfe/partials/header.html.twig", "/web/paemfe/themes/custom/paemfe/partials/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8);
        static $filters = array("escape" => 10);
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
