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

/* @Storefront/storefront/component/sorting.html.twig */
class __TwigTemplate_1fb5b09928a805ae6bc9714854eb6727a17a379bbf05bf72c07c3db86485213c extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/sorting.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/sorting.html.twig"));

        // line 1
        $context["config"] = ["sorting" => ($context["current"] ?? null)];
        // line 2
        $context["showSorting"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slot"] ?? null), "config", [], "any", false, true, false, 2), "showSorting", [], "any", false, true, false, 2), "value", [], "any", true, true, false, 2)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slot"] ?? null), "config", [], "any", false, false, false, 2), "showSorting", [], "any", false, false, false, 2), "value", [], "any", false, false, false, 2)) : (true));
        // line 3
        echo "
";
        // line 4
        if ((($context["showSorting"] ?? null) && (1 === twig_compare(twig_length_filter($this->env, ($context["sortings"] ?? null)), 1)))) {
            // line 5
            echo "    <div class=\"sorting\" data-listing-sorting=\"true\" data-listing-sorting-options='";
            echo twig_escape_filter($this->env, json_encode(($context["config"] ?? null)), "html", null, true);
            echo "'>
        <select class=\"sorting custom-select\" aria-label=\"";
            // line 6
            echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.sortingLabel")), "html", null, true);
            echo "\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sortings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sorting"]) {
                // line 8
                echo "                ";
                $context["key"] = twig_get_attribute($this->env, $this->source, $context["sorting"], "key", [], "any", false, false, false, 8);
                // line 9
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
                echo "\"";
                if ((0 === twig_compare(($context["key"] ?? null), ($context["current"] ?? null)))) {
                    echo " selected";
                }
                echo ">";
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sorting"], "translated", [], "any", false, false, false, 9), "label", [], "any", false, false, false, 9));
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorting'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </select>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 11,  68 => 9,  65 => 8,  61 => 7,  57 => 6,  52 => 5,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set config = { sorting: current } %}
{% set showSorting = (slot.config.showSorting.value is defined) ? slot.config.showSorting.value : true %}

{% if showSorting and sortings|length > 1 %}
    <div class=\"sorting\" data-listing-sorting=\"true\" data-listing-sorting-options='{{ config|json_encode }}'>
        <select class=\"sorting custom-select\" aria-label=\"{{ 'general.sortingLabel'|trans|striptags }}\">
            {% for sorting in sortings %}
                {% set key = sorting.key %}
                <option value=\"{{ key }}\"{% if key == current %} selected{% endif %}>{{ sorting.translated.label|sw_sanitize }}</option>
            {% endfor %}
        </select>
    </div>
{% endif %}
", "@Storefront/storefront/component/sorting.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/sorting.html.twig");
    }
}
