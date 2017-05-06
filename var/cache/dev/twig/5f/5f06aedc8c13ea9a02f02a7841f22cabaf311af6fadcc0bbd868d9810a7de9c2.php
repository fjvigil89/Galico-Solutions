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
        $__internal_d179c3c4a0c81c7e5af72a9939a7f33eec4e10d34c466eac5f7513510c01aae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d179c3c4a0c81c7e5af72a9939a7f33eec4e10d34c466eac5f7513510c01aae5->enter($__internal_d179c3c4a0c81c7e5af72a9939a7f33eec4e10d34c466eac5f7513510c01aae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/register.html.twig"));

        $__internal_3d1f4c7b7961379e8285099ce2ff1c35137f01d70bd849a114a57227e5718939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1f4c7b7961379e8285099ce2ff1c35137f01d70bd849a114a57227e5718939->enter($__internal_3d1f4c7b7961379e8285099ce2ff1c35137f01d70bd849a114a57227e5718939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d179c3c4a0c81c7e5af72a9939a7f33eec4e10d34c466eac5f7513510c01aae5->leave($__internal_d179c3c4a0c81c7e5af72a9939a7f33eec4e10d34c466eac5f7513510c01aae5_prof);

        
        $__internal_3d1f4c7b7961379e8285099ce2ff1c35137f01d70bd849a114a57227e5718939->leave($__internal_3d1f4c7b7961379e8285099ce2ff1c35137f01d70bd849a114a57227e5718939_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3e49d317688daafd16613b65dfb139b058bac9edd4cfc0555a044ac14b35415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e49d317688daafd16613b65dfb139b058bac9edd4cfc0555a044ac14b35415->enter($__internal_a3e49d317688daafd16613b65dfb139b058bac9edd4cfc0555a044ac14b35415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_84b1bb8ba34522bc2ebdbc87f4d82288e4a21c294527101d1cc67ceb6a96f132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b1bb8ba34522bc2ebdbc87f4d82288e4a21c294527101d1cc67ceb6a96f132->enter($__internal_84b1bb8ba34522bc2ebdbc87f4d82288e4a21c294527101d1cc67ceb6a96f132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Register ";
        
        $__internal_84b1bb8ba34522bc2ebdbc87f4d82288e4a21c294527101d1cc67ceb6a96f132->leave($__internal_84b1bb8ba34522bc2ebdbc87f4d82288e4a21c294527101d1cc67ceb6a96f132_prof);

        
        $__internal_a3e49d317688daafd16613b65dfb139b058bac9edd4cfc0555a044ac14b35415->leave($__internal_a3e49d317688daafd16613b65dfb139b058bac9edd4cfc0555a044ac14b35415_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_81b19d7558e13879139ee23791449ede16faaf03ae433367d3af9b8df6d8735e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81b19d7558e13879139ee23791449ede16faaf03ae433367d3af9b8df6d8735e->enter($__internal_81b19d7558e13879139ee23791449ede16faaf03ae433367d3af9b8df6d8735e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13027d782a956eb6cc8a2b3cea16e5970e7def93d150005ad63a7cdeceb9b914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13027d782a956eb6cc8a2b3cea16e5970e7def93d150005ad63a7cdeceb9b914->enter($__internal_13027d782a956eb6cc8a2b3cea16e5970e7def93d150005ad63a7cdeceb9b914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"pad\">

</div>
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <h3>Sign Up</h3>

      <form class=\"form-login\" method=\"POST\" action=\"/create-customer\">
\t   <div class=\"form-group\">
          <label for=\"firstName\">First name*</label>
          <input type=\"text\" id=\"firstName\" name=\"firstName\" required>
        </div>
\t\t <div class=\"form-group\">
          <label for=\"lastName\">Last name*</label>
          <input type=\"text\" id=\"lastName\" name=\"lastName\" required>
        </div>
\t  
        <div class=\"form-group\">
          <label for=\"email\">Email*</label>
          <input type=\"email\" id=\"email\" name=\"email\" required>
        </div>
        <div class=\"form-group\">
          <label for=\"pwd\">Password*</label>
          <input type=\"password\" id=\"pwd\" name=\"pwd\" required>
        </div>
        <div class=\"form-group\">
          <label for=\"pwd\">Confirm password*</label>
          <input type=\"password\" id=\"cPwd\" name=\"cPwd\" required>
        </div>
\t\t
\t\t<div class=\"form-group\">
          <label for=\"phonePrimary\">Phone (Primary) *</label>
          <input type=\"tel\" id=\"phonePrimary\" name=\"phonePrimary\" required>
        </div>
\t\t
\t\t<div class=\"form-group\">
          <label for=\"phoneAlternate\">Phone (Alternate)</label>
          <input type=\"tel\" id=\"phoneAlternate\" name=\"phoneAlternate\">
        </div>
\t\t <div class=\"form-group\">
          <label for=\"country\">Country*</label>
          <input type=\"text\" id=\"country\" name=\"country\" required>
        </div>
\t\t <div class=\"form-group\">
          <label for=\"state\">State / Province</label>
          <input type=\"text\" id=\"state\" name=\"state\">
        </div>
\t\t <div class=\"form-group\">
          <label for=\"city\">City*</label>
          <input type=\"text\" id=\"city\" name=\"city\" required>
        </div>
\t\t <div class=\"form-group\">
          <label for=\"address\">Address*</label>
          <input type=\"text\" id=\"address\" name=\"address\" required>
        </div>
\t\t <div class=\"form-group\">
          <label for=\"zipCode\">Zip code*</label>
          <input type=\"text\" id=\"zipCode\" name=\"zipCode\" required>
        </div>

        <button type=\"submit\" class=\"btn\">Sign Up</button>
        
        
      </form>


    </div>
  </div>
</div>

";
        
        $__internal_13027d782a956eb6cc8a2b3cea16e5970e7def93d150005ad63a7cdeceb9b914->leave($__internal_13027d782a956eb6cc8a2b3cea16e5970e7def93d150005ad63a7cdeceb9b914_prof);

        
        $__internal_81b19d7558e13879139ee23791449ede16faaf03ae433367d3af9b8df6d8735e->leave($__internal_81b19d7558e13879139ee23791449ede16faaf03ae433367d3af9b8df6d8735e_prof);

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

      <form class=\"form-login\" method=\"POST\" action=\"/create-customer\">
\t   <div class=\"form-group\">
          <label for=\"firstName\">First name*</label>
          <input type=\"text\" id=\"firstName\" name=\"firstName\" required>
        </div>
\t\t <div class=\"form-group\">
          <label for=\"lastName\">Last name*</label>
          <input type=\"text\" id=\"lastName\" name=\"lastName\" required>
        </div>
\t  
        <div class=\"form-group\">
          <label for=\"email\">Email*</label>
          <input type=\"email\" id=\"email\" name=\"email\" required>
        </div>
        <div class=\"form-group\">
          <label for=\"pwd\">Password*</label>
          <input type=\"password\" id=\"pwd\" name=\"pwd\" required>
        </div>
        <div class=\"form-group\">
          <label for=\"pwd\">Confirm password*</label>
          <input type=\"password\" id=\"cPwd\" name=\"cPwd\" required>
        </div>
\t\t
\t\t<div class=\"form-group\">
          <label for=\"phonePrimary\">Phone (Primary) *</label>
          <input type=\"tel\" id=\"phonePrimary\" name=\"phonePrimary\" required>
        </div>
\t\t
\t\t<div class=\"form-group\">
          <label for=\"phoneAlternate\">Phone (Alternate)</label>
          <input type=\"tel\" id=\"phoneAlternate\" name=\"phoneAlternate\">
        </div>
\t\t <div class=\"form-group\">
          <label for=\"country\">Country*</label>
          <input type=\"text\" id=\"country\" name=\"country\" required>
        </div>
\t\t <div class=\"form-group\">
          <label for=\"state\">State / Province</label>
          <input type=\"text\" id=\"state\" name=\"state\">
        </div>
\t\t <div class=\"form-group\">
          <label for=\"city\">City*</label>
          <input type=\"text\" id=\"city\" name=\"city\" required>
        </div>
\t\t <div class=\"form-group\">
          <label for=\"address\">Address*</label>
          <input type=\"text\" id=\"address\" name=\"address\" required>
        </div>
\t\t <div class=\"form-group\">
          <label for=\"zipCode\">Zip code*</label>
          <input type=\"text\" id=\"zipCode\" name=\"zipCode\" required>
        </div>

        <button type=\"submit\" class=\"btn\">Sign Up</button>
        
        
      </form>


    </div>
  </div>
</div>

{% endblock %}", "website/register.html.twig", "C:\\xampp\\htdocs\\general-pro-symfony\\app\\Resources\\views\\website\\register.html.twig");
    }
}
