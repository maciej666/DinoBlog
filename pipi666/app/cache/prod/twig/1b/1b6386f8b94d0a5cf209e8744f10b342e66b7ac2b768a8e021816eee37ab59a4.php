<?php

/* PipiTrainingBundle:Blog:sidebarLayout.html.twig */
class __TwigTemplate_6741a031b3b5defc59f07ee1aa8ba4ff14acab318432f7462a0b4086df2c773b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PipiTrainingBundle::base.html.twig", "PipiTrainingBundle:Blog:sidebarLayout.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageContainer' => array($this, 'block_pageContainer'),
            'contentContainer' => array($this, 'block_contentContainer'),
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

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pipitraining/css/sidebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 9
    public function block_pageContainer($context, array $blocks = array())
    {
        // line 10
        echo "
    <div class=\"container\">
        <!-- Example row of columns -->
        <div class=\"row extra-padding\">

            ";
        // line 15
        $this->displayBlock('contentContainer', $context, $blocks);
        // line 18
        echo "
            <div class=\"col-md-3 pull-right sidebar\">

                ";
        // line 21
        $this->loadTemplate("PipiTrainingBundle:Blog/Widget:gpwWidget.html.twig", "PipiTrainingBundle:Blog:sidebarLayout.html.twig", 21)->display($context);
        // line 22
        echo "
                ";
        // line 24
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PipiTrainingBundle:Blog:followingWidget"));
        echo "

                ";
        // line 27
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PipiTrainingBundle:Blog:walletWidget"));
        echo "
            </div>
        </div>

    </div> <!-- /container -->

";
    }

    // line 15
    public function block_contentContainer($context, array $blocks = array())
    {
        // line 16
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "PipiTrainingBundle:Blog:sidebarLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  84 => 15,  72 => 27,  66 => 24,  63 => 22,  61 => 21,  56 => 18,  54 => 15,  47 => 10,  44 => 9,  38 => 5,  33 => 4,  30 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'PipiTrainingBundle::base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('bundles/pipitraining/css/sidebar.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* */
/* {% block pageContainer %}*/
/* */
/*     <div class="container">*/
/*         <!-- Example row of columns -->*/
/*         <div class="row extra-padding">*/
/* */
/*             {% block contentContainer %}*/
/* */
/*             {% endblock %}*/
/* */
/*             <div class="col-md-3 pull-right sidebar">*/
/* */
/*                 {% include 'PipiTrainingBundle:Blog/Widget:gpwWidget.html.twig' %}*/
/* */
/*                 {#{% include 'PipiTrainingBundle:Blog/Widget:followingWidget.html.twig'%}#}*/
/*                 {{render(controller('PipiTrainingBundle:Blog:followingWidget')) }}*/
/* */
/*                 {#{% include 'PipiTrainingBundle:Blog/Widget:walletWidget.html.twig' %}#}*/
/*                 {{render(controller('PipiTrainingBundle:Blog:walletWidget')) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div> <!-- /container -->*/
/* */
/* {% endblock %}*/
