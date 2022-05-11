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
        '/sandbox/doctrine/viewendur' => [[['_route' => 'sandbox_doctrine_viewendur', '_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::viewendurAction'], null, null, null, false, false, null]],
        '/sandbox/doctrine/critique/ajouterendur' => [[['_route' => 'sandbox_doctrine_critique_ajouterendur', '_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::critiqueAjouterendurAction'], null, null, null, false, false, null]],
        '/sandbox/form/film/validation' => [[['_route' => 'sandbox_form_film_validation', '_controller' => 'App\\Controller\\Sandbox\\SandboxFormController::filmValidationAction'], null, null, null, false, false, null]],
        '/sandbox/injection/un' => [[['_route' => 'sandbox_injection_un', '_controller' => 'App\\Controller\\Sandbox\\SandboxInjectionController::unAction'], null, null, null, false, false, null]],
        '/sandbox/injection/deux' => [[['_route' => 'sandbox_injection_deux', '_controller' => 'App\\Controller\\Sandbox\\SandboxInjectionController::deuxAction'], null, null, null, false, false, null]],
        '/sandbox/injection/create-flash' => [[['_route' => 'sandbox_injection_create_flash', '_controller' => 'App\\Controller\\Sandbox\\SandboxInjectionController::createFlashAction'], null, null, null, false, false, null]],
        '/sandbox/injection/display-flash' => [[['_route' => 'sandbox_injection_display_flash', '_controller' => 'App\\Controller\\Sandbox\\SandboxInjectionController::displayFlashAction'], null, null, null, false, false, null]],
        '/sandbox/interface/un' => [[['_route' => 'sandbox_interface_un', '_controller' => 'App\\Controller\\Sandbox\\SandboxInterfaceController::unAction'], null, null, null, false, false, null]],
        '/sandbox/prefix' => [[['_route' => 'sandbox_prefix_index', '_controller' => 'App\\Controller\\Sandbox\\SandboxPrefixController::indexAction'], null, null, null, false, false, null]],
        '/sandbox/prefix/hello2' => [[['_route' => 'sandbox_prefix_hello2', '_controller' => 'App\\Controller\\Sandbox\\SandboxPrefixController::hello2Action'], null, null, null, false, false, null]],
        '/sandbox/prefix/hello3' => [[['_route' => 'sandbox_prefix_hello3', '_controller' => 'App\\Controller\\Sandbox\\SandboxPrefixController::hello3Action'], null, null, null, false, false, null]],
        '/sandbox/prefix/hello4' => [[['_route' => 'sandbox_prefix_hello4', '_controller' => 'App\\Controller\\Sandbox\\SandboxPrefixController::hello4Action'], null, null, null, false, false, null]],
        '/sandbox/produit/list' => [[['_route' => 'sandbox_produit_list', '_controller' => 'App\\Controller\\Sandbox\\SandboxProduitController::listAction'], null, null, null, false, false, null]],
        '/sandbox/route/redirect1' => [[['_route' => 'sandbox_route_redirect1', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::redirect1Action'], null, null, null, false, false, null]],
        '/sandbox/route/redirect2' => [[['_route' => 'sandbox_route_redirect2', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::redirect2Action'], null, null, null, false, false, null]],
        '/sandbox/route/redirect3' => [[['_route' => 'sandbox_route_redirect3', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::redirect3Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue1' => [[['_route' => 'sandbox_twig_vue1', '_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue1Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue2' => [[['_route' => 'sandbox_twig_vue2', '_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue2Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue3' => [[['_route' => 'sandbox_twig_vue3', '_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue3Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue4' => [[['_route' => 'sandbox_twig_vue4', '_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue4Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue5' => [[['_route' => 'sandbox_twig_vue5', '_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue5Action'], null, null, null, false, false, null]],
        '/sandbox/twig/vue6' => [[['_route' => 'sandbox_twig_vue6', '_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue6Action'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/sandbox/(?'
                    .'|doctrine/(?'
                        .'|view/([1-9]\\d*)(*:46)'
                        .'|delete/([1-9]\\d*)(*:70)'
                        .'|critique/view(?'
                            .'|1/([1-9]\\d*)(*:105)'
                            .'|2/([1-9]\\d*)(*:125)'
                        .')'
                    .')'
                    .'|form/film/edit(?'
                        .'|/([1-9]\\d*)(*:163)'
                        .'|bis/([1-9]\\d*)(*:185)'
                    .')'
                    .'|produit/(?'
                        .'|view/([1-9]\\d*)(*:220)'
                        .'|delete/([1-9]\\d*)(*:245)'
                    .')'
                    .'|route/(?'
                        .'|with\\-(?'
                            .'|variable/([^/]++)(*:289)'
                            .'|default(?:/([0-9]+))?(*:318)'
                        .')'
                        .'|test(?'
                            .'|1/([^/]++)/([^/]++)/([^/\\.]++)\\.([^/]++)(*:374)'
                            .'|2/([1-9]\\d{0,3})/((?:0?[1-9])|(?:1[0-2]))/([A-Za-z-]+)\\.(jpg|jpeg|png|ppm)(*:456)'
                            .'|3/([1-9]\\d{0,3})/((?:0?[1-9])|(?:1[0-2]))/([A-Za-z-]+)(?:\\.(jpg|jpeg|png|ppm))?(*:543)'
                            .'|4/(?'
                                .'|([1-9]\\d{0,3})(?:/((?:0?[1-9])|(?:1[0-2]))(?:/([A-Za-z-]+)(?:\\.(jpg|jpeg|png|ppm))?)?)?(*:643)'
                                .'|([1-9]\\d{0,3})(*:665)'
                            .')'
                        .')'
                        .'|permis/(\\d+)(*:687)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:728)'
                    .'|wdt/([^/]++)(*:748)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:794)'
                            .'|router(*:808)'
                            .'|exception(?'
                                .'|(*:828)'
                                .'|\\.css(*:841)'
                            .')'
                        .')'
                        .'|(*:851)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'sandbox_doctrine_view', '_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::viewAction'], ['id'], null, null, false, true, null]],
        70 => [[['_route' => 'sandbox_doctrine_delete', '_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::deleteAction'], ['id'], null, null, false, true, null]],
        105 => [[['_route' => 'sandbox_doctrine_critique_view1', '_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::critiqueView1Action'], ['id'], null, null, false, true, null]],
        125 => [[['_route' => 'sandbox_doctrine_critique_view2', '_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::critiqueView2Action'], ['id'], null, null, false, true, null]],
        163 => [[['_route' => 'sandbox_form_film_edit', '_controller' => 'App\\Controller\\Sandbox\\SandboxFormController::filmEditAction'], ['id'], null, null, false, true, null]],
        185 => [[['_route' => 'sandbox_form_film_editbis', '_controller' => 'App\\Controller\\Sandbox\\SandboxFormController::filmEditBisAction'], ['id'], null, null, false, true, null]],
        220 => [[['_route' => 'sandbox_produit_view', '_controller' => 'App\\Controller\\Sandbox\\SandboxProduitController::viewAction'], ['id'], null, null, false, true, null]],
        245 => [[['_route' => 'sandbox_produit_delete', '_controller' => 'App\\Controller\\Sandbox\\SandboxProduitController::deleteAction'], ['id'], null, null, false, true, null]],
        289 => [[['_route' => 'sandbox_route_with_variable', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::withVariableAction'], ['age'], null, null, false, true, null]],
        318 => [[['_route' => 'sandbox_route_with_default', 'age' => 18, '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::withDefaultAction'], ['age'], null, null, false, true, null]],
        374 => [[['_route' => 'sandbox_route_test1', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::test1Action'], ['year', 'month', 'filename', 'ext'], null, null, false, true, null]],
        456 => [[['_route' => 'sandbox_route_test2', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::test2Action'], ['year', 'month', 'filename', 'ext'], null, null, false, true, null]],
        543 => [[['_route' => 'sandbox_route_test3', 'ext' => 'png', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::test3Action'], ['year', 'month', 'filename', 'ext'], null, null, false, true, null]],
        643 => [[['_route' => 'sandbox_route_test4', 'ext' => 'png', 'month' => 1, 'filename' => 'picture', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::test4Action'], ['year', 'month', 'filename', 'ext'], null, null, false, true, null]],
        665 => [[['_route' => 'sandbox_route_test4bis', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::test4bisAction'], ['year'], null, null, false, true, null]],
        687 => [[['_route' => 'sandbox_route_permis', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::permisAction'], ['age'], null, null, false, true, null]],
        728 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        748 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        794 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        808 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        828 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        841 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        851 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
