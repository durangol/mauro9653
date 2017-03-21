<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7dde696fc41b62a9fe087956448c1aac6099364a26be8aaeac0fba03336cdd55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f89613f332518ffbb4ea414a675d23b52068d0804730ef4d98959fcb0d8d2e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89613f332518ffbb4ea414a675d23b52068d0804730ef4d98959fcb0d8d2e53->enter($__internal_f89613f332518ffbb4ea414a675d23b52068d0804730ef4d98959fcb0d8d2e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_804894abc61f8af584c41e8ce97534f4108f92a707e468e6eeb568302c321635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804894abc61f8af584c41e8ce97534f4108f92a707e468e6eeb568302c321635->enter($__internal_804894abc61f8af584c41e8ce97534f4108f92a707e468e6eeb568302c321635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f89613f332518ffbb4ea414a675d23b52068d0804730ef4d98959fcb0d8d2e53->leave($__internal_f89613f332518ffbb4ea414a675d23b52068d0804730ef4d98959fcb0d8d2e53_prof);

        
        $__internal_804894abc61f8af584c41e8ce97534f4108f92a707e468e6eeb568302c321635->leave($__internal_804894abc61f8af584c41e8ce97534f4108f92a707e468e6eeb568302c321635_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5abb35c31c6b8b63a41af428aa801d3d4f120a8cf659b67b4f8df2504393a236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5abb35c31c6b8b63a41af428aa801d3d4f120a8cf659b67b4f8df2504393a236->enter($__internal_5abb35c31c6b8b63a41af428aa801d3d4f120a8cf659b67b4f8df2504393a236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_044c635d6cea1cddec04e75709f62eee0f4a44b7fdf9988b112e5d1c50bd0ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044c635d6cea1cddec04e75709f62eee0f4a44b7fdf9988b112e5d1c50bd0ee0->enter($__internal_044c635d6cea1cddec04e75709f62eee0f4a44b7fdf9988b112e5d1c50bd0ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_044c635d6cea1cddec04e75709f62eee0f4a44b7fdf9988b112e5d1c50bd0ee0->leave($__internal_044c635d6cea1cddec04e75709f62eee0f4a44b7fdf9988b112e5d1c50bd0ee0_prof);

        
        $__internal_5abb35c31c6b8b63a41af428aa801d3d4f120a8cf659b67b4f8df2504393a236->leave($__internal_5abb35c31c6b8b63a41af428aa801d3d4f120a8cf659b67b4f8df2504393a236_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0f5f82f6f93963d4856d01a63e893c439ce8ec355581e3042129ea5ce48e53f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f5f82f6f93963d4856d01a63e893c439ce8ec355581e3042129ea5ce48e53f->enter($__internal_b0f5f82f6f93963d4856d01a63e893c439ce8ec355581e3042129ea5ce48e53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6229a0985dea375c16677061b81af6a25390d8d67f7074737a79a9c8b0b05c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6229a0985dea375c16677061b81af6a25390d8d67f7074737a79a9c8b0b05c5a->enter($__internal_6229a0985dea375c16677061b81af6a25390d8d67f7074737a79a9c8b0b05c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_6229a0985dea375c16677061b81af6a25390d8d67f7074737a79a9c8b0b05c5a->leave($__internal_6229a0985dea375c16677061b81af6a25390d8d67f7074737a79a9c8b0b05c5a_prof);

        
        $__internal_b0f5f82f6f93963d4856d01a63e893c439ce8ec355581e3042129ea5ce48e53f->leave($__internal_b0f5f82f6f93963d4856d01a63e893c439ce8ec355581e3042129ea5ce48e53f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_789db99f1daa886f82988b5b68c401cecce561e372bcc7db007ea108e8664433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789db99f1daa886f82988b5b68c401cecce561e372bcc7db007ea108e8664433->enter($__internal_789db99f1daa886f82988b5b68c401cecce561e372bcc7db007ea108e8664433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_549178ef414d4223c6cdad608c551f0befb74e3f2b56c555bf6fc43a799297f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549178ef414d4223c6cdad608c551f0befb74e3f2b56c555bf6fc43a799297f9->enter($__internal_549178ef414d4223c6cdad608c551f0befb74e3f2b56c555bf6fc43a799297f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_549178ef414d4223c6cdad608c551f0befb74e3f2b56c555bf6fc43a799297f9->leave($__internal_549178ef414d4223c6cdad608c551f0befb74e3f2b56c555bf6fc43a799297f9_prof);

        
        $__internal_789db99f1daa886f82988b5b68c401cecce561e372bcc7db007ea108e8664433->leave($__internal_789db99f1daa886f82988b5b68c401cecce561e372bcc7db007ea108e8664433_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/maxpowers/Public/mauro9653/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
