<?php

Route::group(['as'=>'vendor.','namespace'=>'Vendor','prefix'=>'vendor'], function () {
    Route::get('{shop}','ShopController@index')->name('vendor');
    // Route::get('dashboard','ProfileController@dashboard')->name('dashboard');
    Route::get('profile','ProfileController@profile')->name('profile');
    Route::post('profile','ProfileController@saveprofile')->name('profile');
    Route::get('settings','ProfileController@settings')->name('settings');

    Route::group(['prefix'=> 'media'], function () {
        Route::get('/','MediaController@list')->name('media');
        Route::post('dropzone','MediaController@dropzone_media')->name('media.dropzone');
        Route::post('summernote','MediaController@summernote_media')->name('media.summernote');
        Route::post('delete','MediaController@delete')->name('media.delete');
    });

    Route::group(['prefix'=> 'products'], function () {
        Route::get('/','ProductController@list')->name('products');
        Route::get('add','ProductController@create')->name('product.create');
        Route::post('save','ProductController@save')->name('product.save');
        Route::get('edit/{item}','ProductController@edit')->name('product.edit');
        Route::post('update/{item}','ProductController@update')->name('product.update');
        Route::post('delete','ProductController@delete')->name('product.delete');
        Route::post('publish','ProductController@publish')->name('product.publish');
        Route::post('unpublish','ProductController@unpublish')->name('product.unpublish');
        Route::get('orders','ProductController@orders')->name('product.orders');
        
    });

    Route::group(['prefix'=>'payment'],function(){
        // Route::get('transactions','');
        //withdrawal request
        // Route::get('withdrawal','');
    });

    Route::group(['prefix'=>'coupon'],function(){
        Route::get('/','CouponController@list')->name('coupons');
        Route::get('create','CouponController@create')->name('coupon.create');
        Route::post('save','CouponController@save')->name('coupon.save');
        Route::get('edit/{coupon}','CouponController@edit')->name('coupon.edit');
        Route::post('update/{coupon}','CouponController@update')->name('coupon.update');
        Route::post('delete','CouponController@delete')->name('coupon.delete');
    });

    Route::group(['prefix'=> 'posts'], function () {
        Route::get('/','BlogController@list')->name('posts');
        Route::get('add','BlogController@create')->name('posts.create');
        Route::post('save','BlogController@save')->name('posts.save');
        Route::get('edit/{item}','BlogController@edit')->name('posts.edit');
        Route::post('update/{item}','BlogController@update')->name('posts.update');
        Route::post('delete','BlogController@delete')->name('posts.delete');
        Route::post('status','BlogController@status')->name('posts.status');
        Route::get('comments','BlogController@comments')->name('posts.comments');
        Route::post('comments/moderate','BlogController@commentModerate')->name('posts.comments.moderate');
        
    });
    //subscriptions

});