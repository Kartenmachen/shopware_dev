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

/* @Storefront/storefront/component/listing/filter/filter-range.html.twig */
class __TwigTemplate_27db6cbb085b1caf76de5ee2f53dce146ccf903a39a48ddd203cec0920a65412 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_range' => [$this, 'block_component_filter_range'],
            'component_filter_range_toggle' => [$this, 'block_component_filter_range_toggle'],
            'component_filter_range_display_name' => [$this, 'block_component_filter_range_display_name'],
            'component_filter_range_toggle_icon' => [$this, 'block_component_filter_range_toggle_icon'],
            'component_filter_range_dropdown' => [$this, 'block_component_filter_range_dropdown'],
            'component_filter_range_container' => [$this, 'block_component_filter_range_container'],
            'component_filter_range_min' => [$this, 'block_component_filter_range_min'],
            'component_filter_range_min_label' => [$this, 'block_component_filter_range_min_label'],
            'component_filter_range_min_input' => [$this, 'block_component_filter_range_min_input'],
            'component_filter_range_min_currency_symbol' => [$this, 'block_component_filter_range_min_currency_symbol'],
            'component_filter_range_divider' => [$this, 'block_component_filter_range_divider'],
            'component_filter_range_max' => [$this, 'block_component_filter_range_max'],
            'component_filter_range_max_label' => [$this, 'block_component_filter_range_max_label'],
            'component_filter_range_max_input' => [$this, 'block_component_filter_range_max_input'],
            'component_filter_range_max_currency_symbol' => [$this, 'block_component_filter_range_max_currency_symbol'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-range.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-range.html.twig"));

        // line 1
        $context["filterItemId"] = ((("filter-" . ($context["name"] ?? null)) . "-") . twig_random($this->env));
        // line 2
        echo "
";
        // line 3
        if ( !array_key_exists("currencySymbol", $context)) {
            // line 4
            echo "    ";
            $context["currencySymbol"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 4), "activeCurrency", [], "any", false, false, false, 4), "symbol", [], "any", false, false, false, 4);
        }
        // line 6
        echo "
";
        // line 7
        if ( !array_key_exists("filterRangeActiveMinLabel", $context)) {
            // line 8
            echo "    ";
            $context["filterRangeActiveMinLabel"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeActiveMinLabel"));
        }
        // line 10
        echo "
";
        // line 11
        if ( !array_key_exists("filterRangeActiveMaxLabel", $context)) {
            // line 12
            echo "    ";
            $context["filterRangeActiveMaxLabel"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeActiveMaxLabel"));
        }
        // line 14
        echo "
";
        // line 15
        if ( !array_key_exists("filterRangeErrorMessage", $context)) {
            // line 16
            echo "    ";
            $context["filterRangeErrorMessage"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeErrorMessage"));
        }
        // line 18
        echo "
";
        // line 19
        $context["filterRangeOptions"] = ["name" =>         // line 20
($context["name"] ?? null), "minKey" =>         // line 21
($context["minKey"] ?? null), "maxKey" =>         // line 22
($context["maxKey"] ?? null), "currencySymbol" =>         // line 23
($context["currencySymbol"] ?? null), "snippets" => ["filterRangeActiveMinLabel" =>         // line 25
($context["filterRangeActiveMinLabel"] ?? null), "filterRangeActiveMaxLabel" =>         // line 26
($context["filterRangeActiveMaxLabel"] ?? null), "filterRangeErrorMessage" =>         // line 27
($context["filterRangeErrorMessage"] ?? null)]];
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('component_filter_range', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_filter_range($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range"));

        // line 32
        echo "    <div class=\"filter-range filter-panel-item";
        if ( !($context["sidebar"] ?? null)) {
            echo " dropdown";
        }
        echo "\"
         data-filter-range=\"true\"
         data-filter-range-options='";
        // line 34
        echo twig_escape_filter($this->env, json_encode(($context["filterRangeOptions"] ?? null)), "html", null, true);
        echo "'>

        ";
        // line 36
        $this->displayBlock('component_filter_range_toggle', $context, $blocks);
        // line 58
        echo "
        ";
        // line 59
        $this->displayBlock('component_filter_range_dropdown', $context, $blocks);
        // line 121
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_component_filter_range_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_toggle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_toggle"));

        // line 37
        echo "            <button class=\"filter-panel-item-toggle btn";
        if (($context["sidebar"] ?? null)) {
            echo " btn-block";
        }
        echo "\"
                    aria-expanded=\"false\"
                    ";
        // line 39
        if (($context["sidebar"] ?? null)) {
            // line 40
            echo "                    data-toggle=\"collapse\"
                    data-target=\"#";
            // line 41
            echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
            echo "\"
                    ";
        } else {
            // line 43
            echo "                    data-toggle=\"dropdown\"
                    data-boundary=\"viewport\"
                    data-offset=\"0,8\"
                    aria-haspopup=\"true\"
                    ";
        }
        // line 47
        echo ">

                ";
        // line 49
        $this->displayBlock('component_filter_range_display_name', $context, $blocks);
        // line 52
        echo "
                ";
        // line 53
        $this->displayBlock('component_filter_range_toggle_icon', $context, $blocks);
        // line 56
        echo "            </button>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_component_filter_range_display_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_display_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_display_name"));

        // line 50
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_component_filter_range_toggle_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_toggle_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_toggle_icon"));

        // line 54
        echo "                    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-range.html.twig", 54);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "class" => "filter-panel-item-toggle", "name" => "arrow-medium-down"]));
        // line 55
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_component_filter_range_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_dropdown"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_dropdown"));

        // line 60
        echo "            <div class=\"filter-range-dropdown filter-panel-item-dropdown";
        if (($context["sidebar"] ?? null)) {
            echo " collapse";
        } else {
            echo " dropdown-menu";
        }
        echo "\"
                 id=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
        echo "\">

                ";
        // line 63
        $this->displayBlock('component_filter_range_container', $context, $blocks);
        // line 119
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_component_filter_range_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_container"));

        // line 64
        echo "                    <div class=\"filter-range-container\">

                        ";
        // line 66
        $this->displayBlock('component_filter_range_min', $context, $blocks);
        // line 88
        echo "
                        ";
        // line 89
        $this->displayBlock('component_filter_range_divider', $context, $blocks);
        // line 94
        echo "
                        ";
        // line 95
        $this->displayBlock('component_filter_range_max', $context, $blocks);
        // line 117
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_component_filter_range_min($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_min"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_min"));

        // line 67
        echo "                            <label class=\"filter-range-min\">

                                ";
        // line 69
        $this->displayBlock('component_filter_range_min_label', $context, $blocks);
        // line 72
        echo "
                                ";
        // line 73
        $this->displayBlock('component_filter_range_min_input', $context, $blocks);
        // line 80
        echo "
                                ";
        // line 81
        $this->displayBlock('component_filter_range_min_currency_symbol', $context, $blocks);
        // line 86
        echo "                            </label>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_component_filter_range_min_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_min_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_min_label"));

        // line 70
        echo "                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeMinLabel"));
        echo "
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_component_filter_range_min_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_min_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_min_input"));

        // line 74
        echo "                                    <input class=\"form-control min-input\"
                                           type=\"number\"
                                           name=\"min-price\"
                                           min=\"0\"
                                           max=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "max", [], "any", false, false, false, 78), "html", null, true);
        echo "\">
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_component_filter_range_min_currency_symbol($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_min_currency_symbol"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_min_currency_symbol"));

        // line 82
        echo "                                    <span class=\"filter-range-currency-symbol\">
                                        ";
        // line 83
        echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
        echo "
                                    </span>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_component_filter_range_divider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_divider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_divider"));

        // line 90
        echo "                            <div class=\"filter-range-divider\">
                                &ndash;
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_component_filter_range_max($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_max"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_max"));

        // line 96
        echo "                            <label class=\"filter-range-max\">

                                ";
        // line 98
        $this->displayBlock('component_filter_range_max_label', $context, $blocks);
        // line 101
        echo "
                                ";
        // line 102
        $this->displayBlock('component_filter_range_max_input', $context, $blocks);
        // line 109
        echo "
                                ";
        // line 110
        $this->displayBlock('component_filter_range_max_currency_symbol', $context, $blocks);
        // line 115
        echo "                            </label>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_component_filter_range_max_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_max_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_max_label"));

        // line 99
        echo "                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeMaxLabel"));
        echo "
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_component_filter_range_max_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_max_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_max_input"));

        // line 103
        echo "                                    <input class=\"form-control max-input\"
                                           type=\"number\"
                                           name=\"max-price\"
                                           min=\"0\"
                                           max=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "max", [], "any", false, false, false, 107), "html", null, true);
        echo "\">
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_component_filter_range_max_currency_symbol($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_max_currency_symbol"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_max_currency_symbol"));

        // line 111
        echo "                                    <span class=\"filter-range-currency-symbol\">
                                        ";
        // line 112
        echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
        echo "
                                    </span>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-range.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  582 => 112,  579 => 111,  569 => 110,  557 => 107,  551 => 103,  541 => 102,  528 => 99,  518 => 98,  507 => 115,  505 => 110,  502 => 109,  500 => 102,  497 => 101,  495 => 98,  491 => 96,  481 => 95,  468 => 90,  458 => 89,  445 => 83,  442 => 82,  432 => 81,  420 => 78,  414 => 74,  404 => 73,  391 => 70,  381 => 69,  370 => 86,  368 => 81,  365 => 80,  363 => 73,  360 => 72,  358 => 69,  354 => 67,  344 => 66,  333 => 117,  331 => 95,  328 => 94,  326 => 89,  323 => 88,  321 => 66,  317 => 64,  307 => 63,  296 => 119,  294 => 63,  289 => 61,  280 => 60,  270 => 59,  260 => 55,  251 => 54,  241 => 53,  228 => 50,  218 => 49,  207 => 56,  205 => 53,  202 => 52,  200 => 49,  196 => 47,  189 => 43,  184 => 41,  181 => 40,  179 => 39,  171 => 37,  161 => 36,  150 => 121,  148 => 59,  145 => 58,  143 => 36,  138 => 34,  130 => 32,  111 => 31,  108 => 30,  106 => 27,  105 => 26,  104 => 25,  103 => 23,  102 => 22,  101 => 21,  100 => 20,  99 => 19,  96 => 18,  92 => 16,  90 => 15,  87 => 14,  83 => 12,  81 => 11,  78 => 10,  74 => 8,  72 => 7,  69 => 6,  65 => 4,  63 => 3,  60 => 2,  58 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set filterItemId = 'filter-' ~ name ~ '-' ~ random() %}

{% if currencySymbol is not defined %}
    {% set currencySymbol = page.header.activeCurrency.symbol %}
{% endif %}

{% if filterRangeActiveMinLabel is not defined %}
    {% set filterRangeActiveMinLabel = 'listing.filterRangeActiveMinLabel'|trans|sw_sanitize %}
{% endif %}

{% if filterRangeActiveMaxLabel is not defined %}
    {% set filterRangeActiveMaxLabel = 'listing.filterRangeActiveMaxLabel'|trans|sw_sanitize %}
{% endif %}

{% if filterRangeErrorMessage is not defined %}
    {% set filterRangeErrorMessage = 'listing.filterRangeErrorMessage'|trans|sw_sanitize %}
{% endif %}

{% set filterRangeOptions = {
    name: name,
    minKey: minKey,
    maxKey: maxKey,
    currencySymbol: currencySymbol,
    snippets: {
        filterRangeActiveMinLabel: filterRangeActiveMinLabel,
        filterRangeActiveMaxLabel: filterRangeActiveMaxLabel,
        filterRangeErrorMessage: filterRangeErrorMessage
    }
} %}

{% block component_filter_range %}
    <div class=\"filter-range filter-panel-item{% if not sidebar %} dropdown{% endif %}\"
         data-filter-range=\"true\"
         data-filter-range-options='{{ filterRangeOptions|json_encode }}'>

        {% block component_filter_range_toggle %}
            <button class=\"filter-panel-item-toggle btn{% if sidebar %} btn-block{% endif %}\"
                    aria-expanded=\"false\"
                    {% if sidebar %}
                    data-toggle=\"collapse\"
                    data-target=\"#{{ filterItemId }}\"
                    {% else %}
                    data-toggle=\"dropdown\"
                    data-boundary=\"viewport\"
                    data-offset=\"0,8\"
                    aria-haspopup=\"true\"
                    {% endif %}>

                {% block component_filter_range_display_name %}
                    {{ displayName }}
                {% endblock %}

                {% block component_filter_range_toggle_icon %}
                    {% sw_icon 'arrow-medium-down' style {'pack': 'solid', 'size': 'xs', 'class': 'filter-panel-item-toggle'} %}
                {% endblock %}
            </button>
        {% endblock %}

        {% block component_filter_range_dropdown %}
            <div class=\"filter-range-dropdown filter-panel-item-dropdown{% if sidebar %} collapse{% else %} dropdown-menu{% endif %}\"
                 id=\"{{ filterItemId }}\">

                {% block component_filter_range_container %}
                    <div class=\"filter-range-container\">

                        {% block component_filter_range_min %}
                            <label class=\"filter-range-min\">

                                {% block component_filter_range_min_label %}
                                    {{ 'listing.filterRangeMinLabel'|trans|sw_sanitize }}
                                {% endblock %}

                                {% block component_filter_range_min_input %}
                                    <input class=\"form-control min-input\"
                                           type=\"number\"
                                           name=\"min-price\"
                                           min=\"0\"
                                           max=\"{{ price.max }}\">
                                {% endblock %}

                                {% block component_filter_range_min_currency_symbol %}
                                    <span class=\"filter-range-currency-symbol\">
                                        {{ currencySymbol }}
                                    </span>
                                {% endblock %}
                            </label>
                        {% endblock %}

                        {% block component_filter_range_divider %}
                            <div class=\"filter-range-divider\">
                                &ndash;
                            </div>
                        {% endblock %}

                        {% block component_filter_range_max %}
                            <label class=\"filter-range-max\">

                                {% block component_filter_range_max_label %}
                                    {{ 'listing.filterRangeMaxLabel'|trans|sw_sanitize }}
                                {% endblock %}

                                {% block component_filter_range_max_input %}
                                    <input class=\"form-control max-input\"
                                           type=\"number\"
                                           name=\"max-price\"
                                           min=\"0\"
                                           max=\"{{ price.max }}\">
                                {% endblock %}

                                {% block component_filter_range_max_currency_symbol %}
                                    <span class=\"filter-range-currency-symbol\">
                                        {{ currencySymbol }}
                                    </span>
                                {% endblock %}
                            </label>
                        {% endblock %}
                    </div>
                {% endblock %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/listing/filter/filter-range.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-range.html.twig");
    }
}
