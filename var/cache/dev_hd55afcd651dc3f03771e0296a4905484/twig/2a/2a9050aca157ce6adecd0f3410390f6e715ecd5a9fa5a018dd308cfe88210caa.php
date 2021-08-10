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

/* @Storefront/storefront/element/cms-element-product-listing.html.twig */
class __TwigTemplate_7e2d8b61b0f9f09ea69e3508e79f139baedbe43ce8c92dcb68831af8b5fba536 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_product_listing' => [$this, 'block_element_product_listing'],
            'element_product_listing_wrapper' => [$this, 'block_element_product_listing_wrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-product-listing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-product-listing.html.twig"));

        // line 1
        $this->displayBlock('element_product_listing', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_element_product_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        $context["searchResult"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 3), "listing", [], "any", false, false, false, 3);
        // line 4
        echo "    ";
        $context["listingColumns"] = "col-sm-6 col-lg-4 col-xl-3";
        // line 5
        echo "
    ";
        // line 6
        if ((($context["section"] ?? null) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "type", [], "any", false, false, false, 6), "sidebar")))) {
            // line 7
            echo "        ";
            $context["listingColumns"] = "col-sm-6 col-lg-6 col-xl-4";
            // line 8
            echo "    ";
        }
        // line 9
        echo "
    ";
        // line 10
        $context["slot"] = twig_get_attribute($this->env, $this->source, ($context["cmsPage"] ?? null), "firstElementOfType", [0 => "product-listing"], "method", false, false, false, 10);
        // line 11
        echo "
    ";
        // line 12
        $context["filterUrl"] = null;
        // line 13
        echo "    ";
        $context["dataUrl"] = null;
        // line 14
        echo "
    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "currentFilters", [], "any", false, false, false, 15), "navigationId", [], "any", false, false, false, 15)) {
            // line 16
            echo "        ";
            $context["filterUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("frontend.cms.navigation.filter", ["navigationId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "currentFilters", [], "any", false, false, false, 16), "navigationId", [], "any", false, false, false, 16)]);
            // line 17
            echo "        ";
            $context["dataUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("frontend.cms.navigation.page", ["navigationId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "currentFilters", [], "any", false, false, false, 17), "navigationId", [], "any", false, false, false, 17)]);
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        $context["sidebar"] = (0 === twig_compare(($context["sectionType"] ?? null), "sidebar"));
        // line 21
        echo "    ";
        $context["params"] = ["slots" => twig_get_attribute($this->env, $this->source, ($context["slot"] ?? null), "id", [], "any", false, false, false, 21), "no-aggregations" => 1];
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('element_product_listing_wrapper', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_element_product_listing_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_wrapper"));

        // line 24
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/component/product/listing.html.twig", "@Storefront/storefront/element/cms-element-product-listing.html.twig", 24)->display(twig_array_merge($context, ["searchResult" =>         // line 25
($context["searchResult"] ?? null), "dataUrl" =>         // line 26
($context["dataUrl"] ?? null), "filterUrl" =>         // line 27
($context["filterUrl"] ?? null), "params" =>         // line 28
($context["params"] ?? null), "sidebar" =>         // line 29
($context["sidebar"] ?? null), "boxLayout" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
($context["element"] ?? null), "translated", [], "any", false, false, false, 30), "config", [], "any", false, false, false, 30), "boxLayout", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "displayMode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["element"] ?? null), "translated", [], "any", false, false, false, 31), "config", [], "any", false, false, false, 31), "displayMode", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31), "listingColumns" =>         // line 32
($context["listingColumns"] ?? null)]));
        // line 34
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-product-listing.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  151 => 34,  149 => 32,  148 => 31,  147 => 30,  146 => 29,  145 => 28,  144 => 27,  143 => 26,  142 => 25,  140 => 24,  121 => 23,  118 => 22,  115 => 21,  113 => 20,  110 => 19,  107 => 18,  104 => 17,  101 => 16,  99 => 15,  96 => 14,  93 => 13,  91 => 12,  88 => 11,  86 => 10,  83 => 9,  80 => 8,  77 => 7,  75 => 6,  72 => 5,  69 => 4,  66 => 3,  64 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block element_product_listing %}
    {# @var result \\Shopware\\Core\\Framework\\DataAbstractionLayer\\Search\\EntitySearchResult #}
    {% set searchResult = element.data.listing %}
    {% set listingColumns = 'col-sm-6 col-lg-4 col-xl-3' %}

    {% if section and section.type == 'sidebar' %}
        {% set listingColumns = 'col-sm-6 col-lg-6 col-xl-4' %}
    {% endif %}

    {% set slot = cmsPage.firstElementOfType('product-listing') %}

    {% set filterUrl = null %}
    {% set dataUrl = null %}

    {% if searchResult.currentFilters.navigationId %}
        {% set filterUrl = url('frontend.cms.navigation.filter', { navigationId: searchResult.currentFilters.navigationId }) %}
        {% set dataUrl = url('frontend.cms.navigation.page', { navigationId: searchResult.currentFilters.navigationId }) %}
    {% endif %}

    {% set sidebar = sectionType == 'sidebar' %}
    {% set params = { slots: slot.id, 'no-aggregations': 1 } %}

    {% block element_product_listing_wrapper %}
        {% sw_include '@Storefront/storefront/component/product/listing.html.twig' with {
            searchResult: searchResult,
            dataUrl: dataUrl,
            filterUrl: filterUrl,
            params: params,
            sidebar: sidebar,
            boxLayout: element.translated.config.boxLayout.value,
            displayMode: element.translated.config.displayMode.value,
            listingColumns: listingColumns
        } %}
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/element/cms-element-product-listing.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-product-listing.html.twig");
    }
}
