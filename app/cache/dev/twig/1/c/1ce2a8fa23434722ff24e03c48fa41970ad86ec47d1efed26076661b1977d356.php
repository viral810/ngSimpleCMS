<?php

/* @WebProfiler/Profiler/base.html.twig */
class __TwigTemplate_1ce2a8fa23434722ff24e03c48fa41970ad86ec47d1efed26076661b1977d356 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17e5f6c56f0fd5e5ff50823ea12d2d6ea744d1d871b75f73aa724abd97c8dddc = $this->env->getExtension("native_profiler");
        $__internal_17e5f6c56f0fd5e5ff50823ea12d2d6ea744d1d871b75f73aa724abd97c8dddc->enter($__internal_17e5f6c56f0fd5e5ff50823ea12d2d6ea744d1d871b75f73aa724abd97c8dddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"data:image/ico;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAABMLAAATCwAAAAAAAAAAAAAAAAAAAAAAADIvMQAyLzEIMi8xSzEuMKoyLzHkMi8x/TIvMf0yLzHlMi8xrDIvMU4yLzEJMi8xAAAAAAAAAAAAAAAAADIvMQAyLzEYMS4wkTMwMu45Njj/MS4w/zEuMP8yLzH/Mi8x/zIvMf8yLzHvMi8xlDIvMRkyLzEAAAAAADIvMQAyLzEXMS4wrTk2OPyVk5T7kI6P/nl3ef8+Oz3/MS4w/zIvMf8yLzH/Mi8x/zIvMf4yLzGxMi8xGjIvMQAyLzEGMi8xkDEuMP4/PD79wcDA+oB+gP6Ni4z/paOk/zk2OP8xLjD/Mi8x/zIvMf8yLzH/Mi8x/zIvMZQyLzEIMi8xSTIvMewyLzH/MS4w/z06PP81MjT+TktN/93c3f97eXv/MC0v/zIvMf8yLzH/Mi8x/zIvMf8yLzHuMi8xTzIvMaUyLzH/Mi8x/0lHSf9kYmP/XFpb/zs4Ov/DwsL+ycjI/zs4Ov8xLjD/Mi8x/zIvMf8yLzH/Mi8x/zIvMawyLzHfMC0v/1tYWv+opqf/YV5g/8bFxf96eHn+m5qb/u7u7v9WVFX/MC0v/zIvMf8yLzH/Mi8x/zIvMf8yLzHkMi8x+jAtL/9iYGH/mZiZ/2dlZv/p6On/oJ+g/np4ev/6+vr/dXN1/y0qLP8xLjD/Mi8x/zIvMf8yLzH/Mi8x/DIvMfoyLzH/MzAy/0A+QP7JyMj85eXl/1tYWv9XVVf/8fDx/6qpqv9ZV1j/Q0BC/zIvMf8yLzH/Mi8x/zIvMfwyLzHeMi8x/zEuMP8/PD762dnZ9JWTlP81MjT/ZmRm/+Dg4P/DwsP/YV5g/6Wkpf9BPkD/MS4w/zIvMf8yLzHjMi8xozIvMf8yLzH/Mi8x/nZ0dv2amJn4dXN0+V5bXf+Pjo//0tLS/0hFR/9vbG7/Ozg6/zEuMP8yLzH/Mi8xqTIvMUcyLzHrMi8x/zIvMf8xLjD/Ozg6/Do3OfwwLS//REFD/728vP9nZWb/TktN/4mIif05Nzn/Mi8x7jMwMkwyLzEGMi8xjDIvMf4yLzH/Mi8x/zIvMf8yLzH/Mi8x/zAtL/9XVFb/goGC+Hx6e+6qqanwOzg6/DMwMpJDQEIIMi8xADIvMRUyLzGrMi8x/jIvMf8yLzH/Mi8x/zIvMf8yLzH/MS4w/zg2N/xBPkD3OTY4/DIvMa8yLzEYMi8xAAAAAAAyLzEAMi8xGDIvMY0yLzHqMi8x/zIvMf8yLzH/Mi8x/zIvMf8yLzH/MS4w7DEuMJEyLzEaMi8xAAAAAAAAAAAAAAAAADIvMQAyLzEGMi8xQzIvMZ4yLzHdMi8x+jIvMfoyLzHeMi8xoDIvMUUyLzEGMi8xAAAAAAAAAAAA4AcAAMADAACAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIABAADAAwAA4AcAAA==\">
        <style>
            ";
        // line 9
        $this->loadTemplate("@WebProfiler/Profiler/body.css.twig", "@WebProfiler/Profiler/base.html.twig", 9)->display($context);
        // line 10
        echo "        </style>
        ";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 16
        echo "        <style>
            ";
        // line 17
        $this->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig", "@WebProfiler/Profiler/base.html.twig", 17)->display(array_merge($context, array("position" => "top", "floatable" => false)));
        // line 18
        echo "        </style>
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_17e5f6c56f0fd5e5ff50823ea12d2d6ea744d1d871b75f73aa724abd97c8dddc->leave($__internal_17e5f6c56f0fd5e5ff50823ea12d2d6ea744d1d871b75f73aa724abd97c8dddc_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_15da6298c60403ca90c5421b3d3b747596defc1700bef61547d2a738e779f0db = $this->env->getExtension("native_profiler");
        $__internal_15da6298c60403ca90c5421b3d3b747596defc1700bef61547d2a738e779f0db->enter($__internal_15da6298c60403ca90c5421b3d3b747596defc1700bef61547d2a738e779f0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Profiler";
        
        $__internal_15da6298c60403ca90c5421b3d3b747596defc1700bef61547d2a738e779f0db->leave($__internal_15da6298c60403ca90c5421b3d3b747596defc1700bef61547d2a738e779f0db_prof);

    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        $__internal_aff4ae6893ae7499c291e0f53352e5f4fc51494586b2820b2416ebb79960ee66 = $this->env->getExtension("native_profiler");
        $__internal_aff4ae6893ae7499c291e0f53352e5f4fc51494586b2820b2416ebb79960ee66->enter($__internal_aff4ae6893ae7499c291e0f53352e5f4fc51494586b2820b2416ebb79960ee66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 12
        echo "            <style>
                ";
        // line 13
        $this->loadTemplate("@WebProfiler/Profiler/profiler.css.twig", "@WebProfiler/Profiler/base.html.twig", 13)->display($context);
        // line 14
        echo "            </style>
        ";
        
        $__internal_aff4ae6893ae7499c291e0f53352e5f4fc51494586b2820b2416ebb79960ee66->leave($__internal_aff4ae6893ae7499c291e0f53352e5f4fc51494586b2820b2416ebb79960ee66_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_503a00f59f9b29cd98e51a20b5cb004d9786177750e8a3a5ed8dd6b28097f371 = $this->env->getExtension("native_profiler");
        $__internal_503a00f59f9b29cd98e51a20b5cb004d9786177750e8a3a5ed8dd6b28097f371->enter($__internal_503a00f59f9b29cd98e51a20b5cb004d9786177750e8a3a5ed8dd6b28097f371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_503a00f59f9b29cd98e51a20b5cb004d9786177750e8a3a5ed8dd6b28097f371->leave($__internal_503a00f59f9b29cd98e51a20b5cb004d9786177750e8a3a5ed8dd6b28097f371_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 21,  92 => 14,  90 => 13,  87 => 12,  81 => 11,  69 => 6,  60 => 22,  58 => 21,  53 => 18,  51 => 17,  48 => 16,  46 => 11,  43 => 10,  41 => 9,  35 => 6,  30 => 4,  25 => 1,);
    }
}
