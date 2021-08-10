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

/* @Storefront/storefront/utilities/icon.html.twig */
class __TwigTemplate_24869e5bc039432fd49e46d687b90e97087c84b55c732929fd46f457a4afb232 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'utilities_icon' => [$this, 'block_utilities_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/icon.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/icon.html.twig"));

        // line 1
        $this->displayBlock('utilities_icon', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_utilities_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_icon"));

        // line 2
        echo "    ";
        $context["styles"] = [0 => ($context["size"] ?? null), 1 => ($context["color"] ?? null), 2 => ($context["rotation"] ?? null), 3 => ($context["flip"] ?? null), 4 => ($context["class"] ?? null)];
        // line 3
        echo "
    ";
        // line 4
        if ( !array_key_exists("pack", $context)) {
            // line 5
            echo "        ";
            $context["pack"] = "default";
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if ( !array_key_exists("namespace", $context)) {
            // line 9
            echo "        ";
            $context["namespace"] = "Storefront";
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["themeIconConfig"] ?? null), ($context["pack"] ?? null), [], "array", true, true, false, 12)) {
            // line 13
            echo "        <span class=\"icon icon-";
            echo twig_escape_filter($this->env, ($context["pack"] ?? null), "html", null, true);
            echo " icon-";
            echo twig_escape_filter($this->env, ($context["pack"] ?? null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                if ((0 !== twig_compare($context["entry"], ""))) {
                    echo " icon-";
                    echo twig_escape_filter($this->env, $context["entry"], "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
            ";
            // line 14
            echo twig_source($this->env, (((((("@" . twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["themeIconConfig"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["pack"] ?? null)] ?? null) : null), "namespace", [], "any", false, false, false, 14)) . "/../") . twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["themeIconConfig"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["pack"] ?? null)] ?? null) : null), "path", [], "any", false, false, false, 14)) . "/") . ($context["name"] ?? null)) . ".svg"), true);
            echo "
        </span>
    ";
        } else {
            // line 17
            echo "        <span
            class=\"icon icon-";
            // line 18
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                if ((0 !== twig_compare($context["entry"], ""))) {
                    echo " icon-";
                    echo twig_escape_filter($this->env, $context["entry"], "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
                ";
            // line 19
            echo twig_source($this->env, (((((("@" . ($context["namespace"] ?? null)) . "/../app/storefront/dist/assets/icon/") . ($context["pack"] ?? null)) . "/") . ($context["name"] ?? null)) . ".svg"), true);
            echo "
        </span>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/icon.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  137 => 19,  122 => 18,  119 => 17,  113 => 14,  93 => 13,  91 => 12,  88 => 11,  85 => 10,  82 => 9,  80 => 8,  77 => 7,  74 => 6,  71 => 5,  69 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block utilities_icon %}
    {% set styles = [ size, color, rotation, flip, class ] %}

    {% if pack is not defined %}
        {% set pack = 'default' %}
    {% endif %}

    {% if namespace is not defined %}
        {% set namespace = 'Storefront' %}
    {% endif %}

    {% if themeIconConfig[pack] is defined %}
        <span class=\"icon icon-{{ pack }} icon-{{ pack }}-{{ name }}{% for entry in styles %}{% if entry != \"\" %} icon-{{ entry }}{% endif %}{% endfor %}\">
            {{ source('@' ~ themeIconConfig[pack].namespace ~ '/../' ~ themeIconConfig[pack].path ~'/'~ name ~ '.svg', ignore_missing = true) }}
        </span>
    {% else %}
        <span
            class=\"icon icon-{{ name }}{% for entry in styles %}{% if entry != \"\" %} icon-{{ entry }}{% endif %}{% endfor %}\">
                {{ source('@' ~ namespace ~ '/../app/storefront/dist/assets/icon/'~ pack ~'/'~ name ~'.svg', ignore_missing = true) }}
        </span>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/utilities/icon.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/utilities/icon.html.twig");
    }
}
