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

/* @Storefront/storefront/component/review/rating.html.twig */
class __TwigTemplate_df971d6707196bbb5955ac20b8e3b8f4d13814045719792949434c943b273cd5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_review_rating' => [$this, 'block_component_review_rating'],
            'component_review_rating_output' => [$this, 'block_component_review_rating_output'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/review/rating.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/review/rating.html.twig"));

        // line 1
        $this->displayBlock('component_review_rating', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_review_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_review_rating"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_review_rating"));

        // line 2
        echo "    ";
        $context["full"] = twig_round(($context["points"] ?? null), 0, "floor");
        // line 3
        echo "    ";
        $context["left"] = twig_round(((($context["points"] ?? null) - ($context["full"] ?? null)) * 4));
        // line 4
        echo "    ";
        $context["left"] = (($context["left"] ?? null) / 4);
        // line 5
        echo "
    ";
        // line 6
        if ((1 === twig_compare(($context["left"] ?? null), 0))) {
            // line 7
            echo "        ";
            $context["half"] = 1;
            // line 8
            echo "    ";
        }
        // line 9
        echo "
    ";
        // line 10
        $context["blank"] = ((5 - ($context["full"] ?? null)) - ($context["half"] ?? null));
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('component_review_rating_output', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_component_review_rating_output($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_review_rating_output"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_review_rating_output"));

        // line 13
        echo "        <span class=\"product-review-rating\">

            ";
        // line 15
        if ((1 === twig_compare(($context["full"] ?? null), 0))) {
            // line 16
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["full"] ?? null)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
                // line 17
                echo "                    ";
                $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/component/review/rating.html.twig", 17)->display(twig_array_merge($context, ["type" => "full"]));
                // line 20
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['star'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            ";
        }
        // line 22
        echo "
            ";
        // line 23
        if (($context["half"] ?? null)) {
            // line 24
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/component/review/rating.html.twig", 24)->display(twig_array_merge($context, ["type" => "half"]));
            // line 27
            echo "            ";
        }
        // line 28
        echo "
            ";
        // line 29
        if ((1 === twig_compare(($context["blank"] ?? null), 0))) {
            // line 30
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["blank"] ?? null)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
                // line 31
                echo "                    ";
                $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/component/review/rating.html.twig", 31)->display(twig_array_merge($context, ["type" => "blank"]));
                // line 34
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['star'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            ";
        }
        // line 36
        echo "        </span>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/review/rating.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  209 => 36,  206 => 35,  192 => 34,  189 => 31,  171 => 30,  169 => 29,  166 => 28,  163 => 27,  160 => 24,  158 => 23,  155 => 22,  152 => 21,  138 => 20,  135 => 17,  117 => 16,  115 => 15,  111 => 13,  92 => 12,  89 => 11,  87 => 10,  84 => 9,  81 => 8,  78 => 7,  76 => 6,  73 => 5,  70 => 4,  67 => 3,  64 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_review_rating %}
    {% set full = points|round(0, 'floor')   %}
    {% set left = ((points - full) * 4)|round %}
    {% set left = left / 4 %}

    {% if left > 0 %}
        {% set half = 1 %}
    {% endif %}

    {% set blank = 5 - full - half  %}

    {% block component_review_rating_output %}
        <span class=\"product-review-rating\">

            {% if full > 0 %}
                {% for star in range(1,full) %}
                    {% sw_include '@Storefront/storefront/component/review/point.html.twig' with {
                        type: 'full'
                    } %}
                {% endfor %}
            {% endif %}

            {% if half %}
                {% sw_include '@Storefront/storefront/component/review/point.html.twig' with {
                    type: 'half'
                } %}
            {% endif %}

            {% if blank > 0 %}
                {% for star in range(1,blank) %}
                    {% sw_include '@Storefront/storefront/component/review/point.html.twig' with {
                        type: 'blank'
                    } %}
                {% endfor %}
            {% endif %}
        </span>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/review/rating.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/review/rating.html.twig");
    }
}
