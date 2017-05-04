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
        $__internal_4aec7b9d0c9dd38c1ca04f018d863a3576993257a7d22fbba07377df9e39db4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aec7b9d0c9dd38c1ca04f018d863a3576993257a7d22fbba07377df9e39db4e->enter($__internal_4aec7b9d0c9dd38c1ca04f018d863a3576993257a7d22fbba07377df9e39db4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a58543dd13ec780f7859557080ccb0ba683ca8e2509f082e5f3c49e0460039ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58543dd13ec780f7859557080ccb0ba683ca8e2509f082e5f3c49e0460039ac->enter($__internal_a58543dd13ec780f7859557080ccb0ba683ca8e2509f082e5f3c49e0460039ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aec7b9d0c9dd38c1ca04f018d863a3576993257a7d22fbba07377df9e39db4e->leave($__internal_4aec7b9d0c9dd38c1ca04f018d863a3576993257a7d22fbba07377df9e39db4e_prof);

        
        $__internal_a58543dd13ec780f7859557080ccb0ba683ca8e2509f082e5f3c49e0460039ac->leave($__internal_a58543dd13ec780f7859557080ccb0ba683ca8e2509f082e5f3c49e0460039ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7599f87802bb5d21bf60a553efd4339e3fd5184146d94399522f130981d4f38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7599f87802bb5d21bf60a553efd4339e3fd5184146d94399522f130981d4f38c->enter($__internal_7599f87802bb5d21bf60a553efd4339e3fd5184146d94399522f130981d4f38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_245652e32dedea89b4c0da89d9aa00d683359ca32089c251babf3ef8122f8d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245652e32dedea89b4c0da89d9aa00d683359ca32089c251babf3ef8122f8d23->enter($__internal_245652e32dedea89b4c0da89d9aa00d683359ca32089c251babf3ef8122f8d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_245652e32dedea89b4c0da89d9aa00d683359ca32089c251babf3ef8122f8d23->leave($__internal_245652e32dedea89b4c0da89d9aa00d683359ca32089c251babf3ef8122f8d23_prof);

        
        $__internal_7599f87802bb5d21bf60a553efd4339e3fd5184146d94399522f130981d4f38c->leave($__internal_7599f87802bb5d21bf60a553efd4339e3fd5184146d94399522f130981d4f38c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_15c94ba637e3d548b1f97685ed696b2683fc0f98eaac43d33e78ba0e1a8912f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c94ba637e3d548b1f97685ed696b2683fc0f98eaac43d33e78ba0e1a8912f5->enter($__internal_15c94ba637e3d548b1f97685ed696b2683fc0f98eaac43d33e78ba0e1a8912f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b28ce38744c4d61dbb2ed91c190abbfd03f7684174c0f6f7553e53b81f3dcd49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b28ce38744c4d61dbb2ed91c190abbfd03f7684174c0f6f7553e53b81f3dcd49->enter($__internal_b28ce38744c4d61dbb2ed91c190abbfd03f7684174c0f6f7553e53b81f3dcd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b28ce38744c4d61dbb2ed91c190abbfd03f7684174c0f6f7553e53b81f3dcd49->leave($__internal_b28ce38744c4d61dbb2ed91c190abbfd03f7684174c0f6f7553e53b81f3dcd49_prof);

        
        $__internal_15c94ba637e3d548b1f97685ed696b2683fc0f98eaac43d33e78ba0e1a8912f5->leave($__internal_15c94ba637e3d548b1f97685ed696b2683fc0f98eaac43d33e78ba0e1a8912f5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_221406f3d3f8ab331b3b97a72d0179df10a15ce5e6f5a38a91971fc1afe89dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221406f3d3f8ab331b3b97a72d0179df10a15ce5e6f5a38a91971fc1afe89dea->enter($__internal_221406f3d3f8ab331b3b97a72d0179df10a15ce5e6f5a38a91971fc1afe89dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e6d250776f114bb0eb7809989e5eac4804092aad6b29201dd89266facdce3725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d250776f114bb0eb7809989e5eac4804092aad6b29201dd89266facdce3725->enter($__internal_e6d250776f114bb0eb7809989e5eac4804092aad6b29201dd89266facdce3725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e6d250776f114bb0eb7809989e5eac4804092aad6b29201dd89266facdce3725->leave($__internal_e6d250776f114bb0eb7809989e5eac4804092aad6b29201dd89266facdce3725_prof);

        
        $__internal_221406f3d3f8ab331b3b97a72d0179df10a15ce5e6f5a38a91971fc1afe89dea->leave($__internal_221406f3d3f8ab331b3b97a72d0179df10a15ce5e6f5a38a91971fc1afe89dea_prof);

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
