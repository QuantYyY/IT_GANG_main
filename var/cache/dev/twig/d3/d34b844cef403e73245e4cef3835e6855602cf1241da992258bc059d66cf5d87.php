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

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <section id=\"for_search\" class=\"content__gallery gallery\">
        <h2 class=\"gallery__title\"></h2>
        <div class=\"sort__search\">
            <input class=\"search\" placeholder=\"Поиск\" />
            <div class=\"sort__button\">
                <!-- <button class=\"sort\" data-sort=\"date\">Сортировать по дате проведения</button> -->
                <button class=\"sort\" data-sort=\"name__album\">Сортировать по названию альбома</button>
            </div>
        </div>
        <div class=\"not-found\" style=\"display:none\">По вашему запросу ничего не найдено</div>
        <ul class=\"gallery__items list\">
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">А</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">31/12/98</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/ba8484ff670effa08c3c2b68e6b3f28e.jpeg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Б</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">31/12/99</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/DXMnAHiWkAAbH8f.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">В</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">14/06/12</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/putin-issues-chilling-warning-on-rising-nuclear-war-threat-2018-12-20.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Г</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">06/01/02</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/Vladimir-Putin-009.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Д</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">21/05/05</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Е</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">15/07/23</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Ё</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">04/12/09</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Ё</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">04/12/09</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Ё</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">04/12/09</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Ё</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">04/12/09</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Ё</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">04/12/09</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Ё</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">04/12/09</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Ё</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">04/12/09</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Ё</p>
                            <p>Дата провдения: <span class=\"date\">04/12/09</span></p>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 205
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 206
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/List.js"), "html", null, true);
        echo "\"></script>
";
        
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
        return array (  324 => 206,  314 => 205,  109 => 8,  99 => 7,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Альбомы мероприятий{% endblock %}

{% block h1 %} Альбомы мероприятий {% endblock %}

{% block body %}
    <section id=\"for_search\" class=\"content__gallery gallery\">
        <h2 class=\"gallery__title\"></h2>
        <div class=\"sort__search\">
            <input class=\"search\" placeholder=\"Поиск\" />
            <div class=\"sort__button\">
                <!-- <button class=\"sort\" data-sort=\"date\">Сортировать по дате проведения</button> -->
                <button class=\"sort\" data-sort=\"name__album\">Сортировать по названию альбома</button>
            </div>
        </div>
        <div class=\"not-found\" style=\"display:none\">По вашему запросу ничего не найдено</div>
        <ul class=\"gallery__items list\">
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">А</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">31/12/98</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/ba8484ff670effa08c3c2b68e6b3f28e.jpeg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Б</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">31/12/99</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/DXMnAHiWkAAbH8f.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">В</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">14/06/12</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/putin-issues-chilling-warning-on-rising-nuclear-war-threat-2018-12-20.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Г</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">06/01/02</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/Vladimir-Putin-009.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Д</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">21/05/05</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Е</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">15/07/23</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Ё</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">04/12/09</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Ё</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">04/12/09</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Ё</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">04/12/09</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Ё</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">04/12/09</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Ё</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">04/12/09</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Ё</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">04/12/09</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Ё</p>
                            <p>Дата провдения: <span class=\"date timestamp\" data-timestamp=\"1427713871\">04/12/09</span></p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/glav/gallery\">
                    <div class=\"gallery__item\">
                        <div class=\"gallary_item--img\">
                            <img src=\"img/1756087339_0_13_3071_1740_1920x0_80_0_0_6bbd7a9c74b4c48be2d1fb512a81a369.jpg\" alt=\"\">
                        </div>
                        <div class=\"gallery__item--text\">
                            <p class=\"name__album\">Ё</p>
                            <p>Дата провдения: <span class=\"date\">04/12/09</span></p>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </section>
{% endblock %}

{% block script %}
    <script src=\"{{ asset('js/List.js') }}\"></script>
{% endblock %}", "glav/index.html.twig", "D:\\IT_GANG_main\\templates\\glav\\index.html.twig");
    }
}
