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
    //后台添加商品页面
    $router->get('products/create', 'ProductsController@create');
    //后台添加商品逻辑
    $router->post('products', 'ProductsController@store');
    //后台编辑商品页面
    $router->get('products/{id}/edit', 'ProductsController@edit');
    //后台编辑商品逻辑
    $router->put('products/{id}', 'ProductsController@update');
});
