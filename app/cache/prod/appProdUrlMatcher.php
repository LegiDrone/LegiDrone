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

        if (0 === strpos($pathinfo, '/drones')) {
            // drones
            if (rtrim($pathinfo, '/') === '/drones') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'drones');
                }

                return array (  '_controller' => 'Polytech\\DronesBundle\\Controller\\DronesController::indexAction',  '_route' => 'drones',);
            }

            // drones_show
            if (preg_match('#^/drones/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'drones_show')), array (  '_controller' => 'Polytech\\DronesBundle\\Controller\\DronesController::showAction',));
            }

            // drones_new
            if ($pathinfo === '/drones/new') {
                return array (  '_controller' => 'Polytech\\DronesBundle\\Controller\\DronesController::newAction',  '_route' => 'drones_new',);
            }

            // drones_create
            if ($pathinfo === '/drones/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_drones_create;
                }

                return array (  '_controller' => 'Polytech\\DronesBundle\\Controller\\DronesController::createAction',  '_route' => 'drones_create',);
            }
            not_drones_create:

            // drones_edit
            if (preg_match('#^/drones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'drones_edit')), array (  '_controller' => 'Polytech\\DronesBundle\\Controller\\DronesController::editAction',));
            }

            // drones_update
            if (preg_match('#^/drones/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_drones_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'drones_update')), array (  '_controller' => 'Polytech\\DronesBundle\\Controller\\DronesController::updateAction',));
            }
            not_drones_update:

            // drones_delete
            if (preg_match('#^/drones/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_drones_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'drones_delete')), array (  '_controller' => 'Polytech\\DronesBundle\\Controller\\DronesController::deleteAction',));
            }
            not_drones_delete:

        }

        // polytech_drones_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'polytech_drones_homepage')), array (  '_controller' => 'Polytech\\DronesBundle\\Controller\\DefaultController::indexAction',));
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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_polytech_projet_co_contact;
                }

                return array (  '_controller' => 'Polytech\\ProjetCoBundle\\Controller\\MainController::contactAction',  '_route' => 'polytech_projet_co_contact',);
            }
            not_polytech_projet_co_contact:

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

        if (0 === strpos($pathinfo, '/Admin')) {
            // polytech_projet_co_dashboardAdmin
            if ($pathinfo === '/Admin/Dashboard') {
                return array (  '_controller' => 'Polytech\\ProjetCoBundle\\Controller\\MainController::dashbordAction',  '_route' => 'polytech_projet_co_dashboardAdmin',);
            }

            // polytech_projet_co_AdminUser
            if ($pathinfo === '/Admin/Users') {
                return array (  '_controller' => 'Polytech\\UserBundle\\Controller\\UserController::AdminUserAction',  '_route' => 'polytech_projet_co_AdminUser',);
            }

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

        // departement_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'departement_homepage')), array (  '_controller' => 'Polytech\\DepartementBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin/fichier')) {
            // admin_fichier
            if (rtrim($pathinfo, '/') === '/admin/fichier') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_fichier');
                }

                return array (  '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierAdminController::indexAction',  '_route' => 'admin_fichier',);
            }

            // admin_fichier_show
            if (preg_match('#^/admin/fichier/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_fichier_show')), array (  '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierAdminController::showAction',));
            }

            // admin_fichier_new
            if ($pathinfo === '/admin/fichier/new') {
                return array (  '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierAdminController::newAction',  '_route' => 'admin_fichier_new',);
            }

            // admin_fichier_create
            if ($pathinfo === '/admin/fichier/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_fichier_create;
                }

                return array (  '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierAdminController::createAction',  '_route' => 'admin_fichier_create',);
            }
            not_admin_fichier_create:

            // admin_fichier_edit
            if (preg_match('#^/admin/fichier/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_fichier_edit')), array (  '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierAdminController::editAction',));
            }

            // admin_fichier_update
            if (preg_match('#^/admin/fichier/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_fichier_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_fichier_update')), array (  '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierAdminController::updateAction',));
            }
            not_admin_fichier_update:

            // admin_fichier_delete
            if (preg_match('#^/admin/fichier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_fichier_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_fichier_delete')), array (  '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierAdminController::deleteAction',));
            }
            not_admin_fichier_delete:

        }

        // polytech_gestion_fichiers_homepage
        if ($pathinfo === '/Upload') {
            return array (  '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierController::uploadAction',  '_route' => 'polytech_gestion_fichiers_homepage',);
        }

        if (0 === strpos($pathinfo, '/D')) {
            // polytech_suppresion_fichiers
            if (0 === strpos($pathinfo, '/Delete') && preg_match('#^/Delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'polytech_suppresion_fichiers')), array (  '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierController::deleteAction',));
            }

            // polytech_dowload_fichiers
            if (0 === strpos($pathinfo, '/Download') && preg_match('#^/Download/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'polytech_dowload_fichiers')), array (  '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierController::downloadAction',));
            }

        }

        // polytech_preview_fichiers
        if (0 === strpos($pathinfo, '/Preview') && preg_match('#^/Preview/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'polytech_preview_fichiers')), array (  '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierController::previewAction',));
        }

        // polytech_Departements
        if ($pathinfo === '/departements') {
            return array (  '_controller' => 'Polytech\\ProjetCoBundle\\Controller\\MainController::dashbordColorMapAction',  '_route' => 'polytech_Departements',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
