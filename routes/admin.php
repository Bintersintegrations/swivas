<?php
Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'Backend','middleware'=> 'role:admin'], function () {

    Route::get('dashboard','HomeController@dashboard')->name('dashboard');
    Route::get('profile','HomeController@profile')->name('profile');
    Route::get('categories','CategoryManagementController@listcategories')->name('categories');
    Route::post('categories/save','CategoryManagementController@savecategories')->name('categories.save');
    Route::post('categories/update','CategoryManagementController@updatecategories')->name('categories.update');
    Route::post('categories/delete','CategoryManagementController@deletecategories')->name('categories.delete');
    
    Route::get('attributes','CategoryManagementController@listatributes')->name('atributes');
    Route::post('attributes/save','CategoryManagementController@saveatributes')->name('atributes.save');
    Route::post('attributes/update','CategoryManagementController@updateatributes')->name('atributes.update');
    Route::post('attributes/delete','CategoryManagementController@deleteatributes')->name('atributes.delete');
    //product
    Route::group(['prefix'=> 'products','as'=>'product.'],function(){
        Route::get('/','ProductManagementController@list')->name('lists');
        Route::post('status','ProductManagementController@status')->name('status');
        Route::post('delete','ProductManagementController@delete')->name('delete');
       
    });
    Route::get('orders','OrderManagementController@listorders')->name('orders.list');
    Route::post('order/delete','OrderManagementController@listorders')->name('order.delete');
    Route::get('order/{order}/view','OrderManagementController@vieworder')->name('order.view');
    

    Route::get('transactions','PaymentManagementController@transactions')->name('transactions');
    Route::get('withdrawals','PaymentManagementController@withdrawals')->name('withdrawals');
    Route::post('withdrawal/response','PaymentManagementController@withdrawal_response')->name('withdrawal.response');
    Route::get('settlements','PaymentManagementController@settlements')->name('settlements');
    
    Route::get('coupons','CouponManagementController@list')->name('coupons.list');
    Route::get('coupons/create','CouponManagementController@create')->name('coupons.create');
    Route::post('coupons','CouponManagementController@save')->name('coupons.save');
    Route::get('coupons/edit/{coupon}','CouponManagementController@edit')->name('coupons.edit');
    Route::post('coupons/update/{coupon}','CouponManagementController@update')->name('coupons.update');

    Route::get('users','UserManagementController@listusers')->name('users.list');
    Route::post('user/delete','UserManagementController@deleteuser')->name('users.delete');

    Route::get('shops','ShopManagementController@listshops')->name('shops.list');
    Route::get('shop/{shop}/manage','ShopManagementController@manage')->name('shop.manage');    
    Route::post('shop/update','ShopManagementController@updateshop')->name('shop.update');
    
    
    // Route::get('media','MediaManagementController@listmedia')->name('media.list');
    // Route::post('media/delete','MediaManagementController@deletemedia')->name('media.delete');
    // Route::post('media/summernote','MediaManagementController@summernote_media')->name('media.summernote');
    // Route::post('media/dropzone','MediaManagementController@dropzone_media')->name('media.dropzone');

    Route::group(['prefix'=>'post','as'=>'posts.'],function(){
        Route::get('/','BlogManagementController@list')->name('list');
        Route::get('create','BlogManagementController@create')->name('create');
        Route::get('edit','BlogManagementController@edit')->name('edit');
        Route::post('save','BlogManagementController@save')->name('save');
        Route::post('update','BlogManagementController@update')->name('update');
        Route::post('delete','BlogManagementController@delete')->name('delete');
        Route::post('status','BlogManagementController@status')->name('status');

        Route::group(['prefix'=>'comment','as'=>'comments.'],function(){
            Route::get('/','BlogManagementController@listComments')->name('list');
            Route::post('status','BlogManagementController@changeCommentStatus')->name('status');
            Route::post('delete','BlogManagementController@deleteComments')->name('delete');
        });
    });
    

    

    Route::get('settings','SettingsManagementController@settings')->name('settings');
    Route::post('settings','SettingsManagementController@savesettings')->name('settings.save');

    // Route::get('reports','ReportManagementController@analysis')->name('reports.analysis');
    // Route::post('reports/generate','ReportManagementController@generate')->name('reports.generate');
});