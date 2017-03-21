<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7996af2fe733a47ee2faa0646b65277b206d199d81e6ab628b2de4666f12eb7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d9605e6f8490def424da0b7c448b45de6119a7497e7e8cb95fdfc4437230210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9605e6f8490def424da0b7c448b45de6119a7497e7e8cb95fdfc4437230210->enter($__internal_8d9605e6f8490def424da0b7c448b45de6119a7497e7e8cb95fdfc4437230210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d37e0f4b2113f94cde19f7d74b6212e0eeaa0a2148181ec269e45c78bc96e90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37e0f4b2113f94cde19f7d74b6212e0eeaa0a2148181ec269e45c78bc96e90d->enter($__internal_d37e0f4b2113f94cde19f7d74b6212e0eeaa0a2148181ec269e45c78bc96e90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d9605e6f8490def424da0b7c448b45de6119a7497e7e8cb95fdfc4437230210->leave($__internal_8d9605e6f8490def424da0b7c448b45de6119a7497e7e8cb95fdfc4437230210_prof);

        
        $__internal_d37e0f4b2113f94cde19f7d74b6212e0eeaa0a2148181ec269e45c78bc96e90d->leave($__internal_d37e0f4b2113f94cde19f7d74b6212e0eeaa0a2148181ec269e45c78bc96e90d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e220197e043c41d95ace7ffe5d307e83ba2a13e5a3c70229764fb7eaacc8d0ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e220197e043c41d95ace7ffe5d307e83ba2a13e5a3c70229764fb7eaacc8d0ca->enter($__internal_e220197e043c41d95ace7ffe5d307e83ba2a13e5a3c70229764fb7eaacc8d0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_858fd7d798a9c00b3af35bfc1c79cb06c9a19c7f736240628b6722460d105792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858fd7d798a9c00b3af35bfc1c79cb06c9a19c7f736240628b6722460d105792->enter($__internal_858fd7d798a9c00b3af35bfc1c79cb06c9a19c7f736240628b6722460d105792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_858fd7d798a9c00b3af35bfc1c79cb06c9a19c7f736240628b6722460d105792->leave($__internal_858fd7d798a9c00b3af35bfc1c79cb06c9a19c7f736240628b6722460d105792_prof);

        
        $__internal_e220197e043c41d95ace7ffe5d307e83ba2a13e5a3c70229764fb7eaacc8d0ca->leave($__internal_e220197e043c41d95ace7ffe5d307e83ba2a13e5a3c70229764fb7eaacc8d0ca_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f3b3cdafe0add34fda680feb9d566d18a35b1c94fd77f14c5db515aa867d106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f3b3cdafe0add34fda680feb9d566d18a35b1c94fd77f14c5db515aa867d106->enter($__internal_8f3b3cdafe0add34fda680feb9d566d18a35b1c94fd77f14c5db515aa867d106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b0a8074bb2497ff804bcea358ee757dfbfa0d3280e415683198ccee7eb32ae33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a8074bb2497ff804bcea358ee757dfbfa0d3280e415683198ccee7eb32ae33->enter($__internal_b0a8074bb2497ff804bcea358ee757dfbfa0d3280e415683198ccee7eb32ae33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b0a8074bb2497ff804bcea358ee757dfbfa0d3280e415683198ccee7eb32ae33->leave($__internal_b0a8074bb2497ff804bcea358ee757dfbfa0d3280e415683198ccee7eb32ae33_prof);

        
        $__internal_8f3b3cdafe0add34fda680feb9d566d18a35b1c94fd77f14c5db515aa867d106->leave($__internal_8f3b3cdafe0add34fda680feb9d566d18a35b1c94fd77f14c5db515aa867d106_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d7bf91be34343689e78a2b6a8fc5b58fcea57f2d10780fd1ab3acd9fb4d96e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7bf91be34343689e78a2b6a8fc5b58fcea57f2d10780fd1ab3acd9fb4d96e6->enter($__internal_5d7bf91be34343689e78a2b6a8fc5b58fcea57f2d10780fd1ab3acd9fb4d96e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bc721b8fde036a645afd2459dd246bae6c64166eac5cef99dd2da2f184adcc5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc721b8fde036a645afd2459dd246bae6c64166eac5cef99dd2da2f184adcc5d->enter($__internal_bc721b8fde036a645afd2459dd246bae6c64166eac5cef99dd2da2f184adcc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_bc721b8fde036a645afd2459dd246bae6c64166eac5cef99dd2da2f184adcc5d->leave($__internal_bc721b8fde036a645afd2459dd246bae6c64166eac5cef99dd2da2f184adcc5d_prof);

        
        $__internal_5d7bf91be34343689e78a2b6a8fc5b58fcea57f2d10780fd1ab3acd9fb4d96e6->leave($__internal_5d7bf91be34343689e78a2b6a8fc5b58fcea57f2d10780fd1ab3acd9fb4d96e6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/maxpowers/Public/mauro9653/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
