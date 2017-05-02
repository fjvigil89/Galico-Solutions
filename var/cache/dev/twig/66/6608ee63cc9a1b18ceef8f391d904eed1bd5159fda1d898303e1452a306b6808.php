<?php

/* website/about.html.twig */
class __TwigTemplate_f1fc5cd9c2271a49bd3ad89a2a4dad0a504987a1cec0909dc1523a9a2a9d58a0 extends Twig_Template
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
        $__internal_931123ac351a23547c34265b972d90b48b6eefc22b40a367a4d22099c0c4e42e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931123ac351a23547c34265b972d90b48b6eefc22b40a367a4d22099c0c4e42e->enter($__internal_931123ac351a23547c34265b972d90b48b6eefc22b40a367a4d22099c0c4e42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/about.html.twig"));

        $__internal_83aeb48d5e6bb16de3e3b860638ee532f6bfe338bba54d383d6543beba784bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83aeb48d5e6bb16de3e3b860638ee532f6bfe338bba54d383d6543beba784bd1->enter($__internal_83aeb48d5e6bb16de3e3b860638ee532f6bfe338bba54d383d6543beba784bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_931123ac351a23547c34265b972d90b48b6eefc22b40a367a4d22099c0c4e42e->leave($__internal_931123ac351a23547c34265b972d90b48b6eefc22b40a367a4d22099c0c4e42e_prof);

        
        $__internal_83aeb48d5e6bb16de3e3b860638ee532f6bfe338bba54d383d6543beba784bd1->leave($__internal_83aeb48d5e6bb16de3e3b860638ee532f6bfe338bba54d383d6543beba784bd1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8aab5c8314178e1f64db23c3cac5663b7e090b8fa73201d9d38de5a4fa1027a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aab5c8314178e1f64db23c3cac5663b7e090b8fa73201d9d38de5a4fa1027a0->enter($__internal_8aab5c8314178e1f64db23c3cac5663b7e090b8fa73201d9d38de5a4fa1027a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_843b7bd6833fc542f683a4adb29d15798ef3b5792b4d4193a6d80e7996f572f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843b7bd6833fc542f683a4adb29d15798ef3b5792b4d4193a6d80e7996f572f7->enter($__internal_843b7bd6833fc542f683a4adb29d15798ef3b5792b4d4193a6d80e7996f572f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " About us ";
        
        $__internal_843b7bd6833fc542f683a4adb29d15798ef3b5792b4d4193a6d80e7996f572f7->leave($__internal_843b7bd6833fc542f683a4adb29d15798ef3b5792b4d4193a6d80e7996f572f7_prof);

        
        $__internal_8aab5c8314178e1f64db23c3cac5663b7e090b8fa73201d9d38de5a4fa1027a0->leave($__internal_8aab5c8314178e1f64db23c3cac5663b7e090b8fa73201d9d38de5a4fa1027a0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_64e000635dfadc9f031b1a47a40d920872171f61779bdb2525d3fe18fb56fb16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e000635dfadc9f031b1a47a40d920872171f61779bdb2525d3fe18fb56fb16->enter($__internal_64e000635dfadc9f031b1a47a40d920872171f61779bdb2525d3fe18fb56fb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_734c1344b1dc22512cac4cd289362a248f399e79e249289eaebde3ab181c034b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734c1344b1dc22512cac4cd289362a248f399e79e249289eaebde3ab181c034b->enter($__internal_734c1344b1dc22512cac4cd289362a248f399e79e249289eaebde3ab181c034b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_734c1344b1dc22512cac4cd289362a248f399e79e249289eaebde3ab181c034b->leave($__internal_734c1344b1dc22512cac4cd289362a248f399e79e249289eaebde3ab181c034b_prof);

        
        $__internal_64e000635dfadc9f031b1a47a40d920872171f61779bdb2525d3fe18fb56fb16->leave($__internal_64e000635dfadc9f031b1a47a40d920872171f61779bdb2525d3fe18fb56fb16_prof);

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

{% endblock %}", "website/about.html.twig", "C:\\wamp64\\www\\generalproprojet\\general-pro-symfony\\app\\Resources\\views\\website\\about.html.twig");
    }
}
