<?php

Route::get('shop/setup','Vendor\ShopController@create')->name('shop.create');
Route::post('shop/setup','Vendor\ShopController@setup')->name('shop.setup');
Route::group(['prefix'=> 'shop','as'=>'shop.'], function () {
    Route::get('/','MediaController@list')->name('media');
    Route::post('dropzone','MediaController@dropzone_media')->name('media.dropzone');
    Route::post('summernote','MediaController@summernote_media')->name('media.summernote');
    Route::post('delete','MediaController@delete')->name('media.delete');
});

Route::group(['as'=>'shop.','namespace'=>'Vendor','prefix'=>'shop/{shop}'], function () {
    Route::get('/','ShopController@index')->name('view');
    Route::get('dashboard','ShopController@dashboard')->name('dashboard');
    
    Route::get('profile','ShopController@profile')->name('profile');
    Route::post('profile','ShopController@saveprofile')->name('profile');
    Route::get('settings','ShopController@settings')->name('settings');

    Route::group(['prefix'=> 'products'], function () {
        Route::get('/','ProductController@list')->name('products');
        Route::get('add','ProductController@create')->name('product.create');
        Route::post('save','ProductController@save')->name('product.save');
        Route::get('edit/{item}','ProductController@edit')->name('product.edit');
        Route::post('update/{item}','ProductController@update')->name('product.update');
        Route::post('delete','ProductController@delete')->name('product.delete');
        Route::post('publish','ProductController@publish')->name('product.publish');
        Route::post('unpublish','ProductController@unpublish')->name('product.unpublish');        
    });

    Route::group(['prefix'=> 'orders'],function() {
        Route::get('/','OrderController@list')->name('orders');
        // Route::get('/','OrderController@list')->name('orders');
    });

    Route::group(['prefix'=> 'payments'], function () {
        Route::get('/','PaymentController@list')->name('payments');
        Route::get('add','PaymentController@create')->name('payments.create');
        Route::post('save','PaymentController@save')->name('payments.save');
        Route::get('edit/{item}','PaymentController@edit')->name('payments.edit');
        Route::post('update/{item}','PaymentController@update')->name('payments.update');
        Route::post('delete','PaymentController@delete')->name('payments.delete');
        Route::post('status','PaymentController@status')->name('payments.status');
        Route::get('comments','PaymentController@comments')->name('payments.comments');
        Route::post('comments/moderate','PaymentController@commentModerate')->name('payments.comments.moderate');
        
    });

    Route::group(['prefix'=>'coupon'],function(){
        Route::get('/','CouponController@list')->name('coupons');
        Route::get('create','CouponController@create')->name('coupon.create');
        Route::post('save','CouponController@save')->name('coupon.save');
        Route::get('edit/{coupon}','CouponController@edit')->name('coupon.edit');
        Route::post('update/{coupon}','CouponController@update')->name('coupon.update');
        Route::post('delete','CouponController@delete')->name('coupon.delete');
    });
  
    
});