<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
    'article_index' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/admin/article']], [], []],
    'article_new' => [[], ['_controller' => 'App\\Controller\\ArticleController::new'], [], [['text', '/admin/article/new']], [], []],
    'article_show' => [['slug'], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/article']], [], []],
    'article_edit' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], []],
    'article_delete_image' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::deleteImage'], [], [['text', '/delimage'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], []],
    'article_delete' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], []],
    'category_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category']], [], []],
    'category_admin_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::indexAdmin'], [], [['text', '/admin/category']], [], []],
    'category_new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/admin/category/new']], [], []],
    'category_show' => [['slug'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/category']], [], []],
    'category_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'comment_admin_index' => [[], ['_controller' => 'App\\Controller\\CommentController::index'], [], [['text', '/admin/comment']], [], []],
    'comment_new' => [[], ['_controller' => 'App\\Controller\\CommentController::new'], [], [['text', '/admin/comment/new']], [], []],
    'comment_show' => [['id'], ['_controller' => 'App\\Controller\\CommentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/comment']], [], []],
    'comment_edit' => [['id'], ['_controller' => 'App\\Controller\\CommentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/comment']], [], []],
    'comment_delete' => [['id'], ['_controller' => 'App\\Controller\\CommentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comment']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\HomeController::about'], [], [['text', '/about']], [], []],
    'link_index' => [[], ['_controller' => 'App\\Controller\\LinkController::index'], [], [['text', '/link']], [], []],
    'link_admin_index' => [[], ['_controller' => 'App\\Controller\\LinkController::indexAdmin'], [], [['text', '/admin/link']], [], []],
    'link_new' => [[], ['_controller' => 'App\\Controller\\LinkController::new'], [], [['text', '/admin/link/new']], [], []],
    'link_show' => [['id'], ['_controller' => 'App\\Controller\\LinkController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/link']], [], []],
    'link_edit' => [['id'], ['_controller' => 'App\\Controller\\LinkController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/link']], [], []],
    'link_delete' => [['id'], ['_controller' => 'App\\Controller\\LinkController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/link']], [], []],
    'change_locale' => [['locale'], ['_controller' => 'App\\Controller\\MainController::changeLocale'], [], [['variable', '/', '[^/]++', 'locale', true], ['text', '/change-locale']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'terms' => [[], ['_controller' => 'App\\Controller\\RegistrationController::terms'], [], [['text', '/terms']], [], []],
    'policy' => [[], ['_controller' => 'App\\Controller\\RegistrationController::policy'], [], [['text', '/policy']], [], []],
    'disclaimer' => [[], ['_controller' => 'App\\Controller\\RegistrationController::disclaimer'], [], [['text', '/disclaimer']], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], []],
    'rss_feed' => [[], ['_controller' => 'App\\Controller\\RssController::rssAction'], [], [['text', '/rss']], [], []],
    'search' => [[], ['_controller' => 'App\\Controller\\SearchController::index'], [], [['text', '/search']], [], []],
    'handleSearch' => [[], ['_controller' => 'App\\Controller\\SearchController::handleSearch'], [], [['text', '/handleSearch']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'sitemap' => [[], ['_format' => 'xml', '_controller' => 'App\\Controller\\SitemapController::index'], [], [['text', '/sitemap.xml']], [], []],
    'tag_index' => [[], ['_controller' => 'App\\Controller\\TagController::index'], [], [['text', '/tag']], [], []],
    'tag_admin_index' => [[], ['_controller' => 'App\\Controller\\TagController::indexAdmin'], [], [['text', '/admin/tag']], [], []],
    'tag_new' => [[], ['_controller' => 'App\\Controller\\TagController::new'], [], [['text', '/admin/tag/new']], [], []],
    'tag_new_ajax' => [['label'], ['_controller' => 'App\\Controller\\TagController::newTagAjax'], [], [['variable', '/', '[^/]++', 'label', true], ['text', '/admin/tag/new/ajax']], [], []],
    'tag_show' => [['slug'], ['_controller' => 'App\\Controller\\TagController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/tag']], [], []],
    'tag_edit' => [['id'], ['_controller' => 'App\\Controller\\TagController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/tag']], [], []],
    'tag_delete' => [['id'], ['_controller' => 'App\\Controller\\TagController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/tag']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/admin/user']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/admin/user/new']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profile']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/profile']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profile']], [], []],
    'ef_connect' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder', true], ['variable', '/', '[^/]++', 'instance', true], ['text', '/efconnect']], [], []],
    'ef_main_js' => [[], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], [], [['text', '/elfinder.main.js']], [], []],
    'elfinder' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder', true], ['variable', '/', '[^/]++', 'instance', true], ['text', '/elfinder']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
];
