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
        $__internal_76894fb39ddd16b25fa0d44f217b1fd059414d64683a2771b9952a66b54337b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76894fb39ddd16b25fa0d44f217b1fd059414d64683a2771b9952a66b54337b7->enter($__internal_76894fb39ddd16b25fa0d44f217b1fd059414d64683a2771b9952a66b54337b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_43ebc9bf06a62276e56ad39db90db0a5090c8b5640960cf54f04ef8ea7254030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ebc9bf06a62276e56ad39db90db0a5090c8b5640960cf54f04ef8ea7254030->enter($__internal_43ebc9bf06a62276e56ad39db90db0a5090c8b5640960cf54f04ef8ea7254030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76894fb39ddd16b25fa0d44f217b1fd059414d64683a2771b9952a66b54337b7->leave($__internal_76894fb39ddd16b25fa0d44f217b1fd059414d64683a2771b9952a66b54337b7_prof);

        
        $__internal_43ebc9bf06a62276e56ad39db90db0a5090c8b5640960cf54f04ef8ea7254030->leave($__internal_43ebc9bf06a62276e56ad39db90db0a5090c8b5640960cf54f04ef8ea7254030_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e1d694cdcdaeb5d21a5aaa7519dcc6cbab4113e3a58ee3bf2fccd6d69011f8c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d694cdcdaeb5d21a5aaa7519dcc6cbab4113e3a58ee3bf2fccd6d69011f8c1->enter($__internal_e1d694cdcdaeb5d21a5aaa7519dcc6cbab4113e3a58ee3bf2fccd6d69011f8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_146e39367d81bc7a57ce622e5e24e5b10b926681dea48940b5124295895ec3b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146e39367d81bc7a57ce622e5e24e5b10b926681dea48940b5124295895ec3b2->enter($__internal_146e39367d81bc7a57ce622e5e24e5b10b926681dea48940b5124295895ec3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_146e39367d81bc7a57ce622e5e24e5b10b926681dea48940b5124295895ec3b2->leave($__internal_146e39367d81bc7a57ce622e5e24e5b10b926681dea48940b5124295895ec3b2_prof);

        
        $__internal_e1d694cdcdaeb5d21a5aaa7519dcc6cbab4113e3a58ee3bf2fccd6d69011f8c1->leave($__internal_e1d694cdcdaeb5d21a5aaa7519dcc6cbab4113e3a58ee3bf2fccd6d69011f8c1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fb1b05653845e2b41bead33996fb0a20a339baa3ed0fb13c08ecdf193110c6bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb1b05653845e2b41bead33996fb0a20a339baa3ed0fb13c08ecdf193110c6bd->enter($__internal_fb1b05653845e2b41bead33996fb0a20a339baa3ed0fb13c08ecdf193110c6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_472919084393fe08f6b11da29deb58bf1673ae277f02665ae5c7a0e78092d1f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472919084393fe08f6b11da29deb58bf1673ae277f02665ae5c7a0e78092d1f0->enter($__internal_472919084393fe08f6b11da29deb58bf1673ae277f02665ae5c7a0e78092d1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_472919084393fe08f6b11da29deb58bf1673ae277f02665ae5c7a0e78092d1f0->leave($__internal_472919084393fe08f6b11da29deb58bf1673ae277f02665ae5c7a0e78092d1f0_prof);

        
        $__internal_fb1b05653845e2b41bead33996fb0a20a339baa3ed0fb13c08ecdf193110c6bd->leave($__internal_fb1b05653845e2b41bead33996fb0a20a339baa3ed0fb13c08ecdf193110c6bd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1598e8094b22b18ea4512ae7323c8f21267d44860f1ee70c66268aaf9d0d04cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1598e8094b22b18ea4512ae7323c8f21267d44860f1ee70c66268aaf9d0d04cd->enter($__internal_1598e8094b22b18ea4512ae7323c8f21267d44860f1ee70c66268aaf9d0d04cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d611b2a59fbfcaa6b3dd416bf5f15b6f17bbd42dd3cc6adf3146bd2fa21850ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d611b2a59fbfcaa6b3dd416bf5f15b6f17bbd42dd3cc6adf3146bd2fa21850ec->enter($__internal_d611b2a59fbfcaa6b3dd416bf5f15b6f17bbd42dd3cc6adf3146bd2fa21850ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d611b2a59fbfcaa6b3dd416bf5f15b6f17bbd42dd3cc6adf3146bd2fa21850ec->leave($__internal_d611b2a59fbfcaa6b3dd416bf5f15b6f17bbd42dd3cc6adf3146bd2fa21850ec_prof);

        
        $__internal_1598e8094b22b18ea4512ae7323c8f21267d44860f1ee70c66268aaf9d0d04cd->leave($__internal_1598e8094b22b18ea4512ae7323c8f21267d44860f1ee70c66268aaf9d0d04cd_prof);

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
