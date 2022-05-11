<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::indexAccueil'], [], [['text', '/']], [], [], []],
    'sandbox_doctrine_list' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::listAction'], [], [['text', '/sandbox/doctrine/list']], [], [], []],
    'sandbox_doctrine_display_flash_list' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::displayFlashAction'], [], [['text', '/sandbox/doctrine/display-flash-list']], [], [], []],
    'sandbox_doctrine_ajouterendur' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::ajouterendurAction'], [], [['text', '/sandbox/doctrine/ajouterendur']], [], [], []],
    'sandbox_doctrine_modifierendur' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::modifierendurAction'], [], [['text', '/sandbox/doctrine/modifierendur']], [], [], []],
    'sandbox_doctrine_effacerendur' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::effacerendurAction'], [], [['text', '/sandbox/doctrine/effacerendur']], [], [], []],
    'sandbox_doctrine_view' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::viewendurAction'], [], [['text', '/sandbox/doctrine/viewendur']], [], [], []],
    'sandbox_injection_un' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxInjectionController::unAction'], [], [['text', '/sandbox/injection/un']], [], [], []],
    'sandbox_injection_deux' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxInjectionController::deuxAction'], [], [['text', '/sandbox/injection/deux']], [], [], []],
    'sandbox_injection_create_flash' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxInjectionController::createFlashAction'], [], [['text', '/sandbox/injection/create-flash']], [], [], []],
    'sandbox_injection_display_flash' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxInjectionController::displayFlashAction'], [], [['text', '/sandbox/injection/display-flash']], [], [], []],
    'sandbox_interface_un' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxInterfaceController::unAction'], [], [['text', '/sandbox/interface/un']], [], [], []],
    'sandbox_prefix_index' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxPrefixController::indexAction'], [], [['text', '/sandbox/prefix']], [], [], []],
    'sandbox_prefix_hello2' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxPrefixController::hello2Action'], [], [['text', '/sandbox/prefix/hello2']], [], [], []],
    'sandbox_prefix_hello3' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxPrefixController::hello3Action'], [], [['text', '/sandbox/prefix/hello3']], [], [], []],
    'sandbox_prefix_hello4' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxPrefixController::hello4Action'], [], [['text', '/sandbox/prefix/hello4']], [], [], []],
    'sandbox_route_with_variable' => [['age'], ['_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::withVariableAction'], [], [['variable', '/', '[^/]++', 'age', true], ['text', '/sandbox/route/with-variable']], [], [], []],
    'sandbox_route_with_default' => [['age'], ['age' => 18, '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::withDefaultAction'], ['age' => '[0-9]+'], [['variable', '/', '[0-9]+', 'age', true], ['text', '/sandbox/route/with-default']], [], [], []],
    'sandbox_route_test1' => [['year', 'month', 'filename', 'ext'], ['_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::test1Action'], [], [['variable', '.', '[^/]++', 'ext', true], ['variable', '/', '[^/\\.]++', 'filename', true], ['variable', '/', '[^/]++', 'month', true], ['variable', '/', '[^/]++', 'year', true], ['text', '/sandbox/route/test1']], [], [], []],
    'sandbox_route_test2' => [['year', 'month', 'filename', 'ext'], ['_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::test2Action'], ['year' => '[1-9]\\d{0,3}', 'month' => '(0?[1-9])|(1[0-2])', 'filename' => '[A-Za-z-]+', 'ext' => 'jpg|jpeg|png|ppm'], [['variable', '.', 'jpg|jpeg|png|ppm', 'ext', true], ['variable', '/', '[A-Za-z-]+', 'filename', true], ['variable', '/', '(?:0?[1-9])|(?:1[0-2])', 'month', true], ['variable', '/', '[1-9]\\d{0,3}', 'year', true], ['text', '/sandbox/route/test2']], [], [], []],
    'sandbox_route_test3' => [['year', 'month', 'filename', 'ext'], ['ext' => 'png', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::test3Action'], ['year' => '[1-9]\\d{0,3}', 'month' => '(0?[1-9])|(1[0-2])', 'filename' => '[A-Za-z-]+', 'ext' => 'jpg|jpeg|png|ppm'], [['variable', '.', 'jpg|jpeg|png|ppm', 'ext', true], ['variable', '/', '[A-Za-z-]+', 'filename', true], ['variable', '/', '(?:0?[1-9])|(?:1[0-2])', 'month', true], ['variable', '/', '[1-9]\\d{0,3}', 'year', true], ['text', '/sandbox/route/test3']], [], [], []],
    'sandbox_route_test4' => [['year', 'month', 'filename', 'ext'], ['ext' => 'png', 'month' => 1, 'filename' => 'picture', '_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::test4Action'], ['year' => '[1-9]\\d{0,3}', 'month' => '(0?[1-9])|(1[0-2])', 'filename' => '[A-Za-z-]+', 'ext' => 'jpg|jpeg|png|ppm'], [['variable', '.', 'jpg|jpeg|png|ppm', 'ext', true], ['variable', '/', '[A-Za-z-]+', 'filename', true], ['variable', '/', '(?:0?[1-9])|(?:1[0-2])', 'month', true], ['variable', '/', '[1-9]\\d{0,3}', 'year', true], ['text', '/sandbox/route/test4']], [], [], []],
    'sandbox_route_test4bis' => [['year'], ['_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::test4bisAction'], ['year' => '[1-9]\\d{0,3}'], [['variable', '/', '[1-9]\\d{0,3}', 'year', true], ['text', '/sandbox/route/test4']], [], [], []],
    'sandbox_route_permis' => [['age'], ['_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::permisAction'], ['age' => '\\d+'], [['variable', '/', '\\d+', 'age', true], ['text', '/sandbox/route/permis']], [], [], []],
    'sandbox_route_redirect1' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::redirect1Action'], [], [['text', '/sandbox/route/redirect1']], [], [], []],
    'sandbox_route_redirect2' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::redirect2Action'], [], [['text', '/sandbox/route/redirect2']], [], [], []],
    'sandbox_route_redirect3' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxRouteController::redirect3Action'], [], [['text', '/sandbox/route/redirect3']], [], [], []],
    'sandbox_twig_vue1' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue1Action'], [], [['text', '/sandbox/twig/vue1']], [], [], []],
    'sandbox_twig_vue2' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue2Action'], [], [['text', '/sandbox/twig/vue2']], [], [], []],
    'sandbox_twig_vue3' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue3Action'], [], [['text', '/sandbox/twig/vue3']], [], [], []],
    'sandbox_twig_vue4' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue4Action'], [], [['text', '/sandbox/twig/vue4']], [], [], []],
    'sandbox_twig_vue5' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue5Action'], [], [['text', '/sandbox/twig/vue5']], [], [], []],
    'sandbox_twig_vue6' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxTwigController::vue6Action'], [], [['text', '/sandbox/twig/vue6']], [], [], []],
];
