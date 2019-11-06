<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'cv' => [[], ['_controller' => 'App\\Controller\\CvController::index'], [], [['text', '/cv']], [], []],
    'main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], []],
    'projet' => [['id'], ['_controller' => 'App\\Controller\\MainController::projet'], ['id' => '[0-9]'], [['variable', '/', '[0-9]', 'id', true], ['text', '/projet']], [], []],
    'deletecommentaire' => [['id'], ['_controller' => 'App\\Controller\\MainController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletecom']], [], []],
    'loadmessage' => [[], ['_controller' => 'App\\Controller\\MainController::loadmessage'], [], [['text', '/loadmessage']], [], []],
    'deletemessage' => [['id'], ['_controller' => 'App\\Controller\\MainController::deletemessage'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletemessage']], [], []],
    'addmessage' => [[], ['_controller' => 'App\\Controller\\MainController::addmessage'], [], [['text', '/addmessage']], [], []],
    'maras_home' => [[], ['_controller' => 'App\\Controller\\RestoController::index'], [], [['text', '/MarasSofrasi']], [], []],
    'maras_type' => [[], ['_controller' => 'App\\Controller\\RestoController::checktype'], [], [['text', '/checktype']], [], []],
    'maras_plat' => [['id'], ['_controller' => 'App\\Controller\\RestoController::plats'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/plat']], [], []],
    'maras_addpanier' => [['id'], ['_controller' => 'App\\Controller\\RestoController::addpanier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/addpanier']], [], []],
    'maras_panier' => [[], ['_controller' => 'App\\Controller\\RestoController::panier'], [], [['text', '/panier']], [], []],
    'maras_removepanier' => [['id'], ['_controller' => 'App\\Controller\\RestoController::removepanier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/removepanier']], [], []],
    'inscription' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/inscription']], [], []],
    'security_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'security_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
