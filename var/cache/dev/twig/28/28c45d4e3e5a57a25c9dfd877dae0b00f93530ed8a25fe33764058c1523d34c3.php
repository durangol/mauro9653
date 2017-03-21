<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ff3633addd19d68f71cd343146cb1dd7310835e63f523512a2c106df228ddf2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_340772c9185658087d4b906b8dd2a766b2869f2e55da4f4c36d2d8d7b3433b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340772c9185658087d4b906b8dd2a766b2869f2e55da4f4c36d2d8d7b3433b7d->enter($__internal_340772c9185658087d4b906b8dd2a766b2869f2e55da4f4c36d2d8d7b3433b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5f2e4325ad8a9acd6ac5dacaa35b5e43bdbf82d87ddc95e0bbe49e8315e18675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2e4325ad8a9acd6ac5dacaa35b5e43bdbf82d87ddc95e0bbe49e8315e18675->enter($__internal_5f2e4325ad8a9acd6ac5dacaa35b5e43bdbf82d87ddc95e0bbe49e8315e18675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_340772c9185658087d4b906b8dd2a766b2869f2e55da4f4c36d2d8d7b3433b7d->leave($__internal_340772c9185658087d4b906b8dd2a766b2869f2e55da4f4c36d2d8d7b3433b7d_prof);

        
        $__internal_5f2e4325ad8a9acd6ac5dacaa35b5e43bdbf82d87ddc95e0bbe49e8315e18675->leave($__internal_5f2e4325ad8a9acd6ac5dacaa35b5e43bdbf82d87ddc95e0bbe49e8315e18675_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_87c7ed5b6fe21916b637d31e02a89a91856366c4d57495a592a62998abf5a463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87c7ed5b6fe21916b637d31e02a89a91856366c4d57495a592a62998abf5a463->enter($__internal_87c7ed5b6fe21916b637d31e02a89a91856366c4d57495a592a62998abf5a463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b2e0bf8bbbacf61caaa495ae7f8578baee38b0e8384b07b847d0c73022635506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e0bf8bbbacf61caaa495ae7f8578baee38b0e8384b07b847d0c73022635506->enter($__internal_b2e0bf8bbbacf61caaa495ae7f8578baee38b0e8384b07b847d0c73022635506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b2e0bf8bbbacf61caaa495ae7f8578baee38b0e8384b07b847d0c73022635506->leave($__internal_b2e0bf8bbbacf61caaa495ae7f8578baee38b0e8384b07b847d0c73022635506_prof);

        
        $__internal_87c7ed5b6fe21916b637d31e02a89a91856366c4d57495a592a62998abf5a463->leave($__internal_87c7ed5b6fe21916b637d31e02a89a91856366c4d57495a592a62998abf5a463_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/maxpowers/Public/mauro9653/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
