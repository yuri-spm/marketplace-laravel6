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
    return view('welcome');
})->name('home');

Route::group(['middleware' => ['auth']], function (){
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function (){


        Route::resource('stores', 'StoreController');
        Route::resource('products', 'ProductController');
        Route::resource('categories', 'CategoryController');

    

    });

});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
