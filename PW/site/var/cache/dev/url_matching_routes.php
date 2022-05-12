<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/utilisateurs' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::usersList'], null, null, null, false, false, null]],
        '/admin/produit/ajouter' => [[['_route' => 'admin_add_product', '_controller' => 'App\\Controller\\AdminController::addProduct'], null, null, null, false, false, null]],
        '/produit/listeproduits' => [[['_route' => 'produit_products', '_controller' => 'App\\Controller\\ProduitController::productList'], null, null, null, false, false, null]],
        '/security/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/security/login' => [[['_route' => 'security_app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/security/logout' => [[['_route' => 'security_app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'site', '_controller' => 'App\\Controller\\SiteController::index'], null, null, null, false, false, null]],
        '/sadmin/listadmins' => [[['_route' => 'super_admin_listadmins', '_controller' => 'App\\Controller\\SuperAdminController::usersList'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|ajout/(\\d+)(*:31)'
                        .'|utilisateur/(?'
                            .'|modifier/(\\d+)(*:67)'
                            .'|supprimer/(\\d+)(*:89)'
                        .')'
                    .')'
                    .'|jout/(\\d+)(*:108)'
                .')'
                .'|/supprimer/(\\d+)(*:133)'
                .'|/user/u(?'
                    .'|tilisateur(?'
                        .'|/(?'
                            .'|modifier/(\\d+)(*:182)'
                            .'|panier/(\\d+)(*:202)'
                        .')'
                        .'|2/modifier/(\\d+)(*:227)'
                    .')'
                    .'|ser/supprimer/(\\d+)(*:255)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:295)'
                    .'|wdt/([^/]++)(*:315)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:361)'
                            .'|router(*:375)'
                            .'|exception(?'
                                .'|(*:395)'
                                .'|\\.css(*:408)'
                            .')'
                        .')'
                        .'|(*:418)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'admin_add', '_controller' => 'App\\Controller\\AdminController::add'], ['id'], null, null, false, true, null]],
        67 => [[['_route' => 'admin_edit_user', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, true, null]],
        89 => [[['_route' => 'admin_delete_user', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, true, null]],
        108 => [[['_route' => 'add', '_controller' => 'App\\Controller\\SiteController::add'], ['id'], null, null, false, true, null]],
        133 => [[['_route' => 'del', '_controller' => 'App\\Controller\\SiteController::del'], ['id'], null, null, false, true, null]],
        182 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::editUser'], ['id'], null, null, false, true, null]],
        202 => [[['_route' => 'user_panier', '_controller' => 'App\\Controller\\UserController::panierUser'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'user_edit2', '_controller' => 'App\\Controller\\UserController::editUser2'], ['id'], null, null, false, true, null]],
        255 => [[['_route' => 'user_delete_product', '_controller' => 'App\\Controller\\UserController::deleteProduct'], ['id'], null, null, false, true, null]],
        295 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        315 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        361 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        375 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        395 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        408 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        418 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
