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

/* glav/index.html.twig */
class __TwigTemplate_4780a30f06d324d13bfe34df2b024fdc5dc433dec04bbaef829f16a276ec592c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'h1' => [$this, 'block_h1'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "glav/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "glav/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "glav/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Альбомы мероприятий";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "            ";
        $this->displayBlock('h1', $context, $blocks);
        // line 7
        echo "            <section class=\"content__gallery gallery\">
                <h2 class=\"gallery__title\"></h2>
                <div class=\"gallery__items\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p>Дата провдения: 1999г.</p>
                        </div>
                    </div>
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p>Дата провдения: 1999г.</p>
                        </div>
                    </div>
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p>Дата провдения: 1999г.</p>
                        </div>
                    </div>
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p>Дата провдения: 1999г.</p>
                        </div>
                    </div>
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p>Дата провдения: 1999г.</p>
                        </div>
                    </div>
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p>Дата провдения: 1999г.</p>
                        </div>
                    </div>
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p>Дата провдения: 1999г.</p>
                        </div>
                    </div>
                </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        echo " Альбомы мероприятий ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "glav/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 6,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Альбомы мероприятий{% endblock %}

{% block body %}
            {% block h1 %} Альбомы мероприятий {% endblock %}
            <section class=\"content__gallery gallery\">
                <h2 class=\"gallery__title\"></h2>
                <div class=\"gallery__items\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p>Дата провдения: 1999г.</p>
                        </div>
                    </div>
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p>Дата провдения: 1999г.</p>
                        </div>
                    </div>
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p>Дата провдения: 1999г.</p>
                        </div>
                    </div>
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p>Дата провдения: 1999г.</p>
                        </div>
                    </div>
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p>Дата провдения: 1999г.</p>
                        </div>
                    </div>
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p>Дата провдения: 1999г.</p>
                        </div>
                    </div>
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p>Дата провдения: 1999г.</p>
                        </div>
                    </div>
                </div>
{% endblock %}", "glav/index.html.twig", "D:\\IT_GANG_main\\templates\\glav\\index.html.twig");
    }
}
