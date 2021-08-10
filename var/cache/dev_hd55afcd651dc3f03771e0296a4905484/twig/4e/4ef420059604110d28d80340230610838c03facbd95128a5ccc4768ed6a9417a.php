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

/* @Storefront/storefront/layout/breadcrumb.html.twig */
class __TwigTemplate_30f6902573be250a09e44f4d40efb734c8599b3e68e363b4344e0b30c929e032 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_breadcrumb_inner' => [$this, 'block_layout_breadcrumb_inner'],
            'layout_breadcrumb_list' => [$this, 'block_layout_breadcrumb_list'],
            'layout_breadcrumb_list_item' => [$this, 'block_layout_breadcrumb_list_item'],
            'layout_breadcrumb_placeholder' => [$this, 'block_layout_breadcrumb_placeholder'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/breadcrumb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/breadcrumb.html.twig"));

        // line 1
        $this->displayBlock('layout_breadcrumb_inner', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layout_breadcrumb_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_inner"));

        // line 2
        echo "    ";
        if (($context["category"] ?? null)) {
            // line 3
            echo "        ";
            $context["breadcrumbCategories"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->getFullBreadcrumb($context, ($context["category"] ?? null), twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "context", [], "any", false, false, false, 3));
            // line 4
            echo "        ";
            $context["categoryId"] = twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 4);
            // line 5
            echo "
        ";
            // line 7
            echo "        ";
            $context["breadcrumb"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->buildSeoBreadcrumb($context, ($context["category"] ?? null));
            // line 8
            echo "        ";
            // line 9
            echo "        ";
            $context["breadcrumbKeys"] = twig_get_array_keys_filter(($context["breadcrumb"] ?? null));
            // line 10
            echo "        ";
            // line 11
            echo "        ";
            $context["breadcrumbTypes"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->buildCategoryTypes(($context["breadcrumbCategories"] ?? null));
            // line 12
            echo "
        <nav aria-label=\"breadcrumb\">
            ";
            // line 14
            $this->displayBlock('layout_breadcrumb_list', $context, $blocks);
            // line 55
            echo "        </nav>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_layout_breadcrumb_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list"));

        // line 15
        echo "                <ol class=\"breadcrumb\"
                    itemscope
                    itemtype=\"https://schema.org/BreadcrumbList\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbCategories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumbCategory"]) {
            // line 19
            echo "                        ";
            $context["key"] = twig_get_attribute($this->env, $this->source, $context["breadcrumbCategory"], "id", [], "any", false, false, false, 19);
            // line 20
            echo "                        ";
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["breadcrumbCategory"], "translated", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20);
            // line 21
            echo "
                        ";
            // line 22
            $this->displayBlock('layout_breadcrumb_list_item', $context, $blocks);
            // line 44
            echo "
                        ";
            // line 45
            $this->displayBlock('layout_breadcrumb_placeholder', $context, $blocks);
            // line 52
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumbCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </ol>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_layout_breadcrumb_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list_item"));

        // line 23
        echo "                            <li class=\"breadcrumb-item\"
                                ";
        // line 24
        if ((($context["key"] ?? null) === ($context["categoryId"] ?? null))) {
            echo "aria-current=\"page\"";
        }
        // line 25
        echo "                                itemprop=\"itemListElement\"
                                itemscope
                                itemtype=\"https://schema.org/ListItem\">
                                ";
        // line 28
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["breadcrumbCategory"] ?? null), "type", [], "any", false, false, false, 28), "folder"))) {
            // line 29
            echo "                                    <div>";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</div>
                                ";
        } else {
            // line 31
            echo "                                    <a href=\"";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["breadcrumbCategory"] ?? null));
            echo "\"
                                       class=\"breadcrumb-link ";
            // line 32
            if ((($context["key"] ?? null) === ($context["categoryId"] ?? null))) {
                echo " is-active";
            }
            echo "\"
                                       title=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
                                       ";
            // line 34
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["breadcrumbCategory"] ?? null))) {
                echo "target=\"_blank\"";
            }
            // line 35
            echo "                                       itemprop=\"item\">
                                        <link itemprop=\"url\"
                                              href=\"";
            // line 37
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["breadcrumbCategory"] ?? null));
            echo "\"/>
                                        <span class=\"breadcrumb-title\" itemprop=\"name\">";
            // line 38
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                                    </a>
                                    <meta itemprop=\"position\" content=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["breadcrumbCategory"] ?? null), "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\"/>
                                ";
        }
        // line 42
        echo "                            </li>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_layout_breadcrumb_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_placeholder"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_placeholder"));

        // line 46
        echo "                            ";
        if ((0 !== twig_compare(($context["key"] ?? null), twig_last($this->env, ($context["breadcrumbKeys"] ?? null))))) {
            // line 47
            echo "                                <div class=\"breadcrumb-placeholder\">
                                    ";
            // line 48
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/breadcrumb.html.twig", 48);
            })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-right"]));
            // line 49
            echo "                                </div>
                            ";
        }
        // line 51
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/breadcrumb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  288 => 51,  284 => 49,  276 => 48,  273 => 47,  270 => 46,  260 => 45,  249 => 42,  244 => 40,  239 => 38,  235 => 37,  231 => 35,  227 => 34,  223 => 33,  217 => 32,  212 => 31,  206 => 29,  204 => 28,  199 => 25,  195 => 24,  192 => 23,  182 => 22,  171 => 53,  157 => 52,  155 => 45,  152 => 44,  150 => 22,  147 => 21,  144 => 20,  141 => 19,  124 => 18,  119 => 15,  109 => 14,  97 => 55,  95 => 14,  91 => 12,  88 => 11,  86 => 10,  83 => 9,  81 => 8,  78 => 7,  75 => 5,  72 => 4,  69 => 3,  66 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_breadcrumb_inner %}
    {% if category %}
        {% set breadcrumbCategories = sw_breadcrumb_full(category, context.context) %}
        {% set categoryId = category.id %}

        {# @deprecated tag:v6.5.0 - Use \"sw_breadcrumb_full\" directly. #}
        {% set breadcrumb = sw_breadcrumb(category) %}
        {# @deprecated tag:v6.5.0 - Use \"sw_breadcrumb_full\" directly. #}
        {% set breadcrumbKeys = breadcrumb|keys %}
        {# @deprecated tag:v6.5.0 - Use \"sw_breadcrumb_full\" directly. #}
        {% set breadcrumbTypes = sw_breadcrumb_build_types(breadcrumbCategories) %}

        <nav aria-label=\"breadcrumb\">
            {% block layout_breadcrumb_list %}
                <ol class=\"breadcrumb\"
                    itemscope
                    itemtype=\"https://schema.org/BreadcrumbList\">
                    {% for breadcrumbCategory in breadcrumbCategories %}
                        {% set key = breadcrumbCategory.id %}
                        {% set name = breadcrumbCategory.translated.name %}

                        {% block layout_breadcrumb_list_item %}
                            <li class=\"breadcrumb-item\"
                                {% if key is same as(categoryId) %}aria-current=\"page\"{% endif %}
                                itemprop=\"itemListElement\"
                                itemscope
                                itemtype=\"https://schema.org/ListItem\">
                                {% if breadcrumbCategory.type == 'folder' %}
                                    <div>{{ name }}</div>
                                {% else %}
                                    <a href=\"{{ category_url(breadcrumbCategory) }}\"
                                       class=\"breadcrumb-link {% if key is same as(categoryId) %} is-active{% endif %}\"
                                       title=\"{{ name }}\"
                                       {% if category_linknewtab(breadcrumbCategory) %}target=\"_blank\"{% endif %}
                                       itemprop=\"item\">
                                        <link itemprop=\"url\"
                                              href=\"{{ category_url(breadcrumbCategory) }}\"/>
                                        <span class=\"breadcrumb-title\" itemprop=\"name\">{{ name }}</span>
                                    </a>
                                    <meta itemprop=\"position\" content=\"{{ breadcrumbCategory.id }}\"/>
                                {% endif %}
                            </li>
                        {% endblock %}

                        {% block layout_breadcrumb_placeholder %}
                            {% if key != breadcrumbKeys|last %}
                                <div class=\"breadcrumb-placeholder\">
                                    {% sw_icon 'arrow-medium-right' style { 'size': 'fluid', 'pack': 'solid'} %}
                                </div>
                            {% endif %}
                        {% endblock %}
                    {% endfor %}
                </ol>
            {% endblock %}
        </nav>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/layout/breadcrumb.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/layout/breadcrumb.html.twig");
    }
}
