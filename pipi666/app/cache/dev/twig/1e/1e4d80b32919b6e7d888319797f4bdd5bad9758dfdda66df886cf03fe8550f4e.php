<?php

/* PipiTrainingBundle:Blog:index.html.twig */
class __TwigTemplate_78b48aee726b2eed56c23abb0d13d78124c3a4ba10c10dca0ff4d3ac620d4d56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PipiTrainingBundle::base.html.twig", "PipiTrainingBundle:Blog:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageContainer' => array($this, 'block_pageContainer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PipiTrainingBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_845c8f76f230fe32174793df249104977dcfec14faac5f202c41e554008deccf = $this->env->getExtension("native_profiler");
        $__internal_845c8f76f230fe32174793df249104977dcfec14faac5f202c41e554008deccf->enter($__internal_845c8f76f230fe32174793df249104977dcfec14faac5f202c41e554008deccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PipiTrainingBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_845c8f76f230fe32174793df249104977dcfec14faac5f202c41e554008deccf->leave($__internal_845c8f76f230fe32174793df249104977dcfec14faac5f202c41e554008deccf_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dee726827271cc94695f6b53198413b36c912786796de45c2c140410421c1c1 = $this->env->getExtension("native_profiler");
        $__internal_4dee726827271cc94695f6b53198413b36c912786796de45c2c140410421c1c1->enter($__internal_4dee726827271cc94695f6b53198413b36c912786796de45c2c140410421c1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Domorosły inwestor - Strona główna ";
        
        $__internal_4dee726827271cc94695f6b53198413b36c912786796de45c2c140410421c1c1->leave($__internal_4dee726827271cc94695f6b53198413b36c912786796de45c2c140410421c1c1_prof);

    }

    // line 6
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_ee646c99e6239755bba6c69f35a5aa751d16013a47ef5dc26f32e27b84a62993 = $this->env->getExtension("native_profiler");
        $__internal_ee646c99e6239755bba6c69f35a5aa751d16013a47ef5dc26f32e27b84a62993->enter($__internal_ee646c99e6239755bba6c69f35a5aa751d16013a47ef5dc26f32e27b84a62993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 7
        echo "
<div class=\"jumbotron\">
    <div class=\"container\">
        <div class=\"text\">
            <h1>Być jak Warren Buffett!</h1>
            <p>Jest powszechnie uważany za jednego z najlepszych inwestorów na świecie. Warren Buffett, często określany jako \"legendarny inwestor\", jest głównym akcjonariuszem, przewodniczącym rady nadzorczej oraz prezesem Berkshire Hathaway. Od wielu lat konsekwentnie utrzymuje się na szczytach list najbogatszych ludzi świata.</p>
            <p><a class=\"btn btn-primary btn-lg\" href=\"dziennik.html\" role=\"button\">Moja droga na szczyt &raquo;</a></p>
        </div>
        <img class=\"bull\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pipitraining/img/bull.jpg"), "html", null, true);
        echo "\" alt=\"\">
    </div>
</div>

<div class=\"container\">
    <!-- Example row of columns -->
    <div class=\"row\">

        <div class=\"col-md-4\">

            ";
        // line 25
        $this->loadTemplate("PipiTrainingBundle:Blog/Widget:gpwWidget.html.twig", "PipiTrainingBundle:Blog:index.html.twig", 25)->display($context);
        // line 26
        echo "
        </div>

        <div class=\"col-md-4\">

            ";
        // line 32
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PipiTrainingBundle:Blog:followingWidget"));
        echo " ";
        // line 33
        echo "
        </div>

        <div class=\"col-md-4\">

            ";
        // line 39
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PipiTrainingBundle:Blog:walletWidget"));
        echo "

        </div>
    </div>

</div> <!-- /container -->

";
        
        $__internal_ee646c99e6239755bba6c69f35a5aa751d16013a47ef5dc26f32e27b84a62993->leave($__internal_ee646c99e6239755bba6c69f35a5aa751d16013a47ef5dc26f32e27b84a62993_prof);

    }

    public function getTemplateName()
    {
        return "PipiTrainingBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 39,  89 => 33,  85 => 32,  78 => 26,  76 => 25,  63 => 15,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'PipiTrainingBundle::base.html.twig' %}*/
/* */
/* {% block title %} Domorosły inwestor - Strona główna {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/* <div class="jumbotron">*/
/*     <div class="container">*/
/*         <div class="text">*/
/*             <h1>Być jak Warren Buffett!</h1>*/
/*             <p>Jest powszechnie uważany za jednego z najlepszych inwestorów na świecie. Warren Buffett, często określany jako "legendarny inwestor", jest głównym akcjonariuszem, przewodniczącym rady nadzorczej oraz prezesem Berkshire Hathaway. Od wielu lat konsekwentnie utrzymuje się na szczytach list najbogatszych ludzi świata.</p>*/
/*             <p><a class="btn btn-primary btn-lg" href="dziennik.html" role="button">Moja droga na szczyt &raquo;</a></p>*/
/*         </div>*/
/*         <img class="bull" src="{{ asset('bundles/pipitraining/img/bull.jpg')}}" alt="">*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     <!-- Example row of columns -->*/
/*     <div class="row">*/
/* */
/*         <div class="col-md-4">*/
/* */
/*             {% include 'PipiTrainingBundle:Blog/Widget:gpwWidget.html.twig' %}*/
/* */
/*         </div>*/
/* */
/*         <div class="col-md-4">*/
/* */
/*             {#{% include 'PipiTrainingBundle:Blog/Widget:followingWidget.html.twig'%}#}*/
/*             {{render(controller('PipiTrainingBundle:Blog:followingWidget')) }} {#tu na końcu dajemy nazwę kontrolera#}*/
/* */
/*         </div>*/
/* */
/*         <div class="col-md-4">*/
/* */
/*             {#{% include 'PipiTrainingBundle:Blog/Widget:walletWidget.html.twig' %}#}*/
/*             {{render(controller('PipiTrainingBundle:Blog:walletWidget')) }}*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* </div> <!-- /container -->*/
/* */
/* {% endblock %}*/
/* */
