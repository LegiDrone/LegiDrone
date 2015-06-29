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

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/commandes')) {
                // admin_commandes
                if (rtrim($pathinfo, '/') === '/admin/commandes') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_commandes');
                    }

                    return array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesAdminController::indexAction',  '_route' => 'admin_commandes',);
                }

                // admin_commandes_show
                if (preg_match('#^/admin/commandes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_commandes_show')), array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesAdminController::showAction',));
                }

                // admin_commandes_new
                if ($pathinfo === '/admin/commandes/new') {
                    return array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesAdminController::newAction',  '_route' => 'admin_commandes_new',);
                }

                // admin_commandes_create
                if ($pathinfo === '/admin/commandes/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_commandes_create;
                    }

                    return array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesAdminController::createAction',  '_route' => 'admin_commandes_create',);
                }
                not_admin_commandes_create:

                // admin_commandes_edit
                if (preg_match('#^/admin/commandes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_commandes_edit')), array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesAdminController::editAction',));
                }

                // admin_commandes_update
                if (preg_match('#^/admin/commandes/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_commandes_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_commandes_update')), array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesAdminController::updateAction',));
                }
                not_admin_commandes_update:

                // admin_commandes_delete
                if (preg_match('#^/admin/commandes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_commandes_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_commandes_delete')), array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesAdminController::deleteAction',));
                }
                not_admin_commandes_delete:

            }

            if (0 === strpos($pathinfo, '/admin/produits')) {
                // admin_produits
                if (rtrim($pathinfo, '/') === '/admin/produits') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_produits');
                    }

                    return array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ProduitsAdminController::indexAction',  '_route' => 'admin_produits',);
                }

                // admin_produits_show
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produits_show')), array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ProduitsAdminController::showAction',));
                }

                // admin_produits_new
                if ($pathinfo === '/admin/produits/new') {
                    return array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ProduitsAdminController::newAction',  '_route' => 'admin_produits_new',);
                }

                // admin_produits_create
                if ($pathinfo === '/admin/produits/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_produits_create;
                    }

                    return array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ProduitsAdminController::createAction',  '_route' => 'admin_produits_create',);
                }
                not_admin_produits_create:

                // admin_produits_edit
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produits_edit')), array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ProduitsAdminController::editAction',));
                }

                // admin_produits_update
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_produits_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produits_update')), array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ProduitsAdminController::updateAction',));
                }
                not_admin_produits_update:

                // admin_produits_delete
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_produits_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produits_delete')), array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ProduitsAdminController::deleteAction',));
                }
                not_admin_produits_delete:

            }

        }

        // polytech_ecommerce_Produits
        if ($pathinfo === '/produits') {
            return array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::ProduitsAction',  '_route' => 'polytech_ecommerce_Produits',);
        }

        if (0 === strpos($pathinfo, '/Admin/produits')) {
            // polytech_ecommerce_AdminProduits
            if ($pathinfo === '/Admin/produits') {
                return array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::AdminProduitsAction',  '_route' => 'polytech_ecommerce_AdminProduits',);
            }

            // polytech_ecommerce_AlterProduit
            if (0 === strpos($pathinfo, '/Admin/produits/Alter') && preg_match('#^/Admin/produits/Alter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'polytech_ecommerce_AlterProduit')), array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::AlterProduitAction',));
            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/produits')) {
                // polytech_ecommerce_ProduitDetails
                if (0 === strpos($pathinfo, '/produits/Details') && preg_match('#^/produits/Details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'polytech_ecommerce_ProduitDetails')), array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::ProduitDetailsAction',));
                }

                // polytech_ecommerce_AjouterPanier
                if (0 === strpos($pathinfo, '/produits/Ajouter') && preg_match('#^/produits/Ajouter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'polytech_ecommerce_AjouterPanier')), array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::AjouterProduitAction',));
                }

                // polytech_ecommerce_SupprimerPanier
                if (0 === strpos($pathinfo, '/produits/Supprimer') && preg_match('#^/produits/Supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'polytech_ecommerce_SupprimerPanier')), array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::SupprimerProduitAction',));
                }

            }

            // polytech_ecommerce_Panier
            if ($pathinfo === '/panier') {
                return array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::PanierAction',  '_route' => 'polytech_ecommerce_Panier',);
            }

        }

        if (0 === strpos($pathinfo, '/livraison')) {
            // polytech_ecommerce_Livraison
            if ($pathinfo === '/livraison') {
                return array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::LivraisonAction',  '_route' => 'polytech_ecommerce_Livraison',);
            }

            // polytech_ecommerce_LivraisonSuppressionAdresse
            if (0 === strpos($pathinfo, '/livraison/Adresse/Suppression') && preg_match('#^/livraison/Adresse/Suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'polytech_ecommerce_LivraisonSuppressionAdresse')), array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::SuppressionAdresseAction',));
            }

        }

        // polytech_ecommerce_Validation
        if ($pathinfo === '/Validation') {
            return array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::ValidationAction',  '_route' => 'polytech_ecommerce_Validation',);
        }

        // polytech_ecommerce_ValidationCommande
        if (0 === strpos($pathinfo, '/api/banque') && preg_match('#^/api/banque/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'polytech_ecommerce_ValidationCommande')), array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesController::validationCommandeAction',));
        }

        // polytech_ecommerce_Virement
        if ($pathinfo === '/virement') {
            return array (  '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesController::virementAction',  '_route' => 'polytech_ecommerce_Virement',);
        }

        // polytech_projet_co_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'polytech_projet_co_home');
            }

            return array (  '_controller' => 'Polytech\\ProjetCoBundle\\Controller\\MainController::indexAction',  '_route' => 'polytech_projet_co_home',);
        }

        if (0 === strpos($pathinfo, '/Con')) {
            // polytech_projet_co_contact
            if ($pathinfo === '/Contact') {
                return array (  '_controller' => 'Polytech\\ProjetCoBundle\\Controller\\MainController::contactAction',  '_route' => 'polytech_projet_co_contact',);
            }

            // polytech_projet_co_connexion
            if ($pathinfo === '/Connexion') {
                return array (  '_controller' => 'Polytech\\ProjetCoBundle\\Controller\\MainController::connexionAction',  '_route' => 'polytech_projet_co_connexion',);
            }

        }

        // polytech_projet_co_inscription
        if ($pathinfo === '/Inscription') {
            return array (  '_controller' => 'Polytech\\ProjetCoBundle\\Controller\\MainController::inscriptionAction',  '_route' => 'polytech_projet_co_inscription',);
        }

        // polytech_projet_co_dashboard
        if ($pathinfo === '/Dashboard') {
            return array (  '_controller' => 'Polytech\\ProjetCoBundle\\Controller\\MainController::dashbordAction',  '_route' => 'polytech_projet_co_dashboard',);
        }

        // polytech_projet_co_AdminUser
        if ($pathinfo === '/Admin/Users') {
            return array (  '_controller' => 'Polytech\\UserBundle\\Controller\\UserController::AdminUserAction',  '_route' => 'polytech_projet_co_AdminUser',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin/user')) {
            // admin_user
            if (rtrim($pathinfo, '/') === '/admin/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_user');
                }

                return array (  '_controller' => 'Polytech\\UserBundle\\Controller\\UserAdminController::indexAction',  '_route' => 'admin_user',);
            }

            // admin_user_show
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_show')), array (  '_controller' => 'Polytech\\UserBundle\\Controller\\UserAdminController::showAction',));
            }

            // admin_user_new
            if ($pathinfo === '/admin/user/new') {
                return array (  '_controller' => 'Polytech\\UserBundle\\Controller\\UserAdminController::newAction',  '_route' => 'admin_user_new',);
            }

            // admin_user_create
            if ($pathinfo === '/admin/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_user_create;
                }

                return array (  '_controller' => 'Polytech\\UserBundle\\Controller\\UserAdminController::createAction',  '_route' => 'admin_user_create',);
            }
            not_admin_user_create:

            // admin_user_edit
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'Polytech\\UserBundle\\Controller\\UserAdminController::editAction',));
            }

            // admin_user_update
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_update')), array (  '_controller' => 'Polytech\\UserBundle\\Controller\\UserAdminController::updateAction',));
            }
            not_admin_user_update:

            // admin_user_delete
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'Polytech\\UserBundle\\Controller\\UserAdminController::deleteAction',));
            }
            not_admin_user_delete:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            if (0 === strpos($pathinfo, '/profile/factures')) {
                // polytech_user_facture
                if ($pathinfo === '/profile/factures') {
                    return array (  '_controller' => 'Polytech\\UserBundle\\Controller\\UserController::facturesAction',  '_route' => 'polytech_user_facture',);
                }

                // polytech_user_facturesPDF
                if (0 === strpos($pathinfo, '/profile/factures/pdf') && preg_match('#^/profile/factures/pdf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'polytech_user_facturesPDF')), array (  '_controller' => 'Polytech\\UserBundle\\Controller\\UserController::facturesPDFAction',));
                }

            }

            // polytech_user_pilotes
            if ($pathinfo === '/profile/pilotes') {
                return array (  '_controller' => 'Polytech\\UserBundle\\Controller\\UserController::pilotesAction',  '_route' => 'polytech_user_pilotes',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
