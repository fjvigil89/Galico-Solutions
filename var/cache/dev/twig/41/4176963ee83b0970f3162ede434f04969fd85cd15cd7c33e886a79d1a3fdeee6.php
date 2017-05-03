<?php

/* website/register.html.twig */
class __TwigTemplate_8def1061c71d287d45f056a5ec79f170ad933b108f75a9ad7f7abda5e67314c1 extends Twig_Template
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
        $__internal_a668eb57bda125c037a6ac2cbb453fc7aca780c111dc0a6d67f2b5c49c389806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a668eb57bda125c037a6ac2cbb453fc7aca780c111dc0a6d67f2b5c49c389806->enter($__internal_a668eb57bda125c037a6ac2cbb453fc7aca780c111dc0a6d67f2b5c49c389806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/register.html.twig"));

        $__internal_1a18dd39be1a3b61ae6dfa0297bd52c3e2cc4cf5495ca53fd760f8f0341454c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a18dd39be1a3b61ae6dfa0297bd52c3e2cc4cf5495ca53fd760f8f0341454c6->enter($__internal_1a18dd39be1a3b61ae6dfa0297bd52c3e2cc4cf5495ca53fd760f8f0341454c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a668eb57bda125c037a6ac2cbb453fc7aca780c111dc0a6d67f2b5c49c389806->leave($__internal_a668eb57bda125c037a6ac2cbb453fc7aca780c111dc0a6d67f2b5c49c389806_prof);

        
        $__internal_1a18dd39be1a3b61ae6dfa0297bd52c3e2cc4cf5495ca53fd760f8f0341454c6->leave($__internal_1a18dd39be1a3b61ae6dfa0297bd52c3e2cc4cf5495ca53fd760f8f0341454c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a81bd77f82f3081645894030961449f0c619dd928b992b54d32d144831a1d36c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81bd77f82f3081645894030961449f0c619dd928b992b54d32d144831a1d36c->enter($__internal_a81bd77f82f3081645894030961449f0c619dd928b992b54d32d144831a1d36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_02a682ec92cdf860a5324391c991663a877cc8bdab174b062b740c47d7ebf852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a682ec92cdf860a5324391c991663a877cc8bdab174b062b740c47d7ebf852->enter($__internal_02a682ec92cdf860a5324391c991663a877cc8bdab174b062b740c47d7ebf852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Register ";
        
        $__internal_02a682ec92cdf860a5324391c991663a877cc8bdab174b062b740c47d7ebf852->leave($__internal_02a682ec92cdf860a5324391c991663a877cc8bdab174b062b740c47d7ebf852_prof);

        
        $__internal_a81bd77f82f3081645894030961449f0c619dd928b992b54d32d144831a1d36c->leave($__internal_a81bd77f82f3081645894030961449f0c619dd928b992b54d32d144831a1d36c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fd5d82408568caff927dd8e5e7cd0014a072328402b2f1271e74b4c276d0ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fd5d82408568caff927dd8e5e7cd0014a072328402b2f1271e74b4c276d0ae4->enter($__internal_1fd5d82408568caff927dd8e5e7cd0014a072328402b2f1271e74b4c276d0ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e67c879e44a2dfb9c274aa273a1a38f263d78ec0ae801fc8ac8b38b0201e809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e67c879e44a2dfb9c274aa273a1a38f263d78ec0ae801fc8ac8b38b0201e809->enter($__internal_1e67c879e44a2dfb9c274aa273a1a38f263d78ec0ae801fc8ac8b38b0201e809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1e67c879e44a2dfb9c274aa273a1a38f263d78ec0ae801fc8ac8b38b0201e809->leave($__internal_1e67c879e44a2dfb9c274aa273a1a38f263d78ec0ae801fc8ac8b38b0201e809_prof);

        
        $__internal_1fd5d82408568caff927dd8e5e7cd0014a072328402b2f1271e74b4c276d0ae4->leave($__internal_1fd5d82408568caff927dd8e5e7cd0014a072328402b2f1271e74b4c276d0ae4_prof);

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

{% endblock %}", "website/register.html.twig", "C:\\wamp64\\www\\generalproprojet\\general-pro-symfony\\app\\Resources\\views\\website\\register.html.twig");
    }
}
