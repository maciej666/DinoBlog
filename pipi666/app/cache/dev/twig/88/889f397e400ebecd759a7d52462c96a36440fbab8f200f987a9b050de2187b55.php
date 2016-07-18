<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bdacf1114d9e5b54f2d95ae0eb194be33b4ad8eaddb180678197688ad1eb3041 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af35027b2f13e9d3e81aa79e6a0b85d448eb82c757ef0e8a417208e372a2379f = $this->env->getExtension("native_profiler");
        $__internal_af35027b2f13e9d3e81aa79e6a0b85d448eb82c757ef0e8a417208e372a2379f->enter($__internal_af35027b2f13e9d3e81aa79e6a0b85d448eb82c757ef0e8a417208e372a2379f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af35027b2f13e9d3e81aa79e6a0b85d448eb82c757ef0e8a417208e372a2379f->leave($__internal_af35027b2f13e9d3e81aa79e6a0b85d448eb82c757ef0e8a417208e372a2379f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8e9ab72d076d137309cec1c96e88b226cc5e427651c795c70817cf481d68b90 = $this->env->getExtension("native_profiler");
        $__internal_d8e9ab72d076d137309cec1c96e88b226cc5e427651c795c70817cf481d68b90->enter($__internal_d8e9ab72d076d137309cec1c96e88b226cc5e427651c795c70817cf481d68b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d8e9ab72d076d137309cec1c96e88b226cc5e427651c795c70817cf481d68b90->leave($__internal_d8e9ab72d076d137309cec1c96e88b226cc5e427651c795c70817cf481d68b90_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05582007a800f31939f7ce401e7b3917ee120e31569b674000d3f1577473ce30 = $this->env->getExtension("native_profiler");
        $__internal_05582007a800f31939f7ce401e7b3917ee120e31569b674000d3f1577473ce30->enter($__internal_05582007a800f31939f7ce401e7b3917ee120e31569b674000d3f1577473ce30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_05582007a800f31939f7ce401e7b3917ee120e31569b674000d3f1577473ce30->leave($__internal_05582007a800f31939f7ce401e7b3917ee120e31569b674000d3f1577473ce30_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dc8c98bf22a5cab4cdc97eb54d6a3100af1011cdb705dfd52586eb534616b2f8 = $this->env->getExtension("native_profiler");
        $__internal_dc8c98bf22a5cab4cdc97eb54d6a3100af1011cdb705dfd52586eb534616b2f8->enter($__internal_dc8c98bf22a5cab4cdc97eb54d6a3100af1011cdb705dfd52586eb534616b2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dc8c98bf22a5cab4cdc97eb54d6a3100af1011cdb705dfd52586eb534616b2f8->leave($__internal_dc8c98bf22a5cab4cdc97eb54d6a3100af1011cdb705dfd52586eb534616b2f8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
