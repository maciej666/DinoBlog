<?php

/* PipiTrainingBundle:Blog/Widget:walletWidget.html.twig */
class __TwigTemplate_48c847298d2f7ae2c8cf523b932e957d3a1bc0e2de6494f52db831d5a51bb9ad extends Twig_Template
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
        $__internal_2c5af17b5907017a6a405f27a6b86fb251a668ef196688e4fa8fdd4cbcc6cfac = $this->env->getExtension("native_profiler");
        $__internal_2c5af17b5907017a6a405f27a6b86fb251a668ef196688e4fa8fdd4cbcc6cfac->enter($__internal_2c5af17b5907017a6a405f27a6b86fb251a668ef196688e4fa8fdd4cbcc6cfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PipiTrainingBundle:Blog/Widget:walletWidget.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context["blogMacros"] = $this->loadTemplate("PipiTrainingBundle:Blog:macros.html.twig", "PipiTrainingBundle:Blog/Widget:walletWidget.html.twig", 2);
        // line 3
        echo "
";
        // line 4
        echo $context["blogMacros"]->getwidgetList("W portfelu", (isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "Pełny dziennik", $this->env->getExtension('routing')->getPath("dziennik"));
        echo "

";
        // line 7
        echo "    ";
        // line 8
        echo "    ";
        // line 9
        echo "        ";
        // line 10
        echo "       ";
        // line 11
        echo "        ";
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        
        $__internal_2c5af17b5907017a6a405f27a6b86fb251a668ef196688e4fa8fdd4cbcc6cfac->leave($__internal_2c5af17b5907017a6a405f27a6b86fb251a668ef196688e4fa8fdd4cbcc6cfac_prof);

    }

    public function getTemplateName()
    {
        return "PipiTrainingBundle:Blog/Widget:walletWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  45 => 12,  43 => 11,  41 => 10,  39 => 9,  37 => 8,  35 => 7,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* {% import 'PipiTrainingBundle:Blog:macros.html.twig' as blogMacros %}*/
/* */
/* {{ blogMacros.widgetList('W portfelu', list, 'Pełny dziennik', path('dziennik')) }}*/
/* */
/* {#<section class="widget">#}*/
/*     {#<h2>W portfelu</h2>#}*/
/*     {#<ul>#}*/
/*         {#{% for item in list %}#}*/
/*        {#<li>{{ item }}</li>#}*/
/*         {#{% endfor %}#}*/
/*     {#</ul>#}*/
/*     {#<p><a class="btn btn-default" href="dziennik.html" role="button">Pełny dziennik &raquo;</a></p>#}*/
/* {#</section>#}*/
