<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    //后台首页
    $router->get('/', 'HomeController@index');
    //后台用户列表页面
    $router->get('users', 'UsersController@index');
    //后台商品列表页面
    $router->get('products','ProductsController@index');
});
