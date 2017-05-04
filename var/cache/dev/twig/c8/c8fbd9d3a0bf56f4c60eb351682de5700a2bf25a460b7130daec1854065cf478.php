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
        $__internal_758f3e11b15e0a398ac8d6c1971b5ac1c928678f2bcfafa6674ea30581e2759e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758f3e11b15e0a398ac8d6c1971b5ac1c928678f2bcfafa6674ea30581e2759e->enter($__internal_758f3e11b15e0a398ac8d6c1971b5ac1c928678f2bcfafa6674ea30581e2759e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_56e3fca543f03db142ab6e668c75ac9e0f495d050861dde4af73c07a9c79bd11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e3fca543f03db142ab6e668c75ac9e0f495d050861dde4af73c07a9c79bd11->enter($__internal_56e3fca543f03db142ab6e668c75ac9e0f495d050861dde4af73c07a9c79bd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_758f3e11b15e0a398ac8d6c1971b5ac1c928678f2bcfafa6674ea30581e2759e->leave($__internal_758f3e11b15e0a398ac8d6c1971b5ac1c928678f2bcfafa6674ea30581e2759e_prof);

        
        $__internal_56e3fca543f03db142ab6e668c75ac9e0f495d050861dde4af73c07a9c79bd11->leave($__internal_56e3fca543f03db142ab6e668c75ac9e0f495d050861dde4af73c07a9c79bd11_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c5ae8bc9cec814ad32185393daa12c555762b62c417a764568d84302d0bd5c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ae8bc9cec814ad32185393daa12c555762b62c417a764568d84302d0bd5c3c->enter($__internal_c5ae8bc9cec814ad32185393daa12c555762b62c417a764568d84302d0bd5c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_83d87579cd0b79c97b8f89211fd218def542813262c28403abda854d9d02d988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d87579cd0b79c97b8f89211fd218def542813262c28403abda854d9d02d988->enter($__internal_83d87579cd0b79c97b8f89211fd218def542813262c28403abda854d9d02d988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_83d87579cd0b79c97b8f89211fd218def542813262c28403abda854d9d02d988->leave($__internal_83d87579cd0b79c97b8f89211fd218def542813262c28403abda854d9d02d988_prof);

        
        $__internal_c5ae8bc9cec814ad32185393daa12c555762b62c417a764568d84302d0bd5c3c->leave($__internal_c5ae8bc9cec814ad32185393daa12c555762b62c417a764568d84302d0bd5c3c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cdd61d87fe59a5dae5086081d0c3b7efee4ab20ff78134ce42cac3daf3f53751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd61d87fe59a5dae5086081d0c3b7efee4ab20ff78134ce42cac3daf3f53751->enter($__internal_cdd61d87fe59a5dae5086081d0c3b7efee4ab20ff78134ce42cac3daf3f53751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8b991bcd205f90916ca34099efadd519765fe260e26b07a6dc8624d266934dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b991bcd205f90916ca34099efadd519765fe260e26b07a6dc8624d266934dd2->enter($__internal_8b991bcd205f90916ca34099efadd519765fe260e26b07a6dc8624d266934dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8b991bcd205f90916ca34099efadd519765fe260e26b07a6dc8624d266934dd2->leave($__internal_8b991bcd205f90916ca34099efadd519765fe260e26b07a6dc8624d266934dd2_prof);

        
        $__internal_cdd61d87fe59a5dae5086081d0c3b7efee4ab20ff78134ce42cac3daf3f53751->leave($__internal_cdd61d87fe59a5dae5086081d0c3b7efee4ab20ff78134ce42cac3daf3f53751_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b5044f01593ceadde4e65229ca6c20727de0f4bee9971f504618a4ae15cbaf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b5044f01593ceadde4e65229ca6c20727de0f4bee9971f504618a4ae15cbaf6->enter($__internal_5b5044f01593ceadde4e65229ca6c20727de0f4bee9971f504618a4ae15cbaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_df57f993f93efb0ab4c4f5737900c0c405be10586c54e0ecee9f810a047e1b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df57f993f93efb0ab4c4f5737900c0c405be10586c54e0ecee9f810a047e1b5f->enter($__internal_df57f993f93efb0ab4c4f5737900c0c405be10586c54e0ecee9f810a047e1b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_df57f993f93efb0ab4c4f5737900c0c405be10586c54e0ecee9f810a047e1b5f->leave($__internal_df57f993f93efb0ab4c4f5737900c0c405be10586c54e0ecee9f810a047e1b5f_prof);

        
        $__internal_5b5044f01593ceadde4e65229ca6c20727de0f4bee9971f504618a4ae15cbaf6->leave($__internal_5b5044f01593ceadde4e65229ca6c20727de0f4bee9971f504618a4ae15cbaf6_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\general-pro-symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
