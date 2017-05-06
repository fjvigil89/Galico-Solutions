<?php

/* website/about.html.twig */
class __TwigTemplate_8246c65fab51c48b150f9da08b8ce10e47f4715e730bf12ab35a1371a86b1204 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "website/about.html.twig", 1);
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
        $__internal_ec9f77fbef24e2169ff9a66b499e5dd7cf353ad75c3a1c785dfa603a20a61d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec9f77fbef24e2169ff9a66b499e5dd7cf353ad75c3a1c785dfa603a20a61d58->enter($__internal_ec9f77fbef24e2169ff9a66b499e5dd7cf353ad75c3a1c785dfa603a20a61d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/about.html.twig"));

        $__internal_dbb2cbfaef073ae0a029b8d118b840ddfa60287e48da3d723269721133c8748c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb2cbfaef073ae0a029b8d118b840ddfa60287e48da3d723269721133c8748c->enter($__internal_dbb2cbfaef073ae0a029b8d118b840ddfa60287e48da3d723269721133c8748c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec9f77fbef24e2169ff9a66b499e5dd7cf353ad75c3a1c785dfa603a20a61d58->leave($__internal_ec9f77fbef24e2169ff9a66b499e5dd7cf353ad75c3a1c785dfa603a20a61d58_prof);

        
        $__internal_dbb2cbfaef073ae0a029b8d118b840ddfa60287e48da3d723269721133c8748c->leave($__internal_dbb2cbfaef073ae0a029b8d118b840ddfa60287e48da3d723269721133c8748c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_066d5106d1d98c410e2e573ba6dd6ec44cb1aa8fee96b2d07518ae38a9ee4d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066d5106d1d98c410e2e573ba6dd6ec44cb1aa8fee96b2d07518ae38a9ee4d67->enter($__internal_066d5106d1d98c410e2e573ba6dd6ec44cb1aa8fee96b2d07518ae38a9ee4d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_286fc40d8faef7b11e62e8e03e93b98ecc5fdbeb0c1259ddec0308706331a3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286fc40d8faef7b11e62e8e03e93b98ecc5fdbeb0c1259ddec0308706331a3ae->enter($__internal_286fc40d8faef7b11e62e8e03e93b98ecc5fdbeb0c1259ddec0308706331a3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " About us ";
        
        $__internal_286fc40d8faef7b11e62e8e03e93b98ecc5fdbeb0c1259ddec0308706331a3ae->leave($__internal_286fc40d8faef7b11e62e8e03e93b98ecc5fdbeb0c1259ddec0308706331a3ae_prof);

        
        $__internal_066d5106d1d98c410e2e573ba6dd6ec44cb1aa8fee96b2d07518ae38a9ee4d67->leave($__internal_066d5106d1d98c410e2e573ba6dd6ec44cb1aa8fee96b2d07518ae38a9ee4d67_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdfa36776db501b7675bf7d105af3c8c29e514a88e10463c4d77c4e8739f95b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdfa36776db501b7675bf7d105af3c8c29e514a88e10463c4d77c4e8739f95b7->enter($__internal_cdfa36776db501b7675bf7d105af3c8c29e514a88e10463c4d77c4e8739f95b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea9453e84cbff0076f0b62388a779778efd01a45b43d69351bdc497b645f6598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9453e84cbff0076f0b62388a779778efd01a45b43d69351bdc497b645f6598->enter($__internal_ea9453e84cbff0076f0b62388a779778efd01a45b43d69351bdc497b645f6598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section class=\"about-big-title text-center\" data-parallax=\"scroll\" data-image-src=\"images/page-home/feature_style2_bg.jpg\">
  <h2>About us</h2>
  <p>TOTALLY AFFORADBLE AND EFFICIENT</p>
</section>
<!-- /.about-big-title -->

<div class=\"container\">
  <div class=\"row about-slogan text-center\">
    <div class=\"col-xs-12\">
      <h3>“Getting the job done wherever, however, no matter how big or small.”</h3>
      <p>To set new standards of ethics and excellence in delivering to our customers superior quality and value-for-money residential and commercial spaces by employing a team of highly motivated and focused professionals.</p>
    </div>
  </div>
  <!-- /.about-slogan -->

  <div class=\"row home-maintenance\">
    <div class=\"col-md-6\">
      <h3>Home Maintenance Business</h3>
      <p>One call does it all. Our company residential handyman services can help save time from the first phone call through project completion. Help with prioritizing major and minor home repairs and multi-tasking work means we complete jobs faster and better than your typical “handyman for hire”.</p>
      <p>Our Handyman team’s professionals arrive in nationally-recognized uniforms and logoed vans that are stocked with every tool they’ll need. You won’t have to interrupt your day, wasting valuable time waiting on us. Our on-time record is second to none, and we arrive ready to work. We are always ready to help you 24/7. For all your major and minor home repair needs, call us today to get the best offer.</p>
    </div>
    <div class=\"col-md-6\">
      <img src=\"images/page-home/services-02.jpg\" alt=\"\">
    </div>
  </div>
  <!-- /.home-maintenance -->
</div>

";
        
        $__internal_ea9453e84cbff0076f0b62388a779778efd01a45b43d69351bdc497b645f6598->leave($__internal_ea9453e84cbff0076f0b62388a779778efd01a45b43d69351bdc497b645f6598_prof);

        
        $__internal_cdfa36776db501b7675bf7d105af3c8c29e514a88e10463c4d77c4e8739f95b7->leave($__internal_cdfa36776db501b7675bf7d105af3c8c29e514a88e10463c4d77c4e8739f95b7_prof);

    }

    public function getTemplateName()
    {
        return "website/about.html.twig";
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

{% block title %} About us {% endblock %}

{% block body %}
<section class=\"about-big-title text-center\" data-parallax=\"scroll\" data-image-src=\"images/page-home/feature_style2_bg.jpg\">
  <h2>About us</h2>
  <p>TOTALLY AFFORADBLE AND EFFICIENT</p>
</section>
<!-- /.about-big-title -->

<div class=\"container\">
  <div class=\"row about-slogan text-center\">
    <div class=\"col-xs-12\">
      <h3>“Getting the job done wherever, however, no matter how big or small.”</h3>
      <p>To set new standards of ethics and excellence in delivering to our customers superior quality and value-for-money residential and commercial spaces by employing a team of highly motivated and focused professionals.</p>
    </div>
  </div>
  <!-- /.about-slogan -->

  <div class=\"row home-maintenance\">
    <div class=\"col-md-6\">
      <h3>Home Maintenance Business</h3>
      <p>One call does it all. Our company residential handyman services can help save time from the first phone call through project completion. Help with prioritizing major and minor home repairs and multi-tasking work means we complete jobs faster and better than your typical “handyman for hire”.</p>
      <p>Our Handyman team’s professionals arrive in nationally-recognized uniforms and logoed vans that are stocked with every tool they’ll need. You won’t have to interrupt your day, wasting valuable time waiting on us. Our on-time record is second to none, and we arrive ready to work. We are always ready to help you 24/7. For all your major and minor home repair needs, call us today to get the best offer.</p>
    </div>
    <div class=\"col-md-6\">
      <img src=\"images/page-home/services-02.jpg\" alt=\"\">
    </div>
  </div>
  <!-- /.home-maintenance -->
</div>

{% endblock %}", "website/about.html.twig", "C:\\xampp\\htdocs\\general-pro-symfony\\app\\Resources\\views\\website\\about.html.twig");
    }
}
