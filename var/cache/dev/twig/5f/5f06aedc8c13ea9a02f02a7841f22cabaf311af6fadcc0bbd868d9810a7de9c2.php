<?php

/* website/register.html.twig */
class __TwigTemplate_a05f478851d2fd584d824b473ad8bb2d3e8d294428a9733ae6a8f00fff303d62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "website/register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce6da18f5b5ba3e32ba55374ce77fc5e1e5de957e977473083c5b2cbd488290a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce6da18f5b5ba3e32ba55374ce77fc5e1e5de957e977473083c5b2cbd488290a->enter($__internal_ce6da18f5b5ba3e32ba55374ce77fc5e1e5de957e977473083c5b2cbd488290a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/register.html.twig"));

        $__internal_a283ba109a119c1b916965b81a9d39e173755144ff2d6c817a38eb0f5fead231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a283ba109a119c1b916965b81a9d39e173755144ff2d6c817a38eb0f5fead231->enter($__internal_a283ba109a119c1b916965b81a9d39e173755144ff2d6c817a38eb0f5fead231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce6da18f5b5ba3e32ba55374ce77fc5e1e5de957e977473083c5b2cbd488290a->leave($__internal_ce6da18f5b5ba3e32ba55374ce77fc5e1e5de957e977473083c5b2cbd488290a_prof);

        
        $__internal_a283ba109a119c1b916965b81a9d39e173755144ff2d6c817a38eb0f5fead231->leave($__internal_a283ba109a119c1b916965b81a9d39e173755144ff2d6c817a38eb0f5fead231_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_035dfd78f0fb1fa6d1ce898e95df4153c5597acb938d304fa596be6b01df2886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_035dfd78f0fb1fa6d1ce898e95df4153c5597acb938d304fa596be6b01df2886->enter($__internal_035dfd78f0fb1fa6d1ce898e95df4153c5597acb938d304fa596be6b01df2886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b0940a966139f5a1ae05b2cfec1130000dc8211b350a706b5ac78dfc6d8436f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0940a966139f5a1ae05b2cfec1130000dc8211b350a706b5ac78dfc6d8436f->enter($__internal_3b0940a966139f5a1ae05b2cfec1130000dc8211b350a706b5ac78dfc6d8436f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Register ";
        
        $__internal_3b0940a966139f5a1ae05b2cfec1130000dc8211b350a706b5ac78dfc6d8436f->leave($__internal_3b0940a966139f5a1ae05b2cfec1130000dc8211b350a706b5ac78dfc6d8436f_prof);

        
        $__internal_035dfd78f0fb1fa6d1ce898e95df4153c5597acb938d304fa596be6b01df2886->leave($__internal_035dfd78f0fb1fa6d1ce898e95df4153c5597acb938d304fa596be6b01df2886_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_19f14d54c379c41795ffeb2c51b030dad73393a78ca3b559fc43e9ceb6087255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f14d54c379c41795ffeb2c51b030dad73393a78ca3b559fc43e9ceb6087255->enter($__internal_19f14d54c379c41795ffeb2c51b030dad73393a78ca3b559fc43e9ceb6087255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86d43fcfd6bca98718636ea97bc7e269db8571355d44f11f8df4a24622d81f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d43fcfd6bca98718636ea97bc7e269db8571355d44f11f8df4a24622d81f40->enter($__internal_86d43fcfd6bca98718636ea97bc7e269db8571355d44f11f8df4a24622d81f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"pad\">

</div>
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <h3>Sign Up</h3>

      <form class=\"form-login\">
\t   <div class=\"form-group\">
          <label for=\"firstName\">First name*</label>
          <input type=\"text\" id=\"firstName\">
        </div>
\t\t <div class=\"form-group\">
          <label for=\"lastName\">Last name*</label>
          <input type=\"text\" id=\"lastName\">
        </div>
\t  
        <div class=\"form-group\">
          <label for=\"email\">Email*</label>
          <input type=\"email\" id=\"email\">
        </div>
        <div class=\"form-group\">
          <label for=\"pwd\">Password*</label>
          <input type=\"password\" id=\"pwd\">
        </div>
        <div class=\"form-group\">
          <label for=\"pwd\">Confirm password*</label>
          <input type=\"password\" id=\"cPwd\">
        </div>
\t\t
\t\t<div class=\"form-group\">
          <label for=\"phonePrimary\">Phone (Primary) *</label>
          <input type=\"tel\" id=\"phonePrimary\">
        </div>
\t\t
\t\t<div class=\"form-group\">
          <label for=\"phoneAlternate\">Phone (Alternate)</label>
          <input type=\"tel\" id=\"phoneAlternate\">
        </div>
\t\t <div class=\"form-group\">
          <label for=\"country\">Country*</label>
          <input type=\"text\" id=\"country\">
        </div>
\t\t <div class=\"form-group\">
          <label for=\"state\">State / Province*</label>
          <input type=\"text\" id=\"state\">
        </div>
\t\t <div class=\"form-group\">
          <label for=\"city\">City*</label>
          <input type=\"text\" id=\"city\">
        </div>
\t\t <div class=\"form-group\">
          <label for=\"address\">Address*</label>
          <input type=\"text\" id=\"address\">
        </div>
\t\t <div class=\"form-group\">
          <label for=\"zipCode\">ZipCode*</label>
          <input type=\"text\" id=\"zipCode\">
        </div>
\t\t

        <button type=\"submit\" class=\"btn\">Sign Up</button>
        
        
      </form>


    </div>
  </div>
</div>

";
        
        $__internal_86d43fcfd6bca98718636ea97bc7e269db8571355d44f11f8df4a24622d81f40->leave($__internal_86d43fcfd6bca98718636ea97bc7e269db8571355d44f11f8df4a24622d81f40_prof);

        
        $__internal_19f14d54c379c41795ffeb2c51b030dad73393a78ca3b559fc43e9ceb6087255->leave($__internal_19f14d54c379c41795ffeb2c51b030dad73393a78ca3b559fc43e9ceb6087255_prof);

    }

    public function getTemplateName()
    {
        return "website/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Register {% endblock %}

{% block body %}
<div class=\"pad\">

</div>
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <h3>Sign Up</h3>

      <form class=\"form-login\">
\t   <div class=\"form-group\">
          <label for=\"firstName\">First name*</label>
          <input type=\"text\" id=\"firstName\">
        </div>
\t\t <div class=\"form-group\">
          <label for=\"lastName\">Last name*</label>
          <input type=\"text\" id=\"lastName\">
        </div>
\t  
        <div class=\"form-group\">
          <label for=\"email\">Email*</label>
          <input type=\"email\" id=\"email\">
        </div>
        <div class=\"form-group\">
          <label for=\"pwd\">Password*</label>
          <input type=\"password\" id=\"pwd\">
        </div>
        <div class=\"form-group\">
          <label for=\"pwd\">Confirm password*</label>
          <input type=\"password\" id=\"cPwd\">
        </div>
\t\t
\t\t<div class=\"form-group\">
          <label for=\"phonePrimary\">Phone (Primary) *</label>
          <input type=\"tel\" id=\"phonePrimary\">
        </div>
\t\t
\t\t<div class=\"form-group\">
          <label for=\"phoneAlternate\">Phone (Alternate)</label>
          <input type=\"tel\" id=\"phoneAlternate\">
        </div>
\t\t <div class=\"form-group\">
          <label for=\"country\">Country*</label>
          <input type=\"text\" id=\"country\">
        </div>
\t\t <div class=\"form-group\">
          <label for=\"state\">State / Province*</label>
          <input type=\"text\" id=\"state\">
        </div>
\t\t <div class=\"form-group\">
          <label for=\"city\">City*</label>
          <input type=\"text\" id=\"city\">
        </div>
\t\t <div class=\"form-group\">
          <label for=\"address\">Address*</label>
          <input type=\"text\" id=\"address\">
        </div>
\t\t <div class=\"form-group\">
          <label for=\"zipCode\">ZipCode*</label>
          <input type=\"text\" id=\"zipCode\">
        </div>
\t\t

        <button type=\"submit\" class=\"btn\">Sign Up</button>
        
        
      </form>


    </div>
  </div>
</div>

{% endblock %}", "website/register.html.twig", "C:\\xampp\\htdocs\\general-pro-symfony\\app\\Resources\\views\\website\\register.html.twig");
    }
}
