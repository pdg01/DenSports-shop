<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/empty' => [[['_route' => 'cart_empty', '_controller' => 'App\\Controller\\CartController::empty'], null, null, null, false, false, null]],
        '/create' => [[['_route' => 'category_form', '_controller' => 'App\\Controller\\CategoryController::create'], null, null, null, false, false, null]],
        '/crud/product' => [[['_route' => 'app_crud_product_index', '_controller' => 'App\\Controller\\CrudProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/crud/product/new' => [[['_route' => 'app_crud_product_new', '_controller' => 'App\\Controller\\CrudProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/adminPanel' => [[['_route' => 'adminPanel', '_controller' => 'App\\Controller\\DefaultController::adminPanel'], null, null, null, true, false, null]],
        '/product/create' => [[['_route' => 'product_form', '_controller' => 'App\\Controller\\ProductController::create'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'handleSearch', '_controller' => 'App\\Controller\\SearchController::handleSearch'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/search' => [[['_route' => 'api_search', '_controller' => 'App\\Controller\\SearchController::search'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|rt/([^/]++)/(?'
                            .'|delete(*:199)'
                            .'|update(*:213)'
                            .'|add(*:224)'
                        .')'
                        .'|t/view/([^/]++)(*:248)'
                    .')'
                    .'|rud/product/([^/]++)(?'
                        .'|(*:280)'
                        .'|/edit(*:293)'
                        .'|(*:301)'
                    .')'
                .')'
                .'|/edit/([^/]++)(*:325)'
                .'|/product/(?'
                    .'|productPage/([^/]++)(*:365)'
                    .'|edit/([^/]++)(*:386)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:431)'
                .'|/user/([^/]++)(?'
                    .'|(*:456)'
                    .'|/edit(*:469)'
                    .'|(*:477)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        199 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['product'], null, null, false, false, null]],
        213 => [[['_route' => 'cart_update', '_controller' => 'App\\Controller\\CartController::update'], ['product'], null, null, false, false, null]],
        224 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['product'], null, null, false, false, null]],
        248 => [[['_route' => 'category', '_controller' => 'App\\Controller\\CategoryController::view'], ['category'], null, null, false, true, null]],
        280 => [[['_route' => 'app_crud_product_show', '_controller' => 'App\\Controller\\CrudProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        293 => [[['_route' => 'app_crud_product_edit', '_controller' => 'App\\Controller\\CrudProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        301 => [[['_route' => 'app_crud_product_delete', '_controller' => 'App\\Controller\\CrudProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        325 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['category'], null, null, false, true, null]],
        365 => [[['_route' => 'productPage', '_controller' => 'App\\Controller\\ProductController::product'], ['product'], null, null, false, true, null]],
        386 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['product'], null, null, false, true, null]],
        431 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        456 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        469 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        477 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
