<?php

/* PipiTrainingBundle:Blog/Widget:followingWidget.html.twig */
class __TwigTemplate_aefda6a440fedd2172cfa74f12b24685bcf576f8ca3d1f8b8ab5eb9062ec63c6 extends Twig_Template
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
        $context["blogMacros"] = $this->loadTemplate("PipiTrainingBundle:Blog:macros.html.twig", "PipiTrainingBundle:Blog/Widget:followingWidget.html.twig", 2);
        // line 3
        echo "

";
        // line 6
        echo "
";
        // line 7
        echo $context["blogMacros"]->getwidgetList("Aktualnie oberwuję", (isset($context["list"]) ? $context["list"] : null), "Wszystkie spółki", "http://www.gpw.pl/lista_spolek");
        echo "

";
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        // line 12
        echo "        ";
        // line 13
        echo "        ";
        // line 14
        echo "        ";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PipiTrainingBundle:Blog/Widget:followingWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  46 => 15,  44 => 14,  42 => 13,  40 => 12,  38 => 11,  36 => 10,  31 => 7,  28 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% import 'PipiTrainingBundle:Blog:macros.html.twig' as blogMacros %}*/
/* */
/* */
/* {# self oznacza że chodzi o plik w którym się znajduję#}*/
/* */
/* {{ blogMacros.widgetList('Aktualnie oberwuję', list, 'Wszystkie spółki', 'http://www.gpw.pl/lista_spolek' ) }}*/
/* */
/* {#<section class="widget">#}*/
/*     {#<h2>Aktualnie oberwuję</h2>#}*/
/*     {#<ul>#}*/
/*         {#{% for item in list %}#}*/
/*         {#<li>{{ item }}</li>#}*/
/*         {#{% endfor %}#}*/
/*     {#</ul>#}*/
/*     {#<p><a class="btn btn-default" href="http://www.gpw.pl/lista_spolek" role="button">Wszystkie spółki &raquo;</a></p>#}*/
/* {#</section>#}*/
