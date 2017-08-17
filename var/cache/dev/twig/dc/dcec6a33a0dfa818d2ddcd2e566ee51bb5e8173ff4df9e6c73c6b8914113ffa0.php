<?php

/* default/about.html.twig */
class __TwigTemplate_631897d324456a6395f523a4ee88ec63e011ff1cbe8955bb740c29542adceba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/about.html.twig", 1);
        $this->blocks = array(
            'menu_quest_message' => array($this, 'block_menu_quest_message'),
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
        $__internal_68bad26a471b75c19022758163dc5b0dfa6a07093c60f5a1c6e4160252327979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68bad26a471b75c19022758163dc5b0dfa6a07093c60f5a1c6e4160252327979->enter($__internal_68bad26a471b75c19022758163dc5b0dfa6a07093c60f5a1c6e4160252327979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/about.html.twig"));

        $__internal_ef67d231b0f52b24e8b06804f72d263a9375673ec28389f33c845e8451279fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef67d231b0f52b24e8b06804f72d263a9375673ec28389f33c845e8451279fc4->enter($__internal_ef67d231b0f52b24e8b06804f72d263a9375673ec28389f33c845e8451279fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68bad26a471b75c19022758163dc5b0dfa6a07093c60f5a1c6e4160252327979->leave($__internal_68bad26a471b75c19022758163dc5b0dfa6a07093c60f5a1c6e4160252327979_prof);

        
        $__internal_ef67d231b0f52b24e8b06804f72d263a9375673ec28389f33c845e8451279fc4->leave($__internal_ef67d231b0f52b24e8b06804f72d263a9375673ec28389f33c845e8451279fc4_prof);

    }

    // line 3
    public function block_menu_quest_message($context, array $blocks = array())
    {
        $__internal_a85d58675325bbe1d10d25f47af4cb3faa341196c3bdc8e7f7336e5464f5af03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a85d58675325bbe1d10d25f47af4cb3faa341196c3bdc8e7f7336e5464f5af03->enter($__internal_a85d58675325bbe1d10d25f47af4cb3faa341196c3bdc8e7f7336e5464f5af03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_quest_message"));

        $__internal_023263d545e01e7db5abc9386b0c46aca441b4011cabfa4424e2c2bd8d742cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023263d545e01e7db5abc9386b0c46aca441b4011cabfa4424e2c2bd8d742cb0->enter($__internal_023263d545e01e7db5abc9386b0c46aca441b4011cabfa4424e2c2bd8d742cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_quest_message"));

        // line 4
        echo "You find yourself in a room with a meticulously carved statue.<br/> 
It is engraved with the words \"Your Host\".<br/>
There are exits to the East and West. <br/>

";
        
        $__internal_023263d545e01e7db5abc9386b0c46aca441b4011cabfa4424e2c2bd8d742cb0->leave($__internal_023263d545e01e7db5abc9386b0c46aca441b4011cabfa4424e2c2bd8d742cb0_prof);

        
        $__internal_a85d58675325bbe1d10d25f47af4cb3faa341196c3bdc8e7f7336e5464f5af03->leave($__internal_a85d58675325bbe1d10d25f47af4cb3faa341196c3bdc8e7f7336e5464f5af03_prof);

    }

    // line 10
    public function block_menu_quest_obelisk($context, array $blocks = array())
    {
        $__internal_1cbf7b18e548042a0b3981744a4fd159f515cdf5dad7ba7261b651b33c2c715b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cbf7b18e548042a0b3981744a4fd159f515cdf5dad7ba7261b651b33c2c715b->enter($__internal_1cbf7b18e548042a0b3981744a4fd159f515cdf5dad7ba7261b651b33c2c715b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_quest_obelisk"));

        $__internal_64e5026fc8476a6a7c8f27e03344bc6aae73b7d81bc95f36d6a1530dd5b51c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e5026fc8476a6a7c8f27e03344bc6aae73b7d81bc95f36d6a1530dd5b51c5a->enter($__internal_64e5026fc8476a6a7c8f27e03344bc6aae73b7d81bc95f36d6a1530dd5b51c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_quest_obelisk"));

        echo "There is a mysterious obelisk on the floor with many buttons. Most are unreadable, but the one enscribed with \"About Me\" is glowing slightly.";
        
        $__internal_64e5026fc8476a6a7c8f27e03344bc6aae73b7d81bc95f36d6a1530dd5b51c5a->leave($__internal_64e5026fc8476a6a7c8f27e03344bc6aae73b7d81bc95f36d6a1530dd5b51c5a_prof);

        
        $__internal_1cbf7b18e548042a0b3981744a4fd159f515cdf5dad7ba7261b651b33c2c715b->leave($__internal_1cbf7b18e548042a0b3981744a4fd159f515cdf5dad7ba7261b651b33c2c715b_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_daaef76a5f3cf3694a41c9356068af3d63c95f6dc32755f904c23597329c2171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daaef76a5f3cf3694a41c9356068af3d63c95f6dc32755f904c23597329c2171->enter($__internal_daaef76a5f3cf3694a41c9356068af3d63c95f6dc32755f904c23597329c2171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75d982d90a101e36d02c6b733c2436fd2efc7dd505dd01a1cb3024ff3c39b0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d982d90a101e36d02c6b733c2436fd2efc7dd505dd01a1cb3024ff3c39b0cf->enter($__internal_75d982d90a101e36d02c6b733c2436fd2efc7dd505dd01a1cb3024ff3c39b0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "<h1>About Me</h1>
<p>I am a developer from Atlanta that has basically been working with the World Wide Web since there has been a World Wide Web to work with. Some of the first things that I programmed were text adventures written in Basic. It was fun finding a way to bring two different development experiences to you in an interesting mash-up. If you want to find out more about me, please check out my about.me profile.</p>
";
        
        $__internal_75d982d90a101e36d02c6b733c2436fd2efc7dd505dd01a1cb3024ff3c39b0cf->leave($__internal_75d982d90a101e36d02c6b733c2436fd2efc7dd505dd01a1cb3024ff3c39b0cf_prof);

        
        $__internal_daaef76a5f3cf3694a41c9356068af3d63c95f6dc32755f904c23597329c2171->leave($__internal_daaef76a5f3cf3694a41c9356068af3d63c95f6dc32755f904c23597329c2171_prof);

    }

    public function getTemplateName()
    {
        return "default/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 13,  83 => 12,  65 => 10,  51 => 4,  42 => 3,  11 => 1,);
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
You find yourself in a room with a meticulously carved statue.<br/> 
It is engraved with the words \"Your Host\".<br/>
There are exits to the East and West. <br/>

{% endblock %}

{% block menu_quest_obelisk %}There is a mysterious obelisk on the floor with many buttons. Most are unreadable, but the one enscribed with \"About Me\" is glowing slightly.{% endblock %}

{% block body %}
<h1>About Me</h1>
<p>I am a developer from Atlanta that has basically been working with the World Wide Web since there has been a World Wide Web to work with. Some of the first things that I programmed were text adventures written in Basic. It was fun finding a way to bring two different development experiences to you in an interesting mash-up. If you want to find out more about me, please check out my about.me profile.</p>
{% endblock %}
", "default/about.html.twig", "/Users/wrusk3/Public/html/menu-quest/app/Resources/views/default/about.html.twig");
    }
}
