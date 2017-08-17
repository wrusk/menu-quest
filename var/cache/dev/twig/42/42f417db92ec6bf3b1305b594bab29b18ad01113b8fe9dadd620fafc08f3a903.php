<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
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
        $__internal_9cb360e5c33b988e1ab323732ae2cb2a7128cfed61774251d5506b7e51579d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb360e5c33b988e1ab323732ae2cb2a7128cfed61774251d5506b7e51579d93->enter($__internal_9cb360e5c33b988e1ab323732ae2cb2a7128cfed61774251d5506b7e51579d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fbf0467e8ae9c139284f954f7bc8ed22c0d98609221da25a8e26f541eb0a18e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf0467e8ae9c139284f954f7bc8ed22c0d98609221da25a8e26f541eb0a18e7->enter($__internal_fbf0467e8ae9c139284f954f7bc8ed22c0d98609221da25a8e26f541eb0a18e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cb360e5c33b988e1ab323732ae2cb2a7128cfed61774251d5506b7e51579d93->leave($__internal_9cb360e5c33b988e1ab323732ae2cb2a7128cfed61774251d5506b7e51579d93_prof);

        
        $__internal_fbf0467e8ae9c139284f954f7bc8ed22c0d98609221da25a8e26f541eb0a18e7->leave($__internal_fbf0467e8ae9c139284f954f7bc8ed22c0d98609221da25a8e26f541eb0a18e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01082d09e3ae9b426cd9647c7e053b85cc135cb8c8115fd826896fc98f7a850f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01082d09e3ae9b426cd9647c7e053b85cc135cb8c8115fd826896fc98f7a850f->enter($__internal_01082d09e3ae9b426cd9647c7e053b85cc135cb8c8115fd826896fc98f7a850f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c992963e871870707bac6e0844bfa750bfc07740ad622c2cf8ba651bf33ce2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c992963e871870707bac6e0844bfa750bfc07740ad622c2cf8ba651bf33ce2bd->enter($__internal_c992963e871870707bac6e0844bfa750bfc07740ad622c2cf8ba651bf33ce2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c992963e871870707bac6e0844bfa750bfc07740ad622c2cf8ba651bf33ce2bd->leave($__internal_c992963e871870707bac6e0844bfa750bfc07740ad622c2cf8ba651bf33ce2bd_prof);

        
        $__internal_01082d09e3ae9b426cd9647c7e053b85cc135cb8c8115fd826896fc98f7a850f->leave($__internal_01082d09e3ae9b426cd9647c7e053b85cc135cb8c8115fd826896fc98f7a850f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7119112def8e8328bc91575e0cc5880717438f690bc3629d2c0231effe945676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7119112def8e8328bc91575e0cc5880717438f690bc3629d2c0231effe945676->enter($__internal_7119112def8e8328bc91575e0cc5880717438f690bc3629d2c0231effe945676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cf7e9ce6c309070074e1526429219fac1d43a5120e7bbfeecaaeaf8bc7432311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7e9ce6c309070074e1526429219fac1d43a5120e7bbfeecaaeaf8bc7432311->enter($__internal_cf7e9ce6c309070074e1526429219fac1d43a5120e7bbfeecaaeaf8bc7432311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cf7e9ce6c309070074e1526429219fac1d43a5120e7bbfeecaaeaf8bc7432311->leave($__internal_cf7e9ce6c309070074e1526429219fac1d43a5120e7bbfeecaaeaf8bc7432311_prof);

        
        $__internal_7119112def8e8328bc91575e0cc5880717438f690bc3629d2c0231effe945676->leave($__internal_7119112def8e8328bc91575e0cc5880717438f690bc3629d2c0231effe945676_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1eaa1c04cf7e0551f40df84bd8e4c2b0a1b937e2521857b719a8cb7a34330b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eaa1c04cf7e0551f40df84bd8e4c2b0a1b937e2521857b719a8cb7a34330b76->enter($__internal_1eaa1c04cf7e0551f40df84bd8e4c2b0a1b937e2521857b719a8cb7a34330b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a9aa817a861218fb9291763bffd85303e354a362ff6919882f5e25946e9bde13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9aa817a861218fb9291763bffd85303e354a362ff6919882f5e25946e9bde13->enter($__internal_a9aa817a861218fb9291763bffd85303e354a362ff6919882f5e25946e9bde13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a9aa817a861218fb9291763bffd85303e354a362ff6919882f5e25946e9bde13->leave($__internal_a9aa817a861218fb9291763bffd85303e354a362ff6919882f5e25946e9bde13_prof);

        
        $__internal_1eaa1c04cf7e0551f40df84bd8e4c2b0a1b937e2521857b719a8cb7a34330b76->leave($__internal_1eaa1c04cf7e0551f40df84bd8e4c2b0a1b937e2521857b719a8cb7a34330b76_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "/Users/wrusk3/Public/html/menu-quest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
