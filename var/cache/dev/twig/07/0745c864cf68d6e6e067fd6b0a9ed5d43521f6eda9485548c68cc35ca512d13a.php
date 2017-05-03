<?php

/* website/signin.html.twig */
class __TwigTemplate_8698f0800b9617997892b19dd46a76922d23ff9bf8aceaab20e62f2bf12896e7 extends Twig_Template
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
        $__internal_e77d838de3311c8cfa9873195c40f1e74a6eee4f86f32b1fe10faaa2e41f1ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77d838de3311c8cfa9873195c40f1e74a6eee4f86f32b1fe10faaa2e41f1ab2->enter($__internal_e77d838de3311c8cfa9873195c40f1e74a6eee4f86f32b1fe10faaa2e41f1ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/signin.html.twig"));

        $__internal_9b245a7725d669855448590ecdf65be5af655d37977bfd624690ad1f267ada99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b245a7725d669855448590ecdf65be5af655d37977bfd624690ad1f267ada99->enter($__internal_9b245a7725d669855448590ecdf65be5af655d37977bfd624690ad1f267ada99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/signin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e77d838de3311c8cfa9873195c40f1e74a6eee4f86f32b1fe10faaa2e41f1ab2->leave($__internal_e77d838de3311c8cfa9873195c40f1e74a6eee4f86f32b1fe10faaa2e41f1ab2_prof);

        
        $__internal_9b245a7725d669855448590ecdf65be5af655d37977bfd624690ad1f267ada99->leave($__internal_9b245a7725d669855448590ecdf65be5af655d37977bfd624690ad1f267ada99_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_54992f3bb38f1aa156a93dd10515dc72cf474d25e3853ae07411c57470830439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54992f3bb38f1aa156a93dd10515dc72cf474d25e3853ae07411c57470830439->enter($__internal_54992f3bb38f1aa156a93dd10515dc72cf474d25e3853ae07411c57470830439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f7e5182276e2a40f76449065f1d072590cd35b73de313e071bf92d784e04ce68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e5182276e2a40f76449065f1d072590cd35b73de313e071bf92d784e04ce68->enter($__internal_f7e5182276e2a40f76449065f1d072590cd35b73de313e071bf92d784e04ce68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign in ";
        
        $__internal_f7e5182276e2a40f76449065f1d072590cd35b73de313e071bf92d784e04ce68->leave($__internal_f7e5182276e2a40f76449065f1d072590cd35b73de313e071bf92d784e04ce68_prof);

        
        $__internal_54992f3bb38f1aa156a93dd10515dc72cf474d25e3853ae07411c57470830439->leave($__internal_54992f3bb38f1aa156a93dd10515dc72cf474d25e3853ae07411c57470830439_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_29ac511436f3d3aa52a9f031f7e154d4fc4468447ea66f6d829a918f42fcb74e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ac511436f3d3aa52a9f031f7e154d4fc4468447ea66f6d829a918f42fcb74e->enter($__internal_29ac511436f3d3aa52a9f031f7e154d4fc4468447ea66f6d829a918f42fcb74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87758842518aa1179b262ce96673714c436fde06c2973937b6ae18352a6ca9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87758842518aa1179b262ce96673714c436fde06c2973937b6ae18352a6ca9ac->enter($__internal_87758842518aa1179b262ce96673714c436fde06c2973937b6ae18352a6ca9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_87758842518aa1179b262ce96673714c436fde06c2973937b6ae18352a6ca9ac->leave($__internal_87758842518aa1179b262ce96673714c436fde06c2973937b6ae18352a6ca9ac_prof);

        
        $__internal_29ac511436f3d3aa52a9f031f7e154d4fc4468447ea66f6d829a918f42fcb74e->leave($__internal_29ac511436f3d3aa52a9f031f7e154d4fc4468447ea66f6d829a918f42fcb74e_prof);

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
{% endblock %}", "website/signin.html.twig", "C:\\wamp64\\www\\generalproprojet\\general-pro-symfony\\app\\Resources\\views\\website\\signin.html.twig");
    }
}
