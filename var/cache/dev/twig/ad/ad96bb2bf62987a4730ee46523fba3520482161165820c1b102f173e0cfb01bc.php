<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_eaadee272b327ba010f5b8444c7018db1e8c765a69df2eefb82cd379fa29fec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60483e161aece0a5a675408bae7d4ca28ba39d8787bda99f2fc7f20fab48b74f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60483e161aece0a5a675408bae7d4ca28ba39d8787bda99f2fc7f20fab48b74f->enter($__internal_60483e161aece0a5a675408bae7d4ca28ba39d8787bda99f2fc7f20fab48b74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_aa80c5d9a77c6dbe65ba9d04dfaca79f72fea9b484e6f951c455e969d26157ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa80c5d9a77c6dbe65ba9d04dfaca79f72fea9b484e6f951c455e969d26157ef->enter($__internal_aa80c5d9a77c6dbe65ba9d04dfaca79f72fea9b484e6f951c455e969d26157ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_60483e161aece0a5a675408bae7d4ca28ba39d8787bda99f2fc7f20fab48b74f->leave($__internal_60483e161aece0a5a675408bae7d4ca28ba39d8787bda99f2fc7f20fab48b74f_prof);

        
        $__internal_aa80c5d9a77c6dbe65ba9d04dfaca79f72fea9b484e6f951c455e969d26157ef->leave($__internal_aa80c5d9a77c6dbe65ba9d04dfaca79f72fea9b484e6f951c455e969d26157ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/maxpowers/Public/mauro9653/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
