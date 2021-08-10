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

/* @Storefront/storefront/layout/navigation/categories.html.twig */
class __TwigTemplate_1d7ac260fd0a2ee5a42eb7521f7113f401cc3f12693f7a9d4d0511c60cdf35c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_categories' => [$this, 'block_layout_navigation_categories'],
            'layout_navigation_categories_item' => [$this, 'block_layout_navigation_categories_item'],
            'layout_navigation_categories_item_link' => [$this, 'block_layout_navigation_categories_item_link'],
            'layout_navigation_categories_recoursion' => [$this, 'block_layout_navigation_categories_recoursion'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/categories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/categories.html.twig"));

        // line 1
        $this->displayBlock('layout_navigation_categories', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layout_navigation_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories"));

        // line 2
        echo "    ";
        $context["navigationMaxDepth"] = 3;
        // line 3
        echo "
    ";
        // line 4
        if ( !($context["level"] ?? null)) {
            // line 5
            echo "        ";
            $context["level"] = 0;
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        $context["activeId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 7), "navigation", [], "any", false, false, false, 7), "active", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7);
        // line 8
        echo "
    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", true, true, false, 9)) {
            // line 10
            echo "        ";
            $context["activePath"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 10), "categoryTree", [], "any", false, false, false, 10);
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "        ";
            $context["activePath"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 12), "navigation", [], "any", false, false, false, 12), "active", [], "any", false, false, false, 12), "path", [], "any", false, false, false, 12);
            // line 13
            echo "    ";
        }
        // line 14
        echo "
    <div class=\"";
        // line 15
        if ((0 === twig_compare(($context["level"] ?? null), 0))) {
            echo "row ";
        }
        echo "navigation-flyout-categories is-level-";
        echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigationTree"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 17
            echo "            ";
            $context["id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17);
            // line 18
            echo "            ";
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 18), "translated", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18);
            // line 19
            echo "            ";
            $context["link"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, twig_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 19));
            // line 20
            echo "
            ";
            // line 21
            $this->displayBlock('layout_navigation_categories_item', $context, $blocks);
            // line 51
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_layout_navigation_categories_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_item"));

        // line 22
        echo "                <div class=\"";
        if ((0 === twig_compare(($context["level"] ?? null), 0))) {
            if (($context["navigationMedia"] ?? null)) {
                echo "col-4 ";
            } else {
                echo "col-3 ";
            }
        }
        echo "navigation-flyout-col\">
                    ";
        // line 23
        $this->displayBlock('layout_navigation_categories_item_link', $context, $blocks);
        // line 39
        echo "
                    ";
        // line 40
        $this->displayBlock('layout_navigation_categories_recoursion', $context, $blocks);
        // line 49
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_layout_navigation_categories_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_item_link"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_item_link"));

        // line 24
        echo "                        ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 24), "type", [], "any", false, false, false, 24), "folder"))) {
            // line 25
            echo "                            <div class=\"nav-item nav-link navigation-flyout-link is-level-";
            echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            echo "\"
                                 title=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                <span itemprop=\"name\">";
            // line 27
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                            </div>
                        ";
        } else {
            // line 30
            echo "                            <a class=\"nav-item nav-link navigation-flyout-link is-level-";
            echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            if (((0 === twig_compare(($context["id"] ?? null), ($context["activeId"] ?? null))) || twig_in_filter(($context["id"] ?? null), ($context["activePath"] ?? null)))) {
                echo " active";
            }
            echo "\"
                               href=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\"
                               itemprop=\"url\"
                               ";
            // line 33
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(twig_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 33))) {
                echo "target=\"_blank\"";
            }
            // line 34
            echo "                               title=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                <span itemprop=\"name\">";
            // line 35
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                            </a>
                        ";
        }
        // line 38
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_layout_navigation_categories_recoursion($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_recoursion"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_recoursion"));

        // line 41
        echo "                        ";
        if ((-1 === twig_compare(($context["level"] ?? null), ($context["navigationMaxDepth"] ?? null)))) {
            // line 42
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/layout/navigation/categories.html.twig", "@Storefront/storefront/layout/navigation/categories.html.twig", 42)->display(twig_to_array(["navigationTree" => twig_get_attribute($this->env, $this->source,             // line 43
($context["treeItem"] ?? null), "children", [], "any", false, false, false, 43), "level" => (            // line 44
($context["level"] ?? null) + 1), "page" =>             // line 45
($context["page"] ?? null)]));
            // line 47
            echo "                        ";
        }
        // line 48
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/categories.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  294 => 48,  291 => 47,  289 => 45,  288 => 44,  287 => 43,  285 => 42,  282 => 41,  272 => 40,  262 => 38,  256 => 35,  251 => 34,  247 => 33,  242 => 31,  234 => 30,  228 => 27,  224 => 26,  219 => 25,  216 => 24,  206 => 23,  195 => 49,  193 => 40,  190 => 39,  188 => 23,  177 => 22,  167 => 21,  156 => 52,  142 => 51,  140 => 21,  137 => 20,  134 => 19,  131 => 18,  128 => 17,  111 => 16,  103 => 15,  100 => 14,  97 => 13,  94 => 12,  91 => 11,  88 => 10,  86 => 9,  83 => 8,  80 => 7,  77 => 6,  74 => 5,  72 => 4,  69 => 3,  66 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_navigation_categories %}
    {% set navigationMaxDepth = 3 %}

    {% if not level %}
        {% set level = 0 %}
    {% endif %}
    {% set activeId = page.header.navigation.active.id %}

    {% if page.product is defined %}
        {% set activePath = page.product.categoryTree %}
    {% else %}
        {% set activePath = page.header.navigation.active.path %}
    {% endif %}

    <div class=\"{% if level == 0 %}row {% endif %}navigation-flyout-categories is-level-{{ level }}\">
        {% for treeItem in navigationTree %}
            {% set id = treeItem.category.id %}
            {% set name = treeItem.category.translated.name %}
            {% set link = category_url(treeItem.category) %}

            {% block layout_navigation_categories_item %}
                <div class=\"{% if level == 0 %}{% if navigationMedia %}col-4 {% else %}col-3 {% endif %}{% endif %}navigation-flyout-col\">
                    {% block layout_navigation_categories_item_link %}
                        {% if treeItem.category.type == 'folder' %}
                            <div class=\"nav-item nav-link navigation-flyout-link is-level-{{ level }}\"
                                 title=\"{{ name }}\">
                                <span itemprop=\"name\">{{ name }}</span>
                            </div>
                        {% else %}
                            <a class=\"nav-item nav-link navigation-flyout-link is-level-{{ level }}{% if id == activeId or id in activePath %} active{% endif %}\"
                               href=\"{{ link }}\"
                               itemprop=\"url\"
                               {% if category_linknewtab(treeItem.category) %}target=\"_blank\"{% endif %}
                               title=\"{{ name }}\">
                                <span itemprop=\"name\">{{ name }}</span>
                            </a>
                        {% endif %}
                    {% endblock %}

                    {% block layout_navigation_categories_recoursion %}
                        {% if level < navigationMaxDepth %}
                            {% sw_include '@Storefront/storefront/layout/navigation/categories.html.twig' with {
                                navigationTree: treeItem.children,
                                level: level + 1,
                                page: page
                            } only %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}
        {% endfor %}
    </div>
{% endblock %}
", "@Storefront/storefront/layout/navigation/categories.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/categories.html.twig");
    }
}
