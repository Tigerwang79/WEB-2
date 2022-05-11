<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::indexAccueil'], [], [['text', '/']], [], [], []],
    'sandbox_doctrine_list' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::listAction'], [], [['text', '/sandbox/doctrine/list']], [], [], []],
    'sandbox_doctrine_view' => [['id'], ['_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::viewAction'], ['id' => '[1-9]\\d*'], [['variable', '/', '[1-9]\\d*', 'id', true], ['text', '/sandbox/doctrine/view']], [], [], []],
    'sandbox_doctrine_delete' => [['id'], ['_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::deleteAction'], ['id' => '[1-9]\\d*'], [['variable', '/', '[1-9]\\d*', 'id', true], ['text', '/sandbox/doctrine/delete']], [], [], []],
    'sandbox_doctrine_display_flash_list' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::displayFlashAction'], [], [['text', '/sandbox/doctrine/display-flash-list']], [], [], []],
    'sandbox_doctrine_ajouterendur' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::ajouterendurAction'], [], [['text', '/sandbox/doctrine/ajouterendur']], [], [], []],
    'sandbox_doctrine_modifierendur' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::modifierendurAction'], [], [['text', '/sandbox/doctrine/modifierendur']], [], [], []],
    'sandbox_doctrine_effacerendur' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::effacerendurAction'], [], [['text', '/sandbox/doctrine/effacerendur']], [], [], []],
    'sandbox_doctrine_viewendur' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::viewendurAction'], [], [['text', '/sandbox/doctrine/viewendur']], [], [], []],
    'sandbox_doctrine_critique_ajouterendur' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::critiqueAjouterendurAction'], [], [['text', '/sandbox/doctrine/critique/ajouterendur']], [], [], []],
    'sandbox_doctrine_critique_view1' => [['id'], ['_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::critiqueView1Action'], ['id' => '[1-9]\\d*'], [['variable', '/', '[1-9]\\d*', 'id', true], ['text', '/sandbox/doctrine/critique/view1']], [], [], []],
    'sandbox_doctrine_critique_view2' => [['id'], ['_controller' => 'App\\Controller\\Sandbox\\SandboxDoctrineController::critiqueView2Action'], ['id' => '[1-9]\\d*'], [['variable', '/', '[1-9]\\d*', 'id', true], ['text', '/sandbox/doctrine/critique/view2']], [], [], []],
    'sandbox_form_film_edit' => [['id'], ['_controller' => 'App\\Controller\\Sandbox\\SandboxFormController::filmEditAction'], ['id' => '[1-9]\\d*'], [['variable', '/', '[1-9]\\d*', 'id', true], ['text', '/sandbox/form/film/edit']], [], [], []],
    'sandbox_form_film_editbis' => [['id'], ['_controller' => 'App\\Controller\\Sandbox\\SandboxFormController::filmEditBisAction'], ['id' => '[1-9]\\d*'], [['variable', '/', '[1-9]\\d*', 'id', true], ['text', '/sandbox/form/film/editbis']], [], [], []],
    'sandbox_form_film_validation' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxFormController::filmValidationAction'], [], [['text', '/sandbox/form/film/validation']], [], [], []],
    'sandbox_injection_un' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxInjectionController::unAction'], [], [['text', '/sandbox/injection/un']], [], [], []],
    'sandbox_injection_deux' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxInjectionController::deuxAction'], [], [['text', '/sandbox/injection/deux']], [], [], []],
    'sandbox_injection_create_flash' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxInjectionController::createFlashAction'], [], [['text', '/sandbox/injection/create-flash']], [], [], []],
    'sandbox_injection_display_flash' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxInjectionController::displayFlashAction'], [], [['text', '/sandbox/injection/display-flash']], [], [], []],
    'sandbox_interface_un' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxInterfaceController::unAction'], [], [['text', '/sandbox/interface/un']], [], [], []],
    'sandbox_prefix_index' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxPrefixController::indexAction'], [], [['text', '/sandbox/prefix']], [], [], []],
    'sandbox_prefix_hello2' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxPrefixController::hello2Action'], [], [['text', '/sandbox/prefix/hello2']], [], [], []],
    'sandbox_prefix_hello3' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxPrefixController::hello3Action'], [], [['text', '/sandbox/prefix/hello3']], [], [], []],
    'sandbox_prefix_hello4' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxPrefixController::hello4Action'], [], [['text', '/sandbox/prefix/hello4']], [], [], []],
    'sandbox_produit_list' => [[], ['_controller' => 'App\\Controller\\Sandbox\\SandboxProduitController::listAction'], [], [['text', '/sandbox/produit/list']], [], [], []],
    'sandbox_produit_view' => [['id'], ['_controller' => 'App\\Controller\\Sandbox\\SandboxProduitController::viewAction'], ['id' => '[1-9]\\d*'], [['variable', '/', '[1-9]\\d*', 'id', true], ['text', '/sandbox/produit/view']], [], [], []],
    'sandbox_produit_delete' => [['id'], ['_controller' => 'App\\Controller\\Sandbox\\SandboxProduitController::deleteAction'], ['id' => '[1-9]\\d*'], [['variable', '/', '[1-9]\\d*', 'id', true], ['text', '/sandbox/produit/delete']], [], [], []],
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
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
