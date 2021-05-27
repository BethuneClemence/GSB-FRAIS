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

/* visiteur/menu/saisir/saisirFicheFrais.html.twig */
class __TwigTemplate_ab75053e1ceb98008a64509d55e4e274e020817c9e0e59545603ff6fa6e6ba5a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/menu/saisir/saisirFicheFrais.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/menu/saisir/saisirFicheFrais.html.twig"));

        $this->parent = $this->loadTemplate("common/dom.html.twig", "visiteur/menu/saisir/saisirFicheFrais.html.twig", 1);
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
        <h1 style=\"text-align:center; margin-bottom:40px; color: #114da6; \"><b>Saisir une fiche</b></h1>
        <div class=\"row\">
            <div class=\"col-lg-5 col-md-7 col-sm-9 col-6 mx-auto\">
                <div class=\"grid\">
                    <div class=\"grid-body\">
                        <div class=\"item-wrapper\">
                            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
                                
                                <h2 class=\"grid-header\">Frais au forfait : </h2>
                                
                                <div class =\"form-group\">                          
                                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 18, $this->source); })()), "mois", [], "any", false, false, false, 18), 'row', ["value" => (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 18, $this->source); })()), "disabled" => "disabled"]);
        echo "
                                </div>

                                
                                    <div class =\"form-group\">                          
                                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 23, $this->source); })()), "forfaitEtape", [], "any", false, false, false, 23), 'row', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ficheFraisForfait"]) || array_key_exists("ficheFraisForfait", $context) ? $context["ficheFraisForfait"] : (function () { throw new RuntimeError('Variable "ficheFraisForfait" does not exist.', 23, $this->source); })()), 0, [], "array", false, false, false, 23), "quantite", [], "array", false, false, false, 23)]);
        echo "
                                    </div>
                                    <div class =\"form-group\">                          
                                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 26, $this->source); })()), "fraisKm", [], "any", false, false, false, 26), 'row', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ficheFraisForfait"]) || array_key_exists("ficheFraisForfait", $context) ? $context["ficheFraisForfait"] : (function () { throw new RuntimeError('Variable "ficheFraisForfait" does not exist.', 26, $this->source); })()), 1, [], "array", false, false, false, 26), "quantite", [], "array", false, false, false, 26)]);
        echo "
                                    </div>
                                    <div class =\"form-group\">                          
                                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 29, $this->source); })()), "nuiteeHotel", [], "any", false, false, false, 29), 'row', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ficheFraisForfait"]) || array_key_exists("ficheFraisForfait", $context) ? $context["ficheFraisForfait"] : (function () { throw new RuntimeError('Variable "ficheFraisForfait" does not exist.', 29, $this->source); })()), 2, [], "array", false, false, false, 29), "quantite", [], "array", false, false, false, 29)]);
        echo "
                                    </div>
                                    <div class =\"form-group\">                          
                                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 32, $this->source); })()), "repasRestaurant", [], "any", false, false, false, 32), 'row', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ficheFraisForfait"]) || array_key_exists("ficheFraisForfait", $context) ? $context["ficheFraisForfait"] : (function () { throw new RuntimeError('Variable "ficheFraisForfait" does not exist.', 32, $this->source); })()), 3, [], "array", false, false, false, 32), "quantite", [], "array", false, false, false, 32)]);
        echo "
                                    </div>
                            
                                
                                <div class =\"form-group\">
                                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 37, $this->source); })()), "envoyer", [], "any", false, false, false, 37), 'row');
        echo "
                                </div>
                                <div class =\"form-group\">                          
                                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 40, $this->source); })()), "annuler", [], "any", false, false, false, 40), 'row');
        echo "
                                </div>
                            ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-5 col-md-7 col-sm-9 col-6 mx-auto\">
                <div class=\"grid\">
                    <div class=\"grid-body\">
                        <div class=\"item-wrapper\">
                            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireSaisirFraisHorsForfait"]) || array_key_exists("formulaireSaisirFraisHorsForfait", $context) ? $context["formulaireSaisirFraisHorsForfait"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFraisHorsForfait" does not exist.', 51, $this->source); })()), 'form_start');
        echo "
                                
                                <h2 class=\"grid-header\">Frais Hors forfait : </h2>
                            
                                    <div class =\"form-group\">                          
                                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFraisHorsForfait"]) || array_key_exists("formulaireSaisirFraisHorsForfait", $context) ? $context["formulaireSaisirFraisHorsForfait"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFraisHorsForfait" does not exist.', 56, $this->source); })()), "date", [], "any", false, false, false, 56), 'row');
        echo "
                                    </div>
                                    <div class =\"form-group\">                          
                                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFraisHorsForfait"]) || array_key_exists("formulaireSaisirFraisHorsForfait", $context) ? $context["formulaireSaisirFraisHorsForfait"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFraisHorsForfait" does not exist.', 59, $this->source); })()), "libelle", [], "any", false, false, false, 59), 'row');
        echo "
                                    </div>
                                    <div class =\"form-group\">                          
                                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFraisHorsForfait"]) || array_key_exists("formulaireSaisirFraisHorsForfait", $context) ? $context["formulaireSaisirFraisHorsForfait"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFraisHorsForfait" does not exist.', 62, $this->source); })()), "montant", [], "any", false, false, false, 62), 'row');
        echo "
                                    </div>
                                
                                <div class =\"form-group\">
                                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFraisHorsForfait"]) || array_key_exists("formulaireSaisirFraisHorsForfait", $context) ? $context["formulaireSaisirFraisHorsForfait"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFraisHorsForfait" does not exist.', 66, $this->source); })()), "envoyer", [], "any", false, false, false, 66), 'row');
        echo "
                                </div>
                                <div class =\"form-group\">                          
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFraisHorsForfait"]) || array_key_exists("formulaireSaisirFraisHorsForfait", $context) ? $context["formulaireSaisirFraisHorsForfait"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFraisHorsForfait" does not exist.', 69, $this->source); })()), "annuler", [], "any", false, false, false, 69), 'row');
        echo "
                                </div>
                            ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireSaisirFraisHorsForfait"]) || array_key_exists("formulaireSaisirFraisHorsForfait", $context) ? $context["formulaireSaisirFraisHorsForfait"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFraisHorsForfait" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
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
        return "visiteur/menu/saisir/saisirFicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 71,  196 => 69,  190 => 66,  183 => 62,  177 => 59,  171 => 56,  163 => 51,  151 => 42,  146 => 40,  140 => 37,  132 => 32,  126 => 29,  120 => 26,  114 => 23,  106 => 18,  98 => 13,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'common/dom.html.twig'%}
{% block title %}- Visiteur{% endblock %}

{% block body %}

    <div class=\"authentication-theme auth-style_1\">
        <h1 style=\"text-align:center; margin-bottom:40px; color: #114da6; \"><b>Saisir une fiche</b></h1>
        <div class=\"row\">
            <div class=\"col-lg-5 col-md-7 col-sm-9 col-6 mx-auto\">
                <div class=\"grid\">
                    <div class=\"grid-body\">
                        <div class=\"item-wrapper\">
                            {{form_start(formulaireSaisirFrais)}}
                                
                                <h2 class=\"grid-header\">Frais au forfait : </h2>
                                
                                <div class =\"form-group\">                          
                                    {{form_row(formulaireSaisirFrais.mois, {'value': date, 'disabled': 'disabled'})}}
                                </div>

                                
                                    <div class =\"form-group\">                          
                                        {{form_row(formulaireSaisirFrais.forfaitEtape, {'value':ficheFraisForfait[0]['quantite']})}}
                                    </div>
                                    <div class =\"form-group\">                          
                                        {{form_row(formulaireSaisirFrais.fraisKm,{'value':ficheFraisForfait[1]['quantite']})}}
                                    </div>
                                    <div class =\"form-group\">                          
                                        {{form_row(formulaireSaisirFrais.nuiteeHotel,{'value':ficheFraisForfait[2]['quantite']})}}
                                    </div>
                                    <div class =\"form-group\">                          
                                        {{form_row(formulaireSaisirFrais.repasRestaurant,{'value':ficheFraisForfait[3]['quantite']})}}
                                    </div>
                            
                                
                                <div class =\"form-group\">
                                    {{form_row(formulaireSaisirFrais.envoyer)}}
                                </div>
                                <div class =\"form-group\">                          
                                    {{form_row(formulaireSaisirFrais.annuler)}}
                                </div>
                            {{form_end(formulaireSaisirFrais)}}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-5 col-md-7 col-sm-9 col-6 mx-auto\">
                <div class=\"grid\">
                    <div class=\"grid-body\">
                        <div class=\"item-wrapper\">
                            {{form_start(formulaireSaisirFraisHorsForfait)}}
                                
                                <h2 class=\"grid-header\">Frais Hors forfait : </h2>
                            
                                    <div class =\"form-group\">                          
                                        {{form_row(formulaireSaisirFraisHorsForfait.date)}}
                                    </div>
                                    <div class =\"form-group\">                          
                                        {{form_row(formulaireSaisirFraisHorsForfait.libelle)}}
                                    </div>
                                    <div class =\"form-group\">                          
                                        {{form_row(formulaireSaisirFraisHorsForfait.montant)}}
                                    </div>
                                
                                <div class =\"form-group\">
                                    {{form_row(formulaireSaisirFraisHorsForfait.envoyer)}}
                                </div>
                                <div class =\"form-group\">                          
                                    {{form_row(formulaireSaisirFraisHorsForfait.annuler)}}
                                </div>
                            {{form_end(formulaireSaisirFraisHorsForfait)}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

{% endblock %}", "visiteur/menu/saisir/saisirFicheFrais.html.twig", "/var/www/html/GSB-FRAIS/templates/visiteur/menu/saisir/saisirFicheFrais.html.twig");
    }
}
