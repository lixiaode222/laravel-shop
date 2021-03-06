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
    //后台订单列表页面
    $router->get('orders', 'OrdersController@index')->name('admin.orders.index');
    //后台订单详情页面
    $router->get('orders/{order}', 'OrdersController@show')->name('admin.orders.show');
    //后台订单发货逻辑
    $router->post('orders/{order}/ship', 'OrdersController@ship')->name('admin.orders.ship');
    //后台处理退款逻辑
    $router->post('orders/{order}/refund', 'OrdersController@handleRefund')->name('admin.orders.handle_refund');
    //后台优惠券列表页面
    $router->get('coupon_codes', 'CouponCodesController@index');
    //后台添加优惠券页面
    $router->post('coupon_codes', 'CouponCodesController@store');
    //后台添加优惠券逻辑
    $router->get('coupon_codes/create', 'CouponCodesController@create');
    //后台修改优惠券页面
    $router->get('coupon_codes/{id}/edit', 'CouponCodesController@edit');
    //后台修改优惠券逻辑
    $router->put('coupon_codes/{id}', 'CouponCodesController@update');
    //后台删除优惠券逻辑
    $router->delete('coupon_codes/{id}', 'CouponCodesController@destroy');
});
