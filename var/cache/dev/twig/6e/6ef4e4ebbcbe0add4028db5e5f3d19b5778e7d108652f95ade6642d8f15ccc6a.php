<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ab0e97ebdeb8b1c970cff7216ce7d0dd1ea2593b6bb68a3e2c7f8643f44bbac7 extends Twig_Template
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
        $__internal_6a076595baea56dc60745cd05ee2f14cb1c40babc2c0c76dead1990b41c5af18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a076595baea56dc60745cd05ee2f14cb1c40babc2c0c76dead1990b41c5af18->enter($__internal_6a076595baea56dc60745cd05ee2f14cb1c40babc2c0c76dead1990b41c5af18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_382a02b0616e1cb84a8117029f2df93069859ae5d2041b7626ee1c53b6c805b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382a02b0616e1cb84a8117029f2df93069859ae5d2041b7626ee1c53b6c805b7->enter($__internal_382a02b0616e1cb84a8117029f2df93069859ae5d2041b7626ee1c53b6c805b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a076595baea56dc60745cd05ee2f14cb1c40babc2c0c76dead1990b41c5af18->leave($__internal_6a076595baea56dc60745cd05ee2f14cb1c40babc2c0c76dead1990b41c5af18_prof);

        
        $__internal_382a02b0616e1cb84a8117029f2df93069859ae5d2041b7626ee1c53b6c805b7->leave($__internal_382a02b0616e1cb84a8117029f2df93069859ae5d2041b7626ee1c53b6c805b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9abbeea2d13383e3f849ccb52d5d9bc13d6079c43b2ca0a6992c68c0bf9e465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9abbeea2d13383e3f849ccb52d5d9bc13d6079c43b2ca0a6992c68c0bf9e465->enter($__internal_e9abbeea2d13383e3f849ccb52d5d9bc13d6079c43b2ca0a6992c68c0bf9e465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c6af0fa5fd8d8e3ea3ae8dca3585db348de7e8a619d86e20da2ba90dcb47035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6af0fa5fd8d8e3ea3ae8dca3585db348de7e8a619d86e20da2ba90dcb47035->enter($__internal_3c6af0fa5fd8d8e3ea3ae8dca3585db348de7e8a619d86e20da2ba90dcb47035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3c6af0fa5fd8d8e3ea3ae8dca3585db348de7e8a619d86e20da2ba90dcb47035->leave($__internal_3c6af0fa5fd8d8e3ea3ae8dca3585db348de7e8a619d86e20da2ba90dcb47035_prof);

        
        $__internal_e9abbeea2d13383e3f849ccb52d5d9bc13d6079c43b2ca0a6992c68c0bf9e465->leave($__internal_e9abbeea2d13383e3f849ccb52d5d9bc13d6079c43b2ca0a6992c68c0bf9e465_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a8aef19f9b88e3c4ab985510f6ce83efddfb33c781244d40b8e36c44e3fc7b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8aef19f9b88e3c4ab985510f6ce83efddfb33c781244d40b8e36c44e3fc7b1->enter($__internal_3a8aef19f9b88e3c4ab985510f6ce83efddfb33c781244d40b8e36c44e3fc7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c989b7422f428251fa383cb6848dd704a1f2b87e2629c26071a3852a70be274f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c989b7422f428251fa383cb6848dd704a1f2b87e2629c26071a3852a70be274f->enter($__internal_c989b7422f428251fa383cb6848dd704a1f2b87e2629c26071a3852a70be274f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c989b7422f428251fa383cb6848dd704a1f2b87e2629c26071a3852a70be274f->leave($__internal_c989b7422f428251fa383cb6848dd704a1f2b87e2629c26071a3852a70be274f_prof);

        
        $__internal_3a8aef19f9b88e3c4ab985510f6ce83efddfb33c781244d40b8e36c44e3fc7b1->leave($__internal_3a8aef19f9b88e3c4ab985510f6ce83efddfb33c781244d40b8e36c44e3fc7b1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f0b76c2135bd9da7da527df52a719690a84393a9f60879e37e0ed8124b93a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f0b76c2135bd9da7da527df52a719690a84393a9f60879e37e0ed8124b93a25->enter($__internal_8f0b76c2135bd9da7da527df52a719690a84393a9f60879e37e0ed8124b93a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9243e83f1812550ad1e4343edbeea809d7668cd28b9883b6cf00432e38aee11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9243e83f1812550ad1e4343edbeea809d7668cd28b9883b6cf00432e38aee11a->enter($__internal_9243e83f1812550ad1e4343edbeea809d7668cd28b9883b6cf00432e38aee11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9243e83f1812550ad1e4343edbeea809d7668cd28b9883b6cf00432e38aee11a->leave($__internal_9243e83f1812550ad1e4343edbeea809d7668cd28b9883b6cf00432e38aee11a_prof);

        
        $__internal_8f0b76c2135bd9da7da527df52a719690a84393a9f60879e37e0ed8124b93a25->leave($__internal_8f0b76c2135bd9da7da527df52a719690a84393a9f60879e37e0ed8124b93a25_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\generalpro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
