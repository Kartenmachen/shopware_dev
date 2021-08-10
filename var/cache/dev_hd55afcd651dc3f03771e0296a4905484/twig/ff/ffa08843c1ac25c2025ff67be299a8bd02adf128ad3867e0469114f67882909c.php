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

/* @Storefront/storefront/component/product/card/price-unit.html.twig */
class __TwigTemplate_e4d13bc5b009f16124755ca5078495cd592fc549c4ad118bb17b08b6c6a2c3b5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_price_info' => [$this, 'block_component_product_box_price_info'],
            'component_product_box_price_unit' => [$this, 'block_component_product_box_price_unit'],
            'component_product_box_price_purchase_unit' => [$this, 'block_component_product_box_price_purchase_unit'],
            'component_product_box_price_reference_unit' => [$this, 'block_component_product_box_price_reference_unit'],
            'component_product_box_price' => [$this, 'block_component_product_box_price'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/price-unit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/price-unit.html.twig"));

        // line 1
        $this->displayBlock('component_product_box_price_info', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_product_box_price_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_info"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_info"));

        // line 2
        echo "    ";
        $context["purchaseUnit"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "purchaseUnit", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["listingPrice"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedListingPrice", [], "any", false, false, false, 3);
        // line 4
        echo "    ";
        $context["fromPrice"] = twig_get_attribute($this->env, $this->source, ($context["listingPrice"] ?? null), "from", [], "any", false, false, false, 4);
        // line 5
        echo "
    ";
        // line 6
        $context["cheapest"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedCheapestPrice", [], "any", false, false, false, 6);
        // line 7
        echo "
    ";
        // line 8
        $context["real"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 8);
        // line 9
        echo "    ";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 9), "count", [], "any", false, false, false, 9), 0))) {
            // line 10
            echo "        ";
            $context["real"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 10), "last", [], "any", false, false, false, 10);
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        $context["referencePrice"] = twig_get_attribute($this->env, $this->source, ($context["real"] ?? null), "referencePrice", [], "any", false, false, false, 13);
        // line 14
        echo "
    ";
        // line 15
        $context["displayFrom"] = (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 15), "count", [], "any", false, false, false, 15), 1));
        // line 16
        echo "
    <div class=\"product-price-info\">
        ";
        // line 18
        $this->displayBlock('component_product_box_price_unit', $context, $blocks);
        // line 42
        echo "
        ";
        // line 43
        $this->displayBlock('component_product_box_price', $context, $blocks);
        // line 80
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_component_product_box_price_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_unit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_unit"));

        // line 19
        echo "            <p class=\"product-price-unit\">
                ";
        // line 21
        echo "                ";
        $this->displayBlock('component_product_box_price_purchase_unit', $context, $blocks);
        // line 31
        echo "
                ";
        // line 33
        echo "                ";
        $this->displayBlock('component_product_box_price_reference_unit', $context, $blocks);
        // line 40
        echo "            </p>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_component_product_box_price_purchase_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_purchase_unit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_purchase_unit"));

        // line 22
        echo "                    ";
        if ((($context["referencePrice"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 22))) {
            // line 23
            echo "                        <span class=\"product-unit-label\">
                            ";
            // line 24
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxUnitLabel"));
            echo "
                        </span>
                        <span class=\"price-unit-content\">
                            ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "purchaseUnit", [], "any", false, false, false, 27), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 27), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 30
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_component_product_box_price_reference_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_reference_unit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_reference_unit"));

        // line 34
        echo "                    ";
        if ( !(null === ($context["referencePrice"] ?? null))) {
            // line 35
            echo "                        <span class=\"price-unit-reference\">
                            (";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "price", [], "any", false, false, false, 36)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "referenceUnit", [], "any", false, false, false, 36), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 36), "html", null, true);
            echo ")
                        </span>
                    ";
        }
        // line 39
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_component_product_box_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price"));

        // line 44
        echo "            <div class=\"product-price-wrapper\">
                ";
        // line 45
        $context["price"] = ($context["real"] ?? null);
        // line 46
        echo "
                <div class=\"product-cheapest-price\">
                    ";
        // line 48
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["cheapest"] ?? null), "unitPrice", [], "any", false, false, false, 48), twig_get_attribute($this->env, $this->source, ($context["real"] ?? null), "unitPrice", [], "any", false, false, false, 48)))) {
            // line 49
            echo "                        <div>";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.cheapestPriceLabel"));
            echo "<span class=\"product-cheapest-price-price\"> ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["cheapest"] ?? null), "unitPrice", [], "any", false, false, false, 49)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "</span></div>
                    ";
        }
        // line 51
        echo "                </div>

                ";
        // line 53
        if (($context["displayFrom"] ?? null)) {
            // line 54
            echo "                    ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.listingTextFrom"));
            echo "
                ";
        }
        // line 56
        echo "
                ";
        // line 57
        $context["isListPrice"] = (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 57), "percentage", [], "any", false, false, false, 57), 0));
        // line 58
        echo "
                <span class=\"product-price";
        // line 59
        if ((($context["isListPrice"] ?? null) &&  !($context["displayFrom"] ?? null))) {
            echo " with-list-price";
        }
        echo "\">
                    ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 60)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "

                    ";
        // line 62
        if ((($context["isListPrice"] ?? null) &&  !($context["displayFrom"] ?? null))) {
            // line 63
            echo "                        ";
            $context["afterListPriceSnippetExists"] = (1 === twig_compare(twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")), 0));
            // line 64
            echo "                        ";
            $context["beforeListPriceSnippetExists"] = (1 === twig_compare(twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")), 0));
            // line 65
            echo "                        ";
            $context["hideStrikeTrough"] = (($context["beforeListPriceSnippetExists"] ?? null) || ($context["afterListPriceSnippetExists"] ?? null));
            // line 66
            echo "
                        <span class=\"list-price";
            // line 67
            if (($context["hideStrikeTrough"] ?? null)) {
                echo " list-price-no-line-through";
            }
            echo "\">
                            ";
            // line 68
            if (($context["beforeListPriceSnippetExists"] ?? null)) {
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize(twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")));
            }
            // line 69
            echo "
                            <span class=\"list-price-price\">";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 70), "price", [], "any", false, false, false, 70)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "</span>

                            ";
            // line 72
            if (($context["afterListPriceSnippetExists"] ?? null)) {
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize(twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")));
            }
            // line 73
            echo "
                            <span class=\"list-price-percentage\">";
            // line 74
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.listPricePercentage", ["%price%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 74), "percentage", [], "any", false, false, false, 74)]));
            echo "</span>
                        </span>
                    ";
        }
        // line 77
        echo "                </span>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/price-unit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  345 => 77,  339 => 74,  336 => 73,  332 => 72,  326 => 70,  323 => 69,  319 => 68,  313 => 67,  310 => 66,  307 => 65,  304 => 64,  301 => 63,  299 => 62,  293 => 60,  287 => 59,  284 => 58,  282 => 57,  279 => 56,  273 => 54,  271 => 53,  267 => 51,  258 => 49,  256 => 48,  252 => 46,  250 => 45,  247 => 44,  237 => 43,  227 => 39,  216 => 36,  213 => 35,  210 => 34,  200 => 33,  190 => 30,  182 => 27,  176 => 24,  173 => 23,  170 => 22,  160 => 21,  149 => 40,  146 => 33,  143 => 31,  140 => 21,  137 => 19,  127 => 18,  116 => 80,  114 => 43,  111 => 42,  109 => 18,  105 => 16,  103 => 15,  100 => 14,  98 => 13,  95 => 12,  92 => 11,  89 => 10,  86 => 9,  84 => 8,  81 => 7,  79 => 6,  76 => 5,  73 => 4,  70 => 3,  67 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_product_box_price_info %}
    {% set purchaseUnit = product.purchaseUnit %}
    {% set listingPrice = product.calculatedListingPrice %}
    {% set fromPrice = listingPrice.from %}

    {% set cheapest = product.calculatedCheapestPrice %}

    {% set real = product.calculatedPrice %}
    {% if product.calculatedPrices.count > 0 %}
        {% set real = product.calculatedPrices.last %}
    {% endif %}

    {% set referencePrice = real.referencePrice %}

    {% set displayFrom = product.calculatedPrices.count > 1 %}

    <div class=\"product-price-info\">
        {% block component_product_box_price_unit %}
            <p class=\"product-price-unit\">
                {# Price is based on the purchase unit #}
                {% block component_product_box_price_purchase_unit %}
                    {% if referencePrice and referencePrice.unitName %}
                        <span class=\"product-unit-label\">
                            {{ \"listing.boxUnitLabel\"|trans|sw_sanitize }}
                        </span>
                        <span class=\"price-unit-content\">
                            {{ referencePrice.purchaseUnit }} {{ referencePrice.unitName }}
                        </span>
                    {% endif %}
                {% endblock %}

                {# Item price is based on a reference unit #}
                {% block component_product_box_price_reference_unit %}
                    {% if referencePrice is not null %}
                        <span class=\"price-unit-reference\">
                            ({{ referencePrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} / {{ referencePrice.referenceUnit }} {{ referencePrice.unitName }})
                        </span>
                    {% endif %}
                {% endblock %}
            </p>
        {% endblock %}

        {% block component_product_box_price %}
            <div class=\"product-price-wrapper\">
                {% set price = real %}

                <div class=\"product-cheapest-price\">
                    {% if cheapest.unitPrice != real.unitPrice %}
                        <div>{{ \"listing.cheapestPriceLabel\"|trans|sw_sanitize }}<span class=\"product-cheapest-price-price\"> {{ cheapest.unitPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}</span></div>
                    {% endif %}
                </div>

                {% if displayFrom %}
                    {{ \"listing.listingTextFrom\"|trans|sw_sanitize }}
                {% endif %}

                {% set isListPrice = price.listPrice.percentage > 0 %}

                <span class=\"product-price{% if isListPrice and not displayFrom %} with-list-price{% endif %}\">
                    {{ price.unitPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}

                    {% if isListPrice and not displayFrom %}
                        {% set afterListPriceSnippetExists = \"listing.afterListPrice\"|trans|length > 0 %}
                        {% set beforeListPriceSnippetExists = \"listing.beforeListPrice\"|trans|length > 0 %}
                        {% set hideStrikeTrough = beforeListPriceSnippetExists or afterListPriceSnippetExists %}

                        <span class=\"list-price{% if hideStrikeTrough %} list-price-no-line-through{% endif %}\">
                            {% if beforeListPriceSnippetExists %}{{ \"listing.beforeListPrice\"|trans|trim|sw_sanitize }}{% endif %}

                            <span class=\"list-price-price\">{{ price.listPrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }}</span>

                            {% if afterListPriceSnippetExists %}{{ \"listing.afterListPrice\"|trans|trim|sw_sanitize }}{% endif %}

                            <span class=\"list-price-percentage\">{{ \"detail.listPricePercentage\"|trans({'%price%': price.listPrice.percentage })|sw_sanitize }}</span>
                        </span>
                    {% endif %}
                </span>
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/product/card/price-unit.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/product/card/price-unit.html.twig");
    }
}
