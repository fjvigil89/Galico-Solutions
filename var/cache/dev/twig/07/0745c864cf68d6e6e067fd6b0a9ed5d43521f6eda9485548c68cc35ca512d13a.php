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
        $__internal_a5f6c49f3c567e909965aafd5d08adae1123ab560a03a19f3fcb1f4bc2e2e36e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f6c49f3c567e909965aafd5d08adae1123ab560a03a19f3fcb1f4bc2e2e36e->enter($__internal_a5f6c49f3c567e909965aafd5d08adae1123ab560a03a19f3fcb1f4bc2e2e36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/signin.html.twig"));

        $__internal_ee36b10897ef4c2b08c38ba71f7da5ffaf72a476454a30ad53b671c1844cef35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee36b10897ef4c2b08c38ba71f7da5ffaf72a476454a30ad53b671c1844cef35->enter($__internal_ee36b10897ef4c2b08c38ba71f7da5ffaf72a476454a30ad53b671c1844cef35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/signin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5f6c49f3c567e909965aafd5d08adae1123ab560a03a19f3fcb1f4bc2e2e36e->leave($__internal_a5f6c49f3c567e909965aafd5d08adae1123ab560a03a19f3fcb1f4bc2e2e36e_prof);

        
        $__internal_ee36b10897ef4c2b08c38ba71f7da5ffaf72a476454a30ad53b671c1844cef35->leave($__internal_ee36b10897ef4c2b08c38ba71f7da5ffaf72a476454a30ad53b671c1844cef35_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_02f64332097f0b30754120472c79e616939e89065ea25e94738d4ccfce530d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f64332097f0b30754120472c79e616939e89065ea25e94738d4ccfce530d3b->enter($__internal_02f64332097f0b30754120472c79e616939e89065ea25e94738d4ccfce530d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c2032e85d7da816fce3d6c8848389db7b05c2237416b5029f9315b0fb9082c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2032e85d7da816fce3d6c8848389db7b05c2237416b5029f9315b0fb9082c69->enter($__internal_c2032e85d7da816fce3d6c8848389db7b05c2237416b5029f9315b0fb9082c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign in ";
        
        $__internal_c2032e85d7da816fce3d6c8848389db7b05c2237416b5029f9315b0fb9082c69->leave($__internal_c2032e85d7da816fce3d6c8848389db7b05c2237416b5029f9315b0fb9082c69_prof);

        
        $__internal_02f64332097f0b30754120472c79e616939e89065ea25e94738d4ccfce530d3b->leave($__internal_02f64332097f0b30754120472c79e616939e89065ea25e94738d4ccfce530d3b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6be116b7ef3839d2b969f273192ed29cda1b02b306d6fa83edaf5060e9df70ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be116b7ef3839d2b969f273192ed29cda1b02b306d6fa83edaf5060e9df70ad->enter($__internal_6be116b7ef3839d2b969f273192ed29cda1b02b306d6fa83edaf5060e9df70ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7de6f45b0066c1cfa551695c2c8e9a0da7b7ff985dda9e7dea8ca6bb396a25a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de6f45b0066c1cfa551695c2c8e9a0da7b7ff985dda9e7dea8ca6bb396a25a0->enter($__internal_7de6f45b0066c1cfa551695c2c8e9a0da7b7ff985dda9e7dea8ca6bb396a25a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <button type=\"submit\" class=\"btn\" ><a href=\"/myprofile\">Login</a></button>
        
        <p class=\"lost_password\"><a href=\"#\">Lost your password?</a></p>
      </form>


    </div>
  </div>
</div>
";
        
        $__internal_7de6f45b0066c1cfa551695c2c8e9a0da7b7ff985dda9e7dea8ca6bb396a25a0->leave($__internal_7de6f45b0066c1cfa551695c2c8e9a0da7b7ff985dda9e7dea8ca6bb396a25a0_prof);

        
        $__internal_6be116b7ef3839d2b969f273192ed29cda1b02b306d6fa83edaf5060e9df70ad->leave($__internal_6be116b7ef3839d2b969f273192ed29cda1b02b306d6fa83edaf5060e9df70ad_prof);

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
        <button type=\"submit\" class=\"btn\" ><a href=\"/myprofile\">Login</a></button>
        
        <p class=\"lost_password\"><a href=\"#\">Lost your password?</a></p>
      </form>


    </div>
  </div>
</div>
{% endblock %}", "website/signin.html.twig", "C:\\wamp64\\www\\generalproprojet\\general-pro-symfony\\app\\Resources\\views\\website\\signin.html.twig");
    }
}
