<?php

/* base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header_js' => array($this, 'block_header_js'),
            'menu_quest_message' => array($this, 'block_menu_quest_message'),
            'menu_quest_action_message' => array($this, 'block_menu_quest_action_message'),
            'menu_quest_obelisk' => array($this, 'block_menu_quest_obelisk'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09371f386893a329497a65bdf34b724d34c0226e4213c33ee985a38cd5b01acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09371f386893a329497a65bdf34b724d34c0226e4213c33ee985a38cd5b01acc->enter($__internal_09371f386893a329497a65bdf34b724d34c0226e4213c33ee985a38cd5b01acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5aaef604e97cdc0ac8e00ee248f9d5acf59c566921a1147d70939538f08c270a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aaef604e97cdc0ac8e00ee248f9d5acf59c566921a1147d70939538f08c270a->enter($__internal_5aaef604e97cdc0ac8e00ee248f9d5acf59c566921a1147d70939538f08c270a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 10
        $this->displayBlock('header_js', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
 \t\t<header>Menu Quest</header>
\t\t<nav>\t
\t\t  <a href=\"/\">Home</a>
\t\t  ";
        // line 16
        if (twig_in_filter("about", $this->getAttribute((isset($context["response_pkg"]) ? $context["response_pkg"] : $this->getContext($context, "response_pkg")), "mqOpenRooms", array()))) {
            // line 17
            echo "\t\t  <a href=\"/about\">About Me</a>
\t\t  ";
        }
        // line 19
        echo "\t\t  ";
        if (twig_in_filter("april-fools", $this->getAttribute((isset($context["response_pkg"]) ? $context["response_pkg"] : $this->getContext($context, "response_pkg")), "mqOpenRooms", array()))) {
            // line 20
            echo "\t\t  <a href=\"/april-fools\">April Fools</a>
\t\t  ";
        }
        // line 22
        echo "\t\t  ";
        if (twig_in_filter("projects", $this->getAttribute((isset($context["response_pkg"]) ? $context["response_pkg"] : $this->getContext($context, "response_pkg")), "mqOpenRooms", array()))) {
            // line 23
            echo "\t\t  <a href=\"/projects\">Other Projects</a>
\t\t  ";
        }
        // line 24
        echo "\t\t  
\t\t</nav>
\t\t<section id=\"menuQuestCLI\">
\t\t\t<div id=\"menuQuestMessage\">
\t\t\t\t";
        // line 28
        $this->displayBlock('menu_quest_message', $context, $blocks);
        echo "<br/>
\t\t\t\t";
        // line 29
        $this->displayBlock('menu_quest_action_message', $context, $blocks);
        echo "<br/>
\t\t\t\t";
        // line 30
        $this->displayBlock('menu_quest_obelisk', $context, $blocks);
        // line 31
        echo "\t\t\t</div>
\t\t\t<div id=\"menuQuestInput\">
\t\t\t\t<form>
\t\t\t\t\t<input type=\"hidden\" name=\"mqOpenRooms\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["response_pkg"]) ? $context["response_pkg"] : $this->getContext($context, "response_pkg")), "mqOpenRooms", array()), "html", null, true);
        echo "\">
\t\t\t\t\t<input type=\"text\" name=\"mqUserInput\" autofocus>
\t\t\t\t</form>
\t\t\t</div>
\t\t</section> 
\t\t<main>\t\t   
        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "        </main>
        <footer>";
        // line 42
        $this->displayBlock('footer', $context, $blocks);
        echo "</footer>
        ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    </body>
</html>
";
        
        $__internal_09371f386893a329497a65bdf34b724d34c0226e4213c33ee985a38cd5b01acc->leave($__internal_09371f386893a329497a65bdf34b724d34c0226e4213c33ee985a38cd5b01acc_prof);

        
        $__internal_5aaef604e97cdc0ac8e00ee248f9d5acf59c566921a1147d70939538f08c270a->leave($__internal_5aaef604e97cdc0ac8e00ee248f9d5acf59c566921a1147d70939538f08c270a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c6b95883f597e7b7784e93274ca0be22b3338408abeb2326c4d8d51b6ab17ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6b95883f597e7b7784e93274ca0be22b3338408abeb2326c4d8d51b6ab17ab->enter($__internal_0c6b95883f597e7b7784e93274ca0be22b3338408abeb2326c4d8d51b6ab17ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d7416932b51a5ec45d004f676cb48d04ab07876cec9f124db16aa4e533f13ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7416932b51a5ec45d004f676cb48d04ab07876cec9f124db16aa4e533f13ab9->enter($__internal_d7416932b51a5ec45d004f676cb48d04ab07876cec9f124db16aa4e533f13ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Menu Quest";
        
        $__internal_d7416932b51a5ec45d004f676cb48d04ab07876cec9f124db16aa4e533f13ab9->leave($__internal_d7416932b51a5ec45d004f676cb48d04ab07876cec9f124db16aa4e533f13ab9_prof);

        
        $__internal_0c6b95883f597e7b7784e93274ca0be22b3338408abeb2326c4d8d51b6ab17ab->leave($__internal_0c6b95883f597e7b7784e93274ca0be22b3338408abeb2326c4d8d51b6ab17ab_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c9e6788319e1cabc9bac29cceb803bc9ef310d87349e53cd4d767e3fd19961e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9e6788319e1cabc9bac29cceb803bc9ef310d87349e53cd4d767e3fd19961e9->enter($__internal_c9e6788319e1cabc9bac29cceb803bc9ef310d87349e53cd4d767e3fd19961e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0ac014a1cdc341babf0b05527933113fa946c5fdb6a76824e276de132b393636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac014a1cdc341babf0b05527933113fa946c5fdb6a76824e276de132b393636->enter($__internal_0ac014a1cdc341babf0b05527933113fa946c5fdb6a76824e276de132b393636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/menuQuest.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_0ac014a1cdc341babf0b05527933113fa946c5fdb6a76824e276de132b393636->leave($__internal_0ac014a1cdc341babf0b05527933113fa946c5fdb6a76824e276de132b393636_prof);

        
        $__internal_c9e6788319e1cabc9bac29cceb803bc9ef310d87349e53cd4d767e3fd19961e9->leave($__internal_c9e6788319e1cabc9bac29cceb803bc9ef310d87349e53cd4d767e3fd19961e9_prof);

    }

    // line 10
    public function block_header_js($context, array $blocks = array())
    {
        $__internal_b5fbb180a54d9f2eed52502bb49b12d94b48cf36e92f626a9d78d1d80c7c53f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5fbb180a54d9f2eed52502bb49b12d94b48cf36e92f626a9d78d1d80c7c53f4->enter($__internal_b5fbb180a54d9f2eed52502bb49b12d94b48cf36e92f626a9d78d1d80c7c53f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_js"));

        $__internal_d253dc765ba5bb1956d654d197012c28a4e3d96922d187c3d312ee921f9720e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d253dc765ba5bb1956d654d197012c28a4e3d96922d187c3d312ee921f9720e1->enter($__internal_d253dc765ba5bb1956d654d197012c28a4e3d96922d187c3d312ee921f9720e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_js"));

        
        $__internal_d253dc765ba5bb1956d654d197012c28a4e3d96922d187c3d312ee921f9720e1->leave($__internal_d253dc765ba5bb1956d654d197012c28a4e3d96922d187c3d312ee921f9720e1_prof);

        
        $__internal_b5fbb180a54d9f2eed52502bb49b12d94b48cf36e92f626a9d78d1d80c7c53f4->leave($__internal_b5fbb180a54d9f2eed52502bb49b12d94b48cf36e92f626a9d78d1d80c7c53f4_prof);

    }

    // line 28
    public function block_menu_quest_message($context, array $blocks = array())
    {
        $__internal_50ab2f502e31bc79370d09005aefd952c8c0d871198062008f8946ef9410fc22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ab2f502e31bc79370d09005aefd952c8c0d871198062008f8946ef9410fc22->enter($__internal_50ab2f502e31bc79370d09005aefd952c8c0d871198062008f8946ef9410fc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_quest_message"));

        $__internal_387df5e29b81545ee1835d185b3e24b35b86d9882b76a14ef15a9a1fdaa5c4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387df5e29b81545ee1835d185b3e24b35b86d9882b76a14ef15a9a1fdaa5c4fb->enter($__internal_387df5e29b81545ee1835d185b3e24b35b86d9882b76a14ef15a9a1fdaa5c4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_quest_message"));

        echo "Welcome to Menu Quest";
        
        $__internal_387df5e29b81545ee1835d185b3e24b35b86d9882b76a14ef15a9a1fdaa5c4fb->leave($__internal_387df5e29b81545ee1835d185b3e24b35b86d9882b76a14ef15a9a1fdaa5c4fb_prof);

        
        $__internal_50ab2f502e31bc79370d09005aefd952c8c0d871198062008f8946ef9410fc22->leave($__internal_50ab2f502e31bc79370d09005aefd952c8c0d871198062008f8946ef9410fc22_prof);

    }

    // line 29
    public function block_menu_quest_action_message($context, array $blocks = array())
    {
        $__internal_541cf6e1e13804215d9cbfc24f3ed5508bb30040c930d88e22ecf809c15d0dde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541cf6e1e13804215d9cbfc24f3ed5508bb30040c930d88e22ecf809c15d0dde->enter($__internal_541cf6e1e13804215d9cbfc24f3ed5508bb30040c930d88e22ecf809c15d0dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_quest_action_message"));

        $__internal_2828a2fe7ed14cd198957e2f5afe74996bd4df5608e7922da6a8559c4f19c065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2828a2fe7ed14cd198957e2f5afe74996bd4df5608e7922da6a8559c4f19c065->enter($__internal_2828a2fe7ed14cd198957e2f5afe74996bd4df5608e7922da6a8559c4f19c065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_quest_action_message"));

        
        $__internal_2828a2fe7ed14cd198957e2f5afe74996bd4df5608e7922da6a8559c4f19c065->leave($__internal_2828a2fe7ed14cd198957e2f5afe74996bd4df5608e7922da6a8559c4f19c065_prof);

        
        $__internal_541cf6e1e13804215d9cbfc24f3ed5508bb30040c930d88e22ecf809c15d0dde->leave($__internal_541cf6e1e13804215d9cbfc24f3ed5508bb30040c930d88e22ecf809c15d0dde_prof);

    }

    // line 30
    public function block_menu_quest_obelisk($context, array $blocks = array())
    {
        $__internal_c9243a20409580d64817d6546cc934c84b2e95ae94e721fca7d428a3b3a601eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9243a20409580d64817d6546cc934c84b2e95ae94e721fca7d428a3b3a601eb->enter($__internal_c9243a20409580d64817d6546cc934c84b2e95ae94e721fca7d428a3b3a601eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_quest_obelisk"));

        $__internal_aa79af7da62bf4f9df90726e6161252b1f68c2e02cd167603fb3176ee8719ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa79af7da62bf4f9df90726e6161252b1f68c2e02cd167603fb3176ee8719ba4->enter($__internal_aa79af7da62bf4f9df90726e6161252b1f68c2e02cd167603fb3176ee8719ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_quest_obelisk"));

        
        $__internal_aa79af7da62bf4f9df90726e6161252b1f68c2e02cd167603fb3176ee8719ba4->leave($__internal_aa79af7da62bf4f9df90726e6161252b1f68c2e02cd167603fb3176ee8719ba4_prof);

        
        $__internal_c9243a20409580d64817d6546cc934c84b2e95ae94e721fca7d428a3b3a601eb->leave($__internal_c9243a20409580d64817d6546cc934c84b2e95ae94e721fca7d428a3b3a601eb_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ab21711b93b699e0876c2d05a957a65a44fe17d204bf659cee38cfa90e47e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab21711b93b699e0876c2d05a957a65a44fe17d204bf659cee38cfa90e47e74->enter($__internal_3ab21711b93b699e0876c2d05a957a65a44fe17d204bf659cee38cfa90e47e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29cedd7011a18d976c42f053f19f4d1ba059278511b3f2b426801c927dcf7003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29cedd7011a18d976c42f053f19f4d1ba059278511b3f2b426801c927dcf7003->enter($__internal_29cedd7011a18d976c42f053f19f4d1ba059278511b3f2b426801c927dcf7003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_29cedd7011a18d976c42f053f19f4d1ba059278511b3f2b426801c927dcf7003->leave($__internal_29cedd7011a18d976c42f053f19f4d1ba059278511b3f2b426801c927dcf7003_prof);

        
        $__internal_3ab21711b93b699e0876c2d05a957a65a44fe17d204bf659cee38cfa90e47e74->leave($__internal_3ab21711b93b699e0876c2d05a957a65a44fe17d204bf659cee38cfa90e47e74_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b919e273e9a1b79c2e9b6f5d1d9f909a182091fb3d9d4a16e715fdd72ca9b278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b919e273e9a1b79c2e9b6f5d1d9f909a182091fb3d9d4a16e715fdd72ca9b278->enter($__internal_b919e273e9a1b79c2e9b6f5d1d9f909a182091fb3d9d4a16e715fdd72ca9b278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6e7164420e68986ff2351bd266c9f41446afdc5ef908a985f46184fe179f050c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7164420e68986ff2351bd266c9f41446afdc5ef908a985f46184fe179f050c->enter($__internal_6e7164420e68986ff2351bd266c9f41446afdc5ef908a985f46184fe179f050c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6e7164420e68986ff2351bd266c9f41446afdc5ef908a985f46184fe179f050c->leave($__internal_6e7164420e68986ff2351bd266c9f41446afdc5ef908a985f46184fe179f050c_prof);

        
        $__internal_b919e273e9a1b79c2e9b6f5d1d9f909a182091fb3d9d4a16e715fdd72ca9b278->leave($__internal_b919e273e9a1b79c2e9b6f5d1d9f909a182091fb3d9d4a16e715fdd72ca9b278_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c845cc70aa4278d8a2acf7da0ef3222663a0b28d74e8ca57dea125f49258611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c845cc70aa4278d8a2acf7da0ef3222663a0b28d74e8ca57dea125f49258611->enter($__internal_8c845cc70aa4278d8a2acf7da0ef3222663a0b28d74e8ca57dea125f49258611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b40569b6a8cce0d768658e68cd2eff6d750b235e94be3dfaf781fafe67f7b62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40569b6a8cce0d768658e68cd2eff6d750b235e94be3dfaf781fafe67f7b62b->enter($__internal_b40569b6a8cce0d768658e68cd2eff6d750b235e94be3dfaf781fafe67f7b62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b40569b6a8cce0d768658e68cd2eff6d750b235e94be3dfaf781fafe67f7b62b->leave($__internal_b40569b6a8cce0d768658e68cd2eff6d750b235e94be3dfaf781fafe67f7b62b_prof);

        
        $__internal_8c845cc70aa4278d8a2acf7da0ef3222663a0b28d74e8ca57dea125f49258611->leave($__internal_8c845cc70aa4278d8a2acf7da0ef3222663a0b28d74e8ca57dea125f49258611_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 43,  259 => 42,  242 => 40,  225 => 30,  208 => 29,  190 => 28,  173 => 10,  160 => 7,  151 => 6,  133 => 5,  121 => 44,  119 => 43,  115 => 42,  112 => 41,  110 => 40,  101 => 34,  96 => 31,  94 => 30,  90 => 29,  86 => 28,  80 => 24,  76 => 23,  73 => 22,  69 => 20,  66 => 19,  62 => 17,  60 => 16,  53 => 11,  51 => 10,  46 => 9,  44 => 6,  40 => 5,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Menu Quest{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/menuQuest.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        {% block header_js %}{% endblock %}
    </head>
    <body>
 \t\t<header>Menu Quest</header>
\t\t<nav>\t
\t\t  <a href=\"/\">Home</a>
\t\t  {% if 'about' in response_pkg.mqOpenRooms %}
\t\t  <a href=\"/about\">About Me</a>
\t\t  {% endif %}
\t\t  {% if 'april-fools' in response_pkg.mqOpenRooms %}
\t\t  <a href=\"/april-fools\">April Fools</a>
\t\t  {% endif %}
\t\t  {% if 'projects' in response_pkg.mqOpenRooms %}
\t\t  <a href=\"/projects\">Other Projects</a>
\t\t  {% endif %}\t\t  
\t\t</nav>
\t\t<section id=\"menuQuestCLI\">
\t\t\t<div id=\"menuQuestMessage\">
\t\t\t\t{% block menu_quest_message %}Welcome to Menu Quest{% endblock %}<br/>
\t\t\t\t{% block menu_quest_action_message %}{% endblock %}<br/>
\t\t\t\t{% block menu_quest_obelisk %}{% endblock %}
\t\t\t</div>
\t\t\t<div id=\"menuQuestInput\">
\t\t\t\t<form>
\t\t\t\t\t<input type=\"hidden\" name=\"mqOpenRooms\" value=\"{{response_pkg.mqOpenRooms}}\">
\t\t\t\t\t<input type=\"text\" name=\"mqUserInput\" autofocus>
\t\t\t\t</form>
\t\t\t</div>
\t\t</section> 
\t\t<main>\t\t   
        {% block body %}{% endblock %}
        </main>
        <footer>{% block footer %}{% endblock %}</footer>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/wrusk3/Public/html/menu-quest/app/Resources/views/base.html.twig");
    }
}
