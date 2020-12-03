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
            <div class=\"col-lg-5 col-md-7 col-sm-9 col-11 mx-auto\">
                

                <div class=\"grid\">
                
                    <div class=\"grid-body\">
                        <div class=\"item-wrapper\">
                            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
                                
                                <h2 class=\"grid-header\">Frais au forfait : </h2>
                                
                                <div class =\"form-group\">                          
                                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 21, $this->source); })()), "mois", [], "any", false, false, false, 21), 'row', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 21, $this->source); })()), 0, [], "array", false, false, false, 21), "mois", [], "array", false, false, false, 21), "disabled" => "disabled"]);
        echo "
                                   
                                </div>
                                <div class =\"form-group\">                          
                                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 25, $this->source); })()), "forfaitEtape", [], "any", false, false, false, 25), 'row');
        echo "
                                </div>
                                <div class =\"form-group\">                          
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 28, $this->source); })()), "fraisKm", [], "any", false, false, false, 28), 'row');
        echo "
                                </div>
                                <div class =\"form-group\">                          
                                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 31, $this->source); })()), "nuiteeHotel", [], "any", false, false, false, 31), 'row');
        echo "
                                </div>
                                 
                                <div class =\"form-group\">                          
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 35, $this->source); })()), "repasRestaurant", [], "any", false, false, false, 35), 'row');
        echo "
                                </div>
                                 ";
        // line 47
        echo "                                
                                
                                <div class =\"form-group\"> 
                                   
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 51, $this->source); })()), "envoyer", [], "any", false, false, false, 51), 'row');
        echo "
                                </div>
                                <div class =\"form-group\">                          
                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 54, $this->source); })()), "annuler", [], "any", false, false, false, 54), 'row');
        echo "
                                </div>
                            ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 56, $this->source); })()), 'form_end');
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
        return array (  157 => 56,  152 => 54,  146 => 51,  140 => 47,  135 => 35,  128 => 31,  122 => 28,  116 => 25,  109 => 21,  101 => 16,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'common/dom.html.twig'%}
{% block title %}- Visiteur{% endblock %}

{% block body %}

    <div class=\"authentication-theme auth-style_1\">
        <h1 style=\"text-align:center; margin-bottom:40px; color: #114da6; \"><b>Saisir une fiche</b></h1>
        <div class=\"row\">
            <div class=\"col-lg-5 col-md-7 col-sm-9 col-11 mx-auto\">
                

                <div class=\"grid\">
                
                    <div class=\"grid-body\">
                        <div class=\"item-wrapper\">
                            {{form_start(formulaireSaisirFrais)}}
                                
                                <h2 class=\"grid-header\">Frais au forfait : </h2>
                                
                                <div class =\"form-group\">                          
                                    {{form_row(formulaireSaisirFrais.mois, {'value' : ficheFrais[0]['mois'], 'disabled': 'disabled'})}}
                                   
                                </div>
                                <div class =\"form-group\">                          
                                    {{form_row(formulaireSaisirFrais.forfaitEtape)}}
                                </div>
                                <div class =\"form-group\">                          
                                    {{form_row(formulaireSaisirFrais.fraisKm)}}
                                </div>
                                <div class =\"form-group\">                          
                                    {{form_row(formulaireSaisirFrais.nuiteeHotel)}}
                                </div>
                                 
                                <div class =\"form-group\">                          
                                    {{form_row(formulaireSaisirFrais.repasRestaurant)}}
                                </div>
                                 {# <h2 class=\"grid-header\">Frais hors forfait  : </h2>
                                <div class =\"form-group\">                          
                                    {{form_row(formulaireSaisirFrais.date)}}
                                </div>
                                <div class =\"form-group\">                          
                                    {{form_row(formulaireSaisirFrais.libelle)}}
                                </div>
                                <div class =\"form-group\">                          
                                    {{form_row(formulaireSaisirFrais.montant)}}
                                </div> #}
                                
                                
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
        </div>
    </div>



    
                        
                    
                             
   
{% endblock %}", "visiteur/menu/saisir/saisirFicheFrais.html.twig", "/var/www/html/GSB-FRAIS/templates/visiteur/menu/saisir/saisirFicheFrais.html.twig");
    }
}
