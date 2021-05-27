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
                  <h2 class=\"grid-header\"><b>Fiche Frais Forfaitisés du ";
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
                            <th><b>Libelle Forfait</b></th>
                            <th><b>Quantitée Frais Forfaitisés</b></th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 24
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fraisForfait"]) || array_key_exists("fraisForfait", $context) ? $context["fraisForfait"] : (function () { throw new RuntimeError('Variable "fraisForfait" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 25
            echo "                          <tr>
                              <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 26, $this->source); })()), 0, [], "array", false, false, false, 26), "libelle", [], "array", false, false, false, 26), "html", null, true);
            echo "</td>
                              <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 27, $this->source); })()), 0, [], "array", false, false, false, 27), "mois", [], "array", false, false, false, 27), "html", null, true);
            echo "</td>
                              <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "idFraisForfait", [], "array", false, false, false, 28), "html", null, true);
            echo "</td>
                              <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "quantite", [], "array", false, false, false, 29), "html", null, true);
            echo "</td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class=\"grid\">
                  <h2 class=\"grid-header\"><b>Fiche Frais Hors Forfaitisés du ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 39, $this->source); })()), 0, [], "array", false, false, false, 39), "mois", [], "array", false, false, false, 39), "html", null, true);
        echo "</b></h2>
                  <div class=\"item-wrapper\">
                    <div class=\"table-responsive\">
                      <table class=\"table info-table\">
                        <thead>
                          <tr>
                            <th><b>Etat</b></th>
                            <th><b>Date</b></th>
                            <th><b>Libelle Hors Forfait</b></th>
                            <th><b>Montant</b></th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 53
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fraisHorsForfait"]) || array_key_exists("fraisHorsForfait", $context) ? $context["fraisHorsForfait"] : (function () { throw new RuntimeError('Variable "fraisHorsForfait" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 54
            echo "                          <tr>
                              <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 55, $this->source); })()), 0, [], "array", false, false, false, 55), "libelle", [], "array", false, false, false, 55), "html", null, true);
            echo "</td>
                              <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 56, $this->source); })()), 0, [], "array", false, false, false, 56), "mois", [], "array", false, false, false, 56), "html", null, true);
            echo "</td>
                              <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "libelle", [], "array", false, false, false, 57), "html", null, true);
            echo "</td>
                              <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "montant", [], "array", false, false, false, 58), "html", null, true);
            echo "</td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                          
                        </tbody>
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
        return array (  194 => 61,  185 => 58,  181 => 57,  177 => 56,  173 => 55,  170 => 54,  165 => 53,  149 => 39,  140 => 32,  131 => 29,  127 => 28,  123 => 27,  119 => 26,  116 => 25,  111 => 24,  95 => 10,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
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
                  <h2 class=\"grid-header\"><b>Fiche Frais Forfaitisés du {{ficheFrais[0]['mois']}}</b></h2>
                  <div class=\"item-wrapper\">
                    <div class=\"table-responsive\">
                      <table class=\"table info-table\">
                        <thead>
                          <tr>
                            <th><b>Etat</b></th>
                            <th><b>Date</b></th>
                            <th><b>Libelle Forfait</b></th>
                            <th><b>Quantitée Frais Forfaitisés</b></th>
                          </tr>
                        </thead>
                        <tbody>
                          {# {{dump(ficheFrais)}} #}
                          {% for ligne in fraisForfait %}
                          <tr>
                              <td>{{ficheFrais[0]['libelle']}}</td>
                              <td>{{ficheFrais[0]['mois']}}</td>
                              <td>{{ligne['idFraisForfait']}}</td>
                              <td>{{ligne['quantite']}}</td>
                          </tr>
                          {% endfor %}
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class=\"grid\">
                  <h2 class=\"grid-header\"><b>Fiche Frais Hors Forfaitisés du {{ficheFrais[0]['mois']}}</b></h2>
                  <div class=\"item-wrapper\">
                    <div class=\"table-responsive\">
                      <table class=\"table info-table\">
                        <thead>
                          <tr>
                            <th><b>Etat</b></th>
                            <th><b>Date</b></th>
                            <th><b>Libelle Hors Forfait</b></th>
                            <th><b>Montant</b></th>
                          </tr>
                        </thead>
                        <tbody>
                          {# {{dump(ficheFrais)}} #}
                          {% for ligne in fraisHorsForfait %}
                          <tr>
                              <td>{{ficheFrais[0]['libelle']}}</td>
                              <td>{{ficheFrais[0]['mois']}}</td>
                              <td>{{ligne['libelle']}}</td>
                              <td>{{ligne['montant']}}</td>
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
