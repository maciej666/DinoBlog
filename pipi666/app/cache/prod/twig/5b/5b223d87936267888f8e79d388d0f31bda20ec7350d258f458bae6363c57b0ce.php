<?php

/* PipiTrainingBundle:Blog:index.html.twig */
class __TwigTemplate_7ff2d6c4e08f4c3a48f0630582d42380956525f14d7c0feade0f405d4f71eeb7 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Domorosły inwestor - Strona główna ";
    }

    // line 6
    public function block_pageContainer($context, array $blocks = array())
    {
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
        return array (  81 => 39,  74 => 33,  70 => 32,  63 => 26,  61 => 25,  48 => 15,  38 => 7,  35 => 6,  29 => 4,  11 => 2,);
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
