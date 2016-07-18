<?php

/* PipiTrainingBundle::base.html.twig */
class __TwigTemplate_83bf6b578951f06d9ee7a5d8ac1a64ff1246de9a4ab72ef6353977838797b0cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageContainer' => array($this, 'block_pageContainer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["meta_description"]) ? $context["meta_description"] : null), "html", null, true);
        echo "\"> ";
        // line 8
        echo "    <meta name=\"author\" content=\"";
        echo twig_escape_filter($this->env, (isset($context["meta_author"]) ? $context["meta_author"] : null), "html", null, true);
        echo "\">

    <title>";
        // line 10
        ob_start();
        $this->displayBlock('title', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "</title>

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
        </div>

        ";
        // line 41
        $context["mainMenu"] = array(0 => array("path" => "glowna", "name" => "Home"), 1 => array("path" => "dziennik", "name" => "Dziennik"), 2 => array("path" => "o_mnie", "name" => "O mnie"), 3 => array("path" => "kontakt", "name" => "Kontakt"), 4 => array("path" => "komentarze", "name" => "Komentarze"), 5 => array("path" => "rejestracja", "name" => "Rejestracja"));
        // line 50
        echo "
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mainMenu"]) ? $context["mainMenu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 54
            echo "                    ";
            // line 55
            echo "
                    <li ";
            // line 56
            echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") == $this->getAttribute($context["item"], "path", array(), "array"))) ? ("class=\"active\"") : (""));
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute($context["item"], "path", array(), "array"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array(), "array"), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
                ";
        // line 60
        echo "                ";
        // line 61
        echo "                ";
        // line 62
        echo "                ";
        // line 63
        echo "            </ul>
        </div><!--/.navbar-collapse -->

    </div>
</div>

<div class=\"container alerts\">
    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 71
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 72
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "</div>   ";
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('pageContainer', $context, $blocks);
        // line 78
        echo "

<div id=\"footer\">
    <div class=\"container\">
        <p class=\"text-muted\">&copy; Domorosły inwestor 2014</p>
    </div>
</div>

";
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 92
        echo "</body>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pipitraining/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pipitraining/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
    }

    // line 77
    public function block_pageContainer($context, array $blocks = array())
    {
        echo "   ";
    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        // line 87
        echo "<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pipitraining/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PipiTrainingBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 90,  201 => 87,  198 => 86,  192 => 77,  186 => 17,  180 => 14,  177 => 13,  174 => 12,  168 => 10,  163 => 92,  161 => 86,  151 => 78,  149 => 77,  146 => 76,  144 => 75,  138 => 74,  127 => 72,  122 => 71,  118 => 70,  109 => 63,  107 => 62,  105 => 61,  103 => 60,  100 => 58,  88 => 56,  85 => 55,  83 => 54,  79 => 53,  74 => 50,  72 => 41,  49 => 19,  47 => 12,  40 => 10,  34 => 8,  31 => 7,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="pl">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="{{ meta_description }}"> {#Należy dodać zmienne do parameters.yml#}*/
/*     <meta name="author" content="{{ meta_author }}">*/
/* */
/*     <title>{% spaceless %}{% block title %}  {% endblock %}{% endspaceless %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{ asset('bundles/pipitraining/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*     <!-- Custom styles for this template -->*/
/*     <link href="{{ asset('bundles/pipitraining/css/styles.css') }}" rel="stylesheet">*/
/*     {% endblock %}*/
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* <body>*/
/* */
/* <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*         </div>*/
/* */
/*         {%*/
/*         set mainMenu = [*/
/*         {'path':'glowna', 'name':'Home'},*/
/*         {'path':'dziennik', 'name':'Dziennik'},*/
/*         {'path':'o_mnie', 'name':'O mnie'},*/
/*         {'path':'kontakt', 'name':'Kontakt'},*/
/*         {'path':'komentarze', 'name':'Komentarze'},*/
/*         {'path':'rejestracja', 'name':'Rejestracja'}*/
/*         ]*/
/*         %}*/
/* */
/*         <div class="navbar-collapse collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 {% for item in mainMenu %}*/
/*                     {#aby pobrać ścieżkę strony na której się aktualnie znajdujemy w celu dodania klasy active. Więcej o "obiektach" typu app.request w podrozdziale global template variables w dokumentacji#}*/
/* */
/*                     <li {{ app.request.get('_route') == item['path'] ?  'class="active"' : '' }}><a href="{{ path(item['path']) }}">{{ item['name'] }}</a></li>*/
/*                 {% endfor %}*/
/* */
/*                 {#<li class="active"><a href="glowna.html">Home</a></li>#}*/
/*                 {#<li><a href="dziennik.html">Dziennik</a></li>#}*/
/*                 {#<li><a href="o-mnie.html">O mnie</a></li>#}*/
/*                 {#<li><a href="kontakt.html">Kontakt</a></li>#}*/
/*             </ul>*/
/*         </div><!--/.navbar-collapse -->*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* <div class="container alerts">*/
/*     {% for type,messages in app.session.flashbag.all() %}*/
/*         {% for msg in messages %}*/
/*             <div class="alert alert-{{ type }}">{{ msg }}</div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* </div>   {#alerts pozwala chyba na kolorowanie komunikatów a container na np. wypośrodkowanie, odc 71 5 min.#}*/
/* */
/* {% block pageContainer %}   {% endblock %}*/
/* */
/* */
/* <div id="footer">*/
/*     <div class="container">*/
/*         <p class="text-muted">&copy; Domorosły inwestor 2014</p>*/
/*     </div>*/
/* </div>*/
/* */
/* {% block javascripts %}*/
/* <!-- Bootstrap core JavaScript -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>*/
/* <script src="{{ asset('bundles/pipitraining/js/bootstrap.min.js')}}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
