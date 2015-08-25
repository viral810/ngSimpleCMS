<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_b7bcfe60251a4d48e01111bebc6694f51f7cc43d193f7ad5ff70bcd6b5a80e2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9272e2fad09b3f34103cf6beffcd057655d5bb81f45f8c5af7c259842f5fff6 = $this->env->getExtension("native_profiler");
        $__internal_b9272e2fad09b3f34103cf6beffcd057655d5bb81f45f8c5af7c259842f5fff6->enter($__internal_b9272e2fad09b3f34103cf6beffcd057655d5bb81f45f8c5af7c259842f5fff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Form:form_admin_fields.html.twig"));

        // line 1
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
        
        $__internal_b9272e2fad09b3f34103cf6beffcd057655d5bb81f45f8c5af7c259842f5fff6->leave($__internal_b9272e2fad09b3f34103cf6beffcd057655d5bb81f45f8c5af7c259842f5fff6_prof);

    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        $__internal_63fac7eb6fa2f9c392d103cf14970ae16474373ccd013dd246ac5024bd6fc954 = $this->env->getExtension("native_profiler");
        $__internal_63fac7eb6fa2f9c392d103cf14970ae16474373ccd013dd246ac5024bd6fc954->enter($__internal_63fac7eb6fa2f9c392d103cf14970ae16474373ccd013dd246ac5024bd6fc954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_security_roles_widget"));

        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"editable\">
        <h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 5
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices"))) > 0)) {
            // line 8
            echo "    <div class=\"readonly\">
        <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 12
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_63fac7eb6fa2f9c392d103cf14970ae16474373ccd013dd246ac5024bd6fc954->leave($__internal_63fac7eb6fa2f9c392d103cf14970ae16474373ccd013dd246ac5024bd6fc954_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  63 => 12,  59 => 11,  54 => 9,  51 => 8,  49 => 7,  44 => 5,  40 => 4,  37 => 3,  35 => 2,  23 => 1,);
    }
}
