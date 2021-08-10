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

/* @Storefront/storefront/page/account/sidebar.html.twig */
class __TwigTemplate_bea125c0671e83813bd8decd1dad8b1cef7186f065c5409456e579a308333236 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_account_sidebar_inner' => [$this, 'block_page_account_sidebar_inner'],
            'page_account_sidebar_header' => [$this, 'block_page_account_sidebar_header'],
            'page_account_sidebar_menu' => [$this, 'block_page_account_sidebar_menu'],
            'page_account_sidebar_menu_inner' => [$this, 'block_page_account_sidebar_menu_inner'],
            'page_account_sidebar_link_home' => [$this, 'block_page_account_sidebar_link_home'],
            'page_account_sidebar_link_profile' => [$this, 'block_page_account_sidebar_link_profile'],
            'page_account_sidebar_link_address' => [$this, 'block_page_account_sidebar_link_address'],
            'page_account_sidebar_link_payment' => [$this, 'block_page_account_sidebar_link_payment'],
            'page_account_sidebar_link_orders' => [$this, 'block_page_account_sidebar_link_orders'],
            'page_account_sidebar_footer' => [$this, 'block_page_account_sidebar_footer'],
            'page_account_sidebar_logout' => [$this, 'block_page_account_sidebar_logout'],
            'page_account_sidebar_guest_abort' => [$this, 'block_page_account_sidebar_guest_abort'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/sidebar.html.twig"));

        // line 1
        $this->displayBlock('page_account_sidebar_inner', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_account_sidebar_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_inner"));

        // line 2
        echo "    <div class=\"";
        if ( !($context["headerWidget"] ?? null)) {
            echo "account-aside";
        } else {
            echo "header-account-menu";
        }
        echo "\">
        <div class=\"card account-menu-inner\">
            ";
        // line 4
        $this->displayBlock('page_account_sidebar_header', $context, $blocks);
        // line 14
        echo "
            ";
        // line 15
        $this->displayBlock('page_account_sidebar_menu', $context, $blocks);
        // line 62
        echo "
            ";
        // line 63
        $this->displayBlock('page_account_sidebar_footer', $context, $blocks);
        // line 89
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_page_account_sidebar_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_header"));

        // line 5
        echo "                ";
        if ( !($context["headerWidget"] ?? null)) {
            // line 6
            echo "                    <div class=\"card-header account-aside-header\">
                        ";
            // line 7
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.greetings"));
            echo "
                        ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "html", null, true);
            echo "
                        ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 9), "firstName", [], "any", false, false, false, 9), "html", null, true);
            echo "
                        ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 10), "lastName", [], "any", false, false, false, 10), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 13
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_page_account_sidebar_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_menu"));

        // line 16
        echo "                ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 16), "guest", [], "any", false, false, false, 16)) {
            // line 17
            echo "                    <div class=\"list-group list-group-flush account-aside-list-group\">
                        ";
            // line 18
            $this->displayBlock('page_account_sidebar_menu_inner', $context, $blocks);
            // line 59
            echo "                    </div>
                ";
        }
        // line 61
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_page_account_sidebar_menu_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_menu_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_menu_inner"));

        // line 19
        echo "                            ";
        $this->displayBlock('page_account_sidebar_link_home', $context, $blocks);
        // line 26
        echo "
                            ";
        // line 27
        $this->displayBlock('page_account_sidebar_link_profile', $context, $blocks);
        // line 34
        echo "
                            ";
        // line 35
        $this->displayBlock('page_account_sidebar_link_address', $context, $blocks);
        // line 42
        echo "
                            ";
        // line 43
        $this->displayBlock('page_account_sidebar_link_payment', $context, $blocks);
        // line 50
        echo "
                            ";
        // line 51
        $this->displayBlock('page_account_sidebar_link_orders', $context, $blocks);
        // line 58
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_page_account_sidebar_link_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_home"));

        // line 20
        echo "                                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.home.page");
        echo "\"
                                   title=\"";
        // line 21
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewLink")), "html", null, true);
        echo "\"
                                   class=\"list-group-item list-group-item-action account-aside-item";
        // line 22
        if ((($context["activeRoute"] ?? null) === "frontend.account.home.page")) {
            echo " is-active";
        }
        echo "\">
                                    ";
        // line 23
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewLink"));
        echo "
                                </a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_page_account_sidebar_link_profile($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_profile"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_profile"));

        // line 28
        echo "                                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.page");
        echo "\"
                                   title=\"";
        // line 29
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileLink")), "html", null, true);
        echo "\"
                                   class=\"list-group-item list-group-item-action account-aside-item";
        // line 30
        if ((($context["activeRoute"] ?? null) === "frontend.account.profile.page")) {
            echo " is-active";
        }
        echo "\">
                                    ";
        // line 31
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileLink"));
        echo "
                                </a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_page_account_sidebar_link_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_address"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_address"));

        // line 36
        echo "                                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.page");
        echo "\"
                                   title=\"";
        // line 37
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressLink")), "html", null, true);
        echo "\"
                                   class=\"list-group-item list-group-item-action account-aside-item";
        // line 38
        if ((($context["activeRoute"] ?? null) === "frontend.account.address.page")) {
            echo " is-active";
        }
        echo "\">
                                    ";
        // line 39
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressLink"));
        echo "
                                </a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_page_account_sidebar_link_payment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_payment"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_payment"));

        // line 44
        echo "                                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.payment.page");
        echo "\"
                                   title=\"";
        // line 45
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.paymentLink")), "html", null, true);
        echo "\"
                                   class=\"list-group-item list-group-item-action account-aside-item";
        // line 46
        if ((($context["activeRoute"] ?? null) === "frontend.account.payment.page")) {
            echo " is-active";
        }
        echo "\">
                                    ";
        // line 47
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.paymentLink"));
        echo "
                                </a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_page_account_sidebar_link_orders($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_orders"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_orders"));

        // line 52
        echo "                                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.order.page");
        echo "\"
                                   title=\"";
        // line 53
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.ordersLink")), "html", null, true);
        echo "\"
                                   class=\"list-group-item list-group-item-action account-aside-item";
        // line 54
        if ((($context["activeRoute"] ?? null) === "frontend.account.order.page")) {
            echo " is-active";
        }
        echo "\">
                                    ";
        // line 55
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.ordersLink"));
        echo "
                                </a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_page_account_sidebar_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_footer"));

        // line 64
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 64)) {
            // line 65
            echo "                    ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 65), "guest", [], "any", false, false, false, 65)) {
                // line 66
                echo "                        <div class=\"card-footer account-aside-footer\">
                            ";
                // line 67
                $this->displayBlock('page_account_sidebar_logout', $context, $blocks);
                // line 74
                echo "                        </div>
                    ";
            } else {
                // line 76
                echo "                        <div class=\"card-footer account-aside-footer account-guest-abort\">
                            ";
                // line 77
                $this->displayBlock('page_account_sidebar_guest_abort', $context, $blocks);
                // line 85
                echo "                        </div>
                    ";
            }
            // line 87
            echo "                ";
        }
        // line 88
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_page_account_sidebar_logout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_logout"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_logout"));

        // line 68
        echo "                                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.logout.page");
        echo "\"
                                   class=\"btn btn-link account-aside-btn\">
                                    ";
        // line 70
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/sidebar.html.twig", 70);
        })())->display(twig_array_merge($context, ["name" => "log-out"]));
        // line 71
        echo "                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.logout"));
        echo "
                                </a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_page_account_sidebar_guest_abort($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_guest_abort"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_guest_abort"));

        // line 78
        echo "                                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.logout.page");
        echo "\"
                                   data-account-guest-abort-button=\"true\"
                                   class=\"btn btn-link account-aside-btn\">
                                    ";
        // line 81
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/sidebar.html.twig", 81);
        })())->display(twig_array_merge($context, ["name" => "log-out"]));
        // line 82
        echo "                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.guestAbort"));
        echo "
                                </a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  527 => 82,  519 => 81,  512 => 78,  502 => 77,  488 => 71,  480 => 70,  474 => 68,  464 => 67,  454 => 88,  451 => 87,  447 => 85,  445 => 77,  442 => 76,  438 => 74,  436 => 67,  433 => 66,  430 => 65,  427 => 64,  417 => 63,  404 => 55,  398 => 54,  394 => 53,  389 => 52,  379 => 51,  366 => 47,  360 => 46,  356 => 45,  351 => 44,  341 => 43,  328 => 39,  322 => 38,  318 => 37,  313 => 36,  303 => 35,  290 => 31,  284 => 30,  280 => 29,  275 => 28,  265 => 27,  252 => 23,  246 => 22,  242 => 21,  237 => 20,  227 => 19,  217 => 58,  215 => 51,  212 => 50,  210 => 43,  207 => 42,  205 => 35,  202 => 34,  200 => 27,  197 => 26,  194 => 19,  184 => 18,  174 => 61,  170 => 59,  168 => 18,  165 => 17,  162 => 16,  152 => 15,  142 => 13,  136 => 10,  132 => 9,  128 => 8,  124 => 7,  121 => 6,  118 => 5,  108 => 4,  96 => 89,  94 => 63,  91 => 62,  89 => 15,  86 => 14,  84 => 4,  74 => 2,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_account_sidebar_inner %}
    <div class=\"{% if not headerWidget %}account-aside{% else %}header-account-menu{% endif %}\">
        <div class=\"card account-menu-inner\">
            {% block page_account_sidebar_header %}
                {% if not headerWidget %}
                    <div class=\"card-header account-aside-header\">
                        {{ \"account.greetings\"|trans|sw_sanitize }}
                        {{ context.customer.title }}
                        {{ context.customer.firstName }}
                        {{ context.customer.lastName }}
                    </div>
                {% endif %}
            {% endblock %}

            {% block page_account_sidebar_menu %}
                {% if not context.customer.guest %}
                    <div class=\"list-group list-group-flush account-aside-list-group\">
                        {% block page_account_sidebar_menu_inner %}
                            {% block page_account_sidebar_link_home %}
                                <a href=\"{{ path('frontend.account.home.page') }}\"
                                   title=\"{{ \"account.overviewLink\"|trans|striptags }}\"
                                   class=\"list-group-item list-group-item-action account-aside-item{% if activeRoute is same as('frontend.account.home.page') %} is-active{% endif %}\">
                                    {{ \"account.overviewLink\"|trans|sw_sanitize }}
                                </a>
                            {% endblock %}

                            {% block page_account_sidebar_link_profile %}
                                <a href=\"{{ path('frontend.account.profile.page') }}\"
                                   title=\"{{ \"account.profileLink\"|trans|striptags }}\"
                                   class=\"list-group-item list-group-item-action account-aside-item{% if activeRoute is same as('frontend.account.profile.page') %} is-active{% endif %}\">
                                    {{ \"account.profileLink\"|trans|sw_sanitize }}
                                </a>
                            {% endblock %}

                            {% block page_account_sidebar_link_address %}
                                <a href=\"{{ path('frontend.account.address.page') }}\"
                                   title=\"{{ \"account.addressLink\"|trans|striptags }}\"
                                   class=\"list-group-item list-group-item-action account-aside-item{% if activeRoute is same as('frontend.account.address.page') %} is-active{% endif %}\">
                                    {{ \"account.addressLink\"|trans|sw_sanitize }}
                                </a>
                            {% endblock %}

                            {% block page_account_sidebar_link_payment %}
                                <a href=\"{{ path('frontend.account.payment.page') }}\"
                                   title=\"{{ \"account.paymentLink\"|trans|striptags }}\"
                                   class=\"list-group-item list-group-item-action account-aside-item{% if activeRoute is same as('frontend.account.payment.page') %} is-active{% endif %}\">
                                    {{ \"account.paymentLink\"|trans|sw_sanitize }}
                                </a>
                            {% endblock %}

                            {% block page_account_sidebar_link_orders %}
                                <a href=\"{{ path('frontend.account.order.page') }}\"
                                   title=\"{{ \"account.ordersLink\"|trans|striptags }}\"
                                   class=\"list-group-item list-group-item-action account-aside-item{% if activeRoute is same as('frontend.account.order.page') %} is-active{% endif %}\">
                                    {{ \"account.ordersLink\"|trans|sw_sanitize }}
                                </a>
                            {% endblock %}
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}

            {% block page_account_sidebar_footer %}
                {% if context.customer %}
                    {% if not context.customer.guest %}
                        <div class=\"card-footer account-aside-footer\">
                            {% block page_account_sidebar_logout %}
                                <a href=\"{{ path('frontend.account.logout.page') }}\"
                                   class=\"btn btn-link account-aside-btn\">
                                    {% sw_icon 'log-out' %}
                                    {{ \"account.logout\"|trans|sw_sanitize }}
                                </a>
                            {% endblock %}
                        </div>
                    {% else %}
                        <div class=\"card-footer account-aside-footer account-guest-abort\">
                            {% block page_account_sidebar_guest_abort %}
                                <a href=\"{{ path('frontend.account.logout.page') }}\"
                                   data-account-guest-abort-button=\"true\"
                                   class=\"btn btn-link account-aside-btn\">
                                    {% sw_icon 'log-out' %}
                                    {{ \"account.guestAbort\"|trans|sw_sanitize }}
                                </a>
                            {% endblock %}
                        </div>
                    {% endif %}
                {% endif %}
            {% endblock %}
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/page/account/sidebar.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/page/account/sidebar.html.twig");
    }
}
