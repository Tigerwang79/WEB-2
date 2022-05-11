<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::indexAccueil'], null, null, null, false, false, null]],
        '/sandbox/doctrine/list' => [[['_route' => 'sandbox_doctrine_list', '_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::listAction'], null, null, null, false, false, null]],
        '/sandbox/doctrine/display-flash-list' => [[['_route' => 'sandbox_doctrine_display_flash_list', '_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::displayFlashAction'], null, null, null, false, false, null]],
        '/sandbox/doctrine/ajouterendur' => [[['_route' => 'sandbox_doctrine_ajouterendur', '_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::ajouterendurAction'], null, null, null, false, false, null]],
        '/sandbox/doctrine/modifierendur' => [[['_route' => 'sandbox_doctrine_modifierendur', '_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::modifierendurAction'], null, null, null, false, false, null]],
        '/sandbox/doctrine/effacerendur' => [[['_route' => 'sandbox_doctrine_effacerendur', '_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::effacerendurAction'], null, null, null, false, false, null]],
        '/sandbox/doctrine/viewendur' => [[['_route' => 'sandbox_doctrine_view', '_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::viewendurAction'], null, null, null, false, false, null]],
        '/sandbox/injection/un' => [[['_route' => 'sandbox_injection_un', '_controller' => 'App\\Controller\\Sandbox\\SandboxInjectionController::unAction'], null, null, null, false, false, null]],
        '/sandbox/injection/deux' => [[['_route' => 'sandbox_injection_deux', '_controller' => 'App\\Controller\\Sandbox\\SandboxInjectionController::deuxAction'], null, null, null, false, false, null]],
        '/sandbox/injection/create-flash' => [[['_route' => 'sandbox_injection_create_flash', '_controller' => 'App\\Controller\\Sandbox\\SandboxInjectionController::createFlashAction'], null, null, null, false, false, null]],
        '/sandbox/injection/display-flash' => [[['_route' => 'sandbox_injection_display_flash', '_controller' => 'App\\Controller\\Sandbox\\SandboxInjectionController::displayFlashAction'], null, null, null, false, false, null]],
        '/sandbox/interface/un' => [[['_route' => 'sandbox_interface_un', '_controller' => 'App\\Controller\\Sandbox\\SandboxInterfaceController::unAction'], null, null, null, false, false, null]],
        '/sandbox/prefix' => [[['_route' => 'sandbox_prefix_index', '_controller' => 'App\\Controller\\Sandbox\\SandboxPrefixController::indexAction'], null, null, null, false, false, null]],
        '/sandbox/prefix/hello2' => [[['_route' => 'sandbox_prefix_hello2', '_controller' => 'App\\Controller\\Sandbox\\SandboxPrefixController::hello2Action'], null, null, null, false, false, null]],
        '/sandbox/prefix/hello3' => [[['_route' => 'sandbox_prefix_hello3', '_controller' => 'App\\Controller\\Sandbox\\SandboxPrefixController::hello3Action'], null, null, null, false, false, null]],
        '/sandbox/prefix/hello4' => [[['_route' => 'sandbox_prefix_hello4', '_controller' => 'App\\Controller\\Sandbox\\SandboxPrefixController::hello4Action'], null, null, null, false, false, null]],
        '/sandbox/route/redirect1' => [[['_route' => 'sandbox_route_redirect1', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::redirect1Action'], null, null, null, false, false, null]],
        '/sandbox/route/redirect2' => [[['_route' => 'sandbox_route_redirect2', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::redirect2Action'], null, null, null, false, false, null]],
        '/sandbox/route/redirect3' => [[['_route' => 'sandbox_route_redirect3', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::redirect3Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue1' => [[['_route' => 'sandbox_twig_vue1', '_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue1Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue2' => [[['_route' => 'sandbox_twig_vue2', '_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue2Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue3' => [[['_route' => 'sandbox_twig_vue3', '_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue3Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue4' => [[['_route' => 'sandbox_twig_vue4', '_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue4Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue5' => [[['_route' => 'sandbox_twig_vue5', '_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue5Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue6' => [[['_route' => 'sandbox_twig_vue6', '_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue6Action'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/sandbox/route/(?'
                    .'|with\\-(?'
                        .'|variable/([^/]++)(*:51)'
                        .'|default(?:/([0-9]+))?(*:79)'
                    .')'
                    .'|test(?'
                        .'|1/([^/]++)/([^/]++)/([^/\\.]++)\\.([^/]++)(*:134)'
                        .'|2/([1-9]\\d{0,3})/((?:0?[1-9])|(?:1[0-2]))/([A-Za-z-]+)\\.(jpg|jpeg|png|ppm)(*:216)'
                        .'|3/([1-9]\\d{0,3})/((?:0?[1-9])|(?:1[0-2]))/([A-Za-z-]+)(?:\\.(jpg|jpeg|png|ppm))?(*:303)'
                        .'|4/(?'
                            .'|([1-9]\\d{0,3})(?:/((?:0?[1-9])|(?:1[0-2]))(?:/([A-Za-z-]+)(?:\\.(jpg|jpeg|png|ppm))?)?)?(*:403)'
                            .'|([1-9]\\d{0,3})(*:425)'
                        .')'
                    .')'
                    .'|permis/(\\d+)(*:447)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        51 => [[['_route' => 'sandbox_route_with_variable', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::withVariableAction'], ['age'], null, null, false, true, null]],
        79 => [[['_route' => 'sandbox_route_with_default', 'age' => 18, '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::withDefaultAction'], ['age'], null, null, false, true, null]],
        134 => [[['_route' => 'sandbox_route_test1', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::test1Action'], ['year', 'month', 'filename', 'ext'], null, null, false, true, null]],
        216 => [[['_route' => 'sandbox_route_test2', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::test2Action'], ['year', 'month', 'filename', 'ext'], null, null, false, true, null]],
        303 => [[['_route' => 'sandbox_route_test3', 'ext' => 'png', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::test3Action'], ['year', 'month', 'filename', 'ext'], null, null, false, true, null]],
        403 => [[['_route' => 'sandbox_route_test4', 'ext' => 'png', 'month' => 1, 'filename' => 'picture', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::test4Action'], ['year', 'month', 'filename', 'ext'], null, null, false, true, null]],
        425 => [[['_route' => 'sandbox_route_test4bis', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::test4bisAction'], ['year'], null, null, false, true, null]],
        447 => [
            [['_route' => 'sandbox_route_permis', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::permisAction'], ['age'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
