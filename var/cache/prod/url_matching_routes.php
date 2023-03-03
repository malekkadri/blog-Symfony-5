<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/a(?'
                    .'|rticle/([^/]++)(*:27)'
                    .'|dmin/(?'
                        .'|article/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:69)'
                                .'|delimage(*:84)'
                            .')'
                            .'|(*:92)'
                        .')'
                        .'|c(?'
                            .'|ategory/([^/]++)(?'
                                .'|/edit(*:128)'
                                .'|(*:136)'
                            .')'
                            .'|omment/([^/]++)(?'
                                .'|(*:163)'
                                .'|/edit(*:176)'
                            .')'
                        .')'
                        .'|link/([^/]++)(?'
                            .'|(*:202)'
                            .'|/edit(*:215)'
                            .'|(*:223)'
                        .')'
                        .'|tag/(?'
                            .'|new/ajax/([^/]++)(*:256)'
                            .'|([^/]++)(?'
                                .'|/edit(*:280)'
                                .'|(*:288)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|ategory/([^/]++)(*:321)'
                    .'|omment/([^/]++)(*:344)'
                    .'|hange\\-locale/([^/]++)(*:374)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:419)'
                .'|/tag/([^/]++)(*:440)'
                .'|/profile/([^/]++)(?'
                    .'|(*:468)'
                    .'|/edit(*:481)'
                    .'|(*:489)'
                .')'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:539)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:582)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        69 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        84 => [[['_route' => 'article_delete_image', '_controller' => 'App\\Controller\\ArticleController::deleteImage'], ['id'], ['GET' => 0], null, false, false, null]],
        92 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        128 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        136 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        163 => [[['_route' => 'comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        176 => [[['_route' => 'comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        202 => [[['_route' => 'link_show', '_controller' => 'App\\Controller\\LinkController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        215 => [[['_route' => 'link_edit', '_controller' => 'App\\Controller\\LinkController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        223 => [[['_route' => 'link_delete', '_controller' => 'App\\Controller\\LinkController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        256 => [[['_route' => 'tag_new_ajax', '_controller' => 'App\\Controller\\TagController::newTagAjax'], ['label'], ['POST' => 0], null, false, true, null]],
        280 => [[['_route' => 'tag_edit', '_controller' => 'App\\Controller\\TagController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        288 => [[['_route' => 'tag_delete', '_controller' => 'App\\Controller\\TagController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        321 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        344 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        374 => [[['_route' => 'change_locale', '_controller' => 'App\\Controller\\MainController::changeLocale'], ['locale'], null, null, false, true, null]],
        419 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        440 => [[['_route' => 'tag_show', '_controller' => 'App\\Controller\\TagController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        468 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        481 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        489 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        539 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        582 => [
            [['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
