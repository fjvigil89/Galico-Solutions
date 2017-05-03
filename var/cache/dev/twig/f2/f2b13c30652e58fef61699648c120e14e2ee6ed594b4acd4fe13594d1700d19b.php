<?php

/* website/client-edit.html.twig */
class __TwigTemplate_ac3e5fb05a654135bb82b0fed603d618d14654fcfca6b20ab21b36493f1a8227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "website/client-edit.html.twig", 1);
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
        $__internal_e07f79535dabb284b9e3e3d05cbc82dbfa3594c8746bcba413c63f529e82b5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e07f79535dabb284b9e3e3d05cbc82dbfa3594c8746bcba413c63f529e82b5d4->enter($__internal_e07f79535dabb284b9e3e3d05cbc82dbfa3594c8746bcba413c63f529e82b5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/client-edit.html.twig"));

        $__internal_5b3f07104293c508962640d3c3f6f7a420d6a5546b1c07c667d745a812c8e6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3f07104293c508962640d3c3f6f7a420d6a5546b1c07c667d745a812c8e6c1->enter($__internal_5b3f07104293c508962640d3c3f6f7a420d6a5546b1c07c667d745a812c8e6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/client-edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e07f79535dabb284b9e3e3d05cbc82dbfa3594c8746bcba413c63f529e82b5d4->leave($__internal_e07f79535dabb284b9e3e3d05cbc82dbfa3594c8746bcba413c63f529e82b5d4_prof);

        
        $__internal_5b3f07104293c508962640d3c3f6f7a420d6a5546b1c07c667d745a812c8e6c1->leave($__internal_5b3f07104293c508962640d3c3f6f7a420d6a5546b1c07c667d745a812c8e6c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0378cbfd9b323cb6a4c9a8df36646f2e65af4753517d3d065c1ad5bdeb96ad02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0378cbfd9b323cb6a4c9a8df36646f2e65af4753517d3d065c1ad5bdeb96ad02->enter($__internal_0378cbfd9b323cb6a4c9a8df36646f2e65af4753517d3d065c1ad5bdeb96ad02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_901f5a0d1d1fe1b1cb05af96cdea99031b617fe11ececc0c96428dbdf0dd97bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901f5a0d1d1fe1b1cb05af96cdea99031b617fe11ececc0c96428dbdf0dd97bc->enter($__internal_901f5a0d1d1fe1b1cb05af96cdea99031b617fe11ececc0c96428dbdf0dd97bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Register ";
        
        $__internal_901f5a0d1d1fe1b1cb05af96cdea99031b617fe11ececc0c96428dbdf0dd97bc->leave($__internal_901f5a0d1d1fe1b1cb05af96cdea99031b617fe11ececc0c96428dbdf0dd97bc_prof);

        
        $__internal_0378cbfd9b323cb6a4c9a8df36646f2e65af4753517d3d065c1ad5bdeb96ad02->leave($__internal_0378cbfd9b323cb6a4c9a8df36646f2e65af4753517d3d065c1ad5bdeb96ad02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbad849a8ae2aad2900982b9235ee57ba09fe7690ce8b31cb885c12f4d14561b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbad849a8ae2aad2900982b9235ee57ba09fe7690ce8b31cb885c12f4d14561b->enter($__internal_bbad849a8ae2aad2900982b9235ee57ba09fe7690ce8b31cb885c12f4d14561b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_624212245147fcfc31eb2f5074a7a31ef84879e049e66d6cbec6eabc91973c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624212245147fcfc31eb2f5074a7a31ef84879e049e66d6cbec6eabc91973c0a->enter($__internal_624212245147fcfc31eb2f5074a7a31ef84879e049e66d6cbec6eabc91973c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"pad\">

  </div>


  <div class=\"container\">
    <h2 class=\"heading-title\">Edit</h2>
    </br>
    <div class=\"row\">

      <div class=\"col-xs-8\">
        <form action=\"#\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"table-responsive table-shopping-cart\">
            <table class=\"table\">


              <tbody>
              <tr>

                <td class=\"\">

                </td>
                <td class=\"\">
                  <a href=\"#\">FirstName</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"firstName_edit\" value=\"\">
                  </div>
                </td>

              </tr>

              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">LastName</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"lastName_edit\" value=\"\">
                  </div>
                </td>
              </tr>

              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">Email</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"email_edit\" value=\"\">
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">Password</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"password_edit\" value=\"\">
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">PhonePrimary</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"phonePrimary_edit\" value=\"\">
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">PhoneAlternate</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"phoneAlternate_edit\" value=\"\">
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">Country</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"country_edit\" value=\"\">
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">State</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"state_edit\" value=\"\">
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">City</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"city_edit\" value=\"\">
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">Address</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"address_edit\" value=\"\">
                  </div>
                </td>
              </tr>

              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">ZipCode</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"zipCode_edit\" value=\"\">
                  </div>
                </td>
              </tr>


              </tbody>

            </table>
            <button type=\"submit\" class=\"btn\">Save</button>
          </div>
        </form>
      </div>
    </div>

  </div>






";
        
        $__internal_624212245147fcfc31eb2f5074a7a31ef84879e049e66d6cbec6eabc91973c0a->leave($__internal_624212245147fcfc31eb2f5074a7a31ef84879e049e66d6cbec6eabc91973c0a_prof);

        
        $__internal_bbad849a8ae2aad2900982b9235ee57ba09fe7690ce8b31cb885c12f4d14561b->leave($__internal_bbad849a8ae2aad2900982b9235ee57ba09fe7690ce8b31cb885c12f4d14561b_prof);

    }

    public function getTemplateName()
    {
        return "website/client-edit.html.twig";
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
    <h2 class=\"heading-title\">Edit</h2>
    </br>
    <div class=\"row\">

      <div class=\"col-xs-8\">
        <form action=\"#\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"table-responsive table-shopping-cart\">
            <table class=\"table\">


              <tbody>
              <tr>

                <td class=\"\">

                </td>
                <td class=\"\">
                  <a href=\"#\">FirstName</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"firstName_edit\" value=\"\">
                  </div>
                </td>

              </tr>

              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">LastName</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"lastName_edit\" value=\"\">
                  </div>
                </td>
              </tr>

              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">Email</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"email_edit\" value=\"\">
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">Password</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"password_edit\" value=\"\">
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">PhonePrimary</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"phonePrimary_edit\" value=\"\">
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">PhoneAlternate</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"phoneAlternate_edit\" value=\"\">
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">Country</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"country_edit\" value=\"\">
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">State</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"state_edit\" value=\"\">
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">City</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"city_edit\" value=\"\">
                  </div>
                </td>
              </tr>
              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">Address</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"address_edit\" value=\"\">
                  </div>
                </td>
              </tr>

              <tr>
                <td class=\"\">
                </td>
                <td class=\"\">
                  <a href=\"#\">ZipCode</a>
                </td>

                <td class=\"\">
                  <div class=\"input-group\">
                    <input type=\"text\" id=\"zipCode_edit\" value=\"\">
                  </div>
                </td>
              </tr>


              </tbody>

            </table>
            <button type=\"submit\" class=\"btn\">Save</button>
          </div>
        </form>
      </div>
    </div>

  </div>






{% endblock %}", "website/client-edit.html.twig", "C:\\wamp64\\www\\generalproprojet\\general-pro-symfony\\app\\Resources\\views\\website\\client-edit.html.twig");
    }
}
