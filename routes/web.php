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
//商品列表页面
Route::get('products', 'ProductsController@index')->name('products.index');
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
    });
});

