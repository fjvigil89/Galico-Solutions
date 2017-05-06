<?php

/* base.html.twig */
class __TwigTemplate_e278b38be6267fb8edcf06d628eb15b2955ce13b7e8f0f6d9ff7e3ee435daf55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'class' => array($this, 'block_class'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8dffe34b8cd04c8e76097d03aaba15daeef39a7595245f0aaf9c8fc1a2cf613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8dffe34b8cd04c8e76097d03aaba15daeef39a7595245f0aaf9c8fc1a2cf613->enter($__internal_c8dffe34b8cd04c8e76097d03aaba15daeef39a7595245f0aaf9c8fc1a2cf613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bee607ac81e772ab9cb487a037b83aca024671ed01304a832b4a5abed3654cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee607ac81e772ab9cb487a037b83aca024671ed01304a832b4a5abed3654cf6->enter($__internal_bee607ac81e772ab9cb487a037b83aca024671ed01304a832b4a5abed3654cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ";
        // line 2
        $this->displayBlock('class', $context, $blocks);
        echo ">
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

                        <li class=\"menu-item\"><a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("app_pagenavigation_showservices");
        echo "\">services</a></li>
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
        
        $__internal_c8dffe34b8cd04c8e76097d03aaba15daeef39a7595245f0aaf9c8fc1a2cf613->leave($__internal_c8dffe34b8cd04c8e76097d03aaba15daeef39a7595245f0aaf9c8fc1a2cf613_prof);

        
        $__internal_bee607ac81e772ab9cb487a037b83aca024671ed01304a832b4a5abed3654cf6->leave($__internal_bee607ac81e772ab9cb487a037b83aca024671ed01304a832b4a5abed3654cf6_prof);

    }

    // line 2
    public function block_class($context, array $blocks = array())
    {
        $__internal_bb3a26a1632316913c5ecaada889922d3656cd3cc031a3cabe748cbf5a92205a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3a26a1632316913c5ecaada889922d3656cd3cc031a3cabe748cbf5a92205a->enter($__internal_bb3a26a1632316913c5ecaada889922d3656cd3cc031a3cabe748cbf5a92205a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class"));

        $__internal_aa708d04e418de3c42a71d8afa32cac4686f628342a04a90e91e41e96debe03d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa708d04e418de3c42a71d8afa32cac4686f628342a04a90e91e41e96debe03d->enter($__internal_aa708d04e418de3c42a71d8afa32cac4686f628342a04a90e91e41e96debe03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class"));

        
        $__internal_aa708d04e418de3c42a71d8afa32cac4686f628342a04a90e91e41e96debe03d->leave($__internal_aa708d04e418de3c42a71d8afa32cac4686f628342a04a90e91e41e96debe03d_prof);

        
        $__internal_bb3a26a1632316913c5ecaada889922d3656cd3cc031a3cabe748cbf5a92205a->leave($__internal_bb3a26a1632316913c5ecaada889922d3656cd3cc031a3cabe748cbf5a92205a_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ba9367fef9305851f1880e3638aa86f2cce4b02cd6cd031979aed81d6b0fbc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba9367fef9305851f1880e3638aa86f2cce4b02cd6cd031979aed81d6b0fbc4->enter($__internal_7ba9367fef9305851f1880e3638aa86f2cce4b02cd6cd031979aed81d6b0fbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72b6476e1ede5b7446aff30d8ceac41f7bbf51e0afd3ed7bab8cfa4ab3dc6ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b6476e1ede5b7446aff30d8ceac41f7bbf51e0afd3ed7bab8cfa4ab3dc6ef0->enter($__internal_72b6476e1ede5b7446aff30d8ceac41f7bbf51e0afd3ed7bab8cfa4ab3dc6ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GENERAL PRO";
        
        $__internal_72b6476e1ede5b7446aff30d8ceac41f7bbf51e0afd3ed7bab8cfa4ab3dc6ef0->leave($__internal_72b6476e1ede5b7446aff30d8ceac41f7bbf51e0afd3ed7bab8cfa4ab3dc6ef0_prof);

        
        $__internal_7ba9367fef9305851f1880e3638aa86f2cce4b02cd6cd031979aed81d6b0fbc4->leave($__internal_7ba9367fef9305851f1880e3638aa86f2cce4b02cd6cd031979aed81d6b0fbc4_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f6789908f18607afb45ca282a09c05db6373d87badef841dadb04ec492a8589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f6789908f18607afb45ca282a09c05db6373d87badef841dadb04ec492a8589->enter($__internal_5f6789908f18607afb45ca282a09c05db6373d87badef841dadb04ec492a8589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6cdf603856402e5d2fd66332bb5f865776f022c5d504611439da1af25b6f9a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdf603856402e5d2fd66332bb5f865776f022c5d504611439da1af25b6f9a73->enter($__internal_6cdf603856402e5d2fd66332bb5f865776f022c5d504611439da1af25b6f9a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6cdf603856402e5d2fd66332bb5f865776f022c5d504611439da1af25b6f9a73->leave($__internal_6cdf603856402e5d2fd66332bb5f865776f022c5d504611439da1af25b6f9a73_prof);

        
        $__internal_5f6789908f18607afb45ca282a09c05db6373d87badef841dadb04ec492a8589->leave($__internal_5f6789908f18607afb45ca282a09c05db6373d87badef841dadb04ec492a8589_prof);

    }

    // line 137
    public function block_body($context, array $blocks = array())
    {
        $__internal_1faaa1412c52a561c76f63284b344cc9d10408b13f19c9c1e70a8f7ec687fb6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1faaa1412c52a561c76f63284b344cc9d10408b13f19c9c1e70a8f7ec687fb6c->enter($__internal_1faaa1412c52a561c76f63284b344cc9d10408b13f19c9c1e70a8f7ec687fb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd7023f5cb59cc22ac278d286c80a7667e163b3003678df1137ec0f0a40a55dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7023f5cb59cc22ac278d286c80a7667e163b3003678df1137ec0f0a40a55dc->enter($__internal_dd7023f5cb59cc22ac278d286c80a7667e163b3003678df1137ec0f0a40a55dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dd7023f5cb59cc22ac278d286c80a7667e163b3003678df1137ec0f0a40a55dc->leave($__internal_dd7023f5cb59cc22ac278d286c80a7667e163b3003678df1137ec0f0a40a55dc_prof);

        
        $__internal_1faaa1412c52a561c76f63284b344cc9d10408b13f19c9c1e70a8f7ec687fb6c->leave($__internal_1faaa1412c52a561c76f63284b344cc9d10408b13f19c9c1e70a8f7ec687fb6c_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f33052a12e9d6e87cf7a2bb06f1f850024d5bd762da981d7f827aedc65af7bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33052a12e9d6e87cf7a2bb06f1f850024d5bd762da981d7f827aedc65af7bbf->enter($__internal_f33052a12e9d6e87cf7a2bb06f1f850024d5bd762da981d7f827aedc65af7bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_66cad734d429c6966118e0becaf9ab8679c9e803df1eb5ca760d0c7077531ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66cad734d429c6966118e0becaf9ab8679c9e803df1eb5ca760d0c7077531ff8->enter($__internal_66cad734d429c6966118e0becaf9ab8679c9e803df1eb5ca760d0c7077531ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_66cad734d429c6966118e0becaf9ab8679c9e803df1eb5ca760d0c7077531ff8->leave($__internal_66cad734d429c6966118e0becaf9ab8679c9e803df1eb5ca760d0c7077531ff8_prof);

        
        $__internal_f33052a12e9d6e87cf7a2bb06f1f850024d5bd762da981d7f827aedc65af7bbf->leave($__internal_f33052a12e9d6e87cf7a2bb06f1f850024d5bd762da981d7f827aedc65af7bbf_prof);

    }

    // line 180
    public function block_footer($context, array $blocks = array())
    {
        $__internal_cc7c4b9a163fcf31c965c3fae6609d061152a257cfe37c119ddacea98814a103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc7c4b9a163fcf31c965c3fae6609d061152a257cfe37c119ddacea98814a103->enter($__internal_cc7c4b9a163fcf31c965c3fae6609d061152a257cfe37c119ddacea98814a103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a4542210d19bf7ddaff451150383df592df3f3b2cbc77ed49b780b74b8272900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4542210d19bf7ddaff451150383df592df3f3b2cbc77ed49b780b74b8272900->enter($__internal_a4542210d19bf7ddaff451150383df592df3f3b2cbc77ed49b780b74b8272900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_a4542210d19bf7ddaff451150383df592df3f3b2cbc77ed49b780b74b8272900->leave($__internal_a4542210d19bf7ddaff451150383df592df3f3b2cbc77ed49b780b74b8272900_prof);

        
        $__internal_cc7c4b9a163fcf31c965c3fae6609d061152a257cfe37c119ddacea98814a103->leave($__internal_cc7c4b9a163fcf31c965c3fae6609d061152a257cfe37c119ddacea98814a103_prof);

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
        return array (  440 => 181,  431 => 180,  418 => 176,  413 => 174,  407 => 171,  401 => 168,  395 => 165,  391 => 164,  387 => 163,  383 => 162,  379 => 161,  375 => 160,  371 => 159,  367 => 158,  363 => 157,  357 => 154,  353 => 153,  347 => 150,  341 => 147,  337 => 146,  333 => 145,  329 => 144,  325 => 143,  321 => 142,  317 => 140,  308 => 139,  291 => 137,  279 => 40,  273 => 37,  267 => 34,  261 => 31,  255 => 28,  249 => 25,  243 => 22,  233 => 15,  227 => 12,  223 => 11,  220 => 10,  211 => 9,  193 => 8,  176 => 2,  164 => 244,  162 => 180,  159 => 179,  157 => 139,  154 => 138,  152 => 137,  136 => 124,  52 => 43,  49 => 42,  47 => 9,  43 => 8,  34 => 2,  31 => 1,);
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
<html {% block class %}{% endblock %}>
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

                        <li class=\"menu-item\"><a href=\"{{ url('app_pagenavigation_showservices') }}\">services</a></li>
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
", "base.html.twig", "C:\\xampp\\htdocs\\general-pro-symfony\\app\\Resources\\views\\base.html.twig");
    }
}
