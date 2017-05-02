<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4f8013b187e7a49949aa24d25b57f82dbf6736c4d0afe406f5b012001d79496f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e4013d8bf76580e6d9737471bf54558811c472e19499dd4a180dfef20589f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e4013d8bf76580e6d9737471bf54558811c472e19499dd4a180dfef20589f0f->enter($__internal_0e4013d8bf76580e6d9737471bf54558811c472e19499dd4a180dfef20589f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1f89796262ab3af7596ac6311f49154282c91bd33cc181e57ec73d896f6d5e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f89796262ab3af7596ac6311f49154282c91bd33cc181e57ec73d896f6d5e2b->enter($__internal_1f89796262ab3af7596ac6311f49154282c91bd33cc181e57ec73d896f6d5e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e4013d8bf76580e6d9737471bf54558811c472e19499dd4a180dfef20589f0f->leave($__internal_0e4013d8bf76580e6d9737471bf54558811c472e19499dd4a180dfef20589f0f_prof);

        
        $__internal_1f89796262ab3af7596ac6311f49154282c91bd33cc181e57ec73d896f6d5e2b->leave($__internal_1f89796262ab3af7596ac6311f49154282c91bd33cc181e57ec73d896f6d5e2b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e63c34a8ebc4a7c62d73ec1c614e1c1aa6461c24ae82abd821003567922c9f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63c34a8ebc4a7c62d73ec1c614e1c1aa6461c24ae82abd821003567922c9f57->enter($__internal_e63c34a8ebc4a7c62d73ec1c614e1c1aa6461c24ae82abd821003567922c9f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d6107602ae13046b4be342987408d88b659d40e064d77bca5e330e6d5a7b4be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6107602ae13046b4be342987408d88b659d40e064d77bca5e330e6d5a7b4be5->enter($__internal_d6107602ae13046b4be342987408d88b659d40e064d77bca5e330e6d5a7b4be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d6107602ae13046b4be342987408d88b659d40e064d77bca5e330e6d5a7b4be5->leave($__internal_d6107602ae13046b4be342987408d88b659d40e064d77bca5e330e6d5a7b4be5_prof);

        
        $__internal_e63c34a8ebc4a7c62d73ec1c614e1c1aa6461c24ae82abd821003567922c9f57->leave($__internal_e63c34a8ebc4a7c62d73ec1c614e1c1aa6461c24ae82abd821003567922c9f57_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0aa73d34802fdb15b8c6fe78a105741282c797cfc276f4b9d7af2df566ee6d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa73d34802fdb15b8c6fe78a105741282c797cfc276f4b9d7af2df566ee6d7e->enter($__internal_0aa73d34802fdb15b8c6fe78a105741282c797cfc276f4b9d7af2df566ee6d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c61c974e3ab629cfc5e818b37427cacfb1e179f818370c98123160bf2876bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c61c974e3ab629cfc5e818b37427cacfb1e179f818370c98123160bf2876bb9->enter($__internal_4c61c974e3ab629cfc5e818b37427cacfb1e179f818370c98123160bf2876bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4c61c974e3ab629cfc5e818b37427cacfb1e179f818370c98123160bf2876bb9->leave($__internal_4c61c974e3ab629cfc5e818b37427cacfb1e179f818370c98123160bf2876bb9_prof);

        
        $__internal_0aa73d34802fdb15b8c6fe78a105741282c797cfc276f4b9d7af2df566ee6d7e->leave($__internal_0aa73d34802fdb15b8c6fe78a105741282c797cfc276f4b9d7af2df566ee6d7e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3fcfb2921316c9ddde290750bc3d91d77a598af68c3918f906d6990fb8e4d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3fcfb2921316c9ddde290750bc3d91d77a598af68c3918f906d6990fb8e4d0a->enter($__internal_d3fcfb2921316c9ddde290750bc3d91d77a598af68c3918f906d6990fb8e4d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f01daa31fd97847d009a4523e08b16d12349c1b8865c7f0b652f52a30fe07946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01daa31fd97847d009a4523e08b16d12349c1b8865c7f0b652f52a30fe07946->enter($__internal_f01daa31fd97847d009a4523e08b16d12349c1b8865c7f0b652f52a30fe07946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f01daa31fd97847d009a4523e08b16d12349c1b8865c7f0b652f52a30fe07946->leave($__internal_f01daa31fd97847d009a4523e08b16d12349c1b8865c7f0b652f52a30fe07946_prof);

        
        $__internal_d3fcfb2921316c9ddde290750bc3d91d77a598af68c3918f906d6990fb8e4d0a->leave($__internal_d3fcfb2921316c9ddde290750bc3d91d77a598af68c3918f906d6990fb8e4d0a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\generalproprojet\\general-pro-symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
