<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function (){

    Route::get('/', 'StartController@index');
    Route::get('books', 'StartController@books');
    Route::get('categories', 'StartController@categories');

});

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'namespace' => 'App\Http\Controllers'], function (){
    Route::get('test', function (){
        return response()->json(['ok'], 200);
    });

    Route::get('/', 'AdminController@index');
    Route::resources(['users' => 'UserController']);
    Route::resources(['books'=> 'BookController']);

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
