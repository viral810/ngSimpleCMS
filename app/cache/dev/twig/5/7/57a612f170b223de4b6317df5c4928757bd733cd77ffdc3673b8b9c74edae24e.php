<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_57a612f170b223de4b6317df5c4928757bd733cd77ffdc3673b8b9c74edae24e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_166072d91d0a3af2a2a1d4fa2841a7e49404051bca310a1cf2c7cec62c3f4b9a = $this->env->getExtension("native_profiler");
        $__internal_166072d91d0a3af2a2a1d4fa2841a7e49404051bca310a1cf2c7cec62c3f4b9a->enter($__internal_166072d91d0a3af2a2a1d4fa2841a7e49404051bca310a1cf2c7cec62c3f4b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "<div class=\"panel panel-success\">
    <div class=\"panel-heading\">
        <h2 class=\"panel-title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_registration", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"panel-body\">
        <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register form-horizontal\">
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"form-actions\">
                <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success pull-right\" />
            </div>
        </form>
    </div>
</div>";
        
        $__internal_166072d91d0a3af2a2a1d4fa2841a7e49404051bca310a1cf2c7cec62c3f4b9a->leave($__internal_166072d91d0a3af2a2a1d4fa2841a7e49404051bca310a1cf2c7cec62c3f4b9a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  38 => 7,  32 => 6,  26 => 3,  22 => 1,);
    }
}
