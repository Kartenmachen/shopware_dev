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

/* @Storefront/storefront/component/listing/filter/filter-rating-select-item.html.twig */
class __TwigTemplate_a76690136a90c312a72b5da903614b1dcb1d57f905ab6f581d5df995e886c41b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_rating_select_list_item' => [$this, 'block_component_filter_rating_select_list_item'],
            'component_filter_rating_select_list_item_input' => [$this, 'block_component_filter_rating_select_list_item_input'],
            'component_filter_rating_select_list_item_label' => [$this, 'block_component_filter_rating_select_list_item_label'],
            'component_filter_rating_select_list_item_label_rating' => [$this, 'block_component_filter_rating_select_list_item_label_rating'],
            'component_filter_rating_select_list_item_label_text' => [$this, 'block_component_filter_rating_select_list_item_label_text'],
            'component_filter_rating_select_list_item_checkmark' => [$this, 'block_component_filter_rating_select_list_item_checkmark'],
            'component_filter_rating_select_list_item_checkmark_icon' => [$this, 'block_component_filter_rating_select_list_item_checkmark_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-rating-select-item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-rating-select-item.html.twig"));

        // line 1
        $this->displayBlock('component_filter_rating_select_list_item', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_filter_rating_select_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_select_list_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_select_list_item"));

        // line 2
        echo "    ";
        if ( !array_key_exists("maxPoints", $context)) {
            // line 3
            echo "        ";
            $context["maxPoints"] = 5;
            // line 4
            echo "    ";
        }
        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('component_filter_rating_select_list_item_input', $context, $blocks);
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('component_filter_rating_select_list_item_label', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('component_filter_rating_select_list_item_checkmark', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_component_filter_rating_select_list_item_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_select_list_item_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_select_list_item_input"));

        // line 7
        echo "        <input type=\"radio\"
               name=\"rating-radio\"
               class=\"filter-rating-select-radio\"
               value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["points"] ?? null), "html", null, true);
        echo "\"
               id=\"rating-";
        // line 11
        echo twig_escape_filter($this->env, ($context["points"] ?? null), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_component_filter_rating_select_list_item_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_select_list_item_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_select_list_item_label"));

        // line 15
        echo "        <label class=\"filter-rating-select-item-label\" for=\"rating-";
        echo twig_escape_filter($this->env, ($context["points"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 16
        $this->displayBlock('component_filter_rating_select_list_item_label_rating', $context, $blocks);
        // line 22
        echo "
            ";
        // line 23
        $this->displayBlock('component_filter_rating_select_list_item_label_text', $context, $blocks);
        // line 28
        echo "        </label>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_component_filter_rating_select_list_item_label_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_select_list_item_label_rating"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_select_list_item_label_rating"));

        // line 17
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/component/listing/filter/filter-rating-select-item.html.twig", 17)->display(twig_array_merge($context, ["points" =>         // line 18
($context["points"] ?? null), "style" => "text-primary"]));
        // line 21
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_component_filter_rating_select_list_item_label_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_select_list_item_label_text"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_select_list_item_label_text"));

        // line 24
        echo "                <span class=\"filter-rating-select-item-label-text\">
                    ";
        // line 25
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingAndMore", ["%points%" => ($context["points"] ?? null), "%maxPoints%" => ($context["maxPoints"] ?? null)]));
        echo "
                </span>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_component_filter_rating_select_list_item_checkmark($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_select_list_item_checkmark"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_select_list_item_checkmark"));

        // line 32
        echo "        <span class=\"filter-rating-select-item-checkmark\">
            ";
        // line 33
        $this->displayBlock('component_filter_rating_select_list_item_checkmark_icon', $context, $blocks);
        // line 36
        echo "        </span>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_component_filter_rating_select_list_item_checkmark_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_select_list_item_checkmark_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_select_list_item_checkmark_icon"));

        // line 34
        echo "                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-rating-select-item.html.twig", 34);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "name" => "checkmark"]));
        // line 35
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-rating-select-item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  260 => 35,  251 => 34,  241 => 33,  230 => 36,  228 => 33,  225 => 32,  215 => 31,  202 => 25,  199 => 24,  189 => 23,  179 => 21,  177 => 18,  175 => 17,  165 => 16,  154 => 28,  152 => 23,  149 => 22,  147 => 16,  142 => 15,  132 => 14,  120 => 11,  116 => 10,  111 => 7,  101 => 6,  91 => 31,  88 => 30,  86 => 14,  83 => 13,  81 => 6,  78 => 5,  75 => 4,  72 => 3,  69 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_filter_rating_select_list_item %}
    {% if maxPoints is not defined %}
        {% set maxPoints = 5 %}
    {% endif %}

    {% block component_filter_rating_select_list_item_input %}
        <input type=\"radio\"
               name=\"rating-radio\"
               class=\"filter-rating-select-radio\"
               value=\"{{ points }}\"
               id=\"rating-{{ points }}\">
    {% endblock %}

    {% block component_filter_rating_select_list_item_label %}
        <label class=\"filter-rating-select-item-label\" for=\"rating-{{ points }}\">
            {% block component_filter_rating_select_list_item_label_rating %}
                {% sw_include '@Storefront/storefront/component/review/rating.html.twig' with {
                    points: points,
                    style: 'text-primary'
                } %}
            {% endblock %}

            {% block component_filter_rating_select_list_item_label_text %}
                <span class=\"filter-rating-select-item-label-text\">
                    {{ 'listing.filterRatingAndMore'|trans({ '%points%': points, '%maxPoints%': maxPoints })|sw_sanitize }}
                </span>
            {% endblock %}
        </label>
    {% endblock %}

    {% block component_filter_rating_select_list_item_checkmark %}
        <span class=\"filter-rating-select-item-checkmark\">
            {% block component_filter_rating_select_list_item_checkmark_icon %}
                {% sw_icon 'checkmark' style {'pack': 'solid', 'size': 'xs'} %}
            {% endblock %}
        </span>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/listing/filter/filter-rating-select-item.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-rating-select-item.html.twig");
    }
}
