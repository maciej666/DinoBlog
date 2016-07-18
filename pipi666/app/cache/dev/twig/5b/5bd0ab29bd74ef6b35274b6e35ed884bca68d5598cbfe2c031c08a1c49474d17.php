<?php

/* PipiTrainingBundle:Email:base.html.twig */
class __TwigTemplate_868b5500375d0a6c9a39cc5a863894fb6d68379ff2b2dae9a312b6411a558a70 extends Twig_Template
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
        $__internal_9fa646b666108f6386a149726119aab392c0b43078db9391ee4a5c5f1eda72ca = $this->env->getExtension("native_profiler");
        $__internal_9fa646b666108f6386a149726119aab392c0b43078db9391ee4a5c5f1eda72ca->enter($__internal_9fa646b666108f6386a149726119aab392c0b43078db9391ee4a5c5f1eda72ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PipiTrainingBundle:Email:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <!-- If you delete this meta tag, Half Life 3 will never be released. -->
        <meta name=\"viewport\" content=\"width=device-width\" />

        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
        <title>Potwierdzenie rejestracji</title>

    </head>

    <body marginheight=\"0\" topmargin=\"0\" marginwidth=\"0\" bgcolor=\"#ffffff\" offset=\"0\" leftmargin=\"0\" style=\"background-color: #ffffff;\">

        <table cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%\">
            <tr>
                <td colspan=\"3\" style=\"height: 3px; background-color: #609ee4\"></td>
            </tr>
            <tr>
                <td colspan=\"3\" style=\"height: 20px;\"></td>
            </tr>
            <tr>
                <td style=\"width: 25px;\"></td>
                <td style=\"font-family: Arial, Helvetica, sans-serif; font-size: 27px; color: #222429;\">Witaj, ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</td>
                <td style=\"width: 25px;\"></td>
            </tr>
            <tr>
                <td colspan=\"3\" style=\"height: 25px;\"></td>
            </tr>
            <tr>
                <td style=\"width: 25px;\"></td>
                <td colspan=\"3\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight:bold; color: #222429;\">Dziękuję za rejestracje.</td>
                <td style=\"width: 25px;\"></td>
            </tr>
            <td colspan=\"3\" style=\"height: 10px;\"></td>
            <tr>
                <td style=\"width: 25px;\"></td>
                <td colspan=\"3\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #222429;\">Twoje zgłoszenie zostało zarejestrowane w systemie i oczekuje na weryfikację. Zostaniesz poinformowany o wyniku weryfikacji na ten adres email.</td>
                <td style=\"width: 25px;\"></td>
            </tr>
            <tr>
                <td colspan=\"3\" style=\"height: 30px;\"></td>
            </tr>
            <tr>
                <td colspan=\"3\">
                    <table cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\">
                        <tr>
                            <td colspan=\"3\" style=\"height: 3px; background-color: #e4e4e4\"></td>
                        </tr>
                        <tr>
                            <td colspan=\"3\" style=\"height: 10px;\"></td>
                        </tr>
                        <tr>
                            <td style=\"width: 25px;\"></td>
                            <td style=\"height: 50px; text-align: right;\"><a href=\"#\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #222429;\">www.eduweb.pl</a></td>
                            <td style=\"width: 25px;\"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>

</html>";
        
        $__internal_9fa646b666108f6386a149726119aab392c0b43078db9391ee4a5c5f1eda72ca->leave($__internal_9fa646b666108f6386a149726119aab392c0b43078db9391ee4a5c5f1eda72ca_prof);

    }

    public function getTemplateName()
    {
        return "PipiTrainingBundle:Email:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 23,  22 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/*     <head>*/
/*         <!-- If you delete this meta tag, Half Life 3 will never be released. -->*/
/*         <meta name="viewport" content="width=device-width" />*/
/* */
/*         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />*/
/*         <title>Potwierdzenie rejestracji</title>*/
/* */
/*     </head>*/
/* */
/*     <body marginheight="0" topmargin="0" marginwidth="0" bgcolor="#ffffff" offset="0" leftmargin="0" style="background-color: #ffffff;">*/
/* */
/*         <table cellpadding="0" cellspacing="0" style="width: 100%">*/
/*             <tr>*/
/*                 <td colspan="3" style="height: 3px; background-color: #609ee4"></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan="3" style="height: 20px;"></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td style="width: 25px;"></td>*/
/*                 <td style="font-family: Arial, Helvetica, sans-serif; font-size: 27px; color: #222429;">Witaj, {{ name }}</td>*/
/*                 <td style="width: 25px;"></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan="3" style="height: 25px;"></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td style="width: 25px;"></td>*/
/*                 <td colspan="3" style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight:bold; color: #222429;">Dziękuję za rejestracje.</td>*/
/*                 <td style="width: 25px;"></td>*/
/*             </tr>*/
/*             <td colspan="3" style="height: 10px;"></td>*/
/*             <tr>*/
/*                 <td style="width: 25px;"></td>*/
/*                 <td colspan="3" style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #222429;">Twoje zgłoszenie zostało zarejestrowane w systemie i oczekuje na weryfikację. Zostaniesz poinformowany o wyniku weryfikacji na ten adres email.</td>*/
/*                 <td style="width: 25px;"></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan="3" style="height: 30px;"></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan="3">*/
/*                     <table cellpadding="0" cellspacing="0" style="width: 100%;">*/
/*                         <tr>*/
/*                             <td colspan="3" style="height: 3px; background-color: #e4e4e4"></td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td colspan="3" style="height: 10px;"></td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td style="width: 25px;"></td>*/
/*                             <td style="height: 50px; text-align: right;"><a href="#" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #222429;">www.eduweb.pl</a></td>*/
/*                             <td style="width: 25px;"></td>*/
/*                         </tr>*/
/*                     </table>*/
/*                 </td>*/
/*             </tr>*/
/*         </table>*/
/*     </body>*/
/* */
/* </html>*/
