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

        // menu_principal_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_principal_homepage')), array (  '_controller' => 'menuPrincipalBundle:Default:index',));
        }

        // menu_principal_menu
        if (rtrim($pathinfo, '/') === '/menu') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'menu_principal_menu');
            }

            return array (  '_controller' => 'menu\\menuPrincipalBundle\\Controller\\menuController::indexAction',  '_route' => 'menu_principal_menu',);
        }

        // loginglogin_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'loginglogin_homepage')), array (  '_controller' => 'loging\\loginBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/login')) {
            // loginglogin_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'loging\\loginBundle\\Controller\\loginController::indexAction',  '_route' => 'loginglogin_login',);
            }

            // loginglogin_check
            if ($pathinfo === '/login/check') {
                return array (  '_controller' => 'loging\\loginBundle\\Controller\\loginController::checkAction',  '_route' => 'loginglogin_check',);
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
