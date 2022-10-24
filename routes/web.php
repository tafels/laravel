<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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

//Route::middleware(['prefix' => '{locale}'])->group(function (){
//    Route::get('/', 'MainController@index')->name('index');
//});

//Route::redirect('/ua', '/', 301);

//Route::middleware(['setLocale'])->group(function () {
//    Route::get('/', 'MainController@index')->name('index');
//    Route::get('/basket', 'MainController@basket')->name('basket');
//});

//Route::group(['prefix' => '{locale}', 'middleware' => 'setLocale'], function () {
//    Route::get('/', 'MainController@index')->name('index');
//    Route::get('/basket', 'MainController@basket')->withoutMiddleware('setLocale');
//
//
//});
//    Route::get('/', 'MainController@index')->name('index');
//    Route::get('/basket', 'MainController@basket')->withoutMiddleware('setLocale');
//    Route::get('/cabinet', 'HomeController@index')->name('index');
//    Route::get('/admin', 'AdminController@index')->name('index');
//    Route::get('/admin/{controller}', 'AdminController@index')->name('index');
//
//    Route::get('/order', 'MainController@order')->name('order');
//    Route::get('/categories', 'MainController@categories')->name('categories');
//    Route::get('/{category}', 'MainController@category')->name('category');
//    Route::get('/category/{product}', 'MainController@product')->name('product');
Route::group(['prefix' => '{locale}', 'middleware' => 'setLocale'], function () {

    Route::get('/', 'MainController@index')->name('index');
    Route::get('/basket', 'MainController@basket')->withoutMiddleware('setLocale');
    Route::get('/cabinet', 'HomeController@index')->name('index');
    Route::get('/admin', 'AdminController@index')->name('index');
    Route::get('/admin/{controller}', 'AdminController@index')->name('index');

    Route::get('/order', 'MainController@order')->name('order');
    Route::get('/categories', 'MainController@categories')->name('categories');
    Route::get('/{category}', 'MainController@category')->name('category');
    Route::get('/category/{product}', 'MainController@product')->name('product');


//    Auth::routes();
//
//    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


//Route::group(['prefix' => '{locale}'], function (){
//
//})->middleware('setLocale');



