<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/graphql' => [[['_route' => 'api_graphql_entrypoint', '_controller' => 'api_platform.graphql.action.entrypoint', '_graphql' => true], null, null, null, false, false, null]],
        '/api/graphql/graphiql' => [[['_route' => 'api_graphql_graphiql', '_controller' => 'api_platform.graphql.action.graphiql', '_graphql' => true], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/api/graphql/graphql_playground' => [[['_route' => 'api_graphql_graphql_playground', '_controller' => 'api_platform.graphql.action.graphql_playground', '_graphql' => true], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/demo' => [[['_route' => 'app_demo', '_controller' => 'App\\Controller\\DemoController::index'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/products' => [[['_route' => 'product_list', '_controller' => 'App\\Controller\\ProductController::listProducts'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|errors(?:/(\\d+))?(*:70)'
                        .'|validation_errors/([^/]++)(*:103)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:140)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:171)'
                        .'|c(?'
                            .'|ontexts/([^.]+)(?:\\.(jsonld))?(*:213)'
                            .'|ategories(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:259)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:285)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:323)'
                                .')'
                            .')'
                        .')'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:363)'
                        .')'
                        .'|actors(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:407)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:433)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:471)'
                            .')'
                        .')'
                        .'|movies(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:516)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:542)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:580)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:623)'
                    .'|wdt/([^/]++)(*:643)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:685)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:722)'
                                .'|router(*:736)'
                                .'|exception(?'
                                    .'|(*:756)'
                                    .'|\\.css(*:769)'
                                .')'
                            .')'
                            .'|(*:779)'
                        .')'
                    .')'
                .')'
                .'|/product/([^/]++)(*:807)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        70 => [[['_route' => 'api_errors', '_controller' => 'api_platform.action.not_exposed', 'status' => '500'], ['status'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        103 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        140 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        171 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        213 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        259 => [[['_route' => '_api_/categories/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        285 => [
            [['_route' => '_api_/categories{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/categories{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        323 => [
            [['_route' => '_api_/categories/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/categories/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/categories/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        363 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        407 => [[['_route' => '_api_/actors/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Actor', '_api_operation_name' => '_api_/actors/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        433 => [
            [['_route' => '_api_/actors{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Actor', '_api_operation_name' => '_api_/actors{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/actors{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Actor', '_api_operation_name' => '_api_/actors{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        471 => [
            [['_route' => '_api_/actors/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Actor', '_api_operation_name' => '_api_/actors/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/actors/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Actor', '_api_operation_name' => '_api_/actors/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/actors/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Actor', '_api_operation_name' => '_api_/actors/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        516 => [[['_route' => '_api_/movies/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Movie', '_api_operation_name' => '_api_/movies/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        542 => [
            [['_route' => '_api_/movies{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Movie', '_api_operation_name' => '_api_/movies{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/movies{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Movie', '_api_operation_name' => '_api_/movies{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        580 => [
            [['_route' => '_api_/movies/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Movie', '_api_operation_name' => '_api_/movies/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/movies/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Movie', '_api_operation_name' => '_api_/movies/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/movies/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Movie', '_api_operation_name' => '_api_/movies/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        623 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        643 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        685 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        722 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        736 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        756 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        769 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        779 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        807 => [
            [['_route' => 'product_view', '_controller' => 'App\\Controller\\ProductController::viewProduct'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
