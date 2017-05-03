<?php

/* website/client-resume.html.twig */
class __TwigTemplate_3c48df9de2437d5e2da282d2a1a76575a01b91d2165aa3b085adb2a1b4e4f5ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "website/client-resume.html.twig", 1);
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
        $__internal_e82f3f9b61a40b5f0e813e7c1f6b1eb870d91d4450e6a0796c392dfee686ec7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82f3f9b61a40b5f0e813e7c1f6b1eb870d91d4450e6a0796c392dfee686ec7e->enter($__internal_e82f3f9b61a40b5f0e813e7c1f6b1eb870d91d4450e6a0796c392dfee686ec7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/client-resume.html.twig"));

        $__internal_3bd10b34bff7c46341817ffc249ea2c4fa4ab6184198fb895c149e1db8723dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd10b34bff7c46341817ffc249ea2c4fa4ab6184198fb895c149e1db8723dd8->enter($__internal_3bd10b34bff7c46341817ffc249ea2c4fa4ab6184198fb895c149e1db8723dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "website/client-resume.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e82f3f9b61a40b5f0e813e7c1f6b1eb870d91d4450e6a0796c392dfee686ec7e->leave($__internal_e82f3f9b61a40b5f0e813e7c1f6b1eb870d91d4450e6a0796c392dfee686ec7e_prof);

        
        $__internal_3bd10b34bff7c46341817ffc249ea2c4fa4ab6184198fb895c149e1db8723dd8->leave($__internal_3bd10b34bff7c46341817ffc249ea2c4fa4ab6184198fb895c149e1db8723dd8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c24802e33dc8c670bce113f76132571d11712c1d99557d50f5f4bb2930cf50f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24802e33dc8c670bce113f76132571d11712c1d99557d50f5f4bb2930cf50f9->enter($__internal_c24802e33dc8c670bce113f76132571d11712c1d99557d50f5f4bb2930cf50f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d1bbd5ff28b3755e67aa2c025c4ff39ef01984c1c0e71a7b98c0d7a6a3949ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1bbd5ff28b3755e67aa2c025c4ff39ef01984c1c0e71a7b98c0d7a6a3949ae8->enter($__internal_d1bbd5ff28b3755e67aa2c025c4ff39ef01984c1c0e71a7b98c0d7a6a3949ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Register ";
        
        $__internal_d1bbd5ff28b3755e67aa2c025c4ff39ef01984c1c0e71a7b98c0d7a6a3949ae8->leave($__internal_d1bbd5ff28b3755e67aa2c025c4ff39ef01984c1c0e71a7b98c0d7a6a3949ae8_prof);

        
        $__internal_c24802e33dc8c670bce113f76132571d11712c1d99557d50f5f4bb2930cf50f9->leave($__internal_c24802e33dc8c670bce113f76132571d11712c1d99557d50f5f4bb2930cf50f9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8afbbe7b003e84cda85aa9af1cce2bff0c1168775b18f38c9a46cb838e38f4a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8afbbe7b003e84cda85aa9af1cce2bff0c1168775b18f38c9a46cb838e38f4a0->enter($__internal_8afbbe7b003e84cda85aa9af1cce2bff0c1168775b18f38c9a46cb838e38f4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f5bbfaef8678cd25564e43432124c9de43b4e8869ac913a68d99ae5135ae6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5bbfaef8678cd25564e43432124c9de43b4e8869ac913a68d99ae5135ae6dd->enter($__internal_6f5bbfaef8678cd25564e43432124c9de43b4e8869ac913a68d99ae5135ae6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"pad\">
  </div>
  <div class=\"container\">
    <h2 class=\"heading-title\">Resume</h2>
    </br>
    <div class=\"row\">
      <div class=\"col-xs-12\">
        <form action=\"#\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"table-responsive table-shopping-cart\">
            <table class=\"table\">
              <thead>
              <tr>
                <th >HouseID</th>
                <th >FirstName</th>
                <th>LastName</th>
                <th>PhonePrimary</th>
                <th>Address</th>
                <th>Country</th>
                <th class=\"text-center\"></th>
              </tr>
              </thead>

              <tbody>


              <tr>
                <td class=\"\">00243</td>
                <td class=\"product-thumbnail text-center\">Irina</td>
                <td class=\"product-name\">Ramos</td>
                <td class=\"product-price\">94232232232</td>
                <td class=\"product-qty\">3233 Av maisonneuve </td>
                <td class=\"\">Cuba</td>
                <td><a href=\"#maison1\" data-toggle=\"collapse\">Click here to resume</a></td>
              </tr>


              <tr>
                <td class=\"\">00278</td>
                <td class=\"product-thumbnail text-center\">Steve</td>
                <td class=\"product-name\">Fuentes</td>
                <td class=\"product-price\">95232232232</td>
                <td class=\"product-qty\">2343 Av Miroquesada</td>
                <td class=\"\">Cuba</td>
                <td><a href=\"#maison2\" data-toggle=\"collapse\">Click here to resume</a></td>
              </tr>
              </tbody>
            </table>
          </div>

        </form>

      </div>
      <div class=\"collapse in\" id=\"maison1\">
        <div class=\"container\">
          <p>House 00243 </p>
          <table class=\"table\">
            <thead>
            <tr>
              <th >RequestDate</th>
              <th >InterventionDate</th>
              <th>ServiceID</th>
              <th>Service</th>
              <th>TechnicianID</th>
              <th>Status</th>
              <th>Details</th>
              <th>Contact</th>
            </tr>
            </thead>


            <tr>
              <td class=\"\">03/04/2017</td>
              <td class=\"\">04/04/2017</td>
              <td class=\"product-name\">536433</td>
              <td class=\"product-price\">plumbing</td>
              <td class=\"product-qty\">Carlos Sanz</td>
              <td class=\"\">Attended</td>
              <td class=\"\">Problems with faucett</td>
              <td class=\"\">Alberto</td>
            </tr>

            <tr>
              <td class=\"\">08/04/2017</td>
              <td class=\"\">10/04/2017</td>
              <td class=\"product-name\">536438</td>
              <td class=\"product-price\">Electricity</td>
              <td class=\"product-qty\">Andres Lopilato</td>
              <td class=\"\">Attended</td>
              <td class=\"\">Electrical problems</td>
              <td class=\"\">Roberto</td>
            </tr>

            <tr>
              <td class=\"\">15/04/2017</td>
              <td class=\"\">19/04/2017</td>
              <td class=\"product-name\">536458</td>
              <td class=\"product-price\">locksmith</td>
              <td class=\"product-qty\">Marisol</td>
              <td class=\"\">Attended</td>
              <td class=\"\">Problems with door</td>
              <td class=\"\">Alejandro</td>
            </tr>

          </table>

        </div>
      </div>

      <div class=\"collapse in\" id=\"maison2\">
        <div class=\"container\">
          <p>House 00278 </p>

          <table class=\"table\">
            <thead>
            <tr>
              <th >RequestDate</th>
              <th >InterventionDate</th>
              <th>ServiceID</th>
              <th>Service</th>
              <th>TechnicianID</th>
              <th>Status</th>
              <th>Details</th>
              <th>Contact</th>
            </tr>
            </thead>


            <tr>
              <td class=\"\">02/04/2017</td>
              <td class=\"\">03/04/2017</td>
              <td class=\"product-name\">536435</td>
              <td class=\"product-price\">plumbing</td>
              <td class=\"product-qty\">Rodolfo German</td>
              <td class=\"\">Attended</td>
              <td class=\"\">Problems ett</td>
              <td class=\"\">Braulio</td>
            </tr>

            <tr>
              <td class=\"\">14/04/2017</td>
              <td class=\"\">15/04/2017</td>
              <td class=\"product-name\">536456</td>
              <td class=\"product-price\">Electricity</td>
              <td class=\"product-qty\">Andres Lopilato</td>
              <td class=\"\">Attended</td>
              <td class=\"\">Electrical problems</td>
              <td class=\"\">Mauricio</td>
            </tr>


          </table>


        </div>
      </div>
    </div>
  </div>
  </div>


";
        
        $__internal_6f5bbfaef8678cd25564e43432124c9de43b4e8869ac913a68d99ae5135ae6dd->leave($__internal_6f5bbfaef8678cd25564e43432124c9de43b4e8869ac913a68d99ae5135ae6dd_prof);

        
        $__internal_8afbbe7b003e84cda85aa9af1cce2bff0c1168775b18f38c9a46cb838e38f4a0->leave($__internal_8afbbe7b003e84cda85aa9af1cce2bff0c1168775b18f38c9a46cb838e38f4a0_prof);

    }

    public function getTemplateName()
    {
        return "website/client-resume.html.twig";
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
    <h2 class=\"heading-title\">Resume</h2>
    </br>
    <div class=\"row\">
      <div class=\"col-xs-12\">
        <form action=\"#\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"table-responsive table-shopping-cart\">
            <table class=\"table\">
              <thead>
              <tr>
                <th >HouseID</th>
                <th >FirstName</th>
                <th>LastName</th>
                <th>PhonePrimary</th>
                <th>Address</th>
                <th>Country</th>
                <th class=\"text-center\"></th>
              </tr>
              </thead>

              <tbody>


              <tr>
                <td class=\"\">00243</td>
                <td class=\"product-thumbnail text-center\">Irina</td>
                <td class=\"product-name\">Ramos</td>
                <td class=\"product-price\">94232232232</td>
                <td class=\"product-qty\">3233 Av maisonneuve </td>
                <td class=\"\">Cuba</td>
                <td><a href=\"#maison1\" data-toggle=\"collapse\">Click here to resume</a></td>
              </tr>


              <tr>
                <td class=\"\">00278</td>
                <td class=\"product-thumbnail text-center\">Steve</td>
                <td class=\"product-name\">Fuentes</td>
                <td class=\"product-price\">95232232232</td>
                <td class=\"product-qty\">2343 Av Miroquesada</td>
                <td class=\"\">Cuba</td>
                <td><a href=\"#maison2\" data-toggle=\"collapse\">Click here to resume</a></td>
              </tr>
              </tbody>
            </table>
          </div>

        </form>

      </div>
      <div class=\"collapse in\" id=\"maison1\">
        <div class=\"container\">
          <p>House 00243 </p>
          <table class=\"table\">
            <thead>
            <tr>
              <th >RequestDate</th>
              <th >InterventionDate</th>
              <th>ServiceID</th>
              <th>Service</th>
              <th>TechnicianID</th>
              <th>Status</th>
              <th>Details</th>
              <th>Contact</th>
            </tr>
            </thead>


            <tr>
              <td class=\"\">03/04/2017</td>
              <td class=\"\">04/04/2017</td>
              <td class=\"product-name\">536433</td>
              <td class=\"product-price\">plumbing</td>
              <td class=\"product-qty\">Carlos Sanz</td>
              <td class=\"\">Attended</td>
              <td class=\"\">Problems with faucett</td>
              <td class=\"\">Alberto</td>
            </tr>

            <tr>
              <td class=\"\">08/04/2017</td>
              <td class=\"\">10/04/2017</td>
              <td class=\"product-name\">536438</td>
              <td class=\"product-price\">Electricity</td>
              <td class=\"product-qty\">Andres Lopilato</td>
              <td class=\"\">Attended</td>
              <td class=\"\">Electrical problems</td>
              <td class=\"\">Roberto</td>
            </tr>

            <tr>
              <td class=\"\">15/04/2017</td>
              <td class=\"\">19/04/2017</td>
              <td class=\"product-name\">536458</td>
              <td class=\"product-price\">locksmith</td>
              <td class=\"product-qty\">Marisol</td>
              <td class=\"\">Attended</td>
              <td class=\"\">Problems with door</td>
              <td class=\"\">Alejandro</td>
            </tr>

          </table>

        </div>
      </div>

      <div class=\"collapse in\" id=\"maison2\">
        <div class=\"container\">
          <p>House 00278 </p>

          <table class=\"table\">
            <thead>
            <tr>
              <th >RequestDate</th>
              <th >InterventionDate</th>
              <th>ServiceID</th>
              <th>Service</th>
              <th>TechnicianID</th>
              <th>Status</th>
              <th>Details</th>
              <th>Contact</th>
            </tr>
            </thead>


            <tr>
              <td class=\"\">02/04/2017</td>
              <td class=\"\">03/04/2017</td>
              <td class=\"product-name\">536435</td>
              <td class=\"product-price\">plumbing</td>
              <td class=\"product-qty\">Rodolfo German</td>
              <td class=\"\">Attended</td>
              <td class=\"\">Problems ett</td>
              <td class=\"\">Braulio</td>
            </tr>

            <tr>
              <td class=\"\">14/04/2017</td>
              <td class=\"\">15/04/2017</td>
              <td class=\"product-name\">536456</td>
              <td class=\"product-price\">Electricity</td>
              <td class=\"product-qty\">Andres Lopilato</td>
              <td class=\"\">Attended</td>
              <td class=\"\">Electrical problems</td>
              <td class=\"\">Mauricio</td>
            </tr>


          </table>


        </div>
      </div>
    </div>
  </div>
  </div>


{% endblock %}", "website/client-resume.html.twig", "C:\\wamp64\\www\\generalproprojet\\general-pro-symfony\\app\\Resources\\views\\website\\client-resume.html.twig");
    }
}
