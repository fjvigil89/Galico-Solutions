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
        $__internal_c32623b6566868b1e72130febf8fb680f4806c5e3e7f9762d1c0355855b4d17a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32623b6566868b1e72130febf8fb680f4806c5e3e7f9762d1c0355855b4d17a->enter($__internal_c32623b6566868b1e72130febf8fb680f4806c5e3e7f9762d1c0355855b4d17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/about.html.twig"));

        $__internal_b8b46ae45b9d55197216ed6a581690d2607a75988e963d3891b85404dff0026d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b46ae45b9d55197216ed6a581690d2607a75988e963d3891b85404dff0026d->enter($__internal_b8b46ae45b9d55197216ed6a581690d2607a75988e963d3891b85404dff0026d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c32623b6566868b1e72130febf8fb680f4806c5e3e7f9762d1c0355855b4d17a->leave($__internal_c32623b6566868b1e72130febf8fb680f4806c5e3e7f9762d1c0355855b4d17a_prof);

        
        $__internal_b8b46ae45b9d55197216ed6a581690d2607a75988e963d3891b85404dff0026d->leave($__internal_b8b46ae45b9d55197216ed6a581690d2607a75988e963d3891b85404dff0026d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b09186562c5f424ca18b0a2ad05441a500ef299a616f63f600b39d1ecc05ff94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09186562c5f424ca18b0a2ad05441a500ef299a616f63f600b39d1ecc05ff94->enter($__internal_b09186562c5f424ca18b0a2ad05441a500ef299a616f63f600b39d1ecc05ff94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31d1af299feb7026372a601304727da22b25775f120663c22434ee51c22e3e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d1af299feb7026372a601304727da22b25775f120663c22434ee51c22e3e09->enter($__internal_31d1af299feb7026372a601304727da22b25775f120663c22434ee51c22e3e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " About us ";
        
        $__internal_31d1af299feb7026372a601304727da22b25775f120663c22434ee51c22e3e09->leave($__internal_31d1af299feb7026372a601304727da22b25775f120663c22434ee51c22e3e09_prof);

        
        $__internal_b09186562c5f424ca18b0a2ad05441a500ef299a616f63f600b39d1ecc05ff94->leave($__internal_b09186562c5f424ca18b0a2ad05441a500ef299a616f63f600b39d1ecc05ff94_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7fe66f072dceeef90cd6302070a35cc4b3d87b9e20408f33aae9b60c9dacc0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7fe66f072dceeef90cd6302070a35cc4b3d87b9e20408f33aae9b60c9dacc0b->enter($__internal_e7fe66f072dceeef90cd6302070a35cc4b3d87b9e20408f33aae9b60c9dacc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5c096f64824fd1a3a7599b639cf9dd3b3986acc71dcd6cf332ed24f3a128f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c096f64824fd1a3a7599b639cf9dd3b3986acc71dcd6cf332ed24f3a128f7c->enter($__internal_d5c096f64824fd1a3a7599b639cf9dd3b3986acc71dcd6cf332ed24f3a128f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d5c096f64824fd1a3a7599b639cf9dd3b3986acc71dcd6cf332ed24f3a128f7c->leave($__internal_d5c096f64824fd1a3a7599b639cf9dd3b3986acc71dcd6cf332ed24f3a128f7c_prof);

        
        $__internal_e7fe66f072dceeef90cd6302070a35cc4b3d87b9e20408f33aae9b60c9dacc0b->leave($__internal_e7fe66f072dceeef90cd6302070a35cc4b3d87b9e20408f33aae9b60c9dacc0b_prof);

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

{% endblock %}", "website/about.html.twig", "C:\\xampp\\htdocs\\generalpro\\app\\Resources\\views\\website\\about.html.twig");
    }
}
