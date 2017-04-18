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
        $__internal_6423da2ac574067fb94589d7e7e1a1c278b2260f332586432ce00d57c0a245ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6423da2ac574067fb94589d7e7e1a1c278b2260f332586432ce00d57c0a245ed->enter($__internal_6423da2ac574067fb94589d7e7e1a1c278b2260f332586432ce00d57c0a245ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MauroTrainingBundle:performance:index.html.twig"));

        $__internal_43ccdf14e2844355739272af9046441b2a237a30b2ac6d91e4c816c6ad404c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ccdf14e2844355739272af9046441b2a237a30b2ac6d91e4c816c6ad404c82->enter($__internal_43ccdf14e2844355739272af9046441b2a237a30b2ac6d91e4c816c6ad404c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MauroTrainingBundle:performance:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6423da2ac574067fb94589d7e7e1a1c278b2260f332586432ce00d57c0a245ed->leave($__internal_6423da2ac574067fb94589d7e7e1a1c278b2260f332586432ce00d57c0a245ed_prof);

        
        $__internal_43ccdf14e2844355739272af9046441b2a237a30b2ac6d91e4c816c6ad404c82->leave($__internal_43ccdf14e2844355739272af9046441b2a237a30b2ac6d91e4c816c6ad404c82_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5b9aae4fccf1c70767793d20cb8c22918398980ffc44a4baa2e56f298a65be8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9aae4fccf1c70767793d20cb8c22918398980ffc44a4baa2e56f298a65be8e->enter($__internal_5b9aae4fccf1c70767793d20cb8c22918398980ffc44a4baa2e56f298a65be8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_01fd0e9415d453f0cbed12cb921c3ce3b3be5158ae7e53cbd704f9d5c242ff07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01fd0e9415d453f0cbed12cb921c3ce3b3be5158ae7e53cbd704f9d5c242ff07->enter($__internal_01fd0e9415d453f0cbed12cb921c3ce3b3be5158ae7e53cbd704f9d5c242ff07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <table class=\"table table-hover table-border table_results\">
        <thead>
            <tr>
                <th>Date of Workout</th>
                <th>Result</th>
                <th>workout Description</th>
                <th>Date of Workout</th>
                <th>Measurement_units</th>
                <th>performance</th>
            </tr>
            <th>

            </th>

        </thead>
        <tbody>
            <tr>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["performances"]) || array_key_exists("performances", $context) ? $context["performances"] : (function () { throw new Twig_Error_Runtime('Variable "performances" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["performance"]) {
            // line 22
            echo "                <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["performance"], "date_of_workout", array()), "html", null, true);
            echo "</li>
                <li>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["performance"], "result", array()), "html", null, true);
            echo "</li>
                <li>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["performance"], "workout_description", array()), "html", null, true);
            echo "</li>
                <li>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["performance"], "measurement_units", array()), "html", null, true);
            echo "</li>
                <li>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["performance"], "performance_type", array()), "html", null, true);
            echo "</li></table>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['performance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbod  y>
";
        
        $__internal_01fd0e9415d453f0cbed12cb921c3ce3b3be5158ae7e53cbd704f9d5c242ff07->leave($__internal_01fd0e9415d453f0cbed12cb921c3ce3b3be5158ae7e53cbd704f9d5c242ff07_prof);

        
        $__internal_5b9aae4fccf1c70767793d20cb8c22918398980ffc44a4baa2e56f298a65be8e->leave($__internal_5b9aae4fccf1c70767793d20cb8c22918398980ffc44a4baa2e56f298a65be8e_prof);

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
        return array (  97 => 28,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  72 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@MauroTraining/layout.html.twig' %}

{% block content %}
    <table class=\"table table-hover table-border table_results\">
        <thead>
            <tr>
                <th>Date of Workout</th>
                <th>Result</th>
                <th>workout Description</th>
                <th>Date of Workout</th>
                <th>Measurement_units</th>
                <th>performance</th>
            </tr>
            <th>

            </th>

        </thead>
        <tbody>
            <tr>
            {% for performance in performances %}
                <li>{{ performance.date_of_workout }}</li>
                <li>{{ performance.result }}</li>
                <li>{{ performance.workout_description }}</li>
                <li>{{ performance.measurement_units }}</li>
                <li>{{ performance.performance_type }}</li></table>
            {% endfor %}
        </tbod  y>
{% endblock %}", "MauroTrainingBundle:performance:index.html.twig", "/home/maxpowers/Public/mauro9653/src/Mauro/TrainingBundle/Resources/views/performance/index.html.twig");
    }
}
