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

Route::get('/', function () {return view('welcome');});

/*-----user-----*/
Route::get('/top','User\TopController@index');
Route::get('/news','User\NewsController@index');
Route::get('/about','User\AboutController@index');
Route::get('/collection','User\CollectionController@index');
Route::get('/stockist','User\StockistController@index');
Route::get('/online','User\OnlineController@index');
Route::get('/sitemap','User\SitemapController@index');
/*-----user_contact-----*/
Route::get('/contact','User\ContactController@index')->name('contact.index');
Route::post('/contact/confirm','User\ContactController@confirm')->name('contact.confirm');
Route::post('/contact/thanks','User\ContactController@send')->name('contact.send');

/*-----admin-----*/

Route::get('/admin/online', 'Admin\OnlineController@index');

/*------admin_top-----*/
Route::post('admin/top', 'Admin\TopController@upload')->name('upload');
Route::get('admin/top', 'Admin\TopController@index');
/*-----admin_news-----*/
Route::resource('/admin/news','Admin\NewsController');
/*-----admin_about-----*/
Route::resource('/admin/about', 'Admin\AboutController');
/*-----admin-----*/
Route::get('/admin/collection', 'Admin\CollectionController@showCreateForm')->name('collection.create');
Route::post('/admin/collection','Admin\CollectionController@create');
Route::get('/admin/collection/{post}','Admin\CollectionController@detail')->name('collection.detail');
/*-----admin_stockist-----*/
Route::resource('/admin/stockist', 'Admin\StockistController');
/*-----admin_online-----*/
Route::resource('/admin/online', 'Admin\OnlineController');

/*-----admin_post-----*/
Route::get('/admin/post', 'PostController@index');
Route::post('admin/post', 'PostController@store');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| 1) User 認証不要
|--------------------------------------------------------------------------
*/
Route::get('/', function () { return redirect('/home'); });

/*
|--------------------------------------------------------------------------
| 2) User ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth:user'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
});

/*
|--------------------------------------------------------------------------
| 3) Admin 認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('/',         function () { return redirect('/admin/home'); });
    Route::get('login',     'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login',    'Admin\LoginController@login');
});

/*
|--------------------------------------------------------------------------
| 4) Admin ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::post('logout',   'Admin\LoginController@logout')->name('admin.logout');
    Route::get('home',      'Admin\HomeController@index')->name('admin.home');
    //Route::get('/collection', 'Admin\CollectionController@index');
    //Route::get('/online', 'Admin\OnlineController@index');

    /*------admin_top-----*/
    //Route::post('top', 'Admin\TopController@upload')->name('upload');
    //Route::get('top', 'admin\TopController@index');
    /*-----admin_news-----*/
    //Route::resource('/news','Admin\NewsController');
    /*-----admin_about-----*/
    //Route::resource('/about', 'Admin\AboutController');
    /*-----admin_stockist-----*/
    //Route::resource('stockist', 'PostController');
});
