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
        $__internal_b9703fbe5b6863c6c0604fc9efebe98e946e6e30807a7ef10660639b8152a78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9703fbe5b6863c6c0604fc9efebe98e946e6e30807a7ef10660639b8152a78e->enter($__internal_b9703fbe5b6863c6c0604fc9efebe98e946e6e30807a7ef10660639b8152a78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/signin.html.twig"));

        $__internal_0323727d5e1fd9e682efd77a7fa7f2616c1789f674cd635381a48621b1aed9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0323727d5e1fd9e682efd77a7fa7f2616c1789f674cd635381a48621b1aed9c2->enter($__internal_0323727d5e1fd9e682efd77a7fa7f2616c1789f674cd635381a48621b1aed9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/signin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9703fbe5b6863c6c0604fc9efebe98e946e6e30807a7ef10660639b8152a78e->leave($__internal_b9703fbe5b6863c6c0604fc9efebe98e946e6e30807a7ef10660639b8152a78e_prof);

        
        $__internal_0323727d5e1fd9e682efd77a7fa7f2616c1789f674cd635381a48621b1aed9c2->leave($__internal_0323727d5e1fd9e682efd77a7fa7f2616c1789f674cd635381a48621b1aed9c2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f2d3fa39ed712235ff4e92eb8f894c1a6b8edb8335d88a201f3383c880c54f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2d3fa39ed712235ff4e92eb8f894c1a6b8edb8335d88a201f3383c880c54f4->enter($__internal_4f2d3fa39ed712235ff4e92eb8f894c1a6b8edb8335d88a201f3383c880c54f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b975c1ddfeb41189e408c4f0f83cb28544fe2ba059627f3d4469110e6dba2b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b975c1ddfeb41189e408c4f0f83cb28544fe2ba059627f3d4469110e6dba2b43->enter($__internal_b975c1ddfeb41189e408c4f0f83cb28544fe2ba059627f3d4469110e6dba2b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign in ";
        
        $__internal_b975c1ddfeb41189e408c4f0f83cb28544fe2ba059627f3d4469110e6dba2b43->leave($__internal_b975c1ddfeb41189e408c4f0f83cb28544fe2ba059627f3d4469110e6dba2b43_prof);

        
        $__internal_4f2d3fa39ed712235ff4e92eb8f894c1a6b8edb8335d88a201f3383c880c54f4->leave($__internal_4f2d3fa39ed712235ff4e92eb8f894c1a6b8edb8335d88a201f3383c880c54f4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8493088938d3d93e87fdd6c43a614f00ae550fc87ab5188ceaa836ae5a3e8e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8493088938d3d93e87fdd6c43a614f00ae550fc87ab5188ceaa836ae5a3e8e0d->enter($__internal_8493088938d3d93e87fdd6c43a614f00ae550fc87ab5188ceaa836ae5a3e8e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd863d194871bf478122ae70258623c4bbfb05a0834744970bc8fb7b2a399fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd863d194871bf478122ae70258623c4bbfb05a0834744970bc8fb7b2a399fde->enter($__internal_bd863d194871bf478122ae70258623c4bbfb05a0834744970bc8fb7b2a399fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"pad\">

</div>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <h3>Login</h3>

      <form class=\"form-login\">
        <div class=\"form-group\">
          <label for=\"email\">Email*</label>
          <input type=\"email\" id=\"email\">
        </div>
        <div class=\"form-group\">
          <label for=\"pwd\">Password*</label>
          <input type=\"password\" id=\"pwd\">
        </div>
        <button type=\"submit\" class=\"btn\">Login</button>
        
        <p class=\"lost_password\"><a href=\"#\">Lost your password?</a></p>
      </form>


    </div>
  </div>
</div>
";
        
        $__internal_bd863d194871bf478122ae70258623c4bbfb05a0834744970bc8fb7b2a399fde->leave($__internal_bd863d194871bf478122ae70258623c4bbfb05a0834744970bc8fb7b2a399fde_prof);

        
        $__internal_8493088938d3d93e87fdd6c43a614f00ae550fc87ab5188ceaa836ae5a3e8e0d->leave($__internal_8493088938d3d93e87fdd6c43a614f00ae550fc87ab5188ceaa836ae5a3e8e0d_prof);

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

{% block title %} Sign in {% endblock %}

{% block body %}
<div class=\"pad\">

</div>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <h3>Login</h3>

      <form class=\"form-login\">
        <div class=\"form-group\">
          <label for=\"email\">Email*</label>
          <input type=\"email\" id=\"email\">
        </div>
        <div class=\"form-group\">
          <label for=\"pwd\">Password*</label>
          <input type=\"password\" id=\"pwd\">
        </div>
        <button type=\"submit\" class=\"btn\">Login</button>
        
        <p class=\"lost_password\"><a href=\"#\">Lost your password?</a></p>
      </form>


    </div>
  </div>
</div>
{% endblock %}", "website/signin.html.twig", "C:\\xampp\\htdocs\\generalpro\\app\\Resources\\views\\website\\signin.html.twig");
    }
}
