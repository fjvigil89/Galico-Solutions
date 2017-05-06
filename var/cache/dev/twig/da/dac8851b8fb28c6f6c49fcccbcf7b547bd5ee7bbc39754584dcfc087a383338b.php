<?php

/* website/signin.html.twig */
class __TwigTemplate_926c607a6a4c933316dac17545f9efd13ad621b94b9516138a9fda5b942346e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "website/signin.html.twig", 1);
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
        $__internal_829707bc177534d9093fea3f8fe9ecd0c851bb3098c51083ed16ee4a152606a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829707bc177534d9093fea3f8fe9ecd0c851bb3098c51083ed16ee4a152606a1->enter($__internal_829707bc177534d9093fea3f8fe9ecd0c851bb3098c51083ed16ee4a152606a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/signin.html.twig"));

        $__internal_bc00a5ec3cb1239aa6d106f97e129f0a1d15ccd46c23dc647844830a4f92e1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc00a5ec3cb1239aa6d106f97e129f0a1d15ccd46c23dc647844830a4f92e1e7->enter($__internal_bc00a5ec3cb1239aa6d106f97e129f0a1d15ccd46c23dc647844830a4f92e1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/signin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_829707bc177534d9093fea3f8fe9ecd0c851bb3098c51083ed16ee4a152606a1->leave($__internal_829707bc177534d9093fea3f8fe9ecd0c851bb3098c51083ed16ee4a152606a1_prof);

        
        $__internal_bc00a5ec3cb1239aa6d106f97e129f0a1d15ccd46c23dc647844830a4f92e1e7->leave($__internal_bc00a5ec3cb1239aa6d106f97e129f0a1d15ccd46c23dc647844830a4f92e1e7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9efeeeaa9f027ac49de7c1147ac4741aa5c7c3cb43f97f0a99a5c417a6edd604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9efeeeaa9f027ac49de7c1147ac4741aa5c7c3cb43f97f0a99a5c417a6edd604->enter($__internal_9efeeeaa9f027ac49de7c1147ac4741aa5c7c3cb43f97f0a99a5c417a6edd604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_204edf5687ee330665f321c447087df05420808b834e5e52407b200c64c35e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204edf5687ee330665f321c447087df05420808b834e5e52407b200c64c35e2c->enter($__internal_204edf5687ee330665f321c447087df05420808b834e5e52407b200c64c35e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign in ";
        
        $__internal_204edf5687ee330665f321c447087df05420808b834e5e52407b200c64c35e2c->leave($__internal_204edf5687ee330665f321c447087df05420808b834e5e52407b200c64c35e2c_prof);

        
        $__internal_9efeeeaa9f027ac49de7c1147ac4741aa5c7c3cb43f97f0a99a5c417a6edd604->leave($__internal_9efeeeaa9f027ac49de7c1147ac4741aa5c7c3cb43f97f0a99a5c417a6edd604_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7b82f585ef0fa7c3d9eacd08e8533424446f60409503dfacbab52eb87c0e907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b82f585ef0fa7c3d9eacd08e8533424446f60409503dfacbab52eb87c0e907->enter($__internal_f7b82f585ef0fa7c3d9eacd08e8533424446f60409503dfacbab52eb87c0e907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc3b967fa4e24c9ffbd48702aefe09c60881da53f55d67dd5e96e759a73a7ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3b967fa4e24c9ffbd48702aefe09c60881da53f55d67dd5e96e759a73a7ebc->enter($__internal_fc3b967fa4e24c9ffbd48702aefe09c60881da53f55d67dd5e96e759a73a7ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"pad\">

</div>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <h3>Login</h3>

      <form class=\"form-login\" method=\"POST\" action=\"/my-dashboard\">
        ";
        // line 16
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 17
            echo "          <h1>";
            echo twig_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
            echo "</h1>
        ";
        }
        // line 19
        echo "        <div class=\"form-group\">
          <label for=\"email\">Email*</label>
          <input type=\"email\" id=\"email\" name=\"email\" required>
        </div>
        <div class=\"form-group\">
          <label for=\"pwd\">Password*</label>
          <input type=\"password\" id=\"pwd\" name=\"pwd\" required>
        </div>
        <button type=\"submit\" class=\"btn\" >Login</button>
        
        <p class=\"lost_password\"><a href=\"#\">Lost your password?</a></p>
      </form>


    </div>
  </div>
</div>
";
        
        $__internal_fc3b967fa4e24c9ffbd48702aefe09c60881da53f55d67dd5e96e759a73a7ebc->leave($__internal_fc3b967fa4e24c9ffbd48702aefe09c60881da53f55d67dd5e96e759a73a7ebc_prof);

        
        $__internal_f7b82f585ef0fa7c3d9eacd08e8533424446f60409503dfacbab52eb87c0e907->leave($__internal_f7b82f585ef0fa7c3d9eacd08e8533424446f60409503dfacbab52eb87c0e907_prof);

    }

    public function getTemplateName()
    {
        return "website/signin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  82 => 17,  80 => 16,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Sign in {% endblock %}

{% block body %}
<div class=\"pad\">

</div>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <h3>Login</h3>

      <form class=\"form-login\" method=\"POST\" action=\"/my-dashboard\">
        {% if(error)%}
          <h1>{{ error }}</h1>
        {% endif %}
        <div class=\"form-group\">
          <label for=\"email\">Email*</label>
          <input type=\"email\" id=\"email\" name=\"email\" required>
        </div>
        <div class=\"form-group\">
          <label for=\"pwd\">Password*</label>
          <input type=\"password\" id=\"pwd\" name=\"pwd\" required>
        </div>
        <button type=\"submit\" class=\"btn\" >Login</button>
        
        <p class=\"lost_password\"><a href=\"#\">Lost your password?</a></p>
      </form>


    </div>
  </div>
</div>
{% endblock %}", "website/signin.html.twig", "C:\\xampp\\htdocs\\general-pro-symfony\\app\\Resources\\views\\website\\signin.html.twig");
    }
}
