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

/* visiteur/connexionVisiteur.html.twig */
class __TwigTemplate_693b3bc64b0cdfcecf6839636e2030b61edfa9a0313cb682d2e66398a4912179 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/connexionVisiteur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/connexionVisiteur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/connexionVisiteur.html.twig", 1);
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
                        <div class=\"row\">
                            <div id=\"connexion\" class=\"col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper\">
                                ";
        // line 15
        if (array_key_exists("echecConnexion", $context)) {
            // line 16
            echo "                                    <div class=\"alert alert-danger\" role=\"alert\">
                                        La tentative de connexion à échouée ! 😔
                                    </div>
                                ";
        }
        // line 20
        echo "
                                ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireConnexion"]) || array_key_exists("formulaireConnexion", $context) ? $context["formulaireConnexion"] : (function () { throw new RuntimeError('Variable "formulaireConnexion" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
                                    <div class=\"form-group input-rounded\">
                                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireConnexion"]) || array_key_exists("formulaireConnexion", $context) ? $context["formulaireConnexion"] : (function () { throw new RuntimeError('Variable "formulaireConnexion" does not exist.', 23, $this->source); })()), "identifiant", [], "any", false, false, false, 23), 'row');
        echo "
                                    </div>
                                    <div class=\"form-group input-rounded\">
                                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireConnexion"]) || array_key_exists("formulaireConnexion", $context) ? $context["formulaireConnexion"] : (function () { throw new RuntimeError('Variable "formulaireConnexion" does not exist.', 26, $this->source); })()), "mdp", [], "any", false, false, false, 26), 'row');
        echo "
                                    </div>
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireConnexion"]) || array_key_exists("formulaireConnexion", $context) ? $context["formulaireConnexion"] : (function () { throw new RuntimeError('Variable "formulaireConnexion" does not exist.', 28, $this->source); })()), "valider", [], "any", false, false, false, 28), 'row');
        echo "
                                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireConnexion"]) || array_key_exists("formulaireConnexion", $context) ? $context["formulaireConnexion"] : (function () { throw new RuntimeError('Variable "formulaireConnexion" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>




        <script
\t\t\t  src=\"https://code.jquery.com/jquery-3.5.1.js\"
\t\t\t  integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\"
\t\t\t  crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('#sign-up').click(function () {
                    \$(\"#connexion\").hide();
                    \$(\"#inscription\").show();
                });

                \$('#sign-in').click(function () {
                    \$(\"#connexion\").show();
                    \$(\"#inscription\").hide();
                });
            });
        </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/connexionVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 29,  127 => 28,  122 => 26,  116 => 23,  111 => 21,  108 => 20,  102 => 16,  100 => 15,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}
{% block title %}- Visiteur{% endblock %}

{% block body %}


        <div class=\"authentication-theme auth-style_1\">
            
            <div class=\"row\">
                <div class=\"col-lg-5 col-md-7 col-sm-9 col-11 mx-auto\">
                <div class=\"grid\">
                    <div class=\"grid-body\">
                        <div class=\"row\">
                            <div id=\"connexion\" class=\"col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper\">
                                {%if echecConnexion is defined%}
                                    <div class=\"alert alert-danger\" role=\"alert\">
                                        La tentative de connexion à échouée ! 😔
                                    </div>
                                {% endif %}

                                {{form_start(formulaireConnexion)}}
                                    <div class=\"form-group input-rounded\">
                                        {{form_row(formulaireConnexion.identifiant)}}
                                    </div>
                                    <div class=\"form-group input-rounded\">
                                        {{form_row(formulaireConnexion.mdp)}}
                                    </div>
                                    {{form_row(formulaireConnexion.valider)}}
                                {{form_end(formulaireConnexion)}}
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>




        <script
\t\t\t  src=\"https://code.jquery.com/jquery-3.5.1.js\"
\t\t\t  integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\"
\t\t\t  crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('#sign-up').click(function () {
                    \$(\"#connexion\").hide();
                    \$(\"#inscription\").show();
                });

                \$('#sign-in').click(function () {
                    \$(\"#connexion\").show();
                    \$(\"#inscription\").hide();
                });
            });
        </script>


{% endblock %}", "visiteur/connexionVisiteur.html.twig", "/var/www/html/GSB-FRAIS/templates/visiteur/connexionVisiteur.html.twig");
    }
}
