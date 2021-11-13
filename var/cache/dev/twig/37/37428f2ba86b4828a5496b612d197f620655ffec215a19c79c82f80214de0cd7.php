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

/* gallary_page/index.html.twig */
class __TwigTemplate_ab8b76bcfe0164cef8913a2137a47e272051821078b1823c7e18421721690d17 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'title' => [$this, 'block_title'],
            'h1' => [$this, 'block_h1'],
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallary_page/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallary_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gallary_page/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/lightgallery.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Фотографии альбома";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        // line 10
        echo "    Фотографии альбома
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <div id=\"lightgallery\" class=\"album__items\">
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg"), "html", null, true);
        echo "\" class=\"album__item\">
            <img class=\"img-responsive\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </a>
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ba8484ff670effa08c3c2b68e6b3f28e.jpeg"), "html", null, true);
        echo "\" class=\"album__item\">
            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ba8484ff670effa08c3c2b68e6b3f28e.jpeg"), "html", null, true);
        echo "\" alt=\"\">
        </a>
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/DXMnAHiWkAAbH8f.jpg"), "html", null, true);
        echo "\" class=\"album__item\">
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/DXMnAHiWkAAbH8f.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </a>
        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/putin-issues-chilling-warning-on-rising-nuclear-war-threat-2018-12-20.jpg"), "html", null, true);
        echo "\" class=\"album__item\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/putin-issues-chilling-warning-on-rising-nuclear-war-threat-2018-12-20.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </a>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Vladimir-Putin-009.jpg"), "html", null, true);
        echo "\" class=\"album__item\">
            <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Vladimir-Putin-009.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </a>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg"), "html", null, true);
        echo "\" class=\"album__item\">
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </a>
        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg"), "html", null, true);
        echo "\" class=\"album__item\">
            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </a>
        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg"), "html", null, true);
        echo "\" class=\"album__item\">
            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 43
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/lightgallery.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gallary_page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 43,  219 => 42,  205 => 37,  201 => 36,  196 => 34,  192 => 33,  187 => 31,  183 => 30,  178 => 28,  174 => 27,  169 => 25,  165 => 24,  160 => 22,  156 => 21,  151 => 19,  147 => 18,  142 => 16,  138 => 15,  135 => 14,  125 => 13,  114 => 10,  104 => 9,  85 => 7,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block style %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightgallery.min.css') }}\">
{% endblock %}

{% block title %}Фотографии альбома{% endblock %}

{% block h1 %}
    Фотографии альбома
{% endblock %}

{% block body %}
    <div id=\"lightgallery\" class=\"album__items\">
        <a href=\"{{ asset('img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg') }}\" class=\"album__item\">
            <img class=\"img-responsive\" src=\"{{ asset('img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg') }}\" alt=\"\">
        </a>
        <a href=\"{{ asset('img/ba8484ff670effa08c3c2b68e6b3f28e.jpeg') }}\" class=\"album__item\">
            <img src=\"{{ asset('img/ba8484ff670effa08c3c2b68e6b3f28e.jpeg') }}\" alt=\"\">
        </a>
        <a href=\"{{ asset('img/DXMnAHiWkAAbH8f.jpg') }}\" class=\"album__item\">
            <img src=\"{{ asset('img/DXMnAHiWkAAbH8f.jpg') }}\" alt=\"\">
        </a>
        <a href=\"{{ asset('img/putin-issues-chilling-warning-on-rising-nuclear-war-threat-2018-12-20.jpg') }}\" class=\"album__item\">
            <img src=\"{{ asset('img/putin-issues-chilling-warning-on-rising-nuclear-war-threat-2018-12-20.jpg') }}\" alt=\"\">
        </a>
        <a href=\"{{ asset('img/Vladimir-Putin-009.jpg') }}\" class=\"album__item\">
            <img src=\"{{ asset('img/Vladimir-Putin-009.jpg') }}\" alt=\"\">
        </a>
        <a href=\"{{ asset('img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg') }}\" class=\"album__item\">
            <img src=\"{{ asset('img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg') }}\" alt=\"\">
        </a>
        <a href=\"{{ asset('img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg') }}\" class=\"album__item\">
            <img src=\"{{ asset('img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg') }}\" alt=\"\">
        </a>
        <a href=\"{{ asset('img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg') }}\" class=\"album__item\">
            <img src=\"{{ asset('img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg') }}\" alt=\"\">
        </a>
    </div>
{% endblock %}

{% block script %}
    <script src=\"{{ asset('js/lightgallery.min.js') }}\"></script>
{% endblock %}


", "gallary_page/index.html.twig", "D:\\IT_GANG_main\\templates\\gallary_page\\index.html.twig");
    }
}
