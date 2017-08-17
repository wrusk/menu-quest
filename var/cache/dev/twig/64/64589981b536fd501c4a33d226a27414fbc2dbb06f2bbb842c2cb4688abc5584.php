<?php

/* default/index.html.twig */
class __TwigTemplate_5668d978bca4ce4a0005ace3c7f393a2e19dc7df8534fe6e506485595bf6d259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'menu_quest_message' => array($this, 'block_menu_quest_message'),
            'menu_quest_action_message' => array($this, 'block_menu_quest_action_message'),
            'menu_quest_obelisk' => array($this, 'block_menu_quest_obelisk'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15dcec77e028f2fe4a112b287f8dfccf4f71a07f29c188da6fe0b92102b0e8aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15dcec77e028f2fe4a112b287f8dfccf4f71a07f29c188da6fe0b92102b0e8aa->enter($__internal_15dcec77e028f2fe4a112b287f8dfccf4f71a07f29c188da6fe0b92102b0e8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_4f6989d6eb0df2c54889d0b29bd64eeffe9ea2a0b4de843370c07cb32b8582cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6989d6eb0df2c54889d0b29bd64eeffe9ea2a0b4de843370c07cb32b8582cb->enter($__internal_4f6989d6eb0df2c54889d0b29bd64eeffe9ea2a0b4de843370c07cb32b8582cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15dcec77e028f2fe4a112b287f8dfccf4f71a07f29c188da6fe0b92102b0e8aa->leave($__internal_15dcec77e028f2fe4a112b287f8dfccf4f71a07f29c188da6fe0b92102b0e8aa_prof);

        
        $__internal_4f6989d6eb0df2c54889d0b29bd64eeffe9ea2a0b4de843370c07cb32b8582cb->leave($__internal_4f6989d6eb0df2c54889d0b29bd64eeffe9ea2a0b4de843370c07cb32b8582cb_prof);

    }

    // line 3
    public function block_menu_quest_message($context, array $blocks = array())
    {
        $__internal_f333a05ee7c2968713c6cf68e294f8442ee29bdae3e9a57f27b60e626f759d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f333a05ee7c2968713c6cf68e294f8442ee29bdae3e9a57f27b60e626f759d34->enter($__internal_f333a05ee7c2968713c6cf68e294f8442ee29bdae3e9a57f27b60e626f759d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_quest_message"));

        $__internal_8329af9a66337834cc084622288036bcbb1860a7d83b8ab6608c650373d60e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8329af9a66337834cc084622288036bcbb1860a7d83b8ab6608c650373d60e4a->enter($__internal_8329af9a66337834cc084622288036bcbb1860a7d83b8ab6608c650373d60e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_quest_message"));

        // line 4
        if (twig_test_empty($this->getAttribute((isset($context["response_pkg"]) ? $context["response_pkg"] : $this->getContext($context, "response_pkg")), "mqOpenRooms", array()))) {
            // line 5
            echo "You are traveling the Information Superhighway at a very high speed when you lose<br/>
control of your navigation inside a multi-tiered drop-down menu. You are thoroughly lost,<br/>
but your surroundings look familiar. <br/>
<br/>
Welcome to Menu Quest!</br>
<br/>
NOTE: Using the Menu Links above will reset your game</br>
<br/>
";
        }
        // line 14
        echo "You are in the Main entrance hall. The stone walls are mostly barren, but for the<br/> 
occasional crack in the stone.<br/> 
There is an Exit to the East
";
        
        $__internal_8329af9a66337834cc084622288036bcbb1860a7d83b8ab6608c650373d60e4a->leave($__internal_8329af9a66337834cc084622288036bcbb1860a7d83b8ab6608c650373d60e4a_prof);

        
        $__internal_f333a05ee7c2968713c6cf68e294f8442ee29bdae3e9a57f27b60e626f759d34->leave($__internal_f333a05ee7c2968713c6cf68e294f8442ee29bdae3e9a57f27b60e626f759d34_prof);

    }

    // line 19
    public function block_menu_quest_action_message($context, array $blocks = array())
    {
        $__internal_658f3c6b7638c90d0f52dd26bd6254615dc2affd1acb79a66d80e0f9165f557e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658f3c6b7638c90d0f52dd26bd6254615dc2affd1acb79a66d80e0f9165f557e->enter($__internal_658f3c6b7638c90d0f52dd26bd6254615dc2affd1acb79a66d80e0f9165f557e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_quest_action_message"));

        $__internal_8bade8538c997b8a1e422328a73c72072d9fc390f30e18fa3cf6b895493ad12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bade8538c997b8a1e422328a73c72072d9fc390f30e18fa3cf6b895493ad12d->enter($__internal_8bade8538c997b8a1e422328a73c72072d9fc390f30e18fa3cf6b895493ad12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_quest_action_message"));

        
        $__internal_8bade8538c997b8a1e422328a73c72072d9fc390f30e18fa3cf6b895493ad12d->leave($__internal_8bade8538c997b8a1e422328a73c72072d9fc390f30e18fa3cf6b895493ad12d_prof);

        
        $__internal_658f3c6b7638c90d0f52dd26bd6254615dc2affd1acb79a66d80e0f9165f557e->leave($__internal_658f3c6b7638c90d0f52dd26bd6254615dc2affd1acb79a66d80e0f9165f557e_prof);

    }

    // line 20
    public function block_menu_quest_obelisk($context, array $blocks = array())
    {
        $__internal_7f2d9aac0d4521e0be40530dc5786c762ee371b1a2740d4637ff87b3b81a54ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f2d9aac0d4521e0be40530dc5786c762ee371b1a2740d4637ff87b3b81a54ed->enter($__internal_7f2d9aac0d4521e0be40530dc5786c762ee371b1a2740d4637ff87b3b81a54ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_quest_obelisk"));

        $__internal_146cf72d115bd723a9801086368700a97c17a4bd99cc08168d95d8fe60a6b8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146cf72d115bd723a9801086368700a97c17a4bd99cc08168d95d8fe60a6b8c6->enter($__internal_146cf72d115bd723a9801086368700a97c17a4bd99cc08168d95d8fe60a6b8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_quest_obelisk"));

        echo "There is a mysterious obelisk on the floor with many buttons. Most are unreadable, but the one enscribed with \"Home\" is glowing slightly.";
        
        $__internal_146cf72d115bd723a9801086368700a97c17a4bd99cc08168d95d8fe60a6b8c6->leave($__internal_146cf72d115bd723a9801086368700a97c17a4bd99cc08168d95d8fe60a6b8c6_prof);

        
        $__internal_7f2d9aac0d4521e0be40530dc5786c762ee371b1a2740d4637ff87b3b81a54ed->leave($__internal_7f2d9aac0d4521e0be40530dc5786c762ee371b1a2740d4637ff87b3b81a54ed_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_dad81aa0c45fe549d0e5e94704341ea0db213ef14823205a24b054c10d70293b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad81aa0c45fe549d0e5e94704341ea0db213ef14823205a24b054c10d70293b->enter($__internal_dad81aa0c45fe549d0e5e94704341ea0db213ef14823205a24b054c10d70293b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c6c97fd16fa398e3c2001c25c323d09d97bfd4d6cb2dd5ab133d8a0e9238614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6c97fd16fa398e3c2001c25c323d09d97bfd4d6cb2dd5ab133d8a0e9238614->enter($__internal_4c6c97fd16fa398e3c2001c25c323d09d97bfd4d6cb2dd5ab133d8a0e9238614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "<h1>Menu Quest</h1>
<p>Welcome to Menu Quest. Please enter commands to navigate the Web Site and discover the hidden menu. This navigation represents a state of the art user experience 20 year in the making. Please enjoy exploring these cutting edge navigation tools, and consider what you can do to improve your own Web sites.</p>
";
        
        $__internal_4c6c97fd16fa398e3c2001c25c323d09d97bfd4d6cb2dd5ab133d8a0e9238614->leave($__internal_4c6c97fd16fa398e3c2001c25c323d09d97bfd4d6cb2dd5ab133d8a0e9238614_prof);

        
        $__internal_dad81aa0c45fe549d0e5e94704341ea0db213ef14823205a24b054c10d70293b->leave($__internal_dad81aa0c45fe549d0e5e94704341ea0db213ef14823205a24b054c10d70293b_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 24,  113 => 23,  95 => 20,  78 => 19,  65 => 14,  54 => 5,  52 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block menu_quest_message %}
{% if response_pkg.mqOpenRooms is empty %}
You are traveling the Information Superhighway at a very high speed when you lose<br/>
control of your navigation inside a multi-tiered drop-down menu. You are thoroughly lost,<br/>
but your surroundings look familiar. <br/>
<br/>
Welcome to Menu Quest!</br>
<br/>
NOTE: Using the Menu Links above will reset your game</br>
<br/>
{% endif %}
You are in the Main entrance hall. The stone walls are mostly barren, but for the<br/> 
occasional crack in the stone.<br/> 
There is an Exit to the East
{% endblock %}

{% block menu_quest_action_message %}{% endblock %}
{% block menu_quest_obelisk %}There is a mysterious obelisk on the floor with many buttons. Most are unreadable, but the one enscribed with \"Home\" is glowing slightly.{% endblock %}


{% block body %}
<h1>Menu Quest</h1>
<p>Welcome to Menu Quest. Please enter commands to navigate the Web Site and discover the hidden menu. This navigation represents a state of the art user experience 20 year in the making. Please enjoy exploring these cutting edge navigation tools, and consider what you can do to improve your own Web sites.</p>
{% endblock %}", "default/index.html.twig", "/Users/wrusk3/Public/html/menu-quest/app/Resources/views/default/index.html.twig");
    }
}
