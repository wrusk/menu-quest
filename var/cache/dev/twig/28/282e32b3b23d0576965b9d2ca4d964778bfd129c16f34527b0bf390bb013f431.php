<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3fb27f5e9ef4a84442211cf7338302146adb256ef8a175298ef4aacec4ff8c8a extends Twig_Template
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
        $__internal_aae29b5874b283025ee4a6d471c4c84f8d8de29e43b4219b4d7bd4f9c95e1093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae29b5874b283025ee4a6d471c4c84f8d8de29e43b4219b4d7bd4f9c95e1093->enter($__internal_aae29b5874b283025ee4a6d471c4c84f8d8de29e43b4219b4d7bd4f9c95e1093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5a7d26d5b62f019dd5794bbd5ee7fc865946d1e6673a58dc929cbffc93544bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7d26d5b62f019dd5794bbd5ee7fc865946d1e6673a58dc929cbffc93544bf6->enter($__internal_5a7d26d5b62f019dd5794bbd5ee7fc865946d1e6673a58dc929cbffc93544bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aae29b5874b283025ee4a6d471c4c84f8d8de29e43b4219b4d7bd4f9c95e1093->leave($__internal_aae29b5874b283025ee4a6d471c4c84f8d8de29e43b4219b4d7bd4f9c95e1093_prof);

        
        $__internal_5a7d26d5b62f019dd5794bbd5ee7fc865946d1e6673a58dc929cbffc93544bf6->leave($__internal_5a7d26d5b62f019dd5794bbd5ee7fc865946d1e6673a58dc929cbffc93544bf6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e95ec35c5e9611ba9baa79fbd9323c9bb7c1ce9038e5a9a498f7edb30c49ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e95ec35c5e9611ba9baa79fbd9323c9bb7c1ce9038e5a9a498f7edb30c49ab4->enter($__internal_8e95ec35c5e9611ba9baa79fbd9323c9bb7c1ce9038e5a9a498f7edb30c49ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fa474bd09c596582b15d41e28e91c4bfc73ee9dbbc93ceaba61e33c52dc1e90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa474bd09c596582b15d41e28e91c4bfc73ee9dbbc93ceaba61e33c52dc1e90b->enter($__internal_fa474bd09c596582b15d41e28e91c4bfc73ee9dbbc93ceaba61e33c52dc1e90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fa474bd09c596582b15d41e28e91c4bfc73ee9dbbc93ceaba61e33c52dc1e90b->leave($__internal_fa474bd09c596582b15d41e28e91c4bfc73ee9dbbc93ceaba61e33c52dc1e90b_prof);

        
        $__internal_8e95ec35c5e9611ba9baa79fbd9323c9bb7c1ce9038e5a9a498f7edb30c49ab4->leave($__internal_8e95ec35c5e9611ba9baa79fbd9323c9bb7c1ce9038e5a9a498f7edb30c49ab4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2163613da3785075018b879ae5b4f41982baae488cfb34f63a9bfaee97ea714f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2163613da3785075018b879ae5b4f41982baae488cfb34f63a9bfaee97ea714f->enter($__internal_2163613da3785075018b879ae5b4f41982baae488cfb34f63a9bfaee97ea714f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00931c83203cf80bbf200b8aa1944ab3e6ddd138d8321e3ffbbbf33188226614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00931c83203cf80bbf200b8aa1944ab3e6ddd138d8321e3ffbbbf33188226614->enter($__internal_00931c83203cf80bbf200b8aa1944ab3e6ddd138d8321e3ffbbbf33188226614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_00931c83203cf80bbf200b8aa1944ab3e6ddd138d8321e3ffbbbf33188226614->leave($__internal_00931c83203cf80bbf200b8aa1944ab3e6ddd138d8321e3ffbbbf33188226614_prof);

        
        $__internal_2163613da3785075018b879ae5b4f41982baae488cfb34f63a9bfaee97ea714f->leave($__internal_2163613da3785075018b879ae5b4f41982baae488cfb34f63a9bfaee97ea714f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8ed6e3fe7065a5139f0175c9a27b4cfb6ee9739211e9247e0a060de93487ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ed6e3fe7065a5139f0175c9a27b4cfb6ee9739211e9247e0a060de93487ee8->enter($__internal_f8ed6e3fe7065a5139f0175c9a27b4cfb6ee9739211e9247e0a060de93487ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5fd9112fcff5c7e84de36841aedbea779731fe7e59a669c376d3cc9c95b99dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fd9112fcff5c7e84de36841aedbea779731fe7e59a669c376d3cc9c95b99dc->enter($__internal_f5fd9112fcff5c7e84de36841aedbea779731fe7e59a669c376d3cc9c95b99dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f5fd9112fcff5c7e84de36841aedbea779731fe7e59a669c376d3cc9c95b99dc->leave($__internal_f5fd9112fcff5c7e84de36841aedbea779731fe7e59a669c376d3cc9c95b99dc_prof);

        
        $__internal_f8ed6e3fe7065a5139f0175c9a27b4cfb6ee9739211e9247e0a060de93487ee8->leave($__internal_f8ed6e3fe7065a5139f0175c9a27b4cfb6ee9739211e9247e0a060de93487ee8_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Twig/Exception/exception_full.html.twig", "/Users/wrusk3/Public/html/menu-quest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
