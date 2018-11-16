<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//首页
Route::redirect('/', '/products')->name('root');
//登陆注册的相关路由
Auth::routes();

//路由组   只有登陆的用户才能访问
Route::group(['middleware' => 'auth'], function() {

    //发送邮箱进行验证
    Route::get('/email_verification/send', 'EmailVerificationController@send')->name('email_verification.send');
    //邮箱验证提醒页面
    Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')->name('email_verify_notice');
    //邮箱验证逻辑
    Route::get('/email_verification/verify', 'EmailVerificationController@verify')->name('email_verification.verify');


    //路由组 只有通过了邮箱验证的用户才能访问
    Route::group(['middleware' => 'email_verified'], function() {

        //用户收货地址列表页面
        Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
        //用户新增收货地址页面
        Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
        //用户新增收货地址逻辑
        Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
        //用户修改收货地址页面
        Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
        //用户修改收货地址逻辑
        Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
        //用户删除收货地址逻辑
        Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');
        //用户收藏商品逻辑
        Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
        //取消收藏商品逻辑
        Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
        //用户收藏商品列表页面
        Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');
        //用户加入购物车逻辑(添加购物车项逻辑)
        Route::post('cart', 'CartController@add')->name('cart.add');
        //用户购物车页面(购物车列表页面)
        Route::get('cart', 'CartController@index')->name('cart.index');
        //删除购物车项
        Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');
        //提交订单逻辑
        Route::post('orders', 'OrdersController@store')->name('orders.store');
        //用户订单列表页面
        Route::get('orders', 'OrdersController@index')->name('orders.index');
        //用户订单详情页面
        Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');
        //支付宝支付订单
        Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');
        //支付宝支付后前端回调
        Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');
        //用户确认收货逻辑
        Route::post('orders/{order}/received', 'OrdersController@received')->name('orders.received');
        //用户评价页面
        Route::get('orders/{order}/review', 'OrdersController@review')->name('orders.review.show');
        //用户评价逻辑
        Route::post('orders/{order}/review', 'OrdersController@sendReview')->name('orders.review.store');
    });
});

//商品列表页面
Route::get('products', 'ProductsController@index')->name('products.index');
//商品详情页面
Route::get('products/{product}', 'ProductsController@show')->name('products.show');
//支付宝支付后后端回调
Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');


