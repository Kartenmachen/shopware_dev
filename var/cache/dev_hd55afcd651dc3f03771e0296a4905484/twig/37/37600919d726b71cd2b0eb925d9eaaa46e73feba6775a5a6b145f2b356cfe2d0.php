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

/* @Storefront/storefront/component/product/listing.html.twig */
class __TwigTemplate_b7826601db9b8f81b673b18c7baddb651b3bf448eba6a66fa021635cb3b328dc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_listing' => [$this, 'block_product_listing'],
            'element_product_listing_wrapper_content' => [$this, 'block_element_product_listing_wrapper_content'],
            'element_product_listing_pagination_nav_actions' => [$this, 'block_element_product_listing_pagination_nav_actions'],
            'element_product_listing_pagination_nav_top' => [$this, 'block_element_product_listing_pagination_nav_top'],
            'element_product_listing_sorting' => [$this, 'block_element_product_listing_sorting'],
            'element_product_listing_row' => [$this, 'block_element_product_listing_row'],
            'element_product_listing_col' => [$this, 'block_element_product_listing_col'],
            'element_product_listing_box' => [$this, 'block_element_product_listing_box'],
            'element_product_listing_col_empty' => [$this, 'block_element_product_listing_col_empty'],
            'element_product_listing_col_empty_alert' => [$this, 'block_element_product_listing_col_empty_alert'],
            'element_product_listing_pagination_nav_bottom' => [$this, 'block_element_product_listing_pagination_nav_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/listing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/listing.html.twig"));

        // line 1
        $context["currentPage"] = twig_round(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 1), "offset", [], "any", false, false, false, 1) + 1) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 1), "limit", [], "any", false, false, false, 1)), 0, "ceil");
        // line 2
        $context["paginationConfig"] = json_encode(["page" => ($context["currentPage"] ?? null)]);
        // line 3
        echo "
";
        // line 4
        if ( !array_key_exists("disableEmptyFilter", $context)) {
            // line 5
            echo "    ";
            $context["disableEmptyFilter"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.listing.disableEmptyFilterOptions");
        }
        // line 7
        echo "
";
        // line 8
        $context["listingPagination"] = ["sidebar" =>         // line 9
($context["sidebar"] ?? null), "params" =>         // line 10
($context["params"] ?? null), "dataUrl" =>         // line 11
($context["dataUrl"] ?? null), "filterUrl" =>         // line 12
($context["filterUrl"] ?? null), "disableEmptyFilter" =>         // line 13
($context["disableEmptyFilter"] ?? null), "snippets" => ["resetAllButtonText" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterPanelResetAll"))]];
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('product_listing', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_product_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_listing"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_listing"));

        // line 20
        echo "    <div class=\"cms-element-product-listing-wrapper\"
         data-listing-pagination=\"true\"
         data-listing-pagination-options='";
        // line 22
        echo twig_escape_filter($this->env, ($context["paginationConfig"] ?? null), "html", null, true);
        echo "'
         data-listing=\"true\"
         data-listing-options='";
        // line 24
        echo twig_escape_filter($this->env, json_encode(($context["listingPagination"] ?? null)), "html", null, true);
        echo "'>

        ";
        // line 26
        $this->displayBlock('element_product_listing_wrapper_content', $context, $blocks);
        // line 92
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_element_product_listing_wrapper_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_wrapper_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_wrapper_content"));

        // line 27
        echo "            <div class=\"cms-element-product-listing\">
                ";
        // line 28
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 28), 0))) {
            // line 29
            echo "                    ";
            $this->displayBlock('element_product_listing_pagination_nav_actions', $context, $blocks);
            // line 50
            echo "                ";
        }
        // line 51
        echo "
                ";
        // line 52
        $this->displayBlock('element_product_listing_row', $context, $blocks);
        // line 81
        echo "
                ";
        // line 82
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 82), twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "limit", [], "any", false, false, false, 82)))) {
            // line 83
            echo "                    ";
            $this->displayBlock('element_product_listing_pagination_nav_bottom', $context, $blocks);
            // line 89
            echo "                ";
        }
        // line 90
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_element_product_listing_pagination_nav_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_pagination_nav_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_pagination_nav_actions"));

        // line 30
        echo "                        <div class=\"cms-element-product-listing-actions row justify-content-between\">
                            <div class=\"col-md-auto\">
                                ";
        // line 32
        $this->displayBlock('element_product_listing_pagination_nav_top', $context, $blocks);
        // line 38
        echo "                            </div>

                            <div class=\"col-md-auto\">
                                ";
        // line 41
        $this->displayBlock('element_product_listing_sorting', $context, $blocks);
        // line 47
        echo "                            </div>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_element_product_listing_pagination_nav_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_pagination_nav_top"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_pagination_nav_top"));

        // line 33
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 33)->display(twig_array_merge($context, ["entities" =>         // line 34
($context["searchResult"] ?? null), "criteria" => twig_get_attribute($this->env, $this->source,         // line 35
($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 35)]));
        // line 37
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_element_product_listing_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_sorting"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_sorting"));

        // line 42
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/sorting.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 42)->display(twig_array_merge($context, ["current" => twig_get_attribute($this->env, $this->source,         // line 43
($context["searchResult"] ?? null), "sorting", [], "any", false, false, false, 43), "sortings" => twig_get_attribute($this->env, $this->source,         // line 44
($context["searchResult"] ?? null), "availableSortings", [], "any", false, false, false, 44)]));
        // line 46
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_element_product_listing_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_row"));

        // line 53
        echo "                    <div class=\"row cms-listing-row js-listing-wrapper\">
                        ";
        // line 54
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 54), 0))) {
            // line 55
            echo "                            ";
            $this->displayBlock('element_product_listing_col', $context, $blocks);
            // line 67
            echo "                        ";
        } else {
            // line 68
            echo "                            ";
            $this->displayBlock('element_product_listing_col_empty', $context, $blocks);
            // line 78
            echo "                        ";
        }
        // line 79
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_element_product_listing_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_col"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_col"));

        // line 56
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["searchResult"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 57
            echo "                                    <div class=\"cms-listing-col ";
            echo twig_escape_filter($this->env, ($context["listingColumns"] ?? null), "html", null, true);
            echo "\">
                                        ";
            // line 58
            $this->displayBlock('element_product_listing_box', $context, $blocks);
            // line 64
            echo "                                    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_element_product_listing_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_box"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_box"));

        // line 59
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/box.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 59)->display(twig_array_merge($context, ["layout" =>         // line 60
($context["boxLayout"] ?? null), "displayMode" =>         // line 61
($context["displayMode"] ?? null)]));
        // line 63
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_element_product_listing_col_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_col_empty"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_col_empty"));

        // line 69
        echo "                                <div class=\"cms-listing-col col-12\">
                                    ";
        // line 70
        $this->displayBlock('element_product_listing_col_empty_alert', $context, $blocks);
        // line 76
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_element_product_listing_col_empty_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_col_empty_alert"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_col_empty_alert"));

        // line 71
        echo "                                        ";
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 71)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.emptyResultMessage"))]));
        // line 75
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_element_product_listing_pagination_nav_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_pagination_nav_bottom"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_pagination_nav_bottom"));

        // line 84
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 84)->display(twig_array_merge($context, ["entities" =>         // line 85
($context["searchResult"] ?? null), "criteria" => twig_get_attribute($this->env, $this->source,         // line 86
($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 86)]));
        // line 88
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 88,  444 => 86,  443 => 85,  441 => 84,  431 => 83,  421 => 75,  418 => 71,  408 => 70,  397 => 76,  395 => 70,  392 => 69,  382 => 68,  372 => 63,  370 => 61,  369 => 60,  367 => 59,  357 => 58,  347 => 66,  332 => 64,  330 => 58,  325 => 57,  307 => 56,  297 => 55,  286 => 79,  283 => 78,  280 => 68,  277 => 67,  274 => 55,  272 => 54,  269 => 53,  259 => 52,  249 => 46,  247 => 44,  246 => 43,  244 => 42,  234 => 41,  224 => 37,  222 => 35,  221 => 34,  219 => 33,  209 => 32,  197 => 47,  195 => 41,  190 => 38,  188 => 32,  184 => 30,  174 => 29,  163 => 90,  160 => 89,  157 => 83,  155 => 82,  152 => 81,  150 => 52,  147 => 51,  144 => 50,  141 => 29,  139 => 28,  136 => 27,  126 => 26,  115 => 92,  113 => 26,  108 => 24,  103 => 22,  99 => 20,  80 => 19,  77 => 18,  75 => 13,  74 => 12,  73 => 11,  72 => 10,  71 => 9,  70 => 8,  67 => 7,  63 => 5,  61 => 4,  58 => 3,  56 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set currentPage = ((searchResult.criteria.offset + 1) / searchResult.criteria.limit )|round(0, 'ceil') %}
{% set paginationConfig = { page: currentPage }|json_encode %}

{% if disableEmptyFilter is not defined %}
    {% set disableEmptyFilter = config('core.listing.disableEmptyFilterOptions') %}
{% endif %}

{% set listingPagination = {
    sidebar: sidebar,
    params: params,
    dataUrl: dataUrl,
    filterUrl: filterUrl,
    disableEmptyFilter: disableEmptyFilter,
    snippets: {
        resetAllButtonText: 'listing.filterPanelResetAll'|trans|sw_sanitize
    }
} %}

{% block product_listing %}
    <div class=\"cms-element-product-listing-wrapper\"
         data-listing-pagination=\"true\"
         data-listing-pagination-options='{{ paginationConfig }}'
         data-listing=\"true\"
         data-listing-options='{{ listingPagination|json_encode }}'>

        {% block element_product_listing_wrapper_content %}
            <div class=\"cms-element-product-listing\">
                {% if searchResult.total > 0 %}
                    {% block element_product_listing_pagination_nav_actions %}
                        <div class=\"cms-element-product-listing-actions row justify-content-between\">
                            <div class=\"col-md-auto\">
                                {% block element_product_listing_pagination_nav_top %}
                                    {% sw_include '@Storefront/storefront/component/pagination.html.twig' with {
                                        entities: searchResult,
                                        criteria: searchResult.criteria
                                    } %}
                                {% endblock %}
                            </div>

                            <div class=\"col-md-auto\">
                                {% block element_product_listing_sorting %}
                                    {% sw_include '@Storefront/storefront/component/sorting.html.twig' with {
                                        current: searchResult.sorting,
                                        sortings: searchResult.availableSortings
                                    } %}
                                {% endblock %}
                            </div>
                        </div>
                    {% endblock %}
                {% endif %}

                {% block element_product_listing_row %}
                    <div class=\"row cms-listing-row js-listing-wrapper\">
                        {% if searchResult.total > 0 %}
                            {% block element_product_listing_col %}
                                {% for product in searchResult %}
                                    <div class=\"cms-listing-col {{ listingColumns }}\">
                                        {% block element_product_listing_box %}
                                            {% sw_include '@Storefront/storefront/component/product/card/box.html.twig' with {
                                                'layout': boxLayout,
                                                'displayMode': displayMode
                                            } %}
                                        {% endblock %}
                                    </div>
                                {% endfor %}
                            {% endblock %}
                        {% else %}
                            {% block element_product_listing_col_empty %}
                                <div class=\"cms-listing-col col-12\">
                                    {% block element_product_listing_col_empty_alert %}
                                        {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                                            type: 'info',
                                            content: 'listing.emptyResultMessage'|trans|sw_sanitize
                                        } %}
                                    {% endblock %}
                                </div>
                            {% endblock %}
                        {% endif %}
                    </div>
                {% endblock %}

                {% if searchResult.total > searchResult.limit %}
                    {% block element_product_listing_pagination_nav_bottom %}
                        {% sw_include '@Storefront/storefront/component/pagination.html.twig' with {
                            entities: searchResult,
                            criteria: searchResult.criteria
                        } %}
                    {% endblock %}
                {% endif %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/product/listing.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/product/listing.html.twig");
    }
}
