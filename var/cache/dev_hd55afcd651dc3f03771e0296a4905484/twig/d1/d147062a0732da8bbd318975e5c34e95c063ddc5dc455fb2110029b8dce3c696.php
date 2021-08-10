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

/* @Storefront/storefront/element/cms-element-image.html.twig */
class __TwigTemplate_144fb8d54872be268c50e74f0101a4fcb72c8341d2accf7c88aa2e6a16fefe58 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_image' => [$this, 'block_element_image'],
            'element_product_slider_alignment' => [$this, 'block_element_product_slider_alignment'],
            'element_image_inner' => [$this, 'block_element_image_inner'],
            'element_image_container' => [$this, 'block_element_image_container'],
            'element_image_media' => [$this, 'block_element_image_media'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-image.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-image.html.twig"));

        // line 1
        $this->displayBlock('element_image', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_element_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image"));

        // line 2
        echo "    ";
        $context["config"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 2), "elements", [], "any", false, false, false, 2);
        // line 3
        echo "
    <div class=\"cms-element-";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 4), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4)) {
            echo " has-vertical-alignment";
        }
        echo "\">
        ";
        // line 5
        $this->displayBlock('element_product_slider_alignment', $context, $blocks);
        // line 49
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_element_product_slider_alignment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_slider_alignment"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_slider_alignment"));

        // line 6
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6)) {
            // line 7
            echo "                <div class=\"cms-element-alignment";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "center"))) {
                echo " align-self-center";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "flex-end"))) {
                echo " align-self-end";
            } else {
                echo " align-self-start";
            }
            echo "\">
            ";
        }
        // line 9
        echo "                ";
        $this->displayBlock('element_image_inner', $context, $blocks);
        // line 45
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 45), "value", [], "any", false, false, false, 45)) {
            // line 46
            echo "                </div>
            ";
        }
        // line 48
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_element_image_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_inner"));

        // line 10
        echo "                    ";
        ob_start();
        // line 11
        echo "                        ";
        $this->displayBlock('element_image_container', $context, $blocks);
        // line 33
        echo "                    ";
        $context["imageElement"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
                    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 35), "config", [], "any", false, false, false, 35), "url", [], "any", false, false, false, 35), "value", [], "any", false, false, false, 35)) {
            // line 36
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 36), "config", [], "any", false, false, false, 36), "url", [], "any", false, false, false, 36), "value", [], "any", false, false, false, 36), "html", null, true);
            echo "\"
                           class=\"cms-image-link\"
                           ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 38), "config", [], "any", false, false, false, 38), "newTab", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38)) {
                echo "target=\"_blank\" rel=\"noopener\"";
            }
            echo ">
                            ";
            // line 39
            echo twig_escape_filter($this->env, ($context["imageElement"] ?? null), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 42
            echo "                        ";
            echo twig_escape_filter($this->env, ($context["imageElement"] ?? null), "html", null, true);
            echo "
                    ";
        }
        // line 44
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_element_image_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_container"));

        // line 12
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 12), "media", [], "any", false, false, false, 12), "url", [], "any", false, false, false, 12)) {
            // line 13
            echo "                                <div class=\"cms-image-container is-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 13), "config", [], "any", false, false, false, 13), "displayMode", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13), "html", null, true);
            echo "\"
                                    ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 14), "config", [], "any", false, false, false, 14), "minHeight", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 14), "config", [], "any", false, false, false, 14), "displayMode", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14), "cover")))) {
                echo " style=\"min-height: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 14), "config", [], "any", false, false, false, 14), "minHeight", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14), "html", null, true);
                echo ";\"";
            }
            echo ">
                                    ";
            // line 15
            $this->displayBlock('element_image_media', $context, $blocks);
            // line 30
            echo "                                </div>
                            ";
        }
        // line 32
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_element_image_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_media"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_media"));

        // line 16
        echo "                                        ";
        $context["attributes"] = ["class" => "cms-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 18
($context["element"] ?? null), "data", [], "any", false, false, false, 18), "media", [], "any", false, false, false, 18), "translated", [], "any", false, false, false, 18), "alt", [], "any", false, false, false, 18)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 18), "media", [], "any", false, false, false, 18), "translated", [], "any", false, false, false, 18), "alt", [], "any", false, false, false, 18)) : ("")), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
($context["element"] ?? null), "data", [], "any", false, false, false, 19), "media", [], "any", false, false, false, 19), "translated", [], "any", false, false, false, 19), "title", [], "any", false, false, false, 19)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 19), "media", [], "any", false, false, false, 19), "translated", [], "any", false, false, false, 19), "title", [], "any", false, false, false, 19)) : (""))];
        // line 21
        echo "
                                        ";
        // line 22
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 22), "config", [], "any", false, false, false, 22), "displayMode", [], "any", false, false, false, 22), "value", [], "any", false, false, false, 22), "cover")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 22), "config", [], "any", false, false, false, 22), "displayMode", [], "any", false, false, false, 22), "value", [], "any", false, false, false, 22), "contain")))) {
            // line 23
            echo "                                            ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 23), "config", [], "any", false, false, false, 23), "displayMode", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23)]);
            // line 24
            echo "                                        ";
        }
        // line 25
        echo "
                                        ";
        // line 26
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image.html.twig", 26);
        })())->display(twig_array_merge($context, ["media" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
($context["element"] ?? null), "data", [], "any", false, false, false, 27), "media", [], "any", false, false, false, 27), "name" => "cms-image-thumbnails"]));
        // line 29
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-image.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  276 => 29,  274 => 27,  267 => 26,  264 => 25,  261 => 24,  258 => 23,  256 => 22,  253 => 21,  251 => 19,  250 => 18,  248 => 16,  238 => 15,  228 => 32,  224 => 30,  222 => 15,  214 => 14,  209 => 13,  206 => 12,  196 => 11,  186 => 44,  180 => 42,  174 => 39,  168 => 38,  162 => 36,  160 => 35,  157 => 34,  154 => 33,  151 => 11,  148 => 10,  138 => 9,  128 => 48,  124 => 46,  121 => 45,  118 => 9,  106 => 7,  103 => 6,  93 => 5,  82 => 49,  80 => 5,  73 => 4,  70 => 3,  67 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block element_image %}
    {% set config = element.fieldConfig.elements %}

    <div class=\"cms-element-{{ element.type }}{% if config.verticalAlign.value %} has-vertical-alignment{% endif %}\">
        {% block element_product_slider_alignment %}
            {% if config.verticalAlign.value %}
                <div class=\"cms-element-alignment{% if config.verticalAlign.value == \"center\" %} align-self-center{% elseif config.verticalAlign.value == \"flex-end\" %} align-self-end{% else %} align-self-start{% endif %}\">
            {% endif %}
                {% block element_image_inner %}
                    {% set imageElement %}
                        {% block element_image_container %}
                            {% if element.data.media.url %}
                                <div class=\"cms-image-container is-{{ element.translated.config.displayMode.value }}\"
                                    {% if element.translated.config.minHeight.value and element.translated.config.displayMode.value == \"cover\" %} style=\"min-height: {{ element.translated.config.minHeight.value }};\"{% endif %}>
                                    {% block element_image_media %}
                                        {% set attributes = {
                                            'class': 'cms-image',
                                            'alt': (element.data.media.translated.alt ?: ''),
                                            'title': (element.data.media.translated.title ?: '')
                                        } %}

                                        {% if element.translated.config.displayMode.value == 'cover' or element.translated.config.displayMode.value == 'contain' %}
                                            {% set attributes = attributes|merge({ 'data-object-fit': element.translated.config.displayMode.value }) %}
                                        {% endif %}

                                        {% sw_thumbnails 'cms-image-thumbnails' with {
                                            media: element.data.media
                                        } %}
                                    {% endblock %}
                                </div>
                            {% endif %}
                        {% endblock %}
                    {% endset %}

                    {% if element.translated.config.url.value %}
                        <a href=\"{{ element.translated.config.url.value }}\"
                           class=\"cms-image-link\"
                           {% if element.translated.config.newTab.value %}target=\"_blank\" rel=\"noopener\"{% endif %}>
                            {{ imageElement }}
                        </a>
                    {% else %}
                        {{ imageElement }}
                    {% endif %}
                {% endblock %}
            {% if config.verticalAlign.value %}
                </div>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/element/cms-element-image.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-image.html.twig");
    }
}
