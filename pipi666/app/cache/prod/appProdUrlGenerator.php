<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'pipi_training_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PipiTrainingBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_listing' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PipiTrainingBundle\\Controller\\AdminController::listingAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_details' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PipiTrainingBundle\\Controller\\AdminController::detailsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/blog/admin/details',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PipiTrainingBundle\\Controller\\AdminController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/blog/admin/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PipiTrainingBundle\\Controller\\AdminController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/blog/admin/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'kontakt' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PipiTrainingBundle\\Controller\\BlogController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'glowna' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PipiTrainingBundle\\Controller\\BlogController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dziennik' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PipiTrainingBundle\\Controller\\BlogController::journalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/journal',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'komentarze' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PipiTrainingBundle\\Controller\\BlogController::commentsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/comments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rejestracja' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PipiTrainingBundle\\Controller\\BlogController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pipitraining_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PipiTrainingBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pipitraining_default_dupa' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PipiTrainingBundle\\Controller\\DefaultController::dupaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dupa',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'o_mnie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',    'template' => 'PipiTrainingBundle:Blog:about.html.twig',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/about',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
