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
        $__internal_d226d0f79eca5dad7e5b8e405bab9f8ab3d3eaec7abd249cd7bfa3cbd29864df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d226d0f79eca5dad7e5b8e405bab9f8ab3d3eaec7abd249cd7bfa3cbd29864df->enter($__internal_d226d0f79eca5dad7e5b8e405bab9f8ab3d3eaec7abd249cd7bfa3cbd29864df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MauroTrainingBundle:performance:index.html.twig"));

        $__internal_71420d1df72523660b1860b54a252598f146b09108472f05a7da02f944081308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71420d1df72523660b1860b54a252598f146b09108472f05a7da02f944081308->enter($__internal_71420d1df72523660b1860b54a252598f146b09108472f05a7da02f944081308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MauroTrainingBundle:performance:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d226d0f79eca5dad7e5b8e405bab9f8ab3d3eaec7abd249cd7bfa3cbd29864df->leave($__internal_d226d0f79eca5dad7e5b8e405bab9f8ab3d3eaec7abd249cd7bfa3cbd29864df_prof);

        
        $__internal_71420d1df72523660b1860b54a252598f146b09108472f05a7da02f944081308->leave($__internal_71420d1df72523660b1860b54a252598f146b09108472f05a7da02f944081308_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ca3696dc6c20c63ede5911f037d82082ddcbb56944a4601f3bb390bd4d8257f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca3696dc6c20c63ede5911f037d82082ddcbb56944a4601f3bb390bd4d8257f6->enter($__internal_ca3696dc6c20c63ede5911f037d82082ddcbb56944a4601f3bb390bd4d8257f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5de51eefac48387f19d46be8dd1b0639ce07a514c83c0f86b0f9641c0a4bcd0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de51eefac48387f19d46be8dd1b0639ce07a514c83c0f86b0f9641c0a4bcd0f->enter($__internal_5de51eefac48387f19d46be8dd1b0639ce07a514c83c0f86b0f9641c0a4bcd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["performances"]) || array_key_exists("performances", $context) ? $context["performances"] : (function () { throw new Twig_Error_Runtime('Variable "performances" does not exist.', 4, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_5de51eefac48387f19d46be8dd1b0639ce07a514c83c0f86b0f9641c0a4bcd0f->leave($__internal_5de51eefac48387f19d46be8dd1b0639ce07a514c83c0f86b0f9641c0a4bcd0f_prof);

        
        $__internal_ca3696dc6c20c63ede5911f037d82082ddcbb56944a4601f3bb390bd4d8257f6->leave($__internal_ca3696dc6c20c63ede5911f037d82082ddcbb56944a4601f3bb390bd4d8257f6_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@MauroTraining/layout.html.twig' %}

{% block content %}
    {{ dump(performances) }}
{% endblock %}", "MauroTrainingBundle:performance:index.html.twig", "/home/maxpowers/Public/mauro9653/src/Mauro/TrainingBundle/Resources/views/performance/index.html.twig");
    }
}
