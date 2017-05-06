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
        $__internal_205f6a849e6342f852edec4786c779daae1066c3a9c6b9e6b87e8cbc3f7192ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205f6a849e6342f852edec4786c779daae1066c3a9c6b9e6b87e8cbc3f7192ea->enter($__internal_205f6a849e6342f852edec4786c779daae1066c3a9c6b9e6b87e8cbc3f7192ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3af5d05762cd2db1d26d116a587f74648d06f9c2a94b30b40dc548cf657c83e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af5d05762cd2db1d26d116a587f74648d06f9c2a94b30b40dc548cf657c83e6->enter($__internal_3af5d05762cd2db1d26d116a587f74648d06f9c2a94b30b40dc548cf657c83e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_205f6a849e6342f852edec4786c779daae1066c3a9c6b9e6b87e8cbc3f7192ea->leave($__internal_205f6a849e6342f852edec4786c779daae1066c3a9c6b9e6b87e8cbc3f7192ea_prof);

        
        $__internal_3af5d05762cd2db1d26d116a587f74648d06f9c2a94b30b40dc548cf657c83e6->leave($__internal_3af5d05762cd2db1d26d116a587f74648d06f9c2a94b30b40dc548cf657c83e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_786dda38abc5643604efb65e96948acfbc572e8a3f4fc9d32ab6a5f417b3d654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_786dda38abc5643604efb65e96948acfbc572e8a3f4fc9d32ab6a5f417b3d654->enter($__internal_786dda38abc5643604efb65e96948acfbc572e8a3f4fc9d32ab6a5f417b3d654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fe8620fe01812a0f50f55a188a95925a2a8d670843af0e1b8927dcca83fde502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe8620fe01812a0f50f55a188a95925a2a8d670843af0e1b8927dcca83fde502->enter($__internal_fe8620fe01812a0f50f55a188a95925a2a8d670843af0e1b8927dcca83fde502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fe8620fe01812a0f50f55a188a95925a2a8d670843af0e1b8927dcca83fde502->leave($__internal_fe8620fe01812a0f50f55a188a95925a2a8d670843af0e1b8927dcca83fde502_prof);

        
        $__internal_786dda38abc5643604efb65e96948acfbc572e8a3f4fc9d32ab6a5f417b3d654->leave($__internal_786dda38abc5643604efb65e96948acfbc572e8a3f4fc9d32ab6a5f417b3d654_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d0eb80f558eedc9cd61ce6f44be58245c20a2a8b8145007463104516bcaa0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0eb80f558eedc9cd61ce6f44be58245c20a2a8b8145007463104516bcaa0fe->enter($__internal_1d0eb80f558eedc9cd61ce6f44be58245c20a2a8b8145007463104516bcaa0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_332442a74624fc887bd7f18aba3c77dd8aaaa9b2646edc4a74353f10f3e1c147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332442a74624fc887bd7f18aba3c77dd8aaaa9b2646edc4a74353f10f3e1c147->enter($__internal_332442a74624fc887bd7f18aba3c77dd8aaaa9b2646edc4a74353f10f3e1c147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_332442a74624fc887bd7f18aba3c77dd8aaaa9b2646edc4a74353f10f3e1c147->leave($__internal_332442a74624fc887bd7f18aba3c77dd8aaaa9b2646edc4a74353f10f3e1c147_prof);

        
        $__internal_1d0eb80f558eedc9cd61ce6f44be58245c20a2a8b8145007463104516bcaa0fe->leave($__internal_1d0eb80f558eedc9cd61ce6f44be58245c20a2a8b8145007463104516bcaa0fe_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b3e82740d5ac900c6f579bd6386c932f4a21eceeb8b333b301fe7b4a8af5c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b3e82740d5ac900c6f579bd6386c932f4a21eceeb8b333b301fe7b4a8af5c81->enter($__internal_4b3e82740d5ac900c6f579bd6386c932f4a21eceeb8b333b301fe7b4a8af5c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc4f44beee17971d726d2d265839d82375b1887cf44ca207a5d6e1395a1b2438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4f44beee17971d726d2d265839d82375b1887cf44ca207a5d6e1395a1b2438->enter($__internal_dc4f44beee17971d726d2d265839d82375b1887cf44ca207a5d6e1395a1b2438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_dc4f44beee17971d726d2d265839d82375b1887cf44ca207a5d6e1395a1b2438->leave($__internal_dc4f44beee17971d726d2d265839d82375b1887cf44ca207a5d6e1395a1b2438_prof);

        
        $__internal_4b3e82740d5ac900c6f579bd6386c932f4a21eceeb8b333b301fe7b4a8af5c81->leave($__internal_4b3e82740d5ac900c6f579bd6386c932f4a21eceeb8b333b301fe7b4a8af5c81_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\general-pro-symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
