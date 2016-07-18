<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // pipi_training_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pipi_training_homepage');
            }

            return array (  '_controller' => 'PipiTrainingBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pipi_training_homepage',);
        }

        if (0 === strpos($pathinfo, '/blog')) {
            if (0 === strpos($pathinfo, '/blog/admin')) {
                // admin_listing
                if (rtrim($pathinfo, '/') === '/blog/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_listing');
                    }

                    return array (  '_controller' => 'PipiTrainingBundle\\Controller\\AdminController::listingAction',  '_route' => 'admin_listing',);
                }

                // admin_details
                if (0 === strpos($pathinfo, '/blog/admin/details') && preg_match('#^/blog/admin/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_details')), array (  '_controller' => 'PipiTrainingBundle\\Controller\\AdminController::detailsAction',));
                }

                // admin_update
                if (0 === strpos($pathinfo, '/blog/admin/update') && preg_match('#^/blog/admin/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_update')), array (  '_controller' => 'PipiTrainingBundle\\Controller\\AdminController::updateAction',));
                }

                // admin_delete
                if (0 === strpos($pathinfo, '/blog/admin/delete') && preg_match('#^/blog/admin/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete')), array (  '_controller' => 'PipiTrainingBundle\\Controller\\AdminController::deleteAction',));
                }

            }

            // kontakt
            if ($pathinfo === '/blog/contact') {
                return array (  '_controller' => 'PipiTrainingBundle\\Controller\\BlogController::contactAction',  '_route' => 'kontakt',);
            }

            // glowna
            if (rtrim($pathinfo, '/') === '/blog') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'glowna');
                }

                return array (  '_controller' => 'PipiTrainingBundle\\Controller\\BlogController::indexAction',  '_route' => 'glowna',);
            }

            // dziennik
            if ($pathinfo === '/blog/journal') {
                return array (  '_controller' => 'PipiTrainingBundle\\Controller\\BlogController::journalAction',  '_route' => 'dziennik',);
            }

            // komentarze
            if ($pathinfo === '/blog/comments') {
                return array (  '_controller' => 'PipiTrainingBundle\\Controller\\BlogController::commentsAction',  '_route' => 'komentarze',);
            }

            // rejestracja
            if ($pathinfo === '/blog/register') {
                return array (  '_controller' => 'PipiTrainingBundle\\Controller\\BlogController::registerAction',  '_route' => 'rejestracja',);
            }

        }

        // pipitraining_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pipitraining_default_index');
            }

            return array (  '_controller' => 'PipiTrainingBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pipitraining_default_index',);
        }

        // pipitraining_default_dupa
        if ($pathinfo === '/dupa') {
            return array (  '_controller' => 'PipiTrainingBundle\\Controller\\DefaultController::dupaAction',  '_route' => 'pipitraining_default_dupa',);
        }

        // o_mnie
        if ($pathinfo === '/blog/about') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'PipiTrainingBundle:Blog:about.html.twig',  '_route' => 'o_mnie',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
