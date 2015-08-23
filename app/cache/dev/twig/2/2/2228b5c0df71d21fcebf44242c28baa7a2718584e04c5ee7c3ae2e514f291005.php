<?php

/* CmfCoreBundle:Form:checkbox_url_label_form_type.html.twig */
class __TwigTemplate_2228b5c0df71d21fcebf44242c28baa7a2718584e04c5ee7c3ae2e514f291005 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'cmf_core_checkbox_url_label_row' => array($this, 'block_cmf_core_checkbox_url_label_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea032726073332b8bb6537859aae7c8c3c8a0dc575885573e5a27f0a0fbcfd4e = $this->env->getExtension("native_profiler");
        $__internal_ea032726073332b8bb6537859aae7c8c3c8a0dc575885573e5a27f0a0fbcfd4e->enter($__internal_ea032726073332b8bb6537859aae7c8c3c8a0dc575885573e5a27f0a0fbcfd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CmfCoreBundle:Form:checkbox_url_label_form_type.html.twig"));

        // line 1
        $this->displayBlock('cmf_core_checkbox_url_label_row', $context, $blocks);
        
        $__internal_ea032726073332b8bb6537859aae7c8c3c8a0dc575885573e5a27f0a0fbcfd4e->leave($__internal_ea032726073332b8bb6537859aae7c8c3c8a0dc575885573e5a27f0a0fbcfd4e_prof);

    }

    public function block_cmf_core_checkbox_url_label_row($context, array $blocks = array())
    {
        $__internal_c4e96a36796450c0357423d851057d4d6644e6e82129c9f378490c26ac5102f8 = $this->env->getExtension("native_profiler");
        $__internal_c4e96a36796450c0357423d851057d4d6644e6e82129c9f378490c26ac5102f8->enter($__internal_c4e96a36796450c0357423d851057d4d6644e6e82129c9f378490c26ac5102f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmf_core_checkbox_url_label_row"));

        // line 2
        ob_start();
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
<label class=\"checkbox\">
    <input type=\"checkbox\" ";
        // line 5
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
    ";
        // line 6
        echo $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), (isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "
</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c4e96a36796450c0357423d851057d4d6644e6e82129c9f378490c26ac5102f8->leave($__internal_c4e96a36796450c0357423d851057d4d6644e6e82129c9f378490c26ac5102f8_prof);

    }

    public function getTemplateName()
    {
        return "CmfCoreBundle:Form:checkbox_url_label_form_type.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  42 => 5,  37 => 3,  35 => 2,  23 => 1,);
    }
}
