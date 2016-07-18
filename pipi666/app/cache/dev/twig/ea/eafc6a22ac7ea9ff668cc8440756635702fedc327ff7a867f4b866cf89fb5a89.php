<?php

/* WebProfilerExtraBundle:Collector:container.html.twig */
class __TwigTemplate_4fe259c8419aae21153e5631bb97ac02ad09ec2fdb34064b05161a0e3d47274f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "WebProfilerExtraBundle:Collector:container.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77318fc824c6e0fe96eabc5f0366050d0b4940ebe1b936440c5edde8ef78e5aa = $this->env->getExtension("native_profiler");
        $__internal_77318fc824c6e0fe96eabc5f0366050d0b4940ebe1b936440c5edde8ef78e5aa->enter($__internal_77318fc824c6e0fe96eabc5f0366050d0b4940ebe1b936440c5edde8ef78e5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerExtraBundle:Collector:container.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77318fc824c6e0fe96eabc5f0366050d0b4940ebe1b936440c5edde8ef78e5aa->leave($__internal_77318fc824c6e0fe96eabc5f0366050d0b4940ebe1b936440c5edde8ef78e5aa_prof);

    }

    // line 4
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb7ccbd39a913152ba6ff29487c3c4c4c50178108c6e3e7dc171781c0b68e629 = $this->env->getExtension("native_profiler");
        $__internal_bb7ccbd39a913152ba6ff29487c3c4c4c50178108c6e3e7dc171781c0b68e629->enter($__internal_bb7ccbd39a913152ba6ff29487c3c4c4c50178108c6e3e7dc171781c0b68e629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 5
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "displayInWdt", array())) {
            // line 6
            echo "        ";
            $context["serviceCount"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "serviceCount", array());
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img height=\"28\" alt=\"Container\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAMAAABWBG9SAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMjY5ODc3MjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMjY5ODc3MzRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjIyNjk4NzcwNEVEMjExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjIyNjk4NzcxNEVEMjExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+aeuERwAAASBQTFRFQD8/RUVFubi49/f3e3p6rKurmJeXsbGxr6+v7u7uU1NT19bWyMjI5+fnY2JiQUFBxMTE2dnZt7e3YWBg39/faGdnS0tLUE9PgYCAgIB/5+bmUVFRTk5OYmJhvb299/b2ycnJr66tUlJSpqWkurm5kZGQsbCw0dDQd3d2kI+PcnBwxsXFvLu7oaCgWVlYy8vKTU1MW1patLOzy8vLenp6oqGglZWVRkZGp6eml5aWaWlpcXFxRkVFvby8gYB/aWlo/Pz8Y2NjQD9ApaWkP0BAf39/lJOTeHd3p6amr66uw8PDlZWU+/v73d3deXh4RUVG7e3tcXBwcnFwjYyM6+vrxsbGxsbFl5eX2travb2829vbs7OzT09PPz8/QEBA////blEBcwAAAGB0Uk5T//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8Ac23kQwAAANRJREFUeNpiiMcCGKgkKG8byYwm6OOrphVkJOKAEAzR9hZlZIiNjTW3Cg8NAAmK6AYaxMXGxoFBbKyLjLWpFIOCsqseA0IwzlDSQ53BUUJRwMvZLwYkIW1iESbgaSfLIBYby2hvqWKsE6wpp89kJmoTGyvGEAPRpeQeEaUhDjE8BiwINo6DA2owkmBcdHQc/QX9ndAFYxkZVIX5IT6HCMbG8gu7McQzC7KycMXFMrCzM8TGcbGwCjJDA5mTh41PSIiPjYcTJTp4mbi5mXipHMXIACDAAPMEsv90Bi2uAAAAAElFTkSuQmCC\"/>
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["serviceCount"]) ? $context["serviceCount"] : $this->getContext($context, "serviceCount")), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">Services</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "        ";
            ob_start();
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Services</b>
                <span class=\"sf-toolbar-status\">";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["serviceCount"]) ? $context["serviceCount"] : $this->getContext($context, "serviceCount")), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Parameter<br />namespaces</b>
                <span class=\"sf-toolbar-status\">";
            // line 19
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "parameters", array())), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 22
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "WebProfilerExtraBundle:Collector:container.html.twig", 22)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 23
            echo "    ";
        }
        
        $__internal_bb7ccbd39a913152ba6ff29487c3c4c4c50178108c6e3e7dc171781c0b68e629->leave($__internal_bb7ccbd39a913152ba6ff29487c3c4c4c50178108c6e3e7dc171781c0b68e629_prof);

    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        $__internal_061189e9c32bcbdfe2d55991e69ab4c9fc2b8e05f57ebd63e7c10c0bff2df925 = $this->env->getExtension("native_profiler");
        $__internal_061189e9c32bcbdfe2d55991e69ab4c9fc2b8e05f57ebd63e7c10c0bff2df925->enter($__internal_061189e9c32bcbdfe2d55991e69ab4c9fc2b8e05f57ebd63e7c10c0bff2df925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 27
        echo "    <span class=\"label\">
        <span class=\"icon\">
            <img width=30 src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAyCAYAAADx/eOPAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzBCQTQ1NUI0QkM1MTFFMEE4QjFCOTM4QzI2QzNENjIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MzBCQTQ1NUM0QkM1MTFFMEE4QjFCOTM4QzI2QzNENjIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxOEMwOUJERTRCQzUxMUUwQThCMUI5MzhDMjZDM0Q2MiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozMEJBNDU1QTRCQzUxMUUwQThCMUI5MzhDMjZDM0Q2MiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pg7ztUAAAAfqSURBVHja7FpbjBtXGT5zsWc84/va8W29yTZcuknU0BCqtBAlRIKGIlr1IaKIS3lAKkICCXgAXpBACJ6AF1AhL6VCbQpUQBtB21RFolFKRCGUSFGr0ja7ttfr9fpuz4znzndmba9z2RbFmzZUntXsmcuZc/7v//6bzjHjui55txwseRcd/Gw+T/bsWiBSIECa7Ta5aW47Ka9WiG3bJDEzQ6q1Gtm5Ywe5uLREBL9AIuEwKSyXSCIWJ4qmkXBQJj6fj5RWKiSfzZB2p4PnfRKPRmKNViuZS6cP9hTlzqAsP7NcqZxOJZOV1bVaR8Z88ViULBZLZH4uTxRVJRq+k6QAwXty0/Y5Um80iOO4hFqP1u+TWYxfqa4RH8+TTDpFLhaKkCNGur0u5JcIv5WaYRhKNLN+45JP4P/+Tre31zTNfY7jzOB+N9rn0f6RQTeW2VrDmBgMy7L0TEG4rG7otzmO/QXXdWZbnc4cfd/udgGSIWq/f4RlmSP1Zutr0PSyYztLfV3/Jbpc4Fi2CGD1txcMQ7U/us5yLHNft6dkOY79JADdXK3X4YSMxxAY8DoDwIC19daxbQ7XcwA319O0g/iW1JvNfxum+RzP8a+jy2M4G4zHMONRvKVgOI6nIs5Bm3HTtO6HJj8KjSfxKmtZ9gZDI6RkDPUVtjhqh/1bne5eNHt5nqO+8W2MVQO4U7ZjP4Y+dcApXhuYMRlA/SEA+GB1rXqr47p39zQ1TJ3e07ztjEBshamus+aNmQdz+eXKyq24/pYoCC2w/Gs8+w/kOYdnZy4T80ow0HwATcQyrQNg9nOmZc2t1WsLABGs1uqE8zTPvrXmJ4sglwUTQvq6EUXzVcpiZa3asWzrFUSzRch3HL0vMCzTwHvD+yaXy+3ctbBwL89xn4ZD7ofwI/t2x65vhMO9RDaHKteWAuIZRMsTwWDot2CYVRHvw+gYcFynOaLccW7IxDiUi2M523acLvwpkEwkeduyTHZ+x44VJMjvypK0B30SSELHAPuhUFA+Jfh9GtWGN8A7VfZ489seK5BHCcnys+DmeCa17S60M0jGtwHHz5qddpcHE48iQzdnYrHf4IOzHM89Hg2HH4/HY6TZbO5H9Monk4m71mr1e/A+Cp59dGB6etFoK82QjjsWxnFvcBy3mp5J/gl++zQEL6ICOddstbz58edHOD/QaDXvwzd+5vDhw+7A98Ca041Homcxyq+QB8pg63Sz1Sbb87OkVC4LPO/LQDsPdHrKbkkUbtb6+nst2544qg1Nh5YpyEv/NAyzkNqWfBFKftiyrFoukzUWCwUSi0Zo2XNQEsUshP4iyq8DmDcEXNwwmqk4JfoAESRab7WO4v4oHbinqH9FrH9VVbWXRFF8xNCNxWg48R2qlUw6nXztjYsfCYeC84h0x5rtzocwMHc1Z93ciT09GvFI5CxM/YRpWxXUbCcxlg1FEqpIwe+PKIryJcjxAUVR3wflHarj+VCBY9av8pvFfFpoIgwegqMdqjUbuHd+AIAlUPsoEtvpVqu9hHj+Bz9AS5L800arnUgnE/vbne7nweos+u7D9zLVOhWeFoyImLQobRqmcR5CF+PR2PGl5eWXg0G5ptJCU9dp33mE25xhGEcgw2d6qpJS+1oMcpC+odMUsqkV8G8W8+kfBe7ankAxUB5bLBZ/RIXrdDsrruM8iUKyEo1Gfw/zOI/nT4VCwad0w0B1HboDZcreZHzmdlqziYJ4ClX0Bfjm35Ev/hUKBqmyPL+DcLdjnDuRFtI9Vb0XVcW2Ynll5JNeMmWYUe6ZrDa7pARZtyS1r2fQPOAyDimUSl8H3dV+X39RFIWHIFwJjvsC2HhBkqQHwUYsEBCbtHajTCE/7EafHHziK1DW7nKlkoXDSuulvsfOpSb6PwYZGgAU6jOTRiE64SDCUEd2YeunYON/g1A/gf13VU0LAcg3ZFm6A8n54zRweNxTQQffT3ioWwPmarmBhm5q2677Hly/DpPZCYFfc2jmJsz1KIdU/rokurGKGNfO4NoZFK/TNYApmCmYKZgpmCmYKZgpmCmYKZgpmCmYKZgpmCmYdwaM6F0N1o//nw66rTG2pOnnY5Hw9xRVnTdN6xa/j99lmJbodSLMDbU3swHAW5b0FgRFv9DTTfOVgCC84ff7/kx3Ab5P34uiQOLR6MdK5ZU9gYD4fsdxPtvXjeBoQW6ogbcT4Nicw50HUfD3AOQRra+9mt6W+8dao/68t7DIsoQfbea6Hupn6RkQRNLX9R+CtaggCPdX12pHOI5LY7g0XSodrYldp2N91ZMhLOftXVds266kkom/6Lr+sGGYLUHwF1RNI45nZhvyX3XdjHYCqALH8QWfz/dNG4Nn06l8t9e7u9PrZYOydFTV+vuGk5JJViWH340tHGL8czD9p+VAoBwKBp8slleK9FcgdGfbdY1NffstFgHdEdWO49Lt659Tk8MEPwaYudlMZqHRan5Z6+vbeY7LATR/xYbRJnbPDMwHjENGezkgCkvxaOwX5dXVlzE+1XxjMO+Yyb15gOKv0QwwkduAb73EdtgTdP8+m0p9Cv72YY7n8xzL3qPpurwu78bPIIYahcMqAP4EzKcIxs8AwEnKCMbzBL7W/VR+4siyoayT4OSk4PcTjuduAYSZSCRyTFEUi1l3YEuW5Qfb7fbv/IJQty37vKKplxnBZKmBmf7e7AY9/ivAAE6+Kgj2extjAAAAAElFTkSuQmCC\" />
        </span>
        <strong>Container</strong>
        <span class=\"count\">
            <span>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "serviceCount", array()), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
        $__internal_061189e9c32bcbdfe2d55991e69ab4c9fc2b8e05f57ebd63e7c10c0bff2df925->leave($__internal_061189e9c32bcbdfe2d55991e69ab4c9fc2b8e05f57ebd63e7c10c0bff2df925_prof);

    }

    // line 38
    public function block_panel($context, array $blocks = array())
    {
        $__internal_24e7d25ddd452fe5e4752b4c17711960c572f3fccb9054fa42d1992cde11386a = $this->env->getExtension("native_profiler");
        $__internal_24e7d25ddd452fe5e4752b4c17711960c572f3fccb9054fa42d1992cde11386a->enter($__internal_24e7d25ddd452fe5e4752b4c17711960c572f3fccb9054fa42d1992cde11386a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 39
        echo "    ";
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "services", array()))) {
            // line 40
            echo "        <div class=\"empty\">
            <em>No debug container information</em>
        </div>
    ";
        } else {
            // line 44
            echo "        ";
            $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
            // line 45
            echo "
        ";
            // line 46
            if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 2)) {
                // line 47
                echo "            <h2>Container metrics</h2>
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "serviceCount", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Services</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
                // line 55
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "parameters", array())), "html", null, true);
                echo "</span>
                    <span class=\"label\">Parameters namespaces</span>
                </div>
            </div>
        ";
            }
            // line 60
            echo "
        <h2>Container Parameters</h2>
        <table>
            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "parameters", array()));
            foreach ($context['_seq'] as $context["service"] => $context["parameters"]) {
                // line 64
                echo "                <thead>
                    <tr>
                        <th colspan=\"3\" class=\"colored font-normal\">";
                // line 66
                echo twig_escape_filter($this->env, ((array_key_exists("service", $context)) ? (_twig_default_filter($context["service"], "#")) : ("#")), "html", null, true);
                echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["parameters"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 71
                    echo "                        <tr>
                            <th width=\"420\">";
                    // line 72
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</th>
                            <td>
                                ";
                    // line 74
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->dump($context["value"]), "html", null, true);
                    echo "
                            </td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "                </tbody>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['service'], $context['parameters'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "        </table>

        <h2>Container Services:</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Class Name</th>
                </tr>
            </thead>
            ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "services", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["service_id"] => $context["service"]) {
                // line 91
                echo "                <tr class=\"";
                echo ((($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) ? ("odd") : ("even"));
                echo "\">
                    <th>";
                // line 92
                echo twig_escape_filter($this->env, $context["service_id"], "html", null, true);
                echo "</th>
                    <td>
                        ";
                // line 94
                if ($this->getAttribute($context["service"], "class", array(), "any", true, true)) {
                    // line 95
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "class", array()), "html", null, true);
                    echo "
                        ";
                } elseif ($this->getAttribute(                // line 96
$context["service"], "alias", array(), "any", true, true)) {
                    // line 97
                    echo "                            alias to ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "alias", array()), "html", null, true);
                    echo "
                        ";
                }
                // line 99
                echo "                    </td>
                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['service_id'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "        </table>
    ";
        }
        
        $__internal_24e7d25ddd452fe5e4752b4c17711960c572f3fccb9054fa42d1992cde11386a->leave($__internal_24e7d25ddd452fe5e4752b4c17711960c572f3fccb9054fa42d1992cde11386a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerExtraBundle:Collector:container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 102,  263 => 99,  257 => 97,  255 => 96,  250 => 95,  248 => 94,  243 => 92,  238 => 91,  221 => 90,  209 => 80,  202 => 78,  192 => 74,  187 => 72,  184 => 71,  180 => 70,  173 => 66,  169 => 64,  165 => 63,  160 => 60,  152 => 55,  144 => 50,  139 => 47,  137 => 46,  134 => 45,  131 => 44,  125 => 40,  122 => 39,  116 => 38,  105 => 33,  97 => 27,  91 => 26,  83 => 23,  80 => 22,  74 => 19,  67 => 15,  63 => 13,  60 => 12,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  42 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}*/
/* */
/* */
/* {% block toolbar %}*/
/*     {% if collector.displayInWdt %}*/
/*         {% set serviceCount = collector.serviceCount %}*/
/*         {% set icon %}*/
/*             <img height="28" alt="Container" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAMAAABWBG9SAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMjY5ODc3MjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMjY5ODc3MzRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjIyNjk4NzcwNEVEMjExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjIyNjk4NzcxNEVEMjExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+aeuERwAAASBQTFRFQD8/RUVFubi49/f3e3p6rKurmJeXsbGxr6+v7u7uU1NT19bWyMjI5+fnY2JiQUFBxMTE2dnZt7e3YWBg39/faGdnS0tLUE9PgYCAgIB/5+bmUVFRTk5OYmJhvb299/b2ycnJr66tUlJSpqWkurm5kZGQsbCw0dDQd3d2kI+PcnBwxsXFvLu7oaCgWVlYy8vKTU1MW1patLOzy8vLenp6oqGglZWVRkZGp6eml5aWaWlpcXFxRkVFvby8gYB/aWlo/Pz8Y2NjQD9ApaWkP0BAf39/lJOTeHd3p6amr66uw8PDlZWU+/v73d3deXh4RUVG7e3tcXBwcnFwjYyM6+vrxsbGxsbFl5eX2travb2829vbs7OzT09PPz8/QEBA////blEBcwAAAGB0Uk5T//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8Ac23kQwAAANRJREFUeNpiiMcCGKgkKG8byYwm6OOrphVkJOKAEAzR9hZlZIiNjTW3Cg8NAAmK6AYaxMXGxoFBbKyLjLWpFIOCsqseA0IwzlDSQ53BUUJRwMvZLwYkIW1iESbgaSfLIBYby2hvqWKsE6wpp89kJmoTGyvGEAPRpeQeEaUhDjE8BiwINo6DA2owkmBcdHQc/QX9ndAFYxkZVIX5IT6HCMbG8gu7McQzC7KycMXFMrCzM8TGcbGwCjJDA5mTh41PSIiPjYcTJTp4mbi5mXipHMXIACDAAPMEsv90Bi2uAAAAAElFTkSuQmCC"/>*/
/*             <span class="sf-toolbar-value">{{ serviceCount }}</span>*/
/*             <span class="sf-toolbar-label">Services</span>*/
/*         {% endset %}*/
/*         {% set text %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Services</b>*/
/*                 <span class="sf-toolbar-status">{{ serviceCount }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Parameter<br />namespaces</b>*/
/*                 <span class="sf-toolbar-status">{{ collector.parameters|length }}</span>*/
/*             </div>*/
/*         {% endset %}*/
/*         {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label">*/
/*         <span class="icon">*/
/*             <img width=30 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAyCAYAAADx/eOPAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzBCQTQ1NUI0QkM1MTFFMEE4QjFCOTM4QzI2QzNENjIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MzBCQTQ1NUM0QkM1MTFFMEE4QjFCOTM4QzI2QzNENjIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxOEMwOUJERTRCQzUxMUUwQThCMUI5MzhDMjZDM0Q2MiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozMEJBNDU1QTRCQzUxMUUwQThCMUI5MzhDMjZDM0Q2MiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pg7ztUAAAAfqSURBVHja7FpbjBtX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" />*/
/*         </span>*/
/*         <strong>Container</strong>*/
/*         <span class="count">*/
/*             <span>{{ collector.serviceCount }}</span>*/
/*         </span>*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {% if collector.services is empty %}*/
/*         <div class="empty">*/
/*             <em>No debug container information</em>*/
/*         </div>*/
/*     {% else %}*/
/*         {% set profiler_markup_version = profiler_markup_version|default(1) %}*/
/* */
/*         {% if profiler_markup_version == 2 %}*/
/*             <h2>Container metrics</h2>*/
/*             <div class="metrics">*/
/*                 <div class="metric">*/
/*                     <span class="value">{{ collector.serviceCount }}</span>*/
/*                     <span class="label">Services</span>*/
/*                 </div>*/
/* */
/*                 <div class="metric">*/
/*                     <span class="value">{{ collector.parameters|length }}</span>*/
/*                     <span class="label">Parameters namespaces</span>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <h2>Container Parameters</h2>*/
/*         <table>*/
/*             {% for service, parameters in collector.parameters %}*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th colspan="3" class="colored font-normal">{{ service|default('#') }}</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for key, value in parameters %}*/
/*                         <tr>*/
/*                             <th width="420">{{ key }}</th>*/
/*                             <td>*/
/*                                 {{ value | yaml_dump }}*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             {% endfor %}*/
/*         </table>*/
/* */
/*         <h2>Container Services:</h2>*/
/*         <table>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Name</th>*/
/*                     <th>Class Name</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             {% for service_id, service in collector.services %}*/
/*                 <tr class="{{ loop.index is odd ? 'odd' : 'even' }}">*/
/*                     <th>{{ service_id }}</th>*/
/*                     <td>*/
/*                         {% if service.class is defined %}*/
/*                             {{ service.class }}*/
/*                         {% elseif service.alias is defined %}*/
/*                             alias to {{ service.alias }}*/
/*                         {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
