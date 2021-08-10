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

/* @Storefront/storefront/component/pseudo-modal.html.twig */
class __TwigTemplate_5286e1bc51318e85aa80f756b29327ed0eacec8c39bbe4a1589fab4df0bd768d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_detail_zoom_modal_close_button_content' => [$this, 'block_product_detail_zoom_modal_close_button_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/pseudo-modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/pseudo-modal.html.twig"));

        // line 1
        echo "<div class=\"js-pseudo-modal-template\">
    <div class=\"modal fade\"
         tabindex=\"-1\"
         role=\"dialog\">
        <div class=\"modal-dialog\"
             role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header only-close\">
                    <h5 class=\"modal-title js-pseudo-modal-template-title-element\"></h5>
                    <button type=\"button\"
                            class=\"modal-close close\"
                            data-dismiss=\"modal\"
                            aria-label=\"Close\">
                        ";
        // line 14
        $this->displayBlock('product_detail_zoom_modal_close_button_content', $context, $blocks);
        // line 19
        echo "                    </button>
                </div>
                <div class=\"modal-body js-pseudo-modal-template-content-element\">
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_product_detail_zoom_modal_close_button_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_detail_zoom_modal_close_button_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_detail_zoom_modal_close_button_content"));

        // line 15
        echo "                            <span aria-hidden=\"true\">
                                ";
        // line 16
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pseudo-modal.html.twig", 16);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 17
        echo "                            </span>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/pseudo-modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 17,  92 => 16,  89 => 15,  79 => 14,  61 => 19,  59 => 14,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"js-pseudo-modal-template\">
    <div class=\"modal fade\"
         tabindex=\"-1\"
         role=\"dialog\">
        <div class=\"modal-dialog\"
             role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header only-close\">
                    <h5 class=\"modal-title js-pseudo-modal-template-title-element\"></h5>
                    <button type=\"button\"
                            class=\"modal-close close\"
                            data-dismiss=\"modal\"
                            aria-label=\"Close\">
                        {% block product_detail_zoom_modal_close_button_content %}
                            <span aria-hidden=\"true\">
                                {% sw_icon 'x' style { 'size': 'sm' } %}
                            </span>
                        {% endblock %}
                    </button>
                </div>
                <div class=\"modal-body js-pseudo-modal-template-content-element\">
                </div>
            </div>
        </div>
    </div>
</div>
", "@Storefront/storefront/component/pseudo-modal.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/pseudo-modal.html.twig");
    }
}
