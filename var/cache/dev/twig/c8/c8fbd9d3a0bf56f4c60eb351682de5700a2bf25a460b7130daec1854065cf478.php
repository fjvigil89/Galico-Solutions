<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_aa52129777fb1fb72be330bc97981a11cda2d535e6ec763f96b5dcdbd857bad5 extends Twig_Template
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
        $__internal_609bc7f26f67fa06fd85d68784a6ee330dea509dae8fea54da481733bb9d57b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609bc7f26f67fa06fd85d68784a6ee330dea509dae8fea54da481733bb9d57b7->enter($__internal_609bc7f26f67fa06fd85d68784a6ee330dea509dae8fea54da481733bb9d57b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9a375599198ee76c27b1fb119e9ed5625d2e0cd780d8ad31839bde41d70c3a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a375599198ee76c27b1fb119e9ed5625d2e0cd780d8ad31839bde41d70c3a65->enter($__internal_9a375599198ee76c27b1fb119e9ed5625d2e0cd780d8ad31839bde41d70c3a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_609bc7f26f67fa06fd85d68784a6ee330dea509dae8fea54da481733bb9d57b7->leave($__internal_609bc7f26f67fa06fd85d68784a6ee330dea509dae8fea54da481733bb9d57b7_prof);

        
        $__internal_9a375599198ee76c27b1fb119e9ed5625d2e0cd780d8ad31839bde41d70c3a65->leave($__internal_9a375599198ee76c27b1fb119e9ed5625d2e0cd780d8ad31839bde41d70c3a65_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_24f0a3cbfba86321a9cb76496a61c89cb32cdd957b532ae042f2e1e5666af2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f0a3cbfba86321a9cb76496a61c89cb32cdd957b532ae042f2e1e5666af2f6->enter($__internal_24f0a3cbfba86321a9cb76496a61c89cb32cdd957b532ae042f2e1e5666af2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3f6b0e638ea4c638b9797b0bd0d8c6f59c8550d3308f4299d47572777a0eebe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6b0e638ea4c638b9797b0bd0d8c6f59c8550d3308f4299d47572777a0eebe9->enter($__internal_3f6b0e638ea4c638b9797b0bd0d8c6f59c8550d3308f4299d47572777a0eebe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3f6b0e638ea4c638b9797b0bd0d8c6f59c8550d3308f4299d47572777a0eebe9->leave($__internal_3f6b0e638ea4c638b9797b0bd0d8c6f59c8550d3308f4299d47572777a0eebe9_prof);

        
        $__internal_24f0a3cbfba86321a9cb76496a61c89cb32cdd957b532ae042f2e1e5666af2f6->leave($__internal_24f0a3cbfba86321a9cb76496a61c89cb32cdd957b532ae042f2e1e5666af2f6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87943c5d58f539e8cc3b32f4f40ef025ff0a2aa27a58b7f802bb001681e18d57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87943c5d58f539e8cc3b32f4f40ef025ff0a2aa27a58b7f802bb001681e18d57->enter($__internal_87943c5d58f539e8cc3b32f4f40ef025ff0a2aa27a58b7f802bb001681e18d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5619adc0ebb2e5bf22497f03a1b5b557436a7ac708ab018c9c676138f7fcf570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5619adc0ebb2e5bf22497f03a1b5b557436a7ac708ab018c9c676138f7fcf570->enter($__internal_5619adc0ebb2e5bf22497f03a1b5b557436a7ac708ab018c9c676138f7fcf570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5619adc0ebb2e5bf22497f03a1b5b557436a7ac708ab018c9c676138f7fcf570->leave($__internal_5619adc0ebb2e5bf22497f03a1b5b557436a7ac708ab018c9c676138f7fcf570_prof);

        
        $__internal_87943c5d58f539e8cc3b32f4f40ef025ff0a2aa27a58b7f802bb001681e18d57->leave($__internal_87943c5d58f539e8cc3b32f4f40ef025ff0a2aa27a58b7f802bb001681e18d57_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5bb0e5faf8299f575310640dee7d72456fc3612df48aba1c6ec2de8298a5e6c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb0e5faf8299f575310640dee7d72456fc3612df48aba1c6ec2de8298a5e6c3->enter($__internal_5bb0e5faf8299f575310640dee7d72456fc3612df48aba1c6ec2de8298a5e6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d4fab6b57b3ae2b1dc631c4a0fad6b0cb30bf285bce8ca9b6c45e3c73f46133a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fab6b57b3ae2b1dc631c4a0fad6b0cb30bf285bce8ca9b6c45e3c73f46133a->enter($__internal_d4fab6b57b3ae2b1dc631c4a0fad6b0cb30bf285bce8ca9b6c45e3c73f46133a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d4fab6b57b3ae2b1dc631c4a0fad6b0cb30bf285bce8ca9b6c45e3c73f46133a->leave($__internal_d4fab6b57b3ae2b1dc631c4a0fad6b0cb30bf285bce8ca9b6c45e3c73f46133a_prof);

        
        $__internal_5bb0e5faf8299f575310640dee7d72456fc3612df48aba1c6ec2de8298a5e6c3->leave($__internal_5bb0e5faf8299f575310640dee7d72456fc3612df48aba1c6ec2de8298a5e6c3_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\generalpro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
