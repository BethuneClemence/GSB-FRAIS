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

/* visiteur/menu/modifierMotDePasse.html.twig */
class __TwigTemplate_6cb7d98154f45ef81c4b1a629fa506fc4947753ad1bfe300832ab803470f4051 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/menu/modifierMotDePasse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/menu/modifierMotDePasse.html.twig"));

        $this->parent = $this->loadTemplate("common/dom.html.twig", "visiteur/menu/modifierMotDePasse.html.twig", 1);
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
        echo "<div class=\"authentication-theme auth-style_1\">
  <div class=\"row\">
    <div class=\"col-lg-5 col-md-7 col-sm-9 col-11 mx-auto\">
        <div class=\"grid\">
           <div class=\"grid-body\">
              <div class=\"row\">
                <div class=\"col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper\">
                    ";
        // line 12
        if (array_key_exists("motDePasseNonIdentique", $context)) {
            // line 13
            echo "                      <div class=\"alert alert-warning\" role=\"alert\">
                        Les mots de passes ne sont pas identiques, veuillez recommencer ! 
                      </div>
                    ";
        }
        // line 17
        echo "                    ";
        if (array_key_exists("ancienMdpFaux", $context)) {
            // line 18
            echo "                      <div class=\"alert alert-warning\" role=\"alert\">
                        L'ancien mot de passse est incorrect, veuillez recommencer ! 
                      </div>
                    ";
        }
        // line 22
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireModifierMotDePasse"]) || array_key_exists("formulaireModifierMotDePasse", $context) ? $context["formulaireModifierMotDePasse"] : (function () { throw new RuntimeError('Variable "formulaireModifierMotDePasse" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
                        <div class=\"form-group input-rounded\">
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireModifierMotDePasse"]) || array_key_exists("formulaireModifierMotDePasse", $context) ? $context["formulaireModifierMotDePasse"] : (function () { throw new RuntimeError('Variable "formulaireModifierMotDePasse" does not exist.', 24, $this->source); })()), "ancien", [], "any", false, false, false, 24), 'row');
        echo "
                        </div>
                        <div class=\"form-group input-rounded\">
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireModifierMotDePasse"]) || array_key_exists("formulaireModifierMotDePasse", $context) ? $context["formulaireModifierMotDePasse"] : (function () { throw new RuntimeError('Variable "formulaireModifierMotDePasse" does not exist.', 27, $this->source); })()), "nvxMdp", [], "any", false, false, false, 27), 'row');
        echo "
                        </div>
                        <div class=\"form-group input-rounded\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireModifierMotDePasse"]) || array_key_exists("formulaireModifierMotDePasse", $context) ? $context["formulaireModifierMotDePasse"] : (function () { throw new RuntimeError('Variable "formulaireModifierMotDePasse" does not exist.', 30, $this->source); })()), "confirmNvxMdp", [], "any", false, false, false, 30), 'row');
        echo "
                        </div>
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireModifierMotDePasse"]) || array_key_exists("formulaireModifierMotDePasse", $context) ? $context["formulaireModifierMotDePasse"] : (function () { throw new RuntimeError('Variable "formulaireModifierMotDePasse" does not exist.', 32, $this->source); })()), "valide", [], "any", false, false, false, 32), 'row');
        echo "
                    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireModifierMotDePasse"]) || array_key_exists("formulaireModifierMotDePasse", $context) ? $context["formulaireModifierMotDePasse"] : (function () { throw new RuntimeError('Variable "formulaireModifierMotDePasse" does not exist.', 33, $this->source); })()), 'form_end');
        echo "

                </div>
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
        return "visiteur/menu/modifierMotDePasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 33,  137 => 32,  132 => 30,  126 => 27,  120 => 24,  114 => 22,  108 => 18,  105 => 17,  99 => 13,  97 => 12,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
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
              <div class=\"row\">
                <div class=\"col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper\">
                    {% if motDePasseNonIdentique is defined %}
                      <div class=\"alert alert-warning\" role=\"alert\">
                        Les mots de passes ne sont pas identiques, veuillez recommencer ! 
                      </div>
                    {% endif %}
                    {% if ancienMdpFaux is defined %}
                      <div class=\"alert alert-warning\" role=\"alert\">
                        L'ancien mot de passse est incorrect, veuillez recommencer ! 
                      </div>
                    {% endif %}
                    {{form_start(formulaireModifierMotDePasse)}}
                        <div class=\"form-group input-rounded\">
                        {{form_row(formulaireModifierMotDePasse.ancien)}}
                        </div>
                        <div class=\"form-group input-rounded\">
                        {{form_row(formulaireModifierMotDePasse.nvxMdp)}}
                        </div>
                        <div class=\"form-group input-rounded\">
                        {{form_row(formulaireModifierMotDePasse.confirmNvxMdp)}}
                        </div>
                        {{form_row(formulaireModifierMotDePasse.valide)}}
                    {{form_end(formulaireModifierMotDePasse)}}

                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
</div>
     
{% endblock %}", "visiteur/menu/modifierMotDePasse.html.twig", "/var/www/html/GSB-FRAIS/templates/visiteur/menu/modifierMotDePasse.html.twig");
    }
}
