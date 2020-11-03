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

/* profile/profile.html.twig */
class __TwigTemplate_688f774b1c62352f97f431627f15077b402f3ac173706101548576bcae041545 extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "common/dom.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $this->parent = $this->loadTemplate("common/dom.html.twig", "profile/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "- Profile ";
        
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
        echo "    <div class=\"page-content-wrapper\">
        <div class=\"page-content-wrapper-inner\">
          <div class=\"content-viewport\">
            <div class=\"row\">
              <div class=\"col-12 py-5\">
                <h4>Mes fiches de frais</h4>
                <p class=\"text-gray\">Mes frais de déplacement en un seul clique...</p>
              </div>
              <div class=\"col-md-12 equel-grid\">
                <div class=\"grid\">
                  <div class=\"grid-body py-3\">
                    <p class=\"card-title ml-n1\">Order History</p>
                  </div>
                  <div class=\"table-responsive\">
                    <table class=\"table table-hover table-sm\">
                      <thead>
                        <tr class=\"solid-header\">
                          <th colspan=\"2\" class=\"pl-4\">Customer</th>
                          <th>Order No</th>
                          <th>Purchased On</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class=\"pr-0 pl-4\">
                            <img class=\"profile-img img-sm\" src=\"../assets/images/profile/male/image_4.png\" alt=\"profile image\">
                          </td>
                          <td class=\"pl-md-0\">
                            <small class=\"text-black font-weight-medium d-block\">Barbara Curtis</small>
                            <span class=\"text-gray\">
                              <span class=\"status-indicator rounded-indicator small bg-primary\"></span>Account Deactivated </span>
                          </td>
                          <td>
                            <small>8523537435</small>
                          </td>
                          <td> Just Now </td>
                        </tr>
                        <tr>
                          <td class=\"pr-0 pl-4\">
                            <img class=\"profile-img img-sm\" src=\"../assets/images/profile/male/image_3.png\" alt=\"profile image\">
                          </td>
                          <td class=\"pl-md-0\">
                            <small class=\"text-black font-weight-medium d-block\">Charlie Hawkins</small>
                            <span class=\"text-gray\">
                              <span class=\"status-indicator rounded-indicator small bg-success\"></span>Email Verified </span>
                          </td>
                          <td>
                            <small>9537537436</small>
                          </td>
                          <td> Mar 04, 2018 11:37am </td>
                        </tr>
                        <tr>
                          <td class=\"pr-0 pl-4\">
                            <img class=\"profile-img img-sm\" src=\"../assets/images/profile/female/image_2.png\" alt=\"profile image\">
                          </td>
                          <td class=\"pl-md-0\">
                            <small class=\"text-black font-weight-medium d-block\">Nina Bates</small>
                            <span class=\"text-gray\">
                              <span class=\"status-indicator rounded-indicator small bg-warning\"></span>Payment On Hold </span>
                          </td>
                          <td>
                            <small>7533567437</small>
                          </td>
                          <td> Mar 13, 2018 9:41am </td>
                        </tr>
                        <tr>
                          <td class=\"pr-0 pl-4\">
                            <img class=\"profile-img img-sm\" src=\"../assets/images/profile/male/image_10.png\" alt=\"profile image\">
                          </td>
                          <td class=\"pl-md-0\">
                            <small class=\"text-black font-weight-medium d-block\">Hester Richards</small>
                            <span class=\"text-gray\">
                              <span class=\"status-indicator rounded-indicator small bg-success\"></span>Email Verified </span>
                          </td>
                          <td>
                            <small>5673467743</small>
                          </td>
                          <td> Feb 21, 2018 8:34am </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <a class=\"border-top px-3 py-2 d-block text-gray\" href=\"#\">
                    <small class=\"font-weight-medium\"><i class=\"mdi mdi-chevron-down mr-2\"></i>View All Order History</small>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'common/dom.html.twig'%}
{% block title %}- Profile {% endblock %}

    
{% block body %}
    <div class=\"page-content-wrapper\">
        <div class=\"page-content-wrapper-inner\">
          <div class=\"content-viewport\">
            <div class=\"row\">
              <div class=\"col-12 py-5\">
                <h4>Mes fiches de frais</h4>
                <p class=\"text-gray\">Mes frais de déplacement en un seul clique...</p>
              </div>
              <div class=\"col-md-12 equel-grid\">
                <div class=\"grid\">
                  <div class=\"grid-body py-3\">
                    <p class=\"card-title ml-n1\">Order History</p>
                  </div>
                  <div class=\"table-responsive\">
                    <table class=\"table table-hover table-sm\">
                      <thead>
                        <tr class=\"solid-header\">
                          <th colspan=\"2\" class=\"pl-4\">Customer</th>
                          <th>Order No</th>
                          <th>Purchased On</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class=\"pr-0 pl-4\">
                            <img class=\"profile-img img-sm\" src=\"../assets/images/profile/male/image_4.png\" alt=\"profile image\">
                          </td>
                          <td class=\"pl-md-0\">
                            <small class=\"text-black font-weight-medium d-block\">Barbara Curtis</small>
                            <span class=\"text-gray\">
                              <span class=\"status-indicator rounded-indicator small bg-primary\"></span>Account Deactivated </span>
                          </td>
                          <td>
                            <small>8523537435</small>
                          </td>
                          <td> Just Now </td>
                        </tr>
                        <tr>
                          <td class=\"pr-0 pl-4\">
                            <img class=\"profile-img img-sm\" src=\"../assets/images/profile/male/image_3.png\" alt=\"profile image\">
                          </td>
                          <td class=\"pl-md-0\">
                            <small class=\"text-black font-weight-medium d-block\">Charlie Hawkins</small>
                            <span class=\"text-gray\">
                              <span class=\"status-indicator rounded-indicator small bg-success\"></span>Email Verified </span>
                          </td>
                          <td>
                            <small>9537537436</small>
                          </td>
                          <td> Mar 04, 2018 11:37am </td>
                        </tr>
                        <tr>
                          <td class=\"pr-0 pl-4\">
                            <img class=\"profile-img img-sm\" src=\"../assets/images/profile/female/image_2.png\" alt=\"profile image\">
                          </td>
                          <td class=\"pl-md-0\">
                            <small class=\"text-black font-weight-medium d-block\">Nina Bates</small>
                            <span class=\"text-gray\">
                              <span class=\"status-indicator rounded-indicator small bg-warning\"></span>Payment On Hold </span>
                          </td>
                          <td>
                            <small>7533567437</small>
                          </td>
                          <td> Mar 13, 2018 9:41am </td>
                        </tr>
                        <tr>
                          <td class=\"pr-0 pl-4\">
                            <img class=\"profile-img img-sm\" src=\"../assets/images/profile/male/image_10.png\" alt=\"profile image\">
                          </td>
                          <td class=\"pl-md-0\">
                            <small class=\"text-black font-weight-medium d-block\">Hester Richards</small>
                            <span class=\"text-gray\">
                              <span class=\"status-indicator rounded-indicator small bg-success\"></span>Email Verified </span>
                          </td>
                          <td>
                            <small>5673467743</small>
                          </td>
                          <td> Feb 21, 2018 8:34am </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <a class=\"border-top px-3 py-2 d-block text-gray\" href=\"#\">
                    <small class=\"font-weight-medium\"><i class=\"mdi mdi-chevron-down mr-2\"></i>View All Order History</small>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
{% endblock %}", "profile/profile.html.twig", "/var/www/html/GSB-FRAIS/templates/profile/profile.html.twig");
    }
}
