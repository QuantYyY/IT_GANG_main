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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "glav/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "glav/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Альбомы мероприятий</title>
</head>
<body>
<div class=\"wrapper\">
    <header class=\"header\">
        <div class=\"header__logo\">
            <a href=\"https://lk.spmi.ru/stream/\">
                <img src=\"img/icon/logo.svg\" alt=\"\">
            </a>
        </div>
        <nav class=\"header__menu\">
            <ul class=\"header__list\">
                <li id=\"change_element1\">
                    <a href=\"\" class=\"header__link\" onmouseover=\"addBorderElement('change_element1')\" onmouseout=\"removeBorderElement('change_element1')\">Главная</a>
                </li>
                <li id=\"change_element2\">
                    <a href=\"https://spmi.ru/\" class=\"header__link\" onmouseover=\"addBorderElement('change_element2')\" onmouseout=\"removeBorderElement('change_element2')\">Сайт Горного Университета</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class=\"main\">
        <section class=\"content\">
            <h1 class=\"content__title\">Альбомы мероприятий</h1>
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
            </section>
        </section>
    </div>
    <footer class=\"footer_\">
        <ul class=\"footer__links\">
            <li>
                <a href=\"\" class=\"footer__link\">Главная</a>
            </li>
            <li>
                <a href=\"\" class=\"footer__link\">Сайт Горного Университета</a>
            </li>
        </ul>
        <div class=\"footer__share\">
            <p>Поделиться</p>
            <script src=\"https://yastatic.net/share2/share.js\"></script>
            <div class=\"ya-share2\" data-curtain data-services=\"vkontakte,facebook,odnoklassniki,twitter,whatsapp\"></div>
        </div>
    </footer>
</div>
<script src=\"js/app.js\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "glav/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Альбомы мероприятий</title>
</head>
<body>
<div class=\"wrapper\">
    <header class=\"header\">
        <div class=\"header__logo\">
            <a href=\"https://lk.spmi.ru/stream/\">
                <img src=\"img/icon/logo.svg\" alt=\"\">
            </a>
        </div>
        <nav class=\"header__menu\">
            <ul class=\"header__list\">
                <li id=\"change_element1\">
                    <a href=\"\" class=\"header__link\" onmouseover=\"addBorderElement('change_element1')\" onmouseout=\"removeBorderElement('change_element1')\">Главная</a>
                </li>
                <li id=\"change_element2\">
                    <a href=\"https://spmi.ru/\" class=\"header__link\" onmouseover=\"addBorderElement('change_element2')\" onmouseout=\"removeBorderElement('change_element2')\">Сайт Горного Университета</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class=\"main\">
        <section class=\"content\">
            <h1 class=\"content__title\">Альбомы мероприятий</h1>
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
            </section>
        </section>
    </div>
    <footer class=\"footer_\">
        <ul class=\"footer__links\">
            <li>
                <a href=\"\" class=\"footer__link\">Главная</a>
            </li>
            <li>
                <a href=\"\" class=\"footer__link\">Сайт Горного Университета</a>
            </li>
        </ul>
        <div class=\"footer__share\">
            <p>Поделиться</p>
            <script src=\"https://yastatic.net/share2/share.js\"></script>
            <div class=\"ya-share2\" data-curtain data-services=\"vkontakte,facebook,odnoklassniki,twitter,whatsapp\"></div>
        </div>
    </footer>
</div>
<script src=\"js/app.js\"></script>
</body>
</html>", "glav/index.html.twig", "D:\\IT_GANG_main\\templates\\glav\\index.html.twig");
    }
}
