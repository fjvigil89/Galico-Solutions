<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a6e51eff44a254b3dab9dd1f27bb7fb8f0b362ff639ca0f31718c37572115ff8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da903b65c7a8b22123570ecd3de5ca3fea3e80fe75914884bd2e29980e1bbca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da903b65c7a8b22123570ecd3de5ca3fea3e80fe75914884bd2e29980e1bbca8->enter($__internal_da903b65c7a8b22123570ecd3de5ca3fea3e80fe75914884bd2e29980e1bbca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_aed3ade4fdb232b66408f1ab2733911e97375110adf6305d841b0d4cb633a30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed3ade4fdb232b66408f1ab2733911e97375110adf6305d841b0d4cb633a30f->enter($__internal_aed3ade4fdb232b66408f1ab2733911e97375110adf6305d841b0d4cb633a30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da903b65c7a8b22123570ecd3de5ca3fea3e80fe75914884bd2e29980e1bbca8->leave($__internal_da903b65c7a8b22123570ecd3de5ca3fea3e80fe75914884bd2e29980e1bbca8_prof);

        
        $__internal_aed3ade4fdb232b66408f1ab2733911e97375110adf6305d841b0d4cb633a30f->leave($__internal_aed3ade4fdb232b66408f1ab2733911e97375110adf6305d841b0d4cb633a30f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1fade8ddc5d7bd11a70aea5f35a48e74e7402bf8be3886e41f9a69b4f8269e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fade8ddc5d7bd11a70aea5f35a48e74e7402bf8be3886e41f9a69b4f8269e26->enter($__internal_1fade8ddc5d7bd11a70aea5f35a48e74e7402bf8be3886e41f9a69b4f8269e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a52531a9cb922693c50fc0e7054fb7264bc82998f98aeaa9aab67997918fe7fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52531a9cb922693c50fc0e7054fb7264bc82998f98aeaa9aab67997918fe7fb->enter($__internal_a52531a9cb922693c50fc0e7054fb7264bc82998f98aeaa9aab67997918fe7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a52531a9cb922693c50fc0e7054fb7264bc82998f98aeaa9aab67997918fe7fb->leave($__internal_a52531a9cb922693c50fc0e7054fb7264bc82998f98aeaa9aab67997918fe7fb_prof);

        
        $__internal_1fade8ddc5d7bd11a70aea5f35a48e74e7402bf8be3886e41f9a69b4f8269e26->leave($__internal_1fade8ddc5d7bd11a70aea5f35a48e74e7402bf8be3886e41f9a69b4f8269e26_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\general-pro-symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
