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

/* visiteur/menu/consulter/consulterFrais.html.twig */
class __TwigTemplate_27a6eba583f02f6fc30aa4c9d1237b3bc17bee9782cd256741e56eef87d31ddb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/menu/consulter/consulterFrais.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/menu/consulter/consulterFrais.html.twig"));

        $this->parent = $this->loadTemplate("common/dom.html.twig", "visiteur/menu/consulter/consulterFrais.html.twig", 1);
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
        <h1 style=\"text-align:center; margin-bottom:40px; color: #114da6; \"><b>Consulter une fiche</b></h1>
        <div class=\"row\">
            <div class=\"col-lg-5 col-md-7 col-sm-9 col-11 mx-auto\">
                <div class=\"grid\">
                    <div class=\"grid-body\">
                        ";
        // line 12
        if (array_key_exists("donneesInvalides", $context)) {
            // line 13
            echo "                            <div class=\"alert alert-danger\" role=\"alert\">
                                Il nexiste pas de données pour ce mois et cette année
                            </div>
                        ";
        }
        // line 17
        echo "                        <div class=\"item-wrapper\">
                            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formConsulterFicheFrais"]) || array_key_exists("formConsulterFicheFrais", $context) ? $context["formConsulterFicheFrais"] : (function () { throw new RuntimeError('Variable "formConsulterFicheFrais" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
                                <div class =\"form-group\">
                                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formConsulterFicheFrais"]) || array_key_exists("formConsulterFicheFrais", $context) ? $context["formConsulterFicheFrais"] : (function () { throw new RuntimeError('Variable "formConsulterFicheFrais" does not exist.', 20, $this->source); })()), "mois", [], "any", false, false, false, 20), 'row');
        echo "  
                                </div>
                                <div class =\"form-group\">                          
                                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formConsulterFicheFrais"]) || array_key_exists("formConsulterFicheFrais", $context) ? $context["formConsulterFicheFrais"] : (function () { throw new RuntimeError('Variable "formConsulterFicheFrais" does not exist.', 23, $this->source); })()), "annee", [], "any", false, false, false, 23), 'row');
        echo "
                                </div>
                            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formConsulterFicheFrais"]) || array_key_exists("formConsulterFicheFrais", $context) ? $context["formConsulterFicheFrais"] : (function () { throw new RuntimeError('Variable "formConsulterFicheFrais" does not exist.', 25, $this->source); })()), 'form_end');
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
        return "visiteur/menu/consulter/consulterFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 25,  119 => 23,  113 => 20,  108 => 18,  105 => 17,  99 => 13,  97 => 12,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'common/dom.html.twig'%}
{% block title %}- Visiteur{% endblock %}

{% block body %}
    
    <div class=\"authentication-theme auth-style_1\">
        <h1 style=\"text-align:center; margin-bottom:40px; color: #114da6; \"><b>Consulter une fiche</b></h1>
        <div class=\"row\">
            <div class=\"col-lg-5 col-md-7 col-sm-9 col-11 mx-auto\">
                <div class=\"grid\">
                    <div class=\"grid-body\">
                        {%if donneesInvalides is defined%}
                            <div class=\"alert alert-danger\" role=\"alert\">
                                Il nexiste pas de données pour ce mois et cette année
                            </div>
                        {%endif%}
                        <div class=\"item-wrapper\">
                            {{form_start(formConsulterFicheFrais)}}
                                <div class =\"form-group\">
                                    {{form_row(formConsulterFicheFrais.mois)}}  
                                </div>
                                <div class =\"form-group\">                          
                                    {{form_row(formConsulterFicheFrais.annee)}}
                                </div>
                            {{form_end(formConsulterFicheFrais)}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    
                        
                    
                             
   
{% endblock %}", "visiteur/menu/consulter/consulterFrais.html.twig", "/var/www/html/GSB-FRAIS/templates/visiteur/menu/consulter/consulterFrais.html.twig");
    }
}
