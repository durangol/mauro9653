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
        $__internal_4fc6d28b326621820c12640a47684fa7bf8082e63639331b41f39487d2247714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fc6d28b326621820c12640a47684fa7bf8082e63639331b41f39487d2247714->enter($__internal_4fc6d28b326621820c12640a47684fa7bf8082e63639331b41f39487d2247714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MauroTrainingBundle:performance:index.html.twig"));

        $__internal_905c52f4e1afd6c1f68dea97b533ddfdc1017f3495b326df0e1b5a7eef653dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_905c52f4e1afd6c1f68dea97b533ddfdc1017f3495b326df0e1b5a7eef653dd5->enter($__internal_905c52f4e1afd6c1f68dea97b533ddfdc1017f3495b326df0e1b5a7eef653dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MauroTrainingBundle:performance:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fc6d28b326621820c12640a47684fa7bf8082e63639331b41f39487d2247714->leave($__internal_4fc6d28b326621820c12640a47684fa7bf8082e63639331b41f39487d2247714_prof);

        
        $__internal_905c52f4e1afd6c1f68dea97b533ddfdc1017f3495b326df0e1b5a7eef653dd5->leave($__internal_905c52f4e1afd6c1f68dea97b533ddfdc1017f3495b326df0e1b5a7eef653dd5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_dce24d8bb5ea04b512534dc5d8d28df7b61e280831eb6f99374e89d6608bfaa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce24d8bb5ea04b512534dc5d8d28df7b61e280831eb6f99374e89d6608bfaa4->enter($__internal_dce24d8bb5ea04b512534dc5d8d28df7b61e280831eb6f99374e89d6608bfaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_32ecaf427f180f6a7df788c8a983f204945e2c122d753ca1f5dabebaf5d5d556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ecaf427f180f6a7df788c8a983f204945e2c122d753ca1f5dabebaf5d5d556->enter($__internal_32ecaf427f180f6a7df788c8a983f204945e2c122d753ca1f5dabebaf5d5d556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h2>All workouts</h2>
    <table class=\"table table-hover table-border table_results\">
        <thead>
            <tr>
                <th>Date of Workout</th>
                <th>Result</th>
                <th>workout Description</th>
                <th>weight</th>
                <th>Measurement_units</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["performances"]) || array_key_exists("performances", $context) ? $context["performances"] : (function () { throw new Twig_Error_Runtime('Variable "performances" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["performance"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["performance"], "date_of_workout", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["performance"], "result", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["performance"], "workout_description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["performance"], "weight", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["performance"], "measurement_units", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['performance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>
";
        
        $__internal_32ecaf427f180f6a7df788c8a983f204945e2c122d753ca1f5dabebaf5d5d556->leave($__internal_32ecaf427f180f6a7df788c8a983f204945e2c122d753ca1f5dabebaf5d5d556_prof);

        
        $__internal_dce24d8bb5ea04b512534dc5d8d28df7b61e280831eb6f99374e89d6608bfaa4->leave($__internal_dce24d8bb5ea04b512534dc5d8d28df7b61e280831eb6f99374e89d6608bfaa4_prof);

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
        return array (  95 => 25,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@MauroTraining/layout.html.twig' %}

{% block content %}
    <h2>All workouts</h2>
    <table class=\"table table-hover table-border table_results\">
        <thead>
            <tr>
                <th>Date of Workout</th>
                <th>Result</th>
                <th>workout Description</th>
                <th>weight</th>
                <th>Measurement_units</th>
            </tr>
        </thead>
        <tbody>
        {% for performance in performances %}
            <tr>
                <td>{{ performance.date_of_workout }}</td>
                <td>{{ performance.result }}</td>
                <td>{{ performance.workout_description }}</td>
                <td>{{ performance.weight }}</td>
                <td>{{ performance.measurement_units }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "MauroTrainingBundle:performance:index.html.twig", "/home/maxpowers/Public/mauro9653/src/Mauro/TrainingBundle/Resources/views/performance/index.html.twig");
    }
}
