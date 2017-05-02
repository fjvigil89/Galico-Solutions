<?php

/* base.html.twig */
class __TwigTemplate_54760178e2afd20d65f9beb08cc368901cb954cbe7d422100dbffaa4bf820fbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1618d196aeb4b8016a53e849fe52e2c6551e80b6c40017b29120800ddd1ebac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1618d196aeb4b8016a53e849fe52e2c6551e80b6c40017b29120800ddd1ebac->enter($__internal_d1618d196aeb4b8016a53e849fe52e2c6551e80b6c40017b29120800ddd1ebac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_159dc9a29889efa74b82600bae10ca866528e4f8ca0f870730ae9605ba9c0b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159dc9a29889efa74b82600bae10ca866528e4f8ca0f870730ae9605ba9c0b7c->enter($__internal_159dc9a29889efa74b82600bae10ca866528e4f8ca0f870730ae9605ba9c0b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 42
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <div class=\"site\">
    <div class=\"site-top style-02\">
        <div class=\"container\">
            <div class=\"row row-sm-center\">

                <div class=\"col-sm-5 col-md-6 hidden-xs-down\">
                    <div class=\"social-menu text-xs-center text-sm-left\">
                        <ul class=\"menu\">
                            <li class=\"menu-item\"><a href=\"https://www.facebook.com/\">facebook</a></li>
                            <li class=\"menu-item\"><a href=\"https://www.plus.google.com/\">google+</a></li>
                            <li class=\"menu-item\"><a href=\"https://www.twitter.com/\">twitter</a></li>
                            <li class=\"menu-item\"><a href=\"https://www.youtube.com/\">youtube</a></li>
                        </ul>
                    </div>
                    <!-- /.social-menu -->
                </div>

                <div class=\"col-sm-7 col-md-6\">
                    <div class=\"site-top-right text-xs-center text-sm-right\">
                        <nav id=\"top-right-menu\">
                            <ul class=\"menu\">
                                <li class=\"menu-item\"><a href=\"/signin\">Sign in</a></li>
                                <li class=\"menu-item\">
                                    <a href=\"/register\">Register</a>

                                </li>
                                <!--<li class=\"menu-item\"><a href=\"#\">Alternative Pages</a></li>-->
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /.site-top .style-02 -->

    <header class=\"site-header style-02\">
        <div class=\"style-header\">
            <div class=\"container\">
                <div class=\"row row-xs-center\">

                    <div class=\"col-xs-10 col-lg-2 site-branding\">
                        <a href=\"home.html\">
                            <img src=\"images/logo-2.png\" alt=\"Renovation\">
                        </a>
                    </div>

                    <div class=\"col-xs-2 hidden-lg-up text-right\">
                        <a id=\"menu-button\" href=\"#primary-menu-mobile\"><i id=\"open-left\" class=\"fa fa-bars\"></i></a>
                        <nav id=\"primary-menu-mobile\">
                            <ul>
                                <li><a href=\"/\">Home</a></li>
                                <li><a href=\"/services\">Services</a></li>
                                <li><a href=\"/plans\">Plans</a></li>
                                <!--<li><a href=\"index.html\">Prices</a></li>-->
                                <li><a href=\"/contact\">Contact us</a></li>
                                <li><a href=\"/about\">About us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- / Menu Mobile -->


                </div>
            </div>
        </div>
    </header>
    <!-- /.site-header .style-02 -->

    <nav id=\"primary-menu\" class=\"primary-menu_style-02 hidden-md-down\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul class=\"menu\">
                        <li class=\"menu-item active\">
                            <a href=\"/\">Home</a></li>

                        <li class=\"menu-item\"><a href=\"/services\">services</a></li>
                        <li class=\"menu-item\"><a href=\"/plans\">Plans</a></li>
                        <!--<li class=\"menu-item\"><a href=\"#\">Prices</a></li>-->
                        <li class=\"menu-item\"><a href=\"/contact\">Contact us</a></li>
                        <li class=\"menu-item\"><a href=\"/about\">About us</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- /.primary-menu -->

    ";
        // line 137
        $this->displayBlock('body', $context, $blocks);
        // line 138
        echo "
        ";
        // line 139
        $this->displayBlock('javascripts', $context, $blocks);
        // line 179
        echo "
    ";
        // line 180
        $this->displayBlock('footer', $context, $blocks);
        // line 244
        echo "    </body>
</html>
";
        
        $__internal_d1618d196aeb4b8016a53e849fe52e2c6551e80b6c40017b29120800ddd1ebac->leave($__internal_d1618d196aeb4b8016a53e849fe52e2c6551e80b6c40017b29120800ddd1ebac_prof);

        
        $__internal_159dc9a29889efa74b82600bae10ca866528e4f8ca0f870730ae9605ba9c0b7c->leave($__internal_159dc9a29889efa74b82600bae10ca866528e4f8ca0f870730ae9605ba9c0b7c_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5e6d20cd441e97058eba7b0d8561b0fd2fe70fed4f3a8375df693dbac52d266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e6d20cd441e97058eba7b0d8561b0fd2fe70fed4f3a8375df693dbac52d266->enter($__internal_c5e6d20cd441e97058eba7b0d8561b0fd2fe70fed4f3a8375df693dbac52d266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10726b17444d35dff384e491e93c51e7f0e9930f6f0d7aef11f0ff2317068f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10726b17444d35dff384e491e93c51e7f0e9930f6f0d7aef11f0ff2317068f2e->enter($__internal_10726b17444d35dff384e491e93c51e7f0e9930f6f0d7aef11f0ff2317068f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GENERAL PRO";
        
        $__internal_10726b17444d35dff384e491e93c51e7f0e9930f6f0d7aef11f0ff2317068f2e->leave($__internal_10726b17444d35dff384e491e93c51e7f0e9930f6f0d7aef11f0ff2317068f2e_prof);

        
        $__internal_c5e6d20cd441e97058eba7b0d8561b0fd2fe70fed4f3a8375df693dbac52d266->leave($__internal_c5e6d20cd441e97058eba7b0d8561b0fd2fe70fed4f3a8375df693dbac52d266_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a4e86ad2d26d4f128b6b611eb52e17377295e4d5f411927d45de429964937f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e86ad2d26d4f128b6b611eb52e17377295e4d5f411927d45de429964937f5f->enter($__internal_a4e86ad2d26d4f128b6b611eb52e17377295e4d5f411927d45de429964937f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_04558160f74c0aefbf41b4ced7d2a86d5007a76a643855fe31e2b39cd4ef3234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04558160f74c0aefbf41b4ced7d2a86d5007a76a643855fe31e2b39cd4ef3234->enter($__internal_04558160f74c0aefbf41b4ced7d2a86d5007a76a643855fe31e2b39cd4ef3234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <!-- Icon font 7 Stroke -->
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/icon-7/css/pe-icon-7-stroke.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/icon-7/css/helper.css"), "html", null, true);
        echo "\">

            <!-- Icon font Renovation -->
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/renovation/icon-font-renovation.css"), "html", null, true);
        echo "\">

            <!-- Google font -->
            <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

            <!-- Menu Mobile: mmenu -->
            <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/mmenu/jquery.mmenu.all.css"), "html", null, true);
        echo "\" />

            <!-- Font Awesome -->
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" />

            <!-- Owl Carousel -->
            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/owl.carousel/assets/owl.carousel.css"), "html", null, true);
        echo "\" />

            <!-- Light Gallery -->
            <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/lightgallery/css/lightgallery.css"), "html", null, true);
        echo "\" />

            <!-- Bootstrap -->
            <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" />

            <!-- REVOLUTION STYLE SHEETS -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/slider/slider.css"), "html", null, true);
        echo "\">

            <!-- THEME STYLE -->
            <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_04558160f74c0aefbf41b4ced7d2a86d5007a76a643855fe31e2b39cd4ef3234->leave($__internal_04558160f74c0aefbf41b4ced7d2a86d5007a76a643855fe31e2b39cd4ef3234_prof);

        
        $__internal_a4e86ad2d26d4f128b6b611eb52e17377295e4d5f411927d45de429964937f5f->leave($__internal_a4e86ad2d26d4f128b6b611eb52e17377295e4d5f411927d45de429964937f5f_prof);

    }

    // line 137
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f0c8bba21c5bcd5f554d424d69ee8c5b3c095d404d71ba31836cd04fbaf2529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f0c8bba21c5bcd5f554d424d69ee8c5b3c095d404d71ba31836cd04fbaf2529->enter($__internal_8f0c8bba21c5bcd5f554d424d69ee8c5b3c095d404d71ba31836cd04fbaf2529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c35473b50aa4946252437c737fe9349f69ae9a968b72f30d3f8a9a211883ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c35473b50aa4946252437c737fe9349f69ae9a968b72f30d3f8a9a211883ddb->enter($__internal_5c35473b50aa4946252437c737fe9349f69ae9a968b72f30d3f8a9a211883ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5c35473b50aa4946252437c737fe9349f69ae9a968b72f30d3f8a9a211883ddb->leave($__internal_5c35473b50aa4946252437c737fe9349f69ae9a968b72f30d3f8a9a211883ddb_prof);

        
        $__internal_8f0c8bba21c5bcd5f554d424d69ee8c5b3c095d404d71ba31836cd04fbaf2529->leave($__internal_8f0c8bba21c5bcd5f554d424d69ee8c5b3c095d404d71ba31836cd04fbaf2529_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f5b75aaa8f43bc9d34571259b831bbf6f5c92c11488cae031102c794a313d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f5b75aaa8f43bc9d34571259b831bbf6f5c92c11488cae031102c794a313d25->enter($__internal_7f5b75aaa8f43bc9d34571259b831bbf6f5c92c11488cae031102c794a313d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_019043eb5d9e2860b8309ee8c981ed22fd2e5cb2972fdd32d7046554f844a8cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019043eb5d9e2860b8309ee8c981ed22fd2e5cb2972fdd32d7046554f844a8cf->enter($__internal_019043eb5d9e2860b8309ee8c981ed22fd2e5cb2972fdd32d7046554f844a8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 140
        echo "            <script src=\"https://maps.google.com/maps/api/js?sensor=false&amp;language=en\"></script>

            <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/owl.carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/parallax.js/parallax.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/scrollup/jquery.scrollUp.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/lightgallery/js/lightgallery.js"), "html", null, true);
        echo "\"></script>

            <!-- Mobile Menu -->
            <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/mmenu/jquery.mmenu.min.all.js"), "html", null, true);
        echo "\"></script>

            <!-- REVOLUTION JS FILES -->
            <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/slider/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/slider/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>

            <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
            <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/slider/extensions/revolution.extension.actions.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/slider/extensions/revolution.extension.carousel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/slider/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/slider/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/slider/extensions/revolution.extension.migration.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/slider/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/slider/extensions/revolution.extension.parallax.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/slider/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/slider/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>

            <!-- ISOTOPE -->
            <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>

            <!-- HOVER ISOTOPE -->
            <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery.directional-hover.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Image loaded ISOTOPE -->
            <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_019043eb5d9e2860b8309ee8c981ed22fd2e5cb2972fdd32d7046554f844a8cf->leave($__internal_019043eb5d9e2860b8309ee8c981ed22fd2e5cb2972fdd32d7046554f844a8cf_prof);

        
        $__internal_7f5b75aaa8f43bc9d34571259b831bbf6f5c92c11488cae031102c794a313d25->leave($__internal_7f5b75aaa8f43bc9d34571259b831bbf6f5c92c11488cae031102c794a313d25_prof);

    }

    // line 180
    public function block_footer($context, array $blocks = array())
    {
        $__internal_bc867d22a5156bca8a4a3c888efec6ba2c7060644265450ed76217f740f2ceff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc867d22a5156bca8a4a3c888efec6ba2c7060644265450ed76217f740f2ceff->enter($__internal_bc867d22a5156bca8a4a3c888efec6ba2c7060644265450ed76217f740f2ceff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_c722e3e96a67564844efd4056df0ea2371eb394c8ece04444d8e1e92ad09eba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c722e3e96a67564844efd4056df0ea2371eb394c8ece04444d8e1e92ad09eba2->enter($__internal_c722e3e96a67564844efd4056df0ea2371eb394c8ece04444d8e1e92ad09eba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 181
        echo "
        <footer class=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"footer-about\">
                            <p><a href=\"#\"><img src=\"images/page-home/logo-alt.png\" alt=\"renovation-logo\"></a></p>
                            <p>Our mission is to provide the best handyman service at an reasonable price without sacrificing quality. You will be satisfied with our work knowing we take the necessary steps to meet your needs and get the job done right</p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"footer-infomation\">
                            <h3 class=\"widget-tittle\">infomation</h3>
                            <ul class=\"menu-infomation\">
                                <li><a href=\"#\">Blog</a></li>
                                <li><a href=\"#\">Services</a></li>
                                <li><a href=\"#\">Extras</a></li>
                                <li><a href=\"contact.html\">Contact</a></li>
                                <li><a href=\"#\">Projects</a></li>
                                <li><a href=\"#\">Infomation</a></li>
                                <li><a href=\"#\">About Us</a></li>
                                <li><a href=\"#\">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"footer-info\">
                            <h3 class=\"widget-tittle\">renovation office</h3>
                            <ul>
                                <li><i class=\"fa fa-map-marker\"></i>14 Tottenham Road, London, England.</li>
                                <li><i class=\"fa fa-phone\"></i>(102) 6666 8888</li>
                                <li><i class=\"fa fa-envelope\"></i>info@thememove.com</li>
                                <li><i class=\"fa fa-fax\"></i>(102) 8888 9999</li>
                                <li><i class=\"fa fa-clock-o\"></i>Mon - Sat: 9:00 - 18:00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"social-menu social-menu_right-arrow\">
                <ul class=\"menu\">
                    <li class=\"menu-item\"><a href=\"https://www.facebook.com/\">facebook</a></li>
                    <li class=\"menu-item\"><a href=\"https://www.plus.google.com/\">google+</a></li>
                    <li class=\"menu-item\"><a href=\"https://www.twitter.com/\">twitter</a></li>
                    <li class=\"menu-item\"><a href=\"https://www.youtube.com/\">youtube</a></li>
                </ul>
            </div>
        </footer>
        <!-- /.footer -->

        <div class=\"copyright\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        Copyright &copy; General Pro 2017. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
        <!-- /.copyright -->
    </div>

    ";
        
        $__internal_c722e3e96a67564844efd4056df0ea2371eb394c8ece04444d8e1e92ad09eba2->leave($__internal_c722e3e96a67564844efd4056df0ea2371eb394c8ece04444d8e1e92ad09eba2_prof);

        
        $__internal_bc867d22a5156bca8a4a3c888efec6ba2c7060644265450ed76217f740f2ceff->leave($__internal_bc867d22a5156bca8a4a3c888efec6ba2c7060644265450ed76217f740f2ceff_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 181,  407 => 180,  394 => 176,  389 => 174,  383 => 171,  377 => 168,  371 => 165,  367 => 164,  363 => 163,  359 => 162,  355 => 161,  351 => 160,  347 => 159,  343 => 158,  339 => 157,  333 => 154,  329 => 153,  323 => 150,  317 => 147,  313 => 146,  309 => 145,  305 => 144,  301 => 143,  297 => 142,  293 => 140,  284 => 139,  267 => 137,  255 => 40,  249 => 37,  243 => 34,  237 => 31,  231 => 28,  225 => 25,  219 => 22,  209 => 15,  203 => 12,  199 => 11,  196 => 10,  187 => 9,  169 => 8,  157 => 244,  155 => 180,  152 => 179,  150 => 139,  147 => 138,  145 => 137,  48 => 43,  45 => 42,  43 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>{% block title %}GENERAL PRO{% endblock %}</title>
        {% block stylesheets %}
            <!-- Icon font 7 Stroke -->
            <link rel=\"stylesheet\" href=\"{{ asset('fonts/icon-7/css/pe-icon-7-stroke.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('fonts/icon-7/css/helper.css') }}\">

            <!-- Icon font Renovation -->
            <link rel=\"stylesheet\" href=\"{{ asset('fonts/renovation/icon-font-renovation.css') }}\">

            <!-- Google font -->
            <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

            <!-- Menu Mobile: mmenu -->
            <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('components/mmenu/jquery.mmenu.all.css') }}\" />

            <!-- Font Awesome -->
            <link rel=\"stylesheet\" href=\"{{ asset('components/font-awesome/css/font-awesome.css') }}\" />

            <!-- Owl Carousel -->
            <link rel=\"stylesheet\" href=\"{{ asset('components/owl.carousel/assets/owl.carousel.css') }}\" />

            <!-- Light Gallery -->
            <link rel=\"stylesheet\" href=\"{{ asset('components/lightgallery/css/lightgallery.css') }}\" />

            <!-- Bootstrap -->
            <link rel=\"stylesheet\" href=\"{{ asset('components/bootstrap/css/bootstrap.css') }}\" />

            <!-- REVOLUTION STYLE SHEETS -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('components/slider/slider.css') }}\">

            <!-- THEME STYLE -->
            <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    <div class=\"site\">
    <div class=\"site-top style-02\">
        <div class=\"container\">
            <div class=\"row row-sm-center\">

                <div class=\"col-sm-5 col-md-6 hidden-xs-down\">
                    <div class=\"social-menu text-xs-center text-sm-left\">
                        <ul class=\"menu\">
                            <li class=\"menu-item\"><a href=\"https://www.facebook.com/\">facebook</a></li>
                            <li class=\"menu-item\"><a href=\"https://www.plus.google.com/\">google+</a></li>
                            <li class=\"menu-item\"><a href=\"https://www.twitter.com/\">twitter</a></li>
                            <li class=\"menu-item\"><a href=\"https://www.youtube.com/\">youtube</a></li>
                        </ul>
                    </div>
                    <!-- /.social-menu -->
                </div>

                <div class=\"col-sm-7 col-md-6\">
                    <div class=\"site-top-right text-xs-center text-sm-right\">
                        <nav id=\"top-right-menu\">
                            <ul class=\"menu\">
                                <li class=\"menu-item\"><a href=\"/signin\">Sign in</a></li>
                                <li class=\"menu-item\">
                                    <a href=\"/register\">Register</a>

                                </li>
                                <!--<li class=\"menu-item\"><a href=\"#\">Alternative Pages</a></li>-->
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /.site-top .style-02 -->

    <header class=\"site-header style-02\">
        <div class=\"style-header\">
            <div class=\"container\">
                <div class=\"row row-xs-center\">

                    <div class=\"col-xs-10 col-lg-2 site-branding\">
                        <a href=\"home.html\">
                            <img src=\"images/logo-2.png\" alt=\"Renovation\">
                        </a>
                    </div>

                    <div class=\"col-xs-2 hidden-lg-up text-right\">
                        <a id=\"menu-button\" href=\"#primary-menu-mobile\"><i id=\"open-left\" class=\"fa fa-bars\"></i></a>
                        <nav id=\"primary-menu-mobile\">
                            <ul>
                                <li><a href=\"/\">Home</a></li>
                                <li><a href=\"/services\">Services</a></li>
                                <li><a href=\"/plans\">Plans</a></li>
                                <!--<li><a href=\"index.html\">Prices</a></li>-->
                                <li><a href=\"/contact\">Contact us</a></li>
                                <li><a href=\"/about\">About us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- / Menu Mobile -->


                </div>
            </div>
        </div>
    </header>
    <!-- /.site-header .style-02 -->

    <nav id=\"primary-menu\" class=\"primary-menu_style-02 hidden-md-down\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul class=\"menu\">
                        <li class=\"menu-item active\">
                            <a href=\"/\">Home</a></li>

                        <li class=\"menu-item\"><a href=\"/services\">services</a></li>
                        <li class=\"menu-item\"><a href=\"/plans\">Plans</a></li>
                        <!--<li class=\"menu-item\"><a href=\"#\">Prices</a></li>-->
                        <li class=\"menu-item\"><a href=\"/contact\">Contact us</a></li>
                        <li class=\"menu-item\"><a href=\"/about\">About us</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- /.primary-menu -->

    {% block body %}{% endblock %}

        {% block javascripts %}
            <script src=\"https://maps.google.com/maps/api/js?sensor=false&amp;language=en\"></script>

            <script src=\"{{asset('components/jquery/jquery.js')  }}\"></script>
            <script src=\"{{ asset('components/bootstrap/js/bootstrap.js') }}\"></script>
            <script src=\"{{ asset('components/owl.carousel/owl.carousel.js') }}\"></script>
            <script src=\"{{ asset('components/parallax.js/parallax.js') }}\"></script>
            <script src=\"{{ asset('components/scrollup/jquery.scrollUp.js') }}\"></script>
            <script src=\"{{ asset('components/lightgallery/js/lightgallery.js') }}\"></script>

            <!-- Mobile Menu -->
            <script src=\"{{ asset('components/mmenu/jquery.mmenu.min.all.js') }}\"></script>

            <!-- REVOLUTION JS FILES -->
            <script src=\"{{ asset('components/slider/jquery.themepunch.tools.min.js') }}\"></script>
            <script src=\"{{ asset('components/slider/jquery.themepunch.revolution.min.js') }}\"></script>

            <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
            <script src=\"{{ asset('components/slider/extensions/revolution.extension.actions.min.js') }}\"></script>
            <script src=\"{{ asset('components/slider/extensions/revolution.extension.carousel.min.js') }}\"></script>
            <script src=\"{{ asset('components/slider/extensions/revolution.extension.kenburn.min.js') }}\"></script>
            <script src=\"{{ asset('components/slider/extensions/revolution.extension.layeranimation.min.js') }}\"></script>
            <script src=\"{{ asset('components/slider/extensions/revolution.extension.migration.min.js') }}\"></script>
            <script src=\"{{ asset('components/slider/extensions/revolution.extension.navigation.min.js') }}\"></script>
            <script src=\"{{ asset('components/slider/extensions/revolution.extension.parallax.min.js') }}\"></script>
            <script src=\"{{ asset('components/slider/extensions/revolution.extension.slideanims.min.js') }}\"></script>
            <script src=\"{{ asset('components/slider/extensions/revolution.extension.video.min.js') }}\"></script>

            <!-- ISOTOPE -->
            <script src=\"{{ asset('components/isotope.pkgd.min.js') }}\"></script>

            <!-- HOVER ISOTOPE -->
            <script src=\"{{ asset('components/jquery.directional-hover.min.js') }}\"></script>

            <!-- Image loaded ISOTOPE -->
            <script src=\"{{ asset('components/imagesloaded.pkgd.min.js') }}\"></script>

            <script src=\"{{ asset('js/main.js') }}\"></script>

        {% endblock %}

    {% block footer %}

        <footer class=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"footer-about\">
                            <p><a href=\"#\"><img src=\"images/page-home/logo-alt.png\" alt=\"renovation-logo\"></a></p>
                            <p>Our mission is to provide the best handyman service at an reasonable price without sacrificing quality. You will be satisfied with our work knowing we take the necessary steps to meet your needs and get the job done right</p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"footer-infomation\">
                            <h3 class=\"widget-tittle\">infomation</h3>
                            <ul class=\"menu-infomation\">
                                <li><a href=\"#\">Blog</a></li>
                                <li><a href=\"#\">Services</a></li>
                                <li><a href=\"#\">Extras</a></li>
                                <li><a href=\"contact.html\">Contact</a></li>
                                <li><a href=\"#\">Projects</a></li>
                                <li><a href=\"#\">Infomation</a></li>
                                <li><a href=\"#\">About Us</a></li>
                                <li><a href=\"#\">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"footer-info\">
                            <h3 class=\"widget-tittle\">renovation office</h3>
                            <ul>
                                <li><i class=\"fa fa-map-marker\"></i>14 Tottenham Road, London, England.</li>
                                <li><i class=\"fa fa-phone\"></i>(102) 6666 8888</li>
                                <li><i class=\"fa fa-envelope\"></i>info@thememove.com</li>
                                <li><i class=\"fa fa-fax\"></i>(102) 8888 9999</li>
                                <li><i class=\"fa fa-clock-o\"></i>Mon - Sat: 9:00 - 18:00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"social-menu social-menu_right-arrow\">
                <ul class=\"menu\">
                    <li class=\"menu-item\"><a href=\"https://www.facebook.com/\">facebook</a></li>
                    <li class=\"menu-item\"><a href=\"https://www.plus.google.com/\">google+</a></li>
                    <li class=\"menu-item\"><a href=\"https://www.twitter.com/\">twitter</a></li>
                    <li class=\"menu-item\"><a href=\"https://www.youtube.com/\">youtube</a></li>
                </ul>
            </div>
        </footer>
        <!-- /.footer -->

        <div class=\"copyright\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        Copyright &copy; General Pro 2017. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
        <!-- /.copyright -->
    </div>

    {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\generalproprojet\\general-pro-symfony\\app\\Resources\\views\\base.html.twig");
    }
}
