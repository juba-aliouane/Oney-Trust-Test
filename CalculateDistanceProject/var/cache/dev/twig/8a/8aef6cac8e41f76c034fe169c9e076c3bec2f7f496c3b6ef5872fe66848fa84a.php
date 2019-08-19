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

/* result.html.twig */
class __TwigTemplate_ea66358e0913f09f802f699b61a1ae4ac8e05959d67eabc173091c958de2a5a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "result.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "result.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "result.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1> Result !</h1>
";
        // line 4
        if ((isset($context["distance"]) || array_key_exists("distance", $context) ? $context["distance"] : (function () { throw new RuntimeError('Variable "distance" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "<h4> The distance between </h4>
<br>
<table border=\"2\">
   ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["postalAddress"]) || array_key_exists("postalAddress", $context) ? $context["postalAddress"] : (function () { throw new RuntimeError('Variable "postalAddress" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 9
                echo "   <tr>
      <td>";
                // line 10
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</td>
      <td>";
                // line 11
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</td>
   </tr>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "</table>
<br>
<h4>and</h4>
<br>
<table border=\"2\">
   ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ipAddress"]) || array_key_exists("ipAddress", $context) ? $context["ipAddress"] : (function () { throw new RuntimeError('Variable "ipAddress" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 20
                echo "   <tr>
      <td>";
                // line 21
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</td>
      <td>";
                // line 22
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</td>
   </tr>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "</table>
<br>
<h4>is ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["distance"]) || array_key_exists("distance", $context) ? $context["distance"] : (function () { throw new RuntimeError('Variable "distance" does not exist.', 27, $this->source); })()), "html", null, true);
            echo " km </h4>
<br>
<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("form_address", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 29, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-primary\">New Distance</a>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 29,  129 => 27,  125 => 25,  116 => 22,  112 => 21,  109 => 20,  105 => 19,  98 => 14,  89 => 11,  85 => 10,  82 => 9,  78 => 8,  73 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  'base.html.twig' %}
{% block body %}
<h1> Result !</h1>
{% if distance %}
<h4> The distance between </h4>
<br>
<table border=\"2\">
   {% for key,value in postalAddress %}
   <tr>
      <td>{{key}}</td>
      <td>{{value}}</td>
   </tr>
   {% endfor %}
</table>
<br>
<h4>and</h4>
<br>
<table border=\"2\">
   {% for key,value in ipAddress %}
   <tr>
      <td>{{key}}</td>
      <td>{{value}}</td>
   </tr>
   {% endfor %}
</table>
<br>
<h4>is {{distance}} km </h4>
<br>
<a href=\"{{path(\"form_address\",{'id':id})}}\" class=\"btn btn-primary\">New Distance</a>
{% endif %}
{% endblock %}", "result.html.twig", "C:\\Users\\Administrator\\Documents\\symfony code\\OneyTrustTest\\templates\\result.html.twig");
    }
}
