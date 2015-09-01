<?php

/* CmfCoreBundle:Form:checkbox_url_label_form_type.html.twig */
class __TwigTemplate_faadff7f7aa18bea2b460d3bcf77b65ebaa96d6f644d2d6f5760c315fcd1ea65 extends Twig_Template
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
        $__internal_fde08bf759db37884ff4168a4bef579131ed991e8275f230eec1396ea3ab3105 = $this->env->getExtension("native_profiler");
        $__internal_fde08bf759db37884ff4168a4bef579131ed991e8275f230eec1396ea3ab3105->enter($__internal_fde08bf759db37884ff4168a4bef579131ed991e8275f230eec1396ea3ab3105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CmfCoreBundle:Form:checkbox_url_label_form_type.html.twig"));

        // line 1
        $this->displayBlock('cmf_core_checkbox_url_label_row', $context, $blocks);
        
        $__internal_fde08bf759db37884ff4168a4bef579131ed991e8275f230eec1396ea3ab3105->leave($__internal_fde08bf759db37884ff4168a4bef579131ed991e8275f230eec1396ea3ab3105_prof);

    }

    public function block_cmf_core_checkbox_url_label_row($context, array $blocks = array())
    {
        $__internal_d892553aa8cc9834b0a7750d33d97f1b59b4d4a1c9ce3b034e08f056b7efd934 = $this->env->getExtension("native_profiler");
        $__internal_d892553aa8cc9834b0a7750d33d97f1b59b4d4a1c9ce3b034e08f056b7efd934->enter($__internal_d892553aa8cc9834b0a7750d33d97f1b59b4d4a1c9ce3b034e08f056b7efd934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cmf_core_checkbox_url_label_row"));

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
        
        $__internal_d892553aa8cc9834b0a7750d33d97f1b59b4d4a1c9ce3b034e08f056b7efd934->leave($__internal_d892553aa8cc9834b0a7750d33d97f1b59b4d4a1c9ce3b034e08f056b7efd934_prof);

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
