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

/* common/dom.html.twig */
class __TwigTemplate_4e9ec68743e94a52939827bded552262aee2f597fba1d96153ac564e24462420 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/dom.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/dom.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>GSB-FRAIS ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    
  </head>

  <body class=\"header-fixed\">
    <nav class=\"t-header\">
      <div class=\"t-header-brand-wrapper\">
        <a href=\"index.html\">
          <img class=\"logo\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        echo "\" alt=\"\">
          <img class=\"logo-mini\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo_mini.svg"), "html", null, true);
        echo "\" alt=\"\">
        </a>
      </div>
      <div class=\"t-header-content-wrapper\">
        <div class=\"t-header-content\">
          <button class=\"t-header-toggler t-header-mobile-toggler d-block d-lg-none\">
            <i class=\"mdi mdi-menu\"></i>
          </button>
          <ul class=\"nav ml-auto\">
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link\" href=\"#\" id=\"appsDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"mdi mdi-apps mdi-1x\"></i>
              </a>
              <div class=\"dropdown-menu navbar-dropdown dropdown-menu-right\" aria-labelledby=\"appsDropdown\">
                <div class=\"dropdown-header\">
                  <h6 class=\"dropdown-title\">Paramètres</h6>
                </div>
                <div class=\"dropdown-body border-top pt-0\">
                  <a class=\"dropdown-grid\">
                    <i class=\"grid-icon mdi mdi-jira mdi-2x\"></i>
                    <span class=\"grid-tittle\">Profile</span>
                  </a>
                  <a class=\"dropdown-grid\">
                    <i class=\"grid-icon mdi mdi-trello mdi-2x\"></i>
                    <span class=\"grid-tittle\">Déconnexion</span>
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class=\"page-body\">
      <div class=\"sidebar\">
        <div class=\"user-profile\">
          <div class=\"display-avatar animated-avatar\">
            <img class=\"profile-img img-lg rounded-circle\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile/male/image_1.png"), "html", null, true);
        echo "\" alt=\"profile image\">
          </div>
          <div class=\"info-wrapper\">
            <p class=\"user-name\">";
        // line 61
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "session", [], "any", false, false, false, 61), "get", [0 => "nom"], "method", false, false, false, 61) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "session", [], "any", false, false, false, 61), "get", [0 => "prenom"], "method", false, false, false, 61)), "html", null, true);
        echo "</p>
          </div>
        </div>
        <ul class=\"navigation-menu\">
          <li class=\"nav-category-divider\">Tableau de bord</li>
          <li>
            <a href=\"#\">
              <span class=\"link-title\">Ajouter une fiche</span>
              <i class=\"mdi mdi-folder-plus link-icon\"></i>
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "    </div>

    ";
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "  </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/iconfonts/mdi/css/materialdesignicons.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendor.addons.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/shared/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo_1/style.css"), "html", null, true);
        echo "\">
        <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 75
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/core.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.addons.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/chartjs/Chart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/charts/chartjs.addon.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/template.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboard.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "common/dom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 86,  263 => 85,  259 => 84,  255 => 83,  251 => 82,  247 => 81,  242 => 80,  232 => 79,  221 => 75,  211 => 74,  199 => 12,  195 => 11,  191 => 10,  187 => 9,  182 => 8,  172 => 7,  154 => 6,  143 => 88,  141 => 79,  137 => 77,  135 => 74,  119 => 61,  113 => 58,  73 => 21,  69 => 20,  60 => 13,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>GSB-FRAIS {% block title %}{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset(\"assets/vendors/iconfonts/mdi/css/materialdesignicons.css\") }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset(\"assets/vendors/css/vendor.addons.css\") }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/shared/style.css\") }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/demo_1/style.css\") }}\">
        <link rel=\"shortcut icon\" href=\"{{ asset(\"assets/images/favicon.ico\") }}\" />
    {% endblock %}    
  </head>

  <body class=\"header-fixed\">
    <nav class=\"t-header\">
      <div class=\"t-header-brand-wrapper\">
        <a href=\"index.html\">
          <img class=\"logo\" src=\"{{ asset(\"assets/images/logo.svg\")}}\" alt=\"\">
          <img class=\"logo-mini\" src=\"{{ asset(\"assets/images/logo_mini.svg\")}}\" alt=\"\">
        </a>
      </div>
      <div class=\"t-header-content-wrapper\">
        <div class=\"t-header-content\">
          <button class=\"t-header-toggler t-header-mobile-toggler d-block d-lg-none\">
            <i class=\"mdi mdi-menu\"></i>
          </button>
          <ul class=\"nav ml-auto\">
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link\" href=\"#\" id=\"appsDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"mdi mdi-apps mdi-1x\"></i>
              </a>
              <div class=\"dropdown-menu navbar-dropdown dropdown-menu-right\" aria-labelledby=\"appsDropdown\">
                <div class=\"dropdown-header\">
                  <h6 class=\"dropdown-title\">Paramètres</h6>
                </div>
                <div class=\"dropdown-body border-top pt-0\">
                  <a class=\"dropdown-grid\">
                    <i class=\"grid-icon mdi mdi-jira mdi-2x\"></i>
                    <span class=\"grid-tittle\">Profile</span>
                  </a>
                  <a class=\"dropdown-grid\">
                    <i class=\"grid-icon mdi mdi-trello mdi-2x\"></i>
                    <span class=\"grid-tittle\">Déconnexion</span>
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class=\"page-body\">
      <div class=\"sidebar\">
        <div class=\"user-profile\">
          <div class=\"display-avatar animated-avatar\">
            <img class=\"profile-img img-lg rounded-circle\" src=\"{{ asset(\"assets/images/profile/male/image_1.png\")}}\" alt=\"profile image\">
          </div>
          <div class=\"info-wrapper\">
            <p class=\"user-name\">{{ app.session.get('nom') ~' '~ app.session.get('prenom')}}</p>
          </div>
        </div>
        <ul class=\"navigation-menu\">
          <li class=\"nav-category-divider\">Tableau de bord</li>
          <li>
            <a href=\"#\">
              <span class=\"link-title\">Ajouter une fiche</span>
              <i class=\"mdi mdi-folder-plus link-icon\"></i>
            </a>
          </li>
        </ul>
      </div>
      {% block body %}

      {% endblock %}
    </div>

    {% block javascripts %}
        <script src=\"{{ asset(\"assets/vendors/js/core.js\")}}\"></script>
        <script src=\"{{ asset(\"assets/vendors/apexcharts/apexcharts.min.js\")}}\"></script>
        <script src=\"{{ asset(\"assets/vendors/js/vendor.addons.js\")}}\"></script>
        <script src=\"{{ asset(\"assets/vendors/chartjs/Chart.min.js\")}}\"></script>
        <script src=\"{{ asset(\"assets/js/charts/chartjs.addon.js\")}}\"></script>
        <script src=\"{{ asset(\"assets/js/template.js\")}}\"></script>
        <script src=\"{{ asset(\"assets/js/dashboard.js\")}}\"></script>
    {% endblock %}
  </body>
</html>", "common/dom.html.twig", "/var/www/html/GSB-FRAIS/templates/common/dom.html.twig");
    }
}
