<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api_genid' => [['id'], ['_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/.well-known/genid']], [], [], []],
    'api_errors' => [['status'], ['_controller' => 'api_platform.action.error_page'], ['status' => '\\d+'], [['variable', '/', '\\d+', 'status', true], ['text', '/api/errors']], [], [], []],
    'api_validation_errors' => [['id'], ['_controller' => 'api_platform.action.not_exposed'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '[^.]+', '_format' => 'jsonld'], [['variable', '.', 'jsonld', '_format', true], ['variable', '/', '[^.]+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    '_api_validation_errors_problem' => [['id'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_validation_errors_hydra' => [['id'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_validation_errors_jsonapi' => [['id'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_/carts{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cart', '_api_operation_name' => '_api_/carts{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/carts']], [], [], []],
    '_api_/carts/{id_cart}{._format}_get' => [['id_cart', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cart', '_api_operation_name' => '_api_/carts/{id_cart}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id_cart', true], ['text', '/api/carts']], [], [], []],
    '_api_/carts{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cart', '_api_operation_name' => '_api_/carts{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/carts']], [], [], []],
    '_api_/carts/{id_cart}{._format}_delete' => [['id_cart', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cart', '_api_operation_name' => '_api_/carts/{id_cart}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id_cart', true], ['text', '/api/carts']], [], [], []],
    '_api_/certifications{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Certification', '_api_operation_name' => '_api_/certifications{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/certifications']], [], [], []],
    '_api_/certifications/{id_certification}{._format}_get' => [['id_certification', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Certification', '_api_operation_name' => '_api_/certifications/{id_certification}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id_certification', true], ['text', '/api/certifications']], [], [], []],
    '_api_/certifications{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Certification', '_api_operation_name' => '_api_/certifications{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/certifications']], [], [], []],
    '_api_/cursuses/{id_cursus}{._format}_get' => [['id_cursus', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cursus', '_api_operation_name' => '_api_/cursuses/{id_cursus}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id_cursus', true], ['text', '/api/cursuses']], [], [], []],
    '_api_/cursuses{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cursus', '_api_operation_name' => '_api_/cursuses{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/cursuses']], [], [], []],
    '_api_/cursuses{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cursus', '_api_operation_name' => '_api_/cursuses{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/cursuses']], [], [], []],
    '_api_/cursuses/{id_cursus}{._format}_patch' => [['id_cursus', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cursus', '_api_operation_name' => '_api_/cursuses/{id_cursus}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id_cursus', true], ['text', '/api/cursuses']], [], [], []],
    '_api_/cursuses/{id_cursus}{._format}_delete' => [['id_cursus', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Cursus', '_api_operation_name' => '_api_/cursuses/{id_cursus}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id_cursus', true], ['text', '/api/cursuses']], [], [], []],
    '_api_/lessons/{id_lesson}{._format}_get' => [['id_lesson', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Lesson', '_api_operation_name' => '_api_/lessons/{id_lesson}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id_lesson', true], ['text', '/api/lessons']], [], [], []],
    '_api_/lessons{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Lesson', '_api_operation_name' => '_api_/lessons{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/lessons']], [], [], []],
    '_api_/lessons{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Lesson', '_api_operation_name' => '_api_/lessons{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/lessons']], [], [], []],
    '_api_/lessons/{id_lesson}{._format}_patch' => [['id_lesson', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Lesson', '_api_operation_name' => '_api_/lessons/{id_lesson}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id_lesson', true], ['text', '/api/lessons']], [], [], []],
    '_api_/lessons/{id_lesson}{._format}_delete' => [['id_lesson', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Lesson', '_api_operation_name' => '_api_/lessons/{id_lesson}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id_lesson', true], ['text', '/api/lessons']], [], [], []],
    '_api_/purchases{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Purchase', '_api_operation_name' => '_api_/purchases{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/purchases']], [], [], []],
    '_api_/purchases/{id_purchase}{._format}_get' => [['id_purchase', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Purchase', '_api_operation_name' => '_api_/purchases/{id_purchase}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id_purchase', true], ['text', '/api/purchases']], [], [], []],
    '_api_/reset_password_requests{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\ResetPasswordRequest', '_api_operation_name' => '_api_/reset_password_requests{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/reset_password_requests']], [], [], []],
    '_api_/reset_password_requests/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\ResetPasswordRequest', '_api_operation_name' => '_api_/reset_password_requests/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/reset_password_requests']], [], [], []],
    '_api_/themes/{id_theme}{._format}_get' => [['id_theme', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Theme', '_api_operation_name' => '_api_/themes/{id_theme}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id_theme', true], ['text', '/api/themes']], [], [], []],
    '_api_/themes{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Theme', '_api_operation_name' => '_api_/themes{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/themes']], [], [], []],
    '_api_/themes{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Theme', '_api_operation_name' => '_api_/themes{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/themes']], [], [], []],
    '_api_/themes/{id_theme}{._format}_patch' => [['id_theme', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Theme', '_api_operation_name' => '_api_/themes/{id_theme}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id_theme', true], ['text', '/api/themes']], [], [], []],
    '_api_/themes/{id_theme}{._format}_delete' => [['id_theme', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Theme', '_api_operation_name' => '_api_/themes/{id_theme}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id_theme', true], ['text', '/api/themes']], [], [], []],
    '_api_/users{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], [], []],
    '_api_/users/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/users{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'app_cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], [], []],
    'add_cart' => [[], ['_controller' => 'App\\Controller\\CartController::addToCart'], [], [['text', '/cart/add']], [], [], []],
    'remove_cart_item' => [['id_cart'], ['_controller' => 'App\\Controller\\CartController::removeCartItem'], [], [['variable', '/', '[^/]++', 'id_cart', true], ['text', '/cart/remove']], [], [], []],
    'app_certifications' => [[], ['_controller' => 'App\\Controller\\CertificationController::index'], [], [['text', '/certifications']], [], [], []],
    'app_checkout' => [[], ['_controller' => 'App\\Controller\\CheckoutController::createCheckoutSession'], [], [['text', '/create-checkout-session']], [], [], []],
    'success_payment' => [[], ['_controller' => 'App\\Controller\\CheckoutController::successPayment'], [], [['text', '/success_payment']], [], [], []],
    'cancel_payment' => [[], ['_controller' => 'App\\Controller\\CheckoutController::cancelPayment'], [], [['text', '/cancel_payment']], [], [], []],
    'app_formation' => [[], ['_controller' => 'App\\Controller\\FormationController::index'], [], [['text', '/formation']], [], [], []],
    'app_cursus' => [['id_lesson'], ['_controller' => 'App\\Controller\\FormationController::detailLesson'], ['id_lesson' => '\\d+'], [['variable', '/', '\\d+', 'id_lesson', true], ['text', '/formation/cursus/lesson']], [], [], []],
    'validate_lesson' => [['id_lesson'], ['_controller' => 'App\\Controller\\FormationController::validateLesson'], [], [['text', '/validate'], ['variable', '/', '[^/]++', 'id_lesson', true], ['text', '/formation/cursus/lesson']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\Admin\DashboardController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'App\Controller\CartController::index' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], [], []],
    'App\Controller\CartController::addToCart' => [[], ['_controller' => 'App\\Controller\\CartController::addToCart'], [], [['text', '/cart/add']], [], [], []],
    'App\Controller\CartController::removeCartItem' => [['id_cart'], ['_controller' => 'App\\Controller\\CartController::removeCartItem'], [], [['variable', '/', '[^/]++', 'id_cart', true], ['text', '/cart/remove']], [], [], []],
    'App\Controller\CertificationController::index' => [[], ['_controller' => 'App\\Controller\\CertificationController::index'], [], [['text', '/certifications']], [], [], []],
    'App\Controller\CheckoutController::createCheckoutSession' => [[], ['_controller' => 'App\\Controller\\CheckoutController::createCheckoutSession'], [], [['text', '/create-checkout-session']], [], [], []],
    'App\Controller\CheckoutController::successPayment' => [[], ['_controller' => 'App\\Controller\\CheckoutController::successPayment'], [], [['text', '/success_payment']], [], [], []],
    'App\Controller\CheckoutController::cancelPayment' => [[], ['_controller' => 'App\\Controller\\CheckoutController::cancelPayment'], [], [['text', '/cancel_payment']], [], [], []],
    'App\Controller\FormationController::index' => [[], ['_controller' => 'App\\Controller\\FormationController::index'], [], [['text', '/formation']], [], [], []],
    'App\Controller\FormationController::detailLesson' => [['id_lesson'], ['_controller' => 'App\\Controller\\FormationController::detailLesson'], ['id_lesson' => '\\d+'], [['variable', '/', '\\d+', 'id_lesson', true], ['text', '/formation/cursus/lesson']], [], [], []],
    'App\Controller\FormationController::validateLesson' => [['id_lesson'], ['_controller' => 'App\\Controller\\FormationController::validateLesson'], [], [['text', '/validate'], ['variable', '/', '[^/]++', 'id_lesson', true], ['text', '/formation/cursus/lesson']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\RegistrationController::verifyUserEmail' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'App\Controller\ResetPasswordController::request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'App\Controller\ResetPasswordController::checkEmail' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'App\Controller\ResetPasswordController::reset' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
