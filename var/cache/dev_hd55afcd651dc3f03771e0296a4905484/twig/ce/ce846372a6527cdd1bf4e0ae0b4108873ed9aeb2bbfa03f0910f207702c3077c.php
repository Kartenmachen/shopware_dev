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

/* @Storefront/storefront/component/listing/filter/filter-rating-select.html.twig */
class __TwigTemplate_bc498cd2b2a68c78f76bd32e0844de36027d7e87792653ec9311d4f5d4124cb8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component_filter_multi_select_list' => [$this, 'block_component_filter_multi_select_list'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-rating-select.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-rating-select.html.twig"));

        // line 3
        if ( !array_key_exists("maxPoints", $context)) {
            // line 4
            $context["maxPoints"] = 5;
        }
        // line 7
        if ( !array_key_exists("filterRatingActiveLabelStart", $context)) {
            // line 8
            $context["filterRatingActiveLabelStart"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingActiveLabelStart"));
        }
        // line 11
        if ( !array_key_exists("filterRatingActiveLabelEndSingular", $context)) {
            // line 12
            $context["filterRatingActiveLabelEndSingular"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingActiveLabelEndSingular"));
        }
        // line 15
        if ( !array_key_exists("filterRatingActiveLabelEnd", $context)) {
            // line 16
            $context["filterRatingActiveLabelEnd"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingActiveLabelEnd"));
        }
        // line 19
        if ( !array_key_exists("listItemSelector", $context)) {
            // line 20
            $context["listItemSelector"] = ".filter-rating-select-list-item";
        }
        // line 23
        if ( !array_key_exists("checkboxSelector", $context)) {
            // line 24
            $context["checkboxSelector"] = ".filter-rating-select-radio";
        }
        // line 27
        if ( !array_key_exists("dataPluginSelectorOptions", $context)) {
            // line 28
            $context["dataPluginSelectorOptions"] = ["name" =>             // line 29
($context["name"] ?? null), "maxPoints" =>             // line 30
($context["maxPoints"] ?? null), "listItemSelector" =>             // line 31
($context["listItemSelector"] ?? null), "checkboxSelector" =>             // line 32
($context["checkboxSelector"] ?? null), "snippets" => ["filterRatingActiveLabelStart" =>             // line 34
($context["filterRatingActiveLabelStart"] ?? null), "filterRatingActiveLabelEndSingular" =>             // line 35
($context["filterRatingActiveLabelEndSingular"] ?? null), "filterRatingActiveLabelEnd" =>             // line 36
($context["filterRatingActiveLabelEnd"] ?? null), "disabledFilterText" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.disabledFilterTooltip"))]];
        }
        // line 2
        $this->parent = $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", "@Storefront/storefront/component/listing/filter/filter-rating-select.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_component_filter_multi_select_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_list"));

        // line 43
        echo "    <ul class=\"filter-multi-select-list\">
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((($context["maxPoints"] ?? null) - 1), 1));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
            // line 45
            echo "            <li class=\"filter-rating-select-list-item\">
                ";
            // line 46
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-rating-select-item.html.twig", "@Storefront/storefront/component/listing/filter/filter-rating-select.html.twig", 46)->display(twig_array_merge($context, ["points" =>             // line 47
$context["point"], "maxPoints" =>             // line 48
($context["maxPoints"] ?? null)]));
            // line 50
            echo "            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-rating-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 52,  138 => 50,  136 => 48,  135 => 47,  134 => 46,  131 => 45,  114 => 44,  111 => 43,  101 => 42,  90 => 2,  87 => 36,  86 => 35,  85 => 34,  84 => 32,  83 => 31,  82 => 30,  81 => 29,  80 => 28,  78 => 27,  75 => 24,  73 => 23,  70 => 20,  68 => 19,  65 => 16,  63 => 15,  60 => 12,  58 => 11,  55 => 8,  53 => 7,  50 => 4,  48 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig' %}

{% if maxPoints is not defined %}
    {% set maxPoints = 5 %}
{% endif %}

{% if filterRatingActiveLabelStart is not defined %}
    {% set filterRatingActiveLabelStart = 'listing.filterRatingActiveLabelStart'|trans|sw_sanitize %}
{% endif %}

{% if filterRatingActiveLabelEndSingular is not defined %}
    {% set filterRatingActiveLabelEndSingular = 'listing.filterRatingActiveLabelEndSingular'|trans|sw_sanitize %}
{% endif %}

{% if filterRatingActiveLabelEnd is not defined %}
    {% set filterRatingActiveLabelEnd = 'listing.filterRatingActiveLabelEnd'|trans|sw_sanitize %}
{% endif %}

{% if listItemSelector is not defined %}
    {% set listItemSelector = '.filter-rating-select-list-item' %}
{% endif %}

{% if checkboxSelector is not defined %}
    {% set checkboxSelector = '.filter-rating-select-radio' %}
{% endif %}

{% if dataPluginSelectorOptions is not defined %}
    {% set dataPluginSelectorOptions = {
        name: name,
        maxPoints: maxPoints,
        listItemSelector: listItemSelector,
        checkboxSelector: checkboxSelector,
        snippets: {
            filterRatingActiveLabelStart: filterRatingActiveLabelStart,
            filterRatingActiveLabelEndSingular: filterRatingActiveLabelEndSingular,
            filterRatingActiveLabelEnd: filterRatingActiveLabelEnd,
            disabledFilterText: 'listing.disabledFilterTooltip'|trans|sw_sanitize
        }
    } %}
{% endif %}

{% block component_filter_multi_select_list %}
    <ul class=\"filter-multi-select-list\">
        {% for point in maxPoints-1..1 %}
            <li class=\"filter-rating-select-list-item\">
                {% sw_include '@Storefront/storefront/component/listing/filter/filter-rating-select-item.html.twig' with {
                    points: point,
                    maxPoints: maxPoints
                } %}
            </li>
        {% endfor %}
    </ul>
{% endblock %}
", "@Storefront/storefront/component/listing/filter/filter-rating-select.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-rating-select.html.twig");
    }
}
