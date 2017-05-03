<?php

/* website/myprofile.html.twig */
class __TwigTemplate_2cd1d382ff26d1ce7ceee1f959e782e1371753a43cd6d9cd6c97ed1bf4d149a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "website/myprofile.html.twig", 1);
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
        $__internal_0e199dc4271e9aa0821c3caed3daec4712c830dade75b0cea3850c4cae4c1bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e199dc4271e9aa0821c3caed3daec4712c830dade75b0cea3850c4cae4c1bb7->enter($__internal_0e199dc4271e9aa0821c3caed3daec4712c830dade75b0cea3850c4cae4c1bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/myprofile.html.twig"));

        $__internal_10ac2acb3d3def19311683e39e2cb8a30f4af3f0c4135a31848228a15047bc05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ac2acb3d3def19311683e39e2cb8a30f4af3f0c4135a31848228a15047bc05->enter($__internal_10ac2acb3d3def19311683e39e2cb8a30f4af3f0c4135a31848228a15047bc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/myprofile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e199dc4271e9aa0821c3caed3daec4712c830dade75b0cea3850c4cae4c1bb7->leave($__internal_0e199dc4271e9aa0821c3caed3daec4712c830dade75b0cea3850c4cae4c1bb7_prof);

        
        $__internal_10ac2acb3d3def19311683e39e2cb8a30f4af3f0c4135a31848228a15047bc05->leave($__internal_10ac2acb3d3def19311683e39e2cb8a30f4af3f0c4135a31848228a15047bc05_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c511aa7199c0717bfdf4c035b00f13c956e8c61093c359642139e908e6526f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c511aa7199c0717bfdf4c035b00f13c956e8c61093c359642139e908e6526f1->enter($__internal_1c511aa7199c0717bfdf4c035b00f13c956e8c61093c359642139e908e6526f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03e4b5750bc57d71970ad254306a4687febb52bd6fe6476082e42f4890a7b4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e4b5750bc57d71970ad254306a4687febb52bd6fe6476082e42f4890a7b4f1->enter($__internal_03e4b5750bc57d71970ad254306a4687febb52bd6fe6476082e42f4890a7b4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Register ";
        
        $__internal_03e4b5750bc57d71970ad254306a4687febb52bd6fe6476082e42f4890a7b4f1->leave($__internal_03e4b5750bc57d71970ad254306a4687febb52bd6fe6476082e42f4890a7b4f1_prof);

        
        $__internal_1c511aa7199c0717bfdf4c035b00f13c956e8c61093c359642139e908e6526f1->leave($__internal_1c511aa7199c0717bfdf4c035b00f13c956e8c61093c359642139e908e6526f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_18793bd8359199f8a17f5998de7e61dea9728899b3e23b353f7660539817c669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18793bd8359199f8a17f5998de7e61dea9728899b3e23b353f7660539817c669->enter($__internal_18793bd8359199f8a17f5998de7e61dea9728899b3e23b353f7660539817c669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a40e707c79ec9a959162aa47fe6c13d6d4f112d8fc3fa07cb2ed385721477fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a40e707c79ec9a959162aa47fe6c13d6d4f112d8fc3fa07cb2ed385721477fd->enter($__internal_5a40e707c79ec9a959162aa47fe6c13d6d4f112d8fc3fa07cb2ed385721477fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"pad\">

  </div>


  <div class=\"container\">
    <h2 class=\"heading-title\">Welcome Rhodelyr</h2>
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
            <a href=\"/client-resume\" class=\"btn\">Resume </a>
          </div>
        </form>

      </div>
    </div>

  </div>






";
        
        $__internal_5a40e707c79ec9a959162aa47fe6c13d6d4f112d8fc3fa07cb2ed385721477fd->leave($__internal_5a40e707c79ec9a959162aa47fe6c13d6d4f112d8fc3fa07cb2ed385721477fd_prof);

        
        $__internal_18793bd8359199f8a17f5998de7e61dea9728899b3e23b353f7660539817c669->leave($__internal_18793bd8359199f8a17f5998de7e61dea9728899b3e23b353f7660539817c669_prof);

    }

    public function getTemplateName()
    {
        return "website/myprofile.html.twig";
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
    <h2 class=\"heading-title\">Welcome Rhodelyr</h2>
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
            <a href=\"/client-resume\" class=\"btn\">Resume </a>
          </div>
        </form>

      </div>
    </div>

  </div>






{% endblock %}", "website/myprofile.html.twig", "C:\\wamp64\\www\\generalproprojet\\general-pro-symfony\\app\\Resources\\views\\website\\myprofile.html.twig");
    }
}
