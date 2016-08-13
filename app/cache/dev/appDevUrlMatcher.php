<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // rec_pago_recibo
        if (rtrim($pathinfo, '/') === '/recibopago') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'rec_pago_recibo');
            }

            return array (  '_controller' => 'recibo\\RecPagoBundle\\Controller\\RecPagoController::reciboAction',  '_route' => 'rec_pago_recibo',);
        }

        // definiciones_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'definiciones_homepage')), array (  '_controller' => 'definicionesBundle:Default:index',));
        }

        if (0 === strpos($pathinfo, '/definiciones')) {
            // definiciones_menu
            if ($pathinfo === '/definiciones') {
                return array (  '_controller' => 'definiciones\\definicionesBundle\\Controller\\definicionesController::indexAction',  '_route' => 'definiciones_menu',);
            }

            // definiciones_cargo_add
            if ($pathinfo === '/definiciones/add') {
                return array (  '_controller' => 'definiciones\\definicionesBundle\\Controller\\definicionesController::cargoAddAction',  '_route' => 'definiciones_cargo_add',);
            }

            if (0 === strpos($pathinfo, '/definiciones/cargo')) {
                // definiciones_cargo_main
                if ($pathinfo === '/definiciones/cargo/main') {
                    return array (  '_controller' => 'definiciones\\definicionesBundle\\Controller\\definicionesController::cargoMainAction',  '_route' => 'definiciones_cargo_main',);
                }

                // definiciones_cargo_cons
                if (0 === strpos($pathinfo, '/definiciones/cargo/cons') && preg_match('#^/definiciones/cargo/cons/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'definiciones_cargo_cons')), array (  '_controller' => 'definiciones\\definicionesBundle\\Controller\\definicionesController::consCargoAction',));
                }

                if (0 === strpos($pathinfo, '/definiciones/cargo/del')) {
                    // definiciones_cargo_delete
                    if (0 === strpos($pathinfo, '/definiciones/cargo/delete') && preg_match('#^/definiciones/cargo/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'definiciones_cargo_delete')), array (  '_controller' => 'definiciones\\definicionesBundle\\Controller\\definicionesController::deleteCargoAction',));
                    }

                    // definiciones_cargo_del
                    if (preg_match('#^/definiciones/cargo/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'definiciones_cargo_del')), array (  '_controller' => 'definiciones\\definicionesBundle\\Controller\\definicionesController::delCargoAction',));
                    }

                }

                // definiciones_cargo_mod
                if (0 === strpos($pathinfo, '/definiciones/cargo/mod') && preg_match('#^/definiciones/cargo/mod/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'definiciones_cargo_mod')), array (  '_controller' => 'definiciones\\definicionesBundle\\Controller\\definicionesController::modCargoAction',));
                }

            }

            if (0 === strpos($pathinfo, '/definiciones/b')) {
                // definiciones_cargo_busca
                if ($pathinfo === '/definiciones/buscar') {
                    return array (  '_controller' => 'definiciones\\definicionesBundle\\Controller\\definicionesController::buscarAction',  '_route' => 'definiciones_cargo_busca',);
                }

                if (0 === strpos($pathinfo, '/definiciones/banco')) {
                    // definiciones_banco_add
                    if ($pathinfo === '/definiciones/banco/add') {
                        return array (  '_controller' => 'definiciones\\definicionesBundle\\Controller\\definicionesController::addBancoAction',  '_route' => 'definiciones_banco_add',);
                    }

                    // definiciones_banco_main
                    if ($pathinfo === '/definiciones/banco/main') {
                        return array (  '_controller' => 'definiciones\\definicionesBundle\\Controller\\definicionesController::mainBancoAction',  '_route' => 'definiciones_banco_main',);
                    }

                    // definiciones_banco_cons
                    if (0 === strpos($pathinfo, '/definiciones/banco/cons') && preg_match('#^/definiciones/banco/cons/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'definiciones_banco_cons')), array (  '_controller' => 'definiciones\\definicionesBundle\\Controller\\definicionesController::consBancoAction',));
                    }

                    // definiciones_banco_mod
                    if (0 === strpos($pathinfo, '/definiciones/banco/mod') && preg_match('#^/definiciones/banco/mod/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'definiciones_banco_mod')), array (  '_controller' => 'definiciones\\definicionesBundle\\Controller\\definicionesController::modBancoAction',));
                    }

                    if (0 === strpos($pathinfo, '/definiciones/banco/del')) {
                        // definiciones_banco_delete
                        if (0 === strpos($pathinfo, '/definiciones/banco/delete') && preg_match('#^/definiciones/banco/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'definiciones_banco_delete')), array (  '_controller' => 'definiciones\\definicionesBundle\\Controller\\definicionesController::deleteBancoAction',));
                        }

                        // definiciones_banco_del
                        if (preg_match('#^/definiciones/banco/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'definiciones_banco_del')), array (  '_controller' => 'definiciones\\definicionesBundle\\Controller\\definicionesController::delBancoAction',));
                        }

                    }

                }

            }

        }

        // personal_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_homepage')), array (  '_controller' => 'personalBundle:Default:index',));
        }

        if (0 === strpos($pathinfo, '/personal')) {
            // personal_personal
            if ($pathinfo === '/personal') {
                return array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::indexAction',  '_route' => 'personal_personal',);
            }

            // personal_personal_add
            if ($pathinfo === '/personal/add') {
                return array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::addAction',  '_route' => 'personal_personal_add',);
            }

            // personal_personal_cons
            if (0 === strpos($pathinfo, '/personal/cons') && preg_match('#^/personal/cons/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_personal_cons')), array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::consAction',));
            }

            // personal_personal_mod
            if (0 === strpos($pathinfo, '/personal/mod') && preg_match('#^/personal/mod/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_personal_mod')), array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::modAction',));
            }

            if (0 === strpos($pathinfo, '/personal/del')) {
                // personal_personal_del
                if (preg_match('#^/personal/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_personal_del')), array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::delAction',));
                }

                // personal_personal_delete
                if (0 === strpos($pathinfo, '/personal/delete') && preg_match('#^/personal/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_personal_delete')), array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::deleteAction',));
                }

            }

            // personal_personal_busca
            if ($pathinfo === '/personal/buscar') {
                return array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::buscarAction',  '_route' => 'personal_personal_busca',);
            }

            // personal_personal_md5
            if (0 === strpos($pathinfo, '/personal/md5') && preg_match('#^/personal/md5/(?P<clave>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_personal_md5')), array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::md5Action',));
            }

            if (0 === strpos($pathinfo, '/personal/academico')) {
                // personal_personal_academico
                if (preg_match('#^/personal/academico/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_personal_academico')), array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::academicoAction',));
                }

                // personal_personal_academico_add
                if (0 === strpos($pathinfo, '/personal/academico/add') && preg_match('#^/personal/academico/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_personal_academico_add')), array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::academicoAction',));
                }

            }

            // personal_personal_cargo_add
            if (0 === strpos($pathinfo, '/personal/cargo/add') && preg_match('#^/personal/cargo/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_personal_cargo_add')), array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::cargoasignarAction',));
            }

            // personal_personal_asignaciones_add
            if (0 === strpos($pathinfo, '/personal/asignaciones/add') && preg_match('#^/personal/asignaciones/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_personal_asignaciones_add')), array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::empasignacionAction',));
            }

            // personal_personal_usuario
            if (0 === strpos($pathinfo, '/personal/usuario') && preg_match('#^/personal/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_personal_usuario')), array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::creausuarioAction',));
            }

            if (0 === strpos($pathinfo, '/personal/exp-lab-ant')) {
                // personal_personal_exp_lab_ant
                if (preg_match('#^/personal/exp\\-lab\\-ant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_personal_exp_lab_ant')), array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::explabantAction',));
                }

                if (0 === strpos($pathinfo, '/personal/exp-lab-ant/del')) {
                    // personal_personal_exp_lab_ant_del
                    if (preg_match('#^/personal/exp\\-lab\\-ant/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_personal_exp_lab_ant_del')), array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::explabantdelAction',));
                    }

                    // personal_personal_exp_lab_ant_delete
                    if (0 === strpos($pathinfo, '/personal/exp-lab-ant/delete') && preg_match('#^/personal/exp\\-lab\\-ant/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_personal_exp_lab_ant_delete')), array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::explabantdeleteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/personal/a')) {
                // personal_personal_academico_delete
                if (0 === strpos($pathinfo, '/personal/academico/delete') && preg_match('#^/personal/academico/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_personal_academico_delete')), array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::academicoDeleteAction',));
                }

                // personal_personal_asignaciones_delete
                if (0 === strpos($pathinfo, '/personal/asignaciones/delete') && preg_match('#^/personal/asignaciones/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_personal_asignaciones_delete')), array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::asignacionesDeleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/personal/retenciones')) {
                // personal_personal_retenciones_add
                if (preg_match('#^/personal/retenciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_personal_retenciones_add')), array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::retencionesAddAction',));
                }

                // personal_personal_retenciones_delete
                if (0 === strpos($pathinfo, '/personal/retenciones/delete') && preg_match('#^/personal/retenciones/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_personal_retenciones_delete')), array (  '_controller' => 'personal\\personalBundle\\Controller\\personalController::retencionesDeleteAction',));
                }

            }

        }

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

        // menu_principal_construccion
        if ($pathinfo === '/construccion') {
            return array (  '_controller' => 'menu\\menuPrincipalBundle\\Controller\\menuController::construccionAction',  '_route' => 'menu_principal_construccion',);
        }

        // loginglogin_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'loginglogin_homepage')), array (  '_controller' => 'loging\\loginBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
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

            // loginglogin_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'loging\\loginBundle\\Controller\\loginController::logoutAction',  '_route' => 'loginglogin_logout',);
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
