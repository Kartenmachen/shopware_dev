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

/* @Storefront/storefront/layout/navigation/offcanvas/categories.html.twig */
class __TwigTemplate_cd3cb912eb4c95858feb6db6bcfc85f0b3ee51d99dfef830b891023827be8732 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_categories' => [$this, 'block_layout_navigation_offcanvas_navigation_categories'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig"));

        // line 2
        $context["activeId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "active", [], "any", false, false, false, 2), "id", [], "any", false, false, false, 2);
        // line 3
        $context["isRoot"] = (0 === twig_compare(($context["activeId"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 3), "navigationCategoryId", [], "any", false, false, false, 3)));
        // line 4
        $context["children"] = twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "children", [0 => ($context["activeId"] ?? null)], "method", false, false, false, 4);
        // line 5
        $context["active"] = twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "active", [], "any", false, false, false, 5);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layout_navigation_offcanvas_navigation_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories"));

        // line 8
        echo "    <div class=\"navigation-offcanvas-container js-navigation-offcanvas\">
        <div class=\"navigation-offcanvas-overlay-content js-navigation-offcanvas-overlay-content\">
            ";
        // line 10
        if ( !($context["isRoot"] ?? null)) {
            // line 11
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/show-all-link.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 11)->display($context);
            // line 12
            echo "
                ";
            // line 13
            $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/active-item-link.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 13)->display(twig_array_merge($context, ["item" => ($context["active"] ?? null)]));
            // line 14
            echo "
                ";
            // line 15
            $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 15)->display(twig_array_merge($context, ["item" => ($context["active"] ?? null)]));
            // line 16
            echo "            ";
        } else {
            // line 17
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/general-headline.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 17)->display($context);
            // line 18
            echo "            ";
        }
        // line 19
        echo "
            <ul class=\"list-unstyled navigation-offcanvas-list\">
                ";
        // line 21
        if (( !($context["isRoot"] ?? null) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, false, 21), "active", [], "any", false, false, false, 21), "type", [], "any", false, false, false, 21), "folder")))) {
            // line 22
            echo "                    ";
            $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 22)->display(twig_array_merge($context, ["item" => ($context["active"] ?? null)]));
            // line 23
            echo "                ";
        }
        // line 24
        echo "
                ";
        // line 26
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["children"] ?? null), "tree", [], "any", false, false, false, 26));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "                    ";
            $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 27)->display(twig_array_merge($context, ["item" => $context["item"], "activeId" => ($context["activeId"] ?? null)]));
            // line 28
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </ul>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 29,  138 => 28,  135 => 27,  117 => 26,  114 => 24,  111 => 23,  108 => 22,  106 => 21,  102 => 19,  99 => 18,  96 => 17,  93 => 16,  91 => 15,  88 => 14,  86 => 13,  83 => 12,  80 => 11,  78 => 10,  74 => 8,  55 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var navigation \\Shopware\\Core\\Content\\Category\\Tree\\Tree #}
{% set activeId = navigation.active.id %}
{% set isRoot = activeId == context.salesChannel.navigationCategoryId %}
{% set children = navigation.children(activeId) %}
{% set active = navigation.active %}

{% block layout_navigation_offcanvas_navigation_categories %}
    <div class=\"navigation-offcanvas-container js-navigation-offcanvas\">
        <div class=\"navigation-offcanvas-overlay-content js-navigation-offcanvas-overlay-content\">
            {% if not isRoot %}
                {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/show-all-link.html.twig' %}

                {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/active-item-link.html.twig' with { item: active } %}

                {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig' with { item: active } %}
            {% else %}
                {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/general-headline.html.twig' %}
            {% endif %}

            <ul class=\"list-unstyled navigation-offcanvas-list\">
                {% if not isRoot and page.navigation.active.type != \"folder\" %}
                    {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig' with { item: active } %}
                {% endif %}

                {# @var item \\Shopware\\Core\\Content\\Category\\Tree\\TreeItem #}
                {% for item in children.tree %}
                    {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig' with { item: item, activeId: activeId } %}
                {% endfor %}
            </ul>
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/categories.html.twig");
    }
}
