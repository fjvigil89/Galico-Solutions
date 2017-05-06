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
        $__internal_c1b35bab201ae3cd05f6f6948f2b60eb683653e2b2a490f2a4c8e364a78ac9fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b35bab201ae3cd05f6f6948f2b60eb683653e2b2a490f2a4c8e364a78ac9fb->enter($__internal_c1b35bab201ae3cd05f6f6948f2b60eb683653e2b2a490f2a4c8e364a78ac9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_13760eeadc598c4a71c196c40ca55505b9cadb7f7ccb27860c454a820ad571b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13760eeadc598c4a71c196c40ca55505b9cadb7f7ccb27860c454a820ad571b1->enter($__internal_13760eeadc598c4a71c196c40ca55505b9cadb7f7ccb27860c454a820ad571b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1b35bab201ae3cd05f6f6948f2b60eb683653e2b2a490f2a4c8e364a78ac9fb->leave($__internal_c1b35bab201ae3cd05f6f6948f2b60eb683653e2b2a490f2a4c8e364a78ac9fb_prof);

        
        $__internal_13760eeadc598c4a71c196c40ca55505b9cadb7f7ccb27860c454a820ad571b1->leave($__internal_13760eeadc598c4a71c196c40ca55505b9cadb7f7ccb27860c454a820ad571b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1324ba76349cc24525a040700e58d3babcf82fdd2f059da27c7d0f370cc5653d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1324ba76349cc24525a040700e58d3babcf82fdd2f059da27c7d0f370cc5653d->enter($__internal_1324ba76349cc24525a040700e58d3babcf82fdd2f059da27c7d0f370cc5653d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aa26393e1bb7d97a4795c30faad1a5ab1c37467c9830975ed60b0c19d01713ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa26393e1bb7d97a4795c30faad1a5ab1c37467c9830975ed60b0c19d01713ba->enter($__internal_aa26393e1bb7d97a4795c30faad1a5ab1c37467c9830975ed60b0c19d01713ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_aa26393e1bb7d97a4795c30faad1a5ab1c37467c9830975ed60b0c19d01713ba->leave($__internal_aa26393e1bb7d97a4795c30faad1a5ab1c37467c9830975ed60b0c19d01713ba_prof);

        
        $__internal_1324ba76349cc24525a040700e58d3babcf82fdd2f059da27c7d0f370cc5653d->leave($__internal_1324ba76349cc24525a040700e58d3babcf82fdd2f059da27c7d0f370cc5653d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fda927dab73927265b0b0bbc5b42c0fd7b5e2543a1332d03762c06927e84ccce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda927dab73927265b0b0bbc5b42c0fd7b5e2543a1332d03762c06927e84ccce->enter($__internal_fda927dab73927265b0b0bbc5b42c0fd7b5e2543a1332d03762c06927e84ccce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_40ec5c5f877804a439a39549c94f77bd3240041565fa9bef1b4dc04cbfe4241e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ec5c5f877804a439a39549c94f77bd3240041565fa9bef1b4dc04cbfe4241e->enter($__internal_40ec5c5f877804a439a39549c94f77bd3240041565fa9bef1b4dc04cbfe4241e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_40ec5c5f877804a439a39549c94f77bd3240041565fa9bef1b4dc04cbfe4241e->leave($__internal_40ec5c5f877804a439a39549c94f77bd3240041565fa9bef1b4dc04cbfe4241e_prof);

        
        $__internal_fda927dab73927265b0b0bbc5b42c0fd7b5e2543a1332d03762c06927e84ccce->leave($__internal_fda927dab73927265b0b0bbc5b42c0fd7b5e2543a1332d03762c06927e84ccce_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_06006187d19c36e0ed4dd0708372beea12a1e888983d64f93da988f6b54395a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06006187d19c36e0ed4dd0708372beea12a1e888983d64f93da988f6b54395a1->enter($__internal_06006187d19c36e0ed4dd0708372beea12a1e888983d64f93da988f6b54395a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2f7efeff48633f6ebe073df67a4de59b1d8114fc3625edb794b210aab0096290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7efeff48633f6ebe073df67a4de59b1d8114fc3625edb794b210aab0096290->enter($__internal_2f7efeff48633f6ebe073df67a4de59b1d8114fc3625edb794b210aab0096290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2f7efeff48633f6ebe073df67a4de59b1d8114fc3625edb794b210aab0096290->leave($__internal_2f7efeff48633f6ebe073df67a4de59b1d8114fc3625edb794b210aab0096290_prof);

        
        $__internal_06006187d19c36e0ed4dd0708372beea12a1e888983d64f93da988f6b54395a1->leave($__internal_06006187d19c36e0ed4dd0708372beea12a1e888983d64f93da988f6b54395a1_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\general-pro-symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
