<?php

/* PipiTrainingBundle:Blog:register.html.twig */
class __TwigTemplate_6860d36a53078d622ac3533123479d204eb00b5a27c6c174a5c679ca82a8a5b4 extends Twig_Template
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
        $__internal_bc4c7e889a2edc8e1ea8553a913f166d786e4148cffc0f6a33351f58bef6e580 = $this->env->getExtension("native_profiler");
        $__internal_bc4c7e889a2edc8e1ea8553a913f166d786e4148cffc0f6a33351f58bef6e580->enter($__internal_bc4c7e889a2edc8e1ea8553a913f166d786e4148cffc0f6a33351f58bef6e580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PipiTrainingBundle:Blog:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc4c7e889a2edc8e1ea8553a913f166d786e4148cffc0f6a33351f58bef6e580->leave($__internal_bc4c7e889a2edc8e1ea8553a913f166d786e4148cffc0f6a33351f58bef6e580_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_63387b984a4ba8c6235001ed840267ab1ef720154f6e2da0b403ba6faf6d05ae = $this->env->getExtension("native_profiler");
        $__internal_63387b984a4ba8c6235001ed840267ab1ef720154f6e2da0b403ba6faf6d05ae->enter($__internal_63387b984a4ba8c6235001ed840267ab1ef720154f6e2da0b403ba6faf6d05ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Domorosły inwestor - Rejestracja ";
        
        $__internal_63387b984a4ba8c6235001ed840267ab1ef720154f6e2da0b403ba6faf6d05ae->leave($__internal_63387b984a4ba8c6235001ed840267ab1ef720154f6e2da0b403ba6faf6d05ae_prof);

    }

    // line 11
    public function block_contentContainer($context, array $blocks = array())
    {
        $__internal_b8c230e68dcc4cb2abd67b249d8ca39b96fdd66a6244c1cfeca8658b3fe94d09 = $this->env->getExtension("native_profiler");
        $__internal_b8c230e68dcc4cb2abd67b249d8ca39b96fdd66a6244c1cfeca8658b3fe94d09->enter($__internal_b8c230e68dcc4cb2abd67b249d8ca39b96fdd66a6244c1cfeca8658b3fe94d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentContainer"));

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
        if ( !(null === (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
            // line 40
            echo "        ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("novalidate" => "true")));
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
        
        $__internal_b8c230e68dcc4cb2abd67b249d8ca39b96fdd66a6244c1cfeca8658b3fe94d09->leave($__internal_b8c230e68dcc4cb2abd67b249d8ca39b96fdd66a6244c1cfeca8658b3fe94d09_prof);

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
        return array (  128 => 54,  126 => 53,  124 => 52,  122 => 51,  120 => 50,  117 => 48,  115 => 47,  108 => 42,  102 => 40,  100 => 39,  97 => 38,  95 => 37,  93 => 36,  91 => 35,  89 => 34,  87 => 33,  85 => 32,  83 => 31,  81 => 30,  79 => 29,  76 => 27,  74 => 26,  72 => 25,  70 => 24,  68 => 23,  66 => 22,  64 => 21,  62 => 20,  53 => 12,  47 => 11,  35 => 9,  11 => 1,);
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
