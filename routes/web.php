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

Route::get('/', function () {
    return view('frontend.homepage.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function (){

	Route::get('/', 'AdminController@index')->name('admin.dashboard');

	Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');

	Route::get('register', 'AdminController@create')->name('admin.register');

	Route::post('register', 'AdminController@store')->name('admin.register.store');

	Route::get('login', 'Auth\Admin\LoginController@login')->name('admin.auth.login');

	Route::post('login', 'Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');

	Route::post('logout', 'Auth\Admin\LoginController@logout')->name('admin.auth.logout');

	Route::get('shop/category', 'Admin\ShopCategoryController@index');
	Route::get('shop/category/create', 'Admin\ShopCategoryController@create');
	Route::get('shop/category/{id}/edit', 'Admin\ShopCategoryController@edit');
	Route::get('shop/category/{id}/delete', 'Admin\ShopCategoryController@delete');

	Route::post('shop/category', 'Admin\ShopCategoryController@store');
	Route::post('shop/category/{id}', 'Admin\ShopCategoryController@update');
	Route::post('shop/category/{id}/destroy', 'Admin\ShopCategoryController@destroy');






	Route::get('shop/product', function(){
		return view('admin.content.shop.product.index');
	});

	Route::get('shop/order', function(){
		return view('admin.content.shop.order.index');
	});

	Route::get('shop/review', function(){
		return view('admin.content.shop.review.index');
	});

	Route::get('shop/customer', function(){
		return view('admin.content.shop.customer.index');
	});

	Route::get('shop/brand', function(){
		return view('admin.content.shop.brand.index');
	});

	Route::get('shop/statistic', function(){
		return view('admin.content.shop.statistic.index');
	});

	Route::get('shop/product/order', function(){
		return view('admin.content.shop.adminorder.index');
	});



	/**
	 * ==============Admin nội dung=============
	 */
	
	Route::get('content/category', function(){
		return view('admin.content.content.category.index');
	});

	Route::get('content/post', function(){
		return view('admin.content.content.post.index');
	});

	Route::get('content/page', function(){
		return view('admin.content.content.page.index');
	});

	Route::get('content/tag', function(){
		return view('admin.content.content.tag.index');
	});




	/**
	 * ==============Admin menu=============
	 */
	
	Route::get('menu', function(){
		return view('admin.content.menu.index');
	});

	Route::get('menuitems', function(){
		return view('admin.content.menuitems.index');
	});


	/**
	 * ==============Admin Users=============
	 */
	
	Route::get('users', function(){
		return view('admin.content.users.index');
	});


	/**
	 * ==============Admin Media=============
	 */
	
	Route::get('media', function(){
		return view('admin.content.media.index');
	});


	/**
	 * ==============Admin Config=============
	 */
	
	Route::get('config', function(){
		return view('admin.content.config.index');
	});


	/**
	 * ==============Admin New=============
	 */
	
	Route::get('new', function(){
		return view('admin.content.new.index');
	});


	/**
	 * ==============Admin Contact=============
	 */
	
	Route::get('contact', function(){
		return view('admin.content.contact.index');
	});


	/**
	 * ==============Admin Banner=============
	 */
	
	Route::get('banner', function(){
		return view('admin.content.banner.index');
	});



	/**
	 * ==============Admin Email=============
	 */
	
	Route::get('email/inbox', function(){
		return view('admin.content.email.inbox.index');
	});

	Route::get('email/draft', function(){
		return view('admin.content.email.draft.index');
	});

	Route::get('email/send', function(){
		return view('admin.content.email.send.index');
	});

});



Route::prefix('seller')->group(function (){

	Route::get('/', 'SellerController@index')->name('sellerdashboard');

	Route::get('/dashboard', 'SellerController@index')->name('seller.dashboard');

	Route::get('register', 'SellerController@create')->name('seller.register');

	Route::post('register', 'SellerController@store')->name('seller.register.store');

	Route::get('login', 'Auth\Seller\LoginController@login')->name('seller.auth.login');

	Route::post('login', 'Auth\Seller\LoginController@loginSeller')->name('seller.auth.loginSeller');

	Route::post('logout', 'Auth\Seller\LoginController@logout')->name('seller.auth.logout');
});

Route::prefix('shipper')->group(function (){

	Route::get('/', 'ShipperController@index')->name('shipperdashboard');

	Route::get('/dashboard', 'ShipperController@index')->name('shipper.dashboard');

	Route::get('register', 'ShipperController@create')->name('shipper.register');

	Route::post('register', 'ShipperController@store')->name('shipper.register.store');

	Route::get('login', 'Auth\Shipper\LoginController@login')->name('shipper.auth.login');

	Route::post('login', 'Auth\Shipper\LoginController@loginShipper')->name('shipper.auth.loginShipper');

	Route::post('logout', 'Auth\Shipper\LoginController@logout')->name('shipper.auth.logout');
});
