<?php

/* MauroTrainingBundle::layout.html.twig */
class __TwigTemplate_819273fc727bf2ed46a2d652a030bb54b2bd9510cf28ee39db170d2f21f88758 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ab493eb83f9e6b5222b0414d08d62b526424b3ae2a7e9c8e64f2e8c3e273e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab493eb83f9e6b5222b0414d08d62b526424b3ae2a7e9c8e64f2e8c3e273e48->enter($__internal_9ab493eb83f9e6b5222b0414d08d62b526424b3ae2a7e9c8e64f2e8c3e273e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MauroTrainingBundle::layout.html.twig"));

        $__internal_eb3040fb7f0426fbd8042a4cdc08fe60232e48c809ed7d42940aeb63009289d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3040fb7f0426fbd8042a4cdc08fe60232e48c809ed7d42940aeb63009289d8->enter($__internal_eb3040fb7f0426fbd8042a4cdc08fe60232e48c809ed7d42940aeb63009289d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MauroTrainingBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

</head>
<body>
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "
</body>
</html>";
        
        $__internal_9ab493eb83f9e6b5222b0414d08d62b526424b3ae2a7e9c8e64f2e8c3e273e48->leave($__internal_9ab493eb83f9e6b5222b0414d08d62b526424b3ae2a7e9c8e64f2e8c3e273e48_prof);

        
        $__internal_eb3040fb7f0426fbd8042a4cdc08fe60232e48c809ed7d42940aeb63009289d8->leave($__internal_eb3040fb7f0426fbd8042a4cdc08fe60232e48c809ed7d42940aeb63009289d8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a57b1c9c5b69e31fa03f14628e3f7580acfcc0d10ad239e191630e26814d6ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57b1c9c5b69e31fa03f14628e3f7580acfcc0d10ad239e191630e26814d6ed0->enter($__internal_a57b1c9c5b69e31fa03f14628e3f7580acfcc0d10ad239e191630e26814d6ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0da938ae735b58f38cb2b735981287c488e807d954470a10b299654b0944bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0da938ae735b58f38cb2b735981287c488e807d954470a10b299654b0944bb9->enter($__internal_a0da938ae735b58f38cb2b735981287c488e807d954470a10b299654b0944bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Training";
        
        $__internal_a0da938ae735b58f38cb2b735981287c488e807d954470a10b299654b0944bb9->leave($__internal_a0da938ae735b58f38cb2b735981287c488e807d954470a10b299654b0944bb9_prof);

        
        $__internal_a57b1c9c5b69e31fa03f14628e3f7580acfcc0d10ad239e191630e26814d6ed0->leave($__internal_a57b1c9c5b69e31fa03f14628e3f7580acfcc0d10ad239e191630e26814d6ed0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_12b99f2e229455033395d3ad56f2ef7c9f1048724ba46b837471b2c028ef2e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b99f2e229455033395d3ad56f2ef7c9f1048724ba46b837471b2c028ef2e13->enter($__internal_12b99f2e229455033395d3ad56f2ef7c9f1048724ba46b837471b2c028ef2e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44f5342432ec3876bb2442ab98f80172578c4d798e485f866adacf87a9f2a2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f5342432ec3876bb2442ab98f80172578c4d798e485f866adacf87a9f2a2bb->enter($__internal_44f5342432ec3876bb2442ab98f80172578c4d798e485f866adacf87a9f2a2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <header>
        <div class=\"container\">
            This is container
        </div>
    </header>

    <section class=\"main-content\" role=\"main\">
        <div class=\"container layout\">
            ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "        </div>
    </section>

    <footer>
        <p>&copy;Mauro. All rights reserved.</p>
    </footer>

";
        
        $__internal_44f5342432ec3876bb2442ab98f80172578c4d798e485f866adacf87a9f2a2bb->leave($__internal_44f5342432ec3876bb2442ab98f80172578c4d798e485f866adacf87a9f2a2bb_prof);

        
        $__internal_12b99f2e229455033395d3ad56f2ef7c9f1048724ba46b837471b2c028ef2e13->leave($__internal_12b99f2e229455033395d3ad56f2ef7c9f1048724ba46b837471b2c028ef2e13_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_c8c3a79a3934d2c912342da5f8c3b7935a2c9009af8471e1c1ad5f6c324756c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c3a79a3934d2c912342da5f8c3b7935a2c9009af8471e1c1ad5f6c324756c8->enter($__internal_c8c3a79a3934d2c912342da5f8c3b7935a2c9009af8471e1c1ad5f6c324756c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_74df71031cf50de385f8ff80439c0ab963c5a49b3930e9eb27d474b8c5bfc2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74df71031cf50de385f8ff80439c0ab963c5a49b3930e9eb27d474b8c5bfc2b4->enter($__internal_74df71031cf50de385f8ff80439c0ab963c5a49b3930e9eb27d474b8c5bfc2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " This is content";
        
        $__internal_74df71031cf50de385f8ff80439c0ab963c5a49b3930e9eb27d474b8c5bfc2b4->leave($__internal_74df71031cf50de385f8ff80439c0ab963c5a49b3930e9eb27d474b8c5bfc2b4_prof);

        
        $__internal_c8c3a79a3934d2c912342da5f8c3b7935a2c9009af8471e1c1ad5f6c324756c8->leave($__internal_c8c3a79a3934d2c912342da5f8c3b7935a2c9009af8471e1c1ad5f6c324756c8_prof);

    }

    public function getTemplateName()
    {
        return "MauroTrainingBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 21,  97 => 22,  95 => 21,  84 => 12,  75 => 11,  57 => 7,  45 => 30,  43 => 11,  36 => 7,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Training{% endblock %}</title>

</head>
<body>
{% block body %}

    <header>
        <div class=\"container\">
            This is container
        </div>
    </header>

    <section class=\"main-content\" role=\"main\">
        <div class=\"container layout\">
            {% block content %} This is content{% endblock %}
        </div>
    </section>

    <footer>
        <p>&copy;Mauro. All rights reserved.</p>
    </footer>

{% endblock %}

</body>
</html>", "MauroTrainingBundle::layout.html.twig", "/home/maxpowers/Public/mauro9653/src/Mauro/TrainingBundle/Resources/views/layout.html.twig");
    }
}
