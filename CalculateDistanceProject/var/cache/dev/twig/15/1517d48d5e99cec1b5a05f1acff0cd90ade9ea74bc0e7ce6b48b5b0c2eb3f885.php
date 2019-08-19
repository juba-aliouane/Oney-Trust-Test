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

/* create.html.twig */
class __TwigTemplate_dc45e72dd8c0ddc97f767fcd86a595bbc8b92f62e0ca908bf45025acfc1c2ad4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "create.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formAddress"]) || array_key_exists("formAddress", $context) ? $context["formAddress"] : (function () { throw new RuntimeError('Variable "formAddress" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1> Calculate a new distance !</h1>
            ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddress"]) || array_key_exists("formAddress", $context) ? $context["formAddress"] : (function () { throw new RuntimeError('Variable "formAddress" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAddress"]) || array_key_exists("formAddress", $context) ? $context["formAddress"] : (function () { throw new RuntimeError('Variable "formAddress" does not exist.', 6, $this->source); })()), "street", [], "any", false, false, false, 6), 'row', ["attr" => ["placeholder" => ""]]);
        echo "
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAddress"]) || array_key_exists("formAddress", $context) ? $context["formAddress"] : (function () { throw new RuntimeError('Variable "formAddress" does not exist.', 7, $this->source); })()), "zipCode", [], "any", false, false, false, 7), 'row');
        echo "
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAddress"]) || array_key_exists("formAddress", $context) ? $context["formAddress"] : (function () { throw new RuntimeError('Variable "formAddress" does not exist.', 8, $this->source); })()), "city", [], "any", false, false, false, 8), 'row');
        echo "
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAddress"]) || array_key_exists("formAddress", $context) ? $context["formAddress"] : (function () { throw new RuntimeError('Variable "formAddress" does not exist.', 9, $this->source); })()), "country", [], "any", false, false, false, 9), 'row');
        echo "
            
            <button type=\"submit\" class=\"btn btn-success\"> calculate the distance </button>
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddress"]) || array_key_exists("formAddress", $context) ? $context["formAddress"] : (function () { throw new RuntimeError('Variable "formAddress" does not exist.', 12, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 12,  90 => 9,  86 => 8,  82 => 7,  78 => 6,  74 => 5,  71 => 4,  61 => 3,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  'base.html.twig' %}
{% form_theme formAddress 'bootstrap_4_layout.html.twig' %}
{% block body %}
<h1> Calculate a new distance !</h1>
            {{form_start (formAddress )}}
            {{form_row(formAddress.street,{'attr':{'placeholder':\"\"}})}}
            {{form_row(formAddress.zipCode)}}
            {{form_row(formAddress.city )}}
            {{form_row(formAddress.country )}}
            
            <button type=\"submit\" class=\"btn btn-success\"> calculate the distance </button>
            {{form_end (formAddress )}}
{% endblock %}", "create.html.twig", "C:\\Users\\Administrator\\Documents\\symfony code\\OneyTrustTest\\templates\\create.html.twig");
    }
}
