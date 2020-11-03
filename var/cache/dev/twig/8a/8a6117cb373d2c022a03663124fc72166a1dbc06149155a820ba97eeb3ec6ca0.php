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
        <div class=\"row\">
            <div class=\"col-lg-5 col-md-7 col-sm-9 col-11 mx-auto\">
                <div class=\"grid\">
                    <div class=\"grid-body\">
                        <div class=\"item-wrapper\">
                            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
                            <h2 class=\"grid-header\">Période d'engagement : </h2>
                                <div class =\"form-group\">
                                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 15, $this->source); })()), "mois", [], "any", false, false, false, 15), 'row');
        echo "  
                                </div>
                                <div class =\"form-group\">                          
                                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 18, $this->source); })()), "annee", [], "any", false, false, false, 18), 'row');
        echo "
                                </div>
                                <h2 class=\"grid-header\">Frais au forfait : </h2>
                                <div class =\"form-group\">                          
                                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 22, $this->source); })()), "repas", [], "any", false, false, false, 22), 'row');
        echo "
                                </div>
                                <div class =\"form-group\">                          
                                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 25, $this->source); })()), "nuitee", [], "any", false, false, false, 25), 'row');
        echo "
                                </div>
                                <div class =\"form-group\">                          
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 28, $this->source); })()), "km", [], "any", false, false, false, 28), 'row');
        echo "
                                </div>
                                 <h2 class=\"grid-header\">Hors classification : </h2>
                                <div class =\"form-group\">                          
                                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 32, $this->source); })()), "nbJustificatif", [], "any", false, false, false, 32), 'row');
        echo "
                                </div>
                                <div class =\"form-group\">                          
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 35, $this->source); })()), "montantTotal", [], "any", false, false, false, 35), 'row');
        echo "
                                </div>
                                <div class =\"form-group\">                          
                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 38, $this->source); })()), "envoyer", [], "any", false, false, false, 38), 'row');
        echo "
                                </div>
                                <div class =\"form-group\">                          
                                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 41, $this->source); })()), "annuler", [], "any", false, false, false, 41), 'row');
        echo "
                                </div>
                            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireSaisirFrais"]) || array_key_exists("formulaireSaisirFrais", $context) ? $context["formulaireSaisirFrais"] : (function () { throw new RuntimeError('Variable "formulaireSaisirFrais" does not exist.', 43, $this->source); })()), 'form_end');
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
        return array (  158 => 43,  153 => 41,  147 => 38,  141 => 35,  135 => 32,  128 => 28,  122 => 25,  116 => 22,  109 => 18,  103 => 15,  97 => 12,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'common/dom.html.twig'%}
{% block title %}- Visiteur{% endblock %}

{% block body %}

    <div class=\"authentication-theme auth-style_1\">
        <div class=\"row\">
            <div class=\"col-lg-5 col-md-7 col-sm-9 col-11 mx-auto\">
                <div class=\"grid\">
                    <div class=\"grid-body\">
                        <div class=\"item-wrapper\">
                            {{form_start(formulaireSaisirFrais)}}
                            <h2 class=\"grid-header\">Période d'engagement : </h2>
                                <div class =\"form-group\">
                                    {{form_row(formulaireSaisirFrais.mois)}}  
                                </div>
                                <div class =\"form-group\">                          
                                    {{form_row(formulaireSaisirFrais.annee)}}
                                </div>
                                <h2 class=\"grid-header\">Frais au forfait : </h2>
                                <div class =\"form-group\">                          
                                    {{form_row(formulaireSaisirFrais.repas)}}
                                </div>
                                <div class =\"form-group\">                          
                                    {{form_row(formulaireSaisirFrais.nuitee)}}
                                </div>
                                <div class =\"form-group\">                          
                                    {{form_row(formulaireSaisirFrais.km)}}
                                </div>
                                 <h2 class=\"grid-header\">Hors classification : </h2>
                                <div class =\"form-group\">                          
                                    {{form_row(formulaireSaisirFrais.nbJustificatif)}}
                                </div>
                                <div class =\"form-group\">                          
                                    {{form_row(formulaireSaisirFrais.montantTotal)}}
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
        </div>
    </div>



    
                        
                    
                             
   
{% endblock %}", "visiteur/menu/saisir/saisirFicheFrais.html.twig", "/var/www/html/GSB-FRAIS/templates/visiteur/menu/saisir/saisirFicheFrais.html.twig");
    }
}
