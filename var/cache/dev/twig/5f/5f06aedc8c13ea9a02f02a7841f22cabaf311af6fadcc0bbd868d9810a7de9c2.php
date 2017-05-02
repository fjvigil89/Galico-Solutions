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
        $__internal_2351d0139f52fc1b8b14c78309ed9dbb9d87f40d51444e6744105f0d88c55c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2351d0139f52fc1b8b14c78309ed9dbb9d87f40d51444e6744105f0d88c55c44->enter($__internal_2351d0139f52fc1b8b14c78309ed9dbb9d87f40d51444e6744105f0d88c55c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/register.html.twig"));

        $__internal_82b5f83760b8f292f179ccb285ae2c030bc89788791767f6a6080d22b85c6df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b5f83760b8f292f179ccb285ae2c030bc89788791767f6a6080d22b85c6df7->enter($__internal_82b5f83760b8f292f179ccb285ae2c030bc89788791767f6a6080d22b85c6df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2351d0139f52fc1b8b14c78309ed9dbb9d87f40d51444e6744105f0d88c55c44->leave($__internal_2351d0139f52fc1b8b14c78309ed9dbb9d87f40d51444e6744105f0d88c55c44_prof);

        
        $__internal_82b5f83760b8f292f179ccb285ae2c030bc89788791767f6a6080d22b85c6df7->leave($__internal_82b5f83760b8f292f179ccb285ae2c030bc89788791767f6a6080d22b85c6df7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_93f808d813002543552c72f994f9422fd8b8d03b9d92b9b3031bc5aa7167eb3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f808d813002543552c72f994f9422fd8b8d03b9d92b9b3031bc5aa7167eb3c->enter($__internal_93f808d813002543552c72f994f9422fd8b8d03b9d92b9b3031bc5aa7167eb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c6442fea0504a4b9d12b767835ec6d8ac17531da68f34fadecb8fd9b0804370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6442fea0504a4b9d12b767835ec6d8ac17531da68f34fadecb8fd9b0804370->enter($__internal_3c6442fea0504a4b9d12b767835ec6d8ac17531da68f34fadecb8fd9b0804370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Register ";
        
        $__internal_3c6442fea0504a4b9d12b767835ec6d8ac17531da68f34fadecb8fd9b0804370->leave($__internal_3c6442fea0504a4b9d12b767835ec6d8ac17531da68f34fadecb8fd9b0804370_prof);

        
        $__internal_93f808d813002543552c72f994f9422fd8b8d03b9d92b9b3031bc5aa7167eb3c->leave($__internal_93f808d813002543552c72f994f9422fd8b8d03b9d92b9b3031bc5aa7167eb3c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_02ea7729011b7d5e622e292be0c868e6e2cdafa44b98b46f788ce3001393f380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ea7729011b7d5e622e292be0c868e6e2cdafa44b98b46f788ce3001393f380->enter($__internal_02ea7729011b7d5e622e292be0c868e6e2cdafa44b98b46f788ce3001393f380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_421758afa3ba5a67a658654ac011026004d409067f84afabd4cfd3bfd1e7a5d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421758afa3ba5a67a658654ac011026004d409067f84afabd4cfd3bfd1e7a5d0->enter($__internal_421758afa3ba5a67a658654ac011026004d409067f84afabd4cfd3bfd1e7a5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_421758afa3ba5a67a658654ac011026004d409067f84afabd4cfd3bfd1e7a5d0->leave($__internal_421758afa3ba5a67a658654ac011026004d409067f84afabd4cfd3bfd1e7a5d0_prof);

        
        $__internal_02ea7729011b7d5e622e292be0c868e6e2cdafa44b98b46f788ce3001393f380->leave($__internal_02ea7729011b7d5e622e292be0c868e6e2cdafa44b98b46f788ce3001393f380_prof);

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

{% endblock %}", "website/register.html.twig", "C:\\xampp\\htdocs\\generalpro\\app\\Resources\\views\\website\\register.html.twig");
    }
}
