<?php

/* PipiTrainingBundle:Blog:register.html.twig */
class __TwigTemplate_0878a9a10b3d846589840472081f37b65f7c37beb73b8901081bff974318b82f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PipiTrainingBundle:Blog:sidebarLayout.html.twig", "PipiTrainingBundle:Blog:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contentContainer' => array($this, 'block_contentContainer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PipiTrainingBundle:Blog:sidebarLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo " Domorosły inwestor - Rejestracja ";
    }

    // line 11
    public function block_contentContainer($context, array $blocks = array())
    {
        // line 12
        echo "

    <article class=\"col-md-8\">

        <h1>Rejestracja</h1>


        ";
        // line 20
        echo "            ";
        // line 21
        echo "                ";
        // line 22
        echo "                ";
        // line 23
        echo "                    ";
        // line 24
        echo "                ";
        // line 25
        echo "            ";
        // line 26
        echo "        ";
        // line 27
        echo "
    ";
        // line 29
        echo "        ";
        // line 30
        echo "            ";
        // line 31
        echo "                ";
        // line 32
        echo "                ";
        // line 33
        echo "                    ";
        // line 34
        echo "                    ";
        // line 35
        echo "                ";
        // line 36
        echo "            ";
        // line 37
        echo "        ";
        // line 38
        echo "
        ";
        // line 39
        if ( !(null === (isset($context["form"]) ? $context["form"] : null))) {
            // line 40
            echo "        ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form', array("attr" => array("novalidate" => "true")));
            echo "
        ";
        } else {
            // line 42
            echo "            <div class = \"panel panel-success\">
                <div class =\"panel-heading\">Już się zarejestrowałeś na szkolenie</div>
                <div class =\"panel-body\">Twoje zgłoszenie rejestracyjne jest przetwarzane.</div>
            </div>
        ";
        }
        // line 47
        echo "        ";
        // line 48
        echo "
        ";
        // line 50
        echo "            ";
        // line 51
        echo "            ";
        // line 52
        echo "            ";
        // line 53
        echo "        ";
        // line 54
        echo "    </article>


";
    }

    public function getTemplateName()
    {
        return "PipiTrainingBundle:Blog:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 54,  111 => 53,  109 => 52,  107 => 51,  105 => 50,  102 => 48,  100 => 47,  93 => 42,  87 => 40,  85 => 39,  82 => 38,  80 => 37,  78 => 36,  76 => 35,  74 => 34,  72 => 33,  70 => 32,  68 => 31,  66 => 30,  64 => 29,  61 => 27,  59 => 26,  57 => 25,  55 => 24,  53 => 23,  51 => 22,  49 => 21,  47 => 20,  38 => 12,  35 => 11,  29 => 9,  11 => 1,);
    }
}
/* {% extends 'PipiTrainingBundle:Blog:sidebarLayout.html.twig' %}*/
/* */
/* {#odc.61#}*/
/* */
/* */
/* */
/* {#&#123;&#35;{% form_theme form 'PipiTrainingBundle:Form:form_theme.html.twig' %}&#35;&#125; Skorzystałem z opcji zadeklarowania szablonów w poliku app/config/config.yml w miejscu twig:#}*/
/* */
/* {% block title %} Domorosły inwestor - Rejestracja {% endblock %}*/
/* */
/* {% block contentContainer %}*/
/* */
/* */
/*     <article class="col-md-8">*/
/* */
/*         <h1>Rejestracja</h1>*/
/* */
/* */
/*         {#<form class="form-horizontal" enctype="multipart/form-data">  &#123;&#35;enctype="multipart/form-data" pozwala na wysyłanie danych w postaci plików&#35;&#125;#}*/
/*             {#<div class="form-group">#}*/
/*                 {#<label for="inputEmail3" class="col-sm-2 control-label">Email</label>#}*/
/*                 {#<div class="col-sm-10">#}*/
/*                     {#<input type="email" class="form-control" id="inputEmail3" placeholder="Email">#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</form>#}*/
/* */
/*     {#PRZEROBIONY#}*/
/*         {#<form class="form-horizontal" {{ form_enctype(form) }}>  &#123;&#35;enctype="multipart/form-data" pozwala na wysyłanie danych w postaci plików&#35;&#125;#}*/
/*             {#<div class="form-group">#}*/
/*                 {#{{ form_label(form.name, null, {'label_attr':{'class':'col-sm-2 control-label'}}) }}#}*/
/*                 {#<div class="col-sm-10">#}*/
/*                     {#{{ form_widget(form.name, {'attr':{'class':'form-control'}}) }}#}*/
/*                     {#{{ form_errors(form.name) }}#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</form>#}*/
/* */
/*         {% if form is not null %}*/
/*         {{ form(form, {'attr': {'novalidate': 'true'}}) }}*/
/*         {% else %}*/
/*             <div class = "panel panel-success">*/
/*                 <div class ="panel-heading">Już się zarejestrowałeś na szkolenie</div>*/
/*                 <div class ="panel-body">Twoje zgłoszenie rejestracyjne jest przetwarzane.</div>*/
/*             </div>*/
/*         {% endif %}*/
/*         {#'attr' : {'novalidate' : 'true'} pozwala na wyłączenie walidacji po stronie przeglądarki#}*/
/* */
/*         {#&#123;&#35;{{ form_start(form) }}&#35;&#125;   odc. 64#}*/
/*             {#{{ form_row(form.email) }}#}*/
/*             {#{{ form_row(form.invest) }}#}*/
/*             {#{{ form_row(form.comments) }}#}*/
/*         {#{{ form_end(form) }}#}*/
/*     </article>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
