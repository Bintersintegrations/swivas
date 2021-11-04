<?php

Route::get('/','HomeController@index')->name('index');
Route::get('shops','Vendor\ShopController@list')->name('shop.list');

// Route::get('woocommerce/products','HomeController@woocommerce');
// Route::get('test','HomeController@test');
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

//ABOUT PAGES
Route::view('about','frontend.outside.general.about')->name('about');
Route::view('faq','frontend.outside.general.faq')->name('faq');
Route::view('contact','frontend.outside.general.contact')->name('contact');
Route::view('orphanages','frontend.outside.general.orphanages')->name('orphanages');
Route::view('charity-organizations','frontend.outside.general.charity')->name('charity');
Route::view('start-selling','frontend.outside.shop.intro')->name('sell');

Route::get('blog','BlogController@list')->name('blogroll');
Route::get('blog/post/{post}','BlogController@post')->name('blogpost');
Route::post('blog/comment','BlogController@comment')->name('blogcomment');


Route::get('products','ProductController@list')->name('products');
Route::get('product/{product}','ProductController@view')->name('product.view');
Route::post('product/add-to-cart','ProductController@addtocart')->name('product.addtocart');
Route::post('product/remove-from-cart','ProductController@removefromcart')->name('product.removefromcart');
Route::post('product/add-to-wish','ProductController@addtowish')->name('product.addtowish');
Route::post('product/remove-from-wish','ProductController@removefromwish')->name('product.removefromwish');

Route::get('cart','SalesThreadController@cart')->name('cart');
Route::get('wishlist','SalesThreadController@wishlist')->name('wishlist');
Route::post('checkout','SalesThreadController@checkout')->name('checkout');

Route::get('support','SupportThreadController@create')->name('support');
Route::post('support','SupportThreadController@save')->name('support');

    

//AUTH
Auth::routes();

Route::get('dashboards', 'HomeController@dashboards')->name('home');
Route::post('getCities','HomeController@getCities')->name('getCities');
Route::post('getStates','HomeController@getStates')->name('getStates');
Route::post('orphanage/charity/register','HomeController@orphanageCharity')->name('orphanage.charity');
 
//USER PAGES
Route::group(['as'=>'user.','middleware'=> 'role:user'], function () {
    Route::get('dashboard','UserController@index')->name('dashboard');
    Route::get('user/profile','UserController@profile')->name('profile');
    Route::post('user/profile','UserController@saveprofile')->name('profile');
    Route::get('user/addresses','UserController@address')->name('address');
    Route::post('user/addresses','UserController@manageAddress')->name('address');
    Route::get('user/change-password','UserController@password')->name('password');
    Route::post('user/change-password','UserController@changePassword')->name('changePassword');
    
    Route::get('orders','SalesController@orders')->name('orders');
    Route::get('order/details','SalesController@orderDetails')->name('order.details');
    Route::get('wishlist','SalesController@wishlist')->name('wishlist');

    // Route::get('network','')

    Route::group(['prefix'=> 'messages','as'=> 'messages.'],function(){
        Route::get('inbox','MessageController@inbox')->name('inbox');
        Route::get('draft','MessageController@draft')->name('draft');
        Route::get('sent','MessageController@sent')->name('sent');
        Route::post('/','MessageController@create')->name('create');
    });
    
    
});

//VENDOR PAGES
include('shop.php');
include('admin.php');



