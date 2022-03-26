<?php

Route::get('shop/setup','Vendors\ShopController@create')->name('shop.create');
Route::post('shop/setup','Vendors\ShopController@setup')->name('shop.setup');

Route::group(['prefix'=> 'shop','as'=>'shop.'], function () {
    Route::get('/','MediaController@list')->name('media');
    Route::post('dropzone','MediaController@dropzone_media')->name('media.dropzone');
    Route::post('summernote','MediaController@summernote_media')->name('media.summernote');
    Route::post('delete','MediaController@delete')->name('media.delete');
});

Route::group(['as'=>'shop.','namespace'=>'Vendors','prefix'=>'shop/{shop}'], function () {
    Route::get('/','ShopController@index')->name('view');
    Route::get('dashboard','ShopController@dashboard')->name('dashboard');
    Route::get('profile','ShopController@profile')->name('profile');
    Route::post('profile','ShopController@saveprofile')->name('profile');
    Route::get('settings','ShopController@settings')->name('settings');

    Route::group(['prefix'=> 'products'], function () {
        Route::get('/','ProductController@list')->name('products');
        Route::get('add','ProductController@create')->name('product.create');
        Route::post('save','ProductController@save')->name('product.save');
        Route::get('variant/{product}','ProductController@variant')->name('product.variant');
        Route::post('variant/{product}','ProductController@saveVariant')->name('product.variant');
        Route::get('edit/{product}','ProductController@edit')->name('product.edit');
        Route::post('update/{product}','ProductController@update')->name('product.update');
        Route::post('delete/{product}','ProductController@delete')->name('product.delete');
        Route::group(['prefix'=> 'templates'], function () {
            Route::get('/','ProductController@templates')->name('product.templates');
            Route::get('{template}/create','ProductController@createWithTemplates')->name('product.template.create');
        });

    });

    Route::group(['prefix'=> 'orders'],function() {
        Route::get('/','OrderController@list')->name('orders');
        Route::get('{order}','OrderController@view')->name('order.view');
        Route::post('{order}/status','OrderController@status')->name('order.status');
    });

    Route::get('transactions','EarningController@transactions')->name('transactions');
    Route::get('withdrawals','EarningController@withdrawals')->name('withdrawals');
    Route::post('withdrawal/request','EarningController@withdrawal_request')->name('withdrawal.request');

    Route::group(['prefix'=>'coupon'],function(){
        Route::get('/','CouponController@list')->name('coupons');
        Route::get('create','CouponController@create')->name('coupon.create');
        Route::post('save','CouponController@save')->name('coupon.save');
        Route::get('edit/{coupon}','CouponController@edit')->name('coupon.edit');
        Route::post('update/{coupon}','CouponController@update')->name('coupon.update');
        Route::post('delete','CouponController@delete')->name('coupon.delete');
    });
    Route::group(['as'=>'messages.','prefix'=> 'messages'],function(){
        Route::get('/','MessageController@index')->name('list');
        Route::get('new','MessageController@new')->name('new');
        Route::post('send','MessageController@send')->name('send');
        Route::post('chat','MessageController@chat')->name('chat');
    });
});

