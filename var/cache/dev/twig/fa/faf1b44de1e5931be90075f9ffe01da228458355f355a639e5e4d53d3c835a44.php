<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_414e2cfb22f704342c952b34101ff9a4f7cf1c9e78bca8669ad22b976c0b5da2 extends Twig_Template
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
        $__internal_8879b16c84d4e2230c4770385159c5bf7dba45b2c872675e383d1377d68d8424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8879b16c84d4e2230c4770385159c5bf7dba45b2c872675e383d1377d68d8424->enter($__internal_8879b16c84d4e2230c4770385159c5bf7dba45b2c872675e383d1377d68d8424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cb27048ad8d7970b7e02d153bb7a8ad1c775640d54c1b365dd731ccdc577b38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb27048ad8d7970b7e02d153bb7a8ad1c775640d54c1b365dd731ccdc577b38a->enter($__internal_cb27048ad8d7970b7e02d153bb7a8ad1c775640d54c1b365dd731ccdc577b38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8879b16c84d4e2230c4770385159c5bf7dba45b2c872675e383d1377d68d8424->leave($__internal_8879b16c84d4e2230c4770385159c5bf7dba45b2c872675e383d1377d68d8424_prof);

        
        $__internal_cb27048ad8d7970b7e02d153bb7a8ad1c775640d54c1b365dd731ccdc577b38a->leave($__internal_cb27048ad8d7970b7e02d153bb7a8ad1c775640d54c1b365dd731ccdc577b38a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea76b428a0cfc92410622958b08bd5f2347fa94da9bac31f9aa5359f6c723b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea76b428a0cfc92410622958b08bd5f2347fa94da9bac31f9aa5359f6c723b40->enter($__internal_ea76b428a0cfc92410622958b08bd5f2347fa94da9bac31f9aa5359f6c723b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_acd245226f4cd7c9979b56279cf14df2fb343fae313d5dfe5a6b51fc2d21c344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd245226f4cd7c9979b56279cf14df2fb343fae313d5dfe5a6b51fc2d21c344->enter($__internal_acd245226f4cd7c9979b56279cf14df2fb343fae313d5dfe5a6b51fc2d21c344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_acd245226f4cd7c9979b56279cf14df2fb343fae313d5dfe5a6b51fc2d21c344->leave($__internal_acd245226f4cd7c9979b56279cf14df2fb343fae313d5dfe5a6b51fc2d21c344_prof);

        
        $__internal_ea76b428a0cfc92410622958b08bd5f2347fa94da9bac31f9aa5359f6c723b40->leave($__internal_ea76b428a0cfc92410622958b08bd5f2347fa94da9bac31f9aa5359f6c723b40_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5dc0da5ddc0800b7a442d9294877e3ae7e8e76d5512dcdf278df6811d3c076db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc0da5ddc0800b7a442d9294877e3ae7e8e76d5512dcdf278df6811d3c076db->enter($__internal_5dc0da5ddc0800b7a442d9294877e3ae7e8e76d5512dcdf278df6811d3c076db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ac8b50eea7e62c81e538cc81bb2480096fbdb34e251f08536bf3d01c8e9772cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8b50eea7e62c81e538cc81bb2480096fbdb34e251f08536bf3d01c8e9772cb->enter($__internal_ac8b50eea7e62c81e538cc81bb2480096fbdb34e251f08536bf3d01c8e9772cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ac8b50eea7e62c81e538cc81bb2480096fbdb34e251f08536bf3d01c8e9772cb->leave($__internal_ac8b50eea7e62c81e538cc81bb2480096fbdb34e251f08536bf3d01c8e9772cb_prof);

        
        $__internal_5dc0da5ddc0800b7a442d9294877e3ae7e8e76d5512dcdf278df6811d3c076db->leave($__internal_5dc0da5ddc0800b7a442d9294877e3ae7e8e76d5512dcdf278df6811d3c076db_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e892f4afc20879fa68f76a57ead8cfdef691a2b4a3a2cde8084207acc41e96d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e892f4afc20879fa68f76a57ead8cfdef691a2b4a3a2cde8084207acc41e96d->enter($__internal_4e892f4afc20879fa68f76a57ead8cfdef691a2b4a3a2cde8084207acc41e96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ffeea12e8b3f0ad79b5f3db68cabf7217a156fbc94d659af14c4d41e6f107fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffeea12e8b3f0ad79b5f3db68cabf7217a156fbc94d659af14c4d41e6f107fed->enter($__internal_ffeea12e8b3f0ad79b5f3db68cabf7217a156fbc94d659af14c4d41e6f107fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ffeea12e8b3f0ad79b5f3db68cabf7217a156fbc94d659af14c4d41e6f107fed->leave($__internal_ffeea12e8b3f0ad79b5f3db68cabf7217a156fbc94d659af14c4d41e6f107fed_prof);

        
        $__internal_4e892f4afc20879fa68f76a57ead8cfdef691a2b4a3a2cde8084207acc41e96d->leave($__internal_4e892f4afc20879fa68f76a57ead8cfdef691a2b4a3a2cde8084207acc41e96d_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\generalpro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
