<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'drones' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\DronesBundle\\Controller\\DronesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/drones/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'drones_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\DronesBundle\\Controller\\DronesController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/drones',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'drones_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\DronesBundle\\Controller\\DronesController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/drones/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'drones_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\DronesBundle\\Controller\\DronesController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/drones/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'drones_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\DronesBundle\\Controller\\DronesController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/drones',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'drones_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\DronesBundle\\Controller\\DronesController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/drones',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'drones_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\DronesBundle\\Controller\\DronesController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/drones',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_drones_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Polytech\\DronesBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_commandes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/commandes/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_commandes_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesAdminController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/commandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_commandes_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesAdminController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/commandes/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_commandes_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesAdminController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/commandes/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_commandes_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesAdminController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/commandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_commandes_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesAdminController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/commandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_commandes_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesAdminController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/commandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_produits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ProduitsAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produits/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_produits_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ProduitsAdminController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_produits_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ProduitsAdminController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produits/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_produits_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ProduitsAdminController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produits/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_produits_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ProduitsAdminController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_produits_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ProduitsAdminController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_produits_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ProduitsAdminController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_ecommerce_Produits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::ProduitsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/produits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_ecommerce_AdminProduits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::AdminProduitsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/produits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_ecommerce_AlterProduit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::AlterProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Admin/produits/Alter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_ecommerce_ProduitDetails' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::ProduitDetailsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/produits/Details',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_ecommerce_AjouterPanier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::AjouterProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/produits/Ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_ecommerce_SupprimerPanier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::SupprimerProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/produits/Supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_ecommerce_Panier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::PanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_ecommerce_Livraison' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::LivraisonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/livraison',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_ecommerce_LivraisonSuppressionAdresse' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::SuppressionAdresseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/livraison/Adresse/Suppression',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_ecommerce_Validation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\ecommerceController::ValidationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Validation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_ecommerce_ValidationCommande' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesController::validationCommandeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/banque',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_ecommerce_Virement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\EcommerceBundle\\Controller\\CommandesController::virementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/virement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_projet_co_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\ProjetCoBundle\\Controller\\MainController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_projet_co_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\ProjetCoBundle\\Controller\\MainController::contactAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_projet_co_connexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\ProjetCoBundle\\Controller\\MainController::connexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_projet_co_inscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\ProjetCoBundle\\Controller\\MainController::inscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_projet_co_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\ProjetCoBundle\\Controller\\MainController::dashbordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_projet_co_dashboardAdmin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\ProjetCoBundle\\Controller\\MainController::dashbordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/Dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_projet_co_AdminUser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\UserBundle\\Controller\\UserController::AdminUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/Users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\UserBundle\\Controller\\UserAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\UserBundle\\Controller\\UserAdminController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\UserBundle\\Controller\\UserAdminController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_user_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\UserBundle\\Controller\\UserAdminController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\UserBundle\\Controller\\UserAdminController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_user_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\UserBundle\\Controller\\UserAdminController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\UserBundle\\Controller\\UserAdminController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_user_facture' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\UserBundle\\Controller\\UserController::facturesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/factures',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_user_facturesPDF' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\UserBundle\\Controller\\UserController::facturesPDFAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/profile/factures/pdf',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_user_pilotes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\UserBundle\\Controller\\UserController::pilotesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/pilotes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'departement_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Polytech\\DepartementBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_fichier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/fichier/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_fichier_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierAdminController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/fichier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_fichier_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierAdminController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/fichier/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_fichier_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierAdminController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/fichier/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_fichier_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierAdminController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/fichier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_fichier_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierAdminController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/fichier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_fichier_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierAdminController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/fichier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_gestion_fichiers_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierController::uploadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Upload',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_suppresion_fichiers' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_dowload_fichiers' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierController::downloadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Download',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_preview_fichiers' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Polytech\\GestionFichiersBundle\\Controller\\FichierController::previewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Preview',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'polytech_Departements' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Polytech\\ProjetCoBundle\\Controller\\MainController::dashbordColorMapAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/departements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_js_routing_js' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'fos_js_routing.controller:indexAction',    '_format' => 'js',  ),  2 =>   array (    '_format' => 'js|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/js/routing',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
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