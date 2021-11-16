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

/* add_album/index.html.twig */
class __TwigTemplate_2b18eba6cc96118bb99fbb09af038efe5bb2b72dcb3c966d37d329b64adc5d62 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "add_album/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "add_album/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/dropzone@5/dist/min/dropzone.min.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Создание альбома</title>
</head>
<body>
<div class=\"wrapper\">
    <header class=\"header\">
        <div class=\"header__logo\">
            <a href=\"https://lk.spmi.ru/stream/\">
                <img src=\"img/icon/logo.svg\" alt=\"\">
            </a>
        </div>
        <div class=\"back__burger\">
            <div class=\"header__burger\" onclick=\"changeBurger()\">
                <span></span>
            </div>
        </div>
        <nav class=\"header__menu\">
            <ul class=\"header__list\">
                <li id=\"change_element1\">
                    <a href=\"index.html\" class=\"header__link\" onmouseover=\"addBorderElement('change_element1')\" onmouseout=\"removeBorderElement('change_element1')\">Главная</a>
                </li>
                <li id=\"change_element2\">
                    <a href=\"https://spmi.ru/\" class=\"header__link\" onmouseover=\"addBorderElement('change_element2')\" onmouseout=\"removeBorderElement('change_element2')\">Сайт Горного Университета</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class=\"main add__img\">
        <section class=\"sidebar\">
            <ul class=\"sidebar__menu\">
                <li>
                    <a href=\"\" class=\"sidebar__link\">Главная страница клиентской части</a>
                </li>
                <li>
                    <a href=\"\" class=\"sidebar__link\">Главная страница администратианой чати</a>
                </li>
                <li>
                    <a href=\"\" class=\"sidebar__link\">Выход</a>
                </li>
            </ul>
        </section>
        <section class=\"content\">
            <h1 class=\"content__title\">Создание альбома</h1>
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_start');
        echo "
            ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        echo "

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

<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dropzone.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "add_album/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 74,  126 => 73,  102 => 52,  98 => 51,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/dropzone@5/dist/min/dropzone.min.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Создание альбома</title>
</head>
<body>
<div class=\"wrapper\">
    <header class=\"header\">
        <div class=\"header__logo\">
            <a href=\"https://lk.spmi.ru/stream/\">
                <img src=\"img/icon/logo.svg\" alt=\"\">
            </a>
        </div>
        <div class=\"back__burger\">
            <div class=\"header__burger\" onclick=\"changeBurger()\">
                <span></span>
            </div>
        </div>
        <nav class=\"header__menu\">
            <ul class=\"header__list\">
                <li id=\"change_element1\">
                    <a href=\"index.html\" class=\"header__link\" onmouseover=\"addBorderElement('change_element1')\" onmouseout=\"removeBorderElement('change_element1')\">Главная</a>
                </li>
                <li id=\"change_element2\">
                    <a href=\"https://spmi.ru/\" class=\"header__link\" onmouseover=\"addBorderElement('change_element2')\" onmouseout=\"removeBorderElement('change_element2')\">Сайт Горного Университета</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class=\"main add__img\">
        <section class=\"sidebar\">
            <ul class=\"sidebar__menu\">
                <li>
                    <a href=\"\" class=\"sidebar__link\">Главная страница клиентской части</a>
                </li>
                <li>
                    <a href=\"\" class=\"sidebar__link\">Главная страница администратианой чати</a>
                </li>
                <li>
                    <a href=\"\" class=\"sidebar__link\">Выход</a>
                </li>
            </ul>
        </section>
        <section class=\"content\">
            <h1 class=\"content__title\">Создание альбома</h1>
            {{ form_start(form) }}
            {{ form_end(form) }}

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

<script src=\"{{ asset('js/dropzone.js') }}\"></script>
<script src=\"{{ asset('js/app.js') }}\"></script>
</body>
</html>
", "add_album/index.html.twig", "D:\\IT_GANG_main\\templates\\add_album\\index.html.twig");
    }
}
