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

/* visiteur/menu/consulter/afficher/afficherFicheFrais.html.twig */
class __TwigTemplate_0ced2eb2592d49f1cde759adeb49c854bb449a9e099f8ec37ae91ce04c87cae0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/menu/consulter/afficher/afficherFicheFrais.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/menu/consulter/afficher/afficherFicheFrais.html.twig"));

        $this->parent = $this->loadTemplate("common/dom.html.twig", "visiteur/menu/consulter/afficher/afficherFicheFrais.html.twig", 1);
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

        echo "- Visiteur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div class=\"authentication-theme auth-style_1\">
        <div class=\"row\">
            <div class=\"col-lg-10 col-md-7 col-sm-9 col-11 mx-auto\">
                <div class=\"grid\">
                  <h2 class=\"grid-header\"><b>Fiche du ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 10, $this->source); })()), 0, [], "array", false, false, false, 10), "mois", [], "array", false, false, false, 10), "html", null, true);
        echo "</b></h2>
                  <div class=\"item-wrapper\">
                    <div class=\"table-responsive\">
                      <table class=\"table info-table\">
                        <thead>
                          <tr>
                            <th><b>Etat</b></th>
                            <th><b>Date</b></th>
                            <th><b>Quantitée Frais Forfaitisés</b></th>
                            <th><b>Quantitée Frais non Forfaitisés</b></th>
                            <th><b>Montant</b></th>
                            <th><b>Libelle</b></th>
                            <th><b>Date d'engagement</b></th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 27
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 28
            echo "                          <tr>
                              <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], 11, [], "array", false, false, false, 29), "html", null, true);
            echo "</td>
                              <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "mois", [], "array", false, false, false, 30), "html", null, true);
            echo "</td>
                              <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "quantite", [], "array", false, false, false, 31), "html", null, true);
            echo "</td>
                              <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "quantite", [], "array", false, false, false, 32), "html", null, true);
            echo "</td>
                              <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "montantValide", [], "array", false, false, false, 33), "html", null, true);
            echo "</td>
                              <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], 15, [], "array", false, false, false, 34), "html", null, true);
            echo "</td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                        </tbody>
                      </table>
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
        return "visiteur/menu/consulter/afficher/afficherFicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 37,  142 => 34,  138 => 33,  134 => 32,  130 => 31,  126 => 30,  122 => 29,  119 => 28,  114 => 27,  95 => 10,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'common/dom.html.twig'%}
{% block title %}- Visiteur{% endblock %}

{% block body %}

    <div class=\"authentication-theme auth-style_1\">
        <div class=\"row\">
            <div class=\"col-lg-10 col-md-7 col-sm-9 col-11 mx-auto\">
                <div class=\"grid\">
                  <h2 class=\"grid-header\"><b>Fiche du {{ficheFrais[0]['mois']}}</b></h2>
                  <div class=\"item-wrapper\">
                    <div class=\"table-responsive\">
                      <table class=\"table info-table\">
                        <thead>
                          <tr>
                            <th><b>Etat</b></th>
                            <th><b>Date</b></th>
                            <th><b>Quantitée Frais Forfaitisés</b></th>
                            <th><b>Quantitée Frais non Forfaitisés</b></th>
                            <th><b>Montant</b></th>
                            <th><b>Libelle</b></th>
                            <th><b>Date d'engagement</b></th>
                          </tr>
                        </thead>
                        <tbody>
                          {# {{dump(ficheFrais)}} #}
                          {% for ligne in ficheFrais %}
                          <tr>
                              <td>{{ligne[11]}}</td>
                              <td>{{ligne['mois']}}</td>
                              <td>{{ligne['quantite']}}</td>
                              <td>{{ligne['quantite']}}</td>
                              <td>{{ligne['montantValide']}}</td>
                              <td>{{ligne[15]}}</td>
                          </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

{% endblock %}", "visiteur/menu/consulter/afficher/afficherFicheFrais.html.twig", "/var/www/html/GSB-FRAIS/templates/visiteur/menu/consulter/afficher/afficherFicheFrais.html.twig");
    }
}
