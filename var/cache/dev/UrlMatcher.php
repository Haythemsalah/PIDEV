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
        '/evenement' => [[['_route' => 'evenement', '_controller' => 'App\\Controller\\EvenementController::index'], null, null, null, false, false, null]],
        '/EvSalle' => [[['_route' => 'EvSalle', '_controller' => 'App\\Controller\\EvenementController::EvSalle'], null, null, null, false, false, null]],
        '/afficheE' => [[['_route' => 'afficheE', '_controller' => 'App\\Controller\\EvenementController::afficheEvenement'], null, null, null, false, false, null]],
        '/ajoutE' => [[['_route' => 'ajoutE', '_controller' => 'App\\Controller\\EvenementController::ajoutE'], null, null, null, true, false, null]],
        '/reservation' => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/ajoutR' => [[['_route' => 'ajoutR', '_controller' => 'App\\Controller\\ReservationController::resnew'], null, null, null, true, false, null]],
        '/afficheRadmin' => [[['_route' => 'afficheRadmin', '_controller' => 'App\\Controller\\ReservationController::afficheEvenement'], null, null, null, false, false, null]],
        '/ajoutResAdmin' => [[['_route' => 'ajoutResAdmin', '_controller' => 'App\\Controller\\ReservationController::res'], null, null, null, true, false, null]],
        '/ResSearch' => [[['_route' => 'ResSearch', '_controller' => 'App\\Controller\\ReservationController::liseress'], null, null, null, false, false, null]],
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
                .'|/supp(?'
                    .'|/([^/]++)(*:186)'
                    .'|Res/([^/]++)(*:206)'
                .')'
                .'|/modif(?'
                    .'|E/([^/]++)(*:234)'
                    .'|Res/([^/]++)(*:254)'
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
        186 => [[['_route' => 'suppE', '_controller' => 'App\\Controller\\EvenementController::supp'], ['id'], null, null, false, true, null]],
        206 => [[['_route' => 'suppRes', '_controller' => 'App\\Controller\\ReservationController::suppres'], ['id'], null, null, false, true, null]],
        234 => [[['_route' => 'modifE', '_controller' => 'App\\Controller\\EvenementController::modifE'], ['id'], null, null, false, true, null]],
        254 => [
            [['_route' => 'modifRes', '_controller' => 'App\\Controller\\ReservationController::modifier'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
