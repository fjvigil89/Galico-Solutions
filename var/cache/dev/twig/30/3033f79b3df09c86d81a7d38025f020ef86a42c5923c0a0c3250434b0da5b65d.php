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
        $__internal_22f5a30c95b10a7adde76fc307ef6ced1378c5cf74ba3a30246e92ac500c3459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f5a30c95b10a7adde76fc307ef6ced1378c5cf74ba3a30246e92ac500c3459->enter($__internal_22f5a30c95b10a7adde76fc307ef6ced1378c5cf74ba3a30246e92ac500c3459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0ef22ee8062f98a7060b594f87031599a3dcef171bfba4ac661128dcae840766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef22ee8062f98a7060b594f87031599a3dcef171bfba4ac661128dcae840766->enter($__internal_0ef22ee8062f98a7060b594f87031599a3dcef171bfba4ac661128dcae840766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_22f5a30c95b10a7adde76fc307ef6ced1378c5cf74ba3a30246e92ac500c3459->leave($__internal_22f5a30c95b10a7adde76fc307ef6ced1378c5cf74ba3a30246e92ac500c3459_prof);

        
        $__internal_0ef22ee8062f98a7060b594f87031599a3dcef171bfba4ac661128dcae840766->leave($__internal_0ef22ee8062f98a7060b594f87031599a3dcef171bfba4ac661128dcae840766_prof);

    }

    // line 2
    public function block_class($context, array $blocks = array())
    {
        $__internal_5bd4964230996a5e0f4fca060439ac88cd3053b1d52d4917d8d3ab0279d841c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd4964230996a5e0f4fca060439ac88cd3053b1d52d4917d8d3ab0279d841c9->enter($__internal_5bd4964230996a5e0f4fca060439ac88cd3053b1d52d4917d8d3ab0279d841c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class"));

        $__internal_cf8a257237a763b0a0d74135fbfa16f7665998ec9b4f042e2eea15aa61f46bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8a257237a763b0a0d74135fbfa16f7665998ec9b4f042e2eea15aa61f46bc9->enter($__internal_cf8a257237a763b0a0d74135fbfa16f7665998ec9b4f042e2eea15aa61f46bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class"));

        
        $__internal_cf8a257237a763b0a0d74135fbfa16f7665998ec9b4f042e2eea15aa61f46bc9->leave($__internal_cf8a257237a763b0a0d74135fbfa16f7665998ec9b4f042e2eea15aa61f46bc9_prof);

        
        $__internal_5bd4964230996a5e0f4fca060439ac88cd3053b1d52d4917d8d3ab0279d841c9->leave($__internal_5bd4964230996a5e0f4fca060439ac88cd3053b1d52d4917d8d3ab0279d841c9_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9ec2ddfd529ca229055c5470d2397d767f3cab9f56f0d2f49b49e01ff0fdb49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ec2ddfd529ca229055c5470d2397d767f3cab9f56f0d2f49b49e01ff0fdb49->enter($__internal_e9ec2ddfd529ca229055c5470d2397d767f3cab9f56f0d2f49b49e01ff0fdb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47420ccbb503d4198858a4e84cd45e2896ad1f5cb74c02e87fa669199ba40230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47420ccbb503d4198858a4e84cd45e2896ad1f5cb74c02e87fa669199ba40230->enter($__internal_47420ccbb503d4198858a4e84cd45e2896ad1f5cb74c02e87fa669199ba40230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GENERAL PRO";
        
        $__internal_47420ccbb503d4198858a4e84cd45e2896ad1f5cb74c02e87fa669199ba40230->leave($__internal_47420ccbb503d4198858a4e84cd45e2896ad1f5cb74c02e87fa669199ba40230_prof);

        
        $__internal_e9ec2ddfd529ca229055c5470d2397d767f3cab9f56f0d2f49b49e01ff0fdb49->leave($__internal_e9ec2ddfd529ca229055c5470d2397d767f3cab9f56f0d2f49b49e01ff0fdb49_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7615e01f9357e37d1695f8043d6bca3c5fe6ab059f16148a9d9e9a3ed8c87550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7615e01f9357e37d1695f8043d6bca3c5fe6ab059f16148a9d9e9a3ed8c87550->enter($__internal_7615e01f9357e37d1695f8043d6bca3c5fe6ab059f16148a9d9e9a3ed8c87550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4d2976dee7a9731ac60d5b06f34cbf47496889beff9f5e6c1ee5d03a71fed89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2976dee7a9731ac60d5b06f34cbf47496889beff9f5e6c1ee5d03a71fed89d->enter($__internal_4d2976dee7a9731ac60d5b06f34cbf47496889beff9f5e6c1ee5d03a71fed89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4d2976dee7a9731ac60d5b06f34cbf47496889beff9f5e6c1ee5d03a71fed89d->leave($__internal_4d2976dee7a9731ac60d5b06f34cbf47496889beff9f5e6c1ee5d03a71fed89d_prof);

        
        $__internal_7615e01f9357e37d1695f8043d6bca3c5fe6ab059f16148a9d9e9a3ed8c87550->leave($__internal_7615e01f9357e37d1695f8043d6bca3c5fe6ab059f16148a9d9e9a3ed8c87550_prof);

    }

    // line 137
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0e5252f278113dd5e004e06cb25d3fb210089567b7892247ae23d9d2bae76d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e5252f278113dd5e004e06cb25d3fb210089567b7892247ae23d9d2bae76d8->enter($__internal_b0e5252f278113dd5e004e06cb25d3fb210089567b7892247ae23d9d2bae76d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a13fee4b09dfe7b2ee3a9a597dcf13626a4c11ec995684d6d60a28a3c8ee766a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13fee4b09dfe7b2ee3a9a597dcf13626a4c11ec995684d6d60a28a3c8ee766a->enter($__internal_a13fee4b09dfe7b2ee3a9a597dcf13626a4c11ec995684d6d60a28a3c8ee766a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a13fee4b09dfe7b2ee3a9a597dcf13626a4c11ec995684d6d60a28a3c8ee766a->leave($__internal_a13fee4b09dfe7b2ee3a9a597dcf13626a4c11ec995684d6d60a28a3c8ee766a_prof);

        
        $__internal_b0e5252f278113dd5e004e06cb25d3fb210089567b7892247ae23d9d2bae76d8->leave($__internal_b0e5252f278113dd5e004e06cb25d3fb210089567b7892247ae23d9d2bae76d8_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d8c544619a4c35ddba651b04f90b426f4361cdb3c3479593959db24a55bb7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8c544619a4c35ddba651b04f90b426f4361cdb3c3479593959db24a55bb7cb->enter($__internal_4d8c544619a4c35ddba651b04f90b426f4361cdb3c3479593959db24a55bb7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a2a1610c3cc679628a94d12b21de6b2db9fddcc12bc263eab09c00896d725fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a1610c3cc679628a94d12b21de6b2db9fddcc12bc263eab09c00896d725fa0->enter($__internal_a2a1610c3cc679628a94d12b21de6b2db9fddcc12bc263eab09c00896d725fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a2a1610c3cc679628a94d12b21de6b2db9fddcc12bc263eab09c00896d725fa0->leave($__internal_a2a1610c3cc679628a94d12b21de6b2db9fddcc12bc263eab09c00896d725fa0_prof);

        
        $__internal_4d8c544619a4c35ddba651b04f90b426f4361cdb3c3479593959db24a55bb7cb->leave($__internal_4d8c544619a4c35ddba651b04f90b426f4361cdb3c3479593959db24a55bb7cb_prof);

    }

    // line 180
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e47c2a08adb7ea133ded8bfa2932be7f7932bad6ebd1809717c776e62c80b5e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47c2a08adb7ea133ded8bfa2932be7f7932bad6ebd1809717c776e62c80b5e2->enter($__internal_e47c2a08adb7ea133ded8bfa2932be7f7932bad6ebd1809717c776e62c80b5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_8b1dc87f293524f0deca3193d01e4e07b15cd6e7d413c42fb82d789686eb7153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1dc87f293524f0deca3193d01e4e07b15cd6e7d413c42fb82d789686eb7153->enter($__internal_8b1dc87f293524f0deca3193d01e4e07b15cd6e7d413c42fb82d789686eb7153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_8b1dc87f293524f0deca3193d01e4e07b15cd6e7d413c42fb82d789686eb7153->leave($__internal_8b1dc87f293524f0deca3193d01e4e07b15cd6e7d413c42fb82d789686eb7153_prof);

        
        $__internal_e47c2a08adb7ea133ded8bfa2932be7f7932bad6ebd1809717c776e62c80b5e2->leave($__internal_e47c2a08adb7ea133ded8bfa2932be7f7932bad6ebd1809717c776e62c80b5e2_prof);

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
        return array (  437 => 181,  428 => 180,  415 => 176,  410 => 174,  404 => 171,  398 => 168,  392 => 165,  388 => 164,  384 => 163,  380 => 162,  376 => 161,  372 => 160,  368 => 159,  364 => 158,  360 => 157,  354 => 154,  350 => 153,  344 => 150,  338 => 147,  334 => 146,  330 => 145,  326 => 144,  322 => 143,  318 => 142,  314 => 140,  305 => 139,  288 => 137,  276 => 40,  270 => 37,  264 => 34,  258 => 31,  252 => 28,  246 => 25,  240 => 22,  230 => 15,  224 => 12,  220 => 11,  217 => 10,  208 => 9,  190 => 8,  173 => 2,  161 => 244,  159 => 180,  156 => 179,  154 => 139,  151 => 138,  149 => 137,  52 => 43,  49 => 42,  47 => 9,  43 => 8,  34 => 2,  31 => 1,);
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
", "base.html.twig", "C:\\xampp\\htdocs\\general-pro-symfony\\app\\Resources\\views\\base.html.twig");
    }
}
