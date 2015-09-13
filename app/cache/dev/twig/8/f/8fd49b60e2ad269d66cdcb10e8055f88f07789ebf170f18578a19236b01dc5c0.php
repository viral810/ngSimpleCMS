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
        $__internal_89513c564694e6f89c1dd4ddd1fe2bf3e7b8cdd7d3d159b049dd91f461783460 = $this->env->getExtension("native_profiler");
        $__internal_89513c564694e6f89c1dd4ddd1fe2bf3e7b8cdd7d3d159b049dd91f461783460->enter($__internal_89513c564694e6f89c1dd4ddd1fe2bf3e7b8cdd7d3d159b049dd91f461783460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                <ul class=\"top-menu\">
                    <li><a href=\"#\" class=\"rentorsell\" role=\"button\">Rent or Sell Property</a></li>
                ";
        // line 38
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 39
            echo "                    <li class=\"has-children\"><a href=\"/admin/dashboard\" class=\"login\" role=\"button\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"#\" class=\"login\" role=\"button\">Shortlist</a></li>
                            <li><a href=\"/logout\" class=\"login\" role=\"button\">Logout</a></li>
                        </ul>
                    </li>
                ";
        } else {
            // line 46
            echo "                    <li><a href=\"/admin/login\" class=\"login\" role=\"button\">login</a></li>
                ";
        }
        // line 48
        echo "                    <li><a href=\"#\" id=\"trigger\" role=\"button\">Menu</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div ng-view></div>
    ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "</div>
    ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "</body>
</html>
";
        
        $__internal_89513c564694e6f89c1dd4ddd1fe2bf3e7b8cdd7d3d159b049dd91f461783460->leave($__internal_89513c564694e6f89c1dd4ddd1fe2bf3e7b8cdd7d3d159b049dd91f461783460_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_387000b84616db3be6e4271804b46ca7e34a1414baac42b99dcd04b28ff45b1e = $this->env->getExtension("native_profiler");
        $__internal_387000b84616db3be6e4271804b46ca7e34a1414baac42b99dcd04b28ff45b1e->enter($__internal_387000b84616db3be6e4271804b46ca7e34a1414baac42b99dcd04b28ff45b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sell or Rent Property in Toronto, Hamilton, Kitchener, Vaughan | Ontario | Canada";
        
        $__internal_387000b84616db3be6e4271804b46ca7e34a1414baac42b99dcd04b28ff45b1e->leave($__internal_387000b84616db3be6e4271804b46ca7e34a1414baac42b99dcd04b28ff45b1e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0305b4656f75f0ec86605a85458546358dc151f6cf2aa4a39755d503f590dba0 = $this->env->getExtension("native_profiler");
        $__internal_0305b4656f75f0ec86605a85458546358dc151f6cf2aa4a39755d503f590dba0->enter($__internal_0305b4656f75f0ec86605a85458546358dc151f6cf2aa4a39755d503f590dba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0305b4656f75f0ec86605a85458546358dc151f6cf2aa4a39755d503f590dba0->leave($__internal_0305b4656f75f0ec86605a85458546358dc151f6cf2aa4a39755d503f590dba0_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c96699553311d35fc06a7cefa2c9b531f573cf3e497400678c90a8009047565 = $this->env->getExtension("native_profiler");
        $__internal_0c96699553311d35fc06a7cefa2c9b531f573cf3e497400678c90a8009047565->enter($__internal_0c96699553311d35fc06a7cefa2c9b531f573cf3e497400678c90a8009047565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0c96699553311d35fc06a7cefa2c9b531f573cf3e497400678c90a8009047565->leave($__internal_0c96699553311d35fc06a7cefa2c9b531f573cf3e497400678c90a8009047565_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_362eceeaddbfbcf5bef1a4f64d5158d90de1bd0698322fc18efdf89342a26914 = $this->env->getExtension("native_profiler");
        $__internal_362eceeaddbfbcf5bef1a4f64d5158d90de1bd0698322fc18efdf89342a26914->enter($__internal_362eceeaddbfbcf5bef1a4f64d5158d90de1bd0698322fc18efdf89342a26914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d117c2b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d117c2b_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d117c2b_jquery.min_1.js");
            // line 65
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
        // line 67
        echo "    ";
        
        $__internal_362eceeaddbfbcf5bef1a4f64d5158d90de1bd0698322fc18efdf89342a26914->leave($__internal_362eceeaddbfbcf5bef1a4f64d5158d90de1bd0698322fc18efdf89342a26914_prof);

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
        return array (  231 => 67,  187 => 65,  182 => 57,  176 => 56,  165 => 54,  157 => 20,  131 => 18,  126 => 15,  120 => 14,  108 => 6,  99 => 68,  97 => 56,  94 => 55,  92 => 54,  84 => 48,  80 => 46,  69 => 39,  67 => 38,  49 => 22,  47 => 14,  41 => 11,  33 => 6,  26 => 1,);
    }
}
