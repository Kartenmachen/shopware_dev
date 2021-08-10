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

/* @Storefront/storefront/page/content/detail.html.twig */
class __TwigTemplate_ecd8da43d71159139439b1762049b9894f88ab2949f4f0b2f137322733e53744 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_content_sections_inner' => [$this, 'block_page_content_sections_inner'],
            'page_content_section' => [$this, 'block_page_content_section'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/content/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/content/detail.html.twig"));

        // line 1
        $this->displayBlock('page_content_sections_inner', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_content_sections_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_sections_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_sections_inner"));

        // line 2
        echo "    <div class=\"cms-sections\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cmsPage"] ?? null), "sections", [], "any", false, false, false, 3));
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
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 4
            echo "            ";
            $context["sectionBgColor"] = twig_get_attribute($this->env, $this->source, $context["section"], "backgroundColor", [], "any", false, false, false, 4);
            // line 5
            echo "            ";
            $context["sectionBgImg"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(twig_get_attribute($this->env, $this->source, $context["section"], "backgroundMedia", [], "any", false, false, false, 5));
            // line 6
            echo "            ";
            $context["sectionBgImgMode"] = twig_get_attribute($this->env, $this->source, $context["section"], "backgroundMediaMode", [], "any", false, false, false, 6);
            // line 7
            echo "
            ";
            // line 8
            $context["sectionClasses"] = [0 => twig_get_attribute($this->env, $this->source, $context["section"], "cssClass", [], "any", false, false, false, 8), 1 => ("pos-" . twig_get_attribute($this->env, $this->source, $context["section"], "position", [], "any", false, false, false, 8)), 2 => ("cms-section-" . twig_get_attribute($this->env, $this->source, $context["section"], "type", [], "any", false, false, false, 8))];
            // line 9
            echo "
            ";
            // line 10
            if (($context["sectionBgImg"] ?? null)) {
                // line 11
                echo "                ";
                $context["sectionClasses"] = twig_array_merge([0 => "bg-image"], ($context["sectionClasses"] ?? null));
                // line 12
                echo "            ";
            }
            // line 13
            echo "
            ";
            // line 14
            if (($context["sectionBgColor"] ?? null)) {
                // line 15
                echo "                ";
                $context["sectionClasses"] = twig_array_merge([0 => "bg-color"], ($context["sectionClasses"] ?? null));
                // line 16
                echo "            ";
            }
            // line 17
            echo "
            ";
            // line 18
            $this->displayBlock('page_content_section', $context, $blocks);
            // line 25
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_page_content_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_section"));

        // line 19
        echo "                <div class=\"cms-section ";
        echo twig_escape_filter($this->env, twig_join_filter(($context["sectionClasses"] ?? null), " "), "html", null, true);
        echo "\"
                     style=\"";
        // line 20
        if (($context["sectionBgColor"] ?? null)) {
            echo "background-color: ";
            echo twig_escape_filter($this->env, ($context["sectionBgColor"] ?? null), "html", null, true);
            echo ";";
        }
        if (($context["sectionBgImg"] ?? null)) {
            echo "background-image: url(";
            echo twig_escape_filter($this->env, ($context["sectionBgImg"] ?? null), "html", null, true);
            echo ");background-size: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "backgroundMediaMode", [], "any", false, false, false, 20), "html", null, true);
            echo ";";
        }
        echo "\">

                    ";
        // line 22
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName((("@Storefront/storefront/section/cms-section-" . twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "type", [], "any", false, false, false, 22)) . ".html.twig")));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/content/detail.html.twig", 22);
        })())->display($context);
        // line 23
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/content/detail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  189 => 23,  181 => 22,  165 => 20,  160 => 19,  150 => 18,  139 => 26,  125 => 25,  123 => 18,  120 => 17,  117 => 16,  114 => 15,  112 => 14,  109 => 13,  106 => 12,  103 => 11,  101 => 10,  98 => 9,  96 => 8,  93 => 7,  90 => 6,  87 => 5,  84 => 4,  67 => 3,  64 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_content_sections_inner %}
    <div class=\"cms-sections\">
        {% for section in cmsPage.sections %}
            {% set sectionBgColor = section.backgroundColor %}
            {% set sectionBgImg = section.backgroundMedia|sw_encode_media_url %}
            {% set sectionBgImgMode = section.backgroundMediaMode %}

            {% set sectionClasses = [section.cssClass, 'pos-' ~ section.position, 'cms-section-' ~ section.type] %}

            {% if sectionBgImg %}
                {% set sectionClasses = ['bg-image']|merge(sectionClasses) %}
            {% endif %}

            {% if sectionBgColor %}
                {% set sectionClasses = ['bg-color']|merge(sectionClasses) %}
            {% endif %}

            {% block page_content_section %}
                <div class=\"cms-section {{ sectionClasses|join(' ') }}\"
                     style=\"{% if sectionBgColor %}background-color: {{ sectionBgColor }};{% endif %}{% if sectionBgImg %}background-image: url({{ sectionBgImg }});background-size: {{ section.backgroundMediaMode }};{% endif %}\">

                    {% sw_include \"@Storefront/storefront/section/cms-section-\" ~ section.type ~ \".html.twig\" %}
                </div>
            {% endblock %}
        {% endfor %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/content/detail.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/page/content/detail.html.twig");
    }
}
