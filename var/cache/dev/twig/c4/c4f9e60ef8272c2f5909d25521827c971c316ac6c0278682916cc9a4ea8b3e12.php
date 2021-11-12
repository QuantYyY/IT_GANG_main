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

/* base.html.twig */
class __TwigTemplate_7fe7609e818c8bfcc564068a9656058f15bf8c4466181e6964b735111196fdb8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'h1' => [$this, 'block_h1'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
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
                <h1 class=\"content__title\">";
        // line 31
        $this->displayBlock('h1', $context, $blocks);
        echo "</h1>
            ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "            </section>
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
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 32,  141 => 31,  122 => 8,  90 => 33,  88 => 32,  84 => 31,  58 => 8,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Welcome!{% endblock %}</title>
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
                <h1 class=\"content__title\">{% block h1 %}{% endblock %}</h1>
            {% block body %}{% endblock %}
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
</html>

", "base.html.twig", "D:\\IT_GANG_main\\templates\\base.html.twig");
    }
}
