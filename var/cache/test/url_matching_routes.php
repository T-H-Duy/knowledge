<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/add' => [[['_route' => 'add_cart', '_controller' => 'App\\Controller\\CartController::addToCart'], null, null, null, false, false, null]],
        '/certifications' => [[['_route' => 'app_certifications', '_controller' => 'App\\Controller\\CertificationController::index'], null, null, null, false, false, null]],
        '/create-checkout-session' => [[['_route' => 'app_checkout', '_controller' => 'App\\Controller\\CheckoutController::createCheckoutSession'], null, null, null, false, false, null]],
        '/success_payment' => [[['_route' => 'success_payment', '_controller' => 'App\\Controller\\CheckoutController::successPayment'], null, null, null, false, false, null]],
        '/cancel_payment' => [[['_route' => 'cancel_payment', '_controller' => 'App\\Controller\\CheckoutController::cancelPayment'], null, null, null, false, false, null]],
        '/formation' => [[['_route' => 'app_formation', '_controller' => 'App\\Controller\\FormationController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|errors/(\\d+)(*:65)'
                        .'|validation_errors/([^/]++)(*:98)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:134)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:165)'
                        .'|c(?'
                            .'|ontexts/([^.]+)(?:\\.(jsonld))?(*:207)'
                            .'|arts(?'
                                .'|(?:\\.([^/]++))?(*:237)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:271)'
                                .'|(?:\\.([^/]++))?(*:294)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:328)'
                            .')'
                            .'|ertifications(?'
                                .'|(?:\\.([^/]++))?(*:368)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:402)'
                                .'|(?:\\.([^/]++))?(*:425)'
                            .')'
                            .'|ursuses(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:470)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:496)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:534)'
                                .')'
                            .')'
                        .')'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:574)'
                        .')'
                        .'|lessons(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:619)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:645)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:683)'
                            .')'
                        .')'
                        .'|purchases(?'
                            .'|(?:\\.([^/]++))?(*:720)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:754)'
                        .')'
                        .'|reset_password_requests(?'
                            .'|(?:\\.([^/]++))?(*:804)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:838)'
                        .')'
                        .'|themes(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:882)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:908)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:946)'
                            .')'
                        .')'
                        .'|users(?'
                            .'|(?:\\.([^/]++))?(*:979)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1013)'
                            .'|(?:\\.([^/]++))?(*:1037)'
                        .')'
                    .')'
                .')'
                .'|/cart/remove/([^/]++)(*:1070)'
                .'|/formation/cursus/lesson/(?'
                    .'|(\\d+)(*:1112)'
                    .'|([^/]++)/validate(*:1138)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:1184)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        65 => [[['_route' => 'api_errors', '_controller' => 'api_platform.action.error_page'], ['status'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        98 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        134 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        165 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        207 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        237 => [[['_route' => '_api_/carts{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cart', '_api_operation_name' => '_api_/carts{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        271 => [[['_route' => '_api_/carts/{id_cart}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cart', '_api_operation_name' => '_api_/carts/{id_cart}{._format}_get'], ['id_cart', '_format'], ['GET' => 0], null, false, true, null]],
        294 => [[['_route' => '_api_/carts{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cart', '_api_operation_name' => '_api_/carts{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        328 => [[['_route' => '_api_/carts/{id_cart}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cart', '_api_operation_name' => '_api_/carts/{id_cart}{._format}_delete'], ['id_cart', '_format'], ['DELETE' => 0], null, false, true, null]],
        368 => [[['_route' => '_api_/certifications{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Certification', '_api_operation_name' => '_api_/certifications{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        402 => [[['_route' => '_api_/certifications/{id_certification}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Certification', '_api_operation_name' => '_api_/certifications/{id_certification}{._format}_get'], ['id_certification', '_format'], ['GET' => 0], null, false, true, null]],
        425 => [[['_route' => '_api_/certifications{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Certification', '_api_operation_name' => '_api_/certifications{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        470 => [[['_route' => '_api_/cursuses/{id_cursus}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cursus', '_api_operation_name' => '_api_/cursuses/{id_cursus}{._format}_get'], ['id_cursus', '_format'], ['GET' => 0], null, false, true, null]],
        496 => [
            [['_route' => '_api_/cursuses{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cursus', '_api_operation_name' => '_api_/cursuses{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/cursuses{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cursus', '_api_operation_name' => '_api_/cursuses{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        534 => [
            [['_route' => '_api_/cursuses/{id_cursus}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cursus', '_api_operation_name' => '_api_/cursuses/{id_cursus}{._format}_patch'], ['id_cursus', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/cursuses/{id_cursus}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cursus', '_api_operation_name' => '_api_/cursuses/{id_cursus}{._format}_delete'], ['id_cursus', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        574 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        619 => [[['_route' => '_api_/lessons/{id_lesson}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Lesson', '_api_operation_name' => '_api_/lessons/{id_lesson}{._format}_get'], ['id_lesson', '_format'], ['GET' => 0], null, false, true, null]],
        645 => [
            [['_route' => '_api_/lessons{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Lesson', '_api_operation_name' => '_api_/lessons{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/lessons{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Lesson', '_api_operation_name' => '_api_/lessons{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        683 => [
            [['_route' => '_api_/lessons/{id_lesson}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Lesson', '_api_operation_name' => '_api_/lessons/{id_lesson}{._format}_patch'], ['id_lesson', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/lessons/{id_lesson}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Lesson', '_api_operation_name' => '_api_/lessons/{id_lesson}{._format}_delete'], ['id_lesson', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        720 => [[['_route' => '_api_/purchases{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Purchase', '_api_operation_name' => '_api_/purchases{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        754 => [[['_route' => '_api_/purchases/{id_purchase}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Purchase', '_api_operation_name' => '_api_/purchases/{id_purchase}{._format}_get'], ['id_purchase', '_format'], ['GET' => 0], null, false, true, null]],
        804 => [[['_route' => '_api_/reset_password_requests{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\ResetPasswordRequest', '_api_operation_name' => '_api_/reset_password_requests{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        838 => [[['_route' => '_api_/reset_password_requests/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\ResetPasswordRequest', '_api_operation_name' => '_api_/reset_password_requests/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        882 => [[['_route' => '_api_/themes/{id_theme}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Theme', '_api_operation_name' => '_api_/themes/{id_theme}{._format}_get'], ['id_theme', '_format'], ['GET' => 0], null, false, true, null]],
        908 => [
            [['_route' => '_api_/themes{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Theme', '_api_operation_name' => '_api_/themes{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/themes{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Theme', '_api_operation_name' => '_api_/themes{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        946 => [
            [['_route' => '_api_/themes/{id_theme}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Theme', '_api_operation_name' => '_api_/themes/{id_theme}{._format}_patch'], ['id_theme', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/themes/{id_theme}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Theme', '_api_operation_name' => '_api_/themes/{id_theme}{._format}_delete'], ['id_theme', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        979 => [[['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        1013 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1037 => [[['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        1070 => [[['_route' => 'remove_cart_item', '_controller' => 'App\\Controller\\CartController::removeCartItem'], ['id_cart'], ['POST' => 0], null, false, true, null]],
        1112 => [[['_route' => 'app_cursus', '_controller' => 'App\\Controller\\FormationController::detailLesson'], ['id_lesson'], null, null, false, true, null]],
        1138 => [[['_route' => 'validate_lesson', '_controller' => 'App\\Controller\\FormationController::validateLesson'], ['id_lesson'], ['POST' => 0], null, false, false, null]],
        1184 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
