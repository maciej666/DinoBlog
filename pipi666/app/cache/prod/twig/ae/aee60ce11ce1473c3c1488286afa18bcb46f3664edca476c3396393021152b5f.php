<?php

/* PipiTrainingBundle:Blog/Widget:walletWidget.html.twig */
class __TwigTemplate_50d4490d7837b29337b5c38570d676208be425f9562082effb35d19f44503923 extends Twig_Template
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
        // line 1
        echo "
";
        // line 2
        $context["blogMacros"] = $this->loadTemplate("PipiTrainingBundle:Blog:macros.html.twig", "PipiTrainingBundle:Blog/Widget:walletWidget.html.twig", 2);
        // line 3
        echo "
";
        // line 4
        echo $context["blogMacros"]->getwidgetList("W portfelu", (isset($context["list"]) ? $context["list"] : null), "Pełny dziennik", $this->env->getExtension('routing')->getPath("dziennik"));
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
        return array (  44 => 13,  42 => 12,  40 => 11,  38 => 10,  36 => 9,  34 => 8,  32 => 7,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
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
