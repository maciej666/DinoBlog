<?php

/* PipiTrainingBundle:Blog:sidebarLayout.html.twig */
class __TwigTemplate_8464f7f08f964f1651ae86300adb4096c3f78449f9d9f40a2cb335fd04258d00 extends Twig_Template
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
        $__internal_7b2103a686e685c40feb0c9f1f79a55a62effe77d82a5a90894c6d07900343fd = $this->env->getExtension("native_profiler");
        $__internal_7b2103a686e685c40feb0c9f1f79a55a62effe77d82a5a90894c6d07900343fd->enter($__internal_7b2103a686e685c40feb0c9f1f79a55a62effe77d82a5a90894c6d07900343fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PipiTrainingBundle:Blog:sidebarLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b2103a686e685c40feb0c9f1f79a55a62effe77d82a5a90894c6d07900343fd->leave($__internal_7b2103a686e685c40feb0c9f1f79a55a62effe77d82a5a90894c6d07900343fd_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35e2b95e4276ad78d1f796ba0d93f30f07c7bff3c6f238339b6ccefdee0b18c4 = $this->env->getExtension("native_profiler");
        $__internal_35e2b95e4276ad78d1f796ba0d93f30f07c7bff3c6f238339b6ccefdee0b18c4->enter($__internal_35e2b95e4276ad78d1f796ba0d93f30f07c7bff3c6f238339b6ccefdee0b18c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pipitraining/css/sidebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_35e2b95e4276ad78d1f796ba0d93f30f07c7bff3c6f238339b6ccefdee0b18c4->leave($__internal_35e2b95e4276ad78d1f796ba0d93f30f07c7bff3c6f238339b6ccefdee0b18c4_prof);

    }

    // line 9
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_03f8b90e351ca585491e9d5c389409a01262588863003466564677920afecd6d = $this->env->getExtension("native_profiler");
        $__internal_03f8b90e351ca585491e9d5c389409a01262588863003466564677920afecd6d->enter($__internal_03f8b90e351ca585491e9d5c389409a01262588863003466564677920afecd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

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
        
        $__internal_03f8b90e351ca585491e9d5c389409a01262588863003466564677920afecd6d->leave($__internal_03f8b90e351ca585491e9d5c389409a01262588863003466564677920afecd6d_prof);

    }

    // line 15
    public function block_contentContainer($context, array $blocks = array())
    {
        $__internal_7186990cfd5f2b5e14414ba00e94f47ebb16ef0dad12cbfcc66f845b69f77fd5 = $this->env->getExtension("native_profiler");
        $__internal_7186990cfd5f2b5e14414ba00e94f47ebb16ef0dad12cbfcc66f845b69f77fd5->enter($__internal_7186990cfd5f2b5e14414ba00e94f47ebb16ef0dad12cbfcc66f845b69f77fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentContainer"));

        // line 16
        echo "
            ";
        
        $__internal_7186990cfd5f2b5e14414ba00e94f47ebb16ef0dad12cbfcc66f845b69f77fd5->leave($__internal_7186990cfd5f2b5e14414ba00e94f47ebb16ef0dad12cbfcc66f845b69f77fd5_prof);

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
        return array (  108 => 16,  102 => 15,  87 => 27,  81 => 24,  78 => 22,  76 => 21,  71 => 18,  69 => 15,  62 => 10,  56 => 9,  47 => 5,  42 => 4,  36 => 3,  11 => 2,);
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
