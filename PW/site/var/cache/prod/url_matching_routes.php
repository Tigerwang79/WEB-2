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
        255 => [
            [['_route' => 'user_delete_product', '_controller' => 'App\\Controller\\UserController::deleteProduct'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
