<?php
Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'Backend','middleware'=> 'role:admin'], function () {

    Route::get('dashboard','HomeController@dashboard')->name('dashboard');
    Route::get('profile','HomeController@profile')->name('profile');
    //product
    Route::group(['prefix'=> 'products','as'=>'items.'],function(){
        Route::get('/','ProductManagementController@list')->name('products');
       
    });
    
    
    Route::get('categories','CategoryManagementController@listcategories')->name('categories');
    Route::post('categories/save','CategoryManagementController@savecategories')->name('categories.save');
    Route::post('categories/update','CategoryManagementController@updatecategories')->name('categories.update');
    Route::post('categories/delete','CategoryManagementController@deletecategories')->name('categories.delete');

    Route::get('attributes','CategoryManagementController@listattributes')->name('attributes');
    Route::post('attributes/save','CategoryManagementController@saveattributes')->name('attributes.save');
    Route::post('attributes/update','CategoryManagementController@updateattributes')->name('attributes.update');
    Route::post('attributes/delete','CategoryManagementController@deleteattributes')->name('attributes.delete');

    Route::get('orders','OrderManagementController@listorders')->name('orders.list');
    Route::get('refunds','OrderManagementController@refunds')->name('orders.refunded');
    Route::get('orders/view','OrderManagementController@vieworder')->name('orders.view');

    Route::get('transactions','PaymentManagementController@transactions')->name('transactions');
    Route::get('withdrawals','PaymentManagementController@withdrawals')->name('withdrawals');
    Route::get('withdrawal/requests','PaymentManagementController@withdrawal_request')->name('withdrawal.request');
    Route::post('withdrawal/response','PaymentManagementController@withdrawal_response')->name('withdrawal.response');

    Route::get('coupons','CouponManagementController@list')->name('coupons.list');
    Route::get('coupons/create','CouponManagementController@create')->name('coupons.create');
    Route::post('coupons','CouponManagementController@save')->name('coupons.save');
    Route::get('coupons/edit/{coupon}','CouponManagementController@edit')->name('coupons.edit');
    Route::post('coupons/update/{coupon}','CouponManagementController@update')->name('coupons.update');

    Route::get('users','UserManagementController@listusers')->name('users.list');
    Route::get('user/edit','UserManagementController@edituser')->name('users.edit');
    Route::post('user/save','UserManagementController@saveuser')->name('users.save');

    Route::get('roles','RoleManagementController@listroles')->name('roles.list');
    Route::get('role/edit','RoleManagementController@editrole')->name('roles.edit');
    Route::post('role/save','RoleManagementController@saverole')->name('roles.save');

    Route::get('vendors','VendorManagementController@listvendors')->name('vendors.list');
    Route::get('vendor/edit','VendorManagementController@editvendor')->name('vendors.edit');
    Route::post('vendor/save','VendorManagementController@savevendor')->name('vendors.save');
    Route::get('vendor/applications','VendorManagementController@applications')->name('vendors.applications');    
    Route::get('vendor/application/view','VendorManagementController@applicationview')->name('shop.application.view');   
    
    Route::get('plans','MembershipManagementController@listplans')->name('plans.list');
    Route::get('plan/create','MembershipManagementController@createplan')->name('plans.create');
    Route::get('plan/edit','MembershipManagementController@editplan')->name('plans.edit');
    Route::post('plan/save','MembershipManagementController@saveplan')->name('plans.save');

    Route::get('features','MembershipManagementController@features')->name('features.list');

    Route::get('subscriptions','MembershipManagementController@listsubscriptions')->name('subscriptions.list');
    Route::get('subscription/create','MembershipManagementController@createsubscription')->name('subscriptions.create');
    Route::get('subscription/edit','MembershipManagementController@editsubscription')->name('subscriptions.edit');
    Route::post('subscription/save','MembershipManagementController@savesubscription')->name('subscriptions.save');

    Route::get('addons','MembershipManagementController@listaddons')->name('addons.list');
    Route::get('addons/create','MembershipManagementController@createaddon')->name('addons.create');
    Route::get('addons/edit','MembershipManagementController@editaddon')->name('addons.edit');
    Route::post('addons/save','MembershipManagementController@saveaddon')->name('addons.save');
    
    Route::get('media','MediaManagementController@listmedia')->name('media.list');
    Route::post('media/delete','MediaManagementController@deletemedia')->name('media.delete');
    Route::post('media/summernote','MediaManagementController@summernote_media')->name('media.summernote');
    Route::post('media/dropzone','MediaManagementController@dropzone_media')->name('media.dropzone');

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

    Route::get('reports','ReportManagementController@analysis')->name('reports.analysis');
    Route::post('reports/generate','ReportManagementController@generate')->name('reports.generate');
});