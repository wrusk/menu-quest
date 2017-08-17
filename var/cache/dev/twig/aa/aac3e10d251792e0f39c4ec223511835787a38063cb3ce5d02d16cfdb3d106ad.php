<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_746d8378e64613cf21077bd50bb4917bfbbca9fba29f9e49c2f0b04fa07d2f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746d8378e64613cf21077bd50bb4917bfbbca9fba29f9e49c2f0b04fa07d2f57->enter($__internal_746d8378e64613cf21077bd50bb4917bfbbca9fba29f9e49c2f0b04fa07d2f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fbf60a2c3bee3018db6008f0aa5976178a3b5c35023386590a7138490f4a2c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf60a2c3bee3018db6008f0aa5976178a3b5c35023386590a7138490f4a2c16->enter($__internal_fbf60a2c3bee3018db6008f0aa5976178a3b5c35023386590a7138490f4a2c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_746d8378e64613cf21077bd50bb4917bfbbca9fba29f9e49c2f0b04fa07d2f57->leave($__internal_746d8378e64613cf21077bd50bb4917bfbbca9fba29f9e49c2f0b04fa07d2f57_prof);

        
        $__internal_fbf60a2c3bee3018db6008f0aa5976178a3b5c35023386590a7138490f4a2c16->leave($__internal_fbf60a2c3bee3018db6008f0aa5976178a3b5c35023386590a7138490f4a2c16_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ae5f88e038f3a8fc3fbb6373e6db000cc2eca09a36a4660aa989e7de2ec5b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae5f88e038f3a8fc3fbb6373e6db000cc2eca09a36a4660aa989e7de2ec5b56->enter($__internal_2ae5f88e038f3a8fc3fbb6373e6db000cc2eca09a36a4660aa989e7de2ec5b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b35efb6829c60f5c19a1fba59c2f09ac5c34a42990cf2842da1655dc1fe790ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35efb6829c60f5c19a1fba59c2f09ac5c34a42990cf2842da1655dc1fe790ca->enter($__internal_b35efb6829c60f5c19a1fba59c2f09ac5c34a42990cf2842da1655dc1fe790ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b35efb6829c60f5c19a1fba59c2f09ac5c34a42990cf2842da1655dc1fe790ca->leave($__internal_b35efb6829c60f5c19a1fba59c2f09ac5c34a42990cf2842da1655dc1fe790ca_prof);

        
        $__internal_2ae5f88e038f3a8fc3fbb6373e6db000cc2eca09a36a4660aa989e7de2ec5b56->leave($__internal_2ae5f88e038f3a8fc3fbb6373e6db000cc2eca09a36a4660aa989e7de2ec5b56_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c1d6b7b6b2d5bc45838f94b0857dd7ef1365182fb5f2c4ff280c916c2c571619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d6b7b6b2d5bc45838f94b0857dd7ef1365182fb5f2c4ff280c916c2c571619->enter($__internal_c1d6b7b6b2d5bc45838f94b0857dd7ef1365182fb5f2c4ff280c916c2c571619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f17a5b3d0f39a164b61b8958df720df780609cc7ae1a2f4c7f5eee87a69596b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17a5b3d0f39a164b61b8958df720df780609cc7ae1a2f4c7f5eee87a69596b0->enter($__internal_f17a5b3d0f39a164b61b8958df720df780609cc7ae1a2f4c7f5eee87a69596b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f17a5b3d0f39a164b61b8958df720df780609cc7ae1a2f4c7f5eee87a69596b0->leave($__internal_f17a5b3d0f39a164b61b8958df720df780609cc7ae1a2f4c7f5eee87a69596b0_prof);

        
        $__internal_c1d6b7b6b2d5bc45838f94b0857dd7ef1365182fb5f2c4ff280c916c2c571619->leave($__internal_c1d6b7b6b2d5bc45838f94b0857dd7ef1365182fb5f2c4ff280c916c2c571619_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9319101e57ec7726d743c9a5b733567fdd4d8a929fd2768243a34fba03a7ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9319101e57ec7726d743c9a5b733567fdd4d8a929fd2768243a34fba03a7ca3->enter($__internal_f9319101e57ec7726d743c9a5b733567fdd4d8a929fd2768243a34fba03a7ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6306bf9a0d650c02adc4adf53197f9d97ca6423e2ba7c8bca6ef2371ebe88f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6306bf9a0d650c02adc4adf53197f9d97ca6423e2ba7c8bca6ef2371ebe88f5a->enter($__internal_6306bf9a0d650c02adc4adf53197f9d97ca6423e2ba7c8bca6ef2371ebe88f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6306bf9a0d650c02adc4adf53197f9d97ca6423e2ba7c8bca6ef2371ebe88f5a->leave($__internal_6306bf9a0d650c02adc4adf53197f9d97ca6423e2ba7c8bca6ef2371ebe88f5a_prof);

        
        $__internal_f9319101e57ec7726d743c9a5b733567fdd4d8a929fd2768243a34fba03a7ca3->leave($__internal_f9319101e57ec7726d743c9a5b733567fdd4d8a929fd2768243a34fba03a7ca3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/wrusk3/Public/html/menu-quest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
