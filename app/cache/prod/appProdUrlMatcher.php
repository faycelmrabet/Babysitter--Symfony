<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // bs_front_office_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bs_front_office_homepage')), array (  '_controller' => 'Bs\\FrontOfficeBundle\\Controller\\DefaultController::indexAction',));
        }

        // bs_front_office
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'Bs\\FrontOfficeBundle\\Controller\\DefaultController::testAction',  '_route' => 'bs_front_office',);
        }

        if (0 === strpos($pathinfo, '/responsable')) {
            // bs_front_office_espace_responsable
            if ($pathinfo === '/responsable') {
                return array (  '_controller' => 'Bs\\FrontOfficeBundle\\Controller\\ResponsableGarderieController::accueilAction',  '_route' => 'bs_front_office_espace_responsable',);
            }

            if (0 === strpos($pathinfo, '/responsableAff')) {
                // bs_front_office_espace_evenement_update
                if ($pathinfo === '/responsableAffAc') {
                    return array (  '_controller' => 'Bs\\FrontOfficeBundle\\Controller\\EvenementController::uploadAction',  '_route' => 'bs_front_office_espace_evenement_update',);
                }

                // bs_front_office_espace_evenement
                if ($pathinfo === '/responsableAffEv') {
                    return array (  '_controller' => 'Bs\\FrontOfficeBundle\\Controller\\EvenementController::listEvAction',  '_route' => 'bs_front_office_espace_evenement',);
                }

            }

            // bs_front_office_espace_evenement_show
            if (0 === strpos($pathinfo, '/responsableShow') && preg_match('#^/responsableShow/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bs_front_office_espace_evenement_show')), array (  '_controller' => 'Bs\\FrontOfficeBundle\\Controller\\EvenementController::showAction',));
            }

            // bs_front_office_espace_evenement_edit
            if (0 === strpos($pathinfo, '/responsableEdit') && preg_match('#^/responsableEdit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bs_front_office_espace_evenement_edit')), array (  '_controller' => 'Bs\\FrontOfficeBundle\\Controller\\EvenementController::editAction',));
            }

            // bs_front_office_espace_evenement_create
            if ($pathinfo === '/responsableCreate') {
                return array (  '_controller' => 'Bs\\FrontOfficeBundle\\Controller\\EvenementController::AjoutEvenementAction',  '_route' => 'bs_front_office_espace_evenement_create',);
            }

            // bs_front_office_espace_evenement_valid_create
            if ($pathinfo === '/responsableValidCreate') {
                return array (  '_controller' => 'Bs\\FrontOfficeBundle\\Controller\\EvenementController::createAction',  '_route' => 'bs_front_office_espace_evenement_valid_create',);
            }

            // bs_front_office_espace_evenement_delete
            if (0 === strpos($pathinfo, '/responsableDelete') && preg_match('#^/responsableDelete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bs_front_office_espace_evenement_delete')), array (  '_controller' => 'Bs\\FrontOfficeBundle\\Controller\\EvenementController::deleteAction',));
            }

            // bs_front_office_espace_garderie
            if ($pathinfo === '/responsableAffGa') {
                return array (  '_controller' => 'Bs\\FrontOfficeBundle\\Controller\\GarderieController::listGaAction',  '_route' => 'bs_front_office_espace_garderie',);
            }

            // bs_front_office_espace_garderie_show
            if (0 === strpos($pathinfo, '/responsableShowG') && preg_match('#^/responsableShowG/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bs_front_office_espace_garderie_show')), array (  '_controller' => 'Bs\\FrontOfficeBundle\\Controller\\GarderieController::showAction',));
            }

            // bs_front_office_espace_garderie_edit
            if (0 === strpos($pathinfo, '/responsableEditG') && preg_match('#^/responsableEditG/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bs_front_office_espace_garderie_edit')), array (  '_controller' => 'Bs\\FrontOfficeBundle\\Controller\\GarderieController::editAction',));
            }

            // bs_front_office_espace_garderie_update
            if (0 === strpos($pathinfo, '/responsableUpdateG') && preg_match('#^/responsableUpdateG/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bs_front_office_espace_garderie_update')), array (  '_controller' => 'Bs\\FrontOfficeBundle\\Controller\\GarderieController::updateAction',));
            }

            // bs_front_office_espace_garderie_create
            if ($pathinfo === '/responsableCreateG') {
                return array (  '_controller' => 'Bs\\FrontOfficeBundle\\Controller\\GarderieController::newAction',  '_route' => 'bs_front_office_espace_garderie_create',);
            }

            // bs_front_office_espace_garderie_valid_create
            if ($pathinfo === '/responsableValidCreateG') {
                return array (  '_controller' => 'Bs\\FrontOfficeBundle\\Controller\\GarderieController::createAction',  '_route' => 'bs_front_office_espace_garderie_valid_create',);
            }

            // bs_front_office_espace_garderie_delete
            if (0 === strpos($pathinfo, '/responsableDeleteG') && preg_match('#^/responsableDeleteG/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bs_front_office_espace_garderie_delete')), array (  '_controller' => 'Bs\\FrontOfficeBundle\\Controller\\GarderieController::deleteAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
