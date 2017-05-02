<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8609834dda2935b99a2c9429413b566e1a309f5c308a17555acb78e69f1e82ff extends Twig_Template
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
        $__internal_6e646c2b7d9cbbccbbf0562bfdb3d282b37232144522595248582a66220c1419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e646c2b7d9cbbccbbf0562bfdb3d282b37232144522595248582a66220c1419->enter($__internal_6e646c2b7d9cbbccbbf0562bfdb3d282b37232144522595248582a66220c1419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_aa1626c6bd981e3c8e6a43e3d7bd4131d2ef6368d04aa6d08eac1289224ff4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1626c6bd981e3c8e6a43e3d7bd4131d2ef6368d04aa6d08eac1289224ff4ef->enter($__internal_aa1626c6bd981e3c8e6a43e3d7bd4131d2ef6368d04aa6d08eac1289224ff4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e646c2b7d9cbbccbbf0562bfdb3d282b37232144522595248582a66220c1419->leave($__internal_6e646c2b7d9cbbccbbf0562bfdb3d282b37232144522595248582a66220c1419_prof);

        
        $__internal_aa1626c6bd981e3c8e6a43e3d7bd4131d2ef6368d04aa6d08eac1289224ff4ef->leave($__internal_aa1626c6bd981e3c8e6a43e3d7bd4131d2ef6368d04aa6d08eac1289224ff4ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c383cfea8649898821620849e6a6160e52572d1c53bdaedcc352473b06736eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c383cfea8649898821620849e6a6160e52572d1c53bdaedcc352473b06736eb1->enter($__internal_c383cfea8649898821620849e6a6160e52572d1c53bdaedcc352473b06736eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_37b055230d415e0c13b6548fec2a61f742351a12a1eb6415f31b3ce0a9f269a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b055230d415e0c13b6548fec2a61f742351a12a1eb6415f31b3ce0a9f269a2->enter($__internal_37b055230d415e0c13b6548fec2a61f742351a12a1eb6415f31b3ce0a9f269a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_37b055230d415e0c13b6548fec2a61f742351a12a1eb6415f31b3ce0a9f269a2->leave($__internal_37b055230d415e0c13b6548fec2a61f742351a12a1eb6415f31b3ce0a9f269a2_prof);

        
        $__internal_c383cfea8649898821620849e6a6160e52572d1c53bdaedcc352473b06736eb1->leave($__internal_c383cfea8649898821620849e6a6160e52572d1c53bdaedcc352473b06736eb1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d6642eda549456b781ee9affc51e816584f3e1dc462bbcbaea4459cfa500ca0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6642eda549456b781ee9affc51e816584f3e1dc462bbcbaea4459cfa500ca0f->enter($__internal_d6642eda549456b781ee9affc51e816584f3e1dc462bbcbaea4459cfa500ca0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8c9f3300ab845f59f5195e4fc3295815deaa7a90dd928c7fa22ae316e70683db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9f3300ab845f59f5195e4fc3295815deaa7a90dd928c7fa22ae316e70683db->enter($__internal_8c9f3300ab845f59f5195e4fc3295815deaa7a90dd928c7fa22ae316e70683db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8c9f3300ab845f59f5195e4fc3295815deaa7a90dd928c7fa22ae316e70683db->leave($__internal_8c9f3300ab845f59f5195e4fc3295815deaa7a90dd928c7fa22ae316e70683db_prof);

        
        $__internal_d6642eda549456b781ee9affc51e816584f3e1dc462bbcbaea4459cfa500ca0f->leave($__internal_d6642eda549456b781ee9affc51e816584f3e1dc462bbcbaea4459cfa500ca0f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e291149856ffcb8a57ef3f8ce89576fa496cf718e2dbd1a68a1c979a0a942c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e291149856ffcb8a57ef3f8ce89576fa496cf718e2dbd1a68a1c979a0a942c5->enter($__internal_4e291149856ffcb8a57ef3f8ce89576fa496cf718e2dbd1a68a1c979a0a942c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e9d62eedae02d5a4737ae9a230843b7e8ec82ae5f3fad82f7c74e9070cffefd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d62eedae02d5a4737ae9a230843b7e8ec82ae5f3fad82f7c74e9070cffefd0->enter($__internal_e9d62eedae02d5a4737ae9a230843b7e8ec82ae5f3fad82f7c74e9070cffefd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e9d62eedae02d5a4737ae9a230843b7e8ec82ae5f3fad82f7c74e9070cffefd0->leave($__internal_e9d62eedae02d5a4737ae9a230843b7e8ec82ae5f3fad82f7c74e9070cffefd0_prof);

        
        $__internal_4e291149856ffcb8a57ef3f8ce89576fa496cf718e2dbd1a68a1c979a0a942c5->leave($__internal_4e291149856ffcb8a57ef3f8ce89576fa496cf718e2dbd1a68a1c979a0a942c5_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\generalproprojet\\general-pro-symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
