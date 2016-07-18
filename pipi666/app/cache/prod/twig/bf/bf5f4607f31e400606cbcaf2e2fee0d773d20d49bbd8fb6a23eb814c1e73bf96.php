<?php

/* PipiTrainingBundle:Blog:about.html.twig */
class __TwigTemplate_43c9583d3928e39b22c007624d98e3a3e2f72cce28c946d395c123c228eec792 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PipiTrainingBundle::base.html.twig", "PipiTrainingBundle:Blog:about.html.twig", 2);
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
        echo " Domorosły inwestor - O mnie ";
    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"container\">
    <!-- Example row of columns -->
    <div class=\"row extra-padding\">
        <div class=\"col-md-12\">
            <article class=\"about clearfix\">
                <div class=\"bio\">
                    <h1>Janek Złotówka</h1>
                    <p>Lorem ipsum dolor sit amet mi augue, sagittis vel, ornare id, turpis. Nullam augue eu neque eu libero. Aliquam erat volutpat. Nam dolor sit amet augue leo, ac nibh placerat quam. Integer sit amet ipsum dolor cursus wisi vel blandit egestas quam in augue. Maecenas eu odio. Nam dictum lectus non nibh ac lacus. Cras luctus et turpis. Proin nunc semper convallis. Suspendisse potenti. Vestibulum fermentum. Vivamus laoreet viverra fermentum mi, nec libero. Nulla varius, sem ut quam ipsum, vel lectus. Curabitur ultrices varius. Ut eu urna. Donec condimentum quam. Sed nonummy malesuada, arcu erat, ut quam nec massa. Maecenas vitae neque vitae mauris. Donec faucibus eu, bibendum quis, odio. Vestibulum eget urna. Nulla mi at quam. Mauris interdum dui nulla, auctor nibh, imperdiet quis, pellentesque purus, nec nunc vitae lectus at sapien. Morbi pede. In turpis egestas. Suspendisse est eu sem tincidunt lorem. In fermentum. Aliquam ultricies sollicitudin. Vestibulum aliquam tellus dui nunc, tempus rutrum euismod, quam at turpis.</p>
                    <p>Aenean vel risus. Mauris pellentesque, wisi. Integer nibh porta scelerisque, quam at nulla. Nunc elementum. Morbi dignissim, imperdiet sed, posuere tristique ullamcorper. Nam consectetuer lobortis vitae, imperdiet id, urna. Sed leo vulputate sagittis, mi vel neque at ante. Maecenas mi quam molestie aliquam. Nunc placerat pharetra velit sit amet dolor. Ut vel lorem. Cras ac magna tincidunt rutrum ut, ultricies porta. Quisque eu neque ut enim. Phasellus fermentum, metus nisl, a purus. Duis vehicula enim sapien sodales neque mauris, interdum adipiscing elit. Proin at urna mauris, consectetuer egestas, justo vel urna eu justo. Suspendisse sollicitudin. Praesent vitae magna neque, mattis rhoncus libero dolor, porttitor vel, metus. Curabitur commodo. Suspendisse sollicitudin. Cras tempus vitae, dapibus nisl. Sed placerat. Mauris vel tortor. Vivamus pede. Sed diam vestibulum ligula. Sed pellentesque dapibus in, ipsum. Fusce tempor lorem. Curabitur placerat, nisl sapien vitae neque nibh vel urna ullamcorper risus. Vivamus ut urna quis orci. Nunc et turpis. Aenean vulputate quam. Nunc ultricies iaculis nisl.</p>
                </div>

                <img class=\"img-thumbnail\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pipitraining/img/me.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </article>
        </div>
    </div>

</div> <!-- /container -->
";
    }

    public function getTemplateName()
    {
        return "PipiTrainingBundle:Blog:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  38 => 8,  35 => 7,  29 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'PipiTrainingBundle::base.html.twig' %}*/
/* */
/* {% block title %} Domorosły inwestor - O mnie {% endblock %}*/
/* */
/* */
/* {% block pageContainer %}*/
/* <div class="container">*/
/*     <!-- Example row of columns -->*/
/*     <div class="row extra-padding">*/
/*         <div class="col-md-12">*/
/*             <article class="about clearfix">*/
/*                 <div class="bio">*/
/*                     <h1>Janek Złotówka</h1>*/
/*                     <p>Lorem ipsum dolor sit amet mi augue, sagittis vel, ornare id, turpis. Nullam augue eu neque eu libero. Aliquam erat volutpat. Nam dolor sit amet augue leo, ac nibh placerat quam. Integer sit amet ipsum dolor cursus wisi vel blandit egestas quam in augue. Maecenas eu odio. Nam dictum lectus non nibh ac lacus. Cras luctus et turpis. Proin nunc semper convallis. Suspendisse potenti. Vestibulum fermentum. Vivamus laoreet viverra fermentum mi, nec libero. Nulla varius, sem ut quam ipsum, vel lectus. Curabitur ultrices varius. Ut eu urna. Donec condimentum quam. Sed nonummy malesuada, arcu erat, ut quam nec massa. Maecenas vitae neque vitae mauris. Donec faucibus eu, bibendum quis, odio. Vestibulum eget urna. Nulla mi at quam. Mauris interdum dui nulla, auctor nibh, imperdiet quis, pellentesque purus, nec nunc vitae lectus at sapien. Morbi pede. In turpis egestas. Suspendisse est eu sem tincidunt lorem. In fermentum. Aliquam ultricies sollicitudin. Vestibulum aliquam tellus dui nunc, tempus rutrum euismod, quam at turpis.</p>*/
/*                     <p>Aenean vel risus. Mauris pellentesque, wisi. Integer nibh porta scelerisque, quam at nulla. Nunc elementum. Morbi dignissim, imperdiet sed, posuere tristique ullamcorper. Nam consectetuer lobortis vitae, imperdiet id, urna. Sed leo vulputate sagittis, mi vel neque at ante. Maecenas mi quam molestie aliquam. Nunc placerat pharetra velit sit amet dolor. Ut vel lorem. Cras ac magna tincidunt rutrum ut, ultricies porta. Quisque eu neque ut enim. Phasellus fermentum, metus nisl, a purus. Duis vehicula enim sapien sodales neque mauris, interdum adipiscing elit. Proin at urna mauris, consectetuer egestas, justo vel urna eu justo. Suspendisse sollicitudin. Praesent vitae magna neque, mattis rhoncus libero dolor, porttitor vel, metus. Curabitur commodo. Suspendisse sollicitudin. Cras tempus vitae, dapibus nisl. Sed placerat. Mauris vel tortor. Vivamus pede. Sed diam vestibulum ligula. Sed pellentesque dapibus in, ipsum. Fusce tempor lorem. Curabitur placerat, nisl sapien vitae neque nibh vel urna ullamcorper risus. Vivamus ut urna quis orci. Nunc et turpis. Aenean vulputate quam. Nunc ultricies iaculis nisl.</p>*/
/*                 </div>*/
/* */
/*                 <img class="img-thumbnail" src="{{ asset('bundles/pipitraining/img/me.jpg')}}" alt="">*/
/*             </article>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div> <!-- /container -->*/
/* {% endblock %}*/
/* */
