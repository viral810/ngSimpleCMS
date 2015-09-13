<?php

/* base.html.twig */
class __TwigTemplate_8fd49b60e2ad269d66cdcb10e8055f88f07789ebf170f18578a19236b01dc5c0 extends Twig_Template
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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d496011096ce1f7840b9ad09299ecae1bf36fd7475870aea2a1a57d485e35ff = $this->env->getExtension("native_profiler");
        $__internal_6d496011096ce1f7840b9ad09299ecae1bf36fd7475870aea2a1a57d485e35ff->enter($__internal_6d496011096ce1f7840b9ad09299ecae1bf36fd7475870aea2a1a57d485e35ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    <!-- Place favicon.ico in the root directory -->

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "</head>
<body ng-app=\"HouseTO\">
<div class=\"menu\">
    <nav class=\"top-menu\">
        <a href=\"#\">Home</a>
    </nav>
</div>
<div class=\"body-wrapper\" ng-controller=\"MainCtrl\">

    <header class=\"header\">
        <div class=\"wrap\">
            <h1><a href=\"/\">House<span class=\"title-span\">T.O.</span></a></h1>

            <div class=\"nav-right\">
                <a href=\"#\" class=\"rentorsell\" role=\"button\">Rent or Sell Property</a>
                ";
        // line 37
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 38
            echo "                    <a href=\"/admin/dashboard\" class=\"login\" role=\"button\">Admin</a>
                    <a href=\"/logout\" class=\"login\" role=\"button\">Logout</a>
                ";
        } else {
            // line 41
            echo "                    <a href=\"/admin/login\" class=\"login\" role=\"button\">login</a>
                ";
        }
        // line 43
        echo "                <a href=\"#\" id=\"trigger\" role=\"button\">Menu</a>
            </div>
        </div>
    </header>
    <div ng-view></div>
    ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "</div>
    ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "</body>
</html>
";
        
        $__internal_6d496011096ce1f7840b9ad09299ecae1bf36fd7475870aea2a1a57d485e35ff->leave($__internal_6d496011096ce1f7840b9ad09299ecae1bf36fd7475870aea2a1a57d485e35ff_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f79207c3e29c1bb62e58171308f5597762dad063feb783249f318a840aca119f = $this->env->getExtension("native_profiler");
        $__internal_f79207c3e29c1bb62e58171308f5597762dad063feb783249f318a840aca119f->enter($__internal_f79207c3e29c1bb62e58171308f5597762dad063feb783249f318a840aca119f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sell or Rent Property in Toronto, Hamilton, Kitchener, Vaughan | Ontario | Canada";
        
        $__internal_f79207c3e29c1bb62e58171308f5597762dad063feb783249f318a840aca119f->leave($__internal_f79207c3e29c1bb62e58171308f5597762dad063feb783249f318a840aca119f_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b632757154d8c6b5740ed8d50cd508ea42e7a51710f461051ddcd1f93a1413b6 = $this->env->getExtension("native_profiler");
        $__internal_b632757154d8c6b5740ed8d50cd508ea42e7a51710f461051ddcd1f93a1413b6->enter($__internal_b632757154d8c6b5740ed8d50cd508ea42e7a51710f461051ddcd1f93a1413b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6feb881_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6feb881_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6feb881_part_1_base_1.css");
            // line 18
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "6feb881_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6feb881_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6feb881_part_1_main_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "6feb881_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6feb881_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6feb881_part_1_style_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "6feb881"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6feb881") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6feb881.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css\" />
    ";
        
        $__internal_b632757154d8c6b5740ed8d50cd508ea42e7a51710f461051ddcd1f93a1413b6->leave($__internal_b632757154d8c6b5740ed8d50cd508ea42e7a51710f461051ddcd1f93a1413b6_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c8d5a55d826cdf87e4a8c67ae889c056ed1945f743600598e64cd587830161f = $this->env->getExtension("native_profiler");
        $__internal_0c8d5a55d826cdf87e4a8c67ae889c056ed1945f743600598e64cd587830161f->enter($__internal_0c8d5a55d826cdf87e4a8c67ae889c056ed1945f743600598e64cd587830161f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0c8d5a55d826cdf87e4a8c67ae889c056ed1945f743600598e64cd587830161f->leave($__internal_0c8d5a55d826cdf87e4a8c67ae889c056ed1945f743600598e64cd587830161f_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92aa28fb1f859d0a56e8e928b7877bff0ecf310625cccfb65e372fd069fbbc9b = $this->env->getExtension("native_profiler");
        $__internal_92aa28fb1f859d0a56e8e928b7877bff0ecf310625cccfb65e372fd069fbbc9b->enter($__internal_92aa28fb1f859d0a56e8e928b7877bff0ecf310625cccfb65e372fd069fbbc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d117c2b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d117c2b_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d117c2b_jquery.min_1.js");
            // line 59
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "d117c2b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d117c2b_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d117c2b_angular.min_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "d117c2b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d117c2b_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d117c2b_angular-route.min_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "d117c2b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d117c2b_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d117c2b_modernizr-respond.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "d117c2b_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d117c2b_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d117c2b_main_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "d117c2b_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d117c2b_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d117c2b_part_6_app_1.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "d117c2b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d117c2b") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d117c2b.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 61
        echo "    ";
        
        $__internal_92aa28fb1f859d0a56e8e928b7877bff0ecf310625cccfb65e372fd069fbbc9b->leave($__internal_92aa28fb1f859d0a56e8e928b7877bff0ecf310625cccfb65e372fd069fbbc9b_prof);

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
        return array (  223 => 61,  179 => 59,  174 => 51,  168 => 50,  157 => 48,  149 => 20,  123 => 18,  118 => 15,  112 => 14,  100 => 6,  91 => 62,  89 => 50,  86 => 49,  84 => 48,  77 => 43,  73 => 41,  68 => 38,  66 => 37,  49 => 22,  47 => 14,  41 => 11,  33 => 6,  26 => 1,);
    }
}
