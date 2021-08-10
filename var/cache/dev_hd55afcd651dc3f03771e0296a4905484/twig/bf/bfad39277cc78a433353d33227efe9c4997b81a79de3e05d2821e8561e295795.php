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

/* @Storefront/storefront/component/product/card/box.html.twig */
class __TwigTemplate_cb5561d115033cfc5d99f9987c0952be2ae005c3ab1ce152d1b3a6b3651d92e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_include' => [$this, 'block_component_product_box_include'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/box.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/box.html.twig"));

        // line 1
        $this->displayBlock('component_product_box_include', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_product_box_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_include"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_include"));

        // line 2
        echo "    ";
        // line 4
        echo "
    ";
        // line 5
        if (twig_test_empty(($context["layout"] ?? null))) {
            // line 6
            echo "        ";
            $context["layout"] = "standard";
            // line 7
            echo "    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if ((0 === twig_compare(($context["layout"] ?? null), "standard"))) {
            // line 10
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/component/product/card/box-standard.html.twig", "@Storefront/storefront/component/product/card/box.html.twig", 10)->display($context);
            // line 11
            echo "    ";
        } elseif ((0 === twig_compare(($context["layout"] ?? null), "image"))) {
            // line 12
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/component/product/card/box-image.html.twig", "@Storefront/storefront/component/product/card/box.html.twig", 12)->display($context);
            // line 13
            echo "    ";
        } elseif ((0 === twig_compare(($context["layout"] ?? null), "minimal"))) {
            // line 14
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/component/product/card/box-minimal.html.twig", "@Storefront/storefront/component/product/card/box.html.twig", 14)->display($context);
            // line 15
            echo "    ";
        } elseif ((0 === twig_compare(($context["layout"] ?? null), "wishlist"))) {
            // line 16
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/component/product/card/box-wishlist.html.twig", "@Storefront/storefront/component/product/card/box.html.twig", 16)->display($context);
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "        ";
            $context["template"] = (("@Storefront/storefront/component/product/card/box-" . ($context["layout"] ?? null)) . ".html.twig");
            // line 19
            echo "        ";
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName(($context["template"] ?? null)));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/box.html.twig", 19);
                })());
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
            // line 20
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/box.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  125 => 20,  108 => 19,  105 => 18,  102 => 17,  99 => 16,  96 => 15,  93 => 14,  90 => 13,  87 => 12,  84 => 11,  81 => 10,  79 => 9,  76 => 8,  73 => 7,  70 => 6,  68 => 5,  65 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_product_box_include %}
    {# Includes a custom product-box template defined by the layout variable.
       The standard template is used if no custom layout is set. #}

    {% if layout is empty %}
        {% set layout = 'standard' %}
    {% endif %}

    {% if layout == 'standard' %}
        {% sw_include \"@Storefront/storefront/component/product/card/box-standard.html.twig\" %}
    {% elseif layout == 'image' %}
        {% sw_include \"@Storefront/storefront/component/product/card/box-image.html.twig\" %}
    {% elseif layout == 'minimal' %}
        {% sw_include \"@Storefront/storefront/component/product/card/box-minimal.html.twig\" %}
    {% elseif layout == 'wishlist' %}
        {% sw_include \"@Storefront/storefront/component/product/card/box-wishlist.html.twig\" %}
    {% else %}
        {% set template = \"@Storefront/storefront/component/product/card/box-\" ~ layout ~ \".html.twig\" %}
        {% sw_include template ignore missing %}
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/product/card/box.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/product/card/box.html.twig");
    }
}
