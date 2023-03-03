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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/article' => [[['_route' => 'article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/article/new' => [[['_route' => 'article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category' => [[['_route' => 'category_admin_index', '_controller' => 'App\\Controller\\CategoryController::indexAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/comment' => [[['_route' => 'comment_admin_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/comment/new' => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/link' => [[['_route' => 'link_index', '_controller' => 'App\\Controller\\LinkController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/link' => [[['_route' => 'link_admin_index', '_controller' => 'App\\Controller\\LinkController::indexAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/admin/link/new' => [[['_route' => 'link_new', '_controller' => 'App\\Controller\\LinkController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/terms' => [[['_route' => 'terms', '_controller' => 'App\\Controller\\RegistrationController::terms'], null, null, null, false, false, null]],
        '/policy' => [[['_route' => 'policy', '_controller' => 'App\\Controller\\RegistrationController::policy'], null, null, null, false, false, null]],
        '/disclaimer' => [[['_route' => 'disclaimer', '_controller' => 'App\\Controller\\RegistrationController::disclaimer'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/rss' => [[['_route' => 'rss_feed', '_controller' => 'App\\Controller\\RssController::rssAction'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\SearchController::index'], null, null, null, false, false, null]],
        '/handleSearch' => [[['_route' => 'handleSearch', '_controller' => 'App\\Controller\\SearchController::handleSearch'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/sitemap.xml' => [[['_route' => 'sitemap', '_format' => 'xml', '_controller' => 'App\\Controller\\SitemapController::index'], null, null, null, false, false, null]],
        '/tag' => [[['_route' => 'tag_index', '_controller' => 'App\\Controller\\TagController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/tag' => [[['_route' => 'tag_admin_index', '_controller' => 'App\\Controller\\TagController::indexAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/admin/tag/new' => [[['_route' => 'tag_new', '_controller' => 'App\\Controller\\TagController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/a(?'
                    .'|rticle/([^/]++)(*:188)'
                    .'|dmin/(?'
                        .'|article/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:231)'
                                .'|delimage(*:247)'
                            .')'
                            .'|(*:256)'
                        .')'
                        .'|c(?'
                            .'|ategory/([^/]++)(?'
                                .'|/edit(*:293)'
                                .'|(*:301)'
                            .')'
                            .'|omment/([^/]++)(?'
                                .'|(*:328)'
                                .'|/edit(*:341)'
                            .')'
                        .')'
                        .'|link/([^/]++)(?'
                            .'|(*:367)'
                            .'|/edit(*:380)'
                            .'|(*:388)'
                        .')'
                        .'|tag/(?'
                            .'|new/ajax/([^/]++)(*:421)'
                            .'|([^/]++)(?'
                                .'|/edit(*:445)'
                                .'|(*:453)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|ategory/([^/]++)(*:486)'
                    .'|omment/([^/]++)(*:509)'
                    .'|hange\\-locale/([^/]++)(*:539)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:584)'
                .'|/tag/([^/]++)(*:605)'
                .'|/profile/([^/]++)(?'
                    .'|(*:633)'
                    .'|/edit(*:646)'
                    .'|(*:654)'
                .')'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:704)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:747)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        188 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        231 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        247 => [[['_route' => 'article_delete_image', '_controller' => 'App\\Controller\\ArticleController::deleteImage'], ['id'], ['GET' => 0], null, false, false, null]],
        256 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        293 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        301 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        328 => [[['_route' => 'comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        341 => [[['_route' => 'comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        367 => [[['_route' => 'link_show', '_controller' => 'App\\Controller\\LinkController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        380 => [[['_route' => 'link_edit', '_controller' => 'App\\Controller\\LinkController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        388 => [[['_route' => 'link_delete', '_controller' => 'App\\Controller\\LinkController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        421 => [[['_route' => 'tag_new_ajax', '_controller' => 'App\\Controller\\TagController::newTagAjax'], ['label'], ['POST' => 0], null, false, true, null]],
        445 => [[['_route' => 'tag_edit', '_controller' => 'App\\Controller\\TagController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        453 => [[['_route' => 'tag_delete', '_controller' => 'App\\Controller\\TagController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        486 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        509 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        539 => [[['_route' => 'change_locale', '_controller' => 'App\\Controller\\MainController::changeLocale'], ['locale'], null, null, false, true, null]],
        584 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        605 => [[['_route' => 'tag_show', '_controller' => 'App\\Controller\\TagController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        633 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        646 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        654 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        704 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        747 => [
            [['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
