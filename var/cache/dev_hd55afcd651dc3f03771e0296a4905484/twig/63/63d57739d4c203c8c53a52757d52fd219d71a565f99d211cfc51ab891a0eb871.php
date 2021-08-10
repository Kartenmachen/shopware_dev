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

/* @Storefront/storefront/component/listing/filter/filter-property-select.html.twig */
class __TwigTemplate_773859ccb05eaafe3469c79b337036cabb4063a5827ae7b21fb7c38484c455eb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component_filter_multi_select_list_item' => [$this, 'block_component_filter_multi_select_list_item'],
            'component_filter_property_select_preview' => [$this, 'block_component_filter_property_select_preview'],
            'component_filter_property_select_checkox_input' => [$this, 'block_component_filter_property_select_checkox_input'],
            'component_filter_property_select_preview_checkmark' => [$this, 'block_component_filter_property_select_preview_checkmark'],
            'component_filter_property_select_preview_checkmark_icon' => [$this, 'block_component_filter_property_select_preview_checkmark_icon'],
            'component_filter_property_select_preview_list_item_label_element' => [$this, 'block_component_filter_property_select_preview_list_item_label_element'],
            'component_filter_property_select_preview_list_item_label' => [$this, 'block_component_filter_property_select_preview_list_item_label'],
            'component_filter_property_select_preview_list_item' => [$this, 'block_component_filter_property_select_preview_list_item'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig"));

        // line 3
        if ( !array_key_exists("dataPluginSelectorOptions", $context)) {
            // line 4
            $context["dataPluginSelectorOptions"] = ["name" =>             // line 5
($context["name"] ?? null), "propertyName" =>             // line 6
($context["propertyName"] ?? null), "snippets" => ["disabledFilterText" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.disabledFilterTooltip"))]];
        }
        // line 2
        $this->parent = $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_component_filter_multi_select_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_list_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_list_item"));

        // line 14
        echo "    <li class=\"filter-multi-select-list-item filter-property-select-list-item\">
        ";
        // line 15
        if (((0 === twig_compare(($context["displayType"] ?? null), "color")) || (0 === twig_compare(($context["displayType"] ?? null), "media")))) {
            // line 16
            echo "            ";
            $context["color"] = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "colorHexCode", [], "any", false, false, false, 16);
            // line 17
            echo "            ";
            $context["media"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "media", [], "any", false, false, false, 17), "url", [], "any", false, false, false, 17);
            // line 18
            echo "            ";
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18);
            // line 19
            echo "            ";
            $context["id"] = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 19);
            // line 20
            echo "
            ";
            // line 21
            $this->displayBlock('component_filter_property_select_preview', $context, $blocks);
            // line 53
            echo "
            ";
            // line 54
            if ( !($context["hideTitle"] ?? null)) {
                // line 55
                echo "                ";
                $this->displayBlock('component_filter_property_select_preview_list_item_label_element', $context, $blocks);
                // line 62
                echo "            ";
            }
            // line 63
            echo "        ";
        } else {
            // line 64
            echo "            ";
            $this->displayBlock('component_filter_property_select_preview_list_item', $context, $blocks);
            // line 67
            echo "        ";
        }
        // line 68
        echo "    </li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_component_filter_property_select_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview"));

        // line 22
        echo "                <span class=\"filter-property-select-preview\"
                      title=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                      ";
        // line 24
        if (((0 === twig_compare(($context["displayType"] ?? null), "color")) && ($context["color"] ?? null))) {
            // line 25
            echo "                      style=\"background: ";
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo "\"
                      ";
        }
        // line 27
        echo "                      ";
        if (((0 === twig_compare(($context["displayType"] ?? null), "media")) && ($context["media"] ?? null))) {
            // line 28
            echo "                      style=\"background-image: url('";
            echo twig_escape_filter($this->env, ($context["media"] ?? null), "html", null, true);
            echo "')\"
                      ";
        }
        // line 29
        echo ">

                    ";
        // line 31
        $this->displayBlock('component_filter_property_select_checkox_input', $context, $blocks);
        // line 43
        echo "
                    ";
        // line 44
        $this->displayBlock('component_filter_property_select_preview_checkmark', $context, $blocks);
        // line 51
        echo "                </span>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_component_filter_property_select_checkox_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_checkox_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_checkox_input"));

        // line 32
        echo "                        <input type=\"checkbox\"
                               class=\"filter-property-select-checkbox filter-multi-select-checkbox\"
                               id=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
                               data-label=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                               ";
        // line 36
        if (((0 === twig_compare(($context["displayType"] ?? null), "color")) && ($context["color"] ?? null))) {
            // line 37
            echo "                               data-preview-hex=\"";
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo "\"
                               ";
        }
        // line 39
        echo "                               ";
        if (((0 === twig_compare(($context["displayType"] ?? null), "media")) && ($context["media"] ?? null))) {
            // line 40
            echo "                               data-preview-image-url=\"";
            echo twig_escape_filter($this->env, ($context["media"] ?? null), "html", null, true);
            echo "\"
                               ";
        }
        // line 41
        echo ">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_component_filter_property_select_preview_checkmark($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_checkmark"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_checkmark"));

        // line 45
        echo "                        <span class=\"filter-property-select-preview-checkmark\">
                            ";
        // line 46
        $this->displayBlock('component_filter_property_select_preview_checkmark_icon', $context, $blocks);
        // line 49
        echo "                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_component_filter_property_select_preview_checkmark_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_checkmark_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_checkmark_icon"));

        // line 47
        echo "                                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", 47);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "name" => "checkmark"]));
        // line 48
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_component_filter_property_select_preview_list_item_label_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_list_item_label_element"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_list_item_label_element"));

        // line 56
        echo "                    <label class=\"filter-multi-select-item-label\" for=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
                        ";
        // line 57
        $this->displayBlock('component_filter_property_select_preview_list_item_label', $context, $blocks);
        // line 60
        echo "                    </label>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_component_filter_property_select_preview_list_item_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_list_item_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_list_item_label"));

        // line 58
        echo "                            ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_component_filter_property_select_preview_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_list_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_list_item"));

        // line 65
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", 65)->display($context);
        // line 66
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 66,  358 => 65,  348 => 64,  335 => 58,  325 => 57,  314 => 60,  312 => 57,  307 => 56,  297 => 55,  287 => 48,  278 => 47,  268 => 46,  257 => 49,  255 => 46,  252 => 45,  242 => 44,  231 => 41,  225 => 40,  222 => 39,  216 => 37,  214 => 36,  210 => 35,  206 => 34,  202 => 32,  192 => 31,  181 => 51,  179 => 44,  176 => 43,  174 => 31,  170 => 29,  164 => 28,  161 => 27,  155 => 25,  153 => 24,  149 => 23,  146 => 22,  136 => 21,  125 => 68,  122 => 67,  119 => 64,  116 => 63,  113 => 62,  110 => 55,  108 => 54,  105 => 53,  103 => 21,  100 => 20,  97 => 19,  94 => 18,  91 => 17,  88 => 16,  86 => 15,  83 => 14,  73 => 13,  62 => 2,  59 => 6,  58 => 5,  57 => 4,  55 => 3,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig' %}

{% if dataPluginSelectorOptions is not defined %}
    {% set dataPluginSelectorOptions = {
        name: name,
        propertyName: propertyName,
        snippets: {
            disabledFilterText: 'listing.disabledFilterTooltip'|trans|sw_sanitize
        }
    } %}
{% endif %}

{% block component_filter_multi_select_list_item %}
    <li class=\"filter-multi-select-list-item filter-property-select-list-item\">
        {% if displayType == 'color' or displayType == 'media' %}
            {% set color = element.colorHexCode %}
            {% set media = element.media.url %}
            {% set name = element.translated.name %}
            {% set id = element.id %}

            {% block component_filter_property_select_preview %}
                <span class=\"filter-property-select-preview\"
                      title=\"{{ name }}\"
                      {% if displayType == 'color' and color %}
                      style=\"background: {{ color }}\"
                      {% endif %}
                      {% if displayType == 'media' and media %}
                      style=\"background-image: url('{{ media }}')\"
                      {% endif %}>

                    {% block component_filter_property_select_checkox_input %}
                        <input type=\"checkbox\"
                               class=\"filter-property-select-checkbox filter-multi-select-checkbox\"
                               id=\"{{ id }}\"
                               data-label=\"{{ name }}\"
                               {% if displayType == 'color' and color %}
                               data-preview-hex=\"{{ color }}\"
                               {% endif %}
                               {% if displayType == 'media' and media %}
                               data-preview-image-url=\"{{ media }}\"
                               {% endif %}>
                    {% endblock %}

                    {% block component_filter_property_select_preview_checkmark %}
                        <span class=\"filter-property-select-preview-checkmark\">
                            {% block component_filter_property_select_preview_checkmark_icon %}
                                {% sw_icon 'checkmark' style {'pack': 'solid', 'size': 'xs'} %}
                            {% endblock %}
                        </span>
                    {% endblock %}
                </span>
            {% endblock %}

            {% if not hideTitle %}
                {% block component_filter_property_select_preview_list_item_label_element %}
                    <label class=\"filter-multi-select-item-label\" for=\"{{ id }}\">
                        {% block component_filter_property_select_preview_list_item_label %}
                            {{ name }}
                        {% endblock %}
                    </label>
                {% endblock %}
            {% endif %}
        {% else %}
            {% block component_filter_property_select_preview_list_item %}
                {% sw_include '@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig' %}
            {% endblock %}
        {% endif %}
    </li>
{% endblock %}
", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-property-select.html.twig");
    }
}
