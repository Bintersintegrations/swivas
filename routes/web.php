<?php

Route::get('/', function () {
    // request()->session()->put('wish',null);
    // dd(request()->session()->get('wish'));
    return view('frontend.outside.welcome2');
});

Route::get('woocommerce/products','HomeController@woocommerce');
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

Route::group(['namespace'=>"Frontend"],function(){
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

    
});

//AUTH
Auth::routes();
include('admin.php');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('profile','HomeController@profile')->name('profile');
Route::post('orphanage/charity/register','HomeController@orphanageCharity')->name('orphanage.charity');
 
//USER PAGES
Route::group(['as'=>'user.','namespace'=>'User'], function () {
    Route::get('dashboard','UserController@dashboard')->name('dashboard');
    Route::get('user/profile','UserController@profile')->name('profile');
    Route::post('user/profile','UserController@saveprofile')->name('profile');

    Route::post('user/change-password','UserController@changePassword')->name('changePassword');
    Route::post('user/change-accesspin','UserController@changeAccessPin')->name('changeAccessPin');

    Route::get('my-order','UserController@orders')->name('orders');
    Route::get('my-bids','UserController@bids')->name('bids');
    Route::get('my-giveaway-request','UserController@give_request')->name('giverequest');

    Route::group(['prefix'=> 'messages','as'=> 'messages.'],function(){
        Route::get('inbox','MessageController@inbox')->name('inbox');
        Route::get('draft','MessageController@draft')->name('draft');
        Route::get('sent','MessageController@sent')->name('sent');
        Route::post('/','MessageController@create')->name('create');
    });
    
    
});

//VENDOR PAGES
include('vendor.php');



