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

/* @Storefront/storefront/utilities/thumbnail.html.twig */
class __TwigTemplate_483983a2b8dcf88d3d5286c3b5d323a2148e18cf57d27faa1dbf62ecaa98b798 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/thumbnail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/thumbnail.html.twig"));

        // line 2
        if ( !array_key_exists("load", $context)) {
            // line 3
            echo "    ";
            $context["load"] = true;
        }
        // line 5
        echo "
";
        // line 7
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 7)), 0))) {
            // line 8
            echo "    ";
            if ((($context["columns"] ?? null) &&  !array_key_exists("sizes", $context))) {
                // line 9
                echo "        ";
                // line 10
                echo "        ";
                $context["sizes"] = ["xs" => (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm") - 1) . "px"), "sm" => (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md") - 1) . "px"), "md" => (twig_round((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg") - 1) /                 // line 13
($context["columns"] ?? null)), 0, "ceil") . "px"), "lg" => (twig_round((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl") - 1) /                 // line 14
($context["columns"] ?? null)), 0, "ceil") . "px")];
                // line 16
                echo "
        ";
                // line 18
                echo "        ";
                if ((0 === twig_compare(($context["layout"] ?? null), "full-width"))) {
                    // line 19
                    echo "            ";
                    $context["container"] = 100;
                    // line 20
                    echo "            ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "vw")]);
                    // line 21
                    echo "        ";
                } else {
                    // line 22
                    echo "            ";
                    $context["container"] = 1360;
                    // line 23
                    echo "            ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "px")]);
                    // line 24
                    echo "        ";
                }
                // line 25
                echo "    ";
            }
            // line 26
            echo "
    ";
            // line 27
            $context["thumbnails"] = twig_reverse_filter($this->env, twig_sort_filter(twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 27)));
            // line 28
            echo "
    ";
            // line 30
            echo "    ";
            ob_start();
            ob_start();
            // line 31
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 31) + 1), "html", null, true);
            echo "w, ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["thumbnails"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["thumbnail"]) {
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl(twig_get_attribute($this->env, $this->source, $context["thumbnail"], "url", [], "any", false, false, false, 31)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thumbnail"], "width", [], "any", false, false, false, 31), "html", null, true);
                echo "w";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 31)) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thumbnail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
            $___internal_7f4052efc14925a7e86950df78185d489c43fc32d549d9e9d03a8e7605c07c74_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 30
            echo twig_spaceless($___internal_7f4052efc14925a7e86950df78185d489c43fc32d549d9e9d03a8e7605c07c74_);
            $context["srcsetValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 33
            echo "
    ";
            // line 35
            echo "    ";
            ob_start();
            ob_start();
            // line 36
            echo "        ";
            $context["sizeFallback"] = 100;
            // line 37
            echo "
        ";
            // line 39
            echo "        ";
            if (($context["columns"] ?? null)) {
                // line 40
                echo "            ";
                $context["sizeFallback"] = twig_round((($context["sizeFallback"] ?? null) / ($context["columns"] ?? null)), 0, "ceil");
                // line 41
                echo "        ";
            }
            // line 42
            echo "
        ";
            // line 43
            $context["breakpoint"] = ["xs" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xs"), "sm" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm"), "md" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "lg" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg"), "xl" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl")];
            // line 50
            echo "
        ";
            // line 51
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 51), twig_first($this->env, twig_reverse_filter($this->env, ($context["breakpoint"] ?? null)))))) {
                // line 52
                echo "            ";
                $context["maxWidth"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 52);
                // line 53
                echo "        ";
            }
            // line 54
            echo "
        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["breakpoint"] ?? null)));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if (($context["maxWidth"] ?? null)) {
                    echo "(max-width: ";
                    echo twig_escape_filter($this->env, ($context["maxWidth"] ?? null), "html", null, true);
                    echo "px) and ";
                }
                echo "(min-width: ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "px) ";
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["sizes"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null), "html", null, true);
                $context["maxWidth"] = ($context["value"] - 1);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 55)) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ", ";
            echo twig_escape_filter($this->env, ($context["sizeFallback"] ?? null), "html", null, true);
            echo "vw
    ";
            $___internal_d90102521556f04d045ad9bc30ed476570348688e8c7a4b8febf953abd29abd6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 35
            echo twig_spaceless($___internal_d90102521556f04d045ad9bc30ed476570348688e8c7a4b8febf953abd29abd6_);
            $context["sizesValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        }
        // line 58
        echo "<img ";
        if (($context["load"] ?? null)) {
            echo "src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo "\" ";
        } else {
            echo "data-src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo "\" ";
        }
        // line 59
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 59)), 0))) {
            // line 60
            echo "        ";
            if (($context["load"] ?? null)) {
                echo "srcset=\"";
                echo twig_escape_filter($this->env, ($context["srcsetValue"] ?? null), "html", null, true);
                echo "\" ";
            } else {
                echo "data-srcset=\"";
                echo twig_escape_filter($this->env, ($context["srcsetValue"] ?? null), "html", null, true);
                echo "\" ";
            }
            // line 61
            echo "        ";
            if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["sizes"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["default"] ?? null) : null)) {
                // line 62
                echo "        sizes=\"";
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["sizes"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["default"] ?? null) : null), "html", null, true);
                echo "\"
        ";
            } elseif ((1 === twig_compare(twig_length_filter($this->env,             // line 63
($context["sizes"] ?? null)), 0))) {
                // line 64
                echo "        sizes=\"";
                echo twig_escape_filter($this->env, ($context["sizesValue"] ?? null), "html", null, true);
                echo "\"
        ";
            }
            // line 66
            echo "    ";
        }
        // line 67
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if ((0 !== twig_compare($context["value"], ""))) {
                echo " ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "/>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 68,  286 => 67,  283 => 66,  277 => 64,  275 => 63,  270 => 62,  267 => 61,  256 => 60,  253 => 59,  242 => 58,  238 => 35,  191 => 55,  188 => 54,  185 => 53,  182 => 52,  180 => 51,  177 => 50,  175 => 43,  172 => 42,  169 => 41,  166 => 40,  163 => 39,  160 => 37,  157 => 36,  153 => 35,  150 => 33,  147 => 30,  144 => 32,  103 => 31,  99 => 30,  96 => 28,  94 => 27,  91 => 26,  88 => 25,  85 => 24,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  67 => 18,  64 => 16,  62 => 14,  61 => 13,  59 => 10,  57 => 9,  54 => 8,  52 => 7,  49 => 5,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# activate load per default. If it is not activated only a data-src is set instead of the src tag. #}
{% if load is not defined %}
    {% set load = true %}
{% endif %}

{# uses cms block column count and all available thumbnails to determine the correct image size for the current viewport #}
{% if media.thumbnails|length > 0 %}
    {% if columns and sizes is not defined %}
        {# set image size for every viewport #}
        {% set sizes = {
            'xs': (theme_config('breakpoint.sm') - 1) ~'px',
            'sm': (theme_config('breakpoint.md') - 1) ~'px',
            'md': ((theme_config('breakpoint.lg') - 1) / columns)|round(0, 'ceil') ~'px',
            'lg': ((theme_config('breakpoint.xl') - 1) / columns)|round(0, 'ceil') ~'px'
        } %}

        {# set image size for largest viewport depending on the cms block sizing mode (boxed or full-width) #}
        {% if layout == 'full-width' %}
            {% set container = 100 %}
            {% set sizes = sizes|merge({ 'xl': (container / columns)|round(0, 'ceil') ~'vw'}) %}
        {% else %}
            {% set container = 1360 %}
            {% set sizes = sizes|merge({ 'xl': (container / columns)|round(0, 'ceil') ~'px'}) %}
        {% endif %}
    {% endif %}

    {% set thumbnails = media.thumbnails|sort|reverse %}

    {# generate srcset with all available thumbnails #}
    {% set srcsetValue %}{% apply spaceless %}
        {{ media|sw_encode_media_url }} {{ thumbnails|first.width + 1 }}w, {% for thumbnail in thumbnails %}{{ thumbnail.url | sw_encode_url }} {{ thumbnail.width }}w{% if not loop.last %}, {% endif %}{% endfor %}
    {% endapply %}{% endset %}

    {# generate sizes #}
    {% set sizesValue %}{% apply spaceless %}
        {% set sizeFallback = 100 %}

        {# set largest size depending on column count of cms block #}
        {% if columns %}
            {% set sizeFallback = (sizeFallback / columns)|round(0, 'ceil') %}
        {% endif %}

        {% set breakpoint = {
            'xs': theme_config('breakpoint.xs'),
            'sm': theme_config('breakpoint.sm'),
            'md': theme_config('breakpoint.md'),
            'lg': theme_config('breakpoint.lg'),
            'xl': theme_config('breakpoint.xl')
        } %}

        {% if thumbnails|first.width > breakpoint|reverse|first %}
            {% set maxWidth = thumbnails|first.width %}
        {% endif %}

        {% for key, value in breakpoint|reverse %}{% if maxWidth %}(max-width: {{ maxWidth }}px) and {% endif %}(min-width: {{ value }}px) {{ sizes[key] }}{% set maxWidth = value-1 %}{% if not loop.last %}, {% endif %}{% endfor %}, {{ sizeFallback }}vw
    {% endapply %}{% endset %}
{% endif %}
<img {% if load %}src=\"{{ media|sw_encode_media_url }}\" {% else %}data-src=\"{{ media|sw_encode_media_url }}\" {% endif %}
    {% if media.thumbnails|length > 0 %}
        {% if load %}srcset=\"{{ srcsetValue }}\" {% else %}data-srcset=\"{{ srcsetValue }}\" {% endif %}
        {% if sizes['default'] %}
        sizes=\"{{ sizes['default'] }}\"
        {% elseif sizes|length > 0 %}
        sizes=\"{{ sizesValue }}\"
        {% endif %}
    {% endif %}
    {% for key, value in attributes %}{% if value != '' %} {{ key }}=\"{{ value }}\"{% endif %}{% endfor %}
/>
", "@Storefront/storefront/utilities/thumbnail.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/utilities/thumbnail.html.twig");
    }
}
