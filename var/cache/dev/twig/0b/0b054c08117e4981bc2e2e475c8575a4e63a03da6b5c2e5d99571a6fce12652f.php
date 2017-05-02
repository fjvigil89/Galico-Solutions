<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e6c32123bc7dccf9b089e4f06070d22e869b418a2b59d2d47d58ebfff8f41661 extends Twig_Template
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
        $__internal_8b706212684b64ac6d592fb4ab6294317e76ec367fe514f15a123dba91ac943c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b706212684b64ac6d592fb4ab6294317e76ec367fe514f15a123dba91ac943c->enter($__internal_8b706212684b64ac6d592fb4ab6294317e76ec367fe514f15a123dba91ac943c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_dbc8b8078c66318b5646bc119ee9956927a6a3ab610b7cf843859f307055319d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc8b8078c66318b5646bc119ee9956927a6a3ab610b7cf843859f307055319d->enter($__internal_dbc8b8078c66318b5646bc119ee9956927a6a3ab610b7cf843859f307055319d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b706212684b64ac6d592fb4ab6294317e76ec367fe514f15a123dba91ac943c->leave($__internal_8b706212684b64ac6d592fb4ab6294317e76ec367fe514f15a123dba91ac943c_prof);

        
        $__internal_dbc8b8078c66318b5646bc119ee9956927a6a3ab610b7cf843859f307055319d->leave($__internal_dbc8b8078c66318b5646bc119ee9956927a6a3ab610b7cf843859f307055319d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7573c5cc51439249b124dc54f0a7f13b9d498d4ca67b48d0928fd979c61b5c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7573c5cc51439249b124dc54f0a7f13b9d498d4ca67b48d0928fd979c61b5c87->enter($__internal_7573c5cc51439249b124dc54f0a7f13b9d498d4ca67b48d0928fd979c61b5c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_979d81f35fc1b912aa7cdcda6df50058048e67391e11ca04552a9dc8e730390f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979d81f35fc1b912aa7cdcda6df50058048e67391e11ca04552a9dc8e730390f->enter($__internal_979d81f35fc1b912aa7cdcda6df50058048e67391e11ca04552a9dc8e730390f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_979d81f35fc1b912aa7cdcda6df50058048e67391e11ca04552a9dc8e730390f->leave($__internal_979d81f35fc1b912aa7cdcda6df50058048e67391e11ca04552a9dc8e730390f_prof);

        
        $__internal_7573c5cc51439249b124dc54f0a7f13b9d498d4ca67b48d0928fd979c61b5c87->leave($__internal_7573c5cc51439249b124dc54f0a7f13b9d498d4ca67b48d0928fd979c61b5c87_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_35318d8c0dad31c050fc3f806d0df48cfecb9e2dc32903866ff99b10e5bf725a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35318d8c0dad31c050fc3f806d0df48cfecb9e2dc32903866ff99b10e5bf725a->enter($__internal_35318d8c0dad31c050fc3f806d0df48cfecb9e2dc32903866ff99b10e5bf725a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fb6de8a85ebda60956f20610e37a9814a048dc29b9c1c402c025c40eeb4a5b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6de8a85ebda60956f20610e37a9814a048dc29b9c1c402c025c40eeb4a5b0c->enter($__internal_fb6de8a85ebda60956f20610e37a9814a048dc29b9c1c402c025c40eeb4a5b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fb6de8a85ebda60956f20610e37a9814a048dc29b9c1c402c025c40eeb4a5b0c->leave($__internal_fb6de8a85ebda60956f20610e37a9814a048dc29b9c1c402c025c40eeb4a5b0c_prof);

        
        $__internal_35318d8c0dad31c050fc3f806d0df48cfecb9e2dc32903866ff99b10e5bf725a->leave($__internal_35318d8c0dad31c050fc3f806d0df48cfecb9e2dc32903866ff99b10e5bf725a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f6ca1702a025dcfad04e497825957c04f0ef90bc08281fe00d46c6cd66030490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ca1702a025dcfad04e497825957c04f0ef90bc08281fe00d46c6cd66030490->enter($__internal_f6ca1702a025dcfad04e497825957c04f0ef90bc08281fe00d46c6cd66030490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_737a899e0cb0747f13346452a9415df83f1a02cd2a7dce94c358d6d2879c0b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737a899e0cb0747f13346452a9415df83f1a02cd2a7dce94c358d6d2879c0b34->enter($__internal_737a899e0cb0747f13346452a9415df83f1a02cd2a7dce94c358d6d2879c0b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_737a899e0cb0747f13346452a9415df83f1a02cd2a7dce94c358d6d2879c0b34->leave($__internal_737a899e0cb0747f13346452a9415df83f1a02cd2a7dce94c358d6d2879c0b34_prof);

        
        $__internal_f6ca1702a025dcfad04e497825957c04f0ef90bc08281fe00d46c6cd66030490->leave($__internal_f6ca1702a025dcfad04e497825957c04f0ef90bc08281fe00d46c6cd66030490_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\generalproprojet\\general-pro-symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
