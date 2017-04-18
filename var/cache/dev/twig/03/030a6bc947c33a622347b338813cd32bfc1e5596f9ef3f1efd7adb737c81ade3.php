<?php

/* MauroTrainingBundle:performance:index.html.twig */
class __TwigTemplate_bb0ee2b881a0e5accbefba378da2b3706906c5af348508e76379ddf80b48c617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MauroTraining/layout.html.twig", "MauroTrainingBundle:performance:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@MauroTraining/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ebf7efff9a6896ac7b9e913a1eb1aa30f22b260acc7de795411c920d576c272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ebf7efff9a6896ac7b9e913a1eb1aa30f22b260acc7de795411c920d576c272->enter($__internal_5ebf7efff9a6896ac7b9e913a1eb1aa30f22b260acc7de795411c920d576c272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MauroTrainingBundle:performance:index.html.twig"));

        $__internal_3096e3e57393797fd862fddeb70c657f5cf8ee0a8b9f5241a51ad06a7279dab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3096e3e57393797fd862fddeb70c657f5cf8ee0a8b9f5241a51ad06a7279dab2->enter($__internal_3096e3e57393797fd862fddeb70c657f5cf8ee0a8b9f5241a51ad06a7279dab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MauroTrainingBundle:performance:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ebf7efff9a6896ac7b9e913a1eb1aa30f22b260acc7de795411c920d576c272->leave($__internal_5ebf7efff9a6896ac7b9e913a1eb1aa30f22b260acc7de795411c920d576c272_prof);

        
        $__internal_3096e3e57393797fd862fddeb70c657f5cf8ee0a8b9f5241a51ad06a7279dab2->leave($__internal_3096e3e57393797fd862fddeb70c657f5cf8ee0a8b9f5241a51ad06a7279dab2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9944e9d08191c155e80ee2c7eb6b8b2d7bd4af7c28894a973438170fdcd50b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9944e9d08191c155e80ee2c7eb6b8b2d7bd4af7c28894a973438170fdcd50b46->enter($__internal_9944e9d08191c155e80ee2c7eb6b8b2d7bd4af7c28894a973438170fdcd50b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f5d6b495d89d54d73adae5af4749c8ae94646482e1de86069f044073d9136ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d6b495d89d54d73adae5af4749c8ae94646482e1de86069f044073d9136ca6->enter($__internal_f5d6b495d89d54d73adae5af4749c8ae94646482e1de86069f044073d9136ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["performances"]) || array_key_exists("performances", $context) ? $context["performances"] : (function () { throw new Twig_Error_Runtime('Variable "performances" does not exist.', 4, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["performance"]) {
            // line 5
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["performance"], "date_of_workout", array()), "html", null, true);
            echo "</li>
        <li>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["performance"], "result", array()), "html", null, true);
            echo "</li>
        <li>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["performance"], "workout_description", array()), "html", null, true);
            echo "</li>
        <li>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["performance"], "measurement_units", array()), "html", null, true);
            echo "</li>
        <li>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["performance"], "performance_type", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['performance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f5d6b495d89d54d73adae5af4749c8ae94646482e1de86069f044073d9136ca6->leave($__internal_f5d6b495d89d54d73adae5af4749c8ae94646482e1de86069f044073d9136ca6_prof);

        
        $__internal_9944e9d08191c155e80ee2c7eb6b8b2d7bd4af7c28894a973438170fdcd50b46->leave($__internal_9944e9d08191c155e80ee2c7eb6b8b2d7bd4af7c28894a973438170fdcd50b46_prof);

    }

    public function getTemplateName()
    {
        return "MauroTrainingBundle:performance:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 9,  67 => 8,  63 => 7,  59 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@MauroTraining/layout.html.twig' %}

{% block content %}
    {% for performance in performances %}
        <li>{{ performance.date_of_workout }}</li>
        <li>{{ performance.result }}</li>
        <li>{{ performance.workout_description }}</li>
        <li>{{ performance.measurement_units }}</li>
        <li>{{ performance.performance_type }}</li>
    {% endfor %}
{% endblock %}", "MauroTrainingBundle:performance:index.html.twig", "/home/maxpowers/Public/mauro9653/src/Mauro/TrainingBundle/Resources/views/performance/index.html.twig");
    }
}
